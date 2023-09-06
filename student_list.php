<?php
require("connect_db.php");
$sql = "SELECT * FROM student";
$result = mysqli_query($conn, $sql);
echo "<center>";
echo "<table border=1 width=40%>";
echo "<tr><th>Student Code</th><th>Student Name</th></tr>";
while($row = mysqli_fetch_assoc($result)){
    echo "<tr><td>".$row["student_code"]."</th><td>".$row["student_name"]."</td></tr>";
}
echo "</table>";
echo "</center>";
?>