<!DOCTYPE html>
<html lang="en">

<head>
  <?php include ('./dotk/00head/analitycs.html'); ?>
  <?php include ('./dotk/00head/cabecera.html'); ?>
  <?php include ('./dotk/00head/estilos.html'); ?>
</head>

<body>

  <a id="arriba"></a>
  <header>
    <!-- Logos e imagen de hidalgo -->
    <?php include ('../lib18/seph/hf/header.html'); ?>

    <nav>
      <!-- Menu principal superior -->
      <?php //include ('../lib18/coreFRONTx/01header/nav/menu-superior/menu.html'); ?>
    </nav>

  </header>

  <?php include ('./dotk/01header/02begajoso/menu-pegajoso.html'); ?>

  <main>
    <div class="container marketing">

      <br />
      <p>Bienvenido al apartado de BECAS de la Universidad Politécnica de Pachuca, aquí podrás descargar formatos y obtener información de las diferentes becas que se ofrecen.</p>


      <br />
      <h1>Formatos</h1>
      <ul>
        <li><a href="./mc/2019/03/F-PL_BC-06-Solicitud-Beca-EXCELENCIA.doc">F-PL_BC-06-Solicitud-Beca-EXCELENCIA.doc</a></li>
        <li><a href="./mc/2019/03/F-PL_BC-08-Solicitud-Beca-CONTINUIDAD.doc">F-PL_BC-08-Solicitud-Beca-CONTINUIDAD.doc</a></li>
        <li><a href="./mc/2019/03/F-PL_BC-09-Solicitud-Beca-PERMANENCIA.doc">F-PL_BC-09-Solicitud-Beca-PERMANENCIA.doc</a></li>
        <li><a href="./mc/2019/03/F-PL_BC-10-CONSTANCIA-DE-NO-ADEUDO.doc">F-PL_BC-10-CONSTANCIA-DE-NO-ADEUDO.doc</a></li>
        <li><a href="./mc/2019/03/F-PL_BC-11-ESTUDIO-SOCIOECONOMICO.doc">F-PL_BC-11-ESTUDIO-SOCIOECONOMICO.doc</a></li>
        <li><a href="./mc/2019/03/F-PL_BC-16-Solicitud-Beca-ALIMENTICIA.doc">F-PL_BC-16-Solicitud-Beca-ALIMENTICIA.doc</a></li>
      </ul>

      <a id="financieros"></a>
      <br />
      <br />
      <br />
      <?php //include ('./dotk/05main/01edosfinancieros/edosfinancieros.html'); ?>


      <br />
      <br />
      <a id="mapadesitio"></a>
      <hr class="featurette-divider">
      <!-- Menu con todos los sitios y mini sitios de la página -->
      <?php include ('../lib18/coreFRONTx/main/tmenu-footer/menufooter.php'); ?>

    </div>

  </main>

  <footer>
    <!-- footer de gobierno del estado -->
    <?php include ('../lib18/seph/hf/footer.html'); ?>
  </footer>

  <?php include ('../lib18/coreFRONTx/09js/java.html'); ?>

  <!-- Script para dar la animacion al boton flotante que lleva arriba -->
  <a href="#" class="back-to-top">Volver arriba</a>
  <script src="../lib18/coreFRONTx/10boton-arriba/script.js"></script>

</body>

</html>
