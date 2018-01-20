<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Panel de control</title>
  <LINK REL="Shortcut Icon" HREF="img/icono.png">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url();?>application/views/template/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>application/views/template/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>application/views/template/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>application/views/template/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url();?>application/views/template/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url();?>application/views/template/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url();?>application/views/template/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>application/views/template/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>application/views/template/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url();?>application/views/template/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url();?>application/views/template/img/index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>o</b>Z</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Panel de control</b>
        <p>&nbsp;</p>Cine</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
        
  
          <!-- Tasks: style can be found in dropdown.less -->
       
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url();?>application/views/template/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url();?>application/views/template/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

             
              </li>
              <!-- Menu Body -->
            
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>application/views/template/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="BUSCAR...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MANTENEDORES</li>
      
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>USUARIOS</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>application/views/template/pages/forms/general.html"><i class="fa fa-circle-o"></i> Ingresar</a></li>
            <li><a href="<?php echo base_url();?>application/views/template/pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Editar</a></li>
            <li><a href="<?php echo base_url();?>application/views/template/pages/forms/editors.html"><i class="fa fa-circle-o"></i>Buscar</a></li>
             <li><a href="<?php echo base_url();?>application/views/template/pages/forms/editors.html"><i class="fa fa-circle-o"></i>Eliminar</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>CLIENTES</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>application/views/template/pages/forms/general.html"><i class="fa fa-circle-o"></i> Ingresar</a></li>
            <li><a href="<?php echo base_url();?>application/views/template/pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Editar</a></li>
            <li><a href="<?php echo base_url();?>application/views/template/pages/forms/editors.html"><i class="fa fa-circle-o"></i>Buscar</a></li>
             <li><a href="<?php echo base_url();?>application/views/template/pages/forms/editors.html"><i class="fa fa-circle-o"></i>Eliminar</a></li>
          </ul>
        </li>
           <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>PELICULAS</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>application/views/template/pages/forms/general.html"><i class="fa fa-circle-o"></i> Ingresar</a></li>
            <li><a href="<?php echo base_url();?>application/views/template/pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Editar</a></li>
            <li><a href="<?php echo base_url();?>application/views/template/pages/forms/editors.html"><i class="fa fa-circle-o"></i>Buscar</a></li>
             <li><a href="<?php echo base_url();?>application/views/template/pages/forms/editors.html"><i class="fa fa-circle-o"></i>Eliminar</a></li>
          </ul>
        </li>
           <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>FUNCION</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>application/views/template/pages/forms/general.html"><i class="fa fa-circle-o"></i> Ingresar</a></li>
            <li><a href="<?php echo base_url();?>application/views/template/pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Editar</a></li>
            <li><a href="<?php echo base_url();?>application/views/template/pages/forms/editors.html"><i class="fa fa-circle-o"></i>Buscar</a></li>
             <li><a href="<?php echo base_url();?>application/views/template/pages/forms/editors.html"><i class="fa fa-circle-o"></i>Eliminar</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>SUCURSAL</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>pages/forms/general.html"><i class="fa fa-circle-o"></i> Ingresar</a></li>
         
            <li><a href="<?php echo base_url();?>pages/forms/editors.html"><i class="fa fa-circle-o"></i>Buscar</a></li>
             <li><a href="<?php echo base_url();?>pages/forms/editors.html"><i class="fa fa-circle-o"></i>Eliminar</a></li>
          </ul>
        </li>
           <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>DIRECTORES</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>pages/forms/general.html"><i class="fa fa-circle-o"></i> Ingresar</a></li>
      
            <li><a href="<?php echo base_url();?>pages/forms/editors.html"><i class="fa fa-circle-o"></i>Buscar</a></li>
             <li><a href="<?php echo base_url();?>pages/forms/editors.html"><i class="fa fa-circle-o"></i>Eliminar</a></li>
          </ul>
        </li>
           <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>AÑO</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>pages/forms/general.html"><i class="fa fa-circle-o"></i> Ingresar</a></li>
           
            <li><a href="<?php echo base_url();?>pages/forms/editors.html"><i class="fa fa-circle-o"></i>Buscar</a></li>
             <li><a href="<?php echo base_url();?>pages/forms/editors.html"><i class="fa fa-circle-o"></i>Eliminar</a></li>
          </ul>
        </li>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>GENERO</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>pages/forms/general.html"><i class="fa fa-circle-o"></i> Ingresar</a></li>
           
            <li><a href="<?php echo base_url();?>pages/forms/editors.html"><i class="fa fa-circle-o"></i>Buscar</a></li>
             <li><a href="<?php echo base_url();?>pages/forms/editors.html"><i class="fa fa-circle-o"></i>Eliminar</a></li>
          </ul>
        </li>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>PAIS</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>pages/forms/general.html"><i class="fa fa-circle-o"></i> Ingresar</a></li>
           
            <li><a href="<?php echo base_url();?>pages/forms/editors.html"><i class="fa fa-circle-o"></i>Buscar</a></li>
             <li><a href="<?php echo base_url();?>pages/forms/editors.html"><i class="fa fa-circle-o"></i>Eliminar</a></li>
          </ul>
        </li>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>PRODUCTORAS</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>pages/forms/general.html"><i class="fa fa-circle-o"></i> Ingresar</a></li>
           
            <li><a href="<?php echo base_url();?>pages/forms/editors.html"><i class="fa fa-circle-o"></i>Buscar</a></li>
             <li><a href="<?php echo base_url();?>pages/forms/editors.html"><i class="fa fa-circle-o"></i>Eliminar</a></li>
          </ul>
        </li>
       
        
        
       
    
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Inicio
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
   
    <strong>Copyright &copy; 2018 <a href="https://adminlte.io">The oz</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->

  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url();?>application/views/template/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url();?>application/views/template/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>application/views/template/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url();?>application/views/template/bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo base_url();?>application/views/template/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url();?>application/views/template/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url();?>application/views/template/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url();?>application/views/template/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url();?>application/views/template/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url();?>application/views/template/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url();?>application/views/template/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url();?>application/views/template/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url();?>application/views/template/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url();?>application/views/template/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>application/views/template/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>application/views/template/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url();?>application/views/template/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>application/views/template/dist/js/demo.js"></script>
</body>
</html>
