<?php

$possible_words = ["Bulbasaur", "Charmander", "Squirtle", "Pikachu", "Eevee", "Mew", "Mewtwo", "Ditto", "Snorlax", "Lapras"]; 

define("Max_Tries", 5);

echo "Welcome to the Pokemon guessing game!<br />";

$choosen_word = $possible_words[rand(0, count($possible_words) - 1)];
$choosen_word= strtolower($choosen_word);
$word_length = strlen($choosen_word);
$discoverd_letters = str_pad("", $word_length, "_");

$attempt = 0;

do { 
echo "The word to guess has {$word_length} letters.<br />";
echo "You have " . Max_Tries . " attempts to guess the word.<br />";

$player_letter= readline("Guess a letter: ");
$player_letter= strtolower($player_letter);

if (str_contains($choosen_word, $player_letter) ) {
    $offset = 0;
    while ( $letter_position = strpos($choosen_word, $player_letter, $offset)!== false ) {
        $discoverd_letters[$letter_position] = $player_letter;
        $offset = $letter_position + 1;
    }
} else {
    $attempt++;
    echo "The letter {$player_letter} is not in the word.<br />";

    if ($attempt >= Max_Tries) {
        echo "You have reached the maximum number of attempts.<br />";
        echo "The word was {$choosen_word}.<br />";
    }
} } while ($attempt < Max_Tries && $discoverd_letters !== $choosen_word);

?>
