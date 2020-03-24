<?php
 
  $action = 'JUMP';
 
  if ($action == 'JUMP') {
    echo "Мне нравится прыгать.";
  } elseif ($action == 'SWIM') {
    echo "Я люблю плавать.";
  } elseif ($action == 'FLY') {
    echo "Хотел бы я научиться летать.";
  }
 
  switch ($action) {
    case 'JUMP':
      echo "Мне нравится прыгать.";
      break;
    case 'SWIM':
      echo "Я люблю плавать.";
      break;
    case 'FLY':
      echo "Хотел бы я научиться летать.";
      break;
  }
 
?>