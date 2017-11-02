<?php
require_once "database.php";
class Usuarios  {
	  protected $conexion;

    public $codoperacion;
    public $descripcion;
    public $tiempoopr;
    public $puntada;
    public $maquina;
    public $ajuste;

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
  public function GetMaquinas(){
     $sql="SELECT * FROM lu_maquina";
    $result= $this->conexion->ejecutarSql($sql);
				if($result->num_rows > 0){
             	while($rows=$result->fetch_assoc()){
			      $res[]=$rows;
             
			    }		
       return $res;
			}
  }
	public function Getoperaciones($codigo){
     $sql="SELECT * FROM lu_operaciones WHERE oprcod='".$codigo."'";
    $result= $this->conexion->ejecutarSql($sql);
				if($result->num_rows > 0){
             	while($rows=$result->fetch_assoc()){
			      $res[]=$rows;
             
			    }		
       return $res;
			}
  }
}  