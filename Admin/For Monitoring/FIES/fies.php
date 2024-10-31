<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>City Monthly Target vs Actual Data</title>
    <link rel="shortcut icon" type="image/png" href="../images for template/psa logo.png">
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
            max-width: 100%;
            text-align: center;
            margin-top: 35px;
            margin-bottom: 8px;
            font-size: 1.5em;
        }

        .button-container {
            display: flex;
            justify-content: center;
            gap: 3px;
        }

        .button-container a {
            border-radius: 8px;
        }

        /**************************for logo css part***********************/
        .logo-container {
            width: 600px;
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
        National Capital Region-Provincial Statistical Office V</div>
    <img src="../images for template/logph.png" alt="Logo 2">
</div>
<br>
<br>
<br>

<body>
    <!-- City Section for Las Piñas -->
    <div>
        <a style="background-color:#0A414F; color:white; border-radius:7px; font-weight: bolder; padding:5px;" href="../table with dashboard/progress.php" class="btn btn-primary active;">SELECT PROJECT</a>
    </div>
    <div class="city-section" id="fies-section">
        <!-- <div class="city-header" style="font-weight: bolder; background-color:cornflowerblue;">FIES</div> -->
        <style>
            .responsive-table th,
            .responsive-table td {
                word-wrap: break-word;
                /* Allow long words to be able to break and wrap onto the next line */
                overflow-wrap: break-word;
                max-width: 100%;
                /* Set a maximum width for each cell */
            }
        </style>
        <table id="report-table" class="responsive-table" syle="width:100%;">
            <thead>
                <tr>
                    <th style="color: black; background-color:lightcyan; font-size:30px;" colspan="42">FIES</th>
                </tr>
                <tr>
                    <th style="color: white;"></th>
                    <th style="color: white;"></th>
                    <th style="color: white; font-size:8px;" scope="col" colspan="2">Total</th>
                    <th style="color: black; background-color:lightgray; font-size:12px;" scope="col" colspan="12">Face To Face (Interview Status)</th>
                    <th style="color: black; background-color:lightgray; font-size:12px;" scope="col" colspan="9">Code 9</th>
                    <th style="color: black; background-color:chocolate; font-size: 12px;" colspan="4">Telephone Interview (Interview Status)</th>
                    <th style="color: white;" colspan="11"></th>
                    <!-- <th style="color: white;"></th>
                    <th style="color: white;"></th>
                    <th style="color: white;"></th>
                    <th style="color: white;"></th>
                    <th style="color: white;"></th>
                    <th style="color: white;"></th>
                    <th style="color: white;"></th>
                    <th style="color: white;"></th>
                    <th style="color: white;"></th> -->
                    <!-- <th style="color: white;" colspan="2">July</th>
                    <th style="color: white;" colspan="2">August</th>
                    <th style="color: white;" colspan="2">September</th>
                    <th style="color: white;" colspan="2">October</th>
                    <th style="color: white;" colspan="2">November</th>
                    <th style="color: white;" colspan="2">December</th>  -->
                    <!-- Add more months as needed--->
                </tr>
                <tr>
                    <th style="color:white; font-size:8px;" scope="col">Region/Province</th>
                    <th style="color: white; font-size:8px;" scope="col">Workload<br>from CO</th>
                    <th style="color: white; font-size:8px;" scope="col">Number</th>
                    <th style="color: white; font-size:8px;" scope="col">%</th>
                    <th style="color: black; background-color:cornflowerblue; font-size:8px;" scope="col">Completed</th>
                    <th style="color: black; background-color:cornflowerblue; font-size:8px;" scope="col">Refusal</th>
                    <th style="color: black; background-color:cornflowerblue; font-size:8px;" scope="col">Entire HH Absent<br>for Extended<br>Period of<br>Time</th>
                    <th style="color: black; background-color:yellowgreen; font-size:8px;" scope="col">Vacant<br>Housing Unit<br>(VHU) NOT<br>REPLACED</th>
                    <th style="color: white; font-size:8px;" scope="col">Vacant<br>Housing Unit (VHU) WITH REPLACEMENT<br>New Occupation</th>
                    <th style="color: white; font-size:8px;" scope="col">VHU With New Occupant</th>
                    <th style="color: black; background-color: yellowgreen; font-size:8px;" scope="col">Housing Unit Destroyed/<br>Demolished Not<br>Replaced</th>
                    <th style="color: white; font-size:8px;" scope="col">Housing Unit Destroyed/<br>Demolished With Replacement</th>
                    <th style="color: black; background-color: yellowgreen; font-size:8px;" scope="col">Address Not a Housing Unit<br>NOT REPLACED<br>
                        <p style="color: red; font-size:smaller;">(includes converted to commercial<br>building, warehouse, etc)</p>
                    </th>
                    <th style="color: white; font-size:8px;" scope="col">Address Not a Housing Unit<br>With Replacement<br>
                        <p style="color:red; font-size:smaller">(includes converted to <br>commercial building, warehouse,etc)</p>
                    </th>
                    <th style="color: balck; background-color: cornflowerblue;font-size:8px;" scope="col">Housing Unit Not Found</th>
                    <th style="color: black; background-color: cornflowerblue; font-size:8px;" scope="col">Critical or Flooded Area<br>
                        <p style="font-size:smaller; color:red;">(includes household with covid positive or covid suspect)</p>
                    </th>
                    <th style="color: black; background-color: yellowgreen; font-size:8px;" scope="col">Permanently Moved Out <br>(PMO),Not<br>usual resident (NUR), Single person<br>occupying housing<br>unit <br>(SPOHU)passed away,<br>Others Not Replaced</th>
                    <th style="color: white; font-size:8px;" scope="col">PMO WITH<br>REPLACEMENT</th>
                    <th style="color: white; font-size:8px;" scope="col">PMO With new Occupant</th>
                    <th style="color: white; font-size:8px;" scope="col">NUR with Replacement </th>
                    <th style="color: white; font-size:8px;" scope="col">NUR With new Occupant</th>
                    <th style="color: white; font-size:8px;" scope="col">SPOHU passed away with <br>replacement</th>
                    <th style="color: white; font-size:8px;" scope="col">SPOHU passed away <br>with new OCCUPANT</th>
                    <th style="color: black; font-size:8px; background-color:yellowgreen;" scope="col">Merged with another<br>household</th>
                    <th style="color: white; font-size:8px;" scope="col">Other</th>
                    <th style="color: white; background-color:cornflowerblue; font-size:8px;" scope="col">Completed</th>
                    <th style="color: white; background-color:cornflowerblue; font-size:8px;" scope="col">Refusal/<br>Temporary Away</th>
                    <th style="color: black; background-color: yellowgreen; font-size:8px;" scope="col">Code 9<br>Not Replaced</th>
                    <th style="color: white; font-size:8px;" scope="col">Code 9 <br>with replacement</th>
                    <th style="color: white; font-size:8px;" scope="col">Status of Enumeration<br>1(completed)<br>0(on-going)</th>
                    <th style="color: black; background-color: yellowgreen; font-size:8px;" scope="col">Number Of Non-Eligible</th>
                    <th style="color: black; background-color:cornflowerblue; font-size:8px;" scope="col">Number Of Eligible</th>
                    <th style="color: black; background-color:lightgray; font-size:8px;" scope="col">Alert Level <br> 4-Major (>50% are non-eligible)<br>3-30% to 49% are non eligible<br>2-10% to 29% are non-eligible<br>1- Minimal('<'10% are non-eligible)</th>
                    <th style="color: black; background-color:lightgray; font-size:8px;" scope="col">Number of Additinal Replacement to be<br>Provided by <br>Raymart</th>
                    <th style="color: black; background-color:yellow; font-size:8px;" scope="col">Number of<br> Uploaded <br>data</th>
                    <th style="color: black; background-color:yellow; font-size:8px;" scope="col">Percentage of<br>Uploaded<br>data</th>
                    <th style="color: black; background-color:cornflowerblue; font-size:8px;" scope="col">Number Of Eligible</th>
                    <th style="color: black; background-color:cornflowerblue; font-size:8px;" scope="col">Response<br>Rate</th>
                    <th style="color: black; background-color:cornflowerblue; font-size:8px;" scope="col">Effective <br>Sample Size <br>of the <br>Region</th>
                    <th style="color: black; background-color:cornflowerblue; font-size:8px;" scope="col">Remarks</th>
                    <!-- Add sub-headers for more months -->
                </tr>
                <tr>
                    <th style="color:white; font-size:8px;" scope="col"></th>
                    <th style="color: white; font-size:8px;" scope="col"></th>
                    <th style="color: white; font-size:8px;" scope="col"></th>
                    <th style="color: white; font-size:8px;" scope="col"></th>
                    <th style="color: black; background-color:cornflowerblue; font-size:11px;" scope="col">(1)</th>
                    <th style="color: black; background-color:cornflowerblue; font-size:11px;" scope="col">(2)</th>
                    <th style="color: black; background-color:cornflowerblue; font-size:11px;" scope="col">(3)</th>
                    <th style="color: black; background-color:yellowgreen; font-size:11px;" scope="col">(41)</th>
                    <th style="color: white; font-size:11px;" scope="col">(42)</th>
                    <th style="color: white; font-size:11px;" scope="col">(43)</th>
                    <th style="color: black; background-color: yellowgreen; font-size:11px;" scope="col">(51)</th>
                    <th style="color: white; font-size:11px;" scope="col">(52)</th>
                    <th style="color: black; background-color: yellowgreen; font-size:8px;" scope="col">
                        <p style="color: white; font-size:11px;">(61)</p>
                    </th>
                    <th style="color: white; font-size:8px;" scope="col">
                        <p style="color:white; font-size:11px;">(62)</p>
                    </th>
                    <th style="color: balck; background-color: cornflowerblue;font-size:11px;" scope="col">(7)</th>
                    <th style="color: black; background-color: cornflowerblue; font-size:11px;" scope="col">
                        <p style="font-size:11px; color:black;">(8)</p>
                    </th>
                    <th style="color: black; background-color: yellowgreen; font-size:11px;" scope="col">(91)</th>
                    <th style="color: white; font-size:11px;" scope="col">(92)</th>
                    <th style="color: white; font-size:11px;" scope="col">(93)</th>
                    <th style="color: white; font-size:11px;" scope="col">(94)</th>
                    <th style="color: white; font-size:11px;" scope="col">(95)</th>
                    <th style="color: white; font-size:11px;" scope="col">(96)</th>
                    <th style="color: white; font-size:11px;" scope="col">(97)</th>
                    <th style="color: black; font-size:11px; background-color:yellowgreen;" scope="col">(98)</th>
                    <th style="color: white; font-size:11px;" scope="col">(99)</th>
                    <th style="color: white; background-color:cornflowerblue; font-size:11px;" scope="col">(10)</th>
                    <th style="color: white; background-color:cornflowerblue; font-size:11px;" scope="col">(11)</th>
                    <th style="color: black; background-color: yellowgreen; font-size:11px;" scope="col">(12)</th>
                    <th style="color: white; font-size:11px;" scope="col">(13)</th>
                    <th style="color: white; font-size:11px;" scope="col"></th>
                    <th style="color: black; background-color: yellowgreen; font-size:11px;" scope="col"></th>
                    <th style="color: black; background-color:cornflowerblue; font-size:11px;" scope="col">(14)</th>
                    <th style="color: black; background-color:lightgray; font-size:11px;" scope="col">(15)</th>
                    <th style="color: black; background-color:lightgray; font-size:11px;" scope="col">(16)</th>
                    <th style="color: black; background-color:yellow; font-size:11px;" scope="col">(17)</th>
                    <th style="color: black; background-color:yellow; font-size:11px;" scope="col">(15)</th>
                    <th style="color: black; background-color:cornflowerblue; font-size:8px;" scope="col"></th>
                    <th style="color: black; background-color:cornflowerblue; font-size:8px;" scope="col"></th>
                    <th style="color: black; background-color:cornflowerblue; font-size:8px;" scope="col"></th>
                    <th style="color: black; background-color:cornflowerblue; font-size:8px;" scope="col"></th>
                    <!-- Add sub-headers for more months -->
                </tr>
            </thead>
            <tbody>
                <!-- Repeat for each category -->
                <tr>
                    <td style="font-size:10px; font-weight:bolder; background-color:powderblue;">NCR PO V</td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="ncr_1" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="ncr_2" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="ncr_3" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="ncr_4" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="ncr_5" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="ncr_6" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="ncr_7" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="ncr_8" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="ncr_9" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="ncr_10" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="ncr_11" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="ncr_12" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="ncr_13" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="ncr_14" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="ncr_15" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="ncr_16" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="ncr_17" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="ncr_18" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="ncr_19" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="ncr_20" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="ncr_21" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="ncr_22" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="ncr_23" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="ncr_24" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="ncr_25" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="ncr_26" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="ncr_27" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="ncr_28" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="ncr_29" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="ncr_30" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="ncr_31" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="ncr_32" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="ncr_33" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="ncr_34" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="ncr_35" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="ncr_36" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="ncr_37" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="ncr_38" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="ncr_39" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                </tr>

                <tr>
                    <td style="font-size:10px; font-weight:bolder; background-color:powderblue;">CITY OF LAS PIÑAS</td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="lp_1" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="lp_2" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="lp_3" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="lp_4" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="lp_5" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="lp_6" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="lp_7" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="lp_8" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="lp_9" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="lp_10" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="lp_11" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="lp_12" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="lp_13" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="lp_14" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="lp_15" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="lp_16" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="lp_17" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="lp_18" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="lp_19" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="lp_20" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="lp_21" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="lp_22" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="lp_23" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="lp_24" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="lp_25" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="lp_26" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="lp_27" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="lp_28" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="lp_29" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="lp_30" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="lp_31" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="lp_32" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="lp_33" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="lp_34" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="lp_35" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="lp_36" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="lp_37" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="lp_38" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="lp_39" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                </tr>

                <tr>
                    <td style="font-size: 10px; font-size:xx-small; width:45px; font-weight:bolder; background-color:powderblue;">CITY OF MUNTINLLUPA</td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="mc_1" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="mc_2" oninput="saveData(this.id, this.value)" oninputonchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="mc_3" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="mc_4" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="mc_5" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="mc_6" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="mc_7" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="mc_8" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="mc_9" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="mc_10" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="mc_11" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="mc_12" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="mc_13" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="mc_14" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="mc_15" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="mc_16" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="mc_17" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="mc_18" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="mc_19" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="mc_20" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="mc_21" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="mc_22" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="mc_23" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="mc_24" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="mc_25" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="mc_26" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="mc_27" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="mc_28" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="mc_29" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="mc_30" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="mc_31" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="mc_32" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="mc_33" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="mc_34" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="mc_35" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="mc_36" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="mc_37" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="mc_38" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="mc_39" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                </tr>

                <tr>
                    <td style="font-size: 10px; font-size:xx-small; text-align:center; width:45px; font-weight:bolder; background-color:powderblue;">CITY OF PARAÑAQUE</td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="pq_1" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="pq_2" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="pq_3" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="pq_4" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="pq_5" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="pq_6" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="pq_7" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="pq_8" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="pq_9" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="pq_10" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="pq_11" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="pq_12" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="pq_13" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="pq_14" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="pq_15" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="pq_16" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="pq_17" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="pq_18" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="pq_19" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="pq_20" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="pq_21" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="pq_22" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="pq_23" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="pq_24" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="pq_25" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="pq_26" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="pq_27" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="pq_28" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="pq_29" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="pq_30" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="pq_31" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="pq_32" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="pq_33" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="pq_34" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="pq_35" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="pq_36" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="pq_37" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="pq_38" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px" value="0" id="pq_39" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                </tr>

                <tr>
                    <td style="font-size: 10px; font-size:xx-small; text-align:center; width:45px; font-weight:bold; background-color:powderblue;">PASAY CITY</td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px;" value="0" id="pc_1" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px;" value="0" id="pc_2" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px;" value="0" id="pc_3" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px;" value="0" id="pc_4" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px;" value="0" id="pc_5" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px;" value="0" id="pc_6" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px;" value="0" id="pc_7" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px;" value="0" id="pc_8" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px;" value="0" id="pc_9" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px;" value="0" id="pc_10" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px;" value="0" id="pc_11" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px;" value="0" id="pc_12" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px;" value="0" id="pc_13" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px;" value="0" id="pc_14" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px;" value="0" id="pc_15" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px;" value="0" id="pc_16" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px;" value="0" id="pc_17" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px;" value="0" id="pc_18" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px;" value="0" id="pc_19" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px;" value="0" id="pc_20" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px;" value="0" id="pc_21" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px;" value="0" id="pc_22" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px;" value="0" id="pc_23" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px;" value="0" id="pc_24" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px;" value="0" id="pc_25" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px;" value="0" id="pc_26" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px;" value="0" id="pc_27" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px;" value="0" id="pc_28" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px;" value="0" id="pc_29" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px;" value="0" id="pc_30" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px;" value="0" id="pc_31" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px;" value="0" id="pc_32" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px;" value="0" id="pc_33" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px;" value="0" id="pc_34" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px;" value="0" id="pc_35" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px;" value="0" id="pc_36" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px;" value="0" id="pc_37" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px;" value="0" id="pc_38" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white; font-size:xx-small; text-align:center; width:45px;" value="0" id="pc_39" oninput="saveData(this.id, this.value)" onchange="updateChart('fies')"></td>
                </tr>
                <!-- <tr>
                    <td>Observation Report and <br>Re-interview </td>
                    <td><input type="number" style="border: white;" value="0" id="fies-jan-observation-target" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white;" value="0" id="fies-jan-observation-actual" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white;" value="0" id="fies-feb-observation-target" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white;" value="0" id="fies-feb-observation-actual" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white;" value="0" id="fies-mar-observation-target" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white;" value="0" id="fies-mar-observation-actual" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white;" value="0" id="fies-apr-observation-target" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white;" value="0" id="fies-apr-observation-actual" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white;" value="0" id="fies-may-observation-target" onchange="updateChart('fies')"></td>
                    <td><input type="number" style="border: white;" value="0" id="fies-may-observation-actual" onchange="updateChart('fies')"></td>
                </tr> -->
                <!-- <tr>
                    <td>Re-interview</td>
                    <td><input type="number" value="0" id="fies-jan-reinterview-target" onchange="updateChart('fies')"></td>
                    <td><input type="number" value="0" id="fies-jan-reinterview-actual" onchange="updateChart('fies')"></td>
                    <td><input type="number" value="0" id="fies-feb-reinterview-target" onchange="updateChart('fies')"></td>
                    <td><input type="number" value="0" id="fies-feb-reinterview-actual" onchange="updateChart('fies')"></td>
                    <td><input type="number" value="0" id="fies-mar-reinterview-target" onchange="updateChart('fies')"></td>
                    <td><input type="number" value="0" id="fies-mar-reinterview-actual" onchange="updateChart('fies')"></td>
                    <td><input type="number" value="0" id="fies-apr-reinterview-target" onchange="updateChart('fies')"></td>
                    <td><input type="number" value="0" id="fies-apr-reinterview-actual" onchange="updateChart('fies')"></td>
                    <td><input type="number" value="0" id="fies-may-reinterview-target" onchange="updateChart('fies')"></td>
                    <td><input type="number" value="0" id="fies-may-reinterview-actual" onchange="updateChart('fies')"></td>
                </tr> -->
            </tbody>
        </table>
    </div>
    <div class="chart-container">
        <canvas id="fiesChart"></canvas>
    </div>
    <!------------------------------------------------------------------------------------------------------------------------>
    <!----------------------------------------------------------- LOCAL STORAGE FUNCTIONALITY---------------------------------->
    <!------------------------------------------------------------------------------------------------------------------------>
    <script>
        // Function to save data to localStorage
        function saveData(inputId, value) {
            localStorage.setItem(inputId, value); // Save the input value in localStorage
        }

        // On page load, restore the values from localStorage if they exist
        window.onload = function() {
            const inputIds = ['ncr_1', 'ncr_2', 'ncr_3', 'ncr_4', 'ncr_5', 'ncr_6', 'ncr_7', 'ncr_8', 'ncr_9', 'ncr_10', 'ncr_11', 'ncr_12', 'ncr_13', 'ncr_14',
                'ncr_15', 'ncr_16', 'ncr_17', 'ncr_18', 'ncr_19', 'ncr_20', 'ncr_21', 'ncr_22', 'ncr_23', 'ncr_24', 'ncr_25', 'ncr_26', 'ncr_27', 'ncr_28', 'ncr_29', 'ncr_30', 'ncr_31', 'ncr_32',
                'ncr_33', 'ncr_34', 'ncr_35', 'ncr_36', 'ncr_37', 'ncr_38', 'ncr_39', 'lp_1', 'lp_2', 'lp_3', 'lp_4', 'lp_5', 'lp_6', 'lp_7', 'lp_8', 'lp_9', 'lp_10', 'lp_11', 'lp_12', 'lp_13', 'lp_14', 'lp_15',
                'lp_16', 'lp_17', 'lp_18', 'lp_19', 'lp_20', 'lp_21', 'lp_22', 'lp_23', 'lp_24', 'lp_25', 'lp_26', 'lp_27', 'lp_28', 'lp_29', 'lp_30', 'lp_31', 'lp_32', 'lp_33',
                'lp_34', 'lp_35', 'lp_36', 'lp_37', 'lp_38', 'lp_39', 'mc_1', 'mc_2', 'mc_3', 'mc_4', 'mc_5', 'mc_6', 'mc_7', 'mc_8', 'mc_9', 'mc_10', 'mc_11', 'mc_12', 'mc_13', 'mc_14', 'mc_15', 'mc_16', 'mc_17', 'mc_18', 'mc_19', 'mc_20',
                'mc_21', 'mc_22', 'mc_23', 'mc_24', 'mc_25', 'mc_26', 'mc_27', 'mc_28', 'mc_29', 'mc_30', 'mc_31', 'mc_32', 'mc_33', 'mc_34', 'mc_35', 'mc_36', 'mc_37', 'mc_38', 'mc_39', 'pq_1', 'pq_2', 'pq_3', 'pq_4', 'pq_5', 'pq_6', 'pq_7',
                'pq_8', 'pq_9', 'pq_10', 'pq_11', 'pq_12', 'pq_13', 'pq_14', 'pq_15', 'pq_16', 'pq_17', 'pq_18', 'pq_19', 'pq_20', 'pq_21', 'pq_22', 'pq_23', 'pq_24', 'pq_25', 'pq_26', 'pq_27', 'pq_28', 'pq_29', 'pq_30',
                'pq_31', 'pq_32', 'pq_33', 'pq_34', 'pq_35', 'pq_36', 'pq_37', 'pq_38', 'pq_39', 'pc_1', 'pc_2', 'pc_3', 'pc_4', 'pc_5', 'pc_6', 'pc_7', 'pc_8', 'pc_9', 'pc_10', 'pc_11', 'pc_12', 'pc_13', 'pc_14', 'pc_15', 'pc_16', 'pc_17', 'pc_18', 'pc_19', 'pc_20',
                'pc_21', 'pc_22', 'pc_23', 'pc_24', 'pc_25', 'pc_26', 'pc_27', 'pc_28', 'pc_29', 'pc_30', 'pc_31', 'pc_32', 'pc_33', 'pc_34', 'pc_35', 'pc_36', 'pc_37', 'pc_38', 'pc_39', '', ''
            ]; // List of input field IDs,


            inputIds.forEach(id => {
                const savedValue = localStorage.getItem(id);
                if (savedValue !== null) {
                    document.getElementById(id).value = savedValue; // Restore the saved value to the input field
                }
            });
        };
    </script>
    <!------------------------------------------------------------------------------------------------------------------------>
    <!----------------------------------------------------------- LOCAL STORAGE FUNCTIONALITY---------------------------------->
    <!------------------------------------------------------------------------------------------------------------------------>


    <script>
        // Function to update the chart dynamically
        function updateChart(city) {
            const months = ['jan', 'feb', 'mar', 'apr', 'may', 'jun', 'jul', 'aug', 'sep', 'oct', 'nov', 'dec'];
            const categories = ['raw', 'clean', 'narrative', 'financial', 'geo', 'observation'];
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

        // Create charts for each city
        const cityCharts = {};

        function createChart(cityId, chartId) {
            const ctx = document.getElementById(chartId).getContext('2d');
            const chart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['#', '#', '#', '#', '#'], // Add more months as needed
                    datasets: [{
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
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
            cityCharts[cityId] = chart;
        }

        // Initialize charts for each city
        createChart('fies', 'fiesChart');
    </script>