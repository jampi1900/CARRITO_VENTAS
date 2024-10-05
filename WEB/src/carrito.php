<?php
include('../../ADMIN/config/conex.php');
include('../layout/Parte_001.php');
include('../../ADMIN/app/controladores/Categoria/index.php');
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
        <li class="breadcrumb-item active" aria-current="page">Checkout</li>
      </ol>
    </div>
  </nav>


  <!-- Page content -->
  <section class="container pt-3 pt-md-4 pb-3 pb-sm-4 pb-lg-5 mb-4">
    <div class="row">

      <!-- Checkout content -->
      <div class="col-lg-8 pr-lg-6">
        <div class="d-flex align-items-center justify-content-between pb-2 mb-4">
          <h1 class="mb-0">Checkout</h1>
          <a href="producto.php"><strong>Seguir Comprando</strong></a>
        </div>

        

        <hr class="border-top-0 border-bottom pt-2 mb-4">











        <!-- Order review -->
        <h2 class="h4 mb-4">1. Order Review</h2>


        <div class="bg-secondary rounded mb-5">


          <div id="mi_carrito_contenedor_numero_php">




          </div>




          <div class="px-3 px-sm-4 py-4 text-right">
            <span id="subtotal_carrito_php"class="text-muted">Subtotal:<strong class="text-dark font-size-lg ml-2">$198.65</strong></span>
          </div>

        </div>




        <script>
          carrito_php();



  function carrito_php() {
    // Create the cart if it doesn't exist
    if (!localStorage.getItem("Carrito")) {
        localStorage.setItem("Carrito", JSON.stringify([]));
    }

    // Get cart data
    let CarritoCompras = JSON.parse(localStorage.getItem("Carrito"));
    const urlBase = '<?php echo $URL; ?>app/controladores/Productos/img/';

    const carrito_php = document.querySelector("#mi_carrito_contenedor_numero_php"); // Container for the products
    carrito_php.innerHTML = ""; // Clear the container before adding new content

    CarritoCompras.forEach((producto, index) => {
  
        // Add each product to the cart
        carrito_php.innerHTML += `
            <!-- Item -->
            <div class="media px-2 px-sm-4 py-4 border-bottom">
                <a href="shop-single.html" style="min-width: 80px;">
                     <img src="${urlBase}${producto.IMAGEN}" width="80" alt="Product thumb">
                </a>
                <div class="media-body w-100 pl-3">
                    <div class="d-sm-flex">
                        <div class="pr-sm-3 w-100" style="max-width: 16rem;">
                            <h3 class="font-size-sm mb-3">
                                <a href="shop-single.html" class="nav-link font-weight-bold">${producto.NOMBRE}</a>
                            </h3>
                            <ul class="list-unstyled font-size-xs mt-n2 mb-2">
                                <li class="mb-0"><span class="text-muted">Color:</span> ${producto.COLOR_NOMBRE}</li>
                                <li class="mb-0"><span class="text-muted">Size:</span> ${producto.TALLA}</li>
                            </ul>
                        </div>

                        <div class="d-flex pr-sm-3">
                            <input type="number" class="form-control form-control-sm bg-light mr-3" style="width: 4.5rem;" value="${producto.CANTIDAD_PRODUCTO}">
                            <div class="text-nowrap pt-2">
                                <strong class="text-danger">$${producto.SUBTOTAL}</strong><br>
                                
                            </div>
                        </div>

                        <div class="d-flex align-items-center flex-sm-column text-sm-center ml-sm-auto pt-3 pt-sm-0">
                            <button class="btn btn-outline-primary btn-sm mr-2 mr-sm-0" data-index="${index}" onclick="eliminar_carrito_src(${index})">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        `;
    });
}

function eliminar_carrito_src(index) {
    let CarritoCompras = JSON.parse(localStorage.getItem("Carrito"));
    CarritoCompras.splice(index, 1); // Remove the item from the array
    localStorage.setItem("Carrito", JSON.stringify(CarritoCompras)); // Update the localStorage
    carrito_php(); // Refresh the cart display
}










        </script>

    <style>

      .error {
          color: red;
          font-size: 12px;
      }

    </style>








        <!-- Adresses -->
        <h2 class="h4 mb-4">2. Direccion de Envio &amp; </h2>
        <div class="row pb-3">
          <div class="col-sm-6 form-group">
              <label for="nombre">Nombres</label>
              <input type="text" class="form-control form-control-lg" id="nombre" name="nombre" placeholder="Nombres">
              <span id="nombreError" class="error"></span>
          </div>
          <div class="col-sm-6 form-group">
              <label for="apellido">Apellidos</label>
              <input type="text" class="form-control form-control-lg" id="apellido" name="apellido" placeholder="Apellidos">
              <span id="apellidoError" class="error"></span>
          </div>


            <div class="col-sm-6 form-group">
              <label for="ch-email">Email</label>
              <input type="email" class="form-control form-control-lg" id="ch-email" placeholder="Tu dirección de correo">
              <span id="emailError" class="error"></span>
          </div>
          <div class="col-sm-6 form-group">
              <label for="ch-phone">Teléfono</label>
              <input type="text" class="form-control form-control-lg" id="ch-phone" placeholder="Tu número de teléfono">
              <span id="telefonoError" class="error"></span>
          </div>


          <div class="col-sm-6 form-group">
            <label for="dni">DNI</label>
            <input type="text" class="form-control form-control-lg" id="dni" placeholder="Tu DNI">
            <span id="dniError" class="error"></span>
          </div>

          <div class="col-sm-6 form-group">
          <label for="ch-department">Departamentos</label>
            <select id="ch-department" class="custom-select custom-select-lg" onchange="loadProvinces()">
                <option value="" disabled selected>Elige departamento</option>
                <!-- Aquí se llenarán los departamentos -->
            </select>
            <span id="departamentoError" class="error"></span>
          </div>

          <div class="col-sm-6 form-group">

            <label for="ch-province">Provincias</label>
            <select id="ch-province" class="custom-select custom-select-lg" onchange="loadDistricts()">
                <option value="" disabled selected>Elige provincia</option>
                <!-- Aquí se llenarán las provincias -->
            </select>
            <span id="provinciaError" class="error"></span>
           
          </div>

          <div class="col-sm-6 form-group">
            <label for="ch-district">Distritos</label>
            <select id="ch-district" class="custom-select custom-select-lg">
                <option value="" disabled selected>Elige distrito</option>
                <!-- Aquí se llenarán los distritos -->
            </select>
            <span id="distritoError" class="error"></span>
          </div>


            <script>
              function loadDepartments() {
    fetch('DP1.php')
        .then(response => response.json())
        .then(data => {
            const departmentSelect = document.getElementById('ch-department');
            data.forEach(department => {
                const option = document.createElement('option');
                option.value = department.id;
                option.textContent = department.name;
                departmentSelect.appendChild(option);
            });
        });
}

function loadProvinces() {
    const departmentId = document.getElementById('ch-department').value;
    fetch(`DP3.php?department_id=${departmentId}`)
        .then(response => response.json())
        .then(data => {
            const provinceSelect = document.getElementById('ch-province');
            provinceSelect.innerHTML = '<option value="" disabled selected>Elige provincia</option>'; // Reset provinces
            data.forEach(province => {
                const option = document.createElement('option');
                option.value = province.id;
                option.textContent = province.name;
                provinceSelect.appendChild(option);
            });
        });
}

function loadDistricts() {
    const provinceId = document.getElementById('ch-province').value;
    fetch(`DP2.php?province_id=${provinceId}`)
        .then(response => response.json())
        .then(data => {
            const districtSelect = document.getElementById('ch-district');
            districtSelect.innerHTML = '<option value="" disabled selected>Elige distrito</option>'; // Reset districts
            data.forEach(district => {
                const option = document.createElement('option');
                option.value = district.id;
                option.textContent = district.name;
                districtSelect.appendChild(option);
            });
        });
}

// Cargar departamentos al inicio
document.addEventListener('DOMContentLoaded', loadDepartments);

            </script>



         <div class="col-sm-6 form-group">
            <label for="ch-address">Dirección</label>
            <input type="text" class="form-control form-control-lg" id="ch-address" placeholder="Calle, apartamento...">
            <span id="direccionError" class="error"></span>
        </div>
        <div class="col-sm-6 form-group">
            <label for="ch-zip">Código ZIP</label>
            <input type="text" class="form-control form-control-lg" id="ch-zip" placeholder="Código ZIP">
            <span id="zipError" class="error"></span>
        </div>


          <div class="col-12 form-group">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="same-details" checked>
              <label for="same-details" class="custom-control-label">Los detalles envío son corectos.</label>
            </div>
          </div>
        </div>






        <hr class="border-top-0 border-bottom pt-4 mb-4">





        <!-- Additional info -->
        <h2 class="h4 mb-4">3. Adicionar Information (optional)</h2>
        <div class="form-group">
          <label for="ch-notes">Notas de Ordenes</label>
          <textarea id="ch-notes" class="form-control form-control-lg" rows="5" placeholder="Notes about your order, e.g. special noted for delivery."></textarea>
        </div>
      </div>



      <!-- Order totals (sticky sidebar) -->
      <!-- For more sticky sidebar options visit https://abouolia.github.io/sticky-sidebar/#options -->
      <aside class="col-lg-4">
        <div class="sidebar-sticky" data-sidebar-sticky-options='{
              "topSpacing": 120,
              "minWidth": 991
            }'>
          <div class="sidebar-sticky-inner">
            <div class="form-group">
              <label for="promo-code">Apply a promo code</label>
              <div class="input-group input-group-lg">
                <input type="text" id="promo-code" class="form-control" placeholder="Enter promo code">
                <div class="input-group-append">
                  <button type="button" class="btn btn-primary">&nbsp;&nbsp;Apply&nbsp;&nbsp;</button>
                </div>
              </div>
            </div>
            <div class="bg-secondary rounded mb-4">
              <div class="border-bottom p-4">
                <h2 class="h4 mb-0">Total de Pedidos</h2>
              </div>
              <ul class="list-unstyled border-bottom mb-0 p-4">
                <li class="d-flex justify-content-between mb-2">
                  <span class="font-weight-bold">Subtotal:</span>
                  <span id="subtotal_carrito_aset" class="font-weight-bold">$198.65</span>
                </li>
                <li class="d-flex justify-content-between mb-2">
                  <span>Gastos de Envio:</span>
                  <span>$25.00</span>
                </li>

                <li class="d-flex justify-content-between mb-2">
                  <span>Descuento:</span>
                  <span>&mdash;</span>
                </li>



              </ul>
              <div class="d-flex justify-content-between p-4">
                <span class="h5 mb-0">Total del Pedido:</span>
                <span id = "total_pedido_carrito_php" class="h5 mb-0">$230.00</span>
              </div>
            </div>
            <button type="button" id = "completarOrden" class="btn btn-primary btn-lg btn-block">Complete order</button>
          </div>
        </div>
      </aside>



    </div>
  </section>

</main>

<?php
include('../layout/Parte_002.php');
?>


<script>

document.getElementById('completarOrden').addEventListener('click', function() {
    // Limpiar errores previos
    const campos = ['nombreError', 'apellidoError', 'emailError', 'telefonoError', 'dniError', 'departamentoError', 'provinciaError', 'distritoError', 'direccionError', 'zipError'];
    campos.forEach(campo => document.getElementById(campo).innerText = '');

    // Obtener valores de los campos
    const nombre = document.getElementById('nombre').value.trim();
    const apellido = document.getElementById('apellido').value.trim();
    const email = document.getElementById('ch-email').value.trim();
    const telefono = document.getElementById('ch-phone').value.trim();
    const dni = document.getElementById('dni').value.trim();
    const departamento = document.getElementById('ch-department').value;
    const provincia = document.getElementById('ch-province').value;
    const distrito = document.getElementById('ch-district').value;
    const direccion = document.getElementById('ch-address').value.trim();
    const zip = document.getElementById('ch-zip').value.trim();
    const notas = document.getElementById('ch-notes').value.trim();
    const detallesCorrectos = document.getElementById('same-details').checked;

    // Bandera de validación
    let valido = true;

    // Expresión regular para solo letras
    var soloLetras = /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/;

    // Validaciones de campo 'nombre'
    if (!nombre) {
        document.getElementById('nombreError').innerText = 'El nombre es obligatorio.';
        valido = false;
    } else if (nombre.length < 2 || nombre.length > 50) {
        document.getElementById('nombreError').innerText = 'El nombre debe tener entre 2 y 50 caracteres.';
        valido = false;
    } else if (!soloLetras.test(nombre)) {
        document.getElementById('nombreError').innerText = 'El nombre solo puede contener letras.';
        valido = false;
    }

    // Validaciones de campo 'apellido'
    if (!apellido) {
        document.getElementById('apellidoError').innerText = 'El apellido es obligatorio.';
        valido = false;
    } else if (apellido.length < 2 || apellido.length > 50) {
        document.getElementById('apellidoError').innerText = 'El apellido debe tener entre 2 y 50 caracteres.';
        valido = false;
    } else if (!soloLetras.test(apellido)) {
        document.getElementById('apellidoError').innerText = 'El apellido solo puede contener letras.';
        valido = false;
    }

    // Validación de email
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!email || !emailRegex.test(email)) {
        document.getElementById('emailError').innerText = 'Debes ingresar un email válido.';
        valido = false;
    }

    // Validación de teléfono
    const telefonoRegex = /^[0-9]{9}$/;
    if (!telefono || !telefonoRegex.test(telefono)) {
        document.getElementById('telefonoError').innerText = 'El teléfono debe tener 9 dígitos.';
        valido = false;
    }

    // Validación de DNI (8 dígitos)
    const dniRegex = /^[0-9]{8}$/;
    if (!dni || !dniRegex.test(dni)) {
        document.getElementById('dniError').innerText = 'El DNI debe tener 8 dígitos.';
        valido = false;
    }

    // Validación de selección de departamento, provincia y distrito
    if (!departamento) {
        document.getElementById('departamentoError').innerText = 'Debes seleccionar un departamento.';
        valido = false;
    }
    if (!provincia) {
        document.getElementById('provinciaError').innerText = 'Debes seleccionar una provincia.';
        valido = false;
    }
    if (!distrito) {
        document.getElementById('distritoError').innerText = 'Debes seleccionar un distrito.';
        valido = false;
    }

    // Validación de dirección y código ZIP
    if (!direccion) {
        document.getElementById('direccionError').innerText = 'La dirección es obligatoria.';
        valido = false;
    }
    if (!zip || zip.length < 5) {
        document.getElementById('zipError').innerText = 'El código ZIP debe tener al menos 5 caracteres.';
        valido = false;
    }

    if (valido) {
        // Obtener los datos del carrito
        let CarritoCompras = JSON.parse(localStorage.getItem("Carrito"));
        let carritoString = '';

        // Verificar si el carrito tiene productos
        if (CarritoCompras && CarritoCompras.length > 0) {
            // Convertir el carrito a una cadena JSON para pasarlo por la URL
            carritoString = encodeURIComponent(JSON.stringify(CarritoCompras));

            // Mostrar cada producto por separado en consola
            CarritoCompras.forEach((producto, index) => {
                console.log(`Producto ${index + 1}:`);
                console.log("ID:", producto.ID);
                console.log("PK_DET_TALLA:", producto.PK_DET_TALLA);
                console.log("Nombre:", producto.NOMBRE);
                console.log("SKU:", producto.SKU);
                console.log("Talla:", producto.TALLA);
                console.log("Cantidad:", producto.CANTIDAD_PRODUCTO);
                console.log("-----------------------");
            });
        } else {
            console.log("El carrito está vacío.");
        }

        // Enviar datos a get.php o a la base de datos
        window.location.href = 'get.php?nombre=' + encodeURIComponent(nombre) +
            '&apellido=' + encodeURIComponent(apellido) +
            '&email=' + encodeURIComponent(email) +
            '&telefono=' + encodeURIComponent(telefono) +
            '&dni=' + encodeURIComponent(dni) +
            '&departamento=' + encodeURIComponent(departamento) +
            '&provincia=' + encodeURIComponent(provincia) +
            '&distrito=' + encodeURIComponent(distrito) +
            '&direccion=' + encodeURIComponent(direccion) +
            '&notas=' + encodeURIComponent(notas) +
            '&detallesCorrectos=' + encodeURIComponent(detallesCorrectos) +
            '&zip=' + encodeURIComponent(zip) +
            '&carrito=' + carritoString; // Agregar datos del carrito en formato JSON
    }
});

</script>