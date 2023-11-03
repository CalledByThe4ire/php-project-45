<?php

namespace BrainGames\Games\Progression;

error_reporting(E_ALL & ~E_NOTICE);

function getCorrectAnswer()
{
    return function ($value) {
        [$range, $key] = $value;

        return $range[$key];
    };
}

function getQuestions()
{
    return array_map(function ($key) {
        switch ($key) {
            case "0":
                $range = range(1, 10, 1);
                break;
            case "1":
                $range = range(5, 50, 5);
                break;
            case "2":
                $range = range(10, 100, 10);
                break;
            default:
                break;
        }

        $key = array_rand($range);

        return [$range, $key];
    }, array_keys(array_fill(0, 3, null)));
}
