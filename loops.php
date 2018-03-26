<?php 
  $learn = array('Conditionals', 'Arrays', 'Loops');
  $learn[] = "Let's build something awesome!";
  array_push($learn, "Functions", "Forms", "Objects");
  array_unshift($learn, 'HTML', 'CSS');
  asort($learn);

$count = 0;
while ((list($key, $val) = each($learn)) && $count++ < 2) {
    echo "$key => $val\n";
}

?>