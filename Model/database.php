<?php
require_once "config.php";
class Conectar
{
    protected $conexion; 

    public function __CONSTRUCT() 
    { 
        $this->conexion = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME); 

        if ( $this->conexion->connect_errno ) 
        { 
            echo "Fallo al conectar a MySQL: ". $this->conexion->connect_error; 
            return;     
        } 
      
     } 
  public function cerrarConexion(){	
		$this->conexion->close();
		 }

     public function ejecutarSql($sql){
		$respuesta = $this->conexion->query($sql);
		if(!$respuesta)
		{			
			$solicitud = mysqli_errno($this->conexion);
		}		
		return $respuesta;
		$this->cerrarConexion();	 
	}
   
}
