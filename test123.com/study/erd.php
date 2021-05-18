<?php
include '../php/loginCheck.php';
authorityCheck();
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
		<link rel="stylesheet" href="./css/home.css">
		<link rel="stylesheet" href="./css/board.css">
		<link rel="stylesheet" href="./css/boardContent.css">
		<title>Home</title>
	</head>
	<body onload="printClock()">
		<div class="container-fluid overflow-hidden" id="first_page" style="padding: 0px 0px;">
			<img src="../images/bg_img.png" class="position-absolute" style="height: 100vh; width: 100%;">

			<!--nav-->            
			<?php include '../static/nav.php'; ?>

			<!--컨텐츠-->
			<div class="row justify-content-center align-items-center navbar-light bg-light" id="board_table" style="height: 80vh;">
				<div class="col-8 align-self-center overflow-auto" style="height: 700px; ">
					<nav>
						<div class="nav nav-tabs" id="nav-tab" role="tablist">
							<a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav_ERD" role="tab" aria-controls="nav-home" aria-selected="true">ERD</a>
						</div>
					</nav>
					<div class="tab-content bg-light" id="nav-tabContent">


						<!--ERD-->
						<div class="tab-pane fade show active p-5" id="nav_ERD" role="tabpanel" aria-labelledby="nav-home-tab" >
							<h1>ERD</h1>
							<hr class="border-dark">
							<div class="text-center">
								<img src="../images/ERD.png" class="rounded" alt="DevTool">
							</div>
							<br>
							<table class="table table-bordered">
								<h5>member</h5>
								<tr>
									<th style="width: 15%">Column Name</th>
									<th style="width: 15%">Data type</th>
									<th style="width: 30%">Constraint</th>
									<th style="width: 40%">Comment</th>
								</tr>
								<tr>
									<td>idx</td>
									<td>INT(10)</td>
									<td>PRIMARY KEY, AUTO_INCREMENT, UNSIGNED</td>
									<td>고유번호</td>
								</tr>
								<tr>
									<td>password</td>
									<td>CHAR(64)</td>
									<td></td>
									<td>sha256 으로 hash 되어 64byte 길이의 값이 고정으로 들어온다</td>
								</tr>
								<tr>
									<td>name</td>
									<td>VARCHAR(15)</td>
									<td></td>
									<td>사용자 이름</td>
								</tr>
								<tr>
									<td>email</td>
									<td>VARCHAR(30)</td>
									<td></td>
									<td>사용자 이메일</td>
								</tr>
								<tr>
									<td>ip</td>
									<td>INT(4)</td>
									<td>UNSIGNED</td>
									<td>ip 최대값(255.255.255.255) INT로 변환했을경우 최대 INT(4)(4294967295)</td>
								</tr>
								<tr>
									<td>date_insert</td>
									<td>TIMESTAMP</td>
									<td>DEFAULT CURRENT_TIMESTAMP</td>
									<td>데이터 입력된 시간</td>
								</tr>
							</table>
							<br>
							<table class="table table-bordered">
								<h5>member_login</h5>
								<tr>
									<th style="width: 15%">Column Name</th>
									<th style="width: 15%">Data type</th>
									<th style="width: 30%">Constraint</th>
									<th style="width: 40%">Comment</th>
								</tr>
								<tr>
									<td>idx</td>
									<td>INT(10)</td>
									<td>PRIMARY KEY, AUTO_INCREMENT, UNSIGNED</td>
									<td>고유번호</td>
								</tr>
								<tr>
									<td>member_idx</td>
									<td>INT(10)</td>
									<td>FOREIGN KEY REFERENCES member(idx)</td>
									<td>member의 idx 를 참조함</td>
								</tr>
								<tr>
									<td>session</td>
									<td>VARCHAR(128)</td>
									<td></td>
									<td>session id<br>1~128 까지의 가변된 길이의 byte로 값이 들어온다</td>
								</tr>
								<tr>
									<td>ip</td>
									<td>INT(4)</td>
									<td>UNSIGNED</td>
									<td>ip 최대값(255.255.255.255) INT로 변환했을경우 최대 INT(4)(4294967295)</td>
								</tr>
								<tr>
									<td>date_insert</td>
									<td>TIMESTAMP</td>
									<td>DEFAULT CURRENT_TIMESTAMP</td>
									<td>데이터 입력된 시간</td>
								</tr>
							</table>
							<br>
							<table class="table table-bordered">
								<h5>member_logout</h5>
								<tr>
									<th style="width: 15%">Column Name</th>
									<th style="width: 15%">Data type</th>
									<th style="width: 30%">Constraint</th>
									<th style="width: 40%">Comment</th>
								</tr>
								<tr>
									<td>idx</td>
									<td>INT(10)</td>
									<td>PRIMARY KEY, AUTO_INCREMENT, UNSIGNED</td>
									<td>고유번호</td>
								</tr>
								<tr>
									<td>title</td>
									<td>VARCHAR(100)</td>
									<td></td>
									<td>게시글 제목</td>
								</tr>
								<tr>
									<td>content</td>
									<td>VARCHAR(1000)</td>
									<td></td>
									<td>게시글 내용</td>
								</tr>
								<tr>
									<td>member_idx</td>
									<td>INT(10)</td>
									<td>FOREIGN KEY REFERENCES member(idx)</td>
									<td>member 테이블의 idx 참조</td>
								</tr>
								<tr>
									<td>date_insert</td>
									<td>TIMESTAMP</td>
									<td>DEFAULT CURRENT_TIMESTAMP</td>
									<td>데이터 입력된 시간</td>
								</tr>
							</table>
							<br>
							<table class="table table-bordered">
								<h5>board</h5>
								<tr>
									<th style="width: 15%">Column Name</th>
									<th style="width: 15%">Data type</th>
									<th style="width: 30%">Constraint</th>
									<th style="width: 40%">Comment</th>
								</tr>
								<tr>
									<td>idx</td>
									<td>INT(10)</td>
									<td>PRIMARY KEY, AUTO_INCREMENT, UNSIGNED</td>
									<td>고유번호</td>
								</tr>
								<tr>
									<td>member_login_idx</td>
									<td>INT(11)</td>
									<td>FOREIGN KEY REFERENCES member_login(idx)</td>
									<td>member_login의 idx 값 참조</td>
								</tr>
								<tr>
									<td>member_idx</td>
									<td>INT(11)</td>
									<td>FOREIGN KEY REFERENCES member(idx)</td>
									<td>member의 idx 값 참조</td>
								</tr>
								<tr>
									<td>writer</td>
									<td>VARCHAR(15)</td>
									<td></td>
									<td>글쓴이</td>
								</tr>
								<tr>
									<td>password</td>
									<td>CHAR(64)</td>
									<td></td>
									<td>게시판 비밀번호</td>
								</tr>
								<tr>
									<td>date_insert</td>
									<td>TIMESTAMP</td>
									<td>DEFAULT CURRENT_TIMESTAMP</td>
									<td>데이터 입력된 시간</td>
								</tr>
							</table>
							<br>
							</table>
							<table class="table table-bordered">
								<h5>view</h5>
								<tr>
									<th style="width: 15%">Column Name</th>
									<th style="width: 15%">Data type</th>
									<th style="width: 30%">Constraint</th>
									<th style="width: 40%">Comment</th>
								</tr>
								<tr>
									<td>idx</td>
									<td>INT(10)</td>
									<td>PRIMARY KEY, AUTO_INCREMENT, UNSIGNED</td>
									<td>고유번호</td>
								</tr>
								<tr>
									<td>board_idx</td>
									<td>INT(10) UNSIGNED</td>
									<td>FOREIGN KEY(idx) REFERENCES board(idx) on delete cascade</td>
									<td>board 테이블 참조,<br>참조된 board 데이터가 지워질시 같이 삭제</td>
								</tr>
								<tr>
									<td>ip</td>
									<td>INT(4)</td>
									<td>UNSIGNED</td>
									<td>ip 최대값(255.255.255.255) INT로 변환했을경우 최대 INT(4)(4294967295)</td>
								</tr>
								<tr>
									<td>date_insert</td>
									<td>TIMESTAMP</td>
									<td>DEFAULT CURRENT_TIMESTAMP</td>
									<td>데이터 입력된 시간</td>
								</tr>
							</table>
						</div>

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
		<script src="./js/index.js"></script>
	</body>
</html>








