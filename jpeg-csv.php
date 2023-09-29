<?php
// Define the folder path where your photos are stored
$folderPath = "/path/to/your/photos/";

// Define the CSV file path where you want to save the data
$csvFilePath = "photos.csv";

// Define the CSV column headers
$headers = ["Image Name", "Image Path", "Description"];

// Open the CSV file in write mode
$csvFile = fopen($csvFilePath, 'w');

// Write the headers to the CSV file
fputcsv($csvFile, $headers);

// Iterate through the photos in the folder
$photoFiles = glob($folderPath . "*.jpg"); // Change the file extension to match your photos

foreach ($photoFiles as $photoFile) {
    $imageName = basename($photoFile);
    $imagePath = $photoFile;
    $description = "";  // Add code to extract description if available
    
    // Write the data to the CSV file
    fputcsv($csvFile, [$imageName, $imagePath, $description]);
}

// Close the CSV file
fclose($csvFile);

echo "CSV file created successfully.";
?>
