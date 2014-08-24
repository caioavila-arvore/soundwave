<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->

<?php include 'includes/css.php'; ?>

<?php include 'includes/script.php'; ?>

<title>Sound Wave</title>
</head>

<body class="meus_anuncios anuncio">

		<div class="esc" style="display:none;"></div>
		<div class="box_info"  style="display:none;">
			<div class="comprador">
				<h3>Quem comprou?</h3>
				<h4>Por favor, informe o CPF do comprador.</h4>

				<form class="opcoes">
					<input type="text" placeholder="CPF" />
					<button type="submit">Vendido</button>
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
			  <li class="last">Minha Conta</li>
			</ul> <!-- bread-crumb -->


			<div class="meus_anuncios anuncio">				
				<h3 class="nomeanuncio">Meu anúncio</h3>
				<div class="row">				
					
					<div class="col-xs-3">
						<div class="list-group">
						  <a href="#" class="list-group-item">Renovar Anúncio</a>
						  <a href="#" class="list-group-item informa_venda">Informar Venda</a>
						  <a href="#" class="list-group-item list-group-item-danger">Remover Anuncio</a> 
						</div> <!-- nav -->
					</div>
					

					<div class="col-xs-9 conteudo_anuncio">
						<h4>Focal Diablo Black Gloss</h3>

						<h6>Fotos do produto</h6>
						<ul class="img_prod">
							<li>
								<a class="excluir" href="#"></a>
								<img alt="" src="img/foto_cadastro_produto.jpg" class="img-thumbnail">
							</li>
							<li>
								<a class="excluir" href="#"></a>
								<img alt="" src="img/foto_cadastro_produto.jpg" class="img-thumbnail">
							</li>
							<li>
								<a class="excluir" href="#"></a>
								<img alt="" src="img/foto_cadastro_produto.jpg" class="img-thumbnail">
							</li>
							<li>
								<a class="excluir" href="#"></a>
								<img alt="" src="img/foto_cadastro_produto.jpg" class="img-thumbnail">
							</li>
							<li>
								<a class="excluir" href="#"></a>
								<img alt="" src="img/foto_cadastro_produto.jpg" class="img-thumbnail">
							</li>
						</ul>	

						<h6>Informações técnicas</h6>
						<table  class="table table-striped">
							<tbody>
								<tr>
									<td>Fabricante / Marcar</td>
									<td class='align_right'>Focal</td>
								</tr>

								<tr>
									<td>Tipo do equipamento</td>
									<td class='align_right'>Caixa / Central</td>
								</tr>

								<tr>
									<td>Cor</td>
									<td class='align_right'>Preto</td>
								</tr>

								<tr>
									<td>Histórico</td>
									<td class='align_right'>Único dono</td>
								</tr>

								<tr>
									<td>Voltagem</td>
									<td class='align_right'>110v / 220v</td>
								</tr>

								<tr>
									<td>Nota Fiscal / Recibo</td>
									<td class='align_right'>8844545161-12525-12</td>
								</tr>

								<tr>
									<td>Potência</td>
									<td class='align_right'>1500w</td>
								</tr>

							</tbody>	

						</table>


						<h6>Descrição do Produto</h6>
						<textarea class="descricao_produto">
						</textarea>

						<button type="submit">Salvar Alterações</button>
					</div> <!-- conteudo -->

				</div>

			</div> <!-- meus_anuncios -->


		</div> <!-- container -->

		<?php include 'includes/footer.php'; ?>

</body>
</html>
