<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->

<?php include 'includes/css.php'; ?>

<?php include 'includes/script.php'; ?>

<title>Sound Wave</title>
</head>

<body class="login checkout">
	

		<div class="geral_cima">
			<div class="container">				
				<?php include 'includes/header.php'; ?>
			</div> <!-- container -->
		</div><!-- geral_cima -->


		<div class="container conteudo">

			<ul class="bread-crumb">
			  <li><a href="#">Home</a></li>
			  <li class="last">Login</li>
			</ul> <!-- bread-crumb -->
			

			<form action="" class="login">
				<div class="row">
					<div class="col-xs-3"></div>

					<div class="col-xs-6">

						<div class="logar">
							<h3>Já sou cadastrado</h3>
							
							<div class="alert alert-danger">Login / Senha incorretos.</div>

							<input type="text" placeholder="e-mail" class="form-control">
								<div class="email_menu util">
									<a href="esqueci_meu_email.php" class="esqueci">Esqueci meu e-mail</a>
									<a href="email_mudou.php" class="mudou">Meu e-mail mudou</a>
								</div>

							<input type="password" class="form-control" placeholder="senha">
								<div class="senha_menu util">
									<a href="esqueci_minha_senha.php" class="esqueci">Esqueci minha senha</a>
								</div>

							<input type="submit" value="Entrar">

							<div class="clear"></div>
						</div> <!-- logar -->

						<div class="naosou">
							<h3>Ainda não sou cadastrado</h3>	
							<p>Se você ainda não é cadastrado na Sound Wave, você pode criar sua conta agora em menos de 1 minuto!</p>
							<a href="#" class="cadastrar">Criar sua conta</a>
							<div class="clear"></div>
						</div>

					</div>

					<div class="col-xs-3"></div>
				</div>
			</form>


		</div> <!-- container -->

		<?php include 'includes/footer.php'; ?>

</body>
</html>
