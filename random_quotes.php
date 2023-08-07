<?php
// Array of quotes
$quotes = [
    "I choose myself and I will always continue to choose myself. - Wizard Liz",
    "Be enough for yourself first, the rest of the world can wait. - Wizard Liz",
    "Once you start seeing the results of taking care of yourself, it becomes addictive. - Wizard Liz",
    "I enjoy continuously becoming a better version of myself. - Wizard Liz",
    "What makes a person successful is the fact that they do not quit. - Wizard Liz",
];

// Get a random index
$randomIndex = array_rand($quotes);

// Return the random quote
echo $quotes[$randomIndex];
?>