<?php 
	# Stop Hacking attempt
	define('__APP__', TRUE);
	
	# Start session
	
	
	# Variables MUST BE INTEGERS
    if(isset($_GET['menu'])) { $menu   = (int)$_GET['menu']; }
	if(isset($_GET['action'])) { $action   = (int)$_GET['action']; }
	
	# Variables MUST BE STRINGS A-Z
    if(!isset($_POST['_action_']))  { $_POST['_action_'] = FALSE;  }
	
	if (!isset($menu)) { $menu = 1; }
print '
<!DOCTYPE html>
<html>
	<head>
		
		<!-- CSS -->
		<link rel="stylesheet" href="style.css">
		<!-- End CSS -->
		<!-- meta elements -->
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="description" content="some description">
        <meta name="keywords" content="keyword 1, keyword 2, keyword 3, keyword 4, ...">
				
        <meta name="author" content="alen@tvz.hr">
		<!-- favicon meta -->
		<link rel="icon" href="favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
		<!-- end favicon meta -->
		<!-- end meta elements -->
		
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"> 
		<!-- End Google Fonts -->
		<title>Example page - HTML5</title>
	</head>
<body>
	<header>
		<div'; if ($menu > 1) { print ' class="hero-subimage"'; } else { print ' class="hero-image"'; }  print '></div>
		<nav>';
			include("menu.php");
		print '</nav>
	</header>
	<main' . (isset($_SESSION['news_title_1']) ? ' class="session"' : '') .'>';
		
	
	# Homepage
	if (!isset($menu) || $menu == 1) { include("home.php"); }
	
	# News
	else if ($menu == 2) { include("news.php"); }
	
	# Contact
	else if ($menu == 3) { include("contact.php"); }
	
	# About us
	else if ($menu == 4) { include("about-us.php"); }
	
	
	print '
	</main>';
	if (!empty($_SESSION['news_title_1']) || !empty($_SESSION['news_title_2']) || !empty($_SESSION['news_title_3'])) {
		print '
		<aside><h2 style="text-align:center">ZADNJE PREGLEDANO</h2>';
		# ispis vrijednosti $_SESSION
		print '
		</aside>';
	}
	print '
	<footer>
		<p>Copyright &copy; ' . date("Y") . ' Alen Šimec</p>
	</footer>
</body>
</html>';

?>

<?
	session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>Prijava korisnika</title>
  </head>
  <style>
	body { margin: 10px;}
	
  </style>
<body>
<div class="container">
	<h1>Prijava korisnika</h1>
	
     <form action="index.php" method="POST" name="signin">
		<input type="hidden" id="control" name="control" value="true">
        <div class="form-check">
			<label for="user">Korisnik:*</label>
			<input type="text" id="user" name="user" class="form-control" required>
		</div>
		<div class="form-check">
			<label for="pass">Lozinka:*</label>
			<input type="password" id="pass" name="pass" class="form-control" required>
		</div>
        <input type="submit" value="Pošalji" class="btn btn-primary">
     </form>
	 
	 <?php 
	 if (!isset($_POST['control'])) { $_POST['control'] = false; }
	   if($_POST['control'] == true) {   
		     if (isset($_POST["user"]) && isset($_POST["pass"]))   {
				  if ($_POST["user"] == "admin" && $_POST["pass"] == "123")     {  
					   $_SESSION["username"] = $_POST["user"]; 
					   echo "<p>Uspješna prijava!</p>";
				  }     
				  else {  echo "<p>Neuspješna prijava!</p>";     }   
			} 

	   }
	   if (isset($_SESSION["username"]) && $_SESSION["username"] == "admin") {
		echo "<p><b>Dobrodošao:</b> " . $_SESSION["username"] ."</p>";
		echo '<p><a href="signout.php">Odjavi se</a></p>';
	   }
	   
	 ?>
</div>
</body>
</html>
