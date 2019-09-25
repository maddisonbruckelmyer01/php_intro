<?php
 $dbconn = pg_connect("host=localhost dbname=prime_app") 
    or die('Could not connect: '. pg_last_error());

?>