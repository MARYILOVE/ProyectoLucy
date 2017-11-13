<div class="container">
  <h1 class="page-header titulo">Registrar usuario </h1>
  <ol class="breadcrumb">
  <li><a href="?c=usuarios1">Usuarios</a></li>
  <li class="active">Crear usuario</li>
</ol>
<form id="frm-nuevousuario" action="?c=usuarios1&a=GuardarDatos" method="post" enctype="multipart/form-data">
   
  <div class="form-group">
      <div class="row">
          <div class="col-xs-6">
              <label for="nombre" >Nombres</label>
              <input type="text" id="nombre" name="nombre" value="<?php echo $usu->nombre; ?>" class="form-control" placeholder="Nombre"/>            
          </div>
          <div class="col-xs-6">
               <label>Apellidos</label>
               <input type="text" name="apellidos" value="<?php echo $usu->apellido; ?>" class="form-control" placeholder="Apellidos" data-validacion-tipo="requerido|min:20" />
          </div>
      </div>
      <div class="row">
           <div class="col-xs-6">
               <label>Tipo Documento</label>
                <select name="tdocumento" class="form-control">
                  <option <?php echo $usu->tdocumento; ?> selected>Seleccione Tipo documento</option>
                  <?php
                   foreach($this->model->GetTiIden() as $row){
                      echo "<option value='".$row['tii_id']."'>".$row['tii_descripcion']."</option>";
                    }
                  ?>
              </select>
           </div>
           <div class="col-xs-6">
                <label>Numero de documento</label>
                 <input type="number" name="cedula" value="<?php echo $usu->documento ?>" class="form-control" placeholder="cedula" data-validacion-tipo="requerido|min:100" />
           </div>
      </div>
      <div class="row">
           <div class="col-xs-6">
              <label>Telefono</label>
              <input type="number" name="telefono" value="<?php echo $usu->telefono; ?>" class="form-control" placeholder="Telefono" data-validacion-tipo="requerido|min:100" />
           </div>
           <div class="col-xs-6">
              <label>Celular</label>
              <input type="number" name="celular" value="<?php echo $usu->celular; ?>" class="form-control" placeholder="Celular" data-validacion-tipo="requerido|min:100" />
           </div>
      </div>
      <div class="row">
           <div class="col-xs-6">
              <label>Direccion</label>
              <input type="text" name="direccion" value="<?php echo $usu->direccion; ?>" class="form-control" placeholder="Direccion" data-validacion-tipo="requerido|min:100" />
           </div>
           <div class="col-xs-6">
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
      </div>
      <div class="row">
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
      </div>
       <div class="col-xs-6">
                <label>Contraseña</label>
                <input type="cntrasena" name="contrasena" value="<?php echo $usu->contrasena; ?>" class="form-control" placeholder="Contraseña" data-validacion-tipo="requerido|min:100" />
           </div>
           <div class="col-xs-6">
                <label>Confirmacion Contraseña</label>
                <input type="cntrasena" name="contrasena" value="<?php echo $usu->contrasena; ?>" class="form-control" placeholder="Contraseña" data-validacion-tipo="requerido|min:100" />
           </div>
      </div>
      <div class="row">
           <div class="col-xs-6">
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
           <div class="col-xs-6">
                <label>Genero</label>
                <select class="form-control" id="genero" name="genero">
                    <option selected>Seleccione un genero</option>
                    <option>Femenino</option>
                    <option>Masculino</option>
                </select>
           </div>
      </div>
      <div class="row">
           <div class="col-xs-12">
              <div class="text-right" style="clear:left; padding-top:25px;">
                  <button class="btn btn-success">Guardar</button>
              </div> 
           </div>
      </div>
  </div>
   <?php
  ?>
</form>
</div> 
  <script src="../assets/js/librerias_js/validationForms.js"></script>
