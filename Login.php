<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./sessionEx.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    <form action="Login.php" method="POST">
        Username:<br> <input type="text" name="Username"><br>
        Password:<br> <input type="password" name="Password"><br>
        <input type="submit" name="Login" value="Login" ><br>
    </form>
</body>
</html>
<?php
session_start();

if(isset($_POST["Login"])){
    if(!empty($_POST['Username']) && !empty($_POST['Password'])) {

        $_SESSION['Username'] = $_POST['Username'];
        $_SESSION['Password'] = $_POST['Password'];

        header("Location: student.html");
        exit();
    }


    
}


?>