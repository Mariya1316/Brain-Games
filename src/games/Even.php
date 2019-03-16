<?php
namespace BrainGames\games\Even;
use function BrainGames\Core\runCore;
use const BrainGames\Core\NUMBERROUND;
function isEven($number)
{
    return $number % 2 === 0;
}
function runEven()
{
    $gameDescription = 'Answer "yes" if number even otherwise answer "no".';
    for ($i = 0; $i < NUMBERROUND; $i++) {
        $question = rand(1, 100);
        $arrayQuestionsAnswers[$i][0] = $question;
        $correctAnswer = isEven($question) ? 'yes' : 'no';
        $arrayQuestionsAnswers[$i][1] = $correctAnswer;
    }
    runCore($arrayQuestionsAnswers, $gameDescription);
}
