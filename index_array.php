<?php

$fruits = ["Apple", "Banana", "Cherry"];

echo "Original Array: ";
print_r($fruits);

array_push($fruits, "Date", "Elderberry");
echo "\nAfter Push Operation: ";
print_r($fruits);

$removedElement = array_pop($fruits);
echo "\nAfter Pop Operation: ";
print_r($fruits);


echo "\nPopped Element: $removedElement\n";
?>

