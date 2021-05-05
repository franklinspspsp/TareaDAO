<?php 
interface IAlumno
{
	public function Listar();	
	public function Agregar(Alumno $alumno);
	public function Actualizar(Alumno $alumno);
	public function Eliminar($id);
}
?>