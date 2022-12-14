<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Gran Molino</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a84584806f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="fontello.css">
</head>

<body>
    <!-- nav-bar -->
    <?php include("./include/navbar.php"); ?>

    <!-- slider -->
    <section>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/slider1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/slider2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/slider3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
        </div>
    </section>

    <!-- cards-index -->
    <section class="cards">
        <article class="mt-4">
            <h1 class="display-4 text-center">Destacados</h1>
            <hr>
            <div class="row">
                <div class="col-sm12 col-md-4 col-lg-3 mb-3">
                    <div class="card">
                        <img src="img/dulce.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Dulces</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm12 col-md-4 col-lg-3 mb-3">
                    <div class="card">
                        <img src="img/desayuno.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Desayunos</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm12 col-md-4 col-lg-3 mb-3">
                    <div class="card">
                        <img src="img/pan.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Todo tipo de panes </h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm12 col-md-4 col-lg-3 mb-3">
                    <div class="card">
                        <img src="img/personalizadas.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Personaliza tu torta</h5>
                        </div>
                    </div>
                </div>


            </div>

        </article>


    </section>

    <style>
        * {
            margin: 0;
            padding: 0;
            border: 0;
        }
        
        .btn-wsp {
            position: fixed;
            width: 55px;
            height: 55px;
            line-height: 55px;
            bottom: 30px;
            right: 30px;
            background: #0df053;
            color: #fff;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 0px 1px 10px rgba(0, 0, 0, 0.3);
            z-index: 100px;
        }
        
        .btn-wsp:hover {
            text-decoration: none;
            color: #0df053;
        }
    </style>

    <a href="https://api.whatsapp.com/send?phone=989021980" class="btn-wsp" target="_blank">
        <i class="fab fa-whatsapp text-white foot_icon"></i>
    </a>

    <footer class="page-footer font-small  pt-4 bg-dark">


        <div class="container">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                <div class="col-md-4 d-flex align-items-center">

                    <img src="img/logo.png" alt="" width="100px">

                    <span class="text-muted">&copy; 2022 El Gran Molino, Inc</span>
                </div>
                <div class="col-sm-12 col-md-2 text-light text-center">
                    <p class="font-weight-bold">Horarios de atencion:</p>
                    <p>Lunes a Domingo <br>06:00 - 21:00</p>
                </div>
                <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                    <li class="list-inline-item">
                        <a class="btn-floating btn-fb mx-1" href="https://www.facebook.com/GranMolinoOficial" target="_blank">
                            <i class="fab fa-facebook-f text-muted foot_icon"> </i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="btn-floating btn-tw mx-1" href="https://www.instagram.com/elgranmolino/" target="_blank">
                            <i class="fab fa-instagram text-white foot_icon"></i>
                        </a>
                    </li>


                    <li class="list-inline-item">
                        <a class="btn-floating btn-gplus mx-1" href="https://api.whatsapp.com/send?phone=+51900278717&text=Bienvenido,%20como%20Estas?" target="_blank">
                            <i class="fab fa-whatsapp text-white foot_icon"></i>
                        </a>
                    </li>
                </ul>


            </footer>
        </div>

    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>