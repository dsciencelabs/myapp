<?php 
include "db_connect.php"; 
$book_title = $_POST['book_title'];
$writer = $_POST['writer'];
$email = $_POST['email'];  
 
$query=mysqli_query($conn, "INSERT INTO library_tb(book_title, writer,email)
VALUES ('$book_title', '$writer','$email')")or die (mysqli_error()); 
 
if($query) {
?>
<script language="JavaScript">
   document.location='index.php'</script> 
<?php 
} 
?>