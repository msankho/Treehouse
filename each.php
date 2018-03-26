<?php 
$foo = array ("bob", "fred", "jussi", "jouni", "egon", "marliese");
$bar = each($foo);
print_r( $bar);

$fruit = array('a' => 'apple', 'b' => 'banana', 'c' => 'cranberry');

while (list($key, $val) = each($fruit)) {
    echo "$key => $val\n";
}
?>
