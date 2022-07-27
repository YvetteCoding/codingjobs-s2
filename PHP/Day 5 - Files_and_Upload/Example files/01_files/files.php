<?php

// Read a file (but no format style)
// $file_content = readfile('movies.txt');
// echo $file_content;

// Another function to read a file (simple)
// $file_content = file_get_contents('movies.txt');
// echo $file_content;

// Check if a file exists
if (file_exists('movies.txt')) {
    // Open the file 
    $file_handle = fopen("movies.txt", "r");
    
    // Read the entire file
    while (!feof($file_handle)) {
        // Retrieve the current line
        $current_line = fgets($file_handle);
        echo $current_line . '<br>';
    }

    // Close the file
    fclose($file_handle);
} else {
    echo "File doesnt exists!";
}
