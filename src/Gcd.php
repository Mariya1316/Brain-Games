<?php
namespace BrainGames\games\Gcd;
use function BrainGames\Core\runCore;

$autoloadPath1 = __DIR__ . '/../../../autoload.php';
$autoloadPath2 = __DIR__ . '/../vendor/autoload.php';
if (file_exists($autoloadPath1)) {
    require_once $autoloadPath1;
} else {
    require_once $autoloadPath2;
}
function runGcd()
{
    $numberRound = 3;
    $gameDescription = 'Find the greatest common divisor of given numbers.';
    for ($i = 0; $i < $numberRound; $i++) {
        $firstNumber = rand(0, 1000);
        $secondNumber = rand(0, 1000);
        $arrayQuestions[$i] = $firstNumber . " " . $secondNumber;
        if ($firstNumber < $secondNumber) {
            $minNumber = $firstNumber;
        } else {
            $minNumber = $secondNumber;
        }
        for ($j = $minNumber; $j > 0; $j--) {
            if ($firstNumber % $j === 0 && $secondNumber % $j === 0) {
                $arrayCorrectAnswers[$i] = $j;
                break;
            }   
        }
    }
    runCore($arrayQuestions, $arrayCorrectAnswers, $numberRound, $gameDescription);
}
