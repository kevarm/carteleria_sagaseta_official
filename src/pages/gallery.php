<?php
define('BASE_URL', '/Proyectos/carteleria_sagaseta_official');
?>
<!--Comentario de Kevin en su parte del proyecto-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cartelería - Galería</title>
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>/src/styles/base/normalize.css">
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>/src/styles/base/base.css">
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>/src/styles/header.css">
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>/src/styles/footer.css">
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>/src/styles/participate.css">
</head>

<body>

  <div>
    <section>
      Espacio para el alert
    </section>

    <header class="header_container">
      <a href="<?php echo BASE_URL; ?>/index.php" class="logo_sagaseta_container"><img src="<?php echo BASE_URL; ?>/src/img/logo_sagaseta.svg" alt="logo" class="logo_sagaseta"></a>
      <h1 class="header_title">Concurso día de Canarias</h1>
    </header>

    <div class="nav">
      <a href="<?php echo BASE_URL; ?>/src/pages/participate.php">Participar</a>
      <a href="<?php echo BASE_URL; ?>/src/pages/results.php">Resultados</a>
      <a href="<?php echo BASE_URL; ?>/src/pages/gallery.php">Galería de carteles</a>
    </div>
  </div>

  <main class="grid-container">
        <!-- Sección de carteles -->
        <ul class="carteles">
            <li class="cartel">
                <img class="img" src="img/cartel2.jpg"></img>
                <div class="cartel-data"><p>Título</p></div>
                <button><a href="votar.html">Votar</a></button>
            </li>
            <li class="cartel">
                <img class="img" src="img/cartel2.jpg"></img>
                <div class="cartel-data"><p>Título</p></div>
                <button><a href="votar.html">Votar</a></button>
            </li>
            <li class="cartel">
                <img class="img" src="img/cartel2.jpg"></img>
                <div class="cartel-data"><p>Título</p></div>
                <button><a href="votar.html">Votar</a></button>
            </li>
            <li class="cartel">
                <img class="img" src="img/cartel2.jpg"></img>
                <div class="cartel-data"><p>Título</p></div>
                <button><a href="votar.html">Votar</a></button>
            </li>
            <li class="cartel">
                <img class="img" src="img/cartel2.jpg"></img>
                <div class="cartel-data"><p>Título</p></div>
                <button><a href="votar.html">Votar</a></button>
            </li>
            <li class="cartel">
                <img class="img" src="img/cartel2.jpg"></img>
                <div class="cartel-data"><p>Título</p></div>
                <button><a href="votar.html">Votar</a></button>
            </li>
        </ul>
    </main>

  <footer class="footer_container">
    <div class="nav">
      <a href="<?php echo BASE_URL; ?>/src/pages/participate.php">Participar</a>
      <a href="<?php echo BASE_URL; ?>/src/pages/results.php">Resultados</a>
      <a href="<?php echo BASE_URL; ?>/src/pages/gallery.php">Galería de carteles</a>
    </div>
    <p>2ºDAW IES Fernando Sagaseta</p>
  </footer>

</body>

</html>
