<?php
namespace BrainGames\games\Progression;

use function BrainGames\Core\runCore;
use const BrainGames\Core\ROUNDS;

const DESCRIPTION = 'What number is missing in the progression?';
const MIN = 1;
const MAX = 100;
const LENGTH_PROGRESSION = 10;

function createProgression($start, $step, $lengthProgression)
{
    for ($i = 0; $i < LENGTH_PROGRESSION; $i++) {
        $progression[$i] = $start + $step * $i;
    }
    return $progression;
}

function runProgression()
{
    for ($i = 0; $i < ROUNDS; $i++) {
        $start = rand(MIN, MAX);
        $step = rand(MIN, MAX);
        $progression = createProgression($start, $step, LENGTH_PROGRESSION);
        $missingPossition = array_rand($progression);
        $correctAnswer = strval($progression[$missingPossition]);
        $progression[$missingPossition] = '..';
        $question = implode(' ', $progression);
        $questionsAnswers[$i] = [$question, $correctAnswer];
    }
    runCore($questionsAnswers, DESCRIPTION);
}
