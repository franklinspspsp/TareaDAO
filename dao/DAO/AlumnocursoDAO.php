<?php 
include 'IAlumnocurso.php';
include 'DataSource.php';
include 'Tablas3.php';

class AlumnocursoDAO implements IAlumnocurso
{
	
     public function Listar()
        {
            $data_source = new DataSource();
            $data_table = $data_source->ejecutarConsulta("SELECT idcursoo,idalumno FROM talumnocurso;");
            $alumnocurso = null;
            $alumnocursos= array();
    
            foreach ($data_table as $clave=>$valor) {
                $alumnocurso = new Curso();
                $alumnocurso->setIdcursoo( $data_table[$clave]["idcursoo"] );
                $alumnocurso->setIdalumno( $data_table[$clave]["idalumno"] );
                		
                array_push($alumnocursos, $alumnocurso);
            }
            return $alumnocursos;
        }
	public function Agregar(Alumnocurso $alumnocurso){
		$data_source = new DataSource();

		$sql = "INSERT INTO talumnocurso VALUES (:idcursoo,:idalumno)";

		$resultado = $data_source->ejecutarActualizacion($sql,array
		(
			':idcursoo'=>$alumnocurso->getIdcursoo(),
			':idalumno'=>$alumnocurso->getIdalumno()	
		)
		);
		return $resultado;		
	}

	public function Actualizar(Alumnocurso $alumnocurso){
		$data_source = new DataSource();
		$sql = "UPDATE talumnocurso SET idcursoo = :idcursoo, idalumno = :idalumno WHERE id = :id";
		$resultado = $data_source->ejecutarActualizacion($sql,array(			
			':idcursoo'=>$alumnocurso->getIdcursoo(),			
			':idalumno'=>$alumnocurso->getIdalumno(),	
			)
		);
		return $resultado;
	}

	public function Eliminar($idcursoo){
		$data_source = new DataSource();
		$resultado = $data_source->ejecutarActualizacion("DELETE FROM talumnocurso WHERE idcursoo = :idcursoo",
			array(':idcursoo'=>$idcursoo));
		return $resultado;
	}
}
?>