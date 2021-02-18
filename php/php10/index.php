<?php
require('inc/fonction.php');
require('brief/data.php');
//debug($movies);
include('inc/header.php'); ?>
<div class="wrap">
    <div id="movies">
        <?php foreach ($movies as $movie) { ?>
            <div>
                <a href="details.php?id=<?= $movie['id']; ?>">
                    <?php echo imageMovie($movie); ?>
                </a>
            </div>
        <?php } ?>
    </div>
</div>
<?php include('inc/footer.php');