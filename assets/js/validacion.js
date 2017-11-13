function existenciaCodigo(){
    $.ajax({
           type: "POST",
           url: "/?c=materiales&a=consultarCodigo",
           data:{codigo:$("#codigoMaterial").val()}, // Adjuntar los campos del formulario enviado.
           success: function(data)
           {
             if(data!==0){
                return true;
                
              } else{
                $("#respuesta").html(data); // Mostrar la respuestas del script PHP.
                return false;
              }            
           }
         });
 
}

function validacion() {
  var validar=existenciaCodigo();

  if(validar===false){
     return false;
     }else{
       alert('entro');
     }
}