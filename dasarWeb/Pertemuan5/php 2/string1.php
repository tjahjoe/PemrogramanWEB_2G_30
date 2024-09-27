<?php
$loremIpsum = "Lorem ipsum dolor sit amet consectetur 
adipisicing elit. Laborum, blanditiis quam dolorem 
ratione iste consequuntur et fugit exercitationem. Porro 
voluptates earum itaque eum amet delectus incidunt culpa 
dolores excepturi laboriosam.";

echo "<p>{$loremIpsum}</p>";
echo "Panjang Karakter: " . strlen($loremIpsum) .  "<br>";
echo "Panjang kata: " . str_word_count($loremIpsum) . "<br>";
echo "<p>" . strtoupper($loremIpsum) . "</p>";
echo "<p>" . strtolower($loremIpsum) . "</p>";
?>
