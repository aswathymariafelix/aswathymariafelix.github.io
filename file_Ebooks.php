<?php
$file = $_FILES["file"];
move_uploaded_file($file["tmp_name"], "uploads/Ebooks/" . $file["name"]);
header("Location: Upload_Ebooks.php");
?>
