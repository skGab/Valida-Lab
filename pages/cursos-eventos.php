<?php
$root = $_SERVER['DOCUMENT_ROOT'];
require $root . '/components/header.php';
include $root . '/components/card.php';
include $root . '/components/events_bg.php';
include $root . '/components/selector.php'
?>

<!-- EVENTOS && CURSOS -->
<section id="eventos_cursos" class="py-5 my-5">
    <div class="container px-4 py-lg-5">
        <div class="row gap-4">
            <!-- SELETOR -->
            <div id="seletor_evento" class="col-12 col-lg-3 mb-lg-0 mb-4">
                <?php selector([
                    'Feiras e Workshops',
                    'Conteúdo Digital',
                    'Cursos',
                ], [
                    '/assets/icons/feiras_icon.png',
                    '/assets/icons/conteudo_icon.png',
                    '/assets/icons/cursos_icon.png'
                ]) ?>
            </div>

            <!-- BG && EVENTOS -->
            <div id="eventos" class="col-12 col-lg-8 flex-fill">
                <?php events_bg('/assets/imgs/backGrounds/bg_feiras.webp', 'Feiras e Workshops') ?>

                <div id="feiras" class="row hidden justify-content-center justify-content-lg-start">
                    <div class="col-11 col-md-6 col-xl-4">
                        <?php
                        card(
                            '/assets/icons/card-icons/fce_icon.svg',
                            'FCE PHARMA 2023',
                            'Visite o estande do Grupo Polar J126 e fique por dentro de todas as nossas novidades!',
                            '',
                            'SAIBA MAIS',
                        );
                        ?>
                    </div>
                </div>

                <div id="conteudo_digital" class="row hidden justify-content-center justify-content-lg-start">
                    <div class="col-11 col-md-6 col-xl-4">
                        <?php
                        card(
                            '/assets/icons/card-icons/live_icon.svg',
                            'LIVE: Mapeamento Térmico de Rotas',
                            'Fique por dentro dos aspectos gerais dessa solução e obtenha segurança e eficácia no transporte de produtos termo sensíveis.',
                            '',
                            'FAÇA SUA INSCRIÇÃO!',
                        );
                        ?>
                    </div>
                </div>

                <div id="cursos" class="row hidden justify-content-center justify-content-lg-start">
                    <div class="col-11 col-md-6 col-xl-4">
                        <?php
                        card(
                            '/assets/icons/card-icons/quantum_icon.png',
                            'Qualificação Térmica',
                            'Curso Intensivo em Qualificação Térmica de embalagens, sistemas, equipamentos e áreas, focado em medicamentos e produtos para saúde',
                            '',
                            'FAÇA SUA INSCRIÇÃO!',
                        );
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require $root . '/components/footer.php'  ?>