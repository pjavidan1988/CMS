<?php
$id=$_GET['id'];
deleteWidget($id);
header("location:dashbord.php?m=widget&p=list");
?>
