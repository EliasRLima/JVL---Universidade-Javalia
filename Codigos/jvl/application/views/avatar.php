<!DOCTYPE html>
<html>
	<head>
		<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/avatar.css"> 
		<script type = 'text/javascript' src = "<?php echo base_url(); ?>js/avatar.js"></script>

	</head>
	<body>	
			<div class="avatar">
				<center>
					<a href="perfil" style="color: #fff;">
						<img id="img-avatar" class="avatar-imagem" src="<?php echo base_url($_SESSION['avatar']); ?>" />
						<h4>Bem-vindo(a)!</h4>
						<h4>
							<?php
								if(isset($_SESSION['login'])){
									$texto = $_SESSION['login'];
									for ($i=0; $i < strlen($texto); $i++) {
										if($texto[$i]==" "){
											$texto = substr($texto, 0,$i);
											$i = strlen($texto)+10;
										}
									}
									echo $texto;
								}else{
									echo "An&ocirc;nimo";
								}
							?>
						</h4>
					</a>
				</center>
			</div>
			<script type="text/javascript">
			raybow();
		</script>
	</body>
</html>