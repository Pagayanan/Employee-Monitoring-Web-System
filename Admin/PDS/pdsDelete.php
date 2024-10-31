<?php
require_once "../../Config/config.php";
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Define the names of all tables where you want to perform deletion
$tables = array(
    "pds",
    "pdspage2_workexperience",
    "pds_p3_otherinformation_t3",
    "pds_p3_titleoflearnanddevintervsn_2ndtable",
    "pds_2ndpage",
    "pds_p3_voluntaryworkorinvomenttable",
    "pds_p4"
);

if(isset($_POST['delete'])) {
    $surname = $_POST['surname'];
    $firstname = $_POST['firstname'];
    $nameextension = $_POST['nameextension'];
    $middlename = $_POST['middlename'];

    // Assuming you have proper validation and sanitization here

    // Delete records from each table based on the provided name components
    foreach ($tables as $table) {
        $sql = "DELETE FROM $table WHERE 
                surname = '$surname' AND
                firstname = '$firstname' AND
                nameextension = '$nameextension' AND
                middlename = '$middlename'";
        mysqli_query($conn, $sql);
    }

    // Redirect back to the previous page after deletion
    header("Location: pdsallrecords.php");
    exit();
}
