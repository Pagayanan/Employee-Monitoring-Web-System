<?php
// Check if the 'id' parameter is set in the URL
require_once "../../Config/config.php";

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_GET['id'])) {
    // Retrieve the 'id' parameter from the URL and sanitize it
    $id = htmlspecialchars($_GET['id'], ENT_QUOTES, 'UTF-8');
    
    // Prepare the delete statement
    $sql = "DELETE FROM pdspage2_workexperience WHERE id = ?";
    $stmt = $conn->prepare($sql);
    
    // Bind parameters and execute the statement
    $stmt->bind_param("i", $id);
    if ($stmt->execute()) {
        echo "Record deleted successfully.";

        echo "<script>
        alert('Record Deleted successfully.');
        window.location.href = 'Main_PDS.php';
      </script>";
    } else {
        echo "Error deleting record: " . $stmt->error;
        echo "<script>
        alert('"."Error deleting record: " . $stmt->error."');
        window.location.href = 'Main_PDS.php';
      </script>";
    }
    
    // Close the statement
    $stmt->close();
    
} else {
    // Handle the case where 'id' is not provided in the URL
    echo "No ID provided in the URL.";
    echo "<script>
    alert('No ID provided in the URL.');
    window.location.href = 'Main_PDS.php';
  </script>";
}

// Close the database connection
mysqli_close($conn);
?>
