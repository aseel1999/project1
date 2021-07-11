<?php
session_start();
error_reporting(0);
include("databaseconnection.php");
$username=$_SESSION['username'];
if($_REQUEST['activity']=='logout'){
$username=null;
$username="";
unset($username);
$_SESSION['username']=null;
$_SESSION['username']="";
unset($_SEESION['username']);
session_destroy();

if(empty($username))
    header("Location:./index.php");
}


?>
<html>
    <head>
    	<title></title>
    	<link rel="stylesheet" type="text/css" href="../css/styleHome.css">
        <link rel="stylesheet" type="text/css" href="../css/styleUpdate.css">
        <link rel="stylesheet" type="text/css" href="../css/styleAddValue.css">
    </head>
    <body>
      
        <div class="containerHome">
       
          <div class="headSection">

            <?php include("headSection.php"); ?>

          </div>
        

          <div class="navSection">
                <div class="welcomeTitle"><?php echo "Welcome : ".$username; ?></div>
                <div class="tooltip">
                   
                </div>
                <div class="logoutLink"><a href="home.php?activity=logout">Logout</a></div>
</div>

        
          <div class="leftSection">
            
            <?php include("leftSection.php");?>

          </div>
        

        
        <div class="contentSection">
        <?php     
             

                        $activity = $_REQUEST['activity'];

                        if($activity) {
                            if($activity == 'addMember'){
                                include("addMember.php");
                            }

                            if($activity == 'dashboard'){
                                include("dashboard.php");
                            }
                               
                            if($activity == 'issueBooks'){
                                include("issueBooks.php");
                            }
                              
                            if($activity == 'returnBooks'){
                                include("returnBooks.php");
                            }   

                            if($activity == 'issueBooksHisory'){
                                include("issueBooksHistory.php");
                            }

                            if($activity == 'returnBooksHisory'){
                                include("returnBooksHisory.php");
                            }

                            if($activity == 'search'){
                                include("search.php");
                            }

                            if($activity == 'allRegisteredStudent'){
                                include("allRegisteredStudent.php");
                            }

                            if($activity == 'addBook'){
                                include("addBook.php");
                            }

                            if($activity == 'listAllBooks'){
                                include("listAllBooks.php");
                            }

                            if($activity == 'bookDetails'){
                                include("bookDetails.php");
                            }

                            if($activity == 'memberDetails'){
                                include("memberDetails.php");
                            }

                            if($activity == 'updateBook'){

                                $uBookId = $_REQUEST['uBookId'];

                                $return = mysql_num_rows(mysql_query("SELECT bookId From borrow Where bookId = '$uBookId'"));

                                if(empty($return)){
        
                                    $query = mysql_query("SELECT bookId,title,author,price,publisher From books Where bookId = '$uBookId'");
                                    $result = mysql_fetch_assoc($query);

                                    ?>
