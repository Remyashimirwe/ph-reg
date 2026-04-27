<?php
//arrays in php
//index array: use index in accessing values [0,1,2]
$students = array("John", "Jane", "Jack", "Jill", 15);
var_dump($students);
echo "<br>";
echo $students[3];
echo "<br>";
// associative array: we use the key to access values
$studentsInfo = array("Name" => "John", "Gender" => "male", "age" => 20, "level" => "L5");
echo "Hello {$studentsInfo['Name']} welcome to the class of {$studentsInfo['level']}<br>";
echo "My is {$studentsInfo['Name']} I'm {$studentsInfo['age']} years old";
// multidimensional array: two or more arrays
echo "<br>";
$months = array(
    array("31 days", 14, 15, "Rexy", "Jane"),
    array("28 days or 29 days", "21 days of work")
);
var_dump($months);
echo "<br>";
echo $months[0][4];
// Simple test on the array so that we can understand the array
$test = array(1,2,3,4,5,6,7,8,9,10); // indexed array
$product = array("ProductName" => "Apple", "Price" => 1000, "Quantity" => 10); // associative array
$parents = array("Father" => "John", "Children" => array("Jane", "Jack")); // nested array

