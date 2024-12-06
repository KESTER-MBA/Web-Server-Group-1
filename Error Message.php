<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details Form</title>
</head>
<body>

    <h2>Contact Us</h2>

    <!-- Display success or error message here -->
    <?php
    if (isset($_GET['status'])) {
        if ($_GET['status'] == 'success') {
            echo "<p style='color: green;'>Thank you for your submission!</p>";
        } elseif ($_GET['status'] == 'error') {
            echo "<p style='color: red;'>There was an error with your submission. Please try again.</p>";
        }
    }
    ?>

    <form action="process_form.php" method="POST">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="4" cols="50" required></textarea><br><br>
        
        <input type="submit" value="Submit">
    </form>

</body>
</html>