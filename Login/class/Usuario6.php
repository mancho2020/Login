<?php
class Usuario{
private $nombre;
private $correo;
private $usuario;
private $contrasena;
private $auditoria;


public function __construct($nom=null,$corr=null,$cont=null,$user=null,$aud=null)
{
    $this->nombre=$nom;
    $this->correo=$corr;
    $this->usuario=$user;
    $this->contrasena=$cont;
    $this->auditoria=$aud;
}



	public function getUsuario() {
		return $this->usuario;
	}

	public function setUsuario($value) {
		$this->usuario = $value;
	}

	public function getContrasena() {
		return $this->contrasena;
	}

	public function setContrasena($value) {
		$this->contrasena = $value;
	}

	public function getAuditoria() {
		return $this->auditoria;
	}

	public function setAuditoria($value) {
		$this->auditoria = $value;
	}

	public function getNombre() {
		return $this->nombre;
	}

	public function setNombre($value) {
		$this->nombre = $value;
	}

	public function getCorreo() {
		return $this->correo;
	}

	public function setCorreo($value) {
		$this->correo = $value;
	}
}