<div class="row header">

	<!--LOGADO -->
	<ul class="logado">
		<li class="ola">Ola, <strong>Caio Ávila</strong></li>
		<li class="minha_conta"><a href="#">Minha Conta</a></li>
		<li class="sair"><a href="#">Sair</a></li>		
	</ul>
	
	<div class="col-xs-2 cont_logo">
		
		<h1 class="logo">
			<a href="#">
				<img src="img/logo_sw.png" alt="" />
			</a> <!-- logo -->
		</h1>	

	</div>


	<div class="col-xs-7 menu_princ_user">

		<ul class="menu_princ">
			<li class="home"><a href="index.php">Home</a></li>
			<li class="comprar"><a href="#">Comprar</a></li>
			<li class="vender"><a href="#">Vender</a></li>
			<li class="servicos"><a href="#">Serviços</a></li>
		</ul>

		<ul class="menu_user">
			<li class="cadastre"><a href="cadastrese.php">Cadastre-se</a></li>
			
			<li class="entrar"><a href="login.php" class="entrar">Entrar</a>
				<div class="login">
					<form action="" id="login">
						<input type="text" placeholder="e-mail" class="form-control">
							<div class="email_menu">
								<a href="esqueci_meu_email.php" class="esqueci">Esqueci meu e-mail</a>
								<a href="email_mudou.php" class="mudou">Meu e-mail mudou</a>
							</div>

						<input type="password" class="form-control" placeholder="senha">
							<div class="senha_menu">
								<a href="esqueci_minha_senha.php" class="esqueci">Esqueci minha senha</a>
							</div>

						<input type="submit" value="Entrar">
					</form>
					<div class="alert alert-danger">Login / Senha incorretos.</div>
				</div>
			</li>

		</ul>
	</div>  <!-- menu_princ -->

	<div class="col-xs-3 cont_search">
		<div class="search">
			<fieldset class="busca">
			  <input type="text" class="pesquisa" placeholder="Pesquisar">
			  <input type="button" class="btn-buscar" value="Buscar">
			</fieldset>
		</div>
	</div>  <!-- search -->

</div> <!-- header -->