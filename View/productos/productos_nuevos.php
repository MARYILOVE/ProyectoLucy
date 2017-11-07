<div class="container">
  <h1 class="page-header titulo">Nuevos Productos </h1>
  <ol class="breadcrumb">
  <li><a href="?c=productos">Productos</a></li>
    <li class="active">Nuevo Registro</li>
</ol>
  
<form id="frm-productos" action="?c=productos&a=Guardar" method="post" enctype="multipart/form-data">

    <div class="form-group">      
      
   <div class="col-xs-6" style="clear:left;">
        <label>Nombre Del Producto</label>
        <input type="text" name="pro_nombre" value="<?php echo $opr->pro_nombre; ?>" class="form-control" placeholder="" data-validacion-tipo="requerido|min:20" />

    </div>  
      <div class="col-xs-6">
        <label>Precio Unidad </label>
       <input type="number" name="pro_precio_unidad" value="<?php echo $opr->pro_precio_unidad; ?>" class="form-control" placeholder="" data-validacion-tipo="requerido|min:100" />

    </div> 
      <div class="col-xs-6">
        <label>Imagen Tecnico</label>
       <input type="text" name="pro_img_tecnico" value="<?php echo $opr->pro_img_tecnico; ?>" class="form-control" placeholder="" data-validacion-tipo="requerido|min:100" />
    </div>
   
      <div  class="col-xs-6">
        <label>Imagen Despiese</label>
      <input type="text" name="pro_img_despiece" value="<?php echo $opr->pro_img_despiece; ?>" class="form-control" placeholder="" data-validacion-tipo="requerido|min:100" />
      </div>
      
       <div class="col-xs-6">
          <label>Imagen Proceso de Ope</label>
          <input type="text" name="pro_img_proceso_op" value="<?php echo $opr->pro_img_proceso_ope; ?>" class="form-control" placeholder="" data-validacion-tipo="requerido|min:100" />
      </div>
      
      <div class="col-xs-6">
           <label>Linea</label>
                  <select name="linea" class="form-control">
                         <option <?php echo $opr->linea; ?> selected>Seleccione Linea</option>
                                 <?php
                                       foreach($this->model->GetLinea() as $row){
                                          echo "<option value='".$row['linea_id']."'>".$row['linea_descripcion']."</option>";
                                       }
                                  ?>
                  </select>
      </div>  
      
      <div class="col-xs-6">
           <label>Observacion Del Producto</label>
           <input type="text" name="pro_observacion" value="<?php echo $opr->pro_observacion; ?>" class="form-control" placeholder="Observacion" data-validacion-tipo="requerido|min:100" />
      </div>
      
      <div class="col-xs-6">
           <label>Fecha De Creacion</label>
           <input type="date" name="pro_fecha_crea" value="<?php echo $opr->pro_fecha_crea; ?>" class="form-control" placeholder="09/09/2017" data-validacion-tipo="requerido|min:100" />
      </div>
      
      <div class="col-xs-6">
           <label>Usuario</label>
                  <select name="usuario" class="form-control">
                         <option <?php echo $opr->usuario; ?> selected>Seleccione Usuario</option>
                                 <?php
                                       foreach($this->model->GetUsuario() as $row){
                                          echo "<option value='".$row['usu_id']."'>".$row['usu_password']."</option>";
                                       }
                                  ?>
                  </select>
      </div> 
      
     <div class="col-xs-6">
           <label>Estado</label>
                  <select name="estado" class="form-control">
                         <option <?php echo $opr->estado; ?> selected>Seleccione Estado</option>
                                 <?php
                                       foreach($this->model->GetEstado() as $row){
                                          echo "<option value='".$row['est_id']."'>".$row['est_descripcion']."</option>";
                                       }
                                  ?>
                  </select>
      </div> 
      
      <div class="col-xs-6">
           <label>Imagen Producto</label>
           <input type="text" name="pro_img_producto" value="<?php echo $opr->pro_img_producto; ?>" class="form-control" placeholder="" data-validacion-tipo="requerido|min:100" />
      </div>
      
       <div class="col-xs-6">
           <label>Color</label>
                  <select name="color" class="form-control">
                         <option <?php echo $opr->color; ?> selected>Seleccione Color</option>
                                 <?php
                                       foreach($this->model->GetColor() as $row){
                                          echo "<option value='".$row['col_id']."'>".$row['col_descripcion']."</option>";
                                       }
                                  ?>
                  </select>
      </div> 
      
        <div class="text-right" style="clear:left; padding-top:25px;">
            <button class="btn btn-success" type="submit">Guardar</button>
        </div>
    </div>
</form>
</div> 