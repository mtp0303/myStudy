<?php
include '../php/loginCheck.php';
authorityCheck(); //회원만 접근 가능
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
							<a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav_PHP" role="tab" aria-controls="nav-home" aria-selected="true">PHP</a>
							<a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav_MySQL" role="tab" aria-controls="nav-profile" aria-selected="false">MySQL</a>
						</div>
					</nav>
					<div class="tab-content bg-light" id="nav-tabContent">

						<!--PHP-->
						<div class="tab-pane fade show active p-5" id="nav_PHP" role="tabpanel" aria-labelledby="nav-home-tab" >
							<h1>PHP</h1>
							<hr class="border-dark">
							<h5>PHP 란?</h5>
							<p>PHP(Hypertext Preprocessor)는 웹 응용 프로그램과 동적 웹 사이트를 구축하는 데 	사용되는 오픈 소스 서버 측 스크립팅 언어이다. 원래는 동적 웹 페이지를 만들기 위해 	설계되었으며 이를 구현하기 위해 PHP로 작성된 코드를 HTML소스 문서 안에 넣으면 PHP 	처리 기능이 있는 웹 서버에서 해당 코드를 인식하여 작성자가 원하는 웹 페이지를 	생성한다. 근래에는 PHP 코드와 HTML을 별도 파일로 분리하여 작성하는 경우가 	일반적이며, PHP 또한 웹서버가 아닌 php-fpm(PHP FastCGI Process Manager)을 	통해 실행하는 경우가 늘어나고 있다.</p>
							<div class="text-center">
								<img src="../images/PHP.png" class="rounded" alt="HTML" width="300px" height="200px">
							</div>
							<br>
							<h5>PHP 특징</h5>
							<hr class="border-dark">
							<ul>
								<li>데이터베이스 연동을 편리하게 할 수 있다.</li>
								<li>거의 모든 운영 체제에 구현이 가능하다.</li>
								<li>코드 작성이 쉽고 문법이 간단하다.</li>
								<li>처리 속도가 빠르다</li>
								<li>거의 모든 OS에서 실행되며, 여러가지 DBMS연결을 지원한다.</li>
								<li>이미지를 동적으로 생성할 수 있다.</li>
								<li>클래스 생성 및 상속이 가능하여 코드를 모듈화 시키기에 용이하다.</li>
							</ul>
							<br>
							<h5>참조사이트</h5>
							<hr class="border-dark">
							<div class="jumbotron">
								<p>본문:<a href="https://www.php.net/">https://www.php.net/</a></p>
								<p>w3schools:<a href="https://www.w3schools.com/php/default.asp">https://www.w3schools.com/php/default.asp</a></p>
							</div>
							<br>
							<h5>코드 컨벤션</h5>
							<hr class="border-dark">
							<p>코드 컨벤션이란?</p>
							<p>나 외에 다른 사람들도 내가 작성한 코드를 보고 쉽고 빠르게 이해할 수 있도록 하기 위한 코딩을 하는 프로그래머들 사이의 규칙</p>
							<div class="jumbotron">
								<a href="./download/codeConventions.pdf" download="codeConventions.pdf">다운로드 링크</a>
							</div>
							<br>
							<h5>Mordern PHP</h5>
							<hr class="border-dark">
							<p>Mordern + PHP</p>
							<p>Modern 이란 '현대적’이라는 뜻으로 개발자들 사이에서는 최신 버전의 언어가 제공하는 새로운 기능들과, 기법을 활용하고 이에 기반한 도구들을 사용하여 더 쉽고 편하게 유지보수 	및 분업을 하여 더욱 안전한 애플리케이션을 만들자는 약속이다.</p>
							<p class="text-center">참고자료</p> 
							<div class="jumbotron">
								<a href="https://phptherightway.com/">https://phptherightway.com/</a>
							</div>
							<br>
							<h5>PHP Daemon</h5>
							<hr class="border-dark">
							<p>Daemon 이란?</p>
							<p>사용자가 직접적으로 제어하지 않고, 백그라운드에서 돌면서 여러 작업을 하는 프로그램을 	말한다. 시스템 로그를 남기는 syslogd 처럼 보통 데몬을 뜻하는 'd'를 이름 끝에 달고 	있으며, 일반적으로 프로세스로 실행된다.</p>
							<p class="text-center">참고영상</p>
							<div class="jumbotron">
								<p>생활코딩 영상: <a href="https://youtu.be/oWa3rPxxRTw">https://youtu.be/oWa3rPxxRTw</a></p>
							</div>
						</div>

						<!--MySQL-->
						<div class="tab-pane fade p-5" id="nav_MySQL" role="tabpanel" aria-labelledby="nav-profile-tab">
							<h1>MySQL</h1>
							<hr class="border-dark">
							<h5>MySQL이란?</h5>
							<p>MySQL은 가장 널리 사용되고 있는 RDBMS이다. 1995년에 MySQL AB사에 의해 첫 출연했으며 2008년 썬 마이크로시스템즈가 오라클과 인수 합병됨에 따라 MySQL에 대한 권리가 오라클로 넘어가게 되었다</p>
							<div class="text-center">
								<img src="../images/MySQL.png" class="rounded" alt="HTML" width="300px" height="200px">
							</div>
							<br>
							<div class="jumbotron p-5" style="height: ">
								<p class="text-danger">RDBMS란?</p>
								<p class="text-danger">Relational Database Management system 즉 관계형 데이터 모델이란 말로 관계형 데이터 모델에 기초를 둔 2차원 테이블 형태의 모델을 기초로 둔 데이터베이스이다. </p>
							</div>
							<br>
							<h5>MySQL 특징</h5>
							<hr class="border-dark">
							<ul>
								<li>오픈 소스 라이센스를 따르기 때문에 무료로 사용할 수 있다.</li>
								<li>다양한 운영체제에서 사용할 수 있으며, 여러 가지의 프로그래밍 언어를 지원한다.</li>
								<li>크기가 큰 데이터 집합도 아주 빠르고 효과적으로 처리할 수 있다.</li>
								<li>널리 알려진 표준 SQL 형식을 사용한다.</li>
								<li>MySQL 응용 프로그램을 사용자의 용도에 맞게 수정할 수 있다.</li>
							</ul>
							<br>
							<h5>SQL Query</h5>
							<hr class="border-dark">
							<table class="table table-bordered">
								<tr>
									<th>속성</th>
									<th>설명</th>
									<th>주요 명령어</th>
								</tr>
								<tr>
									<td class="text-center">DDL<br>(Data Definition Language)</td>
									<td>데이터베이스나 테이블 등을 생성, 삭제하거나 그 구조를 변경하기 위한 명령어</td>
									<td>CREATE, ALTER, DROP</td>
								</tr>
								<tr>
									<td class="text-center">DML<br>(Data Manipulation Language)</td>
									<td>데이터베이스에 저장된 데이터를 처리하거나 조회, 검색하기 위한 명령어</td>
									<td>INSERT, UPDATE, DELETE, SELECT 등</td>
								</tr>
								<tr>
									<td class="text-center">DCL<br>(Data Control Language)</td>
									<td>데이터베이스에 저장된 데이터를 관리하기 위하여 데이터의 보안성 및 무결성 등을 제어하기 위한 명령어</td>
									<td>GRANT, REVOKE 등</td>
								</tr>
							</table>
							<p class="text-center">참고자료</p>
							<div class="jumbotron">
								<p>w3schools SQL Tutorial: <a href="https://www.w3schools.com/sql/">https://www.w3schools.com/sql/</a></p>
							</div>
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






