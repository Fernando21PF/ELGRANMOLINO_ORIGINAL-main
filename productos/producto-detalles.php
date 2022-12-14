<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Gran Molino</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a84584806f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" />
    <!--Box icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/productos.css">
</head>

<body>
    <!--Navegation-->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/index.html">
                    <img src="../img/logo.png" alt="" width="100px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
                <ul class="nav__list">

                    <div class="carrito__icon">
                        <i class="bx bx-cart"></i>
                        <span class="item__total">0</span>
                    </div>

                </ul>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="../historia.php">Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="panaderia.php">Productos</a>
                        </li>

                        </>
                        <li class="nav-item">
                            <a class="nav-link active" href="../Pedidos.php">Pedidos</a>
                        </li>
                        <div class="nav-item-user">
                            <a href=" ../auth/login.php " target="_blank"><i class="fa-solid fa-user-tie"></i></a>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container detalles" id="detalles">
        <ul class="nav__list">
            <span>
            <i class="bx bxs-watch"></i>
          </span>
            <div class="carrito__icon">
                <i class="bx bx-cart"></i>
                <span class="item__total">0</span>
            </div>
        </ul>
        <!-- <article class="detalle-grid">
				<img src="https://cdn4.chrono24.com/images/topmodels/2875-7wlcl6ogfoc0qxg22ox6up9m-Original.png?auto=compress&amp;h=305" alt="" class="img-fluid">
				<div class="detalles-content">
					<h3>Relojes Originales</h3>
					<div class="rating">
						<span>
							<i class="bx bxs-star"></i>
						</span>
						<span>
							<i class="bx bxs-star"></i>
						</span>
						<span>
							<i class="bx bxs-star"></i>
						</span>
						<span>
							<i class="bx bxs-star"></i>
						</span>
						<span>
							<i class="bx bx-star"></i>
						</span>
					</div>
						<p class="price"><b>Precio: </b> S/55.00</p>
						<p class="description">
							<b>Descripcion: </b> <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta quae ad ex sint expedita perspiciatis odit eligendi! Et quia ex aperiam dolorum sunt omnis maiores. Repudiandae delectus iste exercitationem vel?</span>
						</p>
						<p class="description">
							<span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque voluptates consequuntur in assumenda odit hic, aut cupiditate dolorem aspernatur! Quibusdam iusto magnam vero maxime quisquam voluptatibus minima aliquam molestias, iure ratione commodi, reiciendis quasi.</span>
						</p>

						<div class="bottom">
							<div class="btn__group">
								<a href="" class="btn addToCart">A??adir carrito</a>
							</div>
						</div>
				</div>
			</article> -->
    </main>

    <!--Carrito-->

    <section class="carrito__overlay">
        <div class="carrito">
            <span class="close__carrito">
          <i class="bx bx-x"></i>
        </span>
            <h1>Su Carrito</h1>

            <div class="carrito__center">

                <!-- <div class="carrito__item">

            <img src="https://cdn4.chrono24.com/images/topmodels/2875-7wlcl6ogfoc0qxg22ox6up9m-Original.png?auto=compress&amp;h=305" alt="reloj">
            <div>
              <h3>Relojes Originales </h3>
              <p class="price">S/122</p>
            </div>
            <div>
              <span>
                <i class="bx bxs-up-arrow"></i>
              </span>
              <p>1</p>
              <span>
                <i class="bx bxs-down-arrow"></i>
              </span>
            </div>
            <div>
              <span class="remove__item">
                <i class="bx bx-trash"></i>
              </span>
            </div>
					</div>
					 -->
            </div>

            <div class="carrito__footer">
                <h3>Total: S/ <span class="carrito__total">0</span></h3>
                <button class="clear__carrito btn">remover carrito</button>
            </div>
        </div>
    </section>
    <script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
    <script src="../js/script.js"></script>


</body>

</html>