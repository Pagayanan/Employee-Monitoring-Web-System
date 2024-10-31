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
    $typeofleave = isset($_POST["leave_type"]) ? $_POST["leave_type"] : "";
    $date = isset($_POST["date"]) ? $_POST["date"] : "";
    $numDays = isset($_POST["numDays"]) ? $_POST["numDays"] : "";
    $specificDates = isset($_POST["specificDates"]) ? $_POST["specificDates"] : "";
    $Remarks = isset($_POST["Remarks"]) ? $_POST["Remarks"] : "";

    // Your database connection code goes here
   

    // Create connection
    // $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind SQL statement
    $stmt = $conn->prepare("INSERT INTO appli_for_lev_type_of_leave (surname, firstname, middlename, nameextension, typeofleave, date,numDays,specificDates,Remarks) VALUES (?, ?, ?, ?, ?, ?,?,?,?)");
    $stmt->bind_param("ssssssiss", $surname, $firstname, $middlename, $nameextension, $typeofleave, $date,$numDays,$specificDates,$Remarks);

    // Execute the statement
    if ($stmt->execute()) {
        // echo "Leave application uploaded successfully.";
        echo "<script>
        alert('File successfully Upload!!');
        window.location.href = 'LeaveForm.php';
      </script>";
    } else {
        echo "<script>
        alert('File successfully Upload!! " . $stmt->error . "');
        window.location.href = 'LeaveForm.php';
      </script>";
        // echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}



?>

