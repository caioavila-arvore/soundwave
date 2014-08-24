<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->

<?php include 'includes/css.php'; ?>

<?php include 'includes/script.php'; ?>

<title>Sound Wave</title>
</head>

<body class="esqueci_senha checkout">
	

		<div class="geral_cima">
			<div class="container">				
				<?php include 'includes/header.php'; ?>
			</div> <!-- container -->
		</div><!-- geral_cima -->


		<div class="container conteudo">

			<ul class="bread-crumb">
			  <li><a href="#">Home</a></li>
			  <li class="last">Esqueci minha senha</li>
			</ul> <!-- bread-crumb -->
			

			<form action="" class="esqueci_minha_senha">
				<div class="row">

					<div class="col-xs-10">

						<h3>Esqueci minha senha</h3>
						<div class="alert alert-success">Senha enviada com sucesso para o seu e-mail</div>

						<p>Preencha os campos abaixo para receber a senha em seu e-mail cadastrado. <br />
						<em>*Dica: consulte sua caixa de spam ou lixo eletrônico. Emails automáticos podem, eventualmente, ser direcionados para estes locais.</em></p>
						
						<div class="row cont_campos">							
							<div class="col-xs-4">
								<label for="email">E-mail<span class="obr">*</span></label>
						 		<input name="email" type="text" class="form-control" value="" />
							</div>

							<div class="col-xs-4">
								<label for="confirma-email">Confirme seu e-mail<span class="obr">*</span></label>
						 		<input name="confirma-email" type="text" class="form-control" value="" />
							</div>

							<div class="col-xs-4">
								<input type="submit" class="buscar" value="Enviar" />
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
