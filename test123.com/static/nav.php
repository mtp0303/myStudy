<?php
$root = $_SERVER['DOCUMENT_ROOT'];
include_once $root . '/php/loginCheck.php';

$login_check = loginCheck();
$user_id = getUserId();

$login_btn = $login_check ?
		'<a class="btn btn-primary btn-sm btn justify-content-end" href="/php/homeLogout.php" id="logout">로그아웃</a>' : '<a class="btn btn-primary btn-sm btn justify-content-end" href="/login.php" id="login">로그인</a>';

$privacy_btn = $login_check ? '<a class="btn btn-warning btn-sm justify-content-end m-1" href="/modifyPrivacy/" id="modifyPrivacy">개인정보</a>' : "";
?>
<header>
	<div class="col-md-2 fixed-top" style="padding: 0px 0px;" >
		<div class="align-content-lg-stretch">
			<div class="collapse" id="nav_toggle" style="height: 100%;">
				<div class="bg-dark p-4">
					<h5 class="text-white h4">Menu</h5>
					<span class="text-light text-sm-left small">안녕하세요 <?php echo $user_id ?> 님
					</span> 
<?= $login_btn ?>
<?= $privacy_btn ?>
					<hr class="border-light">
					<ul class="nav flex-column nav-pills" id="v-pills-tab">
						<li class="nav-item">
							<a class="nav-link text-light" href="/" aria-controls="v-pills-home" id="home" >Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-light" href="/board?page=1/" data-toggle="" aria-controls="v-pills-home" aria-selected="true" id="board">Board</a>
							<!--</li>-->
						<li class="nav-item dropright">
							<button class="nav-link text-light btn" data-toggle="dropdown" aria-controls="v-pills-home" aria-selected="true" id="study">study</button>
							<div class="dropdown-menu bg-dark">
								<a class="dropdown-item text-light" href="/study/frontEnd.php" id="frontEnd">front end</a>
								<a class="dropdown-item text-light" href="/study/backEnd.php" id="backEnd">back end</a>
								<a class="dropdown-item text-light" href="/study/browerDevTool.php" id="browerDevTool">brower dev tool</a>
								<a class="dropdown-item text-light" href="/study/erd.php" id="erd">ERD</a>
							</div>
						</li>
						<li class="nav-item dropright">
							<button class="nav-link text-light btn" href="#" data-toggle="dropdown" aria-controls="v-pills-home" aria-selected="true" id="member_log">member log</button>
							<div class="dropdown-menu bg-dark">
								<a class="dropdown-item text-light" href="/memberLog/memberList.php" id="memberList">member list</a>
								<a class="dropdown-item text-light" href="/memberLog/memberLogin.php" id="memberLogin">member login</a>
								<a class="dropdown-item text-light" href="/memberLog/memberLogout.php" id="memberLogout">member logout</a>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link text-light " href="#" data-toggle="" aria-controls="v-pills-home" aria-selected="true" id="about">about</a>
						</li>
					</ul>
				</div>
			</div>
			<nav class="navbar navbar-dark">
				<button class="navbar-toggler btn-dark bg-dark" type="button" data-toggle="collapse" data-target="#nav_toggle" aria-controls="nav_toggle" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
			</nav>
		</div>
	</div>
</header>