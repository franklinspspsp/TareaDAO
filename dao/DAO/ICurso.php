<?php 
interface ICurso
{	
    public function Listar();	
	public function Agregar(Curso $curso);
	public function Actualizar(Curso $curso);
	public function Eliminar($idcurso);
}
?>