<!-- <?php
include "db.php";

// Handle form submission to add a new student
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    $sql = "INSERT INTO students (name, email, course) VALUES ('$name', '$email', '$course')";
    mysqli_query($conn, $sql);
    header("Location: index.php");
}
?> -->

<!DOCTYPE html>
<html>
<head>
    <title>Student Management CRUD App</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Student Management</h2>

    <!-- Form to Add Student -->
    <form method="POST" action="">
        <input type="text" name="name" placeholder="Student Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="course" placeholder="Course" required>
        <button type="submit" name="submit">Add Student</button>
    </form>

    <br><hr><br>

    <!-- Table to Display Students -->
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th><th>Name</th><th>Email</th><th>Course</th><th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $result = mysqli_query($conn, "SELECT * FROM students");
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['course']}</td>
                    <td>
                        <a href='edit.php?id={$row['id']}'>Edit</a> |
                        <a href='delete.php?id={$row['id']}' onclick=\"return confirm('Delete this student?')\">Delete</a>
                    </td>
                </tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
