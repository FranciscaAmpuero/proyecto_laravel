<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Biblioteca HF</title>
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
                <a class="nav-link" href="{{ url("/")}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/about">Libros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url("/index") }}">Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <br>
      <div class="container  align-items-center">
        <div class="card bg-ligth textw-white text-center">
    <div class="text-muted text-center"><h1>Bienvenido a la biblioteca virtual H&F</h1></div>
    <br><br>





    <div class="form-floating">
        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
          <option selected>Open this select menu</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
        <label for="floatingSelect">Works with selects</label>
      </div>


 
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