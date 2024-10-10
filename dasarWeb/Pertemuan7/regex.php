<?php
// $pattern ='/[a-z]/';
// $text = 'This is a Sample Text.';
// if (preg_match($pattern, $text)) {
//     echo 'Huruf kecil ditemukan!';
// } else {
//     echo 'Tidak ada huruf kecil!';
// }
?>

<?php
// $pattern = '/[0-9]+/';
// $text = 'There are 123 apples.';
// if(preg_match($pattern, $text, $matches)){
//     echo 'Cocokkan: ' .$matches[0];
// } else {
//     echo 'Tidak ada yang cocok!';   
// }
?>

<?php
// $pattern = '/apple/';
// $replacement = 'banana';
// $text = 'I like apple pie.';
// $new_text = preg_replace($pattern, $replacement, $text);
// echo $new_text;
?>

<?php
// $pattern ='/go*d/';
// $text = 'god is good';
// if (preg_match($pattern, $text, $matches)) {
//     echo 'Cocokkan: ' .$matches[0];
// } else {
//     echo 'Tidak ada yang cocok!';
// }
?>

<?php
$pattern ='/g{1,2}/';
$text = 'ggg is gggg';
if (preg_match($pattern, $text, $matches)) {
    echo 'Cocokkan: ' .$matches[0];
} else {
    echo 'Tidak ada yang cocok!';
}
?>

