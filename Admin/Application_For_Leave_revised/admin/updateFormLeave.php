

<?php
require_once "../../../Config/config.php";
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// $search = '';


if (isset($_POST["updateLeaveForm"])) { 
    // Retrieve the value of secret_value from the form
    $secret_value = isset($_POST["secret_value"]) ? $_POST["secret_value"] : ""; 
    $link_value = isset($_POST["link_value"]) ? $_POST["link_value"] : "";
    // Perform any further processing with $secret_value if needed



}

$surname = ' ';
$firstname = ' ';
$middlename = ' ';
$nameextension = ' ';
$typeofleave = $date = '';
$numDays = 0;
$specificDates=$Remarks= '';

$sql2 = "SELECT * FROM appli_for_lev_type_of_leave WHERE ids = $secret_value ;";

$result = $conn->query($sql2);

if ($result->num_rows > 0) {
    // Loop through the fetched data
    // Loop through the fetched data
    while ($rows = $result->fetch_assoc()) {
        $surname = $rows['surname'];
        $firstname = $rows['firstname'];
        $middlename = $rows['middlename'];
        $nameextension = $rows['nameextension'];

        $typeofleave = $rows['typeofleave'];
        $date = $rows['date'];
        $specificDates = $rows['specificDates'];
        $numDays = $rows['numDays'];
        $Remarks = $rows['Remarks'];

    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leave Application Form</title>
    <style>
        /* ======autocomplete===== */

        .autocomplete-items {
            position: absolute;
            border: 1px solid #d4d4d4;
            max-height: 150px;
            overflow-y: auto;
            z-index: 999;
            /* Set a high z-index value */
        }

        .autocomplete-items div {
            padding: 10px;
            cursor: pointer;
            background-color: #fff;
            border-bottom: 1px solid #d4d4d4;
        }

        /* When hovering an item: */
        .autocomplete-items div:hover {
            background-color: #e9e9e9;
        }

        /* When navigating through the items using the arrow keys: */
        .autocomplete-active {
            background-color: DodgerBlue !important;
            color: #ffffff;
        }

        /* =========end of autocomplet */


        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="number"],
        input[type="email"],
        textarea,
        select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .numinputs{
            width: 20px;
        }
      
    </style>
</head>

<body>
<a href="<?php echo $link_value;    ?>.php">Back</a>

 
    <div class="container">
        <h2>Leave Application Form</h2>
        <form action="updateLeave.php" method="post">
            <div class="form-group">
                <label for="surname">Surname:</label>
                <input type="text" id="surname" value="<?php echo $surname; ?>" name="surname" required>
            </div>
            <div class="form-group">
                <label for="firstname">Firstname:</label>
                <input type="text" id="lastname" name="firstname" value="<?php echo $firstname; ?>" required>
            </div>
            <div class="form-group">
                <label for="name_extension">Name Extension:</label>
                <input type="text" id="name_extension" value="<?php echo $nameextension; ?>" name="name_extension">
            </div>
            <div class="form-group">
                <label for="middlename">Middle Name:</label>
                <input type="text" id="middlename" value="<?php echo $middlename; ?>" name="middlename">
            </div>
            <label for="specificDates">Specific Dates:</label>
                <input type="text" id="specificDates" name="specificDates" value="<?php echo $specificDates; ?>" placeholder="format like this: 1,23,24,25">

            <div class="form-group">
              
            </div>

            <div class="form-group">
                <label for="numDays">Number of Days:</label>
                <input type="number" id="numDays" name="numDays" value="<?php echo $numDays;?>">
            </div>
            <div class="form-group">
                <label for="leave_type">Type of Leave:</label>
                <select id="leave_type" name="leave_type" required>
                    <option value="">Select Leave Type</option>
                    <option value="Vacation" <?php if($typeofleave == 'Vacation'){echo 'selected';}?>>Vacation</option>
                    <option value="Sick" <?php if($typeofleave == 'Sick'){echo 'selected';}?>>Sick</option>
                    <option value="Forced" <?php if($typeofleave == 'Forced'){echo 'selected';}?>>Forced</option>
                    <option value="Social" <?php if($typeofleave == 'Social'){echo 'selected';}?>>Social</option>
                    <option value="Compensatory" <?php if($typeofleave == 'Compensatory'){echo 'selected';}?>>Compensatory</option>
                    <option value="Faternity" <?php if($typeofleave == 'Faternity'){echo 'selected';}?>>Maternity</option>
                    <option value="Paternity" <?php if($typeofleave == 'Paternity'){echo 'selected';}?>>Paternity</option>
                    <option value="Solo" <?php if($typeofleave == 'Solo'){echo 'selected';}?>>Solo Parent</option>
                    <option value="RA9262" <?php if($typeofleave == 'RA9262'){echo 'selected';}?>>RA 9262</option>
                </select>
            </div>
            <input type="hidden" name="secret_value" value="<?php echo $secret_value; ?>">
            <input type="hidden" name="link_value" value="<?php echo $link_value; ?>">
            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" id="date" name="date" value="<?php echo $date; ?>" required>
            </div>

            <div class="form-group">
                <label for="Remarks">Remarks:</label>
                <textarea name="Remarks" id="" cols="30" rows="10"><?php echo $Remarks; ?></textarea>
            </div>
            <input type="submit" name="uploadLeave" value="Submit">
        </form>
    </div>

</body>






</html>