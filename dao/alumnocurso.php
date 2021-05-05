<!DOCTYPE html>
<html>
<head>
	<title>Tabla de Alumno Curso</title>
</head>
<body>
	<?php
	include ('DAO/AlumnocursoDAO.php');
	$dao = new AlumnocursoDAO();
	if($_POST){
		if(isset($_POST['btnAgregar'])) {
			$alumnocurso = new Alumnocurso();
			$alumnocurso->setIdcursoo($_POST["txtidcursoo"]);
			$alumnocurso->setIdalumno($_POST["txtidalumno"]);
			
			$i =  $dao->Agregar($alumnocurso);
			if ($i == 1) {
				echo "<script>alert('Se agrego alumnocurso');</script>";
			}
			else {
				echo "<script>alert('Error: no se agrego alumnocurso');</script>";	
			}
		}
		else if (isset($_POST['btnEliminar'])) {			
			$i = $dao->Eliminar($_POST["txtidcursoo"]);
			if ($i == 1) {
				echo "<script>alert('Se elimino alumnocurso');</script>";
			}
			else {
				echo "<script>alert('Error: no se elimino alumnocurso');</script>";	
			}
		}
		else if (isset($_POST['btnActualizar'])) {
			$alumnocurso = new Alumnocurso();
			$alumnocurso->setIdcursoo($_POST["txtidcursoo"]);
			$alumnocurso->setIdalumno($_POST["txtidalumno"]);
			

			$i =  $dao->Actualizar($alumnocurso);
			if ($i == 1) {
				echo "<script>alert('Se actualizo curso');</script>";
			}
			else {
				echo "<script>alert('Error: no se actualizo curso');</script>";	
			}
		}
	}
	?>
	<form action="#" method="POST">
		<p>Tabla de Alumno-curso</p>	
		<p>Id Curso:  <input type="text" name="txtidcursoo"></p>
		<p>Id Alumno:  <input type="text" name="txtidalumno"></p>
		<p><input type="submit" name="btnAgregar" value="Agregar" >
		<input type="submit" name="btnEliminar" value="Eliminar" >
		<input type="submit" name="btnActualizar" value="Actualizar" ></p>
	</form>	
	<?php
    echo "Listar <br>";
    print_r($dao->Listar());
		$conexion = mysqli_connect('localhost','root','','bdcolegio');
				$consulta = "select * from tcurso";
				$resultado = mysqli_query($conexion,$consulta);

                echo "<table border = '1'>";
                while($fila = mysqli_fetch_array($resultado))
                {
                    echo '<tr>';
                    echo '<td>';
                    echo $fila['idcursoo'];
                    echo '</td>';
                    echo '<td>';
                    echo $fila['idalumno'];
                    echo '</td>';
                    
            echo '</tr>';
        }
        echo '</table>';
        mysqli_free_result($resultado);
        mysqli_close($conexion);
	?>
</body>
</html>
