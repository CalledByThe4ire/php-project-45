<?php

namespace BrainGames\Games\Calc;

error_reporting(E_ALL & ~E_NOTICE);

function calc(int $operand1, int $operand2, string $operator): int
{
    if ($operator === "+") {
        return $operand1 + $operand2;
    } elseif ($operator === "-") {
        return $operand1 - $operand2;
    } elseif ($operator === "*") {
        return $operand1 * $operand2;
    }
}

function getCorrectAnswer()
{
    return function ($value) {
        [$operand1, $operand2, $operator] = $value;

        return calc($operand1, $operand2, $operator);
    };
}

function getQuestions(): array
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
