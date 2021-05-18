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
							<a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav_HTML" role="tab" aria-controls="nav-home" aria-selected="true">HTML</a>
							<a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav_CSS" role="tab" aria-controls="nav-profile" aria-selected="false">CSS</a>
							<a class="nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav_Javascript" role="tab" aria-controls="nav-contact" aria-selected="false">Javascript</a>
							<a class="nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav_Framework_Library" role="tab" aria-controls="nav-contact" aria-selected="false">Framework, Library</a>
							<a class="nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav_jQuery" role="tab" aria-controls="nav-contact" aria-selected="false">jQuery</a>
							<a class="nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav_Bootstrap" role="tab" aria-controls="nav-contact" aria-selected="false">Bootstrap</a>
						</div>
					</nav>
					<div class="tab-content bg-light" id="nav-tabContent">

						<!--HTML-->
						<div class="tab-pane fade show active p-5" id="nav_HTML" role="tabpanel" aria-labelledby="nav-home-tab" >
							<h1>HTML</h1>
							<hr class="border-dark">
							<h5>HTML 이란?</h5>
							<p>HTML(HyperText Markup Language)은 웹을 이루고 있는 가장 기초적인 구성 요소이다.내용(content)와 구조(structure)을 담당하는 언어로써 HTML 태그를 통해 정보를 구조화하는 것이다.</p>
							<div class="text-center">
								<img src="../images/HTML.png" class="rounded" alt="HTML">
							</div>
							<br>
							<h5>HTML History</h5>
							<hr class="border-dark">
							<div class="text-center">
								<img src="../images/HTML_History.png" class="rounded img-fluid" alt="HTML_History">
							</div>
							<br>
							<h5>HTML 특징</h5>
							<hr class="border-dark">
							<ul>
								<li>차세대 웹 표준으로 2014년 10월 28일 표준으로 확정이 되었다.</li>
								<li>기존 텍스트와 하이퍼링크만 표시하던 HTML이 멀티미디어 등 다양한 애플리케이션까지 표현, 제공하도록 진화한 마크업 언어이다.</li>
							</ul>
							<div class="text-center">
								<img src="../images/HTML_char1.png" class="rounded img-fluid" alt="HTML_char1">
							</div>
							<ul>
								<li>개방된 웹상에서 다양한 애플리케이션을 구현하고, 이를 누구나 브라우저로 접근할 수 있으므로, 애플(IOS) 및 구글(안드로이드) 등 OS 플랫폼에 대한 의존이 감소될 수 있다.</li>
							</ul>
							<div class="text-center">
								<img src="../images/HTML_char2.png" class="rounded img-fluid" alt="HTML_char2">
							</div>
							<br>
							<h5>HTML5의 기본 문법</h5>
							<hr class="border-dark">
							<p>HTML 요소는 시작태그와 종료태그 그리고 태그 사이에 위치한 content로 구성된다.</p>
							<div class="text-center">
								<img src="../images/HTML_grammar.png" class="rounded img-fluid" alt="HTML_grammar">
							</div>
							<table class="table table-bordered">
								<tr>
									<th>tag</th>
									<th>mean</th>
								</tr>
								<tr>
									<td>&lt;DOCTYPE html&gt;</td>
									<td>파일에 문서 형식을 HTML5 로 지정한다</td>
								</tr>
								<tr>
									<td>&lt;html&gt;</td>
									<td>전체 html문서를 감싸는 태그이다. 하나만 존재해야 한다.</td>
								</tr>
								<tr>
									<td>&lt;head&gt;</td>
									<td>html 문서에 대한 정보를 나타낸다. 하나만 존재해야 한다.</td>
								</tr>
								<tr>
									<td>&lt;title&gt;</td>
									<td>head안에 들어가는 태그로 제목표시줄의 내용을 나타낸다.</td>
								</tr>
								<tr>
									<td>&lt;meta&gt;</td>
									<td>문서의 대한 설명을 표시한다.</td>
								</tr>
								<tr>
									<td>&lt;body&gt;</td>
									<td>html문서에서 실제적으로 client에게 보여지는 부분을 나타낸다.</td>
								</tr>
							</table>
							<br>
							<h5>Empty Element</h5>
							<hr class="border-dark">
							<p>Empty Element - content를 가질 수 없는 요소이다. 대표적인 빈요소들로는</p>
							<ul>
								<li>br</li>
								<li>hr</li>
								<li>img</li>
								<li>input</li>
								<li>link</li>
								<li>meta</li>
							</ul>
							<p>등이 있다</p>
							<br>
							<h5>Attribute</h5>
							<hr class="border-dark">
							<p>Attribute란 요소의 성질, 특징을 정의하는 명세이다. 요소는 Attribute를 가질 수 있으며 Attribue는 요소에 추가적 정보를 제공한다.</p>
							<div class="text-center">
								<img src="../images/HTML_attribute.png" class="rounded img-fluid" alt="HTML_attribute">
							</div>

							<br>
							<h5>HTML Global Attribute</h5>
							<hr class="border-dark">
							<p>HTML 요소가 공통으로 사용할 수 있는 Attribute이다. 몇몇 요소에는 적용되지 않을 수 있지만, 대체로 모든 요소에 사용될 수 있다.</p>
							<table class="table table-bordered">
								<tr>
									<th>Attribute</th>
									<th>mean</th>
								</tr>
								<tr>
									<td>class</td>
									<td>스타일시트에 정의된 class를 요소에 지정한다. 중복 지정이 가능하다.</td>
								</tr>
								<tr>
									<td>hidden</td>
									<td>css의 hidden과는 다르게 의미상으로도 브라우저에 노출되지 않게 된다.</td>
								</tr>
								<tr>
									<td>lang</td>
									<td>지정된 요소의 언어를 지정한다. 검색엔진의 크롤링 시 웹페이지의 언어를 인식할 수 있게 한다.</td>
								</tr>
								<tr>
									<td>style</td>
									<td>요소에 인라인 스타일을 지정한다.</td>
								</tr>
								<tr>
									<td>tabindex</td>
									<td>사용자가 키보드로 페이지를 내비게이션 시 이동 순서를 지정한다.</td>
								</tr>
								<tr>
									<td>title</td>
									<td>요소에 관한 제목을 지정한다</td>
								</tr>
							</table>

							<br>
							<p>검색엔진에 사용되는 로봇(Robot)이라는 프로그램을 이용하여 매일 전세계의 웹사이트 정보를 수집하는데 그때 시맥틱요소(Semantic element)를 해석하게된다.</p>
							<div class="text-center">
								<img src="../images/HTML_semantic.png" class="rounded img-fluid" alt="HTML_semantic">
							</div>
							<br>
							<table class="table table-bordered">
								<tr>
									<th>tag</th>
									<th>mean</th>
								</tr>
								<tr>
									<td>header</td>
									<td>헤더를 의미한다.
								<tr>
									<td>nav</td>
									<td>내비게이션을 의미한다.</td>
								</tr>
								<tr>
									<td>aside</td>
									<td>헤더를 의미한다.사이드에 위치하는 공간을 의미한다.</td>
								</tr>
								<tr>
									<td>section</td>
									<td>본문의 여러 내용을 포함하는 공간을 의미한다.</td>
								</tr>
								<tr>
									<td>article</td>
									<td>본문의 주내용이 들어가는 공간을 의미한다.</td>
								</tr>
								<tr>
									<td>footer</td>
									<td>푸터를 의미한다</td>
								</tr>
							</table>
						</div>

						<!--CSS-->
						<div class="tab-pane fade p-5" id="nav_CSS" role="tabpanel" aria-labelledby="nav-profile-tab">
							<h1>CSS</h1>
							<hr class="border-dark">
							<h5>CSS란?</h5>
							<p>CSS(Cascading Style Sheets)는 HTML이나 XML과 같은 구조화 된 문서(Document)를 화면, 종이 등에 어떻게 렌더링할 것인지를 정의하기 위한 언어이다. 즉, CSS는 HTML의 각 요소(Element)의style(design, layout etc)을 정의하여 화면(Screen) 등에 어떻게 렌더링하면 되는지 브라우저에게 설명하기 위한 언어이다.</p>
							<div class="text-center">
								<img src="../images/CSS.png" class="rounded img-fluid" alt="CSS">
							</div>
							<h5>CSS기본 문법</h5>
							<hr class="border-dark">
							<div class="text-center">
								<img src="../images/CSS_grammar.png" class="rounded img-fluid" alt="CSS_grammar">
							</div>
							<ul>
								<li>Selector</li>
								-HTML 요소를 선택
								<li>Property</li>
								- selector로 선택한 요소 내{}에 속성 값을 지정하는 한다.<br>
								- 표준 스펙으로 이미 지정되어 있는 것을 사용하여야하며 사용자가 임의로 정의할 수 없다.<br>
								- 여러 개의 프로퍼티를 연속해서 지정할 수 있으며 세미콜런(;)으로 구분한다. <br>
							</ul>
							<h5>Sass</h5>
							<hr class="border-dark">
							<p>Sass(Syntactically Awesome StyleSheets)는 CSS의 한계와 단점을 보완하여 보다 가독성이 높고 코드의 재사용에 유리한 CSS를 생성하기 위한 CSS 확장(extension)이다.</p>
							<div class="text-center">
								<img src="../images/Sass.png" class="rounded img-fluid" alt="Sass" width="200px;" height="150px;">
							</div>
							<p>Sass는 다음과 같은 추가 기능과 유용한 도구들을 제공한다.</p>
							<ul>
								<li>변수의 사용</li>
								<li>조건문과 반복문</li>
								<li>Import</li>
								<li>Nesting</li>
								<li>Mixin</li>
								<li>Extend/Inheritance</li>
							</ul>
							<br>
							<p>CSS와 비교하여 Sass의 장점</p>
							<ul>
								<li>CSS보다 심플한 표기법으로 CSS를 구조화하여 표현할 수 있다.</li>
								<li>다른 팀원들과 작업 시 발생할 수 있는 구문의 수준 차이를 평준화할 수 있</li>
								<li>    • CSS에는 존재하지 않는 Mixin 등의 강력한 기능을 활용하여 CSS유지보수 편의성을 큰 폭으로 향상시킬 수 있다.</li>
							</ul>
							<br>
							<p class="text-center text-primary">기본사용법은 아래 링크를 참조</p>
							<div class="jumbotron p-3">
								<a href="https://sass-lang.com/guide" target="_blank">https://sass-lang.com/guide</a>
							</div>
							<h5>Less</h5>
							<hr class="border-dark">
							<p>Less(Leaner Style Sheets)는 CSS에 Script를 덧붙여 확장한 언어이다. CSS를 변수나 Nested Rules을 이용하여 쉽고 빠르고 체계적으로 프로그래밍 할 수 있게 만든 것을 말한다.</p>
							<div class="text-center">
								<img src="../images/Less.png" class="rounded img-fluid" alt="Less" width="250px;" height="150px;">
							</div>
							<p>CSS와 비교하여 Less의 장점</p>
							<ul>
								<li>코드의 재사용</li>
								- 이름을 붙여놓은 스타일셋을 사용하고 싶은 곳에서 호출하여 사용
								<li>프로그래밍적 처리</li>
								- 조건분기, 반복처리 등을 이용
								<li>셀렉터 기술의 간략화</li>
								- 셀렉터의 부자관계를 네스트로 표현할 수 있음
								<li>file merge, css압축</li>
								- 여러개의 Sass 파일을 하나의 css파일로 합칠 수 있고 개행이나 indent, 공백 등을 삭제할 수 있다.
							</ul>
							<p class="text-center text-primary">기본사용법은 아래 링크를 참조</p>
							<div class="jumbotron p-3">
								<a href="http://lesscss.org/usage/" target="_blank">http://lesscss.org/usage/</a>
							</div>
						</div>

						<!--Javascript-->
						<div class="tab-pane fade p-5" id="nav_Javascript" role="tabpanel" aria-labelledby="nav-contact-tab">
							<h1>Javascript</h1>
							<hr class="border-dark">
							<h5>Javascript란?</h5>
							<p>HTML과 CSS의 정적인 언어를 넘어 동적인 웹사이트를 만들기 위해 탄생한 언어로, 미국의 넷스케이프 커뮤니케이션즈사(Netscape Communications)가 개발한 스크립트 언어이며, 웹 브라우저에서 실행하는 스크립트 언어 기술이다.</p>
							<div class="text-center">
								<img src=".../images/Javascript.png" class="rounded img-fluid" alt="Javascript" width="180px;" height="280px;">
							</div>
							<br>
							<h5>Java 와 Javascript</h5>
							<hr class="border-dark">
							<p>처음 Javascript가 만들어졌을 때는 LiveScript라는 이름으로 불려졌으며, 당시 Java의 인기가 아주 높은 상황에서 마캐팅 차원의 홍보를 하면 도움이 될 것이라는 의사결정을 내리고 이름을 Javascript로 변경되었다. Javascript는 Java와 아무런 연관이 없다.</p>
							<br>
							<h5>Javascript Runtime 구조</h5>
							<hr class="border-dark">
							<div class="text-center">
								<img src="../images/Javascript_runtime.png" class="rounded img-fluid" alt="Javascript_runtime"">
							</div>
							<ul>
								<li>Single thread</li>
								-하나의 메모리 힙 영역과 하나의 콜 스택을 가진다. <br>
								-한 번에 한 가지 일 밖에 하지 못한다. <br><br>
								<li>Call Stack</li>
								-함수의 실행되는 순서를 기억하는 스택구조로 되어있다.<br><br>
								<li>Web API</li>
								-자바스크립트엔진에서 정의됮 않은 HTTP  요청 메서드, DOM 이벤트 등의 메서드를 지원한다<br><br>
								<li>Callback Queue</li>
								-Web API 결과값을 쌓아두는 Queqe.<br><br>
								<li>Evnet Loop</li>
								-Call Stack과 Callback Queue를 관찰한다<br>
								-Call Stack이 비어 있으면 Callback Queue의 첫번째 Callback을 Stack에 쌓는다<br><br>
							</ul>
						</div>

						<!--Library, Framework-->
						<div class="tab-pane fade p-5" id="nav_Framework_Library" role="tabpanel" aria-labelledby="nav-profile-tab">
							<h1>Library, Framework</h1>
							<hr class="border-dark">
							<h5>lLibrary</h5>
							<hr class="border-dark">
							<p>프로그램을 개발하는데 필요한 여러 기능을 활용할 수 있도록 묶어놓은 함수 또는 기능의 집합. 정해진 방식으로 개발하게끔 정해주는 프레임워크와 달리 제어권이 개발자에게 주어진다</p>
							<br>
							<h5>Framework</h5>
							<hr class="border-dark">
							<p>프로그램을 개발하기 위한 구조를 제공하는 개발환경. 코딩을 할 때 자주 쓰이는 여러 클래스를 프레임워크가 정해둔 흐름에 맞춰 쓸 수 있도록 지원해 주기때문에 복잡하거나 반복되는 작업에 대한 부담을 덜어줄 뿐만 아니라 개발에 들이는 시간 대비 프로그램의 질을 높일 수 있다.</p>

							<br>
							<h5>Framework와 Library의 차이</h5>
							<hr class="border-dark">
							<div class="text-center">
								<img src="../images/Framework_Library.jpg" class="rounded img-fluid" alt="Framework_Library"">
							</div>
							<p class="text-danger text-center">프레임워크의 정해진 코드의 흐름에 나의 코드가 더해지고 나의 코드를 효율적으로 작성하기 위해 라이브러리가 사용된다</p>
						</div>

						<!--jQuery-->
						<div class="tab-pane fade p-5" id="nav_jQuery" role="tabpanel" aria-labelledby="nav-profile-tab">
							<h1>jQuery</h1>
							<hr class="border-dark">
							<h5>jQuery란?</h5>
							<p>jQuery는 2006년 존 레식(John Resig)이 최초로 출시하였다. </p>
							<p>jQuery는 클라이언트 측 HTML 스크립팅을 간소화하기 위해 고안된 크로스 플랫폼 자바스크립트 라이브러리이다. 웹 상에서 가장 트래픽이 많은 상위 천만 개의 사이트 중 65%가 사용중이며 JQuery는 MIT 라이센스로 배포되는 무료 오픈소스 소프트웨어이다.</p>
							<div class="text-center">
								<img src="../images/jQuery.png" class="rounded img-fluid" alt="jQuery"">
							</div>
							<br>
							<h5>jQuery의 특징</h1>
								<hr class="border-dark">
								<ul>
									<li>단순화</li>
									-불필요한 코드를 줄이고 간결한 형식으로 단순화시킴으로써 가독성과 개발효율성이 크게 상승<br>
									-자바스크립트보다 코드가 간결하여 학습이 쉬움<br><br>
									<li>DOM</li>
									-문서 객체 모델을 좀 더 쉽게 접근하여 조작할 수 있다<br><br>
									<li>이벤트</li>
									-이벤트 연결을 쉽게 구현할 수 있는 기능을 제공한다<br>
									-브라우저마다 이벤트 전달 방식이 달라 생기는 브라우저간의 차이로 발생하는 문제점을 쉽게 해결 할 수 있다<br><br>
									<li>크로스 브라우징</li>
									-웹 표준에 기반을 두어 jQuery로 다양한 브라우저에서 동작하는 코드를 작성할 수 있다<br>
									-pc와 모바일에서도 작동이 가능하다<br><br>
									<li>효율적인 selector</li>
									-원하는 요소를 편리하게 선택할 수 있다<br>
									-엘리먼트를 선택하는 강력한 방법을 제공하여 선택된 엘리먼트들을 효율적으로 제어할 수 있는 다양한 수단을 제공한다<br><br>
									<li>시각적 효과</li>
									-시각적 효과를 쉽게 구현<br><br>
									<li>Ajax의 단순화</li>
									-jQuery를 이용하면 Ajax를 더욱 단순하게 만들 수 있어 Ajax 애플리케이션을 쉽게 개발할 수 있다<br><br>
									<li>애니메이션 구현</li>
									-웹 표준만으로 플래시와 실버라이트를 사용하는 것과 비슷한 효과를 구현할 수 있어 애니메이션 구현을 쉽게 할 수 있다<br><br>
								</ul>
								<p class="text-primary text-center">기본사용법은 아래 링크를 참조</p>
								<div class="jumbotron">
									<p>jQuery 본문: <a href="https://learn.jquery.com/about-jquery/" target="_blank">https://learn.jquery.com/about-jquery/</a></p>
									<p>w3schools: <a href="https://www.w3schools.com/jquery/default.asp" target="_blank">https://www.w3schools.com/jquery/default.asp</a></p>
									<p>poiemaweb: <a href="https://poiemaweb.com/jquery-basics" target="_blank">https://poiemaweb.com/jquery-basics</a></p>
								</div>
						</div>

						<!--Bootstrap-->
						<div class="tab-pane fade p-5" id="nav_Bootstrap" role="tabpanel" aria-labelledby="nav-profile-tab">
							<h1>Bootstrap</h1>
							<hr class="border-dark">
							<h5>Bootstrap이란?</h5>
							<p>반응형이이며 모바일 우선인 웹프로젝트 개발을 위한 가장 인기있는 HTML, CSS, JS 프레임 워크</p>

							<div class="text-center">
								<img src="../images/Bootstrap.png" class="rounded img-fluid" alt="Bootstrap"">
							</div>
							<br>
							<h5>Bootstrap의 특징</h5>
							<hr class="border-dark">
							<ul>
								<li>Easy to use: HTML과 CSS, Js 의 기본지식을 가진 누구나 쉽게 접근 가능</li>
								<li>Responsive features: 반응형 CSS를 포함한 단일코드로 모든 디바이스에 적용할 수 있음</li>
								<li>Mobile-first approach: 부트스트랩 3부터 모바일 겸용이 아닌 모바일 퍼스트 정책 반영</li>
								<li>Brower compatibility: 모든 최신 브라우저와 호환</li>
							</ul>
							<div class="jumbotron p-3">
								<h5 class="text-danger">반응형이란?</h5>
								<p class="text-danger">하나의 웹사이트에서 pc, 스마트폰, 태블릿pc 등 접속하는 디스플레이의 종류에 따라 화면의 크기가 자동으로 변하도록 만든 웹페이지 접근 기법을 말한다</p>
							</div>
							<br>
							<p class="text-primary text-center">기본사용법은 아래 링크를 참조</p>
							<div class="jumbotron p-3">
								<span><a href="https://getbootstrap.com/docs/5.0/getting-started/introduction/" target="_blank">https://getbootstrap.com/docs/5.0/getting-started/introduction/</a></span>
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







