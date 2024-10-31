<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>City Monthly Target vs Actual Data</title>
    <link rel="shortcut icon" type="image/png" href="images for dashboard/psa logo.png">
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
            justify-content: flex-start;
            position: absolute;
            /* Positions the container at the top left corner */
            top: 10px;
            left: 10px;
            gap: 20px;
            /* Space between logos and text */
        }

        .logo-container img {
            width: 55px;
            /* Adjust logo size */
            height: auto;
        }

        .logo-text {
            font-size: 18px;
            /* Adjust the font size */
            font-weight: bold;
            text-align: center;
        }

        /****************************** End for logo css part ***********************/
    </style>
</head>
<div class="logo-container">
    <img src="../images for template/psa logo.png" alt="Logo 1">
    <div style="font-size:medium; font-weight:bolder" class="logo-text">Republic of the Philippines<br>
        PHILIPPINE STATISTICS AUTHORITY<br>
        Regional Statistical Service Office<br>
        National Capital Region-Provincial Statistical Office V</div>
    <img src="../images for template/logph.png" alt="Logo 2">
</div>
<!---------------------------------------------------------------------------->
<!-------------------------------------- BY CITY BUTTON  --------------------->
<!---------------------------------------------------------------------------->
<div class="button-container">
    <div>
        <a style="background-color: #0A414f; color:white; font-weight: bolder; padding:5px" href="ces_ncr_v.php" class="btn btn-primary active">NCR-V</a>
    </div>

    <div>
        <a style="background-color: #0A414f; color:white; font-weight: bolder; padding:5px" href="ces_laspiñas.php" class="btn btn-primary active">LAS PIÑAS CITY</a>
    </div>

    <br>

    <div>
        <a style="background-color: #0A414f; color:white; font-weight:bolder; padding:5px" href="ces_muntinlupa.php" class="btn btn-primary">MUNTINLUPA CITY</a>
    </div>

    <br>

    <div>
        <a style="background-color: #0A414F; color:white; font-weight:bolder; padding:5px" href="ces_parañaque.php" class="btn btn-primary">PARAÑAQUE CITY</a>
    </div>

    <br>

    <div>
        <a style="background-color: cadetblue; color:white; font-weight:bolder; padding:5px" href="ces_pasay.php" class="btn btn-primary">PASAY CITY</a>
    </div>

</div>
<!-------------------------------------------------------------------------------->
<!-------------------------------------- BY CITY BUTTON END----------------------->
<!-------------------------------------------------------------------------------->

<body>
    <h2 style="text-align:center;">MUNTINLUPA CITY</h2>
    <!-- City Section for Las Piñas -->
    <div class="city-header" style="font-weight: bolder;background-color:teal; width:100%">Consumer Expectations Survey</div>
    <div>
        <a style="background-color:#0A414F; color:white; border-radius:7px; font-weight: bolder; padding:5px" href="../table with dashboard/progress.php" class="btn btn-primary active">SELECT PROJECT</a>
    </div>
    <div class="city-section" id="laspinas-section">
        <table>
            <thead>
                <tr>
                    <th style="color: white;">Category</th>
                    <th style="color: white;" colspan="2">January</th>
                    <th style="color:white;" colspan="2">February</th>
                    <th style="color: white;" colspan="2">March</th>
                    <th style="color: white;" colspan="2">April</th>
                    <th style="color: white;" colspan="2">May</th>
                    <th style="color: white;" colspan="2">June</th>
                    <th style="color: white;" colspan="2">July</th>
                    <th style="color: white;" colspan="2">August</th>
                    <th style="color: white;" colspan="2">September</th>
                    <th style="color: white;" colspan="2">October</th>
                    <th style="color: white;" colspan="2">November</th>
                    <th style="color: white;" colspan="2">December</th>
                    <!-- Add more months as needed -->
                </tr>
                <tr>
                    <th></th>
                    <th style="color: white;">Target</th>
                    <th style="color: white;">Actual</th>
                    <th style="color: white;">Target</th>
                    <th style="color: white;">Actual</th>
                    <th style="color: white;">Target</th>
                    <th style="color: white;">Actual</th>
                    <th style="color: white;">Target</th>
                    <th style="color: white;">Actual</th>
                    <th style="color: white;">Target</th>
                    <th style="color: white;">Actual</th>
                    <th style="color: white;">Target</th>
                    <th style="color: white;">Actual</th>
                    <th style="color: white;">Target</th>
                    <th style="color: white;">Actual</th>
                    <th style="color: white;">Target</th>
                    <th style="color: white;">Actual</th>
                    <th style="color: white;">Target</th>
                    <th style="color: white;">Actual</th>
                    <th style="color: white;">Target</th>
                    <th style="color: white;">Actual</th>
                    <th style="color: white;">Target</th>
                    <th style="color: white;">Actual</th>
                    <th style="color: white;">Target</th>
                    <th style="color: white;">Actual</th>
                    <!-- Add sub-headers for more months -->
                </tr>
            </thead>
            <tbody>
                <br>
                <!-- Repeat for each category -->
                <tr>
                    <td style="font-weight: bolder;">Response Rate</td>
                    <td><input type="number" style="border: white; background-color:lightsteelblue; text-align:center;" value="0" id="cespc-jan-res-target" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; background-color:lightsteelblue; text-align:center;" value="0" id="cespc-jan-res-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; background-color:lightsteelblue; text-align:center;" value="0" id="cespc-feb-res-target" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; background-color:lightsteelblue; text-align:center;" value="0" id="cespc-feb-res-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; background-color:lightsteelblue; text-align:center;" value="0" id="cespc-mar-res-target" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; background-color:lightsteelblue; text-align:center;" value="0" id="cespc-mar-res-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; background-color:lightsteelblue; text-align:center;" value="0" id="cespc-apr-res-target" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; background-color:lightsteelblue; text-align:center;" value="0" id="cespc-apr-res-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; background-color:lightsteelblue; text-align:center;" value="0" id="cespc-may-res-target" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; background-color:lightsteelblue; text-align:center;" value="0" id="cespc-may-res-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; background-color:lightsteelblue; text-align:center;" value="0" id="cespc-jun-res-target" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; background-color:lightsteelblue; text-align:center;" value="0" id="cespc-jun-res-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; background-color:lightsteelblue; text-align:center;" value="0" id="cespc-jul-res-target" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; background-color:lightsteelblue; text-align:center;" value="0" id="cespc-jul-res-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; background-color:lightsteelblue; text-align:center;" value="0" id="cespc-aug-res-target" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; background-color:lightsteelblue; text-align:center;" value="0" id="cespc-aug-res-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; background-color:lightsteelblue; text-align:center;" value="0" id="cespc-sep-res-target" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; background-color:lightsteelblue; text-align:center;" value="0" id="cespc-sep-res-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; background-color:lightsteelblue; text-align:center;" value="0" id="cespc-oct-res-target" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; background-color:lightsteelblue; text-align:center;" value="0" id="cespc-oct-res-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; background-color:lightsteelblue; text-align:center;" value="0" id="cespc-nov-res-target" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; background-color:lightsteelblue; text-align:center;" value="0" id="cespc-nov-res-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; background-color:lightsteelblue; text-align:center;" value="0" id="cespc-dec-res-target" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; background-color:lightsteelblue; text-align:center;" value="0" id="cespc-dec-res-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                </tr>
                <!-- <tr>
                    <td>Raw datafile</td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-jan-raw-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-jan-raw-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-feb-raw-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-feb-raw-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-mar-raw-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-mar-raw-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-apr-raw-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-apr-raw-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-may-raw-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-may-raw-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-jun-raw-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-jun-raw-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-jul-raw-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-jul-raw-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-aug-raw-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-aug-raw-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-sep-raw-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-sep-raw-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-oct-raw-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-oct-raw-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-nov-raw-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-nov-raw-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-dec-raw-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-dec-raw-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr> -->
                <tr>
                    <td>Clean datafile</td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-jan-clean-target" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-jan-clean-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-feb-clean-target" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-feb-clean-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-mar-clean-target" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-mar-clean-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-apr-clean-target" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-apr-clean-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-may-clean-target" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-may-clean-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-jun-clean-target" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-jun-clean-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-jul-clean-target" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-jul-clean-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-aug-clean-target" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-aug-clean-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-sep-clean-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-oct-clean-target" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-oct-clean-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-nov-clean-target" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-nov-clean-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-dec-clean-target" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-dec-clean-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                </tr>
                <tr>
                    <td>Narrative Report</td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-jan-narrative-target" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-jan-narrative-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-feb-narrative-target" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-feb-narrative-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-mar-narrative-target" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-mar-narrative-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-apr-narrative-target" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-apr-narrative-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-may-narrative-target" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-may-narrative-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-jun-narrative-target" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-jun-narrative-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-jul-narrative-target" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-jul-narrative-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-aug-narrative-target" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-aug-narrative-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-sep-narrative-target" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-sep-narrative-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-oct-narrative-target" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-oct-narrative-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-nov-narrative-target" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-nov-narrative-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-dec-narrative-target" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-dec-narrative-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                </tr>
                <tr>
                    <td>Financial Report</td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-jan-financial-target" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-jan-financial-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-feb-financial-target" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-feb-financial-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-mar-financial-target" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-mar-financial-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-apr-financial-target" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-apr-financial-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-may-financial-target" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-may-financial-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-jun-financial-target" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-jun-financial-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-jul-financial-target" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-jul-financial-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-aug-financial-target" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-aug-financial-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-sep-financial-target" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-sep-financial-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-oct-financial-target" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-oct-financial-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-nov-financial-target" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-nov-financial-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-dec-financial-target" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-dec-financial-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                </tr>
                <tr>
                    <td>Updated SSU List</td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-jan-geo-target" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-jan-geo-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-feb-geo-target" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-feb-geo-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-mar-geo-target" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-mar-geo-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-apr-geo-target" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-apr-geo-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-may-geo-target" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-may-geo-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-jun-geo-target" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-jun-geo-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-jul-geo-target" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-jul-geo-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-aug-geo-target" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-aug-geo-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-sep-geo-target" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-sep-geo-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-oct-geo-target" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-oct-geo-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-nov-geo-target" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-nov-geo-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-dec-geo-target" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-dec-geo-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                </tr>
                <tr>
                    <td>Observation Report and Re-interview </td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-jan-observation-target" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-jan-observation-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-feb-observation-target" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-feb-observation-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-mar-observation-target" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-mar-observation-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-apr-observation-target" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-apr-observation-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-may-observation-target" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-may-observation-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-jun-observation-target" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-jun-observation-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-jul-observation-target" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-jul-observation-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-aug-observation-target" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-aug-observation-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-sep-observation-target" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-sep-observation-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-oct-observation-target" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-oct-observation-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-nov-observation-target" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-nov-observation-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-dec-observation-target" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="cespc-dec-observation-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('cespc')"></td>
                </tr>
                <script>
                    // Function to save data to localStorage
                    function saveData(inputId, value) {
                        localStorage.setItem(inputId, value); // Save the input value in localStorage
                    }

                    // On page load, restore the values from localStorage if they exist
                    window.onload = function() {
                        const inputIds = ['cespc-jan-res-target', 'cespc-jan-res-actual', 'cespc-feb-res-target', 'cespc-feb-res-actual', 'cespc-mar-res-target', 'cespc-mar-res-actual', 'cespc-apr-res-target', 'cespc-apr-res-actual', 'cespc-may-res-target', 'cespc-may-res-actual', 'cespc-jun-res-target', 'cespc-jun-res-actual', 'cespc-jan-raw-target', 'cespc-jan-raw-actual', 'cespc-feb-raw-target', 'cespc-feb-raw-actual', 'cespc-mar-raw-target', 'cespc-mar-raw-actual', 'cespc-apr-raw-target',
                            'cespc-apr-raw-actual', 'cespc-may-raw-target', 'cespc-may-raw-actual', 'cespc-jan-clean-target', 'cespc-jan-clean-actual', 'cespc-feb-clean-target', 'cespc-feb-clean-actual', 'cespc-mar-clean-target',
                            'laspinas-mar-clean-actual', 'laspinas-apr-clean-target', 'laspinas-apr-clean-actual', 'laspinas-may-clean-target', 'laspinas-may-clean-actual', 'laspinas-jun-clean-target', 'cespc-jun-clean-actual', 'cespc-jan-financial-target', 'cespc-jan-financial-actual', 'cespc-feb-financial-target', 'cespc-feb-financial-actual', 'cespc-mar-financial-target', 'cespc-mar-financial-actual', 'cespc-apr-financial-target',
                            'cespc-apr-financial-actual', 'cespc-may-financial-target', 'cespc-may-financial-actual',
                            'cespc-jan-narrative-target', 'cespc-jan-narrative-actual', 'cespc-feb-narrative-target', 'cespc-feb-narrative-actual', 'cespc-mar-narrative-target', 'cespc-mar-narrative-actual', 'cespc-apr-narrative-target', 'cespc-apr-narrative-actual', 'cespc-may-narrative-target', 'cespc-may-narrative-actual',
                            'cespc-jan-geo-target', 'cespc-jan-geo-actual', 'cespc-feb-geo-target', 'cespc-feb-geo-actual', 'cespc-mar-geo-target', 'cespc-mar-geo-actual', 'cespc-apr-geo-target', 'cespc-apr-geo-actual', 'cespc-may-geo-target', 'cespc-may-geo-actual', 'cespc-jun-geo-target', 'cespc-jun-geo-actual',
                            'cespc-jan-observation-target', 'cespc-jan-observation-actual', 'cespc-feb-observation-target', 'cespc-feb-observation-actual', 'cespc-mar-observation-target', 'cespc-mar-observation-actual',
                            'cespc-apr-observation-target', 'cespc-apr-observation-actual', 'cespc-may-observation-target', 'cespc-may-observation-actual', 'cespc-jun-observation-target', 'cespc-jun-observation-actual', 'cespc-jul-observation-target', 'cespc-jul-observation-actual',
                        ]; // List of input field IDs,


                        inputIds.forEach(id => {
                            const savedValue = localStorage.getItem(id);
                            if (savedValue !== null) {
                                document.getElementById(id).value = savedValue; // Restore the saved value to the input field
                            }
                        });
                    };
                </script>
                <!-- <tr>
                    <td>Re-interview</td>
                    <td><input type="number" value="0" id="laspinas-jan-reinterview-target" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" value="0" id="laspinas-jan-reinterview-actual" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" value="0" id="laspinas-feb-reinterview-target" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" value="0" id="laspinas-feb-reinterview-actual" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" value="0" id="laspinas-mar-reinterview-target" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" value="0" id="laspinas-mar-reinterview-actual" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" value="0" id="laspinas-apr-reinterview-target" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" value="0" id="laspinas-apr-reinterview-actual" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" value="0" id="laspinas-may-reinterview-target" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" value="0" id="laspinas-may-reinterview-actual" onchange="updateChart('laspinas')"></td>
                </tr> -->
            </tbody>
        </table>
    </div>
    <div class="chart-container">
        <canvas id="cespcChart"></canvas>
    </div>

    <script>
        // Function to update the chart dynamically
        function updateChart(city) {
            const months = ['jan', 'feb', 'mar', 'apr', 'may', 'jun', 'jul', 'aug', 'sep', 'oct', 'nov', 'dec'];
            const categories = ['res', 'raw', 'clean', 'narrative', 'financial', 'geo', 'observation'];

            categories.forEach((category, index) => {
                const targetData = months.map(month => {
                    const targetElement = document.getElementById(`${city}-${month}-${category}-target`);
                    return targetElement ? parseInt(targetElement.value) || 0 : 0;
                });
                const actualData = months.map(month => {
                    const actualElement = document.getElementById(`${city}-${month}-${category}-actual`);
                    return actualElement ? parseInt(actualElement.value) || 0 : 0;
                });

                console.log("Category:", category);
                console.log("Target Data:", targetData);
                console.log("Actual Data:", actualData);

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
                            borderWidth: 1
                        },
                        {
                            label: 'Response Rate Actual',
                            data: [0, 0, 0], // Initialize with 0 values
                            backgroundColor: 'rgba(888, 152, 235, 0.2)',
                            borderColor: 'rgba(54, 162, 235, 1)',
                            borderWidth: 1
                        },
                        {
                            label: 'Raw Datafile Target',
                            data: [0, 0, 0], // Initialize with 0 values
                            backgroundColor: 'rgba(54, 162, 235, 0.2)',
                            borderColor: 'rgba(54, 162, 235, 1)',
                            borderWidth: 1
                        },
                        {
                            label: 'Raw Datafile Actual',
                            data: [0, 0, 0], // Initialize with 0 values
                            backgroundColor: 'rgba(255, 99, 132, 0.2)',
                            borderColor: 'rgba(255, 99, 132, 1)',
                            borderWidth: 1
                        },
                        {
                            label: 'Clean Datafile Target',
                            data: [0, 0, 0], // Initialize with 0 values
                            backgroundColor: 'rgba(75, 192, 192, 0.2)',
                            borderColor: 'rgba(75, 192, 192, 1)',
                            borderWidth: 1
                        },
                        {
                            label: 'Clean Datafile Actual',
                            data: [0, 0, 0], // Initialize with 0 values
                            backgroundColor: 'rgba(153, 102, 255, 0.2)',
                            borderColor: 'rgba(153, 102, 255, 1)',
                            borderWidth: 1
                        },
                        {
                            label: 'Narrative Report Target',
                            data: [0, 0, 0], // Initialize with 0 values
                            backgroundColor: 'rgba(255, 159, 64, 0.2)',
                            borderColor: 'rgba(255, 159, 64, 1)',
                            borderWidth: 1
                        },
                        {
                            label: 'Narrative Report Actual',
                            data: [0, 0, 0], // Initialize with 0 values
                            backgroundColor: 'rgba(255, 205, 86, 0.2)',
                            borderColor: 'rgba(255, 205, 86, 1)',
                            borderWidth: 1
                        },
                        {
                            label: 'Financial Report Target',
                            data: [0, 0, 0], // Initialize with 0 values
                            backgroundColor: 'rgba(201, 203, 207, 0.2)',
                            borderColor: 'rgba(201, 203, 207, 1)',
                            borderWidth: 1
                        },
                        {
                            label: 'Financial Report Actual',
                            data: [0, 0, 0], // Initialize with 0 values
                            backgroundColor: 'rgba(255, 99, 71, 0.2)',
                            borderColor: 'rgba(255, 99, 71, 1)',
                            borderWidth: 1
                        },
                        {
                            label: 'Updated GEO-MS Target',
                            data: [0, 0, 0], // Initialize with 0 values
                            backgroundColor: 'rgba(102, 255, 178, 0.2)',
                            borderColor: 'rgba(102, 255, 178, 1)',
                            borderWidth: 1
                        },
                        {
                            label: 'Updated GEO-MS Actual',
                            data: [0, 0, 0], // Initialize with 0 values
                            backgroundColor: 'rgba(102, 178, 255, 0.2)',
                            borderColor: 'rgba(102, 178, 255, 1)',
                            borderWidth: 1
                        },
                        {
                            label: 'Observation Report and Re interview Target',
                            data: [0, 0, 0], // Initialize with 0 values
                            backgroundColor: 'rgba(255, 204, 204, 0.2)',
                            borderColor: 'rgba(255, 204, 204, 1)',
                            borderWidth: 1
                        },
                        {
                            label: 'Observation Report and Re interview Actual',
                            data: [0, 0, 0], // Initialize with 0 values
                            backgroundColor: 'rgba(204, 255, 204, 0.2)',
                            borderColor: 'rgba(204, 255, 204, 1)',
                            borderWidth: 1
                        },
                        // {
                        //     label: 'Re-interview Target',
                        //     data: [0, 0, 0], // Initialize with 0 values
                        //     backgroundColor: 'rgba(255, 153, 255, 0.2)',
                        //     borderColor: 'rgba(255, 153, 255, 1)',
                        //     borderWidth: 1
                        // },
                        // {
                        //     label: 'Re-interview Actual',
                        //     data: [0, 0, 0], // Initialize with 0 values
                        //     backgroundColor: 'rgba(153, 204, 255, 0.2)',
                        //     borderColor: 'rgba(153, 204, 255, 1)',
                        //     borderWidth: 1
                        // }
                    ]
                },
                options: {
                    responsive: true,
                    plugins: {
                        title: {
                            display: true,
                            text: `Las Piñas Performance Data`, // Dynamic title based on the city
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
                            display: true, // Enable the data labels
                            align: 'end', // Position at the end of each bar
                            anchor: 'end', // Anchor at the end of each bar
                            formatter: (value) => `${value}%`, // Format as percentage
                            font: {
                                size: 12,
                                weight: 'bold',
                                family: 'Arial'
                            },
                            color: '#000', // Label color
                            animation: {
                                duration: 1000, // Duration of the animation
                                easing: 'easeInOutQuart', // Animation easing
                            }
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
                            max: 120, // Maximum value for y-axis
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
            const categories = ['res', 'raw', 'clean', 'narrative', 'financial', 'geo', 'observation'];

            categories.forEach((category, index) => {
                const targetData = months.map(month => loadFromLocalStorage(city, month, category, 'target'));
                const actualData = months.map(month => loadFromLocalStorage(city, month, category, 'actual'));

                // Update the chart's dataset with the saved data
                cityCharts[city].data.datasets[index * 2].data = targetData;
                cityCharts[city].data.datasets[index * 2 + 1].data = actualData;
            });

            cityCharts[city].update(); // Ensure the chart is updated with stored data

        }

        // Initialize charts for each city
        createChart('cespc', 'cespcChart');
    </script>

</body>

</html>