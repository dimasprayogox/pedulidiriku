<?php 
include "header.php";
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.gg {
			height: 200px;
		}
	</style>
</head>
<body>
	<table border="1" width="50%" align="center" class="gg">
		<td>Selamat datang <?php echo $_SESSION['username'] ?> di aplikasi peduli diri</td>
	</table>
</body>
</html>