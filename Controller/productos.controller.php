<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once 'Model/productos.php';

class ProductosController{
  
   private $model;

    public function __CONSTRUCT(){
        $this->model = new Producto();
    }
   
    public function Index(){
        require_once 'View/template/header.php';
        require_once 'View/template/menuInst.php'; 
        require_once 'View/productos/productos.php';
        require_once 'View/template/footer.php';
    }
    public function Nuevo(){
        $opr = new Producto();

        require_once 'View/template/header.php';
        require_once 'View/template/menuInst.php'; 
        require_once 'View/productos/productos_nuevos.php';
        require_once 'View/template/footer.php';
    }
   public function Guardar(){
     
        $opr = new Producto();

        $data=array(
                    
                    'pro_nombre'=>"'".$_POST['pro_nombre']."'",
                    'pro_precio_unidad'=>"'".$_POST['pro_precio_unidad']."'",
                    'pro_img_tecnico'=>"'".$_POST['pro_img_tecnico']."'",
                    'pro_img_despiece'=>"'".$_POST['pro_img_despiece']."'",
                    'pro_img_proceso_op'=>"'".$_POST['pro_img_proceso_op']."'",
                    'linea_id'=>"'".$_POST['linea']."'",
                    'pro_observacion'=>"'".$_POST['pro_observacion']."'",
                    'pro_fecha_crea'=>"'".$_POST['pro_fecha_crea']."'",
                    'usu_id'=>"'".$_POST['usuario']."'",
                    'pro_estado'=>"'".$_POST['estado']."'",
                    'pro_img_producto'=>"'".$_POST['pro_img_producto']."'",
                    'col_id'=>"'".$_POST['color']."'",
              
                   );
     
        $this->model->RegistrarProducto($data);
     
        header('Location: index.php?c=productos');
    }
}