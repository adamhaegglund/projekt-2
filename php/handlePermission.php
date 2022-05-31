<?php

$dbase = new sqlite3 ("./projektarbete.db");
$username = $_POST['username'];
$rank = $_POST['rank'];

$sql = 'UPDATE users SET is_admin = NULL WHERE user_name = :uname';
$stmt = $dbase->prepare($sql);
$stmt->bindParam(":uname", $username);
$result = $stmt->execute();

$sql = 'UPDATE users SET is_admin = :rank WHERE user_name = :uname';
$stmt = $dbase->prepare($sql);
$stmt->bindParam(":rank", $rank);
$result = $stmt->execute();

?> 