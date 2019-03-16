<?php
namespace BrainGames\games\Progression;
use function BrainGames\Core\runCore;
use const BrainGames\Core\NUMBERROUND;
function createProgression()
{
    $firstNumber = rand(0, 100);
    $step = rand(0, 100);
    $progression[0] = $firstNumber;
    for ($i = 1; $i < 10; $i++) {
        $progression[$i] = $progression[$i - 1] + $step;
    }
    return $progression;
}
function runProgression()
{
    $gameDescription = 'What number is missing in the progression?';
    for ($i = 0; $i < NUMBERROUND; $i++) {
        $progression = createProgression();
        $missingPossition = array_rand($progression);
        $missingNumber = $progression[$missingPossition];
        $progression[$missingPossition] = '..';
        $arrayQuestionsAnswers[$i][0] = implode(' ', $progression);
        $arrayQuestionsAnswers[$i][1] = $missingNumber;
    }
    runCore($arrayQuestionsAnswers, $gameDescription);
}
