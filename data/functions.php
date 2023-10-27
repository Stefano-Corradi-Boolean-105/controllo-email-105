<?php


function checkEmail($email){
  $result = false;
  // controllo la presenza della chiocciola e del punto
  if(str_contains($email, '@') && str_contains($email, '.')){
    $result = true;
  }

  return $result;

}