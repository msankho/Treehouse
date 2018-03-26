<?php 

$iceCream = array("Alena"=> "Black Cherry", 
                  'Treasure' => 'Chocolate', 
                  'Dave' => 'Cookies and Cream',
                  'Rialla' => 'Strawberry'
                 );

var_dump($iceCream);
echo 'Alena loves ' . $iceCream["Alena"] , ' flavored Ice Cream.\n';
  
$keys = array (
  1 => 'a',
  '1' => 'b',
  1.5 => 'c',
  true => 'd'
    
);

var_dump($keys);
?>