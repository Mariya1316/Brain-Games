<?php
namespace BrainGames\games\Prime;
use function BrainGames\Core\runCore;
use const BrainGames\Core\NUMBERROUND;
function isPrime($number)
{
    for ($i = 2; $i < $number; $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}
function runPrime()
{
    $gameDescription = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    for ($i = 0; $i < NUMBERROUND; $i++) {
        $question = rand(1, 100);
        $arrayQuestionsAnswers[$i][0] = $question;
        $correctAnswer = isPrime($question) ? 'yes' : 'no';
        $arrayQuestionsAnswers[$i][1] = $correctAnswer;
    }
    runCore($arrayQuestionsAnswers, $gameDescription);
}
