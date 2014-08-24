<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->

<?php include 'includes/css.php'; ?>

<?php include 'includes/script.php'; ?>

<title>Sound Wave</title>
</head>

<body class="tipo_anuncio checkout">
	<div class="esc" style="display:none;"></div>
	<div class="box_info" style="display:none;">
		<a href="#" class="fechar">Fechar</a>
		<div class="info_super" style="display:none;"><?php include 'includes/info_super_destaque.php'; ?></div>
		<div class="info_catg" style="display:none;"><?php include 'includes/info_destaque_categorizado.php'; ?></div>
	</div>
	
		<div class="geral_cima">
			<div class="container">				
				<?php include 'includes/header.php'; ?>
			</div> <!-- container -->
		</div><!-- geral_cima -->


		<div class="container conteudo">

			<ul class="bread-crumb">
			  <li><a href="#">Home</a></li>
			  <li class="last">Tipo de Anúncio</li>
			</ul> <!-- bread-crumb -->
			

			<div class="marcador_passos">
				<li class="identificacao"><span>1</span> Identificação</li>
				<li class="cadastro-produto"><span>2</span> Cadastro do produto</li>
				<li class="tipo-anuncio ativo"><span>3</span> Tipo de Anúncio</li>
				<li class="finalizacao"><span>4</span> Finalização</li>
			</div> <!-- marcador_passos -->

			<form action="" id="cadastro">
				
				<fieldset id="tempo_anuncio">
					<div class="row">
						
						<div class="col-xs-4">
							<label class="tempo_01">
								<div class="title"><span></span>Pra sempre</div>
								<div class="valor">
									<span class="preco-por">R$ 119,90</span>
									<span class="preco-parcelado">em até <strong>12x</strong><br /> no cartão de créditos</span>
								</div>
								<input name="tempo_anuncio" type="radio" value="dias_sempre" checked />
							</label>
						</div>
						
						<div class="col-xs-4">
							<label class="tempo_01">
								<div class="title"><span></span>90 dias</div>
								<div class="valor">
									<span class="preco-por">R$ 99,90</span>
									<span class="preco-parcelado">em até <strong>12x</strong><br /> no cartão de créditos</span>
								</div>
								<input name="tempo_anuncio" type="radio" value="dias_90" />
							</label>
						</div>

						<div class="col-xs-4">
							<label class="tempo_01">
								<div class="title"><span></span>30 dias</div>
								<div class="valor">
									<span class="preco-por">R$ 39,90</span>
									<span class="preco-parcelado">em até <strong>12x</strong><br /> no cartão de créditos</span>
								</div>
								<input name="tempo_anuncio" type="radio" value="dias_30" />
							</label>
						</div>


					</div>

					<span class="obs">* Após a confirmação do pagamento, o seu anúncio aparecerá automaticamente em nosso site</span>
				</fieldset>

				<fieldset id="super_destaque">
					<h3>OPA! <br /> <span>Destaque seu Anúncio</span></h3>
					<p class="desc">Apesar de termos poucas vagas para destacar seu anúncio. Nesse momento temos algumas opções para você deixar seu produto em destaque na página principal do site. <br />
Não perca essa oportunidade, confira!</p>
					<a href="#" class="oque" id="oq_super_destaque">O que é Super destaque?</a>

					<div class="row">
						
						<div class="col-xs-4">
							<label class="super_01">
								<div class="title"><span></span>Super - 90 dias</div>
								<div class="valor">
									<span class="preco-por">R$ 119,90</span>
									<span class="preco-parcelado">em até <strong>12x</strong><br /> no cartão de créditos</span>
								</div>
								<input name="super_destaque" type="radio" value="dias_90" checked />
							</label>
						</div>


						<div class="col-xs-4">
							<label class="super_02">
								<div class="title"><span></span>Super - 60 dias</div>
								<div class="valor">
									<span class="preco-por">R$ 99,90</span>
									<span class="preco-parcelado">em até <strong>12x</strong><br /> no cartão de créditos</span>
								</div>
								<input name="super_destaque" type="radio" value="dias_60" />
							</label>
						</div>

						<div class="col-xs-4">
							<label class="super_03">
								<div class="title"><span></span>Super - 30 dias</div>
								<div class="valor">
									<span class="preco-por">R$ 39,90</span>
									<span class="preco-parcelado">em até <strong>12x</strong><br /> no cartão de créditos</span>
								</div>
								<input name="super_destaque" type="radio" value="dias_30" />
							</label>
						</div>
					</div>
					<div class="row sem">
						<div class="col-xs-4 sem_div">
							<label class="sem_super sem">
								<input name="super_destaque" type="radio" value="sem_dias" />
								<div class="title">Sem super destaque</div>
							</label>
						</div>
					</div>
				</fieldset>


				<fieldset id="categorizado_destaque">
					<h3>Temos também<br /> <span>Destaque categorizado</span></h3>
					<p class="desc"></p>
					<a href="#" class="oque" id="oq_categorizado_destaque">O que é Destaque Categorizado?</a>

					<div class="row">
						
						<div class="col-xs-4">
							<label class="categ_01">
								<div class="title"><span></span>Categ. - 90 dias</div>
								<div class="valor">
									<span class="preco-por">R$ 119,90</span>
									<span class="preco-parcelado">em até <strong>12x</strong><br /> no cartão de créditos</span>
								</div>
								<input name="categ_destaque" type="radio" value="dias_90" checked />
							</label>
						</div>


						<div class="col-xs-4">
							<label class="categ_02">
								<div class="title"><span></span>Categ. - 60 dias</div>
								<div class="valor">
									<span class="preco-por">R$ 99,90</span>
									<span class="preco-parcelado">em até <strong>12x</strong><br /> no cartão de créditos</span>
								</div>
								<input name="categ_destaque" type="radio" value="dias_60" />
							</label>
						</div>

						<div class="col-xs-4">
							<label class="categ_03">
								<div class="title"><span></span>Categ. - 30 dias</div>
								<div class="valor">
									<span class="preco-por">R$ 39,90</span>
									<span class="preco-parcelado">em até <strong>12x</strong><br /> no cartão de créditos</span>
								</div>
								<input name="categ_destaque" type="radio" value="dias_30" />
							</label>
						</div>
					</div>
					<div class="row sem">
						<div class="col-xs-4 sem_div">
							<label class="sem_super sem">
								<input name="categ_destaque" type="radio" value="sem_dias" />
								<div class="title">Sem destaque categ.</div>
							</label>
						</div>
					</div>
				</fieldset>


				
				<div class="row">
					<div class="col-xs-4 botao">
						<input type="button" value="Proximo Passo" />
						<span class="loading"></span>
					</div>
				</div> <!-- row -->

			</form>


		</div> <!-- container -->

		<?php include 'includes/footer.php'; ?>

</body>
</html>
