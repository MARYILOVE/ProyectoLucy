<div class="container">
  <h1 class="page-header titulo">modificar Operacion</h1>
  <ol class="breadcrumb">
  <li><a href="?c=operacion">Operaciones</a></li>
  <li class="active">Modificar Operaciones aprendiz</li>
</ol>
<form id="frm-operacion" action="?c=operacion&a=Guardarmodificado" method="post" enctype="multipart/form-data">
<?php
  $cons=$this->model->Getoperaciones(4);
  //if(count($cons)!=0){
  foreach($cons as $r){
    
 ?>
    <div class="form-group">      
     
   <input type="hidden" name="codigo" value="<?php echo $r['ope_id']; ?>">
   <div class="col-xs-6" style="clear:left;">
        <label>Descripcion</label>
        <input type="text" name="descripcion" value="<?php echo $r['ope_descripcion']; ?>" class="form-control" placeholder="Ingrese Descripcion" data-validacion-tipo="requerido|min:20" />

    </div>  
      <div class="col-xs-6">
        <label>Tiempo Estimado</label>
       <input type="text" name="tiempoopr" value="<?php echo $r['ope_estado']; ?>" class="form-control" placeholder="1 Hora" data-validacion-tipo="requerido|min:100" />

    </div> 
      <div class="col-xs-6">
        <label>puntada por pulgada</label>
       <input type="text" name="puntada" value="<?php echo $r['ope_ppp']; ?>" class="form-control" placeholder="puntada por pulgada" data-validacion-tipo="requerido|min:100" />
   </div>
      
   <div class="col-xs-6">
        <label>operacion pulgada</label>
       <input type="text" name="puntada" value="<?php echo $r['ope_estandar']; ?>" class="form-control" placeholder="puntada por pulgada" data-validacion-tipo="requerido|min:100" />
   </div> 
       
    <div class="col-xs-6">
        <label>equipo  id</label>
       <input type="text" name="equipo" value="<?php echo $r['equi_id']; ?>" class="form-control" placeholder="puntada por pulgada" data-validacion-tipo="requerido|min:100" />
   </div>    
         
    <div class="col-xs-6">
        <label>Tipo Maquina</label>
        <select name="maquina" class="form-control">
          <option <?php echo $opr->maquina; ?> selected>Seleccione Maquina</option>
          <?php
           foreach($this->model->GetMaquinas() as $row){
             $select=($row['maq_id']==$r['maq_id'])?"selected":"";
              echo "<option value='".$row['maq_id']."'".$select.">".$row['maq_descripcion']."</option>";
             
            }
          ?>
      </select>

    </div>    
      <div  class="col-xs-12">
        <label>Ajustes</label>
      <textarea  name="ajuste" value="<?php echo $opr->ajuste; ?>" class="form-control"><?php echo $r['ope_ajuste']; ?></textarea>
      </div>

    <div class="text-right" style="clear:left; padding-top:25px;">
        <button class="btn btn-success">Guardar</button>
    </div>
    </div>
   <?php
  }
  /*}else{
    echo ¨no hay respuesta¨;
  }*/
  ?>
 
</form>
</div> 