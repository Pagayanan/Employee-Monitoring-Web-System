<?php
if (isset($_POST['fieldId']) && isset($_POST['value'])) {
    $fieldId = $_POST['fieldId'];
    $value = $_POST['value'];

    // Connect to the database
    $servername = "localhost"; // Your DB server
    $username = "root"; // Your DB username
    $password = ""; // Your DB password
    $dbname = "monitoring_dashboard"; // Your DB name

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Create an SQL query based on the input field ID
    $sql = "UPDATE lfs_table SET $fieldId = ? WHERE id = 1"; // Adjust query as necessary
    // Prepare the statement to avoid SQL injection
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $value);

    if ($stmt->execute()) {
        echo "Success";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the connection
    $stmt->close();
    $conn->close();
}
?>
