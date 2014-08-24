<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->

<?php include 'includes/css.php'; ?>

<?php include 'includes/script.php'; ?>

<title>Sound Wave</title>
</head>

<body class="cadastrese checkout">
	<div class="esc" style="display:none;"></div>
	<div class="box_info"  style="display:none;">
		<div class="objetivo_site">
			<h3>Bem vindo a Sound Wave!</h3>
			<h4>Qual o seu principal objetivo no nosso site?</h4>

			<ul class="opcoes">
				<li class="quero_vender"><a href="#" class="quero_vender" id="cadastro_vender">Quero <strong>Vender</strong></a></li>
				<li class="quero_comprar"><a href="#" class="quero_comprar" id="cadastro_comprar">Quero <strong>Comprar</strong></a></li>
			</ul>
		</div>
	</div>

		<div class="geral_cima">
			<div class="container">				
				<?php include 'includes/header.php'; ?>
			</div> <!-- container -->
		</div><!-- geral_cima -->


		<div class="container conteudo">

			<ul class="bread-crumb">
			  <li><a href="#">Home</a></li>
			  <li class="last">Cadastre-se</li>
			</ul> <!-- bread-crumb -->
			

			<div class="marcador_passos">
				<li class="identificacao ativo"><span>1</span> Identificação</li>
				<li class="cadastro-produto"><span>2</span> Cadastro do produto</li>
				<li class="tipo-anuncio"><span>3</span> Tipo de Anúncio</li>
				<li class="finalizacao"><span>4</span> Finalização</li>
			</div> <!-- marcador_passos -->

			<h2>Cadastre-se</h2>

			<form action="" id="cadastro">
				<div class="alert alert-danger">Por favor, preencha corretamente os campos marcados em vermelho!</div>
				<fieldset id="tipo_pessoa">
					<h6>Tipo de Pessoa</h6>
					<div class="row">
						<div class="col-xs-2">
							<label class="fisica">
								<input name="tipo_pessoa" type="radio" value="pessoa_fisica" checked />
								Pessoa Física
							</label>
						</div>
						
						<div class="col-xs-1">
						</div>
						
						<div class="col-xs-2">
							<label class="juridica">
								<input name="tipo_pessoa" type="radio" value="pessoa_juridica" />
								Pessoa Jurídica
							</label>
						</div>
					</div>
				</fieldset>

				<fieldset id="dados_pessoais">
					<h6>Dados Pessoais</h6>
					<div class="row">
						 
						<div class="col-xs-5">
						 	<label for="nome">Nome completo<span class="obr">*</span></label>
						 	<input name="nome" type="text" class="form-control error" value="" />
						</div>
						
						<div class="col-xs-2"></div>
						
						<div class="col-xs-5">
						 	<label for="email">E-mail<span class="obr">*</span></label>
						 	<input name="email" type="text" class="form-control" value="" />
						</div>

					</div> <!-- row -->

					<div class="row">
						 
						<div class="col-xs-5">
						 	<label for="cpf">CPF<span class="obr">*</span></label>
						 	<input name="cpf" type="text" class="form-control" value="" />
						</div>
						
						<div class="col-xs-2"></div>
						
						<div class="col-xs-5">
							<label for="sexo">Sexo <span class="obr">*</span></label>
						 	<select name="sexo" id="sexo" class="form-control">
						 		<option value="masculino">Masculino</option>
						 		<option value="feminino">Feminino</option>
						 	</select>
						</div>

					</div> <!-- row -->


					<div class="row">
						 
						<div class="col-xs-5">
						 	<label for="data-nascimento">Data de nascimento<span class="obr">*</span></label>
						 	<input name="data-nascimento" type="text" class="form-control" value="" />
						</div>
						
						<div class="col-xs-2"></div>
						
						<div class="col-xs-5">
						 	<label for="nome-mae">Nome da mãe<span class="obr">*</span></label>
						 	<input name="nome-mae" type="text" class="form-control" value="" />
						</div>

					</div> <!-- row -->

				</fieldset> <!-- dados_pessoais -->


				<fieldset id="dados_contato">
					<h6>Dados de contato</h6>
					<div class="row">
						 
						<div class="col-xs-5">
						 	<label for="cep">CEP<span class="obr">*</span></label>
						 	<input name="cep" type="text" class="form-control" value="" />
						</div>
						
						<div class="col-xs-2"></div>
						
						<div class="col-xs-5">
						 	<label for="logradouro">Logradouro<span class="obr">*</span></label>
						 	<input name="logradouro" type="text" class="form-control" value="" />
						</div>

					</div> <!-- row -->

					<div class="row">
						<div class="col-xs-2">
							<label for="numero">Número<span class="obr">*</span></label>
					 		<input name="numero" type="text" class="form-control" value="" />
						</div>

						<div class="col-xs-3">
							<label for="bairro">Bairro<span class="obr">*</span></label>
					 		<input name="bairro" type="text" class="form-control" value="" />
						</div>

						<div class="col-xs-2">
						</div>

						<div class="col-xs-3">
							<label for="cidade">Cidade<span class="obr">*</span></label>
					 		<input name="cidade" type="text" class="form-control" value="" />
						</div>

						<div class="col-xs-2">
							<label for="uf">UF<span class="obr">*</span></label>
					 		<select name="uf" id="uf" class="form-control">
						 		<option value="masculino">UF</option>
						 	</select>
						</div>

						
					</div> <!-- row -->

					<div class="row">
						<div class="col-xs-5">
						 	<label for="pais">País<span class="obr">*</span></label>
						 	<input name="pais" type="text" class="form-control" value="" />
						</div>
						
						<div class="col-xs-2"></div>
						
						<div class="col-xs-5">
						 	<label for="telefone">Telefone<span class="obr">*</span></label>
						 	<input name="telefone" type="text" class="form-control" value="" />
						</div>
					</div> <!-- row -->

					<div class="row">
						<div class="col-xs-5">
						 	<label for="celular">Celular<span class="obr">*</span></label>
						 	<input name="celular" type="text" class="form-control" value="" />
						</div>
						
						<div class="col-xs-2"></div>
						
						<div class="col-xs-5">
						 	<label for="comercial">Comercial </label>
						 	<input name="comercial" type="text" class="form-control" value="" />
						</div>
					</div>

				</fieldset> <!-- dados_contato -->
				
				<div class="row">
					<div class="col-xs-4 botao">
						<input type="button" value="Cadastrar" />
						<span class="loading"></span>
					</div>
				</div> <!-- row -->

			</form>


		</div> <!-- container -->

		<?php include 'includes/footer.php'; ?>

</body>
</html>
