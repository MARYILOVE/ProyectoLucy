<?php
require_once "database.php";
class Login  {
	  protected $conexion;

    public $usuario;
    public $clave;
    public $rol;
    public $nombre;
 
  public function __CONSTRUCT()
	{
	    $this->conexion = new Conectar();
     
	}
  public function Login($id,$pwd){
     $sql="SELECT lucy_usuario.usu_id,lucy_usuario.per_id,lucy_persona.per_nombre,lucy_persona.per_apellido FROM lucy_usuario 
          INNER JOIN lucy_persona ON lucy_persona.per_id=lucy_usuario.per_id  
     WHERE lucy_usuario.per_id='".$id."' AND lucy_usuario.usu_password='".$pwd."'";
    $result= $this->conexion->ejecutarSql($sql);
				if($result->num_rows > 0){
          while($rows=$result->fetch_assoc()){
			      $_SESSION['nombre_usuario']=$rows->per_nombre." ".$row->per_apellido;
             
			    }		
       return true;
			}else{
          return false;
        }
  }
	
}  