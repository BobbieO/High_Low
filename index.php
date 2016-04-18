<?php

`say -v Zarvox Shall, we, play, a, game`;

//game generates random number
$gameNum = mt_rand (1, 100);
echo "The computer is secretly thinking {$gameNum}\n";

//pause for voice
sleep (2);

// game prompts user for her guess
fwrite(STDOUT, "I'm thinking of a number from 1-100. What is it?\n");
`say -v Zarvox I am thinking of a number from 1 to 100, What is it`;

//counts guesses
$guessAttempts = 0;

do {
    $userGuess = trim(fgets(STDIN));
   
    if ($userGuess > $gameNum) {
        fwrite(STDOUT, "Nope, too high. Try again!\n");
        `say -v Hysterical Nope, too high, Try again`;
        $guessAttempts++;
    } elseif ($userGuess < $gameNum) {
        fwrite(STDOUT, "Nope, too low. Try again!\n");
        `say -v Hysterical Nope, too low, Try again`;
        $guessAttempts++;
    } 

} while ($userGuess != $gameNum);

fwrite(STDOUT, "You won! {$gameNum} was my number!\n");
`say -v Bad News You won, {$gameNum} was my number`;

fwrite(STDOUT, "It took {$guessAttempts} times to read my mind.\n");
`say -v Zarvox It took {$guessAttempts} times to read my mind`;

fwrite(STDOUT, "Play again?\n");











