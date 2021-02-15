<?php
echo '<p>Hello world</p>';
// phpinfo();
echo phpversion();
//=======================================
// VARIABLES
//=======================================
// STRING (Chaine de caractères)
$helloLeMonde = 'Bonjour à tous';
echo $helloLeMonde;
$title = 'Annonces Immobiliere'; ?>
<h1><?php echo $title; ?></h1>
<h1><?= $title; ?></h1>
<?php
// type INT
$number = 20;
$year = 2021;
// type FLOAT
$pourcentage = 19.6;
echo $pourcentage;
// type BOOLEAN
$jeSuisLeFormateur = true;  // 1
$isOpen = false;
// type NULL
$pasDeValeur = NULL;
// type composées (tableau, objet)
    // tableau
$tableau = array(12,'beau loft plein sud','menagerie','maison de plein pied');

echo '<pre>';
print_r($tableau);
//var_dump($tableau);
echo '</pre>';

echo $tableau[0];
echo $tableau[1];
echo $tableau[2]; ?>

<?php echo 'ici une instruction' ?>
<?php
// =============================
// COMMENTAIRES
// =============================
/* ici un autre commentaire */
/*
 *  ici un commentaire 1
 *  ici un commentaire 2
 *  ici un commentaire 3
 */
// =============================
// DEBOGAGE
// =============================
// print_r, die();
    // die('ok');

echo '<pre>';
print_r($GLOBALS);
echo '</pre>';
// =============================
// CONCATENATION =>  .
// =============================
    $chaine = 'Salut';
    $chaine2 = 'Buzz';
    echo '<p>' . $chaine . ' ' . $chaine2 . '!</p>';
    $data1 = 'Formation';
    $data2 = 'PHP';

    // methode tout en PHP
    echo '<h2>Bienvenue à la '.$data1.' sur le '.$data2.'</h2>';
    // methode en alternance
    ?>

    <h2>Bienvenue à la <?php echo $data1; ?> sur le <?php echo $data2; ?></h2>
<?php
$a = '<h2>';
$a .= 'Bienvenue à la ';
$a .= $data1;
$a .= ' sur le ';
$a .= $data2;
$a .= '</h2>';
echo $a;

// '' vs "" , echappement
    echo "<p class=\"item\">titre</p>";
    echo '<p class="item">titre</p>';

    echo '<p>'.$data1.'</p>';
    echo "<p>$data1 fdsjh $data2 dskjhjh  kjdshf k</p>";

echo 'Arnold a dit: I\'ll be back';
echo "Arnold a dit: \"I'll be back\"";
echo 'Arnold a dit: "I\'ll be back"';

$traitees = 'lu';
$la = 'ici';
echo 'Les variables ne sont pas $traitees $la';
echo "Les variables sont $traitees $la";
//=====================================
// Les conditions --- if elseif else
//=====================================
//  Si / Sinon Si / Sinon
    $mot1 = 'musique';
    $mot2 = 'sport';
    $mot3 = 'musique';

    if($mot1 != $mot2) {
        echo 'Les mots sont différents';
    } else {
        echo 'les mots sont identiques';
    }

    // echo $mot1 != $mot2; // 1
    $success = true;
    if($success) {
        echo 'dede';
    }
    $age = 3;
    if ($age >= 18) {
        //echo 'majeur';
        $majeur = true;
    } else {
        //echo 'mineur';
        $majeur = false;
    }
    // Structure ternaire
    $majeur = ($age >= 18) ? true : false;
    if($majeur) {
        echo 'Vous etes majeur';
    } else {
        echo 'Vous etes mineur';
    }
    echo $majeur == true ? 'Vous etes majeur' : 'Vous etes mineur';

    // moins de 18 => mineur
    // plus de 78 => retraite
    // sinon je suis ni mineur ni retraité
    if($age < 18) {
        echo '<p>Vous etes mineur</p>';
        if($age < 6) {
            echo 'en marternelle';
        }
    } elseif ($age > 78) {
        echo '<p>Vous etes retraité</p>';
    } else {
        echo '<p>Vous etes ni retraité ni mineur</p>';
    }
    if($age < 18): ?>
        <p>je suis mineur</p>
        <?php if($age < 6): ?>
            <p>en marternelle</p>
        <?php endif; ?>
    <?php elseif($age > 78): ?>
        <p>je suis retraité</p>
    <?php else: ?>
        <p>Vous etes ni retraité ni mineur</p>
    <?php endif;

$i = 1;
if ($i == 0) {
    echo "i égal 0";
} elseif ($i == 1) {
    echo "i égal 1";
} elseif ($i == 2) {
    echo "i égal 2";
} else {
    echo 'i inconnue';
}
// switch
switch ($i) {
    case 0:
        echo "i égal 0";
        break;
    case 1:
        echo "i égal 1";
        break;
    case 2:
        echo "i égal 2";
        break;
    default:
        echo 'i inconnue';
        break;
}

//=====================================
// Les conditions ---  Opérateurs de comparaison
//=====================================
// $a == $b ,   Egal, TRUE si $a est égal à $b
// $a === $b ,  identique,  TRUE si $a est égal à $b et qu'ils sont de même type.
   //  12 == '12'  => TRUE
   //  12 === '12'  => FALSE
// $a != $b,  Différent , TRUE si $a est différent de $b
// $a !== $b,  Différent, TRUE si $a est différent de $b ou bien s'ils ne sont pas du même type.

// $a < $b,    Plus petit que,   TRUE si $a est strictement plus petit que $b.
// $a > $b  ,  Plus grand,      TRUE si $a est strictement plus grand que $b.
// $a <= $b ,   Inférieur ou égal,   TRUE si $a est plus petit ou égal à $b.
// $a >= $b,   Supérieur ou égal,   TRUE si $a est plus grand ou égal à $b.
//=====================================
// Les conditions ---  Les opérateurs logiques
//=====================================
$homme = true;
$age = 43;
if($homme == true || $age >= 18) {
    echo 'Vous pouvez acceder au site';
} else {
    echo 'Accés interdit';
}

// ET  => &&, AND
// OU  => ||, OR
// !  => negation ,  Not (Non)

$a = '42';
$b = ($a === 42); // false

if ($a > 0 && !$b) {
    echo 'Pomme';
} elseif ($b && $a <= 42) {
    echo 'Poire';
} elseif (!$a || $b > 42) {
    echo 'Abricot';
}
//===========================================
// Arithmétique et incrémentation ----  opérateurs de base (+-/*)
//===========================================
// ////////   Opérations élémentaires
    $a = 12;
// -$a,     Négation ,    Opposé de $a.  // -12
// $a + $b  ,  Addition ,  Somme de $a et $b.
// $a - $b,    Soustraction   ,   Différence de $a et $b.
// $a * $b,    Multiplication,   Produit de $a et $b.
// $a / $b,    Division,    Quotient de $a et $b.
// $a % $b  ,   Modulo ,   Reste de $a divisé par $b.
    // $i % 2 == 0 (=> $i est pair)
// $a ** $b   ,  Exponentielle
$calcul = 4 + 6 * 3; // 22
$chiffre = 47;
if($chiffre % 2 == 0) {
    echo $chiffre.' est un chiffre pair';
} else {
    echo $chiffre.' est un chiffre impair';
}

//===================
// Incrémentation -- décrementation
//===================
    $x = 4;
    $x++;
    echo $x; // 5
    echo 'La valeur de x avec post-incrementation est de ' . $x++; // 5
    echo $x; // 6

    echo 'La valeur de x avec pre-incrementation est de ' . ++$x; // 7
    echo $x; // 7
    echo $x--; // 7
    echo $x // 6
//===================
// //  les opérateurs combinés +=, -=, etc.
//===================
$html = '<h2>';
$html .= 'titre extra bien';
$html .= '</h2>';
// .=  Concatène Egal  $ma_ch .= "salut";  $ma_ch = $ma_ch . "salut";
echo $html;
// +=  Plus Egal $x += 2;  $x = $x + 2;
$x += 5;
// -=  Moins Egal  $x -= 4;  $x = $x - 4;
$x -= 15;
// *=  Multiplie Egal  $x *= 3;  $x = $x * 3;
// /=  Divise Egal $x /= 2;  $x = $x / 2;
// %=  Module Egal $x %= 5;  $x = $x % 5;