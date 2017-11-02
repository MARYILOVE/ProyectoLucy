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
        require_once 'View/productos/productos.php';
        require_once 'View/template/footer.php';
    }
    public function Nuevo(){
       $mat = new Materiales();

        require_once 'View/template/header.php';
        require_once 'View/template/menuInst.php'; 
        require_once 'View/productos/productos_nuevos.php';
        require_once 'View/template/footer.php';
    }
   public function Guardar(){
     
        $mat = new Materiales();

        $data=array(
                    
                    'matp_id'=>"'".$_POST['matp_id']."'",
          
                    'matp_descripcion'=>"'".$_POST['matp_descripcion']."'",
          
                    'um_id'=>"'".$_POST['um_id']."'",
          
                    'em_consumo'=>"'".$_POST['em_consumo']."'",
          
                    'em_factor_desperdicio'=>"'".$_POST['em_factor_desperdicio']."'",
          
                    'em_consumo_real'=>"'".$_POST['em_consumo_real']."'",
          
                    'em_costo'=>"'".$_POST['em_costo']."'",
          
                    'em_costo_total	'=>"'".$_POST['em_costo_total']."'",
                    'col_id'=>"'".$_POST['col_id']."'",
                    
                    
          
          
                   );
     
        $this->model->RegistrarMateriales($data);
     
        header('Location: index.php?c=productos');
    }
}