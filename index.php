<?php
// Define the new location
$newURL = 'public/index.php';

// Perform a temporary (302) redirect
header('Location: ' . $newURL, true, 302);
exit(); // Stop further script execution
?>
