<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monthly Monitoring Dashboard</title>
    <link rel="shortcut icon" type="image/png" href="images for template/psa logo.png">
    <!-- <link rel="shortcut icon" type="image/png" href="img/psa logo.png"> -->
    <style>
        /* General styling for the container */
        .container {
            width: 100%;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            height: 100vh;
            /* Full viewport height */
            overflow: hidden;
            /* Prevents scrollbars on the body */
        }

        /* Container for all tables */
        .tables-container {
            display: flex;
            flex-direction: column;
            /* Align tables vertically */
            width: 100%;
            height: 100%;
            overflow-y: auto;
            /* Allows vertical scrolling if needed */
            padding: 10px;
            box-sizing: border-box;
        }

        /* Wrapper for each table */
        .table-wrapper {
            width: 100%;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #fff;
            padding: 15px;
            margin-bottom: 30px;
            box-shadow: 0 4px 8px rgba(2, 0.3, 0.5, 1);
            /* Add subtle shadow */
        }


        /* Styling for the table */
        .monthly-table {
            width: 100%;
            border-collapse: collapse;
        }

        .monthly-table th,
        .monthly-table td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        .monthly-table thead th {
            background-color: blue;
            color: white;
            font-weight: bold;
        }

        .monthly-table tbody th {
            background-color: cadetblue;
            font-weight: normal;
        }

        .monthly-table tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .monthly-table tbody tr:hover {
            background-color: #f1f1f1;
        }

        h2 {
            text-align: center;
            margin-bottom: 10px;
        }

        h1 {
            text-align: center;
            background-color: palegoldenrod;
        }

        form {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Monthly Monitoring Dashboard</h1>
        <!-- Download Template Link -->
        <form method="post" action="generate_template.php">
            <label for="download-template">Download template for monthly monitoring dashboard</label>
            <input type="submit" name="download_template" value="Download Template" />
        </form>

        <!-- Form for file upload -->
        <form method="post" enctype="multipart/form-data">
            <!-- <label for="year">Select Year:</label>
            <select name="year" id="year">
                <?php
                // $currentYear = date("Y"); // Get the current year
                // $startYear = $currentYear - 20; // 20 years ago
                // $endYear = $currentYear + 20; // 20 years into the future

                // for ($year = $startYear; $year <= $endYear; $year++) {
                //     echo "<option value=\"$year\">$year</option>";
                // }
                // 
                ?>
            </select> -->


            <!-- <label for="month">Select Month:</label>
            <select name="month" id="month">
                <option value="January">January</option>
                <option value="February">February</option>
                <option value="March">March</option>
                <option value="April">April</option>
                <option value="May">May</option>
                <option value="June">June</option>
                <option value="July">July</option>
                <option value="August">August</option>
                <option value="September">September</option>
                <option value="October">October</option>
                <option value="November">November</option>
                <option value="December">December</option>
            </select> -->
            <label for="file-upload">IMPORT DATA </label>
            <input type="file" name="file" id="file-upload" />
            <input type="submit" name="import" value="Import" />
        </form>



        <div class="tables-container">
            <!-- January Table 2024 -->
            <div class="table-wrapper month-january year-2024">

                <table class="monthly-table">
                    <thead>
                        <tr>
                            <th>YEAR</th>
                            <th>MONTH</th>
                            <th>DATE</th>
                            <th>AREA</th>
                            <th>MASTERLST<br>Total<br>[col3+col4]</th>
                            <th>Masterlist</th>
                            <th>MASTERLST<br>Newly listed</th>
                            <th>Total Uploaded<br>[col 6 + col 8]</th>
                            <th>UPLOADED<br>Masterlist<br>number</th>
                            <th>UPLOADED<br>Masterlist<br>Percent<br>[col6/col3]</th>
                            <th>UPLOADED<br>Newly listed<br>Number</th>
                            <th>MACHINE PROCESSED<br>Masterlist + Newly listed<br>Number</th>
                            <th>MACHINE PROCESSED<br>Masterlist + Newly listed<br>Percent<br>[col 9/col 2]</th>
                            <th>PSO REVIEWED<br>New listed<br>Number</th>
                            <th>PSO REVIEWED<br>Percent<br>[col 11/col 1]</th>
                        </tr>
                    </thead>
                    <!-------------------------------------------------------------------------------------->
                    <!-------------------------------filter funtionality------------------------------------>
                    <!-------------------------------------------------------------------------------------->
                    <?php
                    // Establish a connection to your database
                    $conn = new mysqli('localhost', 'root', '', 'monitoring_dashboard');

                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    // Query to get distinct years and months from the database
                    $yearsQuery = "SELECT DISTINCT year FROM monitoring_db ORDER BY year DESC";
                    $monthsQuery = "SELECT DISTINCT input_month FROM monitoring_db ORDER BY input_month ASC";

                    $yearsResult = $conn->query($yearsQuery);
                    $monthsResult = $conn->query($monthsQuery);

                    $years = [];
                    $months = [];

                    if ($yearsResult->num_rows > 0) {
                        while ($row = $yearsResult->fetch_assoc()) {
                            $years[] = $row['year'];
                        }
                    }

                    if ($monthsResult->num_rows > 0) {
                        while ($row = $monthsResult->fetch_assoc()) {
                            $months[] = $row['input_month'];
                        }
                    }

                    $conn->close();
                    ?>

                    <form method="POST">
                        <label for="year">Year:</label>
                        <select name="year" id="year" required>
                            <option value="" disabled selected>Select year</option>
                            <?php
                            foreach ($years as $year) {
                                echo "<option value='$year'>$year</option>";
                            }
                            ?>
                        </select>

                        <label for="input_month">Month:</label>
                        <select name="input_month" id="input_month" required>
                            <option value="" disabled selected>Select month</option>
                            <?php
                            foreach ($months as $month) {
                                // Convert month number to month name
                                // $monthName = DateTime::createFromFormat('!m', $month)->format('F');
                                echo "<option value='$month'>$month</option>";
                            }
                            ?>
                        </select>
                        <button type="submit" name="filter">Filter</button>
                    </form>



                    <!---------------------------------------------------------------------------------------------->
                    <!---------------------------------------filter funtionality------------------------------------>
                    <!---------------------------------------------------------------------------------------------->
                    <tbody>

                        <?php
                        require __DIR__ . '/vendor/autoload.php'; // Ensure this is correct and points to your autoload.php

                        use PhpOffice\PhpSpreadsheet\IOFactory;
                        use PhpOffice\PhpSpreadsheet\Spreadsheet;

                        // Handle data import
                        if (isset($_POST['import'])) {
                            // $year = isset($_POST['year']) ? $_POST['year'] : null;
                            // $month = isset($_POST['month']) ? $_POST['month'] : null;

                            // if ($year === null || $month === null) {
                            //     echo "<tr><td colspan='13'>Year and month are required.</td></tr>";
                            // } else {
                            $file = $_FILES['file']['tmp_name'];

                            if (is_uploaded_file($file)) {
                                // Load the spreadsheet
                                $spreadsheet = IOFactory::load($file);
                                $worksheet = $spreadsheet->getActiveSheet();

                                // Read headers from the first row
                                $headers = $worksheet->rangeToArray('A2:O2')[0];
                                // Expected headers
                                $expectedHeaders = [
                                    'YEAR',
                                    'MONTH',
                                    'DATE',
                                    'AREA',
                                    'MASTERLST Total [col3+col4]',
                                    'Masterlist',
                                    'MASTERLST Newly listed',
                                    'Total Uploaded [col 6 + col 8]',
                                    'UPLOADED Masterlist number',
                                    'UPLOADED Masterlist Percent [col6/col3]',
                                    'UPLOADED Newly listed Number',
                                    'MACHINE PROCESSED Masterlist + Newly listed Number',
                                    'MACHINE PROCESSED Masterlist + Newly listed Percent [col 9/col 2]',
                                    'PSO REVIEWED New listed Number',
                                    'PSO REVIEWED Percent [col 11/col 1]'
                                ];
                                // Check for header mismatch
                                if ($headers !== $expectedHeaders) {
                                    echo "<tr><td colspan='13'>Header mismatch: Expected headers are different.</td></tr>";
                                    return;
                                }
                                // Initialize row counter
                                $rowCount = 0;
                                $conn = new mysqli('localhost', 'root', '', 'monitoring_dashboard');
                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }
                                foreach ($worksheet->getRowIterator(1) as $row) {
                                    $data = $worksheet->rangeToArray('A' . $row->getRowIndex() . ':O' . $row->getRowIndex())[0];
                                    $rowCount++;
                                    // Check if 'area' column is empty
                                    if (empty($data[3])) {
                                        $data[2] = 'Unknown'; // Provide a default value if area is empty
                                    }
                                    // Prepare the SQL statement
                                    $stmt = $conn->prepare("
                                        INSERT INTO monitoring_db (
                                           year,input_month,input_date, area, masterlist_total, masterlist, masterlist_newly_listed, 
                                            total_uploaded, uploaded_masterlist_number, uploaded_masterlist_percent, 
                                            uploaded_newly_listed_number, machine_processed_number, machine_processed_percent, 
                                            pso_reviewed_number, pso_reviewed_percent
                                        ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?,?)
                                    ");
                                    if ($stmt === false) {
                                        die("Error preparing statement: " . $conn->error);
                                    }
                                    // Bind the CSV data to the SQL query
                                    $stmt->bind_param(
                                        "sssssssssssssss",

                                        $data[0], // input_date
                                        $data[1], // area
                                        $data[2],
                                        $data[3],
                                        $data[4],
                                        $data[5],
                                        $data[6],
                                        $data[7],
                                        $data[8],
                                        $data[9],
                                        $data[10],
                                        $data[11],
                                        $data[12],
                                        $data[13],
                                        $data[14],
                                    );

                                    if (!$stmt->execute()) {
                                        die("Error executing query: " . $stmt->error);
                                    }

                                    echo '<tr>';
                                    foreach ($data as $value) {
                                        echo '<td>' . htmlspecialchars($value, ENT_QUOTES, 'UTF-8') . '</td>';
                                    }
                                    echo '</tr>';
                                }

                                $conn->close();

                                if ($rowCount === 0) {
                                    echo '<tr><td colspan="13">No data found in the file.</td></tr>';
                                }
                            } else {
                                echo "<tr><td colspan='13'>No file uploaded or file is not valid.</td></tr>";
                            }
                        }
                        // Handle data filtering
                        if (isset($_POST['filter'])) {
                            $year = isset($_POST['year']) ? $_POST['year'] : null;
                            $month = isset($_POST['input_month']) ? $_POST['input_month'] : null;
                            if ($year === null || $month === null) {
                                echo "<tr><td colspan='13'>Year and month are required.</td></tr>";
                            } else {
                                $conn = new mysqli('localhost', 'root', '', 'monitoring_dashboard');

                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }
                                // Prepare SQL query to filter by year and month
                                $stmt = $conn->prepare("
            SELECT year, input_month, input_date, area, masterlist_total, masterlist, masterlist_newly_listed, 
                   total_uploaded, uploaded_masterlist_number, uploaded_masterlist_percent, 
                   uploaded_newly_listed_number, machine_processed_number, machine_processed_percent, 
                   pso_reviewed_number, pso_reviewed_percent
            FROM monitoring_db
            WHERE year=?
        ");
                                if ($stmt === false) {
                                    die("Error preparing statement: " . $conn->error);
                                }
                                // Bind parameters (year and month)
                                $stmt->bind_param("s", $year,);
                                // Execute the query
                                $stmt->execute();

                                // Get the result
                                $result = $stmt->get_result();

                                // Check if there are any results
                                if ($result->num_rows > 0) {
                                    //                     echo "<table>";
                                    //                     echo "<tr>
                                    //     <th>Year</th>
                                    //     <th>Month</th>
                                    //     <th>DATE</th>
                                    //     <th>Area</th>
                                    //     <th>Masterlist Total</th>
                                    //     <th>Masterlist</th>
                                    //     <th>Masterlist Newly Listed</th>
                                    //     <th>Total Uploaded</th>
                                    //     <th>Uploaded Masterlist Number</th>
                                    //     <th>Uploaded Masterlist Percent</th>
                                    //     <th>Uploaded Newly Listed Number</th>
                                    //     <th>Machine Processed Number</th>
                                    //     <th>Machine Processed Percent</th>
                                    //     <th>PSO Reviewed Number</th>
                                    //     <th>PSO Reviewed Percent</th>
                                    // </tr>";

                                    // Fetch and display each row of data
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<tr>";
                                        echo "<td>" . htmlspecialchars($row['year'], ENT_QUOTES, 'UTF-8') . "</td>";
                                        // echo "<td>" . htmlspecialchars($row['month'], ENT_QUOTES, 'UTF-8') . "</td>";
                                        echo "<td>" . htmlspecialchars($row['input_month'], ENT_QUOTES, 'UTF-8') . "</td>";
                                        echo "<td>" . htmlspecialchars($row['input_date'], ENT_QUOTES, 'UTF-8') . "</td>";
                                        echo "<td>" . htmlspecialchars($row['area'], ENT_QUOTES, 'UTF-8') . "</td>";
                                        echo "<td>" . htmlspecialchars($row['masterlist_total'], ENT_QUOTES, 'UTF-8') . "</td>";
                                        echo "<td>" . htmlspecialchars($row['masterlist'], ENT_QUOTES, 'UTF-8') . "</td>";
                                        echo "<td>" . htmlspecialchars($row['masterlist_newly_listed'], ENT_QUOTES, 'UTF-8') . "</td>";
                                        echo "<td>" . htmlspecialchars($row['total_uploaded'], ENT_QUOTES, 'UTF-8') . "</td>";
                                        echo "<td>" . htmlspecialchars($row['uploaded_masterlist_number'], ENT_QUOTES, 'UTF-8') . "</td>";
                                        echo "<td>" . htmlspecialchars($row['uploaded_masterlist_percent'], ENT_QUOTES, 'UTF-8') . "</td>";
                                        echo "<td>" . htmlspecialchars($row['uploaded_newly_listed_number'], ENT_QUOTES, 'UTF-8') . "</td>";
                                        echo "<td>" . htmlspecialchars($row['machine_processed_number'], ENT_QUOTES, 'UTF-8') . "</td>";
                                        echo "<td>" . htmlspecialchars($row['machine_processed_percent'], ENT_QUOTES, 'UTF-8') . "</td>";
                                        echo "<td>" . htmlspecialchars($row['pso_reviewed_number'], ENT_QUOTES, 'UTF-8') . "</td>";
                                        echo "<td>" . htmlspecialchars($row['pso_reviewed_percent'], ENT_QUOTES, 'UTF-8') . "</td>";
                                        echo "</tr>";
                                    }

                                    echo "</table>";
                                } else {
                                    echo "<tr><td colspan='13'>No data found for the selected month and year.</td></tr>";
                                }

                                // Close the statement and connection
                                $stmt->close();
                                $conn->close();
                            }
                        }
                        ?>





                    </tbody>


                </table>
            </div>
        </div>
    </div>
</body>

</html>