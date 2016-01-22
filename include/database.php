<?php
const DB_HOST = "localhost";
const DB_NAME = "eprojectmate_db";
const DB_USER = "root";
const DB_PASSWORD = "";
const DB_HOST_PORT = 3306;
const DB_PAGE_SIZE = 20;
// 3 character 
const DB_UPDATE_PREFIX = "DB_U_";
const DB_INSERT_PREFIX = "DB_I_";
const DB_WHERE_PREFIX  = "DB_W_";
const DB_DELETE_PREFIX = "DB_D_";

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, DB_HOST_PORT);
if (!$conn) {
    die("CANNOT CONNECT TO DB!");
}
mysqli_query($conn, "SET NAMES 'UTF8'");

function db_insert_form($table_name){
    global $conn;
    
    $query = "INSERT INTO $table_name VALUES ";
    $comma = "";
    foreach ($_POST as $key => $value ) {
        $prefix = substr($key, 0, 5);
        if ($prefix == DB_INSERT_PREFIX){
            $field = substr($key, 5);
            $query .= $comma . "$field = '". escape_string($value) ."'";
            $comma = ", ";
        }
    }
    die($query);
    mysqli_query($conn, $query);
}

function db_update_form($table_name){
    global $conn;    
    $query = "UPDATE $table_name SET  ";
    $comma = ""; 
    $temp  = " WHERE ";
    $where = "";
    foreach ($_POST as $key => $value ) {
       $prefix = substr($key, 0, 5);
       //die($prefix);
       switch ($prefix) {
           // with update field
           case DB_UPDATE_PREFIX:
                $field = substr($key, 5);
                $query .= $comma . "$field = '". escape_string($value) ."'";
                $comma = ", ";
           break;
           
           // with where field
           case DB_WHERE_PREFIX:
               $field = $field = substr($key, 5);
               $where .= $temp . "$field = '". escape_string($value) ."' ";
               $temp = " AND ";
           break;
       }
    }
    mysqli_query($conn, $query);
}


function db_select($select_query){
    global $conn;
    $result = mysqli_query($conn, $select_query);
    $assoc = mysqli_fetch_all($result, MYSQL_ASSOC);
    //mysqli_free_result($result);
    return $assoc;
}

function db_limit($page){
    $offset = ($page-1) * DB_PAGE_SIZE;
    if ($offset < 0) {$offset = 0;}
    return " LIMIT $offset, " . DB_PAGE_SIZE;
}