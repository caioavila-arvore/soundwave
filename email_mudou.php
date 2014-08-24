<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->

<?php include 'includes/css.php'; ?>

<?php include 'includes/script.php'; ?>

<title>Sound Wave</title>
</head>

<body class="email_mudou checkout">
	

		<div class="geral_cima">
			<div class="container">				
				<?php include 'includes/header.php'; ?>
			</div> <!-- container -->
		</div><!-- geral_cima -->


		<div class="container conteudo">

			<ul class="bread-crumb">
			  <li><a href="#">Home</a></li>
			  <li class="last">Meu e-mail mudou</li>
			</ul> <!-- bread-crumb -->
			

			<form action="" class="meu_email_mudou">
				<div class="row">

					<div class="col-xs-10">

						<h3>Meu e-mail mudou</h3>
						<div class="alert alert-success">E-mail atualizado com sucesso!</div>

						<p>Preencha os campos abaixo para alterar seu e-mail. <br /> Após essa operação o seu novo e-mail estará habilitado.</p>
						

						<div class="row cont_campos">							
							<div class="col-xs-4">
								<label for="email-antigo">E-mail antigo<span class="obr">*</span></label>
						 		<input name="email-antigo" type="text" class="form-control" value="" />
							</div>

							<div class="col-xs-4">
								<label for="senha">Senha<span class="obr">*</span></label>
						 		<input name="senha" type="password" class="form-control" value="" />
							</div>

							<div class="col-xs-4"></div>							
						</div> <!-- cont_campos -->
						
						<h4>Novo e-mail</h3>
						<div class="row cont_campos">							
							<div class="col-xs-4">
								<label for="email-novo">Digite seu novo e-mail<span class="obr">*</span></label>
						 		<input name="email-novo" type="text" class="form-control" value="" />
							</div>

							<div class="col-xs-4">
								<label for="confirma-email-novo">Confirme seu novo e-mail<span class="obr">*</span></label>
						 		<input name="confirma-email-novo" type="text" class="form-control" value="" />
							</div>

							<div class="col-xs-4">
								<input type="submit" class="buscar" value="Atualizar e-mail" />
								<span class="loading"></span>
							</div>							
						</div> <!-- cont_campos -->

						

					</div>

					<div class="col-xs-2"></div>
				</div>
			</form>


		</div> <!-- container -->

		<?php include 'includes/footer.php'; ?>

</body>
</html>
