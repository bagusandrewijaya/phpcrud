<?php
session_start();
if(empty($_SESSION['logged_in']))
{
    header('Location:../v_login.php');
    exit;
}

?>

<! DOCTYPE html>
<html>
<head>
    <title>Sign In</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
    <body>
    <div class="btn-box" >  
        <a href="../logout.php">
                          <input type="submit" name="submit" value="Login" class="btn submit-btn">  </a>
                     </div>  
                    <p> <?php echo 'Hello, '. $_SESSION["usernames"]; ?></P>
    </body>
</html>