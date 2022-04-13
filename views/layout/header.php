<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url?>css/styles.css">
    <link rel="stylesheet" href="<?= base_url ?>vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <script src=" https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>


<body class="bg-dark bg-gradient p-2">
    <!-- nav -->
    <div class="conatiner-fluid ">
        <?php $categories = Utils::showCategories(); ?>
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
                            <a class="nav-link active text-white" aria-current="page" href="<?=base_url?>">Home</a>
                        </li>
                        <?php while($cat = $categories->fetch_object()): ?>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="<?=base_url?>Category/look&id=<?=$cat->id?>"><?=$cat->name?></a>
                        </li>
                        <?php endwhile; ?>
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
                        <?php if (isset($_SESSION['admin'])) : ?>
                            <li class="nav-item dropdown ">
                                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownAdmin" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Admin
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownAdminUl">
                                    <li>
                                        <a class="dropdown-item " href="#">
                                            <i class="fas fa-shopping-cart"></i> Manage Orders
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url ?>Product/manage">
                                            <i class="fas fa-tags"></i> Manage Products
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url ?>Category/index">
                                            <i class="fas fa-star"></i> Manage Categories
                                        </a>
                                    </li>

                                </ul>
                            </li>
                        <?php endif; ?>


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


    <div class="container-fluid p-2">
        <div class="jumbotron">
            <h1 class="display-3 text-white">T-shirts Store</h1>
            <p class="lead text-white">Don't miss it</p>
            <hr class="my-2 bg-success">


        </div>

    </div>




    <!-- carousel -->
    <div class="container-fluid p-0">
        <div id="carouselExampleControls" class="carousel slide " data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?= base_url ?>img/camiseta1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url ?>img/camiseta2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url ?>img/camiseta3.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url ?>img/camiseta4.jpg" class="d-block w-100" alt="...">
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

