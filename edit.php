<?php 
include "db_connect.php"; 
$id = $_GET['id']; 
 
$query=mysqli_query($conn, "SELECT * FROM library_tb WHERE id='$id'");
while ($row=mysqli_fetch_array($query)){ 
 
$book_title = $row['book_title']; 
$writer = $row['writer']; 
$email = $row['email'];
 
echo "<html>"; 
echo "<body>"; 
echo "<font face='tahoma' color='green' size=4><b>Update the List</b></font>"; 
echo "<br>"; 
echo "<br>";
echo ' <img src="Circle_Logo_White.gif" width="300" height="300" /> '; 
echo "<br>";
echo "<table align='left'>"; 
echo "<form method=\"post\" action=\"update.php?id=$id\" enctype='multipart/form-data'>"; 
echo "<br>"; 
echo "<br>";
echo "<tr><td><font face='Tahoma' color='black' size=2>Title </font></td><td>:</td><td><input type='text' name='book_title' value='$book_title' size='30'>&nbsp;
</td></tr>"; 
echo "<tr><td><font face='Tahoma' color='black' size=2>Writer</font></td><td>:</td><td><input type='text' name='writer' value='$writer' size='30'>&nbsp;
</td></tr>";
echo "<tr><td><font face='Tahoma' color='black' size=2>Email</font></td><td>:</td><td><input type='text' name='email' value='$email' size='30'>&nbsp;
</td></tr>";  
 
echo "<tr><td></td><td></td><td><font size='2'><input type='Submit' name='Submit' value='Update'/></font></td></tr>"; 
echo "</table></form></body></html>"; 
} 
?>