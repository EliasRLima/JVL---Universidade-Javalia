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
				<h5>Cadastro de alunos</h5>
				<?php 
					@session_start();
					if($_SESSION['inserir'] == 'true'){
						echo '<label class="cx-label" style="color: green;" >INSERIDO COM SUCESSO</label>';
					}
					else if($_SESSION['inserir'] == 'false'){
						echo '<label class="cx-label" style="color: red;" >CADASTRO NAO INSERIDO!</label>';
					}
					else if($_SESSION['inserir'] == 'false-matricula'){
						echo '<label class="cx-label" style="color: red;" >ERRO, MATRICULA JA EXISTE!</label>';
					}
					$_SESSION['inserir'] = null;
				?>
				</br>
				<form id="cadastro" method="POST" action="inserir/Aluno">
					</br>
					<div style="float: left;">
						<label class="cx-label">MATRICULA</label>
						</br>
						<input type="text" id="matricula" name="matricula" class="user" placeholder="Digite a MATRICULA" />
					</div>
					<div style="float: left;left: 5%;">
						<label class="cx-label">CURSO</label>
						</br>
						<input type="text" id="curso" name="curso" class="user" placeholder="Digite o CURSO do aluno" />
					</div>
					<div style="float: right; right: 19%;overflow: hidden;">
						<label class="cx-label">TURMA</label>
						</br>
						<select id="cbox" name="cbox" class="cbox">
							<?php echo $turma;?>
						</select>
					</div>
					</br></br></br></br>
					<div style="float: left;">
						<label class="cx-label">NOME</label>
						</br>
						<input type="text" id="nome" name="nome" class="user" style="width: 29.6em;" placeholder="Digite o NOME do aluno" />
					</div>
					<div style="float: right; right: 17%;">
						<label class="cx-label">SENHA</label>
						</br>
						<input type="text" id="senha" name="senha" class="user" placeholder="Digite a SENHA do aluno" />
					</div>
					</br></br></br></br>
					<div style="float: left; text-align: center;">
						<label class="cx-label">SEXO</label>
						</br></br>
						<div id="sexo">
							<div class="esquerdar">
							</div>
							<ul class="sexo">
  								<li class="sexo-li masc">
    								<input name="sexo" type="radio" id="m" value="M" checked="True">
    								<label for="m">Masculino</label>
  								</li>

  								<li class="sexo-li fem">
    								<input name="sexo" type="radio" id="f" value="F">
    								<label for="f">Feminino</label>
  								</li>
							</ul>
						</div>
					</div>
					</br></br></br></br></br></br></br></br>
					<div style="float: center;left: 35%;">
						<input type="submit" name="submit" class="enter" onmouseover = "this.className = 'botao-efeito-1';" onmouseout="this.className = 'enter';" value="Cadastrar" />
					</div>
				</form>
		</div>
	</body>
</html>