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

            .logo-text {
                font-size: 16px;
            }
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
        <a style="background-color: cadetblue; color:white; font-weight: bolder; padding:5px" href="laspiñas_graph.php" class="btn btn-primary active">LAS PIÑAS CITY</a>
    </div>
    <br>
    <div>
        <a style="background-color: #0A414F; color:white; font-weight:bolder; padding:5px" href="Muntinlupa_graph.php" class="btn btn-primary">MUNTINLUPA CITY</a>
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
    <h2 style="text-align:center;">LAS PIÑAS CITY</h2>
    <!-- City Section for Las Piñas -->
    <div class="city-header" style="font-weight: bolder; background-color:darkgoldenrod;">LABOR FORCE SURVEY</div>
    <div>
        <a style="background-color:#0A414F; color:white; border-radius:7px; font-weight: bolder; padding:5px" href="progress.php" class="btn btn-primary active">SELECT PROJECT</a>
    </div>
    <div class="city-section" id="laspinas-section">

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
                    <th style="color: white;">Reamarks</th>
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
            <style>
                .Happy-Face {
                    max-width: 45px;
                    max-height: 45px;
                }

                .image-size {
                    width: 45px;
                    height: 45px;
                    vertical-align: middle;
                }
            </style>
            <tbody>
                <!-- Repeat for each category -->
                <tr>
                    <td style="font-weight: bolder;">Response Rate</td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="lfslp-jan-res-target" oninput="checkValues('lfslp-jan-res-target', 'lfslp-jan-res-actual', 'lfslp-jan-res-remarks')" onchange="updateChart('lfslp')">
                    </td>
                    <td>
                        <input type="mumber" style="border: white; text-align:center;" id="lfslp-jan-res-actual" oninput="checkValues('lfslp-jan-res-target', 'lfslp-jan-res-actual', 'lfslp-jan-res-remarks')" onchange="updateChart('lfslp')">
                    </td>
                    <td>
                        <div id="lfslp-jan-res-remarks"></div>
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center;" id="lfslp-feb-res-target" oninput="checkValues('lfslp-feb-res-target', 'lfslp-feb-res-actual', 'lfslp-feb-res-remarks')" onchange="updateChart('lfslp')">
                    </td>
                    <td>
                        <input type="mumber" style="border: white; text-align:center;" id="lfslp-feb-res-actual" oninput="checkValues('lfslp-feb-res-target', 'lfslp-feb-res-actual', 'lfslp-feb-res-remarks')" onchange="updateChart('lfslp')">
                    </td>
                    <td>
                        <div id="lfslp-feb-res-remarks"></div>
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="lfslp-mar-res-target" oninput="checkValues('lfslp-mar-res-target', 'lfslp-mar-res-actual', 'lfslp-mar-res-remarks')" onchange="updateChart('lfslp')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="lfslp-mar-res-actual" oninput="checkValues('lfslp-mar-res-target', 'lfslp-mar-res-actual', 'lfslp-mar-res-remarks')" onchange="updateChart('lfslp')">
                    </td>
                    <td>
                        <div id="lfslp-mar-res-remarks"></div>
                    </td>





                    <td>
                        <input type="number" style="border: white; text-align:center;" id="lfslp-apr-res-target" oninput="checkValues('lfslp-apr-res-target', 'lfslp-apr-res-actual', 'lfslp-apr-res-remarks')" onchange="updateChart('lfslp')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="lfslp-apr-res-actual" oninput="checkValues('lfslp-apr-res-target', 'lfslp-apr-res-actual', 'lfslp-apr-res-remarks')" onchange="updateChart('lfslp')">
                    </td>
                    <td>
                        <div id="lfslp-apr-res-remarks"></div>
                    </td>



                    <td>
                        <input type="number" style="border: white; text-align:center;" id="lfslp-may-res-target" oninput="checkValues('lfslp-may-res-target', 'lfslp-may-res-actual', 'lfslp-may-res-remarks')" onchange="updateChart('lfslp')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="lfslp-may-res-actual" oninput="checkValues('lfslp-may-res-target', 'lfslp-may-res-actual', 'lfslp-may-res-remarks')" onchange="updateChart('lfslp')">
                    </td>
                    <td>
                        <div id="lfslp-may-res-remarks"></div>
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center;" id="lfslp-jun-res-target" oninput="checkValues('lfslp-jun-res-target', 'lfslp-jun-res-actual', 'lfslp-jun-res-remarks')" onchange="updateChart('lfslp')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="lfslp-jun-res-actual" oninput="checkValues('lfslp-jun-res-target', 'lfslp-jun-res-actual', 'lfslp-jun-res-remarks')" onchange="updateChart('lfslp')">
                    </td>
                    <td>
                        <div id="lfslp-jun-res-remarks"></div>
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center;" id="lfslp-jul-res-target" oninput="checkValues('lfslp-jul-res-target', 'lfslp-jul-res-actual', 'lfslp-jul-res-remarks')" onchange="updateChart('lfslp')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="lfslp-jul-res-actual" oninput="checkValues('lfslp-jul-res-target', 'lfslp-jul-res-actual', 'lfslp-jul-res-remarks')" onchange="updateChart('lfslp')">
                    </td>
                    <td>
                        <div id="lfslp-jul-res-remarks"></div>
                    </td>



                    <td>
                        <input type="number" style="border: white; text-align:center;" id="lfslp-aug-res-target" oninput="checkValues('lfslp-aug-res-target', 'lfslp-aug-res-actual', 'lfslp-aug-res-remarks')" onchange="updateChart('lfslp')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="lfslp-aug-res-actual" oninput="checkValues('lfslp-aug-res-target', 'lfslp-aug-res-actual', 'lfslp-aug-res-remarks')" onchange="updateChart('lfslp')">
                    </td>
                    <td>
                        <div id="lfslp-aug-res-remarks"></div>
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="lfslp-sep-res-target" oninput="checkValues('lfslp-sep-res-target', 'lfslp-sep-res-actual', 'lfslp-sep-res-remarks')" onchange="updateChart('lfslp')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="lfslp-sep-res-actual" oninput="checkValues('lfslp-sep-res-target', 'lfslp-sep-res-actual', 'lfslp-sep-res-remarks')" onchange="updateChart('lfslp')">
                    </td>
                    <td>
                        <div id="lfslp-sep-res-remarks"></div>
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="lfslp-oct-res-target" oninput="checkValues('lfslp-oct-res-target', 'lfslp-oct-res-actual', 'lfslp-oct-res-remarks')" onchange="updateChart('lfslp')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="lfslp-oct-res-actual" oninput="checkValues('lfslp-oct-res-target', 'lfslp-oct-res-actual', 'lfslp-oct-res-remarks')" onchange="updateChart('lfslp')">
                    </td>
                    <td>
                        <div id="lfslp-oct-res-remarks"></div>
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="lfslp-nov-res-target" oninput="checkValues('lfslp-nov-res-target', 'lfslp-nov-res-actual', 'lfslp-nov-res-remarks')" onchange="updateChart('lfslp')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="lfslp-nov-res-actual" oninput="checkValues('lfslp-nov-res-target', 'lfslp-nov-res-actual', 'lfslp-nov-res-remarks')" onchange="updateChart('lfslp')">
                    </td>
                    <td>
                        <div id="lfslp-nov-res-remarks"></div>
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center;" id="lfslp-dec-res-target" oninput="checkValues('lfslp-dec-res-target', 'lfslp-dec-res-actual', 'lfslp-dec-res-remarks')" onchange="updateChart('lfslp')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="lfslp-dec-res-actual" oninput="checkValues('lfslp-dec-res-target', 'lfslp-dec-res-actual', 'lfslp-dec-res-remarks')" onchange="updateChart('lfslp')">
                    </td>
                    <td>
                        <div id="lfslp-dec-res-remarks"></div>
                    </td>
                </tr>
                <tr>
                    <td>Raw datafile</td>
                    <td>
                        <input type="date" style="border: white; text-align:center;" id="lp-jan-raw-target" oninput="checkDate('lp-jan-raw-target', 'lp-jan-raw-actual', 'lp-jan-raw-remarks')">
                    </td>
                    <td>
                        <input type="date" style="border: white; text-align:center;" id="lp-jan-raw-actual" oninput="checkDate('lp-jan-raw-target', 'lp-jan-raw-actual', 'lp-jan-raw-remarks')">
                    </td>
                    <td>
                        <div id="lp-jan-raw-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-feb-raw-target" oninput="checkDate('lp-feb-raw-target', 'lp-feb-raw-actual', 'lp-feb-raw-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-feb-raw-actual" oninput="checkDate('lp-feb-raw-target', 'lp-feb-raw-actual','lp-feb-raw-remarks')"></td>
                    <td>
                        <div id="lp-feb-raw-remarks" style="text-align: center;"></div>
                    </td>


                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-mar-raw-target" oninput="checkDate('lp-mar-raw-target', 'lp-mar-raw-actual', 'lp-mar-raw-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-mar-raw-actual" oninput="checkDate('lp-mar-raw-target', 'lp-mar-raw-actual', 'lp-mar-raw-remarks')"></td>
                    <td>
                        <div id="lp-mar-raw-remarks" style="text-align: center;"></div>
                    </td>



                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-apr-raw-target" oninput="checkDate('lp-apr-raw-target', 'lp-apr-raw-actual', 'lp-apr-raw-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-apr-raw-actual" oninput="checkDate('lp-apr-raw-target', 'lp-apr-raw-actual', 'lp-apr-raw-remarks')"></td>
                    <td>
                        <div id="lp-apr-raw-remarks" style="text-align: center;"></div>
                    </td>


                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-may-raw-target" oninput="checkDate('lp-may-raw-target', 'lp-may-raw-actual', 'lp-may-raw-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-may-raw-actual" oninput="checkDate('lp-may-raw-target', 'lp-may-raw-actual', 'lp-may-raw-remarks')"></td>
                    <td>
                        <div id="lp-may-raw-remarks" style="text-align: center;"></div>
                    </td>



                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-jun-raw-target" oninput="checkDate('lp-jun-raw-target', 'lp-jun-raw-actual', 'lp-jun-raw-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-jun-raw-actual" oninput="checkDate('lp-jun-raw-target', 'lp-jun-raw-actual', 'lp-jun-raw-remarks')"></td>
                    <td>
                        <div id="lp-jun-raw-remarks" style="text-align: center;"></div>
                    </td>



                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-jul-raw-target" oninput="checkDate('lp-jul-raw-target', 'lp-jul-raw-actual', 'lp-jul-raw-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-jul-raw-actual" oninput="checkDate('lp-jul-raw-target', 'lp-jul-raw-actual', 'lp-jul-raw-remarks')"></td>
                    <td>
                        <div id="lp-jul-raw-remarks" style="text-align: center;"></div>
                    </td>



                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-aug-raw-target" oninput="checkDate('lp-aug-raw-target', 'lp-aug-raw-actual', 'lp-aug-raw-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-aug-raw-actual" oninput="checkDate('lp-aug-raw-target', 'lp-aug-raw-actual', 'lp-aug-raw-remarks')"></td>
                    <td>
                        <div id="lp-aug-raw-remarks" style="text-align: center;"></div>
                    </td>



                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-sep-raw-target" oninput="checkDate('lp-sep-raw-target', 'lp-sep-raw-actual', 'lp-sep-raw-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-sep-raw-actual" oninput="checkDate('lp-sep-raw-target', 'lp-sep-raw-actual', 'lp-sep-raw-remarks')"></td>
                    <td>
                        <div id="lp-sep-raw-remarks" style="text-align: center;"></div>
                    </td>





                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-oct-raw-target" oninput="checkDate('lp-oct-raw-target', 'lp-oct-raw-actual', 'lp-oct-raw-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-oct-raw-actual" oninput="checkDate('lp-oct-raw-target', 'lp-oct-raw-actual', 'lp-oct-raw-remarks')"></td>
                    <td>
                        <div id="lp-oct-raw-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-nov-raw-target" oninput="checkDate('lp-nov-raw-target', 'lp-nov-raw-actual', 'lp-nov-raw-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-nov-raw-actual" oninput="checkDate('lp-nov-raw-target', 'lp-nov-raw-actual', 'lp-nov-raw-remarks')"></td>
                    <td>
                        <div id="lp-nov-raw-remarks" style="text-align: center;"></div>
                    </td>


                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-dec-raw-target" oninput="checkDate('lp-dec-raw-target', 'lp-dec-raw-actual', 'lp-dec-raw-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-dec-raw-actual" oninput="checkDate('lp-dec-raw-target', 'lp-dec-raw-actual', 'lp-dec-raw-remarks')"></td>
                    <td>
                        <div id="lp-dec-raw-remarks" style="text-align: center;"></div>
                    </td>



                </tr>
                <tr>
                    <td>Clean datafile</td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-jan-clean-target" oninput="checkDate('lp-jan-clean-target', 'lp-jan-clean-actual', 'lp-jan-clean-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-jan-clean-actual" oninput="checkDate('lp-jan-clean-target', 'lp-jan-clean-actual', 'lp-jan-clean-remarks')"></td>
                    <td>
                        <div id="lp-jan-clean-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-feb-clean-target" oninput="checkDate('lp-feb-clean-target', 'lp-feb-clean-actual', 'lp-feb-clean-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-feb-clean-actual" oninput="checkDate('lp-feb-clean-target', 'lp-feb-clean-actual', 'lp-feb-clean-remarks')"></td>
                    <td>
                        <div id="lp-feb-clean-remarks" style="text-align: center;"></div>
                    </td>


                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-mar-clean-target" oninput="checkDate('lp-mar-clean-target', 'lp-mar-clean-actual', 'lp-mar-clean-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-mar-clean-actual" oninput="checkDate('lp-mar-clean-target', 'lp-mar-clean-actual', 'lp-mar-clean-remarks')"></td>
                    <td>
                        <div id="lp-mar-clean-remarks" style="text-align: center;"></div>
                    </td>



                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-apr-clean-target" oninput="checkDate('lp-apr-clean-target', 'lp-apr-clean-actual', 'lp-apr-clean-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-apr-clean-actual" oninput="checkDate('lp-apr-clean-target', 'lp-apr-clean-actual', 'lp-apr-clean-remarks')"></td>
                    <td>
                        <div id="lp-apr-clean-remarks" style="text-align: center;"></div>
                    </td>


                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-may-clean-target" oninput="checkDate('lp-may-clean-target', 'lp-may-clean-actual', 'lp-may-clean-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-may-clean-actual" oninput="checkDate('lp-may-clean-target', 'lp-may-clean-actual', 'lp-may-clean-remarks')"></td>
                    <td>
                        <div id="lp-may-clean-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-jun-clean-target" oninput="checkDate('lp-jun-clean-target', 'lp-jun-clean-actual', 'lp-jun-clean-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-jun-clean-actual" oninput="checkDate('lp-jun-clean-target', 'lp-jun-clean-actual', 'lp-jun-clean-remarks')"></td>
                    <td>
                        <div id="lp-jun-clean-remarks" style="text-align: center;"></div>
                    </td>


                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-jul-clean-target" oninput="checkDate('lp-jul-clean-target', 'lp-jul-clean-actual', 'lp-jul-clean-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-jul-clean-actual" oninput="checkDate('lp-jul-clean-target', 'lp-jul-clean-actual', 'lp-jul-clean-remarks')"></td>
                    <td>
                        <div id="lp-jul-clean-remarks" style="text-align: center;"></div>
                    </td>



                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-aug-clean-target" oninput="checkDate('lp-aug-clean-target', 'lp-aug-clean-actual', 'lp-aug-clean-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-aug-clean-actual" oninput="checkDate('lp-aug-clean-target', 'lp-aug-clean-actual', 'lp-aug-clean-remarks')"></td>
                    <td>
                        <div id="lp-aug-clean-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-sep-clean-target" oninput="checkDate('lp-sep-clean-target', 'lp-sep-clean-actual', 'lp-sep-clean-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-sep-clean-actual" oninput="checkDate('lp-sep-clean-target', 'lp-sep-clean-actual', 'lp-sep-clean-remarks')"></td>
                    <td>
                        <div id="lp-sep-clean-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-oct-clean-target" oninput="checkDate('lp-oct-clean-target', 'lp-oct-clean-actual', 'lp-oct-clean-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-oct-clean-actual" oninput="checkDate('lp-oct-clean-target', 'lp-oct-clean-actual', 'lp-oct-clean-remarks')"></td>
                    <td>
                        <div id="lp-oct-clean-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-nov-clean-target" oninput="checkDate('lp-nov-clean-target', 'lp-nov-clean-actual', 'lp-nov-clean-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-nov-clean-actual" oninput="checkDate('lp-nov-clean-target', 'lp-nov-clean-actual', 'lp-nov-clean-remarks')"></td>
                    <td>
                        <div id="lp-nov-clean-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-dec-clean-target" oninput="checkDate('lp-dec-clean-target', 'lp-dec-clean-actual', 'lp-dec-clean-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-dec-clean-actual" oninput="checkDate('lp-dec-clean-target', 'lp-dec-clean-actual', 'lp-dec-clean-remarks')"></td>
                    <td>
                        <div id="lp-dec-clean-remarks" style="text-align: center;"></div>
                    </td>
                </tr>


                <tr>
                    <td>Narrative Report</td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-jan-narrative-target" oninput="checkDate('lp-jan-narrative-target', 'lp-jan-narrative-actual', 'lp-jan-narrative-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-jan-narrative-actual" oninput="checkDate('lp-jan-narrative-target', 'lp-jan-narrative-actual', 'lp-jan-narrative-remarks')"></td>
                    <td>
                        <div id="lp-jan-narrative-remarks" style="text-align: center;"></div>
                    </td>





                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-feb-narrative-target" oninput="checkDate('lp-feb-narrative-target','lp-feb-narrative-actual', 'lp-feb-narrative-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-feb-narrative-actual" oninput="checkDate('lp-feb-narrative-target','lp-feb-narrative-actual', 'lp-feb-narrative-remarks')"></td>
                    <td>
                        <div id="lp-feb-narrative-remarks" style="text-align: center;"></div>
                    </td>




                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-mar-narrative-target" oninput="checkDate('lp-mar-narrative-target','lp-mar-narrative-actual', 'lp-mar-narrative-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-mar-narrative-actual" oninput="checkDate('lp-mar-narrative-target','lp-mar-narrative-actual', 'lp-mar-narrative-remarks')"></td>
                    <td>
                        <div id="lp-mar-narrative-remarks" style="text-align: center;"></div>
                    </td>



                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-apr-narrative-target" oninput="checkDate('lp-apr-narrative-target','lp-apr-narrative-actual', 'lp-apr-narrative-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-apr-narrative-actual" oninput="checkDate('lp-apr-narrative-target','lp-apr-narrative-actual', 'lp-apr-narrative-remarks')"></td>
                    <td>
                        <div id="lp-apr-narrative-remarks" style="text-align: center;"></div>
                    </td>


                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-may-narrative-target" oninput="checkDate('lp-may-narrative-target','lp-may-narrative-actual', 'lp-may-narrative-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-may-narrative-actual" oninput="checkDate('lp-may-narrative-target','lp-may-narrative-actual', 'lp-may-narrative-remarks')"></td>
                    <td>
                        <div id="lp-may-narrative-remarks" style="text-align: center;"></div>
                    </td>


                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-jun-narrative-target" oninput="checkDate('lp-jun-narrative-target','lp-jun-narrative-actual', 'lp-jun-narrative-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-jun-narrative-actual" oninput="checkDate('lp-jun-narrative-target','lp-jun-narrative-actual', 'lp-jun-narrative-remarks')"></td>

                    <td>
                        <div id="lp-jun-narrative-remarks" style="text-align: center;"></div>
                    </td>



                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-jul-narrative-target" oninput="checkDate('lp-jul-narrative-target','lp-jul-narrative-actual', 'lp-jul-narrative-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-jul-narrative-actual" oninput="checkDate('lp-jul-narrative-target','lp-jul-narrative-actual', 'lp-jul-narrative-remarks')"></td>
                    <td>
                        <div id="lp-jul-narrative-remarks" style="text-align: center;"></div>
                    </td>


                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-aug-narrative-target" oninput="checkDate('lp-aug-narrative-target','lp-aug-narrative-actual', 'lp-aug-narrative-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-aug-narrative-actual" oninput="checkDate('lp-aug-narrative-target','lp-aug-narrative-actual', 'lp-aug-narrative-remarks')"></td>
                    <td>
                        <div id="lp-aug-narrative-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-sep-narrative-target" oninput="checkDate('lp-sep-narrative-target','lp-sep-narrative-actual', 'lp-sep-narrative-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-sep-narrative-actual" oninput="checkDate('lp-sep-narrative-target','lp-sep-narrative-actual', 'lp-sep-narrative-remarks')"></td>
                    <td>
                        <div id="lp-sep-narrative-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-oct-narrative-target" oninput="checkDate('lp-oct-narrative-target', 'lp-oct-narrative-actual', 'lp-oct-narrative-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-oct-narrative-actual" oninput="checkDate('lp-oct-narrative-target', 'lp-oct-narrative-actual', 'lp-oct-narrative-remarks')"></td>
                    <td>
                        <div id="lp-oct-narrative-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-nov-narrative-target" oninput="checkDate('lp-nov-narrative-target', 'lp-nov-narrative-actual', 'lp-nov-narrative-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-nov-narrative-actual" oninput="checkDate('lp-nov-narrative-target', 'lp-nov-narrative-actual', 'lp-nov-narrative-remarks')"></td>
                    <td>
                        <div id="lp-nov-narrative-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-dec-narrative-target" oninput="checkDate('lp-dec-narrative-target', 'lp-dec-narrative-actual', 'lp-dec-narrative-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-dec-narrative-actual" oninput="checkDate('lp-dec-narrative-target', 'lp-dec-narrative-actual', 'lp-dec-narrative-remarks')"></td>
                    <td>
                        <div id="lp-dec-narrative-remarks" style="text-align: center;"></div>
                    </td>
                </tr>


                <tr>
                    <td>Financial Report</td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-jan-financial-target" oninput="checkDate('lp-jan-financial-target','lp-jan-financial-actual', 'lp-jan-financial-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-jan-financial-actual" oninput="checkDate('lp-jan-financial-target','lp-jan-financial-actual', 'lp-jan-financial-remarks')"></td>
                    <td>
                        <div id="lp-jan-financial-remarks" style="text-align: center;"></div>
                    </td>



                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-feb-financial-target" oninput="checkDate('lp-feb-financial-target','lp-feb-financial-actual', 'lp-feb-financial-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-feb-financial-actual" oninput="checkDate('lp-feb-financial-target','lp-feb-financial-actual', 'lp-feb-financial-remarks')"></td>
                    <td>
                        <div id="lp-feb-financial-remarks" style="text-align: center;"></div>
                    </td>


                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-mar-financial-target" oninput="checkDate('lp-mar-financial-target','lp-mar-financial-actual', 'lp-mar-financial-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-mar-financial-actual" oninput="checkDate('lp-mar-financial-target','lp-mar-financial-actual', 'lp-mar-financial-remarks')"></td>
                    <td>
                        <div id="lp-mar-financial-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-apr-financial-target" oninput="checkDate('lp-apr-financial-target','lp-apr-financial-actual', 'lp-apr-financial-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-apr-financial-actual" oninput="checkDate('lp-apr-financial-target','lp-apr-financial-actual', 'lp-apr-financial-remarks')"></td>
                    <td>
                        <div id="lp-apr-financial-remarks" style="text-align: center;"></div>
                    </td>


                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-may-financial-target" oninput="checkDate('lp-may-financial-target','lp-may-financial-actual', 'lp-may-financial-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-may-financial-actual" oninput="checkDate('lp-may-financial-target','lp-may-financial-actual', 'lp-may-financial-remarks')"></td>
                    <td>
                        <div id="lp-may-financial-remarks" style="text-align: center;"></div>
                    </td>


                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-jun-financial-target" oninput="checkDate('lp-jun-financial-target','lp-jun-financial-actual', 'lp-jun-financial-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-jun-financial-actual" oninput="checkDate('lp-jun-financial-target','lp-jun-financial-actual', 'lp-jun-financial-remarks')"></td>
                    <td>
                        <div id="lp-jun-financial-remarks" style="text-align: center;"></div>
                    </td>



                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-jul-financial-target" oninput="checkDate('lp-jul-financial-target','lp-jul-financial-actual', 'lp-jul-financial-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-jul-financial-actual" oninput="checkDate('lp-jul-financial-target','lp-jul-financial-actual', 'lp-jul-financial-remarks')"></td>
                    </td>

                    <td>
                        <div id="lp-jul-financial-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-aug-financial-target" oninput="checkDate('lp-aug-financial-target','lp-aug-financial-actual', 'lp-aug-financial-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-aug-financial-actual" oninput="checkDate('lp-aug-financial-target','lp-aug-financial-actual', 'lp-aug-financial-remarks')"></td>
                    <td>
                        <div id="lp-aug-financial-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-sep-financial-target" oninput="checkDate('lp-sep-financial-target','lp-sep-financial-actual', 'lp-sep-financial-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-sep-financial-actual" oninput="checkDate('lp-sep-financial-target','lp-sep-financial-actual', 'lp-sep-financial-remarks')"></td>
                    <td>
                        <div id="lp-sep-financial-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-oct-financial-target" oninput="checkDate('lp-oct-financial-target', 'lp-oct-financial-actual', 'lp-oct-financial-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-oct-financial-actual" oninput="checkDate('lp-oct-financial-target', 'lp-oct-financial-actual', 'lp-oct-financial-remarks')"></td>
                    <td>
                        <div id="lp-oct-financial-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-nov-financial-target" oninput="checkDate('lp-nov-financial-target', 'lp-nov-financial-actual', 'lp-nov-financial-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-nov-financial-actual" oninput="checkDate('lp-nov-financial-target', 'lp-nov-financial-actual', 'lp-nov-financial-remarks')"></td>
                    <td>
                        <div id="lp-nov-financial-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-dec-financial-target" oninput="checkDate('lp-dec-financial-target', 'lp-dec-financial-actual', 'lp-dec-financial-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-dec-financial-actual" oninput="checkDate('lp-dec-financial-target', 'lp-dec-financial-actual', 'lp-dec-financial-remarks')"></td>
                    <td>
                        <div id="lp-dec-financial-remarks" style="text-align: center;"></div>
                    </td>
                </tr>
                <tr>
                    <td>Updated GEO-MS</td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-jan-geo-target" oninput="checkDate('lp-jan-geo-target','lp-jan-geo-actual', 'lp-jan-geo-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-jan-geo-actual" oninput="checkDate('lp-jan-geo-target','lp-jan-geo-actual', 'lp-jan-geo-remarks')"></td>
                    <td>
                        <div id="lp-jan-geo-remarks" style="text-align: center;"></div>
                    </td>




                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-feb-geo-target" oninput="checkDate('lp-feb-geo-target','lp-feb-geo-actual', 'lp-feb-geo-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-feb-geo-actual" oninput="checkDate('lp-feb-geo-target','lp-feb-geo-actual', 'lp-feb-geo-remarks')"></td>
                    <td>
                        <div id="lp-feb-geo-remarks" style="text-align: center;"></div>
                    </td>


                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-mar-geo-target" oninput="checkDate('lp-mar-geo-target','lp-mar-geo-actual', 'lp-mar-geo-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-mar-geo-actual" oninput="checkDate('lp-mar-geo-target','lp-mar-geo-actual', 'lp-mar-geo-remarks')"></td>
                    <td>
                        <div id="lp-mar-geo-remarks" style="text-align: center;"></div>
                    </td>



                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-apr-geo-target" oninput="checkDate('lp-apr-geo-target','lp-apr-geo-actual', 'lp-apr-geo-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-apr-geo-actual" oninput="checkDate('lp-apr-geo-target','lp-apr-geo-actual', 'lp-apr-geo-remarks')"></td>
                    <td>
                        <div id="lp-apr-geo-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-may-geo-actual" oninput="checkDate('lp-may-geo-target','lp-may-geo-actual', 'lp-may-geo-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-may-geo-target" oninput="checkDate('lp-may-geo-target','lp-may-geo-actual', 'lp-may-geo-remarks')"></td>
                    <td>
                        <div id="lp-may-geo-remarks" style="text-align: center;"></div>
                    </td>



                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-jun-geo-target" oninput="checkDate('lp-jun-geo-target','lp-jun-geo-actual', 'lp-jun-geo-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-jun-geo-actual" oninput="checkDate('lp-jun-geo-target','lp-jun-geo-actual', 'lp-jun-geo-remarks')"></td>
                    <td>
                        <div id="lp-jun-geo-remarks" style="text-align: center;"></div>
                    </td>




                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-jul-geo-actual" oninput="checkDate('lp-jul-geo-target','lp-jul-geo-actual', 'lp-jul-geo-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-jul-geo-target" oninput="checkDate('lp-jul-geo-target','lp-jul-geo-actual', 'lp-jul-geo-remarks')"></td>
                    <td>
                        <div id="lp-jul-geo-remarks" style="text-align: center;"></div>
                    </td>



                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-aug-geo-target" oninput="checkDate('lp-aug-geo-target','lp-aug-geo-actual', 'lp-aug-geo-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-aug-geo-actual" oninput="checkDate('lp-aug-geo-target','lp-aug-geo-actual', 'lp-aug-geo-remarks')"></td>
                    <td>
                        <div id="lp-aug-geo-remarks" style="text-align: center;"></div>
                    </td>



                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-sep-geo-target" oninput="checkDate('lp-sep-geo-target','lp-sep-geo-actual', 'lp-sep-geo-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-sep-geo-actual" oninput="checkDate('lp-sep-geo-target','lp-sep-geo-actual', 'lp-sep-geo-remarks')"></td>
                    <td>
                        <div id="lp-sep-geo-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-oct-geo-target" oninput="checkDate('lp-oct-geo-target', 'lp-oct-geo-actual', 'lp-oct-geo-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-oct-geo-actual" oninput="checkDate('lp-oct-geo-target', 'lp-oct-geo-actual', 'lp-oct-geo-remarks')"></td>
                    <td>
                        <div id="lp-oct-geo-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-nov-geo-target" oninput="checkDate('lp-nov-geo-target', 'lp-nov-geo-actual', 'lp-nov-geo-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-nov-geo-actual" oninput="checkDate('lp-nov-geo-target', 'lp-nov-geo-actual', 'lp-nov-geo-remarks')"></td>
                    <td>
                        <div id="lp-nov-geo-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-dec-geo-target" oninput="checkDate('lp-dec-geo-target', 'lp-dec-geo-actual', 'lp-dec-geo-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-dec-geo-actual" oninput="checkDate('lp-dec-geo-target', 'lp-dec-geo-actual', 'lp-dec-geo-remarks')"></td>
                    <td>
                        <div id="lp-dec-geo-remarks" style="text-align: center;"></div>
                    </td>

                </tr>
                <tr>
                    <td style="font-size:medium;">Observation Report and Re-interview </td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-jan-observation-target" oninput="checkDate('lp-jan-observation-target','lp-jan-observation-actual', 'lp-jan-observation-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-jan-observation-actual" oninput="checkDate('lp-jan-observation-target','lp-jan-observation-actual', 'lp-jan-observation-remarks')"></td>
                    <td>
                        <div id="lp-jan-observation-remarks" style="text-align: center;"></div>
                    </td>
                    <script>
                        window.onload = function() {
                            loadData('lfslp-jan-res-target', 'lfslp-jan-res-actual', 'lfslp-jan-res-remarks');
                            loadData('lfslp-feb-res-target', 'lfslp-feb-res-actual', 'lfslp-feb-res-remarks');
                            loadData('lfslp-mar-res-target', 'lfslp-mar-res-actual', 'lfslp-mar-res-remarks');
                            loadData('lfslp-apr-res-target', 'lfslp-apr-res-actual', 'lfslp-apr-res-remarks');
                            loadData('lfslp-may-res-target', 'lfslp-may-res-actual', 'lfslp-may-res-remarks');
                            loadData('lfslp-jun-res-target', 'lfslp-jun-res-actual', 'lfslp-jun-res-remarks');
                            loadData('lfslp-jul-res-target', 'lfslp-jul-res-actual', 'lfslp-jul-res-remarks');
                            loadData('lfslp-aug-res-target', 'lfslp-aug-res-actual', 'lfslp-aug-res-remarks');
                            loadData('lfslp-sep-res-target', 'lfslp-sep-res-actual', 'lfslp-sep-res-remarks');
                            loadData('lfslp-oct-res-target', 'lfslp-oct-res-actual', 'lfslp-oct-res-remarks');
                            loadData('lfslp-nov-res-target', 'lfslp-nov-res-actual', 'lfslp-nov-res-remarks');
                            loadData('lfslp-dec-res-target', 'lfslp-dec-res-actual', 'lfslp-dec-res-remarks');

                            loadData('lp-jan-raw-target', 'lp-jan-raw-actual', 'lp-jan-raw-remarks');
                            loadData('lp-feb-raw-target', 'lp-feb-raw-actual', 'lp-feb-raw-remarks');
                            loadData('lp-mar-raw-target', 'lp-mar-raw-actual', 'lp-mar-raw-remarks');
                            loadData('lp-apr-raw-target', 'lp-apr-raw-actual', 'lp-apr-raw-remarks');
                            loadData('lp-may-raw-target', 'lp-may-raw-actual', 'lp-may-raw-remarks');
                            loadData('lp-jun-raw-target', 'lp-jun-raw-actual', 'lp-jun-raw-remarks');
                            loadData('lp-jul-raw-target', 'lp-jul-raw-actual', 'lp-jul-raw-remarks');
                            loadData('lp-aug-raw-target', 'lp-aug-raw-actual', 'lp-aug-raw-remarks');
                            loadData('lp-sep-raw-target', 'lp-sep-raw-actual', 'lp-sep-raw-remarks');
                            loadData('lp-oct-raw-target', 'lp-oct-raw-actual', 'lp-oct-raw-remarks');
                            loadData('lp-nov-raw-target', 'lp-nov-raw-actual', 'lp-nov-raw-remarks');
                            loadData('lp-dec-raw-target', 'lp-dec-raw-actual', 'lp-dec-raw-remarks');



                            loadData('lp-jan-clean-target', 'lp-jan-clean-actual', 'lp-jan-clean-remarks');
                            loadData('lp-feb-clean-target', 'lp-feb-clean-actual', 'lp-feb-clean-remarks');
                            loadData('lp-mar-clean-target', 'lp-mar-clean-actual', 'lp-mar-clean-remarks');
                            loadData('lp-apr-clean-target', 'lp-apr-clean-actual', 'lp-apr-clean-remarks');
                            loadData('lp-may-clean-target', 'lp-may-clean-actual', 'lp-may-clean-remarks');
                            loadData('lp-jun-clean-target', 'lp-jun-clean-actual', 'lp-jun-clean-remarks');
                            loadData('lp-jul-clean-target', 'lp-jul-clean-actual', 'lp-jul-clean-remarks');
                            loadData('lp-aug-clean-target', 'lp-aug-clean-actual', 'lp-aug-clean-remarks');
                            loadData('lp-sep-clean-target', 'lp-sep-clean-actual', 'lp-sep-clean-remarks');
                            loadData('lp-oct-clean-target', 'lp-oct-clean-actual', 'lp-oct-clean-remarks');
                            loadData('lp-nov-clean-target', 'lp-nov-clean-actual', 'lp-nov-clean-remarks');
                            loadData('lp-dec-clean-target', 'lp-dec-clean-actual', 'lp-dec-clean-remarks');



                            loadData('lp-jan-narrative-target', 'lp-jan-narrative-actual', 'lp-jan-narrative-remarks');
                            loadData('lp-feb-narrative-target', 'lp-feb-narrative-actual', 'lp-feb-narrative-remarks');
                            loadData('lp-mar-narrative-target', 'lp-mar-narrative-actual', 'lp-mar-narrative-remarks');
                            loadData('lp-apr-narrative-target', 'lp-apr-narrative-actual', 'lp-apr-narrative-remarks');
                            loadData('lp-may-narrative-target', 'lp-may-narrative-actual', 'lp-may-narrative-remarks');
                            loadData('lp-jun-narrative-target', 'lp-jun-narrative-actual', 'lp-jun-narrative-remarks');
                            loadData('lp-jul-narrative-target', 'lp-jul-narrative-actual', 'lp-jul-narrative-remarks');
                            loadData('lp-aug-narrative-target', 'lp-aug-narrative-actual', 'lp-aug-narrative-remarks');
                            loadData('lp-sep-narrative-target', 'lp-sep-narrative-actual', 'lp-sep-narrative-remarks');
                            loadData('lp-oct-narrative-target', 'lp-oct-narrative-actual', 'lp-oct-narrative-remarks');
                            loadData('lp-nov-narrative-target', 'lp-nov-narrative-actual', 'lp-nov-narrative-remarks');
                            loadData('lp-dec-narrative-target', 'lp-dec-narrative-actual', 'lp-dec-narrative-remarks');



                            loadData('lp-jan-financial-target', 'lp-jan-financial-actual', 'lp-jan-financial-remarks');
                            loadData('lp-feb-financial-target', 'lp-feb-financial-actual', 'lp-feb-financial-remarks');
                            loadData('lp-mar-financial-target', 'lp-mar-financial-actual', 'lp-mar-financial-remarks');
                            loadData('lp-apr-financial-target', 'lp-apr-financial-actual', 'lp-apr-financial-remarks');
                            loadData('lp-may-financial-target', 'lp-may-financial-actual', 'lp-may-financial-remarks');
                            loadData('lp-jun-financial-target', 'lp-jun-financial-actual', 'lp-jun-financial-remarks');
                            loadData('lp-jul-financial-target', 'lp-jul-financial-actual', 'lp-jul-financial-remarks');
                            loadData('lp-aug-financial-target', 'lp-aug-financial-actual', 'lp-aug-financial-remarks');
                            loadData('lp-sep-financial-target', 'lp-sep-financial-actual', 'lp-sep-financial-remarks');
                            loadData('lp-oct-financial-target', 'lp-oct-financial-actual', 'lp-oct-financial-remarks');
                            loadData('lp-nov-financial-target', 'lp-nov-financial-actual', 'lp-nov-financial-remarks');
                            loadData('lp-dec-financial-target', 'lp-dec-financial-actual', 'lp-dec-financial-remarks');

                            loadData('lp-jan-geo-target', 'lp-jan-geo-actual', 'lp-jan-geo-remarks');
                            loadData('lp-feb-geo-target', 'lp-feb-geo-actual', 'lp-feb-geo-remarks');
                            loadData('lp-mar-geo-target', 'lp-mar-geo-actual', 'lp-mar-geo-remarks');
                            loadData('lp-apr-geo-target', 'lp-apr-geo-actual', 'lp-apr-geo-remarks');
                            loadData('lp-may-geo-target', 'lp-may-geo-actual', 'lp-may-geo-remarks');
                            loadData('lp-jun-geo-target', 'lp-jun-geo-actual', 'lp-jun-geo-remarks');
                            loadData('lp-jul-geo-target', 'lp-jul-geo-actual', 'lp-jul-geo-remarks');
                            loadData('lp-aug-geo-target', 'lp-aug-geo-actual', 'lp-aug-geo-remarks');
                            loadData('lp-sep-geo-target', 'lp-sep-geo-actual', 'lp-sep-geo-remarks');
                            loadData('lp-oct-geo-target', 'lp-oct-geo-actual', 'lp-oct-geo-remarks');
                            loadData('lp-nov-geo-target', 'lp-nov-geo-actual', 'lp-nov-geo-remarks');
                            loadData('lp-dec-geo-target', 'lp-dec-geo-actual', 'lp-dec-geo-remarks');


                            loadData('lp-jan-observation-target', 'lp-jan-observation-actual', 'lp-jan-observation-remarks');
                            loadData('lp-feb-observation-target', 'lp-feb-observation-actual', 'lp-feb-observation-remarks');
                            loadData('lp-mar-observation-target', 'lp-feb-observation-actual', 'lp-mar-observation-remarks');
                            loadData('lp-apr-observation-target', 'lp-apr-observation-actual', 'lp-apr-observation-remarks');
                            loadData('lp-may-observation-target', 'lp-may-observation-actual', 'lp-may-observation-remarks');
                            loadData('lp-jun-observation-target', 'lp-jun-observation-actual', 'lp-jun-observation-remarks');
                            loadData('lp-jul-observation-target', 'lp-jul-observation-actual', 'lp-jul-observation-remarks');
                            loadData('lp-aug-observation-target', 'lp-aug-observation-actual', 'lp-aug-observation-remarks');
                            loadData('lp-sep-observation-target', 'lp-sep-observation-actual', 'lp-sep-observation-remarks');
                            loadData('lp-oct-observation-target', 'lp-oct-observation-actual', 'lp-oct-observation-remarks');
                            loadData('lp-nov-observation-target', 'lp-nov-observation-actual', 'lp-nov-observation-remarks');
                            loadData('lp-dec-observation-target', 'lp-dec-observation-actual', 'lp-dec-observation-remarks');
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


                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-feb-observation-target" oninput="checkDate('lp-feb-observation-target','lp-feb-observation-actual', 'lp-feb-observation-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-feb-observation-actual" oninput="checkDate('lp-feb-observation-target','lp-feb-observation-actual', 'lp-feb-observation-remarks')"></td>
                    <td>
                        <div id="lp-feb-observation-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-mar-observation-target" oninput="checkDate('lp-mar-observation-target','lp-mar-observation-actual', 'lp-mar-observation-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-mar-observation-actual" oninput="checkDate('lp-mar-observation-target','lp-mar-observation-actual', 'lp-mar-observation-remarks')"></td>
                    <td>
                        <div id="lp-mar-observation-remarks" style="text-align: center;"></div>
                    </td>


                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-apr-observation-target" oninput="checkDate('lp-apr-observation-target','lp-apr-observation-actual', 'lp-apr-observation-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-apr-observation-actual" oninput="checkDate('lp-apr-observation-target','lp-apr-observation-actual', 'lp-apr-observation-remarks')"></td>
                    <td>
                        <div id="lp-apr-observation-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-may-observation-target" oninput="checkDate('lp-may-observation-target','lp-may-observation-actual', 'lp-may-observation-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-may-observation-actual" oninput="checkDate('lp-may-observation-target','lp-may-observation-actual', 'lp-may-observation-remarks')"></td>
                    <td>
                        <div id="lp-may-observation-remarks" style="text-align: center;"></div>
                    </td>


                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-jun-observation-target" oninput="checkDate('lp-jun-observation-target','lp-jun-observation-actual', 'lp-jun-observation-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-jun-observation-actual" oninput="checkDate('lp-jun-observation-target','lp-jun-observation-actual', 'lp-jun-observation-remarks')"></td>
                    <td>
                        <div id="lp-jun-observation-remarks" style="text-align: center;"></div>
                    </td>


                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-jul-observation-target" oninput="checkDate('lp-jul-observation-target','lp-jul-observation-actual', 'lp-jul-observation-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-jul-observation-actual" oninput="checkDate('lp-jul-observation-target','lp-jul-observation-actual', 'lp-jul-observation-remarks')"></td>
                    <td>
                        <div id="lp-jul-observation-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-aug-observation-target" oninput="checkDate('lp-aug-observation-target','lp-aug-observation-actual', 'lp-aug-observation-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-aug-observation-actual" oninput="checkDate('lp-aug-observation-target','lp-aug-observation-actual', 'lp-aug-observation-remarks')"></td>
                    <td>
                        <div id="lp-aug-observation-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-sep-observation-target" oninput="checkDate('lp-sep-observation-target','lp-sep-observation-actual', 'lp-sep-observation-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-sep-observation-actual" oninput="checkDate('lp-sep-observation-target','lp-sep-observation-actual', 'lp-sep-observation-remarks')"></td>
                    <td>
                        <div id="lp-sep-observation-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-oct-observation-target" oninput="checkDate('lp-oct-observation-target','lp-oct-observation-actual', 'lp-oct-observation-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-oct-observation-actual" oninput="checkDate('lp-oct-observation-target','lp-oct-observation-actual', 'lp-oct-observation-remarks')"></td>
                    <td>
                        <div id="lp-oct-observation-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-nov-observation-target" oninput="checkDate('lp-nov-observation-target','lp-nov-observation-actual', 'lp-nov-observation-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-nov-observation-actual" oninput="checkDate('lp-nov-observation-target','lp-nov-observation-actual', 'lp-nov-observation-remarks')"></td>
                    <td>
                        <div id="lp-nov-observation-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-dec-observation-target" oninput="checkDate('lp-dec-observation-target','lp-dec-observation-actual', 'lp-dec-observation-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="lp-dec-observation-actual" oninput="checkDate('lp-dec-observation-target','lp-dec-observation-actual', 'lp-dec-observation-remarks')"></td>
                    <td>
                        <div id="lp-dec-observation-remarks" style="text-align: center;"></div>
                    </td>

                </tr>
            </tbody>
        </table>
    </div>
    <div class="chart-container">
        <canvas id="lfslpChart"></canvas>
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
                            text: `Las Piñas Response Rate Performance Data`,
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
        createChart('lfslp', 'lfslpChart');
    </script>




</body>

</html>