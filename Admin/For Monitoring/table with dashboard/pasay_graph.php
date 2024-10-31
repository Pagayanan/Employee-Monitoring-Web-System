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
            padding: 10px 20px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .logo-container img {
            width: 60px;
            height: auto;
            transition: transform 0.3s ease-in-out;
        }

        .logo-container img:hover {
            transform: scale(1.1);
        }

        .logo-text {
            font-size: 20px;

            font-weight: bold;
            color: #333;
            text-align: center;
            letter-spacing: 1px;
        }

        @media (max-width: 768px) {
            .logo-container {
                flex-direction: column;
                gap: 10px;

            }

            .logo-container img {
                width: 50px;
            }

            s .logo-text {
                font-size: 16px;
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
        <a style="background-color: #0A414f; color:white; font-weight:bolder; padding:5px" href="Muntinlupa_graph.php" class="btn btn-primary">MUNTINLUPA CITY</a>
    </div>

    <br>

    <div>
        <a style="background-color: #0A414f; color:white; font-weight:bolder; padding:5px" href="Parañaque_graph.php" class="btn btn-primary">PARAÑAQUE CITY</a>
    </div>

    <br>

    <div>
        <a style="background-color: cadetblue; color:white; font-weight:bolder; padding:5px" href="pasay_graph.php" class="btn btn-primary">PASAY CITY</a>
    </div>
    <div>
        <a style="background-color: #0A414F; color:white; font-weight: bolder; padding:5px" href="overallstatusreport.php" class="btn btn-primary active">OVERALL WEEKLY Status Report</a>
    </div>


</div>
<!-------------------------------------------------------------------------------->
<!-------------------------------------- BY CITY BUTTON END----------------------->
<!-------------------------------------------------------------------------------->

<body>
    <h2 style="text-align:center;">PASAY CITY</h2>
    <!-- City Section for Las Piñas -->
    <div class="city-header" style="font-weight: bolder; background-color:darkgoldenrod;">LABOR FORCE SURVEY</div>
    <div>
        <a style="background-color:#0A414F; color:white; border-radius:7px; font-weight: bolder; padding:5px" href="progress.php" class="btn btn-primary active">SELECT PROJECT</a>
    </div>
    <div class="city-section" id="pasay-section">
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
                </tr>
            </thead>
            <tbody>
                <br>
                <!-- Repeat for each category -->
                <tr>
                    <td style="font-weight: bolder;">Response Rate</td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="pc-jan-res-target" oninput="checkValues('pc-jan-res-target', 'pc-jan-res-actual', 'pc-jan-res-remarks')" onchange="updateChart('pc')">
                    </td>
                    <td>
                        <input type="mumber" style="border: white; text-align:center;" id="pc-jan-res-actual" oninput="checkValues('pc-jan-res-target', 'pc-jan-res-actual', 'pc-jan-res-remarks')" onchange="updateChart('pc')">
                    </td>
                    <td>
                        <div id="pc-jan-res-remarks"></div>
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center;" id="pc-feb-res-target" oninput="checkValues('pc-feb-res-target', 'pc-feb-res-actual', 'pc-feb-res-remarks')" onchange="updateChart('pc')">
                    </td>
                    <td>
                        <input type="mumber" style="border: white; text-align:center;" id="pc-feb-res-actual" oninput="checkValues('pc-feb-res-target', 'pc-feb-res-actual', 'pc-feb-res-remarks')" onchange="updateChart('pc')">
                    </td>
                    <td>
                        <div id="pc-feb-res-remarks"></div>
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="pc-mar-res-target" oninput="checkValues('pc-mar-res-target', 'pc-mar-res-actual', 'pc-mar-res-remarks')" onchange="updateChart('pc')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="pc-mar-res-actual" oninput="checkValues('pc-mar-res-target', 'pc-mar-res-actual', 'pc-mar-res-remarks')" onchange="updateChart('pc')">
                    </td>
                    <td>
                        <div id="pc-mar-res-remarks"></div>
                    </td>





                    <td>
                        <input type="number" style="border: white; text-align:center;" id="pc-apr-res-target" oninput="checkValues('pc-apr-res-target', 'pc-apr-res-actual', 'pc-apr-res-remarks')" onchange="updateChart('pc')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="pc-apr-res-actual" oninput="checkValues('pc-apr-res-target', 'pc-apr-res-actual', 'pc-apr-res-remarks')" onchange="updateChart('pc')">
                    </td>
                    <td>
                        <div id="pc-apr-res-remarks"></div>
                    </td>



                    <td>
                        <input type="number" style="border: white; text-align:center;" id="pc-may-res-target" oninput="checkValues('pc-may-res-target', 'pc-may-res-actual', 'pc-may-res-remarks')" onchange="updateChart('pc')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="pc-may-res-actual" oninput="checkValues('pc-may-res-target', 'pc-may-res-actual', 'pc-may-res-remarks')" onchange="updateChart('pc')">
                    </td>
                    <td>
                        <div id="pc-may-res-remarks"></div>
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center;" id="pc-jun-res-target" oninput="checkValues('pc-jun-res-target', 'pc-jun-res-actual', 'pc-jun-res-remarks')" onchange="updateChart('pc')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="pc-jun-res-actual" oninput="checkValues('pc-jun-res-target', 'pc-jun-res-actual', 'pc-jun-res-remarks')" onchange="updateChart('pc')">
                    </td>
                    <td>
                        <div id="pc-jun-res-remarks"></div>
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center;" id="pc-jul-res-target" oninput="checkValues('pc-jul-res-target', 'pc-jul-res-actual', 'pc-jul-res-remarks')" onchange="updateChart('pc')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="pc-jul-res-actual" oninput="checkValues('pc-jul-res-target', 'pc-jul-res-actual', 'pc-jul-res-remarks')" onchange="updateChart('pc')">
                    </td>
                    <td>
                        <div id="pc-jul-res-remarks"></div>
                    </td>



                    <td>
                        <input type="number" style="border: white; text-align:center;" id="pc-aug-res-target" oninput="checkValues('pc-aug-res-target', 'pc-aug-res-actual', 'pc-aug-res-remarks')" onchange="updateChart('pc')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="pc-aug-res-actual" oninput="checkValues('pc-aug-res-target', 'pc-aug-res-actual', 'pc-aug-res-remarks')" onchange="updateChart('pc')">
                    </td>
                    <td>
                        <div id="pc-aug-res-remarks"></div>
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="pc-sep-res-target" oninput="checkValues('pc-sep-res-target', 'pc-sep-res-actual', 'pc-sep-res-remarks')" onchange="updateChart('pc')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="pc-sep-res-actual" oninput="checkValues('pc-sep-res-target', 'pc-sep-res-actual', 'pc-sep-res-remarks')" onchange="updateChart('pc')">
                    </td>
                    <td>
                        <div id="pc-sep-res-remarks"></div>
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="pc-oct-res-target" oninput="checkValues('pc-oct-res-target', 'pc-oct-res-actual', 'pc-oct-res-remarks')" onchange="updateChart('pc')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="pc-oct-res-actual" oninput="checkValues('pc-oct-res-target', 'pc-oct-res-actual', 'pc-oct-res-remarks')" onchange="updateChart('pc')">
                    </td>
                    <td>
                        <div id="pc-oct-res-remarks"></div>
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="pc-nov-res-target" oninput="checkValues('pc-nov-res-target', 'pc-nov-res-actual', 'pc-nov-res-remarks')" onchange="updateChart('pc')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="pc-nov-res-actual" oninput="checkValues('pc-nov-res-target', 'pc-nov-res-actual', 'pc-nov-res-remarks')" onchange="updateChart('pc')">
                    </td>
                    <td>
                        <div id="pc-nov-res-remarks"></div>
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center;" id="pc-dec-res-target" oninput="checkValues('pc-dec-res-target', 'pc-dec-res-actual', 'pc-dec-res-remarks')" onchange="updateChart('pc')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="pc-dec-res-actual" oninput="checkValues('pc-dec-res-target', 'pc-dec-res-actual', 'pc-dec-res-remarks')" onchange="updateChart('pc')">
                    </td>
                    <td>
                        <div id="pc-dec-res-remarks"></div>
                    </td>
                </tr>
                <tr>
                    <td>Raw datafile</td>
                    <td>
                        <input type="date" style="border: white; text-align:center;" id="pc-jan-raw-target" oninput="checkDate('pc-jan-raw-target', 'pc-jan-raw-actual', 'pc-jan-raw-remarks')">
                    </td>
                    <td>
                        <input type="date" style="border: white; text-align:center;" id="pc-jan-raw-actual" oninput="checkDate('pc-jan-raw-target', 'pc-jan-raw-actual', 'pc-jan-raw-remarks')">
                    </td>
                    <td>
                        <div id="pc-jan-raw-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-feb-raw-target" oninput="checkDate('pc-feb-raw-target', 'pc-feb-raw-actual', 'pc-feb-raw-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-feb-raw-actual" oninput="checkDate('pc-feb-raw-target', 'pc-feb-raw-actual','pc-feb-raw-remarks')"></td>
                    <td>
                        <div id="pc-feb-raw-remarks" style="text-align: center;"></div>
                    </td>


                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-mar-raw-target" oninput="checkDate('pc-mar-raw-target', 'pc-mar-raw-actual', 'pc-mar-raw-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-mar-raw-actual" oninput="checkDate('pc-mar-raw-target', 'pc-mar-raw-actual', 'pc-mar-raw-remarks')"></td>
                    <td>
                        <div id="pc-mar-raw-remarks" style="text-align: center;"></div>
                    </td>



                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-apr-raw-target" oninput="checkDate('pc-apr-raw-target', 'pc-apr-raw-actual', 'pc-apr-raw-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-apr-raw-actual" oninput="checkDate('pc-apr-raw-target', 'pc-apr-raw-actual', 'pc-apr-raw-remarks')"></td>
                    <td>
                        <div id="pc-apr-raw-remarks" style="text-align: center;"></div>
                    </td>


                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-may-raw-target" oninput="checkDate('pc-may-raw-target', 'pc-may-raw-actual', 'pc-may-raw-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-may-raw-actual" oninput="checkDate('pc-may-raw-target', 'pc-may-raw-actual', 'pc-may-raw-remarks')"></td>
                    <td>
                        <div id="pc-may-raw-remarks" style="text-align: center;"></div>
                    </td>



                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-jun-raw-target" oninput="checkDate('pc-jun-raw-target', 'pc-jun-raw-actual', 'pc-jun-raw-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-jun-raw-actual" oninput="checkDate('pc-jun-raw-target', 'pc-jun-raw-actual', 'pc-jun-raw-remarks')"></td>
                    <td>
                        <div id="pc-jun-raw-remarks" style="text-align: center;"></div>
                    </td>



                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-jul-raw-target" oninput="checkDate('pc-jul-raw-target', 'pc-jul-raw-actual', 'pc-jul-raw-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-jul-raw-actual" oninput="checkDate('pc-jul-raw-target', 'pc-jul-raw-actual', 'pc-jul-raw-remarks')"></td>
                    <td>
                        <div id="pc-jul-raw-remarks" style="text-align: center;"></div>
                    </td>



                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-aug-raw-target" oninput="checkDate('pc-aug-raw-target', 'pc-aug-raw-actual', 'pc-aug-raw-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-aug-raw-actual" oninput="checkDate('pc-aug-raw-target', 'pc-aug-raw-actual', 'pc-aug-raw-remarks')"></td>
                    <td>
                        <div id="pc-aug-raw-remarks" style="text-align: center;"></div>
                    </td>


                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-sep-raw-target" oninput="checkDate('pc-sep-raw-target', 'pc-sep-raw-actual', 'pc-sep-raw-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-sep-raw-actual" oninput="checkDate('pc-sep-raw-target', 'pc-sep-raw-actual', 'pc-sep-raw-remarks')"></td>
                    <td>
                        <div id="pc-sep-raw-remarks" style="text-align: center;"></div>
                    </td>


                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-oct-raw-target" oninput="checkDate('pc-oct-raw-target', 'pc-oct-raw-actual', 'pc-oct-raw-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-oct-raw-actual" oninput="checkDate('pc-oct-raw-target', 'pc-oct-raw-actual', 'pc-oct-raw-remarks')"></td>
                    <td>
                        <div id="pc-oct-raw-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-nov-raw-target" oninput="checkDate('pc-nov-raw-target', 'pc-nov-raw-actual', 'pc-nov-raw-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-nov-raw-actual" oninput="checkDate('pc-nov-raw-target', 'pc-nov-raw-actual', 'pc-nov-raw-remarks')"></td>
                    <td>
                        <div id="pc-nov-raw-remarks" style="text-align: center;"></div>
                    </td>


                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-dec-raw-target" oninput="checkDate('pc-dec-raw-target', 'pc-dec-raw-actual', 'pc-dec-raw-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-dec-raw-actual" oninput="checkDate('pc-dec-raw-target', 'pc-dec-raw-actual', 'pc-dec-raw-remarks')"></td>
                    <td>
                        <div id="pc-dec-raw-remarks" style="text-align: center;"></div>
                    </td>

                </tr>
                <tr>
                    <td>Clean datafile</td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-jan-clean-target" oninput="checkDate('pc-jan-clean-target', 'pc-jan-clean-actual', 'pc-jan-clean-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-jan-clean-actual" oninput="checkDate('pc-jan-clean-target', 'pc-jan-clean-actual', 'pc-jan-clean-remarks')"></td>
                    <td>
                        <div id="pc-jan-clean-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-feb-clean-target" oninput="checkDate('pc-feb-clean-target', 'pc-feb-clean-actual', 'pc-feb-clean-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-feb-clean-actual" oninput="checkDate('pc-feb-clean-target', 'pc-feb-clean-actual', 'pc-feb-clean-remarks')"></td>
                    <td>
                        <div id="pc-feb-clean-remarks" style="text-align: center;"></div>
                    </td>


                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-mar-clean-target" oninput="checkDate('pc-mar-clean-target', 'pc-mar-clean-actual', 'pc-mar-clean-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-mar-clean-actual" oninput="checkDate('pc-mar-clean-target', 'pc-mar-clean-actual', 'pc-mar-clean-remarks')"></td>
                    <td>
                        <div id="pc-mar-clean-remarks" style="text-align: center;"></div>
                    </td>



                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-apr-clean-target" oninput="checkDate('pc-apr-clean-target', 'pc-apr-clean-actual', 'pc-apr-clean-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-apr-clean-actual" oninput="checkDate('pc-apr-clean-target', 'pc-apr-clean-actual', 'pc-apr-clean-remarks')"></td>
                    <td>
                        <div id="pc-apr-clean-remarks" style="text-align: center;"></div>
                    </td>


                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-may-clean-target" oninput="checkDate('pc-may-clean-target', 'pc-may-clean-actual', 'pc-may-clean-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-may-clean-actual" oninput="checkDate('pc-may-clean-target', 'pc-may-clean-actual', 'pc-may-clean-remarks')"></td>
                    <td>
                        <div id="pc-may-clean-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-jun-clean-target" oninput="checkDate('pc-jun-clean-target', 'pc-jun-clean-actual', 'pc-jun-clean-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-jun-clean-actual" oninput="checkDate('pc-jun-clean-target', 'pc-jun-clean-actual', 'pc-jun-clean-remarks')"></td>
                    <td>
                        <div id="pc-jun-clean-remarks" style="text-align: center;"></div>
                    </td>


                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-jul-clean-target" oninput="checkDate('pc-jul-clean-target', 'pc-jul-clean-actual', 'pc-jul-clean-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-jul-clean-actual" oninput="checkDate('pc-jul-clean-target', 'pc-jul-clean-actual', 'pc-jul-clean-remarks')"></td>
                    <td>
                        <div id="pc-jul-clean-remarks" style="text-align: center;"></div>
                    </td>



                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-aug-clean-target" oninput="checkDate('pc-aug-clean-target', 'pc-aug-clean-actual', 'pc-aug-clean-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-aug-clean-actual" oninput="checkDate('pc-aug-clean-target', 'pc-aug-clean-actual', 'pc-aug-clean-remarks')"></td>
                    <td>
                        <div id="pc-aug-clean-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-sep-clean-target" oninput="checkDate('pc-sep-clean-target', 'pc-sep-clean-actual', 'pc-sep-clean-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-sep-clean-actual" oninput="checkDate('pc-sep-clean-target', 'pc-sep-clean-actual', 'pc-sep-clean-remarks')"></td>
                    <td>
                        <div id="pc-sep-clean-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-oct-clean-target" oninput="checkDate('pc-oct-clean-target', 'pc-oct-clean-actual', 'pc-oct-clean-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-oct-clean-actual" oninput="checkDate('pc-oct-clean-target', 'pc-oct-clean-actual', 'pc-oct-clean-remarks')"></td>
                    <td>
                        <div id="pc-oct-clean-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-nov-clean-target" oninput="checkDate('pc-nov-clean-target', 'pc-nov-clean-actual', 'pc-nov-clean-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-nov-clean-actual" oninput="checkDate('pc-nov-clean-target', 'pc-nov-clean-actual', 'pc-nov-clean-remarks')"></td>
                    <td>
                        <div id="pc-nov-clean-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-dec-clean-target" oninput="checkDate('pc-dec-clean-target', 'pc-dec-clean-actual', 'pc-dec-clean-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-dec-clean-actual" oninput="checkDate('pc-dec-clean-target', 'pc-dec-clean-actual', 'pc-dec-clean-remarks')"></td>
                    <td>
                        <div id="pc-dec-clean-remarks" style="text-align: center;"></div>
                    </td>
                </tr>
                <tr>
                    <td>Narrative Report</td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-jan-narrative-target" oninput="checkDate('pc-jan-narrative-target', 'pc-jan-narrative-actual', 'pc-jan-narrative-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-jan-narrative-actual" oninput="checkDate('pc-jan-narrative-target', 'pc-jan-narrative-actual', 'pc-jan-narrative-remarks')"></td>
                    <td>
                        <div id="pc-jan-narrative-remarks" style="text-align: center;"></div>
                    </td>





                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-feb-narrative-target" oninput="checkDate('pc-feb-narrative-target','pc-feb-narrative-actual', 'pc-feb-narrative-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-feb-narrative-actual" oninput="checkDate('pc-feb-narrative-target','pc-feb-narrative-actual', 'pc-feb-narrative-remarks')"></td>
                    <td>
                        <div id="pc-feb-narrative-remarks" style="text-align: center;"></div>
                    </td>




                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-mar-narrative-target" oninput="checkDate('pc-mar-narrative-target','pc-mar-narrative-actual', 'pc-mar-narrative-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-mar-narrative-actual" oninput="checkDate('pc-mar-narrative-target','pc-mar-narrative-actual', 'pc-mar-narrative-remarks')"></td>
                    <td>
                        <div id="pc-mar-narrative-remarks" style="text-align: center;"></div>
                    </td>



                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-apr-narrative-target" oninput="checkDate('pc-apr-narrative-target','pc-apr-narrative-actual', 'pc-apr-narrative-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-apr-narrative-actual" oninput="checkDate('pc-apr-narrative-target','pc-apr-narrative-actual', 'pc-apr-narrative-remarks')"></td>
                    <td>
                        <div id="pc-apr-narrative-remarks" style="text-align: center;"></div>
                    </td>


                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-may-narrative-target" oninput="checkDate('pc-may-narrative-target','pc-may-narrative-actual', 'pc-may-narrative-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-may-narrative-actual" oninput="checkDate('pc-may-narrative-target','pc-may-narrative-actual', 'pc-may-narrative-remarks')"></td>
                    <td>
                        <div id="pc-may-narrative-remarks" style="text-align: center;"></div>
                    </td>


                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-jun-narrative-target" oninput="checkDate('pc-jun-narrative-target','pc-jun-narrative-actual', 'pc-jun-narrative-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-jun-narrative-actual" oninput="checkDate('pc-jun-narrative-target','pc-jun-narrative-actual', 'pc-jun-narrative-remarks')"></td>

                    <td>
                        <div id="pc-jun-narrative-remarks" style="text-align: center;"></div>
                    </td>



                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-jul-narrative-target" oninput="checkDate('pc-jul-narrative-target','pc-jul-narrative-actual', 'pc-jul-narrative-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-jul-narrative-actual" oninput="checkDate('pc-jul-narrative-target','pc-jul-narrative-actual', 'pc-jul-narrative-remarks')"></td>
                    <td>
                        <div id="pc-jul-narrative-remarks" style="text-align: center;"></div>
                    </td>


                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-aug-narrative-target" oninput="checkDate('pc-aug-narrative-target','pc-aug-narrative-actual', 'pc-aug-narrative-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-aug-narrative-actual" oninput="checkDate('pc-aug-narrative-target','pc-aug-narrative-actual', 'pc-aug-narrative-remarks')"></td>
                    <td>
                        <div id="pc-aug-narrative-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-sep-narrative-target" oninput="checkDate('pc-sep-narrative-target','pc-sep-narrative-actual', 'pc-sep-narrative-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-sep-narrative-actual" oninput="checkDate('pc-sep-narrative-target','pc-sep-narrative-actual', 'pc-sep-narrative-remarks')"></td>
                    <td>
                        <div id="pc-sep-narrative-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-oct-narrative-target" oninput="checkDate('pc-oct-narrative-target', 'pc-oct-narrative-actual', 'pc-oct-narrative-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-oct-narrative-actual" oninput="checkDate('pc-oct-narrative-target', 'pc-oct-narrative-actual', 'pc-oct-narrative-remarks')"></td>
                    <td>
                        <div id="pc-oct-narrative-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-nov-narrative-target" oninput="checkDate('pc-nov-narrative-target', 'pc-nov-narrative-actual', 'pc-nov-narrative-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-nov-narrative-actual" oninput="checkDate('pc-nov-narrative-target', 'pc-nov-narrative-actual', 'pc-nov-narrative-remarks')"></td>
                    <td>
                        <div id="pc-nov-narrative-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-dec-narrative-target" oninput="checkDate('pc-dec-narrative-target', 'pc-dec-narrative-actual', 'pc-dec-narrative-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-dec-narrative-actual" oninput="checkDate('pc-dec-narrative-target', 'pc-dec-narrative-actual', 'pc-dec-narrative-remarks')"></td>
                    <td>
                        <div id="pc-dec-narrative-remarks" style="text-align: center;"></div>
                    </td>
                </tr>
                <tr>
                    <td>Financial Report</td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-jan-financial-target" oninput="checkDate('pc-jan-financial-target','pc-jan-financial-actual', 'pc-jan-financial-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-jan-financial-actual" oninput="checkDate('pc-jan-financial-target','pc-jan-financial-actual', 'pc-jan-financial-remarks')"></td>
                    <td>
                        <div id="pc-jan-financial-remarks" style="text-align: center;"></div>
                    </td>



                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-feb-financial-target" oninput="checkDate('pc-feb-financial-target','pc-feb-financial-actual', 'pc-feb-financial-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-feb-financial-actual" oninput="checkDate('pc-feb-financial-target','pc-feb-financial-actual', 'pc-feb-financial-remarks')"></td>
                    <td>
                        <div id="pc-feb-financial-remarks" style="text-align: center;"></div>
                    </td>


                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-mar-financial-target" oninput="checkDate('pc-mar-financial-target','pc-mar-financial-actual', 'pc-mar-financial-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-mar-financial-actual" oninput="checkDate('pc-mar-financial-target','pc-mar-financial-actual', 'pc-mar-financial-remarks')"></td>
                    <td>
                        <div id="pc-mar-financial-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-apr-financial-target" oninput="checkDate('pc-apr-financial-target','pc-apr-financial-actual', 'pc-apr-financial-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-apr-financial-actual" oninput="checkDate('pc-apr-financial-target','pc-apr-financial-actual', 'pc-apr-financial-remarks')"></td>
                    <td>
                        <div id="pc-apr-financial-remarks" style="text-align: center;"></div>
                    </td>


                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-may-financial-target" oninput="checkDate('pc-may-financial-target','pc-may-financial-actual', 'pc-may-financial-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-may-financial-actual" oninput="checkDate('pc-may-financial-target','pc-may-financial-actual', 'pc-may-financial-remarks')"></td>
                    <td>
                        <div id="pc-may-financial-remarks" style="text-align: center;"></div>
                    </td>


                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-jun-financial-target" oninput="checkDate('pc-jun-financial-target','pc-jun-financial-actual', 'pc-jun-financial-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-jun-financial-actual" oninput="checkDate('pc-jun-financial-target','pc-jun-financial-actual', 'pc-jun-financial-remarks')"></td>
                    <td>
                        <div id="pc-jun-financial-remarks" style="text-align: center;"></div>
                    </td>



                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-jul-financial-target" oninput="checkDate('pc-jul-financial-target','pc-jul-financial-actual', 'pc-jul-financial-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-jul-financial-actual" oninput="checkDate('pc-jul-financial-target','pc-jul-financial-actual', 'pc-jul-financial-remarks')"></td>
                    </td>

                    <td>
                        <div id="pc-jul-financial-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-aug-financial-target" oninput="checkDate('pc-aug-financial-target','pc-aug-financial-actual', 'pc-aug-financial-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-aug-financial-actual" oninput="checkDate('pc-aug-financial-target','pc-aug-financial-actual', 'pc-aug-financial-remarks')"></td>
                    <td>
                        <div id="pc-aug-financial-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-sep-financial-target" oninput="checkDate('pc-sep-financial-target','pc-sep-financial-actual', 'pc-sep-financial-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-sep-financial-actual" oninput="checkDate('pc-sep-financial-target','pc-sep-financial-actual', 'pc-sep-financial-remarks')"></td>
                    <td>
                        <div id="pc-sep-financial-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-oct-financial-target" oninput="checkDate('pc-oct-financial-target', 'pc-oct-financial-actual', 'pc-oct-financial-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-oct-financial-actual" oninput="checkDate('pc-oct-financial-target', 'pc-oct-financial-actual', 'pc-oct-financial-remarks')"></td>
                    <td>
                        <div id="pc-oct-financial-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-nov-financial-target" oninput="checkDate('pc-nov-financial-target', 'pc-nov-financial-actual', 'pc-nov-financial-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-nov-financial-actual" oninput="checkDate('pc-nov-financial-target', 'pc-nov-financial-actual', 'pc-nov-financial-remarks')"></td>
                    <td>
                        <div id="pc-nov-financial-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-dec-financial-target" oninput="checkDate('pc-dec-financial-target', 'pc-dec-financial-actual', 'pc-dec-financial-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-dec-financial-actual" oninput="checkDate('pc-dec-financial-target', 'pc-dec-financial-actual', 'pc-dec-financial-remarks')"></td>
                    <td>
                        <div id="pc-dec-financial-remarks" style="text-align: center;"></div>
                    </td>
                </tr>
                <tr>
                    <td>Updated GEO-MS</td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-jan-geo-target" oninput="checkDate('pc-jan-geo-target','pc-jan-geo-actual', 'pc-jan-geo-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-jan-geo-actual" oninput="checkDate('pc-jan-geo-target','pc-jan-geo-actual', 'pc-jan-geo-remarks')"></td>
                    <td>
                        <div id="pc-jan-geo-remarks" style="text-align: center;"></div>
                    </td>




                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-feb-geo-target" oninput="checkDate('pc-feb-geo-target','pc-feb-geo-actual', 'pc-feb-geo-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-feb-geo-actual" oninput="checkDate('pc-feb-geo-target','pc-feb-geo-actual', 'pc-feb-geo-remarks')"></td>
                    <td>
                        <div id="pc-feb-geo-remarks" style="text-align: center;"></div>
                    </td>


                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-mar-geo-target" oninput="checkDate('pc-mar-geo-target','pc-mar-geo-actual', 'pc-mar-geo-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-mar-geo-actual" oninput="checkDate('pc-mar-geo-target','pc-mar-geo-actual', 'pc-mar-geo-remarks')"></td>
                    <td>
                        <div id="pc-mar-geo-remarks" style="text-align: center;"></div>
                    </td>



                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-apr-geo-target" oninput="checkDate('pc-apr-geo-target','pc-apr-geo-actual', 'pc-apr-geo-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-apr-geo-actual" oninput="checkDate('pc-apr-geo-target','pc-apr-geo-actual', 'pc-apr-geo-remarks')"></td>
                    <td>
                        <div id="pc-apr-geo-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-may-geo-actual" oninput="checkDate('pc-may-geo-target','pc-may-geo-actual', 'pc-may-geo-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-may-geo-target" oninput="checkDate('pc-may-geo-target','pc-may-geo-actual', 'pc-may-geo-remarks')"></td>
                    <td>
                        <div id="pc-may-geo-remarks" style="text-align: center;"></div>
                    </td>



                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-jun-geo-target" oninput="checkDate('pc-jun-geo-target','pc-jun-geo-actual', 'pc-jun-geo-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-jun-geo-actual" oninput="checkDate('pc-jun-geo-target','pc-jun-geo-actual', 'pc-jun-geo-remarks')"></td>
                    <td>
                        <div id="pc-jun-geo-remarks" style="text-align: center;"></div>
                    </td>




                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-jul-geo-actual" oninput="checkDate('pc-jul-geo-target','pc-jul-geo-actual', 'pc-jul-geo-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-jul-geo-target" oninput="checkDate('pc-jul-geo-target','pc-jul-geo-actual', 'pc-jul-geo-remarks')"></td>
                    <td>
                        <div id="pc-jul-geo-remarks" style="text-align: center;"></div>
                    </td>



                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-aug-geo-target" oninput="checkDate('pc-aug-geo-target','pc-aug-geo-actual', 'pc-aug-geo-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-aug-geo-actual" oninput="checkDate('pc-aug-geo-target','pc-aug-geo-actual', 'pc-aug-geo-remarks')"></td>
                    <td>
                        <div id="pc-aug-geo-remarks" style="text-align: center;"></div>
                    </td>



                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-sep-geo-target" oninput="checkDate('pc-sep-geo-target','pc-sep-geo-actual', 'pc-sep-geo-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-sep-geo-actual" oninput="checkDate('pc-sep-geo-target','pc-sep-geo-actual', 'pc-sep-geo-remarks')"></td>
                    <td>
                        <div id="pc-sep-geo-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-oct-geo-target" oninput="checkDate('pc-oct-geo-target', 'pc-oct-geo-actual', 'pc-oct-geo-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-oct-geo-actual" oninput="checkDate('pc-oct-geo-target', 'pc-oct-geo-actual', 'pc-oct-geo-remarks')"></td>
                    <td>
                        <div id="pc-oct-geo-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-nov-geo-target" oninput="checkDate('pc-nov-geo-target', 'pc-nov-geo-actual', 'pc-nov-geo-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-nov-geo-actual" oninput="checkDate('pc-nov-geo-target', 'pc-nov-geo-actual', 'pc-nov-geo-remarks')"></td>
                    <td>
                        <div id="pc-nov-geo-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-dec-geo-target" oninput="checkDate('pc-dec-geo-target', 'pc-dec-geo-actual', 'pc-dec-geo-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-dec-geo-actual" oninput="checkDate('pc-dec-geo-target', 'pc-dec-geo-actual', 'pc-dec-geo-remarks')"></td>
                    <td>
                        <div id="pc-dec-geo-remarks" style="text-align: center;"></div>
                    </td>

                </tr>
                <tr>
                    <td>Observation Report and Re-interview </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-jan-observation-target" oninput="checkDate('pc-jan-observation-target','pc-jan-observation-actual', 'pc-jan-observation-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-jan-observation-actual" oninput="checkDate('pc-jan-observation-target','pc-jan-observation-actual', 'pc-jan-observation-remarks')"></td>
                    <td>
                        <div id="pc-jan-observation-remarks" style="text-align: center;"></div>
                    </td>


                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-feb-observation-target" oninput="checkDate('pc-feb-observation-target','pc-feb-observation-actual', 'pc-feb-observation-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-feb-observation-actual" oninput="checkDate('pc-feb-observation-target','pc-feb-observation-actual', 'pc-feb-observation-remarks')"></td>
                    <td>
                        <div id="pc-feb-observation-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-mar-observation-target" oninput="checkDate('pc-mar-observation-target','pc-mar-observation-actual', 'pc-mar-observation-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-mar-observation-actual" oninput="checkDate('pc-mar-observation-target','pc-mar-observation-actual', 'pc-mar-observation-remarks')"></td>
                    <td>
                        <div id="pc-mar-observation-remarks" style="text-align: center;"></div>
                    </td>





                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-apr-observation-target" oninput="checkDate('pc-apr-observation-target','pc-apr-observation-actual', 'pc-apr-observation-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-apr-observation-actual" oninput="checkDate('pc-apr-observation-target','pc-apr-observation-actual', 'pc-apr-observation-remarks')"></td>
                    <td>
                        <div id="pc-apr-observation-remarks" style="text-align: center;"></div>
                    </td>



                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-may-observation-target" oninput="checkDate('pc-may-observation-target','pc-may-observation-actual', 'pc-may-observation-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-may-observation-actual" oninput="checkDate('pc-may-observation-target','pc-may-observation-actual', 'pc-may-observation-remarks')"></td>
                    <td>
                        <div id="pc-may-observation-remarks" style="text-align: center;"></div>
                    </td>



                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-jun-observation-target" oninput="checkDate('pc-jun-observation-target','pc-jun-observation-actual', 'pc-jun-observation-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-jun-observation-actual" oninput="checkDate('pc-jun-observation-target','pc-jun-observation-actual', 'pc-jun-observation-remarks')"></td>
                    <td>
                        <div id="pc-jun-observation-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-jul-observation-target" oninput="checkDate('pc-jul-observation-target','pc-jul-observation-actual', 'pc-jul-observation-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-jul-observation-actual" oninput="checkDate('pc-jul-observation-target','pc-jul-observation-actual', 'pc-jul-observation-remarks')"></td>
                    <td>
                        <div id="pc-jul-observation-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-aug-observation-target" oninput="checkDate('pc-aug-observation-target','pc-aug-observation-actual', 'pc-aug-observation-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-aug-observation-actual" oninput="checkDate('pc-aug-observation-target','pc-aug-observation-actual', 'pc-aug-observation-remarks')"></td>
                    <td>
                        <div id="pc-aug-observation-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-sep-observation-target" oninput="checkDate('pc-sep-observation-target','pc-sep-observation-actual', 'pc-sep-observation-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-sep-observation-actual" oninput="checkDate('pc-sep-observation-target','pc-sep-observation-actual', 'pc-sep-observation-remarks')"></td>
                    <td>
                        <div id="pc-sep-observation-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-oct-observation-target" oninput="checkDate('pc-oct-observation-target','pc-oct-observation-actual', 'pc-oct-observation-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-oct-observation-actual" oninput="checkDate('pc-oct-observation-target','pc-oct-observation-actual', 'pc-oct-observation-remarks')"></td>
                    <td>
                        <div id="pc-oct-observation-remarks" style="text-align: center;"></div>
                    </td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-nov-observation-target" oninput="checkDate('pc-nov-observation-target','pc-nov-observation-actual', 'pc-nov-observation-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-nov-observation-actual" oninput="checkDate('pc-nov-observation-target','pc-nov-observation-actual', 'pc-nov-observation-remarks')"></td>
                    <td>
                        <div id="pc-nov-observation-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-dec-observation-target" oninput="checkDate('pc-dec-observation-target','pc-dec-observation-actual', 'pc-dec-observation-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pc-dec-observation-actual" oninput="checkDate('pc-dec-observation-target','pc-dec-observation-actual', 'pc-dec-observation-remarks')"></td>
                    <td>
                        <div id="pc-dec-observation-remarks" style="text-align: center;"></div>
                    </td>
                </tr>
            </tbody>
            <script>
                window.onload = function() {
                    loadData('pc-jan-res-target', 'pc-jan-res-actual', 'pc-jan-res-remarks');
                    loadData('pc-feb-res-target', 'pc-feb-res-actual', 'pc-feb-res-remarks');
                    loadData('pc-mar-res-target', 'pc-mar-res-actual', 'pc-mar-res-remarks');
                    loadData('pc-apr-res-target', 'pc-apr-res-actual', 'pc-apr-res-remarks');
                    loadData('pc-may-res-target', 'pc-may-res-actual', 'pc-may-res-remarks');
                    loadData('pc-jun-res-target', 'pc-jun-res-actual', 'pc-jun-res-remarks');
                    loadData('pc-jul-res-target', 'pc-jul-res-actual', 'pc-jul-res-remarks');
                    loadData('pc-aug-res-target', 'pc-aug-res-actual', 'pc-aug-res-remarks');
                    loadData('pc-sep-res-target', 'pc-sep-res-actual', 'pc-sep-res-remarks');
                    loadData('pc-oct-res-target', 'pc-oct-res-actual', 'pc-oct-res-remarks');
                    loadData('pc-nov-res-target', 'pc-nov-res-actual', 'pc-nov-res-remarks');
                    loadData('pc-dec-res-target', 'pc-dec-res-actual', 'pc-dec-res-remarks');

                    loadData('pc-jan-raw-target', 'pc-jan-raw-actual', 'pc-jan-raw-remarks');
                    loadData('pc-feb-raw-target', 'pc-feb-raw-actual', 'pc-feb-raw-remarks');
                    loadData('pc-mar-raw-target', 'pc-mar-raw-actual', 'pc-mar-raw-remarks');
                    loadData('pc-apr-raw-target', 'pc-apr-raw-actual', 'pc-apr-raw-remarks');
                    loadData('pc-may-raw-target', 'pc-may-raw-actual', 'pc-may-raw-remarks');
                    loadData('pc-jun-raw-target', 'pc-jun-raw-actual', 'pc-jun-raw-remarks');
                    loadData('pc-jul-raw-target', 'pc-jul-raw-actual', 'pc-jul-raw-remarks');
                    loadData('pc-aug-raw-target', 'pc-aug-raw-actual', 'pc-aug-raw-remarks');
                    loadData('pc-sep-raw-target', 'pc-sep-raw-actual', 'pc-sep-raw-remarks');
                    loadData('pc-oct-raw-target', 'pc-oct-raw-actual', 'pc-oct-raw-remarks');
                    loadData('pc-nov-raw-target', 'pc-nov-raw-actual', 'pc-nov-raw-remarks');
                    loadData('pc-dec-raw-target', 'pc-dec-raw-actual', 'pc-dec-raw-remarks');


                    loadData('pc-jan-clean-target', 'pc-jan-clean-actual', 'pc-jan-clean-remarks');
                    loadData('pc-feb-clean-target', 'pc-feb-clean-actual', 'pc-feb-clean-remarks');
                    loadData('pc-mar-clean-target', 'pc-mar-clean-actual', 'pc-mar-clean-remarks');
                    loadData('pc-apr-clean-target', 'pc-apr-clean-actual', 'pc-apr-clean-remarks');
                    loadData('pc-may-clean-target', 'pc-may-clean-actual', 'pc-may-clean-remarks');
                    loadData('pc-jun-clean-target', 'pc-jun-clean-actual', 'pc-jun-clean-remarks');
                    loadData('pc-jul-clean-target', 'pc-jul-clean-actual', 'pc-jul-clean-remarks');
                    loadData('pc-aug-clean-target', 'pc-aug-clean-actual', 'pc-aug-clean-remarks');
                    loadData('pc-sep-clean-target', 'pc-sep-clean-actual', 'pc-sep-clean-remarks');
                    loadData('pc-oct-clean-target', 'pc-oct-clean-actual', 'pc-oct-clean-remarks');
                    loadData('pc-nov-clean-target', 'pc-nov-clean-actual', 'pc-nov-clean-remarks');
                    loadData('pc-dec-clean-target', 'pc-dec-clean-actual', 'pc-dec-clean-remarks');


                    loadData('pc-jan-narrative-target', 'pc-jan-narrative-actual', 'pc-jan-narrative-remarks');
                    loadData('pc-feb-narrative-target', 'pc-feb-narrative-actual', 'pc-feb-narrative-remarks');
                    loadData('pc-mar-narrative-target', 'pc-mar-narrative-actual', 'pc-mar-narrative-remarks');
                    loadData('pc-apr-narrative-target', 'pc-apr-narrative-actual', 'pc-apr-narrative-remarks');
                    loadData('pc-may-narrative-target', 'pc-may-narrative-actual', 'pc-may-narrative-remarks');
                    loadData('pc-jun-narrative-target', 'pc-jun-narrative-actual', 'pc-jun-narrative-remarks');
                    loadData('pc-jul-narrative-target', 'pc-jul-narrative-actual', 'pc-jul-narrative-remarks');
                    loadData('pc-aug-narrative-target', 'pc-aug-narrative-actual', 'pc-aug-narrative-remarks');
                    loadData('pc-sep-narrative-target', 'pc-sep-narrative-actual', 'pc-sep-narrative-remarks');
                    loadData('pc-oct-narrative-target', 'pc-oct-narrative-actual', 'pc-oct-narrative-remarks');
                    loadData('pc-nov-narrative-target', 'pc-nov-narrative-actual', 'pc-nov-narrative-remarks');
                    loadData('pc-dec-narrative-target', 'pc-dec-narrative-actual', 'pc-dec-narrative-remarks');


                    loadData('pc-jan-financial-target', 'pc-jan-financial-actual', 'pc-jan-financial-remarks');
                    loadData('pc-feb-financial-target', 'pc-feb-financial-actual', 'pc-feb-financial-remarks');
                    loadData('pc-mar-financial-target', 'pc-mar-financial-actual', 'pc-mar-financial-remarks');
                    loadData('pc-apr-financial-target', 'pc-apr-financial-actual', 'pc-apr-financial-remarks');
                    loadData('pc-may-financial-target', 'pc-may-financial-actual', 'pc-may-financial-remarks');
                    loadData('pc-jun-financial-target', 'pc-jun-financial-actual', 'pc-jun-financial-remarks');
                    loadData('pc-jul-financial-target', 'pc-jul-financial-actual', 'pc-jul-financial-remarks');
                    loadData('pc-aug-financial-target', 'pc-aug-financial-actual', 'pc-aug-financial-remarks');
                    loadData('pc-sep-financial-target', 'pc-sep-financial-actual', 'pc-sep-financial-remarks');
                    loadData('pc-oct-financial-target', 'pc-oct-financial-actual', 'pc-oct-financial-remarks');
                    loadData('pc-nov-financial-target', 'pc-nov-financial-actual', 'pc-nov-financial-remarks');
                    loadData('pc-dec-financial-target', 'pc-dec-financial-actual', 'pc-dec-financial-remarks');

                    loadData('pc-jan-geo-target', 'pc-jan-geo-actual', 'pc-jan-geo-remarks');
                    loadData('pc-feb-geo-target', 'pc-feb-geo-actual', 'pc-feb-geo-remarks');
                    loadData('pc-mar-geo-target', 'pc-mar-geo-actual', 'pc-mar-geo-remarks');
                    loadData('pc-apr-geo-target', 'pc-apr-geo-actual', 'pc-apr-geo-remarks');
                    loadData('pc-may-geo-target', 'pc-may-geo-actual', 'pc-may-geo-remarks');
                    loadData('pc-jun-geo-target', 'pc-jun-geo-actual', 'pc-jun-geo-remarks');
                    loadData('pc-jul-geo-target', 'pc-jul-geo-actual', 'pc-jul-geo-remarks');
                    loadData('pc-aug-geo-target', 'pc-aug-geo-actual', 'pc-aug-geo-remarks');
                    loadData('pc-sep-geo-target', 'pc-sep-geo-actual', 'pc-sep-geo-remarks');
                    loadData('pc-oct-geo-target', 'pc-oct-geo-actual', 'pc-oct-geo-remarks');
                    loadData('pc-nov-geo-target', 'pc-nov-geo-actual', 'pc-nov-geo-remarks');
                    loadData('pc-dec-geo-target', 'pc-dec-geo-actual', 'pc-dec-geo-remarks');


                    loadData('pc-jan-observation-target', 'pc-jan-observation-actual', 'pc-jan-observation-remarks');
                    loadData('pc-feb-observation-target', 'pc-feb-observation-actual', 'pc-feb-observation-remarks');
                    loadData('pc-mar-observation-target', 'pc-feb-observation-actual', 'pc-mar-observation-remarks');
                    loadData('pc-apr-observation-target', 'pc-apr-observation-actual', 'pc-apr-observation-remarks');
                    loadData('pc-may-observation-target', 'pc-may-observation-actual', 'pc-may-observation-remarks');
                    loadData('pc-jun-observation-target', 'pc-jun-observation-actual', 'pc-jun-observation-remarks');
                    loadData('pc-jul-observation-target', 'pc-jul-observation-actual', 'pc-jul-observation-remarks');
                    loadData('pc-aug-observation-target', 'pc-aug-observation-actual', 'pc-aug-observation-remarks');
                    loadData('pc-sep-observation-target', 'pc-sep-observation-actual', 'pc-sep-observation-remarks');
                    loadData('pc-oct-observation-target', 'pc-oct-observation-actual', 'pc-oct-observation-remarks');
                    loadData('pc-nov-observation-target', 'pc-nov-observation-actual', 'pc-nov-observation-remarks');
                    loadData('pc-dec-observation-target', 'pc-dec-observation-actual', 'pc-dec-observation-remarks');
                };

                function checkValues(targetId, actualId, remarksId) {
                    const targetValue = parseFloat(document.getElementById(targetId).value);
                    const actualValue = parseFloat(document.getElementById(actualId).value);
                    const remarksField = document.getElementById(remarksId);

                    if (!isNaN(targetValue) && !isNaN(actualValue)) {
                        const gap = ((targetValue - actualValue) / targetValue) * 100;

                        if (actualValue > targetValue) {

                            remarksField.innerHTML = '<img src="images for dashboard/images/above target percentage.gif" alt="Star Face" class="image-size"/>';
                            saveData(remarksId, remarksField.innerHTML);
                        } else if (actualValue === targetValue) {

                            remarksField.innerHTML = '<img src="images for dashboard/images/same percentage to the target column.gif" alt="Happy Face" class="image-size"/>';
                            saveData(remarksId, remarksField.innerHTML);

                        } else if (gap >= 1 && gap < 2) {

                            remarksField.innerHTML = '<img src="images for dashboard/images/2%gap below in target percentage.gif" alt="Sad Face" class="image-size"/>';
                            saveData(remarksId, remarksField.innerHTML);

                        } else if (gap >= 2 && gap < 3) {

                            remarksField.innerHTML = '<img src="images for dashboard/images/2%gap below in target percentage.gif" alt="Sad Face" class="image-size"/>';
                            saveData(remarksId, remarksField.innerHTML);
                        } else if (gap >= 3) {
                            remarksField.innerHTML = '<img src="images for dashboard/images/crying.gif" alt="Crying Face" class="image-size"/>';
                            saveData(remarksId, remarksField.innerHTML);
                        } else {
                            remarksField.innerHTML = '';
                            saveData(remarksId, '');
                        }
                    } else {
                        remarksField.innerHTML = '';
                        saveData(remarksId, '');
                    }

                    saveData(targetId, targetValue);
                    saveData(actualId, actualValue);
                }

                function saveData(id, value) {
                    localStorage.setItem(id, value);
                }


                function loadData(targetId, actualId, remarksId) {
                    const savedTargetValue = localStorage.getItem(targetId);
                    const savedActualValue = localStorage.getItem(actualId);
                    const savedRemarks = localStorage.getItem(remarksId);

                    if (savedTargetValue) document.getElementById(targetId).value = savedTargetValue;
                    if (savedActualValue) document.getElementById(actualId).value = savedActualValue;
                    if (savedRemarks) document.getElementById(remarksId).innerHTML = savedRemarks;
                }


                function checkDate(targetId, actualId, remarksId) {
                    const targetDate = document.getElementById(targetId).value;
                    const actualDate = document.getElementById(actualId).value;
                    const remarksField = document.getElementById(remarksId);

                    if (targetDate && actualDate) {
                        if (new Date(actualDate) > new Date(targetDate)) {

                            remarksField.innerHTML = '<img src="images for dashboard/sadcry.gif" alt="Sad-Face" class="image-size"/>';
                            saveData(remarksId, remarksField.innerHTML);
                        } else {

                            remarksField.innerHTML = '<img src="images for dashboard/hapyperson.webp" alt="Happy-Face" class="image-size"/>';
                            saveData(remarksId, remarksField.innerHTML);
                        }
                    } else {
                        remarksField.innerHTML = '';
                        saveData(remarksId, '');
                    }

                    saveData(targetId, targetDate);
                    saveData(actualId, actualDate);
                }


                function saveData(id, value) {
                    localStorage.setItem(id, value);
                }

                function loadData(targetId, actualId, remarksId) {
                    const savedTargetDate = localStorage.getItem(targetId);
                    const savedActualDate = localStorage.getItem(actualId);
                    const savedRemarks = localStorage.getItem(remarksId);

                    if (savedTargetDate) document.getElementById(targetId).value = savedTargetDate;
                    if (savedActualDate) document.getElementById(actualId).value = savedActualDate;
                    if (savedRemarks) document.getElementById(remarksId).innerHTML = savedRemarks;
                }
            </script>

        </table>
    </div>
    <div class="chart-container">
        <canvas id="pcChart"></canvas>
    </div>
    
    <script>
        Chart.register(ChartDataLabels);

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


                cityCharts[city].data.datasets[index * 2].data = targetData;
                cityCharts[city].data.datasets[index * 2 + 1].data = actualData;
            });

            cityCharts[city].update();
        }

        function saveToLocalStorage(city, month, category, type, value) {
            const key = `${city}-${month}-${category}-${type}`;
            localStorage.setItem(key, value);
        }

        function loadFromLocalStorage(city, month, category, type) {
            const key = `${city}-${month}-${category}-${type}`;
            return localStorage.getItem(key) ? parseInt(localStorage.getItem(key)) : 0;
        }

        const cityCharts = {};

        function createChart(cityId, chartId) {
            const ctx = document.getElementById(chartId).getContext('2d');
            const chart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'], // Add more months as needed
                    datasets: [{
                            label: 'Response Rate Target',
                            data: [0, 0, 0],
                            backgroundColor: 'rgba(111, 152, 112, 0.5)',
                            borderColor: 'rgba(123, 162, 532, 1)',
                            hoverBackgroundColor: 'yellowgreen',
                            borderWidth: 1,
                        },
                        {
                            label: 'Response Rate Actual',
                            data: [0, 0, 0],
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
                            text: `Pasay City Response Rate Performance Data`,
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
                        datalabels: {
                            display: true,
                            align: 'end',
                            anchor: 'end',
                            formatter: (value) => `${value}%`,
                            font: {
                                size: 12,
                                weight: 'bold',
                                family: 'Arial'
                            },
                            color: '#030989',
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
                            beginAtZero: true,
                            min: 0,
                            max: 100,
                            ticks: {
                                stepSize: 20,
                                callback: function(value) {
                                    if (value % 1 === 0) {
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

        function updateChartFromLocalStorage(city) {
            const months = ['jan', 'feb', 'mar', 'apr', 'may', 'jun', 'jul', 'aug', 'sep', 'oct', 'nov', 'dec'];
            const categories = ['res'];
            categories.forEach((category, index) => {
                const targetData = months.map(month => loadFromLocalStorage(city, month, category, 'target'));
                const actualData = months.map(month => loadFromLocalStorage(city, month, category, 'actual'));

                cityCharts[city].data.datasets[index * 2].data = targetData;
                cityCharts[city].data.datasets[index * 2 + 1].data = actualData;
            });
            cityCharts[city].update();
        }
        createChart('pc', 'pcChart');
    </script>

</body>

</html>