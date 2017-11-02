<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once 'Model/usuarios.php';

class UsuariosController{
  
   private $model;

    public function __CONSTRUCT(){
        $this->model = new Usuarios();
    }
   
    public function Index(){
        require_once 'View/template/header.php';
        require_once 'View/template/menuInst.php'; 
        require_once 'View/usuarios/usuario.php';
        require_once 'View/template/footer.php';
    }
    public function Nuevo(){
        $opr = new Usuarios();

        require_once 'View/template/header.php';
        require_once 'View/template/menuInst.php'; 
        require_once 'View/usuarios/usuario-nuevo.php';
        require_once 'View/template/footer.php';
    }
   public function EnviarSolicitud(){
        $opr = new Usuarios();

        $data=array(
                    'oprref'=>"'".$_POST['codoperacion']."'",
                    'oprdesc'=>"'".$_POST['descripcion']."'",
                    'oprtiem'=>"'".$_POST['tiempoopr']."'",
                    'oprppp'=>"'".$_POST['puntada']."'",
                    'oprmaq'=>"'".$_POST['maquina']."'",
                    'oprajuste'=>"'".$_POST['ajuste']."'" ,                  
                   );
        $this->model->RegistrarOperacion($data);
     
        header('Location: index.php?c=operacion');
    }
}