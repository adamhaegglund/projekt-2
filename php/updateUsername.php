<?php
session_start();
if(isset($_POST['newUsername'])){
$newUsername= $_POST['newUsername'];
$userID = $_SESSION['id'];
$dbase = new sqlite3 ('./projektarbete.db');
$sql = "SELECT user_name FROM users WHERE user_id = :user_id";
        $query = $dbase -> prepare($sql);
        $query->bindParam(":user_id", $userID, SQLITE3_TEXT);
        $query -> execute();
        $result2=$query -> execute();
        $find = $result2->fetchArray(SQLITE3_ASSOC);
        $UsernameDB=$find['user_name'];

        if($UsernameDB != $newUsername){
            $sql = "UPDATE users SET user_name = null WHERE user_id= :user_id";
            $query = $dbase -> prepare($sql);
            $query->bindParam(":user_id", $userID, SQLITE3_TEXT);
            $query -> execute();

            $sql = "UPDATE users SET user_name = :user_name WHERE user_id= :user_id";
            $query = $dbase -> prepare($sql);
            $query->bindParam(":user_id", $userID, SQLITE3_TEXT);
             $query->bindParam(":user_name", $newUsername, SQLITE3_TEXT);
             $result2=$query -> execute();
             $find2 = $result2->fetchArray(SQLITE3_ASSOC);
             $_SESSION['username'] = $newUsername;
             //echo 'Successfully updated your username.';
             header("Location: /projekt-2/routes/user-routes/profile.html");
            }else {
                echo 'Incorrect information. Please try again.';
            }
        }

?>