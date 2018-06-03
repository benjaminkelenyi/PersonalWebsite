<?php
require "conn.php";
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$lphone = $_POST['lphone'];
$subject = $_POST['subject'];
$mysql_qry = "insert into contact (FirstName, LastName, PhoneNumber, Subject) values ('$fname','$lname','$lphone','$subject')";
if($conn->query($mysql_qry) === TRUE)
{
	print '<script type="text/javascript">';
	print 'alert("The data is inserted...")';
	print '</script>';
	echo file_get_contents("contact.html");
}
else 
	echo "Error: " .$mysql_qry . "<br>" . $conn->error;

?>