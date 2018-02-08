<?php

$contactFormSuccessMessage = false;

if (isset($_POST['hform'])) {

	$name = $_POST['name'];
	$mail = $_POST['email'];
	$message = $_POST['message'];

	$msg = 'Това е запитване от контактанта форма на сайта.';
	$msg .= "<br>";
	$msg .= "Име: {$name}";
	$msg .= "<br>";
	$msg .= "Съобщение: {$message}";
    $headers = "Content-Type: text/html; charset=UTF-8";
	if (mail('ikiteam@yahoo.com', 'Съобщение от контактанта форма на сайта', $msg, $headers)) 
	{
		$contactFormSuccessMessage = 'Съобщението е изпратено успешно.';
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Bet and Win Fast</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Goal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/JiSlider.css" rel="stylesheet"> 
<!-- light-box -->
<link rel="stylesheet" href="css/lightbox.css">
<!-- //light-box -->

<!-- Owl-carousel-CSS --><link href="css/owl.carousel.css" rel="stylesheet">

<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>
	
<body>
<!-- banner -->
<div class="main_section_agile">
		
		<div class="agileits_w3layouts_banner_nav">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1><a class="navbar-brand" href="index.html">BET<i class="fa fa-futbol-o" aria-hidden="true"></i>WIN<i class="fa fa-futbol-o" aria-hidden="true"></i>FAST</a></h1>
					
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="menu--iris">
						<ul class="nav navbar-nav menu__list">
							<li class="menu__item menu__item--current"><a href="index.html" class="menu__link scroll">Начало</a></li>
							<li class="menu__item"><a href="#about" class="menu__link scroll">Букмейкъри</a></li>
							<li class="menu__item"><a href="#team" class="menu__link scroll">Мачовете днес</a></li>
								<li class="menu__item"><a href="#gallery" class="menu__link scroll">Мачове на живо</a></li>
									<!----<li class="menu__item"><a href="#testimonials" class="menu__link scroll">Testimonials</a></li>
							
							<li class="menu__item"><a href="#contact" class="menu__link scroll">Contact Us</a></li>---->
						</ul>
						
					</nav>
				</div>
			</nav>
		</div>
</div>
<!-- banner -->
	<div class="banner-silder" id="home">
		<div id="JiSlider" class="jislider">
			<ul>
				<li>
					<div class="w3layouts-banner-top">

							<div class="container">
								<div class="agileits-banner-info">
									<h3>Най-високите коефициенти</h3>
									 <p>Най-добрите залози</p>
									
								</div>	
							</div>
						</div>
				</li>
				<li>
						<div class="w3layouts-banner-top w3layouts-banner-top1">
						<div class="container">
								<div class="agileits-banner-info">
									<h3>Най-добрите букмейкъри</h3>
									 <p>Най точните прогнози</p>
									
								</div>	
							</div>
						</div>
				</li>
				<li>
						<div class="w3layouts-banner-top w3layouts-banner-top2">
							<div class="container">
								<div class="agileits-banner-info">
									<h3>Залози на живо</h3>
									 <p>Насладете се на играта</p>
									
								</div>	
								
							</div>
						</div>
					</li>

			</ul>
		</div>
		<!-- banner-bottom -->
	<!---<div class="banner-bottom">
		<div class="container">
			<div class="banner_bottom_agile_grids">
				<div class="wthree_banner_bottom_right_grids">
					<div class="col-md-3 banner_bottom_right_grid">
						<div class="view view-tenth">
							<div class="agile_text_box">
								<i class="fa fa-eye" aria-hidden="true"></i>
								<h3> bet365 </h3>
								<!---<p>Lorem ipsum dolor sit amet, consectetur adip.</p>
							</div>
							<div class="mask">
								<img src="images/a1.jpg" class="img-responsive" alt="" />
							</div>
						</div>
					</div>
					<div class="col-md-3 banner_bottom_right_grid">
						<div class="view view-tenth">
							<div class="agile_text_box">
								<i class="fa fa-building-o" aria-hidden="true"></i>
								<h3> Efbet </h3>
								<!---<p>Lorem ipsum dolor sit amet, consectetur adip.</p>
							</div>
							<div class="mask">
								<img src="images/a2.jpg" class="img-responsive" alt="" />
							</div>
						</div>
					</div>
				
					<div class="col-md-3 banner_bottom_right_grid">
						<div class="view view-tenth">
							<div class="agile_text_box">
								<i class="fa fa-eraser" aria-hidden="true"></i>
								<h3> Betfair </h3>
								<!---<p>Lorem ipsum dolor sit amet, consectetur adip.</p>
							</div>
							<div class="mask">
								<img src="images/a3.jpg" class="img-responsive" alt="" />
							</div>
						</div>
					</div>
					<div class="col-md-3 banner_bottom_right_grid">
						<div class="view view-tenth">
							<div class="agile_text_box">
								<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
								<h3>Bet-at-home</h3>
								<!---<p>Lorem ipsum dolor sit amet, consectetur adip.</p>
							</div>
							<div class="mask">
								<img src="images/a4.jpg" class="img-responsive" alt="" />
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>--->
<!-- banner-bottom -->

      </div>

<!-- //banner -->
	<!-- about -->
<div class="w3-agileits-about" id="about">
		<div class="container">
				<div class="w3-agileits-about-top">
						<img src="images/18+.png ">
						<p id="under18">Сайтовете за залагания са разрешени за лица навършили 18 години или повече</p>
						<br>
						<h3>Букмейкъри</h3>
						<p>Препоръчваме букмейкърите с български лиценз</p>
					<div class="clearfix"></div>
				</div>
				<div class="col-md-4 col-sm-4 w3-agileits-about-grid">
					<a href="#"><img src="images/bet365.png" alt="bet365 image" class="img-responsive" /></a>
					<h4></h4>
                    <p><a href="#">bet365</a></p>
				</div>
				<div class="col-md-4 col-sm-4 w3-agileits-about-grid">
					<a href="#"><img src="images/betfair.jpg" alt="betfair image" class="img-responsive" /></a>
					<h4></h4>
                    <p><a href="#">Betfair</a></p>
				</div>
				<div class="col-md-4 col-sm-4 w3-agileits-about-grid">
					<a href="#"><img src="images/efbet.jpg" alt="efbet image" class="img-responsive" /></a>
					<h4></h4>
					<p><a href="#">Efbet</a></p>
				</div>
				
				
				<div class="clearfix"></div>
			</div>
	   </div>
<!-- //about -->
<!-- stats -->
	<div class="stats" id="stats">
	    <div class="container"> 
			<div class="inner_w3l_agile_grids">
		<div class="col-md-3 w3layouts_stats_left w3_counter_grid">
		   <i class="fa fa-laptop" aria-hidden="true"></i>
			<p class="counter">45</p>
			<h3>Courses</h3>
		</div>
		<div class="col-md-3 w3layouts_stats_left w3_counter_grid1">
		    <i class="fa fa-smile-o" aria-hidden="true"></i>
			<p class="counter">165</p>
			<h3>Members</h3>
		</div>
		<div class="col-md-3 w3layouts_stats_left w3_counter_grid2">
		<i class="fa fa-trophy" aria-hidden="true"></i>
			<p class="counter">563</p>
			<h3>Awards</h3>
		</div>
		<div class="col-md-3 w3layouts_stats_left w3_counter_grid3">
		<i class="fa fa-user" aria-hidden="true"></i>
			<p class="counter">245</p>
			<h3>Instructors</h3>
		</div>
		<div class="clearfix"> </div>
	</div>
   </div>	
</div>
<!-- //stats -->
<!-- team -->
	<div class="team" id="team">
		<div class="container">
			<div class="w3-team-head">
				<h3>Мачовете днес</h3>
				</div>
			<div class="agile_team_grids">
				<div class="col-md-3 agile_team_grid team-left-w3l-agile">
					<div class="agile_team_grid_main">
						<!--<img src="images/t11.jpg" alt=" " class="img-responsive" />-->
						<div class="p-mask">
							<ul class="social-icons">
							 <li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li> <a href="#"><i class="fa fa-twitter"></i></a>  </li>
									
									<li><a href="#"><i class="fa fa-dribbble"></i></a> </li>

							</ul>
						</div>
					</div>
					<div class="agile_team_grid1">
						<h3>Очаквайте скоро</h3>
						<!--<p>Nam id urna ipsum</p>-->
					</div>
				</div>
				<div class="col-md-3 agile_team_grid team-left-w3l-agile">
					<div class="agile_team_grid_main">
					<!--<img src="images/t22.jpg" alt=" " class="img-responsive" />-->
						<div class="p-mask">
							<ul class="social-icons">
							 <li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li> <a href="#"><i class="fa fa-twitter"></i></a>  </li>
									
									<li><a href="#"><i class="fa fa-dribbble"></i></a> </li>

							</ul>
						</div>
					</div>
					<div class="agile_team_grid1">
						<h3>Очаквайте скоро</h3>
						<!--<p>Nam id urna ipsum</p>-->
					</div>
				</div>
				<div class="col-md-3 agile_team_grid team-left-w3l-agile">
					<div class="agile_team_grid_main">
					<!--<img src="images/t33.jpg" alt=" " class="img-responsive" />-->
						<div class="p-mask">
							<ul class="social-icons">
								 <li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li> <a href="#"><i class="fa fa-twitter"></i></a>  </li>
									
									<li><a href="#"><i class="fa fa-dribbble"></i></a> </li>

							</ul>
						</div>
					</div>
					<div class="agile_team_grid1">
						<h3>Очаквайте скоро</h3>
						<!--<p>Nam id urna ipsum</p>-->
					</div>
				</div>
				<div class="col-md-3 agile_team_grid team-left-w3l-agile">
					<div class="agile_team_grid_main">
						<!--<img src="images/t44.jpg" alt=" " class="img-responsive" />-->
						<div class="p-mask">
							<ul class="social-icons">
								 <li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li> <a href="#"><i class="fa fa-twitter"></i></a>  </li>
									
									<li><a href="#"><i class="fa fa-dribbble"></i></a> </li>

							</ul>
						</div>
					</div>
					<div class="agile_team_grid1">
						<h3>Очаквайте скоро</h3>
						<!--<p>Nam id urna ipsum</p>-->
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //team -->

<!-- works -->
	<div class="works" id="gallery">
		<div class="container">
			<div class="services-heading">
				<h3>Мачове на живо</h3>
				<div class="border border2"> </div>
			</div>
            <div id="mach-online" >
                <p class="coming-soon">Очаквайте скоро
                </p>
            </div>
			<!--<div class="gallery-grids">
				<div class="col-md-6 gallery-grids-left">
					<div class="gallery-grid">
						<a class="example-image-link" href="images/w1.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
							<img src="images/w1.jpg" alt="" />
						</a>
					</div>
					<div class="gallery-grids-left-sub">
						<div class="col-md-6 gallery-grids-left-subl">
							<div class="gallery-grid"><a class="example-image-link" href="images/w2.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
									<img src="images/w2.jpg" alt="" />
								</a>
							</div>
							<div class="gallery-grid gallery-grid-sub">
								<a class="example-image-link" href="images/w3.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
									<img src="images/w3.jpg" alt="" />
								</a>
							</div>
						</div>
						<div class="col-md-6 gallery-grids-left-subr">
							<div class="gallery-grid">
								<a class="example-image-link" href="images/w4.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
									<img src="images/w4.jpg" alt="" />
								</a>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-6 gallery-grids-left">
					<div class="col-md-6 gallery-grids-right">
						<div class="gallery-grid">
							<a class="example-image-link" href="images/w5.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
								<img src="images/w5.jpg" alt="" />
							</a>
						</div>
					</div>
					<div class="col-md-6 gallery-grids-right">
						<div class="gallery-grid">
							<a class="example-image-link" href="images/w6.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
								<img src="images/w6.jpg" alt="" />
							</a>
						</div>
					</div>
					<div class="clearfix"> </div>
					<div class="gallery-grids-right1">
						<div class="gallery-grid">
							<a class="example-image-link" href="images/w7.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
								<img src="images/w7.jpg" alt="" />
							</a>
						</div>
					</div>
					<div class="col-md-6 gallery-grids-right">
						<div class="gallery-grid">
							<a class="example-image-link" href="images/w8.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
								<img src="images/w8.jpg" alt="" />
							</a>
						</div>
					</div>
					<div class="col-md-6 gallery-grids-right">
						<div class="gallery-grid">
							<a class="example-image-link" href="images/w9.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
								<img src="images/w9.jpg" alt="" />
							</a>
						</div>
					</div>-->
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
				<script src="js/lightbox-plus-jquery.min.js"> </script>
			</div>
		</div>
	</div>
	<!-- //works -->

<!-- agile_testimonials -->
<div class="test" id="testimonials">
	<div class="container">
	<div class="col-md-3 test-left-agileinfo">
	<h3 class="tittle-agileits-w3layouts">Букмейкъри</h3>
	</div>
		<div class="col-md-9 test-gr">
					<div class=" test-gri1">
					 <div id="owl-demo2" class="owl-carousel">
							<div class="agile">
							   	<div class="test-grid">
							   		<div class="col-md-8 test-grid1">
										<p class="para-w3-agile">Bet365 Group Ltd е хазартна компания със седалище във Великобритания. Bet365 е една от водещите световни онлайн хазартни групи с над 19 милиона клиенти в почти двеста страни. Компанията има над 3 500 служители и е най-големият частен работодател в град Стоук он Трент, където се намира централата и.                                   
<br/>Bet365 е онлайн хазартна компания, предлагаща спортни залагания, покер, казино, игри и бинго, финансови залози, както и видеоизлъчване на спортни събития в реално време.

Притежава лиценз за извършване на хазартна дейност в редица страни като Великобритания, Малта, Гибралтар, Дания, Испания, Италия, Австралия и България.

Освен централата на компанията в Стоук он Трент, Bet365 има офиси в Гибралтар и Австралия.</p>
										<h4>Bet365</h4>
										<span>История</span>
									</div>	
									<div class="col-md-4 test-grid2">
										<img src="images/bet365.png" alt="" class="img-r">
									</div>
								</div>	
								<div class="clearfix"></div>
							</div>
							<div class="agile">
							   	<div class="test-grid">
							   		<div class="col-md-8 test-grid1">
										<p class="para-w3-agile">Betfair e създаден от британските предприемачи Андрю Блек и Едуард Врай през 2000 г. като алтернатива на традиционното залагане. Според идеята на основателите, клиентите могат да залагат един срещу друг, без да имат нуждата от букмейкър. Това превръща Befair е първата в света спортна борса за залози.

<br/>През годините компанията провежда иновативна рекламна политика, но най-забележителна и провокативна остава първата им масова маркетинг кампания - парад с ковчези в Лондон, протекъл под наслов „Смъртта на букмейкъра“.

<br/>През 2002 г. Betfair става спонсор на Фулъм. Компанията купува офиси в Хамърсмит, Лондон, които се превръщат в централа на компанията.

<br/>Betfair инвестира в три нови начинания – онлайн покер, казино и платформа за мобилни устройства през периода 2004-2006 г.

<br/>„Софтбанк“ изкупува 23% от дяловете на Betfair през април 2006 г, оценявайки компанията на 1.5 милиарда британски лири. През 2010 г. Betfair излиза на стоковия пазар с цена на акция 13 британски лири.

<br/>Компанията остава вярна на основната си концепция за спортна борса, но през 2012 г. започва да предлага и традиционно залагане с фиксирани коефициенти.

<br/>През септември 2015 г. е оповестено, че Betfair Group plc ще се присъедини към Paddy Power. Сливането на двете компании е факт на 2 февруари 2016 г. Новото дружество се нарича Paddy Power Betfair и е базирано в Дъблин, Ирландия.</p>
										<h4>Betfair</h4>
										<span>История</span>
									</div>	
									<div class="col-md-4 test-grid2">
										<img src="images/betfair.jpg" alt="" class="img-r">
									</div>
								</div>	
								<div class="clearfix"></div>
							</div>
							<div class="agile">
							   	<div class="test-grid">
							   		<div class="col-md-8 test-grid1">
										<p class="para-w3-agile">Ефбет е разпознаваем български бранд, който е комплекс от верига модерни казина, първокласни спортни барове и първият за България, онлайн сайт за спортни залози. Марката е съсредоточена в хазартния и развлекателния бизнес, а в основата на нейната политика стои клиентът – неговите желания и потребности.

<br/>Фундаментите, над които се гради цялата компания са фирмите „Галиция“ ООД, занимаваща се с предприемачество и строителство на жилищни и административни сгради и „Еврофутбол“ ООД – първият в България лицензиран наземен оператор. Стартът е даден през 1990 година, в центъра на столицата, с откриването на казино „Колумбия“ – обект с не голям капацитет, но известен по онова време, с перфектните си условия, качественото обслужване и разнообразието от развлечения. <br/>Съвкупността от тези предпоставки превръщат казино „Колумбия“ в едно от най-посещаваните места, събуждат интереса на цяла София и създават трайна връзка с клиентите.</p>
										<h4>Efbet</h4>
										<span>История</span>
									</div>	
									<div class="col-md-4 test-grid2">
										<img src="images/efbet.jpg" alt="" class="img-r">
									</div>
								</div>	
								<div class="clearfix"></div>
							</div>
							<!--<div class="agile">
							   	<div class="test-grid">
							   		<div class="col-md-8 test-grid1">
										<p class="para-w3-agile">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.
										Lorem ipsum dolor .</p>
										<h4>Shane Smith</h4>
										<span>Lorem Ipsum</span>
									</div>	
									<div class="col-md-4 test-grid2">
										<img src="images/t5.jpg" alt="" class="img-r">
									</div>
								</div>	
								<div class="clearfix"></div>
							</div>-->	
					</div>
				</div>	
		</div>
	</div>
</div>
<!-- //agile_testimonials -->
<!-- /live match -->
<div class="banner-info">
	<div class="dott">
    <div class="wrapper agileinfo">
	<h3>THE BIG MATCH WILL START</h3>
        <div class="clock">
            <div class="column w3l days">
                <div class="timer w3" id="days"></div>
                <div class="aits text">DAYS</div>
            </div>
            <div class="column w3">
                <div class="timer w3layouts" id="hours"></div>
                <div class="agileits text">HOURS</div>
            </div>
         
            <div class="column wthree">
                <div class="timer w3las" id="minutes"></div>
                <div class="text aits">MINUTES</div>
            </div>
            
            <div class="column siteliga">
                <div class="timer stuoyal3w" id="seconds"></div>
                <div class="text wthree">SECONDS</div>
            </div>
        </div>
			<div class="w3-border-bottom">
				<h3>ARE YOU READY!</h3>
			</div>
          
        
    </div>
</div>
</div>

<!-- //live match -->
<!-- contact -->
<div class="agile_about contact" id="contact">

		<div class="agileits_agile_contact_form">
			<h3>Contact us</h3>
										
	<div class="container">	
			<div class="agileits_agile_about_mail">
				<form action="#" method="post">
					<div class="col-md-6 agileits_agile_about_mail_left">
						<input type="text" name="Name" placeholder="Name" required="">
					<div class="clearfix"> </div>
					</div>
					<div class="col-md-6 agileits_agile_about_mail_left">
						<input type="text" name="Subject" placeholder="Subject" required="">
					<div class="clearfix"> </div>
					</div>
					<div class="col-md-6 agileits_agile_about_mail_left">
						<input type="email" name="Email" placeholder="Email" required="">
					<div class="clearfix"> </div>
					</div>
					<div class="col-md-6 agileits_agile_about_mail_left">
						<input type="text" name="Phone" placeholder="Phone" required="">
					<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
					<textarea name="Message" placeholder="Message..." required=""></textarea>
					<div class="submit">
						<input type="submit" value="Submit">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- //contact -->

<!-- map -->
<!-- <div class="map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d158858.47339870626!2d-0.2417004386729234!3d51.52855824202755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2sin!4v1497263047247"></iframe>
</div> -->
<!-- map -->

<!-- /contact bottom -->
<div class="contact-bottom">
	<div class="container">
		<div class="col-md-8 w3-contact-bottom-left">
			<h3>Get <span>connected</span></h3>
			<div class="col-md-4 conact-w3-inner1"> 
			<ul>
				<li><h3><i class="fa fa-phone" aria-hidden="true"></i><a href="#">Phone</a></h3></li>
				<li><h3><i class="fa fa-facebook" aria-hidden="true"></i><a href="#">Facebook</a></h3></li>
				<li><h3><i class="fa fa-twitter" aria-hidden="true"></i><a href="#">Twitter</a></h3></li>
				<li><h3><i class="fa fa-linkedin" aria-hidden="true"></i><a href="#">Linkedin</a></h3></li>
				</ul>
			</div>
			<div class="col-md-4 conact-w3-inner2">
			<ul>
			<li><h3><i class="fa fa-envelope" aria-hidden="true"></i><a href="#">ab@mail.com</a></h3></li>
			<li><h3><i class="fa fa-instagram" aria-hidden="true"></i><a href="#">Instagram</a></h3></li>
				<li><h3><i class="fa fa-yahoo" aria-hidden="true"></i><a href="#">Yahoo</a></h3></li>
				<li><h3><i class="fa fa-google-plus" aria-hidden="true"></i><a href="#">Google+</a></h3></li>
			</ul>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="col-md-4 w3-contact-bottom-right">
		<h3>Latest <span>Tweets</span></h3>
		<div class="box"><!-- Div that will hold the UL -->
   <div class="scroll">
    <ul class="w3agile_footer_grid_list">
						<li>Ut aut reiciendis voluptatibus maiores <a href="#">http://example.com</a> alias, ut aut reiciendis.
							<span><i class="fa fa-twitter" aria-hidden="true"></i> 02 days ago</span></li>
						<li>Itaque earum rerum hic tenetur a sapiente delectus <a href="#">http://mail.com</a> ut aut
							voluptatibus.<span><i class="fa fa-twitter" aria-hidden="true"></i> 03 days ago</span></li>
					</ul>
 <ul class="w3agile_footer_grid_list">
						<li>Ut aut reiciendis voluptatibus maiores <a href="#">http://example.com</a> alias, ut aut reiciendis.
							<span><i class="fa fa-twitter" aria-hidden="true"></i> 02 days ago</span></li>
						<li>Itaque earum rerum hic tenetur a sapiente delectus <a href="#">http://mail.com</a> ut aut
							voluptatibus.<span><i class="fa fa-twitter" aria-hidden="true"></i> 03 days ago</span></li>
					</ul>
					 <ul class="w3agile_footer_grid_list">
						<li>Ut aut reiciendis voluptatibus maiores <a href="#">http://example.com</a> alias, ut aut reiciendis.
							<span><i class="fa fa-twitter" aria-hidden="true"></i> 02 days ago</span></li>
						<li>Itaque earum rerum hic tenetur a sapiente delectus <a href="#">http://mail.com</a> ut aut
							voluptatibus.<span><i class="fa fa-twitter" aria-hidden="true"></i> 03 days ago</span></li>
					</ul>
    
   </div>
  </div><!-- End Box -->
  
</div><!-- End Main Container -->
		</div>
		<div class="clearfix"></div>
	</div>
<!-- /contact bottom -->
<!-- Footer Section -->
<div class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-6 w3-footer-nav">
				<div class="links">
					<a href="index.html">Home</a>
					<a href="#about">About</a>
					<a href="#gallery">Gallery</a>
					<a href="#team">Team</a>
					<a href="#testimonials">Testimonials</a>
					<a href="#contact">Contact</a>
				</div>
			</div>
			<div class="col-md-6 w3-footer-copy">
				<div class="copyright">
					<p>&copy; 2017 Goal. All Rights Reserved | Design by <a href="http://w3layouts.com/"> W3layouts </a></p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /Footer Section -->

<!-- start-smoth-scrolling -->
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<script src="js/JiSlider.js"></script>
<script>
			$(window).load(function () {
				$('#JiSlider').JiSlider({color: '#fff', start: 1, reverse: false}).addClass('ff')
			})
		</script>

<!-- //footer -->
<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
		<script>
			$('.counter').countUp();
		</script>
<!-- //stats -->
 <!-- Custom-JavaScript-File-Links -->
        <script type="text/javascript" src="js/moment.js"></script>
        <script type="text/javascript" src="js/moment-timezone-with-data.js"></script>
        <script type="text/javascript" src="js/timer.js"></script>
    <!-- //Custom-JavaScript-File-Links -->

<!-- requried-jsfiles-for owl -->
 <script src="js/owl.carousel.js"></script>
							        <script>
									    $(document).ready(function() {
									      $("#owl-demo2").owlCarousel({
									        items : 1,
									        lazyLoad : false,
									        autoPlay : true,
									        navigation : false,
									        navigationText :  false,
									        pagination : true,
									      });
									    });
									  </script>
							 <!-- //requried-jsfiles-for owl -->
 <script src="js/index.js"></script>
  <script src="js/scrolling-nav.js"></script>  

<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling  -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>