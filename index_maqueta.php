<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body class="bg-dark bg-gradient">
    <!-- nav -->
    <div class="conatiner">
        <nav class="navbar navbar-expand-lg navbar-light bg-dark ">
            <div class="container-fluid">
                <a class="navbar-brand text-white" href="#">
                    <i class="fas fa-shopping-bag"></i>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">

                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Category 1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Category 2</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Category 4</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Category 5</a>
                        </li>
                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Featured
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item " href="#">
                                        <i class="fas fa-shopping-cart"></i> Orders
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-tags"></i> Products
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-star"></i> Categories
                                    </a>
                                </li>

                            </ul>
                        </li>

                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>

    <!-- Body Page -->


    <div class="container p-2">
        <div class="jumbotron">
            <h1 class="display-3 text-white">Tshirts Store</h1>
            <p class="lead text-white">Don't miss it</p>
            <hr class="my-2 bg-white">


        </div>

    </div>




    <!-- carousel -->
    <div class="container p-2">
        <div id="carouselExampleControls" class="carousel slide p-2" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/camiseta1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/camiseta2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/camiseta3.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/camiseta4.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!-- Lateral izquierdo Formulario-->

    <div class="container p-2 ">
        <div class="row">
            <div class="col-md-4  pt-0 mb-3">
                <div class="card bg-success bg-gradient">
                    <div class="card-header">
                        <h1>Sign in</h1>
                    </div>
                    <div class="card-body bg-white bg-opacity-50">
                        <form action="" method="post">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for=""></label>
                                    <input type="email" class="form-control" name="" id="" aria-describedby="emailHelpId" placeholder="Email">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label"></label>
                                    <input type="password" class="form-control" name="" id="" placeholder="Password">
                                </div>
                                <div class="mb3">
                                    <button type="submit" class="btn btn-dark">Submit</button>
                                </div>
                            </div>
                        </form>
                        <br />
                        <br />
                    </div>
                </div>
            </div>
            <!--Lateral Derecho Camisetas-->

            <div class="col-md-8 pt-0 mb-3">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card h-100">
                            <div class="card h-100 bg-black bg-opacity-10">
                                <img src="img/shirtama.png" alt="">
                                <div class="card-body bg-light bg-opacity-75 pb-2 ps-0">
                                    <h5>Camiseta Amarilla</h5>
                                </div>
                                <div class="card-footer bg-opacity-10 col-md-12 d-flex justify-content-between">
                                    <div class="row">
                                        <a href="#">
                                            <button class="border-0 bg-opacity-10" type="button">
                                                <i class="fas fa-cart-arrow-down"></i>
                                            </button>
                                        </a>
                                    </div>
                                    <div class="row">
                                        <span>
                                            <p class="d-flex justify-content-center">20$</p>
                                        </span>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <div class="card h-100 bg-black bg-opacity-10">
                                <img src="img/shirtaz.png" alt="">
                                <div class="card-body bg-light bg-opacity-75 pb-2 ps-0">
                                    <h5>Camiseta azul</h5>
                                </div>
                                <div class="card-footer bg-opacity-10 col-md-12 d-flex justify-content-between">
                                    <div class="row">
                                        <a href="#">
                                            <button class="border-0 bg-opacity-10" type="button">
                                                <i class="fas fa-cart-arrow-down"></i>
                                            </button>
                                        </a>
                                    </div>
                                    <div class="row">
                                        <span>
                                            <p class="d-flex justify-content-center">25$</p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <div class="card h-100 bg-black bg-opacity-10 ">
                                <img src="img/shirtro.png" alt="">
                                <div class="card-body bg-light bg-opacity-75 pb-2 ps-0">
                                    <h5>Camiseta Roja</h5>
                                </div>
                                <div class="card-footer bg-opacity-10 col-md-12 d-flex justify-content-between">
                                    <div class="row ">
                                        <a href="#">
                                            <button class="border-0 bg-opacity-10" type="button">
                                                <i class="fas fa-cart-arrow-down"></i>
                                            </button>
                                        </a>
                                    </div>
                                    <div class="row">
                                        <span>
                                            <p class="d-flex justify-content-center">30 $</p>
                                        </span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <!-- contenido -->

    <div class="container p-2">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="img/camiseta-azul.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="img/camiseta-amarilla.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="img/camiseta-marina.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
        </div>


        <!-- footer-->

        <div class="container">
            <footer class="py-3 my-4">
                <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                    <li class="nav-item">
                        <a href="#" class="nav-link px-2 text-muted">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link px-2 text-muted">Freatures</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link px-2 text-muted">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link px-2 text-muted">About</a>
                    </li>

                </ul>
                <p class="text-center text-muted">
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-amazon"></i>
                    © 2021 Company, Inc
                </p>
            </footer>
        </div>
    </div>





    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>