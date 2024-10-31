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
        <a style="background-color: cadetblue; color:white; font-weight: bolder; padding:5px" href="laspiñas_graph.php" class="btn btn-primary active">LAS PIÑAS CITY</a>
    </div>

    <br>

    <div>
        <a style="background-color: #0A414F; color:white; font-weight:bolder; padding:5px" href="ces_muntinlupa.php" class="btn btn-primary">MUNTINLUPA CITY</a>
    </div>

    <br>

    <div>
        <a style="background-color: #0a414f; color:white; font-weight:bolder; padding:5px" href="ces_parañaque.php" class="btn btn-primary">PARAÑAQUE CITY</a>
    </div>

    <br>

    <div>
        <a style="background-color: #0a414f; color:white; font-weight:bolder; padding:5px" href="ces_pasay.php" class="btn btn-primary">PASAY CITY</a>
    </div>

</div>
<!-------------------------------------------------------------------------------->
<!-------------------------------------- BY CITY BUTTON END----------------------->
<!-------------------------------------------------------------------------------->

<body>
    <h2 style="text-align:center;">LAS PIÑAS CITY</h2>
    <!-- City Section for Las Piñas -->
    <div class="city-header" style="font-weight: bolder;background-color:teal; width:100%">Consumer Expectations Survey</div>
    <div>
        <a style="background-color:#0A414F; color:white; border-radius:7px; font-weight: bolder; padding:5px" href="../table with dashboard/progress.php" class="btn btn-primary active">SELECT PROJECT</a>
    </div>
    <div class="city-section" id="laspinas-section">
        <table>
            <thead>
                <tr>
                    <th style="color: white; font-size:12px;">Category</th>
                    <th style="color: white; font-size:12px;" colspan="2">January</th>
                    <th style="color: white; font-size:12px;" colspan="2">February</th>
                    <th style="color: white; font-size:12px;" colspan="2">March</th>
                    <th style="color: white; font-size:12px;" colspan="2">April</th>
                    <th style="color: white; font-size:12px;" colspan="2">May</th>
                    <th style="color: white; font-size:12px;" colspan="2">June</th>
                    <th style="color: white; font-size:12px;" colspan="2">July</th>
                    <th style="color: white; font-size:12px;" colspan="2">August</th>
                    <th style="color: white; font-size:12px;" colspan="2">September</th>
                    <th style="color: white; font-size:12px;" colspan="2">October</th>
                    <th style="color: white; font-size:12px;" colspan="2">November</th>
                    <th style="color: white; font-size:12px;" colspan="2">December</th>
                    <!-- Add more months as needed -->
                </tr>
                <tr>
                    <th></th>
                    <th style="color: white; font-size:12px;">Target</th>
                    <th style="color: white; font-size:12px;">Actual</th>
                    <th style="color: white; font-size:12px;">Target</th>
                    <th style="color: white; font-size:12px;">Actual</th>
                    <th style="color: white; font-size:12px;">Target</th>
                    <th style="color: white; font-size:12px;">Actual</th>
                    <th style="color: white; font-size:12px;">Target</th>
                    <th style="color: white; font-size:12px;">Actual</th>
                    <th style="color: white; font-size:12px;">Target</th>
                    <th style="color: white; font-size:12px;">Actual</th>
                    <th style="color: white; font-size:12px;">Target</th>
                    <th style="color: white; font-size:12px;">Actual</th>
                    <th style="color: white; font-size:12px;">Target</th>
                    <th style="color: white; font-size:12px;">Actual</th>
                    <th style="color: white; font-size:12px;">Target</th>
                    <th style="color: white; font-size:12px;">Actual</th>
                    <th style="color: white; font-size:12px;">Target</th>
                    <th style="color: white; font-size:12px;">Actual</th>
                    <th style="color: white; font-size:12px;">Target</th>
                    <th style="color: white; font-size:12px;">Actual</th>
                    <th style="color: white; font-size:12px;">Target</th>
                    <th style="color: white; font-size:12px;">Actual</th>
                    <th style="color: white; font-size:12px;">Target</th>
                    <th style="color: white; font-size:12px;">Actual</th>
                    <!-- Add sub-headers for more months -->
                </tr>
            </thead>
            <tbody>
                <br>
                <!-- Repeat for each category -->
                <tr>
                    <td style="font-weight: bolder; font-size:12px;">Response Rate</td>
                    <td><input type="number" style="border: white; font-size:9px; background-color:lightsteelblue; text-align:center;" value="0" id="ceslp-jan-res-target" oninput="saveData(this.id, this.value)" onchange="updateChart('ceslp')"></td>
                    <td><input type="number" style="border: white; font-size:9px; background-color:lightsteelblue; text-align:center;" value="0" id="ceslp-jan-res-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('ceslp')"></td>
                    <td><input type="number" style="border: white; font-size:9px; background-color:lightsteelblue; text-align:center;" value="0" id="ceslp-feb-res-target" oninput="saveData(this.id, this.value)" onchange="updateChart('ceslp')"></td>
                    <td><input type="number" style="border: white; font-size:9px; background-color:lightsteelblue; text-align:center;" value="0" id="ceslp-feb-res-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('ceslp')"></td>
                    <td><input type="number" style="border: white; font-size:9px; background-color:lightsteelblue; text-align:center;" value="0" id="ceslp-mar-res-target" oninput="saveData(this.id, this.value)" onchange="updateChart('ceslp')"></td>
                    <td><input type="number" style="border: white; font-size:9px; background-color:lightsteelblue; text-align:center;" value="0" id="ceslp-mar-res-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('ceslp')"></td>
                    <td><input type="number" style="border: white; font-size:9px; background-color:lightsteelblue; text-align:center;" value="0" id="ceslp-apr-res-target" oninput="saveData(this.id, this.value)" onchange="updateChart('ceslp')"></td>
                    <td><input type="number" style="border: white; font-size:9px; background-color:lightsteelblue; text-align:center;" value="0" id="ceslp-apr-res-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('ceslp')"></td>
                    <td><input type="number" style="border: white; font-size:9px; background-color:lightsteelblue; text-align:center;" value="0" id="ceslp-may-res-target" oninput="saveData(this.id, this.value)" onchange="updateChart('ceslp')"></td>
                    <td><input type="number" style="border: white; font-size:9px; background-color:lightsteelblue; text-align:center;" value="0" id="ceslp-may-res-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('ceslp')"></td>
                    <td><input type="number" style="border: white; font-size:9px; background-color:lightsteelblue; text-align:center;" value="0" id="ceslp-jun-res-target" oninput="saveData(this.id, this.value)" onchange="updateChart('ceslp')"></td>
                    <td><input type="number" style="border: white; font-size:9px; background-color:lightsteelblue; text-align:center;" value="0" id="ceslp-jun-res-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('ceslp')"></td>
                    <td><input type="number" style="border: white; font-size:9px; background-color:lightsteelblue; text-align:center;" value="0" id="ceslp-jul-res-target" oninput="saveData(this.id, this.value)" onchange="updateChart('ceslp')"></td>
                    <td><input type="number" style="border: white; font-size:9px; background-color:lightsteelblue; text-align:center;" value="0" id="ceslp-jul-res-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('ceslp')"></td>
                    <td><input type="number" style="border: white; font-size:9px; background-color:lightsteelblue; text-align:center;" value="0" id="ceslp-aug-res-target" oninput="saveData(this.id, this.value)" onchange="updateChart('ceslp')"></td>
                    <td><input type="number" style="border: white; font-size:9px; background-color:lightsteelblue; text-align:center;" value="0" id="ceslp-aug-res-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('ceslp')"></td>
                    <td><input type="number" style="border: white; font-size:9px; background-color:lightsteelblue; text-align:center;" value="0" id="ceslp-sep-res-target" oninput="saveData(this.id, this.value)" onchange="updateChart('ceslp')"></td>
                    <td><input type="number" style="border: white; font-size:9px; background-color:lightsteelblue; text-align:center;" value="0" id="ceslp-sep-res-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('ceslp')"></td>
                    <td><input type="number" style="border: white; font-size:9px; background-color:lightsteelblue; text-align:center;" value="0" id="ceslp-oct-res-target" oninput="saveData(this.id, this.value)" onchange="updateChart('ceslp')"></td>
                    <td><input type="number" style="border: white; font-size:9px; background-color:lightsteelblue; text-align:center;" value="0" id="ceslp-oct-res-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('ceslp')"></td>
                    <td><input type="number" style="border: white; font-size:9px; background-color:lightsteelblue; text-align:center;" value="0" id="ceslp-nov-res-target" oninput="saveData(this.id, this.value)" onchange="updateChart('ceslp')"></td>
                    <td><input type="number" style="border: white; font-size:9px; background-color:lightsteelblue; text-align:center;" value="0" id="ceslp-nov-res-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('ceslp')"></td>
                    <td><input type="number" style="border: white; font-size:9px; background-color:lightsteelblue; text-align:center;" value="0" id="ceslp-dec-res-target" oninput="saveData(this.id, this.value)" onchange="updateChart('ceslp')"></td>
                    <td><input type="number" style="border: white; font-size:9px; background-color:lightsteelblue; text-align:center;" value="0" id="ceslp-dec-res-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('ceslp')"></td>
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
                    <td style="font-size:12px;">Clean datafile</td>
                    <td><input type="number" style="border: white; font-size:9px; text-align:center;" value="0" id="ceslp-jan-clean-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; font-size:9px; text-align:center;" value="0" id="ceslp-jan-clean-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; font-size:9px; text-align:center;" value="0" id="ceslp-feb-clean-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; font-size:9px; text-align:center;" value="0" id="ceslp-feb-clean-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; font-size:9px; text-align:center;" value="0" id="ceslp-mar-clean-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; font-size:9px; text-align:center;" value="0" id="ceslp-mar-clean-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; font-size:9px; text-align:center;" value="0" id="ceslp-apr-clean-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; font-size:9px; text-align:center;" value="0" id="ceslp-apr-clean-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; font-size:9px; text-align:center;" value="0" id="ceslp-may-clean-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; font-size:9px; text-align:center;" value="0" id="ceslp-may-clean-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; font-size:9px; text-align:center;" value="0" id="ceslp-jun-clean-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; font-size:9px; text-align:center;" value="0" id="ceslp-jun-clean-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; font-size:9px; text-align:center;" value="0" id="ceslp-jul-clean-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; font-size:9px; text-align:center;" value="0" id="ceslp-jul-clean-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; font-size:9px;text-align:center;" value="0" id="ceslp-aug-clean-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; font-size:9px; text-align:center;" value="0" id="ceslp-aug-clean-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; font-size:9px; text-align:center;" value="0" id="ceslp-sep-clean-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; font-size:9px; text-align:center;" value="0" id="ceslp-sep-clean-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; font-size:9px; text-align:center;" value="0" id="ceslp-oct-clean-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; font-size:9px; text-align:center;" value="0" id="ceslp-oct-clean-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; font-size:9px; text-align:center;" value="0" id="ceslp-nov-clean-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; font-size:9px; text-align:center;" value="0" id="ceslp-nov-clean-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; font-size:9px; text-align:center;" value="0" id="ceslp-dec-clean-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; font-size:9px; text-align:center;" value="0" id="ceslp-dec-clean-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px;">Narrative Report</td>
                    <td><input type="number" style="border: white; font-size:9px; text-align:center;" value="0" id="ceslp-jan-narrative-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; font-size:9px; text-align:center;" value="0" id="ceslp-jan-narrative-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; font-size:9px;text-align:center;" value="0" id="ceslp-feb-narrative-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; font-size:9px; text-align:center;" value="0" id="ceslp-feb-narrative-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; font-size:9px; text-align:center;" value="0" id="ceslp-mar-narrative-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; font-size:9px; text-align:center;" value="0" id="ceslp-mar-narrative-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; font-size:9px; text-align:center;" value="0" id="ceslp-apr-narrative-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; font-size:9px;text-align:center;" value="0" id="ceslp-apr-narrative-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; font-size:9px; text-align:center;" value="0" id="ceslp-may-narrative-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; font-size:9px; text-align:center;" value="0" id="ceslp-may-narrative-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; font-size:9px; text-align:center;" value="0" id="ceslp-jun-narrative-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; font-size:9px; text-align:center;" value="0" id="ceslp-jun-narrative-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; font-size:9px; text-align:center;" value="0" id="ceslp-jul-narrative-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; font-size:9px; text-align:center;" value="0" id="ceslp-jul-narrative-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; font-size:9px; text-align:center;" value="0" id="ceslp-aug-narrative-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; font-size:9px; text-align:center;" value="0" id="ceslp-aug-narrative-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; font-size:9px; text-align:center;" value="0" id="ceslp-sep-narrative-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; font-size:9px; text-align:center;" value="0" id="ceslp-sep-narrative-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; font-size:9px; text-align:center;" value="0" id="ceslp-oct-narrative-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; font-size:9px; text-align:center;" value="0" id="ceslp-oct-narrative-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; font-size:9px; text-align:center;" value="0" id="ceslp-nov-narrative-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; font-size:9px; text-align:center;" value="0" id="ceslp-nov-narrative-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; font-size:9px; text-align:center;" value="0" id="ceslp-dec-narrative-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; font-size:9px; text-align:center;" value="0" id="ceslp-dec-narrative-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px;">Financial Report</td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="ceslp-jan-financial-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="ceslp-jan-financial-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="ceslp-feb-financial-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="ceslp-feb-financial-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="ceslp-mar-financial-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="ceslp-mar-financial-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="ceslp-apr-financial-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="ceslp-apr-financial-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="ceslp-may-financial-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="ceslp-may-financial-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="ceslp-jun-financial-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="ceslp-jun-financial-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="ceslp-jul-financial-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="ceslp-jul-financial-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="ceslp-aug-financial-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="ceslp-aug-financial-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="ceslp-sep-financial-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="ceslp-sep-financial-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="ceslp-oct-financial-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="ceslp-oct-financial-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="ceslp-nov-financial-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="ceslp-nov-financial-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="ceslp-dec-financial-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="ceslp-dec-financial-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px;">Updated SSU List</td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="ceslp-jan-geo-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="ceslp-jan-geo-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="ceslp-feb-geo-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="ceslp-feb-geo-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="ceslp-mar-geo-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="ceslp-mar-geo-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="ceslp-apr-geo-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="ceslp-apr-geo-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="ceslp-may-geo-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="ceslp-may-geo-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="ceslp-jun-geo-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="ceslp-jun-geo-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="ceslp-jul-geo-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="ceslp-jul-geo-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="ceslp-aug-geo-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="ceslp-aug-geo-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="ceslp-sep-geo-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="ceslp-sep-geo-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="ceslp-oct-geo-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="ceslp-oct-geo-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="ceslp-nov-geo-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="ceslp-nov-geo-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="ceslp-dec-geo-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="ceslp-dec-geo-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:10px;">Observation Report and Re-interview </td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="ceslp-jan-observation-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="ceslp-jan-observation-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="ceslp-feb-observation-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="ceslp-feb-observation-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="ceslp-mar-observation-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="ceslp-mar-observation-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="ceslp-apr-observation-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="ceslp-apr-observation-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="ceslp-may-observation-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="ceslp-may-observation-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="ceslp-jun-observation-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="ceslp-jun-observation-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="ceslp-jul-observation-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="ceslp-jul-observation-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="ceslp-aug-observation-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="ceslp-aug-observation-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="ceslp-sep-observation-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="ceslp-sep-observation-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="ceslp-oct-observation-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="ceslp-oct-observation-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="ceslp-nov-observation-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="ceslp-nov-observation-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="ceslp-dec-observation-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="ceslp-dec-observation-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <script>
                    // Function to save data to localStorage
                    function saveData(inputId, value) {
                        localStorage.setItem(inputId, value); // Save the input value in localStorage
                    }

                    // On page load, restore the values from localStorage if they exist
                    window.onload = function() {
                        const inputIds = ['ceslp-jan-res-target', 'ceslp-jan-res-actual', 'ceslp-feb-res-target', 'ceslp-feb-res-actual', 'ceslp-mar-res-target', 'ceslp-mar-res-actual', 'ceslp-apr-res-target', 'ceslp-apr-res-actual', 'ceslp-may-res-target', 'ceslp-may-res-actual', 'ceslp-jun-res-target', 'ceslp-jun-res-actual', 'ceslp-jan-raw-target', 'ceslp-jan-raw-actual', 'ceslp-feb-raw-target', 'ceslp-feb-raw-actual', 'ceslp-mar-raw-target', 'ceslp-mar-raw-actual', 'ceslp-apr-raw-target',
                            'ceslp-apr-raw-actual', 'ceslp-may-raw-target', 'ceslp-may-raw-actual', 'ceslp-jan-clean-target', 'ceslp-jan-clean-actual', 'ceslp-feb-clean-target', 'ceslp-feb-clean-actual', 'ceslp-mar-clean-target',
                            'laspinas-mar-clean-actual', 'laspinas-apr-clean-target', 'laspinas-apr-clean-actual', 'laspinas-may-clean-target', 'laspinas-may-clean-actual', 'laspinas-jun-clean-target', 'ceslp-jun-clean-actual', 'ceslp-jan-financial-target', 'ceslp-jan-financial-actual', 'ceslp-feb-financial-target', 'ceslp-feb-financial-actual', 'ceslp-mar-financial-target', 'ceslp-mar-financial-actual', 'ceslp-apr-financial-target',
                            'ceslp-apr-financial-actual', 'ceslp-may-financial-target', 'ceslp-may-financial-actual',
                            'ceslp-jan-narrative-target', 'ceslp-jan-narrative-actual', 'ceslp-feb-narrative-target', 'ceslp-feb-narrative-actual', 'ceslp-mar-narrative-target', 'ceslp-mar-narrative-actual', 'ceslp-apr-narrative-target', 'ceslp-apr-narrative-actual', 'ceslp-may-narrative-target', 'ceslp-may-narrative-actual',
                            'ceslp-jan-geo-target', 'ceslp-jan-geo-actual', 'ceslp-feb-geo-target', 'ceslp-feb-geo-actual', 'ceslp-mar-geo-target', 'ceslp-mar-geo-actual', 'ceslp-apr-geo-target', 'ceslp-apr-geo-actual', 'ceslp-may-geo-target', 'ceslp-may-geo-actual', 'ceslp-jun-geo-target', 'ceslp-jun-geo-actual',
                            'ceslp-jan-observation-target', 'ceslp-jan-observation-actual', 'ceslp-feb-observation-target', 'ceslp-feb-observation-actual', 'ceslp-mar-observation-target', 'ceslp-mar-observation-actual',
                            'ceslp-apr-observation-target', 'ceslp-apr-observation-actual', 'ceslp-may-observation-target', 'ceslp-may-observation-actual', 'ceslp-jun-observation-target', 'ceslp-jun-observation-actual', 'ceslp-jul-observation-target', 'ceslp-jul-observation-actual',
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
        <canvas id="ceslpChart"></canvas>
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
        createChart('ceslp', 'ceslpChart');
    </script>

</body>

</html>