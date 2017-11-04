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
        $usu = new Usuarios();

        require_once 'View/template/header.php';
        require_once 'View/template/menuInst.php'; 
        require_once 'Helper/usuarios/usuarios_helper.php';         
        require_once 'View/usuarios/usuario-nuevo.php';
        require_once 'View/template/footer.php';
    }
   public function EnviarSolicitud(){
        $opr = new Usuarios();
         require_once 'Helper/usuarios/usuarios_helper.php';  
        $dataPersona=array(
                    'per_id'=>"'".$_POST['codoperacion']."'",
                    'per_nombre'=>"'".$_POST['descripcion']."'",
                    'per_apellido'=>"'".$_POST['tiempoopr']."'",
                    'per_telefono'=>"'".$_POST['puntada']."'",
                    'per_direccion'=>"'".$_POST['maquina']."'",
                    'per_correo'=>"'".$_POST['ajuste']."'" ,                  
                    'tii_id'=>"'".$_POST['ajuste']."'" ,                  
                    'Tper_id'=>"'".$_POST['ajuste']."'" ,                  
                    'ciu_id'=>"'".$_POST['ajuste']."'" ,                  
                    'per_estado'=>1,                  
                   );
        $this->model->RegistrarPersona($data);
     
        header('Location: index.php?c=operacion');
    }
}