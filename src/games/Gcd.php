<?php
namespace BrainGames\games\Gcd;

use function BrainGames\Core\runCore;
use const BrainGames\Core\ROUNDS;

const DESCRIPTION = 'Find the greatest common divisor of given numbers.';
const MIN = 1;
const MAX = 100;

function calculateGcd($firstNumber, $secondNumber)
{
    while ($firstNumber !== 0 && $secondNumber !== 0) {
        if ($firstNumber < $secondNumber) {
            $secondNumber = $secondNumber % $firstNumber;
        } else {
            $firstNumber = $firstNumber % $secondNumber;
        }
    }
    return strval($firstNumber + $secondNumber);
}

function runGcd()
{
    for ($i = 0; $i < ROUNDS; $i++) {
        $firstNumber = rand(MIN, MAX);
        $secondNumber = rand(MIN, MAX);
        $question = "{$firstNumber} {$secondNumber}";
        $correctAnswer = calculateGcd($firstNumber, $secondNumber);
        $questionsAnswers[$i] = [$question, $correctAnswer];
    }
    runCore($questionsAnswers, DESCRIPTION);
}
