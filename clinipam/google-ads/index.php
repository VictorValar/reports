
<?php include '../../includes/header.php';?>

	  
<section id='greyband'>
	<section class="top-title">
		<?php	echo "<h2 font-style:italic>Relatório Google Ads | ".$clientUpperName."</h2>"; ?>
	</section>

<!-- Report -->
	
		
	<?php

	if ($gAds == 1)
	{
		function isMobileDevice() {
			return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
		}
		if(isMobileDevice()){
			$reportheight="1200";
			$reportwidth="100%";
		}
		else {
			$reportheight="3500";
			$reportwidth="80%";
		}
		echo "
	<section class='report'>

<iframe width=".$reportwidth." height=".$reportheight." src='".$gAdsReportUrl."' frameborder='0' style='border:0' allowfullscreen>
				        </iframe>
	</section>";
	} else
	{
		//<!--Google Ads No Service Box-->	
		echo "<div class='servicebox row noservice'>
		<section class=' servicebox noservice'>
			<div class='gadsboxL col-12'>
				<div class='row'>
					<h2>Google Ads</h2>

				</div>

				<div class='row'>
					<p>
						Para quem precisa de uma solução
						<span style='font-style: italic'>“para ontem”</span>, não dá pra perder tempo pesquisando o serviço ideal. Com o Google Ads, a página sua empresa fica em evidência na busca do Google e o seu público consegue chegar a você com maior facilidade. Vem com a gente que é sucesso!
					</p>

					<a class='button button1'>Solicitar Orçamento</a>
				</div>
			</div>


		</section>

	</div>
</div>";
	}
	
	
	
	
	?>
		



</section>


<section id="servicos" class=" servicos-intern">
	<section class="content">
		<section class="top">
			<h2 class="title">Conheça todos os nossos serviços:</h2>
		</section>

		<section class="bottom">
			<a href="http://3wpublicidade.com.br/servico/seo/" class="unity ">
				<p class="title-item"> Otimização de sites</p>
				<section class="color green-1"></section>
			</a>

			<a href="http://3wpublicidade.com.br/servico/links-patrocinados/" class="unity">
				<p class="title-item">Links Patrocinados</p>
				<section class="color light-blue-1"></section>
			</a>

			<a href="http://3wpublicidade.com.br/servico/social-media/" class="unity">
				<p class="title-item">Social Media</p>
				<section class="color blue-1"></section>
			</a>

			<a href="http://3wpublicidade.com.br/servico/sites-e-lojas-virtuais/" class="unity">
				<p class="title-item">Sites e Lojas Virtuais</p>
				<section class="color  dark-orange-1"></section>
			</a>

			<a href="http://3wpublicidade.com.br/servico/videos-e-animacoes/" class="unity">
				<p class="title-item">Vídeos e Animações</p>
				<section class="color yellow-1"></section>
			</a>

			<a href="http://3wpublicidade.com.br/servico/business-intelligence/" class="unity">
				<p class="title-item">Business Intelligence</p>
				<section class="color  pink-1"></section>
			</a>

			<a href="http://3wpublicidade.com.br/servico/inbound-marketing/" class="unity">
				<p class="title-item">Inbound Marketing</p>
				<section class="color  magenta-1"></section>
			</a>

			<a href="http://3wpublicidade.com.br/servico/design-grafico/" class="unity">
				<p class="title-item">Design Gráfico</p>
				<section class="color orange-1"></section>
			</a>
		</section>
	</section>
</section>


<section id="footer">

	<section class="top">
		<section class="content">
			<section class="grid">
				<a href="https://abcomm.org/" target="_blank" class="one"><img src="http://3wpublicidade.com.br/wp-content/themes/3wpublicidade/imagens/grid1.png"></a>
				<a href="https://www.google.com/partners/?hl=pt-BR#a_profile;idtf=3965679898" target="_blank" class="two"><img src="http://3wpublicidade.com.br/wp-content/themes/3wpublicidade/imagens/grid2.png"></a>
				<a href="http://www.sebrae.com.br/sites/PortalSebrae/ufs/pe/sebraeaz/movimento-compre-do-pequeno-negocio,10b2794363447510VgnVCM1000004c00210aRCRD" target="_blank" class="three"><img src="http://3wpublicidade.com.br/wp-content/themes/3wpublicidade/imagens/grid3.png"></a>
				<a href="https://www.rdstation.com/" target="_blank" class="four"><img src="http://3wpublicidade.com.br/wp-content/themes/3wpublicidade/imagens/grid4.png"></a>
			</section>
			<section class="content-title">
				<p class="title">NOSSAS <span>CERTIFICAÇÕES</span></p>
			</section>
		</section>
	</section>

	<section class="bottom">
		<section class="content">
			<section class="infos">
				<section class="contact">
					<p class="title">Dúvidas? Teremos prazer em ajudá-lo(a)</p>
					<span class="line"></span>
					<p class="data"><a href="tel:+554130464700">+55 41 3046-4700</a><br>atendimento@3wpublicidade.com.br</p>
				</section>

				<section class="location">
					<p class="title">Venha tomar um cafézinho conosco</p>
					<span class="line"></span>
					<p class="data">Rua Florisval Lanconi, 290, Tarumã<br> Curitiba - PR - 82800-120</p>
				</section>

				<section class="socials">
					<p class="title">Conecte-se com a gente</p>
					<span class="line"></span>
					<nav>
						<a href="https://www.facebook.com/3WPOficial" target="_blank"><i class="fa fa-facebook"></i></a>
						<a href="https://www.instagram.com/3wpublicidade/" target="_blank"><i class="fa fa-instagram"></i></a>
						<a href="https://plus.google.com/+3wpublicidadeBrOficial" target="_blank"><i class="fa fa-google-plus"></i></a>
						<a href="https://twitter.com/3wpoficial" target="_blank" class="twwt"><i class="fa fa-twitter"></i></a>
					</nav>
				</section>
			</section>
			<section class="assign">
				<p class="title">Desenvolvido por<br><span> 3W Publicidade © Copyright 2018</span></p>
			</section>
		</section>
		<img src="">
	</section>
</section>

</html>
