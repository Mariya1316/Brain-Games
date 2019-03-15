<?php
namespace BrainGames\BrainEven;

use function \cli\line;
use function \cli\prompt;

function run()
{
    line('Welcome to the Brain Game!');
    line('Answer "yes" if number even otherwise answer "no".');
    line();
    $name = prompt('May I have your name?');
    line('Hello, %s!', $name);
    line();
    for ($i = 0; $i < 3; $i++) {
        $randomNumber = rand();
        line('Question: %s', $randomNumber);
        $isEven = $randomNumber % 2 === 0 ? 'yes' : 'no';
        $answer = prompt('Your answer: ');
        if ($answer === $isEven) {
            line('Correct!');
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $isEven);
            line("Let's try again, %s!", $name);
            break;
        }
    }
    if ($i === 3) {
        line('Congratulations, %s!', $name);
    }
}
