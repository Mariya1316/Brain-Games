<?php
namespace BrainGames\games\Even;
use function BrainGames\Core\runCore;

$autoloadPath1 = __DIR__ . '/../../../autoload.php';
$autoloadPath2 = __DIR__ . '/../vendor/autoload.php';
if (file_exists($autoloadPath1)) {
    require_once $autoloadPath1;
} else {
    require_once $autoloadPath2;
}
function isEven($number)
{
    return $number % 2 === 0;
}
function runEven()
{
    $numberRound = 3;
    $gameDescription = 'Answer "yes" if number even otherwise answer "no".';
    for ($i = 0; $i < $numberRound; $i++) {
        $arrayQuestions[$i] = rand();
        $arrayCorrectAnswers[$i] = isEven($arrayQuestions[$i]) ? 'yes' : 'no';
    }
    runCore($arrayQuestions, $arrayCorrectAnswers, $numberRound, $gameDescription);
}