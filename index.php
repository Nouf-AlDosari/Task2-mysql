
<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple User Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>User Form</h2>
<form action="" method="POST" id="userForm">
    <input type="text" name="name" placeholder="Name" required>
    <input type="number" name="age" placeholder="Age" required>
    <button type="submit">Submit</button>
</form>

<?php
// Insert data into database
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $age = (int) $_POST['age'];
    $conn->query("INSERT INTO users (name, age) VALUES ('$name', $age)");
}

// Fetch data from database
$result = $conn->query("SELECT * FROM users");
?>

<h3>Users</h3>
<table>
    <thead>
        <tr>
            <th>ID</th><th>Name</th><th>Age</th><th>Status</th><th>Action</th>
        </tr>
    </thead>
    <tbody id="userTable">
        <?php while ($row = $result->fetch_assoc()) : ?>
            <tr data-id="<?= $row['id'] ?>">
                <td><?= $row['id'] ?></td>
                <td><?= htmlspecialchars($row['name']) ?></td>
                <td><?= $row['age'] ?></td>
                <td class="status"><?= $row['status'] ?></td>
                <td>
                    <button class="toggleBtn">Toggle</button>
                </td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<script>
document.querySelectorAll('.toggleBtn').forEach(button => {
    button.addEventListener('click', function() {
        const row = this.closest('tr');
        const id = row.getAttribute('data-id');

        fetch('toggle.php', {
            method: 'POST',
            headers: {'Content-Type': 'application/x-www-form-urlencoded'},
            body: 'id=' + id
        })
        .then(res => res.text())
        .then(status => {
            row.querySelector('.status').textContent = status;
        });
    });
});
</script>

</body>
</html>
