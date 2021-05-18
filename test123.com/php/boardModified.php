<?php

include 'connDb.php';

$PDO = new DbConnect();
$conn = new DbControl($PDO, 'board');

$data = array(
	'idx' => $_POST['idx'],
	'title' => htmlspecialchars($_POST['title']),
	'writer' => htmlspecialchars($_POST['writer']),
	'content' => htmlspecialchars($_POST['content'])
);

try {
	$conn->modifiy($data);
	echo '수정되었습니다';
} catch (PDOException $e) {
	echo $e->getMessage();
}




