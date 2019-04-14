<?php

function almostPalindromes($str) 
{
    $n = 0;
    $len = strlen($str);
    for ($i = 0; $i < $len; $i++) {
        if ($str[$i] != $str[$len - $i - 1]) {
            $n++;
        }
    }
    return $n;
}

var_dump(almostPalindromes('fox'));

// multibyte
function almostPalindromesMB($str) 
{
    $n = 0;
    $len = mb_strlen($str);
    for ($i = 0; $i < $len; $i++) {
        if (mb_substr($str, $i, 1) != mb_substr($str, $len - $i - 1, 1)) {
            $n++;
        }
    }
    return $n;
}

var_dump(almostPalindromesMB('топот'));
