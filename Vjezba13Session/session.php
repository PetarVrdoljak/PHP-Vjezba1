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