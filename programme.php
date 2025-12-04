<?PHP
session_start();
include("dbcon.php");

$ProgrammeCode = isset($_POST['ProgrammeCode']) ? $_POST['ProgrammeCode'] : '';
$ProgrammeName = isset($_POST['ProgrammeName']) ? $_POST['ProgrammeName'] : '';
$Campus = isset($_POST['Campus']) ? $_POST['Campus'] : '';
$Mode = isset($_POST['Mode']) ? $_POST['Mode'] : '';

$_SESSION['ProgrammeCode'] = $ProgrammeCode;
$_SESSION['ProgrammeName'] = $ProgrammeName;
$_SESSION['Campus'] = $Campus;
$_SESSION['Mode'] = $Mode;

$sql = "INSERT INTO programmes (ProgrammeCode, ProgrammeName, Campus, Mode) VALUES ('$ProgrammeCode', '$ProgrammeName', '$Campus', '$Mode')";

if ($conn->query($sql) === TRUE) {
    
    header('Location: student.html');
    exit();
} else {
   
    echo "Error: " . $conn->error;
}



?>