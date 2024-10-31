<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>City Monthly Target vs Actual Data</title>
    <link rel="shortcut icon" type="image/png" href="../images for template/psa logo.png">
    <!-- <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-dantalabels"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> -->
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .city-section {
            word-wrap:break-word;
            text-align:justify;
            margin: 20px auto;
            width: 100%;
            max-width:fit-content;
        }
        
        .city-section2 {
            word-wrap:break-word;
            overflow: scroll;
            max-width:100vw;
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
            padding-top: 105px;
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
        National Capintal Region-Provincial Statistical Office V</div>
    <img src="../images for template/logph.png" alt="Logo 2">
</div>
<!---------------------------------------------------------------------------->
<!-------------------------------------- BY CITY BUTTON  --------------------->
<!---------------------------------------------------------------------------->





<div class="button-container">
    <div>
        <a style="background-color: cadetblue; color:white; font-weight: bolder; padding:5px" href="#" class="btn btn-primary active">Status</a>
    </div>

    <div>
        <a style="background-color: #0A414F; color:white; font-weight: bolder; padding:5px" href="#" class="btn btn-primary active">Barangay Questionnaire</a>
    </div>

    <br>

    <div>
        <a style="background-color: #0A414F; color:white; font-weight:bolder; padding:5px" href="#" class="btn btn-primary">Household Questionnaire</a>
    </div>

    <br>

    <div>
        <a style="background-color: #0a414f; color:white; font-weight:bolder; padding:5px" href="#" class="btn btn-primary">Individual Questionnaire</a>
    </div>
</div>
<div class="city-header" style="font-weight: bolder; background-color:khaki;">NICTHS</div>
<!-------------------------------------------------------------------------------->
<!-------------------------------------- BY CITY BUTTON END----------------------->
<!-------------------------------------------------------------------------------->

<body>
    <!-- <h2 style="text-align:center;">LAS PIÑAS CITY</h2> -->
    <!-- City Section for Las Piñas -->

    <style>
        .secondtable {
            width: 100%;
            border-collapse: collapse;
            font-size: 12px;
            /* Smaller font size for compactness */
        }

        .secondtable th,
        .secondtable td {
            padding: 4px 8px;
            /* Reduced padding */
            text-align: center;
            border: 1px solid #ccc;
            /* Light border */
        }

        .secondtable thead {
            background-color: teal;
            color: white;
        }

        .secondtable thead th {
            font-size: 14px;
            /* Slightly larger header font size */
        }

        .secondtable tbody tr:hover {
            background-color: #f1f1f1;
            /* Row highlight */
        }

        @media (max-width: 600px) {
            .secondtable {
                display: block;
                /* Stack table vertically */
            }

            .secondtable thead,
            .secondtable tbody,
            .secondtable th,
            .secondtable td {
                display: block;
                /* Block display for stacking */
            }

            .secondtable td {
                text-align: left;
                /* Align text for better readability */
            }
        }
    </style>
     <div>
            <a style="background-color:goldenrod; color:white; border-radius:7px; font-weight: bolder; padding:5px" href="../table with dashboard/progress.php" class="btn btn-primary active">SELECT PROJECT</a>
        </div>
    <div class="city-section2" id="laspinas-section">
        <table class="secondtable">
            <thead>
                <tr>
                    <th style="color: white; background-color:teal; text-align:justify; font-size:20px;" colspan="30">DATA COLLECTION STATUS REPORT</th>

                </tr>
                <tr>
                    <th></th>
                    <th style="color: white; font-size:22px; width:12%; text-align:center;" colspan="3">ROUND:</th>
                    <th style="color: white; font-size:22px; width:12%; text-align:justify;" colspan="26"><input type="text" style="font-size:22px; background-color:#0A414F; color:white; text-align:justify; font-weight:bold;" value="YEAR/MONTH" id="DCSR_ROUND" oninput="saveData(this.id, this.value)"></th>

                </tr>

                <tr>
                    <th style="color: black; font-size:20px; text-align:justify; font-weight:bolder; background-color:lightsteelblue"></th>
                    <th style="color: black; font-size:20px; text-align:justify; font-weight:bolder; background-color:lightsteelblue"></th>
                    <th style="color: black; font-size:20px; text-align:justify; font-weight:bolder; background-color:lightsteelblue"></th>
                    <th style="color: black; font-size:20px; text-align:justify; font-weight:bolder; background-color:lightsteelblue"></th>
                    <th style="color: black; font-size:20px; text-align:justify; font-weight:bolder; background-color:lightsteelblue" colspan="23">Actual Workload by Interview Status</th>

                </tr>
                <tr>
                    <th style="color: black; font-size:15px; text-align:center; background-color:lightsteelblue">City</th>
                    <th style="color: black; font-size:15px; text-align:center; background-color:lightsteelblue">Original Sample</th>
                    <th style="color: black; font-size:15px; text-align:center; background-color:lightsteelblue">Add'l HHs</th>
                    <th style="color: black; font-size:15px; text-align:center; background-color:lightsteelblue">Total</th>
                    <th style="color: black; font-size:15px; text-align:center; background-color:lightsteelblue">1</th>
                    <th style="color: black; font-size:15px; text-align:center; background-color:lightsteelblue">11</th>
                    <th style="color: black; font-size:15px; text-align:center; background-color:lightsteelblue">2</th>
                    <th style="color: black; font-size:15px; text-align:center; background-color:lightsteelblue">3</th>
                    <th style="color: black; font-size:15px; text-align:center; background-color:lightsteelblue">41</th>
                    <th style="color: black; font-size:15px; text-align:center; background-color:lightsteelblue">42</th>
                    <th style="color: black; font-size:15px; text-align:center; background-color:lightsteelblue">43</th>
                    <th style="color: black; font-size:15px; text-align:center; background-color:lightsteelblue">51</th>
                    <th style="color: black; font-size:15px; text-align:center; background-color:lightsteelblue">52</th>
                    <th style="color: black; font-size:15px; text-align:center; background-color:lightsteelblue">61</th>
                    <th style="color: black; font-size:15px; text-align:center; background-color:lightsteelblue">62</th>
                    <th style="color: black; font-size:15px; text-align:center; background-color:lightsteelblue">7</th>
                    <th style="color: black; font-size:15px; text-align:center; background-color:lightsteelblue">8</th>
                    <th style="color: black; font-size:15px; text-align:center; background-color:lightsteelblue">91</th>
                    <th style="color: black; font-size:15px; text-align:center; background-color:lightsteelblue">92</th>
                    <th style="color: black; font-size:15px; text-align:center; background-color:lightsteelblue">93</th>
                    <th style="color: black; font-size:15px; text-align:center; background-color:lightsteelblue">94</th>
                    <th style="color: black; font-size:15px; text-align:center; background-color:lightsteelblue">95</th>
                    <th style="color: black; font-size:15px; text-align:center; background-color:lightsteelblue">96</th>
                    <th style="color: black; font-size:15px; text-align:center; background-color:lightsteelblue">97</th>
                    <th style="color: black; font-size:15px; text-align:center; background-color:lightsteelblue">98</th>
                    <th style="color: black; font-size:15px; text-align:center; background-color:lightsteelblue"></th>
                    <th style="color: black; font-size:15px; text-align:center; background-color:lightsteelblue">Response Rate</th>
                </tr>
            </thead>
            <tbody>
                <!-- Repeat for each category -->
                <tr>
                    <td style="font-weight: bolder; font-size:9px; width:15%; font-size:14px;">Las Piñas</td>
                    <td style="width:7%;"><input type="text" style="border: white;  text-align:center; font-size:12px;" value="" id="nlp_11" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="width:7%;"><input type="text" style="border: white;  text-align:center;  font-size:12px;" value="" id="nnlp_22" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="width:7%;"><input type="text" style="border: white;  text-align:center;  font-size:12px;" value="" id="nnlp_33" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="width:7%;"><input type="text" style="border: white;  text-align:center;  font-size:12px;" value="" id="nlp_44" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="width:7%;"><input type="text" style="border: white;  text-align:center;  font-size:12px;" value="" id="nlp_55" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="width:7%;"><input type="text" style="border: white;  text-align:center;  font-size:12px;" value="" id="nlp_66" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="width:7%;"><input type="text" style="border: white;  text-align:center;  font-size:12px;" value="" id="nlp_77" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="width:7%;"><input type="text" style="border: white;  text-align:center;  font-size:12px;" value="" id="nlp_88" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="width:7%;"><input type="text" style="border: white;  text-align:center;  font-size:12px;" value="" id="nlp_99" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="width:7%;"><input type="text" style="border: white;  text-align:center;  font-size:12px;" value="" id="nlp_101" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="width:7%;"><input type="text" style="border: white;  text-align:center;  font-size:12px;" value="" id="nlp_111" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="width:7%;"><input type="text" style="border: white;  text-align:center;  font-size:12px;" value="" id="nlp_122" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="width:7%;"><input type="number" style="border: white;  text-align:center; font-size:12px;" value="" id="nlp_133" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="width:7%;"><input type="number" style="border: white;  text-align:center; font-size:12px;" value="" id="nlp_144" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="width:7%;"><input type="text" style="border: white;  text-align:center;  font-size:12px;" value="" id="nlp_155" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="width:7%;"><input type="text" style="border: white;  text-align:center;  font-size:12px;" value="" id="nlp_166" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="width:7%;"><input type="text" style="border: white;  text-align:center;  font-size:12px;" value="" id="nlp_177" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="width:7%;"><input type="text" style="border: white;  text-align:center;  font-size:12px;" value="" id="nlp_188" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="width:7%;"><input type="text" style="border: white;  text-align:center;  font-size:12px;" value="" id="nlp_199" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="width:7%;"><input type="text" style="border: white;  text-align:center;  font-size:12px;" value="" id="nlp_200" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="width:7%;"><input type="text" style="border: white;  text-align:center;  font-size:12px;" value="" id="nlp_211" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="width:7%;"><input type="text" style="border: white;  text-align:center;  font-size:12px;" value="" id="nlp_222" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="width:7%;"><input type="text" style="border: white;  text-align:center;  font-size:12px;" value="" id="nlp_233" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="width:7%;"><input type="text" style="border: white;  text-align:center;  font-size:12px;" value="" id="nlp_244" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="width:7%;"><input type="number" style="border: white;  text-align:center; font-size:12px;" value="" id="nlp_255" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="width:7%;"><input type="number" style="border: white;  text-align:center; font-size:12px;" value="" id="nlp_266" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>

                </tr>

                <tr>
                    <td style="font-size:12px; font-weight:bolder; font-size:14px;">Muntinlupa</td>
                    <td><input type="text" style="border: white; text-align:center; font-size:12px;" value="" id="nmc_11" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="nmc_22" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="nmc_33" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="nmc_44" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="nmc_55" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="nmc_66" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="nmc_77" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="nmc_88" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="nmc_99" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="nmc_101" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="nmc_111" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="nmc_122" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;  font-size:12px;" value="" id="nmc_133" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;  font-size:12px;" value="" id="nmc_144" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="nmc_155" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="nmc_166" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="nmc_177" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="nmc_188" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="nmc_199" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="nmc_200" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="nmc_211" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="nmc_222" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="nmc_233" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="nmc_244" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;  font-size:12px;" value="" id="nmc_255" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;  font-size:12px;" value="" id="nmc_266" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>

                </tr>
                <tr>
                    <td style="font-weight:bolder; font-size:14px;">Parañaque</td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="npq_11" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="npq_22" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="npq_33" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="npq_44" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="npq_55" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="npq_66" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="npq_77" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="npq_88" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="npq_99" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="npq_101" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="npq_111" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="npq_122" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;  font-size:12px;" value="" id="npq_133" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;  font-size:12px;" value="" id="npq_144" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="npq_155" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="npq_166" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="npq_177" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="npq_188" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="npq_199" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="npq_200" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="npq_211" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="npq_222" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="npq_233" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="npq_244" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;  font-size:12px;" value="" id="npq_255" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;  font-size:12px;" value="" id="npq_266" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>

                </tr>
                <tr>
                    <td style="font-size:14px; font-weight:bolder">Pasay</td>
                    <td><input type="text" style="border: white; text-align:center;" value="" id="npc_11" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;" value="" id="npc_22" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;" value="" id="npc_33" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;" value="" id="npc_44" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;" value="" id="npc_55" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;" value="" id="npc_66" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;" value="" id="npc_77" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;" value="" id="npc_88" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;" value="" id="npc_99" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;" value="" id="npc_101" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;" value="" id="npc_111" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;" value="" id="npc_122" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;  font-size:9px;" value="" id="npc_133" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;  font-size:9px;" value="" id="npc_144" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;" value="" id="npc_155" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;" value="" id="npc_166" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;" value="" id="npc_177" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;" value="" id="npc_188" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;" value="" id="npc_199" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;" value="" id="npc_200" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;" value="" id="npc_211" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;" value="" id="npc_222" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;" value="" id="npc_233" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;" value="" id="npc_244" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;  font-size:9px;" value="" id="npc_255" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;  font-size:9px;" value="" id="npc_266" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>

                </tr>
                <tr>
                    <td style="font-size:14px; font-weight:bolder">Total</td>
                    <td><input type="text" style="border: white; text-align:center; font-size:12px;" value="" id="ntal_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center; font-size:12px;" value="" id="ntal_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center; font-size:12px;" value="" id="ntal_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center; font-size:12px;" value="" id="ntal_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center; font-size:12px;" value="" id="ntal_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center; font-size:12px;" value="" id="ntal_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center; font-size:12px;" value="" id="ntal_7" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center; font-size:12px;" value="" id="ntal_8" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center; font-size:12px;" value="" id="ntal_9" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center; font-size:12px;" value="" id="ntal_10" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center; font-size:12px;" value="" id="ntal_11" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center; font-size:12px;" value="" id="ntal_12" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center; font-size:12px;" value="" id="ntal_13" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center; font-size:12px;" value="" id="ntal_14" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center; font-size:12px;" value="" id="ntal_15" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center; font-size:12px;" value="" id="ntal_16" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center; font-size:12px;" value="" id="ntal_17" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center; font-size:12px;" value="" id="ntal_18" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center; font-size:12px;" value="" id="ntal_19" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center; font-size:12px;" value="" id="ntal_20" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center; font-size:12px;" value="" id="ntal_21" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center; font-size:12px;" value="" id="ntal_22" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center; font-size:12px;" value="" id="ntal_23" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center; font-size:12px;" value="" id="ntal_24" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center; font-size:12px;" value="" id="ntal_25" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center; font-size:12px;" value="" id="ntal_26" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>

                </tr>

                <script>
                    // Function to save data to localStorage
                    function saveData(inputId, value) {
                        localStorage.setItem(inputId, value); // Save the input value in localStorage
                    }

                    // On page load, restore the values from localStorage if they exist
                    window.onload = function() {
                        const inputIds = ['DCSR_ROUND', 'nlp_11', 'nlp_22', 'nlp_33', 'nlp_44', 'nlp_55', 'nlp_66', 'nlp_77', 'nlp_88', 'nlp_99', 'nlp_101', 'nlp_111', 'nlp_122', 'nlp_133', 'nlp_144', 'nlp_155', 'nlp_166', 'nlp_177', 'nlp_188', 'nlp_199', 'nlp_200', 'nlp_211', 'nlp_222', 'nlp_233',
                            'nlp_244', 'nlp_255', 'nlp_266', 'nmc_11', 'nmc_22', 'nmc_33', 'nmc_44', 'nmc_55', 'nmc_66', 'nmc_77', 'nmc_88', 'nmc_99', 'nmc_101', 'nmc_111', 'nmc_122', 'nmc_133', 'nmc_144', 'npq_11', 'npq_22', 'npq_33', 'npq_44', 'npq_55',
                            'npq_66', 'npq_77', 'npq_88', 'npq_99', 'npq_101', 'npq_111', 'npq_122', 'npq_133', 'npq_144', 'npc_11', 'npc_22', 'npc_33', 'npc_44', 'npc_55', 'npc_66', 'npc_77', 'npc_88', 'npc_99', 'npc_101',
                            'npc_111', 'npc_122', 'npc_133', 'npc_144', 'rounds', 'tft_1', 'tft_2', 'tft_3', 'slt_1', 'slt_2', 'slt_3', 'tlt_1', 'tlt_2', 'tlt_3', 'dc_1', 'dc_2',
                            'dc_3', 's_1', 's_2', 's_3', 'rd_1', 'rd_2', 'rd_3', 'cd_1', 'cd_2', 'cd_3', 'nr_1', 'nr_2', 'nr_3', 'fr_1', 'fr_2', 'fr_3', 'sl_1', 'sl_2',
                            'sl_3', 'or_1', 'or_2', 'or_3', 're_1', 're_2', 're_3', 'ntal_1', 'ntal_2', 'ntal_3', 'ntal_4', 'ntal_5', 'ntal_6', 'ntal_7', 'ntal_8', 'ntal_9', 'ntal_10', 'ntal_11', 'ntal_12', 'ntal_13',
                            'ntal_14'
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
        <style>
            .table1 {
                width: 100%;
                border-collapse: collapse;
                font-size: 12px;
                /* Smaller font size for compactness */
            }

            .table1 th,
            .table1 td {
                padding: 4px 8px;
                /* Reduced padding */
                text-align: center;
                border: 1px solid #ccc;
                /* Light border */
            }

            .table1 thead {
                background-color: teal;
                color: white;
            }

            .table1 thead th {
                font-size: 14px;
                /* Slightly larger header font size */
            }

            .table1 tbody tr:hover {
                background-color: #f1f1f1;
                /* Row highlight */
            }

            @media (max-width: 600px) {
                .table1 {
                    display: block;
                    /* Stack table vertically */
                }

                .table1 thead,
                .table1 tbody,
                .table1 th,
                .table1 td {
                    display: block;
                    /* Block display for stacking */
                }

                .table1 td {
                    text-align: left;
                    /* Align text for better readability */
                }
            }
        </style>
    </div>
    <div class="city-section" id="laspinas-section">
            <table class="table1">
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
                <tbody>
                    <!-- Repeat for each category -->
                    <tr>
                        <td style="font-weight: bolder; font-size:12px; width:12%;">Task Force Training</td>
                        <td style="text-align: center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value="0" id="tft_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                        <td style="text-align: center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value="0" id="tft_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                        <td style="text-align: center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value="text" id="tft_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>

                    </tr>

                    <tr>
                        <td style="font-size:12px; font-weight:bolder;">Second Level Training</td>
                        <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value="0" id="slt_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                        <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value="0" id="slt_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                        <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value="text" id="slt_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>

                    </tr>
                    <tr>
                        <td style="font-size:12px; font-weight:bolder;">Third Level Training</td>
                        <td style="text-align: center;"><input type="text" style="border: white; text-align:center; font-size:12px" value="0" id="tlt_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                        <td style="text-align: center;"><input type="text" style="border: white; text-align:center;font-size:12px;" value="0" id="tlt_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                        <td style="text-align: center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value="text" id="tlt_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>

                    </tr>
                    <tr>
                        <td style="font-size:12px; font-weight:bolder;">Data Collection</td>
                        <td style="text-align: center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value="0" id="dc_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                        <td style="text-align: center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value="0" id="dc_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                        <td style="text-align: center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value="text" id="dc_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>

                    </tr>
                    <tr>
                        <td style="font-size:12px; font-weight:bolder;">Supervision</td>
                        <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value="0" id="s_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                        <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value="0" id="s_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                        <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value="text" id="s_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>

                    </tr>
                    <th style="color: black; font-size:15px; font-weight:bolder; text-align:left; background-color:lightskyblue;" colspan="4">DELIVERABLES SUBMISSION</th>
                    <tr>
                        <td style="font-size:12px; font-weight:bolder;">Raw Datafile</td>
                        <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value="0" id="rd_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                        <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value="0" id="rd_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                        <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value="text" id="rd_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    </tr>
                    <tr>
                        <td style="font-size:12px; font-weight:bolder;">Clean Datafile</td>
                        <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value="0" id="cd_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                        <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value="0" id="cd_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                        <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value="text" id="cd_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    </tr>
                    <tr>
                        <td style="font-size:12px; font-weight:bolder;">Narative Report</td>
                        <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value="0" id="nr_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                        <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value="0" id="nr_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                        <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value="text" id="nr_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    </tr>
                    <tr>
                        <td style="font-size:12px; font-weight:bolder;">Financial Report</td>
                        <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value="0" id="fr_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                        <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value="0" id="fr_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                        <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value="text" id="fr_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    </tr>
                    <tr>
                        <td style="font-size:12px; font-weight:bolder;">SSU List</td>
                        <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value="0" id="sl_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                        <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value="0" id="sl_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                        <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value="text" id="sl_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    </tr>
                    <tr>
                        <td style="font-size:12px; font-weight:bolder;">Observation Report</td>
                        <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value="0" id="or_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                        <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value="0" id="or_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                        <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value="text" id="or_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    </tr>
                    <tr>
                        <td style="font-size:12px; font-weight:bolder;">re-interview</td>
                        <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value="0" id="re_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                        <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value="0" id="re_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                        <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value="text" id="re_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    </tr>


                    <script>
                        // Function to save data to localStorage
                        function saveData(inputId, value) {
                            localStorage.setItem(inputId, value); // Save the input value in localStorage
                        }

                        // On page load, restore the values from localStorage if they exist
                        window.onload = function() {
                            const inputIds = [ 'DCSR_ROUND', 'nlp_11', 'nlp_22', 'nlp_33', 'nlp_44', 'nlp_55', 'nlp_66', 'nlp_77', 'nlp_88', 'nlp_99', 'nlp_101', 'nlp_111', 'nlp_122', 'nlp_133', 'nlp_144', 'nlp_155', 'nlp_166', 'nlp_177', 'nlp_188', 'nlp_199', 'nlp_200', 'nlp_211', 'nlp_222', 'nlp_233',
                            'nlp_244', 'nlp_255', 'nlp_266', 'nmc_11', 'nmc_22', 'nmc_33', 'nmc_44', 'nmc_55', 'nmc_66', 'nmc_77', 'nmc_88', 'nmc_99', 'nmc_101', 'nmc_111', 'nmc_122', 'nmc_133', 'nmc_144', 'npq_11', 'npq_22', 'npq_33', 'npq_44', 'npq_55',
                            'npq_66', 'npq_77', 'npq_88', 'npq_99', 'npq_101', 'npq_111', 'npq_122', 'npq_133', 'npq_144', 'npc_11', 'npc_22', 'npc_33', 'npc_44', 'npc_55', 'npc_66', 'npc_77', 'npc_88', 'npc_99', 'npc_101',
                            'npc_111', 'npc_122', 'npc_133', 'npc_144', 'rounds', 'tft_1', 'tft_2', 'tft_3', 'slt_1', 'slt_2', 'slt_3', 'tlt_1', 'tlt_2', 'tlt_3', 'dc_1', 'dc_2',
                            'dc_3', 's_1', 's_2', 's_3', 'rd_1', 'rd_2', 'rd_3', 'cd_1', 'cd_2', 'cd_3', 'nr_1', 'nr_2', 'nr_3', 'fr_1', 'fr_2', 'fr_3', 'sl_1', 'sl_2',
                            'sl_3', 'or_1', 'or_2', 'or_3', 're_1', 're_2', 're_3', 'ntal_1', 'ntal_2', 'ntal_3', 'ntal_4', 'ntal_5', 'ntal_6', 'ntal_7', 'ntal_8', 'ntal_9', 'ntal_10', 'ntal_11', 'ntal_12', 'ntal_13',
                            'ntal_14', 'rounds','tft_1', 'tft_2', 'tft_3', 'slt_1', 'slt_2', 'slt_3', 'tlt_1', 'tlt_2', 'tlt_3', 'dc_1', 'dc_2',
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
        </div>







</body>

</html>