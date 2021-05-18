<?php
include './php/loginCheck.php';
$login_check = loginCheck();
!$login_check ?: header("location: ./");
?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!--css-->
		<link rel="stylesheet" href="./css/index.css">
		<!--<link rel="stylesheet" href="./bootstrap/css/bootstrap.css">-->
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

		<title>login</title>
	</head>
	<body class="" style="background-color: #59441C">
		<!--sign in-->
		<div class="container-fluid">
			<div class="row align-items-center justify-content-center" style="height: 100vh;">
				<form action="./php/signIn.php" method="post" class="col-md-3 border-secondary rounded-lg " style="background-color: #F2B84B">
					<div class="form-group login_group">
						<img class="rounded" src="./images/coffee-cup.svg" id="sign_in_img" alt="coffee">
						<h1>Sign in</h1>
						<div class="form-row justify-content-center">
							<input type="text" class="form-control-sm" name="id" id="id" placeholder="ID" required>
						</div>
						<div class="form-row justify-content-center">
							<input type="password" class="form-control-sm" name="password" id="password" placeholder="Password" required>
						</div>

						<div class="w-100">
							<button class="btn btn-primary" type="submit" id="signin_submit">sign in</button>
							<p>회원이 아니라면 <a class="" data-toggle="modal" data-target="#registerModalCenter" href="#">여기</a>를 누르세요.
							<p><a href="#">비밀번호를 잃어버리셨나요?</a>
						</div>
					</div>
				</form>
			</div>
		</div>

		<!--modal-->
		<!--register-->
		<div class="modal fade" id="registerModalCenter" tabindex="-1" role="dialog" aria-labelledby="registerModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="registerModalLongTitle">Register</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<sp class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form class="needs-validation" action="./php/register.php" method="post" novalidate>
										<div class="form-group" id="register_form">

											<div class="form-row justify-content-center">
												<div class="input-group mb-3 col-8">
													<div class="input-group-prepend">
														<span class="input-group-text" id="inputGroup-sizing-sm">
															<a href="#" data-toggle="tooltip" title="3~15글자 이내로 입력<br>영소문자 또는 숫자만 입력 가능합니다">
																<img src="./images/id.svg">
															</a>
														</span>
													</div>
													<input type="text" class="form-control" id="register_id" name="id" placeholder="Id" pattern="^[a-z0-9]{3,15}" required>
												</div>
											</div>

											<div class="form-row justify-content-center">
												<div class="input-group mb-3 col-8">
													<div class="input-group-prepend">
														<span class="input-group-text" id="inputGroup-sizing-sm">
															<a href="#" data-toggle="tooltip" title="최소8~15자리 이내로 입력<br>한글과 한자를 제외한<br>모든 문자가 1이상 포함되어야 합니다<br>(영어 소문자, 대문자, 숫자)" >
																<img src="./images/password.svg">
															</a>
														</span>
													</div>
													<input type="password" class="form-control" id="register_password" name="password" placeholder="password" required> <!--pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,15}" -->
												</div>
											</div>

											<div class="form-row justify-content-center">
												<div class="input-group mb-3 col-8">
													<div class="input-group-prepend">
														<span class="input-group-text" id="inputGroup-sizing-sm">
															<a href="#" data-toggle="tooltip" title="위의 입력내용과 동일해야 합니다">
																<img src="./images/password.svg">
															</a>
														</span>
													</div>
													<input type="password" class="form-control" id="register_password_check" placeholder="password check" required> <!--pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,15}" -->
												</div>
											</div>

											<div class="form-row justify-content-center">
												<div class="input-group mb-3 col-8">
													<div class="input-group-prepend">
														<span class="input-group-text" id="inputGroup-sizing-sm">
															<a href="#" data-toggle="tooltip" title="이름을 입력하세요">
																<img src="./images/username.svg">
															</a>
														</span>
													</div>
													<input type="text" class="form-control" id="register_name" name="name" placeholder="name" pattern="[\w\W]{1,10}" required>
												</div>
											</div>

											<div class="form-row justify-content-center">
												<div class="input-group mb-3 col-8">
													<div class="input-group-prepend">
														<span class="input-group-text" id="inputGroup-sizing-sm">
															<a href="#" data-toggle="tooltip" title="email을 입력하세요">
																<img src="./images/email.svg">
															</a>
														</span>
													</div>
													<input type="email" class="form-control" id="register_email" name="email" placeholder="email" required>
												</div>
											</div>

										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											<button type="submit" class="btn btn-primary" id="submit">submit</button>
										</div>
									</form>
								</div>
								</div>
								</div>
								</div>   
								</body>
								</html>
								<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
								<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

								Ï<script src="./js/login.js"></script>
