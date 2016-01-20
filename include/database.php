<?php
const DB_HOST = "localhost";
const DB_NAME = "eprojectmate_db";
const DB_USER = "root";
const DB_PASSWORD = "";
const DB_HOST_PORT = 3306;


$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, DB_HOST_PORT);
if (!$conn) {
    die("CANNOT CONNECT TO DB!");
}


function executeQuery($query) {
    global $conn;
}

function executeUpdate(){
    global $conn;
}
