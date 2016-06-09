<!DOCTYPE html>

<html>
<head>
	<title>CONSULTA</title>
</head>
<body>

	<?php //importar la conexion
		require "conexion.php";  

if(isset($_REQUEST['action'])){

	switch($_REQUEST['action']){

		case 'eliminar':



			//echo "este es el id ".$_REQUEST['id'];
		//$model->Eliminar($_REQUEST['id']);
		//	header('Location: index.php');


       		$elim=$conexion->prepare("DELETE FROM jugadores WHERE id=:_id");

       		$elim->execute(array(":_id"=>$_REQUEST['id']));

			break;

		/*case 'actualizar':
			$alm->__SET('id',              $_REQUEST['id']);
			$alm->__SET('Nombre',          $_REQUEST['Nombre']);
			$alm->__SET('Apellido',        $_REQUEST['Apellido']);
			$alm->__SET('Sexo',            $_REQUEST['Sexo']);
			$alm->__SET('FechaNacimiento', $_REQUEST['FechaNacimiento']);

			$model->Actualizar($alm);
			header('Location: index.php');
			break;

		case 'registrar':
			$alm->__SET('Nombre',          $_REQUEST['Nombre']);
			$alm->__SET('Apellido',        $_REQUEST['Apellido']);
			$alm->__SET('Sexo',            $_REQUEST['Sexo']);
			$alm->__SET('FechaNacimiento', $_REQUEST['FechaNacimiento']);

			$model->Registrar($alm);
			header('Location: index.php');
			break;*/

		

		/*case 'editar':
			$alm = $model->Obtener($_REQUEST['id']);
			break;*/
	}
}



		?>

	<h1>CONSULTA</h1>

	<p>Echa un vistazo a la actual lista de juagadores de At nacional </p>

	
	<?php

		//hago el tipo de consulta
		$consult=$conexion->prepare("SELECT * FROM jugadores");

		$consult->execute();


	echo "<table>";
			
			echo "<tr>";

				echo "<th>ID</th>";
				echo "<th>NOMBRE</th>";
				echo "<th>APELLIDO</th>";
				echo "<th>EDAD</th>";
				echo "<th>POSICION</th>";
				echo "<th>VALORACION</th>";

			echo "</tr>";

			//muestro los datos en la tabla
			while($fila=$consult->fetch()){  ////la variable fila toma lo que tiene la consult con ayuda de fetch 
						

				echo "<tr>";  //tr fila
					
						echo "<td>".$fila[0]."</td>";   //td columna  , esta tiene el id q se utilizara para eliminar ya que es la lkave primaria quien nos identifica un registro
					
						echo "<td>".$fila[1]."</td>";

						echo "<td>".$fila[2]."</td>";

						echo "<td>".$fila[3]."</td>";

						echo "<td>".$fila[4]."</td>";

						echo "<td>".$fila[5]."</td>";

						 
						//  enlace
						 echo "<td> <a href='?action=eliminar&id=".$fila[0]."'> Eliminar </a> </td>";

						



				echo "</tr>";	

				
			} 	
			

			

	echo "</table>";




	?>



</body>
</html>