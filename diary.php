<?php
session_start();

if(!isset($_SESSION['user_id']) || !isset($_SESSION['logged_in'])){
    //User not logged in. Redirect them back to the login.php page.
    header('Location: login.php');
    exit;
}

else {
require 'diary.view.php';
require_once 'database/db.php';
require_once 'database/library.php';
$pdo = Connection::make();

$note = "";
$table  = "diary";

$diarydb = selectAll($pdo, $table);

require 'timeline.php';
if(isset($_POST['addnote'])){
$note = !empty($_POST['note']) ? trim($_POST['note']) : null;


$day = date("Y/m/d");


$sql = "INSERT into diary(Day, Note) VALUES (:day , :note)";
$stmt = $pdo->prepare($sql);

$stmt->bindValue(':day', $day);
$stmt->bindValue(':note', $note);

$result = $stmt->execute();

}
}





 ?>
