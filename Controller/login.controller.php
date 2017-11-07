<?php


session_start();

require_once 'Model/login.php';



class LoginController{
  
   private $model;
    
  public function __CONSTRUCT(){

       $this->model = new Login();
  }

    public function Index(){

        require_once 'View/template/header.php';
        require_once 'View/login/iniciarSesion.php';
        require_once 'View/template/footer.php';
    }
  
  public function IniciarSesion(){
      $usuario=$_POST['usuario'];
      $password=$_POST['password'];
      $res= $this->model->Login($usuario,$password);
      if($res){
        header("Location: index.php?c=operacion");
      }else{
        $_SESSION['error']="Usuario y contraseña Incorrecta";
         header("Location: index.php");
      }
  }
  
  public function cerrarSesion() {

        if (isset($_SESSION["nombre_usuario"]))  {
            unset($_SESSION["nombre_usuario"]); 
         }
      session_destroy();  
     header("Location: index.php");

  }

 }



