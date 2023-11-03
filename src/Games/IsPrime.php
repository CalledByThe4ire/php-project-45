<?php

namespace BrainGames\Games\IsPrime;

function isPrime(int $n, int $i = 2): bool
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

function getCorrectAnswer(): callable
{
    return fn (int $number): string => isPrime($number) ? "yes" : "no";
}

function getQuestions(): iterable
{
    return array_map(fn () => mt_rand(1, 100), array_fill(0, 3, null));
}
