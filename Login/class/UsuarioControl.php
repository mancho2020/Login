<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/Login/core/Connection.php';
require_once 'Usuario6.php';

class UsuarioControl extends Connection{
    public function __construct()
    {
        parent::__construct();
    }
    public function list_user(){
        $sql=$this->dbConnection->prepare("SELECT * FROM Seiz6");
        $sql->execute();
        while ($row =$sql->fetch(PDO::FETCH_OBJ));{
            echo "Nombre: $row->nombre <br>";
            echo "Documento: $row->correo. <br>";
            echo "Dirección: $row->usuario. <br>";
            echo "Telefono: $row->contrasena. <br>";
            echo "Fecha Nacimiento: $row->auditoria. <br>";

        }
        
    }
    public function list_user2(){
        try {
            $sql= $this->dbConnection->query("SELECT * FROM Seiz6.usuario6");
            $arrayUser=array();
            while ($row =$sql->fetch(PDO::FETCH_OBJ)){
                $user_obj= new Usuario($row->nombre,$row->correo,$row->usuario,$row->contrasena,$row->auditorio);
                $arrayUser[]= $user_obj;
            }
            return $arrayUser;
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            die; 
        };
    }
    public function insert_user(Usuario $obj_User){
        try {
            $sql=$this->dbConnection->prepare("INSERT INTO usuario6
            (nombre, correo, usuario, contrasena, auditoria)
            VALUES(?, ?, ?, ?, ?);
            ");
            $nombre=$obj_User->getNombre();
            $correo=$obj_User->getCorreo();
            $usuario=$obj_User->getUsuario();
            $contrasena=$obj_User->getContrasena();
            $auditoria=$obj_User->getAuditoria();
    
            $sql->bindParam(1, $nombre);
            $sql->bindParam(2, $correo);
            $sql->bindParam(3, $usuario);
            $sql->bindParam(4, $contrasena);
            $sql->bindParam(5, $auditoria);
            $sql->execute();
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            die; 
        }

    
    }
}