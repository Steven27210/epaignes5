<?php
//////////////////////////////////////
// BOUCLES
//////////////////////////////////////
// WHILE
$i = 0;
$num = 50;
while ($i < 10) {
    $num--;
    $i++;
}
echo $num; // 40
// DOWHILE
do{
    $i++;
    $num--;
} while ($i < 20);
echo $num;  // 30
//==================================
// à l'aide d'une boucle for()....
//==================================
for ($i = 0;$i <= 20;$i++){
    echo $i;
}
echo '<br>';
// affichez les nombres de 1 à 100 avec un espace entre chaque
for ($i = 1;$i <= 100;$i++){
    echo $i . ' ';
}
echo '<br>';
//affichez les nombres de 5 à 25, séparé par des virgules
for($i = 5;$i <= 25;$i++) {
    echo $i;
    if($i != 25) {
        echo ',';
    }
}
echo '<br>';
//affichez les multiples de 5 compris entre 0 et 100
for($i = 0;$i <= 100;$i+=5) {
    echo $i . '-';
}
echo '<br>';
//affichez les nombres pairs de 20 à 60, séparés par des balises "<br />"
for($i = 19;$i <= 61;$i++) {
    if($i % 2 == 0) {
        echo $i . '<br>';
    }
}
echo '<br>';
//affichez toutes les années depuis votre naissance. Chaque année doit être affichée dans une balise "<p>", ayant une classe "birth_date"
for ($i = 1978;$i <= date('Y'); $i++){
    echo '<p class="birth_date">'.$i.'</p>';
}
//affichez les nombres de 50 à 25, en ordre décroissant, sauf le nombre 30.
for($i = 50;$i >= 25;$i--) {
    if($i != 30) {
        echo $i . ',';
    }
}
//affichez, en HTML, les nombres de 1 à 50. Les chiffres de 40 à 48 doivent être en vert.
for ($i = 1;$i <= 50;$i++) {
//    if($i >= 40 && $i <= 48) {
//        $color = 'green';
//    } else {
//        $color = 'black';
//    }
    $color = ($i >= 40 && $i <= 48) ? 'green' : 'black';
    echo '<span style="color:'.$color.';">'.$i.'</span>';
}

$musiques = array('batterie','basse','guitare','piano','percussion','chant', 'gimbarde', 'mpc1000', 'Moog');

echo '<pre>';
print_r($musiques);
echo '</pre>';

for ($i = 0;$i < count($musiques); $i++) {
    echo '<p class="instru instru_'.$i.'">'.$musiques[$i].'</p>';
}

foreach ($musiques as $instrument)
{
    echo '<p>'.$instrument.'</p>';
}

$fruits = array('Kiwi','Banane','Papaye','Orange','Pêche');
echo '<pre>';
print_r($fruits);
echo '</pre>';
echo '<ul>';
for ($i = 0;$i < count($fruits); $i++) {
    echo '<li>' . $fruits[$i] . '</li>';
}
echo '</ul>';

echo '<ul>';
foreach ($fruits as $key => $fruit) {
    echo '<li>'.$key.' - ' . $fruit . '</li>';
}
echo '</ul>';
