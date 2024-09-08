

<?php
include('../../ADMIN/config/conex.php');
include('../layout/Parte_001.php');

//include ('../app/controllers/Get_Nuevos_Productos/New_Productos.php');

?>
  
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
              <a href="#">Account</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">My profile</li>
          </ol>
        </div>
      </nav>


      <!-- Page container -->
      <section class="container pt-3 pt-lg-4 pb-5 pb-lg-6">
        <div class="row pb-2 pb-lg-0">

          <!-- Account menu (sticky sidebar) -->
       
<?php

include('../layout/Parte_003.php');


?>

          <!-- Content -->
          <div class="col-lg-8 ml-auto">
            <div class="d-flex align-items-center justify-content-between mb-4 pb-sm-2">
              <h1 class="h2 mb-0">My orders</h1>
              <div class="form-inline">
                <label for="sort-orders" class="d-none d-sm-block font-weight-bold mr-2 pr-1">Sort orders</label>
                <select id="sort-orders" class="custom-select">
                  <option>All</option>
                  <option>Delivered</option>
                  <option>In Progress</option>
                  <option>Delayed</option>
                  <option>Canceled</option>
                </select>
              </div>
            </div>

            <!-- Orders accordion -->
            <div class="accordion-alt" id="orders">

              <!-- Order -->
              

              <!-- Order -->
              <div class="card border-bottom">
                <div class="card-header accordion-heading py-1">
                  <a href="#order-2" class="d-flex flex-wrap justify-content-between py-3" data-toggle="collapse" aria-expanded="false">
                    <span class="pr-2"># 50HV46580V84</span>
                    <span class="font-size-sm text-muted text-nowrap px-2">
                      <i class="cxi-clock font-size-base align-middle mt-n1 mr-1"></i>
                      Nov 27, 2020
                    </span>
                    <span class="badge badge-info">In progress</span>
                    <span class="text-dark pl-1">$87.40</span>
                  </a>
                </div>
                
              </div>

             
            </div>

            <!-- Load more btn -->
            <div class="text-center pt-4 pb-sm-2 mt-3">
              <button class="btn btn-lg btn-link load-more-btn p-0 text-decoration-none" type="button">
                <i class="cxi-arrow-convert mt-n1 mr-3 align-middle"></i>
                Load more
              </button>
            </div>
          </div>
        </div>
      </section>
    </main>

    <?php
  include('../layout/Parte_002.php');
  ?>
