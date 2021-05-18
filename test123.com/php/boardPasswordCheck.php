<?php

function makeHashPassword($check_pw) {
	$file = '../ini/hashSettings.ini';
	$settings = parse_ini_file($file, true);
	return hash_hmac($settings['hash']['alg'], $check_pw, $settings['hash']['key']);
}

function getBoardPassword() {
	include 'connDb.php';
	$PDO = new DbConnect();
	$stmt = new DbControl($PDO, 'board');
	$result = $stmt->findOnce('idx', $_POST['idx']);
	return $result['password'];
}

function checkPassword($pw1, $pw2) {
	return hash_equals($pw1, $pw2);
}

$pw1 = getBoardPassword();
$pw2 = makeHashPassword($_POST['password']);

echo checkPassword($pw1, $pw2);
