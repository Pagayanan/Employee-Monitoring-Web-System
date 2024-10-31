<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "experimentdb";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Extract name from POST data
    $name = isset($_POST["name"]) ? $_POST["name"] : "N/A";

    if(isset($_POST["delete"])) {
        // Delete records based on the provided name
        $sql_delete_your_table = "DELETE FROM your_table WHERE name = ?";
        $stmt_delete_your_table = $conn->prepare($sql_delete_your_table);
        $stmt_delete_your_table->bind_param("s", $name);
        $stmt_delete_your_table->execute();
        $stmt_delete_your_table->close();

        $sql_delete_namemow = "DELETE FROM namemow WHERE name = ?";
        $stmt_delete_namemow = $conn->prepare($sql_delete_namemow);
        $stmt_delete_namemow->bind_param("s", $name);
        $stmt_delete_namemow->execute();
        $stmt_delete_namemow->close();

        $sql_delete_nametable = "DELETE FROM nametable WHERE name = ?";
        $stmt_delete_nametable = $conn->prepare($sql_delete_nametable);
        $stmt_delete_nametable->bind_param("s", $name);
        $stmt_delete_nametable->execute();
        $stmt_delete_nametable->close();
     
        echo "Records deleted successfully";
    } elseif(isset($_POST["update"])) {
        // Update records based on the provided name
        $sql_update_your_table = "UPDATE your_table SET column1 = ?, column2 = ?, column3 = ?, column4 = ? WHERE name = ?";
        $stmt_update_your_table = $conn->prepare($sql_update_your_table);
        $stmt_update_your_table->bind_param("sssss", $cell1, $cell2, $cell3, $cell4, $name);

        foreach ($_POST['cell1'] as $key => $value) {
            $cell1 = $_POST['cell1'][$key];
            $cell2 = $_POST['cell2'][$key];
            $cell3 = $_POST['cell3'][$key];
            $cell4 = $_POST['cell4'][$key];
            $stmt_update_your_table->execute();
        }

        $stmt_update_your_table->close();

        echo "Records updated successfully";
    }

    // Close the connection
    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Upload Form</title>
</head>
<body>
    <h2>Data Upload Form</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="text" name="name">
        <table>
            <tr>
                <td><input type="text" name="cell1[]" /></td>
                <td><input type="text" name="cell2[]" /></td>
                <td><input type="text" name="cell3[]" /></td>
                <td><input type="text" name="cell4[]" /></td>
                <td><button type="submit" name="delete">Delete</button></td>
                <td><button type="submit" name="update">Update</button></td>
            </tr>
            <tr>
                <td><input type="text" name="cell1[]" /></td>
                <td><input type="text" name="cell2[]" /></td>
                <td><input type="text" name="cell3[]" /></td>
                <td><input type="text" name="cell4[]" /></td>
                <td><button type="submit" name="delete">Delete</button></td>
                <td><button type="submit" name="update">Update</button></td>
            </tr>
            <!-- Add more rows as needed -->
        </table>
    </form>
</body>
</html>
