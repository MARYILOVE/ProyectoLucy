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
        <label>Tipo Documento</label>
        <select name="documento" class="form-control">
          <option <?php echo $usu->tdocumento; ?> selected>Seleccione Tipo documento</option>
          <?php
           foreach($this->model->GetTiIden() as $row){
              echo "<option value='".$row['tii_id']."'>".$row['tii_descripcion']."</option>";
            }
          ?>
      </select>

    </div>  
     <div class="col-xs-6">
        <label>numero de documento</label>
       <input type="number" name="cedula" value="<?php echo $usu->documento ?>" class="form-control" placeholder="cedula" data-validacion-tipo="requerido|min:100" />
    </div>
   <div class="col-xs-6">
        <label>Apellidos</label>
        <input type="text" name="apellidos" value="<?php echo $usu->apellido; ?>" class="form-control" placeholder="Apellidos" data-validacion-tipo="requerido|min:20" />
    </div>
      
      <div class="col-xs-6">
        <label>Telefono</label>
       <input type="text" name="telefono" value="<?php echo $usu->telefono; ?>" class="form-control" placeholder="Telefono" data-validacion-tipo="requerido|min:100" />
    </div> 
      
      <div  class="col-xs-6">
        <label>Programa de formacion</label>
        <select name="ficha" class="form-control">
          <option <?php echo $usu->ficha; ?> selected>Seleccione Programa</option>
          <?php
           foreach($this->model->GetFicha() as $row){
              echo "<option value='".$row['ficha_id']."'>".$row['ficha_ins_lider']." | ".utf8_encode($row['prog_nombre'])."</option>";
            }
          ?>
      </select>
      </div>
  
      <div class="col-xs-6">
        <label>Correo electronico</label>
       <input type="email" name="email" value="<?php echo $usu->email; ?>" class="form-control" placeholder="Email" data-validacion-tipo="requerido|min:100" />

    </div>
  
      <div class="col-xs-6">
        <label>Tipo Persona</label>
        <select name="tpersona" class="form-control">
          <option <?php echo $usu->tpersona; ?> selected>Seleccione Tipo Persona</option>
          <?php
           foreach($this->model->GetTiPersona() as $row){
              echo "<option value='".$row['Tper_id']."'>".$row['Tper_descripcion']."</option>";
            }
          ?>
      </select>

    </div>    
      <div  class="col-xs-6">
        <label>Ciudad</label>
        <select name="ciudad" class="form-control">
          <option <?php echo $usu->ciudad; ?> selected>Seleccione Ciudad</option>
          <?php
           foreach($this->model->GetCiudad() as $row){
              echo "<option value='".$row['ciu_id']."'>".utf8_encode($row['ciu_nombre'])."</option>";
            }
          ?>
      </select>
      </div>

    <div class="text-right" style="clear:left; padding-top:25px;">
        <button class="btn btn-success">Guardar</button>
    </div>
    </div>
   <?php
  ?>
</form>
</div> 