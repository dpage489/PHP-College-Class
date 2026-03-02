<?php
// Demonstrating string functions in PHP

$name = "Daniel Page";
$post = "   I feel like using a BADword in my post today.   ";

// 1. trim() - removes extra spaces from beginning and end
$clean_post = trim($post);
echo "After trim(): $clean_post<br><br>";

// 2. str_word_count() - counts number of words
$word_count = str_word_count($clean_post);
echo "Word count: $word_count<br><br>";

// 3. str_ireplace() - replaces text (case-insensitive)
$filtered_post = str_ireplace("badword", "XXXXX", $clean_post);
echo "After str_ireplace(): $filtered_post<br>";
?>