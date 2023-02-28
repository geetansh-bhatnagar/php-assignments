<?php
function password_generate() 
{
  $data = '12345geetansh';
  return (str_shuffle($data));
}
  echo password_generate()."\n";
?>