<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->

<?php include 'includes/css.php'; ?>

<?php include 'includes/script.php'; ?>

<title>Sound Wave</title>
</head>

<body class="esqueci_email checkout">
	

		<div class="geral_cima">
			<div class="container">				
				<?php include 'includes/header.php'; ?>
			</div> <!-- container -->
		</div><!-- geral_cima -->


		<div class="container conteudo">

			<ul class="bread-crumb">
			  <li><a href="#">Home</a></li>
			  <li class="last">Esqueci meu e-mail</li>
			</ul> <!-- bread-crumb -->
			

			<form action="" class="esqueci_meu_email">
				<div class="row">

					<div class="col-xs-10">

						<h3>Esqueci meu e-mail</h3>

						<div class="row cont_campos">							
							<div class="col-xs-4">
								<label for="cpf-cnpj">CPF/CNPJ<span class="obr">*</span></label>
						 		<input name="cpf-cnpj" type="text" class="form-control" value="" />
							</div>

							<div class="col-xs-3">
								<label for="cep">CEP<span class="obr">*</span></label>
						 		<input name="cep" type="text" class="form-control" value="" />
							</div>

							<div class="col-xs-5">
								<input type="submit" class="buscar" value="Buscar e-mail" />
								<span class="loading"></span>
							</div>
							
						</div>

						<div class="alert alert-success">Seu e-mail é: <strong>caioavila8@gmail.com </strong></div>
						

					</div>

					<div class="col-xs-2"></div>
				</div>
			</form>


		</div> <!-- container -->

		<?php include 'includes/footer.php'; ?>

</body>
</html>
