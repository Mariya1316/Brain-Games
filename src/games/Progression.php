<?php
namespace BrainGames\games\Progression;
use function BrainGames\Core\runCore;
use const BrainGames\Core\ROUNDS;
const DESCRIPTION = 'What number is missing in the progression?';
const MIN = 1;
const MAX = 100;
const LENGTHPROGRESSION = 10;
function createProgression()
{
    $start = rand(MIN, MAX);
    $step = rand(MIN, MAX);
    for ($i = 0; $i < LENGTHPROGRESSION; $i++) {
        $progression[$i] = $start + $step * $i;
    }
    return $progression;
}
function runProgression()
{
    for ($i = 0; $i < ROUNDS; $i++) {
        $progression = createProgression();
        $missingPossition = array_rand($progression);
        $correctAnswer = $progression[$missingPossition];
        $progression[$missingPossition] = '..';
        $question = implode(' ', $progression);
        $questionsAnswers[$i] = [$question, $correctAnswer];
    }
    runCore($questionsAnswers, DESCRIPTION);
}
