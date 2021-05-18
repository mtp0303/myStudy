<?php
include '../php/privacyModify.php';
include '../php/loginCheck.php';

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
				<form class="col-4 bg-dark rounded-lg" action="/php/memberModify.php" method="post">
					<h1 class="text-center text-light p-3">개인 정보 수정</h1>

					<table class="table table-dark table-hover">
						<tr>
							<td>Id</td>
							<td><input class="form-control" name="id" id="privacy_id" disabled value="<?= $member_data['id'] ?>"></td>
						</tr>
						<tr>
							<td>Password</td>
							<td><div class="d-flex justify-content-between"><span>**********</span><a class="btn btn-sm btn-warning" href="/modifyPrivacy/password.php" id="modify_password">비밀번호 변경</a></div></td>
						</tr>
						<tr>
							<td>Name</td>
							<td><input class="form-control" name="name" type="text" id="privacy_name" value="<?= $member_data['name'] ?>"></td>
						</tr>
						<tr>
							<td>Email</td>
							<td><input class="form-control" name="email" type="email" id="privacy_email" value="<?= $member_data['email'] ?>"></td>
						</tr>
					</table>
					<div class="row justify-content-center" style="padding-bottom: 15px;">
						<button class="btn btn-warning m-2" type="button" id="privacy_modify_btn" data-toggle="modal" data-target="#privacy_modify_modal">수정하기</button>
						<a class="btn btn-danger m-2" href="/">취소하기</a>
					</div>

					<div class="modal fade" id="privacy_modify_modal" tabindex="-1" aria-labelledby="privacy_modify_password_modal" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<p class="text-center">본인 확인을 위해 비밀번호를 입력해 주세요</p>
									<input type="password" class="form-control text-center" id="modify_check_password" name="password" placeholder="비밀번호 입력" required>
								</div>
								<div class="modal-footer">
									<button class="btn btn-primary" type="submit" id="modifyPrivacy_submit" >확인</button>
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
	</body>
</html>


