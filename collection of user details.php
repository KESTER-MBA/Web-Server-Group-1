<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Contact Form</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="container">
        <h1>Contact Us</h1>
        <form action="submit.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>

            <button type="submit">Submit</button>
        </form>
        <?php if (isset($_GET['status'])): ?>
            <p class="<?= $_GET['status'] == 'success' ? 'success' : 'error' ?>">
                <?= $_GET['status'] == 'success' ? 'Submission successful!' : 'Submission failed. Please try again.' ?>
            </p>
        <?php endif; ?>
    </div>
</body>
