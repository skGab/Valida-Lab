<?php
$root = $_SERVER['DOCUMENT_ROOT'];
require $root . '/components/header.php';
include $root . '/components/card.php';
include $root . '/components/events_bg.php';
include $root . '/components/selector.php';
include $root . '/components/modal.php'
?>

<!-- EVENTOS && CURSOS -->
<section id="eventos_cursos" class="py-5 my-5">
    <div class="container px-4 py-5">
        <div class="row gap-4">
            <!-- SELETOR -->
            <div id="seletor_evento" class="col-3">
                <?php selector([
                    'Mapeamento Térmico',
                    'Qualificação Térmica',
                    'Validação',
                    'Documentação',
                    'Consultoria e Treinamentos Técnicos',
                ], '') ?>
            </div>

            <!-- BG && EVENTOS -->
            <div id="eventos" class="col-8 flex-fill">
                <?php events_bg('/assets/imgs/backGrounds/bg_mapa-termico.webp', 'Mapeamento Térmico') ?>

                <div id="mapeamento" class="row hidden">
                    <div class="col-4">
                        <?php card(
                            '/assets/icons/card-icons/plane_icon.svg',
                            'Mapeamento Térmico de Rotas',
                            'O controle e monitoramento da temperatura e umidade garante a integridade das cargas.',
                            '#modal',
                            'SAIBA MAIS',
                        ); ?>
                    </div>
                    <div class="col-4">
                        <?php card(
                            '/assets/icons/card-icons/armazens_icon.svg',
                            'Mapeamento Térmico
                            de Armazéns',
                            'Controle da temperatura e a estabilidade térmica de ambientes e áreas.',
                            '#modal',
                            'SAIBA MAIS',
                        ); ?>
                    </div>
                    <div class="col-4">
                        <?php card(
                            '/assets/icons/card-icons/truck_icon_cold.svg',
                            'Qualificação Térmica de Veículos',
                            'Qualificação térmica de veículos de pequeno a grande porte.',
                            '#modal',
                            'SAIBA MAIS',
                        ); ?>
                    </div>
                </div>

                <div id="qualificacao" class="row hidden">
                    <div class="col-4">
                        <?php card(
                            '/assets/icons/card-icons/embalagens_icon.svg',
                            'Embalagens',
                            'A qualificação térmica de embalagens e sistemas de transporte deve ser realizada seguindo o Guia para a Qualificação de Transporte dos Produtos Biológicos da Anvisa (2017).',
                            '#modal',
                            'SAIBA MAIS',
                        ); ?>
                    </div>
                    <div class="col-4">
                        <?php card(
                            '/assets/icons/card-icons/armazens_icon.svg',
                            'Armazéns e salas climatizadas',
                            'QP é a evidência documentada sobre instalações, sistemas de suporte, utilidades, equipamentos e processos desenhados de acordo com os requisitos de BPF.',
                            '#modal',
                            'SAIBA MAIS',
                        ); ?>
                    </div>
                    <div class="col-4">
                        <?php card(
                            '/assets/icons/card-icons/congeladoras_icon.svg',
                            'Câmaras frias e congeladoras',
                            'Eficácia na verificação da homogeneidade e controle térmico.',
                            '#modal',
                            'SAIBA MAIS',
                        ); ?>
                    </div>
                    <div class="col-4">
                        <?php card(
                            '/assets/icons/card-icons/aquecimento_icon.svg',
                            'Equipamentos de refrigeração e aquecimento',
                            'Garantia de integridade e eficácia térmica em geladeiras e freezers.',
                            '#modal',
                            'SAIBA MAIS',
                        ); ?>
                    </div>
                    <div class="col-4">
                        <?php card(
                            '/assets/icons/card-icons/truck_icon_cold.svg',
                            'Veículos e containers',
                            'Qualificação de frotas refrigeradas e climatizadas.',
                            '#modal',
                            'SAIBA MAIS',
                        ); ?>
                    </div>
                    <div class="col-4">
                        <?php card(
                            '/assets/icons/card-icons/autoclaves_icon.png',
                            'Estufas e Autoclaves',
                            'Segurança e eficácia no cumprimento de normas e exigências.',
                            '#modal',
                            'SAIBA MAIS',
                        ); ?>
                    </div>
                    <div class="col-4">
                        <?php card(
                            '/assets/icons/card-icons/banho-maria_icon.svg',
                            'Banho Maria',
                            'Com nossa expertise em ensaios térmicos, ampliamos o escopo de nossos serviços!',
                            '#modal',
                            'SAIBA MAIS',
                        ); ?>
                    </div>
                    <div class="col-4">
                        <?php card(
                            '/assets/icons/card-icons/incubadora_icon.svg',
                            'Incubadoras',
                            'Equipamentos térmicos homogêneos garantem segurança nos processos!',
                            '#modal',
                            'SAIBA MAIS',
                        ); ?>
                    </div>
                    <div class="col-4">
                        <?php card(
                            '/assets/icons/card-icons/desinfectora_icon.svg',
                            'Lavadoras e Termo-Desinfectora',
                            'Solução para ambientes exigentes.',
                            '#modal',
                            'SAIBA MAIS',
                        ); ?>
                    </div>
                    <div class="col-4">
                        <?php card(
                            '/assets/icons/card-icons/tuneis_icon.svg',
                            'Túneis de Despirogenização',
                            'Conte com a expertise de quem conhece de ensaios térmicos!',
                            '#modal',
                            'SAIBA MAIS',
                        ); ?>
                    </div>
                </div>

                <div id="validacao" class="row hidden">
                    <div class="col-4">
                        <?php card(
                            '/assets/icons/card-icons/sistemas_Icon.svg',
                            'Sistemas Computadorizados',
                            'Redução de riscos e confiabilidade.',
                            '#modal',
                            'SAIBA MAIS',
                        ); ?>
                    </div>
                </div>

                <div id="documentacao" class="row hidden"></div>

                <div id="consultoria" class="row hidden"></div>
            </div>
        </div>
    </div>
</section>



<?php require $root . '/components/footer.php' ?>