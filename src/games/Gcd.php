<?php
namespace BrainGames\games\Gcd;
use function BrainGames\Core\runCore;
use const BrainGames\Core\NUMBERROUND;
function calculateGcd($firstNumber, $secondNumber)
{
    if ($firstNumber < $secondNumber) {
        $minNumber = $firstNumber;
    } else {
        $minNumber = $secondNumber;
    }
    for ($j = $minNumber; $j > 0; $j--) {
        if ($firstNumber % $j === 0 && $secondNumber % $j === 0) {
            return $j;
        }
    }
}
function runGcd()
{
    $gameDescription = 'Find the greatest common divisor of given numbers.';
    for ($i = 0; $i < NUMBERROUND; $i++) {
        $firstNumber = rand(1, 100);
        $secondNumber = rand(1, 100);
        $arrayQuestionsAnswers[$i][0] = $firstNumber . " " . $secondNumber;
        $arrayQuestionsAnswers[$i][1] = calculateGcd($firstNumber, $secondNumber);
    }
    runCore($arrayQuestionsAnswers, $gameDescription);
}
