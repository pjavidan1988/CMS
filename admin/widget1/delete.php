<?php
$id=$_GET['id'];
deleteWidget1($id);
header("location:dashbord.php?m=widget1&p=list");
?>
