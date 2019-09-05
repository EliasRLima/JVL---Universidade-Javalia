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
				<h5>Remover dados</h5>
				</br></br>
				<form id="cadastro" method="POST" action="deletar/remover" style="overflow: auto;">
					<div style="float: center; overflow: hidden;">
						<label class="cx-label">Selecione o aluno <span>PARA SER REMOVIDO:</span></label>
						</br>
						<input type="hidden" id="tabela" name="tabela" value="aluno" />
						<input type="hidden" id="coluna" name="coluna" value="id_pessoa" />
						<select id="cbox" name="cbox" class="cbox" style="width: 34em;">
							
							<?php echo $aluno;?>
							
						</select>
						<input type="submit" name="submit" class="enter" onmouseover = "this.className = 'botao-efeito-1';" onmouseout="this.className = 'enter';" value="Selecionar" />
					</div>
					</br>
						
				</form>

				<form id="cadastro" method="POST" action="deletar/remover">
					<div style="float: center; overflow: hidden;">
						<label class="cx-label">Selecione a turma <span>PARA SER REMOVIDA:</span></label>
						</br>
						<input type="hidden" id="tabela" name="tabela" value="turma" />
						<input type="hidden" id="coluna" name="coluna" value="id_turma" />
						<select id="cbox" name="cbox" class="cbox" style="width: 34em;">
							
							<?php echo $turma;?>
							
						</select>
						<input type="submit" name="submit" class="enter" onmouseover = "this.className = 'botao-efeito-1';" onmouseout="this.className = 'enter';" value="Selecionar" />
					</div>
					</br>
				</form>

				<form id="cadastro" method="POST" action="deletar/remover">
					<div style="float: center; overflow: hidden;">
						<label class="cx-label">Selecione o horario <span>PARA SER REMOVIDO:</span></label>
						</br>
						<input type="hidden" id="tabela" name="tabela" value="horarios" />
						<input type="hidden" id="coluna" name="coluna" value="id_horario" />
						<select id="cbox" name="cbox" class="cbox" style="width: 34em;">
							
							<?php echo $horario;?>
							
						</select>
						<input type="submit" name="submit" class="enter" onmouseover = "this.className = 'botao-efeito-1';" onmouseout="this.className = 'enter';" value="Selecionar" />
					</div>
					</br>
				</form>
		</div>
	</body>
</html>