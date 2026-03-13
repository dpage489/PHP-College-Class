<?php
// Daniel Joseph Page
// CSA211
// Contact Management System
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Compare Fields</title>
</head>
<body>

<h1>Compare Two Fields</h1>
<p>Enter two words and the program will compare their first two letters.</p>
<form action="compare_v2.php" method="post">
<p>
<label for="word1">First Word:</label>
<input type="text" name="word1" id="word1">
</p>
<p>
<label for="word2">Second Word:</label>
<input type="text" name="word2" id="word2">
</p>
<p>
<input type="submit" name="submit" value="Compare">
</p>
</form>
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $word1 = $_POST['word1'];
    $word2 = $_POST['word2'];
    $part1 = substr($word1, 0, 2);
    $part2 = substr($word2, 0, 2);
    print '<p>First two letters of word 1: ' . $part1 . '</p>';
    print '<p>First two letters of word 2: ' . $part2 . '</p>';
    if ($part1 == $part2) {
        print '<p>The substrings match.</p>';
    } else {
        print '<p>The substrings do not match.</p>';
    }
}
?>
<p><a href="menu_v2.php">Return to Menu</a></p>

</body>
</html>