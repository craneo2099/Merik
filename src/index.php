<?php
$ext = substr(strrchr(__FILE__, '.'), 1);
$vista=isset($_GET['view'])?$_GET['view']:'home';
?>
<!DOCTYPE html>
<html lang="es-ES" class="no-js">

 <?php 	include('template/head.php');?>


<body>
	<?php 	include('template/header.php');
	 ?>
	<?php 	include('template/menu.php');
	 ?>	
		<?php

		   //buscamos en la carpeta controlador el controlador respectivo
		  if(file_exists('pages/' . strtolower($vista) . '.'. $ext)) {
		    include('pages/' . strtolower($vista) . '.'. $ext);
		  } else {
		  	include('pages/home.php');
		  }
		?>	
 		<?php 	include('template/footer.php');?>

 <?php 	include('template/end.php');?>
</body>
</html>
