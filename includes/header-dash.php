<!DOCTYPE html> <?php include 'navigation.php'; include	'../includes/sheets.php';?>	

<html>
<head>

	<!-- Links -->			
	<link href="../includes/style.css" rel="stylesheet" type="text/css">

	<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<link rel="stylesheet" id="client-logo-carouselowl-carousel_css-css" href="http://3wpublicidade.com.br/wp-content/plugins/client-carousel/classes/assets/css/client_css.css?ver=1.0.0" type="text/css" media="all">

	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<link rel="icon" href="http://3wpublicidade.com.br/wp-content/themes/3wpublicidade/imagens/favicon.png" type="image/png">

	<link rel="shortcut icon" href="http://3wpublicidade.com.br/wp-content/themes/3wpublicidade/imagens/favicon.png" type="image/x-icon">

<title>Relatórios De Desempenho | 3W Publicidade</title>
<!-- Metas -->
<meta name="description" content="Relatórios de Desempenho">
<meta property="og:locale" content="pt_BR">
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Mobile Menu .js-->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.cycle2/2.1.6/jquery.cycle2.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/helpers/jquery.fancybox-buttons.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-smooth-scroll/1.7.2/jquery.smooth-scroll.min.js"></script>
	<script type="text/javascript" src="http://3wpublicidade.com.br/wp-content/themes/3wpublicidade/js/index.js"></script>
	<script type="text/javascript">
		var BASE_URL = 'http://3wpublicidade.com.br';
		var TEMPLATE_URL = 'http://3wpublicidade.com.br/wp-content/themes/3wpublicidade';
	</script> -->
<!--Endo of Mobile Menu .js-->



</head>

<body cz-shortcut-listen="true">

  <header id="header">
		<section class="top-bar">
			<section class="content">
				<section class="infos-top">

					<p><i class="fa fa-envelope"></i> <a href="mailto:atendimento@3wpublicidade.com.br"> atendimento@3wpublicidade.com.br</a></p>

				</section>

				<section class="social-bar">
					<a href="https://www.facebook.com/3WPOficial" target="_blank"><i class="fa fa-facebook-f"></i></a>
					<a href="https://plus.google.com/+3wpublicidadeBrOficial" target="_blank"><i class="fa fa-google-plus"></i></a>
					<a href="https://twitter.com/3wpoficial" target="_blank"><i class="fa fa-twitter"></i></a>
					<a href="https://www.linkedin.com/company/3w-publicidade?originalSubdomain=pt" target="_blank"><i class="fa fa-linkedin"></i></a>
					<a href="https://www.instagram.com/3wpublicidade/" target="_blank"><i class="fa fa-instagram"></i></a>
				</section>
			</section>
		</section>

		<!--Menu-->
		<section class="menu-top">
			<section class="content">
				<section class="logo">
					<a class="logo-a" href="http://3wpublicidade.com.br/"><img src="http://3wpublicidade.com.br/wp-content/themes/3wpublicidade/imagens/logo.png"></a>
					<a href="https://www.google.com/partners/?hl=pt-BR#a_profile;idtf=3965679898" target="_blank"><img src="http://3wpublicidade.com.br/wp-content/themes/3wpublicidade/imagens/google-partners.png"></a>
				</section>

				

				<nav class="menu">
					<!--<a href="http://relatorios.3wpublicidade.com.br/clinipam/google-ads">Google Ads</a>-->

					<?php

					echo "<a class='dropbtn' href='http://relatorios.3wpublicidade.com.br/".$clientName."/'>Dashboard</a>";

					echo "<a class='dropbtn' href='http://relatorios.3wpublicidade.com.br/".$clientName."/google-ads'>Google Ads</a>";
					echo "<a class='dropbtn' href='http://relatorios.3wpublicidade.com.br/".$clientName."/seo'>SEO</a>";
					
					echo "<section class='dropdown'>
						<a href='http://relatorios.3wpublicidade.com.br/".$clientName."/social-media' class='dropbtn'>Social Media </a>
							<section class='dropdown-content'>
							    <a href='http://relatorios.3wpublicidade.com.br/".$clientName."/facebook'>Facebook</a>
							    <a href='http://relatorios.3wpublicidade.com.br/".$clientName."/instagram'>Instagram</a>
								<a href='http://relatorios.3wpublicidade.com.br/".$clientName."/linkedin'>LinkedIn</a>

	  						</section>
  					</section>";
				
					echo "<section class='dropdown'>
						<a href='#' class='dropbtn'> Social Ads </a>
							<section class='dropdown-content'>

							    <a href='http://relatorios.3wpublicidade.com.br/".$clientName."/facebook-ads'>Facebook & Instagram</a>
							    <a href='http://relatorios.3wpublicidade.com.br/".$clientName."/linkedin-ads'>LinkedIn Ads</a>

	  						</section>
  					</section>";
					?>

					
					
				</nav>

			</section>
		</section>

		<section class="menu-hamburguer">
			<a href=""><i class="fa fa-bars" aria-hidden="true"></i></a>
		</section>

		<section class="menu-mobile">
			<a href="" class="close"><i class="fa fa-times" aria-hidden="true"></i></a>
			<ul>
				<?php
				
				echo "<li><a href='http://relatorios.3wpublicidade.com.br/".$clientName."'>Dashboard</a></li>";
				echo "<li><a href='http://relatorios.3wpublicidade.com.br/".$clientName."/google-ads'>Google Ads</a></li>";
				echo "<li><a href='http://relatorios.3wpublicidade.com.br/".$clientName."/seo'>SEO</a></li>";
				echo "<li><a href='http://relatorios.3wpublicidade.com.br/".$clientName."/facebook'>Facebook</a></li>";
				echo "<li><a href='http://relatorios.3wpublicidade.com.br/".$clientName."/instagram'>Instagram</a></li>";
				echo "<li><a href='http://relatorios.3wpublicidade.com.br/".$clientName."/linkedin'>LinkedIn</a></li>";
				echo "<li><a href='http://relatorios.3wpublicidade.com.br/".$clientName."/facebook-ads'>Facebook Ads</a></li>";
				echo "<li><a href='http://relatorios.3wpublicidade.com.br/".$clientName."/linkedin-ads'>LinkedIn Ads</a></li>";
			?>
			</ul>
		</section>

	
	</header>

