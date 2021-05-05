<?php 
class Alumno
{
	public $id;
	public $nombres;
	public $apellidos;
	public $sexo;
	public $fechaNacimiento;
	public $fechaRegistro;
	public $correo;
	
	
	public function setId($id)
	{
		$this->id = $id;
	}

	public function getId()
	{
		return $this->id;
	}

	public function setNombres($nombres)
	{
		$this->nombres = $nombres;
	}

	public function getNombres()
	{
		return $this->nombres;
	}	
	
	public function setApellidos($apellidos)
	{
		$this->apellidos = $apellidos;
	}

	public function getApellidos()
	{
		return $this->apellidos;
	}

	public function setSexo($sexo)
	{
		$this->sexo = $sexo;
	}

	public function getSexo(){
		return $this->sexo;
	}

	public function setFechaNacimiento($fechaNacimiento)
	{
		$this->fechaNacimiento = $fechaNacimiento; 
	}

	public function getFechaNacimiento()
	{
		return $this->fechaNacimiento;
	}

	public function setFechaRegistro($fechaRegistro)
	{
		$this->fechaRegistro = $fechaRegistro; 
	}
	public function getFechaRegistro()
	{
		return $this->fechaRegistro;
	}

	public function setCorreo($correo)
	{
		$this->correo = $correo; 
	}
	
	public function getCorreo()
	{
		return $this->correo;
	}
	
}

?>