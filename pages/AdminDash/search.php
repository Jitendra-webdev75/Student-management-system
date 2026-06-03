<?php
$conn = mysqli_connect('localhost','root','jeetu2005#','auth');
$q = $_GET['q'];

$sql = "SELECT * FROM students WHERE first_name LIKE '%$q%' OR email LIKE '%$q%'";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
            // <td>".$row['student_id']."</td>
            <td>".$row['first_name']."</td>
            <td>".$row['last_name']."</td>
            <td>".$row['father_name']."</td>
            <td>".$row['date_of_birth']."</td>
            <td>".$row['contact_no']."</td>
            <td>".$row['email']."</td>
            <td>".$row['qualification']."</td>
            <td>".$row['course']."</td>
            <td>".$row['status']."</td>
          </tr>";
}
?>