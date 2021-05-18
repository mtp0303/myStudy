<?php
include '../php/loginCheck.php';
include '../php/memberLog.php';
authorityCheck(); //회원만 접근 가능

$member_log = new MemberLog();
$logout_data = $member_log->getMemberLogout();
$page = empty($_GET['page']) ? 1 : $_GET['page'];
$list = $member_log->makelogoutList($logout_data, $page);
$pagenation = $member_log->pagenation($logout_data, 'memberLogout');
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
			<div class="row justify-content-center align-items-center" id="board_table" style="height: 80vh;">
				<div class="col-6 align-self-center">
					<h1 class="text-center display-3">Member Logout</h1>
					<table class="table table-striped table-dark table-hover">
						<tr>
							<th scope="col">Idx</th>
							<th scope="col">member_login_idx</th>
							<th scope="col">member_idx</th>
							<th scope="col">session</th>
							<th scope="col">date_insert</th>
						</tr>
						<!--board data-->
						<tbody id="table_data">
								<?= $list ?>
						</tbody>
					</table>
					<!--pagination-->
					<nav aria-label = "Page navigation">
						<ul class = "pagination justify-content-center" id="pagination" >
							<?= $pagenation ?>
						</ul>
					</nav>
				</div>
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







