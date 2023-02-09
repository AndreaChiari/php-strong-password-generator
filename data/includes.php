<?php
function password_generate($pswlength) 
{
    $password = '';

    $characters = 'abcdefghilmnopqrstuvzABCDEFGHILMNOPQRSTUVZ1234567890@#?!()[]';

    $total_characters = mb_strlen($characters);

   //generazione psw

   while(mb_strlen($password) < $pswlength){
    $index = rand(0, $total_characters - 1);

    $random_character = $characters[$index];

    $password .= $random_character;
   }

   
   session_start();
   $_SESSION['password'] = $password;
   
   return true;
};
