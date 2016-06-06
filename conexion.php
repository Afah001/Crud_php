<?php 

	//conexion bd
	
	try {
		$conexion= new pdo('mysql:host=localhost; dbname=at_nacional','root','');
		echo "la conexion tuvo exito";
	} catch (Exception $e) {
		die('Error: '.$e->GetMessage());
	}
	



?>