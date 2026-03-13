<?php
// Daniel Joseph Page
// CSA211
// Contact Management System
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Processed Form</title>
</head>
<body>
<h1>Processed Form</h1>
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    if (strpos($email, '@') === false) {
        print '<p>Email address is not in the correct format.</p>';
    } else {
        print '<p>Email format looks correct.</p>';
        // Connect to database
        $dbc = mysqli_connect('localhost','root','','contact_management_system');
        if (!$dbc) {
            print '<p>Could not connect to the database.</p>';
        } else {
            // SQL query to insert record
            $query = "INSERT INTO contacts 
            (first_name,last_name,address,city,state,phone,email)
            VALUES
            ('$first_name','$last_name','$address','$city','$state','$phone','$email')";
            $r = mysqli_query($dbc,$query);
            if ($r) {
                print '<p><strong>The record has been added to the database.</strong></p>';
            } else {
                print '<p>The record could not be added because:<br>' . mysqli_error($dbc) . '</p>';
            }
            mysqli_close($dbc);
        }
    }
    print '<p><strong>First Name:</strong> ' . $first_name . '</p>';
    print '<p><strong>Last Name:</strong> ' . $last_name . '</p>';
    print '<p><strong>Address:</strong> ' . $address . '</p>';
    print '<p><strong>City:</strong> ' . $city . '</p>';
    print '<p><strong>State:</strong> ' . $state . '</p>';
    print '<p><strong>Phone:</strong> ' . $phone . '</p>';
    print '<p><strong>Email:</strong> ' . $email . '</p>';
} else {
    print '<p>This page has been accessed in error.</p>';
}
?>
<p><a href="index_v2.php">Return to Form</a></p>
<p><a href="menu_v2.php">Go to Menu</a></p>

</body>
</html>