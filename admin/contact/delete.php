<?php
$id=$_GET['id'];
deleteContact($id);
header("location:dashbord.php?m=contact&p=list");
?>
