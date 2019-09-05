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
			<?php if($selecionar == null){?>
			<h5>Atualizar Horarios</h5>
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
			<form id="update" method="POST" action="alter_horario/Form">
					<div style="float: center; overflow: hidden;">
						<label class="cx-label">Selecione o horario que deseja atualizar:</label>
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
			<?php } 
			else{ ?>
				<h5>Foi selecionado</h5>
				<form id="update" method="POST" action="../update/Horario">
					<div style="float: center;overflow: hidden;">
						<input type="hidden" id="numero" name="numero" value="<?php echo $numero;?>"/>
					</div>
					</br></br>
					<div style="float: left;">
						<label class="cx-label">Descri&ccedil;&atilde;o:</label>
						</br>
						<input type="text" id="descricao" name="descricao" class="user" placeholder="Digite a DESCRICAO" style="width: 32em;" maxlength="50" value="<?php echo $descricao;?>"/>
					</div>
					</br>
					</br></br></br></br>
					<table class="tabela">
					<tr>
						<th>HOR&Aacute;RIOS</th>
						<th>SEGUNDA</th>
						<th>TER&Ccedil;A</th>
						<th>QUARTA</th>
						<th>QUINTA</th>
						<th>SEXTA</th>
					</tr>
					<tr>
						<th>PRIMEIRO/SEGUNDO</th>
						<th><input type="text" id="seg1" name="seg1" class="user" placeholder="SEG" style="width: 3em" maxlength="3" value="<?php echo $p_seg1;?>"/></th>
						<th><input type="text" id="ter1" name="ter1" class="user" placeholder="TER" style="width: 3em" maxlength="3" value="<?php echo $p_ter1;?>"/></th>
						<th><input type="text" id="qua1" name="qua1" class="user" placeholder="QUA" style="width: 3em" maxlength="3" value="<?php echo $p_qua1;?>"/></th>
						<th><input type="text" id="qui1" name="qui1" class="user" placeholder="QUI" style="width: 3em" maxlength="3" value="<?php echo $p_qui1;?>"/></th>
						<th><input type="text" id="sex1" name="sex1" class="user" placeholder="SEX" style="width: 3em" maxlength="3" value="<?php echo $p_sex1;?>"/></th>
					</tr>
					<tr>
						<th>TERCEIRO/QUARTO</th>
						<th><input type="text" id="seg2" name="seg2" class="user" placeholder="SEG" style="width: 3em" maxlength="3" value="<?php echo $p_seg2;?>"/></th>
						<th><input type="text" id="ter2" name="ter2" class="user" placeholder="TER" style="width: 3em" maxlength="3" value="<?php echo $p_ter2;?>"/></th>
						<th><input type="text" id="qua2" name="qua2" class="user" placeholder="QUA" style="width: 3em" maxlength="3" value="<?php echo $p_qua2;?>"/></th>
						<th><input type="text" id="qui2" name="qui2" class="user" placeholder="QUI" style="width: 3em" maxlength="3" value="<?php echo $p_qui2;?>"/></th>
						<th><input type="text" id="sex2" name="sex2" class="user" placeholder="SEX" style="width: 3em" maxlength="3" value="<?php echo $p_sex2;?>"/></th>
					</tr>
					<tr>
						<th>QUINTO/SEXTO</th>
						<th><input type="text" id="seg3" name="seg3" class="user" placeholder="SEG" style="width: 3em" maxlength="3" value="<?php echo $p_seg3;?>"/></th>
						<th><input type="text" id="ter3" name="ter3" class="user" placeholder="TER" style="width: 3em" maxlength="3" value="<?php echo $p_ter3;?>"/></th>
						<th><input type="text" id="qua3" name="qua3" class="user" placeholder="QUA" style="width: 3em" maxlength="3" value="<?php echo $p_qua3;?>"/></th>
						<th><input type="text" id="qui3" name="qui3" class="user" placeholder="QUI" style="width: 3em" maxlength="3" value="<?php echo $p_qui3;?>"/></th>
						<th><input type="text" id="sex3" name="sex3" class="user" placeholder="SEX" style="width: 3em" maxlength="3" value="<?php echo $p_sex3;?>"/></th>
					</tr>
				</table>				
					</br></br></br></br></br></br></br></br>
					<div style="float: center;left: 30%;">
						<input type="submit" name="submit" class="enter" onmouseover = "this.className = 'botao-efeito-1';" onmouseout="this.className = 'enter';" value="Atualizar" />
					</div>
				</form>
			<?php }	?>
		</div>
	</body>
</html>