<div class="container">
  <h1 class="page-header titulo">Registrar usuario </h1>
  <ol class="breadcrumb">
  <li><a href="?c=operacion">Usuarios</a></li>
  <li class="active">Crear usuario</li>
</ol>
<form id="frm-nuevousuario" action="?c=usuarios&a=Guardar" method="post" enctype="multipart/form-data">

    <div class="form-group">
      
      <div class="col-xs-6">
        <label>numero de documento</label>
       <input type="text" name="puntada" value="<?php echo $r['oprppp'];; ?>" class="form-control" placeholder="puntada por pulgada" data-validacion-tipo="requerido|min:100" />
    </div>
     
      <div class="col-xs-12">
        <label>Nombres</label>
       <input type="text" name="codoperacion" value="<?php echo $r['oprref']; ?>" class="form-control" placeholder="Ingrese Código Operacion" data-validacion-tipo="requerido|min:20" />
    </div> 
   <div class="col-xs-6" style="clear:left;">
        <label>Primer apellido</label>
        <input type="text" name="descripcion" value="<?php echo $r['oprdesc']; ?>" class="form-control" placeholder="Ingrese Descripcion" data-validacion-tipo="requerido|min:20" />
    </div>
      
      <div class="col-xs-12">
        <label>Segundo apellido</label>
       <input type="text" name="tiempoopr" value="<?php echo $r['oprtiem']; ?>" class="form-control" placeholder="1 Hora" data-validacion-tipo="requerido|min:100" />
    </div> 
      
      </div>    
      <div  class="col-xs-6">
        <label>Programa de formacion</label>
      <textarea  name="ajuste" value="<?php echo $opr->ajuste; ?>" class="form-control"></textarea>
      </div>
  
      <div class="col-xs-6">
        <label>Correo electronico</label>
       <input type="text" name="puntada" value="<?php echo $r['oprppp'];; ?>" class="form-control" placeholder="puntada por pulgada" data-validacion-tipo="requerido|min:100" />

    </div>
  
      <div class="col-xs-6">
        <label>Tipo Maquina</label>
        <select name="maquina" class="form-control">
          <option <?php echo $opr->maquina; ?> selected>Seleccione Maquina</option>
          <?php
           foreach($this->model->GetMaquinas() as $row){
              echo "<option value='".$row['macod']."'>".$row['manomb']."</option>";
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
   <?php
  ?>
</form>
</div> 