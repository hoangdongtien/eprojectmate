<?php
require_once 'require_common.php';

function escape_string($string){
    global $conn;
    return htmlentities(mysqli_escape_string($conn, $string));
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

function base_url($url){
    $self = $_SERVER["PHP_SELF"];
    $self = substr($self, 0, strpos($self, "index.php"));
    $self = "http://" . $_SERVER["HTTP_HOST"] . $self. $url;
    return $self;
}
