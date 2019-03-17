<?php
namespace BrainGames\games\Calc;
use function BrainGames\Core\runCore;
use const BrainGames\Core\ROUNDS;
const DESCRIPTION = 'What is the result of the expression?';
const OPERATIONS = array("+", "-", "*");
const MIN = 0;
const MAX = 100;
function calculateAnswer($keyOperation, $firstNumber, $secondNumber)
{
    switch ($keyOperation) {
        case 0:
            return strval($firstNumber + $secondNumber);
        case 1:
            return strval($firstNumber - $secondNumber);
        case 2:
            return strval($firstNumber * $secondNumber);
    }
}
function runCalc()
{
    for ($i = 0; $i < ROUNDS; $i++) {
        $firstNumber = rand(MIN, MAX);
        $secondNumber = rand(MIN, MAX);
        $keyOperation = array_rand(OPERATIONS);
        $question = "{$firstNumber} {OPERATIONS[$keyOperation]} {$secondNumber}";
        $correctAnswer = calculateAnswer($keyOperation, $firstNumber, $secondNumber);
        $questionsAnswers[$i] = [$question, $correctAnswer];
    }
    runCore($questionsAnswers, DESCRIPTION);
}
