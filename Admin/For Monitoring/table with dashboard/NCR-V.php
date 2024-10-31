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
            align-items: center;
            margin: 2px auto;
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
<section style="height: 10px"></section>
<!---------------------------------------------------------------------------->
<!-------------------------------------- BY CITY BUTTON  --------------------->
<!---------------------------------------------------------------------------->
<div class="button-container">
    <div>
        <a style="background-color:cadetblue; color:white; font-weight: bolder; padding:5px" href="laspiñas_graph.php" class="btn btn-primary active">NCR-V</a>
    </div>
    <div>
        <a style="background-color: #0A414F; color:white; font-weight: bolder; padding:5px" href="laspiñas_graph.php" class="btn btn-primary active">LAS PIÑAS CITY</a>
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
    <h2 style="text-align:center">NCR-V</h2>
    <div class="city-header" style="font-weight: bolder; background-color:darkgoldenrod;">LABOR FORCE SURVEY</div>
    <div>
        <a style="background-color:#0A414F; color:white; border-radius:7px; font-weight: bolder; padding:5px" href="progress.php" class="btn btn-primary active">SELECT PROJECT</a>
    </div>
    <div class="city-section" id="laspinas-section">
        <table style="width: 5px; height: 100px;">
            <thead style="width:10px">
                <tr style="width:10px;">
                    <th style="color: white;"></th>
                    <th style="color: white; font-size:9px;" colspan="3">January</th>
                    <th style="color: white; font-size:9px;" colspan="3">February</th>
                    <th style="color: white; font-size:9px;" colspan="3">March</th>
                    <th style="color: white; font-size:9px;" colspan="3">April</th>
                    <th style="color: white; font-size:9px;" colspan="3">May</th>
                    <th style="color: white; font-size:9px;" colspan="3">June</th>
                    <th style="color: white; font-size:9px;" colspan="3">July</th>
                    <th style="color: white; font-size:9px;" colspan="3">August</th>
                    <th style="color: white; font-size:9px" colspan="3">September</th>
                    <th style="color: white; font-size:9px" colspan="3">October</th>
                    <th style="color: white; font-size:9px" colspan="3">November</th>
                    <th style="color: white; font-size:9px" colspan="3">December</th>
                    <!-- Add more months as needed -->
                </tr>
                <tr>
                    <th style="color: white; font-size:9px">category</th>
                    <th style="color: white; font-size:9px">Target</th>
                    <th style="color: white; font-size:9px">Actual</th>
                    <th style="color: white; font-size:9px">Remarks</th>
                    <th style="color: white; font-size:9px">Target</th>
                    <th style="color: white; font-size:9px">Actual</th>
                    <th style="color: white; font-size:9px">Remarks</th>
                    <th style="color: white; font-size:9px">Target</th>
                    <th style="color: white; font-size:9px">Actual</th>
                    <th style="color: white; font-size:9px">Remarks</th>
                    <th style="color: white; font-size:9px">Target</th>
                    <th style="color: white; font-size:9px">Actual</th>
                    <th style="color: white; font-size:9px">Remarks</th>
                    <th style="color: white; font-size:9px">Target</th>
                    <th style="color: white; font-size:9px">Actual</th>
                    <th style="color: white; font-size:9px">Remarks</th>
                    <th style="color: white; font-size:9px">Target</th>
                    <th style="color: white; font-size:9px">Actual</th>
                    <th style="color: white; font-size:9px">Remarks</th>
                    <th style="color: white; font-size:9px">Target</th>
                    <th style="color: white; font-size:9px">Actual</th>
                    <th style="color: white; font-size:9px">Remarks</th>
                    <th style="color: white; font-size:9px">Target</th>
                    <th style="color: white; font-size:9px">Actual</th>
                    <th style="color: white; font-size:9px">Remarks</th>
                    <th style="color: white; font-size:9px">Target</th>
                    <th style="color: white; font-size:9px">Actual</th>
                    <th style="color: white; font-size:9px">Remarks</th>
                    <th style="color: white; font-size:9px">Target</th>
                    <th style="color: white; font-size:9px">Actual</th>
                    <th style="color: white; font-size:9px">Remarks</th>
                    <th style="color: white; font-size:9px">Target</th>
                    <th style="color: white; font-size:9px">Actual</th>
                    <th style="color: white; font-size:9px">Remarks</th>
                    <th style="color: white; font-size:9px">Target</th>
                    <th style="color: white; font-size:9px">Actual</th>
                    <th style="color: white; font-size:9px">Remarks</th>
                    <!-- Add sub-headers for more months -->
                </tr>
            </thead>
            <tbody>
                <br>
                <!---------------------------------------------------RESPONSE RATE---------------------------------------------------------------------------------------------------->
                <tr>
                    <td style="font-weight:bolder; background-color:azure; font-size: 10px;">RESPONSE RATE</td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="ncrv-jan-res-target" oninput="checkValues('ncrv-jan-res-target', 'ncrv-jan-res-actual', 'ncrv-jan-res-remarks')" onchange="updateChart('ncrv')">
                    </td>
                    <td>
                        <input type="mumber" style="border: white; text-align:center;" id="ncrv-jan-res-actual" oninput="checkValues('ncrv-jan-res-target', 'ncrv-jan-res-actual', 'ncrv-jan-res-remarks')" onchange="updateChart('ncrv')">
                    </td>
                    <td>
                        <div id="ncrv-jan-res-remarks"></div>
                    </td>



                    <td>
                        <input type="number" style="border: white; text-align:center;" id="ncrv-feb-res-target" oninput="checkValues('ncrv-feb-res-target', 'ncrv-feb-res-actual', 'ncrv-feb-res-remarks')" onchange="updateChart('ncrv')">
                    </td>
                    <td>
                        <input type="mumber" style="border: white; text-align:center;" id="ncrv-feb-res-actual" oninput="checkValues('ncrv-feb-res-target', 'ncrv-feb-res-actual', 'ncrv-feb-res-remarks')" onchange="updateChart('ncrv')">
                    </td>
                    <td>
                        <div id="ncrv-feb-res-remarks"></div>
                    </td>




                    <td>
                        <input type="number" style="border: white; text-align:center;" id="ncrv-mar-res-target" oninput="checkValues('ncrv-mar-res-target', 'ncrv-mar-res-actual', 'ncrv-mar-res-remarks')" onchange="updateChart('ncrv')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="ncrv-mar-res-actual" oninput="checkValues('ncrv-mar-res-target', 'ncrv-mar-res-actual', 'ncrv-mar-res-remarks')" onchange="updateChart('ncrv')">
                    </td>
                    <td>
                        <div id="ncrv-mar-res-remarks"></div>
                    </td>





                    <td>
                        <input type="number" style="border: white; text-align:center;" id="ncrv-apr-res-target" oninput="checkValues('ncrv-apr-res-target', 'ncrv-apr-res-actual', 'ncrv-apr-res-remarks')" onchange="updateChart('ncrv')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="ncrv-apr-res-actual" oninput="checkValues('ncrv-apr-res-target', 'ncrv-apr-res-actual', 'ncrv-apr-res-remarks')" onchange="updateChart('ncrv')">
                    </td>
                    <td>
                        <div id="ncrv-apr-res-remarks"></div>
                    </td>




                    <td>
                        <input type="number" style="border: white; text-align:center;" id="ncrv-may-res-target" oninput="checkValues('ncrv-may-res-target', 'ncrv-may-res-actual', 'ncrv-may-res-remarks')" onchange="updateChart('ncrv')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="ncrv-may-res-actual" oninput="checkValues('ncrv-may-res-target', 'ncrv-may-res-actual', 'ncrv-may-res-remarks')" onchange="updateChart('ncrv')">
                    </td>
                    <td>
                        <div id="ncrv-may-res-remarks"></div>
                    </td>




                    <td>
                        <input type="number" style="border: white; text-align:center;" id="ncrv-jun-res-target" oninput="checkValues('ncrv-jun-res-target', 'ncrv-jun-res-actual', 'ncrv-jun-res-remarks')" onchange="updateChart('ncrv')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="ncrv-jun-res-actual" oninput="checkValues('ncrv-jun-res-target', 'ncrv-jun-res-actual', 'ncrv-jun-res-remarks')" onchange="updateChart('ncrv')">
                    </td>
                    <td>
                        <div id="ncrv-jun-res-remarks"></div>
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center;" id="ncrv-jul-res-target" oninput="checkValues('ncrv-jul-res-target', 'ncrv-jul-res-actual', 'ncrv-jul-res-remarks')" onchange="updateChart('ncrv')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="ncrv-jul-res-actual" oninput="checkValues('ncrv-jul-res-target', 'ncrv-jul-res-actual', 'ncrv-jul-res-remarks')" onchange="updateChart('ncrv')">
                    </td>
                    <td>
                        <div id="ncrv-jul-res-remarks"></div>
                    </td>



                    <td>
                        <input type="number" style="border: white; text-align:center;" id="ncrv-aug-res-target" oninput="checkValues('ncrv-aug-res-target', 'ncrv-aug-res-actual', 'ncrv-aug-res-remarks')" onchange="updateChart('ncrv')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="ncrv-aug-res-actual" oninput="checkValues('ncrv-aug-res-target', 'ncrv-aug-res-actual', 'ncrv-aug-res-remarks')" onchange="updateChart('ncrv')">
                    </td>
                    <td>
                        <div id="ncrv-aug-res-remarks"></div>
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center;" id="ncrv-sep-res-target" oninput="checkValues('ncrv-sep-res-target', 'ncrv-sep-res-actual', 'ncrv-sep-res-remarks')" onchange="updateChart('ncrv')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="ncrv-sep-res-actual" oninput="checkValues('ncrv-sep-res-target', 'ncrv-sep-res-actual', 'ncrv-sep-res-remarks')" onchange="updateChart('ncrv')">
                    </td>
                    <td>
                        <div id="ncrv-sep-res-remarks"></div>
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center;" id="ncrv-oct-res-target" oninput="checkValues('ncrv-oct-res-target', 'ncrv-oct-res-actual', 'ncrv-oct-res-remarks')" onchange="updateChart('ncrv')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="ncrv-oct-res-actual" oninput="checkValues('ncrv-oct-res-target', 'ncrv-oct-res-actual', 'ncrv-oct-res-remarks')" onchange="updateChart('ncrv')">
                    </td>
                    <td>
                        <div id="ncrv-oct-res-remarks"></div>
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center;" id="ncrv-nov-res-target" oninput="checkValues('ncrv-nov-res-target', 'ncrv-nov-res-actual', 'ncrv-nov-res-remarks')" onchange="updateChart('ncrv')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="ncrv-nov-res-actual" oninput="checkValues('ncrv-nov-res-target', 'ncrv-nov-res-actual', 'ncrv-nov-res-remarks')" onchange="updateChart('ncrv')">
                    </td>
                    <td>
                        <div id="ncrv-nov-res-remarks"></div>
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center;" id="ncrv-dec-res-target" oninput="checkValues('ncrv-dec-res-target', 'ncrv-dec-res-actual', 'ncrv-dec-res-remarks')" onchange="updateChart('ncrv')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="ncrv-dec-res-actual" oninput="checkValues('ncrv-dec-res-target', 'ncrv-dec-res-actual', 'ncrv-dec-res-remarks')" onchange="updateChart('ncrv')">
                    </td>
                    <td>
                        <div id="ncrv-dec-res-remarks"></div>
                    </td>
                </tr>

                <!---------------------------------------------------RESPONSE RATE END---------------------------------------------------------------------------------------------------->
                <tr>
                    <td style="font-size:smaller; background-color:lightblue; font-size: 10px;">Raw datafile</td>

                    <td>
                        <input type="date" style="border: white; font-size: 9px;" id="ncrv-jan-raw-target" oninput="checkDate('ncrv-jan-raw-target', 'ncrv-jan-raw-actual', 'ncrv-jan-raw-remarks')">
                    </td>
                    <td>
                        <input type="date" style="border: white; font-size: 9px;" id="ncrv-jan-raw-actual" oninput="checkDate('ncrv-jan-raw-target', 'ncrv-jan-raw-actual', 'ncrv-jan-raw-remarks')">
                    </td>
                    <td>
                        <div style="border: white; font-size: 9px;" id="ncrv-jan-raw-remarks" style="text-align: center;"></div>
                    </td>


                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-feb-raw-target" oninput="checkDate('ncrv-feb-raw-target', 'ncrv-feb-raw-actual', 'ncrv-feb-raw-remarks')"></td>
                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-feb-raw-actual" oninput="checkDate('ncrv-feb-raw-target', 'ncrv-feb-raw-actual','ncrv-feb-raw-remarks')"></td>
                    <td>
                        <div style="border: white; font-size: 9px;" id="ncrv-feb-raw-remarks" style="text-align: center;"></div>
                    </td>


                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-mar-raw-target" oninput="checkDate('ncrv-mar-raw-target', 'ncrv-mar-raw-actual', 'ncrv-mar-raw-remarks')"></td>
                    <td><input type="date" style="border: white; font-size: 9px;;" value="0" id="ncrv-mar-raw-actual" oninput="checkDate('ncrv-mar-raw-target', 'ncrv-mar-raw-actual', 'ncrv-mar-raw-remarks')"></td>
                    <td>
                        <div style="border: white; font-size: 9px;" id="ncrv-mar-raw-remarks" style="text-align: center;"></div>
                    </td>



                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-apr-raw-target" oninput="checkDate('ncrv-apr-raw-target', 'ncrv-apr-raw-actual', 'ncrv-apr-raw-remarks')"></td>
                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-apr-raw-actual" oninput="checkDate('ncrv-apr-raw-target', 'ncrv-apr-raw-actual', 'ncrv-apr-raw-remarks')"></td>
                    <td>
                        <div style="border: white; font-size: 9px;" id="ncrv-apr-raw-remarks" style="text-align: center;"></div>
                    </td>


                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-may-raw-target" oninput="checkDate('ncrv-may-raw-target', 'ncrv-may-raw-actual', 'ncrv-may-raw-remarks')"></td>
                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-may-raw-actual" oninput="checkDate('ncrv-may-raw-target', 'ncrv-may-raw-actual', 'ncrv-may-raw-remarks')"></td>
                    <td>
                        <div style="border: white; font-size: 9px;" id="ncrv-may-raw-remarks" style="text-align: center;"></div>
                    </td>



                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-jun-raw-target" oninput="checkDate('ncrv-jun-raw-target', 'ncrv-jun-raw-actual', 'ncrv-jun-raw-remarks')"></td>
                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-jun-raw-actual" oninput="checkDate('ncrv-jun-raw-target', 'ncrv-jun-raw-actual', 'ncrv-jun-raw-remarks')"></td>
                    <td>
                        <div style="border: white; font-size: 9px;" id="ncrv-jun-raw-remarks" style="text-align: center;"></div>
                    </td>


                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-jul-raw-target" oninput="checkDate('ncrv-jul-raw-target', 'ncrv-jul-raw-actual', 'ncrv-jul-raw-remarks')"></td>
                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-jul-raw-actual" oninput="checkDate('ncrv-jul-raw-target', 'ncrv-jul-raw-actual', 'ncrv-jul-raw-remarks')"></td>
                    <td>
                        <div style="border: white; font-size: 9px;" id="ncrv-jul-raw-remarks" style="text-align: center;"></div>
                    </td>


                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-aug-raw-target" oninput="checkDate('ncrv-aug-raw-target', 'ncrv-aug-raw-actual', 'ncrv-aug-raw-remarks')"></td>
                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-aug-raw-actual" oninput="checkDate('ncrv-aug-raw-target', 'ncrv-aug-raw-actual', 'ncrv-aug-raw-remarks')"></td>
                    <td>
                        <div style="border: white; font-size: 9px;" id="ncrv-aug-raw-remarks" style="text-align: center;"></div>
                    </td>


                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-sep-raw-target" oninput="checkDate('ncrv-sep-raw-target', 'ncrv-sep-raw-actual', 'ncrv-sep-raw-remarks')"></td>
                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-sep-raw-actual" oninput="checkDate('ncrv-sep-raw-target', 'ncrv-sep-raw-actual', 'ncrv-sep-raw-remarks')"></td>
                    <td>
                        <div style="border: white; font-size: 9px;" id="ncrv-sep-raw-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-oct-raw-target" oninput="checkDate('ncrv-oct-raw-target', 'ncrv-oct-raw-actual', 'ncrv-oct-raw-remarks')"></td>
                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-oct-raw-actual" oninput="checkDate('ncrv-oct-raw-target', 'ncrv-oct-raw-actual', 'ncrv-oct-raw-remarks')"></td>
                    <td>
                        <div id="ncrv-oct-raw-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-nov-raw-target" oninput="checkDate('ncrv-nov-raw-target', 'ncrv-nov-raw-actual', 'ncrv-nov-raw-remarks')"></td>
                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-nov-raw-actual" oninput="checkDate('ncrv-nov-raw-target', 'ncrv-nov-raw-actual', 'ncrv-nov-raw-remarks')"></td>
                    <td>
                        <div id="ncrv-nov-raw-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-dec-raw-target" oninput="checkDate('ncrv-dec-raw-target', 'ncrv-dec-raw-actual', 'ncrv-dec-raw-remarks')"></td>
                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-dec-raw-actual" oninput="checkDate('ncrv-dec-raw-target', 'ncrv-dec-raw-actual', 'ncrv-dec-raw-remarks')"></td>
                    <td>
                        <div style="border: white; font-size: 9px;" id="ncrv-dec-raw-remarks" style="text-align: center;"></div>
                    </td>
                </tr>
                <tr>
                    <td style="font-size:smaller; background-color:lightblue; font-size: 10px;">Clean datafile</td>

                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-jan-clean-target" oninput="checkDate('ncrv-jan-clean-target', 'ncrv-jan-clean-actual', 'ncrv-jan-clean-remarks')"></td>
                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-jan-clean-actual" oninput="checkDate('ncrv-jan-clean-target', 'ncrv-jan-clean-actual', 'ncrv-jan-clean-remarks')"></td>
                    <td>
                        <div id="ncrv-jan-clean-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-feb-clean-target" oninput="checkDate('ncrv-feb-clean-target', 'ncrv-feb-clean-actual', 'ncrv-feb-clean-remarks')"></td>
                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-feb-clean-actual" oninput="checkDate('ncrv-feb-clean-target', 'ncrv-feb-clean-actual', 'ncrv-feb-clean-remarks')"></td>
                    <td>
                        <div id="ncrv-feb-clean-remarks" style="text-align: center;"></div>
                    </td>


                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-mar-clean-target" oninput="checkDate('ncrv-mar-clean-target', 'ncrv-mar-clean-actual', 'ncrv-mar-clean-remarks')"></td>
                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-mar-clean-actual" oninput="checkDate('ncrv-mar-clean-target', 'ncrv-mar-clean-actual', 'ncrv-mar-clean-remarks')"></td>
                    <td>
                        <div id="ncrv-mar-clean-remarks" style="text-align: center;"></div>
                    </td>



                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-apr-clean-target" oninput="checkDate('ncrv-apr-clean-target', 'ncrv-apr-clean-actual', 'ncrv-apr-clean-remarks')"></td>
                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-apr-clean-actual" oninput="checkDate('ncrv-apr-clean-target', 'ncrv-apr-clean-actual', 'ncrv-apr-clean-remarks')"></td>
                    <td>
                        <div id="ncrv-apr-clean-remarks" style="border: white; font-size: 9px;"></div>
                    </td>


                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-may-clean-target" oninput="checkDate('ncrv-may-clean-target', 'ncrv-may-clean-actual', 'ncrv-may-clean-remarks')"></td>
                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-may-clean-actual" oninput="checkDate('ncrv-may-clean-target', 'ncrv-may-clean-actual', 'ncrv-may-clean-remarks')"></td>
                    <td>
                        <div id="ncrv-may-clean-remarks" style="border: white; font-size: 9px;"></div>
                    </td>

                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-jun-clean-target" oninput="checkDate('ncrv-jun-clean-target', 'ncrv-jun-clean-actual', 'ncrv-jun-clean-remarks')"></td>
                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-jun-clean-actual" oninput="checkDate('ncrv-jun-clean-target', 'ncrv-jun-clean-actual', 'ncrv-jun-clean-remarks')"></td>
                    <td>
                        <div id="ncrv-jun-clean-remarks" style="border: white; font-size: 9px;"></div>
                    </td>


                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-jul-clean-target" oninput="checkDate('ncrv-jul-clean-target', 'ncrv-jul-clean-actual', 'ncrv-jul-clean-remarks')"></td>
                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-jul-clean-actual" oninput="checkDate('ncrv-jul-clean-target', 'ncrv-jul-clean-actual', 'ncrv-jul-clean-remarks')"></td>
                    <td>
                        <div id="ncrv-jul-clean-remarks" style="border: white; font-size: 9px;"></div>
                    </td>



                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-aug-clean-target" oninput="checkDate('ncrv-aug-clean-target', 'ncrv-aug-clean-actual', 'ncrv-aug-clean-remarks')"></td>
                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-aug-clean-actual" oninput="checkDate('ncrv-aug-clean-target', 'ncrv-aug-clean-actual', 'ncrv-aug-clean-remarks')"></td>
                    <td>
                        <div id="ncrv-aug-clean-remarks" style="border: white; font-size: 9px;"></div>
                    </td>

                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-sep-clean-target" oninput="checkDate('ncrv-sep-clean-target', 'ncrv-sep-clean-actual', 'ncrv-sep-clean-remarks')"></td>
                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-sep-clean-actual" oninput="checkDate('ncrv-sep-clean-target', 'ncrv-sep-clean-actual', 'ncrv-sep-clean-remarks')"></td>
                    <td>
                        <div id="ncrv-sep-clean-remarks" style="border: white; font-size: 9px;"></div>
                    </td>

                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-oct-clean-target" oninput="checkDate('ncrv-oct-clean-target', 'ncrv-oct-clean-actual', 'ncrv-oct-clean-remarks')"></td>
                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-oct-clean-actual" oninput="checkDate('ncrv-oct-clean-target', 'ncrv-oct-clean-actual', 'ncrv-oct-clean-remarks')"></td>
                    <td>
                        <div id="ncrv-oct-clean-remarks" style="border: white; font-size: 9px;"></div>
                    </td>

                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-nov-clean-target" oninput="checkDate('ncrv-nov-clean-target', 'ncrv-nov-clean-actual', 'ncrv-nov-clean-remarks')"></td>
                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-nov-clean-actual" oninput="checkDate('ncrv-nov-clean-target', 'ncrv-nov-clean-actual', 'ncrv-nov-clean-remarks')"></td>
                    <td>
                        <div id="ncrv-nov-clean-remarks" style="border: white; font-size: 9px;"></div>
                    </td>

                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-dec-clean-target" oninput="checkDate('ncrv-dec-clean-target', 'ncrv-dec-clean-actual', 'ncrv-dec-clean-remarks')"></td>
                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-dec-clean-actual" oninput="checkDate('ncrv-dec-clean-target', 'ncrv-dec-clean-actual', 'ncrv-dec-clean-remarks')"></td>
                    <td>
                        <div id="ncrv-dec-clean-remarks" style="border: white; font-size: 9px;"></div>
                    </td>
                </tr>

                <tr>
                    <td style="font-size:smaller; background-color:lightblue; font-size:10px;">Narrative Report</td>

                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-jan-narrative-target" oninput="checkDate('ncrv-jan-narrative-target', 'ncrv-jan-narrative-actual', 'ncrv-jan-narrative-remarks')"></td>
                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-jan-narrative-actual" oninput="checkDate('ncrv-jan-narrative-target', 'ncrv-jan-narrative-actual', 'ncrv-jan-narrative-remarks')"></td>
                    <td>
                        <div id="ncrv-jan-narrative-remarks" style="text-align: center;"></div>
                    </td>


                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-feb-narrative-target" oninput="checkDate('ncrv-feb-narrative-target','ncrv-feb-narrative-actual', 'ncrv-feb-narrative-remarks')"></td>
                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-feb-narrative-actual" oninput="checkDate('ncrv-feb-narrative-target','ncrv-feb-narrative-actual', 'ncrv-feb-narrative-remarks')"></td>
                    <td>
                        <div id="ncrv-feb-narrative-remarks" style="text-align: center;"></div>
                    </td>




                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-mar-narrative-target" oninput="checkDate('ncrv-mar-narrative-target','ncrv-mar-narrative-actual', 'ncrv-mar-narrative-remarks')"></td>
                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-mar-narrative-actual" oninput="checkDate('ncrv-mar-narrative-target','ncrv-mar-narrative-actual', 'ncrv-mar-narrative-remarks')"></td>
                    <td>
                        <div id="ncrv-mar-narrative-remarks" style="text-align: center;"></div>
                    </td>



                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-apr-narrative-target" oninput="checkDate('ncrv-apr-narrative-target','ncrv-apr-narrative-actual', 'ncrv-apr-narrative-remarks')"></td>
                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-apr-narrative-actual" oninput="checkDate('ncrv-apr-narrative-target','ncrv-apr-narrative-actual', 'ncrv-apr-narrative-remarks')"></td>
                    <td>
                        <div id="ncrv-apr-narrative-remarks" style="text-align: center;"></div>
                    </td>


                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-may-narrative-target" oninput="checkDate('ncrv-may-narrative-target','ncrv-may-narrative-actual', 'ncrv-may-narrative-remarks')"></td>
                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-may-narrative-actual" oninput="checkDate('ncrv-may-narrative-target','ncrv-may-narrative-actual', 'ncrv-may-narrative-remarks')"></td>
                    <td>
                        <div id="ncrv-may-narrative-remarks" style="text-align: center;"></div>
                    </td>


                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-jun-narrative-target" oninput="checkDate('ncrv-jun-narrative-target','ncrv-jun-narrative-actual', 'ncrv-jun-narrative-remarks')"></td>
                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-jun-narrative-actual" oninput="checkDate('ncrv-jun-narrative-target','ncrv-jun-narrative-actual', 'ncrv-jun-narrative-remarks')"></td>

                    <td>
                        <div id="ncrv-jun-narrative-remarks" style="text-align: center;"></div>
                    </td>



                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-jul-narrative-target" oninput="checkDate('ncrv-jul-narrative-target','ncrv-jul-narrative-actual', 'ncrv-jul-narrative-remarks')"></td>
                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-jul-narrative-actual" oninput="checkDate('ncrv-jul-narrative-target','ncrv-jul-narrative-actual', 'ncrv-jul-narrative-remarks')"></td>
                    <td>
                        <div id="ncrv-jul-narrative-remarks" style="text-align: center;"></div>
                    </td>


                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-aug-narrative-target" oninput="checkDate('ncrv-aug-narrative-target','ncrv-aug-narrative-actual', 'ncrv-aug-narrative-remarks')"></td>
                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-aug-narrative-actual" oninput="checkDate('ncrv-aug-narrative-target','ncrv-aug-narrative-actual', 'ncrv-aug-narrative-remarks')"></td>
                    <td>
                        <div id="ncrv-aug-narrative-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-sep-narrative-target" oninput="checkDate('ncrv-sep-narrative-target','ncrv-sep-narrative-actual', 'ncrv-sep-narrative-remarks')"></td>
                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-sep-narrative-actual" oninput="checkDate('ncrv-sep-narrative-target','ncrv-sep-narrative-actual', 'ncrv-sep-narrative-remarks')"></td>
                    <td>
                        <div id="ncrv-sep-narrative-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-oct-narrative-target" oninput="checkDate('ncrv-oct-narrative-target', 'ncrv-oct-narrative-actual', 'ncrv-oct-narrative-remarks')"></td>
                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-oct-narrative-actual" oninput="checkDate('ncrv-oct-narrative-target', 'ncrv-oct-narrative-actual', 'ncrv-oct-narrative-remarks')"></td>
                    <td>
                        <div id="ncrv-oct-narrative-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-nov-narrative-target" oninput="checkDate('ncrv-nov-narrative-target', 'ncrv-nov-narrative-actual', 'ncrv-nov-narrative-remarks')"></td>
                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-nov-narrative-actual" oninput="checkDate('ncrv-nov-narrative-target', 'ncrv-nov-narrative-actual', 'ncrv-nov-narrative-remarks')"></td>
                    <td>
                        <div id="ncrv-nov-narrative-remarks" style="text-align: center;"></div>
                    </td>

                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-dec-narrative-target" oninput="checkDate('ncrv-dec-narrative-target', 'ncrv-dec-narrative-actual', 'ncrv-dec-narrative-remarks')"></td>
                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-dec-narrative-actual" oninput="checkDate('ncrv-dec-narrative-target', 'ncrv-dec-narrative-actual', 'ncrv-dec-narrative-remarks')"></td>
                    <td>
                        <div id="ncrv-dec-narrative-remarks" style="border: white; font-size: 9px;"></div>
                    </td>
                </tr>


                <tr>
                    <td style="font-size:smaller; background-color:lightblue; font-size:10px;">Financial Report</td>

                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-jan-financial-target" oninput="checkDate('ncrv-jan-financial-target','ncrv-jan-financial-actual', 'ncrv-jan-financial-remarks')"></td>
                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-jan-financial-actual" oninput="checkDate('ncrv-jan-financial-target','ncrv-jan-financial-actual', 'ncrv-jan-financial-remarks')"></td>
                    <td>
                        <div id="ncrv-jan-financial-remarks" style="border: white; font-size: 9px;"></div>
                    </td>



                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-feb-financial-target" oninput="checkDate('ncrv-feb-financial-target','ncrv-feb-financial-actual', 'ncrv-feb-financial-remarks')"></td>
                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-feb-financial-actual" oninput="checkDate('ncrv-feb-financial-target','ncrv-feb-financial-actual', 'ncrv-feb-financial-remarks')"></td>
                    <td>
                        <div id="ncrv-feb-financial-remarks" style="border: white; font-size: 9px;"></div>
                    </td>


                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-mar-financial-target" oninput="checkDate('ncrv-mar-financial-target','ncrv-mar-financial-actual', 'ncrv-mar-financial-remarks')"></td>
                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-mar-financial-actual" oninput="checkDate('ncrv-mar-financial-target','ncrv-mar-financial-actual', 'ncrv-mar-financial-remarks')"></td>
                    <td>
                        <div id="ncrv-mar-financial-remarks" style="border: white; font-size: 9px;"></div>
                    </td>

                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-apr-financial-target" oninput="checkDate('ncrv-apr-financial-target','ncrv-apr-financial-actual', 'ncrv-apr-financial-remarks')"></td>
                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-apr-financial-actual" oninput="checkDate('ncrv-apr-financial-target','ncrv-apr-financial-actual', 'ncrv-apr-financial-remarks')"></td>
                    <td>
                        <div id="ncrv-apr-financial-remarks" style="border: white; font-size: 9px;"></div>
                    </td>


                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-may-financial-target" oninput="checkDate('ncrv-may-financial-target','ncrv-may-financial-actual', 'ncrv-may-financial-remarks')"></td>
                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-may-financial-actual" oninput="checkDate('ncrv-may-financial-target','ncrv-may-financial-actual', 'ncrv-may-financial-remarks')"></td>
                    <td>
                        <div id="ncrv-may-financial-remarks" style="border: white; font-size: 9px;"></div>
                    </td>


                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-jun-financial-target" oninput="checkDate('ncrv-jun-financial-target','ncrv-jun-financial-actual', 'ncrv-jun-financial-remarks')"></td>
                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-jun-financial-actual" oninput="checkDate('ncrv-jun-financial-target','ncrv-jun-financial-actual', 'ncrv-jun-financial-remarks')"></td>
                    <td>
                        <div id="ncrv-jun-financial-remarks" style="border: white; font-size: 9px;"></div>
                    </td>



                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-jul-financial-target" oninput="checkDate('ncrv-jul-financial-target','ncrv-jul-financial-actual', 'ncrv-jul-financial-remarks')"></td>
                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-jul-financial-actual" oninput="checkDate('ncrv-jul-financial-target','ncrv-jul-financial-actual', 'ncrv-jul-financial-remarks')"></td>
                    </td>
                    <td>
                        <div id="ncrv-jul-financial-remarks" style="border: white; font-size: 9px;"></div>
                    </td>

                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-aug-financial-target" oninput="checkDate('ncrv-aug-financial-target','ncrv-aug-financial-actual', 'ncrv-aug-financial-remarks')"></td>
                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-aug-financial-actual" oninput="checkDate('ncrv-aug-financial-target','ncrv-aug-financial-actual', 'ncrv-aug-financial-remarks')"></td>
                    <td>
                        <div id="ncrv-aug-financial-remarks" style="border: white; font-size: 9px;"></div>
                    </td>

                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-sep-financial-target" oninput="checkDate('ncrv-sep-financial-target','ncrv-sep-financial-actual', 'ncrv-sep-financial-remarks')"></td>
                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-sep-financial-actual" oninput="checkDate('ncrv-sep-financial-target','ncrv-sep-financial-actual', 'ncrv-sep-financial-remarks')"></td>
                    <td>
                        <div id="ncrv-sep-financial-remarks" style="border: white; font-size: 9px;"></div>
                    </td>

                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-oct-financial-target" oninput="checkDate('ncrv-oct-financial-target', 'ncrv-oct-financial-actual', 'ncrv-oct-financial-remarks')"></td>
                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-oct-financial-actual" oninput="checkDate('ncrv-oct-financial-target', 'ncrv-oct-financial-actual', 'ncrv-oct-financial-remarks')"></td>
                    <td>
                        <div id="ncrv-oct-financial-remarks" style="border: white; font-size: 9px;"></div>
                    </td>

                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-nov-financial-target" oninput="checkDate('ncrv-nov-financial-target', 'ncrv-nov-financial-actual', 'ncrv-nov-financial-remarks')"></td>
                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-nov-financial-actual" oninput="checkDate('ncrv-nov-financial-target', 'ncrv-nov-financial-actual', 'ncrv-nov-financial-remarks')"></td>
                    <td>
                        <div id="ncrv-nov-financial-remarks" style="border: white; font-size: 9px;"></div>
                    </td>

                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-dec-financial-target" oninput="checkDate('ncrv-dec-financial-target', 'ncrv-dec-financial-actual', 'ncrv-dec-financial-remarks')"></td>
                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-dec-financial-actual" oninput="checkDate('ncrv-dec-financial-target', 'ncrv-dec-financial-actual', 'ncrv-dec-financial-remarks')"></td>
                    <td>
                        <div id="ncrv-dec-financial-remarks" style="border: white; font-size: 9px;"></div>
                    </td>
                </tr>
                <tr>
                    <td style="font-size:smaller; background-color:lightblue; font-size: 10px;">Updated GEO-MS</td>
                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-jan-geo-target" oninput="checkDate('ncrv-jan-geo-target','ncrv-jan-geo-actual', 'ncrv-jan-geo-remarks')"></td>
                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-jan-geo-actual" oninput="checkDate('ncrv-jan-geo-target','ncrv-jan-geo-actual', 'ncrv-jan-geo-remarks')"></td>
                    <td>
                        <div id="ncrv-jan-geo-remarks" style="border: white; font-size: 9px;"></div>
                    </td>


                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-feb-geo-target" oninput="checkDate('ncrv-feb-geo-target','ncrv-feb-geo-actual', 'ncrv-feb-geo-remarks')"></td>
                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-feb-geo-actual" oninput="checkDate('ncrv-feb-geo-target','ncrv-feb-geo-actual', 'ncrv-feb-geo-remarks')"></td>
                    <td>
                        <div id="ncrv-feb-geo-remarks" style="border: white; font-size: 9px;"></div>
                    </td>


                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-mar-geo-target" oninput="checkDate('ncrv-mar-geo-target','ncrv-mar-geo-actual', 'ncrv-mar-geo-remarks')"></td>
                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-mar-geo-actual" oninput="checkDate('ncrv-mar-geo-target','ncrv-mar-geo-actual', 'ncrv-mar-geo-remarks')"></td>
                    <td>
                        <div id="ncrv-mar-geo-remarks" style="border: white; font-size: 9px;"></div>
                    </td>



                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-apr-geo-target" oninput="checkDate('ncrv-apr-geo-target','ncrv-apr-geo-actual', 'ncrv-apr-geo-remarks')"></td>
                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-apr-geo-actual" oninput="checkDate('ncrv-apr-geo-target','ncrv-apr-geo-actual', 'ncrv-apr-geo-remarks')"></td>
                    <td>
                        <div id="ncrv-apr-geo-remarks" style="border: white; font-size: 9px;"></div>
                    </td>

                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-may-geo-actual" oninput="checkDate('ncrv-may-geo-target','ncrv-may-geo-actual', 'ncrv-may-geo-remarks')"></td>
                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-may-geo-target" oninput="checkDate('ncrv-may-geo-target','ncrv-may-geo-actual', 'ncrv-may-geo-remarks')"></td>
                    <td>
                        <div id="ncrv-may-geo-remarks" style="border: white; font-size: 9px;"></div>
                    </td>


                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-jun-geo-target" oninput="checkDate('ncrv-jun-geo-target','ncrv-jun-geo-actual', 'ncrv-jun-geo-remarks')"></td>
                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-jun-geo-actual" oninput="checkDate('ncrv-jun-geo-target','ncrv-jun-geo-actual', 'ncrv-jun-geo-remarks')"></td>
                    <td>
                        <div id="ncrv-jun-geo-remarks" style="border: white; font-size: 9px;"></div>
                    </td>



                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-jul-geo-actual" oninput="checkDate('ncrv-jul-geo-target','ncrv-jul-geo-actual', 'ncrv-jul-geo-remarks')"></td>
                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-jul-geo-target" oninput="checkDate('ncrv-jul-geo-target','ncrv-jul-geo-actual', 'ncrv-jul-geo-remarks')"></td>
                    <td>
                        <div id="ncrv-jul-geo-remarks" style="border: white; font-size: 9px;"></div>
                    </td>


                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-aug-geo-target" oninput="checkDate('ncrv-aug-geo-target','ncrv-aug-geo-actual', 'ncrv-aug-geo-remarks')"></td>
                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-aug-geo-actual" oninput="checkDate('ncrv-aug-geo-target','ncrv-aug-geo-actual', 'ncrv-aug-geo-remarks')"></td>
                    <td>
                        <div id="ncrv-aug-geo-remarks" style="border: white; font-size: 9px;"></div>
                    </td>


                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-sep-geo-target" oninput="checkDate('ncrv-sep-geo-target','ncrv-sep-geo-actual', 'ncrv-sep-geo-remarks')"></td>
                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-sep-geo-actual" oninput="checkDate('ncrv-sep-geo-target','ncrv-sep-geo-actual', 'ncrv-sep-geo-remarks')"></td>
                    <td>
                        <div id="ncrv-sep-geo-remarks" style="border: white; font-size: 9px;"></div>
                    </td>

                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-oct-geo-target" oninput="checkDate('ncrv-oct-geo-target', 'ncrv-oct-geo-actual', 'ncrv-oct-geo-remarks')"></td>
                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-oct-geo-actual" oninput="checkDate('ncrv-oct-geo-target', 'ncrv-oct-geo-actual', 'ncrv-oct-geo-remarks')"></td>
                    <td>
                        <div id="ncrv-oct-geo-remarks" style="border: white; font-size: 9px;"></div>
                    </td>

                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-nov-geo-target" oninput="checkDate('ncrv-nov-geo-target', 'ncrv-nov-geo-actual', 'ncrv-nov-geo-remarks')"></td>
                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-nov-geo-actual" oninput="checkDate('ncrv-nov-geo-target', 'ncrv-nov-geo-actual', 'ncrv-nov-geo-remarks')"></td>
                    <td>
                        <div id="ncrv-nov-geo-remarks" style="border: white; font-size: 9px;"></div>
                    </td>

                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-dec-geo-target" oninput="checkDate('ncrv-dec-geo-target', 'ncrv-dec-geo-actual', 'ncrv-dec-geo-remarks')"></td>
                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-dec-geo-actual" oninput="checkDate('ncrv-dec-geo-target', 'ncrv-dec-geo-actual', 'ncrv-dec-geo-remarks')"></td>
                    <td>
                        <div id="ncrv-dec-geo-remarks" style="border: white; font-size: 9px;"></div>
                    </td>
                </tr>
                <tr>
                    <td style="font-size:smaller; background-color:lightblue; font-size: 9px;">Observation Report and <br>Re-interview </td>


                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-jan-observation-target" oninput="checkDate('ncrv-jan-observation-target','ncrv-jan-observation-actual', 'ncrv-jan-observation-remarks')"></td>
                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-jan-observation-actual" oninput="checkDate('ncrv-jan-observation-target','ncrv-jan-observation-actual', 'ncrv-jan-observation-remarks')"></td>
                    <td>
                        <div id="ncrv-jan-observation-remarks" style="border: white; font-size: 9px;"></div>
                    </td>

                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-feb-observation-target" oninput="checkDate('ncrv-feb-observation-target','ncrv-feb-observation-actual', 'ncrv-feb-observation-remarks')"></td>
                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-feb-observation-actual" oninput="checkDate('ncrv-feb-observation-target','ncrv-feb-observation-actual', 'ncrv-feb-observation-remarks')"></td>
                    <td>
                        <div id="ncrv-feb-observation-remarks" style="border: white; font-size: 9px;"></div>
                    </td>

                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-mar-observation-target" oninput="checkDate('ncrv-mar-observation-target','ncrv-mar-observation-actual', 'ncrv-mar-observation-remarks')"></td>
                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-mar-observation-actual" oninput="checkDate('ncrv-mar-observation-target','ncrv-mar-observation-actual', 'ncrv-mar-observation-remarks')"></td>
                    <td>
                        <div id="ncrv-mar-observation-remarks" style="border: white; font-size: 9px;"></div>
                    </td>

                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-apr-observation-target" oninput="checkDate('ncrv-apr-observation-target','ncrv-apr-observation-actual', 'ncrv-apr-observation-remarks')"></td>
                    <td><input type="date" style="border: white; text-align:center;" value="0" id="ncrv-apr-observation-actual" oninput="checkDate('ncrv-apr-observation-target','ncrv-apr-observation-actual', 'ncrv-apr-observation-remarks')"></td>
                    <td>
                        <div id="ncrv-apr-observation-remarks" style="border: white; font-size: 9px;"></div>
                    </td>


                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-may-observation-target" oninput="checkDate('ncrv-may-observation-target','ncrv-may-observation-actual', 'ncrv-may-observation-remarks')"></td>
                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-may-observation-actual" oninput="checkDate('ncrv-may-observation-target','ncrv-may-observation-actual', 'ncrv-may-observation-remarks')"></td>
                    <td>
                        <div id="ncrv-may-observation-remarks" style="border: white; font-size: 9px;"></div>
                    </td>

                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-jun-observation-target" oninput="checkDate('ncrv-jun-observation-target','ncrv-jun-observation-actual', 'ncrv-jun-observation-remarks')"></td>
                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-jun-observation-actual" oninput="checkDate('ncrv-jun-observation-target','ncrv-jun-observation-actual', 'ncrv-jun-observation-remarks')"></td>
                    <td>
                        <div id="ncrv-jun-observation-remarks" style="border: white; font-size: 9px;"></div>
                    </td>

                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-jul-observation-target" oninput="checkDate('ncrv-jul-observation-target','ncrv-jul-observation-actual', 'ncrv-jul-observation-remarks')"></td>
                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-jul-observation-actual" oninput="checkDate('ncrv-jul-observation-target','ncrv-jul-observation-actual', 'ncrv-jul-observation-remarks')"></td>
                    <td>
                        <div id="ncrv-jul-observation-remarks" style="border: white; font-size: 9px;"></div>
                    </td>

                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-aug-observation-target" oninput="checkDate('ncrv-aug-observation-target','ncrv-aug-observation-actual', 'ncrv-aug-observation-remarks')"></td>
                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-aug-observation-actual" oninput="checkDate('ncrv-aug-observation-target','ncrv-aug-observation-actual', 'ncrv-aug-observation-remarks')"></td>
                    <td>
                        <div id="ncrv-aug-observation-remarks" style="border: white; font-size: 9px;"></div>
                    </td>

                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-sep-observation-target" oninput="checkDate('ncrv-sep-observation-target','ncrv-sep-observation-actual', 'ncrv-sep-observation-remarks')"></td>
                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-sep-observation-actual" oninput="checkDate('ncrv-sep-observation-target','ncrv-sep-observation-actual', 'ncrv-sep-observation-remarks')"></td>
                    <td>
                        <div id="ncrv-sep-observation-remarks" style="border: white; font-size: 9px;"></div>
                    </td>

                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-oct-observation-target" oninput="checkDate('ncrv-oct-observation-target','ncrv-oct-observation-actual', 'ncrv-oct-observation-remarks')"></td>
                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-oct-observation-actual" oninput="checkDate('ncrv-oct-observation-target','ncrv-oct-observation-actual', 'ncrv-oct-observation-remarks')"></td>
                    <td>
                        <div id="ncrv-oct-observation-remarks" style="border: white; font-size: 9px;"></div>
                    </td>

                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-nov-observation-target" oninput="checkDate('ncrv-nov-observation-target','ncrv-nov-observation-actual', 'ncrv-nov-observation-remarks')"></td>
                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-nov-observation-actual" oninput="checkDate('ncrv-nov-observation-target','ncrv-nov-observation-actual', 'ncrv-nov-observation-remarks')"></td>
                    <td>
                        <div id="ncrv-nov-observation-remarks" style="border: white; font-size: 9px;"></div>
                    </td>

                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-dec-observation-target" oninput="checkDate('ncrv-dec-observation-target','ncrv-dec-observation-actual', 'ncrv-dec-observation-remarks')"></td>
                    <td><input type="date" style="border: white; font-size: 9px;" value="0" id="ncrv-dec-observation-actual" oninput="checkDate('ncrv-dec-observation-target','ncrv-dec-observation-actual', 'ncrv-dec-observation-remarks')"></td>
                    <td>
                        <div id="ncrv-dec-observation-remarks" style="border: white; font-size: 9px;"></div>
                    </td>
                </tr>
            </tbody>

            <script>
                window.onload = function() {
                    loadData('ncrv-jan-res-target', 'ncrv-jan-res-actual', 'ncrv-jan-res-remarks');
                    loadData('ncrv-feb-res-target', 'ncrv-feb-res-actual', 'ncrv-feb-res-remarks');
                    loadData('ncrv-mar-res-target', 'ncrv-mar-res-actual', 'ncrv-mar-res-remarks');
                    loadData('ncrv-apr-res-target', 'ncrv-apr-res-actual', 'ncrv-apr-res-remarks');
                    loadData('ncrv-may-res-target', 'ncrv-may-res-actual', 'ncrv-may-res-remarks');
                    loadData('ncrv-jun-res-target', 'ncrv-jun-res-actual', 'ncrv-jun-res-remarks');
                    loadData('ncrv-jul-res-target', 'ncrv-jul-res-actual', 'ncrv-jul-res-remarks');
                    loadData('ncrv-aug-res-target', 'ncrv-aug-res-actual', 'ncrv-aug-res-remarks');
                    loadData('ncrv-sep-res-target', 'ncrv-sep-res-actual', 'ncrv-sep-res-remarks');
                    loadData('ncrv-oct-res-target', 'ncrv-oct-res-actual', 'ncrv-oct-res-remarks');
                    loadData('ncrv-nov-res-target', 'ncrv-nov-res-actual', 'ncrv-nov-res-remarks');
                    loadData('ncrv-dec-res-target', 'ncrv-dec-res-actual', 'ncrv-dec-res-remarks');

                    loadData('ncrv-jan-raw-target', 'ncrv-jan-raw-actual', 'ncrv-jan-raw-remarks');
                    loadData('ncrv-jan-raw-target', 'ncrv-jan-raw-actual', 'ncrv-jan-raw-remarks');
                    loadData('ncrv-feb-raw-target', 'ncrv-feb-raw-actual', 'ncrv-feb-raw-remarks');
                    loadData('ncrv-mar-raw-target', 'ncrv-mar-raw-actual', 'ncrv-mar-raw-remarks');
                    loadData('ncrv-apr-raw-target', 'ncrv-apr-raw-actual', 'ncrv-apr-raw-remarks');
                    loadData('ncrv-may-raw-target', 'ncrv-may-raw-actual', 'ncrv-may-raw-remarks');
                    loadData('ncrv-jun-raw-target', 'ncrv-jun-raw-actual', 'ncrv-jun-raw-remarks');
                    loadData('ncrv-jul-raw-target', 'ncrv-jul-raw-actual', 'ncrv-jul-raw-remarks');
                    loadData('ncrv-aug-raw-target', 'ncrv-aug-raw-actual', 'ncrv-aug-raw-remarks');
                    loadData('ncrv-sep-raw-target', 'ncrv-sep-raw-actual', 'ncrv-sep-raw-remarks');
                    loadData('ncrv-oct-raw-target', 'ncrv-oct-raw-actual', 'ncrv-oct-raw-remarks');
                    loadData('ncrv-nov-raw-target', 'ncrv-nov-raw-actual', 'ncrv-nov-raw-remarks');
                    loadData('ncrv-dec-raw-target', 'ncrv-dec-raw-actual', 'ncrv-dec-raw-remarks');

                    loadData('ncrv-jan-clean-target', 'ncrv-jan-clean-actual', 'ncrv-jan-clean-remarks');
                    loadData('ncrv-feb-clean-target', 'ncrv-feb-clean-actual', 'ncrv-feb-clean-remarks');
                    loadData('ncrv-mar-clean-target', 'ncrv-mar-clean-actual', 'ncrv-mar-clean-remarks');
                    loadData('ncrv-apr-clean-target', 'ncrv-apr-clean-actual', 'ncrv-apr-clean-remarks');
                    loadData('ncrv-may-clean-target', 'ncrv-may-clean-actual', 'ncrv-may-clean-remarks');
                    loadData('ncrv-jun-clean-target', 'ncrv-jun-clean-actual', 'ncrv-jun-clean-remarks');
                    loadData('ncrv-jul-clean-target', 'ncrv-jul-clean-actual', 'ncrv-jul-clean-remarks');
                    loadData('ncrv-aug-clean-target', 'ncrv-aug-clean-actual', 'ncrv-aug-clean-remarks');
                    loadData('ncrv-sep-clean-target', 'ncrv-sep-clean-actual', 'ncrv-sep-clean-remarks');
                    loadData('ncrv-oct-clean-target', 'ncrv-oct-clean-actual', 'ncrv-oct-clean-remarks');
                    loadData('ncrv-nov-clean-target', 'ncrv-nov-clean-actual', 'ncrv-nov-clean-remarks');
                    loadData('ncrv-dec-clean-target', 'ncrv-dec-clean-actual', 'ncrv-dec-clean-remarks');

                    loadData('ncrv-jan-narrative-target', 'ncrv-jan-narrative-actual', 'ncrv-jan-narrative-remarks');
                    loadData('ncrv-feb-narrative-target', 'ncrv-feb-narrative-actual', 'ncrv-feb-narrative-remarks');
                    loadData('ncrv-mar-narrative-target', 'ncrv-mar-narrative-actual', 'ncrv-mar-narrative-remarks');
                    loadData('ncrv-apr-narrative-target', 'ncrv-apr-narrative-actual', 'ncrv-apr-narrative-remarks');
                    loadData('ncrv-may-narrative-target', 'ncrv-may-narrative-actual', 'ncrv-may-narrative-remarks');
                    loadData('ncrv-jun-narrative-target', 'ncrv-jun-narrative-actual', 'ncrv-jun-narrative-remarks');
                    loadData('ncrv-jul-narrative-target', 'ncrv-jul-narrative-actual', 'ncrv-jul-narrative-remarks');
                    loadData('ncrv-aug-narrative-target', 'ncrv-aug-narrative-actual', 'ncrv-aug-narrative-remarks');
                    loadData('ncrv-sep-narrative-target', 'ncrv-sep-narrative-actual', 'ncrv-sep-narrative-remarks');
                    loadData('ncrv-oct-narrative-target', 'ncrv-oct-narrative-actual', 'ncrv-oct-narrative-remarks');
                    loadData('ncrv-nov-narrative-target', 'ncrv-nov-narrative-actual', 'ncrv-nov-narrative-remarks');
                    loadData('ncrv-dec-narrative-target', 'ncrv-dec-narrative-actual', 'ncrv-dec-narrative-remarks');

                    loadData('ncrv-jan-financial-target', 'ncrv-jan-financial-actual', 'ncrv-jan-financial-remarks');
                    loadData('ncrv-feb-financial-target', 'ncrv-feb-financial-actual', 'ncrv-feb-financial-remarks');
                    loadData('ncrv-mar-financial-target', 'ncrv-mar-financial-actual', 'ncrv-mar-financial-remarks');
                    loadData('ncrv-apr-financial-target', 'ncrv-apr-financial-actual', 'ncrv-apr-financial-remarks');
                    loadData('ncrv-may-financial-target', 'ncrv-may-financial-actual', 'ncrv-may-financial-remarks');
                    loadData('ncrv-jun-financial-target', 'ncrv-jun-financial-actual', 'ncrv-jun-financial-remarks');
                    loadData('ncrv-jul-financial-target', 'ncrv-jul-financial-actual', 'ncrv-jul-financial-remarks');
                    loadData('ncrv-aug-financial-target', 'ncrv-aug-financial-actual', 'ncrv-aug-financial-remarks');
                    loadData('ncrv-sep-financial-target', 'ncrv-sep-financial-actual', 'ncrv-sep-financial-remarks');
                    loadData('ncrv-oct-financial-target', 'ncrv-oct-financial-actual', 'ncrv-oct-financial-remarks');
                    loadData('ncrv-nov-financial-target', 'ncrv-nov-financial-actual', 'ncrv-nov-financial-remarks');
                    loadData('ncrv-dec-financial-target', 'ncrv-dec-financial-actual', 'ncrv-dec-financial-remarks');

                    loadData('ncrv-jan-geo-target', 'ncrv-jan-geo-actual', 'ncrv-jan-geo-remarks');
                    loadData('ncrv-feb-geo-target', 'ncrv-feb-geo-actual', 'ncrv-feb-geo-remarks');
                    loadData('ncrv-mar-geo-target', 'ncrv-mar-geo-actual', 'ncrv-mar-geo-remarks');
                    loadData('ncrv-apr-geo-target', 'ncrv-apr-geo-actual', 'ncrv-apr-geo-remarks');
                    loadData('ncrv-may-geo-target', 'ncrv-may-geo-actual', 'ncrv-may-geo-remarks');
                    loadData('ncrv-jun-geo-target', 'ncrv-jun-geo-actual', 'ncrv-jun-geo-remarks');
                    loadData('ncrv-jul-geo-target', 'ncrv-jul-geo-actual', 'ncrv-jul-geo-remarks');
                    loadData('ncrv-aug-geo-target', 'ncrv-aug-geo-actual', 'ncrv-aug-geo-remarks');
                    loadData('ncrv-sep-geo-target', 'ncrv-sep-geo-actual', 'ncrv-sep-geo-remarks');
                    loadData('ncrv-oct-geo-target', 'ncrv-oct-geo-actual', 'ncrv-oct-geo-remarks');
                    loadData('ncrv-nov-geo-target', 'ncrv-nov-geo-actual', 'ncrv-nov-geo-remarks');
                    loadData('ncrv-dec-geo-target', 'ncrv-dec-geo-actual', 'ncrv-dec-geo-remarks');

                    loadData('ncrv-jan-observation-target', 'ncrv-jan-observation-actual', 'ncrv-jan-observation-remarks');
                    loadData('ncrv-feb-observation-target', 'ncrv-feb-observation-actual', 'ncrv-feb-observation-remarks');
                    loadData('ncrv-mar-observation-target', 'ncrv-feb-observation-actual', 'ncrv-mar-observation-remarks');
                    loadData('ncrv-apr-observation-target', 'ncrv-apr-observation-actual', 'ncrv-apr-observation-remarks');
                    loadData('ncrv-may-observation-target', 'ncrv-may-observation-actual', 'ncrv-may-observation-remarks');
                    loadData('ncrv-jun-observation-target', 'ncrv-jun-observation-actual', 'ncrv-jun-observation-remarks');
                    loadData('ncrv-jul-observation-target', 'ncrv-jul-observation-actual', 'ncrv-jul-observation-remarks');
                    loadData('ncrv-aug-observation-target', 'ncrv-aug-observation-actual', 'ncrv-aug-observation-remarks');
                    loadData('ncrv-sep-observation-target', 'ncrv-sep-observation-actual', 'ncrv-sep-observation-remarks');
                    loadData('ncrv-oct-observation-target', 'ncrv-oct-observation-actual', 'ncrv-oct-observation-remarks');
                    loadData('ncrv-nov-observation-target', 'ncrv-nov-observation-actual', 'ncrv-nov-observation-remarks');
                    loadData('ncrv-dec-observation-target', 'ncrv-dec-observation-actual', 'ncrv-dec-observation-remarks');
                };

                function checkValues(targetId, actualId, remarksId) {
                    const targetValue = parseFloat(document.getElementById(targetId).value);
                    const actualValue = parseFloat(document.getElementById(actualId).value);
                    const remarksField = document.getElementById(remarksId);

                    if (!isNaN(targetValue) && !isNaN(actualValue) && targetValue !== 0) {
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

    <!----------------------------------------------- Chart Functionality----------------------------->

    <div class="chart-container">
        <canvas id="ncrvChart"></canvas>
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
        /////////////////////////// Chart Saving Funtionality local storage

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
                            hoverBackgroundColor: 'yellow',
                            borderWidth: 1
                        }
                    ]
                },
                options: {
                    responsive: true,
                    plugins: {
                        title: {
                            display: true,
                            text: `NCR-V Response Rate Performance Data`,
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
                            formatter: (value) => {
                                return isNaN(value) || value === null ? '' : `${value}%`;
                            },
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
        ////////////////////////////////////////////////////Localstorage of Chart

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


        createChart('ncrv', 'ncrvChart');
    </script>

</body>

</html>