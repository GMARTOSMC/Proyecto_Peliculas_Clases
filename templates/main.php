<main class="container text-center mt-5">
    <section class="d-flex justify-content-center">
        <img src="<?= $poster_url; ?>" class="img-fluid rounded" width="300" alt="Poster de <?= $title; ?>" />
    </section>

    <hgroup id="info" class="mt-4">
    <h3 class="my-2"> <?= $title; ?> - <?=$until_message ?></h3>
    <h3 class="my-2">Fecha de Estreno: <?= $release_date; ?></h3>
    <h3 class="my-2">La siguiente película es: <?= $following_production ?>
    <h3 class="my-2">Reseña: <?= $overview; ?></h3>
    </hgroup>

    <?php

    if ($next_poster):
        ?>
        <section class="d-flex justify-content-center">
            <img class="my-5" src="<?= $next_poster; ?>" class="img-fluid rounded" width="300" alt="Poster de <?= $title; ?>" />
        </section>

        <hgroup id="info" class="mt-2">
            <h3 class="my-2"><?=$following_production ?></h3>
            <h3 class="my-2">Fecha de Estreno: <?=$next_release ?></h3>
            <h3 class="my-2">Reseña <?= $next_overview ?></h3>
        </hgroup>
    <?php endif;
    ?>

</main>