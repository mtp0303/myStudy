<?php
include '../php/privacyModify.php';
include_once '../php/loginCheck.php';

$privacy_modify = new PrivacyModify(getUserIdx());
$member_data = $privacy_modify->getMemberData();
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
		<title>Home</title>
	</head>
	<body>
		<div class="container-fluid overflow-hidden" id="first_page" style="padding: 0px 0px;">
			<img src="../images/bg_img.png" class="position-absolute" style="height: 100vh; width: 100%;">
			<!--nav-->            
			<?php include '../static/nav.php'; ?>
			<!--컨텐츠-->
			<div  class="row justify-content-center align-items-center align-self-center" id="board_register" style="height: 80vh;">
				<form class="col-4 bg-dark rounded-lg">
					<h1 class="text-center text-light p-3">비밀번호 변경</h1>
					<table class="table table-dark table-hover">
						<tr>
							<td>현재 비밀번호</td>
							<td><input class="form-control" type="password" name="current_password" id="current_password"></td>
						</tr>
						<tr>
							<td>새 비밀번호</td>
							<td><input class="form-control" type="password" name="new_password" id="new_password"></td>
						</tr>
						<tr>
							<td>새 비밀번호 확인</td>
							<td><input class="form-control" type="password" name="new_password_check" id="new_password_check"></td>
						</tr>
					</table>
					<div class="row justify-content-center" style="padding-bottom: 15px;">
						<button class="btn btn-warning m-2" type="button" id="modify_password_submit">수정하기</button>
						<a class="btn btn-danger m-2" href="/modifyPrivacy/" id="modify_password_cencle">취소하기</a>
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
		<script src="../js/modifyPassword.js"></script>
	</body>
</html>


