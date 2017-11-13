<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once 'Model/materiales.php';

class MaterialesController{
  
   private $model;

    public function __CONSTRUCT(){
        $this->model = new Materiales();
    }
   
    public function Index(){
        require_once 'View/template/header.php';
        require_once 'View/template/menuInst.php'; 
        require_once 'View/materiales/materiales.php';
        require_once 'View/template/footer.php';
    }
    public function Nuevo(){
       $mat = new Materiales();

        require_once 'View/template/header.php';
        require_once 'View/template/menuInst.php'; 
        require_once 'View/materiales/materiales-nuevo.php';
        require_once 'View/template/footer.php';
    }
   public function Guardar(){
     
        $mat = new Materiales();

        $data=array(
                    
                    'matp_id'=>"'".$_POST['codigoMaterial']."'",
                    'matp_descripcion'=>"'".$_POST['descripcion']."'",
                    'matp_img'=>"'".$_POST['imagen']."'",
                    'matp_estado'=>"'".$_POST['estado']."'",
                    'um_id'=>"'".$_POST['unidad']."'",
                    'col_id'=>"'".$_POST['color']."'"              
                   );
     
         $this->model->RegistrarMateriales($data);
        // header('Location: index.php?c=materiales');
    }
  public function consultarCodigo(){
     $data= $this->model->consultarCodigo($_POST['codigo']);
    echo "respuesta=".count($data);
    if(count($data)!=0){
      echo "El codigo esta repertido";
    }else{
      echo 1;
    }
    
  }
}