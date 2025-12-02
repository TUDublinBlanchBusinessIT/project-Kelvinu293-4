<?PHP
include("dbcon.php");

$X = $_POST['Firstname'];    
$Y = $_POST['Lastname'];     
$Z = $_POST['Email'];       
$W = $_POST['DateOfBirth'];

$sql = "INSERT INTO students (Firstname, Lastname, Email, DateOfBirth) VALUES ('$X', '$Y', '$Z', '$W')";

if (mysqli_query($conn, $sql)) {
  echo "Student added";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);



?>
