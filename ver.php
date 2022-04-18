
<?php 
$string = 'Sarah has 4 dolls and 6 bunnies.';
preg_match_all('!\d!', $string);
print_r($matches); 
?> 
