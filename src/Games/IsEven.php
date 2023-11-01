<?php

namespace BrainGames\Games\IsEven;

use function cli\line;
use function BrainGames\Engine\run;

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

function runIsEvenGame($userName, $rules)
{
    line($rules);

    [
        "isWinner" => $isWinner,
        "answer" => $answer,
        "correctAnswer" => $correctAnswer
    ] = run("is-even", getQuestions(), getCorrectAnswer());

    if ($isWinner) {
        line("Congratulations, %s!", $userName);
    } else {
        line("%s is wrong answer ;(. Correct answer was \"{$correctAnswer}\".", $answer);
        line("Let's try again, %s!", $userName);
    }
}
