<?php

include_once 'connDb.php';
session_start();

$PDO = new DbConnect(); //db연결
$conn = new Dbcontrol($PDO, 'board'); // PDOstatement
//insert 할 데이터 정의
$data = array(
	"title" => htmlspecialchars($_POST['title']),
	"content" => htmlspecialchars($_POST['content']),
	"member_idx" => empty($_SESSION['idx']) ? null : $_SESSION['idx'],
	"writer" => htmlspecialchars($_POST['writer']),
	"password" => passwordCheck()
);

//회원 비밀번호 가져오기 (회원일경우 게시글 비밀번호를 회원비밀번호로 넣기 위해서)
function getMemberPassword() {
	include_once 'connDb.php';
	$PDO = $GLOBALS['PDO'];
	$conn = new DbControl($PDO, 'member');
	$resutl = $conn->findOnce('idx', $_SESSION['idx']);
	return $resutl['password'];
}

//입력한 비밀번호가 있을경우(비회원일경우) password hash화 후 return
function passwordCheck() {
	$file = '../ini/hashSettings.ini';
	$settings = parse_ini_file($file, true);
	$pw = empty($_POST['board_password']) ? getMemberPassword() : hash_hmac($settings['hash']['alg'], $_POST['board_password'], $settings['hash']['key']);
	return $pw;
}

//insert 실행
try {
	$conn->insert($data);
	echo "게시글이 등록되었습니다";
} catch (PDOException $e) {
	echo $e->getMessage();
}

