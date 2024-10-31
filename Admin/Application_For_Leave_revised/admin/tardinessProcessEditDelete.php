<?php
require_once "../../../Config/config.php";
$mysqli = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if (!$mysqli) {
   die("Connection failed: " . mysqli_connect_error());
}


if (isset($_POST["delete"])) { 
    // Retrieve the value of secret_value from the form
    $secret_value = isset($_POST["secret_value"]) ? $_POST["secret_value"] : ""; // Retrieve the value if it exists, otherwise assign an empty string
    $link_value = isset($_POST["link_value"]) ? $_POST["link_value"] : ""; 
    // echo $secret_value;
    // Prepare and execute the delete query with prepared statement
    $sql = "DELETE FROM `appli_for_lev_tardiness` WHERE id = ?";
    $stmt = $mysqli->prepare($sql);
    
    if ($stmt) {
        $stmt->bind_param("i", $secret_value); // 'i' indicates integer type
        $stmt->execute();

        // Check if the query was successful
        if ($stmt->affected_rows > 0) {
            // If the query was successful, redirect to a page or display a success message
            echo "<script>
                alert('Data deleted successfully');
                window.location.href = ' $link_value.php';
            </script>";
        } else {
            // If no rows were affected, display an error message
            echo "<script>
                alert('No rows deleted');
                window.location.href = ' $link_value.php';
            </script>";
        }
        
        // Close the statement
        $stmt->close();
    } else {
        // If there was an error preparing the statement, display an error message
        echo "<script>
            alert('Error preparing statement');
            window.location.href = 'historlyLeave.php';
        </script>";
    }
}


?>