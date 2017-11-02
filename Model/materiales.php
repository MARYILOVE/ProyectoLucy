<?php
require_once "database.php";

class Emateriales {
	  
          protected $conexion;
  
          public $em_id;
          public $em_consumo;
          public $em_factor_desperdicio;
          public $em_consumo_real
          public $em_costo;
          public $em_costo_total;
          public $matp_id;
          public $pro_id;
          public $em_estado;
          


	public function __CONSTRUCT()
	{
	    $this->conexion = new Conectar();
     
	}
  public function RegistrarMateriales($data){
    $columns = implode(", ", array_keys($data));
    $values  = implode(", ", array_values($data));

    $sql = "INSERT INTO  lucy_explosion_materiales($columns) VALUES ($values)";
		echo $sql;
    return $this->conexion->ejecutarSql($sql);
  }
  
    public function Getmedida(){
       $sql="SELECT * FROM lucy_materia_prima";
       $result= $this->conexion->ejecutarSql($sql);
         if($result->num_rows > 0){
              while($rows=$result->fetch_assoc()){
                  $res[]=$rows;   
               }		
            return $res;
          }
     }

   public function GetUsuario(){
     $sql="SELECT * FROM lucy_usuario";
     $result= $this->conexion->ejecutarSql($sql);
			  if($result->num_rows > 0){
           while($rows=$result->fetch_assoc()){
			        $res[]=$rows;   
			      }		
       return $res;
			 }
    }
  
  public function GetColor(){
    $sql="SELECT * FROM lucy_color";
    $result= $this->conexion->ejecutarSql($sql);
		 if($result->num_rows > 0){
       while($rows=$result->fetch_assoc()){
			       $res[]=$rows;   
			 }		
       return $res;
		}
  }
	
	public function GetEstado(){
    $sql="SELECT * FROM lucy_estado";
    $result= $this->conexion->ejecutarSql($sql);
		 if($result->num_rows > 0){
       while($rows=$result->fetch_assoc()){
			       $res[]=$rows;   
			 }		
       return $res;
		}
  }
}