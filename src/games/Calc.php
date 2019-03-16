<?php
namespace BrainGames\games\Calc;
use function BrainGames\Core\runCore;
use const BrainGames\Core\NUMBERROUND;
function runCalc()
{
    $arrayOperations = ["+", "-", "*"];
    $gameDescription = 'What is the result of the expression?';
    for ($i = 0; $i < NUMBERROUND; $i++) {
        $firstNumber = rand(0, 100);
        $secondNumber = rand(0, 100);
        $keyOperation = array_rand($arrayOperations);
        $arrayQuestionsAnswers[$i][0] = $firstNumber . " " . $arrayOperations[$keyOperation] . " " . $secondNumber;
        switch ($keyOperation) {
            case 0:
                $arrayQuestionsAnswers[$i][1] = $firstNumber + $secondNumber;
                break;
            case 1:
                $arrayQuestionsAnswers[$i][1] = $firstNumber - $secondNumber;
                break;
            case 2:
                $arrayQuestionsAnswers[$i][1] = $firstNumber * $secondNumber;
                break;
        }
    }
    runCore($arrayQuestionsAnswers, $gameDescription);
}
