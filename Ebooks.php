<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet">
<link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="Stylesheethome.css">
<title>SPYDER | 3rd YEAR PROJECT</title>
</head>
<body>
<div class="navbar">
<center><img src="Images/imageedit_4_7110914415.png"></center>
</div>
<div class="ver_nav">
  <ul>
    <a href="Movies.php"><li><i class="fa fa-film"></i><span class="tooltiptext">Movies</span></li></a>
    <a href="Images.php"><li><i class="fa fa-image"></i><span class="tooltiptext">Images</span></li></a>
    <a href="Music.php"><li><i class="fa fa-music"></i><span class="tooltiptext">Music</span></li></a>
    <a href="Ebooks.php"><li class="active"><i class="fa fa-book"></i><span class="tooltiptext">Ebooks</span></li></a>
    <a href="login.php"><li><i class="fa fa-upload"></i><span class="tooltiptext">Login</span></li></a>
  </ul>
</div>
<center>

<div class="margin">
<?php
$files = scandir("uploads/Ebooks");?>
<div class="row">
    <?php
    for ($a=2; $a<count($files); $a++)
    {
    ?>
    <div class="column">
     <div class="card">
      <div class="tab">
       <div class="middle">
       	<a href="uploads/Ebooks<?php echo $files[$a]; ?>" class="button" download>Download</a>
       </div>
      </div>
      <div class="container"><h1><font color="white"><?php echo $files[$a];?></font></h1>
      </div>
     </div>
    </div>
    <?php } ?>
</div>
</div>
</center>
</body>
</html>