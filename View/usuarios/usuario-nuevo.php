<div class="container">
  <h1 class="page-header titulo">Registrar usuario </h1>
  <ol class="breadcrumb">
  <li><a href="?c=usuarios">Usuarios</a></li>
  <li class="active">Crear usuario</li>
</ol>
<form id="frm-nuevousuario" action="?c=usuarios&a=Guardar" method="post" enctype="multipart/form-data">

    <div class="form-group"> 
      <div class="col-xs-6">
        <label>Nombres</label>
       <input type="text" name="nombre" value="<?php echo $usu->nombre; ?>" class="form-control" placeholder="Nombre" data-validacion-tipo="requerido|min:20" />
    </div> 
     <div class="col-xs-6">
        <label>numero de documento</label>
       <input type="number" name="cedula" value="<?php echo $usu->documento ?>" class="form-control" placeholder="cedula" data-validacion-tipo="requerido|min:100" />
    </div>
   <div class="col-xs-6" style="clear:left;">
        <label>Primer apellido</label>
        <input type="text" name="papellido" value="<?php echo $usu->papellido; ?>" class="form-control" placeholder="Primer Apellido" data-validacion-tipo="requerido|min:20" />
    </div>
      
      <div class="col-xs-6">
        <label>Segundo apellido</label>
       <input type="text" name="sapellido" value="<?php echo $usu->sapellido; ?>" class="form-control" placeholder="Segundo Apellido" data-validacion-tipo="requerido|min:100" />
    </div> 
      
      <div  class="col-xs-6">
        <label>Programa de formacion</label>
        <select name="maquina" class="form-control">
          <option <?php echo $opr->maquina; ?> selected>Seleccione Programa</option>
          <?php
           foreach($this->model->GetMaquinas() as $row){
              echo "<option value='".$row['macod']."'>".$row['manomb']."</option>";
            }
          ?>
      </select>
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