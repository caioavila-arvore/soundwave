<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->

<?php include 'includes/css.php'; ?>

<?php include 'includes/script.php'; ?>

<title>Sound Wave</title>
</head>

<body class="avaliacoes">

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
			  <li class="last">Avaliações</li>
			</ul> <!-- bread-crumb -->


			<div class="avaliacoes_cont">				
				<h3 class="avalia">Avaliações</h3>
				<div class="row">				
					
					<div class="col-xs-12 conteudo_anuncio">
						<h4>Não Respondidas</h3>


						<table  class="table table-striped">
							<tbody>
								<tr>
									<td class="tipo positivo"><span></span></td>
									<td><strong>Caio Ávila</strong><p>Praesent non massa nibh. Morbi in rhoncus sapien. Sed a metus porttitor, tincidunt metus eget, adipiscing augue. Vivamus convallis, libero sed sodales gravida. </p></td>
									<td class='align_right'><a href="#" class="responder">Responder</a></td>
								</tr>
								<tr>
									<td class="tipo negativo"><span></span></td>
									<td><strong>Caio Ávila</strong><p>Praesent non massa nibh. Morbi in rhoncus sapien. Sed a metus porttitor, tincidunt metus eget, adipiscing augue. Vivamus convallis, libero sed sodales gravida. </p></td>
									<td class='align_right'><a href="#" class="responder">Responder</a></td>
								</tr>


							</tbody>	

						</table>


						<h4>Respondidas</h3>

						<table  class="table table-striped">
							<tbody>								
								<tr>
									<td class="tipo negativo"><span></span></td>
									<td>
										<div class="avali">
											<strong>Caio Ávila</strong>
											<p>Praesent non massa nibh. Morbi in rhoncus sapien. Sed a metus porttitor, tincidunt metus eget, adipiscing augue. Vivamus convallis, libero sed sodales gravida. </p>
										</div> 
										<div class="respo">
											<strong>Resposta:</strong>
											<p>Praesent non massa nibh. Morbi in rhoncus sapien. Sed a metus porttitor, tincidunt metus eget, adipiscing augue. Vivamus convallis, libero sed sodales gravida. </p>
										</div>
									</td>
									<td class='align_right'></td>
								</tr>

								<tr>
									<td class="tipo positivo"><span></span></td>
									<td>
										<div class="avali">
											<strong>Caio Ávila</strong>
											<p>Praesent non massa nibh. Morbi in rhoncus sapien. Sed a metus porttitor, tincidunt metus eget, adipiscing augue. Vivamus convallis, libero sed sodales gravida. </p>
										</div> 
										<div class="respo">
											<strong>Resposta:</strong>
											<p>Praesent non massa nibh. Morbi in rhoncus sapien. Sed a metus porttitor, tincidunt metus eget, adipiscing augue. Vivamus convallis, libero sed sodales gravida. </p>
										</div>
									</td>
									<td class='align_right'></td>
								</tr>

							</tbody>	

						</table>
					</div> <!-- conteudo -->

				</div>

			</div> <!-- meus_anuncios -->


		</div> <!-- container -->

		<?php include 'includes/footer.php'; ?>

</body>
</html>
