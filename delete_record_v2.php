<?php
// Daniel Joseph Page
// CSA211
// Contact Management System
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Delete Record</title>
</head>
<body>
<h1>Delete a Record</h1>
<?php

$dbc = mysqli_connect('localhost', 'root', '', 'contact_management_system');
if (!$dbc) {
    print '<p>Could not connect to the database.</p>';
} else {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "DELETE FROM contacts WHERE id=$id";
        $r = mysqli_query($dbc, $query);
        if ($r) {
            print '<p>The record has been deleted.</p>';
        } else {
            print '<p>The record could not be deleted because:<br>' . mysqli_error($dbc) . '</p>';
        }
    }
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
                <td>Delete</td>
              </tr>';
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
                    <td><a href="delete_record_v2.php?id=' . $row['id'] . '">Delete</a></td>
                  </tr>';
        }
        print '</table>';
    } else {
        print '<p>Could not retrieve the records because:<br>' . mysqli_error($dbc) . '</p>';
    }
    mysqli_close($dbc);
}
?>
<p><a href="menu_v2.php">Return to Menu</a></p>
</body>
</html>