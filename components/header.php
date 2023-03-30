<?php
$banner;
$title;
$text;

$current_page =  $_SERVER['REQUEST_URI'];
$root = $_SERVER['DOCUMENT_ROOT']
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Valida Lab</title>
    <meta name="description" content="O Grupo Polar garante qualidade em toda a cadeia fria, com soluções que asseguram a integridade térmica de produtos durante transporte e armazenamento. Com mais de 20 anos de experiência e certificação ISO 9001:2015, oferecemos tecnologia e inovação para aprimorar a logística em todo o Brasil e no mundo. Conte com nossos serviços especializados para garantir a qualidade de seus medicamentos durante todo o ciclo de vida.">

    <!-- TIPOGRAFIA -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- END TIPOGRAFIA -->

    <!-- FAV ICON V2 -->
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/icons/pwa/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/icons/pwa/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/icons/pwa/favicon-32x32.png">
    <link rel="manifest" href="/manifest.webmanifest">
    <meta name="theme-color" content="#053565">
    <!-- END FAV ICON V2 -->

    <!-- BOOTSTRAP 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="/assets/css/compressed/custom.min.css">
</head>

<body>
    <!-- HEADER -->
    <header id="header" class="fixed-top">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container px-4">
                <figure>
                    <a class="navbar-brand" href="/">
                        <img class="logo img-fluid" src="/assets/imgs/logos/logo_valida.svg" width="320px" alt="Logo Valida">
                    </a>
                </figure>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                    <div class="navbar-nav fw-light">
                        <a class="nav-link <?php echo ($current_page == '/') ? 'active' : '' ?>" href="/">Home</a>
                        <a class="nav-link" href="/#sobre">Sobre nós</a>
                        <a class="nav-link <?php echo ($current_page == '/pages/nosso-expertise.php') ? 'active' : '' ?>" href="/pages/nosso-expertise.php">Nosso Expertise</a>
                        <a class="nav-link <?php echo ($current_page == '/pages/nossos-especialistas.php') ? 'active' : '' ?>" href="/pages/nossos-especialistas.php">Nossos Especialistas</a>
                        <a class="nav-link <?php echo ($current_page == '/pages/cursos-eventos.php') ? 'active' : '' ?>" href="/pages/cursos-eventos.php">Cursos & Eventos</a>
                        <a class="nav-link <?php echo ($current_page == '/pages/normas.php') ? 'active' : '' ?>" href="/pages/normas.php">Normas</a>
                        <a class="nav-link" href="#contato">Contato</a>
                        <a class="nav-link" href="#">
                            <img src="/assets/icons/search_icon.svg" width="17px" alt="Icone de busca" class="img-fluid">
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- MAIN -->
    <main id="main">
        <?php include $root . '/data/banner_content.php';

        // <!-- BANNER HERO -->
        if ($current_page != '/index.php' && $current_page != '/') : ?>
            <section id="banner_hero" class="d-flex justify-content-center align-items-end mx-auto" style="background-image: url(<?php echo $banner ?>);">
                <div class="container px-4">
                    <div class="row pb-5">
                        <div class="col d-flex align-items-center justify-content-between text-white gap-5">
                            <h1 class="mb-0 display-5 fw-normal"><?php echo $title ?>
                            </h1>
                            <p class="mb-0"><?php echo $text ?></p>
                        </div>
                    </div>
                </div>
            </section>
        <?php else : ?>
            <!-- CAROUSEL HOME -->
            <section id="carousel_home">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/assets/imgs/banners/banner_home_1.webp" class="d-block w-100 img-fluid mx-auto" alt="Slide 1">
                            <div class="carousel-description container px-4 mb-5 position-absolute bottom-0 start-50 translate-middle-x">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <h2 class="text-white fw-normal"><?php echo $title ?></h2>
                                    </div>
                                    <div class="col-5">
                                        <p class="text-white fw-light"><?php echo $text ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="/assets/imgs/banners/banner_home_2.webp" class="d-block w-100 img-fluid mx-auto" alt="Slide 2">
                            <div class="carousel-description container px-4 mb-5 position-absolute bottom-0 start-50 translate-middle-x">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <h2 class="text-white fw-normal"><?php echo $title_2 ?></h2>
                                    </div>
                                    <div class="col-5">
                                        <p class="text-white fw-light"><?php echo $text_2 ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="/assets/imgs/banners/banner_home_3.webp" class="d-block w-100 img-fluid mx-auto" alt="Slide 3">
                            <div class="carousel-description container px-4 mb-5 position-absolute bottom-0 start-50 translate-middle-x">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <h2 class="text-white fw-normal"><?php echo $title_3 ?></h2>
                                    </div>
                                    <div class="col-5">
                                        <p class="text-white fw-light"><?php echo $text_3 ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
        <?php endif ?>