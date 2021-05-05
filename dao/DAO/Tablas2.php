<?php

class Curso
{
	public $idcurso;
	public $nombrecurso;

	public function setIdcurso($idcurso)
	{
		$this->idcurso = $idcurso;
	}

	public function getIdcurso()
	{
		return $this->idcurso;
	}

	public function setNombrecurso($nombrecurso)
	{
		$this->nombrecurso = $nombrecurso;
	}

	public function getNombrecurso()
	{
		return $this->nombrecurso;
	}
}

?>