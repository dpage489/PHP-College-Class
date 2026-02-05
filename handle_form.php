<!doctype html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <title>Your Feedback</title>
</head>
<body>
<?php // Script 3.3 handle_form.php

// This page recieves the data from feedback.html.
// It will recieve: title, name, email, response, comments, and submit in $_post.

// Create shorthand versions of the variables:
$title = $_POST['title']?? '';
$name = $_POST['name']?? '';
$response = $_POST['response'];
$comments = $_POST['comments'];

// Print the recieved data:
print "<p>Thank you, $title $name for your comments.</p>
<p>You stated that you found this example to be '$response' and added:<br>$comments</p>";

?>
</body>
</html>