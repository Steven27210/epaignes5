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