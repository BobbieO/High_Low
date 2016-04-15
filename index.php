<?php


//game generates random number
$gameNum = mt_rand (1, 100);
echo "The computer is secretly thinking {$gameNum}\n";

// game prompts user for her guess
fwrite(STDOUT, "I'm thinking of a number from 1-100. What is it?\n");

//counts guesses
$guessAttempts = 0;

do {

    $userGuess = trim(fgets(STDIN));

    if ($userGuess > $gameNum) {
        fwrite(STDOUT, "Nope, too high. Try again!\n");
        $guessAttempts++;
    } elseif ($userGuess < $gameNum) {
        fwrite(STDOUT, "Nope, too low. Try again!\n");
        $guessAttempts++;
    } 

} while ($userGuess != $gameNum);

fwrite(STDOUT, "You won! {$gameNum} was my number!\n");
fwrite(STDOUT, "It took {$guessAttempts} times to read my mind.\n");











