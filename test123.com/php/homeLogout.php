<?php

include_once 'logout.php';
session_start();

$member_idx = intval($_SESSION['idx']);
$member_id = $_SESSION['id'];

$logout = new Logout($member_idx, $member_id);
$last_login = $logout->getLastLogin();
$logout->setMemberLogout($last_login[0]['idx']);
$logout->sessionDestroy();
echo '<script>alert("로그아웃 되었습니다")</script>';
header("refresh:0.1;url=../");

