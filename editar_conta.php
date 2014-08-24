<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->

<?php include 'includes/css.php'; ?>

<?php include 'includes/script.php'; ?>

<title>Sound Wave</title>
</head>

<body class="editar_conta">

		<div class="esc" style="display:none;"></div>
		<div class="box_info"  style="display:none;">
			<div class="resposta_comprador">
				<h3>Resposta</h3>
				<h4>Responda a avaliação do comprador do seu produto</h4>

				<form class="opcoes">
					<textarea></textarea>
					<button type="submit">Responder</button>
				</form>
			</div>
		</div>
		

		<div class="geral_cima">
			<div class="container">				
				<?php include 'includes/header.php'; ?>
			</div> <!-- container -->
			
			<?php include 'includes/menu_minha_conta.php'; ?>
			
		</div><!-- geral_cima -->


		<div class="container conteudo">

			<ul class="bread-crumb">
			  <li><a href="#">Home</a></li>
			  <li class="last">Editar Conta</li>
			</ul> <!-- bread-crumb -->


			<div class="edita_conta_cont">				
				<h3 class="">Editar Conta</h3>
				<div class="row">				
					
					<div class="col-xs-3">
						<div class="list-group">
						  <a href="#" class="list-group-item">Mudar Senha</a>
						  <a href="#" class="list-group-item">Meu E-mail mudou</a>
						  <a href="#" class="list-group-item list-group-item-danger">Mudar meus dados</a> 
						</div> <!-- nav -->
					</div>

					<div class="col-xs-9">
						<div class="foto_edit">
							<div class="foto"><img src="img/foto.jpg" alt="" /></div>
							<div class="editar_foto">
								<h6>Editar Foto</h6>
								<input type="file" />
							</div>
						</div> <!-- foto_edit -->
					</div> <!-- conteudo -->

				</div>

			</div> <!-- meus_anuncios -->


		</div> <!-- container -->

		<?php include 'includes/footer.php'; ?>

</body>
</html>
