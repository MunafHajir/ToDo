<?php
require_once 'database/db.php';
$pdo = Connection::make();

require_once 'database/library.php';
$ajaxdb = selectAll($pdo, "diary");


var_dump($ajaxdb)

?>
