<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<?php
// PDO Connections
require 'Record.php';
require_once './connection/pdo_connection4.php'; //API 
$Record = new Classes\Record($db);
$data = $Record->getAll(); //fetch data
?>

<title>Biodata</title>

<?php
include_once 'libraries.php';

// contents
include './includes/content1.php';
include './includes/table.php';
?>