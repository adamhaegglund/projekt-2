<!-- Login handle -->
<?php

//if(isset($_POST['password'])){
@session_start();

$dbase = new sqlite3 ("./projektarbete.db");
date_default_timezone_set('UTC');

$password = $_POST['password']; 
$username = $_POST['username'];

$sql = "SELECT * FROM users WHERE user_name = :uname";
$query = $dbase -> prepare($sql);
$query->bindParam(":uname", $username, SQLITE3_TEXT);
$result=$query -> execute();
$find = $result->fetchArray(SQLITE3_ASSOC);
$username2=$find['user_name'];
$password2=$find['user_password'];
$username=$find['user_name'];
$salt =$find['salt'];
if($username2==$username){
    echo 'mail found';
    
    $encrypt_current_password = sha1($password . $salt);

    if($password2==$encrypt_current_password){
        echo 'password found';
        $_SESSION['id'] = $find['user_id'];
                $_SESSION['login_expiration'] = date('Y-m-d');
                $_SESSION['username']=$username;
                $_SESSION['mail']  = $find['user_mail'];
                $_SESSION['isAdmin'] = $find['is_admin'];
                               
                if (isset($_SESSION['id'])) {
	
                    if ($_SESSION["login_expiration"] == date('Y-m-d'))
                    {	
                        header('Location: /projekt-2/routes/LoggedInPage.php');
                        exit;
                    } else {
                        session_destroy();
                    }
                }
        }else{
            header("Location: /projekt-2/routes/LoginRegister.html");
   
        }
    

}else{
    echo 'username not found';
    header("Location: signup.php");
    

}

?>