
<?php
include("dbconnection.php");
if(isset($_POST['submit'])){



    $a = mysql_real_escape_string($_POST['email']);
    $b = mysql_real_escape_string($_POST['password']);
    $sql = mysql_query("SELECT * FROM tblregister
        WHERE email='$a' AND
        password='$b'
        LIMIT 1");

    if(mysql_num_rows($sql) == 1){
        $row = mysql_fetch_array($sql);
        session_start();

        $_SESSION['email'] = $row['email'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['fname'] = $row['fname'];

        $_SESSION['logged'] = TRUE;
       echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Login Succesful.')
        window.location.href='ndr/index.php'
        </SCRIPT>");
        exit;

    }else{
       echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Wrong email/password combination.Please re-enter.')
        window.location.href='ndr/index.php'
        </SCRIPT>");

        exit;
    }
}else{    //If the form button wasn't submitted go to the index page, or login page
    header("Location: home.php");
    exit;
}
?>
