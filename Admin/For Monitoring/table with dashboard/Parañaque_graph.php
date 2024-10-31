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

        .image-size {
            width: 45px;
            height: 45px;
            vertical-align: middle;
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

            .logo-text {
                font-size: 16px;
            }
        }****************************** End for logo css part ***********************/
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
        <a style="background-color: cadetblue; color:white; font-weight:bolder; padding:5px" href="Parañaque_graph.php" class="btn btn-primary">PARAÑAQUE CITY</a>
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
    <h2 style="text-align:center;">PARAÑAQUE CITY</h2>
    <!-- City Section for Las Piñas -->
    <div class="city-header" style="font-weight: bolder; background-color:darkgoldenrod;">LABOR FORCE SURVEY</div>
    <div>
        <a style="background-color:#0A414F; color:white; border-radius:7px; font-weight: bolder; padding:5px" href="progress.php" class="btn btn-primary active">SELECT PROJECT</a>
    </div>
    <div class="city-section" id="parañaque-section">
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
                        <input type="number" style="border: white; text-align:center;" id="pq-jan-res-target" oninput="checkValues('pq-jan-res-target', 'pq-jan-res-actual', 'pq-jan-res-remarks')" onchange="updateChart('pq')">
                    </td>
                    <td>
                        <input type="mumber" style="border: white; text-align:center;" id="pq-jan-res-actual" oninput="checkValues('pq-jan-res-target', 'pq-jan-res-actual', 'pq-jan-res-remarks')" onchange="updateChart('pq')">
                    </td>
                    <td>
                        <div id="pq-jan-res-remarks"></div>
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center;" id="pq-feb-res-target" oninput="checkValues('pq-feb-res-target', 'pq-feb-res-actual', 'pq-feb-res-remarks')" onchange="updateChart('pq')">
                    </td>
                    <td>
                        <input type="mumber" style="border: white; text-align:center;" id="pq-feb-res-actual" oninput="checkValues('pq-feb-res-target', 'pq-feb-res-actual', 'pq-feb-res-remarks')" onchange="updateChart('pq')">
                    </td>
                    <td>
                        <div id="pq-feb-res-remarks"></div>
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="pq-mar-res-target" oninput="checkValues('pq-mar-res-target', 'pq-mar-res-actual', 'pq-mar-res-remarks')" onchange="updateChart('pq')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="pq-mar-res-actual" oninput="checkValues('pq-mar-res-target', 'pq-mar-res-actual', 'pq-mar-res-remarks')" onchange="updateChart('pq')">
                    </td>
                    <td>
                        <div id="pq-mar-res-remarks"></div>
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center;" id="pq-apr-res-target" oninput="checkValues('pq-apr-res-target', 'pq-apr-res-actual', 'pq-apr-res-remarks')" onchange="updateChart('pq')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="pq-apr-res-actual" oninput="checkValues('pq-apr-res-target', 'pq-apr-res-actual', 'pq-apr-res-remarks')" onchange="updateChart('pq')">
                    </td>
                    <td>
                        <div id="pq-apr-res-remarks"></div>
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="pq-may-res-target" oninput="checkValues('pq-may-res-target', 'pq-may-res-actual', 'pq-may-res-remarks')" onchange="updateChart('pq')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="pq-may-res-actual" oninput="checkValues('pq-may-res-target', 'pq-may-res-actual', 'pq-may-res-remarks')" onchange="updateChart('pq')">
                    </td>
                    <td>
                        <div id="pq-may-res-remarks"></div>
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center;" id="pq-jun-res-target" oninput="checkValues('pq-jun-res-target', 'pq-jun-res-actual', 'pq-jun-res-remarks')" onchange="updateChart('pq')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="pq-jun-res-actual" oninput="checkValues('pq-jun-res-target', 'pq-jun-res-actual', 'pq-jun-res-remarks')" onchange="updateChart('pq')">
                    </td>
                    <td>
                        <div id="pq-jun-res-remarks"></div>
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center;" id="pq-jul-res-target" oninput="checkValues('pq-jul-res-target', 'pq-jul-res-actual', 'pq-jul-res-remarks')" onchange="updateChart('pq')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="pq-jul-res-actual" oninput="checkValues('pq-jul-res-target', 'pq-jul-res-actual', 'pq-jul-res-remarks')" onchange="updateChart('pq')">
                    </td>
                    <td>
                        <div id="pq-jul-res-remarks"></div>
                    </td>



                    <td>
                        <input type="number" style="border: white; text-align:center;" id="pq-aug-res-target" oninput="checkValues('pq-aug-res-target', 'pq-aug-res-actual', 'pq-aug-res-remarks')" onchange="updateChart('pq')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="pq-aug-res-actual" oninput="checkValues('pq-aug-res-target', 'pq-aug-res-actual', 'pq-aug-res-remarks')" onchange="updateChart('pq')">
                    </td>
                    <td>
                        <div id="pq-aug-res-remarks"></div>
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="pq-sep-res-target" oninput="checkValues('pq-sep-res-target', 'pq-sep-res-actual', 'pq-sep-res-remarks')" onchange="updateChart('pq')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="pq-sep-res-actual" oninput="checkValues('pq-sep-res-target', 'pq-sep-res-actual', 'pq-sep-res-remarks')" onchange="updateChart('pq')">
                    </td>
                    <td>
                        <div id="pq-sep-res-remarks"></div>
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="pq-oct-res-target" oninput="checkValues('pq-oct-res-target', 'pq-oct-res-actual', 'pq-oct-res-remarks')" onchange="updateChart('pq')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="pq-oct-res-actual" oninput="checkValues('pq-oct-res-target', 'pq-oct-res-actual', 'pq-oct-res-remarks')" onchange="updateChart('pq')">
                    </td>
                    <td>
                        <div id="pq-oct-res-remarks"></div>
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="pq-nov-res-target" oninput="checkValues('pq-nov-res-target', 'pq-nov-res-actual', 'pq-nov-res-remarks')" onchange="updateChart('pq')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="pq-nov-res-actual" oninput="checkValues('pq-nov-res-target', 'pq-nov-res-actual', 'pq-nov-res-remarks')" onchange="updateChart('pq')">
                    </td>
                    <td>
                        <div id="pq-nov-res-remarks"></div>
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center;" id="pq-dec-res-target" oninput="checkValues('pq-dec-res-target', 'pq-dec-res-actual', 'pq-dec-res-remarks')" onchange="updateChart('pq')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="pq-dec-res-actual" oninput="checkValues('pq-dec-res-target', 'pq-dec-res-actual', 'pq-dec-res-remarks')" onchange="updateChart('pq')">
                    </td>
                    <td>
                        <div id="pq-dec-res-remarks"></div>
                    </td>
                </tr>


                </tr>
                <tr>
                    <td>Raw datafile</td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-jan-clean-target" oninput="checkDate('pq-jan-clean-target', 'pq-jan-clean-actual', 'pq-jan-clean-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-jan-clean-actual" oninput="checkDate('pq-jan-clean-target', 'pq-jan-clean-actual', 'pq-jan-clean-remarks')"></td>
                    <td>
                        <div id="pq-jan-clean-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-feb-clean-target" oninput="checkDate('pq-feb-clean-target', 'pq-feb-clean-actual', 'pq-feb-clean-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-feb-clean-actual" oninput="checkDate('pq-feb-clean-target', 'pq-feb-clean-actual', 'pq-feb-clean-remarks')"></td>
                    <td>
                        <div id="pq-feb-clean-remarks" style="text-align: center;"></div>
                    </td>


                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-mar-clean-target" oninput="checkDate('pq-mar-clean-target', 'pq-mar-clean-actual', 'pq-mar-clean-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-mar-clean-actual" oninput="checkDate('pq-mar-clean-target', 'pq-mar-clean-actual', 'pq-mar-clean-remarks')"></td>
                    <td>
                        <div id="pq-mar-clean-remarks" style="text-align: center;"></div>
                    </td>



                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-apr-clean-target" oninput="checkDate('pq-apr-clean-target', 'pq-apr-clean-actual', 'pq-apr-clean-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-apr-clean-actual" oninput="checkDate('pq-apr-clean-target', 'pq-apr-clean-actual', 'pq-apr-clean-remarks')"></td>
                    <td>
                        <div id="pq-apr-clean-remarks" style="text-align: center;"></div>
                    </td>


                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-may-clean-target" oninput="checkDate('pq-may-clean-target', 'pq-may-clean-actual', 'pq-may-clean-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-may-clean-actual" oninput="checkDate('pq-may-clean-target', 'pq-may-clean-actual', 'pq-may-clean-remarks')"></td>
                    <td>
                        <div id="pq-may-clean-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-jun-clean-target" oninput="checkDate('pq-jun-clean-target', 'pq-jun-clean-actual', 'pq-jun-clean-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-jun-clean-actual" oninput="checkDate('pq-jun-clean-target', 'pq-jun-clean-actual', 'pq-jun-clean-remarks')"></td>
                    <td>
                        <div id="pq-jun-clean-remarks" style="text-align: center;"></div>
                    </td>


                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-jul-clean-target" oninput="checkDate('pq-jul-clean-target', 'pq-jul-clean-actual', 'pq-jul-clean-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-jul-clean-actual" oninput="checkDate('pq-jul-clean-target', 'pq-jul-clean-actual', 'pq-jul-clean-remarks')"></td>
                    <td>
                        <div id="pq-jul-clean-remarks" style="text-align: center;"></div>
                    </td>



                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-aug-clean-target" oninput="checkDate('pq-aug-clean-target', 'pq-aug-clean-actual', 'pq-aug-clean-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-aug-clean-actual" oninput="checkDate('pq-aug-clean-target', 'pq-aug-clean-actual', 'pq-aug-clean-remarks')"></td>
                    <td>
                        <div id="pq-aug-clean-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-sep-clean-target" oninput="checkDate('pq-sep-clean-target', 'pq-sep-clean-actual', 'pq-sep-clean-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-sep-clean-actual" oninput="checkDate('pq-sep-clean-target', 'pq-sep-clean-actual', 'pq-sep-clean-remarks')"></td>
                    <td>
                        <div id="pq-sep-clean-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-oct-clean-target" oninput="checkDate('pq-oct-clean-target', 'pq-oct-clean-actual', 'pq-oct-clean-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-oct-clean-actual" oninput="checkDate('pq-oct-clean-target', 'pq-oct-clean-actual', 'pq-oct-clean-remarks')"></td>
                    <td>
                        <div id="pq-oct-clean-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-nov-clean-target" oninput="checkDate('pq-nov-clean-target', 'pq-nov-clean-actual', 'pq-nov-clean-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-nov-clean-actual" oninput="checkDate('pq-nov-clean-target', 'pq-nov-clean-actual', 'pq-nov-clean-remarks')"></td>
                    <td>
                        <div id="pq-nov-clean-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-dec-clean-target" oninput="checkDate('pq-dec-clean-target', 'pq-dec-clean-actual', 'pq-dec-clean-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-dec-clean-actual" oninput="checkDate('pq-dec-clean-target', 'pq-dec-clean-actual', 'pq-dec-clean-remarks')"></td>
                    <td>
                        <div id="pq-dec-clean-remarks" style="text-align: center;"></div>
                    </td>
                </tr>
            
                <tr>
                    <td>Narrative Report</td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-jan-narrative-target" oninput="checkDate('pq-jan-narrative-target', 'pq-jan-narrative-actual', 'pq-jan-narrative-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-jan-narrative-actual" oninput="checkDate('pq-jan-narrative-target', 'pq-jan-narrative-actual', 'pq-jan-narrative-remarks')"></td>
                    <td>
                        <div id="pq-jan-narrative-remarks" style="text-align: center;"></div>
                    </td>





                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-feb-narrative-target" oninput="checkDate('pq-feb-narrative-target','pq-feb-narrative-actual', 'pq-feb-narrative-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-feb-narrative-actual" oninput="checkDate('pq-feb-narrative-target','pq-feb-narrative-actual', 'pq-feb-narrative-remarks')"></td>
                    <td>
                        <div id="pq-feb-narrative-remarks" style="text-align: center;"></div>
                    </td>




                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-mar-narrative-target" oninput="checkDate('pq-mar-narrative-target','pq-mar-narrative-actual', 'pq-mar-narrative-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-mar-narrative-actual" oninput="checkDate('pq-mar-narrative-target','pq-mar-narrative-actual', 'pq-mar-narrative-remarks')"></td>
                    <td>
                        <div id="pq-mar-narrative-remarks" style="text-align: center;"></div>
                    </td>



                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-apr-narrative-target" oninput="checkDate('pq-apr-narrative-target','pq-apr-narrative-actual', 'pq-apr-narrative-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-apr-narrative-actual" oninput="checkDate('pq-apr-narrative-target','pq-apr-narrative-actual', 'pq-apr-narrative-remarks')"></td>
                    <td>
                        <div id="pq-apr-narrative-remarks" style="text-align: center;"></div>
                    </td>


                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-may-narrative-target" oninput="checkDate('pq-may-narrative-target','pq-may-narrative-actual', 'pq-may-narrative-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-may-narrative-actual" oninput="checkDate('pq-may-narrative-target','pq-may-narrative-actual', 'pq-may-narrative-remarks')"></td>
                    <td>
                        <div id="pq-may-narrative-remarks" style="text-align: center;"></div>
                    </td>


                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-jun-narrative-target" oninput="checkDate('pq-jun-narrative-target','pq-jun-narrative-actual', 'pq-jun-narrative-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-jun-narrative-actual" oninput="checkDate('pq-jun-narrative-target','pq-jun-narrative-actual', 'pq-jun-narrative-remarks')"></td>

                    <td>
                        <div id="pq-jun-narrative-remarks" style="text-align: center;"></div>
                    </td>



                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-jul-narrative-target" oninput="checkDate('pq-jul-narrative-target','pq-jul-narrative-actual', 'pq-jul-narrative-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-jul-narrative-actual" oninput="checkDate('pq-jul-narrative-target','pq-jul-narrative-actual', 'pq-jul-narrative-remarks')"></td>
                    <td>
                        <div id="pq-jul-narrative-remarks" style="text-align: center;"></div>
                    </td>


                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-aug-narrative-target" oninput="checkDate('pq-aug-narrative-target','pq-aug-narrative-actual', 'pq-aug-narrative-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-aug-narrative-actual" oninput="checkDate('pq-aug-narrative-target','pq-aug-narrative-actual', 'pq-aug-narrative-remarks')"></td>
                    <td>
                        <div id="pq-aug-narrative-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-sep-narrative-target" oninput="checkDate('pq-sep-narrative-target','pq-sep-narrative-actual', 'pq-sep-narrative-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-sep-narrative-actual" oninput="checkDate('pq-sep-narrative-target','pq-sep-narrative-actual', 'pq-sep-narrative-remarks')"></td>
                    <td>
                        <div id="pq-sep-narrative-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-oct-narrative-target" oninput="checkDate('pq-oct-narrative-target', 'pq-oct-narrative-actual', 'pq-oct-narrative-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-oct-narrative-actual" oninput="checkDate('pq-oct-narrative-target', 'pq-oct-narrative-actual', 'pq-oct-narrative-remarks')"></td>
                    <td>
                        <div id="pq-oct-narrative-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-nov-narrative-target" oninput="checkDate('pq-nov-narrative-target', 'pq-nov-narrative-actual', 'pq-nov-narrative-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-nov-narrative-actual" oninput="checkDate('pq-nov-narrative-target', 'pq-nov-narrative-actual', 'pq-nov-narrative-remarks')"></td>
                    <td>
                        <div id="pq-nov-narrative-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-dec-narrative-target" oninput="checkDate('pq-dec-narrative-target', 'pq-dec-narrative-actual', 'pq-dec-narrative-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-dec-narrative-actual" oninput="checkDate('pq-dec-narrative-target', 'pq-dec-narrative-actual', 'pq-dec-narrative-remarks')"></td>
                    <td>
                        <div id="pq-dec-narrative-remarks" style="text-align: center;"></div>
                    </td>
                </tr>

                
                <tr>
                    <td>Financial Report</td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-jan-financial-target" oninput="checkDate('pq-jan-financial-target','pq-jan-financial-actual', 'pq-jan-financial-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-jan-financial-actual" oninput="checkDate('pq-jan-financial-target','pq-jan-financial-actual', 'pq-jan-financial-remarks')"></td>
                    <td>
                        <div id="pq-jan-financial-remarks" style="text-align: center;"></div>
                    </td>



                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-feb-financial-target" oninput="checkDate('pq-feb-financial-target','pq-feb-financial-actual', 'pq-feb-financial-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-feb-financial-actual" oninput="checkDate('pq-feb-financial-target','pq-feb-financial-actual', 'pq-feb-financial-remarks')"></td>
                    <td>
                        <div id="pq-feb-financial-remarks" style="text-align: center;"></div>
                    </td>


                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-mar-financial-target" oninput="checkDate('pq-mar-financial-target','pq-mar-financial-actual', 'pq-mar-financial-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-mar-financial-actual" oninput="checkDate('pq-mar-financial-target','pq-mar-financial-actual', 'pq-mar-financial-remarks')"></td>
                    <td>
                        <div id="pq-mar-financial-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-apr-financial-target" oninput="checkDate('pq-apr-financial-target','pq-apr-financial-actual', 'pq-apr-financial-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-apr-financial-actual" oninput="checkDate('pq-apr-financial-target','pq-apr-financial-actual', 'pq-apr-financial-remarks')"></td>
                    <td>
                        <div id="pq-apr-financial-remarks" style="text-align: center;"></div>
                    </td>


                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-may-financial-target" oninput="checkDate('pq-may-financial-target','pq-may-financial-actual', 'pq-may-financial-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-may-financial-actual" oninput="checkDate('pq-may-financial-target','pq-may-financial-actual', 'pq-may-financial-remarks')"></td>
                    <td>
                        <div id="pq-may-financial-remarks" style="text-align: center;"></div>
                    </td>


                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-jun-financial-target" oninput="checkDate('pq-jun-financial-target','pq-jun-financial-actual', 'pq-jun-financial-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-jun-financial-actual" oninput="checkDate('pq-jun-financial-target','pq-jun-financial-actual', 'pq-jun-financial-remarks')"></td>
                    <td>
                        <div id="pq-jun-financial-remarks" style="text-align: center;"></div>
                    </td>



                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-jul-financial-target" oninput="checkDate('pq-jul-financial-target','pq-jul-financial-actual', 'pq-jul-financial-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-jul-financial-actual" oninput="checkDate('pq-jul-financial-target','pq-jul-financial-actual', 'pq-jul-financial-remarks')"></td>
                    </td>

                    <td>
                        <div id="pq-jul-financial-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-aug-financial-target" oninput="checkDate('pq-aug-financial-target','pq-aug-financial-actual', 'pq-aug-financial-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-aug-financial-actual" oninput="checkDate('pq-aug-financial-target','pq-aug-financial-actual', 'pq-aug-financial-remarks')"></td>
                    <td>
                        <div id="pq-aug-financial-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-sep-financial-target" oninput="checkDate('pq-sep-financial-target','pq-sep-financial-actual', 'pq-sep-financial-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-sep-financial-actual" oninput="checkDate('pq-sep-financial-target','pq-sep-financial-actual', 'pq-sep-financial-remarks')"></td>
                    <td>
                        <div id="pq-sep-financial-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-oct-financial-target" oninput="checkDate('pq-oct-financial-target', 'pq-oct-financial-actual', 'pq-oct-financial-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-oct-financial-actual" oninput="checkDate('pq-oct-financial-target', 'pq-oct-financial-actual', 'pq-oct-financial-remarks')"></td>
                    <td>
                        <div id="pq-oct-financial-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-nov-financial-target" oninput="checkDate('pq-nov-financial-target', 'pq-nov-financial-actual', 'pq-nov-financial-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-nov-financial-actual" oninput="checkDate('pq-nov-financial-target', 'pq-nov-financial-actual', 'pq-nov-financial-remarks')"></td>
                    <td>
                        <div id="pq-nov-financial-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-dec-financial-target" oninput="checkDate('pq-dec-financial-target', 'pq-dec-financial-actual', 'pq-dec-financial-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-dec-financial-actual" oninput="checkDate('pq-dec-financial-target', 'pq-dec-financial-actual', 'pq-dec-financial-remarks')"></td>
                    <td>
                        <div id="pq-dec-financial-remarks" style="text-align: center;"></div>
                    </td>
                </tr>
                <tr>
                    <td>Updated GEO-MS</td>
                    
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-jan-geo-target" oninput="checkDate('pq-jan-geo-target','pq-jan-geo-actual', 'pq-jan-geo-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-jan-geo-actual" oninput="checkDate('pq-jan-geo-target','pq-jan-geo-actual', 'pq-jan-geo-remarks')"></td>
                    <td>
                        <div id="pq-jan-geo-remarks" style="text-align: center;"></div>
                    </td>


                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-feb-geo-target" oninput="checkDate('pq-feb-geo-target','pq-feb-geo-actual', 'pq-feb-geo-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-feb-geo-actual" oninput="checkDate('pq-feb-geo-target','pq-feb-geo-actual', 'pq-feb-geo-remarks')"></td>
                    <td>
                        <div id="pq-feb-geo-remarks" style="text-align: center;"></div>
                    </td>


                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-mar-geo-target" oninput="checkDate('pq-mar-geo-target','pq-mar-geo-actual', 'pq-mar-geo-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-mar-geo-actual" oninput="checkDate('pq-mar-geo-target','pq-mar-geo-actual', 'pq-mar-geo-remarks')"></td>
                    <td>
                        <div id="pq-mar-geo-remarks" style="text-align: center;"></div>
                    </td>


                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-apr-geo-target" oninput="checkDate('pq-apr-geo-target','pq-apr-geo-actual', 'pq-apr-geo-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-apr-geo-actual" oninput="checkDate('pq-apr-geo-target','pq-apr-geo-actual', 'pq-apr-geo-remarks')"></td>
                    <td>
                        <div id="pq-apr-geo-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-may-geo-actual" oninput="checkDate('pq-may-geo-target','pq-may-geo-actual', 'pq-may-geo-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-may-geo-target" oninput="checkDate('pq-may-geo-target','pq-may-geo-actual', 'pq-may-geo-remarks')"></td>
                    <td>
                        <div id="pq-may-geo-remarks" style="text-align: center;"></div>
                    </td>


                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-jun-geo-target" oninput="checkDate('pq-jun-geo-target','pq-jun-geo-actual', 'pq-jun-geo-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-jun-geo-actual" oninput="checkDate('pq-jun-geo-target','pq-jun-geo-actual', 'pq-jun-geo-remarks')"></td>
                    <td>
                        <div id="pq-jun-geo-remarks" style="text-align: center;"></div>
                    </td>


                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-jul-geo-actual" oninput="checkDate('pq-jul-geo-target','pq-jul-geo-actual', 'pq-jul-geo-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-jul-geo-target" oninput="checkDate('pq-jul-geo-target','pq-jul-geo-actual', 'pq-jul-geo-remarks')"></td>
                    <td>
                        <div id="pq-jul-geo-remarks" style="text-align: center;"></div>
                    </td>


                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-aug-geo-target" oninput="checkDate('pq-aug-geo-target','pq-aug-geo-actual', 'pq-aug-geo-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-aug-geo-actual" oninput="checkDate('pq-aug-geo-target','pq-aug-geo-actual', 'pq-aug-geo-remarks')"></td>
                    <td>
                        <div id="pq-aug-geo-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-sep-geo-target" oninput="checkDate('pq-sep-geo-target','pq-sep-geo-actual', 'pq-sep-geo-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-sep-geo-actual" oninput="checkDate('pq-sep-geo-target','pq-sep-geo-actual', 'pq-sep-geo-remarks')"></td>
                    <td>
                        <div id="pq-sep-geo-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-oct-geo-target" oninput="checkDate('pq-oct-geo-target', 'pq-oct-geo-actual', 'pq-oct-geo-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-oct-geo-actual" oninput="checkDate('pq-oct-geo-target', 'pq-oct-geo-actual', 'pq-oct-geo-remarks')"></td>
                    <td>
                        <div id="pq-oct-geo-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-nov-geo-target" oninput="checkDate('pq-nov-geo-target', 'pq-nov-geo-actual', 'pq-nov-geo-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-nov-geo-actual" oninput="checkDate('pq-nov-geo-target', 'pq-nov-geo-actual', 'pq-nov-geo-remarks')"></td>
                    <td>
                        <div id="pq-nov-geo-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-dec-geo-target" oninput="checkDate('pq-dec-geo-target', 'pq-dec-geo-actual', 'pq-dec-geo-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-dec-geo-actual" oninput="checkDate('pq-dec-geo-target', 'pq-dec-geo-actual', 'pq-dec-geo-remarks')"></td>
                    <td>
                        <div id="pq-dec-geo-remarks" style="text-align: center;"></div>
                    </td>
                </tr>
                <tr>
                    <td>Observation Report and Re-interview </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-jan-observation-target" oninput="checkDate('pq-jan-observation-target','pq-jan-observation-actual', 'pq-jan-observation-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-jan-observation-actual" oninput="checkDate('pq-jan-observation-target','pq-jan-observation-actual', 'pq-jan-observation-remarks')"></td>
                    <td>
                        <div id="pq-jan-observation-remarks" style="text-align: center;"></div>
                    </td>
                   
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-feb-observation-target" oninput="checkDate('pq-feb-observation-target','pq-feb-observation-actual', 'pq-feb-observation-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-feb-observation-actual" oninput="checkDate('pq-feb-observation-target','pq-feb-observation-actual', 'pq-feb-observation-remarks')"></td>
                    <td>
                        <div id="pq-feb-observation-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-mar-observation-target" oninput="checkDate('pq-mar-observation-target','pq-mar-observation-actual', 'pq-mar-observation-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-mar-observation-actual" oninput="checkDate('pq-mar-observation-target','pq-mar-observation-actual', 'pq-mar-observation-remarks')"></td>
                    <td>
                        <div id="pq-mar-observation-remarks" style="text-align: center;"></div>
                    </td>


                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-apr-observation-target" oninput="checkDate('pq-apr-observation-target','pq-apr-observation-actual', 'pq-apr-observation-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-apr-observation-actual" oninput="checkDate('pq-apr-observation-target','pq-apr-observation-actual', 'pq-apr-observation-remarks')"></td>
                    <td>
                        <div id="pq-apr-observation-remarks" style="text-align: center;"></div>
                    </td>



                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-may-observation-target" oninput="checkDate('pq-may-observation-target','pq-may-observation-actual', 'pq-may-observation-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-may-observation-actual" oninput="checkDate('pq-may-observation-target','pq-may-observation-actual', 'pq-may-observation-remarks')"></td>
                    <td>
                        <div id="pq-may-observation-remarks" style="text-align: center;"></div>
                    </td>



                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-jun-observation-target" oninput="checkDate('pq-jun-observation-target','pq-jun-observation-actual', 'pq-jun-observation-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-jun-observation-actual" oninput="checkDate('pq-jun-observation-target','pq-jun-observation-actual', 'pq-jun-observation-remarks')"></td>
                    <td>
                        <div id="pq-jun-observation-remarks" style="text-align: center;"></div>
                    </td>


                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-jul-observation-target" oninput="checkDate('pq-jul-observation-target','pq-jul-observation-actual', 'pq-jul-observation-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-jul-observation-actual" oninput="checkDate('pq-jul-observation-target','pq-jul-observation-actual', 'pq-jul-observation-remarks')"></td>
                    <td>
                        <div id="pq-jul-observation-remarks" style="text-align: center;"></div>
                    </td>



                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-aug-observation-target" oninput="checkDate('pq-aug-observation-target','pq-aug-observation-actual', 'pq-aug-observation-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-aug-observation-actual" oninput="checkDate('pq-aug-observation-target','pq-aug-observation-actual', 'pq-aug-observation-remarks')"></td>
                    <td>
                        <div id="pq-aug-observation-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-sep-observation-target" oninput="checkDate('pq-sep-observation-target','pq-sep-observation-actual', 'pq-sep-observation-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-sep-observation-actual" oninput="checkDate('pq-sep-observation-target','pq-sep-observation-actual', 'pq-sep-observation-remarks')"></td>
                    <td>
                        <div id="pq-sep-observation-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-oct-observation-target" oninput="checkDate('pq-oct-observation-target','pq-oct-observation-actual', 'pq-oct-observation-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-oct-observation-actual" oninput="checkDate('pq-oct-observation-target','pq-oct-observation-actual', 'pq-oct-observation-remarks')"></td>
                    <td>
                        <div id="pq-oct-observation-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-nov-observation-target" oninput="checkDate('pq-nov-observation-target','pq-nov-observation-actual', 'pq-nov-observation-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-nov-observation-actual" oninput="checkDate('pq-nov-observation-target','pq-nov-observation-actual', 'pq-nov-observation-remarks')"></td>
                    <td>
                        <div id="pq-nov-observation-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-dec-observation-target" oninput="checkDate('pq-dec-observation-target','pq-dec-observation-actual', 'pq-dec-observation-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="pq-dec-observation-actual" oninput="checkDate('pq-dec-observation-target','pq-dec-observation-actual', 'pq-dec-observation-remarks')"></td>
                    <td>
                        <div id="pq-dec-observation-remarks" style="text-align: center;"></div>
                    </td>
                </tr>
                            
            </tbody>
        </table>
    </div>

    <script>
                        // Load data from localStorage on page load
                        window.onload = function() {
                            loadData('pq-jan-res-target', 'pq-jan-res-actual', 'pq-jan-res-remarks');
                            loadData('pq-feb-res-target', 'pq-feb-res-actual', 'pq-feb-res-remarks');
                            loadData('pq-mar-res-target', 'pq-mar-res-actual', 'pq-mar-res-remarks');
                            loadData('pq-apr-res-target', 'pq-apr-res-actual', 'pq-apr-res-remarks');
                            loadData('pq-may-res-target', 'pq-may-res-actual', 'pq-may-res-remarks');
                            loadData('pq-jun-res-target', 'pq-jun-res-actual', 'pq-jun-res-remarks');
                            loadData('pq-jul-res-target', 'pq-jul-res-actual', 'pq-jul-res-remarks');
                            loadData('pq-aug-res-target', 'pq-aug-res-actual', 'pq-aug-res-remarks');
                            loadData('pq-sep-res-target', 'pq-sep-res-actual', 'pq-sep-res-remarks');
                            loadData('pq-oct-res-target', 'pq-oct-res-actual', 'pq-oct-res-remarks');
                            loadData('pq-nov-res-target', 'pq-nov-res-actual', 'pq-nov-res-remarks');
                            loadData('pq-dec-res-target', 'pq-dec-res-actual', 'pq-dec-res-remarks');

                            loadData('pq-jan-raw-target', 'pq-jan-raw-actual', 'pq-jan-raw-remarks');
                            loadData('pq-feb-raw-target', 'pq-feb-raw-actual', 'pq-feb-raw-remarks');
                            loadData('pq-mar-raw-target', 'pq-mar-raw-actual', 'pq-mar-raw-remarks');
                            loadData('pq-apr-raw-target', 'pq-apr-raw-actual', 'pq-apr-raw-remarks');
                            loadData('pq-may-raw-target', 'pq-may-raw-actual', 'pq-may-raw-remarks');
                            loadData('pq-jun-raw-target', 'pq-jun-raw-actual', 'pq-jun-raw-remarks');
                            loadData('pq-jul-raw-target', 'pq-jul-raw-actual', 'pq-jul-raw-remarks');
                            loadData('pq-aug-raw-target', 'pq-aug-raw-actual', 'pq-aug-raw-remarks');
                            loadData('pq-sep-raw-target', 'pq-sep-raw-actual', 'pq-sep-raw-remarks');
                            loadData('pq-oct-raw-target', 'pq-oct-raw-actual', 'pq-oct-raw-remarks');
                            loadData('pq-nov-raw-target', 'pq-nov-raw-actual', 'pq-nov-raw-remarks');
                            loadData('pq-dec-raw-target', 'pq-dec-raw-actual', 'pq-dec-raw-remarks');

                            loadData('pq-jan-clean-target', 'pq-jan-clean-actual', 'pq-jan-clean-remarks');
                            loadData('pq-feb-clean-target', 'pq-feb-clean-actual', 'pq-feb-clean-remarks');
                            loadData('pq-mar-clean-target', 'pq-mar-clean-actual', 'pq-mar-clean-remarks');
                            loadData('pq-apr-clean-target', 'pq-apr-clean-actual', 'pq-apr-clean-remarks');
                            loadData('pq-may-clean-target', 'pq-may-clean-actual', 'pq-may-clean-remarks');
                            loadData('pq-jun-clean-target', 'pq-jun-clean-actual', 'pq-jun-clean-remarks');
                            loadData('pq-jul-clean-target', 'pq-jul-clean-actual', 'pq-jul-clean-remarks');
                            loadData('pq-aug-clean-target', 'pq-aug-clean-actual', 'pq-aug-clean-remarks');
                            loadData('pq-sep-clean-target', 'pq-sep-clean-actual', 'pq-sep-clean-remarks');
                            loadData('pq-oct-clean-target', 'pq-oct-clean-actual', 'pq-oct-clean-remarks');
                            loadData('pq-nov-clean-target', 'pq-nov-clean-actual', 'pq-nov-clean-remarks');
                            loadData('pq-dec-clean-target', 'pq-dec-clean-actual', 'pq-dec-clean-remarks');

                            loadData('pq-jan-narrative-target', 'pq-jan-narrative-actual', 'pq-jan-narrative-remarks');
                            loadData('pq-feb-narrative-target', 'pq-feb-narrative-actual', 'pq-feb-narrative-remarks');
                            loadData('pq-mar-narrative-target', 'pq-mar-narrative-actual', 'pq-mar-narrative-remarks');
                            loadData('pq-apr-narrative-target', 'pq-apr-narrative-actual', 'pq-apr-narrative-remarks');
                            loadData('pq-may-narrative-target', 'pq-may-narrative-actual', 'pq-may-narrative-remarks');
                            loadData('pq-jun-narrative-target', 'pq-jun-narrative-actual', 'pq-jun-narrative-remarks');
                            loadData('pq-jul-narrative-target', 'pq-jul-narrative-actual', 'pq-jul-narrative-remarks');
                            loadData('pq-aug-narrative-target', 'pq-aug-narrative-actual', 'pq-aug-narrative-remarks');
                            loadData('pq-sep-narrative-target', 'pq-sep-narrative-actual', 'pq-sep-narrative-remarks');
                            loadData('pq-oct-narrative-target', 'pq-oct-narrative-actual', 'pq-oct-narrative-remarks');
                            loadData('pq-nov-narrative-target', 'pq-nov-narrative-actual', 'pq-nov-narrative-remarks');
                            loadData('pq-dec-narrative-target', 'pq-dec-narrative-actual', 'pq-dec-narrative-remarks');

                            loadData('pq-jan-financial-target', 'pq-jan-financial-actual', 'pq-jan-financial-remarks');
                            loadData('pq-feb-financial-target', 'pq-feb-financial-actual', 'pq-feb-financial-remarks');
                            loadData('pq-mar-financial-target', 'pq-mar-financial-actual', 'pq-mar-financial-remarks');
                            loadData('pq-apr-financial-target', 'pq-apr-financial-actual', 'pq-apr-financial-remarks');
                            loadData('pq-may-financial-target', 'pq-may-financial-actual', 'pq-may-financial-remarks');
                            loadData('pq-jun-financial-target', 'pq-jun-financial-actual', 'pq-jun-financial-remarks');
                            loadData('pq-jul-financial-target', 'pq-jul-financial-actual', 'pq-jul-financial-remarks');
                            loadData('pq-aug-financial-target', 'pq-aug-financial-actual', 'pq-aug-financial-remarks');
                            loadData('pq-sep-financial-target', 'pq-sep-financial-actual', 'pq-sep-financial-remarks');
                            loadData('pq-oct-financial-target', 'pq-oct-financial-actual', 'pq-oct-financial-remarks');
                            loadData('pq-nov-financial-target', 'pq-nov-financial-actual', 'pq-nov-financial-remarks');
                            loadData('pq-dec-financial-target', 'pq-dec-financial-actual', 'pq-dec-financial-remarks');

                            loadData('pq-jan-geo-target', 'pq-jan-geo-actual', 'pq-jan-geo-remarks');
                            loadData('pq-feb-geo-target', 'pq-feb-geo-actual', 'pq-feb-geo-remarks');
                            loadData('pq-mar-geo-target', 'pq-mar-geo-actual', 'pq-mar-geo-remarks');
                            loadData('pq-apr-geo-target', 'pq-apr-geo-actual', 'pq-apr-geo-remarks');
                            loadData('pq-may-geo-target', 'pq-may-geo-actual', 'pq-may-geo-remarks');
                            loadData('pq-jun-geo-target', 'pq-jun-geo-actual', 'pq-jun-geo-remarks');
                            loadData('pq-jul-geo-target', 'pq-jul-geo-actual', 'pq-jul-geo-remarks');
                            loadData('pq-aug-geo-target', 'pq-aug-geo-actual', 'pq-aug-geo-remarks');
                            loadData('pq-sep-geo-target', 'pq-sep-geo-actual', 'pq-sep-geo-remarks');
                            loadData('pq-oct-geo-target', 'pq-oct-geo-actual', 'pq-oct-geo-remarks');
                            loadData('pq-nov-geo-target', 'pq-nov-geo-actual', 'pq-nov-geo-remarks');
                            loadData('pq-dec-geo-target', 'pq-dec-geo-actual', 'pq-dec-geo-remarks');

                            loadData('pq-jan-observation-target', 'pq-jan-observation-actual', 'pq-jan-observation-remarks');
                            loadData('pq-feb-observation-target', 'pq-feb-observation-actual', 'pq-feb-observation-remarks');
                            loadData('pq-mar-observation-target', 'pq-feb-observation-actual', 'pq-mar-observation-remarks');
                            loadData('pq-apr-observation-target', 'pq-apr-observation-actual', 'pq-apr-observation-remarks');
                            loadData('pq-may-observation-target', 'pq-may-observation-actual', 'pq-may-observation-remarks');
                            loadData('pq-jun-observation-target', 'pq-jun-observation-actual', 'pq-jun-observation-remarks');
                            loadData('pq-jul-observation-target', 'pq-jul-observation-actual', 'pq-jul-observation-remarks');
                            loadData('pq-aug-observation-target', 'pq-aug-observation-actual', 'pq-aug-observation-remarks');
                            loadData('pq-sep-observation-target', 'pq-sep-observation-actual', 'pq-sep-observation-remarks');
                            loadData('pq-oct-observation-target', 'pq-oct-observation-actual', 'pq-oct-observation-remarks');
                            loadData('pq-nov-observation-target', 'pq-nov-observation-actual', 'pq-nov-observation-remarks');
                            loadData('pq-dec-observation-target', 'pq-dec-observation-actual', 'pq-dec-observation-remarks');
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

<div class="chart-container">
        <canvas id="pqChart"></canvas>
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
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
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
                        text: `Parañaque City Response Rate Performance Data`,
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

    createChart('pq', 'pqChart');
</script>


</body>

</html>