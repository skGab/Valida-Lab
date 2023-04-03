<?php
$current_page =  $_SERVER['REQUEST_URI'];
$page_normas = ($current_page == "/pages/normas.php")
?>

<section id="<?php echo ($page_normas) ? 'intro_normas' : 'intro' ?>" class="py-5">
    <div class="container py-lg-5 px-4">
        <div class="row align-items-start">
            <div class="<?php echo ($current_page == '/pages/normas.php' or $current_page == "/pages/nossos-especialistas.php") ? 'col-12 col-lg-2' : 'col-12 col-lg-4' ?> d-flex align-items-center gap-5 mb-4 mb-lg-0">
                <?php echo ($current_page == '/' or $current_page == "/index.php") ? '<h2 class="fw-bold">Sobre <br class="d-none d-lg-block"> Nós</h2>' : '' ?>
                <img loading="lazy" src="/assets/icons/simbolo.svg" width="156px" alt="Icone simbolo" class="img-fluid d-none d-lg-block">
                <img loading="lazy" src="/assets/icons/simbolo.svg" width="60px" alt="Icone simbolo" class="img-fluid d-lg-none">
            </div>

            <div class="<?php echo ($current_page == "/pages/normas.php" or $current_page == "/pages/nossos-especialistas.php") ? 'col-12 col-lg-10' : 'col-12 col-lg-8' ?>">
                <p>
                    Somos uma empresa do Grupo Polar com quase 20 anos de experiência em estudos de ensaios térmicos, sendo referência no setor das ciências da vida, principalmente farmacêutico e diagnóstico. Somos impulsionados pela busca contínua de soluções inovadoras com a documentação técnica mais robusta do mercado. Contamos com uma estrutura de câmaras climáticas que executam perfis térmicos personalizados para o fornecimento de soluções completas e confiáveis, em total conformidade com normas nacionais e internacionais.
                </p>
                <p class="mb-0 mb-lg-4">
                    Nosso Laboratório oferece uma gama de serviços com foco em ensaios térmicos, desde equipamentos utilizados no transporte e armazenamento de medicamentos na cadeia do frio, até treinamentos e consultorias.
                </p>
                <img loading="lazy" src="/assets/icons/arrow_bottom.svg" width="43px" alt="Seta para baixo" class="img-fluid d-none d-lg-block mt-lg-0">
            </div>
        </div>
    </div>
</section>