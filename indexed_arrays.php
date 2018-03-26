<?php 
  $learn = array('Conditionals', 'Arrays', 'Loops');
  $learn[] = "Let's build something awesome!";
  array_push($learn, "Functions", "Forms", "Objects");
  array_unshift($learn, 'HTML', 'CSS');
  asort($learn);
  var_dump($learn);
  sort($learn);
  var_dump($learn);
/*
  echo 'you removed ' . array_shift($learn);
  unset($learn[1], $learn[2]);
  
  var_dump($learn);
  echo "\n";
  $learn = array_values($learn);
  $learn[0] = "Email";
  var_dump($learn);
  echo "\n";
*/
?>