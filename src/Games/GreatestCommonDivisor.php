<?php

namespace BrainGames\Games\GreatestCommonDivisor;

function gcd(int ...$numbers): int
{
    $gcd = function ($a, $b) use (&$gcd) {
        return $b ? $gcd($b, $a % $b) : $a;
    };

    return $gcd(...$numbers);
}

function getCorrectAnswer(): callable
{
    return fn (iterable $value): int => gcd(...$value);
}

function getQuestions(): iterable
{
    return array_map(fn () => [mt_rand(1, 100), mt_rand(1, 100)], array_fill(0, 3, null));
}
