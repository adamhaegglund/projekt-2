<?php
session_start();
$dbase = new sqlite3 ("./projektarbete.db");
$userid = $_SESSION['id'];
$q=$_POST["newEmail"];

    $sql = 'SELECT COUNT (user_mail) AS foundmail FROM users WHERE user_mail = :mail ';
    $stmt = $dbase->prepare($sql);
    $stmt->bindParam(":mail", $q);
    $result = $stmt->execute();
    $rows = $result->fetchArray();
    
    if($rows['foundmail'] ==  0){
        $sql = 'UPDATE users
        SET user_mail = NULL 
        WHERE user_id = :id';
        $stmt = $dbase->prepare($sql);
        $stmt->bindParam(":id", $userid);
        $result = $stmt->execute();
        
        
        
        $sql2 = 'UPDATE users SET user_mail = :mail WHERE user_id = :usId';
        $stmt2 = $dbase->prepare($sql2);
        $stmt2->bindParam(":usId", $userid );
        $stmt2->bindParam(":mail", $q);
        $result2 = $stmt2->execute();
        $_SESSION['mail'] = $q;
        header("Location: /projekt-2/routes/user-routes/profile.html");
    } else {
        header("Location: /projekt-2/routes/user-routes/profile.html");
    }

?>