<?php
require_once "database.php";
class Operacion  {
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

    $sql = "INSERT INTO lucy_operaciones($columns) VALUES ($values)";
    return $this->conexion->ejecutarSql($sql);
  }
  public function GetMaquinas(){
     $sql="SELECT * FROM lucy_maquina";
    $result= $this->conexion->ejecutarSql($sql);
				if($result->num_rows > 0){
             	while($rows=$result->fetch_assoc()){
			      $res[]=$rows;
             
			    }		
       return $res;
			}
  }
	
	
	public function Getoperaciones($codigo){
     $sql="SELECT * FROM lucy_operaciones WHERE ope_id='".$codigo."'";
		 $result= $this->conexion->ejecutarSql($sql);
				if($result->num_rows > 0){
             	while($rows=$result->fetch_assoc()){
			      $res[]=$rows;
             
			    }		
       return $res;
			}
  }
	public function ModificarOperacion($data,$condi){
		
		$sql = "UPDATE lucy_operaciones SET ope_descripcion='".$data['ope_descripcion']."',
		ope_estado='".$data['ope_estado']."',ope_ppp='".$data['ope_ppp']."',ope_ajuste='".$data['ope_ajuste']."' ,ope_estandar='".$data['ope_estandar']."',maq_id='".$data['maq_id']."',equi_id='".$data['equi_id']."' where ope_id='".$condi."'";
    //echo $sql;
		return $this->conexion->ejecutarSql($sql);
		
	}

public function ListarOperaciones(){
  $sql="SELECT lucy_operaciones .*, lucy_maquina.maq_descripcion from lucy_operaciones INNER JOIN lucy_maquina ON lucy_maquina.maq_id=lucy_operaciones.maq_id";
  //$sql="SELECT * FROM lucy_operaciones";
		 $result= $this->conexion->ejecutarSql($sql);
				if($result->num_rows > 0){
             	while($rows=$result->fetch_assoc()){
			      $res[]=$rows;
             
			    }		
       return $res;
			}
  }
}	