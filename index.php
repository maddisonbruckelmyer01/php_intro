<!DOCTYPE html>
<html>
<body>
<head>
<meta charset="UTF-8">
<title>Add Couselors</title>
</head>
<body>
<form action="insert.php" method="post">
<p>
<label for="hi">Name: </label>
<input type="text" name="counselor" id="bye">
</p>
</form>
</body>
</head>

<?php
require_once("./resources/config.php");

$result = pg_query($dbconn, "SELECT name FROM counselors");

echo "<table>\n";
while($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach($line as $col_value) {
        echo "\t\t<td>$col_value</td>\n";
    }
    echo "</table>\n<br>";
}

pg_free_result($result);

pg_close($dbconn);
?>
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