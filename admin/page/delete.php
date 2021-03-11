<?php
$id=$_GET['id'];
deletePage($id);
header("location:dashbord.php?m=page&p=list");
?>
