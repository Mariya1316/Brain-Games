<?php
namespace BrainGames\games\Even;
use function BrainGames\Core\runCore;
use const BrainGames\Core\ROUNDS;
const DESCRIPTION = 'Answer "yes" if number even otherwise answer "no".';
const MIN = 1;
const MAX = 100;
function isEven($number)
{
    return $number % 2 === 0;
}
function runEven()
{
    for ($i = 0; $i < ROUNDS; $i++) {
        $question = rand(MIN, MAX);
        $correctAnswer = isEven($question) ? 'yes' : 'no';
        $questionsAnswers[$i] = [$question, $correctAnswer];
    }
    runCore($questionsAnswers, DESCRIPTION);
}
