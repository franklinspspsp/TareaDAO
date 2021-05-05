<?php 
include 'IAlumno.php';
include 'DataSource.php';
include 'Tablas.php';

class AlumnoDAO implements IAlumno
{
	public function Listar(){
		$data_source = new DataSource();
		$data_table = $data_source->ejecutarConsulta("SELECT id,nombres,apellidos,sexo,fechaNacimiento,fechaRegistro,correo FROM talumno;");
		$alumno = null;
		$alumnos = array();

		foreach ($data_table as $clave=>$valor) {
			$alumno = new Alumno();
			$alumno->setId( $data_table[$clave]["id"] );
			$alumno->setNombres( $data_table[$clave]["nombres"] );
			$alumno->setApellidos( $data_table[$clave]["apellidos"] );
			$alumno->setSexo( $data_table[$clave]["sexo"] );
			$alumno->setFechanacimiento( $data_table[$clave]["fechaNacimiento"] );
			$alumno->setFechaRegistro( $data_table[$clave]["fechaRegistro"] );	
			$alumno->setCorreo( $data_table[$clave]["correo"] );		
			array_push($alumnos, $alumno);
		}
		return $alumnos;
	}
	
	public function Agregar(Alumno $alumno){
		$data_source = new DataSource();

		$sql = "INSERT INTO talumno VALUES (:id,:nombres,:apellidos,:sexo,:fechaNacimiento,:fechaRegistro,:correo)";

		$resultado = $data_source->ejecutarActualizacion($sql,array
		(
			':id'=>$alumno->getId(),			
			':nombres'=>$alumno->getNombres(),
			':apellidos'=>$alumno->getApellidos(),
			':sexo'=>$alumno->getSexo(),
			':fechaNacimiento'=>$alumno->getFechaNacimiento(),
			':fechaRegistro'=>$alumno->getFechaRegistro(),
			':correo'=>$alumno->getCorreo()			
		)
		);
		return $resultado;		
	}

	public function Actualizar(Alumno $alumno){
		$data_source = new DataSource();
		$sql = "UPDATE talumno SET nombres = :nombres, apellidos = :apellidos, sexo = :sexo, fechaNacimiento = :fechaNacimiento, fechaRegistro = :fechaRegistro, correo = :correo				
				WHERE id = :id";
		$resultado = $data_source->ejecutarActualizacion($sql,array(			
			':nombres'=>$alumno->getNombres(),
			':apellidos'=> $alumno->getApellidos(),
			':sexo'=>$alumno->getSexo(),	
			':fechaNacimiento'=>$alumno->getFechaNacimiento(),
			':fechaRegistro'=>$alumno->getFechaRegistro(),
			':correo'=>$alumno->getCorreo()
			)
		);
		return $resultado;
	}

	public function Eliminar($id){
		$data_source = new DataSource();
		$resultado = $data_source->ejecutarActualizacion("DELETE FROM talumno WHERE id = :id",
			array(':id'=>$id));
		return $resultado;
	}
}
?>