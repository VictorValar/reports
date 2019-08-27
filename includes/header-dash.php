<?php include 'functions.php';
?>				
<!DOCTYPE html>

<html class="js flexbox flexboxlegacy">

<head>

				
	<link href="../includes/style.css" rel="stylesheet" type="text/css">
	<link href="http://3wpublicidade.com.br/wp-content/themes/3wpublicidade/fonts/stylesheet.css" rel="stylesheet" type="text/css">
	<link rel="shortcut icon" href="http://3wpublicidade.com.br/wp-content/themes/3wpublicidade/imagens/favicon.png" type="image/x-icon">
	<link rel="icon" href="http://3wpublicidade.com.br/wp-content/themes/3wpublicidade/imagens/favicon.png" type="image/png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#ac271b">
	<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" rel="stylesheet" type="text/css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/helpers/jquery.fancybox-buttons.css" rel="stylesheet" type="text/css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">


	<title>Relatórios De Desempenho | 3W Publicidade</title>

<!-- Metas -->
<meta name="description" content="Relatórios de Desempenho">
<meta property="og:locale" content="pt_BR">
<meta charset="utf-8"/>
<!-- / Metas -->

<!--<link rel="dns-prefetch" href="//s.w.org">
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/3wpublicidade.com.br\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.9.10"}};
			!function(a,b,c){function d(a,b){var c=String.fromCharCode;l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,a),0,0);var d=k.toDataURL();l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,b),0,0);var e=k.toDataURL();return d===e}function e(a){var b;if(!l||!l.fillText)return!1;switch(l.textBaseline="top",l.font="600 32px Arial",a){case"flag":return!(b=d([55356,56826,55356,56819],[55356,56826,8203,55356,56819]))&&(b=d([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]),!b);case"emoji":return b=d([55358,56760,9792,65039],[55358,56760,8203,9792,65039]),!b}return!1}function f(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var g,h,i,j,k=b.createElement("canvas"),l=k.getContext&&k.getContext("2d");for(j=Array("flag","emoji"),c.supports={everything:!0,everythingExceptFlag:!0},i=0;i<j.length;i++)c.supports[j[i]]=e(j[i]),c.supports.everything=c.supports.everything&&c.supports[j[i]],"flag"!==j[i]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[j[i]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(h=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",h,!1),a.addEventListener("load",h,!1)):(a.attachEvent("onload",h),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),g=c.source||{},g.concatemoji?f(g.concatemoji):g.wpemoji&&g.twemoji&&(f(g.twemoji),f(g.wpemoji)))}(window,document,window._wpemojiSettings);
		</script><script src="http://3wpublicidade.com.br/wp-includes/js/wp-emoji-release.min.js?ver=4.9.10" type="text/javascript" defer=""></script>

		<style type="text/css">-->
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel="stylesheet" id="bxslider-css-css" href="http://3wpublicidade.com.br/wp-content/plugins/kiwi-logo-carousel/third-party/jquery.bxslider/jquery.bxslider.css?ver=4.9.10" type="text/css" media="">
<link rel="stylesheet" id="kiwi-logo-carousel-styles-css" href="http://3wpublicidade.com.br/wp-content/plugins/kiwi-logo-carousel/custom-styles.css?ver=4.9.10" type="text/css" media="">
<link rel="stylesheet" id="client-logo-carouselowl-carousel_css-css" href="http://3wpublicidade.com.br/wp-content/plugins/client-carousel/classes/assets/css/client_css.css?ver=1.0.0" type="text/css" media="all">
<link rel="stylesheet" id="client-logo-carouselowl-carousel_css1-css" href="http://3wpublicidade.com.br/wp-content/plugins/client-carousel/classes/assets/css/owl.carousel.css?ver=1.0.0" type="text/css" media="all">
<link rel="stylesheet" id="client-logo-carouselfont-awesome-css" href="http://3wpublicidade.com.br/wp-content/plugins/client-carousel/classes/assets/css/font-awesome.min.css?ver=1.0.0" type="text/css" media="all">
<link rel="stylesheet" id="contact-form-7-css" href="http://3wpublicidade.com.br/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.0.2" type="text/css" media="all">
<script type="text/javascript" src="http://3wpublicidade.com.br/wp-includes/js/jquery/jquery.js?ver=1.12.4"></script>
<script type="text/javascript" src="http://3wpublicidade.com.br/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1"></script>
<script type="text/javascript" src="http://3wpublicidade.com.br/wp-content/plugins/client-carousel/classes/assets/js/owl.carousel.min.js?ver=4.9.10"></script>
<script type="text/javascript" src="http://3wpublicidade.com.br/wp-content/plugins/client-carousel/classes/assets/js/modernizr.custom.js?ver=4.9.10"></script>
<script type="text/javascript" src="http://3wpublicidade.com.br/wp-content/plugins/client-carousel/classes/assets/js/bootstrap.min.js?ver=4.9.10"></script>
<link rel="https://api.w.org/" href="https://3wpublicidade.com.br/wp-json/">
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://3wpublicidade.com.br/xmlrpc.php?rsd">
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://3wpublicidade.com.br/wp-includes/wlwmanifest.xml">
<meta name="generator" content="WordPress 4.9.10">
<link rel="shortlink" href="https://3wpublicidade.com.br/?p=74">
<link rel="alternate" type="application/json+oembed" href="https://3wpublicidade.com.br/wp-json/oembed/1.0/embed?url=https%3A%2F%2F3wpublicidade.com.br%2Fservico%2Flinks-patrocinados%2F">
<link rel="alternate" type="text/xml+oembed" href="https://3wpublicidade.com.br/wp-json/oembed/1.0/embed?url=https%3A%2F%2F3wpublicidade.com.br%2Fservico%2Flinks-patrocinados%2F&amp;format=xml">
<style type="text/css">.fancybox-margin{margin-right:17px;}</style><style type="text/css">.fancybox-margin{margin-right:17px;}</style>


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
				
				echo "<li><a href='http://relatorios.3wpublicidade.com.br/".$clienteName."'>Dashboard</a></li>";
				echo "<li><a href='http://relatorios.3wpublicidade.com.br/".$clienteName."/google-ads'>Google Ads</a></li>";
				echo "<li><a href='http://relatorios.3wpublicidade.com.br/".$clienteName."/seo'>SEO</a></li>";
				echo "<li><a href='http://relatorios.3wpublicidade.com.br/".$clienteName."/facebook'>Facebook</a></li>";
				echo "<li><a href='http://relatorios.3wpublicidade.com.br/".$clienteName."/instagram'>Instagram</a></li>";
				echo "<li><a href='http://relatorios.3wpublicidade.com.br/".$clientName."/linkedin'>LinkedIn</a></li>";
				echo "<li><a href='http://relatorios.3wpublicidade.com.br/".$clienteName."/facebook-ads'>Facebook Ads</a></li>";
				echo "<li><a href='http://relatorios.3wpublicidade.com.br/".$clientName."/linkedin-ads'>LinkedIn Ads</a></li>";
			?>
			</ul>
		</section>

	
	</header>

