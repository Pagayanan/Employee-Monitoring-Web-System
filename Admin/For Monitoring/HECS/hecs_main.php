<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>City Monthly Target vs Actual Data</title>
    <link rel="shortcut icon" type="image/png" href="../images for template/psa logo.png">
    <!-- <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> -->
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .city-section {
            margin: 20px auto;
            border-radius: 10px;
            opacity: 0, 0, 0, 0.1;
            max-width: min-content;
            
            content:inherit;
            width: 100%;
        }

        .city-section2 {
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

            width: 100%;
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
    <img src="../images for template/psa logo.png" alt="Logo 1">
    <div style="font-size:medium; font-weight:bolder" class="logo-text">Republic of the Philippines<br>
        PHILIPPINE STATISTICS AUTHORITY<br>
        Regional Statistical Service Office<br>
        National Capital Region-Provincial Statistical Office V</div>
    <img src="../images for template/logph.png" alt="Logo 2">
</div>
<br>
<br>
<br>
<br>
<!---------------------------------------------------------------------------->
<!-------------------------------------- BY CITY BUTTON  --------------------->
<!---------------------------------------------------------------------------->





<!-- <div class="button-container">
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
</div> -->
<!-------------------------------------------------------------------------------->
<!-------------------------------------- BY CITY BUTTON END----------------------->
<!-------------------------------------------------------------------------------->

<body>
    <!-- <h2 style="text-align:center;">LAS PIÑAS CITY</h2> -->
    <!-- City Section for Las Piñas -->
    <div class="city-header" style="font-weight: bolder; background-color:khaki;">HECS</div>
    <div class="city-section" id="laspinas-section">
        <br>
        <table>
            <thead>
                <tr>
                    <th style="color: white; background-color: #0A414F; text-align:center; font-size:20px;" colspan="4">ACTIVITIES</th>

                </tr>
                <tr>
                    <th style="color: white; background-color: #0A414F; text-align:center;" colspan="4">ROUND:<input type="text" style="font-size:18px; background-color:#0A414F; color:white; font-weight:bold;" value="0" id="rounds" oninput="saveData(this.id, this.value)"></th>

                </tr>

                <tr>
                    <th style="color: white; font-size:12px; text-align:left;" colspan="1">Activities</th>
                    <th style="color: white; font-size:12px; text-align:center;">Target Date</th>
                    <th style="color: white; font-size:12px; text-align:center;">Actual</th>
                    <th style="color: white; font-size:12px; text-align:center;">Remarks</th>

                </tr>
            </thead>
            <div>
                    <a style="background-color:#0A414F; color:white; border-radius:7px; font-weight: bolder; padding:5px" href="../table with dashboard/progress.php" class="btn btn-primary active">SELECT PROJECT</a>
                </div>
            <tbody>
               
                <br>
                <!-- Repeat for each category -->
                <tr>
                    <td style="font-weight: bolder; font-size:12px; width:12%;">Task Force Training</td>
                    <td style="text-align: center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value="0" id="tft_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align: center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value="0" id="tft_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align: center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value="text" id="tft_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>

                </tr>

                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Second Level Training</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value="0" id="slt_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value="0" id="slt_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value="text" id="slt_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>

                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Third Level Training</td>
                    <td style="text-align: center;"><input type="date" style="border: white; text-align:center; font-size:12px" value="0" id="tlt_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align: center;"><input type="date" style="border: white; text-align:center;font-size:12px;" value="0" id="tlt_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align: center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value="text" id="tlt_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>

                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Data Collection</td>
                    <td style="text-align: center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value="0" id="dc_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align: center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value="0" id="dc_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align: center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value="text" id="dc_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>

                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Supervision</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value="0" id="s_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value="0" id="s_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value="text" id="s_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>

                </tr>
                <th style="color: black; font-size:15px; font-weight:bolder; text-align:left; background-color:lightskyblue;" colspan="4">DELIVERABLES SUBMISSION</th>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Raw Datafile</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value="0" id="rd_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value="0" id="rd_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value="text" id="rd_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Clean Datafile</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value="0" id="cd_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value="0" id="cd_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value="text" id="cd_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Narative Report</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value="0" id="nr_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value="0" id="nr_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value="text" id="nr_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Financial Report</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value="0" id="fr_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value="0" id="fr_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value="text" id="fr_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">SSU List</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value="0" id="sl_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value="0" id="sl_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value="text" id="sl_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Observation Report</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value="0" id="or_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value="0" id="or_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value="text" id="or_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">re-interview</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value="0" id="re_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value="0" id="re_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value="text" id="re_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>


                <script>
                    // Function to save data to localStorage
                    function saveData(inputId, value) {
                        localStorage.setItem(inputId, value); // Save the input value in localStorage
                    }

                    // On page load, restore the values from localStorage if they exist
                    window.onload = function() {
                        const inputIds = ['rounds', 'tft_1', 'tft_2', 'tft_3', 'slt_1', 'slt_2', 'slt_3', 'tlt_1', 'tlt_2', 'tlt_3', 'dc_1', 'dc_2',
                            'dc_3', 's_1', 's_2', 's_3', 'rd_1', 'rd_2', 'rd_3', 'cd_1', 'cd_2', 'cd_3', 'nr_1', 'nr_2', 'nr_3', 'fr_1', 'fr_2', 'fr_3', 'sl_1', 'sl_2',
                            'sl_3', 'or_1', 'or_2', 'or_3', 're_1', 're_2', 're_3'
                        ]; // List of input field IDs,


                        inputIds.forEach(id => {
                            const savedValue = localStorage.getItem(id);
                            if (savedValue !== null) {
                                document.getElementById(id).value = savedValue; // Restore the saved value to the input field
                            }
                        });
                    };
                </script>

            </tbody>
        </table>
        <!-- <div class="chart-container">
            <canvas id="laspinasChart"></canvas>
        </div> -->
    </div>
    <div class="city-section2" id="laspinas-section">
        <table>
            <thead>
                <tr>

                </tr>
                <tr>
                    <th></th>
                    <th style="color: white; font-size:22px; width:12%; text-align:center;" colspan="3">ROUND:</th>
                    <th style="color: white; font-size:22px; width:12%; text-align:justify;" colspan="14"><input type="text" style="font-size:22px; background-color:#0A414F; color:white; text-align:justify; font-weight:bold;" value="YEAR/MONTH" id="DCSR_ROUND" oninput="saveData(this.id, this.value)"></th>

                </tr>

                <tr>
                    <th style="color: black; font-size:20px; text-align:justify; font-weight:bolder; background-color:lightsteelblue"></th>
                    <th style="color: black; font-size:20px; text-align:justify; font-weight:bolder; background-color:lightsteelblue"></th>
                    <th style="color: black; font-size:20px; text-align:justify; font-weight:bolder; background-color:lightsteelblue"></th>
                    <th style="color: black; font-size:20px; text-align:justify; font-weight:bolder; background-color:lightsteelblue"></th>
                    <th style="color: black; font-size:20px; text-align:center; font-weight:bolder; background-color:lightsteelblue" colspan="11">Actual Workload by Interview Status</th>

                </tr>
                <tr>
                    <th style="color: black; font-size:15px; text-align:center; background-color:lightsteelblue">City</th>
                    <th style="color: black; font-size:15px; text-align:center; background-color:lightsteelblue">Original Sample</th>
                    <th style="color: black; font-size:15px; text-align:center; background-color:lightsteelblue">Add'l HHs</th>
                    <th style="color: black; font-size:15px; text-align:center; background-color:lightsteelblue">Total</th>
                    <th style="color: black; font-size:15px; text-align:center; background-color:lightsteelblue">1</th>
                    <th style="color: black; font-size:15px; text-align:center; background-color:lightsteelblue">2</th>
                    <th style="color: black; font-size:15px; text-align:center; background-color:lightsteelblue">3</th>
                    <th style="color: black; font-size:15px; text-align:center; background-color:lightsteelblue">42</th>
                    <th style="color: black; font-size:15px; text-align:center; background-color:lightsteelblue">52</th>
                    <th style="color: black; font-size:15px; text-align:center; background-color:lightsteelblue">62</th>
                    <th style="color: black; font-size:15px; text-align:center; background-color:lightsteelblue">7</th>
                    <th style="color: black; font-size:15px; text-align:center; background-color:lightsteelblue">91</th>
                    <th style="color: black; font-size:15px; text-align:center; background-color:lightsteelblue">94</th>
                    <th style="color: black; font-size:15px; text-align:center; background-color:lightsteelblue"></th>
                    <th style="color: black; font-size:15px; text-align:center; background-color:lightsteelblue">Response Rate</th>
                </tr>
            </thead>
            <tbody>
                <!-- Repeat for each category -->
                <tr>
                    <td style="font-weight: bolder; font-size:9px; width:15%; font-size:14px;">Las Piñas</td>
                    <td style="width:7%;"><input type="text" style="border: white;  text-align:center; font-size:12px;" value="" id="lp_11" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="width:7%;"><input type="text" style="border: white;  text-align:center;  font-size:12px;" value="" id="lp_22" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="width:7%;"><input type="text" style="border: white;  text-align:center;  font-size:12px;" value="" id="lp_33" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="width:7%;"><input type="text" style="border: white;  text-align:center;  font-size:12px;" value="" id="lp_44" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="width:7%;"><input type="text" style="border: white;  text-align:center;  font-size:12px;" value="" id="lp_55" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="width:7%;"><input type="text" style="border: white;  text-align:center;  font-size:12px;" value="" id="lp_66" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="width:7%;"><input type="text" style="border: white;  text-align:center;  font-size:12px;" value="" id="lp_77" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="width:7%;"><input type="text" style="border: white;  text-align:center;  font-size:12px;" value="" id="lp_88" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="width:7%;"><input type="text" style="border: white;  text-align:center;  font-size:12px;" value="" id="lp_99" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="width:7%;"><input type="text" style="border: white;  text-align:center;  font-size:12px;" value="" id="lp_101" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="width:7%;"><input type="text" style="border: white;  text-align:center;  font-size:12px;" value="" id="lp_111" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="width:7%;"><input type="text" style="border: white;  text-align:center;  font-size:12px;" value="" id="lp_122" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="width:7%;"><input type="number" style="border: white;  text-align:center; font-size:12px;" value="" id="lp_133" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="width:7%;"><input type="number" style="border: white;  text-align:center; font-size:12px;" value="" id="lp_144" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>

                </tr>

                <tr>
                    <td style="font-size:12px; font-weight:bolder; font-size:14px;">Muntinlupa</td>
                    <td><input type="text" style="border: white; text-align:center; font-size:12px;" value="" id="mc_11" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="mc_22" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="mc_33" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="mc_44" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="mc_55" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="mc_66" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="mc_77" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="mc_88" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="mc_99" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="mc_101" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="mc_111" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="mc_122" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;  font-size:12px;" value="" id="mc_133" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;  font-size:12px;" value="" id="mc_144" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>

                </tr>
                <tr>
                    <td style="font-weight:bolder; font-size:14px;">Parañaque</td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="pq_11" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="pq_22" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="pq_33" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="pq_44" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="pq_55" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="pq_66" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="pq_77" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="pq_88" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="pq_99" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="pq_101" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="pq_111" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="pq_122" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;  font-size:12px;" value="" id="pq_133" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;  font-size:12px;" value="" id="pq_144" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:14px; font-weight:bolder">Pasay</td>
                    <td><input type="text" style="border: white; text-align:center;" value="" id="pc_11" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;" value="" id="pc_22" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;" value="" id="pc_33" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;" value="" id="pc_44" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;" value="" id="pc_55" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;" value="" id="pc_66" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;" value="" id="pc_77" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;" value="" id="pc_88" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;" value="" id="pc_99" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;" value="" id="pc_101" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;" value="" id="pc_111" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;" value="" id="pc_122" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;  font-size:9px;" value="" id="pc_133" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;  font-size:9px;" value="" id="pc_144" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:14px; font-weight:bolder">Total</td>
                    <td><input type="text" style="border: white; text-align:center; font-size:12px;" value="" id="tal_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center; font-size:12px;" value="" id="tal_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center; font-size:12px;" value="" id="tal_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center; font-size:12px;" value="" id="tal_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center; font-size:12px;" value="" id="tal_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center; font-size:12px;" value="" id="tal_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center; font-size:12px;" value="" id="tal_7" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center; font-size:12px;" value="" id="tal_8" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center; font-size:12px;" value="" id="tal_9" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center; font-size:12px;" value="" id="tal_10" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center; font-size:12px;" value="" id="tal_11" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center; font-size:12px;" value="" id="tal_12" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center; font-size:12px;" value="" id="tal_13" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center; font-size:12px;" value="" id="tal_14" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>


                <script>
                    // Function to save data to localStorage
                    function saveData(inputId, value) {
                        localStorage.setItem(inputId, value); // Save the input value in localStorage
                    }

                    // On page load, restore the values from localStorage if they exist
                    window.onload = function() {
                        const inputIds = ['DCSR_ROUND', 'lp_11', 'lp_22', 'lp_33', 'lp_44', 'lp_55', 'lp_66', 'lp_77', 'lp_88', 'lp_99', 'lp_101', 'lp_111', 'lp_122', 'lp_133', 'lp_144', 'mc_11', 'mc_22',
                            'mc_33', 'mc_44', 'mc_55', 'mc_66', 'mc_77', 'mc_88', 'mc_99', 'mc_101', 'mc_111', 'mc_122', 'mc_133', 'mc_144', 'pq_11', 'pq_22', 'pq_33', 'pq_44', 'pq_55',
                            'pq_66', 'pq_77', 'pq_88', 'pq_99', 'pq_101', 'pq_111', 'pq_122', 'pq_133', 'pq_144', 'pc_11', 'pc_22', 'pc_33', 'pc_44', 'pc_55', 'pc_66', 'pc_77', 'pc_88', 'pc_99', 'pc_101',
                            'pc_111', 'pc_122', 'pc_133', 'pc_144', 'rounds', 'tft_1', 'tft_2', 'tft_3', 'slt_1', 'slt_2', 'slt_3', 'tlt_1', 'tlt_2', 'tlt_3', 'dc_1', 'dc_2',
                            'dc_3', 's_1', 's_2', 's_3', 'rd_1', 'rd_2', 'rd_3', 'cd_1', 'cd_2', 'cd_3', 'nr_1', 'nr_2', 'nr_3', 'fr_1', 'fr_2', 'fr_3', 'sl_1', 'sl_2',
                            'sl_3', 'or_1', 'or_2', 'or_3', 're_1', 're_2', 're_3', 'tal_1', 'tal_2', 'tal_3', 'tal_4', 'tal_5', 'tal_6', 'tal_7', 'tal_8', 'tal_9', 'tal_10', 'tal_11', 'tal_12', 'tal_13',
                            'tal_14'
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
        <!-- <div class="chart-container">
            <canvas id="laspinasChart"></canvas>
        </div> -->
    </div>


    <!--------------------------------------------------------------------------------------------------------------------------------------->
    <!--------------------------------------------------------------------------------------------------------------------------------------->
    <!----------------------------------------------------------Graph Funtionality----------------------------------------------------------->
    <!--------------------------------------------------------------------------------------------------------------------------------------->
    <!--------------------------------------------------------------------------------------------------------------------------------------->
    <!-- <script>
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
                            text: `Performance Data for ${cityId}`, // Dynamic title based on the city
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
        createChart('laspinas', 'laspinasChart');
    </script> -->
    <!--------------------------------------------------------------------------------------------------------------------------------------->
    <!--------------------------------------------------------------------------------------------------------------------------------------->
    <!----------------------------------------------------------Graph Funtionality----------------------------------------------------------->
    <!--------------------------------------------------------------------------------------------------------------------------------------->
    <!--------------------------------------------------------------------------------------------------------------------------------------->


</body>

</html>