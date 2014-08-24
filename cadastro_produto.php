<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->

<?php include 'includes/css.php'; ?>

<?php include 'includes/script.php'; ?>

<title>Sound Wave</title>
</head>

<body class="cadastro_produto checkout">
	<div class="esc" style="display:none;" ></div>
	<div class="box_info" style="display:none;">
		<h3>Dica Rápida!</h3>
		<p>Depois de subir as fotos vocês pode reorganiza-las. Basta clicar e arrastar pra posição desejada</p>
		<p class="obs">*Você só não vai conseguir mudar a posição da foto principal</p>
		<div class="imagem">
		<img src="img/mudar_ordem_foto.gif" alt="" />
		</div>

		<a href="#" class="ok">Ok. Entendi!</a>
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
				<li class="cadastro-produto ativo"><span>2</span> Cadastro do produto</li>
				<li class="tipo-anuncio"><span>3</span> Tipo de Anúncio</li>
				<li class="finalizacao"><span>4</span> Finalização</li>
			</div> <!-- marcador_passos -->

			<form action="" id="produto">
				<h2>Cadastro do Produto</h2>
				<fieldset class="info_basica">
					<div class="row">
							 
						<div class="col-xs-5">
						 	<label for="valor">Valor (R$)<span class="obr">*</span></label>
						 	<input name="valor" type="text" class="form-control" value="" />
						</div>
						
						<div class="col-xs-2"></div>
						
						<div class="col-xs-5">
							<label for="nota">Nota Fiscal / Recibo<span class="obr">*</span></label>
						 	<input name="nota" type="text" class="form-control" value="" />
						</div>

					</div> <!-- row -->


					<div class="row">
							 
						<div class="col-xs-5">
						 	<label for="marca">Marca <span class="obr">*</span></label>
						 	<select name="marca" id="marca" class="form-control">
						 		<option value="selecione">Selecione</option>
						 	</select>
						</div>
						
						<div class="col-xs-2"></div>
						
						<div class="col-xs-5">
							<label for="numero-serie">Número de série<span class="obr">*</span></label>
						 	<input name="numero-serie" type="text" class="form-control" value="" />
						</div>

					</div> <!-- row -->

					<div class="row">
							 
						<div class="col-xs-5">
						 	<label for="tipo">Tipo <span class="obr">*</span></label>
						 	<select name="tipo" id="tipo" class="form-control">
						 		<option value="selecione">Selecione</option>
						 	</select>
						</div>
						
						<div class="col-xs-2"></div>
						
						<div class="col-xs-5">
							<label for="potencia">Potência</label>
						 	<input name="potencia" type="text" class="form-control" value="" />
						</div>

					</div> <!-- row -->


					<div class="row">
							 
						<div class="col-xs-5">
						 	<label for="cor">Cor <span class="obr">*</span></label>
						 	<select name="cor" id="cor" class="form-control">
						 		<option value="selecione">Selecione</option>
						 	</select>
						</div>
						
						<div class="col-xs-2"></div>
						
						<div class="col-xs-5">
							<label for="estado-conservacao">Estado de Conservação<span class="obr">*</span></label>
						 	<input name="estado-conservacao" type="text" class="form-control" value="" />
						</div>

					</div> <!-- row -->


					<div class="row">
							 
						<div class="col-xs-5">
						 	<label for="unico-dono">Único Dono?<span class="obr">*</span></label>
						 	<select name="unico-dono" id="unico-dono" class="form-control">
						 		<option value="selecione">Selecione</option>
						 	</select>
						</div>
						
						<div class="col-xs-2"></div>
						
						<div class="col-xs-5">
							<label for="metodologia">Metodologia Revista Audio e Video Magazine<span class="obr">*</span></label>
						 	<input name="metodologia" type="text" class="form-control" value="" />
						</div>

					</div> <!-- row -->


					<div class="row">
							 
						<div class="col-xs-5">
						 	<label for="voltagem">Voltagem<span class="obr">*</span></label>
						 	<select name="voltagem" id="voltagem" class="form-control">
						 		<option value="selecione">Selecione</option>
						 	</select>
						</div>
						
						<div class="col-xs-2"></div>
						
						<div class="col-xs-5">
							<label for="classificacao">Classificação<span class="obr">*</span></label>
						 	<select name="classificacao" id="classificacao" class="form-control">
						 		<option value="selecione">Selecione</option>
						 	</select>
						</div>

					</div> <!-- row -->
				</fieldset>

				<fieldset class="especificacao">
					<label for="especificacao">Especificação técnica<span class="obr">*</span></label>
					
					<p class="desc col-xs-5">Uma boa especificação técnica do produto, passa maior credibilidade  para o comprador. Evita que o mesmo tenha que sair do seu anúncio para entender um pouco mais sobre o produto.</p>

					<textarea name="especificacao" id="especificacao" class="form-control"></textarea>
				</fieldset>

				<fieldset class="foto">
					<label>Fotos do Produto</label>
					
					<div class="row cont_desc">
						<p class="desc col-xs-5"><strong>Dica:</strong> Procure no google uma foto do sue produto com o fundo branco e use ela como foto principal. Isso fará com que o seu anúncio tenha mais qualidade visualmente falando. <br /><br />
						As outras fotos devem ser fotos reais do seu produto.</p>
					</div>
					
					<ul class="row">
						<li class="col-xs-2 ui-state-disabled">
							<span class="cont_foto"><span class="tut"></span> <input type="file" id="foto_01"/></span>
							<span class="principal">Foto Principal</span>
						</li>

						<li class="col-xs-2 ui-state-default">
							<span class="cont_foto">
								<em class="load"></em>
							</span>
						</li>

						<li class="col-xs-2 ui-state-default">
							<span class="cont_foto">
								<a href="#" class="editar"></a>
								<a href="#" class="excluir"></a>
								<img src="img/foto_cadastro_produto.jpg" alt="" />
							</span>
						</li>

						<li class="col-xs-2 ui-state-default">
							<span class="cont_foto">
								<a href="#" class="editar"></a>
								<a href="#" class="excluir"></a>
								<img src="img/foto_cadastro_produto.jpg" alt="" />
							</span>
						</li>

						

						<div class="col-xs-2">
							<a href="#" class="maisfoto">Mais Foto</a>
						<div class="col-xs-2">
					</ul>



				</fieldset>

				<div class="row">
					<div class="col-xs-4 botao">
						<input type="button" value="Proximo Passo" />
						<span class="loading" class="form-control"></span>
					</div>
				</div> <!-- row -->

			</form>


		</div> <!-- container -->

		<?php include 'includes/footer.php'; ?>

</body>
</html>
