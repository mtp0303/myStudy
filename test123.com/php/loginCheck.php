<?php

session_start();

function loginCheck() {
	$login_check = empty($_SESSION['id']) ? false : true;
	return $login_check;
}

function getUserId() {
	$user_id = $GLOBALS['login_check'] ? $_SESSION['id'] : "guest";
	return $user_id;
}

function getUserIdx() {
	$user_idx = empty($_SESSION['idx']) ?: $_SESSION['idx'];
	return $user_idx;
}

function authorityCheck() {
	if (empty($_SESSION['id'])) {
		echo "<script>alert('로그인이 필요한 페이지 입니다')</script>";
		echo "<script>window.location.href = '../login.php'</script>";
		exit;
	}
}
