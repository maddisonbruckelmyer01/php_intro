<?php 
require_once("./resources/config.php");
$counselor = $_REQUEST["counselor"];
$sql = "INSERT INTO counselors (name) VALUES ('$counselor')";
if (pg_query($dbconn, $sql)) {
    echo 'Successfully added.';
} else {
    echo "error: could not able to execute $sql.";
    pg_error($dbconn);
}
?>

