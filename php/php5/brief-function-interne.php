<?php
// echo "<br />";  // pour un retour à la ligne
//Manuel seulement ! Internet interdit !
// ne pas réinventer la roue, fonction exist surement deja !!!
$fable = "Maître corbeau sur son arbre perché tenait en son bec un fromage";

//calculez le nombre de caractères dans la chaîne ci-dessous, et stockez-la dans une variable nommée "myStringLength" :
$myStringLength = mb_strlen($fable);
//affichez la variable myStringLength
echo $myStringLength;
echo '<br>';
//calculez le nombre de mots dans la phrase précédente, et affichez le
/**
 * @param $str
 * @return int
 */
function str_word_count_utf8($str) {
    return count(preg_split('~[^\p{L}\p{N}\']+~u',$str));
}
echo str_word_count_utf8($fable); // 12
echo '<br>';
//affichez la chaîne toute en majuscule
echo mb_strtoupper($fable);
echo '<br>';
//affichez la chaîne avec seulement la première lettre de la phrase en majuscule
echo ucfirst($fable);
echo '<br>';
//affichez la chaîne avec la première lettre de chaque mot en majuscule
echo ucwords($fable);     echo '<br>';
//affichez les 10 premiers caractères de la chaîne
echo mb_substr($fable,0,10);     echo '<br>';
//affichez la chaîne à l'envers (le dernier caractère en premier)
function mb_strrev($str){
    $r = '';
    for ($i = mb_strlen($str); $i>=0; $i--) {
        $r .= mb_substr($str, $i, 1);
    }
    return $r;
}
echo mb_strrev($fable);
echo '<br>';
//remplacez tous les "a" par des "?"
echo strtr($fable,'a','?');
echo '<br>';
//envoyez-vous la chaîne par email, avec la fonction mail()
//mail('quidelantoine@gmail.com', 'sujet de la fable', $fable);
echo '<br>';
//affichez la valeur de pi (π) à l'écran (une fonction existe)
$pi = pi();
echo $pi;
echo '<br>';
//arrondissez la valeur de pi à 2 décimale, et affichez la
echo round($pi,2);
echo '<br>';
//générez un nombre aléatoire entre 10 et 20, et affichez le
echo rand(10,20);
echo '<br>';
//stockez tous les mots de la chaîne $fable dans un array nommé "words"
$words = explode(' ',$fable);
print_r($words);
echo '<br>';
//affichez le premier mot de votre array
echo $words[0];
echo '<br>';
//affichez le deuxième mot de votre array
echo $words[1];
echo '<br>';
//affichez le dernier mot de votre array, sans compter le nombre d'élément (une fonction spécifique existe)
echo '<br>';
echo end($words);
echo $words[count($words) - 1];
//essayez la fonction suivante : print_r($words);
print_r($words);
echo '<br>';
//reformez une chaîne à partir de votre array. Chaque mot doit être recollés avec un "<br />". Stockez cette chaîne dans une variable nommée "fable2"
$fable2 = implode('<br>',$words);
echo $fable2;
echo '<br>';
//Affichez l'année actuelle
echo date('Y');
echo '<br>';
//Affichez la date au format suivant : jj/mm/yyyy
echo date('d/m/Y');
echo '<br>';
//affichez tous les paramètres de configuration de PHP dans votre page (une fonction existe pour ça)
// phpinfo();

// nombre de secondes depuis le 1er janvier 1970
echo time(); echo '<br>';
$dateNaissance = strtotime('1978-02-06 15:15:10');
echo $dateNaissance;
echo date('l jS \of F Y h:i:s A',$dateNaissance);
$tomorrow = strtotime('tomorrow');
echo date('l',$tomorrow); // Wednesday
$twomouths = strtotime('+2months');
$dateBizzare = strtotime('+1week 2 days 4 hours 2 seconds');
echo date('l',$dateBizzare);