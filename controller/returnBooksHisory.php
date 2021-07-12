<?php
include("databaseconnection.php");
$query="SELECT returnBookId,returnId,returnDate FROM borrow Where returnId > 0";
$returnD=mysql_query($query);
$returnD1=mysql_query($query);
$res=mysql_fetch_assoc($returnD);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="../css/styleTable.css">
</head>
<body>
    <div class="returnedBookTitle">Returned-Book</div>
    <table>
        <tr>
            <th> Book-ID</th>
            <th> Return-ID</th>
            <th> Return-Date</th>
            <th>Delete</th>
        </tr>
        <?php 
        while($res1=mysql_fetch_assoc($returnD1)){
            ?>
            <tr>

            <td></td>
            </tr>
    </table>

    
</body>
</html>