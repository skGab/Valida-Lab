<?php function events_bg($image, $text)
{
?>
    <figure class="mb-5 position-relative d-flex align-items-center justify-content-start">
        <img id="bg" loading="lazy" src="<?php echo $image ?>" class="img-fluid" alt="Banner Evento">
        <div class="position-absolute px-4">
            <h2 id="title" class="text-white h3"><?php echo $text ?></h2>
        </div>
    </figure>
<?php  } ?>