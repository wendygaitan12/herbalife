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
                          <center><h1 class="box-title">Artículo <button class="btn btn-success" id="btnagregar" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i> Agregar</button> <a href="../reportes/rptcategorias.php" target="_blank"><button class="btn btn-info"><i class="fa fa-clipboard"></i> Reporte</button></a></h1></center>
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
                            <th>Categoría</th>
                            <th>Puntos</th>
                            <th>Stock</th>
                            <th>Imagen</th>
                            <th>Estado</th>
                          </thead>
                          <tbody>                            
                          </tbody>
                        </table>
                    </div>
                    <div class="panel-body" id="formularioregistros" align="center">
                        <form name="formulario" id="formulario" method="POST">
                            
                              <!-- Nombre -->
                              <div class="row center-content-md-center">
                              <div class="col-sm-3">
                              <input type="hidden" name="" id=""> 
                              </div>
                              <div class="col-sm-6">
                              <label>Nombre:</label>
                              <input type="hidden" name="idarticulo" id="idarticulo"> 
                              <input type="text" class="form-control" name="nombre" id="nombre" maxlength="100" placeholder=""required>
                              </div>   
                              <div class="col-sm-3">
                              <input type="hidden" name="" id=""> 
                              </div>
                              </div>

                              <!-- Categoría -->
                              <div class="row center-content-md-center">
                              <div class="col-sm-3">
                              <input type="hidden" name="" id=""> 
                              </div>
                              <div class="col-sm-6">
                              <label>Categoría:</label>
                              <select id="idcategoria" name="idcategoria" class="form-control selectpicker" data-live-search="true" required></select>
                              </div>     
                              <div class="col-sm-3">
                              <input type="hidden" name="" id=""> 
                              </div>
                              </div>

                              <!-- Stock -->
                              <div class="row center-content-md-center">
                              <div class="col-sm-3">
                              <input type="hidden" name="" id=""> 
                              </div>
                              <div class="col-sm-6">
                              <label>Stock(*):</label>
                              <input type="number" class="form-control" name="stock" id="stock" required>
                              </div>  
                              <div class="col-sm-3">
                              <input type="hidden" name="" id=""> 
                              </div>
                              </div>

                              <!-- Descipción -->
                              <div class="row center-content-md-center">
                              <div class="col-sm-3">
                              <input type="hidden" name="" id=""> 
                              </div>
                              <div class="col-sm-6">
                              <label>Descripción:</label>
                              <input type="text" class="form-control" name="descripcion" id="descripcion" maxlength="256" placeholder="">
                              </div>    
                              <div class="col-sm-3">
                              <input type="hidden" name="" id=""> 
                              </div>
                              </div>

                              <!-- Imagen -->
                              <div class="row center-content-md-center">
                              <div class="col-sm-3">
                              <input type="hidden" name="" id=""> 
                              </div>
                              <div class="col-sm-6">
                              <label>Imagen:</label>
                              <input type="file" class="form-control" name="imagen" id="imagen">
                              <input type="hidden" name="imagenactual" id="imagenactual">
                              <img src="" width="150px" height="120px" id="imagenmuestra">
                              </div>  
                              <div class="col-sm-3">
                              <input type="hidden" name="" id=""> 
                              </div>
                              </div>

                              <!-- Puntos -->
                              <div class="row center-content-md-center">
                              <div class="col-sm-3">
                              <input type="hidden" name="" id=""> 
                              </div>
                              <div class="col-sm-6">
                              <label>Puntos:</label>
                              <input type="number" class="form-control" name="puntos" id="puntos" placeholder="">
                              </div>     
                              <div class="col-sm-3">
                              <input type="hidden" name="" id=""> 
                              </div>
                              </div>

                              <!-- Botónes -->
                              <div class="row center-content-md-center">
                              <div class="col-sm-3">
                              <input type="hidden" name="" id=""> 
                              </div>
                              <div class="col-sm-6">
                              <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i> Guardar</button>
                              <button class="btn btn-danger" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
                              </div>   
                              <div class="col-sm-3">
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
<script type="text/javascript" src="../public/js/JsBarcode.all.min.js"></script>
<script type="text/javascript" src="../public/js/jquery.PrintArea.js"></script>

<script type="text/javascript" src="scripts/articulo.js"></script>
<?php 
}
ob_end_flush();
?>s