<?php
function escape_string($string){
    global $con;
    return htmlspecialchars(mysqli_escape_string($con, $string));
}

function get($param){
    if (isset($_GET[$param])){
        $value = $_GET[$param];
        $value = escape_string($value);
    } else {
        return null;
    }
}

function post($param){
    if (isset($_POST[$param])){
        $value = $_POST[$param];
        $value = escape_string($value);
    } else {
        return null;
    }
}

function request($param){
    if (isset($_REQUEST[$param])){
        $value = $_REQUEST[$param];
        $value = escape_string($value);
    } else {
        return null;
    }
}
