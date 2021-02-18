<?php
require('inc/fonction.php');
require('brief/data.php');
//debug($movies);
if(!empty($_GET['id']) && ctype_digit($_GET['id'])) {
    $id = $_GET['id'];
    // ATTENTION ++++ dans la vraie vie ici nous ferions une request à la base de donnée pour aller chercher ce film et uniquement ce film
    foreach($movies as $key => $movie) {
        if($movie['id'] == $id){
            $currentMovie = $movie;
            $currentKey = $key;
        }
    }
    if(empty($currentMovie)) { die('404');  }
} else { die('404'); }
//debug($currentMovie);
//echo $currentKey;
include('inc/header.php'); ?>
    <div class="onemovie">
        <h1><?= $currentMovie['title']; ?></h1>
        <?php echo imageMovie($currentMovie); ?>
        <p>Director : <?= $currentMovie['directors']; ?></p>
        <p>Year : <?= $currentMovie['year']; ?></p>
        <p>Rating : <?= $currentMovie['rating']; ?></p>
        <p>imdb_id : <?= $currentMovie['imdb_id']; ?></p>
    </div>

<ul>
    <?php if($currentKey > 0) {
        $keyPrecedent = $currentKey - 1; ?>
        <li><a href="details.php?id=<?= $movies[$keyPrecedent]['id'] ?>">Précédent</a></li>
    <?php }
     if($currentKey < count($movies) - 1) {
        $keySuivant = $currentKey + 1; ?>
        <li><a href="details.php?id=<?= $movies[$keySuivant]['id'] ?>">Suivant</a></li>
     <?php } ?>
</ul>
<?php include('inc/footer.php');