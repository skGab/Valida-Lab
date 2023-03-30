<?php
require '../components/header.php';
include '../components/card.php'
?>

<section id="eventos_cursos" class="py-5 my-5">
    <div class="container px-4 py-5">
        <div class="row gap-4">
            <!-- SELECTOR -->
            <div id="seletor_evento" class="col-3">
                <div class="list-group fw-bold">
                    <a href="#" class="list-group-item list-group-item-action py-3 d-flex align-items-center justify-content-between active">
                        Feiras e Workshops
                        <img loading="lazy" src="/assets/icons/feiras_icon.png" class="img-fluid me-3" alt="Icone Feira">
                    </a>

                    <a href="#" class="list-group-item list-group-item-action py-3 d-flex align-items-center justify-content-between">Conteúdo Digital
                        <img loading="lazy" src="/assets/icons/conteudo_icon.png" class="img-fluid me-3" alt="Icone Conteudo">
                    </a>

                    <a href="#" class="list-group-item list-group-item-action py-3 d-flex align-items-center justify-content-between">Cursos<img loading="lazy" src="/assets/icons/cursos_icon.png" class="img-fluid me-3" alt="Icone Cursos">
                    </a>
                </div>
            </div>

            <!-- BG && EVENTOS -->
            <div id="eventos" class="col-8 flex-fill">
                <figure class="mb-5 position-relative d-flex align-items-center justify-content-start">
                    <img loading="lazy" src="/assets/imgs/backGrounds/bg_feiras.png" class="img-fluid" alt="Banner Evento">
                    <h2 class="fw-light text-white h3 position-absolute px-4">Feiras e Workshops</h2>
                </figure>

                <?php card(
                    'FCE PHARMA 2023',
                    'Visite o estande do Grupo Polar J126 e fique por dentro de todas as nossas novidades!',
                    '',
                    '/assets/icons/fce_icon.svg'
                ) ?>
            </div>
        </div>
    </div>
</section>

<?php require '../components/footer.php'  ?>