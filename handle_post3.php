<!doctype html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <title>Forum Posting</title>
</head>
<body>
<?php // Script 5.2 - handle_post.php
/* Thhis script recieves five values from posting.html
first_name, last_name, email, posting, submit */

// Address error management, if you want.

// Get the values from the $_POST array:
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$posting = nl2br($_POST['posting'], false);

// Create a full name variable:
$name = $first_name . ' ' . $last_name;

// Get word count:
$words = str_word_count($posting);

//get snippet of the posting:
$posting = substr($posting, 0, 50);

// Print a message:
print "<div>Thank you, $name, for you posting:
<p>$posting</p>;
<p>($words words)</p></div>";

?>
</body>
</html>