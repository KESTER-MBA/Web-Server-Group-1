<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

    // Validate inputs
    if (empty($name) || empty($email) || empty($message)) {
        header('Location: index.html?status=error');
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('Location: index.html?status=error');
        exit;
    }

    // Prepare data for saving
    $data = "Name: $name\nEmail: $email\nMessage: $message\n\n";
    
    // Save to text file
    $file = 'submissions.txt';
    if (file_put_contents($file, $data, FILE_APPEND | LOCK_EX) !== false) {
        header('Location: index.html?status=success');
    } else {
        header('Location: index.html?status=error');
    }
    exit;
}
?>
