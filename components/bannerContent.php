<?php

if ($current_page == "/index.php" or $current_page == "/") {
    $banner = '';
    $title = "Fornecemos soluções <br> com excelência e qualidade comprovada.";
    $text = "Temos mais de 20 anos de experiência em estudos de qualificação térmica, sendo referência no mercado farmacêutico e diagnóstico.";

    $title_2 = "Mapeamento térmico <br> e de umidade";
    $text_2 = "Conheça a temperatura e a umidade de rotas, veículos e ambientes onde seus medicamentos são transportados e armazenados.";

    $title_3 = "Consultoria <br> e Treinamentos Técnicos";
    $text_3 = "Ministramos cursos e treinamentos com conteúdos personalizados, ideais para capacitar pessoas e equipes nos mais variados temas. Preencha o formulário abaixo e informe o tema de sua necessidade. Nossos especialistas estão aptos para atender sua demanda!";
}

if ($current_page == "/pages/nosso-expertise.php") {
    $banner = "/assets/imgs/banners/banner_nossa-expertise.webp";
    $title = "Nosso <br> Expertise";
    $text = "Realizamos o mapeamento térmico de rotas, armazéns e veículos com o intuito de conhecer a distribuição das grandezas que podem afetar a integridadede produtos e cargas farmacêuticas durante toda a cadeia logística, bem como auxiliamos na implementação das medidas corretivas de controle.";
}

if ($current_page == "/pages/nossos-especialistas.php") {
    $banner = "/assets/imgs/banners/banner_nossos-especialistas.webp";
    $title = "Nossos <br> Especialistas";
    $text = "";
}

if ($current_page == "/pages/cursos-eventos.php") {
    $banner = "/assets/imgs/banners/banner_cursos-eventos.webp";
    $title = "Cursos <br>e Eventos";
    $text = "O Laboratório Valida está inserido nos principais grupos de discussões, eventos, cursos e treinamentos da cadeia do frio.";
}

if ($current_page == "/pages/normas.php") {
    $banner = "/assets/imgs/banners/banner_normas.webp";
    $title = "Normas";
    $text = "O Laboratório Valida está totalmente em linha com as mais exigentes normas e requisitos essenciais no que tange o escopo de fornecimento de nossas soluções.";
}
