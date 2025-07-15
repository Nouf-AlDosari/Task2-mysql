
<?php
include 'db.php';

if (isset($_POST['id'])) {
    $id = (int) $_POST['id'];
    $res = $conn->query("SELECT status FROM users WHERE id = $id");
    if ($res && $res->num_rows > 0) {
        $current = $res->fetch_assoc()['status'];
        $newStatus = $current == 1 ? 0 : 1;
        $conn->query("UPDATE users SET status = $newStatus WHERE id = $id");
        echo $newStatus;
    }
}
?>
