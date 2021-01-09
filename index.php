<?php  
	if (isset($_POST['salvar'])) {
		file_put_contents("arquivos_editar/arquivo.php", $_POST['conteudo']);
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link rel="stylesheet" type="text/css" href="assets/style.css">

</head>
<body class="color">
	<div class="container">
		<form method="post">
			<div class="row">
				<div class="col-md-4">
					<button name="salvar" class="btn btn-purple mt-5" id="enviar">
						<i class="fa fa-save fas"></i>
						Salvar
					</button>
				</div>
				<div class="col-md-6  mt-5">
					<h3>Editor de arquivo online</h3>
				</div>
			</div>
			<div class="row pt-2">
				<div class="col-md-6 ">
					<div class="form-group">
						<textarea name="conteudo" class="form-control border-purple" rows="23" id="conteudo_html">
							<?php  
								echo file_get_contents('arquivos_editar/arquivo.php');
							?>
						</textarea>
					</div>
				</div>
				<div class="col-md-6 bg-white border-purple" style="height: 570px;">
					<?php 
						$handle = file_get_contents('arquivos_editar/arquivo.php');
						echo $handle;
					?>
				</div>
			</div>
		</form>
	</div>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<script type="text/javascript" src="assets/app.js"></script>
	<script type="text/javascript">
		var textareas = document.getElementsByTagName('textarea');
		var count = textareas.length;
		for(var i=0;i<count;i++){
		    textareas[i].onkeydown = function(e){
		        if(e.keyCode==9 || e.which==9){
		            e.preventDefault();
		            var s = this.selectionStart;
		            this.value = this.value.substring(0,this.selectionStart) + "        " + this.value.substring(this.selectionEnd);
		            this.selectionEnd = s+1; 
		        }
		    }
		}
	</script>
</body>
</html>