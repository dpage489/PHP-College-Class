<!doctype html>
<html>
<body>

<?php

// isset() example
$name = "Daniel";
if (isset($name)) {
    echo "isset(): The variable exists and has a value.<br>";
}
// isset checks if a variable has been created and is not null



// empty() example
$password = "";
if (empty($password)) {
    echo "empty(): The variable has no usable value.<br>";
}
// empty checks if a variable is blank, zero, null, or missing



// is_numeric() example
$age = "25";
if (is_numeric($age)) {
    echo "is_numeric(): The variable contains a number.<br>";
}
// is_numeric checks if the value is a number or numeric text

?>

</body>
</html>
