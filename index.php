<?php
$root = $_SERVER['DOCUMENT_ROOT'];
require $root . '/components/header.php';
?>

<!-- INTRO -->
<?php include './components/intro.php' ?>

<!-- BANNER LAB -->
<section id="banner_lab" class="text-center">
    <img loading="lazy" src="/assets/imgs/banners/banner_home_secao-lab.webp" class="img-fluid w-100" alt="Banner Laboratorio">
</section>

<!-- EXPERTISE -->
<section id="expertise" class="py-5 my-lg-5">
    <div class="container py-lg-5 px-4">
        <div class="row align-items-center">
            <div class="col-12 col-lg-5 d-flex align-items-center gap-5">
                <h2 class="fw-bold mb-4 mb-lg-0">Nosso <br class="d-none d-lg-block"> Expertise</h2>
                <img loading="lazy" src="/assets/icons/simbolo.svg" alt="Icone Simbolo" class="img-fluid d-none d-lg-block">
                <img loading="lazy" src="/assets/icons/simbolo.svg" width="60px" alt="Icone Simbolo" class="img-fluid d-lg-none">
            </div>
            <div class="col-12 col-lg-7">
                <p class="mb-5 mb-lg-4">Equipe técnica altamente qualificada formada por farmacêuticos, químicos e engenheiros inseridos nos principais grupos globais de discussão sobre cadeia do frio e ensaios térmicos. Todo o nosso know-how nos permite oferecer estratégias de acordo com as necessidades, objetivos e processos específicos de cada cliente.</p>
                <a href="/pages/nosso-expertise.php" class="text-white fw-light btn btn-dark w-100">SAIBA MAIS</a>
            </div>
        </div>
    </div>
</section>

<!-- BANNER ESTRELAS -->
<section id="banner_estrelas" class="text-center">
    <img loading="lazy" src="/assets/imgs/banners/banner_home_secao-estrelas.webp" alt="Banner Seção Estrelas" class="img-fluid w-100">
</section>

<!-- CONTEUDO EXCLUSIVO -->
<section id="conteudo_exclusivo" class="py-5 my-lg-5">
    <div class="container px-4 py-xl-5 d-flex flex-column flex-xl-row">
        <div class="row mb-5 mb-xl-0">
            <div class="col">
                <figure class="mb-0 d-flex d-xl-block gap-4 align-items-center">
                    <img loading="lazy" src="/assets/icons/simbolo.svg" width="100px" class="img-fluid mb-4 d-none d-xl-block" alt="Icone Simbolo">
                    <h2 class="fw-bold">
                        Conteúdos <br class="d-none d-xl-block">
                        Exclusivos
                    </h2>
                    <img loading="lazy" src="/assets/icons/simbolo.svg" width="60px" class="img-fluid mb-4 d-xl-none" alt="Icone Simbolo">
                </figure>
            </div>
        </div>

        <div class="row justify-content-between justify-content-xl-end">
            <div class="col-12 col-sm-6 col-xl-5">
                <div class="card border-0 flex-xl-row gap-3 h-100">
                    <img loading="lazy" src="/assets/imgs/thumbs/thumb-card-1.webp" class="align-self-start mb-4 mb-xl-0" width="119px" height="119px" alt="Post Thumb">
                    <div class="card-body py-0 d-flex justify-content-between align-items-start flex-column">
                        <h3 class="card-title h6">Termômetro infravermelho - Por que não usar?</h3>
                        <p class="card-text small">Recentemente, a nossa Diretoria Técnica e Estratégica em Cold Chain, Liana Montemor nos ajudou...</p>
                        <a href="#" class="btn fw-bold p-0" target="_blank"><span class="me-2 small">SAIBA MAIS</span> <img loading="lazy" src="/assets/icons/arrow_right.svg" class="img-fluid" alt="Seta Saiba mais"></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-5">
                <div class="card border-0 flex-xl-row gap-3 h-100">
                    <img loading="lazy" src="/assets/imgs/thumbs/thumb-card-2.webp" class="align-self-start mb-4 mb-xl-0" width="119px" height="119px" alt="Post Thumb">
                    <div class="card-body py-0 d-flex justify-content-between align-items-start flex-column">
                        <h3 class="card-title h6">A importância da cadeia do frio para a imunização!</h3>
                        <p class="card-text small">Com a espera da vacinação no Brasil, diversos ambientes hospitalares e farmacêuticos, lidam diariamente...</p>
                        <a href="#" class="btn fw-bold p-0" target="_blank"><span class="me-2 small">SAIBA MAIS</span> <img loading="lazy" src="/assets/icons/arrow_right.svg" class="img-fluid" alt="Seta Saiba mais"></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-5">
                <div class="card border-0 flex-xl-row gap-3 h-100">
                    <img loading="lazy" src="/assets/imgs/thumbs/thumb-card-3.webp" class="align-self-start mb-4 mb-xl-0" width="119px" height="119px" alt="Post Thumb">
                    <div class="card-body py-0 d-flex justify-content-between align-items-start flex-column">
                        <h3 class="card-title h6">Estudantes obtêm prêmio com projeto sobre transporte de medicamentos</h3>
                        <p class="card-text small">A equipe de robótica do Colégio Eduardo Gomes, de São Caetano do Sul...</p>
                        <a href="#" class="btn fw-bold p-0" target="_blank"><span class="me-2 small">SAIBA MAIS</span> <img loading="lazy" src="/assets/icons/arrow_right.svg" class="img-fluid" alt="Seta Saiba mais"></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-5">
                <div class="card border-0 flex-xl-row gap-3 h-100">
                    <img loading="lazy" src="/assets/imgs/thumbs/thumb-card-4.webp" class="align-self-start mb-4 mb-xl-0" width="119px" height="119px" alt="Post Thumb">
                    <div class="card-body py-0 d-flex justify-content-between align-items-start flex-column">
                        <h3 class="card-title h6">Entrevista UOL | Blog Viva Bem</h3>
                        <p class="card-text small">Toda vacina tem uma temperatura certa. Sem cuidar disso, entramos numa...</p>
                        <a href="#" class="btn fw-bold p-0" target="_blank"><span class="me-2 small">SAIBA MAIS</span> <img loading="lazy" src="/assets/icons/arrow_right.svg" class="img-fluid" alt="Seta Saiba mais"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- VIDEOS -->
<section id="videos" class="mx-auto">
    <div class="container px-5 px-md-4 py-5">
        <div class="row py-5">
            <div class="col text-center">
                <h2 class="fw-bold text-white">Vídeos</h2>

                <div class="row mt-5 justify-content-center">
                    <div class="col-12 col-md-6 col-lg-4">
                        <a href="" target="_blank">
                            <figure class="position-relative">
                                <img loading="lazy" src="/assets/imgs/thumbs/video_1.webp" alt="Entrevista Grupo Polar" class="img-fluid">
                                <img loading="lazy" src="/assets/icons/play_icon.svg" class="position-absolute top-50 start-50 translate-middle" alt="Icone player">
                            </figure>
                            <p class="text-white mb-0 fw-light mx-auto">Entrevista Grupo Polar | BandNews TV</p>
                        </a>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4 my-5 my-md-0">
                        <a href="" target="_blank">
                            <figure class="position-relative">
                                <img loading="lazy" src="/assets/imgs/thumbs/video_2.webp" alt="Entrevista Grupo Polar" class="img-fluid">
                                <img loading="lazy" src="/assets/icons/play_icon.svg" class="position-absolute top-50 start-50 translate-middle" alt="Icone player">
                            </figure>
                            <p class="text-white mb-0 fw-light mx-auto">RDC 430 - O prazo de Transitoriedade está acabando.</p>
                        </a>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <a href="" target="_blank">
                            <figure class="position-relative">
                                <img loading="lazy" src="/assets/imgs/thumbs/video_3.webp" alt="Entrevista Grupo Polar" class="img-fluid">
                                <img loading="lazy" src="/assets/icons/play_icon.svg" class="position-absolute top-50 start-50 translate-middle" alt="Icone player">
                            </figure>
                            <p class="text-white mb-0 fw-light mx-auto">Série Grupo Polar RDC 430 – Artigo 84 | Episódio 1</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require $root . '/components/footer.php' ?>