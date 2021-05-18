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
							<a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav_devTool" role="tab" aria-controls="nav-home" aria-selected="true">Dev tool</a>
							<a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav_Debug" role="tab" aria-controls="nav-profile" aria-selected="false">Debug</a>
						</div>
					</nav>
					<div class="tab-content bg-light" id="nav-tabContent">

						<!--Dev tool-->
						<div class="tab-pane fade show active p-5" id="nav_devTool" role="tabpanel" aria-labelledby="nav-home-tab" >
							<h1>브라우저 개발자도구</h1>
							<hr class="border-dark">
							<h5>개발자 도구란?</h5>
							<p>개발자들이 웹 개발을 할 때 사용할 수 있도록 다양한 서포팅 도구를 제공하는 tool 이며 	패널마다 다양한 정보들을 확인 할 수 있다.</p>
							<div class="text-center">
								<img src="../images/DevTool.png" class="rounded" alt="DevTool">
							</div>
							<br>
							<h1>패널의 종류와 기능</h1>
							<br>
							<h3>Elements</h3>
							<hr class="border-dark">
							<ul>
								<li>HTML, CSS를 확인 및 수정을 할 수 있다.</li>
							</ul>
							<div class="text-center">
								<img src="../images/DevTool_Elements.png" class="rounded" alt="DevTool_Elements">
							</div>
							<div class="text-center">
								<img src="../images/DevTool_Elements2.png" class="rounded" alt="DevTool_Elements2">
							</div>
							<br>
							<h3>Console</h3>
							<hr class="border-dark">
							<ul>
								<li>자바스크립트를 작성하여 동작할 수 있고 에러메시지를 확인 할 수 있다.</li>
							</ul>
							<div class="text-center">
								<img src="../images/DevTool_console.png" class="rounded" alt="DevTool_console">
							</div>
							<br>
							<h3>Network</h3>
							<hr class="border-dark">
							<ul>
								<li>사이트를 구축하기 위해 사용된 파일들의 load된 기록들을 확인 할 수 있다.</li>
								<li>해당 파일마다 headers, preview, response, initiator, timing, cookies 정보를 확인 할 수 있다.</li>
							</ul>
							<div class="text-center">
								<img src="../images/DevTool_network.png" class="rounded" alt="DevTool_network">
							</div>
							<br>
							<h3>Application</h3>
							<hr class="border-dark">
							<ul>
								<li>브라우저의 저장소에 담긴 데이터들을 확인할 수 있다.</li>
								<li>Cookie, Local Storage, Session Storage 등..</li>
							</ul>
							<div class="text-center">
								<img src="../images/DevTool_application.png" class="rounded" alt="DevTool_application">
							</div>
						</div>

						<div class="tab-pane fade p-5" id="nav_Debug" role="tabpanel" aria-labelledby="nav-profile-tab">
							<h1>Javascript Debug</h1>
							<hr class="border-dark">
							<p>개발자도구에서 많은 정보를 얻을 수 있는것도 중요하지만 가장 중요한 것은 Javascript debugging을 지원 하는 것이다.</p>
							<p>console.log() 또는 alert() 를 통해 변수 및 에러메시지를 확인하지 않고 디버깅을 사용하면 훨씬더 빠르고 정확하게 확인 할 수 있다.</p>
							<div class="text-center">
								<img src="../images/Javascript_debug.png" class="rounded" alt="Javascript_debug" width="80%" height="100%">
							</div>
							<br>
							<h3>참고사항</h3>
							<hr class="border-dark">
							<div class="jumbotron p-3">
								<p>Chrome Developers: <a href="https://developer.chrome.com/docs/devtools/javascript/">https://developer.chrome.com/docs/devtools/javascript/</a></p>
								<p>Mozilla: <a href="https://developer.mozilla.org/ko/docs/Tools/Debugger">https://developer.mozilla.org/ko/docs/Tools/Debugger</a></p>
								<p>w3school: <a href="https://www.w3schools.com/js/js_debugging.asp">https://www.w3schools.com/js/js_debugging.asp</a></p>
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








