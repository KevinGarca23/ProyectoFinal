<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">


    <a class="navbar-brand" href="/ProyectoFinal/web/index.php">Proyecto Final
    <img src="/ProyectoFinal1/view/img/Sena.png" alt="" width="30" height="24">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item active">
          <a class="nav-link" href="../web/index.php">Home</a>
        </li>


        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Usuario
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="<?php echo getUrl("Usuario","Usuario","getInsert");  ?>">Registrar</a></li>
            <li><a class="dropdown-item" href="<?php echo getUrl("Usuario","Usuario","consult");  ?>">Consultar</a></li>
          </ul>
        </li>


        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Medio de Pago
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="<?php echo getUrl("MedioPago","MedioPago","getInsert");  ?>">Registrar</a></li>
            <li><a class="dropdown-item" href="<?php echo getUrl("MedioPago","MedioPago","consult");  ?>">Consultar</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cliente
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="<?php echo getUrl("Cliente","Cliente","getInsert");  ?>">Registrar</a></li>
            <li><a class="dropdown-item" href="<?php echo getUrl("Cliente","Cliente","consult");  ?>">Consultar</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            EstadoVenta
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="<?php echo getUrl("EstadoVenta","EstadoVenta","getInsert") ?>">Registrar</a></li>
            <li><a class="dropdown-item" href="<?php echo getUrl("EstadoVenta","EstadoVenta","consult") ?>">Consultar</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Productos
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="<?php echo getUrl("Productos","Productos","getInsert") ?>">Registrar</a></li>
            <li><a class="dropdown-item" href="<?php echo getUrl("Productos","Productos","consult") ?>">Consultar</a></li>
            <li><a class="dropdown-item" href="<?php echo getUrl("Productos","Productos","catalogo") ?>">Catalogo</a></li>
          </ul>
        </li>

       

        <li class="nav-item active">
          <a class="nav-link" href="<?php echo getUrl("Carrito","Carrito","verCarrito") ?>"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-cart" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00b341" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <circle cx="6" cy="19" r="2" />
  <circle cx="17" cy="19" r="2" />
  <path d="M17 17h-11v-14h-2" />
  <path d="M6 5l14 1l-1 7h-13" />
</svg></a>
        </li>

      </ul>
    </div>
  </div>
</nav>
 