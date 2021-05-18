<?php

include 'connDb.php';

$PDO = new DbConnect();
$conn = new DbControl($PDO, 'member');

$file = '../ini/hashSettings.ini';
$settings = parse_ini_file($file, true);

$data = array(
	'id' => $_POST['id'],
	'password' => hash_hmac($settings['hash']['alg'], $_POST['password'], $settings['hash']['key']),
	'name' => $_POST['name'],
	'email' => $_POST['email'],
	'ip' => ip2long($_SERVER['REMOTE_ADDR'])
);

try {
	$conn->insert($data);
	echo "<script>alert('회원가입이 완료되었습니다')</script>";
	header("refresh:0.1;url=../login.php");
} catch (PDOException $e) {
	echo $e->getMessage();
}



