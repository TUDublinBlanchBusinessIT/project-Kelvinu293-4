<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Login.php" method="POST">
        Username:<br> <input type="text" name="Username"><br>
        Password:<br> <input type="password" name="Password"><br>
        <input type="submit" name="Login" value="Login"><br>
    </form>
</body>
</html>
<?php
if(isset($_POST["Login"])){
    if(!empty($_POST["Username"]) &&
       !empty($_POST["Password"])){
        
        $_SESSION["Username"] = $_POST["Username"];
        $_SESSION["Password"] = $_POST["Password"];
            
            echo $_SESSION["Username"] . "<br>";
            echo $_SESSION["Password"] . "<br>";

       }






}





?>