<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//btn btn-success btn-lg
?>
<!DOCTYPE html>
<html lang="pt">
	<head>
		<title>Inicie uma sess&atilde;o na JVL</title>
		<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/login.css">
		<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/background.css">
		<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/demo.css">
		<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/botao.css">

	</head>
	<body>
		<div class="container">
			<main>
				<div class="divfilha-esquerda">
					<center>
						<h2>Javalia</h2>
					    <h3>Sistema Universit&aacute;rio</h3>
						<img src="<?php echo base_url('images/jvl.jpg'); ?>" />
					</center> 
				</div>
				<div class="divfilha-traco">
				</div>
				<div class="divfilha-direita">
					<form id="login" method="POST" action="autorizar">
						<center>
								<?php 
					    			if($_SESSION['key_fail'] == "login"){
					    				echo '<label class="cx-label" style="color: red; font-size: 14px;top: 20%;">DADOS DIGITADOS ESTAVAM INCORRETOS</label></br>';
					    				$_SESSION['key_fail'] = "";
					    			}
					    		?>
								<label class="cx-label">LOGIN</label>
							<div id="clear"></div>
								<input class="user" type="text" name="user" id="user" value="" placeholder="Digite a sua MATRICULA" autofocus/>
							<div id="clear"></div>
					    		</br>
					    		</br>
							<div id="clear"></div>
								<label class="cx-label">SENHA</label>
							<div id="clear"></div>
								<input class="user" type="password" name="pass" id="pass" value="" placeholder="Digite a sua senha"/>
							<div id="clear"></div>
								</br>
								</br>
						    <div id="clear"></div>
								<input class="enter" type="submit" id="bntEfeito1" name="bntEfeito1" value="Entrar" onmouseover = "efeito1()" onmouseout="retirar_efeito1()" />
						</center>
						
					</form>
				</div>
	
			</main>
		</div>
	</body>
</html>