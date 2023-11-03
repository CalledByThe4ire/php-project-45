<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function getQuestion(mixed $value, string $type): mixed
{
    switch ($type) {
        case "is-even":
        case "is-prime":
            return $value;

        case "calculator":
            [$operand1, $operand2, $operator] = $value;

            return "{$operand1} {$operator} {$operand2}";

        case "gcd":
            [$a, $b] = $value;

            return "{$a} {$b}";

        case "progression":
            [$range, $key] = $value;

            return implode(" ", array_map(fn ($k, $v) => $k === $key ? ".." : $v, array_keys($range), $range));
        default:
            return $value;
    }
}

function makeGame(string $gameName, iterable $questions, callable $validator): array
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
        "isWinner" => $isAnswerCorrect ?? false,
        "answer" => $answer ?? "",
        "correctAnswer" => $correctAnswer ?? ""
    ];
}
