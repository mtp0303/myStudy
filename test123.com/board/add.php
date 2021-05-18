<?php
include_once '../php/loginCheck.php';

//로그인인경우 true 아닐경우 false 반환
$login_check = loginCheck();

//회원일경우 글쓴이 = id 비회원일경우 글쓴이 입력 가능
$writer_disabled = $login_check ? "disabled" : "";

//회원일경우 회원 id 아닐경우 guest 
$user_id = getUserId();

//비회원일경우 비밀번호를 입력하는 모달 생성 
$submit_btn = $login_check ?
		'<button class="btn btn-outline-warning" type="button" id="add_board_submit">등록하기</button>' : '<button class="btn btn-outline-warning" type="button" id="add_board_pwModal" data-toggle="modal" data-target="#board_password_modal">등록하기</button>';
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
			<div  class="row justify-content-center align-items-center align-self-center" id="board_register" style="height: 80vh;">
				<form action="../php/addBoard.php" method="post" class="col-4 bg-dark rounded-lg">
					<h1 class="text-center text-light p-3">게시글 등록</h1>

					<table class="table table-dark table-hover">
						<tr>
							<td>제목</td>
							<td><input class="form-control" name="title" id="add_board_title"></td>
						</tr>
						<tr>
							<td>글쓴이</td>
							<td><input class="form-control" name="writer" id="add_board_writer" value="<?= $user_id ?>" <?= $writer_disabled ?>></td>
						</tr>
						<tr>
							<td>내용</td>
							<td><textarea class="form-control" id="add_board_text" name="content" style="height: 300px;"></textarea></td>
						</tr>
					</table>

					<div class="row justify-content-end" style="padding-bottom: 15px;">
							<?= $submit_btn ?>
						<button class="btn btn-outline-danger" type="button" id="cencle" style="margin: 0px 15px;">취소하기</button>
					</div>
					<div class="modal fade" id="board_password_modal" tabindex="-1" aria-labelledby="board_password_modal" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<p class="text-center">비회원일 경우 게시글 비밀번호를 입력하셔야합니다</p>
									<input type="password" class="form-control text-center text-center" id="add_board_password" name="password" placeholder="게시글 비밀번호 입력" required>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-primary" id="add_board_guset_submit" data-dismiss="modal">확인</button>
									<button type="button" class="btn btn-danger" data-dismiss="modal">취소</button>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>

			<!--footer-->
			<?php include '../static/footer.php'; ?>
		</div>

		<!--script-->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
		<script src="../js/boardAdd.js"></script>
	</body>
</html>


