<?php

session_start();
$dbase = new sqlite3 ("/projekt-2/php/LoginRegister/projektarbete.db");
$userId = $_SESSION['id'];
$content = $_POST['commentContent'];
date_default_timezone_set('UTC');
$tdate = date("Y/m/d") . " " . date("H:i");

$sql = 'INSERT INTO posts (post_by, post_content, comment_date) VALUES (:id, :content, :da)';
$stmt = $dbase->prepare($sql);
$stmt->bindParam(":id", $userId);
$stmt->bindParam(":content", $content);
$stmt->bindParam(":da", $tdate);
$result = $stmt->execute();

$dbase->close();
?>