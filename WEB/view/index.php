<?php
include('../../config/conex.php');
include('../layout/Parte_001.php');
include('../app/get_datos_index.php');
//include ('../app/controllers/Get_Nuevos_Productos/New_Productos.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Mi primer Ecomer</title>
  <!-- Viewport-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
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








    <!-- Hero slider -->
    <section class="cs-carousel cs-controls-onhover">
      <div class="cs-carousel-inner" data-carousel-options='{
          "mode": "gallery",
          "navContainer": "#pager",
          "responsive": {
            "0": { "controls": false },
            "991": { "controls": true }
          }
        }'>

        <!-- Slide 1 -->
        <div class="bg-size-cover py-xl-6" style="background-image: url(../assets/img/ecommerce/home/hero-slider/01.jpg);">
          <div class="container pt-5 pb-6">
            <div class="row pb-lg-6">
              <div class="col-lg-6 offset-lg-1 offset-xl-0 pb-4 pb-md-6">
                <h3 class="font-size-lg text-uppercase cs-from-left cs-delay-1">New In</h3>
                <h2 class="display-2 mb-lg-5 pb-3 cs-from-left">Menswear 2021</h2>
                <div class="mb-4 cs-scale-up cs-delay-2">
                  <a href="shop-catalog.html" class="btn btn-outline-primary btn-lg">Shop the menswear</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="bg-size-cover py-xl-6" style="background-image: url(../assets/img/ecommerce/home/hero-slider/02.jpg);">
          <div class="container pt-5 pb-6">
            <div class="row pb-lg-6">
              <div class="col-lg-6 offset-lg-1 offset-xl-0 pb-4 pb-md-6">
                <h3 class="font-size-lg text-uppercase cs-from-top cs-delay-1">New Collection</h3>
                <h2 class="display-2 mb-lg-5 pb-3 cs-scale-down">Fall-Winter 2021</h2>
                <div class="mb-4 cs-scale-down cs-delay-2">
                  <a href="shop-catalog.html" class="btn btn-outline-primary btn-lg">Shop the collection</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="bg-size-cover py-xl-6" style="background-image: url(../../assets/img/ecommerce/home/hero-slider/03.jpg);">
          <div class="container pt-5 pb-6">
            <div class="row pb-lg-6">
              <div class="col-lg-6 offset-lg-1 offset-xl-0 pb-4 pb-md-6">
                <h3 class="font-size-lg text-uppercase cs-from-left cs-delay-1">Limited Edition</h3>
                <h2 class="display-2 mb-lg-5 pb-3 cs-from-left">Leather Issue</h2>
                <div class="mb-4 cs-scale-up cs-delay-2">
                  <a href="shop-catalog.html" class="btn btn-outline-primary btn-lg">Shop the collection</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 4 -->
        <div class="bg-size-cover py-xl-6" style="background-image: url(../assets/img/ecommerce/home/hero-slider/04.jpg);">
          <div class="container pt-5 pb-6">
            <div class="row pb-lg-6">
              <div class="col-lg-6 offset-lg-1 offset-xl-0 pb-4 pb-md-6">
                <h3 class="font-size-lg text-uppercase cs-from-top cs-delay-1">Hottest Prices</h3>
                <h2 class="display-2 mb-lg-5 pb-3 cs-scale-down">Kidswear Sales</h2>
                <div class="mb-4 cs-scale-down cs-delay-2">
                  <a href="shop-catalog.html" class="btn btn-outline-primary btn-lg">Shop sale now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Pager -->
      <div class="container position-relative">
        <div class="row mt-lg-n5">
          <div class="col-lg-7 col-md-8 col-sm-10 offset-lg-1 offset-xl-0">
            <div class="position-relative">
              <div id="pager" class="cs-pager cs-pager-inverse mb-xl-5 pb-5 pb-md-6">
                <button type="button" data-nav="0">01</button>
                <button type="button" data-nav="1">02</button>
                <button type="button" data-nav="2">03</button>
                <button type="button" data-nav="3">04</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>




    <!-- Fin Hero slider -->

    <style>
      .cs-image-inner {
        width: 100%;
        height: 400px;
        /* Ajusta la altura según lo necesites */
        overflow: hidden;
      }

      .cs-image-inner img {
        width: 100%;
        height: 100%;
        object-fit: cover;
      }
    </style>





    <!-- Top categories -->
    <section class="container pt-5 pt-lg-0">
      <div class="cs-carousel cs-nav-outside">
        <div class="cs-carousel-inner" data-carousel-options='{
            "controls": false,
            "responsive": {
              "0": {
                "gutter": 20
              },
              "400": {
                "items": 2,
                "gutter": 20
              },
              "520": {
                "gutter": 30
              },
              "768": {
                "items": 3,
                "gutter": 30
              }
            }
          }'>


          <?php
          while ($categorias = $DATOS_CATEGORIAS->fetch_assoc()) {
          ?>
            <!-- Categoría -->
            <a href="productos.php" class="d-block cs-image-scale cs-heading-highlight text-center">
              <div class="cs-image-inner mb-2 rounded">
                <img src="../assets/img/ecommerce/home/categories/<?php echo $categorias['Foto']; ?>" alt="<?php echo $categorias['Descripcion'] ?>">
              </div>
              <h3 class="h4 mb-1"><?php echo $categorias['Nombre_Categoria']; ?></h3>
            </a>
          <?php
          }
          ?>



        </div>
      </div>
    </section>

    <!-- Fin de Top categories -->






    <!-- Mobile app CTA -->
    <section class="bg-dark">
      <div class="container-fluid p-0">
        <div class="row no-gutters">
          <div class="col-12" style="overflow: hidden;">
            <img src="../assets/img/ecommerce/banner/yape2.jpg" class="d-block w-100 h-100" alt="Illustration" style="object-fit: cover;">
          </div>
        </div>
      </div>
    </section>
    <!-- Fin Mobile app CTA -->






    <!-- Services -->
    <section class="container pt-5 pb-2 pb-sm-5 py-md-5 py-lg-6">
      <div class="row py-3">
        <div class="col-sm-6 col-md-3 text-center mb-md-0 mb-4 pb-md-0 pb-3">
          <img class="mb-4" src="../assets/img/ecommerce/home/services/delivery.svg" width="48" alt="Worldwide Shipping">
          <h5 class="h5 mb-2">Fast Worldwide Shipping</h5>
          <p class="mb-0 text-muted">Get free shipping over $250</p>
        </div>
        <span class="divider-vertical d-sm-block d-none"></span>
        <div class="col-sm-6 col-md-3 text-center mb-md-0 mb-4 pb-md-0 pb-3">
          <img class="mb-4" src="../assets/img/ecommerce/home/services/support.svg" width="48" alt="Customer Support">
          <h5 class="h5 mb-2">24/7 Customer Support</h5>
          <p class="mb-0 text-muted">Friendly 24/7 customer support</p>
        </div>
        <span class="divider-vertical d-sm-block d-none"></span>
        <div class="col-sm-6 col-md-3 text-center mb-md-0 mb-4 pb-md-0 pb-3">
          <img class="mb-4" src="../assets/img/ecommerce/home/services/guarantee.svg" width="48" alt="Customer Support">
          <h5 class="h5 mb-2">Money Back Guarantee</h5>
          <p class="mb-0 text-muted">We return money within 30 days</p>
        </div>
        <span class="divider-vertical d-sm-block d-none"></span>
        <div class="col-sm-6 col-md-3 text-center mb-md-0 mb-4 pb-md-0 pb-3">
          <img class="mb-4" src="../assets/img/ecommerce/home/services/payment.svg" width="48" alt="Customer Support">
          <h5 class="h5 mb-2">Secure Online Payment</h5>
          <p class="mb-0 text-muted">Accept all major credit cards</p>
        </div>
      </div>
    </section>
    <!-- fin Services -->





    <!-- Brands -->
    <section class="container pb-5 pt-lg-2 mb-3 pb-lg-6">
      <div class="cs-carousel">
        <div class="cs-carousel-inner" data-carousel-options='{
            "nav": false,
            "controls": false,
            "autoplay": true,
            "autoplayTimeout": 3000,
            "responsive": {
              "0": {
                "items": 2
              },
              "576": {
                "items": 3
              },
              "768": {
                "items": 4
              },
              "992": {
                "items": 5
              },
              "1200": {
                "items": 6
              }
            }
          }'>
          <div class="px-3 text-center">
            <a href="#" class="cs-swap-image">
              <img src="../assets/img/ecommerce/home/brands/vans.svg" class="cs-swap-to" width="120" alt="Brand logo hover">
              <img src="../assets/img/ecommerce/home/brands/vans-g.svg" class="cs-swap-from" width="120" alt="Brand logo">
            </a>
          </div>
          <div class="px-3 text-center">
            <a href="#" class="cs-swap-image">
              <img src="../assets/img/ecommerce/home/brands/diesel.svg" class="cs-swap-to" width="120" alt="Brand logo hover">
              <img src="../assets/img/ecommerce/home/brands/diesel-g.svg" class="cs-swap-from" width="120" alt="Brand logo">
            </a>
          </div>
          <div class="px-3 text-center">
            <a href="#" class="cs-swap-image">
              <img src="../assets/img/ecommerce/home/brands/under-armour.svg" class="cs-swap-to" width="120" alt="Brand logo hover">
              <img src="../assets/img/ecommerce/home/brands/under-armour-g.svg" class="cs-swap-from" width="120" alt="Brand logo">
            </a>
          </div>
          <div class="px-3 text-center">
            <a href="#" class="cs-swap-image">
              <img src="../assets/img/ecommerce/home/brands/columbia.svg" class="cs-swap-to" width="120" alt="Brand logo hover">
              <img src="../assets/img/ecommerce/home/brands/columbia-g.svg" class="cs-swap-from" width="120" alt="Brand logo">
            </a>
          </div>
          <div class="px-3 text-center">
            <a href="#" class="cs-swap-image">
              <img src="../assets/img/ecommerce/home/brands/levis.svg" class="cs-swap-to" width="120" alt="Brand logo hover">
              <img src="../assets/img/ecommerce/home/brands/levis-g.svg" class="cs-swap-from" width="120" alt="Brand logo">
            </a>
          </div>
          <div class="px-3 text-center">
            <a href="#" class="cs-swap-image">
              <img src="../assets/img/ecommerce/home/brands/mango.svg" class="cs-swap-to" width="120" alt="Brand logo hover">
              <img src="../assets/img/ecommerce/home/brands/mango-g.svg" class="cs-swap-from" width="120" alt="Brand logo">
            </a>
          </div>
        </div>
      </div>
    </section>



    <!-- Subscription CTA -->
    <section class="bg-secondary py-5">
      <div class="container pt-2 pt-md-3 pb-3">
        <div class="row align-items-center">
          <form class="col-md-6 col-xl-4 needs-validation" novalidate>
            <h2 class="h1 mb-4">Subscribete</h2>
            <p class="text-muted font-size-lg pb-3 mb-4">Subscribe para recibir promociones exclusivas.</p>

            <div class="form-group pt-4">
              <label for="s-email">Email</label>
              <div class="input-group input-group-lg">
                <input type="email" id="s-email" class="form-control" placeholder="Escribe tu email" required>
                <div class="input-group-append">
                  <button type="submit" class="btn btn-primary">Subscribe</button>
                </div>
              </div>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" id="s-agree" class="custom-control-input">
              <label for="s-agree" class="custom-control-label">Confirmo para recibir notificaciones</label>
            </div>
          </form>


          <div class="col-md-6 col-xl-7 d-none d-md-block">
            <div class="ml-auto" style="max-width: 459px;">
              <img src="../assets/img/ecommerce/subscribe-illustration.png" class="d-block" alt="Illustration">
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php
  include('../layout/Parte_002.php');
  ?>




</body>

</html>