<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->

<?php include 'includes/css.php'; ?>

<?php include 'includes/script.php'; ?>

<title>Sound Wave</title>
</head>

<body class="minha_conta">

	
		<div class="geral_cima">
			<div class="container">				
				<?php include 'includes/header.php'; ?>
			</div> <!-- container -->
			
			<?php include 'includes/menu_minha_conta.php'; ?>
			
		</div><!-- geral_cima -->


		<div class="container conteudo">

			<ul class="bread-crumb">
			  <li><a href="#">Home</a></li>
			  <li class="last">Minha Conta</li>
			</ul> <!-- bread-crumb -->


			<div class="meus_anuncios">				
				<h3 class="meusanuncios"><span></span> Meus anúncios</h3>
				<div class="row">
					
					<div class="col-xs-6 cont_item">
						<a class="item_anuncio" href="#">
							<span class="nome">Focal Diablo Balck Gloss</span>	
							<span class="status">Expira em <strong>15</strong> dias</span>
						</a>
					</div> <!-- anuncio -->

					<div class="col-xs-6  cont_item">
						<a class="item_anuncio" href="#">
							<span class="nome">Focal Diablo Balck Gloss</span>	
							<span class="status sempre">Pra sempre ;)</span>
						</a>
					</div> <!-- anuncio -->

					<div class="col-xs-6 cont_item">
						<a class="item_anuncio" href="#">
							<span class="nome">Focal Diablo Balck Gloss</span>	
							<span class="status">Expira em <strong>5</strong> dias</span>
						</a>
					</div> <!-- anuncio -->

					<div class="col-xs-6  cont_item">
						<a class="item_anuncio" href="#">
							<span class="nome">Focal Diablo Balck Gloss</span>	
							<span class="status">Expira em <strong>25</strong> dias</span>
						</a>
					</div> <!-- anuncio -->

					<div class="col-xs-6  cont_item">
						<a class="item_anuncio alerta" href="#">
							<span class="nome">Focal Diablo Balck Gloss</span>	
							<span class="status">Último dia - <strong class="renover">Renovar</strong></span>
						</a>
					</div> <!-- anuncio -->

					<div class="col-xs-6 cont_item">
						<a class="item_anuncio" href="#">
							<span class="nome">Focal Diablo Balck Gloss</span>	
							<span class="status">Expira em <strong>5</strong> dias</span>
						</a>
					</div> <!-- anuncio -->

				</div>

				<div class="ver_todos"><a href="meus_anuncios.php">Ver todos os anúncios</a></div>

			</div> <!-- meus_anuncios -->


			<div class="avaliacoes">
				<h3 class="avaliacoes"><span></span>Avaliações</h3>

				<div class="row">
					<div class="col-xs-3 positivo">
						<div class="avaliacao_positiva">
							<span class="valor"><em>96</em> %</span>
						</div>
						<canvas id="avaliaPositivo" width="220" height="200"></canvas>
					</div>

					<div class="col-xs-3 negativo">
						<div class="avaliacao_negativa">
							<span class="valor"><em>04</em> %</span>
						</div>
						<canvas id="avaliaNegativa" width="220" height="200"></canvas>
					</div>

					<div class="col-xs-1"></div>

					<div class="col-xs-5 ultima_avaliacao">
						<h4>Caio Ávila <span class="positivo"></span></h4>
						<p class="msg">
							Praesent non massa nibh. Morbi in rhoncus sapien. Sed a metus porttitor, tincidunt metus eget, adipiscing augue. Vivamus convallis, libero sed sodales gravida.
						</p>

						<div class="status_responder">
							<div class="status">
								status
								<span class="nao_respondido">Não respondido</span>
							</div> <!-- status -->

							<a href="#" class="responder">Responder</a>
						</div> <!-- status_respnder -->
					</div>

				</div>

				<div class="ver_todos"><a href="#">Ver todas as avaliações</a></div>

			</div> <!-- avaliacoes -->

			



		</div> <!-- container -->

		<?php include 'includes/footer.php'; ?>

</body>
</html>
