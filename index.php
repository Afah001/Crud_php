<!DOCTYPE html>
<html>
<head>
	<title>At Nacional</title>
</head>
<body>
	
	<h1>INSERTAR </h1>

	<form action="index.php" method="post">

		Nombre <input type="text" name="_nom">
		Apellido <input type="text" name="_apell">
		Edad <input type="num" name="_eda">
		Posicion <input type="text" name="_pos">
		Valoracion <input type="num" name="_val">

		<input type="submit" value="Registrar">


	</form>


	<p>haz click <a href="listaJugadores.php" target="blank">aqui </a>para ver la lista de Jugadores</p>



	<?php 


	if(isset($_POST['_nom']) && isset($_POST['_apell']) && isset($_POST['_eda']) 
		 && isset($_POST['_pos']) && isset($_POST['_val']) ){

		//requerimos la conexion
		require "conexion.php";
	
		//consulta-insertar datos

		$insert=$conexion->prepare("INSERT INTO Jugadores(NOMBRE,APELLIDO,EDAD,POSICION,VALORACION)
									VALUES (:nom,:ape,:eda,:pos,:val)");		

		$insert->execute(	array(":nom"=>$_POST['_nom'],":ape"=>$_POST['_apell'],":eda"=>$_POST['_eda'],":pos"=>$_POST['_pos'],":val"=>$_POST['_val'] ));


		echo "<br>los datos fueron insertados correctamente";


	}

		

	?>
</body>
</html>