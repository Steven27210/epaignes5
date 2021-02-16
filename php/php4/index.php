<?php
//======================================================================
// array simple, numérique
//======================================================================
$tiroirs = array('clef', 'monnaie', 'facture', 'prix', 'description');
echo '<pre>';
print_r($tiroirs);
echo '</pre>';

// FOR
echo '<div id="items">';
for ($i = 0; $i < count($tiroirs);$i++) {
    echo '<div class="item">';
        echo '<h2>'.$tiroirs[$i].'</h2>';
    echo '</div>';
}
echo '</div>';
?>
<div id="items">
    <?php for ($i = 0; $i < count($tiroirs);$i++) { ?>
    <div class="item">
        <h2><?= $tiroirs[$i]; ?></h2>
    </div>
    <?php } ?>
</div>

<?php
// FOREACH
echo '<div id="items">';
foreach ($tiroirs as $tiroir) {
    echo '<div class="item">';
        echo '<h2>'.$tiroir.'</h2>';
    echo '</div>';
}
echo '</div>';
?>
<div id="items">
    <?php foreach ($tiroirs as $tiroir) { ?>
        <div class="item">
            <h2><?= $tiroir; ?></h2>
        </div>
    <?php } ?>
</div>

<?php

$etudiants = array('Axel','Stella','Maxime','Kevin');
//faites un print_r sur cet array
echo '<pre>';
print_r($etudiants);
echo '</pre>';
// affichez le 4e étudiant de votre array
echo $etudiants[3];
// Ajouter un etudiant au tableau
$etudiants[] = 'Michel';
$etudiants[] = 'Bernard';
//modifiez, un à un, le prenom de chaque etudiant pour qu'il contienne plutôt le prenom ET le nom de famille.
//si vous ne le connaissez pas, soyez créatif.
$etudiants[0] .= ' Bauer';
$etudiants[4] .= ' Drucker';


// foreach => ul => li
echo '<ul>';
foreach ($etudiants as $etudiant) {
    echo '<li>'.$etudiant.'</li>';
}
echo '</ul>';
//construisez un array nommé "nums" contenant les nombres 10 à 20 (avec une boucle toujours)
$nums = array();
for ($i = 10;$i <= 20; $i++) {
    $nums[] = $i;
}
echo '<pre>';
print_r($nums);
echo '</pre>';
//======================================================================
// array associatif
//======================================================================
$livre = array(
    'titre'  => 'le rouge et le noir',
    'annee'  => 1830,
    'pages'  => 640,
    'auteur' => 'Stendal'
);
// afficher le titre du livre dans un h4
echo '<h4 class="title_book">'.$livre['titre'].'</h4>';
echo '<p>pages : '.$livre['pages'].'</p>';
//corriger le nom de l'auteur
$livre['auteur'] = 'Stendhal';
//ajouter l'ISBN (2020239264)
$livre['isbn'] = 2020239264;
//ajouter le prix (5,98)
$livre['price'] = 5.98;
//enlever annee
unset($livre['annee']);
echo '<pre>';
print_r($livre);
echo '</pre>';
foreach ($livre as $key => $value) {
    echo '<p>' . ucfirst($key) . ' : ' . $value . '</p>';
}
//créez un array vide nommé "me"
$me = array();
// key  =>  age, prenom, nom
$me['age'] = 43;
$me['prenom'] = 'Antoine';
$me['nom'] = 'Quidel';
print_r($me);
//affichez votre age
echo $me['age'];
//faites-vous vieillir de 5 ans
$me['age'] += 5;
//affichez votre age
echo $me['age'];
// créez un array vide nommé "mess"
$mess = array();
//ajoutez-y un nombre quelconque
$mess[] = 45;
//ajoutez-y une valeur booléenne
$mess[] = true;
//ajoutez-y votre array $etudiants
$mess[] = $etudiants;
//ajoutez-y une clef "me" ayant pour valeur votre array "me"
$mess['me'] = $me;
//faites un print_r de "mess"
echo '<pre>';
print_r($mess);
echo '</pre>';
// afficher avant dernier etudiant à partir de $mess
    echo $mess[2][4];
// affichez votre age à partir de cet array
    echo $mess['me']['age'];
// modifiez la valeur booléenne à partir de cet array
    $mess[1] = false;
// Faire un ul li des etudiants à partir de $mess
echo '<ul>';
foreach ($mess[2] as $user) {
    echo '<li>' . $user . '</li>';
}
echo '</ul>';

echo '<ul>';
for ($i = 0;$i < count($mess[2]); $i++) {
    echo '<li>' . $mess[2][$i] . '</li>';
}
echo '</ul>';
//==================================
// Les tableaux multidimensionnels
//==================================

$tab = array();
$tab[0] = array('A','C','O');
$tab[1] = array('J','E','O');
$tab[2] = array('T','U','I');
$tab[3] = array('A','P','R');
echo '<pre>';
print_r($tab);
echo '</pre>';
// à partir de $tab ecrire => JUPITER
echo $tab[1][0] . $tab[2][1] . $tab[3][1] . $tab[2][2] . $tab[2][0] . $tab[1][1] . $tab[3][2];

$paiements = array(
    array(
        'montant' => 12.55,
        'date'    => '12/02/2013'
    ),
    array(
        'montant' => 32.50,
        'date'    => '13/02/2013'
    ),
    array(
        'montant' => 112,
        'date'    => '14/02/2013'
    ),
);
// affichez le montant du premier paiement
echo $paiements[0]['montant'];
//affichez la date du dernier paiement
echo $paiements[2]['date'];
//ajoutez un nouveau paiement
$paiements[] = array(
    'montant' => 12,
    'date'    => '15/02/2013'
);
// modifier le montant du dernier paiement ajouté
$paiements[3]['montant'] = 452;

echo '<pre>';
print_r($paiements);
echo '</pre>';
echo '<ul>';
foreach ($paiements as $paiement) {
    echo '<li>le montant est de '.$paiement['montant'].' à la date du '.$paiement['date'].'</li>';
}
echo '</ul>';
echo '<ul>';
for($i = 0;$i < count($paiements); $i++) {
    echo '<li>le montant est de '.$paiements[$i]['montant'].' à la date du '.$paiements[$i]['date'].'</li>';
}
echo '</ul>';

$utilisateurs = [
    ['nom' => 'Mathilde', 'mail' => 'math@gmail.com', 'age' => 24],
    ['nom' => 'Michel', 'mail' => 'michel@bertollucci.com', 'age' => 14],
    ['nom' => 'Amandine', 'mail' => 'amandine@lp.fr', 'age' => 54],
];
$utilisateurs = array(
    array('nom' => 'Mathilde', 'mail' => 'math@gmail.com', 'age' => 24),
    array('nom' => 'Michel', 'mail' => 'michel@bertollucci.com', 'age' => 14),
    array('nom' => 'Amandine', 'mail' => 'amandine@lp.fr', 'age' => 54),
); 
echo '<section id="users">';
foreach ($utilisateurs as $user) {
    echo '<div class="user">';
        echo '<h3>'.$user['nom'].'</h3>';
        echo '<p class="user_email">Email: '.$user['mail'].'</p>';
        echo '<p class="user_age">Age: '.$user['age'].'</p>';
    echo '</div>';
}
echo '</section>';
?>

<section id="users">
    <?php foreach ($utilisateurs as $user): ?>
        <div class="user">
            <h3><?= $user['nom']; ?></h3>
            <p class="user_email">Email: <?= $user['mail']; ?></p>
            <p class="user_age">Age: <?= $user['age']; ?></p>
        </div>
    <?php endforeach; ?>
</section>
