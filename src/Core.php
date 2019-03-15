<?php
namespace BrainGames\Core;

use function \cli\line;
use function \cli\prompt;

function runCore($arrayQuestions, $arrayCorrectAnswers, $numberRound, $gameDescription)
{
    line('Welcome to the Brain Game!');
    line($gameDescription);
    line();
    $name = prompt('May I have your name?');
    line('Hello, %s!', $name);
    line();
    for ($i = 0; $i < $numberRound; $i++) {
        line('Question: %s', $arrayQuestions[$i]);
        $answer = prompt('Your answer: ');
        if ($answer == $arrayCorrectAnswers[$i]) {
            line('Correct!');
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $arrayCorrectAnswers[$i]);
            line("Let's try again, %s!", $name);
            return;
        }
    }
    line('Congratulations, %s!', $name);
}
