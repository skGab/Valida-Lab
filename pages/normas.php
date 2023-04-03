<?php
$root = $_SERVER['DOCUMENT_ROOT'];
require $root . '/components/header.php' ?>

<!-- INTRO -->
<?php include $root . '/components/intro.php' ?>

<!-- NORMAS -->
<section id="normas" class="pb-5 mb-lg-5">
    <div class="container py-5 px-4">
        <div class="row justify-content-center">
            <?php include $root . '/components/card.php'; ?>

            <div class="col-12 col-sm-8 col-md-6 col-lg-4 col-xl-3 mb-5 mb-md-0">
                <?php card(
                    '',
                    'ANVISA',
                    'consectetur adipiscing elit. Curabitur elit ex, maximus eu suscipit a, porta at dolor. Morbi vel dictum augue, et hendrerit felis.Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                    'link',
                    'SAIBA MAIS'
                ); ?>
            </div>

            <div class="col-12 col-sm-8 col-md-6 col-lg-4 col-xl-3">
                <?php card(
                    '',
                    'RDC 430',
                    'consectetur adipiscing elit. Curabitur elit ex, maximus eu suscipit a, porta at dolor. Morbi vel dictum augue, et hendrerit felis.Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                    'link',
                    'SAIBA MAIS'
                ); ?>
            </div>
        </div>
    </div>
</section>

<?php require $root . '/components/footer.php' ?>