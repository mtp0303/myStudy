<?php
include_once '../php/board.php';
include_once '../php/loginCheck.php';
$board = new Board();
$login_check = getUserIdx();
$board_detail = $board->getBoardDetail($_GET['idx']);
$board_view = $board->countView($_GET['idx']);
$board_detail['member_idx'] === $login_check ?: $board->insertView($_GET['idx']);
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
			<div class="row justify-content-center" id="board_content" style="height: 90vh;">
				<div class="col-6 align-self-center bg-dark rounded-lg" id="board_box">
					<div id="board_header">

						<!--board idx-->
						<p class="small text-light" id="board_content_idx"><?= "No." . $board_detail['idx'] ?></p>

						<!--board title-->
						<h3 class="text-light p-5" id="board_content_title"><?= $board_detail['title'] ?></h3>
					</div>
					<hr class="border-light">
					<div  class="row" id="board_header_sub">

						<!--board writer-->
						<div class="col align-self-center text-light small" id="board_content_writer"><?= "작성자: " . $board_detail['writer'] ?></div>

						<!--board view-->
						<div class="col align-self-center text-light small text-right" id="board_content_view"><?= "조회수: " . $board_view ?></div>
					</div>
					<hr class="border-light">

					<!--board content-->
					<div id="board_content">
						<p class="text-light" id="board_content_content"><?= $board_detail['content'] ?></p>
					</div>
					<hr class="border-light">
					<div class="row" id="board_footer">
						<div class="col text-right">
							<a class="btn btn-warning " type="button" id="board_content_modified" data-toggle="modal" data-target="#board_password_modal">수정</a>
							<a class="btn btn-light" href="/board?page=1/" id="list">목록</a>
							<button class="btn btn-danger" type="button" id="board_delete" data-toggle="modal" data-target="#board_delect_password_check_modal">게시글 삭제</button>
						</div>
					</div>
				</div>
				<div class="w-100 d-none d-md-block">
					<div class="col text-center">
						<button class="btn btn-primary" id="board_content_back_page">이전글</button>
						<button class="btn btn-primary" id="board_content_next_page">다음글</button>
					</div>
				</div>
			</div>
			<div class="modal fade" id="board_password_modal" tabindex="-1" aria-labelledby="board_delete_password" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form>
							<div class="modal-body">
								<p class="text-center">게시글 비밀번호를 입력해주세요<br>회원일 경우 회원 비밀번호를, <br>비회원일경우 게시글 비밀번호를 입력하세요</p>
								<input type="password" class="form-control text-center" id="board_check_password" name="password" placeholder="비밀번호 입력" required>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-primary" id="board_password_submit">확인</button>
								<button type="button" class="btn btn-danger" data-dismiss="modal">취소</button>
							</div>
						</form>
					</div>
				</div>
			</div>

			<div class="modal fade" id="board_delect_password_check_modal" tabindex="-1" aria-labelledby="board_delete_password" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form>
							<div class="modal-body">
								<p class="text-center">게시글 비밀번호를 입력해주세요<br>회원일 경우 회원 비밀번호를, <br>비회원일경우 게시글 비밀번호를 입력하세요</p>
								<input type="password" class="form-control text-center" id="board_delete_check_password" name="password" placeholder="비밀번호 입력" required>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-primary" data-dismiss="modal" id="board_delect_password_submit">확인</button>
								<button type="button" class="btn btn-danger" data-dismiss="modal">취소</button>
							</div>
						</form>
					</div>
				</div>
			</div>

			<!--footer-->
			<?php include '../static/footer.php'; ?>
		</div>

		<!--script-->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
		<script src="../js/boardDetail.js"></script>
	</script>
</body>
</html>


