<?php
//for loop: we use when we know the number of times we want to loop
for($i=0; $i<=10; $i++){
    echo "$i <br>";
}
// do while loop we don't know the number of times // we first output before we check the condition
echo "<br>";
$j = 10;
do{
    echo "$j <br>";
    $j--;
}while($j>=-5);
// while-loop we don't know the number of times //we check the condition before we output
echo "<br>";
$i = 0;
while ($i < 20){
    echo "$i <br>";
    $i++;
}
// foreach loop we know the number of times //
echo "<br>";
$students = array("John", "Jane", "Jack", "Jill", "Recky");
foreach($students as $i){
    echo "$i <br>";
}
echo "<br>";
for($k=0; $k<4; $k++){
    echo "{$students[$k]}<br>";
}

