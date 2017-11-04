<div class="container">
  <h1 class="page-header titulo">Nuevos Productos </h1>
  <ol class="breadcrumb">
  <li><a href="?c=materiales">Materiales por producto</a></li>
    <li class="active">Nuevo Registro materiales</li>
</ol>
  
<form id="frm-materiales" action="?c=materiales&a=Guardar" method="post" enctype="multipart/form-data">

    <div class="form-group">      
      
      <div class="col-xs-6">
        <label>consumo</label>
       <input type="text" name="em_consumo" value="<?php echo $mat->em_consumo; ?>" class="form-control" placeholder="" data-validacion-tipo="requerido|min:100" />
    </div>
    <div class="col-xs-6">
        <label>Factor Desperdicio</label>
       <input type="number" name="em_factor_desperdicio" value="<?php echo $mat->em_factor_desperdicio; ?>" class="form-control" placeholder="10" data-validacion-tipo="requerido|min:100" />
    </div>
   
      <div class="col-xs-6">
          <label>Consumo real</label>
          <input type="text" name="em_consumo_real" value="<?php echo $mat->em_consumo_real; ?>" class="form-control" placeholder="" data-validacion-tipo="requerido|min:100" />
      </div>
  
       <div class="col-xs-6">
           <label>Costo unidad</label>
           <input type="text" name="em_costo" value="<?php echo $mat->em_costo; ?>" class="form-control" placeholder="Observacion" data-validacion-tipo="requerido|min:100" />
      </div>
      <div class="col-xs-6">
           <label>Costo Total</label>
           <input type="text" name="em_costo_total" value="<?php echo $mat->em_costo_total; ?>" class="form-control" placeholder="Observacion" data-validacion-tipo="requerido|min:100" />
      </div>
      
       <div class="col-xs-6">
           <label>Materia Prima</label>
                  <select name="medida" class="form-control">
                         <option <?php echo $mat->matp_id; ?> selected>Seleccione materia prima</option>
                                 <?php
                                       foreach($this->model->GetMateria() as $row){
                                          echo "<option value='".$row['matp_id']."'>".$row['matp_descripcion']."</option>";
                                       }
                                  ?>
                  </select>
      </div>   
       <div class="col-xs-6">
           <label>Unidad Medida</label>
                  <select name="medida" class="form-control">
                         <option <?php echo $mat->pro_id; ?> selected>Seleccione Unidad de medida</option>
                                 <?php
                                       foreach($this->model->GetMedida() as $row){
                                          echo "<option value='".$row['pro_id']."'>".$row['matp_descripcion']."</option>";
                                       }
                                  ?>
                  </select>
      </div> 
   <div class="col-xs-6">
           <label>Color</label>
                  <select name="medida" class="form-control">
                         <option <?php echo $mat->col_id; ?> selected>Seleccione color</option>
                                 <?php
                                       foreach($this->model->GetColor() as $row){
                                          echo "<option value='".$row['col_id']."'>".$row['col_descripcion']."</option>";
                                       }
                                  ?>
                  </select>
      </div>   
   <div class="col-xs-6">
        <label>Descripcion</label>
       <input type="text" name="descripcion" value="<?php echo $mat->descripcion; ?>" class="form-control" placeholder="" data-validacion-tipo="requerido|min:100" />
    </div>
      
        <div class="text-right" style="clear:left; padding-top:25px;">
            <button class="btn btn-success" type="submit">Guardar</button>
        </div>
    </div>
</form>
</div> 