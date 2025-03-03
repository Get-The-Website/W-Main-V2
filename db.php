<?php
require_once('connection/dbConnect.php');

$db_handle = new DBController();

if ($db_handle->isConnected()) {
    echo "Database is connected successfully!";
} else {
    echo "Failed to connect to the database!";
}
?>

