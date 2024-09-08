
    <!-- Vendor scripts: js libraries and plugins-->
    <script src="<?php echo $URL_;?>assets/js/smooth-scroll.polyfills.min.js"></script>
    <script src="<?php echo $URL_;?>assets/js/nouislider.min.js"></script>
    <script src="<?php echo $URL_;?>assets/vendor/jquery/dist/jquery.slim.min.js"></script>
    <script src="<?php echo $URL_;?>assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo $URL_;?>assets/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="<?php echo $URL_;?>assets/vendor/tiny-slider/dist/min/tiny-slider.js"></script>

    <!-- Main theme script-->
    <script src="<?php echo $URL_;?>assets/js/theme.min.js"></script>
    <script src="<?php echo $URL_;?>assets/js/simplebar.min.js"></script>

       <!-- Footer -->
       <footer class="cs-footer pt-sm-5 pt-4 bg-dark">
      <div class="container pt-3">
        <div class="row pb-sm-2">
          <div class="col-6 col-sm-3 col-lg-2 mb-4">
            <h3 class="h6 mb-2 pb-1 text-uppercase text-light">Help</h3>
            <ul class="nav nav-light flex-column">
              <li class="nav-item mb-2">
                <a href="#" class="nav-link mr-lg-0 mr-sm-4 p-0 font-weight-normal">Delivery &amp; returns</a>
              </li>
              <li class="nav-item mb-2">
                <a href="contacts.html" class="nav-link mr-lg-0 mr-sm-4 p-0 font-weight-normal">FAQ</a>
              </li>
              <li class="nav-item mb-2">
                <a href="order-tracking.html" class="nav-link mr-lg-0 mr-sm-4 p-0 font-weight-normal">Track order</a>
              </li>
              <li class="nav-item mb-2">
                <a href="blog.html" class="nav-link mr-lg-0 mr-sm-4 p-0 font-weight-normal">Blog</a>
              </li>
              <li class="nav-item mb-2">
                <a href="contacts.html" class="nav-link mr-lg-0 mr-sm-4 p-0 font-weight-normal">Contacts</a>
              </li>
            </ul>
          </div>
          <div class="col-6 col-sm-3 col-lg-2 col-xl-3 mb-4">
            <h3 class="h6 mb-2 pb-1 text-uppercase text-light pl-xl-6">Shop</h3>
            <ul class="nav nav-light flex-column pl-xl-6">
              <li class="nav-item mb-2">
                <a href="#" class="nav-link mr-lg-0 mr-sm-4 p-0 font-weight-normal">New arrivals</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#" class="nav-link mr-lg-0 mr-sm-4 p-0 font-weight-normal">Trending now</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#" class="nav-link mr-lg-0 mr-sm-4 p-0 font-weight-normal">Sales</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#" class="nav-link mr-lg-0 mr-sm-4 p-0 font-weight-normal">Brands</a>
              </li>
            </ul>
          </div>
          <div class="col-sm-6 col-lg-3 pb-2 pb-lg-0 mb-4">
            <h3 class="h6 mb-2 pb-1 text-uppercase text-light">Get in Touch</h3>
            <ul class="nav nav-light flex-column pb-3">
              <li class="nav-item text-nowrap mb-2">
                <span class="text-light mr-1">Call:</span>
                <a href="tel:4055550128" class="nav-link d-inline-block mr-lg-0 mr-sm-4 p-0 font-weight-normal">(405) 555-0128</a>
              </li>
              <li class="nav-item text-nowrap mb-2">
                <span class="text-light mr-1">Email:</span>
                <a href="mailto:support@example.coms" class="nav-link d-inline-block mr-lg-0 mr-sm-4 p-0 font-weight-normal">support@example.com</a>
              </li>
            </ul>
            <a href="#" class="social-btn sb-solid sb-light mr-2">
              <i class="cxi-facebook"></i>
            </a>
            <a href="#" class="social-btn sb-solid sb-light mr-2">
              <i class="cxi-instagram"></i>
            </a>
            <a href="#" class="social-btn sb-solid sb-light mr-2">
              <i class="cxi-twitter"></i>
            </a>
            <a href="#" class="social-btn sb-solid sb-light mr-2">
              <i class="cxi-youtube"></i>
            </a>
            <a href="#" class="social-btn sb-solid sb-light">
              <i class="cxi-pinterest"></i>
            </a>
          </div>
          <div class="col-lg-4 col-xl-3 mb-4">
            <h3 class="h6 mb-3 pb-1 text-uppercase text-light">Download our App</h3>
            <div class="d-flex flex-wrap flex-sm-nowrap">
              <a href="#" class="btn-market btn-apple mb-3 mr-3" role="button">
                <span class="btn-market-subtitle">Download on the</span>
                <span class="btn-market-title">App Store</span>
              </a>
              <a href="#" class="btn-market btn-google mb-3" role="button">
                <span class="btn-market-subtitle">Download on the</span>
                <span class="btn-market-title">Google Play</span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="border-top border-light">
        <div class="container py-4">
          <div class="font-size-xs text-light">
            <span class="font-size-sm">&copy; </span>
            All rights reserved. Made with 
            <i class="cxi-heart mt-n1 mx-1 font-size-base text-primary align-middle"></i>
            <a href="https://createx.studio/" class="text-light" target="_blank" rel="noopener noreferrer">by Createx Studio</a>
          </div>
        </div>
      </div>
    </footer>


    <!-- Back to top button-->
    <a class="btn-scroll-top" href="#top" data-scroll data-fixed-element>
      <span class="btn-scroll-top-tooltip text-muted font-size-sm mr-2">Top</span>
      <i class="btn-scroll-top-icon cxi-angle-up"></i>
    </a>

    














    <script>





//llamamos ala funcion mostrar carrito la cual carga los datos 
mostrarCarrito();


function mostrarCarrito() {


              // Creamos el carrito
            if (!localStorage.getItem("Carrito")) {
              localStorage.setItem("Carrito", JSON.stringify([]));
            }

            // obtenemos sus datos
            let CarritoCompras = JSON.parse(localStorage.getItem("Carrito"));

            //contamos sus datos
            let CantidadProductos = CarritoCompras.length;

            //cambio de numeros de cantidad de carritos

                  let cant_modal = document.querySelector("#cant_prod_cart_modal");
                  let cant_nav = document.querySelector("#cant_prod_cart_nav");
                  cant_modal.textContent = "Tu Carrito "+"(" + CantidadProductos + ")" ;
                  cant_nav.textContent =  CantidadProductos;



                  
                  const cartItems = document.querySelector("#cart-items"); // Contenedor para los productos
                  cartItems.innerHTML = ""; // Limpiar el contenido del carrito antes de llenarlo

                  CarritoCompras.forEach((producto, index) => {
                    // Calcular subtotal
                    let SKU = producto.SKU;

                    // Agregar cada producto al carrito
                    cartItems.innerHTML += `
                    <div class="media p-4 border-bottom mx-n4">
                      <a href="shop-single.html" style="min-width: 80px;">
                        <img src="${producto.SKU}" width="80" alt="Product thumb">
                      </a>
                      <div class="media-body pl-3">
                        <div class="d-flex justify-content-between">
                          <div class="pr-2">
                            <h3 class="font-size-sm mb-3">
                              <a href="shop-single.html" class="nav-link font-weight-bold">${producto.SKU}</a>
                            </h3>
                            <ul class="list-unstyled font-size-xs mt-n2 mb-2">
                              <li class="mb-0"><span class="text-muted">Color:</span> ${producto.COLOR_NOMBRE}</li>
                              <li class="mb-0"><span class="text-muted">Talla:</span> ${producto.TALLA}</li>
                            </ul>
                            <div class="d-flex align-items-center">
                              <input type="number" class="form-control form-control-sm bg-light mr-3" style="width: 4.5rem;" value="${producto.SKU}" onchange="actualizarCantidad(${index}, this.value)">
                              <div class="text-nowrap"><strong class="text-danger">S/.${producto.PRECIO_OFERTA}</strong></div>
                            </div>
                            <button class="btn btn-link btn-sm text-decoration-none px-0 pb-0" onclick="removeItem(${index})">
                              Eliminar
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  `;
                  });




    }












/*

// Seleccionamos el botón para agregar al carrito
const btnAdd = document.querySelector("#boton_carrito");

// Verificamos si el botón fue encontrado
console.log(btnAdd);

// Agregamos un evento 'click' al botón para obtener los datos cuando se hace clic
btnAdd.addEventListener("click", obtener_datos, false);



// Obtenemos el carrito actual del localStorage
let carrito = JSON.parse(localStorage.getItem("Carrito"));
console.log("Carrito inicial:", carrito);

// contador
let contar_productos = carrito.length; // Iniciar con la cantidad actual de productos en el carrito

// Función para obtener los datos del producto


function obtener_datos(event) {
  event.preventDefault(); // Evita el comportamiento por defecto del formulario si lo hay

  // Obtenemos los datos del producto
  const nombre = document.querySelector("#nombre_producto").textContent.trim();
  const sku = document.querySelector("#sku_producto").textContent.slice(5).trim();
  const id_color = document.querySelector("#id_color").textContent.trim();
  let name_color = document.querySelector("#nombre_color").textContent.slice(9).trim();
  let precio = document.querySelector("#precio_producto_detalle").textContent.slice(3).trim();
  let precio_oferta = document.querySelector("#precio_oferta_producto_detalle").textContent.slice(3).trim();
  let nombre_talla = document.querySelector("#nombre_de_talla_carrito").options[document.querySelector("#nombre_de_talla_carrito").selectedIndex].textContent;

  // Mostramos los datos en la consola para asegurarnos de que se capturan correctamente
  console.log("Nombre:", nombre);
  console.log("SKU:", sku);
  console.log("ID_del_color:", id_color);
  console.log("Nombre_del_color:", name_color);
  console.log("Precio:", precio);
  console.log("Precio_Oferta:", precio_oferta);
  console.log("Nombre_de_talla:", nombre_talla);

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
  carrito.push(producto);
  contar_productos++;
  console.log("Cantidad de productos en el carrito:", contar_productos);

  // Guardamos el carrito actualizado en el localStorage
  localStorage.setItem("Carrito", JSON.stringify(carrito));

  // Mostrar el carrito actualizado
  mostrarCarrito();
}




 


   
 




    
    // Función para listar todas las personas
    // Función para abrir el carrito
    document.querySelector("#boton_carrito_header").addEventListener("click", () => {
      mostrarCarrito();

    });


    function mostrarCarrito() {
      const carrito = JSON.parse(localStorage.getItem("Carrito")); // Obtener productos del localStorage
      const cartItems = document.querySelector("#cart-items"); // Contenedor para los productos



      cartItems.innerHTML = ""; // Limpiar el contenido del carrito antes de llenarlo

      carrito.forEach((producto, index) => {
        // Calcular subtotal
        let SKU = producto.SKU;

        // Agregar cada producto al carrito
        cartItems.innerHTML += `
        <div class="media p-4 border-bottom mx-n4">
          <a href="shop-single.html" style="min-width: 80px;">
            <img src="${producto.SKU}" width="80" alt="Product thumb">
          </a>
          <div class="media-body pl-3">
            <div class="d-flex justify-content-between">
              <div class="pr-2">
                <h3 class="font-size-sm mb-3">
                  <a href="shop-single.html" class="nav-link font-weight-bold">${producto.SKU}</a>
                </h3>
                <ul class="list-unstyled font-size-xs mt-n2 mb-2">
                  <li class="mb-0"><span class="text-muted">Color:</span> ${producto.COLOR_NOMBRE}</li>
                  <li class="mb-0"><span class="text-muted">Talla:</span> ${producto.TALLA}</li>
                </ul>
                <div class="d-flex align-items-center">
                  <input type="number" class="form-control form-control-sm bg-light mr-3" style="width: 4.5rem;" value="${producto.SKU}" onchange="actualizarCantidad(${index}, this.value)">
                  <div class="text-nowrap"><strong class="text-danger">S/.${producto.PRECIO_OFERTA}</strong></div>
                </div>
                <button class="btn btn-link btn-sm text-decoration-none px-0 pb-0" onclick="removeItem(${index})">
                  Eliminar
                </button>
              </div>
            </div>
          </div>
        </div>
      `;
      });

      let cant_prod_cart_modal = document.querySelector("#cant_prod_cart_modal");
      let cant_prod_cart_nav = document.querySelector("#cant_prod_cart_nav");
      cant_prod_cart_modal.textContent = "Tu Carrito "+"(" + contar_productos + ")" ;
      cant_prod_cart_nav.textContent =  contar_productos;
      console.log($cant_prod_cart_modal);
    
      

    }*/


    
    </script>

