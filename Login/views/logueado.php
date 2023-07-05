<!doctype html>
<html lang="es">
  <head>
    <title>Evento</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/menu.css">
  </head>
  <body>
    <div>
        <nav>
            <ul>
            </ul>
        </nav>
    </div>
    <div class="menuToggle" onclick="Togglemenu();"></div>
    <div class="navigation">
      <div class="navArea">
        <ul>
          <li>
            <a href="#" onmouseover="ImgSlider('../assets/images/img1.jpg')">Inicio</a>
          </li>
          <li>
            <a href="#" onmouseover="ImgSlider('../assets/images/img2.jpg')">Sobre Nosotros</a>
          </li>
          <li>
            <a href="#" onmouseover="ImgSlider('../assets/images/img3.jpg')">Servicios</a>
          </li>
          <li>
            <a href="#" onmouseover="ImgSlider('../assets/images/img4.jpg')">Portafolio</a>
          </li>
          <li>
            <a href="#" onmouseover="ImgSlider('../assets/images/img5.jpg')">Equipo</a>
          </li>
          <li>
            <a href="#" onmouseover="ImgSlider('../assets/images/img6.jpg')">Contacto</a>
          </li>
        </ul>
      </div>
      <div class="imgArea">
        <img src="../assets/images/img1.jpg" id="slider">
      </div>
    </div>
    <script src="../assets/js/menu.js"></script>
   
  </body>
</html>