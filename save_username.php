<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    
    // Open the file in append mode
    $file = fopen("usernames.txt", "a");
    
    if ($file) {
        // Write the username to the file
        fwrite($file, $username . "\n");
        fclose($file);
        
        echo "Username saved successfully.";
    } else {
        echo "Error saving username.";
    }
}
?>
