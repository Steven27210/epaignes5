<?php

/**
 *
 */
function maPremierFonction()
{
    echo 'Bravo, votre premiere fonction est magnifique';
}

/**
 * @param string $name
 */
function bonjourATous(string $name = 'Antoine')
{
    echo '<p>Bonjour ' . $name . '</p>';
}
// Comprendre le concept d'argument
function division(float $nbre1,float $nbre2) : float
{
    return $nbre1 / $nbre2;
}

function debug(array $tableau)
{
    echo '<pre style="height:100px;overflow-y: scroll;font-size: .7em;padding:10px;font-family: Consolas, Monospace; background-color: #000;color:#fff;">';
    print_r($tableau);
    echo '</pre>';
}

$variable = 12;
function testvariable()
{
    global $variable;
    // les variable sont locale à la fonction
    echo $variable;
}
testvariable();
// string en minuscule et la premiere lettre en majuscule
/**
 * @param string $string
 * @return string
 */
function maj(string $string) : string
{
    // $string = strtolower($string);
    // $string = ucfirst($string);
    //return $string;
    return ucfirst(strtolower($string));
}
$dede = 'aGFhgf HGFhgfH GfhgfJHKJgf Hkjh';
echo maj($dede);
echo maj('JHGJH lkjlkjlkj lkj lkjjLKJJHGJHGJH');
// minus => majuscule => premier lettre en minuscule

/**
 * @param string $string
 * @return string
 */
function minus(string $string) : string
{
    return lcfirst(strtoupper($string));
}
echo minus('JHGJH lkjlkjlkj lkj lkjjLKJJHGJHGJH');

function heure()
{
    echo '<p>il est actuellement: '.date('G').' heure / '.date('i').' minutes</p>';
}
heure();
$defaults = array('avare', 'paresseux', 'ennuyant', 'borné', 'cruel', 'distrait', 'médiocre', 'ringard', 'stupide', 'superficiel');
$meals = array('cuisses de grenouilles', 'pot au feu', 'blanquette', 'quiche lorraine', 'bouillabaisse', 'crème brûlée', 'pêches melba', 'mousse au chocolat', 'tartiflette', 'raclette');
$fruits = array('kiwi','banane','papaye','banane','papaye','banane','papaye','banane','papaye','banane','papaye','banane','papaye','banane','papaye','banane','papaye','banane','papaye','banane','papaye','banane','papaye','banane','papaye');

//créez une fonction nommée "generateGroupName" permettant d'afficher une combinaison d'un plat français au hasard, suivi d'un défaut au hasard,
//afin d'obtenir un résultat du genre "Tartiflette Frustrée".
//l'affichage doit se faire dans une balise HTML "div", et vous devez lui donner une couleur rose.
//tous les mots doivent commencer par une majuscule
function generateGroupName($array1,$array2,$color = 'pink',$balise = 'div')
{
    $str = ucwords($array1[array_rand($array1)] . ' ' . $array2[array_rand($array2)]);
    return '<'.$balise.' style="color:'.$color.';">'.$str.'</'.$balise.'>';
}
echo generateGroupName($meals,$defaults);
echo generateGroupName($fruits,$defaults,'green');
echo generateGroupName($meals,$defaults,'blue');
echo generateGroupName($meals,$defaults,'orange','h2');