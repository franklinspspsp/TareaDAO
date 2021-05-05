<!DOCTYPE html>
<html>
<head>
	<title>Tabla de Alumno</title>
</head>
<body>
	<?php
	include ('DAO/AlumnoDAO.php');
	$dao = new AlumnoDAO();
	if($_POST){
		if(isset($_POST['btnAgregar'])) {
			$alumno = new Alumno();
			$alumno->setId($_POST["txtid"]);
			$alumno->setNombres($_POST["txtnombres"]);
			$alumno->setApellidos($_POST["txtapellidos"]);
			$alumno->setSexo($_POST["txtsexo"]);
			$alumno->setFechaNacimiento($_POST["txtfechaNacimiento"]);
			$alumno->setFechaRegistro($_POST["txtfechaRegistro"]);
			$alumno->setCorreo($_POST["txtcorreo"]);
			$i =  $dao->Agregar($alumno);
			if ($i == 1) {
				echo "<script>alert('Se agrego alumno');</script>";
			}
			else {
				echo "<script>alert('Error: no se agrego alumno');</script>";	
			}
		}
		else if (isset($_POST['btnEliminar'])) {			
			$i = $dao->Eliminar($_POST["txtid"]);
			if ($i == 1) {
				echo "<script>alert('Se elimino alumno');</script>";
			}
			else {
				echo "<script>alert('Error: no se elimino alumno');</script>";	
			}
		}
		else if (isset($_POST['btnActualizar'])) {
			$alumno = new Alumno();
			$alumno->setId($_POST["txtid"]);
			$alumno->setNombres($_POST["txtnombres"]);
			$alumno->setApellidos($_POST["txtapellidos"]);
			$alumno->setSexo($_POST["txtsexo"]);
			$alumno->setFechaNacimiento($_POST["txtfechaNacimiento"]);
			$alumno->setFechaRegistro($_POST["txtfechaRegistro"]);
			$alumno->setCorreo($_POST["txtcorreo"]);

			$i =  $dao->Actualizar($alumno);
			if ($i == 1) {
				echo "<script>alert('Se actualizo alumno');</script>";
			}
			else {
				echo "<script>alert('Error: no se actualizo alumno');</script>";	
			}
		}
	}
	?>
	<form action="#" method="POST">
		<p>Tabla de Alumno</p>	
		<p>Id:  <input type="text" name="txtid"></p>
		<p>Nombres:  <input type="text" name="txtnombres"></p>
		<p>Apellidos:  <input type="text" name="txtapellidos"></p>
		<p>Sexo:  <input type="text" name="txtsexo"></p>
		<p>FechadeNacimiento:	<input type="text" name="txtfechaNacimiento"></p>
		<p>FechadeRegistro:	<input type="text" name="txtfechaRegistro"></p>
		<p>Correo:	<input type="text" name="txtcorreo"></p>
		<p><input type="submit" name="btnAgregar" value="Agregar" >
		<input type="submit" name="btnEliminar" value="Eliminar" >
		<input type="submit" name="btnActualizar" value="Actualizar" ></p>
	</form>	
	<?php
		echo "Listar <br>";
		print_r($dao->Listar());
		$conexion = mysqli_connect('localhost','root','','bdcolegio');
				$consulta = "select * from talumno";
				$resultado = mysqli_query($conexion,$consulta);

                echo "<table border = '1'>";
                while($fila = mysqli_fetch_array($resultado))
                {
                    echo '<tr>';
                    echo '<td>';
                    echo $fila['id'];
                    echo '</td>';
                    echo '<td>';
                    echo $fila['nombres'];
                    echo '</td>';
                    echo '<td>';
                    echo $fila['apellidos'];
                    echo '</td>';
                    echo '<td>';
                    echo $fila['sexo'];//full sexo
                    echo '</td>';
                    echo '<td>';
                    echo $fila['fechaNacimiento'];
            echo '</td>';
			echo '<td>';
			echo $fila['fechaRegistro'];
			echo '</td>';
			echo '<td>';
			echo $fila['correo'];
			echo '</td>';
            echo '</tr>';
        }
        echo '</table>';
        mysqli_free_result($resultado);
        mysqli_close($conexion);
	?>
</body>
</html>

