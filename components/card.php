<?php function card($name, $text, $link, $icon)
{
?>
    <div class="cardComponent card d-flex align-items-center justify-content-center">
        <div class="card-body flex-grow-0 px-4 py-5">

            <?php if ($icon) :  ?>
                <figure class="text-center">
                    <img loading="lazy" src="<?php echo $icon ?>" width="35px" class="img-fluid" alt="Icone">
                </figure>
            <?php endif ?>

            <h5 class="card-title fw-bold"><?php echo $name ?></h5>

            <p class="card-text my-4"><?php echo $text ?></p>

            <a href="<?php echo $link ?>" class="p-0 fw-bold small text-dark">SAIBA MAIS</a>
        </div>
    </div>
<?php  } ?>