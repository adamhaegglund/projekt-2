<!-- Register handle -->

<?php

@session_start();
date_default_timezone_set('UTC');

if (isset($_GET['logout'])) {
    unset($_SESSION["id"]);
    session_unset();
    session_destroy();
	header("Location: index.php");
	return;
}

$upassword = $_POST['password'];
$repeatpassword =$_POST['repeatpassword'];
$salt = time();
$upassword .= $salt;
$upassword = sha1($upassword);

$repeatpassword .= $salt;
$repeatpassword = sha1($repeatpassword);

$umail = $_POST['email'];
$uname = $_POST['username'];
$dbase = new sqlite3 ("./projektarbete.db");
$sql = "SELECT user_mail FROM users WHERE user_mail = :mail";
var_dump($dbase);
$query = $dbase->prepare($sql);
$query->bindParam(":mail", $umail, SQLITE3_TEXT);
$result=$query->execute();
$find = $result->fetchArray(SQLITE3_ASSOC);
$mail2=$find['user_mail'];

if($mail2==$umail){
    echo 'mail taken';
    header("Location: signup.php");
}else{

   
    // Function to validate email using regular expression
    function email_validation($str) {
        return (!preg_match(
    "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $str))
            ? FALSE : TRUE;
    }

    // Function call
    if(!email_validation($umail)) {
        header("Location: LoginRegister.html");
        
    }
    else {
        echo "Valid email address.";
        if ($upassword==$repeatpassword)
        {


        
        $sql = "INSERT INTO users (user_mail, user_password, user_name, salt) VALUES (:user_mail, :user_password, :user_name, :salt)" ;
        $query = $dbase -> prepare($sql);
        $query->bindParam(':user_mail',$umail,SQLITE3_TEXT);
        $query->bindParam(':user_password',$upassword ,SQLITE3_TEXT);
        $query->bindParam(':user_name',$uname,SQLITE3_TEXT);
        $query->bindParam(':salt',$salt,SQLITE3_TEXT);
        $query ->execute();
        header("Location: /projekt-2/routes/LoginRegister.html");
        }else {
        die ("New password dont match!");
        }
        

    }
}

?>
