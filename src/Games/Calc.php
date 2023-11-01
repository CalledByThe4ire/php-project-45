<?php

namespace BrainGames\Games\Calc;

use function cli\line;
use function BrainGames\Engine\run;

function calc($operand1, $operand2, $operator)
{
    switch ($operator) {
        case "+":
            return $operand1 + $operand2;
        case "-":
            return $operand1 - $operand2;
        case "*":
            return $operand1 * $operand2;
        default:
            return;
    }
}

function getCorrectAnswer()
{
    return function ($value) {
        [$operand1, $operand2, $operator] = $value;
        return calc($operand1, $operand2, $operator);
    };
}

function getQuestions()
{
    $questions = array_map(fn () => [mt_rand(1, 5), mt_rand(1, 5)], array_fill(0, 3, null));

    return array_map(function ($value, $key) {
        switch ($key) {
            case 0:
                return [...$value, '+'];
            case 1:
                return [...$value, '-'];
            case 2:
                return [...$value, '*'];
            default:
                return $value;
        }
    }, $questions, array_keys($questions));
}

function runCalculatorGame($userName, $rules)
{
    line($rules);

    [
        "isWinner" => $isWinner,
        "answer" => $answer,
        "correctAnswer" => $correctAnswer
    ] = run("calculator", getQuestions(), getCorrectAnswer());

    if ($isWinner) {
        line("Congratulations, %s!", $userName);
    } else {
        line("%s is wrong answer ;(. Correct answer was \"{$correctAnswer}\".", $answer);
        line("Let's try again, %s!", $userName);
    }
}
