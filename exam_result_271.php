<?php
require("connect_db.php");

#การเชื่อมกัน
$sql = "SELECT E.*,S.student_name";
$sql .= " FROM exam_result E";

#เชื่อม E.student_code กับ S.studnet_code
$sql .= " INNER JOIN student S ON E.student_code=S.student_code";
$sql .= " WHERE E.course_code='01204271'";
$result = mysqli_query($conn, $sql);

#การใส่ตาราง
echo "<center>";
echo "<h1>Exam Result Compro</h1>";
echo "<table border=1 width=40%>";
echo "<tr><th>Student Code</th><th>Student Name</th><th>Point</th></tr>";
while($row = mysqli_fetch_assoc($result)){
    echo "<tr><td>".$row["student_code"]."</td><td>".$row["student_name"]."</td><td>".$row["point"]."</td></tr>";
}
echo "</table>";
echo "</center>";
?>