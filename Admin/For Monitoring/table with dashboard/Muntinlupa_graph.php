<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>City Monthly Target vs Actual Data</title>
    <link rel="shortcut icon" type="image/png" href="images for dashboard/psa logo.png">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .city-section {
            overflow: scroll;
            max-width: 100vw;
            margin: 20px auto;
            width: 100%;
        }

        table {
            width: 100%;
            margin-bottom: 20px;
            border-collapse: collapse;
            border-radius: 20px;
        }

        table,
        th,
        td {
            border: 2px solid #26211e;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #0A414F;
        }

        /* td{
            background-color: #0A414F;
        } */
        .chart-container {

            width: 70%;
            margin: 20px auto;
        }

        .city-header {
            text-align: center;
            margin-top: 30px;
            margin-bottom: 10px;
            font-size: 1.5em;
        }

        .button-container {
            display: flex;
            justify-content: center;
            gap: 3px;
        }

        .button-container a {
            border-radius: 10px;
        }

        /**************************for logo css part***********************/
        .logo-container {
            display: flex;
            align-items: center;
            justify-content: center;
            position: absolute;
            top: 5%;
            left: 50%;
            transform: translate(-50%, -50%);
            gap: 20px;
            /* Space between logos and text */
            padding: 10px 20px;
            /* Add padding for a cleaner layout */
            background-color: rgba(255, 255, 255, 0.8);
            /* Slightly transparent background for better contrast */
            border-radius: 10px;
            /* Rounded corners for a modern look */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            /* Add subtle shadow for depth */
        }

        .logo-container img {
            width: 60px;
            /* Slightly larger logo for better visibility */
            height: auto;
            transition: transform 0.3s ease-in-out;
            /* Smooth transition for hover effects */
        }

        .logo-container img:hover {
            transform: scale(1.1);
            /* Scale up logos slightly on hover */
        }

        .logo-text {
            font-size: 20px;
            /* Increase font size for better readability */
            font-weight: bold;
            color: #333;
            /* Darker color for the text to improve contrast */
            text-align: center;
            letter-spacing: 1px;
            /* Add some letter spacing for a refined look */
        }

        @media (max-width: 768px) {
            .logo-container {
                flex-direction: column;
                /* Stack logos and text vertically on smaller screens */
                gap: 10px;
                /* Reduce gap for better spacing */
            }

            .logo-container img {
                width: 50px;
                /* Adjust logo size for smaller screens */
            }

            .logo-text {
                font-size: 16px;
                /* Adjust text size for better fit on mobile */
            }
        }

        .image-size {
            width: 45px;
            height: 45px;
            vertical-align: middle;
        }

        /****************************** End for logo css part ***********************/
    </style>
</head>
<div class="logo-container">
    <img src="images for dashboard/psa logo.png" alt="Logo 1">
    <div style="font-size:medium; font-weight:bolder" class="logo-text">Republic of the Philippines<br>
        PHILIPPINE STATISTICS AUTHORITY<br>
        Regional Statistical Service Office<br>
        National Capital Region-Provincial Statistical Office V</div>
    <img src="images for dashboard/logph.png" alt="Logo 2">
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<!---------------------------------------------------------------------------->
<!-------------------------------------- BY CITY BUTTON  --------------------->
<!---------------------------------------------------------------------------->
<div class="button-container">
    <div>
        <a style="background-color: #0A414f; color:white; font-weight: bolder; padding:5px" href="NCR-V.php" class="btn btn-primary active">NCR-V</a>
    </div>

    <div>
        <a style="background-color: #0A414f; color:white; font-weight: bolder; padding:5px" href="laspiñas_graph.php" class="btn btn-primary active">LAS PIÑAS CITY</a>
    </div>

    <br>

    <div>
        <a style="background-color: cadetblue; color:white; font-weight:bolder; padding:5px" href="Muntinlupa_graph.php" class="btn btn-primary">MUNTINLUPA CITY</a>
    </div>

    <br>

    <div>
        <a style="background-color: #0a414f; color:white; font-weight:bolder; padding:5px" href="Parañaque_graph.php" class="btn btn-primary">PARAÑAQUE CITY</a>
    </div>

    <br>

    <div>
        <a style="background-color: #0a414f; color:white; font-weight:bolder; padding:5px" href="pasay_graph.php" class="btn btn-primary">PASAY CITY</a>
    </div>
    <div>
        <a style="background-color: #0A414F; color:white; font-weight: bolder; padding:5px" href="overallstatusreport.php" class="btn btn-primary active">OVERALL WEEKLY Status Report</a>
    </div>

</div>
<!-------------------------------------------------------------------------------->
<!-------------------------------------- BY CITY BUTTON END----------------------->
<!-------------------------------------------------------------------------------->

<body>
    <h2 style="text-align:center;">MIUNTINLUPA CITY</h2>
    <!-- City Section for Las Piñas -->
    <div class="city-header" style="font-weight: bolder; background-color:darkgoldenrod;">LABOR FORCE SURVEY</div>
    <div>
        <a style="background-color:#0A414F; color:white; border-radius:7px; font-weight: bolder; padding:5px" href="progress.php" class="btn btn-primary active">SELECT PROJECT</a>
    </div>
    <div class="city-section" id="mc-section">
        <table>
            <thead>
                <tr>
                    <th style="color: white;">Category</th>
                    <th style="color: white;" colspan="3">January</th>
                    <th style="color:white;" colspan="3">February</th>
                    <th style="color: white;" colspan="3">March</th>
                    <th style="color: white;" colspan="3">April</th>
                    <th style="color: white;" colspan="3">May</th>
                    <th style="color: white;" colspan="3">June</th>
                    <th style="color: white;" colspan="3">July</th>
                    <th style="color: white;" colspan="3">August</th>
                    <th style="color: white;" colspan="3">September</th>
                    <th style="color: white;" colspan="3">October</th>
                    <th style="color: white;" colspan="3">November</th>
                    <th style="color: white;" colspan="3">December</th>
                    <!-- Add more months as needed -->
                </tr>
                <tr>
                    <th></th>
                    <th style="color: white;">Target</th>
                    <th style="color: white;">Actual</th>
                    <th style="color: white;">Remarks</th>

                    <th style="color: white;">Target</th>
                    <th style="color: white;">Actual</th>
                    <th style="color: white;">Remarks</th>

                    <th style="color: white;">Target</th>
                    <th style="color: white;">Actual</th>
                    <th style="color: white;">Remarks</th>

                    <th style="color: white;">Target</th>
                    <th style="color: white;">Actual</th>
                    <th style="color: white;">Remarks</th>

                    <th style="color: white;">Target</th>
                    <th style="color: white;">Actual</th>
                    <th style="color: white;">Remarks</th>

                    <th style="color: white;">Target</th>
                    <th style="color: white;">Actual</th>
                    <th style="color: white;">Remarks</th>

                    <th style="color: white;">Target</th>
                    <th style="color: white;">Actual</th>
                    <th style="color: white;">Remarks</th>

                    <th style="color: white;">Target</th>
                    <th style="color: white;">Actual</th>
                    <th style="color: white;">Remarks</th>

                    <th style="color: white;">Target</th>
                    <th style="color: white;">Actual</th>
                    <th style="color: white;">Remarks</th>

                    <th style="color: white;">Target</th>
                    <th style="color: white;">Actual</th>
                    <th style="color: white;">Remarks</th>

                    <th style="color: white;">Target</th>
                    <th style="color: white;">Actual</th>
                    <th style="color: white;">Remarks</th>

                    <th style="color: white;">Target</th>
                    <th style="color: white;">Actual</th>
                    <th style="color: white;">Remarks</th>
                    <!-- Add sub-headers for more months -->
                </tr>
            </thead>
            <tbody>

                <br>
                <!-- Repeat for each category -->

                <tr>
                    <td style="font-weight: bolder;">Response Rate</td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="mc-jan-res-target" oninput="checkValues('mc-jan-res-target', 'mc-jan-res-actual', 'mc-jan-res-remarks')" onchange="updateChart('mc')">
                    </td>
                    <td>
                        <input type="mumber" style="border: white; text-align:center;" id="mc-jan-res-actual" oninput="checkValues('mc-jan-res-target', 'mc-jan-res-actual', 'mc-jan-res-remarks')" onchange="updateChart('mc')">
                    </td>
                    <td>
                        <div id="mc-jan-res-remarks"></div>
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="mc-feb-res-target" oninput="checkValues('mc-feb-res-target', 'mc-feb-res-actual', 'mc-feb-res-remarks')" onchange="updateChart('mc')">
                    </td>
                    <td>
                        <input type="mumber" style="border: white; text-align:center;" id="mc-feb-res-actual" oninput="checkValues('mc-feb-res-target', 'mc-feb-res-actual', 'mc-feb-res-remarks')" onchange="updateChart('mc')">
                    </td>
                    <td>
                        <div id="mc-feb-res-remarks"></div>
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="mc-mar-res-target" oninput="checkValues('mc-mar-res-target', 'mc-mar-res-actual', 'mc-mar-res-remarks')" onchange="updateChart('mc')">
                    </td>
                    <td>
                        <input type="mumber" style="border: white; text-align:center;" id="mc-mar-res-actual" oninput="checkValues('mc-mar-res-target', 'mc-mar-res-actual', 'mc-mar-res-remarks')" onchange="updateChart('mc')">
                    </td>
                    <td>
                        <div id="mc-mar-res-remarks"></div>
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="mc-apr-res-target" oninput="checkValues('mc-apr-res-target', 'mc-apr-res-actual', 'mc-apr-res-remarks')" onchange="updateChart('mc')">
                    </td>
                    <td>
                        <input type="mumber" style="border: white; text-align:center;" id="mc-apr-res-actual" oninput="checkValues('mc-apr-res-target', 'mc-apr-res-actual', 'mc-apr-res-remarks')" onchange="updateChart('mc')">
                    </td>
                    <td>
                        <div id="mc-apr-res-remarks"></div>
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="mc-may-res-target" oninput="checkValues('mc-may-res-target', 'mc-may-res-actual', 'mc-may-res-remarks')" onchange="updateChart('mc')">
                    </td>
                    <td>
                        <input type="mumber" style="border: white; text-align:center;" id="mc-may-res-actual" oninput="checkValues('mc-may-res-target', 'mc-may-res-actual', 'mc-may-res-remarks')" onchange="updateChart('mc')">
                    </td>
                    <td>
                        <div id="mc-may-res-remarks"></div>
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="mc-jun-res-target" oninput="checkValues('mc-jun-res-target', 'mc-jun-res-actual', 'mc-jun-res-remarks')" onchange="updateChart('mc')">
                    </td>
                    <td>
                        <input type="mumber" style="border: white; text-align:center;" id="mc-jun-res-actual" oninput="checkValues('mc-jun-res-target', 'mc-jun-res-actual', 'mc-jun-res-remarks')" onchange="updateChart('mc')">
                    </td>
                    <td>
                        <div id="mc-jun-res-remarks"></div>
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="mc-jul-res-target" oninput="checkValues('mc-jul-res-target', 'mc-jul-res-actual', 'mc-jul-res-remarks')" onchange="updateChart('mc')">
                    </td>
                    <td>
                        <input type="mumber" style="border: white; text-align:center;" id="mc-jul-res-actual" oninput="checkValues('mc-jul-res-target', 'mc-jul-res-actual', 'mc-jul-res-remarks')" onchange="updateChart('mc')">
                    </td>
                    <td>
                        <div id="mc-jul-res-remarks"></div>
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="mc-aug-res-target" oninput="checkValues('mc-aug-res-target', 'mc-aug-res-actual', 'mc-aug-res-remarks')" onchange="updateChart('mc')">
                    </td>
                    <td>
                        <input type="mumber" style="border: white; text-align:center;" id="mc-aug-res-actual" oninput="checkValues('mc-aug-res-target', 'mc-aug-res-actual', 'mc-aug-res-remarks')" onchange="updateChart('mc')">
                    </td>
                    <td>
                        <div id="mc-aug-res-remarks"></div>
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="mc-sep-res-target" oninput="checkValues('mc-sep-res-target', 'mc-sep-res-actual', 'mc-sep-res-remarks')" onchange="updateChart('mc')">
                    </td>
                    <td>
                        <input type="mumber" style="border: white; text-align:center;" id="mc-sep-res-actual" oninput="checkValues('mc-sep-res-target', 'mc-sep-res-actual', 'mc-sep-res-remarks')" onchange="updateChart('mc')">
                    </td>
                    <td>
                        <div id="mc-sep-res-remarks"></div>
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="mc-oct-res-target" oninput="checkValues('mc-oct-res-target', 'mc-oct-res-actual', 'mc-oct-res-remarks')" onchange="updateChart('mc')">
                    </td>
                    <td>
                        <input type="mumber" style="border: white; text-align:center;" id="mc-oct-res-actual" oninput="checkValues('mc-oct-res-target', 'mc-oct-res-actual', 'mc-oct-res-remarks')" onchange="updateChart('mc')">
                    </td>
                    <td>
                        <div id="mc-oct-res-remarks"></div>
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="mc-nov-res-target" oninput="checkValues('mc-nov-res-target', 'mc-nov-res-actual', 'mc-nov-res-remarks')" onchange="updateChart('mc')">
                    </td>
                    <td>
                        <input type="mumber" style="border: white; text-align:center;" id="mc-nov-res-actual" oninput="checkValues('mc-nov-res-target', 'mc-nov-res-actual', 'mc-nov-res-remarks')" onchange="updateChart('mc')">
                    </td>
                    <td>
                        <div id="mc-nov-res-remarks"></div>
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center;" id="mc-dec-res-target" oninput="checkValues('mc-dec-res-target', 'mc-dec-res-actual', 'mc-dec-res-remarks')" onchange="updateChart('mc')">
                    </td>
                    <td>
                        <input type="mumber" style="border: white; text-align:center;" id="mc-dec-res-actual" oninput="checkValues('mc-dec-res-target', 'mc-dec-res-actual', 'mc-dec-res-remarks')" onchange="updateChart('mc')">
                    </td>
                    <td>
                        <div id="mc-dec-res-remarks"></div>
                    </td>
                </tr>
                <tr>
                    <td>Raw datafile</td>

                    <td>
                        <input type="date" style="border: white; text-align:center;" id="mc-jan-raw-target" oninput="checkDate('mc-jan-raw-target', 'mc-jan-raw-actual', 'mc-jan-raw-remarks')" onchange="updateChart('mc')">
                    </td>
                    <td>
                        <input type="date" style="border: white; text-align:center;" id="mc-jan-raw-actual" oninput="checkDate('mc-jan-raw-target', 'mc-jan-raw-actual', 'mc-jan-raw-remarks')" onchange="updateChart('mc')">
                    </td>
                    <td>
                        <div id="mc-jan-raw-remarks" style="text-align: center;"></div>
                    </td>

                    <td>
                        <input type="date" style="border: white; text-align:center;" id="mc-feb-raw-target" oninput="checkDate('mc-feb-raw-target', 'mc-feb-raw-actual', 'mc-feb-raw-remarks')" onchange="updateChart('mc')">
                    </td>
                    <td>
                        <input type="date" style="border: white; text-align:center;" id="mc-feb-raw-actual" oninput="checkDate('mc-feb-raw-target', 'mc-feb-raw-actual', 'mc-feb-raw-remarks')" onchange="updateChart('mc')">
                    </td>
                    <td>
                        <div id="mc-feb-raw-remarks" style="text-align: center;"></div>
                    </td>

                    <td>
                        <input type="date" style="border: white; text-align:center;" id="mc-mar-raw-target" oninput="checkDate('mc-mar-raw-target', 'mc-mar-raw-actual', 'mc-mar-raw-remarks')" onchange="updateChart('mc')">
                    </td>
                    <td>
                        <input type="date" style="border: white; text-align:center;" id="mc-mar-raw-actual" oninput="checkDate('mc-mar-raw-target', 'mc-mar-raw-actual', 'mc-mar-raw-remarks')" onchange="updateChart('mc')">
                    </td>
                    <td>
                        <div id="mc-mar-raw-remarks" style="text-align: center;"></div>
                    </td>

                    <td>
                        <input type="date" style="border: white; text-align:center;" id="mc-apr-raw-target" oninput="checkDate('mc-apr-raw-target', 'mc-apr-raw-actual', 'mc-apr-raw-remarks')" onchange="updateChart('mc')">
                    </td>
                    <td>
                        <input type="date" style="border: white; text-align:center;" id="mc-apr-raw-actual" oninput="checkDate('mc-apr-raw-target', 'mc-apr-raw-actual', 'mc-apr-raw-remarks')" onchange="updateChart('mc')">
                    </td>
                    <td>
                        <div id="mc-apr-raw-remarks" style="text-align: center;"></div>
                    </td>

                    <td>
                        <input type="date" style="border: white; text-align:center;" id="mc-may-raw-target" oninput="checkDate('mc-may-raw-target', 'mc-may-raw-actual', 'mc-may-raw-remarks')" onchange="updateChart('mc')">
                    </td>
                    <td>
                        <input type="date" style="border: white; text-align:center;" id="mc-may-raw-actual" oninput="checkDate('mc-may-raw-target', 'mc-may-raw-actual', 'mc-may-raw-remarks')" onchange="updateChart('mc')">
                    </td>
                    <td>
                        <div id="mc-may-raw-remarks" style="text-align: center;"></div>
                    </td>

                    <td>
                        <input type="date" style="border: white; text-align:center;" id="mc-jun-raw-target" oninput="checkDate('mc-jun-raw-target', 'mc-jun-raw-actual', 'mc-jun-raw-remarks')" onchange="updateChart('mc')">
                    </td>
                    <td>
                        <input type="date" style="border: white; text-align:center;" id="mc-jun-raw-actual" oninput="checkDate('mc-jun-raw-target', 'mc-jun-raw-actual', 'mc-jun-raw-remarks')" onchange="updateChart('mc')">
                    </td>
                    <td>
                        <div id="mc-jun-raw-remarks" style="text-align: center;"></div>
                    </td>

                    <td>
                        <input type="date" style="border: white; text-align:center;" id="mc-jul-raw-target" oninput="checkDate('mc-jul-raw-target', 'mc-jul-raw-actual', 'mc-jul-raw-remarks')" onchange="updateChart('mc')">
                    </td>
                    <td>
                        <input type="date" style="border: white; text-align:center;" id="mc-jul-raw-actual" oninput="checkDate('mc-jul-raw-target', 'mc-jul-raw-actual', 'mc-jul-raw-remarks')" onchange="updateChart('mc')">
                    </td>
                    <td>
                        <div id="mc-jul-raw-remarks" style="text-align: center;"></div>
                    </td>

                    <td>
                        <input type="date" style="border: white; text-align:center;" id="mc-aug-raw-target" oninput="checkDate('mc-aug-raw-target', 'mc-aug-raw-actual', 'mc-aug-raw-remarks')" onchange="updateChart('mc')">
                    </td>
                    <td>
                        <input type="date" style="border: white; text-align:center;" id="mc-aug-raw-actual" oninput="checkDate('mc-aug-raw-target', 'mc-aug-raw-actual', 'mc-aug-raw-remarks')" onchange="updateChart('mc')">
                    </td>
                    <td>
                        <div id="mc-aug-raw-remarks" style="text-align: center;"></div>
                    </td>

                    <td>
                        <input type="date" style="border: white; text-align:center;" id="mc-sep-raw-target" oninput="checkDate('mc-sep-raw-target', 'mc-sep-raw-actual', 'mc-sep-raw-remarks')" onchange="updateChart('mc')">
                    </td>
                    <td>
                        <input type="date" style="border: white; text-align:center;" id="mc-sep-raw-actual" oninput="checkDate('mc-sep-raw-target', 'mc-sep-raw-actual', 'mc-sep-raw-remarks')" onchange="updateChart('mc')">
                    </td>
                    <td>
                        <div id="mc-sep-raw-remarks" style="text-align: center;"></div>
                    </td>

                    <td>
                        <input type="date" style="border: white; text-align:center;" id="mc-oct-raw-target" oninput="checkDate('mc-oct-raw-target', 'mc-oct-raw-actual', 'mc-oct-raw-remarks')" onchange="updateChart('mc')">
                    </td>
                    <td>
                        <input type="date" style="border: white; text-align:center;" id="mc-oct-raw-actual" oninput="checkDate('mc-oct-raw-target', 'mc-oct-raw-actual', 'mc-oct-raw-remarks')" onchange="updateChart('mc')">
                    </td>
                    <td>
                        <div id="mc-oct-raw-remarks" style="text-align: center;"></div>
                    </td>

                    <td>
                        <input type="date" style="border: white; text-align:center;" id="mc-nov-raw-target" oninput="checkDate('mc-nov-raw-target', 'mc-nov-raw-actual', 'mc-nov-raw-remarks')" onchange="updateChart('mc')">
                    </td>
                    <td>
                        <input type="date" style="border: white; text-align:center;" id="mc-nov-raw-actual" oninput="checkDate('mc-nov-raw-target', 'mc-nov-raw-actual', 'mc-nov-raw-remarks')" onchange="updateChart('mc')">
                    </td>
                    <td>
                        <div id="mc-nov-raw-remarks" style="text-align: center;"></div>
                    </td>

                    <td>
                        <input type="date" style="border: white; text-align:center;" id="mc-dec-raw-target" oninput="checkDate('mc-dec-raw-target', 'mc-dec-raw-actual', 'mc-dec-raw-remarks')" onchange="updateChart('mc')">
                    </td>
                    <td>
                        <input type="date" style="border: white; text-align:center;" id="mc-dec-raw-actual" oninput="checkDate('mc-dec-raw-target', 'mc-dec-raw-actual', 'mc-dec-raw-remarks')" onchange="updateChart('mc')">
                    </td>
                    <td>
                        <div id="mc-dec-raw-remarks" style="text-align: center;"></div>
                    </td>


                </tr>
                <tr>
                    <td>Clean datafile</td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-jan-clean-target" oninput="checkDate('mc-jan-clean-target', 'mc-jan-clean-actual', 'mc-jan-clean-remarks')" onchange="updateChart('mc')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-jan-clean-actual" oninput="checkDate('mc-jan-clean-target', 'mc-jan-clean-actual', 'mc-jan-clean-remarks')" onchange="updateChart('mc')"></td>
                    <td>
                        <div id="mc-jan-clean-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-feb-clean-target" oninput="checkDate('mc-feb-clean-target', 'mc-feb-clean-actual', 'mc-feb-clean-remarks')" onchange="updateChart('mc')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-feb-clean-actual" oninput="checkDate('mc-feb-clean-target', 'mc-feb-clean-actual', 'mc-feb-clean-remarks')" onchange="updateChart('mc')"></td>
                    <td>
                        <div id="mc-feb-clean-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-mar-clean-target" oninput="checkDate('mc-mar-clean-target', 'mc-mar-clean-actual', 'mc-mar-clean-remarks')" onchange="updateChart('mc')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-mar-clean-actual" oninput="checkDate('mc-mar-clean-target', 'mc-mar-clean-actual', 'mc-mar-clean-remarks')" onchange="updateChart('mc')"></td>
                    <td>
                        <div id="mc-mar-clean-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-apr-clean-target" oninput="checkDate('mc-apr-clean-target', 'mc-apr-clean-actual', 'mc-apr-clean-remarks')" onchange="updateChart('mc')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-apr-clean-actual" oninput="checkDate('mc-apr-clean-target', 'mc-apr-clean-actual', 'mc-apr-clean-remarks')" onchange="updateChart('mc')"></td>
                    <td>
                        <div id="mc-apr-clean-remarks" style="text-align: center;"></div>
                    </td>


                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-may-clean-target" oninput="checkDate('mc-may-clean-target', 'mc-may-clean-actual', 'mc-may-clean-remarks')" onchange="updateChart('mc')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-may-clean-actual" oninput="checkDate('mc-may-clean-target', 'mc-may-clean-actual', 'mc-may-clean-remarks')" onchange="updateChart('mc')"></td>
                    <td>
                        <div id="mc-may-clean-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-jun-clean-target" oninput="checkDate('mc-jun-clean-target', 'mc-jun-clean-actual', 'mc-jun-clean-remarks')" onchange="updateChart('mc')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-jun-clean-actual" oninput="checkDate('mc-jun-clean-target', 'mc-jun-clean-actual', 'mc-jun-clean-remarks')" onchange="updateChart('mc')"></td>
                    <td>
                        <div id="mc-jun-clean-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-jul-clean-target" oninput="checkDate('mc-jul-clean-target', 'mc-jul-clean-actual', 'mc-jul-clean-remarks')" onchange="updateChart('mc')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-jul-clean-actual" oninput="checkDate('mc-jul-clean-target', 'mc-jul-clean-actual', 'mc-jul-clean-remarks')" onchange="updateChart('mc')"></td>
                    <td>
                        <div id="mc-jul-clean-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-aug-clean-target" oninput="checkDate('mc-aug-clean-target', 'mc-aug-clean-actual', 'mc-aug-clean-remarks')" onchange="updateChart('mc')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-aug-clean-actual" oninput="checkDate('mc-aug-clean-target', 'mc-aug-clean-actual', 'mc-aug-clean-remarks')" onchange="updateChart('mc')"></td>
                    <td>
                        <div id="mc-aug-clean-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-sep-clean-target" oninput="checkDate('mc-sep-clean-target', 'mc-sep-clean-actual', 'mc-sep-clean-remarks')" onchange="updateChart('mc')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-sep-clean-actual" oninput="checkDate('mc-sep-clean-target', 'mc-sep-clean-actual', 'mc-sep-clean-remarks')" onchange="updateChart('mc')"></td>
                    <td>
                        <div id="mc-sep-clean-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-oct-clean-target" oninput="checkDate('mc-oct-clean-target', 'mc-oct-clean-actual', 'mc-oct-clean-remarks')" onchange="updateChart('mc')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-oct-clean-actual" oninput="checkDate('mc-oct-clean-target', 'mc-oct-clean-actual', 'mc-oct-clean-remarks')" onchange="updateChart('mc')"></td>
                    <td>
                        <div id="mc-oct-clean-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-nov-clean-target" oninput="checkDate('mc-nov-clean-target', 'mc-nov-clean-actual', 'mc-nov-clean-remarks')" onchange="updateChart('mc')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-nov-clean-actual" oninput="checkDate('mc-nov-clean-target', 'mc-nov-clean-actual', 'mc-nov-clean-remarks')" onchange="updateChart('mc')"></td>
                    <td>
                        <div id="mc-nov-clean-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-dec-clean-target" oninput="checkDate('mc-dec-clean-target', 'mc-dec-clean-actual', 'mc-dec-clean-remarks')" onchange="updateChart('mc')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-dec-clean-actual" oninput="checkDate('mc-dec-clean-target', 'mc-dec-clean-actual', 'mc-dec-clean-remarks')" onchange="updateChart('mc')"></td>
                    <td>
                        <div id="mc-dec-clean-remarks" style="text-align: center;"></div>
                    </td>
                </tr>
                <tr>
                    <td>Narrative Report</td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-jan-narrative-target" oninput="checkDate('mc-jan-narrative-target', 'mc-jan-narrative-actual', 'mc-jan-narrative-remarks')" onchange="updateChart('mc')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-jan-narrative-actual" oninput="checkDate('mc-jan-narrative-target', 'mc-jan-narrative-actual', 'mc-jan-narrative-remarks')" onchange="updateChart('mc')"></td>
                    <td>
                        <div id="mc-jan-narrative-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-feb-narrative-target" oninput="checkDate('mc-feb-narrative-target', 'mc-feb-narrative-actual', 'mc-feb-narrative-remarks')" onchange="updateChart('mc')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-feb-narrative-actual" oninput="checkDate('mc-feb-narrative-target', 'mc-feb-narrative-actual', 'mc-feb-narrative-remarks')" onchange="updateChart('mc')"></td>
                    <td>
                        <div id="mc-feb-narrative-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-mar-narrative-target" oninput="checkDate('mc-mar-narrative-target', 'mc-mar-narrative-actual', 'mc-mar-narrative-remarks')" onchange="updateChart('mc')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-mar-narrative-actual" oninput="checkDate('mc-mar-narrative-target', 'mc-mar-narrative-actual', 'mc-mar-narrative-remarks')" onchange="updateChart('mc')"></td>
                    <td>
                        <div id="mc-mar-narrative-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-apr-narrative-target" oninput="checkDate('mc-apr-narrative-target', 'mc-apr-narrative-actual', 'mc-apr-narrative-remarks')" onchange="updateChart('mc')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-apr-narrative-actual" oninput="checkDate('mc-apr-narrative-target', 'mc-apr-narrative-actual', 'mc-apr-narrative-remarks')" onchange="updateChart('mc')"></td>
                    <td>
                        <div id="mc-apr-narrative-remarks" style="text-align: center;"></div>
                    </td>


                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-may-narrative-target" oninput="checkDate('mc-may-narrative-target', 'mc-may-narrative-actual', 'mc-may-narrative-remarks')" onchange="updateChart('mc')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-may-narrative-actual" oninput="checkDate('mc-may-narrative-target', 'mc-may-narrative-actual', 'mc-may-narrative-remarks')" onchange="updateChart('mc')"></td>
                    <td>
                        <div id="mc-may-narrative-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-jun-narrative-target" oninput="checkDate('mc-jun-narrative-target', 'mc-jun-narrative-actual', 'mc-jun-narrative-remarks')" onchange="updateChart('mc')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-jun-narrative-actual" oninput="checkDate('mc-jun-narrative-target', 'mc-jun-narrative-actual', 'mc-jun-narrative-remarks')" onchange="updateChart('mc')"></td>
                    <td>
                        <div id="mc-jun-narrative-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-jul-narrative-target" oninput="checkDate('mc-jul-narrative-target', 'mc-jul-narrative-actual', 'mc-jul-narrative-remarks')" onchange="updateChart('mc')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-jul-narrative-actual" oninput="checkDate('mc-jul-narrative-target', 'mc-jul-narrative-actual', 'mc-jul-narrative-remarks')" onchange="updateChart('mc')"></td>
                    <td>
                        <div id="mc-jul-narrative-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-aug-narrative-target" oninput="checkDate('mc-aug-narrative-target', 'mc-aug-narrative-actual', 'mc-aug-narrative-remarks')" onchange="updateChart('mc')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-aug-narrative-actual" oninput="checkDate('mc-aug-narrative-target', 'mc-aug-narrative-actual', 'mc-aug-narrative-remarks')" onchange="updateChart('mc')"></td>
                    <td>
                        <div id="mc-aug-narrative-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-sep-narrative-target" oninput="checkDate('mc-sep-narrative-target', 'mc-sep-narrative-actual', 'mc-sep-narrative-remarks')" onchange="updateChart('mc')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-sep-narrative-actual" oninput="checkDate('mc-sep-narrative-target', 'mc-sep-narrative-actual', 'mc-sep-narrative-remarks')" onchange="updateChart('mc')"></td>
                    <td>
                        <div id="mc-sep-narrative-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-oct-narrative-target" oninput="checkDate('mc-oct-narrative-target', 'mc-oct-narrative-actual', 'mc-oct-narrative-remarks')" onchange="updateChart('mc')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-oct-narrative-actual" oninput="checkDate('mc-oct-narrative-target', 'mc-oct-narrative-actual', 'mc-oct-narrative-remarks')" onchange="updateChart('mc')"></td>
                    <td>
                        <div id="mc-oct-narrative-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-nov-narrative-target" oninput="checkDate('mc-nov-clean-target', 'mc-nov-narrative-actual', 'mc-nov-narrative-remarks')" onchange="updateChart('mc')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-nov-narrative-actual" oninput="checkDate('mc-nov-clean-target', 'mc-nov-narrative-actual', 'mc-nov-narrative-remarks')" onchange="updateChart('mc')"></td>
                    <td>
                        <div id="mc-nov-narrative-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-dec-narrative-target" oninput="checkDate('mc-dec-narrative-target', 'mc-dec-narrative-actual', 'mc-dec-narrative-remarks')" onchange="updateChart('mc')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-dec-narrative-actual" oninput="checkDate('mc-dec-narrative-target', 'mc-dec-narrative-actual', 'mc-dec-narrative-remarks')" onchange="updateChart('mc')"></td>
                    <td>
                        <div id="mc-dec-narrative-remarks" style="text-align: center;"></div>
                    </td>
                </tr>

                <tr>
                    <td>Financial Report</td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-jan-financial-target" oninput="checkDate('mc-jan-financial-target', 'mc-jan-financial-actual', 'mc-jan-financial-remarks')" onchange="updateChart('mc')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-jan-financial-actual" oninput="checkDate('mc-jan-financial-target', 'mc-jan-financial-actual', 'mc-jan-financial-remarks')" onchange="updateChart('mc')"></td>
                    <td>
                        <div id="mc-jan-financial-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-feb-financial-target" oninput="checkDate('mc-feb-financial-target', 'mc-feb-financial-actual', 'mc-feb-financial-remarks')" onchange="updateChart('mc')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-feb-financial-actual" oninput="checkDate('mc-feb-financial-target', 'mc-feb-financial-actual', 'mc-feb-financial-remarks')" onchange="updateChart('mc')"></td>
                    <td>
                        <div id="mc-feb-financial-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-mar-financial-target" oninput="checkDate('mc-mar-financial-target', 'mc-mar-financial-actual', 'mc-mar-financial-remarks')" onchange="updateChart('mc')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-mar-financial-actual" oninput="checkDate('mc-mar-financial-target', 'mc-mar-financial-actual', 'mc-mar-financial-remarks')" onchange="updateChart('mc')"></td>
                    <td>
                        <div id="mc-mar-financial-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-apr-financial-target" oninput="checkDate('mc-apr-financial-target', 'mc-apr-financial-actual', 'mc-apr-financial-remarks')" onchange="updateChart('mc')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-apr-financial-actual" oninput="checkDate('mc-apr-financial-target', 'mc-apr-financial-actual', 'mc-apr-financial-remarks')" onchange="updateChart('mc')"></td>
                    <td>
                        <div id="mc-apr-financial-remarks" style="text-align: center;"></div>
                    </td>


                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-may-financial-target" oninput="checkDate('mc-may-financial-target', 'mc-may-financial-actual', 'mc-may-financial-remarks')" onchange="updateChart('mc')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-may-financial-actual" oninput="checkDate('mc-may-financial-target', 'mc-may-financial-actual', 'mc-may-financial-remarks')" onchange="updateChart('mc')"></td>
                    <td>
                        <div id="mc-may-financial-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-jun-financial-target" oninput="checkDate('mc-jun-financial-target', 'mc-jun-financial-actual', 'mc-jun-financial-remarks')" onchange="updateChart('mc')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-jun-financial-actual" oninput="checkDate('mc-jun-financial-target', 'mc-jun-financial-actual', 'mc-jun-financial-remarks')" onchange="updateChart('mc')"></td>
                    <td>
                        <div id="mc-jun-financial-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-jul-financial-target" oninput="checkDate('mc-jul-financial-target', 'mc-jul-financial-actual', 'mc-jul-financial-remarks')" onchange="updateChart('mc')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-jul-financial-actual" oninput="checkDate('mc-jul-financial-target', 'mc-jul-financial-actual', 'mc-jul-financial-remarks')" onchange="updateChart('mc')"></td>
                    <td>
                        <div id="mc-jul-financial-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-aug-financial-target" oninput="checkDate('mc-aug-financial-target', 'mc-aug-financial-actual', 'mc-aug-financial-remarks')" onchange="updateChart('mc')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-aug-financial-actual" oninput="checkDate('mc-aug-financial-target', 'mc-aug-financial-actual', 'mc-aug-financial-remarks')" onchange="updateChart('mc')"></td>
                    <td>
                        <div id="mc-aug-financial-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-sep-financial-target" oninput="checkDate('mc-sep-financial-target', 'mc-sep-financial-actual', 'mc-sep-financial-remarks')" onchange="updateChart('mc')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-sep-financial-actual" oninput="checkDate('mc-sep-financial-target', 'mc-sep-financial-actual', 'mc-sep-financial-remarks')" onchange="updateChart('mc')"></td>
                    <td>
                        <div id="mc-sep-financial-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-oct-financial-target" oninput="checkDate('mc-oct-financial-target', 'mc-oct-financial-actual', 'mc-oct-financial-remarks')" onchange="updateChart('mc')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-oct-financial-actual" oninput="checkDate('mc-oct-financial-target', 'mc-oct-financial-actual', 'mc-oct-financial-remarks')" onchange="updateChart('mc')"></td>
                    <td>
                        <div id="mc-oct-financial-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-nov-financial-target" oninput="checkDate('mc-nov-financial-target', 'mc-nov-financial-actual', 'mc-nov-financial-remarks')" onchange="updateChart('mc')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-nov-financial-actual" oninput="checkDate('mc-nov-financial-target', 'mc-nov-financial-actual', 'mc-nov-financial-remarks')" onchange="updateChart('mc')"></td>
                    <td>
                        <div id="mc-nov-financial-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-dec-financial-target" oninput="checkDate('mc-dec-financial-target', 'mc-dec-financial-actual', 'mc-dec-financial-remarks')" onchange="updateChart('mc')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-dec-financial-actual" oninput="checkDate('mc-dec-financial-target', 'mc-dec-financial-actual', 'mc-dec-financial-remarks')" onchange="updateChart('mc')"></td>
                    <td>
                        <div id="mc-dec-financial-remarks" style="text-align: center;"></div>
                    </td>
                </tr>
                <tr>
                    <td>Updated GEO-MS</td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-jan-geo-target" oninput="checkDate('mc-jan-geo-target', 'mc-jan-geo-actual', 'mc-jan-geo-remarks')" onchange="updateChart('mc')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-jan-geo-actual" oninput="checkDate('mc-jan-geo-target', 'mc-jan-geo-actual', 'mc-jan-geo-remarks')" onchange="updateChart('mc')"></td>
                    <td>
                        <div id="mc-jan-geo-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-feb-geo-target" oninput="checkDate('mc-feb-geo-target', 'mc-feb-geo-actual', 'mc-feb-geo-remarks')" onchange="updateChart('mc')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-feb-geo-actual" oninput="checkDate('mc-feb-geo-target', 'mc-feb-geo-actual', 'mc-feb-geo-remarks')" onchange="updateChart('mc')"></td>
                    <td>
                        <div id="mc-feb-geo-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-mar-geo-target" oninput="checkDate('mc-mar-geo-target', 'mc-mar-geo-actual', 'mc-mar-geo-remarks')" onchange="updateChart('mc')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-mar-geo-actual" oninput="checkDate('mc-mar-geo-target', 'mc-mar-geo-actual', 'mc-mar-geo-remarks')" onchange="updateChart('mc')"></td>
                    <td>
                        <div id="mc-mar-geo-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-apr-geo-target" oninput="checkDate('mc-apr-geo-target', 'mc-apr-geo-actual', 'mc-mar-geo-remarks')" onchange="updateChart('mc')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-apr-geo-actual" oninput="checkDate('mc-apr-geo-target', 'mc-apr-geo-actual', 'mc-apr-geo-remarks')" onchange="updateChart('mc')"></td>
                    <td>
                        <div id="mc-apr-geo-remarks" style="text-align: center;"></div>
                    </td>


                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-may-geo-target" oninput="checkDate('mc-may-geo-target', 'mc-may-geo-actual', 'mc-may-geo-remarks')" onchange="updateChart('mc')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-may-geo-actual" oninput="checkDate('mc-may-geo-target', 'mc-may-geo-actual', 'mc-may-geo-remarks')" onchange="updateChart('mc')"></td>
                    <td>
                        <div id="mc-may-geo-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-jun-geo-target" oninput="checkDate('mc-jun-geo-target', 'mc-jun-geo-actual', 'mc-jun-geo-remarks')" onchange="updateChart('mc')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-jun-geo-actual" oninput="checkDate('mc-jun-geo-target', 'mc-jun-geo-actual', 'mc-jun-geo-remarks')" onchange="updateChart('mc')"></td>
                    <td>
                        <div id="mc-jun-geo-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-jul-geo-target" oninput="checkDate('mc-jul-geo-target', 'mc-jul-geo-actual', 'mc-jul-geo-remarks')" onchange="updateChart('mc')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-jul-geo-actual" oninput="checkDate('mc-jul-geo-target', 'mc-jul-geo-actual', 'mc-jul-geo-remarks')" onchange="updateChart('mc')"></td>
                    <td>
                        <div id="mc-jul-geo-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-aug-geo-target" oninput="checkDate('mc-aug-geo-target', 'mc-aug-geo-actual', 'mc-aug-geo-remarks')" onchange="updateChart('mc')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-aug-geo-actual" oninput="checkDate('mc-aug-geo-target', 'mc-aug-geo-actual', 'mc-aug-geo-remarks')" onchange="updateChart('mc')"></td>
                    <td>
                        <div id="mc-aug-geo-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-sep-geo-target" oninput="checkDate('mc-sep-geo-target', 'mc-sep-geo-actual', 'mc-sep-geo-remarks')" onchange="updateChart('mc')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-sep-geo-actual" oninput="checkDate('mc-sep-geo-target', 'mc-sep-geo-actual', 'mc-sep-geo-remarks')" onchange="updateChart('mc')"></td>
                    <td>
                        <div id="mc-sep-geo-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-oct-geo-target" oninput="checkDate('mc-oct-geo-target', 'mc-oct-geo-actual', 'mc-oct-geo-remarks')" onchange="updateChart('mc')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-oct-geo-actual" oninput="checkDate('mc-oct-geo-target', 'mc-oct-geo-actual', 'mc-oct-geo-remarks')" onchange="updateChart('mc')"></td>
                    <td>
                        <div id="mc-oct-geo-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-nov-geo-target" oninput="checkDate('mc-nov-geo-target', 'mc-nov-geo-actual', 'mc-nov-geo-remarks')" onchange="updateChart('mc')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-nov-geo-actual" oninput="checkDate('mc-nov-geo-target', 'mc-nov-geo-actual', 'mc-nov-geo-remarks')" onchange="updateChart('mc')"></td>
                    <td>
                        <div id="mc-nov-geo-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-dec-geo-target" oninput="checkDate('mc-dec-geo-target', 'mc-dec-geo-actual', 'mc-dec-geo-remarks')" onchange="updateChart('mc')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-dec-geo-actual" oninput="checkDate('mc-dec-geo-target', 'mc-dec-geo-actual', 'mc-dec-geo-remarks')" onchange="updateChart('mc')"></td>
                    <td>
                        <div id="mc-dec-geo-remarks" style="text-align: center;"></div>
                    </td>
                </tr>
                <tr>
                    <td>Observation Report and Re-interview </td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-jan-observation-target" oninput="checkDate('mc-jan-geo-target', 'mc-jan-geo-actual', 'mc-jan-geo-remarks')" onchange="updateChart('mc')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-jan-observation-actual" oninput="checkDate('mc-jan-geo-target', 'mc-jan-geo-actual', 'mc-jan-geo-remarks')" onchange="updateChart('mc')"></td>
                    <td>
                        <div id="mc-jan-geo-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-feb-observation-target" oninput="checkDate('mc-feb-observation-target', 'mc-feb-observation-actual', 'mc-feb-observation-remarks')" onchange="updateChart('mc')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-feb-observation-actual" oninput="checkDate('mc-feb-observation-target', 'mc-feb-observation-actual', 'mc-feb-observation-remarks')" onchange="updateChart('mc')"></td>
                    <td>
                        <div id="mc-feb-observation-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-mar-geo-target" oninput="checkDate('mc-mar-observation-target', 'mc-mar-observation-actual', 'mc-mar-observation-remarks')" onchange="updateChart('mc')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-mar-geo-actual" oninput="checkDate('mc-mar-observation-target', 'mc-mar-observation-actual', 'mc-mar-observation-remarks')" onchange="updateChart('mc')"></td>
                    <td>
                        <div id="mc-mar-observation-remarks" style="text-align: center;"></div>
                    </td>


                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-apr-observation-target" oninput="checkDate('mc-apr-observation-target', 'mc-apr-observation-actual', 'mc-apr-observation-remarks')" onchange="updateChart('mc')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-apr-observation-actual" oninput="checkDate('mc-apr-observation-target', 'mc-apr-observation-actual', 'mc-apr-observation-remarks')" onchange="updateChart('mc')"></td>
                    <td>
                        <div id="mc-apr-observation-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-may-observation-target" oninput="checkDate('mc-may-observation-target', 'mc-may-observation-actual', 'mc-may-observation-remarks')" onchange="updateChart('mc')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-may-observation-actual" oninput="checkDate('mc-may-observation-target', 'mc-may-observation-actual', 'mc-may-observation-remarks')" onchange="updateChart('mc')"></td>
                    <td>
                        <div id="mc-may-observation-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-jun-observation-target" oninput="checkDate('mc-jun-observation-target', 'mc-jun-observation-actual', 'mc-jun-observation-remarks')" onchange="updateChart('mc')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-jun-observation-actual" oninput="checkDate('mc-jun-observation-target', 'mc-jun-observation-actual', 'mc-jun-observation-remarks')" onchange="updateChart('mc')"></td>
                    <td>
                        <div id="mc-jun-observation-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-jul-observation-target" oninput="checkDate('mc-jul-observation-target', 'mc-jul-observation-actual', 'mc-jul-observation-remarks')" onchange="updateChart('mc')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-jul-observation-actual" oninput="checkDate('mc-jul-observation-target', 'mc-jul-observation-actual', 'mc-jul-observation-remarks')" onchange="updateChart('mc')"></td>
                    <td>
                        <div id="mc-jul-observation-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-aug-observation-target" oninput="checkDate('mc-aug-observation-target', 'mc-aug-observation-actual', 'mc-aug-observation-remarks')" onchange="updateChart('mc')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-aug-observation-actual" oninput="checkDate('mc-aug-observation-target', 'mc-aug-observation-actual', 'mc-aug-observation-remarks')" onchange="updateChart('mc')"></td>
                    <td>
                        <div id="mc-aug-observation-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-sep-observation-target" oninput="checkDate('mc-sep-observation-target', 'mc-sep-observation-actual', 'mc-sep-observation-remarks')" onchange="updateChart('mc')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-sep-observation-actual" oninput="checkDate('mc-sep-observation-target', 'mc-sep-observation-actual', 'mc-sep-observation-remarks')" onchange="updateChart('mc')"></td>
                    <td>
                        <div id="mc-sep-observation-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-oct-observation-target" oninput="checkDate('mc-oct-observation-target', 'mc-oct-observation-actual', 'mc-oct-observation-remarks')" onchange="updateChart('mc')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-oct-observation-actual" oninput="checkDate('mc-oct-observation-target', 'mc-oct-observation-actual', 'mc-oct-observation-remarks')" onchange="updateChart('mc')"></td>
                    <td>
                        <div id="mc-oct-observation-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-nov-observation-target" oninput="checkDate('mc-nov-observation-target', 'mc-nov-observation-actual', 'mc-dec-observation-remarks')" onchange="updateChart('mc')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-nov-observation-actual" oninput="checkDate('mc-nov-observation-target', 'mc-nov-observation-actual', 'mc-dec-observation-remarks')" onchange="updateChart('mc')"></td>
                    <td>
                        <div id="mc-nov-observation-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-dec-observation-target" oninput="checkDate('mc-dec-observation-target', 'mc-dec-observation-actual', 'mc-dec-observation-remarks')" onchange="updateChart('mc')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="mc-dec-observation-actual" oninput="checkDate('mc-dec-observation-target', 'mc-dec-observation-actual', 'mc-dec-observation-remarks')" onchange="updateChart('mc')"></td>
                    <td>
                        <div id="mc-dec-observation-remarks" style="text-align: center;"></div>
                    </td>
                </tr>
                <script>
                    // Load data from localStorage on page load
                    window.onload = function() {
                        loadData('mc-jan-res-target', 'mc-jan-res-actual', 'mc-jan-res-remarks');
                        loadData('mc-feb-res-target', 'mc-feb-res-actual', 'mc-feb-res-remarks');
                        loadData('mc-mar-res-target', 'mc-mar-res-actual', 'mc-mar-res-remarks');
                        loadData('mc-apr-res-target', 'mc-apr-res-actual', 'mc-apr-res-remarks');
                        loadData('mc-may-res-target', 'mc-may-res-actual', 'mc-may-res-remarks');
                        loadData('mc-jun-res-target', 'mc-jun-res-actual', 'mc-jun-res-remarks');
                        loadData('mc-jul-res-target', 'mc-jul-res-actual', 'mc-jul-res-remarks');
                        loadData('mc-aug-res-target', 'mc-aug-res-actual', 'mc-aug-res-remarks');
                        loadData('mc-sep-res-target', 'mc-sep-res-actual', 'mc-sep-res-remarks');
                        loadData('mc-oct-res-target', 'mc-oct-res-actual', 'mc-oct-res-remarks');
                        loadData('mc-nov-res-target', 'mc-nov-res-actual', 'mc-nov-res-remarks');
                        loadData('mc-dec-res-target', 'mc-dec-res-actual', 'mc-dec-res-remarks');

                        loadData('mc-jan-raw-target', 'mc-jan-raw-actual', 'mc-jan-raw-remarks');
                        loadData('mc-feb-raw-target', 'mc-feb-raw-actual', 'mc-feb-raw-remarks');
                        loadData('mc-mar-raw-target', 'mc-mar-raw-actual', 'mc-mar-raw-remarks');
                        loadData('mc-apr-raw-target', 'mc-apr-raw-actual', 'mc-apr-raw-remarks');
                        loadData('mc-may-raw-target', 'mc-may-raw-actual', 'mc-may-raw-remarks');
                        loadData('mc-jun-raw-target', 'mc-jun-raw-actual', 'mc-jun-raw-remarks');
                        loadData('mc-jul-raw-target', 'mc-jul-raw-actual', 'mc-jul-raw-remarks');
                        loadData('mc-aug-raw-target', 'mc-aug-raw-actual', 'mc-aug-raw-remarks');
                        loadData('mc-sep-raw-target', 'mc-sep-raw-actual', 'mc-sep-raw-remarks');
                        loadData('mc-oct-raw-target', 'mc-oct-raw-actual', 'mc-oct-raw-remarks');
                        loadData('mc-nov-raw-target', 'mc-nov-raw-actual', 'mc-nov-raw-remarks');
                        loadData('mc-dec-raw-target', 'mc-dec-raw-actual', 'mc-dec-raw-remarks');
                        // loadData('mc-dec-raw-target', 'mc-dec-raw-actual', 'mc-dec-raw-remarks');


                        loadData('mc-jan-clean-target', 'mc-jan-clean-actual', 'mc-jan-clean-remarks');
                        loadData('mc-feb-clean-target', 'mc-feb-clean-actual', 'mc-feb-clean-remarks');
                        loadData('mc-mar-clean-target', 'mc-mar-clean-actual', 'mc-mar-clean-remarks');
                        loadData('mc-apr-clean-target', 'mc-apr-clean-actual', 'mc-apr-clean-remarks');
                        loadData('mc-may-clean-target', 'mc-may-clean-actual', 'mc-may-clean-remarks');
                        loadData('mc-jun-clean-target', 'mc-jun-clean-actual', 'mc-jun-clean-remarks');
                        loadData('mc-jul-clean-target', 'mc-jul-clean-actual', 'mc-jul-clean-remarks');
                        loadData('mc-aug-clean-target', 'mc-aug-clean-actual', 'mc-aug-clean-remarks');
                        loadData('mc-sep-clean-target', 'mc-sep-clean-actual', 'mc-sep-clean-remarks');
                        loadData('mc-oct-clean-target', 'mc-oct-clean-actual', 'mc-oct-clean-remarks');
                        loadData('mc-nov-clean-target', 'mc-nov-clean-actual', 'mc-nov-clean-remarks');
                        loadData('mc-dec-clean-target', 'mc-dec-clean-actual', 'mc-dec-clean-remarks');



                        loadData('mc-jan-narrative-target', 'mc-jan-narrative-actual', 'mc-jan-narrative-remarks');
                        loadData('mc-feb-narrative-target', 'mc-feb-narrative-actual', 'mc-feb-narrative-remarks');
                        loadData('mc-mar-narrative-target', 'mc-mar-narrative-actual', 'mc-mar-narrative-remarks');
                        loadData('mc-apr-narrative-target', 'mc-apr-narrative-actual', 'mc-apr-narrative-remarks');
                        loadData('mc-may-narrative-target', 'mc-may-narrative-actual', 'mc-may-narrative-remarks');
                        loadData('mc-jun-narrative-target', 'mc-jun-narrative-actual', 'mc-jun-narrative-remarks');
                        loadData('mc-jul-narrative-target', 'mc-jul-narrative-actual', 'mc-jul-narrative-remarks');
                        loadData('mc-aug-narrative-target', 'mc-aug-narrative-actual', 'mc-aug-narrative-remarks');
                        loadData('mc-sep-narrative-target', 'mc-sep-narrative-actual', 'mc-sep-narrative-remarks');
                        loadData('mc-oct-narrative-target', 'mc-oct-narrative-actual', 'mc-oct-narrative-remarks');
                        loadData('mc-nov-narrative-target', 'mc-nov-narrative-actual', 'mc-nov-narrative-remarks');
                        loadData('mc-dec-narrative-target', 'mc-dec-narrative-actual', 'mc-dec-narrative-remarks');



                        loadData('mc-jan-financial-target', 'mc-jan-financial-actual', 'mc-jan-financial-remarks');
                        loadData('mc-feb-financial-target', 'mc-feb-financial-actual', 'mc-feb-financial-remarks');
                        loadData('mc-mar-financial-target', 'mc-mar-financial-actual', 'mc-mar-financial-remarks');
                        loadData('mc-apr-financial-target', 'mc-apr-financial-actual', 'mc-apr-financial-remarks');
                        loadData('mc-may-financial-target', 'mc-may-financial-actual', 'mc-may-financial-remarks');
                        loadData('mc-jun-financial-target', 'mc-jun-financial-actual', 'mc-jun-financial-remarks');
                        loadData('mc-jul-financial-target', 'mc-jul-financial-actual', 'mc-jul-financial-remarks');
                        loadData('mc-aug-financial-target', 'mc-aug-financial-actual', 'mc-aug-financial-remarks');
                        loadData('mc-sep-financial-target', 'mc-sep-financial-actual', 'mc-sep-financial-remarks');
                        loadData('mc-oct-financial-target', 'mc-oct-financial-actual', 'mc-oct-financial-remarks');
                        loadData('mc-nov-financial-target', 'mc-nov-financial-actual', 'mc-nov-financial-remarks');
                        loadData('mc-dec-financial-target', 'mc-dec-financial-actual', 'mc-dec-financial-remarks');

                        loadData('mc-jan-geo-target', 'mc-jan-geo-actual', 'mc-jan-geo-remarks');
                        loadData('mc-feb-geo-target', 'mc-feb-geo-actual', 'mc-feb-geo-remarks');
                        loadData('mc-mar-geo-target', 'mc-mar-geo-actual', 'mc-mar-geo-remarks');
                        loadData('mc-apr-geo-target', 'mc-apr-geo-actual', 'mc-apr-geo-remarks');
                        loadData('mc-may-geo-target', 'mc-may-geo-actual', 'mc-may-geo-remarks');
                        loadData('mc-jun-geo-target', 'mc-jun-geo-actual', 'mc-jun-geo-remarks');
                        loadData('mc-jul-geo-target', 'mc-jul-geo-actual', 'mc-jul-geo-remarks');
                        loadData('mc-aug-geo-target', 'mc-aug-geo-actual', 'mc-aug-geo-remarks');
                        loadData('mc-sep-geo-target', 'mc-sep-geo-actual', 'mc-sep-geo-remarks');
                        loadData('mc-oct-geo-target', 'mc-oct-geo-actual', 'mc-oct-geo-remarks');
                        loadData('mc-nov-geo-target', 'mc-nov-geo-actual', 'mc-nov-geo-remarks');
                        loadData('mc-dec-geo-target', 'mc-dec-geo-actual', 'mc-dec-geo-remarks');


                        loadData('mc-jan-observation-target', 'mc-jan-observation-actual', 'mc-jan-observation-remarks');
                        loadData('mc-feb-observation-target', 'mc-feb-observation-actual', 'mc-feb-observation-remarks');
                        loadData('mc-mar-observation-target', 'mc-feb-observation-actual', 'mc-mar-observation-remarks');
                        loadData('mc-apr-observation-target', 'mc-apr-observation-actual', 'mc-apr-observation-remarks');
                        loadData('mc-may-observation-target', 'mc-may-observation-actual', 'mc-may-observation-remarks');
                        loadData('mc-jun-observation-target', 'mc-jun-observation-actual', 'mc-jun-observation-remarks');
                        loadData('mc-jul-observation-target', 'mc-jul-observation-actual', 'mc-jul-observation-remarks');
                        loadData('mc-aug-observation-target', 'mc-aug-observation-actual', 'mc-aug-observation-remarks');
                        loadData('mc-sep-observation-target', 'mc-sep-observation-actual', 'mc-sep-observation-remarks');
                        loadData('mc-oct-observation-target', 'mc-oct-observation-actual', 'mc-oct-observation-remarks');
                        loadData('mc-nov-observation-target', 'mc-nov-observation-actual', 'mc-nov-observation-remarks');
                        loadData('mc-dec-observation-target', 'mc-dec-observation-actual', 'mc-dec-observation-remarks');
                    };

                    function checkValues(targetId, actualId, remarksId) {
                        const targetValue = parseFloat(document.getElementById(targetId).value);
                        const actualValue = parseFloat(document.getElementById(actualId).value);
                        const remarksField = document.getElementById(remarksId);

                        if (!isNaN(targetValue) && !isNaN(actualValue)) {
                            const gap = ((targetValue - actualValue) / targetValue) * 100; // Percentage difference

                            if (actualValue > targetValue) {
                                // Actual value is greater than the target (show star)
                                remarksField.innerHTML = '<img src="images for dashboard/images/above target percentage.gif" alt="Star Face" class="image-size"/>';
                                saveData(remarksId, remarksField.innerHTML);
                            } else if (actualValue === targetValue) {
                                // Actual value is equal to the target (show happy face)
                                remarksField.innerHTML = '<img src="images for dashboard/images/same percentage to the target column.gif" alt="Happy Face" class="image-size"/>';
                                saveData(remarksId, remarksField.innerHTML);

                            } else if (gap >= 1 && gap < 2) {
                                // Actual value is 1% below the target (show sad face)
                                remarksField.innerHTML = '<img src="images for dashboard/images/2%gap below in target percentage.gif" alt="Sad Face" class="image-size"/>';
                                saveData(remarksId, remarksField.innerHTML);

                            } else if (gap >= 2 && gap < 3) {
                                // Actual value is 2% below the target (show sad face)
                                remarksField.innerHTML = '<img src="images for dashboard/images/2%gap below in target percentage.gif" alt="Sad Face" class="image-size"/>';
                                saveData(remarksId, remarksField.innerHTML);
                            } else if (gap >= 3) {
                                // Actual value is 3% or more below the target (show crying face)
                                remarksField.innerHTML = '<img src="images for dashboard/images/crying.gif" alt="Crying Face" class="image-size"/>';
                                saveData(remarksId, remarksField.innerHTML);
                            } else {
                                remarksField.innerHTML = ''; // Clear remarks
                                saveData(remarksId, ''); // Clear saved remarks in localStorage
                            }
                        } else {
                            remarksField.innerHTML = ''; // Clear remarks if values are not valid
                            saveData(remarksId, ''); // Clear saved remarks in localStorage
                        }

                        // Save the value inputs to localStorage
                        saveData(targetId, targetValue);
                        saveData(actualId, actualValue);
                    }

                    // Function to save data to localStorage
                    function saveData(id, value) {
                        localStorage.setItem(id, value);
                    }

                    // Function to load data from localStorage
                    function loadData(targetId, actualId, remarksId) {
                        const savedTargetValue = localStorage.getItem(targetId);
                        const savedActualValue = localStorage.getItem(actualId);
                        const savedRemarks = localStorage.getItem(remarksId);

                        if (savedTargetValue) document.getElementById(targetId).value = savedTargetValue;
                        if (savedActualValue) document.getElementById(actualId).value = savedActualValue;
                        if (savedRemarks) document.getElementById(remarksId).innerHTML = savedRemarks;
                    }

                    // Function to check the dates and display an image based on conditions
                    function checkDate(targetId, actualId, remarksId) {
                        const targetDate = document.getElementById(targetId).value;
                        const actualDate = document.getElementById(actualId).value;
                        const remarksField = document.getElementById(remarksId);


                        // Compare dates
                        if (targetDate && actualDate) {
                            if (new Date(actualDate) > new Date(targetDate)) {
                                // Actual date is later than the target date (show sad face)
                                remarksField.innerHTML = '<img src="images for dashboard/sadcry.gif" alt="Sad-Face" class="image-size"/>';
                                saveData(remarksId, remarksField.innerHTML); // Save innerHTML of remarks field
                            } else {
                                // Actual date is earlier than or equal to the target date (show happy face)
                                remarksField.innerHTML = '<img src="images for dashboard/hapyperson.webp" alt="Happy-Face" class="image-size"/>';
                                saveData(remarksId, remarksField.innerHTML); // Save innerHTML of remarks field
                            }
                        } else {
                            remarksField.innerHTML = ''; // Clear remarks if dates are not valid
                            saveData(remarksId, ''); // Clear saved remarks in localStorage
                        }

                        // Save the date values to localStorage
                        saveData(targetId, targetDate);
                        saveData(actualId, actualDate);
                    }

                    // Function to save data to localStorage
                    function saveData(id, value) {
                        localStorage.setItem(id, value);
                    }

                    // Function to load data from localStorage
                    function loadData(targetId, actualId, remarksId) {
                        const savedTargetDate = localStorage.getItem(targetId);
                        const savedActualDate = localStorage.getItem(actualId);
                        const savedRemarks = localStorage.getItem(remarksId);

                        if (savedTargetDate) document.getElementById(targetId).value = savedTargetDate;
                        if (savedActualDate) document.getElementById(actualId).value = savedActualDate;
                        if (savedRemarks) document.getElementById(remarksId).innerHTML = savedRemarks;
                    }
                </script>

            </tbody>
        </table>
    </div>
    <div class="chart-container">
        <canvas id="mcChart"></canvas>
    </div>

    <script>
        // Ensure Chart.js plugin registration for datalabels
        Chart.register(ChartDataLabels);

        // Function to update the chart dynamically
        function updateChart(city) {
            const months = ['jan', 'feb', 'mar', 'apr', 'may', 'jun', 'jul', 'aug', 'sep', 'oct', 'nov', 'dec'];
            const categories = ['res'];

            categories.forEach((category, index) => {
                const targetData = months.map(month => {
                    const targetElement = document.getElementById(`${city}-${month}-${category}-target`);
                    return targetElement ? parseInt(targetElement.value) || 0 : 0;
                });
                const actualData = months.map(month => {
                    const actualElement = document.getElementById(`${city}-${month}-${category}-actual`);
                    return actualElement ? parseInt(actualElement.value) || 0 : 0;
                });

                // Update the chart's dataset with the new data
                cityCharts[city].data.datasets[index * 2].data = targetData;
                cityCharts[city].data.datasets[index * 2 + 1].data = actualData;
            });

            cityCharts[city].update(); // Ensure the chart is updated
        }

        function saveToLocalStorage(city, month, category, type, value) {
            const key = `${city}-${month}-${category}-${type}`;
            localStorage.setItem(key, value);
        }

        // Load data from localStorage
        function loadFromLocalStorage(city, month, category, type) {
            const key = `${city}-${month}-${category}-${type}`;
            return localStorage.getItem(key) ? parseInt(localStorage.getItem(key)) : 0;
        }

        // Create charts for each city
        const cityCharts = {};

        function createChart(cityId, chartId) {
            const ctx = document.getElementById(chartId).getContext('2d');
            const chart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'], // Add more months as needed
                    datasets: [{
                            label: 'Response Rate Target',
                            data: [0, 0, 0], // Initialize with 0 values
                            backgroundColor: 'rgba(111, 152, 112, 0.5)',
                            borderColor: 'rgba(123, 162, 532, 1)',
                            hoverBackgroundColor: 'yellowgreen',
                            borderWidth: 1,
                        },
                        {
                            label: 'Response Rate Actual',
                            data: [0, 0, 0], // Initialize with 0 values
                            backgroundColor: 'rgba(888, 152, 235, 0.2)',
                            borderColor: 'rgba(54, 162, 235, 1)',
                            hoverBackgroundColor: 'green',
                            borderWidth: 1
                        }
                    ]
                },
                options: {
                    responsive: true,
                    plugins: {
                        title: {
                            display: true,
                            text: `Las Piñas Response Rate Performance Data`, // Dynamic title based on the city
                            font: {
                                size: 18,
                                weight: 'bold',
                                family: 'Arial'
                            },
                            padding: {
                                top: 10,
                                bottom: 20
                            }
                        },
                        legend: {
                            position: 'top',
                            labels: {
                                font: {
                                    size: 12,
                                    family: 'Arial'
                                },
                                color: '#333'
                            }
                        },
                        tooltip: {
                            callbacks: {
                                label: function(tooltipItem) {
                                    return `${tooltipItem.dataset.label}: ${tooltipItem.raw}%`;
                                }
                            }
                        },
                        // Adding datalabels plugin
                        datalabels: {
                            display: true, // Enable the data labels to always be visible
                            align: 'end', // Position at the end of each bar
                            anchor: 'end', // Anchor at the end of each bar
                            formatter: (value) => `${value}%`, // Format as percentage
                            font: {
                                size: 12,
                                weight: 'bold',
                                family: 'Arial'
                            },
                            color: '#030989', // Label color
                        }
                    },
                    scales: {
                        x: {
                            title: {
                                display: true,
                                text: 'Months',
                                font: {
                                    size: 14,
                                    family: 'Arial'
                                },
                                color: '#333'
                            },
                            ticks: {
                                color: '#666'
                            }
                        },
                        y: {
                            beginAtZero: true, // This will make sure the chart starts at 0
                            min: 0, // Minimum value for y-axis
                            max: 100, // Maximum value for y-axis
                            ticks: {
                                stepSize: 20, // This ensures the steps between ticks are consistent (optional)
                                callback: function(value) {
                                    if (value % 1 === 0) { // Show only whole numbers
                                        return value;
                                    }
                                }
                            }
                        }
                    }
                }
            });
            cityCharts[cityId] = chart;
            updateChartFromLocalStorage(cityId);
        }

        // Load data from localStorage and update the chart
        function updateChartFromLocalStorage(city) {
            const months = ['jan', 'feb', 'mar', 'apr', 'may', 'jun', 'jul', 'aug', 'sep', 'oct', 'nov', 'dec'];
            const categories = ['res'];

            categories.forEach((category, index) => {
                const targetData = months.map(month => loadFromLocalStorage(city, month, category, 'target'));
                const actualData = months.map(month => loadFromLocalStorage(city, month, category, 'actual'));

                // Update the chart's dataset with the saved data
                cityCharts[city].data.datasets[index * 2].data = targetData;
                cityCharts[city].data.datasets[index * 2 + 1].data = actualData;
            });

            cityCharts[city].update(); // Ensure the chart is updated with stored data
        }

        // Initialize charts for the city 'Las Piñas'
        createChart('mc', 'mcChart');
    </script>

</body>

</html>