<?php

include "conexion.php";

$user_id=null;
$sql1= "select * from alumno";
$query = $con->query($sql1);
?>

<?php if($query->num_rows>0):?>
<table class="table table-striped table-sm table-responsive-sm">
<thead>
    <th>Nombre</th>
	<th>DNI</th>
	<th>Celular</th>
	<th>Acciones</th>
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
	<td><?php echo $r["nombre"]; ?></td>
	<td><?php echo $r["dni"]; ?></td>
	<td><?php echo $r["celular"]; ?></td>
	<td style="width:150px;">
    <div class="btn-group">
        <a data-id="<?php echo $r["idAlumno"];?>" class="btn btn-edit btn-sm btn-warning "id="actualizarModal"><i class="fa fa-pencil-alt" aria-hidden="true"></i></a>&nbsp;
        <a href="#" id="del-<?php echo $r["idAlumno"];?>" class="btn btn-sm btn-danger"><i class="fa fa-trash-alt" aria-hidden="true"></i></a>&nbsp;
        <script>
            $("#del-"+<?php echo $r["idAlumno"];?>).click(function(e){
               e.preventDefault();
               p = confirm("Estas seguro?");
               if(p){
                $.get("./php/eliminar.php","id="+<?php echo $r["idAlumno"];?>,function(data){
                  loadTabla();
                 });
                }
              });
           </script>
         <a data-id="<?php echo $r["idAlumno"];?>" class="btn btn-edit btn-sm btn-primary "id=""><i class="fa fa-address-card" aria-hidden="true"></i></a>&nbsp;
         <a data-id="<?php echo $r["idAlumno"];?>" class="btn btn-edit btn-sm btn-success "id=""><i class="fa fa-money-bill-alt" aria-hidden="true"></i></a>&nbsp;
        </div>
		<script>
$("#del-"+<?php echo $r["idAlumno"];?>).click(function(e){
			e.preventDefault();
			p = confirm("Estas seguro?");
			if(p){
				$.get("./php/eliminar.php","id="+<?php echo $r["idAlumno"];?>,function(data){
					loadTabla();
				});
			}

		});
		</script>
	</td>
</tr>
<?php endwhile;?>
 
                </table>
                        <div class="card-footer clearfix">
                        <ul class="pagination pagination-sm m-0 float-right">
                        <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                        </ul>
                        </div>
                    </div>
                    <?php else:?>
	                    <p class="alert alert-warning">No hay resultados</p>
                    <?php endif;?>
                    <script>
                      $(".btn-edit").click(function(){
                        id = $(this).data("id");
                        $.get("./php/formulario.php","id="+id,function(data){
                          $("#form-edit").html(data);
                        });
                        $('#editModal').modal('show');
                      });
                    </script>
                    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            
                          </div>
                          <div class="modal-body">
                          <div id="form-edit"></div>
                          </div>

                        </div><!-- /.modal-content -->
                      </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->