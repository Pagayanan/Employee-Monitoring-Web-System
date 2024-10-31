<?php
// Check if the 'id' parameter is set in the URL
require_once "../../Config/config.php";

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);



if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


if (isset($_GET['id'])) {
    // Retrieve the 'id' parameter from the URL
    $id = $_GET['id'];
    
    // Use htmlspecialchars to prevent XSS attacks
    $id = htmlspecialchars($id, ENT_QUOTES, 'UTF-8');
    
    // Echo the ID
    // echo "The ID is: " . $id;
} else {
    // Handle the case where 'id' is not provided in the URL
    // echo "No ID provided in the URL.";
}




// ==========================================


$surname= $firstname= $middlename= $nameextension = '';

$sql2page3 = "SELECT * FROM pdspage2_workexperience WHERE id = $id";
		$result2 = $conn->query($sql2page3);

		if ($result2->num_rows > 0) {
			// Loop through the results
			while ($row = $result2->fetch_assoc()) { // Changed $result to $result2
				// Increment row counter
				$surname = $row["surname"];
                $firstname = $row["firstname"];
                $middlename = $row["middlename"];
                $nameextension = $row["nameextension"];
			}
		}

// echo $surname;

//============



$referenceWrkexprID = 0;


$higherVal = "SELECT MAX(referenceWrkexprID) AS maxRefId FROM pdspage2_workexperience WHERE surname = '$surname' AND firstname = '$firstname' AND middlename = '$middlename' AND nameextension = '$nameextension'";
		$result = $conn->query($higherVal);

		if ($result->num_rows > 0) {
			// Loop through the results
			while ($row = $result->fetch_assoc()) { // Changed $result to $result2
				// Increment row counter
                $referenceWrkexprID = $row["maxRefId"] + 1;
			}
		}





?>

<!DOCTYPE html>
<html>
<head>
    <title>Work Experience Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }
        h1 {
            color: #1e90ff;
            text-align: center;
            font-size: 1.5em;
            margin-bottom: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-top: 10px;
            font-weight: bold;
            font-size: 0.9em;
        }
        input[type="text"],
        input[type="number"],
        select {
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 0.9em;
            width: 100%;
        }
        input[type="submit"] {
            background-color: #1e90ff;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px;
            font-size: 1em;
            margin-top: 20px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #005cbf;
        }
    </style>
</head>
<body>

    <div class="container">
      
        <form action="updateworkerexp.php" method="POST">
        <a href="Main_PDS.php">Back</a>
        <h1><?php echo $surname.' '.$firstname; ?></h1>
            <input type="hidden" name="id" value="<?php echo $id;?>">
            <label for="inclusiveDatesFrom">Inclusive Dates From:</label>
            <input type="text" id="inclusiveDatesFrom" name="inclusiveDatesFrom" required>
            
            <label for="inclusiveDatesTo">Inclusive Dates To:</label>
            <input type="text" id="inclusiveDatesTo" name="inclusiveDatesTo" required>
            
            <label for="monthlySalary">Monthly Salary:</label>
            <input type="text" id="monthlySalary" name="monthlySalary" required>
            
            <label for="positionTitle">Position Title:</label>
            <input type="text" id="positionTitle" name="positionTitle" required>
            
            <label for="departmentAgencyOffice">Department/Agency/Office:</label>
            <input type="text" id="departmentAgencyOffice" name="departmentAgencyOffice" required>
            
            <label for="salaryJobPay">Salary Job/Pay:</label>
            <input type="text" id="salaryJobPay" name="salaryJobPay" required>
            
            <label for="statusOfAppointment">Status of Appointment:</label>
            <input type="text" id="statusOfAppointment" name="statusOfAppointment" required>
            
            <label for="govService">Government Service (Yes/No):</label>
            <input type="text" id="govService" name="govService" required>
            <!-- <select id="govService" name="govService" required>
                <option value="Y">Yes</option>
                <option value="N">No</option>
            </select> -->
            
            <input type="submit" name="Update" value="Submit">
        </form>
    </div>

</body>
</html>


<?php

// =====================


?>

