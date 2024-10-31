<?php
require_once "../../Config/config.php";

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);



if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$id = 0;
if (isset($_POST["Update"])) {
    $id = isset($_POST["id"]) ? $_POST["id"] : "";
    $inclusiveDatesFrom = $_POST['inclusiveDatesFrom'];
    $inclusiveDatesTo = $_POST['inclusiveDatesTo'];
    $monthlySalary = $_POST['monthlySalary'];
    $positionTitle = $_POST['positionTitle'];
    $departmentAgencyOffice = $_POST['departmentAgencyOffice'];
    $salaryJobPay = $_POST['salaryJobPay'];
    $statusOfAppointment = $_POST['statusOfAppointment'];
    $govService = $_POST['govService'];

    $surname = $firstname = $middlename = $nameextension = '';

    // Use prepared statements to prevent SQL injection
    $sql2page3 = "SELECT surname, firstname, middlename, nameextension FROM pdspage2_workexperience WHERE id = ?";
    $stmt2 = $conn->prepare($sql2page3);
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
    }

    $stmt2->close();

    $referenceWrkexprID = 0;

    // Use prepared statements to prevent SQL injection
    $higherVal = "SELECT MAX(referenceWrkexprID) AS maxRefId FROM pdspage2_workexperience WHERE surname = ? AND firstname = ? AND middlename = ? AND nameextension = ?";
    $stmt3 = $conn->prepare($higherVal);
    $stmt3->bind_param("ssss", $surname, $firstname, $middlename, $nameextension);
    $stmt3->execute();
    $result3 = $stmt3->get_result();

    if ($result3->num_rows > 0) {
        // Fetch the result
        while ($row = $result3->fetch_assoc()) {
            $referenceWrkexprID = $row["maxRefId"] + 1;
        }
    }

    $stmt3->close();

    // Prepare the insert statement
    $sql_pdsPage2_workExperience = "INSERT INTO pdspage2_workexperience (surname, firstname, middlename, nameextension, inclusiveDatesFrom, inclusiveDatesTo, monthlySalary, positionTitle, departmentAgencyOffice, salaryJobPay, statusOfAppointment, govService, referenceWrkexprID) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt_pdsPage2_workExperience = $conn->prepare($sql_pdsPage2_workExperience);
    $stmt_pdsPage2_workExperience->bind_param("ssssssssssssi", $surname, $firstname, $middlename, $nameextension, $inclusiveDatesFrom, $inclusiveDatesTo, $monthlySalary, $positionTitle, $departmentAgencyOffice, $salaryJobPay, $statusOfAppointment, $govService, $referenceWrkexprID);

    // Execute the prepared statement
    if ($stmt_pdsPage2_workExperience->execute()) {
        echo "Record successfully inserted.";

        echo "<script>
        alert('Record successfully inserted.');
        window.location.href = 'Main_PDS.php';
      </script>";
    } else {
        echo "Error: " . $stmt_pdsPage2_workExperience->error;
    }

    // Close the statement
    $stmt_pdsPage2_workExperience->close();
}
?>