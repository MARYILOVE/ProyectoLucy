<div class="container">
  <h1 class="page-header titulo">Nuevo material </h1>
  <ol class="breadcrumb">
  <li><a href="?c=materiales">materiales</a></li>
  <li class="active">Nuevo Registro</li>
</ol>
  <div id="respuesta">
  </div>
<form id="frm-operacion" onsubmit="return validacion()" action="?c=materiales&a=Guardar" method="post" enctype="multipart/form-data" >

    <div class="form-group">      
     
      <div class="col-xs-6">
        <label>Codigo material</label>
        <input type="text" name="codigoMaterial" id="codigoMaterial" value="<?php echo $mat->codigoMaterial; ?>" class="form-control" placeholder="Ingrese codigo del material" data-validacion-tipo="requerido|min:20" />

    </div>
      
     <div class="col-xs-6">
        <label>Descripcion</label>
        <input type="text" name="descripcion" value="<?php echo $mat->descripcion; ?>" class="form-control" placeholder="Ingrese Descripcion" data-validacion-tipo="requerido|min:20" />

    </div>  
      <div class="col-xs-6">
        <label>URL imagen</label>
       <input type="text" name="imagen" value="<?php echo $mat->imagen; ?>" class="form-control" placeholder="Ingrese url de la imagen" data-validacion-tipo="requerido|min:100" />

      </div>
      <div class="col-xs-6">
        <label>Estado</label>
        <select name="estado" class="form-control">
          <option value= "<?php echo $mat->estado; ?>" selected>Seleccione estado</option>
          <?php
           foreach($this->model->GetEstado() as $row){
              echo "<option value='".$row['est_id']."'>".$row['est_descripcion']."</option>";
            }
          ?>
      </select>

    </div>    
        
        <div class="col-xs-6">
        <label>Unidad de medida</label>
        <select name="unidad" class="form-control">
          <option value= "<?php echo $mat->unidad; ?>" selected>Seleccione unidad de medida</option>
          <?php
           foreach($this->model->GetMedida() as $row){
              echo "<option value='".$row['um_id']."'>".$row['um_descripcion']."</option>";
            }
          ?>
      </select>

    </div>
        
      <div class="col-xs-6">
        <label>Color</label>
        <select name="color" class="form-control">
          <option value= "<?php echo $mat->color; ?>" selected>Seleccione color</option>
          <?php
           foreach($this->model->GetColor() as $row){
              echo "<option value='".$row['col_id']."'>".$row['col_descripcion']."</option>";
            }
          ?>
      </select>

    </div>

    <div class="text-right" style="clear:left; padding-top:25px;">
        <button class="btn btn-success" type="submit" >Guardar</button>
    </div>
    </div>
   
</form>
</div> 