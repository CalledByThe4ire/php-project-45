<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function run($name, $condition, $questions, $validator)
{
    line($condition);

    foreach ($questions as $value) {
        $correctAnswer = $validator($value);
        $answer = prompt("Question: {$value}");

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
