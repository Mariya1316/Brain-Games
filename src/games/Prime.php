<?php
namespace BrainGames\games\Prime;
use function BrainGames\Core\runCore;
use const BrainGames\Core\ROUNDS;
const DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';
const MIN = 1;
const MAX = 100;
function isPrime($number)
{
    $quantityDivisors = 0;
    for ($i = 1; $i <= $number; $i++) {
        if ($number % $i === 0) {
            $quantityDivisors += 1;
        }
    }
    return $quantityDivisors === 2 ? true : false;
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
