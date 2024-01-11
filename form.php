<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = 'vidyananda.s@northeastern.edu';
    $headers = 'From: ' . $email;

    if (mail($to, $subject, $message, $headers)) {
        echo "<p>Email sent!</p>";
    } else {
        echo "<p>Email failed to send.</p>";
    }
}
?>
