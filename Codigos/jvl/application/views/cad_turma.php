<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="pt">
	<head>
		<title>Administracao</title>
		<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/background.css">
		<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/administrador.css">
		<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/demo.css">
		<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/botao.css">
	</head>
	<body>
		<div class="formularios">
			<form id="cadastro" method="POST" action="inserir/Turma">
				<h5>Cadastro de turma</h5>
				<?php 
					@session_start();
					if($_SESSION['inserir'] == 'true'){
						echo '<label class="cx-label" style="color: green;" >INSERIDA COM SUCESSO</label>';
					}
					else if($_SESSION['inserir'] == 'false'){
						echo '<label class="cx-label" style="color: red;" >CADASTRO NAO INSERIDO!</label>';
					}
					else if($_SESSION['inserir'] == 'false-matricula'){
						echo '<label class="cx-label" style="color: red;" >ERRO, TURMA JA EXISTE!</label>';
					}
					$_SESSION['inserir'] = null;
				?>
					</br>
					<div style="float: left;">
						<label class="cx-label">Numero da turma:</label>
						</br>
						<input type="text" id="numero" name="numero" class="user" placeholder="Digite a TURMA" />
					</div>
					<div style="float: right; right: 10%;overflow: hidden;">
						<label class="cx-label">ID HORARIO</label>
						</br>
						<select id="cbox" name="cbox" class="cbox" style="width: 34em;">
							
							<?php echo $horario;?>
							
						</select>
					</div>
					</br></br></br></br></br></br></br></br>
					<div style="float: center;left: 30%;">
						<input type="submit" name="submit" class="enter" onmouseover = "this.className = 'botao-efeito-1';" onmouseout="this.className = 'enter';" value="Cadastrar" />
					</div>
				</form>
		</div>
	</body>
</html>