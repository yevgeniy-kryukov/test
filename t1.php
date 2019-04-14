<?php

function fourLetterWords($sentence) 
{
    $n = 0;
    $words = explode(' ', $sentence);
    for ($i = 0; $i < count($words); $i++) {
        if (strlen($words[$i]) == 4) $n++;
    }
    return $n;
}

var_dump(fourLetterWords('This sentence is fine'));

// multibyte
function fourLetterWordsMB($sentence) 
{
    $n = 0;
    $words = explode(' ', $sentence);
    for ($i = 0; $i < count($words); $i++) {
        if (mb_strlen($words[$i]) == 4) $n++;
    }
    return $n;
}

var_dump(fourLetterWordsMB('Это тест функции'));
