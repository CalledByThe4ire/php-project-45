<?php

namespace BrainGames\Games\IsEven;

function isEven(int $number): bool
{
    return $number % 2 === 0;
}

function getCorrectAnswer(): callable
{
    return fn (int $number): string => isEven($number) ? "yes" : "no";
}

function getQuestions(): iterable
{
    return array_map(fn () => mt_rand(1, 100), array_fill(0, 3, null));
}
