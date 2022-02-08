<?php    
    
include "connection.php";    
    
if(isset($_GET['id'])){    
$sql = "delete from registration where id = '".$_GET['id']."'";    
$result = mysql_query($sql);    
}    
    
$sql = "select * from registration";    
$result = mysql_query($sql);    
?>    
<html>    
    <body>    
        <table width = "100%" border = "1" cellspacing = "1" cellpadding = "1">    
            <tr>    
                <td>Id</td>    
                <td>First Name</td>        
                <td>Last Name</td>    
                <td>Password</td>    
                <td>Confirm Password</td>    
                <td>Email</td>    
                <td>Username</td>       
                <td colspan = "2">Action</td>    
            </tr>    
        </table>    
    </body>    
</html> 

<?php    
    
while($row = mysql_fetch_object($result)){    
    
    
?>  
    <tr>  
        <td>  
            <?php echo $row->id;?>  
        </td>  
        <td>  
            <?php echo $row->fname;?>  
        </td>  
        <td>  
            <?php echo $row->lname;?>  
        </td>  
        <td>  
            <?php echo $row->pwd;?>  
        </td>  
        <td>  
            <?php echo $row->email;?>  
        </td>  
        <td>  
            <?php echo $row->cnf;?>  
        </td>  
        <td>  
            <?php echo $row->uname;?>  
        </td>  
        
        <td> <a href="listing.php?id =     
            <?php echo $row->id;?>" onclick="return confirm('Are You Sure')">Delete    
        </a> | <a href="index.php?id =     
            <?php echo $row->id;?>" onclick="return confirm('Are You Sure')">Edit    
        </a> </td>  
        <tr>  
        <? php } ?> 