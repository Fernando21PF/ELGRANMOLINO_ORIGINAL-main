<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Gran Molino</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a84584806f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/pedidos.css">
</head>

<body>
    <!-- nav-bar -->
    <?php include("./include/navbar.php"); ?>

    <section class="container">
        <article class="row">
            <div class="col-sm-12 col-md-6 my-4">
                <h1 class="display-4 text-uppercase">Haz tu pedido </h1>
                <p>Disfruta un dulce fin de semana con nuestro Delivery El Gran Molino.🍰🧁 ¡Haz tu pedido y engríete con tus delicias favoritas!.😋
                    <br>
                    <br> ▶Cobertura de 2 cuadras alrededor de nuestro local.
                    <br> ✅Disponible en nuestras sedes de Honorio Delgado y Paseo Colón.
                    <br> ✅Atención de Lunes a Sábado de 6:00 a.m a 9:00 p.m
                    <br> ✅Monto mínimo de compra: S/10
                </p>

                <div class="pedido-1">
                    <a href="https://api.whatsapp.com/send?phone=+51989021960&text=Bienvenido,%20como%20Estas?" target="_blank">PEDIDO :Sede Honorio Delgado /SMP</a>


                </div>
                <div class="pedido-2">
                    <a href="https://api.whatsapp.com/send?phone=+51989021980&text=Bienvenido,%20como%20Estas?" target="_blank">PEDIDO: Sede Paseo Colón /Centro de Lima</a>

                </div>

            </div>
            <div class="col-sm-12 col-md-6 my-4">
                <img class="w-100" src="img/delivery.png" alt="" height="600px">
            </div>
        </article>



    </section>
    

    <!-- footer -->
    <?php include("./include/footer.php"); ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>