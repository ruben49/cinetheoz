  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('s_login');?></p>
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
        
        <li><a href="<?php echo base_url();?>ProductorasController/index"><i class="fa fa-circle-o"></i> Productoras</a></li>
        <li><a href="<?php echo base_url();?>DirectoresController/index"><i class="fa fa-circle-o"></i> Directores</a></li>
        <li><a href="<?php echo base_url();?>DistribuidorasController/index"><i class="fa fa-circle-o"></i> Distribuidoras</a></li>
        <li><a href="<?php echo base_url();?>GeneroController/index"><i class="fa fa-circle-o"></i> Genero</a></li>
        <li><a href="<?php echo base_url();?>SucursalesController/index"><i class="fa fa-circle-o"></i> Sucursal</a></li>
        <li><a href="<?php echo base_url();?>FuncionesController/index"><i class="fa fa-circle-o"></i> Funciones</a></li>
        <li><a href="<?php echo base_url();?>AccesosController/index"><i class="fa fa-circle-o"></i> Accesos </a></li> 
        <li><a href="<?php echo base_url();?>Perfil_UsuarioController/index"><i class="fa fa-circle-o"></i> Perfiles de Usuarios</a></li>
        <li><a href="<?php echo base_url();?>UsuariosController/index"><i class="fa fa-circle-o"></i> Usuarios del CPanel</a></li>
        <li><a href="<?php echo base_url();?>PaisController/index"><i class="fa fa-circle-o"></i> Pa&iacute;ses</a></li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>