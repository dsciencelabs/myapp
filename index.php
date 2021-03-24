<?php 
include "db_connect.php"; 
$query=mysqli_query ($conn, "SELECT * FROM library_tb")or die (mysqli_error()); 
$jumlah = mysqli_num_rows($query); 
echo "<html>"; 
echo "<head>"; 
echo "<link href='style.css' type='text/css' rel='stylesheet'>"; 
echo "</head>"; 
echo "<title>MyLibrary App</title>"; 

echo "<body>"; 
echo "<font color='darkmagenta' face='Arial' size=3><b><br>List of Books</b></font><br><br>";
echo "<br>";
echo ' <img src="Circle_Logo_White.gif" width="300" height="300" /> '; 
echo "<br>";
echo "<br>";
echo "<a href='add.html' style=\"text-decoration: none\"><font face='tahoma' size='2'>Enter a New Book </font></a><br>";
echo "<br><table  border=\"0\" cellpadding=\"1\" cellspacing=\"1\" bordercolor=\"blue\" bgcolor=\"white\"> 
<tr bgcolor='blue' height=\"30\"><font color='white'>  
     <th align='center'><font color='white' face='Arial' size=2>Id</font></th>         
     <th align='center'><font color='white' face='Arial' size=2>Title</font></th>         
     <th align='center'><font color='white' face='Arial' size=2>Writer</font></th>  
     <th align='center'><font color='white' face='Arial' size=2>Email</font></th>  
     <th align='center'><font color='yellow' face='Arial' size=2>Change?</font></th> 
</tr>";  
$j=0; 

while ($row=mysqli_fetch_array($query)) {     
    echo "<tr><td align='left' bgcolor='#657FFF'>";
    echo "<font face='Arial' size=1>";
    echo $j+1;
  
    echo"</font>";
    echo"</td>";     
    echo "<td align='left' bgcolor='#E8D3DF'>";
    echo "<font face='Arial' size=1>";
    echo $row["book_title"];
  
    echo"</font>";
    echo"</td>";  
    echo "<td align='left' bgcolor='#E8D3DF'>";
    echo "<font face='Arial' size=1>";
    echo $row["writer"];
  
    echo"</font>";
    echo"</td>";  
    echo "<td align='left' bgcolor='#E8D3DF'>";
    echo "<font face='Arial' size=1>";
    echo $row["email"];
  
    echo"</font>";
    echo"</td>";     
    echo"<td align='left' bgcolor='#E8D3DF'>";
    echo 
    "<a href='delete.php?id=".$row['id']."' 
    style=\"text-decoration: none\" title=\"Delete\"><font face='tahoma' size='1'>Delete</font></a>   
    <a href='edit.php?id=".$row['id']."' 
    style=\"text-decoration: none\" title=\"Edit\"><font face='tahoma' size='1'>Edit</font></a>"; $j++; } 
    echo"</table>"; 
    
echo "</body>"; 
echo "</html>"; 
?>