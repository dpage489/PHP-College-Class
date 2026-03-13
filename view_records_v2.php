<?php
// Daniel Joseph Page
// CSA211
// Contact Management System
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>View Records</title>
</head>
<body>
<h1>View Records</h1>
<?php

$dbc = mysqli_connect('localhost', 'root', '', 'contact_management_system');
if (!$dbc) {
    print '<p>Could not connect to the database.</p>';
} else {
    $query = 'SELECT * FROM contacts';
    $r = mysqli_query($dbc, $query);
    if ($r) {
        print '<table border="1">';
        print '<tr>
                <td>ID</td>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Address</td>
                <td>City</td>
                <td>State</td>
                <td>Phone</td>
                <td>Email</td>
              </tr>';
        // Fetch and print each record:
        while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
            print '<tr>
                    <td>' . $row['id'] . '</td>
                    <td>' . $row['first_name'] . '</td>
                    <td>' . $row['last_name'] . '</td>
                    <td>' . $row['address'] . '</td>
                    <td>' . $row['city'] . '</td>
                    <td>' . $row['state'] . '</td>
                    <td>' . $row['phone'] . '</td>
                    <td>' . $row['email'] . '</td>
                  </tr>';
        }
        print '</table>';
    } else {
        print '<p>Could not retrieve the records because:<br>' . mysqli_error($dbc) . '</p>';
        print '<p>The query being run was: ' . $query . '</p>';
    }
    mysqli_close($dbc);
}
?>
<p><a href="menu_v2.php">Return to Menu</a></p>

</body>
</html>