<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
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
            <a class="nav-link" href="{{ url('./')}}">Home</a>
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
<br><br><h1>Inicio sesión</h1><br><br>

    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input type="text" name="email" class="form-control" id="email" placeholder="Correo@correo.cl"">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="pass" name="pass" placeholder="*********">
        </div>
      </div>
      <button type="button" class="btn btn-outline-info center">Ingresar</button>
<br>
      <div class="mb-3 row">
        
    </div>
      <br><br><br><br><br><br><br><br><br>


      <footer class="footer">
        <section class="footer__container container">   
            <form class="footer__form" action="https://formspree.io/f/mknkkrkj" method="POST">
                <p class="footer__newsletter">Suscribete a la newsletter</p>
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
    
            <p class="footer__copyright">Derechos reservados &copy; Francisca Ampuero & Hanz Caroca</p>
        </section>
    </footer>
    </div></div>
    
        
                    
                    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
      </body>
      
    </html>