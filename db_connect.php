<?php
$conn = mysqli_connect('localhost','root','');
$link = mysqli_select_db($conn,"library") or die(mysqli_error());
?>