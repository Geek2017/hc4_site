<?php
	require_once "vendor/facebook/graph-sdk/src/config.php";

	$redirectURL = "http://localhost/hc4_site/fbcallback.php";
	$permissions = ['email'];
	$loginURL = $helper->getLoginUrl($redirectURL, $permissions);
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>H4C : Hackathon</title>
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/icon" href="assets/images/favicon.ico" />
	<!-- Font Awesome -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
	<!-- Bootstrap -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<!-- Slick slider -->
	<link href="assets/css/slick.css" rel="stylesheet">
	<!-- Theme color -->
	<link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">

	<!-- Main Style -->
	<link href="style.css" rel="stylesheet">

	<!-- Fonts -->

	<!-- Open Sans for body font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800" rel="stylesheet">
	<!-- Montserrat for title -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">



	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<style>
		/* width */
		::-webkit-scrollbar {
			width: 5px;
		}

		/* Track */
		::-webkit-scrollbar-track {
			background: #f1f1f1;
		}

		/* Handle */
		::-webkit-scrollbar-thumb {
			background: #337DFF;
		}

		/* Handle on hover */
		::-webkit-scrollbar-thumb:hover {
			background: #337DFF;
		}

		@media (max-width: 991px) {
			.col-md-6 {
				width: 100%;

			}
		}
	</style>
</head>

<body>

	<!-- Start Header -->
	<header id="mu-hero" class="" role="banner">
		<!-- Start menu  -->
		<nav class="navbar navbar-fixed-top navbar-default mu-navbar">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
						data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">H4C</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<!-- Logo -->
					<a class="navbar-brand" href="index.html">H4C</a>

				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav mu-menu navbar-right">
						<li><a href="#mu-hero">Home</a></li>
						<li><a href="#" data-toggle="modal" data-target="#fsModal">Register</a></li>
						<li><a href="#mu-about">About Us</a></li>
						<li><a href="#mu-schedule">Schedule</a></li>
						<li><a href="#mu-speakers">Speakers</a></li>
						<li><a href="#mu-venue">Venue</a></li>
						<li><a href="#mu-sponsors">Sponsors</a></li>
						<li><a href="#mu-contact">Contact</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
		<!-- End menu -->

		<div class="mu-hero-overlay">
			<div class="container">
				<div class="mu-hero-area">

					<!-- Start hero featured area -->
					<div class="mu-hero-featured-area">
						<!-- Start center Logo -->
						<div class="mu-logo-area">
							<!-- text based logo -->
							<!-- <a class="mu-logo" href="#">Hack4Change</a> -->
							<!-- image based logo -->
							<a class="mu-logo pull-center" href="#"><img src="assets/images/h4c.PNG" alt="logo img"></a>
						</div>

						<!-- End center Logo -->

						<div class="mu-hero-featured-content">

							<h1>Hello!! WELCOME HACKERS! To the 1st Regional Hack4Change Bicol</h1>
							<h2>-Divising Digital Solution To the Top Problem of our Region-</h2>
							<p class="mu-event-date-line">November 23-24, 2019 Legazpi City Convention Center, Albay</p><br>

							<button class="btn btn-primary btn-modal " data-toggle="modal" data-target="#fsModal">
								Register
							</button>

							<span class="qr">
								<font color="white">OR</font>
							</span>
							<img class="qr" src="./assets/images/qr.png" height="150px">

							<div class="mu-event-counter-area">
								<div id="mu-event-counter">

								</div>

							</div>
						</div>
					</div>
					<!-- End hero featured area -->

				</div>
			</div>
		</div>
	</header>
	<!-- End Header -->


	<!-- view modal -->

	<!-- view modal -->

	<!-- modal -->
	<div id="fsModal" class="modal animated bounceIn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
		aria-hidden="true">

		<!-- dialog -->
		<div class="modal-dialog">

			<!-- content -->
			<div class="modal-content">

				<!-- header -->
				<div class="modal-header">
					<h1 id="myModalLabel" class="modal-title">
						Registration Form
						<button class="btn btn-success pull-right" data-dismiss="modal">
							X
						</button>
					</h1>
				</div>
				<!-- header -->

				<!-- body -->
				<div class="modal-body">

					<!-- <iframe width="100%" height= "100%" src= "https://forms.office.com/Pages/ResponsePage.aspx?id=w85H98x8akOls8Z-09RP-tvXzsAVGFRBtgn2IslG2R5URE1SMUEyNUZOTjlKWDNSNTk5SE5DQTQ0TC4u&embed=true" frameborder= "0" marginwidth= "0" marginheight= "0" style= "border: none; max-width:100%; max-height:100vh" allowfullscreen webkitallowfullscreen mozallowfullscreen msallowfullscreen> </iframe> -->
					<iframe width="100%" height="100%"
						src="https://forms.office.com/Pages/ResponsePage.aspx?id=w85H98x8akOls8Z-09RP-tvXzsAVGFRBtgn2IslG2R5URE1SMUEyNUZOTjlKWDNSNTk5SE5DQTQ0TC4u&embed=true"
						frameborder="0" marginwidth="0" marginheight="0"
						style="border: none; max-width:100%; max-height:100vh" allowfullscreen webkitallowfullscreen
						mozallowfullscreen msallowfullscreen> </iframe>


				</div>
				<!-- body -->

				<!-- footer -->

				<!-- footer -->

			</div>
			<!-- content -->

		</div>
		<!-- dialog -->

	</div>
	<!-- modal -->


	<!-- Start main content -->
	<main role="main">
		<!-- Start About -->
		<section id="mu-about">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-about-area">
							<!-- Start Feature Content -->
							<div class="row">
								<div class="col-md-8">
									<div class="mu-about-left">
										<img class="" src="assets/images/about.jpg" alt="Men Speaker">
									</div>
								</div>
								<div class="col-md-4">
									<div class="mu-about-right">
										<h1>About Regional Hack4Change</h1>
										<p>Regional Hack4Change is a non-profit initiative to organize hackathons for
											academe and individual who have winning idea of solutions that will solve
											any current top problem of the Bicol region. College students and young
											individual from around Bicol will come together to a two-day hackathon
											event, where they learn some basic coding & ICT skills on the first day and
											build a workable prototype in teams on the next two days.</p>

									</div>

								</div>

							</div>
							<br>



							<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">

								<div class="box-part text-center">

									<i class="fa fa-envira fa-3x" aria-hidden="true" style="color:#7ebb42;"></i>

									<div class="title">
										<h4 style="color:#7ebb42;">Hack4Agri</h4>
									</div>

									<div class="text">
										<span>
											<p align="justify">As a hacker device a solution or unique idea that will
												revolutionize the agri. Industry and make it sustainable.</p>
										</span>
									</div>

									<button type="button" class="btn btn-success btn-xs" data-toggle="modal"
										data-target="#agri">Read More!</button><br>

								</div>
								<div class="modal fade" id="agri" role="dialog">
									<div class="modal-dialog modal-sm">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close"
													data-dismiss="modal">&times;</button>
												<h4 class="modal-title">Hack The Agriculture</h4>
											</div>
											<div class="modal-body">
												<div class="col-md-6">
													<img src="./assets/images/agri.jpg" class="img-fluid"
														alt="Responsive image">
												</div>
												<div class="col-md-6">
													<h5>
														<p align="justify">A review of Agriculture sector in Bicol
															region Number of farms slightly increased by 1.9 percent,
															from 377.8 percent to 384. 8 thousand in 2002. However, the
															total area of farms in the region decreased by 4.7 percent
															during the period mention. </p>
														<br>
														<p>
															Palay is the major temporary crop of the region, hog raising
															topped the Livestock Raising Activity, Chicken Poultry
															dominated too, Bicolano’s also preferred ornamental and
															flower gardening. More than one third of the Agricultural
															operators are 40-54 years old.
														</p>
														<br>
														<p>
															But there is a missing link that needs to be done. A digital
															tool must be crafted to for those people interested to
															venture in Agriculture. These datasets must be open to the
															public Not only hackathons give youth a great opportunity to
															learn new skills but venture in commercial as well. As a
															hacker device a solution or unique idea that will
															revolutionize the agri. Industry and make it sustainable.
														</p>
													</h5>
												</div>
											</div>

										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">

								<div class="box-part text-center">

									<i class="fa fa-black-tie fa-3x" aria-hidden="true" style="color:#4a9bd3;"></i>

									<div class="title">
										<h4 style="color:#4a9bd3;">Hack4Biz</h4>
									</div>

									<div class="text">
										<span>
											<p align="justify">As hacker device solution to ensure the increase of
												economy and sustainability of the SME’s sector.</p>
										</span>
									</div>

									<button type="button" class="btn btn-info btn-xs" data-toggle="modal"
										data-target="#biz">Read More!</button>

								</div>
								<div class="modal fade" id="biz" role="dialog">
									<div class="modal-dialog modal-sm">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close"
													data-dismiss="modal">&times;</button>
												<h4 class="modal-title">Hack The Business</h4>
											</div>
											<div class="modal-body">
												<div class="col-md-6">
													<img src="./assets/images/biz.jpg" class="img-fluid"
														alt="Responsive image">
												</div>
												<div class="col-md-6">
													<h5>
														<p align="justify">Business is booming in the region in fact
															it’s been recognize as one of the top region economic growth
															in 2018. Business world cited the ECONOMY of the Bicol
															region grew fastest among the 17 Philippine regions. </p>
														<br>
														<p>
															Despite this growth purchasing power of the Bicolano’s is
															still low and business sustainability remain unknown.
														</p>
														<br>
														<p>
															As hacker device solution to ensure the increase of economy
															and sustainability of the SME’s sector.
														</p>
													</h5>
												</div>
											</div>

										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">

								<div class="box-part text-center">

									<i class="fa fa-plane fa-3x" aria-hidden="true" style="color:#fbba14;"></i>

									<div class="title">
										<h4 style="color:#fbba14;">Hack4Travel</h4>
									</div>

									<div class="text">
										<span>
											<p align="justify">As hacker would visualize a solution that will ensure the
												smooth flow of Tourism business and its sustainability.</p>
										</span>
									</div>

									<button type="button" class="btn btn-warning btn-xs" data-toggle="modal"
										data-target="#travel">Read More!</button>

								</div>
								<div class="modal fade" id="travel" role="dialog">
									<div class="modal-dialog modal-sm">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close"
													data-dismiss="modal">&times;</button>
												<h4 class="modal-title">Hack The Tourism</h4>
											</div>
											<div class="modal-body">
												<div class="col-md-6">
													<img src="./assets/images/travel.jpg" class="img-fluid"
														alt="Responsive image">
												</div>
												<div class="col-md-6">
													<h5>
														<p align="justify">Thrust Bicol into its peak of economic performance, registering the highest growth rate among regions in the country, according to the Philippine Statistics authority. </p>
														<br>
														<p>
															Because of the tourist traffic arrival, private homes open the doors to tourist, thus gives opportunity to locality to earn from selling halo, pili candies and other goodies. 
														</p>
														<br>
														<p>
															With the attributed growth the DOT to focus on tourism by agencies and program working in harmony. As hacker would visualize a solution that will ensure the smooth flow of businesses and its sustainability.
														</p>
													</h5>
												</div>
											</div>

										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">

								<div class="box-part-last text-center">

									<i class="fa fa-heart fa-3x" aria-hidden="true" style="color:#eb5523;"></i>

									<div class="title">
										<h4 style="color:#eb5523;">Hack4Health</h4>
									</div>

									<div class="text">
										<span>
											<p align="justify">As hacker create a solution that will resolve specific
												issues in terms of health care a game changing solution.</p>
										</span>
									</div>

									<button type="button" class="btn btn-danger btn-xs" data-toggle="modal"
										data-target="#health">Read More!</button>

								</div>
								<div class="modal fade" id="health" role="dialog">
									<div class="modal-dialog modal-sm">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close"
													data-dismiss="modal">&times;</button>
												<h4 class="modal-title">Hack The Tourism</h4>
											</div>
											<div class="modal-body">
												<div class="col-md-6">
													<img src="./assets/images/health.jpg" class="img-fluid"
														alt="Responsive image">
												</div>
												<div class="col-md-6">
													<h5>
														<p align="justify">The rise of measles and dengue cases has been recorded with high rise of victims and death, this is very alarming.  Hacking for health allow to move quickly on projects and to immediately detect their technical feasibility and economic potential.</p>
														<br>
														<p>
															It’s a way to get these nuggets to market quickly. Our objective is to encourage the emulation of projects and support solutions to providers. 
														</p>
														<br>
														<p>
															A hacker can create a solution that will resolve specific issues in terms of health care a game changing solution.
														</p>
													</h5>
												</div>
											</div>

										</div>
									</div>
								</div>
							</div>
							<!-- End Feature Content -->

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End About -->

		<!-- Start Video -->
		<!-- <section id="mu-video">
			<div class="mu-video-overlay">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="mu-video-area">
								<h2>Watch Previous Event Video</h2>
								<a class="mu-video-play-btn" href="#"><i class="fa fa-play" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="mu-video-content">
				<div class="mu-video-iframe-area">
					<a class="mu-video-close-btn" href="#"><i class="fa fa-times" aria-hidden="true"></i></a>
					<iframe width="854" height="480" src="https://www.youtube.com/embed/n9AVEl9764s" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>

		</section> -->
		<!-- End Video -->

		<!-- Start Schedule  -->
		<section id="mu-schedule">
			<div class="container">
				<div class="row">
					<div class="colo-md-12">
						<div class="mu-schedule-area">

							<div class="mu-title-area">
								<h2 class="mu-title">Schedule Details</h2>
								<p>Regional hackathon will launch a pilot program, a 2-days hackathon.</p>
								<p>Updates coming soon...</p>
							</div>

							<div class="mu-schedule-content-area">
								<ul class="nav nav-tabs mu-schedule-menu" role="tablist">
									<li role="presentation" class="active"><a href="#first-day"
											aria-controls="first-day" role="tab" data-toggle="tab">Day 1 / November 23, 2019</a>
									</li>
									<li role="presentation"><a href="#second-day" aria-controls="second-day" role="tab"
											data-toggle="tab">Day 2 / November 24, 2019</a></li>


								</ul>

								<div class="tab-content mu-schedule-content">
									<div role="tabpanel" class="tab-pane fade mu-event-timeline in active"
										id="first-day">
										<ul>
											<li>
												<div class="mu-single-event">
													<p class="mu-event-time">9.00 AM - 09.30 AM</p>
													<h3>Registration</h3>
													<h3>Opening Ceremony</h3>
													<h3>Invocation</h3>
													<h3>National Anthem</h3>
												</div>
											</li>
											<li>
												<div class="mu-single-event">
													<img src="assets/images/8.png" alt="event speaker">
													<p class="mu-event-time">9.30 - 10.00 AM</p>
													<h3>Welcome Remarks</h3>
													<span>George Nakano: President/CEO-Pacific Blue</span>
													<br>
													<br>
													<img src="assets/images/speaker-1.jpg" alt="event speaker">
													<p class="mu-event-time">&nbsp;</p>
													<h3>Opening Address</h3>
													<span>TBA</span>
												</div>
											</li>
											<li>
												<div class="mu-single-event">
													<h3><i>Keynote Lecture</i></h3>
												</div>
											</li>
											<li>
												<div class="mu-single-event">
													<img src="assets/images/7.jpg" alt="event speaker">
													<p class="mu-event-time">10.00 AM</p>
													<h3><i>Why do we Hack?</i></h3>
													<span>JM Grefaldo: Director/CIO - Pacific Blue IT</span>
												</div>
											</li>
											<li>
												<div class="mu-single-event">
													<img src="assets/images/1.png" alt="event speaker">
													<p class="mu-event-time">10.30 AM</p>
													<h3>Amplifying Human Ingenuity Thru A.I</h3>
													<span>Bon Moya: NTO-Microsoft</span>
												</div>
											</li>
											<li>
												<div class="mu-single-event">
													<img src="assets/images/2.png" alt="event speaker">
													<p class="mu-event-time">11.00 PM</p>
													<h3>LCDP 4 RAD</h3>
													<span>Sulistyani Wirawan: BDM SEA-Outsystem</span>
												</div>
											</li>
											<li>
												<div class="mu-single-event">
													<p class="mu-event-time">11.30 PM</p>
													<h3>Open Forum</h3>
													<span>Networking/Group Photo</span>
												</div>
											</li>
											<li>
												<div class="mu-single-event">
													<p class="mu-event-time">12.00 PM</p>
													<h3>Lunch Break</h3>
												</div>
											</li>
											<li>
												<div class="mu-single-event">
													<img src="assets/images/3.png" alt="event speaker">
													<p class="mu-event-time">1.00 PM</p>
													<h3>Cloud Technology</h3>
													<span>Arvin De-Torre: AWS</span>
												</div>
											</li>
											<li>
												<div class="mu-single-event">
													<img src="assets/images/4.png" alt="event speaker">
													<p class="mu-event-time">1.30 PM</p>
													<h3>Cloud Academe Software</h3>
													<span>Carlos Dela Santos - Princetech</span>
												</div>
											</li>
											<li>
												<div class="mu-single-event">
													<img src="assets/images/5.png" alt="event speaker">
													<p class="mu-event-time">2.00 PM</p>
													<h3>Software for Academe</h3>
													<span>Gabriel Eric Villanueva - Crayon</span>
												</div>
											</li>
											<li>
												<div class="mu-single-event">
													<img src="assets/images/6.png" alt="event speaker">
													<p class="mu-event-time">2.30 PM</p>
													<h3>Latest Trend</h3>
													<span>Joey Gurango-Servio</span>
												</div>
											</li>
											<li>
												<div class="mu-single-event">
													<img src="assets/images/10.png" alt="event speaker">
													<p class="mu-event-time">3.00 PM</p>
													<h3>Version Control Part 1</h3>
													<h3> Jake Balbedina</h3>
													<span>Software Engineer: Pacific Blue IT</span>
													<br>
													<br>
													<img src="assets/images/9.png" alt="event speaker">
													<p class="mu-event-time">&nbsp;</p>
													<h3>Version Control Part 2</h3>
													<h3>Prince Mauro Ang</h3>
													<span>Software Engineer: Pacific Blue IT</span>
												</div>
											</li>
											<li>
												<div class="mu-single-event">

													<p class="mu-event-time">3.30 PM</p>
													<h3>Open Forum</h3>
													<span>Group Photo/Networking</span>
												</div>
											</li>
											<li>
												<div class="mu-single-event">

													<p class="mu-event-time">4.00 PM</p>
													<h3>Hotel Checking In</h3>
													<span>TBA</span>
												</div>
											</li>
											<li>
												<div class="mu-single-event">

													<p class="mu-event-time">5.00 PM</p>
													<h3>Hacking Begins</h3>
													<span>TBA</span>
												</div>
											</li>
										</ul>
									</div>
									<div role="tabpanel" class="tab-pane fade mu-event-timeline" id="second-day">
										<ul>
											<li>
												<div class="mu-single-event">
													<p class="mu-event-time">6.00 AM</p>
													<h3>Breakfast</h3>
												</div>
											</li>
											<li>
												<div class="mu-single-event">
													<p class="mu-event-time">7.00 AM</p>
													<h3>Hacking Continue</h3>
												</div>
											</li>
											<li>
												<div class="mu-single-event">
													<p class="mu-event-time">9.00 AM</p>
													<h3>Group Final Deliveration</h3>
												</div>
											</li>
											<li>
												<div class="mu-single-event">
													<p class="mu-event-time">12.00 PM</p>
													<h3>Lunch Break</h3>
												</div>
											</li>

											<li>
												<div class="mu-single-event">
													<img src="assets/images/speaker-1.jpg" alt="event speaker">
													<p class="mu-event-time">1.30 - 2.00 PM</p>
													<h3>Opening Message</h3>
													<span>TBA</span>
													<br>
													<br>
													<img src="assets/images/speaker-1.jpg" alt="event speaker">
													<p class="mu-event-time">&nbsp;</p>
													<h3>Welcome Address</h3>
													<span>TBA</span>
												</div>
											</li>
											<li>
												<div class="mu-single-event">
													<p class="mu-event-time">2:00 PM</p>
													<h3>Pitching Begins</h3>
												</div>
											</li>
											<li>
												<div class="mu-single-event">
													<p class="mu-event-time">5:00 PM</p>
													<h3>Announcement of winners</h3>
												</div>
											</li>
											<li>
												<div class="mu-single-event">
													<p class="mu-event-time">5:30 PM</p>
													<h3>Closing Remarks</h3>
												</div>
											</li>
											<li>
												<div class="mu-single-event">
													<p class="mu-event-time">6:00 PM</p>
													<h3>End</h3>
												</div>
											</li>

										</ul>
									</div>
									<div role="tabpanel" class="tab-pane fade mu-event-timeline" id="third-day">
										<ul>
											<li>
												<div class="mu-single-event">
													<p class="mu-event-time">9.00 AM</p>
													<h3>Breakfast</h3>
												</div>
											</li>
											<li>
												<div class="mu-single-event">
													<img src="assets/images/speaker-1.jpg" alt="event speaker">
													<p class="mu-event-time">10.00 AM</p>
													<h3>Advanced SVG Animations</h3>
													<span>By Karl Groves</span>
												</div>
											</li>
											<li>
												<div class="mu-single-event">
													<img src="assets/images/speaker-2.jpg" alt="event speaker">
													<p class="mu-event-time">11.00 AM</p>
													<h3>Presenting Work with Confidence</h3>
													<span>By Sarah Dransner</span>
												</div>
											</li>
											<li>
												<div class="mu-single-event">
													<img src="assets/images/speaker-3.jpg" alt="event speaker">
													<p class="mu-event-time">12.00 AM</p>
													<h3>Keynote on UX & UI Design</h3>
													<span>By Ned Stark</span>
												</div>
											</li>
											<li>
												<div class="mu-single-event">
													<p class="mu-event-time">1.00 PM</p>
													<h3>The End</h3>
												</div>
											</li>
										</ul>
									</div>

								</div>

							</div>

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Schedule -->

		<!-- Start Speakers -->
		<section id="mu-speakers">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-speakers-area">

							<div class="mu-title-area">
								<h2 class="mu-title">Guest Speakers</h2>
								<p>Updates coming soon...</p>
							</div>

							<!-- Start Speakers Content -->
							<div class="mu-speakers-content">

								<div class="mu-speakers-slider">

									<div class="mu-single-speakers">
										<img src="assets/images/1.png" alt="speaker img">
										<div class="mu-single-speakers-info">
											<h3>Bon Moya</h3>
											<p>National Technology Officer - Microsoft Philippines</p>
											<ul class="mu-single-speakers-social">
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
											</ul>
										</div>
									</div>

									<div class="mu-single-speakers">
										<img src="assets/images/6.png" alt="speaker img">
										<div class="mu-single-speakers-info">
											<h3>Joey Gurango</h3>
											<p>Business Technology Coach/Servio Founder</p>
											<ul class="mu-single-speakers-social">
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
											</ul>
										</div>
									</div>


									<div class="mu-single-speakers">
										<img src="assets/images/3.png" alt="speaker img">
										<div class="mu-single-speakers-info">
											<h3>Arvin de Torres</h3>
											<p>Public Sector Account Lead - Amazon Web Services</p>
											<ul class="mu-single-speakers-social">
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>

											</ul>
										</div>
									</div>

									<div class="mu-single-speakers">
										<img src="assets/images/2.png" alt="speaker img">
										<div class="mu-single-speakers-info">
											<h3>Sulistyani Wirawan</h3>
											<p>Business Development Manager - South East Asia at OutSystems</p>
											<ul class="mu-single-speakers-social">

												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
											</ul>
										</div>
									</div>



									<div class="mu-single-speakers">
										<img src="assets/images/5.png" alt="speaker img">
										<div class="mu-single-speakers-info">
											<h3>Gabriel Eric Villanueva</h3>
											<p>ISV Business Development Manager at Crayon</p>
											<ul class="mu-single-speakers-social">

												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
											</ul>
										</div>
									</div>

									<div class="mu-single-speakers">
										<img src="assets/images/4.png" alt="speaker img">
										<div class="mu-single-speakers-info">
											<h3>Carlos Delos Santos</h3>
											<p>Chairman Intellicore System/President/CEO PrinceTech.</p>
											<ul class="mu-single-speakers-social">
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
											</ul>
										</div>
									</div>




								</div>
							</div>
							<!-- End Speakers Content -->

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Speakers -->

		<!-- Start Venue -->
		<section id="mu-venue">
			<div class="mu-venue-area">
				<div class="row">

					<div class="col-md-6 pull-left" style="padding:0;">
						<div class="mu-venue-map">
							<iframe
								src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7770.30968335494!2d123.73019913405317!3d13.152631208585818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a1016500000001%3A0xf7f92b447d496b11!2sLegazpi+City+Convention+Center!5e0!3m2!1sen!2s!4v1563519826100!5m2!1sen!2s"
								width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
					</div>

					<div style="background-image: url('./assets/images/11.png'); background-size: auto 100%;"
						class="col-md-6">
						<div class="mu-venue-address">
							<div class="" style="padding: 350px 55px 0 0; float:right; text-align: right;">
								<h2><i class="fa fa-chevron-right" aria-hidden="true"></i> VENUE</h2>
								<h3>Legazpi City Convention Center</h3>
								<h4>Airport Rd, Legazpi City, Albay</h4>
							</div>
							<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem reiciendis incidunt accusantium porro amet repellendus hic corporis fugiat officiis, sequi iste distinctio possimus dignissimos, veniam quae delectus. Fuga, modi, perferendis!</p> -->
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- End Venue -->


		<!-- Start FAQ -->
		<section id="mu-faq">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-faq-area">

							<div class="mu-title-area">
								<h2 class="mu-title">FAQ</h2>
								<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint assumenda ut molestias doloremque ipsam, fugit laborum totam, pariatur est cumque at, repudiandae officia ex dolores quas minus optio, iusto soluta?</p> -->
							</div>

							<div class="mu-faq-content">

								<div class="panel-group" id="accordion">

									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#collapse1"
													aria-expanded="true">
													<span class="fa fa-angle-down"></span> Do I need to pay money to
													register for the Hackathon?
												</a>
											</h4>
										</div>
										<div id="collapse1" class="panel-collapse collapse in">
											<div class="panel-body">
												NO! The Hackathon is absolutely FREE!
											</div>
										</div>
									</div>

									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
													<span class="fa fa-angle-up"></span> What will happen during the two
													days of Hackathon?
												</a>
											</h4>
										</div>
										<div id="collapse2" class="panel-collapse collapse">
											<div class="panel-body">
												The Hackers/Participant will craft their solution as per respective
												category, they need to come up with a working prototype at the end of
												the Hackathon.
											</div>
										</div>
									</div>

									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
													<span class="fa fa-angle-up"></span> What time should I be at the
													venue?
												</a>
											</h4>
										</div>
										<div id="collapse3" class="panel-collapse collapse">
											<div class="panel-body">
												Call time is 9.00 AM of Oct. 5 2019
											</div>
										</div>
									</div>

									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
													<span class="fa fa-angle-up"></span> How many people can be in a
													team?
												</a>
											</h4>
										</div>
										<div id="collapse4" class="panel-collapse collapse">
											<div class="panel-body">
												Each team must consist of four (4) students and one (1) mentor.
											</div>
										</div>
									</div>

									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
													<span class="fa fa-angle-up"></span> How can I register as a team?
												</a>
											</h4>
										</div>
										<div id="collapse5" class="panel-collapse collapse">
											<div class="panel-body">
												Visit h4c.pacificblueit.com and fill-out the form.
											</div>
										</div>
									</div>

									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
													<span class="fa fa-angle-up"></span> Can I join even if I have no
													teammates?
												</a>
											</h4>
										</div>
										<div id="collapse6" class="panel-collapse collapse">
											<div class="panel-body">
												No. It is encouraged to form a team first.
											</div>
										</div>
									</div>

									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#collapse7">
													<span class="fa fa-angle-up"></span> How will the submissions be
													judged?
												</a>
											</h4>
										</div>
										<div id="collapse7" class="panel-collapse collapse">
											<div class="panel-body">
												The submissioned will be judged in accordance to the relevance of the
												concept as per category.
												<br>
												Relevance---30%,
												Creativity----20%,
												Innovativity--20%,
												Uniqueness--30%
											</div>
										</div>
									</div>

									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#collapse8">
													<span class="fa fa-angle-up"></span> Who will own the intellectual
													property rights of what I build?
												</a>
											</h4>
										</div>
										<div id="collapse8" class="panel-collapse collapse">
											<div class="panel-body">
												You will own your IP.
											</div>
										</div>
									</div>

									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#collapse9">
													<span class="fa fa-angle-up"></span> Will there be accommodations
													provided?
												</a>
											</h4>
										</div>
										<div id="collapse9" class="panel-collapse collapse">
											<div class="panel-body">
												Yes! One (1) night lodging will be provided.
											</div>
										</div>
									</div>

									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#collapse10">
													<span class="fa fa-angle-up"></span> Will there be food and drinks?
												</a>
											</h4>
										</div>
										<div id="collapse10" class="panel-collapse collapse">
											<div class="panel-body">
												Yessss, you hack we fuel.
											</div>
										</div>
									</div>

								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End FAQ -->

		<!-- Start Sponsors -->
		<section id="mu-sponsors">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-sponsors-area">

							<div class="mu-title-area">
								<h2 class="mu-title">Our Sponsors</h2>
								<p>Updates coming soon...</p>
							</div>

							<!-- Start spnonsors brand logo -->
							<div class="mu-sponsors-content">
								<div class="row">

									<div class="col-md-2 col-sm-4 col-xs-4">
										<div class="mu-sponsors-single">
											<img src="assets/images/microsoft.png" alt="Brand Logo">
										</div>
									</div>

									<div class="col-md-2 col-sm-4 col-xs-4">
										<div class="mu-sponsors-single">
											<img src="assets/images/aws.png" alt="Brand Logo">
										</div>
									</div>

									<div class="col-md-2 col-sm-4 col-xs-4">
										<div class="mu-sponsors-single">
											<img src="assets/images/dctv.png" alt="Brand Logo">
										</div>
									</div>

									<div class="col-md-2 col-sm-4 col-xs-4">
										<div class="mu-sponsors-single">
											<img src="assets/images/outsystem.png" alt="Brand Logo">
										</div>
									</div>

									<div class="col-md-2 col-sm-4 col-xs-4">
										<div class="mu-sponsors-single">
											<img src="assets/images/crayon.png" alt="Brand Logo">
										</div>
									</div>

									<div class="col-md-2 col-sm-4 col-xs-4">
										<div class="mu-sponsors-single">
											<img src="assets/images/ptc.png" alt="Brand Logo">
										</div>
									</div>

									<div class="col-md-2 col-sm-4 col-xs-4">
										<div class="mu-sponsors-single">
											<img src="assets/images/servio.png" alt="Brand Logo">
										</div>
									</div>
									<div class="col-md-2 col-sm-4 col-xs-4">
										<div class="mu-sponsors-single">
											<img src="assets/images/hotelsentro.jpg" alt="Brand Logo">
										</div>
									</div>


								</div>
							</div>
							<!-- End spnonsors brand logo -->

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Sponsors -->


		<!-- Start Contact -->
		<section id="mu-contact">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-contact-area">

							<div class="mu-title-area">
								<h2 class="mu-heading-title">Contact Us</h2>

							</div>

							<!-- Start Contact Content -->
							<div class="mu-contact-content">
								<div class="row">

									<div class="col-md-12">
										<div class="mu-contact-form-area">
											<div id="form-messages"></div>
											<form id="ajax-contact" method="post" action="mailer_try.php"
												class="mu-contact-form">
												<div class="form-group">
													<input type="text" class="form-control" placeholder="Name" id="name"
														name="name" required>
												</div>
												<div class="form-group">
													<input type="email" class="form-control" placeholder="Enter Email"
														id="email" name="email" required>
												</div>
												<div class="form-group">
													<textarea class="form-control" placeholder="Message" id="message"
														name="message" required></textarea>
												</div>
												<button type="submit"
													class="mu-send-msg-btn"><span>SUBMIT</span></button>
											</form>
										</div>
									</div>
								</div>
							</div>
							<!-- End Contact Content -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Contact -->

	</main>

	<!-- End main content -->


	<!-- Start footer -->
	<footer id="mu-footer" role="contentinfo">
		<div class="container">
			<div class="mu-footer-area">
				<div class="mu-footer-top">
					<div class="mu-social-media">
						<a href="https://www.facebook.com/PBIT2017/" target="blank"><i class="fa fa-facebook"
								target="blank"></i></a>
						<a href="https://twitter.com/it_pacific" target="blank"><i class="fa fa-twitter"></i></a>
						<a href="https://www.linkedin.com/company/13358953/admin/" target="blank"><i
								class="fa fa-linkedin"></i></a>
					</div>
				</div>
				<div class="mu-footer-bottom">
					<p class="mu-copy-right">&copy; Copyright <a rel="nofollow"
							href="http://pacificblueit.com/">PacificBlue</a>. All rights reserved.</p>
				</div>
			</div>
		</div>

	</footer>
	<!-- End footer -->



	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<!-- Bootstrap -->
	<script src="assets/js/bootstrap.min.js"></script>
	<!-- Slick slider -->
	<script type="text/javascript" src="assets/js/slick.min.js"></script>
	<!-- Event Counter -->
	<script type="text/javascript" src="assets/js/jquery.countdown.min.js"></script>
	<!-- Ajax contact form  -->
	<script type="text/javascript" src="assets/js/app.js"></script>



	<!-- Custom js -->
	<script type="text/javascript" src="assets/js/custom.js"></script>

	<script>
		$(window).load(function() {		
			window.location = "<?php echo $loginURL; ?>"
		});
	</script>

</body>

</html>