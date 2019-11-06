<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CETPRO | MegaSystem</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
    <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <!-- Right navbar links -->
    <!--<ul class="navbar-nav ml-auto">-->
      <!-- Notifications Dropdown Menu -->
      <!--<li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
    </ul>-->
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <!--<a href="index3.html" class="brand-link">-->
    <a href="#" class="brand-link">
      <img src="../dist/img/AdminLTELogo.png" alt="AdminLTELogo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">MegaSystem</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../dist/img/user3-128x128.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Angie Ramirez</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-table"></i>
              <p>
                CETPRO
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../Paginas/ingresos.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Alumnos</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Tesorería
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="ingresos.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ingresos</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Listado de Alumnos</h1>
          </div>
          <div class="col-sm-6">
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Alumnos</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="search" id="buscar">
                  <div class="card-header"> 
                    <div class="container-fluid">
                        <div class="row">
                          <div class="col-xs-8 col-md-6">
                            <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <select class="custom-select" id="inputGroupSelect01">
                                <option selected>Tipo</option>
                                 <option value="1">DNI</option>
                                  <option value="2">Nombre</option>
                                  <option value="3">Curso</option>
                               </select>
                            </div>
                            <input type="text" class="form-control" name="s">
                              <span class="input-group-append">
                                <button type="button" class="btn btn-info btn-flat">Buscar</button>
                            </span>
                          </div> 
                          </div>
                          <div class="col-xs-2 col-md-2">
                            <button type="button" class="btn btn-default" data-toggle="modal" href="#newModal">
                            Añadir Alumno
                            </button>
                            </div>
                        </div>
                    </div>
                <!-- /.card-header -->
               </div>
                </form>
                <div class="modal fade" id="newModal">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title">Datos del Alumno</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                        <div class="modal-body">
                          <form role="form" method="post" id="agregar">
                               <div class="row">
                              <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                  <label>Nombre</label>
                                  <input type="text" class="form-control" placeholder="Nombre ..." name="Nombre">
                                  <label>Ap. Paterno</label>
                                  <input type="text" class="form-control" placeholder="Ap. Paterno ..." name="Paterno">
                                  <label>Ap. Materno</label>
                                  <input type="text" class="form-control" placeholder="Ap. Materno ..." name="Materno">
                                  <label>Género</label>
                                  <select class="custom-select" name="Genero">
                                    <option value="Masculino">Masculino</option>
                                    <option value="Femenino">Femenino</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <label>DNI</label>
                                  <input type="text" class="form-control" placeholder="DNI ..." name="DNI">
                                  <label>Direccion</label>
                                  <input type="text" class="form-control" placeholder="Direccion ..." name="Direccion">
                                  <label>Celular</label>
                                  <input type="text" class="form-control" placeholder="Celular ..." name="Celular">
                                  <div class="form-group">
                                    <label>Date masks</label>
                                    <div class="input-group">
                                      <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy"data-mask name="fecha">
                                    </div>
                                  </div>
                                </div>
                              </div>
                              </div>
                              <div class="modal-footer justify-content-between">
                        <button type="submit" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                      </div>
                               </form>
                        </div>
                      
                    </div>
                  </div>
            </div>
            <div class="card-body">
              <div id="tabla"></div>
         </div>
                </div>    
                   </div>
                  </div>
        <!-- /.row -->
              </div><!-- /.container-fluid -->
           </section>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.0-rc.5
    </div>
  </footer>
</div>
<!-- ./wrapper -->
<!-- jQuery -->
  <script src="../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- jsGrid -->
  <script src="../plugins/jsgrid/demos/db.js"></script>
  <script src="../plugins/jsgrid/jsgrid.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../dist/js/demo.js"></script>
  <!-- page script -->
  <script>

      function loadTabla(){
        $('#editModal').modal('hide');
        $.get("./php/tabla.php","",function(data){
          $("#tabla").html(data);
        })
      }
      $("#buscar").submit(function(e){
        e.preventDefault();
        $.get("./php/busqueda.php",$("#buscar").serialize(),function(data){
          $("#tabla").html(data);
        $("#buscar")[0].reset();
        });
      });
      
      loadTabla();
        $("#agregar").submit(function(e){
          e.preventDefault();
          $.post("./php/agregar.php",$("#agregar").serialize(),function(data){
          });
          alert("Agregado exitosamente!");
          $("#agregar")[0].reset();
          $('#newModal').modal('hide');
          loadTabla();
        });
      </script>
      
</body>
</html>