<?php
session_start();
include("dbcon.php");

$StudentID  = $_POST['StudentID'];
$Amount = $_POST['Amount'];
$PaymentDate = $_POST['PaymentDate'];
$Information = $_POST['Information'];
$Methods = $_POST['Methods'];

$sql = "INSERT INTO payments (StudentID, Amount, PaymentDate, Information, Methods) VALUES ('$StudentID', $Amount, '$PaymentDate', '$Information', '$Methods')";

if (mysqli_query($conn, $sql)) {
  echo "payment went through";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

header("Location: Logout.php");
exit();




?>
