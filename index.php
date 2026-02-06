<?php

// PDO Connections
include 'Record.php';
require_once './connection/pdo_connection4.php'; //API 
$Record = new Classes\Record($db);
$data = $Record->getAll(); //fetch data
?>

<title>Biodata</title>

<?php
include_once 'libraries.php';

// contents
include './includes/content.php';
include './includes/table.php';
?>