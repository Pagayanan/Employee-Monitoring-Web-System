
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

<?php
require_once "../../Config/config.php";
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$tables = array(
    "pds",
    "pdspage2_workexperience",
    "pds_p3_otherinformation_t3",
    "pds_p3_titleoflearnanddevintervsn_2ndtable",
    "pds_2ndpage",
    "pds_p3_voluntaryworkorinvomenttable",
    "pds_p4"
);

$results = array();

foreach ($tables as $table) {
    $sql = "SELECT DISTINCT firstname, middlename, surname, nameextension FROM $table";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // Store results for each table in an array
            $results[] = $row;
        }
    }
}

// Remove duplicates
$results = array_map("unserialize", array_unique(array_map("serialize", $results)));

?>
<body>
<button id="ListLink" style="float: left;" onclick="window.location.href='Main_PDS.php'">Back</button>
<div class='searchbutJS' style="display: inline;">
    <div class='form-group mr-2 d-flex' style='margin:auto 0;'>
        <input type='text' class='form-control' id='search' tyle="height: 30px;">
    </div>
    <button type='button' class='btn btn-primary mr-2' id='searchBtn' s>Search</button>
    <button type='button' class='btn btn-secondary' onclick='location.reload()'>Refresh</button>
</div>

<?php

echo "<table>";
echo "<thead>";
echo "<tr>
            <th>Name</th>
            <th>Action</th>
          </tr>";
echo "</thead>";
echo "<tbody>";

foreach ($results as $row) {
    echo "<tr>";
    echo "<td>{$row['surname']}, {$row['firstname']} {$row['nameextension']} " . $row['middlename'] . "</td>";
    echo "<td>
                <form action='pdsDelete.php' method='POST'>
                    <input type='hidden' name='surname' value='{$row["surname"]}'>
                    <input type='hidden' name='firstname' value='{$row["firstname"]}'>
                    <input type='hidden' name='nameextension' value='{$row["nameextension"]}'>
                    <input type='hidden' name='middlename' value='{$row["middlename"]}'>
                    <button type='submit' name='delete' style='background-color: red; border-radius: 5px;width:90px;'>DELETE</button> 
                </form>
            </td>";
    echo "</tr>";
}

echo "</tbody>";
echo "</table>";

?>

</body>


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