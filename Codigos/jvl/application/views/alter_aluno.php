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
			<h5>Atualizar alunos</h5>
			</br></br>
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
			<form id="update" method="POST" action="alter_aluno/Form">
					<div style="float: center; overflow: hidden;">
						<label class="cx-label">Selecione o aluno que deseja atualizar:</label>
						</br>
						<select id="cbox1" name="cbox1" class="cbox" style="width: 34em;">
							
							<?php echo $aluno;?>
							
						</select>
					</div>
					</br></br></br></br></br></br></br></br>
					<div style="float: center;left: 30%;">
						<input type="submit" name="submit" class="enter" onmouseover = "this.className = 'botao-efeito-1';" onmouseout="this.className = 'enter';" value="Selecionar" />
					</div>
				</form>
			<?php } 
			else{ ?>
				<form id="cadastro" method="POST" action="../update/Aluno">
					</br>
					<div style="float: left;">
						<label class="cx-label">MATRICULA<label class="cx-label" style="color: red;">(nao pode ser editada)</label></label>
						</br>
						<input type="text" id="matricula" name="matricula" class="user" placeholder="Digite a MATRICULA" value="<?php echo $matricula;?>" disabled/>
						<input type="hidden" id="matricula1" name="matricula1" class="user" placeholder="Digite a MATRICULA" value="<?php echo $matricula;?>"/>
					</div>
					<div style="float: left;left: 5%;">
						<label class="cx-label">CURSO</label>
						</br>
						<input type="text" id="curso" name="curso" class="user" placeholder="Digite o CURSO do aluno" value="<?php echo $curso;?>" />
					</div>
					<div style="float: right; right: 19%;overflow: hidden;">
						<label class="cx-label">TURMA</label>
						</br>
						<select id="cbox" name="cbox" class="cbox">
							<?php echo $turma?>
						</select>
					</div>
					</br></br></br></br>
					<div style="float: left;">
						<label class="cx-label">NOME</label>
						</br>
						<input type="text" id="nome" name="nome" class="user" style="width: 29.6em;" placeholder="Digite o NOME do aluno" value="<?php echo $nome;?>"/>
					</div>
					<div style="float: right; right: 17%;">
						<label class="cx-label">SENHA</label>
						</br>
						<input type="text" id="senha" name="senha" class="user" placeholder="Digite a SENHA do aluno" value="<?php echo $senha;?>" />
					</div>
					</br></br></br></br>
					<div style="float: left; text-align: center;">
						<label class="cx-label">SEXO</label>
						</br></br>
						<div id="sexo">
							<div class="esquerdar">
							</div>
							<?php if($sexo == 'M'){
								echo '<ul class="sexo">
  								<li class="sexo-li masc">
    								<input name="sexo" type="radio" id="m" value="M" checked="True">
    								<label for="m">Masculino</label>
  								</li>

  								<li class="sexo-li fem">
    								<input name="sexo" type="radio" id="f" value="F">
    								<label for="f">Feminino</label>
  								</li>
							</ul>';
							}
							else{
								echo '<ul class="sexo">
								<li class="sexo-li masc">
    								<input name="sexo" type="radio" id="m" value="M" >
    								<label for="m">Masculino</label>
  								</li>

  								<li class="sexo-li fem">
    								<input name="sexo" type="radio" id="f" value="F" checked="True">
    								<label for="f">Feminino</label>
  								</li></ul>';
								
							} ?>
						</div>
					</div>
					</br></br></br></br></br></br></br></br>
					<div style="float: center;left: 35%;">
						<input type="submit" name="submit" class="enter" onmouseover = "this.className = 'botao-efeito-1';" onmouseout="this.className = 'enter';" value="Atualizar" />
					</div>
				</form>
			<?php }	?>
		</div>
	</body>
</html>