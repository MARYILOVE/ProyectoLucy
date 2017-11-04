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
   public function GuardarDatos(){
        $opr = new Usuarios();
         require_once 'Helper/usuarios/usuarios_helper.php';  
        $dataPersona=array(
                    'per_id'=>"'".$_POST['cedula']."'",
                    'per_nombre'=>"'".$_POST['nombre']."'",
                    'per_apellido'=>"'".$_POST['apellidos']."'",
                    'per_telefono'=>"'".$_POST['telefono']."'",
                    'per_direccion'=>"'".$_POST['direccion']."'",
                    'per_correo'=>"'".$_POST['email']."'" ,                  
                    'tii_id'=>"'".$_POST['tdocumento']."'" ,                  
                    'Tper_id'=>"'".$_POST['tpersona']."'" ,                  
                    'ciu_id'=>"'".$_POST['ciudad']."'" ,                  
                    'per_estado'=>1,                  
                   );
        $this->model->RegistrarPersona($dataPersona);
     
        header('Location: index.php?c=usuarios');
    }
}

//ficha





