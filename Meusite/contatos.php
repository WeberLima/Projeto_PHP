<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="contatos2.css">
	</head>
	<body>
		<h1 id="avalie">Avalie nosso site</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg']."<br><br>";
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="processa.php" enctype="multipart/form-data">
			<div class="estrelas">
				<input type="radio" id="vazio" name="estrela" value="" checked>
				
				<label for="estrela_um" class="estrelinha1"><i class="fa"></i></label>
				<input type="radio" id="estrela_um" name="estrela" value="1" >
				
				<label for="estrela_dois" class="estrelinha2"><i class="fa"></i></label>
				<input type="radio" id="estrela_dois" name="estrela" value="2" >
				
				<label for="estrela_tres" class="estrelinha3"><i class="fa"></i></label>
				<input type="radio" id="estrela_tres" name="estrela" value="3" >
				
				<label for="estrela_quatro" class="estrelinha4"><i class="fa"></i></label>
				<input type="radio" id="estrela_quatro" name="estrela" value="4" ]>
				
				<label for="estrela_cinco" class="estrelinha5"><i class="fa"></i></label>
				<input type="radio" id="estrela_cinco" name="estrela" value="5" ><br><br>
				
				<input type="submit" value="Cadastrar" id="botao">
				
			</div>
		</form>

        <img src="png-transparent-portal-2-sticker-valve-corporation-video-game-portal-blue-game-angle (1).png" alt="">
	</body>
</html>