  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
 
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Directores</li>
      </ol>
    </section>
    
    <div class="row">
            <div class="col-md-12 text-center">
                              <h2><span class="fa fa-2x"></span> Directores registrados en el sistema</h2>

                <hr>
            <div class="pull-right">
                     <a class="btn btn-default" href="<?php echo base_url();?>DirectoresController/index"><i class=" fa fa-refresh "></i> Actualizar</a>
            </div> 
                 <div class="pull-left"><input type="hidden" id="auxElimina" value="">
                     <div id="abreNuevoDirector" class="btn btn-default" data-toggle="modal" style="margin-left:16%;"><i class="fa fa-plus-circle"></i> Crear Nuevo Director</div>
                 </div> 


            </div>
    </div>
    
    
    <div class="col-xs-12">
                 
        <div class="panel-body" style="background: white">
            <div class="table-responsive">
                <table id="listaDirectores" class="display table table-hover table-bordered" width="100%"></table>
            </div>

                   
        </div>
    </div>
    
    
    <!-- Main content -->

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  
  	<div  class="modal fade bd-example-modal-lg" id="crearDirector" tabindex="-1" role="dialog" aria-labelledby="crearDirector" aria-hidden="true">
	  <div class="modal-dialog modal-lg">
	    <div class="modal-content">
	      	
	 	  <div class="modal-header">
	        <h2 align="center"><span class="fa fa-paperclip fa-1x"></span> Crear Nuevo Director</h2>   
<!-- 	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button> -->
	        </div>
	      
	        <div class="modal-body">
                    <div class="form-group">
                        <div class="col-lg-3">
                            <label>Nombre del Director</label> <input
                                type="text" class="form-control"
                                placeholder="Ingrese el nombre del Director" id="descripcion"
                                name="nombreDirector" value="">
                        </div>       
					                      
                        <div class="col-lg-3">    

                        </div>  
                   
                    </div>

	        </div>


	      <div style="clear:both"></div>
	      <div class="modal-footer">
                    <button id="btnCreaDirector" name="btnCreaDirector" href="<?php echo base_url();?>DirectoresController/guardar" type="button" class="btn btn-primary">Crear Nueva Director</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
	      </div>	      	
	      	
	      	
	    </div>
	  </div>
	</div>
  
  
    <script src="<?php echo base_url();?>assets/js/Mantenedores/Directores.js"></script>