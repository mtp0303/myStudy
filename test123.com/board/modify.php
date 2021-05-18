<?php
include '../php/loginCheck.php';
include '../php/board.php';

$login_check = loginCheck();
$board = new Board();
$board_detail = $board->getBoardDetail($_GET['idx']);

//비회원인 경우에만 글쓴이 수정 가능
$writer_disabled = $login_check ? "disabled" : "";
?>

<!doctype html>
<html>
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
		<!--css-->
		<link rel="stylesheet" href="../css/home.css">
		<link rel="stylesheet" href="../css/board.css">
		<link rel="stylesheet" href="../css/boardContent.css">
		<title>Home</title>
	</head>
	<body>
		<div class="container-fluid overflow-hidden" id="first_page" style="padding: 0px 0px;">
			<img src="../images/bg_img.png" class="position-absolute" style="height: 100vh; width: 100%;">

			<!--nav-->            
			<?php include '../static/nav.php'; ?>

			<!--컨텐츠-->
			<div class="row justify-content-center" id="board_content" style="height: 80vh;">
				<div class="col-6 align-self-center bg-dark rounded-lg" id="board_box">
					<form>
						<!--idx-->
						<p class="small text-light" id="board_modified_board_no"><?= "No." . $board_detail['idx'] ?></p>

						<!--title-->
						<div class="form-group">
							<label class="text-light" for="board_modified_title">Title</label>
							<input class="form-control" type="text" id="board_modified_title" value="<?= $board_detail['title'] ?>">
							<div class="invalid-feedback" id="modified_feedback_title">제목을 입력하세요</div>
						</div>

						<!--writer-->
						<hr class="border-light">
						<div class="form-group">
							<label class="text-light" for="board_content_writer">Writer</label>
							<input class="form-control" type="text" id="board_modified_writer" value="<?= $board_detail['writer'] ?>" <?= $writer_disabled ?>>
							<div class="invalid-feedback" id="modified_feedback_writer">작성자를 입력하세요</div>
						</div>

						<!--content-->
						<hr class="border-light">
						<div class="form-group">
							<label class="text-light" for="board_modified_content">content</label>
							<pre>
<textarea class="form-control" id="board_modified_content" rows="10"><?= $board_detail['content'] ?></textarea>
							</pre>
						</div>
						<hr class="border-light">
						<div class="row" id="board_footer">
							<div class="col text-right text-center">
								<button class="btn btn-warning" id="board_content_modified" type="button">수정하기</button>
								<button class="btn btn-danger" id="board_content_cencle" type="button">취소하기</button>
							</div>
						</div>
					</form>
				</div>
			</div>

			<!--footer-->
			<?php include '../static/footer.php'; ?>
		</div>

		<!--script-->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
		<script>
			$(document).ready(function () {
				$("#board_content_cencle").click(function () {
					window.history.back();
				})
			})
		</script>
		<script src="../js/boardModified.js"></script>
	</body>
</html>
