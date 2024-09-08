
    // Seleccionamos el botón para agregar al carrito
    const btnAdd = document.querySelector("#boton_carrito");

    // Verificamos si el botón fue encontrado
    console.log(btnAdd);

    // Agregamos un evento 'click' al botón para obtener los datos cuando se hace clic
    btnAdd.addEventListener("click", obtener_datos, false);

    // Verificamos si existe un carrito en el localStorage, si no, lo inicializamos
    if (!localStorage.getItem("Carrito")) {
      localStorage.setItem("Carrito", JSON.stringify([]));
    }

    // contador 
    let contar_productos = 0;

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
      //me falta la talla y la cantidad y el eliminar

      // Creamos un objeto con los detalles del producto
      const producto = {
        NOMBRE: nombre,
        SKU: sku,
        COLOR_ID: id_color,
        COLOR_NOMBRE: name_color,
        PRECIO_OFERTA: precio_oferta,
        TALLA : nombre_talla
      };

      // Obtenemos el carrito actual del localStorage
      const carrito = JSON.parse(localStorage.getItem("Carrito"));

      // Añadimos el nuevo producto al carrito
      carrito.push(producto);
      contar_productos++;
      console.log(contar_productos);

      // Guardamos el carrito actualizado en el localStorage
      localStorage.setItem("Carrito", JSON.stringify(carrito));



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
      console.log("hola");
      

    }


    
   
