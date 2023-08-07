<?php
// Array of quotes
$quotes = [
    "Do or do not there is no try - Yoda",
    "He that breaks a thing to find out what it is has left the path of wisdom. - Gandalf",
    "Only a small part is played in great deeds by any hero. - Gandalf",
    "Named must be your fear before banishing it you can. - Yoda",
    "The wise speak only of what they know. - Gandalf",
];

// Get a random index
$randomIndex = array_rand($quotes);

// Return the random quote
echo $quotes[$randomIndex];
?>