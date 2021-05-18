<?php
include '../php/board.php';

$board_list;
$pagenation;

function showAllBoardData() {
	$board = new Board();
	$board_data = $board->getBoardDataAll();
	$page = empty($_GET['page']) ? 1 : $_GET['page'];
	$GLOBALS['board_list'] = $board->makeBoardList($board_data, $page);
	$GLOBALS['pagenation'] = $board->pagenation($board_data);
}

function showSearchBoardData() {
	$board = new Board();
	$board_data = $board->getSearchBoardData($_GET['search']);
	if (empty($board_data)) {
		$GLOBALS['board_list'] = "<td colspan=\"5\" class=\"text-center\">검색결과가 없습니다</td>";
	} else {
		$GLOBALS['board_list'] = $board->makeBoardList($board_data, $_GET['page']);
	}
	$GLOBALS['pagenation'] = $board->pagenation($board_data, $_GET['search']);
}

!empty($_GET['search']) ? showSearchBoardData() : showAllBoardData();
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
			<div class="row justify-content-center align-items-center" id="board_table" style="height: 80vh;">
				<div class="col-6 align-self-center">
					<h1 class="text-center display-3">Board</h1>
					<form class="form-inline justify-content-end" action="/board/" method="GET">
						<input class="d-none" name="page" value="1">
						<input class="form-control mr-sm-2" id="search_text" name="search" type="search" placeholder="Search">
						<button class="btn btn-outline-success my-2 my-sm-0" id="search" type="submit">Search</button>
					</form>
					<table class="table table-striped table-dark table-hover">
						<tr>
							<th scope="col">No.</th>
							<th scope="col">Title</th>
							<th scope="col">Writer</th>
							<th scope="col">date</th>
							<th scope="col">view</th>
						</tr>
						<!--board data-->
						<tbody id="table_data">
								<?= $board_list; ?>
						</tbody>
					</table>
					<!--pagination-->
					<nav aria-label = "Page navigation">
						<ul class = "pagination justify-content-center" id="pagination" >
								<?= $pagenation ?>
						</ul>
						<div class = "col text-right">
							<a class = "btn btn-primary" href="/board/add.php" id = "add_board">게시물 등록</a>
						</div>
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
		<script src="../js/board.js"></script>
	</body>
</html>


