<?php
include './includes/db.php';

// SQL query to fetch data
$sql = "SELECT * FROM Shop";
$result = $conn->query($sql);

// Check if any rows are returned
if ($result->num_rows > 0) {
    // Set headers for CSV file
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="data.csv"');

    // Open output stream
    $output = fopen('php://output', 'w');

    // Output CSV headers (column names)
    fputcsv($output, array('uid', 'Shop Name', 'Logo location', 'Category', 'Description', 'Motto', 'Shop Image', 'Opening Hours', 'Closing Hours', 'Location', 'Contact', 'Email', 'Facebook Link', 'Instagram Link', 'Youtube Link', 'Twitter Link', 'Shop Website'));

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        fputcsv($output, $row); // Output row data
    }

    // Close output stream
    fclose($output);
} else {
    echo "0 results";
}

// Close database connection
$conn->close();
?>
