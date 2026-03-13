<?php
// Daniel Joseph Page
// CSC211 Final Project
// Contact Management System
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Contact Management System</title>
</head>
<body>

<h1>Contact Management System</h1>
<p>Please enter the contact information below.</p>
<form action="process_v2.php" method="post">
    <p>
        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" id="first_name">
    </p>
    <p>
        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" id="last_name">
    </p>
    <p>
        <label for="address">Address:</label>
        <input type="text" name="address" id="address">
    </p>
    <p>
        <label for="city">City:</label>
        <input type="text" name="city" id="city">
    </p>
    <p>
        <label for="state">State:</label>
        <input type="text" name="state" id="state">
    </p>
    <p>
        <label for="phone">Phone Number:</label>
        <input type="text" name="phone" id="phone">
    </p>
    <p>
        <label for="email">Email Address:</label>
        <input type="text" name="email" id="email">
    </p>
    <p>
        <input type="submit" name="submit" value="Submit">
    </p>
</form>

</body>
</html>