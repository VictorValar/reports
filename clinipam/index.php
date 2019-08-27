
<?php 

	include '../includes/header-dash.php';
	$Gsaldo = "1111";
	$GdiasRes = "1";
	$Sorganic = "2222";
	$Stotal = "3333";
	//include '../includes/sheets.php';
?>	
	
<section id="greyband">
	<section class="top-title">
		<?php echo "<h2 font-style: italic>Dashboard ".$clientUpperName."</h2>";?>
		
	</section>
<section class="dashbox">

<!-- Report -->

<?php
//<!-- Mail -->
//$to = "victor.ribeiro@3wpublicidade.com.br";
//$subject = "My subject";
//$txt = "Hello world!";
//$headers = "From: victor.ribeiro@3wpublicidade.com.br" . "\r\n" .
//"CC: victor.ribeiro@3wpublicidade.com.br";
//mail($to,$subject,$txt,$headers);




//<!--Google Ads Box-->	
if ($gAds == 1)
{	
	echo "<div id='Google-Ads'>
	<div class='servicebox row'>
		<section class=' servicebox'>
			<div class='gadsboxL col-6'>
				<div class='row' style='height:50%'>
					<h2>Google Ads</h2>
					<p>O boleto é enviado automaticamente quando 'Dias Restantes' é inferior a 7 ou seguindo uma regra acordada com os analistas </p>
				</div>
				<div class='row' style='height:50%'>
					<a class='button button1' href='".$gAdsUrl."'>Ver Relatório</a>
					<a id='sol-boleto-gads' class='button button1'>Solicitar Boleto</a>
				</div>
			</div>

			<div class='gadsboxR col-6'>

				<div class='row col-6'>
					<button class='infob infob1'>
						<span style='font-size:18px; font-style: italic; font-weight: 400'>Saldo</span>
						<br />
						".$Gsaldo."
					</button>
				</div>

				<div class='row col-6'>
					<button class='infob infob1'>
						<span style='font-size:18px; font-style: italic; font-weight: 400'>Dias Restantes</span>
						<br />
						".$GdiasRes."
					</button>
				</div>

			</div>
		</section>
	</div>";
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
  	
//<!--End of Google Ads Box-->

//<!--SEO Box-->
if ($seo == 1)
{
	echo "
<div id='SEO'>
	<div class='servicebox row one-button2'>
		<section class=' servicebox one-button2'>
			<div class='one-button gadsboxL col-6'>
				<div class='row'>
					<h2>SEO</h2>
				</div>
				<div class='row'>
					<p>Analise o desempenho orgânico do seu site e seu posicionamento no Google. </p>
					<a class='button button2' href='".$seoUrl."'>Ver Relatório</a>

				</div>
			</div>

			<div class='gadsboxR col-6'>

				<div class='row col-6'>
					<button class='infob infob2'>
						<span style='font-size:18px; font-style: italic; font-weight: 400'>Acessos Orgânicos</span>
						<br />
						".$Sorganic."
					</button>
				</div>

				<div class='row col-6'>
					<button class='infob infob2'>
						<span style='font-size:18px; font-style: italic; font-weight: 400'>Acessos Totais</span>
						<br />
						".$Stotal."
					</button>
				</div>

			</div>
		</section>
	</div>";
} else
  {
	//<!--SEO No Service Box-->
  	echo "<div class='servicebox sb1 row noservice'>
		<section class=' servicebox noservice'>
			<div class='gadsboxL sb1 col-12'>
				<div class='row'>
					<h2>SEO</h2>
				</div>

				<div class='row'>
					<p>Se você abre o Google e tem que ficar procurando a sua empresa nas várias páginas do buscador, não perca tempo! Com o SEO, a página da sua empresa fica melhor rankeada na busca orgânica, fora que o seu público consegue ter maior identificação com a sua empresa através do conteúdo diferenciado. Vem com a gente que é sucesso!</p>
					<a class='button button2'>Solicitar Orçamento</a>
				</div>
			</div>

		</section>
	</div>
</div>";
  }	
//<!--End of SEO Box-->

//<!--Social Media Box-->

if ($socialmedia == 1)
{
	echo "<div id='Social-Media'>
	<div class='servicebox row'>
		<section class=' servicebox'>
			<div class='gadsboxL col-6'>
				<div class='row'>
					<h2>Social Media</h2>
				</div>
				<div class='row'>
					<p>
						O boleto é enviado automaticamente quando 'Dias Restantes' é inferior a 7 ou seguindo uma regra acordada com os analistas
					</p>
					<a class='button button3' href='".$fbUrl."'>Relatório Facebook</a>
					<a class='button button3' href='".$instaUrl."'>Relatório Instagram</a>
				</div>
			</div>

			<div class='gadsboxR gadsboxL col-6'>
				<div class='row' style='height:50%'>
					<h2>Pautas Social Media</h2>
					<h3 style='color:red; text-align:center; margin:3vh'>Você Tem Pautas Não Aprovadas</h3>
				</div>
				<div class='row' style='height:50%'>

					<a class='button button3' href='".$socialmediaUrl."'>Ver Pautas</a>
				</div>
			</div>
		</section>
	</div>";
} else 
	//<!--Social Media No Service Box-->
   {
	   echo "<div class='servicebox noservice row'>
		<section class=' servicebox noservice'>
			<div class='gadsboxL sb1 col-12'>
				<div class='row'>
					<h2>Social Media</h2>
				</div>

				<div class='row'>
					<p>Lembre-se do velho ditado “Quem não é visto, não é lembrado”. Com as mídias sociais, a sua empresa pode se aproximar dos seus clientes, melhorando o relacionamento entre vocês.</p>
					<a class='button button3 sol-orcamento'>Solicitar Orçamento</a>
				</div>
			</div>
		</section>
	</div>

</div>";
}

//<!--End of Social Media Box-->

//<!--Facebook Ads Box-->
if ($fbAds == 1)
{
	echo "<div id='Facebook-Ads'>

	<div class='servicebox row'>
		<section class=' servicebox'>
			<div class='gadsboxL col-6'>
				<div class='row' style='height:50%'>
					<h2>Facebook Ads</h2>
					<p>O boleto é enviado automaticamente quando 'Dias Restantes' é inferior a 7 ou seguindo uma regra acordada com os analistas </p>
				</div>
				<div class='row' style='height:50%'>

					<a class='button button4' href='".$fbAdsUrl."'>Ver Relatório</a>
					<a class='button button4 sol-boleto'>Solicitar Boleto</a>
				</div>
			</div>

			<div class='gadsboxR col-6'>

				<div class='row col-6'>
					<button class='infob infob5'>
						<span style='font-size:18px; font-style: italic; font-weight: 400'>Saldo</span>
						<br />
						R$ 4.222,89
					</button>
				</div>

				<div class='row col-6'>
					<button class='infob infob5'>
						<span style='font-size:18px; font-style: italic; font-weight: 400'>Dias Restantes</span>
						<br />
						6
					</button>
				</div>

			</div>
		</section>
	</div>";
} else
//<!--Facebook Ads No Service Box-->
	{
	echo "<div class='servicebox row noservice'>
		<section class=' servicebox noservice'>
			<div class='gadsboxL col-12'>
				<div class='row'>
					<h2>Facebook Ads</h2>

				</div>
				<div class='row'>
					<p>Se você olha para o seu público-alvo e pensa: “Saudades do que a gente ainda não viveu”, não perca tempo! Com o serviço de Facebook Ads e o Instagram Ads, os seus posts chegam ao público que é o ideal para a sua empresa. Vem com a gente que é sucesso!</p>
					<a class='button button4 sol-orcamento'>Solicitar Orçamento</a>
				</div>
			</div>
		</section>
	</div>

</div>";
}	
	//<!--End of Facebook Ads Box-->

	//<!--LinkedIn Ads Box-->
if ($linkedinAds == 1)
{
	echo "<div id='LinkedIn-Ads'>
	<div class='servicebox row'>
		<section class=' servicebox'>
			<div class='gadsboxL col-6'>
				<div class='row' style='height:50%'>
					<h2>LinkedIn Ads</h2>
					<p>O boleto é enviado automaticamente quando 'Dias Restantes' é inferior a 7 ou seguindo uma regra acordada com os analistas </p>
				</div>
				<div class='row' style='height:50%'>

					<a class='button button5' href='".$linkedinAdsUrl."'>Ver Relatório</a>
					<a class='button button5 sol-boleto'>Solicitar Boleto</a>
				</div>
			</div>

			<div class='gadsboxR col-6'>

				<div class='row col-6'>
					<button class='infob infob4'>
						<span style='font-size:18px; font-style: italic; font-weight: 400'>Saldo</span>
						<br />
						R$ 4.222,89
					</button>
				</div>

				<div class='row col-6'>
					<button class='infob infob4'>
						<span style='font-size:18px; font-style: italic; font-weight: 400'>Dias Restantes</span>
						<br />
						6
					</button>
				</div>

			</div>
		</section>
	</div>";
}
else
	//<!--LinkedIn Ads No Service Box-->
{
	echo "<div class='servicebox row noservice'>
		<section class=' servicebox noservice'>
			<div class='gadsboxL col-12'>
				<div class='row'>
					<h2>LinkedIn Ads</h2>

				</div>
				<div class='row'>
					<p>Se você acha que o LinkedIn utilizado só por quem está procurando emprego, você está enganado. Anuncie em uma rede social onde 4 entre 5 usuários impulsionam decisões de negócios com o LinkedIn Ads.</p>

					<a class='button button5 sol-orcamento'>Solicitar Orçamento</a>
				</div>
			</div>


		</section>

	</div>
</div>";
}
//<!--End of LinkedIn Ads Box-->
?>
</section> <!--dashbox end section tag-->
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








<!--Modal sol-boleto-gads-modal-->
<div class="sol-boleto-gads-modal">
<div id="sol-boleto-gads-modal" class="modal"><!-- The Modal -->

  <!-- Modal content -->
  <div class="modal-content">
    <span class="closes">&times;</span>
    <h2>Solicitar Boleto Google Ads</h2>
	<p>Para solicitar um boleto do Google Ads, preencha as informações abaixo:</p>

	<form action="sol-boleto-gads.php" method="post">
		<label>Nome:</label><br />
		<input class="inputform" type="text" name="name" required/><br />

		<label>Telefone:</label><br />
		<input class="inputform" type="tel" name="tel" required/> <br />

		<label>Email:</label><br />
		<input class="inputform" type="tel" name="email" required/> <br />

		<label>Valor do Boleto:</label><br />
		<input class="inputform" type="text" name="paymentAmount" required value="R$"/> <br />

		<label>Mensagem:</label><br />		
		<textarea class="inputform" name="message" > </textarea><br />

		<input type="submit" value="Enviar" class="button button1">
	</form>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById("sol-boleto-gads-modal");

// Get the button that opens the modal
var btn = document.getElementById("sol-boleto-gads");
	

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("closes")[0];

// When the user clicks on the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
	};

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</div>
<!--End of sol-boleto-gads-modal-->

</section><!--greyband end section tag-->
</html>
