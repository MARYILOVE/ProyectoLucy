<div class="container">
 <form action="?c=login&a=IniciarSesion" method="POST">
   <div>
     <span style="font-weight:bold; color:red;">
         <?php
            if(isset($_SESSION['error'])){
              echo $_SESSION['error'];
            }
       ?>
     </span>
   </div>
    <label>Ingerese Usuario</label>
      <input type="text" name="usuario" class="form-control">
      <label>Ingerese Contraseña</label>
      <input type="password" name="password" class="form-control" >
   <button type="submit" name="Ingresar" class="btn btn-success">Iniciar Sesion</button>
   <a class="btn btn-success" href="?c=usuarios1&a=nuevo">Solicitar</a>
  
  </form> 
</div>