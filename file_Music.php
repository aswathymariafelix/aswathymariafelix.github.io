<?php
$file = $_FILES["file"];
move_uploaded_file($file["tmp_name"], "uploads/Music/" . $file["name"]);
header("Location: Upload_Music.php");
?>
