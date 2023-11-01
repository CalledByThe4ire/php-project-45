<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function getQuestion($value, $type)
{
    switch ($type) {
        case "is-even":
            return $value;
        case "calculator":
            [$operand1, $operand2, $operator] = $value;

            return "{$operand1} {$operator} {$operand2}";
        default:
            return $value;
    }
}

function run($gameName, $questions, $validator)
{
    foreach ($questions as $value) {
        $question = getQuestion($value, $gameName);
        $answer = prompt("Question: {$question}");
        $correctAnswer = $validator($value);
        $isAnswerCorrect = $answer == $correctAnswer;

        line("Your answer: %s", $answer);

        if ($isAnswerCorrect) {
            line("Correct!");
        } else {
            break;
        }
    }

    return [
        "isWinner" => $isAnswerCorrect,
        "answer" => $answer,
        "correctAnswer" => $correctAnswer
    ];
}
