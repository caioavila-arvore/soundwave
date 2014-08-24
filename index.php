<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->

<?php include 'includes/css.php'; ?>

<?php include 'includes/script.php'; ?>

<title>Sound Wave</title>
</head>

<body class="home">
		<div class="esc" style="display:none;"></div>	
		<div class="cont_adicionado_lista" style="display:none;">
			<a href="#" class="fechar">Fechar</a>
			<h6>Item adicionado com sucesso!</h6>
			<p>Agora você tem <span class="numero">45</span> itens na sua lista. <a href="" class="">Clique aqui para visualizar</a>.</p>
		</div>


		<div class="geral_cima">
			<div class="container">
				
				<?php include 'includes/header.php'; ?>




				<div class="row  combobox_destaque_newsletter">
					<div class="col-xs-4 combobox">
						<ul class="tabs">
							<li class="pesquisar ativo">Pesquisar</li>
							<li class="anunciar">Anunciar</li>
						</ul> <!-- tabs -->

						<div class="cont_tabs">
							<div class="pesquisar">
								<fieldset class="combo">
									<div class="marca">
										<select name="marca" id="marca">
											<option value="marca">Marca</option>
										</select>
									</div>
									
									<div class="tipo">
										<select name="tipo" id="tipo">
											<option value="tipo">Tipo</option>
										</select>
									</div>
									
									<div class="estado">
										<select name="estado" id="estado">
											<option value="estado">Estado</option>
										</select>
									</div>

									<a href="#" class="buscar">Buscar</a>
								</fieldset>
							</div>

							<div class="anunciar" style="display:none;">
								anunciar
							</div>
						</div> <!-- cont_tabs -->
					</div> <!-- col-xs-4 -->

					<div class="col-xs-3 destaque_princ_01">
						<ul class="prateleira super_destaque_01">
							<li>
								<a href="#" class="imagem_produto"><img src="img/foto_175_175.jpg" alt="" /></a>
								<h3 class="none_produto"><a href="#">Focal Diablo Black Gloss</a></h3>
								<span class="local">Rio de Janeiro</span>
								<span class="valor">R$ <strong>47.000<em>,00</em></strong></span>
							</li>
						</ul>
					</div> <!-- col-xs-3 -->

					<div class="col-xs-5 cont_news_destaque_02">
						
						<ul class="prateleira super_destaque_02">
							<li>
								<a href="#" class="imagem_produto"><img src="img/foto_124_124.jpg" alt="" /></a>

								<div class="infos">
									<h3 class="none_produto"><a href="#">Denon 100th PMA-A100</a></h3>
									<span class="local">Rio de Janeiro</span>
									<span class="valor">R$ <strong>12.900<em>,00</em></strong></span>
								</div>

							</li>
						</ul> <!-- prateleira superdestaque -->


						<div class="news">
							<h4>Receba Novidades</h4>
							<p>Cadastre seu e-mail e receba novidades</p>
							<form action="" id="newsletter">
								<fieldset class="cadastro">
									<input type="text" placeholder="Seu e-mail" />
									<input type="submit" value="enviar"/>
								</fieldset>
							</form>
						</div>

					</div> <!-- col-xs-5 -->
				</div> <!-- combobox_destaque_newsletter -->

				<div class="banner_cima">
					<div class="banner">
						<span class="txt_publi"></span>
						<div class="banner"><img src="img/banner_home_728_90.jpg" alt="" /></div>
					</div>
				</div>

			</div> <!-- container -->
		</div><!-- geral_cima -->

		
		<div class="conteudo_baixo container">
			
			<div class="cont_destaque_cat">
				
				<div class="cont_tabs">

					<ul>
						<li id="tab_1" class="ativo"><span class="seta"></span> Amplificadores</li>
						<li id="tab_2"><span class="seta"></span> Caixa de Som</li>
						<li id="tab_3"><span class="seta"></span> Analógicos</li>
						<li id="tab_4"><span class="seta"></span> Home Theater</li>
						<li id="tab_5"><span class="seta"></span> Cabos</li>
					</ul>

				</div> <!-- cont_tabs -->

				<div class="cont_conteudo_abas">
					
					<div class="tab_1 conteudo_aba" style="display:block;">
						 <?php include 'includes/prateleira_4.php'; ?>

						 <?php include 'includes/prateleira_4.php'; ?>
					</div> <!-- conteudo_aba -->

					<div class="tab_2 conteudo_aba"><?php include 'includes/prateleira_4.php'; ?><?php include 'includes/prateleira_4.php'; ?></div>
					<div class="tab_3 conteudo_aba"><?php include 'includes/prateleira_4.php'; ?><?php include 'includes/prateleira_4.php'; ?></div>
					<div class="tab_4 conteudo_aba"><?php include 'includes/prateleira_4.php'; ?><?php include 'includes/prateleira_4.php'; ?></div>
					<div class="tab_5 conteudo_aba"><?php include 'includes/prateleira_4.php'; ?><?php include 'includes/prateleira_4.php'; ?></div>

					<div class="ver_todos"><a href="#">Ver mais <em>analógicos</em></a></div>

				</div> <!-- conteudo_abas -->


				<div class="cont_publicidade_baixo">
					<img src="img/banner_home_980_90.jpg" alt="" />
					<span>Publicidade</span>
				</div> <!-- cont_publicidade_baixo -->


				<div class="cont_parceiros">
					<h2 class="title_home">Nossos parceiros <span></span> </h2>

					
					<div class="jcarousel_cont">
						<div class="jcarousel">
							<ul>
								<li><img src="img/logo_parceiro.jpg" alt="" /></li>
								<li><img src="img/logo_parceiro.jpg" alt="" /></li>
								<li><img src="img/logo_parceiro.jpg" alt="" /></li>
								<li><img src="img/logo_parceiro.jpg" alt="" /></li>
								<li><img src="img/logo_parceiro.jpg" alt="" /></li>
								<li><img src="img/logo_parceiro.jpg" alt="" /></li>
								<li><img src="img/logo_parceiro.jpg" alt="" /></li>
							</ul>
						</div>

						<a class="jcarousel-control-prev"></a>
						<a class="jcarousel-control-next"></a>
					</div>
					
				</div>


			</div> <!-- cont_destaque_cat -->

		</div> <!-- conteudp_baixo -->

		<?php include 'includes/footer.php'; ?>
</body>
</html>
