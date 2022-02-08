<html>    
    <head>    
        <title>Registration Form</title>    
    </head>    
    <body>    
        <link href = "registration.css" type = "text/css" rel = "stylesheet" />    
        <h2>Sign Up</h2>    
        <form name = "form1" action="modified.php" method = "post" enctype = "multipart/form-data" >    
            <div class = "container">    
                <div class = "form_group">    
                    <label>First Name:</label>    
                    <input type = "text" name = "fname" value = "" required/>    
                </div>    
                <div class = "form_group">    
                    <label>Last Name:</label>    
                    <input type = "text" name = "lname" value = "" required />    
                </div>    
                <div class = "form_group">    
                    <label>User Name:</label>    
                    <input type = "text" name = "uname" value = "" required/>    
                </div>    
                <div class = "form_group">    
                    <label>Password:</label>    
                    <input type = "password" name = "pwd" value = "" required/>    
                </div> 
                <div class = "form_group">    
                    <label>Email:</label>    
                    <input type = "email" name = "email" value = "" required/>    
                </div> 
                <div class = "form_group">    
                    <label>Submit:</label>    
                    <input type = "submit" name = "submit" value = "" required/>    
                </div>    
            </div>    
        </form>    
    </body>    
</html> 

