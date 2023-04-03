<?php
function selector($titles, $icons)
{
    $count = count($titles); // verificar o número de elementos nos arrays
    for ($i = 0; $i < $count; $i++) {

?>
        <div class="list-group fw-bold">
            <button class="list-group-item list-group-item-action fw-bold py-3 d-flex align-items-center justify-content-between 
            <?php echo ($i == 0) ? 'active' : '' ?>">
                <?php echo $titles[$i] ?>

                <?php if ($icons) : ?>
                    <img loading="lazy" src="<?php echo $icons[$i] ?>" class="img-fluid me-3" alt="Icone Feira">
                <?php endif; ?>
            </button>
        </div>
<?php  }
}
?>