<?php
//Start session
session_start();

//Connect to mysql server
require "../db.php";

//Function to sanitize values received from the form. Prevents SQL injection
function clean($str) {
    $str = @trim($str);
    if(get_magic_quotes_gpc()) {
        $str = stripslashes($str);
    }
    return mysql_real_escape_string($str);
}

//Sanitize the POST values
$login = clean($_POST['user']);
$password = clean($_POST['pass']);

//Create query
$qry="SELECT * FROM admin WHERE username='$login' AND a_pass='$password'";
$result=mysql_query($qry);
//while($row = mysql_fetch_array($result))
//  {
//  $level=$row['position'];
//  }
//Check whether the query was successful or not
if($result) {
    if(mysql_num_rows($result) > 0) {
        //Login Successful
        session_regenerate_id();
        $member = mysql_fetch_assoc($result);
        $_SESSION['SESS_ID'] = $member['a_id'];
        $_SESSION['SESS_USERNAME'] = $member['username'];
        session_write_close();
        //if ($level="admin"){
        header("location: dashboard.php");
        exit();
    }else {
        //Login failed
        header("location: index.php");
        exit();
    }
}else {
    die("Query failed");
}
?>
