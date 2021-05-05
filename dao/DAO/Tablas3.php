<?php
class Alumnocurso
{
	private $idcursoo;
	private $idalumno;

	public function setIdcursoo($idcursoo)
	{
		$this->idcursoo = $idcursoo;
	}

	public function getIdcursoo()
	{
		return $this->idcursoo;
	}

	public function setIdalumno($idalumno)
	{
		$this->idalumno = $idalumno;
	}

	public function getIdalumno()
	{
		return $this->idalumno;
	}
}

?>