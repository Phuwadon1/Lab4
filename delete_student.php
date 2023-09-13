<?php
require("connect_db.php");
$student_code = $_GET["student_code"];
$sql = "SELECT * FROM student WHERE student_code = '$student_code'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>
<html>
    <head><title>Delete Student</title></head>
    <body>        
        <center>
            <h1>Edit Student</h1>
            <form action="do_delete_student.php" method="post">
                <table width="40%" border="1">
                    <tr><td>Student Code:</td><td><input type="hidden" name="student_code" value="<?php echo $row["student_code"];?>" /><?php echo $row["student_code"];?></td></tr>
                    <tr><td>Student Name:</td><td><?php echo $row["student_name"];?></td></tr>
                    <tr>
                        <td>Gender:</td>
                        <td>
                            <?php echo $row["gender"];?>
                        </td>
                    </tr>
                    <tr><td colspan="2" style="text-align:center;"><input type="submit" value="Delete" /></td></tr>
                </table>
            </form>
        </center>
    </body>
</html>