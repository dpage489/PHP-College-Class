<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Your Settings</title>
<style type="text/css">

<?php // Script 9.2 - view_settings.php

// Check for a font size cookie:
if (isset($_COOKIE['font_size'])) {
    print "\t\tbody { font-size: {$_COOKIE['font_size']}; }\n";
} else {
    print "\t\tbody { font-size: medium; }\n";
}

// Check for a font color cookie:
if (isset($_COOKIE['font_color'])) {
    print "\t\tbody { color: #{$_COOKIE['font_color']}; }\n";
} else {
    print "\t\tbody { color: #000; }\n";
}

?>

</style>
</head>
<body>

<p><a href="customize.php">Customize Your Settings</a></p>
<p><a href="reset.php">Reset Your Settings</a></p>

<p>
yydady yada yada yada yada<br>
yada yada yada yada yada<br>
yada yada yada yada yada<br>
yada yada yada yada yada
</p>

</body>
</html>