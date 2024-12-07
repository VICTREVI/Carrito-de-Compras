<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TDF</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
</head>
<body class="hidden">
    <div class="centrado" id="onload">
    <div class="lds-default">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
    <header class="header">
        <div class="menu container">
            <a href="#" class="logo">TDF.PE</a> <!--NOMBRE DE LA EMPRESA-->
            <input type="checkbox" id="menu"/>
            <label for="menu">
                <img src="images/menu.png" class="menu-icono" alt="menu">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Productos</a></li>
                    <li><a href="contacto.html">Contacto</a></li>
                    <li><a href="iniciarsesion.html">Iniciar sesion</a></li>
                    <li><a href="registrarte.html">Registrate</a></li>
                    <li><a href="Productos.html">Productos</a></li>
                </ul>
            </nav>
            <div>
                <ul>
                    <li class="submenu">
                        <img id="img-carrito" src="images/car.svg" alt="car">
                        <div id="carrito">
                            <table id="lista-carrito">
                                <thead>
                                    <tr>
                                        <th>Imagen</th>
                                        <th>Nombre</th>
                                        <th>Precio</th>                           
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                            <a href="#" id="vaciar-carrito" class="btn-3">Vaciar Carrito</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="header-content container">
            <div class="header-txt">
                <span>Bienvenido a nuestra tienda virtual</span> 
                <h1>TODO EN FUTBOL PERU</h1>
                <p> 
                    ¡Bienvenido a nuestra tienda virtual de fútbol!
                     Sumérgete en el mundo del fútbol y descubre una 
                     experiencia única. Estamos aquí para que te prepares 
                     para cada juego con estilo. Explora nuestra colección y 
                     haz que tu pasión por el fútbol se refleje en cada compra.
                      ¡Empecemos a ganar juntos en el campo y fuera de él!
                </p>
                
            </div>
            <div class="header-img">
                <img src="images/bag.png" alt="">
            </div>          
        </div>
    </header>


<div class="encontraras-content container">
    <div class="encontraras-txt">
        <h1>En nuestra tienda encontraras</h1>
        <p> 
            En nuestra tienda virtual de fútbol, te ofrecemos 
            una selección cuidadosamente curada de productos de 
            la más alta calidad. Desde los equipos más reconocidos 
            hasta los accesorios imprescindibles, cada artículo que
             encontrarás aquí ha sido elegido por su excelencia en diseño, 
             durabilidad y rendimiento. Estamos comprometidos en brindarte
              solo lo mejor, para que puedas confiar en que tu equipamiento 
              te llevará al éxito en cada partido. Descubre la diferencia que 
              la calidad hace en tu juego y equípate con lo mejor en nuestra 
              tienda virtual. ¡Prepárate para elevar tu experiencia futbolística 
              al siguiente nivel!
        </p>
    </div>
</div>
   
    <section class="oferts container">
        
        <div class="ofert-1 b1">
            <div class="ofert-txt">
                <h3>CAMISETAS</h3>
            </div>
            <div class="ofert-img">
                <img src="images/s1.png" alt="">
            </div>  
        </div>

        <div class="ofert-1 b2">
            <div class="ofert-txt">
                <h3>ZAPATILLAS</h3>             
            </div>
            <div class="ofert-img">
                <img src="images/s2.png" alt="">
            </div>  
        </div>

        <div class="ofert-1 b3">
            <div class="ofert-txt">
                <h3>ACCESORIOS</h3>
            </div>
            <div class="ofert-img">
                <img src="images/s3.png" alt="">
            </div>  
        </div>
    
    </section>

   <main class="products container">

    <h2>Catalogo</h2>

    <div class="box-container" id="lista-1">

        <div class="box">   
            <img src="images/pr1.png" alt="">
            <div class="product-txt">
                <h3>Jersey Alterno Barcelona temporada 20-21 </h3>
                    <p>Calidad premiun</p>
                    <p class="precio">S/ 250.00</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="1">
                        Agregar al carrito
                    </a>
            </div>
        </div>

        <div class="box">
            <img src="images/pr2.png" alt="producto-1">
            <div class="product-txt">
                <h3>Jersey Local Peru temporada 20-24</h3>
                    <p>Calidad premiun</p>
                    <p class="precio">S/ 150.00.</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="2">
                        Agregar al carrito
                    </a>
            </div>
        </div>

        <div class="box">       
            <img src="images/pr3.png" alt="producto-1">     
            <div class="product-txt">
                <h3>Nike Superfly 9 Elite Mercurial Dream Speed</h3>
                <p>Zapatillas Fútbol Hombre</p>
                <p class="precio">S/ 600.00</p>
                <a href="#" class="agregar-carrito btn-3" data-id="3">
                    Agregar al carrito
                </a>
            </div>
        </div>
        <div class="box">
            <img src="images/pr4.png" alt="producto-1">
            <div class="product-txt">
                <h3>Adidas Chimpunes X Crazyfast </h3>
                    <p>Zapatillas Fútbol Hombre</p>
                    <p class="precio">S/ 359.00</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="4">
                        Agregar al carrito
                    </a>
            </div>
        </div>
        <div class="box">
            <img src="images/pr5.png" alt="producto-1">
            <div class="product-txt">
                <h3>Adidas Chimpunes X Crazyfast Messi </h3>
                    <p>Zapatillas Fútbol Hombre</p>
                    <p class="precio">S/ 359.00</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="5">
                        Agregar al carrito
                    </a>
            </div>
        </div>
        <div class="box">
            <img src="images/pr6.png" alt="producto-1">
            <div class="product-txt">
                <h3>Adidas Chimpunes X Crazyfast Messi </h3>
                    <p>Zapatillas Fútbol Hombre</p>
                    <p class="precio">S/ 359.00</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="6">
                        Agregar al carrito
                    </a>
            </div>
        </div>
        <div class="box">
            <img src="images/pr7.png" alt="producto-1">
            <div class="product-txt">
                <h3>Adidas Chimpunes X Crazyfast Messi </h3>
                    <p>Zapatillas Fútbol Hombre</p>
                    <p class="precio">S/ 359.00</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="7">
                        Agregar al carrito
                    </a>
            </div>
        </div>
        <div class="box">          
            <img src="images/pr8.png" alt="producto-1">
            <div class="product-txt">
                <h3>Adidas Chimpunes X Crazyfast Messi </h3>
                    <p>Zapatillas Fútbol Hombre</p>
                    <p class="precio">S/ 359.00</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="8">
                        Agregar al carrito
                    </a>
            </div>
        </div>
        <div class="box">
            <img src="images/pr9.png" alt="producto-1">
            <div class="product-txt">
                <h3>Adidas Chimpunes X Crazyfast Messi </h3>
                    <p>Zapatillas Fútbol Hombre</p>
                    <p class="precio">S/ 359.00</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="9">
                        Agregar al carrito
                    </a>
            </div>
        </div>
        <div class="box">
            <img src="images/pr10.png" alt="producto-1">
            <div class="product-txt">
                <h3>Adidas Chimpunes X Crazyfast Messi </h3>
                    <p>Zapatillas Fútbol Hombre</p>
                    <p class="precio">S/ 359.00</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="10">
                        Agregar al carrito
                    </a>
            </div>
        </div>
        <div class="box">
            <img src="images/pr11.png" alt="producto-1">
            <div class="product-txt">
                <h3>Adidas Chimpunes X Crazyfast Messi </h3>
                    <p>Zapatillas Fútbol Hombre</p>
                    <p class="precio">S/ 359.00</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="11">
                        Agregar al carrito
                    </a>
            </div>
        </div>
        <div class="box">
            <img src="images/pr12.png" alt="producto-1">
            <div class="product-txt">
                <h3>Adidas Chimpunes X Crazyfast Messi </h3>
                    <p>Zapatillas Fútbol Hombre</p>
                    <p class="precio">S/ 359.00</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="12">
                        Agregar al carrito
                    </a>
            </div>
        </div>
      
    </div>
    
    <div class="btn-2" id="load-more"> Cargar Mas</div>
</main>

<section class="testimonial container">
    <span>Testimonios</span>
    <h2>Que opinan los nuestros clientes</h2>
    <div class="testimonial-contente">
        <div class="testimonial-1">
            <h4>PIERO VENTURA</h4>
            <p>La entrega rapida y segura, lo recomiendo
                a todo publico en general
            </p>
        </div>
    </div>
</section>

<footer class="footer">
    <div class="footer-content container">
        <div class="link">
            <h3>Enlaces de Navegación</h3>
            <ul>
                <li><a href="/acerca-de">Acerca de</a></li>
                <li><a href="/contacto">Contacto</a></li>
                <li><a href="">Política de Privacidad</a></li>
                <li><a href="/libro de reclamos">Libro de Reclamos</a></li>
            </ul>
        </div>

        <div class="link">
            <h3>Redes Sociales</h3>
            <ul>
                <li><a href="https://twitter.com/misitioweb">Twitter</a></li>
                <li><a href="https://instagram.com/misitioweb">Instagram</a></li>
                <li><a href="https://facebook.com/misitioweb">Facebook</a></li>
                <li><a href="https://linkedin.com/misitioweb">LinkedIn</a></li>
            </ul>
        </div>

            <div class="link">
            <h3>Información Legal</h3>
            <ul>
                <li><a href="Términos de Usos">Términos de Usos</a></li>
                <li><a href="Cookies">Política de Cookies</a></li>
            </ul>
        </div>
    </div>
</footer>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="script.js"></script>
</body>
</html> 