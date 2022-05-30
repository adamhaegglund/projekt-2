<?php
session_start();
if(isset($_POST['confirmPassword'])){
$confirmPassword = $_POST['confirmPassword'];
$newPassword = $_POST['newPassword'];
$userID = $_SESSION['id'];
$dbase = new sqlite3 ('./projektarbete.db');

        if($confirmPassword == $newPassword){

            $sql = "UPDATE users SET user_password = null WHERE user_id= :user_id";
            $query = $dbase -> prepare($sql);
            $query->bindParam(":user_id", $userID, SQLITE3_TEXT);
            $query -> execute();
            $encrypt_new_password = sha1($newPassword . $salt);

            $sql = "UPDATE users SET user_password = :user_password WHERE user_id= :user_id";
            $query = $dbase -> prepare($sql);
            $query->bindParam(":user_id", $userID, SQLITE3_TEXT);
            $query->bindParam(":user_password", $encrypt_new_password, SQLITE3_TEXT);
            $query -> execute();
            echo 'Successfully updated your password.';
            }else {
                echo 'Incorrect information. Please try again.';
            }
};
        

?>
