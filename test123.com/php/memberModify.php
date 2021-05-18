<?php

include 'privacyModify.php';
include 'logout.php';
session_start();

$modify = new PrivacyModify($_SESSION['idx']);
$pw_check = $modify->passwordCheck($_POST['password']);
$logout = new Logout($_SESSION['idx']);

$data = array(
	'idx' => $_SESSION['idx'],
	'name' => $_POST['name'],
	'email' => $_POST['email']
);

if (!$pw_check) {
	echo "<script>alert('비밀번호가 맞지 않습니다')</script>";
	header("refresh:0.1;url=/modifyPrivacy/");
} else {
	echo "<script>alert('정보가 변경되었습니다 다시 로그인 하세요')</script>";
	$modify->memberDataModify($data);
	$logout->setMemberLogout($_SESSION['idx']);
	$logout->sessionDestroy();
	header("refresh:0.1;url=/login.php");
}




