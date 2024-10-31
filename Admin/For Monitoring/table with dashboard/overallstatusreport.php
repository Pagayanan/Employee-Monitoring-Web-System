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
            /* max-width: 100vw; */
            align-items: center;
            margin: 2px auto;
            width: 100%;
        }

        .city-section-feb {
            overflow: scroll;
            max-width: 100vw;
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
        <a style="background-color:#0A414F; color:white; font-weight: bolder; padding:5px" href="NCR-V.php" class="btn btn-primary active">NCR-V</a>
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
        <a style="background-color: cadetblue; color:white; font-weight: bolder; padding:5px" href="laspiñas_graph.php" class="btn btn-primary active">OVERALL WEEKLY Status Report on Enumeration</a>
    </div>
</div>
<!-------------------------------------------------------------------------------->
<!-------------------------------------- BY CITY BUTTON END----------------------->
<!-------------------------------------------------------------------------------->

<body>
    <!-- <h2 style="text-align:center">NCR-V</h2> -->
    <!-- City Section for Las Piñas -->
    <div class="city-header" style="font-weight: bolder; background-color:darkgoldenrod;">LABOR FORCE SURVEY</div>
    <div class="city-header" style="font-weight: bolder; background-color:cornsilk;">OVERALL WEEKLY Status Report on Enumeration</div>
    <div>
        <a style="background-color:#0A414F; color:white; border-radius:7px; font-weight: bolder; padding:5px" href="progress.php" class="btn btn-primary active">SELECT PROJECT</a>
    </div>
    <div class="city-section" id="laspinas-section">
        <table style="width: 5px; height: 100px;">
            <thead style="width:10px">
                <tr>
                    <th style="color: white; font-size:30px; text-align:justify; color:khaki" colspan="13">JANUARY</th>
                </tr>
                <tr style="width:10px;">
                    <th style="color: white; font-size:13px;" colspan="1">City</th>
                    <th style="color: white; font-size:13px;" colspan="1">Original Sample</th>
                    <th style="color: white; font-size:13px;" colspan="1">Add'l HHs</th>
                    <th style="color: white; font-size:13px;" colspan="1">Total</th>
                    <th style="color: white; font-size:13px;" colspan="1">Completed</th>
                    <th style="color: white; font-size:13px;" colspan="1">Refusal</th>
                    <th style="color: white; font-size:13px;" colspan="1">Entire HH Absent for<br>Extended Period of Time</th>
                    <th style="color: white; font-size:13px;" colspan="1">Housing Unit<br>Not Found</th>
                    <th style="color: white; font-size:13px" colspan="1">Housing Unit Destroyed/<br>Demolished NOT REPLACED</th>
                    <th style="color: white; font-size:13px" colspan="1">Address Not a Housing Unit Not <br>REPLACED</th>
                    <th style="color: white; font-size:13px" colspan="1">Permanently Moved Out (PMO), Not <br>usual resident (NUR),<br>Single person occupying housing unit<br>(SPOHU) passed away,<br>others<br>NOT REPLACED</th>
                    <th style="color: white; font-size:13px" colspan="1">Merged with another <br>household</th>
                    <th style="color: white; font-size:13px" colspan="1">Others</th>
                </tr>
                <tr>
                    <th style="color: white; font-size:9px"></th>
                    <th style="color: white; font-size:9px"></th>
                    <th style="color: white; font-size:9px"></th>
                    <th style="color: white; font-size:9px"></th>
                    <th style="color: white; font-size:9px">1</th>
                    <th style="color: white; font-size:9px">2</th>
                    <th style="color: white; font-size:9px">3</th>
                    <th style="color: white; font-size:9px">7</th>
                    <th style="color: white; font-size:9px">51</th>
                    <th style="color: white; font-size:9px">61</th>
                    <th style="color: white; font-size:9px">91</th>
                    <th style="color: white; font-size:9px">98</th>
                    <th style="color: white; font-size:9px">99</th>
                </tr>
            </thead>
            <tbody>
                <br>
                <!---------------------------------------------------RESPONSE RATE---------------------------------------------------------------------------------------------------->
                <tr>
                    <td style="font-weight:bolder; background-color: cornsilk; font-size: 12px;">Las Piñas</td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="lp-cell-1" oninput="saveToLocalStorage('lp-cell-1')">
                    </td>
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="lp-cell-2" oninput="saveToLocalStorage('lp-cell-2')">
                    </td>
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="lp-cell-3" oninput="saveToLocalStorage('lp-cell-3')">
                    </td>
                    </td>



                    <td>
                        <input type="number" style="border: white; text-align:center;" id="lp-cell-4" oninput="saveToLocalStorage('lp-cell-4')">
                    </td>
                    <td>
                        <input type="mumber" style="border: white; text-align:center;" id="lp-cell-5" oninput="saveToLocalStorage('lp-cell-5')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="lp-cell-6" oninput="saveToLocalStorage('lp-cell-6')">
                    </td>



                    <td>
                        <input type="number" style="border: white; text-align:center;" id="lp-cell-7" oninput="saveToLocalStorage('lp-cell-7')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="lp-cell-8" oninput="saveToLocalStorage('lp-cell-8')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="lp-cell-9" oninput="saveToLocalStorage('lp-cell-9')">
                    </td>



                    <td>
                        <input type="number" style="border: white; text-align:center;" id="lp-cell-10" oninput="saveToLocalStorage('lp-cell-10')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="lp-cell-11" oninput="saveToLocalStorage('lp-cell-11')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="lp-cell-12" oninput="saveToLocalStorage('lp-cell-12')">
                    </td>

                </tr>

                <!---------------------------------------------------RESPONSE RATE END---------------------------------------------------------------------------------------------------->
                <tr>
                    <td style="font-weight:bolder; background-color:cornsilk; font-size: 12px;">Muntinlupa</td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="mc-cell-1" oninput="saveToLocalStorage('mc-cell-1')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="mc-cell-2" oninput="saveToLocalStorage('mc-cell-2')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; " id="mc-cell-3" oninput="saveToLocalStorage('mc-cell-3')">
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="mc-cell-4" oninput="saveToLocalStorage('mc-cell-4')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="mc-cell-5" oninput="saveToLocalStorage('mc-cell-5')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="mc-cell-6" oninput="saveToLocalStorage('mc-cell-6')">
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center;" id="mc-cell-7" oninput="saveToLocalStorage('mc-cell-7')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="mc-cell-8" oninput="saveToLocalStorage('mc-cell-8')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="mc-cell-9" oninput="saveToLocalStorage('mc-cell-9')">
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center;" id="mc-cell-10" oninput="saveToLocalStorage('mc-cell-10')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="mc-cell-11" oninput="saveToLocalStorage('mc-cell-11')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="mc-cell-12" oninput="saveToLocalStorage('mc-cell-12')">
                    </td>


                </tr>
                <tr>
                    <td style="font-weight:bolder; background-color:cornsilk; font-size: 12px;">Parañaque</td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="pq-cell-1" oninput="saveToLocalStorage('pq-cell-1')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="pq-cell-2" oninput="saveToLocalStorage('pq-cell-2')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="pq-cell-3" oninput="saveToLocalStorage('pq-cell-3')">
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="pq-cell-4" oninput="saveToLocalStorage('pq-cell-4')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="pq-cell-5" oninput="saveToLocalStorage('pq-cell-5')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="pq-cell-6" oninput="saveToLocalStorage('pq-cell-6')">
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center;" id="pq-cell-7" oninput="saveToLocalStorage('pq-cell-7')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="pq-cell-8" oninput="saveToLocalStorage('pq-cell-8')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="pq-cell-9" oninput="saveToLocalStorage('pq-cell-9')">
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center;" id="pq-cell-10" oninput="saveToLocalStorage('pq-cell-10')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="pq-cell-11" oninput="saveToLocalStorage('pq-cell-11')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="pq-cell-12" oninput="saveToLocalStorage('pq-cell-12')">
                    </td>

                <tr>
                    <td style="font-weight:bolder; background-color:cornsilk; font-size:12px;">Pasay</td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="pc-cell-1" oninput="saveToLocalStorage('pc-cell-1')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="pc-cell-2" oninput="saveToLocalStorage('pc-cell-2')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="pc-cell-3" oninput="saveToLocalStorage('pc-cell-3')">
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="pc-cell-4" oninput="saveToLocalStorage('pc-cell-4')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="pc-cell-5" oninput="saveToLocalStorage('pc-cell-5')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="pc-cell-6" oninput="saveToLocalStorage('pc-cell-6')">
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center;" id="pc-cell-7" oninput="saveToLocalStorage('pc-cell-7')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="pc-cell-8" oninput="saveToLocalStorage('pc-cell-8')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="pc-cell-9" oninput="saveToLocalStorage('pc-cell-9')">
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center;" id="pc-cell-10" oninput="saveToLocalStorage('pc-cell-10')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="pc-cell-11" oninput="saveToLocalStorage('pc-cell-11')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="pc-cell-12" oninput="saveToLocalStorage('pc-cell-12')">
                    </td>
                </tr>


                <tr>
                    <td style="font-weight:bolder; background-color:cornsilk; font-size:12px;">Total</td>

                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="total-cell-1" oninput="saveToLocalStorage('total-cell-1')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="total-cell-2" oninput="saveToLocalStorage('total-cell-2')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="total-cell-3" oninput="saveToLocalStorage('total-cell-3')">
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="total-cell-4" oninput="saveToLocalStorage('total-cell-4')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="total-cell-5" oninput="saveToLocalStorage('total-cell-5')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="total-cell-6" oninput="saveToLocalStorage('total-cell-6')">
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="total-cell-7" oninput="saveToLocalStorage('total-cell-7')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="total-cell-8" oninput="saveToLocalStorage('total-cell-8')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="total-cell-9" oninput="saveToLocalStorage('total-cell-9')">
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="total-cell-10" oninput="saveToLocalStorage('total-cell-10')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="total-cell-11" oninput="saveToLocalStorage('total-cell-11')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="total-cell-12" oninput="saveToLocalStorage('total-cell-12')">
                    </td>
                </tr>
            </tbody>




        </table>
    </div>
    <div class="city-section-feb" id="laspinas-section">
        <table style="width: 5px; height: 100px;" id="second">
            <thead style="width:10px">
                <tr>
                    <th style="color: white; font-size:30px; text-align:justify; color:khaki" colspan="14">FEBRUARY</th>
                </tr>
                <tr style="width:10px;">
                    <th style="color: white; font-size:13px;" colspan="1">City</th>
                    <th style="color: white; font-size:13px;" colspan="1">Original Sample</th>
                    <th style="color: white; font-size:13px;" colspan="1">Add'l HHs</th>
                    <th style="color: white; font-size:13px;" colspan="1">Total</th>
                    <th style="color: white; font-size:13px;" colspan="1">Completed</th>
                    <th style="color: white; font-size:13px;" colspan="1">Refusal</th>
                    <th style="color: white; font-size:13px;" colspan="1">Entire HH Absent for<br>Extended Period of Time</th>
                    <th style="color: white; font-size:13px;" colspan="1">Vacant Housing Unit<br>(VHU) NOT<br>REPLACED</th>
                    <th style="color: white; font-size:13px;" colspan="1">VHU WIDTH REPLACEMENT</th>
                    <th style="color: white; font-size:13px" colspan="1">VHU WITH NEW<br>OCCUPANT</th>
                    <th style="color: white; font-size:13px" colspan="1">Permanently Moved Out (PMO), Not <br>usual resident (NUR),<br>Single person occupying housing unit<br>(SPOHU) passed away,<br>others<br>NOT REPLACED</th>
                    <th style="color: white; font-size:13px" colspan="1">PMO WITH <br>REPLACEMENT</th>
                    <th style="color: white; font-size:13px" colspan="1">PMO WITH <br> NEW OCCUPANT</th>
                    <th style="color: white; font-size:13px" colspan="1">NUR WITH<br>REPLACEMENT</th>
                </tr>
                <tr>
                    <th style="color: white; font-size:9px"></th>
                    <th style="color: white; font-size:9px"></th>
                    <th style="color: white; font-size:9px"></th>
                    <th style="color: white; font-size:9px"></th>
                    <th style="color: white; font-size:9px">1</th>
                    <th style="color: white; font-size:9px">2</th>
                    <th style="color: white; font-size:9px">3</th>
                    <th style="color: white; font-size:9px">41</th>
                    <th style="color: white; font-size:9px">42</th>
                    <th style="color: white; font-size:9px">43</th>
                    <th style="color: white; font-size:9px">91</th>
                    <th style="color: white; font-size:9px">92</th>
                    <th style="color: white; font-size:9px">93</th>
                    <th style="color: white; font-size:9px">94</th>
                </tr>
            </thead>

            <tbody>
                <br>
                <!---------------------------------------------------RESPONSE RATE---------------------------------------------------------------------------------------------------->
                <tr>
                    <td style="font-weight:bolder; background-color: cornsilk; font-size: 12px;">Las Piñas</td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="feblp-cell-1" oninput="saveToLocalStorage('feblp-cell-1')">
                    </td>
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="feblp-cell-2" oninput="saveToLocalStorage('feblp-cell-2')">
                    </td>
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="feblp-cell-3" oninput="saveToLocalStorage('feblp-cell-3')">
                    </td>
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center;" id="feblp-cell-4" oninput="saveToLocalStorage('feblp-cell-4')">
                    </td>
                    <td>
                        <input type="mumber" style="border: white; text-align:center;" id="feblp-cell-5" oninput="saveToLocalStorage('feblp-cell-5')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="feblp-cell-6" oninput="saveToLocalStorage('feblp-cell-6')">
                    </td>



                    <td>
                        <input type="number" style="border: white; text-align:center;" id="feblp-cell-7" oninput="saveToLocalStorage('feblp-cell-7')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="feblp-cell-8" oninput="saveToLocalStorage('feblp-cell-8')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="feblp-cell-9" oninput="saveToLocalStorage('feblp-cell-9')">
                    </td>



                    <td>
                        <input type="number" style="border: white; text-align:center;" id="feblp-cell-10" oninput="saveToLocalStorage('feblp-cell-10')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="feblp-cell-11" oninput="saveToLocalStorage('feblp-cell-11')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="feblp-cell-12" oninput="saveToLocalStorage('feblp-cell-12')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="feblp-cell-13" oninput="saveToLocalStorage('feblp-cell-13')">
                    </td>
                </tr>
                <!---------------------------------------------------RESPONSE RATE END---------------------------------------------------------------------------------------------------->
                <tr>
                    <td style="font-weight:bolder; background-color:cornsilk; font-size: 12px;">Muntinlupa</td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="febmc-cell-1" oninput="saveToLocalStorage('febmc-cell-1')">
                    </td>
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="febmc-cell-2" oninput="saveToLocalStorage('febmc-cell-2')">
                    </td>
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="febmc-cell-3" oninput="saveToLocalStorage('febmc-cell-3')">
                    </td>
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center;" id="febmc-cell-4" oninput="saveToLocalStorage('febmc-cell-4')">
                    </td>
                    <td>
                        <input type="mumber" style="border: white; text-align:center;" id="febmc-cell-5" oninput="saveToLocalStorage('febmc-cell-5')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="febmc-cell-6" oninput="saveToLocalStorage('febmc-cell-6')">
                    </td>



                    <td>
                        <input type="number" style="border: white; text-align:center;" id="febmc-cell-7" oninput="saveToLocalStorage('febmc-cell-7')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="febmc-cell-8" oninput="saveToLocalStorage('febmc-cell-8')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="febmc-cell-9" oninput="saveToLocalStorage('febmc-cell-9')">
                    </td>



                    <td>
                        <input type="number" style="border: white; text-align:center;" id="febmc-cell-10" oninput="saveToLocalStorage('febmc-cell-10')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="febmc-cell-11" oninput="saveToLocalStorage('febmc-cell-11')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="febmc-cell-12" oninput="saveToLocalStorage('febmc-cell-12')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="febmc-cell-13" oninput="saveToLocalStorage('febmc-cell-13')">
                    </td>

                </tr>
                <tr>
                    <td style="font-weight:bolder; background-color:cornsilk; font-size: 12px;">Parañaque</td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="febpq-cell-1" oninput="saveToLocalStorage('febpq-cell-1')">
                    </td>
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="febpq-cell-2" oninput="saveToLocalStorage('febpq-cell-2')">
                    </td>
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="febpq-cell-3" oninput="saveToLocalStorage('febpq-cell-3')">
                    </td>
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center;" id="febpq-cell-4" oninput="saveToLocalStorage('febpq-cell-4')">
                    </td>
                    <td>
                        <input type="mumber" style="border: white; text-align:center;" id="febpq-cell-5" oninput="saveToLocalStorage('febpq-cell-5')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="febpq-cell-6" oninput="saveToLocalStorage('febpq-cell-6')">
                    </td>



                    <td>
                        <input type="number" style="border: white; text-align:center;" id="febpq-cell-7" oninput="saveToLocalStorage('febpq-cell-7')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="febpq-cell-8" oninput="saveToLocalStorage('febpq-cell-8')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="febpq-cell-9" oninput="saveToLocalStorage('febpq-cell-9')">
                    </td>



                    <td>
                        <input type="number" style="border: white; text-align:center;" id="febpq-cell-10" oninput="saveToLocalStorage('febpq-cell-10')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="febpq-cell-11" oninput="saveToLocalStorage('febpq-cell-11')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="febpq-cell-12" oninput="saveToLocalStorage('febpq-cell-12')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="febpq-cell-13" oninput="saveToLocalStorage('febpq-cell-13')">
                    </td>

                <tr>
                    <td style="font-weight:bolder; background-color:cornsilk; font-size:12px;">Pasay</td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="febpc-cell-1" oninput="saveToLocalStorage('febpc-cell-1')">
                    </td>
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="febpc-cell-2" oninput="saveToLocalStorage('febpc-cell-2')">
                    </td>
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="febpc-cell-3" oninput="saveToLocalStorage('febpc-cell-3')">
                    </td>
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="febpc-cell-4" oninput="saveToLocalStorage('febpc-cell-4')">
                    </td>
                    <td>
                        <input type="mumber" style="border: white; text-align:center;" id="febpc-cell-5" oninput="saveToLocalStorage('febpc-cell-5')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="febpc-cell-6" oninput="saveToLocalStorage('febpc-cell-6')">
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center;" id="febpc-cell-7" oninput="saveToLocalStorage('febpc-cell-7')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="febpc-cell-8" oninput="saveToLocalStorage('febpc-cell-8')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="febpc-cell-9" oninput="saveToLocalStorage('febpc-cell-9')">
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center;" id="febpc-cell-10" oninput="saveToLocalStorage('febpc-cell-10')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="febpc-cell-11" oninput="saveToLocalStorage('febpc-cell-11')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="febpc-cell-12" oninput="saveToLocalStorage('febpc-cell-12')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="febpc-cell-13" oninput="saveToLocalStorage('febpc-cell-13')">
                    </td>
                </tr>

                <tr>
                    <td style="font-weight:bolder; background-color:cornsilk; font-size:12px;">Total</td>

                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="febtotal-cell-1" oninput="saveToLocalStorage('febtotal-cell-1')">
                    </td>
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="febtotal-cell-2" oninput="saveToLocalStorage('febtotal-cell-2')">
                    </td>
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="febtotal-cell-3" oninput="saveToLocalStorage('febtotal-cell-3')">
                    </td>
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="febtotal-cell-4" oninput="saveToLocalStorage('febtotal-cell-4')">
                    </td>
                    <td>
                        <input type="mumber" style="border: white; text-align:center; font-weight:bolder" id="febtotal-cell-5" oninput="saveToLocalStorage('febtotal-cell-5')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="febtotal-cell-6" oninput="saveToLocalStorage('febtotal-cell-6')">
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="febtotal-cell-7" oninput="saveToLocalStorage('febtotal-cell-7')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="febtotal-cell-8" oninput="saveToLocalStorage('febtotal-cell-8')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="febtotal-cell-9" oninput="saveToLocalStorage('febtotal-cell-9')">
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="febtotal-cell-10" oninput="saveToLocalStorage('febtotal-cell-10')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="febtotal-cell-11" oninput="saveToLocalStorage('febtotal-cell-11')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="febtotal-cell-12" oninput="saveToLocalStorage('febtotal-cell-12')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="febtotal-cell-13" oninput="saveToLocalStorage('febtotal-cell-13')">
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="city-section-feb" id="laspinas-section">
        <table style="width: 5px; height: 100px;" id="second">
            <thead style="width:10px">
                <tr>
                    <th style="color: white; font-size:30px; text-align:justify; color:khaki" colspan="14">MARCH</th>
                </tr>
                <tr style="width:10px;">
                    <th style="color: white; font-size:13px;" colspan="1">City</th>
                    <th style="color: white; font-size:13px;" colspan="1">Original Sample</th>
                    <th style="color: white; font-size:13px;" colspan="1">Add'l HHs</th>
                    <th style="color: white; font-size:13px;" colspan="1">Total</th>
                    <th style="color: white; font-size:13px;" colspan="1">Completed</th>
                    <th style="color: white; font-size:13px;" colspan="1">Refusal</th>
                    <th style="color: white; font-size:13px;" colspan="1">Entire HH Absent for<br>Extended Period of Time</th>
                    <th style="color: white; font-size:13px;" colspan="1">Vacant Housing Unit<br>(VHU) NOT<br>REPLACED</th>
                    <th style="color: white; font-size:13px;" colspan="1">VHU WITH REPLACEMENT</th>
                    <th style="color: white; font-size:13px" colspan="1">VHU WITH NEW<br>OCCUPANT</th>
                    <th style="color: white; font-size:13px" colspan="1">Permanently Moved Out (PMO), Not <br>usual resident (NUR),<br>Single person occupying housing unit<br>(SPOHU) passed away,<br>others<br>NOT REPLACED</th>
                    <th style="color: white; font-size:13px" colspan="1">PMO WITH <br>REPLACEMENT</th>
                    <th style="color: white; font-size:13px" colspan="1">PMO WITH <br> NEW OCCUPANT</th>
                    <th style="color: white; font-size:13px" colspan="1">NUR WITH<br>REPLACEMENT</th>
                </tr>
                <tr>
                    <th style="color: white; font-size:9px"></th>
                    <th style="color: white; font-size:9px"></th>
                    <th style="color: white; font-size:9px"></th>
                    <th style="color: white; font-size:9px"></th>
                    <th style="color: white; font-size:9px">1</th>
                    <th style="color: white; font-size:9px">2</th>
                    <th style="color: white; font-size:9px">3</th>
                    <th style="color: white; font-size:9px">41</th>
                    <th style="color: white; font-size:9px">42</th>
                    <th style="color: white; font-size:9px">43</th>
                    <th style="color: white; font-size:9px">91</th>
                    <th style="color: white; font-size:9px">92</th>
                    <th style="color: white; font-size:9px">93</th>
                    <th style="color: white; font-size:9px">94</th>
                </tr>
            </thead>

            <tbody>
                <br>
                <!---------------------------------------------------RESPONSE RATE---------------------------------------------------------------------------------------------------->
                <tr>
                    <td style="font-weight:bolder; background-color: cornsilk; font-size: 12px;">Las Piñas</td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="marlp-cell-1" oninput="saveToLocalStorage('marlp-cell-1')">
                    </td>
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="marlp-cell-2" oninput="saveToLocalStorage('marlp-cell-2')">
                    </td>
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="marlp-cell-3" oninput="saveToLocalStorage('marlp-cell-3')">
                    </td>
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center;" id="marlp-cell-4" oninput="saveToLocalStorage('marlp-cell-4')">
                    </td>
                    <td>
                        <input type="mumber" style="border: white; text-align:center;" id="marlp-cell-5" oninput="saveToLocalStorage('marlp-cell-5')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="marlp-cell-6" oninput="saveToLocalStorage('marlp-cell-6')">
                    </td>



                    <td>
                        <input type="number" style="border: white; text-align:center;" id="marlp-cell-7" oninput="saveToLocalStorage('marlp-cell-7')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="marlp-cell-8" oninput="saveToLocalStorage('marlp-cell-8')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="marlp-cell-9" oninput="saveToLocalStorage('marlp-cell-9')">
                    </td>



                    <td>
                        <input type="number" style="border: white; text-align:center;" id="marlp-cell-10" oninput="saveToLocalStorage('marlp-cell-10')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="marlp-cell-11" oninput="saveToLocalStorage('marlp-cell-11')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="marlp-cell-12" oninput="saveToLocalStorage('marlp-cell-12')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="marlp-cell-13" oninput="saveToLocalStorage('marlp-cell-13')">
                    </td>
                </tr>
                <!---------------------------------------------------RESPONSE RATE END---------------------------------------------------------------------------------------------------->
                <tr>
                    <td style="font-weight:bolder; background-color:cornsilk; font-size: 12px;">Muntinlupa</td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="marmc-cell-1" oninput="saveToLocalStorage('marmc-cell-1')">
                    </td>
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="marmc-cell-2" oninput="saveToLocalStorage('marmc-cell-2')">
                    </td>
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="marmc-cell-3" oninput="saveToLocalStorage('marmc-cell-3')">
                    </td>
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center;" id="marmc-cell-4" oninput="saveToLocalStorage('marmc-cell-4')">
                    </td>
                    <td>
                        <input type="mumber" style="border: white; text-align:center;" id="marmc-cell-5" oninput="saveToLocalStorage('marmc-cell-5')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="marmc-cell-6" oninput="saveToLocalStorage('marmc-cell-6')">
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="marmc-cell-7" oninput="saveToLocalStorage('marmc-cell-7')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="marmc-cell-8" oninput="saveToLocalStorage('marmc-cell-8')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="marmc-cell-9" oninput="saveToLocalStorage('marmc-cell-9')">
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="marmc-cell-10" oninput="saveToLocalStorage('marmc-cell-10')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="marmc-cell-11" oninput="saveToLocalStorage('marmc-cell-11')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="marmc-cell-12" oninput="saveToLocalStorage('marmc-cell-12')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="marmc-cell-13" oninput="saveToLocalStorage('marmc-cell-13')">
                    </td>

                </tr>
                <tr>
                    <td style="font-weight:bolder; background-color:cornsilk; font-size: 12px;">Parañaque</td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="marpq-cell-1" oninput="saveToLocalStorage('marpq-cell-1')">
                    </td>
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="marpq-cell-2" oninput="saveToLocalStorage('marpq-cell-2')">
                    </td>
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="marpq-cell-3" oninput="saveToLocalStorage('marpq-cell-3')">
                    </td>
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="marpq-cell-4" oninput="saveToLocalStorage('marpq-cell-4')">
                    </td>
                    <td>
                        <input type="mumber" style="border: white; text-align:center;" id="marpq-cell-5" oninput="saveToLocalStorage('marpq-cell-5')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="marpq-cell-6" oninput="saveToLocalStorage('marpq-cell-6')">
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center;" id="marpq-cell-7" oninput="saveToLocalStorage('marpq-cell-7')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="marpq-cell-8" oninput="saveToLocalStorage('marpq-cell-8')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="marpq-cell-9" oninput="saveToLocalStorage('marpq-cell-9')">
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center;" id="marpq-cell-10" oninput="saveToLocalStorage('marpq-cell-10')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="marpq-cell-11" oninput="saveToLocalStorage('marpq-cell-11')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="marpq-cell-12" oninput="saveToLocalStorage('marpq-cell-12')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="marpq-cell-13" oninput="saveToLocalStorage('marpq-cell-13')">
                    </td>

                <tr>
                    <td style="font-weight:bolder; background-color:cornsilk; font-size:12px;">Pasay</td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="marpc-cell-1" oninput="saveToLocalStorage('marpc-cell-1')">
                    </td>
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="marpc-cell-2" oninput="saveToLocalStorage('marpc-cell-2')">
                    </td>
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="marpc-cell-3" oninput="saveToLocalStorage('marpc-cell-3')">
                    </td>
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="marpc-cell-4" oninput="saveToLocalStorage('marpc-cell-4')">
                    </td>
                    <td>
                        <input type="mumber" style="border: white; text-align:center;" id="marpc-cell-5" oninput="saveToLocalStorage('marpc-cell-5')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="marpc-cell-6" oninput="saveToLocalStorage('marpc-cell-6')">
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="marpc-cell-7" oninput="saveToLocalStorage('marpc-cell-7')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="marpc-cell-8" oninput="saveToLocalStorage('marpc-cell-8')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="marpc-cell-9" oninput="saveToLocalStorage('marpc-cell-9')">
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="marpc-cell-10" oninput="saveToLocalStorage('marpc-cell-10')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="marpc-cell-11" oninput="saveToLocalStorage('marpc-cell-11')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="marpc-cell-12" oninput="saveToLocalStorage('marpc-cell-12')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="marpc-cell-13" oninput="saveToLocalStorage('marpc-cell-13')">
                    </td>
                </tr>

                <tr>
                    <td style="font-weight:bolder; background-color:cornsilk; font-size:12px;">Total</td>

                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder;" id="martotal-cell-1" oninput="saveToLocalStorage('martotal-cell-1')">
                    </td>
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder;" id="martotal-cell-2" oninput="saveToLocalStorage('martotal-cell-2')">
                    </td>
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" font-weight:bolder; id="martotal-cell-3" oninput="saveToLocalStorage('martotal-cell-3')">
                    </td>
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder;" id="martotal-cell-4" oninput="saveToLocalStorage('martotal-cell-4')">
                    </td>
                    <td>
                        <input type="mumber" style="border: white; text-align:center; font-weight:bolder;" id="martotal-cell-5" oninput="saveToLocalStorage('martotal-cell-5')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder;" id="martotal-cell-6" oninput="saveToLocalStorage('martotal-cell-6')">
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder;" id="martotal-cell-7" oninput="saveToLocalStorage('martotal-cell-7')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder;" id="martotal-cell-8" oninput="saveToLocalStorage('martotal-cell-8')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder;" id="martotal-cell-9" oninput="saveToLocalStorage('martotal-cell-9')">
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder;" id="martotal-cell-10" oninput="saveToLocalStorage('martotal-cell-10')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder;" id="martotal-cell-11" oninput="saveToLocalStorage('martotal-cell-11')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder;" id="martotal-cell-12" oninput="saveToLocalStorage('martotal-cell-12')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder;" id="martotal-cell-13" oninput="saveToLocalStorage('martotal-cell-13')">
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="city-section" id="laspinas-section">
        <table style="width: 5px; height: 100px;">
            <thead style="width:10px">
                <tr>
                    <th style="color: white; font-size:30px; text-align:justify; color:khaki" colspan="13">APRIL</th>
                </tr>
                <tr style="width:10px;">
                    <th style="color: white; font-size:13px;" colspan="1">City</th>
                    <th style="color: white; font-size:13px;" colspan="1">Original Sample</th>
                    <th style="color: white; font-size:13px;" colspan="1">Add'l HHs</th>
                    <th style="color: white; font-size:13px;" colspan="1">Total</th>
                    <th style="color: white; font-size:13px;" colspan="1">Completed</th>
                    <th style="color: white; font-size:13px;" colspan="1">Refusal</th>
                    <th style="color: white; font-size:13px;" colspan="1">Entire HH Absent for<br>Extended Period of Time</th>
                    <th style="color: white; font-size:13px;" colspan="1">Vacant Housing Unit(VHU)<br>NOT REPLACED</th>
                    <th style="color: white; font-size:13px" colspan="1">Housing Unit Destroyed/<br>Demolished NOT REPLACED</th>
                    <th style="color: white; font-size:13px" colspan="1">Address Not a Housing Unit Not <br>REPLACED</th>
                    <th style="color: white; font-size:13px" colspan="1">Permanently Moved Out (PMO), Not <br>usual resident (NUR),<br>Single person occupying housing unit<br>(SPOHU) passed away,<br>others<br>NOT REPLACED</th>
                    <th style="color: white; font-size:13px" colspan="1">Merged with another <br>household</th>
                    <th style="color: white; font-size:13px" colspan="1">Others</th>
                </tr>
                <tr>
                    <th style="color: white; font-size:9px"></th>
                    <th style="color: white; font-size:9px"></th>
                    <th style="color: white; font-size:9px"></th>
                    <th style="color: white; font-size:9px"></th>
                    <th style="color: white; font-size:9px">1</th>
                    <th style="color: white; font-size:9px">2</th>
                    <th style="color: white; font-size:9px">3</th>
                    <th style="color: white; font-size:9px">41</th>
                    <th style="color: white; font-size:9px">51</th>
                    <th style="color: white; font-size:9px">61</th>
                    <th style="color: white; font-size:9px">91</th>
                    <th style="color: white; font-size:9px">98</th>
                    <th style="color: white; font-size:9px">99</th>
                </tr>
            </thead>
            <tbody>
                <br>
                <!---------------------------------------------------RESPONSE RATE---------------------------------------------------------------------------------------------------->
                <tr>
                    <td style="font-weight:bolder; background-color: cornsilk; font-size: 12px;">Las Piñas</td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="aprlp-cell-1" oninput="saveToLocalStorage('aprlp-cell-1')">
                    </td>
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="aprlp-cell-2" oninput="saveToLocalStorage('aprlp-cell-2')">
                    </td>
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="aprlp-cell-3" oninput="saveToLocalStorage('aprlp-cell-3')">
                    </td>
                    </td>



                    <td>
                        <input type="number" style="border: white; text-align:center;" id="aprlp-cell-4" oninput="saveToLocalStorage('aprlp-cell-4')">
                    </td>
                    <td>
                        <input type="mumber" style="border: white; text-align:center;" id="aprlp-cell-5" oninput="saveToLocalStorage('aprlp-cell-5')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="aprlp-cell-6" oninput="saveToLocalStorage('aprlp-cell-6')">
                    </td>



                    <td>
                        <input type="number" style="border: white; text-align:center;" id="aprlp-cell-7" oninput="saveToLocalStorage('aprlp-cell-7')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="aprlp-cell-8" oninput="saveToLocalStorage('aprlp-cell-8')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="aprlp-cell-9" oninput="saveToLocalStorage('aprlp-cell-9')">
                    </td>



                    <td>
                        <input type="number" style="border: white; text-align:center;" id="aprlp-cell-10" oninput="saveToLocalStorage('aprlp-cell-10')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="aprlp-cell-11" oninput="saveToLocalStorage('aprlp-cell-11')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="aprlp-cell-12" oninput="saveToLocalStorage('aprlp-cell-12')">
                    </td>

                </tr>

                <!---------------------------------------------------RESPONSE RATE END---------------------------------------------------------------------------------------------------->
                <tr>
                    <td style="font-weight:bolder; background-color:cornsilk; font-size: 12px;">Muntinlupa</td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="aprmc-cell-1" oninput="saveToLocalStorage('aprmc-cell-1')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="aprmc-cell-2" oninput="saveToLocalStorage('aprmc-cell-2')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; " id="aprmc-cell-3" oninput="saveToLocalStorage('aprmc-cell-3')">
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="aprmc-cell-4" oninput="saveToLocalStorage('aprmc-cell-4')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="aprmc-cell-5" oninput="saveToLocalStorage('aprmc-cell-5')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="aprmc-cell-6" oninput="saveToLocalStorage('aprmc-cell-6')">
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center;" id="aprmc-cell-7" oninput="saveToLocalStorage('aprmc-cell-7')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="aprmc-cell-8" oninput="saveToLocalStorage('aprmc-cell-8')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="aprmc-cell-9" oninput="saveToLocalStorage('aprmc-cell-9')">
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center;" id="aprmc-cell-10" oninput="saveToLocalStorage('aprmc-cell-10')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="aprmc-cell-11" oninput="saveToLocalStorage('aprmc-cell-11')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="aprmc-cell-12" oninput="saveToLocalStorage('aprmc-cell-12')">
                    </td>


                </tr>
                <tr>
                    <td style="font-weight:bolder; background-color:cornsilk; font-size: 12px;">Parañaque</td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="aprpq-cell-1" oninput="saveToLocalStorage('aprpq-cell-1')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="aprpq-cell-2" oninput="saveToLocalStorage('aprpq-cell-2')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="aprpq-cell-3" oninput="saveToLocalStorage('aprpq-cell-3')">
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="aprpq-cell-4" oninput="saveToLocalStorage('aprpq-cell-4')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="aprpq-cell-5" oninput="saveToLocalStorage('aprpq-cell-5')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="aprpq-cell-6" oninput="saveToLocalStorage('aprpq-cell-6')">
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center;" id="aprpq-cell-7" oninput="saveToLocalStorage('aprpq-cell-7')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="aprpq-cell-8" oninput="saveToLocalStorage('aprpq-cell-8')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="aprpq-cell-9" oninput="saveToLocalStorage('aprpq-cell-9')">
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center;" id="aprpq-cell-10" oninput="saveToLocalStorage('aprpq-cell-10')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="aprpq-cell-11" oninput="saveToLocalStorage('aprpq-cell-11')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="aprpq-cell-12" oninput="saveToLocalStorage('aprpq-cell-12')">
                    </td>

                <tr>
                    <td style="font-weight:bolder; background-color:cornsilk; font-size:12px;">Pasay</td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="aprpc-cell-1" oninput="saveToLocalStorage('aprpc-cell-1')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="aprpc-cell-2" oninput="saveToLocalStorage('aprpc-cell-2')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="aprpc-cell-3" oninput="saveToLocalStorage('aprpc-cell-3')">
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="aprpc-cell-4" oninput="saveToLocalStorage('aprpc-cell-4')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="aprpc-cell-5" oninput="saveToLocalStorage('aprpc-cell-5')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="aprpc-cell-6" oninput="saveToLocalStorage('aprpc-cell-6')">
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center;" id="aprpc-cell-7" oninput="saveToLocalStorage('aprpc-cell-7')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="aprpc-cell-8" oninput="saveToLocalStorage('aprpc-cell-8')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="aprpc-cell-9" oninput="saveToLocalStorage('aprpc-cell-9')">
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center;" id="aprpc-cell-10" oninput="saveToLocalStorage('aprpc-cell-10')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="aprpc-cell-11" oninput="saveToLocalStorage('aprpc-cell-11')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="aprpc-cell-12" oninput="saveToLocalStorage('aprpc-cell-12')">
                    </td>
                </tr>


                <tr>
                    <td style="font-weight:bolder; background-color:cornsilk; font-size:12px;">Total</td>

                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="aprtotal-cell-1" oninput="saveToLocalStorage('aprtotal-cell-1')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="aprtotal-cell-2" oninput="saveToLocalStorage('aprtotal-cell-2')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="aprtotal-cell-3" oninput="saveToLocalStorage('aprtotal-cell-3')">
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="aprtotal-cell-4" oninput="saveToLocalStorage('aprtotal-cell-4')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="aprtotal-cell-5" oninput="saveToLocalStorage('aprtotal-cell-5')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="aprtotal-cell-6" oninput="saveToLocalStorage('aprtotal-cell-6')">
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="aprtotal-cell-7" oninput="saveToLocalStorage('aprtotal-cell-7')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="aprtotal-cell-8" oninput="saveToLocalStorage('aprtotal-cell-8')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="aprtotal-cell-9" oninput="saveToLocalStorage('aprtotal-cell-9')">
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="aprtotal-cell-10" oninput="saveToLocalStorage('aprtotal-cell-10')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="aprtotal-cell-11" oninput="saveToLocalStorage('aprtotal-cell-11')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="aprtotal-cell-12" oninput="saveToLocalStorage('aprtotal-cell-12')">
                    </td>
                </tr>
            </tbody>




        </table>
    </div>
    <div class="city-section-feb" id="laspinas-section">
        <table style="width: 5px; height: 100px;" id="second">
            <thead style="width:10px">
                <tr>
                    <th style="color: white; font-size:30px; text-align:justify; color:khaki" colspan="14">MAY</th>
                </tr>
                <tr style="width:10px;">
                    <th style="color: white; font-size:13px;" colspan="1">City</th>
                    <th style="color: white; font-size:13px;" colspan="1">Original Sample</th>
                    <th style="color: white; font-size:13px;" colspan="1">Add'l HHs</th>
                    <th style="color: white; font-size:13px;" colspan="1">Total</th>
                    <th style="color: white; font-size:13px;" colspan="1">Completed</th>
                    <th style="color: white; font-size:13px;" colspan="1">Refusal</th>
                    <th style="color: white; font-size:13px;" colspan="1">Entire HH Absent for<br>Extended Period of Time</th>
                    <th style="color: white; font-size:13px;" colspan="1">Vacant Housing Unit<br>(VHU) NOT<br>REPLACED</th>
                    <th style="color: white; font-size:13px;" colspan="1">VHU WITH REPLACEMENT</th>
                    <th style="color: white; font-size:13px" colspan="1">VHU WITH NEW<br>OCCUPANT</th>
                    <th style="color: white; font-size:13px" colspan="1">Permanently Moved Out (PMO), Not <br>usual resident (NUR),<br>Single person occupying housing unit<br>(SPOHU) passed away,<br>others<br>NOT REPLACED</th>
                    <th style="color: white; font-size:13px" colspan="1">PMO WITH <br>REPLACEMENT</th>
                    <th style="color: white; font-size:13px" colspan="1">PMO WITH <br> NEW OCCUPANT</th>
                    <th style="color: white; font-size:13px" colspan="1">NUR WITH<br>REPLACEMENT</th>
                </tr>
                <tr>
                    <th style="color: white; font-size:9px"></th>
                    <th style="color: white; font-size:9px"></th>
                    <th style="color: white; font-size:9px"></th>
                    <th style="color: white; font-size:9px"></th>
                    <th style="color: white; font-size:9px">1</th>
                    <th style="color: white; font-size:9px">2</th>
                    <th style="color: white; font-size:9px">3</th>
                    <th style="color: white; font-size:9px">41</th>
                    <th style="color: white; font-size:9px">42</th>
                    <th style="color: white; font-size:9px">43</th>
                    <th style="color: white; font-size:9px">91</th>
                    <th style="color: white; font-size:9px">92</th>
                    <th style="color: white; font-size:9px">93</th>
                    <th style="color: white; font-size:9px">94</th>
                </tr>
            </thead>

            <tbody>
                <br>
                <!---------------------------------------------------RESPONSE RATE---------------------------------------------------------------------------------------------------->
                <tr>
                    <td style="font-weight:bolder; background-color: cornsilk; font-size: 12px;">Las Piñas</td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="maylp-cell-1" oninput="saveToLocalStorage('maylp-cell-1')">
                    </td>
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="maylp-cell-2" oninput="saveToLocalStorage('maylp-cell-2')">
                    </td>
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="maylp-cell-3" oninput="saveToLocalStorage('maylp-cell-3')">
                    </td>
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center;" id="maylp-cell-4" oninput="saveToLocalStorage('maylp-cell-4')">
                    </td>
                    <td>
                        <input type="mumber" style="border: white; text-align:center;" id="maylp-cell-5" oninput="saveToLocalStorage('maylp-cell-5')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="maylp-cell-6" oninput="saveToLocalStorage('maylp-cell-6')">
                    </td>



                    <td>
                        <input type="number" style="border: white; text-align:center;" id="maylp-cell-7" oninput="saveToLocalStorage('maylp-cell-7')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="maylp-cell-8" oninput="saveToLocalStorage('maylp-cell-8')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="maylp-cell-9" oninput="saveToLocalStorage('maylp-cell-9')">
                    </td>



                    <td>
                        <input type="number" style="border: white; text-align:center;" id="maylp-cell-10" oninput="saveToLocalStorage('maylp-cell-10')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="maylp-cell-11" oninput="saveToLocalStorage('maylp-cell-11')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="maylp-cell-12" oninput="saveToLocalStorage('maylp-cell-12')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="maylp-cell-13" oninput="saveToLocalStorage('maylp-cell-13')">
                    </td>
                </tr>
                <!---------------------------------------------------RESPONSE RATE END---------------------------------------------------------------------------------------------------->
                <tr>
                    <td style="font-weight:bolder; background-color:cornsilk; font-size: 12px;">Muntinlupa</td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="maymc-cell-1" oninput="saveToLocalStorage('maymc-cell-1')">
                    </td>
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="maymc-cell-2" oninput="saveToLocalStorage('maymc-cell-2')">
                    </td>
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="maymc-cell-3" oninput="saveToLocalStorage('maymc-cell-3')">
                    </td>
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center;" id="maymc-cell-4" oninput="saveToLocalStorage('maymc-cell-4')">
                    </td>
                    <td>
                        <input type="mumber" style="border: white; text-align:center;" id="maymc-cell-5" oninput="saveToLocalStorage('maymc-cell-5')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="maymc-cell-6" oninput="saveToLocalStorage('maymc-cell-6')">
                    </td>



                    <td>
                        <input type="number" style="border: white; text-align:center;" id="maymc-cell-7" oninput="saveToLocalStorage('maymc-cell-7')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="maymc-cell-8" oninput="saveToLocalStorage('maymc-cell-8')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="maymc-cell-9" oninput="saveToLocalStorage('maymc-cell-9')">
                    </td>



                    <td>
                        <input type="number" style="border: white; text-align:center;" id="maymc-cell-10" oninput="saveToLocalStorage('maymc-cell-10')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="maymc-cell-11" oninput="saveToLocalStorage('maymc-cell-11')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="maymc-cell-12" oninput="saveToLocalStorage('maymc-cell-12')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="maymc-cell-13" oninput="saveToLocalStorage('maymc-cell-13')">
                    </td>

                </tr>
                <tr>
                    <td style="font-weight:bolder; background-color:cornsilk; font-size: 12px;">Parañaque</td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="maypq-cell-1" oninput="saveToLocalStorage('maypq-cell-1')">
                    </td>
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="maypq-cell-2" oninput="saveToLocalStorage('maypq-cell-2')">
                    </td>
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="maypq-cell-3" oninput="saveToLocalStorage('maypq-cell-3')">
                    </td>
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center;" id="maypq-cell-4" oninput="saveToLocalStorage('maypq-cell-4')">
                    </td>
                    <td>
                        <input type="mumber" style="border: white; text-align:center;" id="maypq-cell-5" oninput="saveToLocalStorage('maypq-cell-5')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="maypq-cell-6" oninput="saveToLocalStorage('maypq-cell-6')">
                    </td>



                    <td>
                        <input type="number" style="border: white; text-align:center;" id="maypq-cell-7" oninput="saveToLocalStorage('maypq-cell-7')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="maypq-cell-8" oninput="saveToLocalStorage('maypq-cell-8')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="maypq-cell-9" oninput="saveToLocalStorage('maypq-cell-9')">
                    </td>



                    <td>
                        <input type="number" style="border: white; text-align:center;" id="maypq-cell-10" oninput="saveToLocalStorage('maypq-cell-10')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="maypq-cell-11" oninput="saveToLocalStorage('maypq-cell-11')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="maypq-cell-12" oninput="saveToLocalStorage('maypq-cell-12')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="maypq-cell-13" oninput="saveToLocalStorage('maypq-cell-13')">
                    </td>

                <tr>
                    <td style="font-weight:bolder; background-color:cornsilk; font-size:12px;">Pasay</td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="maypc-cell-1" oninput="saveToLocalStorage('maypc-cell-1')">
                    </td>
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="maypc-cell-2" oninput="saveToLocalStorage('maypc-cell-2')">
                    </td>
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="maypc-cell-3" oninput="saveToLocalStorage('maypc-cell-3')">
                    </td>
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="maypc-cell-4" oninput="saveToLocalStorage('maypc-cell-4')">
                    </td>
                    <td>
                        <input type="mumber" style="border: white; text-align:center;" id="maypc-cell-5" oninput="saveToLocalStorage('maypc-cell-5')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="maypc-cell-6" oninput="saveToLocalStorage('maypc-cell-6')">
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center;" id="maypc-cell-7" oninput="saveToLocalStorage('maypc-cell-7')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="maypc-cell-8" oninput="saveToLocalStorage('maypc-cell-8')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="maypc-cell-9" oninput="saveToLocalStorage('maypc-cell-9')">
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center;" id="maypc-cell-10" oninput="saveToLocalStorage('maypc-cell-10')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="maypc-cell-11" oninput="saveToLocalStorage('maypc-cell-11')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="maypc-cell-12" oninput="saveToLocalStorage('maypc-cell-12')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="maypc-cell-13" oninput="saveToLocalStorage('maypc-cell-13')">
                    </td>
                </tr>

                <tr>
                    <td style="font-weight:bolder; background-color:cornsilk; font-size:12px;">Total</td>

                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="maytotal-cell-1" oninput="saveToLocalStorage('maytotal-cell-1')">
                    </td>
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="maytotal-cell-2" oninput="saveToLocalStorage('maytotal-cell-2')">
                    </td>
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="maytotal-cell-3" oninput="saveToLocalStorage('maytotal-cell-3')">
                    </td>
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="maytotal-cell-4" oninput="saveToLocalStorage('maytotal-cell-4')">
                    </td>
                    <td>
                        <input type="mumber" style="border: white; text-align:center; font-weight:bolder" id="maytotal-cell-5" oninput="saveToLocalStorage('maytotal-cell-5')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="maytotal-cell-6" oninput="saveToLocalStorage('maytotal-cell-6')">
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="maytotal-cell-7" oninput="saveToLocalStorage('maytotal-cell-7')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="maytotal-cell-8" oninput="saveToLocalStorage('maytotal-cell-8')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="maytotal-cell-9" oninput="saveToLocalStorage('maytotal-cell-9')">
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="maytotal-cell-10" oninput="saveToLocalStorage('maytotal-cell-10')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="maytotal-cell-11" oninput="saveToLocalStorage('maytotal-cell-11')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="maytotal-cell-12" oninput="saveToLocalStorage('maytotal-cell-12')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="maytotal-cell-13" oninput="saveToLocalStorage('maytotal-cell-13')">
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="city-section-feb" id="laspinas-section">
        <table style="width: 5px; height: 100px;" id="second">
            <thead style="width:10px">
                <tr>
                    <th style="color: white; font-size:30px; text-align:justify; color:khaki" colspan="14">JUNE</th>
                </tr>
                <tr style="width:10px;">
                    <th style="color: white; font-size:13px;" colspan="1">City</th>
                    <th style="color: white; font-size:13px;" colspan="1">Original Sample</th>
                    <th style="color: white; font-size:13px;" colspan="1">Add'l HHs</th>
                    <th style="color: white; font-size:13px;" colspan="1">Total</th>
                    <th style="color: white; font-size:13px;" colspan="1">Completed</th>
                    <th style="color: white; font-size:13px;" colspan="1">Refusal</th>
                    <th style="color: white; font-size:13px;" colspan="1">Entire HH Absent for<br>Extended Period of Time</th>
                    <th style="color: white; font-size:13px;" colspan="1">Vacant Housing Unit<br>(VHU) NOT<br>REPLACED</th>
                    <th style="color: white; font-size:13px;" colspan="1">VHU WIDTH REPLACEMENT</th>
                    <th style="color: white; font-size:13px" colspan="1">VHU WITH NEW<br>OCCUPANT</th>
                    <th style="color: white; font-size:13px" colspan="1">Permanently Moved Out (PMO), Not <br>usual resident (NUR),<br>Single person occupying housing unit<br>(SPOHU) passed away,<br>others<br>NOT REPLACED</th>
                    <th style="color: white; font-size:13px" colspan="1">PMO WITH <br>REPLACEMENT</th>
                    <th style="color: white; font-size:13px" colspan="1">PMO WITH <br> NEW OCCUPANT</th>
                    <th style="color: white; font-size:13px" colspan="1">NUR WITH<br>REPLACEMENT</th>
                </tr>
                <tr>
                    <th style="color: white; font-size:9px"></th>
                    <th style="color: white; font-size:9px"></th>
                    <th style="color: white; font-size:9px"></th>
                    <th style="color: white; font-size:9px"></th>
                    <th style="color: white; font-size:9px">1</th>
                    <th style="color: white; font-size:9px">2</th>
                    <th style="color: white; font-size:9px">3</th>
                    <th style="color: white; font-size:9px">41</th>
                    <th style="color: white; font-size:9px">42</th>
                    <th style="color: white; font-size:9px">43</th>
                    <th style="color: white; font-size:9px">91</th>
                    <th style="color: white; font-size:9px">92</th>
                    <th style="color: white; font-size:9px">93</th>
                    <th style="color: white; font-size:9px">94</th>
                </tr>
            </thead>

            <tbody>
                <br>
                <!---------------------------------------------------RESPONSE RATE---------------------------------------------------------------------------------------------------->
                <tr>
                    <td style="font-weight:bolder; background-color: cornsilk; font-size: 12px;">Las Piñas</td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="junlp-cell-1" oninput="saveToLocalStorage('junlp-cell-1')">
                    </td>
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="junlp-cell-2" oninput="saveToLocalStorage('junlp-cell-2')">
                    </td>
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="junlp-cell-3" oninput="saveToLocalStorage('junlp-cell-3')">
                    </td>
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center;" id="junlp-cell-4" oninput="saveToLocalStorage('junlp-cell-4')">
                    </td>
                    <td>
                        <input type="mumber" style="border: white; text-align:center;" id="junlp-cell-5" oninput="saveToLocalStorage('junlp-cell-5')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="junlp-cell-6" oninput="saveToLocalStorage('junlp-cell-6')">
                    </td>



                    <td>
                        <input type="number" style="border: white; text-align:center;" id="junlp-cell-7" oninput="saveToLocalStorage('junlp-cell-7')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="junlp-cell-8" oninput="saveToLocalStorage('junlp-cell-8')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="junlp-cell-9" oninput="saveToLocalStorage('junlp-cell-9')">
                    </td>



                    <td>
                        <input type="number" style="border: white; text-align:center;" id="junlp-cell-10" oninput="saveToLocalStorage('junlp-cell-10')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="junlp-cell-11" oninput="saveToLocalStorage('junlp-cell-11')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="junlp-cell-12" oninput="saveToLocalStorage('junlp-cell-12')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="junlp-cell-13" oninput="saveToLocalStorage('junlp-cell-13')">
                    </td>
                </tr>
                <!---------------------------------------------------RESPONSE RATE END---------------------------------------------------------------------------------------------------->
                <tr>
                    <td style="font-weight:bolder; background-color:cornsilk; font-size: 12px;">Muntinlupa</td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="junmc-cell-1" oninput="saveToLocalStorage('junmc-cell-1')">
                    </td>
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="junmc-cell-2" oninput="saveToLocalStorage('junmc-cell-2')">
                    </td>
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="junmc-cell-3" oninput="saveToLocalStorage('junmc-cell-3')">
                    </td>
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center;" id="junmc-cell-4" oninput="saveToLocalStorage('junmc-cell-4')">
                    </td>
                    <td>
                        <input type="mumber" style="border: white; text-align:center;" id="junmc-cell-5" oninput="saveToLocalStorage('junmc-cell-5')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="junmc-cell-6" oninput="saveToLocalStorage('junmc-cell-6')">
                    </td>



                    <td>
                        <input type="number" style="border: white; text-align:center;" id="junmc-cell-7" oninput="saveToLocalStorage('junmc-cell-7')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="junmc-cell-8" oninput="saveToLocalStorage('junmc-cell-8')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="junmc-cell-9" oninput="saveToLocalStorage('junmc-cell-9')">
                    </td>



                    <td>
                        <input type="number" style="border: white; text-align:center;" id="junmc-cell-10" oninput="saveToLocalStorage('junmc-cell-10')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="junmc-cell-11" oninput="saveToLocalStorage('junmc-cell-11')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="junmc-cell-12" oninput="saveToLocalStorage('junmc-cell-12')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="junmc-cell-13" oninput="saveToLocalStorage('junmc-cell-13')">
                    </td>

                </tr>
                <tr>
                    <td style="font-weight:bolder; background-color:cornsilk; font-size: 12px;">Parañaque</td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="junpq-cell-1" oninput="saveToLocalStorage('junpq-cell-1')">
                    </td>
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="junpq-cell-2" oninput="saveToLocalStorage('junpq-cell-2')">
                    </td>
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="junpq-cell-3" oninput="saveToLocalStorage('junpq-cell-3')">
                    </td>
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center;" id="junpq-cell-4" oninput="saveToLocalStorage('junpq-cell-4')">
                    </td>
                    <td>
                        <input type="mumber" style="border: white; text-align:center;" id="junpq-cell-5" oninput="saveToLocalStorage('junpq-cell-5')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="junpq-cell-6" oninput="saveToLocalStorage('junpq-cell-6')">
                    </td>



                    <td>
                        <input type="number" style="border: white; text-align:center;" id="junpq-cell-7" oninput="saveToLocalStorage('junpq-cell-7')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="junpq-cell-8" oninput="saveToLocalStorage('junpq-cell-8')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="junpq-cell-9" oninput="saveToLocalStorage('junpq-cell-9')">
                    </td>



                    <td>
                        <input type="number" style="border: white; text-align:center;" id="junpq-cell-10" oninput="saveToLocalStorage('junpq-cell-10')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="junpq-cell-11" oninput="saveToLocalStorage('junpq-cell-11')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="junpq-cell-12" oninput="saveToLocalStorage('junpq-cell-12')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="junpq-cell-13" oninput="saveToLocalStorage('junpq-cell-13')">
                    </td>

                <tr>
                    <td style="font-weight:bolder; background-color:cornsilk; font-size:12px;">Pasay</td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="junpc-cell-1" oninput="saveToLocalStorage('junpc-cell-1')">
                    </td>
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="junpc-cell-2" oninput="saveToLocalStorage('junpc-cell-2')">
                    </td>
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="junpc-cell-3" oninput="saveToLocalStorage('junpc-cell-3')">
                    </td>
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="junpc-cell-4" oninput="saveToLocalStorage('junpc-cell-4')">
                    </td>
                    <td>
                        <input type="mumber" style="border: white; text-align:center;" id="junpc-cell-5" oninput="saveToLocalStorage('junpc-cell-5')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="junpc-cell-6" oninput="saveToLocalStorage('junpc-cell-6')">
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center;" id="junpc-cell-7" oninput="saveToLocalStorage('junpc-cell-7')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="junpc-cell-8" oninput="saveToLocalStorage('junpc-cell-8')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="junpc-cell-9" oninput="saveToLocalStorage('junpc-cell-9')">
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center;" id="junpc-cell-10" oninput="saveToLocalStorage('junpc-cell-10')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="junpc-cell-11" oninput="saveToLocalStorage('junpc-cell-11')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="junpc-cell-12" oninput="saveToLocalStorage('junpc-cell-12')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="junpc-cell-13" oninput="saveToLocalStorage('junpc-cell-13')">
                    </td>
                </tr>

                <tr>
                    <td style="font-weight:bolder; background-color:cornsilk; font-size:12px;">Total</td>

                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="juntotal-cell-1" oninput="saveToLocalStorage('juntotal-cell-1')">
                    </td>
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="juntotal-cell-2" oninput="saveToLocalStorage('juntotal-cell-2')">
                    </td>
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="juntotal-cell-3" oninput="saveToLocalStorage('juntotal-cell-3')">
                    </td>
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="juntotal-cell-4" oninput="saveToLocalStorage('juntotal-cell-4')">
                    </td>
                    <td>
                        <input type="mumber" style="border: white; text-align:center; font-weight:bolder" id="juntotal-cell-5" oninput="saveToLocalStorage('juntotal-cell-5')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="juntotal-cell-6" oninput="saveToLocalStorage('juntotal-cell-6')">
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="juntotal-cell-7" oninput="saveToLocalStorage('juntotal-cell-7')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="juntotal-cell-8" oninput="saveToLocalStorage('juntotal-cell-8')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="juntotal-cell-9" oninput="saveToLocalStorage('juntotal-cell-9')">
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="juntotal-cell-10" oninput="saveToLocalStorage('juntotal-cell-10')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="juntotal-cell-11" oninput="saveToLocalStorage('juntotal-cell-11')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="juntotal-cell-12" oninput="saveToLocalStorage('juntotal-cell-12')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="juntotal-cell-13" oninput="saveToLocalStorage('juntotal-cell-13')">
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="city-section" id="laspinas-section">
        <table style="width: 5px; height: 100px;">
            <thead style="width:10px">
                <tr>
                    <th style="color: white; font-size:30px; text-align:justify; color:khaki" colspan="13">JULY</th>
                </tr>
                <tr style="width:10px;">
                    <th style="color: white; font-size:13px;" colspan="1">City</th>
                    <th style="color: white; font-size:13px;" colspan="1">Original Sample</th>
                    <th style="color: white; font-size:13px;" colspan="1">Add'l HHs</th>
                    <th style="color: white; font-size:13px;" colspan="1">Total</th>
                    <th style="color: white; font-size:13px;" colspan="1">Completed</th>
                    <th style="color: white; font-size:13px;" colspan="1">Refusal</th>
                    <th style="color: white; font-size:13px;" colspan="1">Entire HH Absent for<br>Extended Period of Time</th>
                    <th style="color: white; font-size:13px;" colspan="1">Vacant Housing Unit (VHU)<br>NOT <br>REPLACED</th>
                    <th style="color: white; font-size:13px" colspan="1">Housing Unit Destroyed/<br>Demolished NOT REPLACED</th>
                    <th style="color: white; font-size:13px" colspan="1">Address Not a Housing Unit Not <br>REPLACED</th>
                    <th style="color: white; font-size:13px" colspan="1">Permanently Moved Out (PMO), Not <br>usual resident (NUR),<br>Single person occupying housing unit<br>(SPOHU) passed away,<br>others<br>NOT REPLACED</th>
                    <th style="color: white; font-size:13px" colspan="1">Merged with another <br>household</th>
                    <th style="color: white; font-size:13px" colspan="1">Others</th>
                </tr>
                <tr>
                    <th style="color: white; font-size:9px"></th>
                    <th style="color: white; font-size:9px"></th>
                    <th style="color: white; font-size:9px"></th>
                    <th style="color: white; font-size:9px"></th>
                    <th style="color: white; font-size:9px">1</th>
                    <th style="color: white; font-size:9px">2</th>
                    <th style="color: white; font-size:9px">3</th>
                    <th style="color: white; font-size:9px">41</th>
                    <th style="color: white; font-size:9px">51</th>
                    <th style="color: white; font-size:9px">61</th>
                    <th style="color: white; font-size:9px">91</th>
                    <th style="color: white; font-size:9px">98</th>
                    <th style="color: white; font-size:9px">99</th>
                </tr>
            </thead>
            <tbody>
                <br>
                <!---------------------------------------------------RESPONSE RATE---------------------------------------------------------------------------------------------------->
                <tr>
                    <td style="font-weight:bolder; background-color: cornsilk; font-size: 12px;">Las Piñas</td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="jullp-cell-1" oninput="saveToLocalStorage('jullp-cell-1')">
                    </td>
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="jullp-cell-2" oninput="saveToLocalStorage('jullp-cell-2')">
                    </td>
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="jullp-cell-3" oninput="saveToLocalStorage('jullp-cell-3')">
                    </td>
                    </td>



                    <td>
                        <input type="number" style="border: white; text-align:center;" id="jullp-cell-4" oninput="saveToLocalStorage('jullp-cell-4')">
                    </td>
                    <td>
                        <input type="mumber" style="border: white; text-align:center;" id="jullp-cell-5" oninput="saveToLocalStorage('jullp-cell-5')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="jullp-cell-6" oninput="saveToLocalStorage('jullp-cell-6')">
                    </td>



                    <td>
                        <input type="number" style="border: white; text-align:center;" id="jullp-cell-7" oninput="saveToLocalStorage('jullp-cell-7')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="jullp-cell-8" oninput="saveToLocalStorage('jullp-cell-8')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="jullp-cell-9" oninput="saveToLocalStorage('jullp-cell-9')">
                    </td>



                    <td>
                        <input type="number" style="border: white; text-align:center;" id="jullp-cell-10" oninput="saveToLocalStorage('jullp-cell-10')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="jullp-cell-11" oninput="saveToLocalStorage('jullp-cell-11')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="jullp-cell-12" oninput="saveToLocalStorage('jullp-cell-12')">
                    </td>

                </tr>

                <!---------------------------------------------------RESPONSE RATE END---------------------------------------------------------------------------------------------------->
                <tr>
                    <td style="font-weight:bolder; background-color:cornsilk; font-size: 12px;">Muntinlupa</td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="julmc-cell-1" oninput="saveToLocalStorage('julmc-cell-1')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="julmc-cell-2" oninput="saveToLocalStorage('julmc-cell-2')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; " id="julmc-cell-3" oninput="saveToLocalStorage('julmc-cell-3')">
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="julmc-cell-4" oninput="saveToLocalStorage('julmc-cell-4')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="julmc-cell-5" oninput="saveToLocalStorage('julmc-cell-5')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="julmc-cell-6" oninput="saveToLocalStorage('julmc-cell-6')">
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center;" id="julmc-cell-7" oninput="saveToLocalStorage('julmc-cell-7')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="julmc-cell-8" oninput="saveToLocalStorage('julmc-cell-8')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="julmc-cell-9" oninput="saveToLocalStorage('julmc-cell-9')">
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center;" id="julmc-cell-10" oninput="saveToLocalStorage('julmc-cell-10')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="julmc-cell-11" oninput="saveToLocalStorage('julmc-cell-11')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="julmc-cell-12" oninput="saveToLocalStorage('julmc-cell-12')">
                    </td>


                </tr>
                <tr>
                    <td style="font-weight:bolder; background-color:cornsilk; font-size: 12px;">Parañaque</td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="julpq-cell-1" oninput="saveToLocalStorage('julpq-cell-1')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="julpq-cell-2" oninput="saveToLocalStorage('julpq-cell-2')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="julpq-cell-3" oninput="saveToLocalStorage('julpq-cell-3')">
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="julpq-cell-4" oninput="saveToLocalStorage('julpq-cell-4')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="julpq-cell-5" oninput="saveToLocalStorage('julpq-cell-5')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="julpq-cell-6" oninput="saveToLocalStorage('julpq-cell-6')">
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center;" id="julpq-cell-7" oninput="saveToLocalStorage('julpq-cell-7')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="julpq-cell-8" oninput="saveToLocalStorage('julpq-cell-8')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="julpq-cell-9" oninput="saveToLocalStorage('julpq-cell-9')">
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center;" id="julpq-cell-10" oninput="saveToLocalStorage('julpq-cell-10')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="julpq-cell-11" oninput="saveToLocalStorage('julpq-cell-11')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="julpq-cell-12" oninput="saveToLocalStorage('julpq-cell-12')">
                    </td>

                <tr>
                    <td style="font-weight:bolder; background-color:cornsilk; font-size:12px;">Pasay</td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="julpc-cell-1" oninput="saveToLocalStorage('julpc-cell-1')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="julpc-cell-2" oninput="saveToLocalStorage('julpc-cell-2')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="julpc-cell-3" oninput="saveToLocalStorage('julpc-cell-3')">
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="julpc-cell-4" oninput="saveToLocalStorage('julpc-cell-4')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="julpc-cell-5" oninput="saveToLocalStorage('julpc-cell-5')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="julpc-cell-6" oninput="saveToLocalStorage('julpc-cell-6')">
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center;" id="julpc-cell-7" oninput="saveToLocalStorage('julpc-cell-7')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="julpc-cell-8" oninput="saveToLocalStorage('julpc-cell-8')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="julpc-cell-9" oninput="saveToLocalStorage('julpc-cell-9')">
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center;" id="julpc-cell-10" oninput="saveToLocalStorage('julpc-cell-10')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="julpc-cell-11" oninput="saveToLocalStorage('julpc-cell-11')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="julpc-cell-12" oninput="saveToLocalStorage('julpc-cell-12')">
                    </td>
                </tr>


                <tr>
                    <td style="font-weight:bolder; background-color:cornsilk; font-size:12px;">Total</td>

                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="jultotal-cell-1" oninput="saveToLocalStorage('jultotal-cell-1')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="jultotal-cell-2" oninput="saveToLocalStorage('jultotal-cell-2')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="jultotal-cell-3" oninput="saveToLocalStorage('jultotal-cell-3')">
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="jultotal-cell-4" oninput="saveToLocalStorage('jultotal-cell-4')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="jultotal-cell-5" oninput="saveToLocalStorage('jultotal-cell-5')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="jultotal-cell-6" oninput="saveToLocalStorage('jultotal-cell-6')">
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="jultotal-cell-7" oninput="saveToLocalStorage('jultotal-cell-7')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="jultotal-cell-8" oninput="saveToLocalStorage('jultotal-cell-8')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="jultotal-cell-9" oninput="saveToLocalStorage('jultotal-cell-9')">
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="jultotal-cell-10" oninput="saveToLocalStorage('jultotal-cell-10')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="jultotal-cell-11" oninput="saveToLocalStorage('jultotal-cell-11')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="jultotal-cell-12" oninput="saveToLocalStorage('jultotal-cell-12')">
                    </td>
                </tr>
            </tbody>




        </table>
    </div>
    <div class="city-section" id="laspinas-section">
        <table style="width: 5px; height: 100px;">
            <thead style="width:10px">
                <tr>
                    <th style="color: white; font-size:30px; text-align:justify; color:khaki" colspan="13">AUGUST</th>
                </tr>
                <tr style="width:10px;">
                    <th style="color: white; font-size:13px;" colspan="1">City</th>
                    <th style="color: white; font-size:13px;" colspan="1">Original Sample</th>
                    <th style="color: white; font-size:13px;" colspan="1">Add'l HHs</th>
                    <th style="color: white; font-size:13px;" colspan="1">Total</th>
                    <th style="color: white; font-size:13px;" colspan="1">Completed</th>
                    <th style="color: white; font-size:13px;" colspan="1">Refusal</th>
                    <th style="color: white; font-size:13px;" colspan="1">Entire HH Absent for<br>Extended Period of Time</th>
                    <th style="color: white; font-size:13px;" colspan="1">Vacant Housing Unit (VHU)<br>NOT <br>REPLACED</th>
                    <th style="color: white; font-size:13px" colspan="1">Housing Unit Destroyed/<br>Demolished NOT REPLACED</th>
                    <th style="color: white; font-size:13px" colspan="1">Address Not a Housing Unit Not <br>REPLACED</th>
                    <th style="color: white; font-size:13px" colspan="1">Permanently Moved Out (PMO), Not <br>usual resident (NUR),<br>Single person occupying housing unit<br>(SPOHU) passed away,<br>others<br>NOT REPLACED</th>
                    <th style="color: white; font-size:13px" colspan="1">Merged with another <br>household</th>
                    <th style="color: white; font-size:13px" colspan="1">Others</th>
                </tr>
                <tr>
                    <th style="color: white; font-size:9px"></th>
                    <th style="color: white; font-size:9px"></th>
                    <th style="color: white; font-size:9px"></th>
                    <th style="color: white; font-size:9px"></th>
                    <th style="color: white; font-size:9px">1</th>
                    <th style="color: white; font-size:9px">2</th>
                    <th style="color: white; font-size:9px">3</th>
                    <th style="color: white; font-size:9px">41</th>
                    <th style="color: white; font-size:9px">51</th>
                    <th style="color: white; font-size:9px">61</th>
                    <th style="color: white; font-size:9px">91</th>
                    <th style="color: white; font-size:9px">98</th>
                    <th style="color: white; font-size:9px">99</th>
                </tr>
            </thead>
            <tbody>
                <br>
                <!---------------------------------------------------RESPONSE RATE---------------------------------------------------------------------------------------------------->
                <tr>
                    <td style="font-weight:bolder; background-color: cornsilk; font-size: 12px;">Las Piñas</td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="auglp-cell-1" oninput="saveToLocalStorage('auglp-cell-1')">
                    </td>
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="auglp-cell-2" oninput="saveToLocalStorage('auglp-cell-2')">
                    </td>
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="auglp-cell-3" oninput="saveToLocalStorage('auglp-cell-3')">
                    </td>
                    </td>



                    <td>
                        <input type="number" style="border: white; text-align:center;" id="auglp-cell-4" oninput="saveToLocalStorage('auglp-cell-4')">
                    </td>
                    <td>
                        <input type="mumber" style="border: white; text-align:center;" id="auglp-cell-5" oninput="saveToLocalStorage('auglp-cell-5')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="auglp-cell-6" oninput="saveToLocalStorage('auglp-cell-6')">
                    </td>



                    <td>
                        <input type="number" style="border: white; text-align:center;" id="auglp-cell-7" oninput="saveToLocalStorage('auglp-cell-7')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="auglp-cell-8" oninput="saveToLocalStorage('auglp-cell-8')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="auglp-cell-9" oninput="saveToLocalStorage('auglp-cell-9')">
                    </td>



                    <td>
                        <input type="number" style="border: white; text-align:center;" id="auglp-cell-10" oninput="saveToLocalStorage('auglp-cell-10')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="auglp-cell-11" oninput="saveToLocalStorage('auglp-cell-11')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="auglp-cell-12" oninput="saveToLocalStorage('auglp-cell-12')">
                    </td>

                </tr>

                <!---------------------------------------------------RESPONSE RATE END---------------------------------------------------------------------------------------------------->
                <tr>
                    <td style="font-weight:bolder; background-color:cornsilk; font-size: 12px;">Muntinlupa</td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="augmc-cell-1" oninput="saveToLocalStorage('augmc-cell-1')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="augmc-cell-2" oninput="saveToLocalStorage('augmc-cell-2')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; " id="augmc-cell-3" oninput="saveToLocalStorage('augmc-cell-3')">
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="augmc-cell-4" oninput="saveToLocalStorage('augmc-cell-4')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="augmc-cell-5" oninput="saveToLocalStorage('augmc-cell-5')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="augmc-cell-6" oninput="saveToLocalStorage('augmc-cell-6')">
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center;" id="augmc-cell-7" oninput="saveToLocalStorage('augmc-cell-7')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="augmc-cell-8" oninput="saveToLocalStorage('augmc-cell-8')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="augmc-cell-9" oninput="saveToLocalStorage('augmc-cell-9')">
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center;" id="augmc-cell-10" oninput="saveToLocalStorage('augmc-cell-10')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="augmc-cell-11" oninput="saveToLocalStorage('augmc-cell-11')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="augmc-cell-12" oninput="saveToLocalStorage('augmc-cell-12')">
                    </td>


                </tr>
                <tr>
                    <td style="font-weight:bolder; background-color:cornsilk; font-size: 12px;">Parañaque</td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="augpq-cell-1" oninput="saveToLocalStorage('augpq-cell-1')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="augpq-cell-2" oninput="saveToLocalStorage('augpq-cell-2')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="augpq-cell-3" oninput="saveToLocalStorage('augpq-cell-3')">
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="augpq-cell-4" oninput="saveToLocalStorage('augpq-cell-4')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="augpq-cell-5" oninput="saveToLocalStorage('augpq-cell-5')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="augpq-cell-6" oninput="saveToLocalStorage('augpq-cell-6')">
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center;" id="augpq-cell-7" oninput="saveToLocalStorage('augpq-cell-7')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="augpq-cell-8" oninput="saveToLocalStorage('augpq-cell-8')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="augpq-cell-9" oninput="saveToLocalStorage('augpq-cell-9')">
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center;" id="augpq-cell-10" oninput="saveToLocalStorage('augpq-cell-10')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="augpq-cell-11" oninput="saveToLocalStorage('augpq-cell-11')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="augpq-cell-12" oninput="saveToLocalStorage('augpq-cell-12')">
                    </td>

                <tr>
                    <td style="font-weight:bolder; background-color:cornsilk; font-size:12px;">Pasay</td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="augpc-cell-1" oninput="saveToLocalStorage('augpc-cell-1')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="augpc-cell-2" oninput="saveToLocalStorage('augpc-cell-2')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="augpc-cell-3" oninput="saveToLocalStorage('augpc-cell-3')">
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="augpc-cell-4" oninput="saveToLocalStorage('augpc-cell-4')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="augpc-cell-5" oninput="saveToLocalStorage('augpc-cell-5')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="augpc-cell-6" oninput="saveToLocalStorage('augpc-cell-6')">
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center;" id="augpc-cell-7" oninput="saveToLocalStorage('augpc-cell-7')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="augpc-cell-8" oninput="saveToLocalStorage('augpc-cell-8')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="augpc-cell-9" oninput="saveToLocalStorage('augpc-cell-9')">
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center;" id="augpc-cell-10" oninput="saveToLocalStorage('augpc-cell-10')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="augpc-cell-11" oninput="saveToLocalStorage('augpc-cell-11')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="augpc-cell-12" oninput="saveToLocalStorage('augpc-cell-12')">
                    </td>
                </tr>


                <tr>
                    <td style="font-weight:bolder; background-color:cornsilk; font-size:12px;">Total</td>

                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="augtotal-cell-1" oninput="saveToLocalStorage('augtotal-cell-1')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="augtotal-cell-2" oninput="saveToLocalStorage('augtotal-cell-2')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="augtotal-cell-3" oninput="saveToLocalStorage('augtotal-cell-3')">
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="augtotal-cell-4" oninput="saveToLocalStorage('augtotal-cell-4')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="augtotal-cell-5" oninput="saveToLocalStorage('augtotal-cell-5')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="augtotal-cell-6" oninput="saveToLocalStorage('augtotal-cell-6')">
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="augtotal-cell-7" oninput="saveToLocalStorage('augtotal-cell-7')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="augtotal-cell-8" oninput="saveToLocalStorage('augtotal-cell-8')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="augtotal-cell-9" oninput="saveToLocalStorage('augtotal-cell-9')">
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="augtotal-cell-10" oninput="saveToLocalStorage('augtotal-cell-10')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="augtotal-cell-11" oninput="saveToLocalStorage('augtotal-cell-11')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="augtotal-cell-12" oninput="saveToLocalStorage('augtotal-cell-12')">
                    </td>
                </tr>
            </tbody>




        </table>
    </div>
    <div class="city-section" id="laspinas-section">
        <table style="width: 5px; height: 100px;">
            <thead style="width:10px">
                <tr>
                    <th style="color: white; font-size:30px; text-align:justify; color:khaki" colspan="13">SEPTEMBER</th>
                </tr>
                <tr style="width:10px;">
                    <th style="color: white; font-size:13px;" colspan="1">City</th>
                    <th style="color: white; font-size:13px;" colspan="1">Original Sample</th>
                    <th style="color: white; font-size:13px;" colspan="1">Add'l HHs</th>
                    <th style="color: white; font-size:13px;" colspan="1">Total</th>
                    <th style="color: white; font-size:13px;" colspan="1">Completed</th>
                    <th style="color: white; font-size:13px;" colspan="1">Refusal</th>
                    <th style="color: white; font-size:13px;" colspan="1">Entire HH Absent for<br>Extended Period of Time</th>
                    <th style="color: white; font-size:13px;" colspan="1">Vacant Housing Unit (VHU)<br>NOT <br>REPLACED</th>
                    <th style="color: white; font-size:13px" colspan="1">Housing Unit Destroyed/<br>Demolished NOT REPLACED</th>
                    <th style="color: white; font-size:13px" colspan="1">Address Not a Housing Unit Not <br>REPLACED</th>
                    <th style="color: white; font-size:13px" colspan="1">Permanently Moved Out (PMO), Not <br>usual resident (NUR),<br>Single person occupying housing unit<br>(SPOHU) passed away,<br>others<br>NOT REPLACED</th>
                    <th style="color: white; font-size:13px" colspan="1">Merged with another <br>household</th>
                    <th style="color: white; font-size:13px" colspan="1">Others</th>
                </tr>
                <tr>
                    <th style="color: white; font-size:9px"></th>
                    <th style="color: white; font-size:9px"></th>
                    <th style="color: white; font-size:9px"></th>
                    <th style="color: white; font-size:9px"></th>
                    <th style="color: white; font-size:9px">1</th>
                    <th style="color: white; font-size:9px">2</th>
                    <th style="color: white; font-size:9px">3</th>
                    <th style="color: white; font-size:9px">41</th>
                    <th style="color: white; font-size:9px">51</th>
                    <th style="color: white; font-size:9px">61</th>
                    <th style="color: white; font-size:9px">91</th>
                    <th style="color: white; font-size:9px">98</th>
                    <th style="color: white; font-size:9px">99</th>
                </tr>
            </thead>
            <tbody>
                <br>
                <!---------------------------------------------------RESPONSE RATE---------------------------------------------------------------------------------------------------->
                <tr>
                    <td style="font-weight:bolder; background-color: cornsilk; font-size: 12px;">Las Piñas</td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="seplp-cell-1" oninput="saveToLocalStorage('seplp-cell-1')">
                    </td>
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="seplp-cell-2" oninput="saveToLocalStorage('seplp-cell-2')">
                    </td>
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="seplp-cell-3" oninput="saveToLocalStorage('seplp-cell-3')">
                    </td>
                    </td>



                    <td>
                        <input type="number" style="border: white; text-align:center;" id="seplp-cell-4" oninput="saveToLocalStorage('seplp-cell-4')">
                    </td>
                    <td>
                        <input type="mumber" style="border: white; text-align:center;" id="seplp-cell-5" oninput="saveToLocalStorage('seplp-cell-5')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="seplp-cell-6" oninput="saveToLocalStorage('seplp-cell-6')">
                    </td>



                    <td>
                        <input type="number" style="border: white; text-align:center;" id="seplp-cell-7" oninput="saveToLocalStorage('seplp-cell-7')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="seplp-cell-8" oninput="saveToLocalStorage('seplp-cell-8')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="seplp-cell-9" oninput="saveToLocalStorage('seplp-cell-9')">
                    </td>



                    <td>
                        <input type="number" style="border: white; text-align:center;" id="seplp-cell-10" oninput="saveToLocalStorage('seplp-cell-10')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="seplp-cell-11" oninput="saveToLocalStorage('seplp-cell-11')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="seplp-cell-12" oninput="saveToLocalStorage('seplp-cell-12')">
                    </td>

                </tr>

                <!---------------------------------------------------RESPONSE RATE END---------------------------------------------------------------------------------------------------->
                <tr>
                    <td style="font-weight:bolder; background-color:cornsilk; font-size: 12px;">Muntinlupa</td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="sepmc-cell-1" oninput="saveToLocalStorage('sepmc-cell-1')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="sepmc-cell-2" oninput="saveToLocalStorage('sepmc-cell-2')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; " id="sepmc-cell-3" oninput="saveToLocalStorage('sepmc-cell-3')">
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="sepmc-cell-4" oninput="saveToLocalStorage('sepmc-cell-4')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="sepmc-cell-5" oninput="saveToLocalStorage('sepmc-cell-5')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="sepmc-cell-6" oninput="saveToLocalStorage('sepmc-cell-6')">
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center;" id="sepmc-cell-7" oninput="saveToLocalStorage('sepmc-cell-7')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="sepmc-cell-8" oninput="saveToLocalStorage('sepmc-cell-8')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="sepmc-cell-9" oninput="saveToLocalStorage('sepmc-cell-9')">
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center;" id="sepmc-cell-10" oninput="saveToLocalStorage('sepmc-cell-10')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="sepmc-cell-11" oninput="saveToLocalStorage('sepmc-cell-11')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="sepmc-cell-12" oninput="saveToLocalStorage('sepmc-cell-12')">
                    </td>


                </tr>
                <tr>
                    <td style="font-weight:bolder; background-color:cornsilk; font-size: 12px;">Parañaque</td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="seppq-cell-1" oninput="saveToLocalStorage('seppq-cell-1')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="seppq-cell-2" oninput="saveToLocalStorage('seppq-cell-2')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="seppq-cell-3" oninput="saveToLocalStorage('seppq-cell-3')">
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="seppq-cell-4" oninput="saveToLocalStorage('seppq-cell-4')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="seppq-cell-5" oninput="saveToLocalStorage('seppq-cell-5')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="seppq-cell-6" oninput="saveToLocalStorage('seppq-cell-6')">
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center;" id="seppq-cell-7" oninput="saveToLocalStorage('seppq-cell-7')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="seppq-cell-8" oninput="saveToLocalStorage('seppq-cell-8')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="seppq-cell-9" oninput="saveToLocalStorage('seppq-cell-9')">
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center;" id="seppq-cell-10" oninput="saveToLocalStorage('seppq-cell-10')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="seppq-cell-11" oninput="saveToLocalStorage('seppq-cell-11')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="seppq-cell-12" oninput="saveToLocalStorage('seppq-cell-12')">
                    </td>

                <tr>
                    <td style="font-weight:bolder; background-color:cornsilk; font-size:12px;">Pasay</td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="seppc-cell-1" oninput="saveToLocalStorage('seppc-cell-1')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="seppc-cell-2" oninput="saveToLocalStorage('seppc-cell-2')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="seppc-cell-3" oninput="saveToLocalStorage('seppc-cell-3')">
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="seppc-cell-4" oninput="saveToLocalStorage('seppc-cell-4')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="seppc-cell-5" oninput="saveToLocalStorage('seppc-cell-5')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="seppc-cell-6" oninput="saveToLocalStorage('seppc-cell-6')">
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center;" id="seppc-cell-7" oninput="saveToLocalStorage('seppc-cell-7')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="seppc-cell-8" oninput="saveToLocalStorage('seppc-cell-8')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="seppc-cell-9" oninput="saveToLocalStorage('seppc-cell-9')">
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center;" id="seppc-cell-10" oninput="saveToLocalStorage('seppc-cell-10')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="seppc-cell-11" oninput="saveToLocalStorage('seppc-cell-11')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="seppc-cell-12" oninput="saveToLocalStorage('seppc-cell-12')">
                    </td>
                </tr>

                <tr>
                    <td style="font-weight:bolder; background-color:cornsilk; font-size:12px;">Total</td>

                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="septotal-cell-1" oninput="saveToLocalStorage('septotal-cell-1')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="septotal-cell-2" oninput="saveToLocalStorage('septotal-cell-2')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="septotal-cell-3" oninput="saveToLocalStorage('septotal-cell-3')">
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="septotal-cell-4" oninput="saveToLocalStorage('septotal-cell-4')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="septotal-cell-5" oninput="saveToLocalStorage('septotal-cell-5')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="septotal-cell-6" oninput="saveToLocalStorage('septotal-cell-6')">
                    </td>


                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="septotal-cell-7" oninput="saveToLocalStorage('septotal-cell-7')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="septotal-cell-8" oninput="saveToLocalStorage('septotal-cell-8')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="septotal-cell-9" oninput="saveToLocalStorage('septotal-cell-9')">
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="septotal-cell-10" oninput="saveToLocalStorage('septotal-cell-10')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="septotal-cell-11" oninput="saveToLocalStorage('septotal-cell-11')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center; font-weight:bolder" id="septotal-cell-12" oninput="saveToLocalStorage('septotal-cell-12')">
                    </td>
                </tr>
            </tbody>

        </table>
    </div>
    <div class="city-section" id="laspinas-section">
        <table style="width: 5px; height: 100px;">
            <thead style="width:10px">
                <tr>
                    <th style="color: white; font-size:30px; text-align:justify; color:khaki" colspan="13">OCTOBER</th>
                </tr>
                <tr style="width:10px;">
                    <th style="color: white; font-size:13px;" colspan="1">City</th>
                    <th style="color: white; font-size:13px;" colspan="1">Original Sample</th>
                    <th style="color: white; font-size:13px;" colspan="1">Add'l HHs</th>
                    <th style="color: white; font-size:13px;" colspan="1">Total</th>
                    <th style="color: white; font-size:13px;" colspan="1">Completed</th>
                    <th style="color: white; font-size:13px;" colspan="1">Refusal</th>
                    <th style="color: white; font-size:13px;" colspan="1">Entire HH Absent for<br>Extended Period of Time</th>
                    <th style="color: white; font-size:13px;" colspan="1">Vacant Housing Unit (VHU)<br>NOT <br>REPLACED</th>
                    <th style="color: white; font-size:13px" colspan="1">Housing Unit Destroyed/<br>Demolished NOT REPLACED</th>
                    <th style="color: white; font-size:13px" colspan="1">Address Not a Housing Unit Not <br>REPLACED</th>
                    <th style="color: white; font-size:13px" colspan="1">Permanently Moved Out (PMO), Not <br>usual resident (NUR),<br>Single person occupying housing unit<br>(SPOHU) passed away,<br>others<br>NOT REPLACED</th>
                    <th style="color: white; font-size:13px" colspan="1">Merged with another <br>household</th>
                    <th style="color: white; font-size:13px" colspan="1">Others</th>
                </tr>
                <tr>
                    <th style="color: white; font-size:9px"></th>
                    <th style="color: white; font-size:9px"></th>
                    <th style="color: white; font-size:9px"></th>
                    <th style="color: white; font-size:9px"></th>
                    <th style="color: white; font-size:9px">1</th>
                    <th style="color: white; font-size:9px">2</th>
                    <th style="color: white; font-size:9px">3</th>
                    <th style="color: white; font-size:9px">41</th>
                    <th style="color: white; font-size:9px">51</th>
                    <th style="color: white; font-size:9px">61</th>
                    <th style="color: white; font-size:9px">91</th>
                    <th style="color: white; font-size:9px">98</th>
                    <th style="color: white; font-size:9px">99</th>
                </tr>
            </thead>
    </div>
    <div class="city-section" id="laspinas-section">
        <table style="width: 5px; height: 100px;">
            <thead style="width:10px">
                <tr>
                    <th style="color: white; font-size:30px; text-align:justify; color:khaki" colspan="13">NOVEMBER</th>
                </tr>
                <tr style="width:10px;">
                    <th style="color: white; font-size:13px;" colspan="1">City</th>
                    <th style="color: white; font-size:13px;" colspan="1">Original Sample</th>
                    <th style="color: white; font-size:13px;" colspan="1">Add'l HHs</th>
                    <th style="color: white; font-size:13px;" colspan="1">Total</th>
                    <th style="color: white; font-size:13px;" colspan="1">Completed</th>
                    <th style="color: white; font-size:13px;" colspan="1">Refusal</th>
                    <th style="color: white; font-size:13px;" colspan="1">Entire HH Absent for<br>Extended Period of Time</th>
                    <th style="color: white; font-size:13px;" colspan="1">Vacant Housing Unit (VHU)<br>NOT <br>REPLACED</th>
                    <th style="color: white; font-size:13px" colspan="1">Housing Unit Destroyed/<br>Demolished NOT REPLACED</th>
                    <th style="color: white; font-size:13px" colspan="1">Address Not a Housing Unit Not <br>REPLACED</th>
                    <th style="color: white; font-size:13px" colspan="1">Permanently Moved Out (PMO), Not <br>usual resident (NUR),<br>Single person occupying housing unit<br>(SPOHU) passed away,<br>others<br>NOT REPLACED</th>
                    <th style="color: white; font-size:13px" colspan="1">Merged with another <br>household</th>
                    <th style="color: white; font-size:13px" colspan="1">Others</th>
                </tr>
                <tr>
                    <th style="color: white; font-size:9px"></th>
                    <th style="color: white; font-size:9px"></th>
                    <th style="color: white; font-size:9px"></th>
                    <th style="color: white; font-size:9px"></th>
                    <th style="color: white; font-size:9px">1</th>
                    <th style="color: white; font-size:9px">2</th>
                    <th style="color: white; font-size:9px">3</th>
                    <th style="color: white; font-size:9px">41</th>
                    <th style="color: white; font-size:9px">51</th>
                    <th style="color: white; font-size:9px">61</th>
                    <th style="color: white; font-size:9px">91</th>
                    <th style="color: white; font-size:9px">98</th>
                    <th style="color: white; font-size:9px">99</th>
                </tr>
            </thead>
    </div>

    <div class="city-section" id="laspinas-section">
        <table style="width: 5px; height: 100px;">
            <thead style="width:10px">
                <tr>
                    <th style="color: white; font-size:30px; text-align:justify; color:khaki" colspan="13">DECEMBER</th>
                </tr>
                <tr style="width:10px;">
                    <th style="color: white; font-size:13px;" colspan="1">City</th>
                    <th style="color: white; font-size:13px;" colspan="1">Original Sample</th>
                    <th style="color: white; font-size:13px;" colspan="1">Add'l HHs</th>
                    <th style="color: white; font-size:13px;" colspan="1">Total</th>
                    <th style="color: white; font-size:13px;" colspan="1">Completed</th>
                    <th style="color: white; font-size:13px;" colspan="1">Refusal</th>
                    <th style="color: white; font-size:13px;" colspan="1">Entire HH Absent for<br>Extended Period of Time</th>
                    <th style="color: white; font-size:13px;" colspan="1">Vacant Housing Unit (VHU)<br>NOT <br>REPLACED</th>
                    <th style="color: white; font-size:13px" colspan="1">Housing Unit Destroyed/<br>Demolished NOT REPLACED</th>
                    <th style="color: white; font-size:13px" colspan="1">Address Not a Housing Unit Not <br>REPLACED</th>
                    <th style="color: white; font-size:13px" colspan="1">Permanently Moved Out (PMO), Not <br>usual resident (NUR),<br>Single person occupying housing unit<br>(SPOHU) passed away,<br>others<br>NOT REPLACED</th>
                    <th style="color: white; font-size:13px" colspan="1">Merged with another <br>household</th>
                    <th style="color: white; font-size:13px" colspan="1">Others</th>
                </tr>
                <tr>
                    <th style="color: white; font-size:9px"></th>
                    <th style="color: white; font-size:9px"></th>
                    <th style="color: white; font-size:9px"></th>
                    <th style="color: white; font-size:9px"></th>
                    <th style="color: white; font-size:9px">1</th>
                    <th style="color: white; font-size:9px">2</th>
                    <th style="color: white; font-size:9px">3</th>
                    <th style="color: white; font-size:9px">41</th>
                    <th style="color: white; font-size:9px">51</th>
                    <th style="color: white; font-size:9px">61</th>
                    <th style="color: white; font-size:9px">91</th>
                    <th style="color: white; font-size:9px">98</th>
                    <th style="color: white; font-size:9px">99</th>
                </tr>
            </thead>
    </div>
    <!-- -----------------------------------------FOR SAVING TO LOCAL STORAGE OF EVERY DATA IN THE WEB BASE SYSTEM------------------------------------->
    <script>
        window.onload = function() {

            //////////////////////////////JANUARY/////////////////////////////////////
            loadFromLocalStorage('lp-cell-1');
            loadFromLocalStorage('lp-cell-2');
            loadFromLocalStorage('lp-cell-3');
            loadFromLocalStorage('lp-cell-4');
            loadFromLocalStorage('lp-cell-5');
            loadFromLocalStorage('lp-cell-6');
            loadFromLocalStorage('lp-cell-7');
            loadFromLocalStorage('lp-cell-8');
            loadFromLocalStorage('lp-cell-9');
            loadFromLocalStorage('lp-cell-10');
            loadFromLocalStorage('lp-cell-11');
            loadFromLocalStorage('lp-cell-12');

            loadFromLocalStorage('mc-cell-1');
            loadFromLocalStorage('mc-cell-2');
            loadFromLocalStorage('mc-cell-3');
            loadFromLocalStorage('mc-cell-4');
            loadFromLocalStorage('mc-cell-5');
            loadFromLocalStorage('mc-cell-6');
            loadFromLocalStorage('mc-cell-7');
            loadFromLocalStorage('mc-cell-8');
            loadFromLocalStorage('mc-cell-9');
            loadFromLocalStorage('mc-cell-10');
            loadFromLocalStorage('mc-cell-11');
            loadFromLocalStorage('mc-cell-12');

            loadFromLocalStorage('pq-cell-1');
            loadFromLocalStorage('pq-cell-2');
            loadFromLocalStorage('pq-cell-3');
            loadFromLocalStorage('pq-cell-4');
            loadFromLocalStorage('pq-cell-5');
            loadFromLocalStorage('pq-cell-6');
            loadFromLocalStorage('pq-cell-7');
            loadFromLocalStorage('pq-cell-8');
            loadFromLocalStorage('pq-cell-9');
            loadFromLocalStorage('pq-cell-10');
            loadFromLocalStorage('pq-cell-11');
            loadFromLocalStorage('pq-cell-12');

            loadFromLocalStorage('pc-cell-1');
            loadFromLocalStorage('pc-cell-2');
            loadFromLocalStorage('pc-cell-3');
            loadFromLocalStorage('pc-cell-4');
            loadFromLocalStorage('pc-cell-5');
            loadFromLocalStorage('pc-cell-6');
            loadFromLocalStorage('pc-cell-7');
            loadFromLocalStorage('pc-cell-8');
            loadFromLocalStorage('pc-cell-9');
            loadFromLocalStorage('pc-cell-10');
            loadFromLocalStorage('pc-cell-11');
            loadFromLocalStorage('pc-cell-12');

            loadFromLocalStorage('total-cell-1');
            loadFromLocalStorage('total-cell-2');
            loadFromLocalStorage('total-cell-3');
            loadFromLocalStorage('total-cell-4');
            loadFromLocalStorage('total-cell-5');
            loadFromLocalStorage('total-cell-6');
            loadFromLocalStorage('total-cell-7');
            loadFromLocalStorage('total-cell-8');
            loadFromLocalStorage('total-cell-9');
            loadFromLocalStorage('total-cell-10');
            loadFromLocalStorage('total-cell-11');
            loadFromLocalStorage('total-cell-12');

            ////////////////////////////FEBRUARY//////////////////////////
            loadFromLocalStorage('feblp-cell-1');
            loadFromLocalStorage('feblp-cell-2');
            loadFromLocalStorage('feblp-cell-3');
            loadFromLocalStorage('feblp-cell-4');
            loadFromLocalStorage('feblp-cell-5');
            loadFromLocalStorage('feblp-cell-6');
            loadFromLocalStorage('feblp-cell-7');
            loadFromLocalStorage('feblp-cell-8');
            loadFromLocalStorage('feblp-cell-9');
            loadFromLocalStorage('feblp-cell-10');
            loadFromLocalStorage('feblp-cell-11');
            loadFromLocalStorage('feblp-cell-12');
            loadFromLocalStorage('feblp-cell-13');

            loadFromLocalStorage('febmc-cell-1');
            loadFromLocalStorage('febmc-cell-2');
            loadFromLocalStorage('febmc-cell-3');
            loadFromLocalStorage('febmc-cell-4');
            loadFromLocalStorage('febmc-cell-5');
            loadFromLocalStorage('febmc-cell-6');
            loadFromLocalStorage('febmc-cell-7');
            loadFromLocalStorage('febmc-cell-8');
            loadFromLocalStorage('febmc-cell-9');
            loadFromLocalStorage('febmc-cell-10');
            loadFromLocalStorage('febmc-cell-11');
            loadFromLocalStorage('febmc-cell-12');
            loadFromLocalStorage('febmc-cell-13');

            loadFromLocalStorage('febpq-cell-1');
            loadFromLocalStorage('febpq-cell-2');
            loadFromLocalStorage('febpq-cell-3');
            loadFromLocalStorage('febpq-cell-4');
            loadFromLocalStorage('febpq-cell-5');
            loadFromLocalStorage('febpq-cell-6');
            loadFromLocalStorage('febpq-cell-7');
            loadFromLocalStorage('febpq-cell-8');
            loadFromLocalStorage('febpq-cell-9');
            loadFromLocalStorage('febpq-cell-10');
            loadFromLocalStorage('febpq-cell-11');
            loadFromLocalStorage('febpq-cell-12');
            loadFromLocalStorage('febpq-cell-13');

            loadFromLocalStorage('febpc-cell-1');
            loadFromLocalStorage('febpc-cell-2');
            loadFromLocalStorage('febpc-cell-3');
            loadFromLocalStorage('febpc-cell-4');
            loadFromLocalStorage('febpc-cell-5');
            loadFromLocalStorage('febpc-cell-6');
            loadFromLocalStorage('febpc-cell-7');
            loadFromLocalStorage('febpc-cell-8');
            loadFromLocalStorage('febpc-cell-9');
            loadFromLocalStorage('febpc-cell-10');
            loadFromLocalStorage('febpc-cell-11');
            loadFromLocalStorage('febpc-cell-12');
            loadFromLocalStorage('febpc-cell-13');

            loadFromLocalStorage('febtotal-cell-1');
            loadFromLocalStorage('febtotal-cell-2');
            loadFromLocalStorage('febtotal-cell-3');
            loadFromLocalStorage('febtotal-cell-4');
            loadFromLocalStorage('febtotal-cell-5');
            loadFromLocalStorage('febtotal-cell-6');
            loadFromLocalStorage('febtotal-cell-7');
            loadFromLocalStorage('febtotal-cell-8');
            loadFromLocalStorage('febtotal-cell-9');
            loadFromLocalStorage('febtotal-cell-10');
            loadFromLocalStorage('febtotal-cell-11');
            loadFromLocalStorage('febtotal-cell-12');
            loadFromLocalStorage('febtotal-cell-13');

            ////////////////////////////////////MARCH/////////////////////////////////
            loadFromLocalStorage('marlp-cell-1');
            loadFromLocalStorage('marlp-cell-2');
            loadFromLocalStorage('marlp-cell-3');
            loadFromLocalStorage('marlp-cell-4');
            loadFromLocalStorage('marlp-cell-5');
            loadFromLocalStorage('marlp-cell-6');
            loadFromLocalStorage('marlp-cell-7');
            loadFromLocalStorage('marlp-cell-8');
            loadFromLocalStorage('marlp-cell-9');
            loadFromLocalStorage('marlp-cell-10');
            loadFromLocalStorage('marlp-cell-11');
            loadFromLocalStorage('marlp-cell-12');
            loadFromLocalStorage('marlp-cell-13');

            loadFromLocalStorage('marmc-cell-1');
            loadFromLocalStorage('marmc-cell-2');
            loadFromLocalStorage('marmc-cell-3');
            loadFromLocalStorage('marmc-cell-4');
            loadFromLocalStorage('marmc-cell-5');
            loadFromLocalStorage('marmc-cell-6');
            loadFromLocalStorage('marmc-cell-7');
            loadFromLocalStorage('marmc-cell-8');
            loadFromLocalStorage('marmc-cell-9');
            loadFromLocalStorage('marmc-cell-10');
            loadFromLocalStorage('marmc-cell-11');
            loadFromLocalStorage('marmc-cell-12');
            loadFromLocalStorage('marmc-cell-13');

            loadFromLocalStorage('marpq-cell-1');
            loadFromLocalStorage('marpq-cell-2');
            loadFromLocalStorage('marpq-cell-3');
            loadFromLocalStorage('marpq-cell-4');
            loadFromLocalStorage('marpq-cell-5');
            loadFromLocalStorage('marpq-cell-6');
            loadFromLocalStorage('marpq-cell-7');
            loadFromLocalStorage('marpq-cell-8');
            loadFromLocalStorage('marpq-cell-9');
            loadFromLocalStorage('marpq-cell-10');
            loadFromLocalStorage('marpq-cell-11');
            loadFromLocalStorage('marpq-cell-12');
            loadFromLocalStorage('marpq-cell-13');

            loadFromLocalStorage('marpc-cell-1');
            loadFromLocalStorage('marpc-cell-2');
            loadFromLocalStorage('marpc-cell-3');
            loadFromLocalStorage('marpc-cell-4');
            loadFromLocalStorage('marpc-cell-5');
            loadFromLocalStorage('marpc-cell-6');
            loadFromLocalStorage('marpc-cell-7');
            loadFromLocalStorage('marpc-cell-8');
            loadFromLocalStorage('marpc-cell-9');
            loadFromLocalStorage('marpc-cell-10');
            loadFromLocalStorage('marpc-cell-11');
            loadFromLocalStorage('marpc-cell-12');
            loadFromLocalStorage('marpc-cell-13');

            loadFromLocalStorage('martotal-cell-1');
            loadFromLocalStorage('martotal-cell-2');
            loadFromLocalStorage('martotal-cell-3');
            loadFromLocalStorage('martotal-cell-4');
            loadFromLocalStorage('martotal-cell-5');
            loadFromLocalStorage('martotal-cell-6');
            loadFromLocalStorage('martotal-cell-7');
            loadFromLocalStorage('martotal-cell-8');
            loadFromLocalStorage('martotal-cell-9');
            loadFromLocalStorage('martotal-cell-10');
            loadFromLocalStorage('martotal-cell-11');
            loadFromLocalStorage('martotal-cell-12');
            loadFromLocalStorage('martotal-cell-13');

            /////////////////////////////////////////////APRIL///////////////////////////////////////////////////////
            loadFromLocalStorage('aprlp-cell-1');
            loadFromLocalStorage('aprlp-cell-2');
            loadFromLocalStorage('aprlp-cell-3');
            loadFromLocalStorage('aprlp-cell-4');
            loadFromLocalStorage('aprlp-cell-5');
            loadFromLocalStorage('aprlp-cell-6');
            loadFromLocalStorage('aprlp-cell-7');
            loadFromLocalStorage('aprlp-cell-8');
            loadFromLocalStorage('aprlp-cell-9');
            loadFromLocalStorage('aprlp-cell-10');
            loadFromLocalStorage('aprlp-cell-11');
            loadFromLocalStorage('aprlp-cell-12');

            loadFromLocalStorage('aprmc-cell-1');
            loadFromLocalStorage('aprmc-cell-2');
            loadFromLocalStorage('aprmc-cell-3');
            loadFromLocalStorage('aprmc-cell-4');
            loadFromLocalStorage('aprmc-cell-5');
            loadFromLocalStorage('aprmc-cell-6');
            loadFromLocalStorage('aprmc-cell-7');
            loadFromLocalStorage('aprmc-cell-8');
            loadFromLocalStorage('aprmc-cell-9');
            loadFromLocalStorage('aprmc-cell-10');
            loadFromLocalStorage('aprmc-cell-11');
            loadFromLocalStorage('aprmc-cell-12');

            loadFromLocalStorage('aprpq-cell-1');
            loadFromLocalStorage('aprpq-cell-2');
            loadFromLocalStorage('aprpq-cell-3');
            loadFromLocalStorage('aprpq-cell-4');
            loadFromLocalStorage('aprpq-cell-5');
            loadFromLocalStorage('aprpq-cell-6');
            loadFromLocalStorage('aprpq-cell-7');
            loadFromLocalStorage('aprpq-cell-8');
            loadFromLocalStorage('aprpq-cell-9');
            loadFromLocalStorage('aprpq-cell-10');
            loadFromLocalStorage('aprpq-cell-11');
            loadFromLocalStorage('aprpq-cell-12');

            loadFromLocalStorage('aprpc-cell-1');
            loadFromLocalStorage('aprpc-cell-2');
            loadFromLocalStorage('aprpc-cell-3');
            loadFromLocalStorage('aprpc-cell-4');
            loadFromLocalStorage('aprpc-cell-5');
            loadFromLocalStorage('aprpc-cell-6');
            loadFromLocalStorage('aprpc-cell-7');
            loadFromLocalStorage('aprpc-cell-8');
            loadFromLocalStorage('aprpc-cell-9');
            loadFromLocalStorage('aprpc-cell-10');
            loadFromLocalStorage('aprpc-cell-11');
            loadFromLocalStorage('aprpc-cell-12');

            loadFromLocalStorage('aprtotal-cell-1');
            loadFromLocalStorage('aprtotal-cell-2');
            loadFromLocalStorage('aprtotal-cell-3');
            loadFromLocalStorage('aprtotal-cell-4');
            loadFromLocalStorage('aprtotal-cell-5');
            loadFromLocalStorage('aprtotal-cell-6');
            loadFromLocalStorage('aprtotal-cell-7');
            loadFromLocalStorage('aprtotal-cell-8');
            loadFromLocalStorage('aprtotal-cell-9');
            loadFromLocalStorage('aprtotal-cell-10');
            loadFromLocalStorage('aprtotal-cell-11');
            loadFromLocalStorage('aprtotal-cell-12');

            //////////////////////////////////MAY///////////////////////////////////////////
            loadFromLocalStorage('maylp-cell-1');
            loadFromLocalStorage('maylp-cell-2');
            loadFromLocalStorage('maylp-cell-3');
            loadFromLocalStorage('maylp-cell-4');
            loadFromLocalStorage('maylp-cell-5');
            loadFromLocalStorage('maylp-cell-6');
            loadFromLocalStorage('maylp-cell-7');
            loadFromLocalStorage('maylp-cell-8');
            loadFromLocalStorage('maylp-cell-9');
            loadFromLocalStorage('maylp-cell-10');
            loadFromLocalStorage('maylp-cell-11');
            loadFromLocalStorage('maylp-cell-12');
            loadFromLocalStorage('maylp-cell-13');

            loadFromLocalStorage('maymc-cell-1');
            loadFromLocalStorage('maymc-cell-2');
            loadFromLocalStorage('maymc-cell-3');
            loadFromLocalStorage('maymc-cell-4');
            loadFromLocalStorage('maymc-cell-5');
            loadFromLocalStorage('maymc-cell-6');
            loadFromLocalStorage('maymc-cell-7');
            loadFromLocalStorage('maymc-cell-8');
            loadFromLocalStorage('maymc-cell-9');
            loadFromLocalStorage('maymc-cell-10');
            loadFromLocalStorage('maymc-cell-11');
            loadFromLocalStorage('maymc-cell-12');
            loadFromLocalStorage('maymc-cell-13');

            loadFromLocalStorage('maypq-cell-1');
            loadFromLocalStorage('maypq-cell-2');
            loadFromLocalStorage('maypq-cell-3');
            loadFromLocalStorage('maypq-cell-4');
            loadFromLocalStorage('maypq-cell-5');
            loadFromLocalStorage('maypq-cell-6');
            loadFromLocalStorage('maypq-cell-7');
            loadFromLocalStorage('maypq-cell-8');
            loadFromLocalStorage('maypq-cell-9');
            loadFromLocalStorage('maypq-cell-10');
            loadFromLocalStorage('maypq-cell-11');
            loadFromLocalStorage('maypq-cell-12');
            loadFromLocalStorage('maypq-cell-13');

            loadFromLocalStorage('maypc-cell-1');
            loadFromLocalStorage('maypc-cell-2');
            loadFromLocalStorage('maypc-cell-3');
            loadFromLocalStorage('maypc-cell-4');
            loadFromLocalStorage('maypc-cell-5');
            loadFromLocalStorage('maypc-cell-6');
            loadFromLocalStorage('maypc-cell-7');
            loadFromLocalStorage('maypc-cell-8');
            loadFromLocalStorage('maypc-cell-9');
            loadFromLocalStorage('maypc-cell-10');
            loadFromLocalStorage('maypc-cell-11');
            loadFromLocalStorage('maypc-cell-12');
            loadFromLocalStorage('maypc-cell-13');

            loadFromLocalStorage('maytotal-cell-1');
            loadFromLocalStorage('maytotal-cell-2');
            loadFromLocalStorage('maytotal-cell-3');
            loadFromLocalStorage('maytotal-cell-4');
            loadFromLocalStorage('maytotal-cell-5');
            loadFromLocalStorage('maytotal-cell-6');
            loadFromLocalStorage('maytotal-cell-7');
            loadFromLocalStorage('maytotal-cell-8');
            loadFromLocalStorage('maytotal-cell-9');
            loadFromLocalStorage('maytotal-cell-10');
            loadFromLocalStorage('maytotal-cell-11');
            loadFromLocalStorage('maytotal-cell-12');
            loadFromLocalStorage('maytotal-cell-13');

            //////////////////////////////////////////////////JUNE////////////////////////////////////
            loadFromLocalStorage('junlp-cell-1');
            loadFromLocalStorage('junlp-cell-2');
            loadFromLocalStorage('junlp-cell-3');
            loadFromLocalStorage('junlp-cell-4');
            loadFromLocalStorage('junlp-cell-5');
            loadFromLocalStorage('junlp-cell-6');
            loadFromLocalStorage('junlp-cell-7');
            loadFromLocalStorage('junlp-cell-8');
            loadFromLocalStorage('junlp-cell-9');
            loadFromLocalStorage('junlp-cell-10');
            loadFromLocalStorage('junlp-cell-11');
            loadFromLocalStorage('junlp-cell-12');
            loadFromLocalStorage('junlp-cell-13');

            loadFromLocalStorage('junmc-cell-1');
            loadFromLocalStorage('junmc-cell-2');
            loadFromLocalStorage('junmc-cell-3');
            loadFromLocalStorage('junmc-cell-4');
            loadFromLocalStorage('junmc-cell-5');
            loadFromLocalStorage('junmc-cell-6');
            loadFromLocalStorage('junmc-cell-7');
            loadFromLocalStorage('junmc-cell-8');
            loadFromLocalStorage('junmc-cell-9');
            loadFromLocalStorage('junmc-cell-10');
            loadFromLocalStorage('junmc-cell-11');
            loadFromLocalStorage('junmc-cell-12');
            loadFromLocalStorage('junmc-cell-13');

            loadFromLocalStorage('junpq-cell-1');
            loadFromLocalStorage('junpq-cell-2');
            loadFromLocalStorage('junpq-cell-3');
            loadFromLocalStorage('junpq-cell-4');
            loadFromLocalStorage('junpq-cell-5');
            loadFromLocalStorage('junpq-cell-6');
            loadFromLocalStorage('junpq-cell-7');
            loadFromLocalStorage('junpq-cell-8');
            loadFromLocalStorage('junpq-cell-9');
            loadFromLocalStorage('junpq-cell-10');
            loadFromLocalStorage('junpq-cell-11');
            loadFromLocalStorage('junpq-cell-12');
            loadFromLocalStorage('junpq-cell-13');

            loadFromLocalStorage('junpc-cell-1');
            loadFromLocalStorage('junpc-cell-2');
            loadFromLocalStorage('junpc-cell-3');
            loadFromLocalStorage('junpc-cell-4');
            loadFromLocalStorage('junpc-cell-5');
            loadFromLocalStorage('junpc-cell-6');
            loadFromLocalStorage('junpc-cell-7');
            loadFromLocalStorage('junpc-cell-8');
            loadFromLocalStorage('junpc-cell-9');
            loadFromLocalStorage('junpc-cell-10');
            loadFromLocalStorage('junpc-cell-11');
            loadFromLocalStorage('junpc-cell-12');
            loadFromLocalStorage('junpc-cell-13');

            loadFromLocalStorage('juntotal-cell-1');
            loadFromLocalStorage('juntotal-cell-2');
            loadFromLocalStorage('juntotal-cell-3');
            loadFromLocalStorage('juntotal-cell-4');
            loadFromLocalStorage('juntotal-cell-5');
            loadFromLocalStorage('juntotal-cell-6');
            loadFromLocalStorage('juntotal-cell-7');
            loadFromLocalStorage('juntotal-cell-8');
            loadFromLocalStorage('juntotal-cell-9');
            loadFromLocalStorage('juntotal-cell-10');
            loadFromLocalStorage('juntotal-cell-11');
            loadFromLocalStorage('juntotal-cell-12');
            loadFromLocalStorage('juntotal-cell-13');

            //////////////////////////////JULY//////////////////////

            loadFromLocalStorage('jullp-cell-1');
            loadFromLocalStorage('jullp-cell-2');
            loadFromLocalStorage('jullp-cell-3');
            loadFromLocalStorage('jullp-cell-4');
            loadFromLocalStorage('jullp-cell-5');
            loadFromLocalStorage('jullp-cell-6');
            loadFromLocalStorage('jullp-cell-7');
            loadFromLocalStorage('jullp-cell-8');
            loadFromLocalStorage('jullp-cell-9');
            loadFromLocalStorage('jullp-cell-10');
            loadFromLocalStorage('jullp-cell-11');
            loadFromLocalStorage('jullp-cell-12');
            loadFromLocalStorage('jullp-cell-13');

            loadFromLocalStorage('julmc-cell-1');
            loadFromLocalStorage('julmc-cell-2');
            loadFromLocalStorage('julmc-cell-3');
            loadFromLocalStorage('julmc-cell-4');
            loadFromLocalStorage('julmc-cell-5');
            loadFromLocalStorage('julmc-cell-6');
            loadFromLocalStorage('julmc-cell-7');
            loadFromLocalStorage('julmc-cell-8');
            loadFromLocalStorage('julmc-cell-9');
            loadFromLocalStorage('julmc-cell-10');
            loadFromLocalStorage('julmc-cell-11');
            loadFromLocalStorage('julmc-cell-12');
            loadFromLocalStorage('julmc-cell-13');

            loadFromLocalStorage('julpq-cell-1');
            loadFromLocalStorage('julpq-cell-2');
            loadFromLocalStorage('julpq-cell-3');
            loadFromLocalStorage('julpq-cell-4');
            loadFromLocalStorage('julpq-cell-5');
            loadFromLocalStorage('julpq-cell-6');
            loadFromLocalStorage('julpq-cell-7');
            loadFromLocalStorage('julpq-cell-8');
            loadFromLocalStorage('julpq-cell-9');
            loadFromLocalStorage('julpq-cell-10');
            loadFromLocalStorage('julpq-cell-11');
            loadFromLocalStorage('julpq-cell-12');
            loadFromLocalStorage('julpq-cell-13');

            loadFromLocalStorage('julpc-cell-1');
            loadFromLocalStorage('julpc-cell-2');
            loadFromLocalStorage('julpc-cell-3');
            loadFromLocalStorage('julpc-cell-4');
            loadFromLocalStorage('julpc-cell-5');
            loadFromLocalStorage('julpc-cell-6');
            loadFromLocalStorage('julpc-cell-7');
            loadFromLocalStorage('julpc-cell-8');
            loadFromLocalStorage('julpc-cell-9');
            loadFromLocalStorage('julpc-cell-10');
            loadFromLocalStorage('julpc-cell-11');
            loadFromLocalStorage('julpc-cell-12');
            loadFromLocalStorage('julpc-cell-13');

            loadFromLocalStorage('jultotal-cell-1');
            loadFromLocalStorage('jultotal-cell-2');
            loadFromLocalStorage('jultotal-cell-3');
            loadFromLocalStorage('jultotal-cell-4');
            loadFromLocalStorage('jultotal-cell-5');
            loadFromLocalStorage('jultotal-cell-6');
            loadFromLocalStorage('jultotal-cell-7');
            loadFromLocalStorage('jultotal-cell-8');
            loadFromLocalStorage('jultotal-cell-9');
            loadFromLocalStorage('jultotal-cell-10');
            loadFromLocalStorage('jultotal-cell-11');
            loadFromLocalStorage('jultotal-cell-12');
            loadFromLocalStorage('jultotal-cell-13');

            ////////////AUGUST///////////////////////////////////

            loadFromLocalStorage('auglp-cell-1');
            loadFromLocalStorage('auglp-cell-2');
            loadFromLocalStorage('auglp-cell-3');
            loadFromLocalStorage('auglp-cell-4');
            loadFromLocalStorage('auglp-cell-5');
            loadFromLocalStorage('auglp-cell-6');
            loadFromLocalStorage('auglp-cell-7');
            loadFromLocalStorage('auglp-cell-8');
            loadFromLocalStorage('auglp-cell-9');
            loadFromLocalStorage('auglp-cell-10');
            loadFromLocalStorage('auglp-cell-11');
            loadFromLocalStorage('auglp-cell-12');
            loadFromLocalStorage('auglp-cell-13');

            loadFromLocalStorage('augmc-cell-1');
            loadFromLocalStorage('augmc-cell-2');
            loadFromLocalStorage('augmc-cell-3');
            loadFromLocalStorage('augmc-cell-4');
            loadFromLocalStorage('augmc-cell-5');
            loadFromLocalStorage('augmc-cell-6');
            loadFromLocalStorage('augmc-cell-7');
            loadFromLocalStorage('augmc-cell-8');
            loadFromLocalStorage('augmc-cell-9');
            loadFromLocalStorage('augmc-cell-10');
            loadFromLocalStorage('augmc-cell-11');
            loadFromLocalStorage('augmc-cell-12');
            loadFromLocalStorage('augmc-cell-13');

            loadFromLocalStorage('augpq-cell-1');
            loadFromLocalStorage('augpq-cell-2');
            loadFromLocalStorage('augpq-cell-3');
            loadFromLocalStorage('augpq-cell-4');
            loadFromLocalStorage('augpq-cell-5');
            loadFromLocalStorage('augpq-cell-6');
            loadFromLocalStorage('augpq-cell-7');
            loadFromLocalStorage('augpq-cell-8');
            loadFromLocalStorage('augpq-cell-9');
            loadFromLocalStorage('augpq-cell-10');
            loadFromLocalStorage('augpq-cell-11');
            loadFromLocalStorage('augpq-cell-12');
            loadFromLocalStorage('augpq-cell-13');

            loadFromLocalStorage('augpc-cell-1');
            loadFromLocalStorage('augpc-cell-2');
            loadFromLocalStorage('augpc-cell-3');
            loadFromLocalStorage('augpc-cell-4');
            loadFromLocalStorage('augpc-cell-5');
            loadFromLocalStorage('augpc-cell-6');
            loadFromLocalStorage('augpc-cell-7');
            loadFromLocalStorage('augpc-cell-8');
            loadFromLocalStorage('augpc-cell-9');
            loadFromLocalStorage('augpc-cell-10');
            loadFromLocalStorage('augpc-cell-11');
            loadFromLocalStorage('augpc-cell-12');
            loadFromLocalStorage('augpc-cell-13');

            loadFromLocalStorage('augtotal-cell-1');
            loadFromLocalStorage('augtotal-cell-2');
            loadFromLocalStorage('augtotal-cell-3');
            loadFromLocalStorage('augtotal-cell-4');
            loadFromLocalStorage('augtotal-cell-5');
            loadFromLocalStorage('augtotal-cell-6');
            loadFromLocalStorage('augtotal-cell-7');
            loadFromLocalStorage('augtotal-cell-8');
            loadFromLocalStorage('augtotal-cell-9');
            loadFromLocalStorage('augtotal-cell-10');
            loadFromLocalStorage('augtotal-cell-11');
            loadFromLocalStorage('augtotal-cell-12');
            loadFromLocalStorage('augtotal-cell-13');

            /////////////////SEPTEMBER///////////////////
            loadFromLocalStorage('seplp-cell-1');
            loadFromLocalStorage('seplp-cell-2');
            loadFromLocalStorage('seplp-cell-3');
            loadFromLocalStorage('seplp-cell-4');
            loadFromLocalStorage('seplp-cell-5');
            loadFromLocalStorage('seplp-cell-6');
            loadFromLocalStorage('seplp-cell-7');
            loadFromLocalStorage('seplp-cell-8');
            loadFromLocalStorage('seplp-cell-9');
            loadFromLocalStorage('seplp-cell-10');
            loadFromLocalStorage('seplp-cell-11');
            loadFromLocalStorage('seplp-cell-12');
            loadFromLocalStorage('seplp-cell-13');

            loadFromLocalStorage('sepmc-cell-1');
            loadFromLocalStorage('sepmc-cell-2');
            loadFromLocalStorage('sepmc-cell-3');
            loadFromLocalStorage('sepmc-cell-4');
            loadFromLocalStorage('sepmc-cell-5');
            loadFromLocalStorage('sepmc-cell-6');
            loadFromLocalStorage('sepmc-cell-7');
            loadFromLocalStorage('sepmc-cell-8');
            loadFromLocalStorage('sepmc-cell-9');
            loadFromLocalStorage('sepmc-cell-10');
            loadFromLocalStorage('sepmc-cell-11');
            loadFromLocalStorage('sepmc-cell-12');
            loadFromLocalStorage('sepmc-cell-13');

            loadFromLocalStorage('seppq-cell-1');
            loadFromLocalStorage('seppq-cell-2');
            loadFromLocalStorage('seppq-cell-3');
            loadFromLocalStorage('seppq-cell-4');
            loadFromLocalStorage('seppq-cell-5');
            loadFromLocalStorage('seppq-cell-6');
            loadFromLocalStorage('seppq-cell-7');
            loadFromLocalStorage('seppq-cell-8');
            loadFromLocalStorage('seppq-cell-9');
            loadFromLocalStorage('seppq-cell-10');
            loadFromLocalStorage('seppq-cell-11');
            loadFromLocalStorage('seppq-cell-12');
            loadFromLocalStorage('seppq-cell-13');

            loadFromLocalStorage('seppc-cell-1');
            loadFromLocalStorage('seppc-cell-2');
            loadFromLocalStorage('seppc-cell-3');
            loadFromLocalStorage('seppc-cell-4');
            loadFromLocalStorage('seppc-cell-5');
            loadFromLocalStorage('seppc-cell-6');
            loadFromLocalStorage('seppc-cell-7');
            loadFromLocalStorage('seppc-cell-8');
            loadFromLocalStorage('seppc-cell-9');
            loadFromLocalStorage('seppc-cell-10');
            loadFromLocalStorage('seppc-cell-11');
            loadFromLocalStorage('seppc-cell-12');
            loadFromLocalStorage('seppc-cell-13');

            loadFromLocalStorage('septotal-cell-1');
            loadFromLocalStorage('septotal-cell-2');
            loadFromLocalStorage('septotal-cell-3');
            loadFromLocalStorage('septotal-cell-4');
            loadFromLocalStorage('septotal-cell-5');
            loadFromLocalStorage('septotal-cell-6');
            loadFromLocalStorage('septotal-cell-7');
            loadFromLocalStorage('septotal-cell-8');
            loadFromLocalStorage('septotal-cell-9');
            loadFromLocalStorage('septotal-cell-10');
            loadFromLocalStorage('septotal-cell-11');
            loadFromLocalStorage('septotal-cell-12');
            loadFromLocalStorage('septotal-cell-13');

        };

        function saveToLocalStorage(id) {
            const value = document.getElementById(id).value;
            localStorage.setItem(id, value);
        }

        function loadFromLocalStorage(id) {
            const savedValue = localStorage.getItem(id);
            if (savedValue) {
                document.getElementById(id).value = savedValue;
            }
        }
    </script>
</body>

</html>