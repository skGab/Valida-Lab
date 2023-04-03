<?php
function card($icon, $title, $text, $link, $btn)
{
    $current_page =  $_SERVER['REQUEST_URI'];
    $data = ($current_page === '/pages/nosso-expertise.php') ? 'data-bs-toggle="modal" data-bs-target="' . $link . '"' : '';

?>
    <div class="cardComponent card d-flex align-items-center justify-content-center h-100">
        <div class="card-body flex-grow-0 px-4 py-5 h-100 d-flex flex-column align-items-start">

            <?php if ($icon) :  ?>
                <figure class="text-center align-self-center">
                    <img loading="lazy" src="<?php echo $icon ?>" width="35px" class="img-fluid" alt="Icone">
                </figure>
            <?php endif ?>

            <h5 class="card-title fw-bold h6"><?php echo $title ?></h5>

            <p class="card-text my-4 small"><?php echo $text ?></p>

            <button type="button" <?php echo $data ?> class="p-0 fw-bold bg-transparent border-0 small text-dark mt-auto"><?php echo $btn ?></button>
        </div>
    </div>
<?php  } ?>