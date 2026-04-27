<?php
// for loop count (1-10)
for($i=1; $i<=10; $i++){
    echo "$i <br>";
}
echo "<br>";
// while loop
$j = 1;
while ($j<10){
    echo "$j <br>";
    $j++;
}
//foreach
echo "<br>";
$numbers = ["remy", "angel", "queen"];
foreach($numbers as $number){
    echo "$number <br>";
}
// do while loop
$u = 1;
do{
    echo "hello <br>";
    $u++;
}while($u<10);
// simple question: you can use a for loop or a while loop
// to print out the numbers 1-10 and skip 3 and 5?
for($z = 1; $z<=10; $z++){
    if ($z == 3 || $z == 5){
        continue;
    }
    echo "$z <br>";
}
echo "<br>";
// print out the array value $books = ["Creativity", "C++", "Php"];
$books = ["Creativity", "C++", "Php"];
foreach($books as $book){
    echo "$book <br>";
}
