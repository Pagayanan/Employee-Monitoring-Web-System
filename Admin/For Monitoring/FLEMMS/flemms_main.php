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
        /* Body styling */
        body {
            font-family: 'Arial', sans-serif;
            /* Clean and professional font */
            background: linear-gradient(135deg, #f5f7fa, #c3cfe2);
            /* Soft gradient background for modern look */
            margin: 0;
            padding: 0;
            color: #333;
            /* Darker text for better readability */
            line-height: 1.6;
            /* Better text readability */
            min-height: 100vh;
            /* Ensure the body covers the full height of the viewport */
            scroll-behavior: smooth;
            /* Smooth scrolling effect */
            overflow-y: scroll;
            /* Always show vertical scrollbar to avoid layout shifts */
        }

        /* Scrollbar customization */
        body::-webkit-scrollbar {
            width: 10px;
            /* Width of the scrollbar */
        }

        body::-webkit-scrollbar-track {
            background: #f1f1f1;
            /* Scrollbar track background */
        }

        body::-webkit-scrollbar-thumb {
            background: #888;
            /* Scrollbar color */
            border-radius: 10px;
            /* Round edges of the scrollbar */
        }

        body::-webkit-scrollbar-thumb:hover {
            background: #555;
            /* Darker on hover */
        }

        /* Make headings and text look more professional */
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: #333;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
            /* Center headings */
        }

        p {
            margin: 20px auto;
            max-width: 800px;
            /* Limit paragraph width for better readability */
            padding: 0 15px;
            text-align: justify;
            /* Justify text for a cleaner look */
        }

        /* Responsive design for mobile devices */
        @media (max-width: 768px) {
            body {
                padding: 10px;
            }

            p {
                padding: 0 10px;
                max-width: 100%;
                /* Allow paragraphs to take up full width on small screens */
            }
        }

        .city-section {
            max-width: 100vw;
            /* Make it responsive and fit the viewport width */
            margin: 20px auto;
            /* Center the section with margin */
            width: 100%;
            /* Full width of the parent container */
            padding: 20px;
            /* Add some padding for spacing */
            background-color: #f0f4f8;
            /* Soft background color for a clean look */
            border-radius: 8px;
            /* Rounded corners for a modern feel */
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            /* Soft shadow for depth */
            font-family: 'Roboto', sans-serif;
            /* Professional, modern font */
        }

        /* Headings or titles inside the section */
        .city-section h2 {
            color: #333;
            /* Darker color for contrast */
            font-size: 24px;
            text-align: center;
            /* Center the headings */
            margin-bottom: 16px;
            /* Space below the headings */
        }

        /* Paragraphs or text inside the section */
        .city-section p {
            color: #555;
            /* Soft text color for readability */
            line-height: 1.6;
            /* Better readability */
            font-size: 16px;
            text-align: justify;
            /* Justify text for a neat look */
            margin: 12px 0;
        }

        /* Make it responsive on smaller screens */
        @media screen and (max-width: 768px) {
            .city-section {
                padding: 10px;
                /* Reduce padding on small screens */
                border-radius: 4px;
                /* Adjust radius for small viewports */
            }

            .city-section h2 {
                font-size: 20px;
                /* Scale down heading size */
            }

            .city-section p {
                font-size: 14px;
                /* Scale down paragraph font */
            }
        }


        .city-section2 {
            max-width: 100vw;
            /* Ensure full responsiveness */
            overflow-x: auto;
            /* Scroll horizontally if the table overflows */
            margin: 20px auto;
            width: 100%;
            border-collapse: collapse;
            /* Make borders look cleaner */
            background-color: #f9f9f9;
            /* Light background for a modern feel */
            font-family: Arial, sans-serif;
            /* Use a professional font */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* Add subtle shadow for depth */
        }

        /* Style the table headers */
        .city-section2 th {
            background-color: #4CAF50;
            /* Professional color for headers */
            color: white;
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }

        /* Style the table rows */
        .city-section2 td {
            padding: 12px;
            border: 1px solid #ddd;
            /* Keep borders consistent */
            text-align: left;
            white-space: nowrap;
            /* Prevent text wrapping */
        }

        /* Zebra-striping for rows */
        .city-section2 tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        /* Highlight on hover */
        .city-section2 tr:hover {
            background-color: #ddd;
        }

        /* Make table responsive */
        @media screen and (max-width: 768px) {

            .city-section2 th,
            .city-section2 td {
                padding: 8px;
            }
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
            /* Space between logos and text */
            padding: 10px 20px;
            /* Add padding for a cleaner layout */
            background-color: rgba(255, 255, 255, 0.8);
            /* Slightly transparent background for better contrast */
            border-radius: 10px;
            /* Rounded corners for a modern look */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            /* Add subtle shadow for depth */
        }

        .logo-container img {
            width: 60px;
            /* Slightly larger logo for better visibility */
            height: auto;
            transition: transform 0.3s ease-in-out;
            /* Smooth transition for hover effects */
        }

        .logo-container img:hover {
            transform: scale(1.1);
            /* Scale up logos slightly on hover */
        }

        .logo-text {
            font-size: 20px;
            /* Increase font size for better readability */
            font-weight: bold;
            color: #333;
            /* Darker color for the text to improve contrast */
            text-align: center;
            letter-spacing: 1px;
            /* Add some letter spacing for a refined look */
        }

        @media (max-width: 768px) {
            .logo-container {
                flex-direction: column;
                /* Stack logos and text vertically on smaller screens */
                gap: 10px;
                /* Reduce gap for better spacing */
            }

            .logo-container img {
                width: 50px;
                /* Adjust logo size for smaller screens */
            }

            .logo-text {
                font-size: 16px;
                /* Adjust text size for better fit on mobile */
            }
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
<!---------------------------------------------------------------------------->
<!-------------------------------------- BY CITY BUTTON  --------------------->
<!---------------------------------------------------------------------------->

<body>
    <!-- <h2 style="text-align:center;">LAS PIÑAS CITY</h2> -->
    <!-- City Section for Las Piñas -->
    <br>
    <br>
    <br>
    <div class="city-header" style="font-weight: bolder; background-color:khaki;">FLEMMS</div>
    <div>
        <a style="background-color:#0A414F; color:white; border-radius:7px; font-weight: bolder; padding:5px" href="../table with dashboard/progress.php" class="btn btn-primary active">SELECT PROJECT</a>
    </div>
    <div class="city-section2" id="laspinas-section">
        <table>
            <thead>
                <tr>
                    <th style="color: white; background-color:teal; text-align:justify; font-size:20px;" colspan="18">DATA COLLECTION STATUS REPORT</th>
                    <!-- <th style="color: white;" colspan="2">Actual</th> -->
                    <!-- <th style="color: white;" colspan="2">March</th>
                    <th style="color: white;" colspan="2">April</th>
                    <th style="color: white;" colspan="2">May</th>
                    <th style="color: white;" colspan="2">June</th>
                    <th style="color: white;" colspan="2">July</th>
                    <th style="color: white;" colspan="2">August</th>
                    <th style="color: white;" colspan="2">September</th>
                    <th style="color: white;" colspan="2">October</th>
                    <th style="color: white;" colspan="2">November</th>
                    <th style="color: white;" colspan="2">December</th> -->
                    <!-- Add more months as needed -->
                </tr>
                <tr>
                    <!-- <th style="color: white; font-size:22px; width:12%; text-align:center;" colspan="3">ROUND:</th>
                    <th style="color: white; font-size:22px; width:12%; text-align:justify;" colspan="14"><input type="text" style="font-size:22px; background-color:#0A414F; color:white; text-align:justify; font-weight:bold;" value="YEAR/MONTH" id="DCSR_ROUND" oninput="saveData(this.id, this.value)"></th> -->
                    <!-- <th style="color: white;">Actual</th>
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
                    <th style="color: white;">Actual</th> -->
                    <!-- Add sub-headers for more months -->
                </tr>

                <tr>
                    <th style="color: black; font-size:20px; text-align:justify; font-weight:bolder; background-color:lightsteelblue"></th>
                    <th style="color: black; font-size:20px; text-align:justify; font-weight:bolder; background-color:lightsteelblue"></th>
                    <th style="color: black; font-size:20px; text-align:justify; font-weight:bolder; background-color:lightsteelblue"></th>
                    <th style="color: black; font-size:20px; text-align:justify; font-weight:bolder; background-color:lightsteelblue"></th>
                    <th style="color: black; font-size:20px; text-align:center; font-weight:bolder; background-color:lightsteelblue" colspan="11">Actual Workload by Interview Status</th>
                    <!-- <th style="color: white; font-size:12px;">ACTUAL SUBMISSION</th>
                    <th style="color: white; font-size:12px;">REMARKS</th>
                    <th style="color: white; font-size:12px;">TARGET SUBMISSION</th>
                    <th style="color: white; font-size:12px;">ACTUAL SUBMISSION</th>
                    <th style="color: white; font-size:12px;">REMARKS</th>
                    <th style="color: white; font-size:12px;">TARGET SUBMISSION</th>
                    <th style="color: white; font-size:12px;">ACTUAL SUBMISSION</th>
                    <th style="color: white; font-size:12px;">REMARKS</th> -->
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
                    <td style="width:7%;"><input type="text" style="border: white;  text-align:center; font-size:12px;" value="0" id="flp_11" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="width:7%;"><input type="text" style="border: white;  text-align:center;  font-size:12px;" value="" id="flp_22" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="width:7%;"><input type="text" style="border: white;  text-align:center;  font-size:12px;" value="" id="flp_33" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="width:7%;"><input type="text" style="border: white;  text-align:center;  font-size:12px;" value="" id="flp_44" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="width:7%;"><input type="text" style="border: white;  text-align:center;  font-size:12px;" value="" id="flp_55" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="width:7%;"><input type="text" style="border: white;  text-align:center;  font-size:12px;" value="" id="flp_66" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="width:7%;"><input type="text" style="border: white;  text-align:center;  font-size:12px;" value="" id="flp_77" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="width:7%;"><input type="text" style="border: white;  text-align:center;  font-size:12px;" value="" id="flp_88" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="width:7%;"><input type="text" style="border: white;  text-align:center;  font-size:12px;" value="" id="flp_99" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="width:7%;"><input type="text" style="border: white;  text-align:center;  font-size:12px;" value="" id="flp_101" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="width:7%;"><input type="text" style="border: white;  text-align:center;  font-size:12px;" value="" id="flp_111" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="width:7%;"><input type="text" style="border: white;  text-align:center;  font-size:12px;" value="" id="flp_122" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="width:7%;"><input type="number" style="border: white;  text-align:center; font-size:12px;" value="" id="flp_133" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="width:7%;"><input type="number" style="border: white;  text-align:center; font-size:12px;" value="" id="flp_144" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <!-- <td><input type="number" style="border: white; background-color:lightsteelblue; text-align:center;" value="0" id="laspinas-feb-res-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; background-color:lightsteelblue; text-align:center;" value="0" id="laspinas-mar-res-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; background-color:lightsteelblue; text-align:center;" value="0" id="laspinas-mar-res-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; background-color:lightsteelblue; text-align:center;" value="0" id="laspinas-apr-res-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; background-color:lightsteelblue; text-align:center;" value="0" id="laspinas-apr-res-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; background-color:lightsteelblue; text-align:center;" value="0" id="laspinas-may-res-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; background-color:lightsteelblue; text-align:center;" value="0" id="laspinas-may-res-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; background-color:lightsteelblue; text-align:center;" value="0" id="laspinas-jun-res-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; background-color:lightsteelblue; text-align:center;" value="0" id="laspinas-jun-res-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; background-color:lightsteelblue; text-align:center;" value="0" id="laspinas-jul-res-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; background-color:lightsteelblue; text-align:center;" value="0" id="laspinas-jul-res-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; background-color:lightsteelblue; text-align:center;" value="0" id="laspinas-aug-res-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; background-color:lightsteelblue; text-align:center;" value="0" id="laspinas-aug-res-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; background-color:lightsteelblue; text-align:center;" value="0" id="laspinas-sep-res-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; background-color:lightsteelblue; text-align:center;" value="0" id="laspinas-sep-res-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; background-color:lightsteelblue; text-align:center;" value="0" id="laspinas-oct-res-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; background-color:lightsteelblue; text-align:center;" value="0" id="laspinas-oct-res-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; background-color:lightsteelblue; text-align:center;" value="0" id="laspinas-nov-res-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; background-color:lightsteelblue; text-align:center;" value="0" id="laspinas-nov-res-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; background-color:lightsteelblue; text-align:center;" value="0" id="laspinas-dec-res-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; background-color:lightsteelblue; text-align:center;" value="0" id="laspinas-dec-res-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td> -->
                </tr>

                <tr>
                    <td style="font-size:12px; font-weight:bolder; font-size:14px;">Muntinlupa</td>
                    <td><input type="text" style="border: white; text-align:center; font-size:12px;" value="" id="fmc_11" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="fmc_22" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="fmc_33" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="fmc_44" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="fmc_55" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="fmc_66" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="fmc_77" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="fmc_88" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="fmc_99" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="fmc_101" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="fmc_111" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="fmc_122" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;  font-size:12px;" value="" id="fmc_133" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;  font-size:12px;" value="" id="fmc_144" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <!-- <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-feb-raw-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
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
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-dec-raw-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td> -->
                </tr>
                <tr>
                    <td style="font-weight:bolder; font-size:14px;">Parañaque</td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="fpq_11" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="fpq_22" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="fpq_33" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="fpq_44" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="fpq_55" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="fpq_66" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="fpq_77" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="fpq_88" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="fpq_99" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="fpq_101" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="fpq_111" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;  font-size:12px;" value="" id="fpq_122" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;  font-size:12px;" value="" id="fpq_133" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;  font-size:12px;" value="" id="fpq_144" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <!-- <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-feb-clean-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-mar-clean-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-mar-clean-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-apr-clean-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-apr-clean-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-may-clean-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-may-clean-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-jun-clean-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-jun-clean-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-jul-clean-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-jul-clean-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-aug-clean-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-aug-clean-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-sep-clean-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-sep-clean-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-oct-clean-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-oct-clean-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-nov-clean-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-nov-clean-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-dec-clean-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-dec-clean-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td> -->
                </tr>
                <tr>
                    <td style="font-size:14px; font-weight:bolder">Pasay</td>
                    <td><input type="text" style="border: white; text-align:center;" value="" id="fpc_11" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;" value="" id="fpc_22" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;" value="" id="fpc_33" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;" value="" id="fpc_44" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;" value="" id="fpc_55" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;" value="" id="fpc_66" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;" value="" id="fpc_77" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;" value="" id="fpc_88" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;" value="" id="fpc_99" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;" value="" id="fpc_101" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;" value="" id="fpc_111" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center;" value="" id="fpc_122" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;  font-size:9px;" value="" id="fpc_133" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;  font-size:9px;" value="" id="fpc_144" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <!-- <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-jul-narrative-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-jul-narrative-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-aug-narrative-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-aug-narrative-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-sep-narrative-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-sep-narrative-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-oct-narrative-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-oct-narrative-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-nov-narrative-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-nov-narrative-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-dec-narrative-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-dec-narrative-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td> -->
                </tr>
                <tr>
                    <td style="font-size:14px; font-weight:bolder">Total</td>
                    <td><input type="text" style="border: white; text-align:center; font-size:12px;" value="" id="ftal_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center; font-size:12px;" value="" id="ftal_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center; font-size:12px;" value="" id="ftal_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center; font-size:12px;" value="" id="ftal_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center; font-size:12px;" value="" id="ftal_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center; font-size:12px;" value="" id="ftal_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center; font-size:12px;" value="" id="ftal_7" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center; font-size:12px;" value="" id="ftal_8" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center; font-size:12px;" value="" id="ftal_9" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center; font-size:12px;" value="" id="ftal_10" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center; font-size:12px;" value="" id="ftal_11" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="text" style="border: white; text-align:center; font-size:12px;" value="" id="ftal_12" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center; font-size:12px;" value="" id="ftal_13" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center; font-size:12px;" value="" id="ftal_14" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <!-- <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-jul-financial-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-jul-financial-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-aug-financial-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-aug-financial-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-sep-financial-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-sep-financial-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-oct-financial-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-oct-financial-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-nov-financial-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-nov-financial-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-dec-financial-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-dec-financial-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td> -->
                </tr>
                <!-- <tr>
                    <td>Updated GEO-MS</td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-jan-geo-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-jan-geo-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-feb-geo-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-feb-geo-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-mar-geo-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-mar-geo-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-apr-geo-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-apr-geo-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-may-geo-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-may-geo-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-jun-geo-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-jun-geo-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-jul-geo-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-jul-geo-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-aug-geo-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-aug-geo-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-sep-geo-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-sep-geo-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-oct-geo-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-oct-geo-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-nov-geo-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-nov-geo-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-dec-geo-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-dec-geo-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr> -->
                <!-- <tr>
                    <td>Observation Report and Re-interview </td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-jan-observation-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-jan-observation-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-feb-observation-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-feb-observation-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-mar-observation-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-mar-observation-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-apr-observation-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-apr-observation-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-may-observation-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-may-observation-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-jun-observation-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-jun-observation-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-jul-observation-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-jul-observation-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-aug-observation-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-aug-observation-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-sep-observation-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-sep-observation-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-oct-observation-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-oct-observation-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-nov-observation-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-nov-observation-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-dec-observation-target" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td><input type="number" style="border: white; text-align:center;" value="0" id="laspinas-dec-observation-actual" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr> -->

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
    <div class="city-section" id="laspinas-section">
        <table>
            <thead>
                <tr>
                    <th style="color: white; background-color: #0A414F; text-align:center; font-size:20px;" colspan="4">ACTIVITIES</th>

                </tr>


                <tr>
                    <th style="color: black; font-size:12px; text-align:center; background-color:lightcyan;" colspan="1">Activities</th>
                    <th style="color: black; font-size:12px; text-align:center; background-color:lightcyan;">Target Date</th>
                    <th style="color: black; font-size:12px; text-align:center; background-color:lightcyan;">Actual</th>
                    <th style="color: black; font-size:12px; text-align:center; background-color:lightcyan;">Remarks</th>

                </tr>
            </thead>
            <tbody>

                <br>
                <!-- Repeat for each category -->
                <tr>
                    <td style="font-weight: bolder; font-size:12px; width:12%; text-align:justify;">Task Force Training</td>
                    <td style="text-align: center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value="0" id="ftft_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align: center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value="0" id="ftft_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align: center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value="" id="ftft_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>

                </tr>

                <tr>
                    <td style="font-size:12px; font-weight:bolder; text-align:justify;">Second Level Training</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value="0" id="fslt_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value="0" id="fslt_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value="" id="fslt_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>

                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder; text-align:justify;">Third Level Training</td>
                    <td style="text-align: center;"><input type="date" style="border: white; text-align:center; font-size:12px" value="0" id="ftlt_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align: center;"><input type="date" style="border: white; text-align:center;font-size:12px;" value="0" id="ftlt_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align: center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value="" id="ftlt_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>

                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder; text-align:justify;">Data Collection</td>
                    <td style="text-align: center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value="0" id="fdc_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align: center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value="0" id="fdc_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align: center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value="" id="fdc_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>

                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder; text-align:justify;">Supervision</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value="0" id="fs_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value="0" id="fs_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value="" id="fs_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>

                </tr>
                <th style="color: black; font-size:15px; font-weight:bolder; text-align:left; background-color:lightskyblue;" colspan="4">DELIVERABLES SUBMISSION</th>
                <tr>
                    <td style="font-size:12px; font-weight:bolder; text-align:justify;">Raw Datafile</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value="0" id="frd_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value="0" id="frd_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value="" id="frd_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder; text-align:justify;">Clean Datafile</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value="0" id="fcd_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value="0" id="fcd_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value="" id="fcd_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder; text-align:justify;">Narative Report</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value="0" id="fnr_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value="0" id="fnr_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value="" id="fnr_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder; text-align:justify;">Financial Report</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value="0" id="ffr_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value="0" id="ffr_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value="" id="ffr_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder; text-align:justify;">SSU List</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value="0" id="fsl_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value="0" id="fsl_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value="" id="fsl_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder; text-align:justify;">Observation Report</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value="0" id="for_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value="0" id="for_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value="" id="for_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder; text-align:justify;">re-interview</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value="0" id="fre_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value="0" id="fre_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value="text" id="fre_3" oninput="saveData(this.id, this.value)"></td>
                </tr>



            </tbody>
            <script>
                // Function to save data to localStorage
                function saveData(inputId, value) {
                    localStorage.setItem(inputId, value); // Save the input value in localStorage
                }

                // On page load, restore the values from localStorage if they exist
                window.onload = function() {
                    const inputIds = ['DCSR_ROUND', 'flp_11', 'flp_22', 'flp_33', 'flp_44', 'flp_55', 'flp_66', 'flp_77', 'flp_88', 'flp_99', 'flp_101', 'flp_111', 'flp_122', 'flp_133', 'flp_144', 'fmc_11', 'fmc_22', 'fmc_33', 'fmc_44', 'fmc_55',
                        'fmc_66', 'fmc_77', 'fmc_88', 'fmc_99', 'fmc_101', 'fmc_111', 'fmc_122', 'fmc_133', 'fmc_144', 'fpq_11', 'fpq_22', 'fpq_33', 'fpq_44', 'fpq_55',
                        'fpq_66', 'fpq_77', 'fpq_88', 'fpq_99', 'fpq_101', 'fpq_111', 'fpq_122', 'fpq_133', 'fpq_144', 'fpc_11', 'fpc_22', 'fpc_33', 'fpc_44', 'fpc_55', 'fpc_66', 'fpc_77', 'fpc_88', 'fpc_99', 'fpc_101',
                        'fpc_111', 'fpc_122', 'fpc_133', 'fpc_144', 'ftft_1', 'ftft_2', 'ftft_3', 'fslt_1', 'fslt_2', 'fslt_3', 'ftlt_1', 'ftlt_2', 'ftlt_3', 'fdc_1', 'fdc_2',
                        'fdc_3', 'fs_1', 'fs_2', 'fs_3', 'frd_1', 'frd_2', 'frd_3', 'fcd_1', 'fcd_2', 'fcd_3', 'fnr_1', 'fnr_2', 'fnr_3', 'ffr_1', 'ffr_2', 'ffr_3', 'fsl_1', 'fsl_2',
                        'fsl_3', 'for_1', 'for_2', 'for_3', 'fre_1', 'fre_2', 'fre_3', 'ftal_1', 'ftal_2', 'ftal_3', 'ftal_4', 'ftal_5', 'ftal_6', 'ftal_7', 'ftal_8', 'ftal_9', 'ftal_10', 'ftal_11', 'ftal_12', 'ftal_13',
                        'ftal_14',
                    ]; // List of input field IDs

                    inputIds.forEach(id => {
                        const element = document.getElementById(id);
                        const savedValue = localStorage.getItem(id);

                        if (element && savedValue !== null) {
                            element.value = savedValue; // Restore the saved value to the input field
                        }
                    });
                };
            </script>

        </table>
        <!-- <div class="chart-container">
            <canvas id="laspinasChart"></canvas>
        </div> -->
    </div>
</body>

</html>