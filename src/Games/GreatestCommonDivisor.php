<?php

namespace BrainGames\Games\GreatestCommonDivisor;

error_reporting(E_ALL & ~E_NOTICE);

function gcd(...$numbers)
{
    $gcd = function ($a, $b) use (&$gcd) {
        return $b ? $gcd($b, $a % $b) : $a;
    };

    return $gcd(...$numbers);
}

function getCorrectAnswer()
{
    return fn ($value) => gcd(...$value);
}

function getQuestions()
{
    return array_map(fn () => [mt_rand(1, 100), mt_rand(1, 100)], array_fill(0, 3, null));
}
