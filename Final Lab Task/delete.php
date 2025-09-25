<?php
include 'db.php';

$id = $_GET['id'] ?? 0;

$sql = "DELETE FROM student_info WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Error deleting record: " . $conn->error;
}
?>
