<?php include("pinatas.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Piñatas.com
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="./assets/css/material-kit.css?v=2.0.6" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="./assets/demo/demo.css" rel="stylesheet" />
</head>
<!-- footer -->
<?php include ("nav_bar.php"); ?>
<!-- end foote -->




<body class="index-page sidebar-collapse">
  <div class="page-header header-filter clear-filter purple-filter" data-parallax="true" style="background-image: url('./assets/img/bg2.jpg');">
    <div class="container imgHome">
      <div class="row">
        <div class="col-lg-6 col-/*-1">
        <div class="justify-content-center animated bounceInUp">
        <img src="assets/img/pinatas/llama.png" alt="">
        </div>
      </div>
      <div class="col-lg-6 col-md-1 col-sm-1 align-middle align-items-center" style="padding:10%;">
        <div class="divImgHome animated bounceInLeft">
        <h5 class="animated bounce delay"><b>Llama</b></h5>
        <p class="animated flipInY delay-1s">Piñata de llama decorada con papel de china. El tamaño es de 50cmX100cm.</p>
        <div class="text-center">
          <b class="precioHome" style="color: #000; font-weight: bold; margin: 10px;">750.00 mxn</b>
        <button type="button" style="background:#3e64ff;" class="btn animated swing delay-2s">
          Comprar Ahora
        </button>
        </div>
        </div>
      </div>
      </div>
    </div>
  </div>


  



  <div class="main main-raised">
    <div class="section section-basic">
      <div class="container">
        <div class="row" style="margin: -60px !important;">
        <div class="col-lg-2">

        </div>
        <div class="col-lg-2 col-md-1 tituloAvisos">
          <center class="animated flash delay-3s">Envio Gratis</center>
          <center><img class="svgHome animated bounce delay-4s" src="assets/svg/entrega.svg" alt=""></center>
        </div>
        <div class="col-lg-2 tituloAvisos" >
          <center class="animated flash delay-3s">Pagos Seguros</center>
          <center><img class="svgHome animated bounce delay-4s" src="assets/svg/tarjeta-de-credito.svg" alt=""></center>
        </div>
        <div class="col-lg-2 tituloAvisos">
          <center class="animated flash delay-3s">Excelente Calidad</center>
          <center><img class="svgHome animated bounce delay-4s" src="assets/svg/logro.svg" alt=""></center>
        </div>
        <div class="col-lg-2 tituloAvisos">
          <center class="animated flash delay-3s">Diseños Unicos</center>
          <center><img class="svgHome animated bounce delay-4s" src="assets/svg/conocimiento.svg" alt=""></center>
        </div>
        <div class="lg col-2">

        </div>
        </div>
        <div class="title" style="margin-top:70px;">
          <h2>Niña</h2>
          <div class="row">
            <center>
              <div class="row justify-content-center">
                <?php
                foreach($pinatasNina as $pinataNina => $detalles)
                {
                  ?>
                  <div class="col-md-3 boxPinata animated flash" style="background: #fff;">
                  <center>
                  <?php
                  echo "<h1> $pinataNina </h1>";
                  ?>
                  <img src="<?php echo $detalles['img'] ?>" alt=""> <br>
                  <h6 class="precio"><?php echo $detalles['precio']; ?></h6>
                  <p class="card-description">
                  <h6><?php
                    echo $detalles['descripcion'];
                  ?></h6>
                  </p>
                  <button type="button" class="btn btn-info btn-round">Añadir al carrito</button>
                  </center></div>
                  
                  <?php
                }
                
                ?>
              </div>
            </center>
          </div>
        </div>
      </div>
    </div>



    <div class="section section-basic">
      <div class="container">
        <div class="title">
          <h2>Niño</h2>
          <div class="row">
            <center>
              <div class="row justify-content-center">
                <?php
                foreach($pinatasNino as $pinataNino => $detalles)
                {
                  ?>
                  <div class="col-md-3 boxPinata animated flash" style="background: #fff;">
                  <center>
                  <?php
                  echo "<h1> $pinataNino </h1>";
                  ?>
                  <img src="<?php echo $detalles['img'] ?>" alt=""> <br>
                  <h6 class="precio"><?php echo $detalles['precio']; ?></h6>
                  <p class="card-description">
                  <h6><?php
                    echo $detalles['descripcion'];
                  ?></h6>
                  </p>
                  <button type="button" class="btn btn-info btn-round">Añadir al carrito</button>
                  </center></div>
                  
                  <?php
                }
                
                ?>
              </div>
           </center>
          </div>
        </div>
      </div>
    </div>


    <?php include("contacto.php");  ?>

  </div>
</body>
    
  <!--  footer -->
<?php include("footer.php");  ?>
  <!-- end footer -->
  
</body>

</html>
