<?php

include 'connDb.php';
session_start();

//password hash 에 필요한 소스를 가져온다
$file = '../ini/hashSettings.ini';
$settings = parse_ini_file($file, true);

//변수값 설정
$member_id = $_POST['id'];
$member_pw = hash_hmac($settings['hash']['alg'], $_POST['password'], $settings['hash']['key']);

//입력한 멤버 데이터 불러오기
$PDO = new DbConnect();
$conn = new DbControl($PDO, 'member');
$data = array(
	'id' => $member_id
);
$member_data = $conn->findOnce('id', $member_id);

//session 셋팅
function setSession($member_idx, $member_id) {
	$_SESSION['idx'] = $member_idx;
	$_SESSION['id'] = $member_id;
}

//로그인 기록 데이터 넣기
function setMemberLogin($member_idx) {
	$data = array(
		"member_idx" => $member_idx,
		"session" => session_id(),
		"ip" => ip2long($_SERVER['REMOTE_ADDR'])
	);

	$PDO = new DbConnect();
	$conn = new DbControl($PDO, 'member_login');

	$conn->insert($data);
}

//로그인 유효성 검사
if (!$member_data) {
	echo '<script>alert("일치하는 정보가 없습니다")</script>';
	header('refresh:0.1;url=../login.php');
} else {
	if (!hash_equals($member_data['password'], $member_pw)) {
		echo '<script>alert("비밀번호가 일치하지 않습니다")</script>';
		header('refresh:0.1;url=../login.php');
	} else {
		setSession($member_data['idx'], $member_data['id']);
		setMemberLogin($member_data['idx']);
		header('location: ../');
	}
}

