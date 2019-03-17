<?php
namespace BrainGames\Core;

use function \cli\line;
use function \cli\prompt;

const ROUNDS = 3;

function runCore($questionsAnswers, $gameDescription)
{
    line('Welcome to the Brain Game!');
    line($gameDescription);
    line();
    $name = prompt('May I have your name?');
    line('Hello, %s!', $name);
    line();
    for ($i = 0; $i < ROUNDS; $i++) {
        [$question, $correctAnswer] = $questionsAnswers[$i];
        line('Question: %s', $question);
        $answer = prompt('Your answer ');
        if ($answer === $correctAnswer) {
            line('Correct!');
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $correctAnswer);
            line("Let's try again, %s!", $name);
            return;
        }
    }
    line('Congratulations, %s!', $name);
}
