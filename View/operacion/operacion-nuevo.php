<div class="container">
  <h1 class="page-header titulo">Nueva Operacion </h1>
  <ol class="breadcrumb">
  <li><a href="?c=operacion">Operaciones</a></li>
  <li class="active">Nuevo Registro</li>
</ol>
<form id="frm-operacion" action="?c=operacion&a=Guardar" method="post" enctype="multipart/form-data">

    <div class="form-group">      
     
     <div class="col-xs-6" style="clear:left;">
        <label>Descripcion</label>
        <input type="text" name="descripcion" value="<?php echo $opr->descripcion; ?>" class="form-control" placeholder="Ingrese Descripcion" data-validacion-tipo="requerido|min:20" />

    </div>  
      <div class="col-xs-6">
        <label>Tiempo Estimado</label>
       <input type="text" name="tiempoopr" value="<?php echo $opr->tiempoopr; ?>" class="form-control" placeholder="1 Hora" data-validacion-tipo="requerido|min:100" />

    </div> 
      <div class="col-xs-6">
        <label>Puntada por pulgada (PPP)</label>
       <input type="text" name="puntada" value="<?php echo $opr->puntada; ?>" class="form-control" placeholder="puntada por pulgada" data-validacion-tipo="requerido|min:100" />

    </div>
      <div class="col-xs-6">
        <label>Tipo Maquina</label>
        <select name="maquina" class="form-control">
          <option <?php echo $opr->maquina; ?> selected>Seleccione Maquina</option>
          <?php
           foreach($this->model->GetMaquinas() as $row){
              echo "<option value='".$row['maq_id']."'>".$row['maq_descripcion']."</option>";
            }
          ?>
      </select>

    </div>    
      <div  class="col-xs-12">
        <label>Ajustes</label>
      <textarea  name="ajuste" value="<?php echo $opr->ajuste; ?>" class="form-control"></textarea>
      </div>

    <div class="text-right" style="clear:left; padding-top:25px;">
        <button class="btn btn-success">Guardar</button>
    </div>
    </div>
   
</form>
</div> 