<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->



<!DOCTYPE html>
<html lang="zxx">



<!-- Head -->
<head>

<title>C.G.L</title>

<!-- Meta-Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="Game Robo a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Meta-Tags -->

<!-- Custom-Stylesheet-Links -->
<!-- Bootstrap-CSS -->	  <link rel="stylesheet" href="css/bootstrap.min.css"  type="text/css" media="all">
<!-- Index-Page-CSS -->	  <link rel="stylesheet" href="css/style.css"		   type="text/css" media="all">
<!-- Owl-Carousel-CSS --> <link rel="stylesheet" href="css/owl.carousel.css"   type="text/css" media="all">
<!-- Chocolat-CSS -->	  <link rel="stylesheet" href="css/chocolat.css"	   type="text/css" media="all">
<!-- Animate-CSS -->	  <link rel="stylesheet" href="css/animate-custom.css" type="text/css" media="all">
<!-- //Custom-Stylesheet-Links -->

<!-- Fonts -->
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:400,700"	   type="text/css" media="all">
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,100,300,500" type="text/css" media="all">

<link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
<!-- //Fonts -->

<!-- Font-Awesome-File-Links -->
<!-- CSS --> <link rel="stylesheet" href="css/font-awesome.min.css" 	 type="text/css" media="all">
<!-- TTF --> <link rel="stylesheet" href="fonts/fontawesome-webfont.ttf" type="text/css" media="all">
<!-- //Font-Awesome-File-Links -->
<script>
function formatar(mascara, documento){
  var i = documento.value.length;
  var saida = mascara.substring(0,1);
  var texto = mascara.substring(i)
  
  if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
  }
  
}
</script>

</head>
<!-- //Head -->



<!-- Body -->
<body>

@if (session('status'))
        <script language="javascript">
        alert("Formulário enviado com Sucesso")
        </script>
    @endif

	<!-- Header -->
	<div class="agileheader" id="agileitshome">

		<!-- Navigation -->
		<div class="w3lsnavigation">
			<nav class="navbar navbar-inverse agilehover-effect wthreeeffect navbar-default">

				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Logo -->
					<div class="logo">
						<a class="navbar-brand logo-w3l button" href="index.html">C.G.L</a>
						<p style="color: #FFF;font-family: 'Press Start 2P', cursive;font-size: 20px;line-height: 20px;padding-top: 2%;">Ceunes Game League</p>
					</div>
					<!-- //Logo -->
				</div>

				<div id="navbar" class="navbar-collapse navbar-right collapse">
					<ul class="nav navbar-nav navbar-right cross-effect" id="cross-effect">
						<li><a class="scroll" href="#agileinfoplatforms">PLATAFORMAS</a></li>
						<li><a class="scroll" href="#w3lsaboutaits">Sobre</a></li>
						<li><a class="scroll" href="#w3portfolioaits">INFORMAÇÕES</a></li>
						<li><a class="scroll" href="#wthreetabsaits">INSCRIÇÃO</a></li>
						<li><a class="scroll" href="#agilecontactw3ls">CONTATO</a></li>
					</ul>
				</div><!-- //Navbar-Collapse -->

			</nav>
		</div>
		<!-- //Navigation -->

		<!-- Slider -->
		<div class="slider">
			<ul class="rslides" id="slider">
				<li class="first-slide w3ls">
					<img src="images/slide-1.jpg" alt="Game Robo">
				</li>
				<li class="second-slide aits">
					<img src="images/slide-2.jpg" alt="Game Robo">
				</li>
				<li class="third-slide w3-agileits">
					<img src="images/slide-3.jpg" alt="Game Robo">
				</li>
				<li class="fourth-slide agileinfo">
					<img src="images/slide-4.jpg" alt="Game Robo">
				</li>
			</ul>
		</div>
		<!-- //Slider -->

	</div>
	<!-- //Header -->


<!-- Platforms -->
	<div class="agileinfoplatforms" id="agileinfoplatforms">
		<div class="agileinfoplatformsgrids">
			<div class="col-md-3 w3agile_gallery_grid w3agile_gallery_grid1">
				<div class="w3agile_gallery_image">
					<figure>
						<img src="images/dota.jpg" alt="Game Robo" class="img-responsive">
						<figcaption>
							<h4>PC</h4>
							<p><span><img src="images/platform-1-icon.png" alt="Game Robo"></span></p>
						</figcaption>
					</figure>
				</div>
			</div>
			<div class="col-md-3 w3agile_gallery_grid w3agile_gallery_grid2">
				<div class="w3agile_gallery_image">
					<figure>
						<img src="images/fifa.jpg" alt="Game Robo" class="img-responsive">
						<figcaption>
							<h4>Playstation</h4>
							<p><span><img src="images/platform-2-icon.png" alt="Game Robo"></span></p>
						</figcaption>
					</figure>
				</div>
			</div>
			<div class="col-md-3 w3agile_gallery_grid w3agile_gallery_grid3">
				<div class="w3agile_gallery_image">
					<figure>
						<img src="images/clash.jpg" alt="Game Robo" class="img-responsive">
						<figcaption>
							<h4>MOBILE</h4>
							<p><span><img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjEyOHB4IiBoZWlnaHQ9IjEyOHB4IiB2aWV3Qm94PSIwIDAgOTMuMTY5IDkzLjE2OSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgOTMuMTY5IDkzLjE2OTsiIHhtbDpzcGFjZT0icHJlc2VydmUiPgo8Zz4KCTxwYXRoIGQ9Ik02NC45MDIsMEgyOC4yNjVjLTMuNzExLDAtNi43MiwzLjAwOS02LjcyLDYuNzJ2NzkuNzI5YzAsMy43MTIsMy4wMDgsNi43Miw2LjcyLDYuNzJoMzYuNjM3ICAgYzMuNzEzLDAsNi43MjItMy4wMDgsNi43MjItNi43MlY2LjcyQzcxLjYyMywzLjAwOSw2OC42MTUsMCw2NC45MDIsMHogTTQyLjA4OCwzLjk3M2g4Ljk5MWMwLjMyMywwLDAuNTg2LDAuMjYzLDAuNTg2LDAuNTg3ICAgYzAsMC4zMjMtMC4yNjMsMC41ODYtMC41ODYsMC41ODZoLTguOTkxYy0wLjMyNCwwLTAuNTg2LTAuMjYzLTAuNTg2LTAuNTg2QzQxLjUwMiw0LjIzNiw0MS43NjUsMy45NzMsNDIuMDg4LDMuOTczeiBNMzMuMTI2LDIuNTYzICAgYzAuNTE4LDAsMC45MzgsMC40MiwwLjkzOCwwLjkzOGMwLDAuNTE4LTAuNDE5LDAuOTM4LTAuOTM4LDAuOTM4cy0wLjkzOC0wLjQyLTAuOTM4LTAuOTM4QzMyLjE4OCwyLjk4MywzMi42MDgsMi41NjMsMzMuMTI2LDIuNTYzICAgeiBNMjguODc2LDIuMDAxYzAuODI5LDAsMS41LDAuNjcyLDEuNSwxLjVjMCwwLjgyOC0wLjY3MSwxLjUtMS41LDEuNXMtMS41LTAuNjcyLTEuNS0xLjVDMjcuMzc2LDIuNjczLDI4LjA0NywyLjAwMSwyOC44NzYsMi4wMDF6ICAgIE00OC45Myw4OS43NThoLTQuNjkxYy0xLjQ4OCwwLTIuNjkzLTEuMjA1LTIuNjkzLTIuNjkxYzAtMS40ODcsMS4yMDUtMi42OTIsMi42OTMtMi42OTJoNC42OTFjMS40ODgsMCwyLjY5MywxLjIwNSwyLjY5MywyLjY5MiAgIEM1MS42MjMsODguNTUzLDUwLjQxOCw4OS43NTgsNDguOTMsODkuNzU4eiBNNjguNzc3LDgyLjI0OEgyNC4zOTFWMTAuOTJoNDQuMzg2VjgyLjI0OHoiIGZpbGw9IiMwMDAwMDAiLz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" /></span></p>
						</figcaption>
					</figure>
				</div>
			</div>
			<div class="col-md-3 w3agile_gallery_grid w3agile_gallery_grid4">
				<div class="w3agile_gallery_image">
					<figure>
						<img src="images/cs.jpg" alt="Game Robo" class="img-responsive">
						<figcaption>
							<h4>PC</h4>
							<p><span><img src="images/platform-1-icon.png" alt="Game Robo"></span></p>
						</figcaption>
					</figure>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
	<!-- //Platforms -->


	<!-- About -->
	<div class="w3lsaboutaits" id="w3lsaboutaits">
		<div class="container">
			<div class="w3lsaboutaits-grids">
				<div class="col-md-6 w3lsaboutaits-grid w3lsaboutaits-grid-1">
					<h3 style="font-family: 'Press Start 2P', cursive;">C.G.L</h3>
					<p>A CGL (Ceunes Game League) é uma inciativa de graduandos da Universidade Federal do Espírito Santo em conjunto ao CAEC (Centro Acadêmico de Engenharia da Computação) com o objetivo de gerar entretenimento na região.</p>
					<p>
						A primeira edição será realizada em São Mateus/ES, na república Recanto do Guerreiro, no centro da cidade, nos dias 25 e 26 de Novembro e 01 e 02 de Dezembro.</p>
				</div>
				<div class="col-md-6 w3lsaboutaits-grid w3lsaboutaits-grid-2">
					<img src="images/about.jpg" alt="Game Robo">
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //About -->


<!-- Portfolio -->
	<div class="w3portfolioaits" id="w3portfolioaits">
	<h3>Informações</h3>
		<div class="w3portfolioaits-items">
			<div class="col-md-3 w3agile_gallery_grid w3agile_gallery_grid1">
			<a class="example-image-link" data-toggle="modal" data-target="#mycs" data-lightbox="example-set" data-title="">
				<div class="w3agile_gallery_image">
					<figure class="effect-apollo">
						<img src="images/cs1.jpg" alt="Game Robo" >
						<figcaption>
							<h4>INFO CS</h4>
						</figcaption>
					</figure>
				</div>
				</a>
			</div>
			

			 <div class="modal fade" id="mycs" role="dialog">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      <h4 style="color:white;text-align: center;" class="modal-title">Counter-Strike: Global Offensive</h4>
                                    </div>
                                    <div class="modal-body">
                                      <p style="color: white;">    
                                  		<strong>Equipe:</strong> <br><strong>Obrigatório</strong>: 5 jogadores<br>
                                      	<strong>Opcional</strong>: 1 reserva e 1 técnico <br>
                                      	<strong>Inscrição:</strong> <br><strong>Valor</strong>: R$50,00 por equipe<br>
                                      	<strong>Datas:</strong>	<br><strong>Online</strong>: entre 20 de Novembro a 24 de Novembro<br>
                                      	<strong>Presencial</strong>: Dia 26 de Novembro (Semifinais); dia 02 de Dezembro (Final)<br>
                                      	<strong>Regras:</strong> link
                                      	</p>                               
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Volta</button>
                                    </div>
                                  </div>
                                </div>
                                
                              </div> 


			<div class="col-md-3 w3agile_gallery_grid w3agile_gallery_grid1">
			<a class="example-image-link" data-toggle="modal" data-target="#mydota" data-lightbox="example-set" data-title="">
				<div class="w3agile_gallery_image">
					<figure class="effect-apollo">
						<img src="images/dota2.jpg" alt="Game Robo" >
						<figcaption>
							<h4>INFO DOTA</h4>
						</figcaption>
					</figure>
				</div>
				</a>
			</div>

			<div class="modal fade" id="mydota" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 style="color:white;text-align: center;" class="modal-title">DOTA-2</h4>
						</div>
						<div class="modal-body">
						<p style="color: white;">    
								<strong>Equipe:</strong> <br><strong>Obrigatório</strong>: 5 jogadores<br>
								<strong>Opcional</strong>: 1 reserva e 1 técnico <br>
								<strong>Inscrição:</strong> <br><strong>Valor</strong>: R$50,00 por equipe<br>
								<strong>Datas:</strong>	<br><strong>Online</strong>: entre 20 de Novembro a 24 de Novembro<br>
								<strong>Presencial</strong>: Dia 26 de Novembro (Semifinais); dia 02 de Dezembro (Final)<br>
								<strong>Regras:</strong> link
							</p>                               
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Volta</button>
						</div>
					</div>
				</div>

			</div> 

			<div class="col-md-3 w3agile_gallery_grid w3agile_gallery_grid1">
			<a class="example-image-link" data-toggle="modal" data-target="#myclash" data-lightbox="example-set" data-title="">
				<div class="w3agile_gallery_image">
					<figure class="effect-apollo">
						<img src="images/clash2.jpg" alt="Game Robo" >
						<figcaption>
							<h4>INFO CLASH ROYALE</h4>
						</figcaption>
					</figure>
				</div>
				</a>
			</div>


			<div class="modal fade" id="myclash" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 style="color:white;text-align: center;" class="modal-title">CLASH ROYALE</h4>
						</div>
						<div class="modal-body">
						<p style="color: white;">   
								<strong>Inscrição Individual:</strong> <br><strong>Valor</strong>: R$10,00 <br>
								<strong>Datas:</strong>	<br>Divulgada após o encerramento das inscrições, limitado às datas previamentes estipuladas (25 e 26 de Novembro; 01 e 02 de Dezembro)<br>
								<strong>Regras:</strong> link
							</p>                               
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Volta</button>
						</div>
					</div>
				</div>

			</div> 


				<div class="col-md-3 w3agile_gallery_grid w3agile_gallery_grid1">
			<a class="example-image-link" data-toggle="modal" data-target="#myfifa" data-lightbox="example-set" data-title="">
				<div class="w3agile_gallery_image">
					<figure class="effect-apollo">
						<img src="images/fifa17.jpg" alt="Game Robo" >
						<figcaption>
							<h4>INFO FIFA 2017</h4>
						</figcaption>
					</figure>
				</div>
				</a>
			</div>

			<div class="modal fade" id="myfifa" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 style="color:white;text-align: center;" class="modal-title">FIFA 17</h4>
						</div>
						<div class="modal-body">
						<p style="color: white;">   
								<strong>Inscrição Individual:</strong> <br><strong>Valor</strong>: R$10,00 <br>
								<strong>Datas:</strong>	<br>Divulgada após o encerramento das inscrições, limitado às datas previamentes estipuladas (25 e 26 de Novembro; 01 e 02 de Dezembro)<br>
								<strong>Regras:</strong> link
							</p>                               
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Volta</button>
						</div>
					</div>
				</div>

			</div> 
			<div class="clearfix"></div>
		</div>

	</div>
	<!-- //Portfolio -->
	



	<!-- Tabs -->
	<div class="wthreetabsaits" id="wthreetabsaits">
		<section>
			<h3>Inscreva-se</h3>
			<div class="tabs tabs-style-line">
				<nav class="container">
					<ul>
						<li><a href="#section-line-1"><span>Counter-Strike GO</span></a></li>
						<li><a href="#section-line-2"><span>Clash Royale</span></a></li>
						<li><a href="#section-line-3"><span>Dota 2</span></a></li>
						<li><a href="#section-line-4"><span>Fifa 2017</span></a></li>
					</ul>
				</nav>



				<div class="content-wrap">

					<section id="section-line-1">
						<form action="{{ route('store') }}" method="post">
						{{ csrf_field() }}
						<input type="hidden" name="categoria" value="1">
							<div class="col-md-12 agilecontactw3ls-grid agilecontactw3ls-grid-1" style="padding-left: 5%;">
								<div class="row">
									<div class="col-md-6"><input type="text" name="time" placeholder="NOME DO TIME" required=""></div>
									<div class="col-md-6"><input type="text" name="contato" maxlength="13" placeholder="TELEFONE PARA CONTATO" OnKeyPress="formatar('##-#####-####', this)" required=""></div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<input type="text" name="namec" placeholder="NOME DO CAPITÃO" required="">
									</div>
									<div class="col-md-4"><input type="email" name="emailc" placeholder="EMAIL DO CAPITÃO" required=""></div>
									<div class="col-md-4">
										<input type="text" name="nickc" placeholder="NICK DO CAPITÃO" required="">
									</div>
								</div>

								<div class="row">
									<div class="col-md-4">
										<input type="text" name="player2" placeholder="NOME DO JOGADOR 2" required="">
									</div>
									<div class="col-md-4"><input type="email" name="email2" placeholder="EMAIL JOGADOR 2" required=""></div>
									<div class="col-md-4">
										<input type="text" name="nick2" placeholder="NICK DO JOGADOR 2" required="">
									</div>
								</div>

								<div class="row">
									<div class="col-md-4">
										<input type="text" name="player3" placeholder="NOME DO JOGADOR 3" required="">
									</div>
									<div class="col-md-4"><input type="email" name="email3" placeholder="EMAIL JOGADOR 3" required=""></div>
									<div class="col-md-4">
										<input type="text" name="nick3" placeholder="NICK DO JOGADOR 3" required="">
									</div>
								</div>

								<div class="row">
									<div class="col-md-4">
										<input type="text" name="player4" placeholder="NOME DO JOGADOR 4" required="">
									</div>
									<div class="col-md-4"><input type="email" name="email4" placeholder="EMAIL JOGADOR 4" required=""></div>
									<div class="col-md-4">
										<input type="text" name="nick4" placeholder="NICK DO JOGADOR 4" required="">
									</div>
								</div>

								<div class="row">
									<div class="col-md-4">
										<input type="text" name="player5" placeholder="NOME DO JOGADOR 5" required="">
									</div>
									<div class="col-md-4"><input type="email" name="email5" placeholder="EMAIL JOGADOR 5" required=""></div>
									<div class="col-md-4">
										<input type="text" name="nick5" placeholder="NICK DO JOGADOR 5" required="">
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-4 col-md-offset-4 ">
										<input  class="btn btn-primary center-block" value="Inscrever" style="background-color: #696969; border-color: #696969;margin: 0 auto; "  type="submit">
									</div>
								</div>
								
								
							</div>
						</form>
					</section>

					<section id="section-line-2">
						<form action="{{ route('store') }}" method="post">
							{{ csrf_field() }}
							<input type="hidden" name="categoria" value="2">
							<div class="col-md-8 agilecontactw3ls-grid agilecontactw3ls-grid-1" style="padding-left: 35%;">
								<input type="text" name="namec" placeholder="NOME DO JOGADOR" required="">
								<input type="text" name="nickc" placeholder="NICK DO JOGADOR" required="">
								<input type="text" name="contato" maxlength="13" placeholder="TELEFONE PARA CONTATO" OnKeyPress="formatar('##-#####-####', this)" required="">
								<input type="email" name="emailc" placeholder="EMAIL DO JOGADOR" required="">
								<div class="form-group">
									<div class="col-md-4 col-md-offset-4" style="padding-top: 5%;">
										<input  class="btn btn-primary center-block" value="Inscrever" style="background-color: #696969; border-color: #696969;margin: 0 auto; "  type="submit">
									</div>
								</div>

							</div>

						</form>
						
					</section>
					<section id="section-line-3">
						<form action="{{ route('store') }}" method="post">
						{{ csrf_field() }}
						<input type="hidden" name="categoria" value="3">
							<div class="col-md-12 agilecontactw3ls-grid agilecontactw3ls-grid-1" style="padding-left: 5%;">
								<div class="row">
									<div class="col-md-6"><input type="text" name="time" placeholder="NOME DO TIME" required=""></div>
									<div class="col-md-6"><input type="text" name="contato" maxlength="13" placeholder="TELEFONE PARA CONTATO" OnKeyPress="formatar('##-#####-####', this)" required=""></div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<input type="text" name="capitao" placeholder="NOME DO CAPITÃO" required="">
									</div>
									<div class="col-md-4"><input type="email" name="emailc" placeholder="EMAIL DO CAPITÃO" required=""></div>
									<div class="col-md-4">
										<input type="text" name="nickc" placeholder="NICK DO CAPITÃO" required="">
									</div>
								</div>

								<div class="row">
									<div class="col-md-4">
										<input type="text" name="player2" placeholder="NOME DO JOGADOR 2" required="">
									</div>
									<div class="col-md-4"><input type="email" name="email2" placeholder="EMAIL JOGADOR 2" required=""></div>
									<div class="col-md-4">
										<input type="text" name="nick2" placeholder="NICK DO JOGADOR 2" required="">
									</div>
								</div>

								<div class="row">
									<div class="col-md-4">
										<input type="text" name="player3" placeholder="NOME DO JOGADOR 3" required="">
									</div>
									<div class="col-md-4"><input type="email" name="email3" placeholder="EMAIL JOGADOR 3" required=""></div>
									<div class="col-md-4">
										<input type="text" name="nick3" placeholder="NICK DO JOGADOR 3" required="">
									</div>
								</div>

								<div class="row">
									<div class="col-md-4">
										<input type="text" name="player4" placeholder="NOME DO JOGADOR 4" required="">
									</div>
									<div class="col-md-4"><input type="email" name="email4" placeholder="EMAIL JOGADOR 4" required=""></div>
									<div class="col-md-4">
										<input type="text" name="nick4" placeholder="NICK DO JOGADOR 4" required="">
									</div>
								</div>

								<div class="row">
									<div class="col-md-4">
										<input type="text" name="player5" placeholder="NOME DO JOGADOR 5" required="">
									</div>
									<div class="col-md-4"><input type="email" name="email5" placeholder="EMAIL JOGADOR 5" required=""></div>
									<div class="col-md-4">
										<input type="text" name="nick5" placeholder="NICK DO JOGADOR 5" required="">
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-4 col-md-offset-4 ">
										<input  class="btn btn-primary center-block" value="Inscrever"  style="background-color: #696969; border-color: #696969;margin: 0 auto; "  type="submit">
									</div>
								</div>
								
								
							</div>
						</form>
					</section>
					<section id="section-line-4">
						<form action="{{ route('store') }}" method="post">
						{{ csrf_field() }}
						<input type="hidden" name="categoria" value="4">
						<div class="col-md-8 agilecontactw3ls-grid agilecontactw3ls-grid-1" style="padding-left: 35%;">
							<input type="text" name="namec" placeholder="NOME DO JOGADOR" required="">
							<input type="text" name="nickc" placeholder="NICK DO JOGADOR" required="">
							<input type="text" name="contato" maxlength="13" placeholder="TELEFONE PARA CONTATO" OnKeyPress="formatar('##-#####-####', this)" required="">
							<input type="email" name="emailc" placeholder="EMAIL DO JOGADOR" required="">
							<div class="form-group">
									<div class="col-md-4 col-md-offset-4" style="padding-top: 5%;">
										<input  class="btn btn-primary center-block" value="Inscrever" style="background-color: #696969; border-color: #696969;margin: 0 auto; "  type="submit">
									</div>
								</div>

						</div>

						</form>
					</section>
				</div><!-- /content -->
			</div><!-- /tabs -->
		</section>
	</div>
	<!-- //Tabs -->



	<!-- Blogs -->
	



	



	



	<!-- Partners -->
	<div class="aitspartnersw3l">
		<div id="owl-demo4" class="owl-carousel text-center">
			<div class="item">
				<img src="images/logo-1.png" alt="Game Robo">
			</div>
			<div class="item">
				<img src="images/logo-2.png" alt="Game Robo">
			</div>
			<div class="item">
				<img src="images/logo-3.png" alt="Game Robo">
			</div>
			<div class="item">
				<img src="images/logo-4.png" alt="Game Robo">
			</div>
			<div class="item">
				<img src="images/logo-1.png" alt="Game Robo">
			</div>
			
		</div>
	</div>
	<!-- //Partners -->





	<!-- Contact -->
	<div class="agilecontactw3ls" id="agilecontactw3ls">
		<div class="container">
			<h3>Fale Conosco</h3>
			<form action="#" method="post">
				<div class="col-md-6 agilecontactw3ls-grid agilecontactw3ls-grid-1">
					<input type="text" Name="nome" placeholder="NOME" required="">
					<input type="text" Name="sobrenome" placeholder="SOBRENOME" required="">
					<input type="email" Name="email" placeholder="EMAIL" required="">
				</div>
				<div class="col-md-6 agilecontactw3ls-grid agilecontactw3ls-grid-2">
					<textarea name="msg" style="resize:none" placeholder="MENSAGEM" required=""></textarea>
					<div class="send-button">
						<input type="submit" value="Enviar">
					</div>
				</div>
			</form>
		</div>
	</div>
	<!-- //Contact -->



	<!-- Footer -->
	<div class="agilefooterwthree" id="agilefooterwthree">
		<div class="container">

			<div class="agilefooterwthree-grids">
				
				<div class="clearfix"></div>
			</div>

			<div class="agilefooterwthreebottom">
				<div class="col-md-6 agilefooterwthreebottom-grid agilefooterwthreebottom-grid1">
					
				</div>
				<div class="col-md-6 agilefooterwthreebottom-grid agilefooterwthreebottom-grid2">
					<div class="agilesocialwthree">
						<ul class="social-icons">
							<li><a href="https://www.facebook.com/ceunesgameleague/" class="facebook w3ls" title="Go to Our Facebook Page"><i class="fa w3ls fa-facebook-square" aria-hidden="true"></i></a></li>
							<li><a href="https://www.instagram.com/ceunesgameleague/" class="instagram wthree" title="Go to Our Instagram Account"><i class="fa wthree fa-instagram" aria-hidden="true"></i></a></li>
							<!-- <li><a href="#" class="youtube w3layouts" title="Go to Our Youtube Channel"><i class="fa w3layouts fa-youtube-square" aria-hidden="true"></i></a></li> -->
						</ul>
					</div>
				</div>
			</div>

		</div>

		<a href="#agileitshome" class="agileto-top scroll" title="To Top"><img src="images/to-top.png" alt="Game Robo"></a>

	</div>
	<!-- //Footer -->



	<!-- Custom-JavaScript-File-Links -->

		<!-- Default-JavaScript -->   <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		<!-- Bootstrap-JavaScript --> <script type="text/javascript" src="js/bootstrap.min.js"></script>

		<!-- Resopnsive-Slider-JavaScript -->
			<script src="js/responsiveslides.min.js"></script>
			<script>
				$(function () {
					$("#slider").responsiveSlides({
						auto: true,
						nav: true,
						speed: 2000,
						namespace: "callbacks",
						pager: true,
					});
				});
			</script>
		<!-- //Resopnsive-Slider-JavaScript -->

		<!-- Tab-JavaScript -->
			<script src="js/cbpFWTabs.js"></script>
			<script>
				(function() {
					[].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
						new CBPFWTabs( el );
					});
				})();
			</script>
		<!-- //Tab-JavaScript -->

		<!-- Owl-Carousel-JavaScript -->
			<script src="js/owl.carousel.js"></script>
			<script>
				$(document).ready(function() {
					$("#owl-demo, #owl-demo1, #owl-demo2, #owl-demo3, #owl-demo4").owlCarousel({
						autoPlay: 3000,
						items : 5,
						itemsDesktop : [1024,4],
						itemsDesktopSmall : [414,3]
					});
				});
			</script>
		<!-- //Owl-Carousel-JavaScript -->

		<!-- Stats-Number-Scroller-Animation-JavaScript -->
			<script src="js/waypoints.min.js"></script> 
			<script src="js/counterup.min.js"></script> 
			<script>
				jQuery(document).ready(function( $ ) {
					$('.counter').counterUp({
						delay: 10,
						time: 1000
					});
				});
			</script>
		<!-- //Stats-Number-Scroller-Animation-JavaScript -->

		<!-- Popup-Box-JavaScript -->
			<script src="js/jquery.chocolat.js"></script>
			<script type="text/javascript">
				$(function() {
					$('.w3portfolioaits-item a').Chocolat();
				});
			</script>
		<!-- //Popup-Box-JavaScript -->

		<!-- Smooth-Scrolling-JavaScript -->
			<script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){
						event.preventDefault();
						$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
					});
				});
			</script>
		<!-- //Smooth-Scrolling-JavaScript -->

	<!-- //Custom-JavaScript-File-Links -->



</body>
<!-- //Body -->



</html>