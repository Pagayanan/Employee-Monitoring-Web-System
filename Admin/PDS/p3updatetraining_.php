<?php
require_once "../../Config/config.php";

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$id = 0;
if (isset($_POST["UpdateP3"])) {
    if (isset($_POST["id"]) && !empty($_POST["id"])) {
        $id = $_POST["id"];
    } else {
        die("ID is not set or empty.");
    }

    $titleoflearnAndIntervsn = isset($_POST['titleoflearnAndIntervsn']) ? $_POST['titleoflearnAndIntervsn'] : '';
    $inclusiveDatesFromT2 = isset($_POST['inclusiveDatesFromT2']) ? $_POST['inclusiveDatesFromT2'] : '';
    $inclusiveDatesToT2 = isset($_POST['inclusiveDatesToT2']) ? $_POST['inclusiveDatesToT2'] : '';
    $numOfHours = isset($_POST['numOfHours']) ? $_POST['numOfHours'] : '';
    $typeOfLD = isset($_POST['typeOfLD']) ? $_POST['typeOfLD'] : '';
    $ConductedSponsoredby = isset($_POST['ConductedSponsoredby']) ? $_POST['ConductedSponsoredby'] : '';

    echo $id;

    $surname = $firstname = $middlename = $nameextension = '';

    // Use prepared statements to prevent SQL injection
    $sql2page3 = "SELECT surname, firstname, middlename, nameextension FROM pds_p3_titleoflearnanddevintervsn_2ndtable WHERE id = ?";
    $stmt2 = $conn->prepare($sql2page3);
    if ($stmt2 === false) {
        die('Prepare failed: ' . htmlspecialchars($conn->error));
    }
    $stmt2->bind_param("i", $id);
    $stmt2->execute();
    $result2 = $stmt2->get_result();

    if ($result2->num_rows > 0) {
        // Fetch the result
        while ($row = $result2->fetch_assoc()) {
            $surname = $row["surname"];
            $firstname = $row["firstname"];
            $middlename = $row["middlename"];
            $nameextension = $row["nameextension"];
        }
    } else {
        die("No matching record found for the given ID.");
    }

    $stmt2->close();

    $rowReference = 0;

    // Use prepared statements to prevent SQL injection
    $higherVal = "SELECT MAX(rowReference) AS maxRefId FROM pds_p3_titleoflearnanddevintervsn_2ndtable WHERE surname = ? AND firstname = ? AND middlename = ? AND nameextension = ?";
    $stmt3 = $conn->prepare($higherVal);
    if ($stmt3 === false) {
        die('Prepare failed: ' . htmlspecialchars($conn->error));
    }
    $stmt3->bind_param("ssss", $surname, $firstname, $middlename, $nameextension);
    $stmt3->execute();
    $result3 = $stmt3->get_result();

    if ($result3->num_rows > 0) {
        // Fetch the result
        while ($row = $result3->fetch_assoc()) {
            $rowReference = $row["maxRefId"] + 1;
        }
    }

    $stmt3->close();

    // Prepare the insert statement
    $sql_pds_p3_titleoflearnanddevintervsn_2ndtable = "INSERT INTO pds_p3_titleoflearnanddevintervsn_2ndtable (surname, firstname, middlename, nameextension, titleoflearnAndIntervsn, inclusiveDatesFromT2, inclusiveDatesToT2, numOfHours, typeOfLD, ConductedSponsoredby, rowReference) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt_pds_p3_titleoflearnanddevintervsn_2ndtable = $conn->prepare($sql_pds_p3_titleoflearnanddevintervsn_2ndtable);
    if ($stmt_pds_p3_titleoflearnanddevintervsn_2ndtable === false) {
        die('Prepare failed: ' . htmlspecialchars($conn->error));
    }
    $stmt_pds_p3_titleoflearnanddevintervsn_2ndtable->bind_param("ssssssssssi", $surname, $firstname, $middlename, $nameextension, $titleoflearnAndIntervsn, $inclusiveDatesFromT2, $inclusiveDatesToT2, $numOfHours, $typeOfLD, $ConductedSponsoredby, $rowReference);

    // Execute the prepared statement
    if ($stmt_pds_p3_titleoflearnanddevintervsn_2ndtable->execute()) {
        echo "Record successfully inserted.";

        echo "<script>
        alert('Record successfully inserted.');
        window.location.href = 'Main_PDS.php';
      </script>";
    } else {
        echo "Error: " . $stmt_pds_p3_titleoflearnanddevintervsn_2ndtable->error;
    }

    // Close the statement
    $stmt_pds_p3_titleoflearnanddevintervsn_2ndtable->close();
}
?>
