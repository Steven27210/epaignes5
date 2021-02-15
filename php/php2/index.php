<?php

$url = 'https://www.php.net/';
$image = 'https://cdn.alsacreations.net/xmedia/doc/full/php-logo.png';
$text = 'logo php';
$width = 200;

// methode en alternance


?>
<a href="<?php echo $url; ?>">
    <img src="<?php echo $image; ?>" alt="<?php echo $text; ?>" width="<?php echo $width; ?>px">
</a>
<?php
// methode tout en php
echo '<a href="'.$url.'"><img src="'.$image.'" alt="'.$text.'" width="'.$width.'px" /></a>';

// methode .=
$html = '<a href="'.$url.'">';
    $html .= '<img src="'.$image.'" alt="'.$text.'" width="'.$width.'px" />';
$html .= '</a>';
echo $html;



