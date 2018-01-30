  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
 
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Distribuidoras</li>
      </ol>
    </section>
    
    <div class="row">
            <div class="col-md-12 text-center">
                              <h2><span class="fa fa-2x"></span> Distribuidoras registradas en el sistema</h2>

                <hr>
            <div class="pull-right">
                     <a class="btn btn-default" href="<?php echo base_url();?>DistribuidorasController/index"><i class=" fa fa-refresh "></i> Actualizar</a>
            </div> 
                 <div class="pull-left"><input type="hidden" id="auxElimina" value="">
                     <div id="abreNuevaDistribuidora" class="btn btn-default" data-toggle="modal" style="margin-left:16%;"><i class="fa fa-plus-circle"></i> Crear Nueva Distribuidora</div>
                 </div> 


            </div>
    </div>
    
    
    <div class="col-xs-12">
                 
        <div class="panel-body" style="background: white">
            <div class="table-responsive">
                <table id="listaDistribuidoras" class="display table table-hover table-bordered" width="100%"></table>
            </div>

                   
        </div>
    </div>
    
    
    <!-- Main content -->

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  
  	<div  class="modal fade bd-example-modal-lg" id="crearDistribuidora" tabindex="-1" role="dialog" aria-labelledby="crearDistribuidora" aria-hidden="true">
	  <div class="modal-dialog modal-lg">
	    <div class="modal-content">
	      	
	 	  <div class="modal-header">
	        <h2 align="center"><span class="fa fa-paperclip fa-1x"></span> Crear Nueva Distribuidora</h2>   
<!-- 	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button> -->
	        </div>
	      
	        <div class="modal-body">
                    <div class="form-group">
                        <div class="col-lg-3">
                            <label>Nombre de la Distribuidora</label> <input
                                type="text" class="form-control"
                                placeholder="Ingrese la Distribuidora" id="descripcion"
                                name="descripcion" value="">
                        </div>       
					                      
                        <div class="col-lg-3">    

                        </div>  
                   
                    </div>

	        </div>


	      <div style="clear:both"></div>
	      <div class="modal-footer">
                    <button id="btnCreaDistribuidora" name="btnCreaDistribuidora" href="<?php echo base_url();?>DistribuidorasController/guardar" type="button" class="btn btn-primary">Crear Nueva Distribuidora</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
	      </div>	      	
	      	
	      	
	    </div>
	  </div>
	</div>
  
  
    <script src="<?php echo base_url();?>assets/js/Mantenedores/Distribuidoras.js"></script>