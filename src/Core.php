<?php
namespace BrainGames\Core;

use function \cli\line;
use function \cli\prompt;
const NUMBERROUND = 3;
function runCore($arrayQuestionsAnswers, $gameDescription)
{
    line('Welcome to the Brain Game!');
    line($gameDescription);
    line();
    $name = prompt('May I have your name?');
    line('Hello, %s!', $name);
    line();
    for ($i = 0; $i < NUMBERROUND; $i++) {
        line('Question: %s', $arrayQuestionsAnswers[$i][0]);
        $answer = prompt('Your answer ');
        if ($answer == $arrayQuestionsAnswers[$i][1]) {
            line('Correct!');
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $arrayQuestionsAnswers[$i][1]);
            line("Let's try again, %s!", $name);
            return;
        }
    }
    line('Congratulations, %s!', $name);
}
