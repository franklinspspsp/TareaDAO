<?php 
interface IAlumnocurso
{	
    public function Listar();	
	public function Agregar(Alumnocurso $alumnocurso);
	public function Actualizar(Alumnocurso $alumnocurso);
	public function Eliminar($idcursoo);
}
?>