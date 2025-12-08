<?php

include("dbcon.php");

$sql = "SELECT programmes.ProgrammeCode, programmes.ProgrammeName, programmes.Mode, modules.ModuleName, modules.Credits, modules.Semester FROM programmes
INNER JOIN modules ON
programmes.ProgrammeID = modules.ProgrammeID";

$result = mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)) {
    $programmecode = $row['ProgrammeCode'];
    $programmename = $row['ProgrammeName'];
    $mode = $row['Mode'];
    $modulename = $row['ModuleName'];
    $credits = $row['Credits'];
    $semester = $row['Semester'];
    
    echo "<TR><TD>$programmecode</TD><TD>$programmename</TD><TD>$mode</TD><TD>$modulename</TD><TD>$credits</TD><TD>$semester</TD>";    
}
mysqli_close($conn);
?>


