<!-- CONTATO -->
<section id="contato" class="mx-auto">
    <div class="row ">
        <!-- FORM -->
        <div class="col-12 col-xl-6 px-5 d-flex align-items-center justify-content-center">
            <form class="p-5">
                <h2 class="fw-bold">Contato</h2>
                <p class="mb-4">Entre em contato conosco e fale diretamente com nossos especialistas!</p>

                <!-- NOME && EMAIL -->
                <div class="input-group mb-3 gap-3">
                    <div class="nome  flex-fill">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="nome" aria-describedby="nomeHelp">
                        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                    </div>
                    <div class="email flex-fill">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                    </div>
                </div>

                <!-- TELEFONE && EMPRESA -->
                <div class="input-group mb-3 gap-3">
                    <div class="telefone flex-fill">
                        <label for="telefone" class="form-label">Telefone</label>
                        <input type="tel" class="form-control" id="telefone" aria-describedby="telHelp">
                        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                    </div>
                    <div class="empresa flex-fill">
                        <label for="empresa" class="form-label">Empresa</label>
                        <input type="text" class="form-control" id="empresa" aria-describedby="empresaHelp">
                        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                    </div>
                </div>

                <!-- MENSAGEM -->
                <div class="mb-3">
                    <label class="form-label" for="mensagem">Mensagem</label>
                    <textarea type="checkbox" class="form-control" id="mensagem" rows="3"> </textarea>
                </div>

                <!-- ENVIAR -->
                <button type="submit" class="btn text-white w-100">ENVIAR</button>
            </form>
        </div>

        <!-- BG -->
        <div class="d-none d-xl-flex col-xl-6 d-flex justify-content-end">
            <img loading="lazy" src="/assets/imgs/backGrounds/bg_contato.webp" alt="BG Contato" class="img-fluid me-right">
        </div>
    </div>
</section>

</main>

<!-- FOOTER -->
<footer id="footer">
    <div class="container px-4  py-4">
        <div class="row py-5">
            <div class="col d-flex align-items-center justify-content-between">
                <figure class="mb-0 text-center">
                    <img loading="lazy" src="/assets/imgs/logos/logo_grupo-polar.svg" alt="Logo Grupo Polar" width="128px" class="img-fluid mb-2">
                    <p class="mb-0">Uma empresa do Grupo Polar</p>
                </figure>

                <div class="d-flex align-items-center gap-5">
                    <figure class="mb-0">
                        <img loading="lazy" src="/assets/imgs/logos/logo_iso.png" alt="Logo ISO" class="img-fluid">
                    </figure>

                    <nav class="d-flex flex-column align-items-start">
                        <a href="" class="lh-">Home</a>
                        <a href="" class="lh-lg">Sobre nós</a>
                        <a href="" class="lh-lg">Nosso Expertise</a>
                        <a href="" class="mb-2 lh-lg">Contato</a>

                        <a href="" class="lh-lg">
                            <img loading="lazy" src="/assets/icons/instagram_icon.svg" width="19px" class="me-3 img-fluid" alt="Icone Instagram"><span>@laboratoriovalida</span>
                        </a>
                        <a href="" class="lh-lg">
                            <img loading="lazy" src="/assets/icons/linkedin_icon.svg" width="19px" class="me-3 img-fluid" alt="Icone Linkedin"><span>laboratoriovalida</span>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div id="bg_blackbeans" class="container-fluid">
        <div class="row py-3">
            <div class="col d-flex align-items-center justify-content-center text-white gap-2">
                <span class="small fw-light">Copyright 2022 | Todos os direitos reservados| Desenvolvido por</span>
                <img loading="lazy" src="/assets/imgs/logos/logo_blackbeans.svg" alt="Logo Black Beans" class="img-fluid">
            </div>
        </div>
    </div>
</footer>

<!-- BOOTSTRAP BUNDLE -->
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- SERVICE WORKER -->
<!-- <script defer type="application/javascript">
    if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('/service-worker.js');
    }
</script> -->

<!-- CUSTOM JS -->
<script defer type="text/javascript" src="/vendor/js/custom.js"></script>

</body>

</html>