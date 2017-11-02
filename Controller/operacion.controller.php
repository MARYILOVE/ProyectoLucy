<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once 'Model/operacion.php';

class OperacionController{
  
   private $model;

    public function __CONSTRUCT(){
        $this->model = new Operacion();
    }
   
    public function Index(){
        require_once 'View/template/header.php';
        require_once 'View/template/menuInst.php';      
        require_once 'View/operacion/operacion.php';
        require_once 'View/template/footer.php';
    }
    public function Nuevo(){
        $opr = new Operacion();

        require_once 'View/template/header.php';
        require_once 'View/template/menuInst.php'; 
        require_once 'View/operacion/operacion-nuevo.php';
        require_once 'View/template/footer.php';
    }
   public function Guardar(){
        $opr = new Operacion();

        $data=array(
                    'ope_descripcion'=>"'".$_POST['descripcion']."'",
                    'ope_estandar'=>"'".$_POST['tiempoopr']."'",
                    'ope_ppp'=>"'".$_POST['puntada']."'",
                    'maq_id'=>"'".$_POST['maquina']."'",
                    'ope_ajuste'=>"'".$_POST['ajuste']."'" ,                  
                   );
        $this->model->RegistrarOperacion($data);
     
        header('Location: index.php?c=operacion');
    }
  
  public function Modificar(){
        $opr = new Operacion();

        require_once 'View/template/header.php';
        require_once 'View/template/menuInst.php'; 
        require_once 'View/operacion/operacion-modificar.php';
        require_once 'View/template/footer.php';
    }
  public function Guardarmodificado(){
        $opr = new Operacion();
        $condicion=$_POST['codigo'];
        $data=array(
                    'ope_descripcion'=>$_POST['descripcion'],
                    'ope_estado'=>$_POST['tiempoopr'],
                    'ope_ppp'=>$_POST['puntada'],
                    'ope_ajuste'=>$_POST['maquina'],
                    'ope_estandar'=>$_POST['ajuste'] ,
                    'maq_id'=>$_POST['maquina'],
                    'equi_id'=>$_POST['equipo'],              
                   );
        $this->model->ModificarOperacion($data,$condicion);
     
       header('Location: index.php?c=operacion');
    }
}