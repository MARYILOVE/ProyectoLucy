<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once 'Model/usuarios1.php';

class Usuarios1Controller{
  
   private $model;

    public function __CONSTRUCT(){
        $this->model = new Usuarios1();
    }
   
    public function Index(){
        require_once 'View/template/header.php';
        require_once 'View/template/menuInst.php'; 
        require_once 'View/usuarios1/usuario1.php';
        require_once 'View/template/footer.php';
    }
    public function Nuevo(){
        $usu = new Usuarios1();

        require_once 'View/template/header.php';
        require_once 'View/template/menuInst.php'; 
        require_once 'Helper/usuarios1/usuarios_helper.php';         
        require_once 'View/usuarios1/usuario1-nuevo.php';
        require_once 'View/template/footer.php';
    }
   public function GuardarDatos(){
        $opr = new Usuarios1();
         require_once 'Helper/usuarios1/usuarios_helper.php';
     
        $dataPersona=array(
          
                    'per_id'=>"'".$_POST['cedula']."'",
                    'per_nombre'=>"'".$_POST['nombre']."'",
                    'per_apellido'=>"'".$_POST['apellidos']."'",
                    'per_telefono'=>"'".$_POST['telefono']."'",
                    'percelular'=>"'".$_POST['celular']."'",
                    'per_direccion'=>"'".$_POST['direccion']."'",
                    'per_correo'=>"'".$_POST['email']."'" ,
                    'per_contrasena'=>"'".$_POST['contrasena']."'" ,
                    'tii_id'=>"'".$_POST['t_documento']."'" ,                  
                    'Tper_id'=>"'".$_POST['tpersona']."'" ,                  
                    'ciu_id'=>"'".$_POST['ciudad']."'" ,                  
                    'per_estado'=>1,    
                    'per_genero'=>"'".$_POST['genero']."'",
                   );
        $this->model->RegistrarPersona($dataPersona);
     
        header('Location: index.php?c=usuarios1');
    }
}
