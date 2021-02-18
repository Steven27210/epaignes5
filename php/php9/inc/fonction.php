<?php
/**
 * @param array $tableau
 */
function debug(array $tableau)
{
    echo '<pre style="height:60px;overflow-y: scroll;font-size: .7em;padding:10px;font-family: Consolas, Monospace; background-color: #000;color:#fff;">';
    print_r($tableau);
    echo '</pre>';
}

function cleanXss(string $key)
{
    return trim(strip_tags($_POST[$key]));
}
// Validation formulaire

function validText($errors,$data,$key,$min =2,$max = 50)
{
    if(!empty($data)) {
        if(mb_strlen($data) < $min) {
            $errors[$key] = 'min '.$min.' caractères';
        } elseif(mb_strlen($data) > $max) {
            $errors[$key] = 'max '.$max.' caractères';
        }
    } else {
        $errors[$key] = 'Veuillez renseigner ce champ';
    }
    return $errors;
}


function validEmail($errors,$data,$key)
{
    if(!empty($data)) {
        if (!filter_var($data, FILTER_VALIDATE_EMAIL)) {
            $errors[$key] = 'Veuillez renseigner un email valide';
        }
    } else{
        $errors[$key] = 'Veuillez renseigner un email';
    }
    return $errors;
}

function validUrl($errors,$data,$key)
{
    if(!empty($data)) {
        if (!filter_var($data, FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED)) {
            $errors[$key] = 'Veuillez renseigner une url valide';
        }
    } else{
        $errors[$key] = 'Veuillez renseigner une url';
    }
    return $errors;
}