<?php

namespace BrainGames\Games\IsPrime;

function isPrime($n, $i = 2)
{
    if ($n <= 2) {
        return ($n === 2);
    }

    if ($n % $i === 0) {
        return false;
    }

    if ($i * $i > $n) {
        return true;
    }

    return isPrime($n, $i + 1);
}

function getCorrectAnswer()
{
    return fn ($number) => isPrime($number) ? "yes" : "no";
}

function getQuestions()
{
    return array_map(fn () => mt_rand(1, 100), array_fill(0, 3, null));
}
