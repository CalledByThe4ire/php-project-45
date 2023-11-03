<?php

namespace BrainGames\Games\Calc;

function calc(int $operand1, int $operand2, string $operator): mixed
{
    switch ($operator) {
        case "+":
            return $operand1 + $operand2;
        case "-":
            return $operand1 - $operand2;
        case "*":
            return $operand1 * $operand2;
        default:
            return error_log("Unknown operator: {$operator}");
    }
}

function getCorrectAnswer(): callable
{
    return function (array $value): int {
        [$operand1, $operand2, $operator] = $value;

        return calc($operand1, $operand2, $operator);
    };
}

function getQuestions(): iterable
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
