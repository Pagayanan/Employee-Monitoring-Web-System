<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Data</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "experimentdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$firstsql =  "SELECT * FROM firstexp WHERE id = 21";

// Execute SELECT statement
$firstresult = $conn->query($firstsql);

// Check if there are any results
if ($firstresult->num_rows > 0) {
    // Output data in a table
   
    while ($row = $firstresult->fetch_assoc()) {
       
        echo "<p>" . $row["Planet"] . "</p>";
        $hello =    $row["Planet"];

        
        // Construct SQL SELECT statement
        $sql = "SELECT * FROM your_table";
        
        // Execute SELECT statement
        $result = $conn->query($sql);
        
        // Check if there are any results
        $max_rows = 10; // Maximum number of rows to display

        if ($result->num_rows > 0) {
            // Output data in a table
            echo "<table>";
            echo "<tr><th>Name</th><th>Column 1</th><th>Column 2</th><th>Column 3</th><th>Column 4</th></tr>";
        
            // Loop to display fixed number of rows
            for ($i = 0; $i < $max_rows; $i++) {
                echo "<tr>";
        
                // Check if there is data available for the current row
                if ($row = $result->fetch_assoc()) {
                    echo "<td>" . $row["name"] . "</td>";
                    echo "<td>" . $row["column1"] . "</td>";
                    echo "<td>" . $row["column2"] . "</td>";
                    echo "<td>" . $row["column3"] . "</td>";
                    echo "<td>" . $row["column4"] . "</td>";
                } else {
                    // If no data available, display empty cells
                    echo "<td></td><td></td><td></td><td></td><td></td>";
                }
        
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }



        $sql3 = "SELECT * FROM firstexp;";
        
        // Execute SELECT statement
        $result3 = $conn->query($sql3);
        
        // Check if there are any results
        if ($result3->num_rows > 0) {
            // Output data in a table
            echo "<table>";
            echo "<tr><th>Column 1</th><th>Column 2</th></tr>";
            while ($row = $result3->fetch_assoc()) {
                echo "<tr>";              
                echo "<td>" . $row["texarea"] . "</td>";
                echo "<td>" . $row["Planet"] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
        
       
        echo "<p>". $hello. "</p>";
    }
   
} else {
    echo "0 results";
}

// Close the connection
$conn->close();
?>
</body>
</html>
