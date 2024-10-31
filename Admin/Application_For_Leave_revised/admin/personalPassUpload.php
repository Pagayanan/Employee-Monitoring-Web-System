<?php
require_once "../../../Config/config.php";
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


if (isset($_POST["uploadLeave"])) {
    // Assign values from the form
    $surname = isset($_POST["surname"]) ? $_POST["surname"] : "";
    $firstname = isset($_POST["firstname"]) ? $_POST["firstname"] : "";
    $middlename = isset($_POST["middlename"]) ? $_POST["middlename"] : "";
    $nameextension = isset($_POST["name_extension"]) ? $_POST["name_extension"] : "";

    // $Month = isset($_POST["Month"]) ? $_POST["Month"] : "";
    // $year = isset($_POST["year"]) ? $_POST["year"] : "";
   


    $date = isset($_POST["date"]) ? $_POST["date"] : "";
    $numMinutes = isset($_POST["numMinutes"]) ? $_POST["numMinutes"] : "";
    // $numOfTimes = isset($_POST["numOfTimes"]) ? $_POST["numOfTimes"] : "";

    
  

    $Remarks = isset($_POST["Remarks"]) ? $_POST["Remarks"] : "";

    echo $Month;
    echo $year;
    echo $date;
    echo $numMinutes;


    // Your database connection code goes here
   

    // Create connection
    // $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
   // Check if there is a connection error
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare SQL statement to check for duplicates
$stmt_check_duplicate = $conn->prepare("SELECT COUNT(*) FROM appli_for_lev_personalpass WHERE surname = ? AND firstname = ? AND middlename = ? AND nameextension = ? AND date = ?");
$stmt_check_duplicate->bind_param("sssss", $surname, $firstname, $middlename, $nameextension, $date);

// Execute the duplicate check query
$stmt_check_duplicate->execute();

// Fetch the result
$stmt_check_duplicate->bind_result($count);
$stmt_check_duplicate->fetch();

// Close the duplicate check statement
$stmt_check_duplicate->close();

// If count is greater than 0, it means a duplicate exists
if ($count > 0) {
    echo "Duplicate record found. Do not insert.";
    echo "<script>
    alert('DUPLICATE FOUND!');
    window.location.href = 'personalPass.php';
  </script>";
} else {
    // No duplicate found, proceed with insertion

    // Prepare and bind SQL statement for insertion
    $stmt_insert = $conn->prepare("INSERT INTO appli_for_lev_personalpass (surname, firstname, middlename, nameextension, date, numMinutes, Remarks) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt_insert->bind_param("sssssds", $surname, $firstname, $middlename, $nameextension, $date, $numMinutes, $Remarks);

    // Execute the insertion statement
    if ($stmt_insert->execute()) {
        // Insertion successful
        echo "<script>
        alert('File successfully uploaded!');
        window.location.href = 'personalPass.php';
      </script>";
    } else {
        // Insertion failed
        echo "<script>
        alert('Error uploading file: " . $stmt_insert->error . "');
        window.location.href = 'personalPass.php';
      </script>";
    }

    // Close the insertion statement
    $stmt_insert->close();
}

// Close connection
$conn->close();

}


?>

