<?php 
include "db_connect.php"; 
$id = $_GET['id']; 
$book_title = $_POST['book_title'];
$writer = $_POST['writer'];
$email = $_POST['email']; 

$query=mysqli_query ($conn, "UPDATE library_tb 
			     SET book_title='$book_title', 
				 writer='$writer',
				 email='$email' 
                             WHERE id='$id'") or die (mysqli_error()); 
 
if($query) { 
?>
<script language="JavaScript"> 
 document.location='index.php'</script> 
<?php 
} 
?>