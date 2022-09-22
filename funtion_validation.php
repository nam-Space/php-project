<?php

#username
function is_username($username){
    $partten = "/^[A-Za-z0-9]{6,32}$/";
    if(preg_match($partten, $_POST['username'], $matchs))
  return true;
  return false;
}


#password
function is_password($password){
  $partten = "/^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/";
  if(preg_match($partten, $_POST['password'], $matchs))
  return true;
  return false;
}

#error
function form_error($label_field){
  global $error;
 if (!empty($error[$label_field])) return "<p class ='error'> $error[$label_field] </p>";
}


function set_value($label_field){
  global $$label_field;
  if(!empty($$label_field)) return $$label_field;
}

function is_phone($number_phone){
  $partten = "/^(03|08|01|[7|6|8|9])+([0-9]{8})$/";
  if(preg_match($partten, $_POST['phone'], $matchs))
  return true;
  return false;
}
// #username
// $pattern = '/@(.+)/';
// $string = 'tranquy52003@gmail.com';
// preg_match($pattern, $string, $matches);
// echo '<pre>';
// print_r($matches);
// echo '</pre>';
?>