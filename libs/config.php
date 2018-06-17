<?php
error_reporting( E_ALL & ~E_DEPRECATED & ~E_NOTICE );
ob_start();

require_once("constants.php");
require_once("common_functions.php");

if (version_compare(PHP_VERSION, 5.3, '<') && function_exists('set_magic_quotes_runtime')) set_magic_quotes_runtime(0);

$currentPage = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);


$dboptions = array(
    PDO::ATTR_PERSISTENT => FALSE,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);

try {
    $DB = new PDO(DB_DRIVER . ':host=' . DB_HOST . ';dbname=' . DB_DATABASE, DB_HOST_USERNAME, DB_HOST_PASSWORD, $dboptions);
} catch (Exception $ex) {
    echo errorMessage($ex->getMessage());
    die;
}
?>