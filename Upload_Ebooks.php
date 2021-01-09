<html>
<?php
session_start();
if(!(isset($_SESSION["login"]) == "OK")) {
    header("Location: login.php");
    exit;
}
?>
<head>
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet">
<link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="Upload.css">
<title>SPYDER | 3rd YEAR PROJECT</title>
</head>
<body>
<div class="navbar">
<center><img src="Images/imageedit_4_7110914415.png"></center>
</div>
<div class="ver_nav">
	<ul>
    <a href="Upload_Movies.php"><li><i class="fa fa-film"></i><span class="tooltiptext">Upload Movies</span></li></a>
    <a href="Upload_Images.php"><li><i class="fa fa-image"></i><span class="tooltiptext">Upload Images</span></li></a>
    <a href="Upload_Music.php"><li><i class="fa fa-music"></i><span class="tooltiptext">Upload Music</span></li></a>
    <a href="Upload_Ebooks.php"><li class="active"><i class="fa fa-book"></i><span class="tooltiptext">Upload Ebooks</span></li></a>
    <a href="login.php?logout=true"><li><i class="fa fa-download"></i><span class="tooltiptext">Logout</span></li></a>
  </ul>
</div>
<center>
<form method="POST" enctype="multipart/form-data" action="file_Ebooks.php">
<div class="margin">
<div class="row">
	<div class="column">
	 <img src="Images/imageedit_2_8194734979.gif">
	</div>
	<div class="column">
     <input type="file" name="file" class="up"><br>
     <input type="submit" name="Upload File" value="Upload Ebook" class="upload">
 	</div>
</div>
</div>
</form>
</center>
</body>
</html>