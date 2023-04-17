<!-- CONTATO -->
<section id="contato" class="mx-auto">
    <div class="container-fluid px-xxl-0">
        <div class="row py-5 py-xxl-0">
            <div class="col-12 col-xxl-6 px-4 px-xxl-5 d-flex align-items-center justify-content-center">
                <form action="#" class="py-5 p-xxl-5">
                    <h2 class="fw-bold">Contato</h2>
                    <p class="mb-4">Entre em contato conosco e fale diretamente com nossos especialistas!</p>

                    <div class="input-group mb-3 gap-3">
                        <div class="nome  flex-fill">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="nome" aria-describedby="nomeHelp">
                        </div>
                        <div class="email flex-fill">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                        </div>
                    </div>

                    <div class="input-group mb-3 gap-3">
                        <div class="telefone flex-fill">
                            <label for="telefone" class="form-label">Telefone</label>
                            <input type="tel" class="form-control" id="telefone" aria-describedby="telHelp">
                        </div>
                        <div class="empresa flex-fill">
                            <label for="empresa" class="form-label">Empresa</label>
                            <input type="text" class="form-control" id="empresa" aria-describedby="empresaHelp">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="mensagem">Mensagem</label>
                        <textarea type="checkbox" class="form-control" id="mensagem" rows="3"> </textarea>
                    </div>

                    <button type="submit" class="btn text-white w-100" disabled>ENVIAR</button>
                </form>
            </div>

            <div class="d-none d-xxl-flex col-xxl-6 justify-content-end px-0">
                <img loading="lazy" src="/assets/imgs/backGrounds/bg_contato.webp" alt="BG Contato" class="img-fluid me-right">
            </div>
        </div>
    </div>
</section>

<button id="scroll-to-top" class="border-0 bg-transparent position-fixed bottom-0 end-0 mb-3 me-3" type="button">
    <img loading="lazy" src="/assets/icons/to_top.png" width="45px" class="img-fluid" alt="Voltar para o topo">
</button>

</main>

<!-- FOOTER -->
<footer id="footer">
    <div class="container px-4  py-4">
        <div class="row py-5">
            <div class="col d-flex flex-column flex-md-row  align-items-center justify-content-between">
                <figure class="mb-5 mb-md-0 text-center">
                    <a href="https://grupopolar.com.br/" target="_blank">
                        <img loading="lazy" src="/assets/imgs/logos/logo_grupo-polar.svg" alt="Logo Grupo Polar" width="128px" class="img-fluid mb-2">
                        <p class="mb-0">Uma empresa do Grupo Polar</p>
                    </a>
                </figure>

                <div class="d-flex flex-column flex-md-row align-items-center">
                    <figure class="mb-4 mb-md-0 me-md-5 ">
                        <img loading="lazy" src="/assets/imgs/logos/logo_iso.png" alt="Logo ISO" class="img-fluid">
                    </figure>

                    <nav class="d-flex flex-column align-items-md-start align-items-center">
                        <a href="/" class="lh-">Home</a>
                        <a href="/#intro" class="lh-lg">Sobre nós</a>
                        <a href="/pages/nosso-expertise.php" class="lh-lg">Nosso Expertise</a>
                        <a href="#contato" class="mb-2 lh-lg">Contato</a>

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
            <div class="col d-flex flex-column flex-md-row align-items-center justify-content-center text-white gap-2">
                <span class="small fw-light text-center text-md-start my-md-0 my-2">Copyright 2022 | Todos os direitos reservados| Desenvolvido por</span>
                <img loading="lazy" src="/assets/imgs/logos/logo_blackbeans.svg" alt="Logo Black Beans" class="img-fluid">
            </div>
        </div>
    </div>
</footer>

<!-- BOOTSTRAP BUNDLE -->
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- SERVICE WORKER -->
<script defer type="application/javascript">
    if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('/service-worker.js');
    }
</script>

<!-- CUSTOM JS -->
<script defer type="text/javascript" src="/vendor/js/custom.js"></script>

</body>

</html>