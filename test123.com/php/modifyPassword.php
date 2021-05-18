<?php

include_once 'connDb.php';
include 'logout.php';
session_start();

$file = "../ini/hashSettings.ini";
$settings = parse_ini_file($file, true);

$current_pw = hash_hmac($settings['hash']['alg'], $_POST['current_password'], $settings['hash']['key']);
$new_pw = hash_hmac($settings['hash']['alg'], $_POST['new_password'], $settings['hash']['key']);
$new_pw_check = hash_hmac($settings['hash']['alg'], $_POST['new_password_check'], $settings['hash']['key']);

function getMemberData() {
	include_once 'connDb.php';
	$PDO = new DbConnect();
	$conn = new DbControl($PDO, 'member');
	return $member_data = $conn->findOnce('id', $_SESSION['id']);
}

function passwordCheck($pw1, $pw2) {
	return hash_equals($pw1, $pw2);
}

$logout = new Logout($_SESSION['idx']);

function modifyPassword($pw) {
	include_once 'connDb.php';
	$PDO = new DbConnect();
	$conn = new DbControl($PDO, 'member');

	$data = array(
		'idx' => $_SESSION['idx'],
		'password' => $pw
	);

	$conn->modifiy($data);
}

function getLastLogin($id) {
	$PDO = new DbConnect();
	$conn = new DbControl($PDO, 'member');

	$result = $conn->findIdx('id', $id);
	rsort($result);

	return $result;
}

if (!passwordCheck(getMemberData()['password'], $current_pw)) {
	echo '0';
} else {
	if (!passwordCheck($new_pw, $new_pw_check)) {
		echo '1';
	} else {
		modifyPassword($new_pw);
		$last_login = $logout->getLastLogin()[0]['idx'];
		$logout->setMemberLogout(intval($last_login));
		$logout->sessionDestroy();
		echo '2';
	}
}

