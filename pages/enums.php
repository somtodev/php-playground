<?php

enum Gender{
  case Male;
  case Female;
};

$gender = Gender::Female;

switch($gender){
  case gender::Male:
    echo "male";
    break;
  case gender::Female:
    echo "male";
    break;
  default:
    echo "Others";
    break;
};

?>
