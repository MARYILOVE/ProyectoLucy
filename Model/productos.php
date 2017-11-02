<?php
require_once "database.php";

class Producto  {
	  
          protected $conexion;
  
          public $pro_nombre;
          public $pro_precio_unidad;
          public $pro_img_tecnico;
          public $pro_img_despiece;
          public $pro_img_proceso_op;
          public $linea_id;
          public $pro_observacion;
          public $pro_fecha_crea;
          public $usu_id;
          public $pro_estado;
          public $pro_img_producto;
          public $col_id;
					public $pro_img_proceso_ope;
					public $pro_id;
					public $linea;
					public $usuario;
					public $color;
	        public $estado;


	public function __CONSTRUCT()
	{
	    $this->conexion = new Conectar();
     
	}
  public function RegistrarProducto($data){
    $columns = implode(", ", array_keys($data));
    $values  = implode(", ", array_values($data));

    $sql = "INSERT INTO lucy_producto($columns) VALUES ($values)";
		echo $sql;
    return $this->conexion->ejecutarSql($sql);
  }
  
    public function GetLinea(){
       $sql="SELECT * FROM lucy_linea";
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