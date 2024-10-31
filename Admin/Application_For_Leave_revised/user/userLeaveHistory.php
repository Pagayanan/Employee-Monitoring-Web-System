<?php
require_once "../../../Config/config.php";
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// $search = '12543';
session_start();
$search = $_SESSION['name'];

$surname = ' ';
$firstname = ' ';
$middlename = ' ';
$nameextension = ' ';

$sql = " 
    SELECT DISTINCT p.*
    FROM appli_for_lev_type_of_leave p
    INNER JOIN employeeid e ON 
        p.surname = e.surname AND 
        p.firstname = e.firstname AND 
        p.middlename = e.middle_name AND 
        p.nameextension = e.name_extension
    WHERE 
        e.EmployeeID = '$search'
        ORDER BY   p.date DESC; 
    
";

$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User history</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
            border: 1px solid black;
        }

        th {
            background-color: #0056b3;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e2e2e2;
        }
        /* =============================== */
  .button-container a {
        display: inline-block;
        width: calc(15% - 10px); /* Adjust the width as needed */
        margin: 5px;
        background-color: #007bff; /* Blue theme */
        border: none;
        color: white;
        text-align: center;
        padding: 5px;
        text-decoration: none;
        font-size: 16px;
         border-radius: 10px;
    }

    .button-container a:hover {
        background-color: #0056b3; /* Darker blue on hover */
    } 
    </style>
</head>

<body>
<div class="button-container">
    <a href="userDashboard.php">Back to dasboard</a>
</div>


    <?php

    if ($result->num_rows > 0) {
        // Start the table
        echo "<table>";
        // Output table header
        echo "<tr>
        <th>Type of Leave</th>
        <th>Date</th>
        <th>Number of Days</th>
        <th>Specific Days</th>
        <th>Remarks</th>
          </tr>";
        while ($row = $result->fetch_assoc()) {
            // Output table row
            echo "<tr>";
            echo "<td>";
            if ($row['typeofleave'] == 'Faternity') {
                echo 'Maternity';
            }  elseif ($row['typeofleave'] == 'Solo') {
                echo 'Solo Parent';
            }else {
                echo $row['typeofleave'];
            }
            echo " Leave"."</td>";
            echo "<td>" . date("F j, Y", strtotime($row['date'])) . "</td>";
            echo "<td>{$row['numDays']}</td>";
            echo "<td>{$row['specificDates']}</td>";
            echo "<td>{$row['Remarks']}</td>";
            echo "</tr>";
            
        }
        // Close the table
        echo "</table>";
    } else {
        echo "No Table Found";
    }

    ?>

</body>

</html>