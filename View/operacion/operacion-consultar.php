<?php
$consulta= $this->model->Listaroperaciones();
if(COUNT($consulta)!=0){
?>  
  <center><h1 class="page-header titulo">Listado Operaciones </h1></center>
<div class="container">
   <table class="table table-bordered">
        <tr class="info">
            <th>Descripcion</th>
            <th>Estado</th>
            <th>Puntada por pulgada</th>
            <th>Ajuste</th>
            <th>Tiempo estimado</th>
            <th>Tipo Maquina</th>
        </tr>
        <tbody>
            <?php
                foreach($consulta AS $rows){
                  echo "<tr>
                          <td>".$rows["ope_descripcion"]."</td>
                          <td>".$rows["ope_estado"]."</td>
                          <td>".$rows["ope_ppp"]."</td>
                          <td>".$rows["ope_ajuste"]."</td>
                          <td>".$rows["ope_estandar"]."</td>
                          <td>".$rows["maq_descripcion"]."</td>
                       </tr>";
                }
            ?>
       </tbody>
</table>
  
</div>
 
				
<?php  
  
}else{
  echo "No Hay Resultados";
}
?>