<?php
// Daniel Joseph Page
// CSA211
// Contact Management System
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Display Files</title>
</head>
<body>
<h1>Files in Directory</h1>
<?php

$dir = 'test_files';
if (is_dir($dir)) {
    $files = scandir($dir);
    print '<p>The files in the directory are:</p>';
    print '<ul>';
    foreach ($files as $file) {
        if ($file != '.' && $file != '..') {
            print '<li>' . $file . '</li>';
        }
    }
    print '</ul>';
} else {
    print '<p>The directory was not found.</p>';
}
?>
<p><a href="menu_v2.php">Return to Menu</a></p>

</body>
</html>