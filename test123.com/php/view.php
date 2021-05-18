<?php

include_once 'connDb.php';
session_start();

$board_idx = $_GET['board_idx'];
$member_idx = $_GET['member_idx'];

$PDO = new DbConnect();
$conn = new DbControl($PDO, 'view');

$data = array(
	'board_idx' => $board_idx,
	'ip' => ip2long($_SERVER['REMOTE_ADDR'])
);

if (isset($_SESSION['idx'])) {
	$_SESSION['idx'] === $member_idx ?: $conn->insert($data);
} else {
	$conn->insert($data);
}



