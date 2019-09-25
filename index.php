<!DOCTYPE html>
<html>
<body>

<?php 
$a = 5;
$A = 7;
$z = 0;


function add() {
    global $a, $A;
    $z = $a + $A; 
    print "The sum is : $z <br>";
}

add();

<<<ABC
Hello
ABC;
?>

<?php 
$name_one = array("Maddison", "Miles", "Dustin", "Andy");
echo "Looping using foreach: \n <br>";
foreach ($name_one as $val) {
    echo $val. "\n <br>";
}

$round = count($name_one);
echo "\nThe number of names are $round\n <br>";
?>

<?php
function sum(int $x, int $y) {
   $z = $x + $y;
   return $z;
}
echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4);
echo "<br>";
?>

<?php
class Car {
   function Car() {
       $this->model = "VW";
   }
}

// create an object
$herbie = new Car();
// show object properties
echo $herbie->model;
?>


</body>
</html>