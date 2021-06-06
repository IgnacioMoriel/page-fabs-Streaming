<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="src/est-promociones.css">
    <link rel="shortcut icon" href="img/logo_puro.ico" type="image/x-icon">
    <!--boostrap>-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--Icons-->
    <link href="https://unpkg.com/ionicons@4.5.5/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
    
    <!--Efecto Scroll en imagen-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="funtion/parallax.min.js"></script>
    <title>Milok | Promociones</title>
</head>

<body class="body">

    <?php include("asets/navbar.php") ?>

    <section class="imagen-promo" >
        <div class="nav1" data-parallax="scroll" data-z-index="-1" data-image-src="img/wacht-netflix3.jpg   ">
            <div id="contenedor-letra">
                <div id="letra-centro">
                    <div class="container">
                        <h1>Precios & Promociones </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include("asets/tabla.php") ?>
    <?php include("asets/cuadro_precios.php") ?>
    <?php include("asets/app_whatsapp.php") ?>
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mt-4">
                    <h3>Notaste la diferencia?, no esperes más y <b>Contrata ahora!!.</b></h3>
                    <h5>Ahorra tu dinero y no pagues por cada servicio de streaming apovecha nuestra promociones y paga un modico precio de ? por todo ;) <br><br>
                        Llena el siguiente formulario con tus datos personales, el servicio o el combo que quieres y lo mas pronto se contactara uno de nuestros acesores contigo.</h5>
                </div>
                <div class="col-md-6 mt-4">
                    <?php include("asets/formulario.php") ?>
                    <?php include("funtion/registrar_contrato.php"); ?>
                </div>
            </div>
        </div>
    </section>
    
    <div style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
            <path d="M-60.66,137.66 C108.63,-146.53 306.71,262.98 512.69,37.00 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #000000;"></path>
        </svg></div>

    <?php include("asets/footer.php") ?>

    <?php include("asets/scrip_boostrap.php") ?>
</body>

</html>