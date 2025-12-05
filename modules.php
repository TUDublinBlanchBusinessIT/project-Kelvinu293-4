<?PHP
session_start();
include("dbcon.php");

$ModuleCode = $_POST['ModuleCode'];
$ModuleName = $_POST['ModuleName'];
$Credits = $_POST['Credits'];
$Semester = $_POST['Semester'];
$ProgrammeID = $_POST['ProgrammeID'];


$sql = "INSERT INTO modules (ModuleCode, ModuleName, Credits, Semester, ProgrammeID) VALUES ('$ModuleCode', '$ModuleName', $Credits, '$Semester', '$ProgrammeID')";


if (mysqli_query($conn, $sql)) {
  echo "form submit";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

header("Location: payments.html");
exit();




?>