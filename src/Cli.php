<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

function welcomeUserAndGetUserName()
{
    line("Welcome to the Brain Games!");
    $name = prompt("May I have your name?");
    line("Hello, %s!", $name);

    return $name;
}

function printGameResults($userName, $results)
{
    [
        "isWinner" => $isWinner,
        "answer" => $answer,
        "correctAnswer" => $correctAnswer,
    ] = $results;

    if ($isWinner) {
        line("Congratulations, %s!", $userName);
    } else {
        line("%s is wrong answer ;(. Correct answer was \"{$correctAnswer}\".", $answer);
        line("Let's try again, %s!", $userName);
    }
}
