<?php
namespace BrainGames\games\Calc;
use function BrainGames\Core\runCore;

$autoloadPath1 = __DIR__ . '/../../../autoload.php';
$autoloadPath2 = __DIR__ . '/../vendor/autoload.php';
if (file_exists($autoloadPath1)) {
    require_once $autoloadPath1;
} else {
    require_once $autoloadPath2;
}
function runCalc()
{
    $numberRound = 3;
    $arrayOperations = ["+", "-", "*"];
    $gameDescription = 'What is the result of the expression?';
    for ($i = 0; $i < $numberRound; $i++) {
        $firstNumber = rand();
        $secondNumber = rand();
        $key = array_rand($arrayOperations);
        $arrayQuestions[$i] = $firstNumber . " " . $arrayOperations[$key] . " " . $secondNumber;
        if ($key === 0) {
            $arrayCorrectAnswers[$i] = $firstNumber + $secondNumber;
        } elseif ($key === 1) {
            $arrayCorrectAnswers[$i] = $firstNumber - $secondNumber;
        } else {
            $arrayCorrectAnswers[$i] = $firstNumber * $secondNumber;
        }
    }
    runCore($arrayQuestions, $arrayCorrectAnswers, $numberRound, $gameDescription);
}
