<?php 
include "db_connect.php"; 
$id = $_GET['id']; 
 
$query = "DELETE FROM library_tb WHERE id = $id"; 
mysqli_query($conn, $query); 
 
?> 
<script language="JavaScript"> 
document.location='index.php'</script> 
<?php 
?>