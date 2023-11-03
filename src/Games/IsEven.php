<?php

namespace BrainGames\Games\IsEven;

error_reporting(E_ALL & ~E_NOTICE);

function isEven($number)
{
    return $number % 2 === 0;
}

function getCorrectAnswer()
{
    return fn ($number) => isEven($number) ? "yes" : "no";
}

function getQuestions()
{
    return array_map(fn () => mt_rand(1, 100), array_fill(0, 3, null));
}
