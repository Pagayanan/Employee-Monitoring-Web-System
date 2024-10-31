<?php
require_once "../../../Config/config.php";
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$search = '12543';

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
    
        ORDER BY   p.date DESC; 
    
";

$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History</title>
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
        }

        th {
            background-color: #3498db;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e2e2e2;
        }

        /* ==============*/
        .searchbutJS div{
                display: inline;
                height: 50px;

        }
        .searchbutJS{
            float: right;
        }
        .searchbutJS input button{
            height: 100px;
            background-color: red;
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
<div class='searchbutJS' style="display: inline;">
                <div class='form-group mr-2 d-flex' style='margin:auto 0;'>
                    <input type='text' class='form-control' id='search' tyle="height: 30px;">
                </div>
                <button type='button' class='btn btn-primary mr-2' id='searchBtn' s>Search</button>
                <button type='button' class='btn btn-secondary' onclick='location.reload()'>Refresh</button>
            </div>
            <div class="button-container">
    <a href="index_Leave.php">Back to dasboard</a>
    <a href="tardinessHistory.php">Tardiness History</a>
    <a href="undertimeHistory.php">Undertime History</a>
            </div>
    <?php

    if ($result->num_rows > 0) {
        // Start the table
        echo "<table>";
        echo "<thead>";
        // Output table header
        echo "<tr>
            <th>Type of Leave</th>
            <th>Name</th>
            <th>Date</th>
            <th>Number of Days</th>
            <th>Specific Days</th>
            <th>Remarks</th>
            <th>Action</th>
          </tr>";
          echo "</thead>";
          echo '<tbody>';
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
            echo "<td>{$row['surname']}, {$row['firstname']} {$row['nameextension']} ". substr($row['middlename'], 0, 1).".</td>";
            echo "<td>" . date("F j, Y", strtotime($row['date'])) . "</td>";
            echo "<td>{$row['numDays']}</td>";
            echo "<td>{$row['specificDates']}</td>";
            echo "<td>{$row['Remarks']}</td>";
            echo '<td>
            <form action="updateFormLeave.php" method="POST">
                <input type="hidden" name="secret_value" value="' . $row["ids"] . '">
                <input type="hidden" name="link_value" value="historlyLeave">
                <button type="submit" name="updateLeaveForm" style="background-color: #4cbb17; border-radius: 5px;width:90px;">Edit</button> 
            </form> <br>
            <form action="deleteLeave.php" method="POST">
            <input type="hidden" name="secret_value" value="' . $row["ids"] . '">
            <input type="hidden" name="link_value" value="historlyLeave">
            <button type="submit" name="delete" style="background-color: red; border-radius: 5px;width:90px;">DELETE</button> 
        </form>
          </td>';
    
            echo "</tr>";
            
        }
        echo '</tbody>';
        // Close the table
        echo "</table>";
    } else {
        echo "No Table Found";
    }


    
    ?>

</body>

<script>

document.addEventListener("DOMContentLoaded", function() {
        var searchBtn = document.getElementById("searchBtn");
        searchBtn.addEventListener("click", function() {
            var searchValue = document.getElementById("search").value.toLowerCase();
            var rows = document.querySelectorAll("tbody tr");
            rows.forEach(function(row) {
                var cells = row.getElementsByTagName("td");
                var found = false;
                Array.from(cells).forEach(function(cell) {
                    if (cell.textContent.toLowerCase().includes(searchValue)) {
                        found = true;
                    }
                });
                if (found) {
                    row.style.display = "";
                } else {
                    row.style.display = "none";
                }
            });
        });
    

      
        }

     

    );



          </script>
</script>
</html>