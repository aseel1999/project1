<?php
include("databaseconnection.php");
$query="SELECT bookId,issueId,issueDate FROM borrow issueID >0";
$returnD = mysql_query($query);
$returnD1=mysql_query($query);
$result=mysql_fetch_assoc($returnD);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <link rel="stylesheet" type=text/css href="../css/styleTable.css">
</head>
<body>
    <div class="issueBookTitle"> Issued Book</div>
    <table>
        <tr>
            <th>Book-Id</th>
            <th>Issue-Id</th>
            <th>Issue-Date</th>
        </tr>
    </table>
</body>
</html>