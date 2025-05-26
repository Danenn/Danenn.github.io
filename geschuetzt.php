<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.html");
    exit;
}
?>
<h1>Willkommen, <?php echo htmlspecialchars($_SESSION['user']); ?>!</h1>
<p>Dies ist ein geschützter Bereich.</p>
<a href="logout.php">Logout</a>
