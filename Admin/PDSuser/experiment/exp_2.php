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

    // Prepare and bind the INSERT statement for your_table
    $sql_your_table = "INSERT INTO your_table (name, column1, column2, column3, column4) VALUES (?, ?, ?, ?, ?)";
    $stmt_your_table = $conn->prepare($sql_your_table);
    $stmt_your_table->bind_param("sssss", $name, $cell1, $cell2, $cell3, $cell4);

    // Prepare and bind the INSERT statement for namemow table
    $sql_namemow = "INSERT INTO namemow (name, column2) VALUES (?, ?)";
    $stmt_namemow = $conn->prepare($sql_namemow);
    $stmt_namemow->bind_param("ss", $name, $cell2);

    // Prepare and bind the INSERT statement for nametable
    $sql_nametable = "INSERT INTO nametable (name) VALUES (?)";
    $stmt_nametable = $conn->prepare($sql_nametable);
    $stmt_nametable->bind_param("s", $name);

    // Extract name from POST data
    $name = isset($_POST["name"]) ? $_POST["name"] : "N/A";
    $stmt_nametable->execute(); 
    // Loop through each row submitted from the form
    foreach ($_POST['cell1'] as $key => $value) {
        // Extract data from each cell
        $cell1 = $_POST['cell1'][$key];
        $cell2 = $_POST['cell2'][$key];
        $cell3 = $_POST['cell3'][$key];
        $cell4 = $_POST['cell4'][$key];

        // Execute the prepared statements for all tables
        $stmt_your_table->execute();
        $stmt_namemow->execute();
     
    }
 
    echo "Data uploaded successfully";

    // Close the statements and the connection
    $stmt_your_table->close();
    $stmt_namemow->close();
    $stmt_nametable->close();
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
            </tr>
            <tr>
                <td><input type="text" name="cell1[]" /></td>
                <td><input type="text" name="cell2[]" /></td>
                <td><input type="text" name="cell3[]" /></td>
                <td><input type="text" name="cell4[]" /></td>
            </tr>
            <!-- Add more rows as needed -->
        </table>

        <table>
            <tr>
                <td><input type="text" name="call1[]" /></td>
                <td><input type="text" name="call2[]" /></td>
                <td><input type="text" name="call3[]" /></td>
                <td><input type="text" name="cell4[]" /></td>
            </tr>
            <tr>
                <td><input type="text" name="call1[]" /></td>
                <td><input type="text" name="call2[]" /></td>
                <td><input type="text" name="call3[]" /></td>
                <td><input type="text" name="call4[]" /></td>
            </tr>
            <!-- Add more rows as needed -->
        </table>
        <input type="submit" value="Submit" />
    </form>

  
</body>
</html>
