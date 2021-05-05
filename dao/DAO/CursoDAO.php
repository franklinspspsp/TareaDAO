<?php 
include 'ICurso.php';
include 'DataSource.php';
include 'Tablas2.php';

class CursoDAO implements ICurso
{
	
     public function Listar()
        {
            $data_source = new DataSource();
            $data_table = $data_source->ejecutarConsulta("SELECT idcurso,nombrecurso FROM tcurso;");
            $curso = null;
            $cursos= array();
    
            foreach ($data_table as $clave=>$valor) {
                $curso = new Curso();
                $curso->setIdcurso( $data_table[$clave]["idcurso"] );
                $curso->setNombrecurso( $data_table[$clave]["nombrecurso"] );
                		
                array_push($cursos, $curso);
            }
            return $cursos;
        }
	public function Agregar(Curso $curso){
		$data_source = new DataSource();

		$sql = "INSERT INTO tcurso VALUES (:idcurso,:nombrecurso)";

		$resultado = $data_source->ejecutarActualizacion($sql,array
		(
			':idcurso'=>$curso->getIdcurso(),
			':nombrecurso'=>$curso->getNombrecurso()	
		)
		);
		return $resultado;		
	}

	public function Actualizar(Curso $curso){
		$data_source = new DataSource();
		$sql = "UPDATE tcurso SET idcurso = :idcurso, nombrecurso = :nombrecurso WHERE id = :id";
		$resultado = $data_source->ejecutarActualizacion($sql,array(			
			':idcurso'=>$curso->getIdcurso(),			
			':nombrecurso'=>$curso->getNombrecurso(),	
			)
		);
		return $resultado;
	}

	public function Eliminar($idcurso){
		$data_source = new DataSource();
		$resultado = $data_source->ejecutarActualizacion("DELETE FROM tcurso WHERE idcurso = :idcurso",
			array(':idcurso'=>$idcurso));
		return $resultado;
	}
}
?>