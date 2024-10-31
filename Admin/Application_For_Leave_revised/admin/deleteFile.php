<?php
require_once "../../../Config/config.php";

// Check if the file parameter is provided
if (isset($_GET['file'])) {
    $filename = $_GET['file'];

    // Connect to the database
    $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Prepare SQL statement to delete the file
    $sql = "DELETE FROM appli_for_lev_fileupload WHERE filename = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $filename);

    // Execute the SQL statement
    if ($stmt->execute()) {
        echo "<script>
        alert('File Deleted!! " . $stmt->error . "');
        window.location.href = 'fileDisplay.php';
      </script>";
    } else {
        echo "Error deleting file: " . $conn->error;
        echo "<script>
        alert('ERROR DELETING!! " . $stmt->error . "');
        window.location.href = 'fileDisplay.php';
      </script>";
    }

    // Close statement and database connection
    $stmt->close();
    mysqli_close($conn);
} else {
    echo "Filename not provided.";
}
?>
