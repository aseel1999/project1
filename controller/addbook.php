<?php
include("databaseconnection.php");

$query=("SELECT MAX(bookId) FROM books");
$returnD=mysql_query($query);
$result=mysql_fetch_assoc($returnD);
$maxRow=$result['Max(bookId)'];
if(!empty($maxRow)){
    $lastRow=$maxRow+1;
}
else{
    $lastRow=$maxRow=1001;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href="../css/styleAddValue.css">
</head>
<body>
<div class="AddBookTitle">Add-Book</div>
<div class="AddBookForm">
    <form action="home.php">
                <input type="text" name="bookId" required autofocous placeholder="Book-Id" value=<?php echo $lastRow;?> readonly ><br>
                <input type="text" name="bookName" required autofocus placeholder="Book-Name" pattern="[A-Z a-z]{3,}" title="Name must contain atleast 3 letters."><br>
				<input type="text" name="authorName" required autofocus placeholder="Author-Name" pattern="[A-Z a-z]{3,}{.}" title="Author name must contain atleast 3 letters."><br>
				<input type="text" name="bookPrice" required autofocus placeholder="Price" pattern="[0-9]{3,}{.}"><br>
				<input type="text" name="bookPublisher" required autofocus placeholder="Publisher" pattern="[A-Z a-z]{3,}" title="Publisher name must contain 3 letters."><br>
				<input type="submit" name="addBookBtn" value="Add Book"><br>
    </form>
</div>
    

    
</body>
</html>