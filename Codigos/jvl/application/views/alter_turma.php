<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="pt">
	<head>
		<title>Administracao</title>
		<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/background.css">
		<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/administrador.css">
		<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/botao.css">
		<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/demo.css">
	</head>
	<body>
		<div class="formularios">
			<?php if($selecionar == null){?>
			<h5>Atualizar turma</h5>
			<?php 
					@session_start();
					if($_SESSION['update'] == 'true'){
						echo '<label class="cx-label" style="color: green;" >ATUALIZADO COM SUCESSO</label>';
					}
					else if($_SESSION['update'] == 'false'){
						echo '<label class="cx-label" style="color: red;" >CADASTRO NAO ATUALIZADO!</label>';
					}
					$_SESSION['update'] = null;
				?>
			</br></br>
			<form id="update" method="POST" action="alter_turma/Form">
					<div style="float: center; overflow: hidden;">
						<label class="cx-label">Selecione a turma que deseja atualizar:</label>
						</br>
						<select id="cbox" name="cbox" class="cbox" style="width: 34em;">
							
							<?php echo $turma;?>
							
						</select>
					</div>
					</br></br></br></br></br></br></br></br>
					<div style="float: center;left: 30%;">
						<input type="submit" name="submit" class="enter" onmouseover = "this.className = 'botao-efeito-1';" onmouseout="this.className = 'enter';" value="Selecionar" />
					</div>
				</form>
			<?php } 
			else{ ?>
				<h5>Foi selecionado</h5>
				<form id="update" method="POST" action="../update/Turma">
					<div style="float: center;overflow: hidden;">
						<label class="cx-label">Turma: <label class="cx-label" style="color: red">Não editavel</label></label>
						<input type="text" name="numerovisivel" class="user" placeholder="Digite o nome da turma" value="<?php echo $turma;?>" disabled/>
						<input type="hidden" id="numero" name="numero" value="<?php echo $turma;?>"/>
					</div>
					</br></br>
					<div style="float: center; overflow: hidden;">
						<label class="cx-label">Selecione o horario:</label>
						</br>
						<select id="cbox" name="cbox" class="cbox" style="width: 34em;">
							
							<?php echo $horario;?>
							
						</select>
					</div>
					
					</br></br></br></br></br></br></br></br>
					<div style="float: center;left: 30%;">
						<input type="submit" name="submit" class="enter" onmouseover = "this.className = 'botao-efeito-1';" onmouseout="this.className = 'enter';" value="Selecionar" />
					</div>
				</form>
			<?php }	?>
		</div>

	</body>
</html>