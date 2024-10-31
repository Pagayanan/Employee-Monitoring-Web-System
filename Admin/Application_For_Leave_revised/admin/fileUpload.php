<?php
require_once "../../../Config/config.php";
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>File Upload Form</title>
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
}

.container {
    max-width: 500px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    color: #333;
}

form {
    margin-top: 20px;
}

label {
    display: block;
    margin-bottom: 8px;
    color: #333;
}

input[type="file"],
input[type="text"],
button[type="submit"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

button[type="submit"] {
    background-color: #007bff;
    color: #fff;
    cursor: pointer;
}

button[type="submit"]:hover {
    background-color: #0056b3;
}

.message {
    margin-top: 20px;
    padding: 10px;
    border-radius: 4px;
}

.success {
    background-color: #d4edda;
    color: #155724;
}

.error {
    background-color: #f8d7da;
    color: #721c24;
}
</style>
</head>
<body>
    <a href="fileDisplay.php">back</a>

<div class="container">
    <h2>Upload a File</h2>

    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" enctype="multipart/form-data">
      <label for="file">Select file:</label>
      <input type="file" id="file" name="file" accept=".txt, .pdf, .doc, .docx">
      <label for="label">Label:</label>
      <input type="text" id="label" name="label">
      <button type="submit" name="submit">Upload</button>
    </form>

    <?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if a file was selected
    if (isset($_FILES["file"]) && $_FILES["file"]["error"] == 0) {
        // Database connection parameters
      
        // Create connection
       

        // Prepare and bind SQL statement
        $stmt = $conn->prepare("INSERT INTO appli_for_lev_fileupload (Label, filename) VALUES (?, ?)");
        $stmt->bind_param("ss", $label, $filename);

        // Set parameters
        $label = $_POST["label"];
        $filename = $_FILES["file"]["name"];
        // $fileContent = file_get_contents($_FILES["file"]["tmp_name"]);   

        // Insert record into database
        $stmt->execute();

        // Close statement and database connection
        $stmt->close();
        $conn->close();

        echo "File uploaded successfully!";
    } else {
        echo "Error: No file selected or an error occurred during file upload.";
    }
}
?>

</div>

</body>
</html>
