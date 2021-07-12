<?php
session_start();
error_reporting(0);
include("./databaseconnection.php");
if(isset($_REQUEST['login'])){
$username=$_REQUEST['username'];
$pwd=$_REQUEST['pwd'];
if(!empty($username) && !empty($pwd)){
    $query=mysql_query("SELECT username,pwd FROM admin");
    $result=mysql_fetch_assoc($query);
    if($username==$result['username'] && $pwd==$result['pwd']){
       $_SESSION['username']="admin";
       header("Location : controller/home.php");
    }
    else{
      $erroMsg="invalid User";
    }
     }
else{
    $erroMsg="Enter in empty field...";
     }

}
if (isset($_REQUEST['savePwdBtn'])){
    $regEmail=$_REQUEST['regEmail'];
    $query=mysql_query("SELECT email FROM admin");
    $result=mysql_fetch_assoc($query);
    if($regEmail==$result['email']){
        $npwd=$_REQUEST['npwd'];
        $cpwd=$_REQUEST['cpwd'];
        if($npwd==$cpwd){
            $query=mysql_query("UPDATE admin SET pwd='$npwd' WHERE email='$regEmail'");
        if(!empty($query)){
            header("location:index.php");
        }
        }
        else{
            $erroMsg="password must be same.";
        }
    }
    else{
        $erroMsg="Please ! Enter authorised's user email.";
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head> </head>

    <title></title>
    <link rel="stylesheet" type="text/css" href="css/styleIndex.css">
</head>
<body>
<div class="container">
    <?php
    $activity=$_REQUEST['activity'];
    if($activity=='forgetpwd'){
    ?>
      <form class="loginPage">
       <div class="formInput">
           <input type="email" name="regEmail" required autofocus placeholder="Your Registered Email">
        
       </div>
       <div class="formInput">
        <input type="password" name="npwd" required autofocous placeholder="New password">
       </div>
       <div class="formInput">
           <input type="password" name="cpwd" required autofocous placeholder="Coniform your password">
       </div>
       <input type="submit" value="save" name="savePwdBtn" class="btnSavePwd">
       <br>
       <a class="blackLink" href="index.php">Back</a>
      </form>
    <form class="loginPage">
    <div class="formInput">
        <input type=text name="username" required autofocus placeholder="Username">

    </div>
    <div class="formInput">
        <input type=password name=pwd required autofocus placeholder="Password">
    </div>
    <input type="submit" name="login" value="log In" class="btnLogin">
    <br>
    <a class=forgetpwd href="index.php?activity=forgetpwd">Forget Password</a>

    </form>
    <?php 
    }?>
    <?php
    if(isset($erroMsg)){
        ?>
        <div class="errorMsg"><?php echo $erroMsg;?></div>
    <?php
    }
    ?>
</body>
</html>