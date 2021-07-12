<?php
include("databaseconnection.php");
$query="SELECT Max(Id) FROM members";

$returnD=mysql_query($query);
$result=mysql_fetch_assoc($returnD);
$maxRow=$result['Max(Id)'];
if(!empty($maxRow)){
    $lastRow=$maxRow+1;
}
else{
    $lastRow=$maxRow=1;
}
?>

<!DOCTYPE html>
	<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="../css/styleAddValue.css">
	</head>
	<body>
<div class="TitleAddMember"> Add-Member</div>
<div class="AddMemberForm">
    <form action="home.php">
       <input type="text" name="memberId" required autofocous placeholder="Member-Id" value=<?php if(!empty($lastRow)){echo $lastRow;}?>readonly>

       <input type="text" name="firstname" required autofocous placeholder="First-Name" pattern="[A-Za-z]{3,}" title="First name must contain atleast 3 letters."><br>

       <input type="text" name="lastname" required autofocous placeholder="Last-Name" pattern="[A-Za-z]{3,}" title="Last name must contain atleast 3 letters."><br>
       <div class="AddMemberFormList">
           <select name="position" required autofocous>
               <option value="student"> Student</option>
               <option value="factuly">Factuly</option>
           </select>
       </div><br>

       <input type="text" name="mobile" required autofocous placeholder="Mobile" pattern="[0-9]{10}"><br>

       <input type="text" name="email" required autofocous placeholder="Email" title="example.example1@gmail.com"><br>

       <input type="text" name="course" required autofocous placeholder="Course/Teaches" pattern="[A-Za-z]{3,}" title="Course must contain atleast 3 letters."><br>

       <input type="submit" name="addMemberBtn" value="Add Member">
    </form>
</div>