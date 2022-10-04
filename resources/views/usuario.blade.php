<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>formulario ingreso usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">


</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <img src="./img/logo3.png" alt="" width="100"> 
    <div class="container">
      <a class="navbar-brand" href="{{ url("/")}}">Biblioteca Virtual</a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('./welcome')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">Cerrar sesión</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
  <br>
  <div class="d-flex flex-column justify-content-center align-items-center">
    <div class="card bg-ligth textw-white text-center">
        <h1>Formulario para usuarios nuevos</h1>
        <br><br>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Nombre</span>
            <input type="text" class="form-control" placeholder="" aria-label="nombre" aria-describedby="basic-addon1">
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Apellido Paterno</span>
            <input type="text" class="form-control" placeholder="" aria-label="nombre" aria-describedby="basic-addon1">
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Apellido Materno</span>
            <input type="text" class="form-control" placeholder="" aria-label="nombre" aria-describedby="basic-addon1">
          </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Correo electronico</span>
        <input type="text" class="form-control" placeholder="correo@correo.cl" aria-label="Username" aria-describedby="basic-addon1">
      </div>

      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Región</span>
        <input type="text" class="form-control" placeholder="Metropolitana" aria-label="Username" aria-describedby="basic-addon1">
      </div>
      
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Comuna</span>
        <input type="text" class="form-control" placeholder="Independencia" aria-label="Username" aria-describedby="basic-addon1">
      </div>
      
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Direccion</span>
        <input type="text" class="form-control" placeholder="Pasaje #123 casa B" aria-label="Username" aria-describedby="basic-addon1">
      </div>       
      <div class="input-group">
        <span class="input-group-text">Informacion adicional</span>
        <textarea class="form-control" aria-label="With textarea"></textarea>
      </div>
      <div class="container align-items-left" >
     
        <span class="form-check">¿Desea ser socio?</span>
       
      <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
        <label class="form-check-label" for="flexRadioDefault1">
          Sí
        </label>
      </div>
      <div class="form-check">
        
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
      
        <label class="form-check-label" for="flexRadioDefault2">
          No
        </label>
      </div>
<br><br><br>
      <div class="container">
        <button type="button" class="btn btn-outline-info center">Registrar</button>

      </div>

      
<br><br>

<footer class="footer">
    <section class="footer__container container">   
        <form class="footer__form" action="https://formspree.io/f/mknkkrkj" method="POST">
            <h2 class="footer__newsletter">Suscribete a la newsletter</h2>
            <div class="footer__inputs">
                <input type="email" placeholder="Email:" class="footer__input" name="_replyto">
                <input type="submit" value="Registrate" class="footer__submit">
            </div>
        </form>
    </section>

    <section class="footer__copy container">
        <div class="footer__social">
            <a href="#" class="footer__icons"><img src="./img/twitter.jpg" class="footer__img" width="30"></a>
            <a href="#" class="footer__icons"><img src="./img/youtube-logo.jpg" class="footer__img" width="30"></a>
            <a href="#" class="footer__icons"><img src="./img/descarga.jpg" class="footer__img" width="30"></a>
        </div>

        <h3 class="footer__copyright">Derechos reservados &copy; Francisca Ampuero & Hanz Caroca</h3>
    </section>
</footer>
</div></div>

    
                
                
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
  
</html>