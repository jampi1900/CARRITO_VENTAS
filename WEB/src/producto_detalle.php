<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Mi primer Ecomer</title>
  <!-- Viewport-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php
include('../../ADMIN/config/conex.php');
include('../layout/Parte_001.php');
include('../../ADMIN/app/controladores/Categoria/index.php');
include('../../ADMIN/app/controladores/Productos/get_datos.php');



  $id_producto_color = $_GET['id'];

  $SQL_PRODUCTOS_D = "SELECT * FROM productos AS E 
  INNER JOIN MARCAS AS B ON E.FK_Marca = B.PK_Marca  
  INNER JOIN CATEGORIAS AS C ON E.FK_Categoria = C.PK_Categoria 
  INNER JOIN ESTADOS AS D ON E.FK_Estado = D.PK_Estado
  INNER JOIN COLORES AS F ON F.PK_Color = E.FK_Color
  INNER JOIN ETIQUETAS AS G ON G.PK_Etiqueta = E.FK_Etiqueta
  WHERE E.FK_Estado <>  '3' AND E.PK_Producto = '$id_producto_color'"; // ELIMINADO
  $DETALLES = $conexion->query($SQL_PRODUCTOS_D);




  ?>


</head>


<!-- Body-->

<body>


  <!-- Page loading spinner-->
  <div class="cs-page-loading active">
    <div class="cs-page-loading-inner">
      <div class="cs-page-spinner"></div><span>Loading...</span>
    </div>
  </div>

  <!-- Page wrapper for sticky footer -->
  <!-- Wraps everything except footer to push footer to the bottom of the page if there is little content -->
  <main class="cs-page-wrapper">


    <!-- Breadcrumb -->
    <nav class="bg-secondary mb-3" aria-label="breadcrumb">
      <div class="container">
        <ol class="breadcrumb breadcrumb-alt mb-0">
          <li class="breadcrumb-item">
            <a href="index.html"><i class="cxi-home"></i></a>
          </li>
          <li class="breadcrumb-item">
            <a href="shop-catalog.html">Women</a>
          </li>
          <li class="breadcrumb-item">
            <a href="shop-catalog.html">Clothes</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">Basic hooded sweatshirt in pink</li>
        </ol>
      </div>
    </nav>














    <?php
    while ($D = $DETALLES->fetch_assoc()) {
      $id_producto_w = $D['PK_Producto'];
    

    ?>


      <!-- Page title -->
      <section class="container d-md-flex align-items-center justify-content-between py-3 py-md-4 mb-3">
        <h1 id="nombre_producto" class="mb-2 mb-md-0"><?php echo $D['Nombre_Producto']; ?></h1>
        <span id="sku_producto" class="text-muted"><strong>SKU:</strong> <?php echo $D['SKU']; ?></span>
      </section>

      <!-- Single product -->
      <section class="container py-md-6 py-5 mb-2">
        <div class="row">











                        <div class="col-md-6 mb-md-0 mb-4">
                          <!-- Product gallery -->
                          <div class="cs-carousel cs-gallery cs-product-gallery mx-auto" style="max-width: 600px;">
                            <div class="cs-carousel-inner" id="product-gallery">

                              <!-- Product gallery item -->
                              <a class="cs-gallery-item" href="<?php echo $URL . "app/controladores/Productos/img/" . $D['PORTADA']; ?>" data-sub-html='<h6 class="text-light">Gallery image caption #1</h6>'>
                                <img id="main-image" class="rounded" src="<?php echo $URL . "app/controladores/Productos/img/" . $D['PORTADA']; ?>" alt="Gallery image caption #1">
                                <span class="cs-gallery-caption">Gallery image caption #1</span>
                              </a>

                              <?php
                              $SQL_IMAGENES = "SELECT * FROM imagenes WHERE FK_Producto = '$id_producto_w'";
                              $IMAGENES = $conexion->query($SQL_IMAGENES);
                              $IMAGENES_ = $conexion->query($SQL_IMAGENES);
                              ?>

                              <?php
                              while ($A = $IMAGENES->fetch_assoc()) {
                              ?>
                                <!-- Additional product gallery items -->
                                <a class="cs-gallery-item " href="<?php echo $URL . "app/controladores/Productos/img/" . $A['Foto_Producto']; ?>" data-sub-html='<h6 class="text-light">Gallery image caption #2</h6>'>
                                  <img class="rounded" src="<?php echo $URL . "app/controladores/Productos/img/" . $A['Foto_Producto']; ?>" alt="Gallery image caption #2">
                                  <span class="cs-gallery-caption">Gallery image caption #2</span>
                                </a>
                              <?php
                              }
                              ?>
                            </div>

                            <!-- Product gallery thumbnails -->
                            <div class="cs-thumbnails" id="cs-thumbnails">
                              <button type="button" data-nav="0" class="thumbnail-button">
                                <img src="<?php echo $URL . "app/controladores/Productos/img/" . $D['PORTADA']; ?>" alt="Thumbnail 1">
                              </button>

                              <?php
                              $counter = 1;
                              while ($A = $IMAGENES_->fetch_assoc()) {
                              ?>
                                <button type="button" data-nav="<?php echo $counter; ?>" class="thumbnail-button">
                                  <img src="<?php echo $URL . "app/controladores/Productos/img/" . $A['Foto_Producto']; ?>" alt="Thumbnail <?php echo $counter + 1; ?>">
                                </button>
                              <?php
                                $counter++;
                              }
                              ?>
                            </div>
                          </div>
                        </div>


                        <script>
                          // jQuery or vanilla JavaScript to handle thumbnail click and change the main image
                          document.querySelectorAll('.thumbnail-button').forEach((button, index) => {
                            button.addEventListener('click', function() {
                              // Get the src of the clicked thumbnail image
                              const newSrc = button.querySelector('img').src;

                              // Update the main image src
                              document.getElementById('main-image').src = newSrc;
                            });
                          });
                        </script>



















          <div class="col-md-6 pl-xl-5">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">

              <!-- Price -->
              <div class="d-flex align-items-center mb-sm-0 mb-4">
                <span id = "precio_producto_detalle" class="h3 d-inline-block mb-0 text-danger">S/.<?php echo $D['Precio_Producto']; ?></span>
                <del id="precio_oferta_producto_detalle" class="d-inline-block ml-2 pl-1 font-size-lg text-muted">S/.<?php echo $D['Precio_Oferta']; ?></del>
                <span class="ml-4 p-2 badge badge-danger font-size-base font-weight-bold"><?php echo $D['Nombre_Etiqueta']; ?></span>
              </div>

              <!-- Rating -->
              <div class="text-sm-right">
                <div class="star-rating ml-auto">
                  <i class="sr-star cxi-star-filled active"></i>
                  <i class="sr-star cxi-star-filled active"></i>
                  <i class="sr-star cxi-star-filled active"></i>
                  <i class="sr-star cxi-star-filled active"></i>
                  <i class="sr-star cxi-star"></i>
                </div>
                <span class="font-size-sm text-muted">12 reviews</span>
              </div>
            </div>




            <!-- Ordering form -->
            <form class="row">
                
              <div class="col-12">
                <div class="form-group">
                  <div id="id_color" hidden> <?php echo '  ' . $D['FK_Color']; ?></div>
                  <label id="nombre_color" for="pink"> <span>Color :</span> <?php echo '  ' . $D['Nombre_Color']; ?> </label>

                </div>
              </div>

<div class="col-sm-8 order-sm-1 order-2">
    <div class="form-group">
      <label for="size">Talla</label>
      <select class="form-control custom-select" id="nombre_de_talla_carrito">
        <option>Please select</option>
        <option>L</option>
        <option>M</option>
        <option>S</option>
      </select>
    </div>
  </div>

  <div class="col-sm-4 order-sm-2 order-1">
    <div class="form-group">
      <label for="number-input">Cantidad</label>
      <input type="number" class="form-control" id="number-input" min="1" step="1" value="1">
    </div>
  </div>

  <div class="col-sm-8 order-sm-3 order-3">
    <a id="boton_carrito_detalle_1" class="btn btn-primary" href="producto_detalle.php?id=<?php echo $id_producto_w; ?>">
      <i class="cxi-cart mr-2"></i>
      Add Carrito
    </a>
  </div>

  <div class="col-sm-8 order-sm-4 order-4">
    <a href="#modal-sizing" data-toggle="modal" class="d-inline-block mt-sm-4 mb-sm-0 mb-4 pt-sm-3 font-weight-bold text-decoration-0 text-dark">
      <i class="cxi-hanger mr-2"></i>
      Info Talla
    </a>
  </div>





            </form>



          <?php
        }

          ?>











































          <!-- Terms -->
          <!-- Accordion made of cards -->
          <div class="accordion-alt mb-4" id="productTerms">

            <!-- Card -->
            <div class="card border-bottom">
              <div class="card-header" id="delivery-card">
                <h6 class="accordion-heading">
                  <a href="#delivery" class="collapsed" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="delivery">Delivery
                    <span class="accordion-indicator"></span>
                  </a>
                </h6>
              </div>
              <div class="collapse" id="delivery" aria-labelledby="delivery-card" data-parent="#productTerms">
                <div class="card-body">
                  <p class="font-size-sm">
                    Free standard shipping on orders <strong>over $35</strong> before tax, plus free returns.
                  </p>

                  <!-- Delivery table -->
                  <div class="table-responsive px-md-3">
                    <table class="table mb-0" style="min-width: 450px;">
                      <thead class="font-size-xs text-uppercase text-muted">
                        <tr>
                          <th class="border-0 font-weight-normal">Type</th>
                          <th class="border-0 font-weight-normal">How long</th>
                          <th class="border-0 font-weight-normal">How much</th>
                        </tr>
                      </thead>
                      <tbody class="font-size-sm">
                        <tr>
                          <th class="font-weight-normal">Standard delivery</th>
                          <td>1-4 business days</td>
                          <td>$4.50</td>
                        </tr>
                        <tr>
                          <th class="font-weight-normal">Express delivery</th>
                          <td>1 business day</td>
                          <td>$10.00</td>
                        </tr>
                        <tr>
                          <th class="font-weight-normal">Pick up in store</th>
                          <td>1-3 business days</td>
                          <td>Free</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <!-- Card -->
            <div class="card border-bottom">
              <div class="card-header" id="return-card">
                <h6 class="accordion-heading">
                  <a class="collapsed" href="#return" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="return">Return
                    <span class="accordion-indicator"></span>
                  </a>
                </h6>
              </div>
              <div class="collapse" id="return" aria-labelledby="return-card" data-parent="#productTerms">
                <p class="font-size-sm">
                  You have <strong>60 days</strong> to return the item(s) using any of the following methods:
                </p>
                <ul class="mb-4 pl-3">
                  <li>Free store return</li>
                  <li>Free returns via USPS Dropoff Service</li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Share -->
          <div class="mb-5 text-nowrap">
            <h6 class="d-inline-block align-middle mr-2 mb-0">Share:</h6>
            <a href="#" class="social-btn sb-solid align-middle mr-2" data-toggle="tooltip" title="Facebook">
              <i class="cxi-facebook"></i>
            </a>
            <a href="#" class="social-btn sb-solid align-middle mr-2" data-toggle="tooltip" title="Twitter">
              <i class="cxi-twitter"></i>
            </a>
            <a href="#" class="social-btn sb-solid align-middle" data-toggle="tooltip" title="Pinterest">
              <i class="cxi-pinterest"></i>
            </a>
          </div>

          <!-- Payment -->
          <div class="pb-3 text-nowrap" data-simplebar data-simplebar-auto-hide="false">
            <a href="#" class="d-inline-block mb-3 mr-xl-4 mr-3">
              <img src="../assets/img/ecommerce/shop/single/cards/visa.jpg" alt="Visa" class="border rounded">
            </a>
            <a href="#" class="d-inline-block mb-3 mr-xl-4 mr-3">
              <img src="../assets/img/ecommerce/shop/single/cards/master-card.jpg" alt="Mastercard" class="border rounded">
            </a>
            <a href="#" class="d-inline-block mb-3">
              <img src="../assets/img/ecommerce/shop/single/cards/pay-pal.jpg" alt="PayPal" class="border rounded">
            </a>
          </div>
          </div>
        </div>
      </section>










      <!------------------------------>


      <div class="py-5" style="background-color: #e5e8ed;">
        <section class="container my-lg-2 py-2 py-md-4">
          <div class="row">
            <div class="col-lg-7 col-md-8 mb-md-0 mb-4">
              <h3 class="h5 mb-3">Detalles</h3>
              <p>Id habitant tempor aliquam vulputate enim velit tincidunt sed. Urna sed facilisis nulla feugiat amet venenatis. Id suspendisse ut quis tellus aliquam pellentesque neque, semper donec.</p>
              <ul class="pl-3">
                <li>Marca: Bronco</li>
                <li>Color: gris / rojo / amarillo</li>
                <li>Diseño de corte medio</li>
                <li>Cierre con cordones</li>
                <li>Suela de goma para durabilidad y tracción</li>
                <li>Ranuras moldeadas en la parte delantera para mayor flexibilidad</li>
                <li>Cuello acolchado con nodos internos diseñado para ofrecer comodidad y soporte alrededor del tendón de Aquiles</li>
              </ul>
              <hr class="my-4">
              <h3 class="h5 mb-3">Tela</h3>
              <ul class="pl-3">
                <li>Parte superior: 50% cuero real, 50% textil</li>
                <li>Forro: 100% textil</li>
                <li>Suela: 100% otros materiales</li>
              </ul>
              <hr class="my-4">
              <h3 class="h5 mb-3">Cuidados</h3>
              <ul class="pl-0">
                <li class="media">
                  <img src="../../assets/img/ecommerce/shop/single/care/hand-wash.svg" alt="Icono" class="d-block mr-3">
                  <div class="media-body pl-1">
                    Solo lavar a mano (30°)
                  </div>
                </li>
                <li class="media">
                  <img src="../../assets/img/ecommerce/shop/single/care/no-ironing.svg" alt="Icono" class="d-block mr-3">
                  <div class="media-body pl-1">
                    No planchar
                  </div>
                </li>
                <li class="media">
                  <img src="../../assets/img/ecommerce/shop/single/care/no-bleach.svg" alt="Icono" class="d-block mr-3">
                  <div class="media-body pl-1">
                    No usar blanqueador
                  </div>
                </li>
                <li class="media">
                  <img src="../../assets/img/ecommerce/shop/single/care/no-tumble-dry.svg" alt="Icono" class="d-block mr-3">
                  <div class="media-body pl-1">
                    No secar en secadora
                  </div>
                </li>
              </ul>
            </div>


            

          </div>
        </section>
      </div>









      <!------------------------------------------------------------------>



      <div class="modal fade" id="modal-sizing" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
          <div class="modal-content border-0">
            <div class="modal-header border-0 pb-0 px-md-5 px-4 d-block position-relative">
              <h3 class="modal-title mt-4 mb-0 text-center">Size chart</h3>
              <button type="button" class="close position-absolute" style="top: 1.5rem; right: 1.5rem;" data-dismiss="modal" aria-label="Close">
                <i class="cxi-cross" aria-hidden="true"></i>
              </button>
            </div>
            <div class="modal-body px-md-5 px-4">
              <ul class="nav nav-tabs justify-content-center">
                <li class="nav-item">
                  <a href="#" class="nav-link active">Women</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">Men</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">Kids</a>
                </li>
              </ul>
              <div class="table-responsive border rounded">
                <h4 class="mb-0 py-3 font-size-lg text-center">Footwear</h4>
                <table class="table table-striped mb-0">
                  <tbody>
                    <tr>
                      <th scope="row" class="font-weight-normal">Europe</th>
                      <td>35</td>
                      <td>36</td>
                      <td>37</td>
                      <td>38</td>
                      <td>39</td>
                      <td>40</td>
                      <td>41</td>
                      <td>42</td>
                    </tr>
                    <tr>
                      <th scope="row" class="font-weight-normal">USA</th>
                      <td>5</td>
                      <td>6</td>
                      <td>6.5</td>
                      <td>7.5</td>
                      <td>8</td>
                      <td>9</td>
                      <td>10</td>
                      <td>11</td>
                    </tr>
                    <tr>
                      <th scope="row" class="font-weight-normal">United Kingdom</th>
                      <td>2</td>
                      <td>3</td>
                      <td>4</td>
                      <td>5</td>
                      <td>6</td>
                      <td>7</td>
                      <td>8</td>
                      <td>9</td>
                    </tr>
                    <tr>
                      <th scope="row" class="font-weight-normal">China</th>
                      <td>230/83</td>
                      <td>235/84</td>
                      <td>240/85</td>
                      <td>245/86</td>
                      <td>255/87</td>
                      <td>260/88</td>
                      <td>265/89</td>
                      <td>275/90</td>
                    </tr>
                    <tr>
                      <th scope="row" class="font-weight-normal">Russia</th>
                      <td>35</td>
                      <td>36</td>
                      <td>37</td>
                      <td>38</td>
                      <td>39</td>
                      <td>40</td>
                      <td>41</td>
                      <td>42</td>
                    </tr>
                    <tr>
                      <th scope="row" class="font-weight-normal">Italy</th>
                      <td>35</td>
                      <td>36</td>
                      <td>37</td>
                      <td>38</td>
                      <td>39</td>
                      <td>40</td>
                      <td>41</td>
                      <td>42</td>
                    </tr>
                    <tr>
                      <th scope="row" class="font-weight-normal">Italy</th>
                      <td>230</td>
                      <td>235</td>
                      <td>240</td>
                      <td>245</td>
                      <td>255</td>
                      <td>260</td>
                      <td>265</td>
                      <td>275</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <hr class="my-4 mx-md-n5 mx-n4">
              <div class="d-flex flex-lg-row flex-column align-items-center justify-content-center mb-4">
                <h6 class="mb-lg-0">I want to see size equivalence in: </h6>
                <ul class="nav nav-tabs mb-0 ml-lg-4">
                  <li class="nav-item">
                    <a href="#" class="nav-link active">cm</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">Inches</a>
                  </li>
                </ul>
              </div>
              <div class="table-responsive border rounded mb-4">
                <h4 class="mb-0 py-3 font-size-lg text-center">Equivalence in centimeters</h4>
                <table class="table table-striped mb-0">
                  <tbody>
                    <tr>
                      <th scope="row" class="font-weight-normal">Foot length</th>
                      <td>22.4 cm</td>
                      <td>23 cm</td>
                      <td>23.6 cm</td>
                      <td>24.3 cm</td>
                      <td>24.9 cm</td>
                      <td>25.5 cm</td>
                      <td>26.2 cm</td>
                      <td>26.8 cm</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
  </main>


  <?php
  include('../layout/Parte_002.php');
  ?>




<script>

  const agregar_carrito_detalle = document.querySelector("#boton_carrito_detalle_1");
  agregar_carrito_detalle.addEventListener("click", obtener_datos_detalle, false);

  function obtener_datos_detalle(event) {
    event.preventDefault(); // Evita el comportamiento por defecto del formulario si lo hay

    // Creamos el carrito si no existe
    if (!localStorage.getItem("Carrito")) {
      localStorage.setItem("Carrito", JSON.stringify([]));
    }

    // Obtenemos los datos actuales del carrito
    let CarritoCompras = JSON.parse(localStorage.getItem("Carrito"));

    // Obtenemos los datos del producto
    const nombre = document.querySelector("#nombre_producto").textContent.trim();
    const sku = document.querySelector("#sku_producto").textContent.slice(5).trim();
    const id_color = document.querySelector("#id_color").textContent.trim();
    let name_color = document.querySelector("#nombre_color").textContent.slice(9).trim();
    let precio = document.querySelector("#precio_producto_detalle").textContent.slice(3).trim();
    let precio_oferta = document.querySelector("#precio_oferta_producto_detalle").textContent.slice(3).trim();
    let nombre_talla = document.querySelector("#nombre_de_talla_carrito").options[document.querySelector("#nombre_de_talla_carrito").selectedIndex].textContent;

    // Creamos un objeto con los detalles del producto
    const producto = {
      NOMBRE: nombre,
      SKU: sku,
      COLOR_ID: id_color,
      COLOR_NOMBRE: name_color,
      PRECIO_OFERTA: precio_oferta,
      TALLA: nombre_talla
    };

    // Añadimos el nuevo producto al carrito
    CarritoCompras.push(producto);

    // Guardamos el carrito actualizado en el localStorage
    localStorage.setItem("Carrito", JSON.stringify(CarritoCompras));
    mostrarCarrito();
  }

  
</script>





</body>

</html>