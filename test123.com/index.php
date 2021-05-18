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
			<img src="./images/bg_img.png" class="position-absolute" style="height: 100vh; width: 100%;">

			<!--nav-->            
			<?php include './static/nav.php'; ?>

			<!--컨텐츠-->
			<div id="content">
				<div class="row" id="carousel" style="height: 80vh;" >
					<div class="col align-self-center">
						<div id="first_page_carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="carousel-item active">
									<h1 class="d-block w-100 display-1">Welcome!</h1>
									<p>환영합니다<span id="user_id"> <?php echo $user_id ?></span>님</p>
								</div>
								<div class="carousel-item">
									<h1 class="d-block w-100 display-1" id="clock"></h1>
									<p><?php echo date('Y.m.d') ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!--footer-->
			<?php include './static/footer.php'; ?>
		</div>

		<!--script-->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
		<script src="./js/index.js"></script>
	</body>
</html>


