<?php require_once 'include/require_common.php'; 

base_url("asset/bootstrap/css/bootstrap.min.css");

$path_info = "";
if (isset($_SERVER["PATH_INFO"])) {
    $path_info = $_SERVER["PATH_INFO"];
}

$layout = $path_info . ".php";

require_once $layout;
