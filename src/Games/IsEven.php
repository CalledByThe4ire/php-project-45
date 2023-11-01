<?php

namespace BrainGames\Games\IsEven;

use function cli\line;
use function cli\prompt;

use function BrainGames\Engine\run;

function isEven($number)
{
    return $number % 2 === 0;
}

function getCorrectAnswer()
{
    return function ($number) {
        if (isEven($number)) {
            return "yes";
        } else {
            return "no";
        }
    };
}

function getQuestions()
{
    return array_map(fn () => mt_rand(1, 100), array_fill(0, 3, null));
}
