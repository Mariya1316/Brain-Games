<?php
namespace BrainGames\games\Prime;
use function BrainGames\Core\runCore;
use const BrainGames\Core\ROUNDS;
const DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';
const MIN = 1;
const MAX = 100;
function isPrime($number)
{
    if ($number > 1) {
        for ($i = 2; $i < $number; $i++) {
            if ($number % $i === 0) {
                return false;
            }
        }
    } else {
        return false;
    }
    return true;
}
function runPrime()
{
    for ($i = 0; $i < ROUNDS; $i++) {
        $question = rand(MIN, MAX);
        $correctAnswer = isPrime($question) ? 'yes' : 'no';
        $questionsAnswers[$i] = [$question, $correctAnswer];
    }
    runCore($questionsAnswers, DESCRIPTION);
}
