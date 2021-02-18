<?php
/**
 * @param array $tableau
 */
function debug(array $tableau)
{
    echo '<pre style="height:160px;overflow-y: scroll;font-size: .7em;padding:10px;font-family: Consolas, Monospace; background-color: #000;color:#fff;">';
    print_r($tableau);
    echo '</pre>';
}

function imageMovie($movie)
{
    return '<img src="https://www.weblitzer.fr/formation/posters/'.$movie['id'].'.jpg" alt="'.$movie['title'].'">';
}