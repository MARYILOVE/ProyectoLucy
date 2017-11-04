<?php
require_once "database.php";
class Usuarios  {
	  protected $conexion;

    public $documento;
    public $nombre;
    public $apellido;
    public $papellido;
    public $sapellido;
    public $email;
    public $formacion;
    public $contrasena;

	public function __CONSTRUCT()
	{
	    $this->conexion = new Conectar();
     
	}
  public function RegistrarOperacion($data){
    $columns = implode(", ", array_keys($data));
    $values  = implode(", ", array_values($data));

    $sql = "INSERT INTO lu_operaciones($columns) VALUES ($values)";
    return $this->conexion->ejecutarSql($sql);
  }
  public function GetFicha(){
     $sql="SELECT lucy_ficha.*,lucy_programa.prog_nombre FROM lucy_ficha INNER JOIN lucy_programa ON lucy_programa.prog_id=lucy_ficha.prog_id";
    $result= $this->conexion->ejecutarSql($sql);
				if($result->num_rows > 0){
             	while($rows=$result->fetch_assoc()){
			      $res[]=$rows;
             
			    }		
       return $res;
			}
  }
	public function GetTiPersona(){
     $sql="SELECT * FROM lucy_tipo_persona ";
    $result= $this->conexion->ejecutarSql($sql);
				if($result->num_rows > 0){
             	while($rows=$result->fetch_assoc()){
			      $res[]=$rows;
             
			    }		
       return $res;
			}
  }	
	public function GetTiIden(){
     $sql="SELECT * FROM lucy_tipo_identificacion ";
    $result= $this->conexion->ejecutarSql($sql);
				if($result->num_rows > 0){
             	while($rows=$result->fetch_assoc()){
			      $res[]=$rows;
             
			    }		
       return $res;
			}
  }
	public function GetCiudad(){
     $sql="SELECT * FROM lucy_ciudad ";
    $result= $this->conexion->ejecutarSql($sql);
				if($result->num_rows > 0){
             	while($rows=$result->fetch_assoc()){
			      $res[]=$rows;
             
			    }		
       return $res;
			}
  }
}  
