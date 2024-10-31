<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Uploaded Files</title>
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
}

.container {
    max-width: 800px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    color: #333;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

table th, table td {
    padding: 10px;
    border: 1px solid #ccc;
}

table th {
    background-color: #f2f2f2;
}

.download-btn, .delete-btn {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 8px 12px;
    border-radius: 4px;
    cursor: pointer;
}

.download-btn:hover, .delete-btn:hover {
    background-color: #0056b3;
}
</style>
</head>
<body>
<a href="fileUpload.php">Upload file</a>
<a href="index_Leave.php">Back</a>
<div class="container">
    <h2>Uploaded Files</h2>

    <table>
        <thead>
            <tr>
                <th>Label</th>
                <th>File Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once "../../../Config/config.php";
            $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            // Select all records from the table
            $sql = "SELECT Label, filename FROM appli_for_lev_fileupload";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // Output data of each row
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row["Label"] . "</td>";
                    echo "<td>" . $row["filename"] . "</td>";
                    echo "<td>";
                    echo "<a href='download.php?file=" . urlencode($row["filename"]) . "' class='download-btn'>Download</a>";
                    echo "<button style='background-color:red;' onclick='deleteFile(\"" . urlencode($row["filename"]) . "\")' class='delete-btn'>Delete</button>";
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='3'>No files uploaded yet.</td></tr>";
            }

            // Close connection
            mysqli_close($conn);
            ?>
        </tbody>
    </table>
</div>

<script>
function deleteFile(filename) {
    if (confirm("Are you sure you want to delete this file?")) {
        // Redirect to delete script with filename parameter
        window.location.href = "deletefile.php?file=" + filename;
    }
}
</script>

</body>
</html>
