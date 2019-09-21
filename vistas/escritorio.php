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
?>
 <div class="content-wrapper">        
        <!-- Main content -->
        <section class="content">
            <div class="row">
              <div class="col-md-12">
                  <div class="box">
                    <div class="box-header with-border">
                          <h1 class="box-title">Escritorio </h1>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body">

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          <div class="small-box bg-yellow">
                              <div class="inner">
                                <h4 style="font-size:17px;">
                                </h4>
                                <p>Categoria</p>
                              </div>
                              <div class="icon">
                                <i class="ion ion-bag"></i>
                              </div>
                              <a href="categoria.php" class="small-box-footer">Categoria <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          <div class="small-box bg-red">
                              <div class="inner">
                                <h4 style="font-size:17px;">
                                </h4>
                                <p>Producto</p>
                              </div>
                              <div class="icon">
                                <i class="ion ion-bag"></i>
                              </div>
                              <a href="producto.php" class="small-box-footer">Producto <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                       
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          <div class="small-box bg-aqua">
                              <div class="inner">
                                <h4 style="font-size:17px;">
                                </h4>
                                <p>Compras</p>
                              </div>
                              <div class="icon">
                                <i class="ion ion-bag"></i>
                              </div>
                              <a href="ingreso.php" class="small-box-footer">Compras <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          <div class="small-box bg-green">
                              <div class="inner">
                                <h4 style="font-size:17px;">
                                </h4>
                                <p>Ventas</p>
                              </div>
                              <div class="icon">
                                <i class="ion ion-bag"></i>
                              </div>
                              <a href="venta.php" class="small-box-footer">Ventas <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                             <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          <div class="small-box bg-Blue">
                              <div class="inner">
                                <h4 style="font-size:17px;">
                                </h4>
                                <p>Usuario</p>
                              </div>
                              <div class="icon">
                                <i class="ion ion-bag"></i>
                              </div>
                              <a href="categoria.php" class="small-box-footer">Usuario <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                       

                    </div>
            
                    <!--Fin centro -->
                  </div><!-- /.box -->
              </div><!-- /.col -->
          </div><!-- /.row -->
      </section><!-- /.content -->

    </div><!-- /.content-wrapper -->
  <!--Fin-Contenido-->
<?php
require 'footer.php';
?>
<?php 
}
ob_end_flush();
?>
