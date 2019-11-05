<?php
include "conexion.php";

$user_id=null;
$sql1= "select * from alumno where idAlumno = ".$_GET["id"];
$query = $con->query($sql1);
$alumno = null;
if($query->num_rows>0){
  while ($r=$query->fetch_object()){
  $alumno=$r;
  break;
}

  }
?>

<?php if($alumno!=null):?>

<form role="form" id="actualizar" >
  <div class="card-body">
  <form role="form" method="post" id="agregar">
    <div class="row">
      <div class="col-sm-6">
        
        <div class="form-group">
          <label>Nombre</label>
            <input type="text" class="form-control" value="<?php echo $alumno->nombre; ?>" name="Nombre" required>
              <label>Ap. Paterno</label>
                <input type="text" class="form-control" value="<?php echo $alumno->apPaterno; ?>" name="Paterno">
                  <label>Ap. Materno</label>
                  <input type="text" class="form-control" value="<?php echo $alumno->apMaterno; ?>" name="Materno">
                  <label>Género</label>
                  <select class="custom-select" name="Genero" value="<?php echo $alumno->genero; ?>">
                  <option>Masculino</option>
                      <option>Femenino</option>
                      </select>
                      </div>
                      </div>
                      <div class="col-sm-6">
                 <div class="form-group">
                 <label>DNI</label>
                  <input type="text" class="form-control" value="<?php echo $alumno->dni; ?>" name="DNI">
                    <label>Direccion</label>
                      <input type="text" class="form-control" value="<?php echo $alumno->direccion; ?>" name="Direccion">
                      <label>Celular</label>
                      <input type="text" class="form-control" value="<?php echo $alumno->celular; ?>" name="Celular">
                        <div class="form-group">
                          <label>Date masks</label>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" ><i class="far fa-calendar-alt"></i></span>
                                      </div>
                                      <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy"data-mask name="fecha" value="<?php echo $alumno->feNacimiento; ?>">
                                            </div>
                            </div>
                      </div>
                   </div>
                  </div>
                  <input type="hidden" name="id" value="<?php echo $alumno->idAlumno; ?>">
  <button type="submit" class="btn btn-default">Actualizar</button>
               </form>
            </div>

</form>

<script>
    $("#actualizar").submit(function(e){
    e.preventDefault();
    $.post("./php/actualizar.php",$("#actualizar").serialize(),function(data){
    });
    alert("Agregado exitosamente!");
    $("#actualizar")[0].reset();
    $('#editModal').modal('hide');
$('body').removeClass('modal-open');
$('.modal-backdrop').remove();
    loadTabla();
  });
</script>

<?php else:?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif;?>