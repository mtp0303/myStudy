<?php

include 'connDb.php';

$file = '../ini/hashSettings.ini';
$settings = parse_ini_file($file, true);

$board_check_pw = hash_hmac($settings['hash']['alg'], $_POST['password'], $settings['hash']['key']);
$board_pw = getBoardPassword();
$board_idx = $_POST['idx'];

function boardPasswordCheck($board_pw, $board_delete_pw) {
	return hash_equals($board_pw, $board_delete_pw);
}

function getBoardPassword() {
	$PDO = new DbConnect();
	$stmt = new DbControl($PDO, 'board');
	$result = $stmt->findOnce('idx', $_POST['idx']);

	return $result['password'];
}

if (boardPasswordCheck($board_pw, $board_check_pw)) {
	$PDO = new DbConnect();
	$conn = new DbControl($PDO, 'board');

	$conn->delete('idx', $board_idx);
	echo "true";
} else {
	echo "false";
}
