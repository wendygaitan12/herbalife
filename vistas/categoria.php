<?php
//Activamos el almacenamiento en el buffer
ob_start();
session_start();

if (!isset($_SESSION["nombre"]))
{
  header("Location: login.html");
}
else
{
require 'header.php';

if ($_SESSION['almacen']==1)
{
?>
<!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">        
        <!-- Main content -->
        <section class="content">
            <div class="row">
              <div class="col-md-12">
                  <div class="box">
                    <div class="box-header with-border">
                         <center> <h1 class="box-title">Categoría <button class="btn btn-success" id="btnagregar" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i> Agregar</button> <a href="../reportes/rptcategorias.php" target="_blank"><button class="btn btn-info"><i class="fa fa-clipboard"></i> Reporte</button></a></h1></center>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body table-responsive" id="listadoregistros">
                        <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                          <thead>
                            <th>Opciones</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Estado</th>
                          </thead>
                        </table>
                    </div>
                    <div class="panel-body" style="height: 400px;" id="formularioregistros">
                        <form name="formulario" id="formulario" method="POST">

                              <!-- Nombre -->
                              <div class="row center-content-md-center">
                              <div class="col-sm-4">
                              <input type="hidden" name="" id=""> 
                              </div>
                              <div class="col-sm-4">
                              <label>Nombre:</label>
                              <input type="hidden" name="idcategoria" id="idcategoria"> 
                              <input type="text" class="form-control" name="nombre" id="nombre" maxlength="50" placeholder="Nombre"required>
                              </div>    
                              <div class="col-sm-4">
                              <input type="hidden" name="" id=""> 
                              </div>
                              </div>

                              <!-- Descripción -->
                              <div class="row center-content-md-center">
                              <div class="col-sm-4">
                              <input type="hidden" name="" id=""> 
                              </div>
                              <div class="col-sm-4">
                              <label>Descripción:</label>
                              <textarea type="text" class="form-control" name="descripcion" id="descripcion" maxlength="256" placeholder="Descripción"></textarea> 
                              </div>   
                              <div class="col-sm-4">
                              <input type="hidden" name="" id=""> 
                              </div>
                              </div>

                              <!-- Botónes -->
                              <div class="row center-content-md-center">
                              <div class="col-sm-4">
                              <input type="hidden" name="" id=""> 
                              </div>
                              <div class="col-sm-4">
                              <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i> Guardar</button>
                              <button class="btn btn-danger" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
                              </div>    
                              <div class="col-sm-4">
                              <input type="hidden" name="" id=""> 
                              </div>
                              </div>

                       



                        </form>
                    </div>
                    <!--Fin centro -->
                  </div><!-- /.box -->
              </div><!-- /.col -->
          </div><!-- /.row -->
      </section><!-- /.content -->

    </div><!-- /.content-wrapper -->
  <!--Fin-Contenido-->
<?php
}
else
{
  require 'noacceso.php';
}

require 'footer.php';
?>
<script type="text/javascript" src="scripts/categoria.js"></script>
<?php 
}
ob_end_flush();
?>


