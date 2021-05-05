<!DOCTYPE html>
<html>
<head>
	<title>Tabla de Curso</title>
</head>
<body>
	<?php
	include ('DAO/CursoDAO.php');
	$dao = new CursoDAO();
	if($_POST){
		if(isset($_POST['btnAgregar'])) {
			$curso = new Curso();
			$curso->setIdcurso($_POST["txtidcurso"]);
			$curso->setNombrecurso($_POST["txtnombrecurso"]);
			
			$i =  $dao->Agregar($curso);
			if ($i == 1) {
				echo "<script>alert('Se agrego curso');</script>";
			}
			else {
				echo "<script>alert('Error: no se agrego curso');</script>";	
			}
		}
		else if (isset($_POST['btnEliminar'])) {			
			$i = $dao->Eliminar($_POST["txtidcurso"]);
			if ($i == 1) {
				echo "<script>alert('Se elimino curso');</script>";
			}
			else {
				echo "<script>alert('Error: no se elimino curso');</script>";	
			}
		}
		else if (isset($_POST['btnActualizar'])) {
			$curso = new Curso();
			$curso->setIdcurso($_POST["txtidcurso"]);
			$curso->setNombrecurso($_POST["txtnombrecurso"]);
			

			$i =  $dao->Actualizar($curso);
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
		<p>Tabla de Curso</p>	
		<p>Id Curso:  <input type="text" name="txtidcurso"></p>
		<p>Nombre Curso:  <input type="text" name="txtnombrecurso"></p>
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
                    echo $fila['idcurso'];
                    echo '</td>';
                    echo '<td>';
                    echo $fila['nombrecurso'];
                    echo '</td>';
                    
            echo '</tr>';
        }
        echo '</table>';
        mysqli_free_result($resultado);
        mysqli_close($conexion);
	?>
</body>
</html>
