<?php
 
$permitted_chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
  
function secure_generate_string($input, $strength = 5, $secure = true) {
    $input_length = strlen($input);
    $random_string = '';
    for($i = 0; $i < $strength; $i++) {
        if($secure) {
            $random_character = $input[random_int(0, $input_length - 1)];
        } else {
            $random_character = $input[mt_rand(0, $input_length - 1)];
        }
        $random_string .= $random_character;
    }
  
    return $random_string;
}
 
$string_length = 6;
$captcha_string = secure_generate_string($permitted_chars, $string_length);
 
 
?>