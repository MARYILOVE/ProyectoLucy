<?php
require_once "database.php";

class Materiales {
	  
          protected $conexion;
  
          public $codigoMaterial;
          public $descripcion;
          public $imagen;
          public $estado;
          public $unidad;
          public $color;


	public function __CONSTRUCT()
	{
	    $this->conexion = new Conectar();
     
	}
	
  public function RegistrarMateriales($data){
		
    $columns = implode(", ", array_keys($data));
    $values  = implode(", ", array_values($data));

    $sql = "INSERT INTO  lucy_materia_prima($columns) VALUES ($values)";
		echo $sql;
    return $this->conexion->ejecutarSql($sql);
  }
  
    public function GetMedida(){
       $sql="SELECT * FROM lucy_unidad_medida";
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
	
		public function consultarCodigo($codigo){
    $sql="SELECT matp_id  FROM lucy_materia_prima WHERE matp_id='".$codigo."'";
    $result= $this->conexion->ejecutarSql($sql);
		 if($result->num_rows > 0){
       while($rows=$result->fetch_assoc()){
			       return $rows['matp_id'];  
			 }
			 
       
		}
  }
}