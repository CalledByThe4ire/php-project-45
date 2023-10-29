<?php

namespace BrainGames\IsEven;

use function cli\line;
use function cli\prompt;

function isEven($number)
{
    return $number % 2 === 0;
}

function getCorrectAnswer($number)
{
    if (isEven($number)) {
        return "yes";
    } else {
        return "no";
    }
}

function runIsEvenGame($name)
{
    $numbers = array_map(fn () => mt_rand(1, 100), array_fill(0, 3, null));

    line('Answer "yes" if the number is even, otherwise answer "no".');

    foreach ($numbers as $value) {
        $answer = prompt("Question: {$value}");
        $correctAnswer = getCorrectAnswer($value);

        line("Your answer: %s", $answer);

        if ($answer === $correctAnswer) {
            line("Correct!");
        } else {
            line("%s is wrong answer ;(. Correct answer was '{$correctAnswer}'.", $answer);
            return line("Let's try again, %s!", $name);
        }
    }

    line("Congratulations, %s!", $name);
}
