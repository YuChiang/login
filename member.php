<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
include("mysql_connect.inc.php");
echo '<a href="logout.php">Logout</a>  <br><br>';

//prevent from some nobody
    if($_SESSION['usr'] != null)
    {
        echo '<a href="register.php">Register</a>    ';
        echo '<a href="update.php">Update</a>    ';
        echo '<a href="delete.php">Delete</a>  <br><br>';
    
        
        $sql = "SELECT * FROM `login`";
        $result = mysql_query($sql);
        while($row = mysql_fetch_row($result))
        {
             echo "$row[0] - User: $row[1], ";
        }
    }
    else
    {
        echo 'You are not allowed to view this page!';
        echo '<meta http-equiv=REFRESH content=2; url=index.php>';
    }
?>