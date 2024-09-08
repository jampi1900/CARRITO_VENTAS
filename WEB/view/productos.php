<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Mi primer</title>

  <!-- Viewport-->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php
  include('../../config/conex.php');
  include('../layout/Parte_001.php');
  include('../app/get_datos_index.php');
  //include ('../app/controllers/Get_Nuevos_Productos/New_Productos.php');


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

    <!----------------------->





    <!-- Breadcrumb -->
    <nav class="bg-secondary mb-3" aria-label="breadcrumb">
      <div class="container">
        <ol class="breadcrumb breadcrumb-alt mb-0">
          <li class="breadcrumb-item">
            <a href="index.html"><i class="cxi-home"></i></a>
          </li>
          <li class="breadcrumb-item">
            <a href="#">Account</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">My profile</li>
        </ol>
      </div>
    </nav>


    <!-- Page container -->
    <section class="container pt-3 pb-5 pb-md-6 mb-2 mb-lg-0">


      <!-- Toolbar + Pagination -->
      <div class="row mb-4 pb-2">
        <div class="col-md-3 pr-lg-4 mb-3 mb-md-0">

          <!-- Show / hide filters on Desktop -->
          <div class="d-none d-lg-block">
            <h3><i class="cxi-filter-1"></i> Filtros:</h3>
          </div>

          <!-- Show / hide filters (off-canvas) on Mobile -->
          <button type="button" class="btn btn-primary btn-block mt-0 d-lg-none" data-toggle="offcanvas" data-target="filtersOffcanvas">
            <i class="cxi-filter-2 mr-1"></i>
            Show filters
          </button>
        </div>

        <div class="col-md-9">
          <div class="d-flex align-items-center">
            <div class="form-inline flex-nowrap mr-3 mr-xl-5">
              <label for="sorting-top" class="font-weight-bold text-nowrap mr-2 pr-1 d-none d-lg-block">Sort by</label>
              <select id="sorting-top" class="custom-select">
                <option>Populariadad de compras</option>
                <option>Precio</option>

              </select>
            </div>
            <div class="form-inline flex-nowrap d-none d-sm-flex mr-3 mr-xl-5">
              <label for="pager-top" class="font-weight-bold text-nowrap mr-2 pr-1 d-none d-lg-block">Show</label>
              <select id="pager-top" class="custom-select">
                <option>12</option>
                <option>24</option>
                <option>48</option>
                <option>72</option>
                <option>96</option>
              </select>
              <span class="font-size-sm text-muted text-nowrap ml-2 d-none d-lg-block">products per page</span>
            </div>
            <nav class="ml-auto" aria-label="Pagination">
              <ul class="pagination mb-0">
                <li class="page-item d-sm-none">
                  <span class="page-link page-link-static">1 / 5</span>
                </li>
                <li class="page-item active d-none d-sm-block" aria-current="page">
                  <span class="page-link">1
                    <span class="sr-only">(current)</span>
                  </span>
                </li>
                <li class="page-item d-none d-sm-block">
                  <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item d-none d-sm-block">
                  <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item d-none d-sm-block">
                  <a class="page-link" href="#">4</a>
                </li>
                <li class="page-item d-none d-sm-block">
                  <a class="page-link" href="#">5</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">
                    <i class="cxi-arrow-right"></i>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>

      </div>













      <div class="row flex-lg-nowrap">













        <!-- Filters (sidebar) -->
        <div id="filtersSidebar" class="col-lg-3 pr-lg-4">
          <div id="filtersOffcanvas" class="cs-offcanvas cs-offcanvas-collapse">
            <div class="cs-offcanvas-cap align-items-center border-bottom mb-3">
              <h2 class="h5 mb-0">Shop filters</h2>
              <button class="close mr-n1" type="button" data-dismiss="offcanvas" aria-label="Close">
                <span class="h2 font-weight-normal mt-n1 mb-0" aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="cs-offcanvas-body accordion-alt pb-4">

              <!-- Category --------------------------------------------------->
              <div class="card border-bottom">
                <div class="card-header pt-0 pb-3" id="category-panel">
                  <h6 class="accordion-heading">
                    <a href="#category" role="button" data-toggle="collapse" aria-expanded="true" aria-controls="category">
                      Categorias
                      <span class="accordion-indicator"></span>
                    </a>
                  </h6>
                </div>



                <div class="collapse show" id="category" aria-labelledby="category-panel">


                  <div class="cs-widget-data-list cs-filter">
                    <div class="input-group-overlay mb-3">
                      <input type="text" class="cs-filter-search form-control form-control-sm appended-form-control" placeholder="Search the clothes">
                      <div class="input-group-append-overlay">
                        <span class="input-group-text">
                          <i class="cxi-search font-size-sm"></i>
                        </span>
                      </div>
                    </div>


                    <ul class="cs-filter-list list-unstyled pr-3" style="height: 12rem;" data-simplebar data-simplebar-auto-hide="false">

                      <?php
                      while ($categorias = $DATOS_CATEGORIAS->fetch_assoc()) {
                      ?>


                        <li class="cs-filter-item">
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="swimwear">
                            <label for="swimwear" class="custom-control-label">
                              <span class="cs-filter-item-text"> <?php echo $categorias['Nombre_Categoria']; ?> </span>
                              <span class="pl-1 text-muted">(18)</span>
                            </label>
                          </div>
                        </li>

                      <?php
                      }
                      ?>




                    </ul>
                  </div>



                </div>
              </div>





              <!-- Filtro de Price -->
              <div class="card border-bottom">
                <div class="card-header py-3" id="price-panel">
                  <h6 class="accordion-heading">
                    <a href="#price" role="button" data-toggle="collapse" aria-expanded="true" aria-controls="price">
                      Price
                      <span class="accordion-indicator"></span>
                    </a>
                  </h6>
                </div>
                <div class="collapse show" id="price" aria-labelledby="price-panel">
                  <div class="cs-widget pl-1 pr-3 pb-4 mt-n3">
                    <div class="cs-range-slider" data-start-min="250" data-start-max="680" data-min="0" data-max="1000" data-step="1">
                      <div class="cs-range-slider-ui"></div>
                      <div class="d-flex align-items-center mt-3">
                        <div class="w-50">
                          <div class="form-group position-relative mb-0">
                            <input type="number" class="form-control form-control-sm cs-range-slider-value-min">
                          </div>
                        </div>
                        <div class="mx-1 px-2 font-size-xs">—</div>
                        <div class="w-50">
                          <div class="form-group position-relative mb-0">
                            <input type="number" class="form-control form-control-sm cs-range-slider-value-max">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


            </div>
          </div>
        </div>


        <!-- Product grid -->
        <div class="col">
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-3" data-filters-columns>




            <?php
            while ($PRO = $DATOS_PRODUCTOS->fetch_assoc()) {

              $ID_PRODUCTO = $PRO['PK_Det_Color'];
            ?>




              <!-- Item -->
              <div class="col pb-sm-2 mb-grid-gutter">
                <div class="card card-product mx-auto">
                  <div class="card-product-img">
                    <a href="shop-single.html" class="card-img-top">
                      <img src=" <?php echo $URL . "ADMIN/app/Productos/img/" . $PRO['PORTADA']; ?> " alt="Product image">

                    </a>


                    <?php
                    if ($PRO['Precio_Oferta'] > 0) {

                    ?>
                      <div class="card-product-widgets-top">
                        <span class="badge product-badge badge-danger">Oferta</span>
                      </div>

                    <?php
                    } else {
                    ?>


                    <?php

                    }

                    ?>





                    <div class="card-product-widgets-top">
                      <div class="star-rating ml-auto">
                        <i class="sr-star cxi-star-filled active"></i>
                        <i class="sr-star cxi-star-filled active"></i>
                        <i class="sr-star cxi-star-filled active"></i>
                        <i class="sr-star cxi-star-filled active"></i>
                        <i class="sr-star cxi-star-filled active"></i>
                      </div>
                    </div>






                  </div>


                  <div class="card-body pb-2">
                    <h3 class="card-product-title text-truncate mb-2">
                      <a href="shop-single.html" class="nav-link"> <?php echo $PRO['Nombre_Producto']; ?> </a>
                    </h3>




                    <?php
                    if ($PRO['Precio_Oferta'] > 0) {

                    ?>

                      <div class="d-flex align-items-center">
                        <span class="h5 d-inline-block mb-0" style="text-decoration: line-through;">S/.<?php echo $PRO['Precio']; ?></span>
                      </div>
                      <div class="d-flex align-items-center">
                        <span class="h5 d-inline-block mb-0" style="color: darkred; font-size: 1.2em;">S/. <?php echo $PRO['Precio_Oferta']; ?></span>
                      </div>


                    <?php
                    } else {
                    ?>

                      <div class="d-flex align-items-center">
                        <span class="h5 d-inline-block mb-0">S/.<?php echo $PRO['Precio']; ?></span>
                      </div>




                    <?php

                    }

                    ?>









                  </div>




                  <div class="card-footer">
                    <div class="d-flex align-items-center mb-2 pb-1">


                    </div>


                    <a href="producto-detalle.php?id=<?php echo $ID_PRODUCTO; ?>">
                      <button type="button" class="btn btn-primary btn-block">
                        <i class="cxi-cart align-middle mt-n1 mr-2"></i>
                        Comprar
                      </button>
                    </a>



                  </div>
                </div>
              </div>




            <?php
            }
            ?>

          </div>
























          <!-- Toolbar + Pagination -->
          <div class="d-flex align-items-center pt-md-4">
            <div class="form-inline flex-nowrap mr-3 mr-xl-5 pt-1">
              <label for="sorting-bottom" class="font-weight-bold text-nowrap mr-2 pr-1 d-none d-md-block">Sort by</label>
              <select id="sorting-bottom" class="custom-select">
                <option>Popularity</option>
                <option>Low - Hight Price</option>
                <option>High - Low Price</option>
                <option>Average Rating</option>
                <option>A - Z Order</option>
                <option>Z - A Order</option>
              </select>
            </div>
            <div class="form-inline flex-nowrap d-none d-sm-flex mr-3 mr-xl-5 pt-1">
              <label for="pager-bottom" class="font-weight-bold text-nowrap mr-2 pr-1 d-none d-md-block">Show</label>
              <select id="pager-bottom" class="custom-select">
                <option>12</option>
                <option>24</option>
                <option>48</option>
                <option>72</option>
                <option>96</option>
              </select>
              <span class="font-size-sm text-muted text-nowrap ml-2 d-none d-md-block">products per page</span>
            </div>
            <nav class="pt-1 ml-auto" aria-label="Pagination">
              <ul class="pagination mb-0">
                <li class="page-item d-sm-none">
                  <span class="page-link page-link-static">1 / 5</span>
                </li>
                <li class="page-item active d-none d-sm-block" aria-current="page">
                  <span class="page-link">1
                    <span class="sr-only">(current)</span>
                  </span>
                </li>
                <li class="page-item d-none d-sm-block">
                  <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item d-none d-sm-block">
                  <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item d-none d-sm-block">
                  <a class="page-link" href="#">4</a>
                </li>
                <li class="page-item d-none d-sm-block">
                  <a class="page-link" href="#">5</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">
                    <i class="cxi-arrow-right"></i>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </section>
  </main>



  <?php include('../layout/Parte_002.php'); ?>

</body>

</html>