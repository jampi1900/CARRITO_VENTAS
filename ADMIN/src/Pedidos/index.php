<?php
//Saliendo de la carpeta y entrando a config para la conexcion y agarrado las propiedades
include('../../config/conex.php');
include('../../layout/Parte_001/index.php');
include('../../layout/Sesion/index.php');
include('../../app/controladores/Productos/get_datos.php');

?>


<body>
    <div id="global-loader"><div class="whirly-loader"></div></div>
    <div class="main-wrapper">
        <?php include('../../layout/Navegador/index.php'); ?>



        
        <div class="page-wrapper">


            <div class="content">
                <div class="page-header">
                    <div class="page-title">
                        <h4>Detalle de Pedido</h4>
                        <h6>Mostrando todos los productos</h6>
                    </div>
                    <div class="page-btn">
                        <a href="create.php" class="btn btn-added"><img
                                src="<?php echo $URL;?>assets/img/icons/plus.svg"
                                alt="img"
                                class="me-1" />Volver</a>
                    </div>
                </div>

                

                <div class="card">
                    <div class="card-body">
                        <div class="table-top">
                            <div class="search-set">

                                <div class="search-input">
                                    <a class="btn btn-searchset"><img src="<?php echo $URL;?>assets/img/icons/search-white.svg" alt="img" /></a>
                                </div>
                            </div>

                        </div>



                        <div class="row">
              <div class="col-12 mb-4">
                <div class="card card-body py-3 box-shadow ">
                  <div class="row">
                    <div class="col-lg-6">
                      <table class="table mb-0">
                        <tbody>
                          <tr>
                            <th class="border-0 py-2 pl-0">Order No:</th>
                            <td class="border-0 py-2 px-0 text-muted">34BV66580K92</td>
                          </tr>

                          <tr>
                            <th class="border-0 py-2 pl-0">Cliente:</th>
                            <td class="border-0 py-2 px-0 text-muted">Yampier Alexander Quispe Quenaya</td>
                          </tr>


                          <tr>
                            <th class="border-0 py-2 pl-0">Tracking:</th>
                            <td class="border-0 py-2 px-0 text-muted">12345677899</td>
                          </tr>
                          <tr>
                            <th class="border-0 py-2 pl-0">Fecha y Hora:</th>
                            <td class="border-0 py-2 px-0 text-muted">August 29, 2020, 6:00pm</td>
                          </tr>
                         
                        </tbody>
                      </table>
                    </div>

                    <div class="col-lg-6">
                      <table class="table mb-0">
                        <tbody>
                        
                          <tr>
                            <th class="border-0 py-2 pl-0">Destino:</th>
                            <td class="border-0 py-2 px-0 text-muted">London, United Tacna Peru Asociacion <br> 
                              los Granados lote <br> 10 maz 10 </td>
                          </tr>
                          <tr>
                            <th class="border-0 py-2 pl-0">Metodo de Pago</th>
                            <td class="border-0 py-2 px-0 text-muted">Tarjeta</td>
                          </tr>
                          <tr>
                            <th class="border-0 py-2 pl-0">Estado:</th>
                            <td class="border-0 py-2 px-0 text-muted">En Espera</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>

                  </div>
                  
                </div>
              </div>
              <div class="col-12">
                
              </div>
            </div>



            <div class="row">
              <div class="col-12 mb-4">
                <div class="card card-body py-3 box-shadow ">
                <div class="row">
                  <div class="col-lg-3 mt-3">
                  <button type="button" class="btn btn-primary btn-sm">Confirmar Pago</button>
                  </div>        

                  <div class="col-lg-3 mt-3">
                  <button type="button" class="btn btn-secondary btn-sm">Confirmar Envio</button>
                  </div>  <!--MODAL PARA QUE INGRESE EL CODIGO DE SEGUIMIENTO-->

                  <div class="col-lg-3 mt-3">
                  <button type="button" class="btn btn-success btn-sm">Pedido Finalizado</button>
                  </div>  

                  <div class="col-lg-3 mt-3">
                  <button type="button" class="btn btn-danger btn-sm">Eliminar Pedido</button>
                  </div>  

                 
                </div>
<!--
<button type="button" class="btn btn-primary btn-sm">Primary</button>
<button type="button" class="btn btn-secondary btn-sm">Secondary</button>
<button type="button" class="btn btn-success btn-sm">Success</button>
<button type="button" class="btn btn-danger btn-sm">Danger</button>
<button type="button" class="btn btn-warning btn-sm">Warning</button>
<button type="button" class="btn btn-info btn-sm">Info</button>
<button type="button" class="btn btn-light btn-sm">Light</button>
<button type="button" class="btn btn-dark btn-sm">Dark</button>-->
                  
                </div>
              </div>
              <div class="col-12">
                
              </div>
            </div>











                     
<div class="row">
<div class="table-responsive">
<table class="table">
<thead>
<tr>
<th>Product</th>
<th>Net Unit Price($)	</th>
<th>Stock</th>
<th>Qty</th>
<th>Discount($)	</th>
<th>Tax %	</th>
<th class="text-end">Subtotal ($)</th>
<th></th>
</tr>
</thead>
<tbody>
<tr>
<td class="productimgname">
<a class="product-img">
<img src="assets/img/product/product7.jpg" alt="product">
</a>
<a href="javascript:void(0);">Apple Earpods</a>
</td>
<td>150</td>
<td>500</td>
<td>500</td>
<td>100</td>
<td>250</td>
<td class="text-end">500</td>

</tr>
<tr>
<td class="productimgname">
<a class="product-img">
<img src="assets/img/product/product6.jpg" alt="product">
</a>
<a href="javascript:void(0);">Macbook Pro</a>
</td>
<td>15.00</td>
<td>6000.00</td>
<td>100.00</td>
<td>0.00</td>
<td>0.00</td>
<td class="text-end">1000.00</td>

</tr>
</tbody>
</table>
</div>
</div>


                                    <div class="row ">
                                    <div class="col-lg-12 float-md-right">
                                    <div class="total-order">
                                    <ul>
                              
                                    <li>
                                    <h4>Envio	</h4>
                                    <h5>S/.15</h5>
                                    </li>
                                    <li>

                                    <h4>Sub Total</h4>
                                    <h5>$ 100.00</h5>
                                    </li>
                                    <li class="total">
                                    <h4>Total</h4>
                                    <h5>$ 0.00</h5>
                                    </li>
                                    </ul>
                                    </div>
                                    </div>
                                    </div>










                    </div>
                </div>
            </div>
        </div>





    </div>

   



    
  <?php include('../../layout/Parte_002/index.php') ?>
  <?php include('../../layout/Mensaje/index.php') ?>

</body>

</html>


<div id="respuesta"></div>


<!--shif alt f -->