<?php
namespace BrainGames\games\Prime;

use function BrainGames\Core\runCore;
use const BrainGames\Core\ROUNDS;

const DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';
const MIN = 1;
const MAX = 100;

function isPrime($number)
{
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i < $number; $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}

function runPrime()
{
    for ($i = 0; $i < ROUNDS; $i++) {
        $question = rand(MIN, MAX);
        $correctAnswer = isPrime($question) ? 'yes' : 'no';
        $gameData[$i] = [$question, $correctAnswer];
    }
    runCore($gameData, DESCRIPTION);
}
