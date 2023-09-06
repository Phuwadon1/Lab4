<?php
require("connect_db.php");
$sql = "SELECT * FROM exam_result WHERE course_code='01204113'";
$result = mysqli_query($conn, $sql);
echo "<center>";
echo "<h1>Exam Result Compro</h1>";
echo "<table border=1 width=40%>";
echo "<tr><th>Student Code</th><th>Point</th></tr>";
while($row = mysqli_fetch_assoc($result)){
    echo "<tr><td>".$row["student_code"]."</td><td>".$row["point"]."</td></tr>";
}
echo "</table>";
echo "</center>";
?>