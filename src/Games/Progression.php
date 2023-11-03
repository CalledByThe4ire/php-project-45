<?php

namespace BrainGames\Games\Progression;

function getCorrectAnswer(): callable
{
    return function (array $value): int {
        [$range, $key] = $value;

        return $range[$key];
    };
}

function getQuestions(): iterable
{
    return array_map(function ($key) {
        switch ($key) {
            case 0:
                $range = range(1, 10, 1);
                break;
            case 1:
                $range = range(5, 50, 5);
                break;
            case 2:
                $range = range(10, 100, 10);
                break;
            default:
                break;
        }

        $key = isset($range) ? array_rand($range) : null;
        $range = isset($range) ? $range : [];

        return [$range, $key];
    }, array_keys(array_fill(0, 3, null)));
}
