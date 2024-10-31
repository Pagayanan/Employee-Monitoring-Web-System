<?php
require_once "../../../Config/config.php";
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if filename is provided in the query parameter
if (isset($_GET['file'])) {
    $filename = $_GET['file'];

    // Prepare SQL statement to fetch file content
    $stmt = $conn->prepare("SELECT filename FROM appli_for_lev_fileupload WHERE filename = ?");
    $stmt->bind_param("s", $filename);
    $stmt->execute();
    $result = $stmt->get_result();

    // If file exists, initiate download
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $fileContent = $row['file_content'];

        // Set headers for file download
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . $filename . '"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . strlen($fileContent));
        
        // Output file content
        echo $fileContent;
        exit;
    } else {
        echo "File not found.";
    }

    // Close statement and database connection
    $stmt->close();
} else {
    echo "Filename not provided.";
}

// Close database connection
mysqli_close($conn);
?>
