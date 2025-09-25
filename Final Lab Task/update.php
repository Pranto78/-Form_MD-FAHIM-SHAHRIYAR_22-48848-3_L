<?php 
include 'db.php'; 

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM users WHERE id=$id");
$user = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>
    <h2>Edit User</h2>
    <form method="POST">
        Name: <input type="text" name="name" value="<?= $user['name'] ?>" required><br><br>
        Email: <input type="email" name="email" value="<?= $user['email'] ?>" required><br><br>
        <button type="submit" name="update">Update</button>
    </form>
    <br><a href="index.php">Back to Users</a>
</body>
</html>

<?php
if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "UPDATE users SET name='$name', email='$email' WHERE id=$id";
    if ($conn->query($sql)) {
        echo "User updated!";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
