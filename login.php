<?php

session_start();

/* DECLARE VARIABLES */
$username = 'username';
$password = 'password';
$random1 = 'secret_key1';
$random2 = 'secret_key2';

$hash = md5($random1 . $password . $random2);
$self = $_SERVER['REQUEST_URI'];

/* USER LOGOUT */
if(isset($_GET['logout']))
{
	unset($_SESSION['login']);
}

/*USER IS LOGGED IN*/
if (isset($_SESSION['login']) && $_SESSION['login'] == $hash)
{
	logged_in_msg($username);
}

/* FORM HAS BEEN SUBMITTED */
else if (isset($_POST['submit']))
{
	if ($_POST['username'] == $username && $_POST['password'] == $password)
	{
		//IF USERNAME AND PASSWORD ARE CORRECT SET THE LOGIN SESSION
		$_SESSION["login"] = $hash;
		header("Location: Upload_Movies.php");
	}
	else
	{
		// DISPLAY FORM WITH ERROR
		display_login_form();
		display_error_msg();
	}
}

/* SHOW THE LOGIN FORM */
else
{
	display_login_form();
}


/* TEMPLATES */
function display_login_form()
{
	echo '<html>
		 <head>
		 <title>SPYDER | 3rd YEAR PROJECT</title>
		 <link rel="stylesheet" type="text/css" href="Upload.css">
		 </head>
		 <body style="background-image: url(Images/leaves_dark_plant_128531_1366x768.jpg);">
		 <center>
		 <h1><br><br>Wanna Upload?</h1><br><br>
		 <form action="' . isset($self) . '" method="post">' .
			 '<label for="username">Username</label><br><br>' .
			 '<input type="text" name="username" id="username"><br>' .
			 '<label for="password">Password</label><br><br>' .
			 '<input type="password" name="password" id="password"><br>' .
			 '<input type="submit" name="submit" value="Login" class="upload">' .
		 '</form>
		 </center>
		 </body>
		 </html>';
}

function logged_in_msg($username)
{
	header("Location: login.php");
}

function display_error_msg()
{
	echo '<center><p style="color: #ffffff; font-size: 20px;">Username or password is invalid</p></center>';
}

?>