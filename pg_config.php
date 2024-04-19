<?php


$conn = pg_connect("
    host= localhost
    port = 5432
    dbname = EmpowerEd
    user = postgres
    password= 9817163604   
    ");
if (!$conn) {
    die("Not connected!");
}
echo "Connected!";

// Get the data from HTML form and escape it so that it is safe to put into a SQL query.

?>