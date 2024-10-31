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
            width: 100%;
        }

        /* General Table Styling */
        /* General Table Styling */
        /* General Table Styling */
        /* General Table Styling */
        /* General Table Styling */
        table {
            width: 100%;
            margin: 20px 0;
            border-collapse: separate;
            border-spacing: 0;
            border-radius: 15px;
            background-color: #fff;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            /* Clean shadow */
            font-family: 'Poppins', sans-serif;
            transition: transform 0.3s ease;
            border: 1px solid rgba(0, 0, 0, 0.1);
            /* Light border */
            overflow: hidden;
        }

        /* Hover scaling effect */
        table:hover {
            transform: scale(1.02);
        }

        /* Header Styling */
        th {
            background: linear-gradient(135deg, #19717F, #1D9C93);
            /* Gradient for a modern look */
            color: #fff;
            font-size: 16px;
            font-weight: 600;
            padding: 16px;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            border-bottom: 2px solid rgba(255, 255, 255, 0.15);
            text-align: center;
        }

        /* Table Data Cell Styling */
        td {
            padding: 16px;
            font-size: 15px;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
            color: #333;
            text-align: center;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        /* Alternating row backgrounds for better readability */
        tr:nth-child(even) td {
            background-color: rgba(240, 240, 240, 0.6);
        }

        tr:nth-child(odd) td {
            background-color: #fff;
        }

        /* Hover effect on rows */
        tr:hover td {
            background-color: rgba(0, 0, 0, 0.05);
            color: #19717F;
            cursor: pointer;
            transform: translateY(-3px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
        }

        /* Border-radius for first and last columns */
        th:first-child,
        td:first-child {
            border-top-left-radius: 15px;
            border-bottom-left-radius: 15px;
        }

        th:last-child,
        td:last-child {
            border-top-right-radius: 15px;
            border-bottom-right-radius: 15px;
        }

        /* Table Caption Styling */
        caption {
            font-size: 20px;
            font-weight: 600;
            color: #19717F;
            margin: 15px 0;
            text-align: left;
        }

        /* Responsive design for smaller screens */
        @media (max-width: 768px) {

            table,
            thead,
            tbody,
            th,
            td,
            tr {
                display: block;
            }

            th {
                text-align: left;
                padding: 14px;
            }

            td {
                padding: 14px;
                text-align: right;
                position: relative;
                padding-left: 50%;
            }

            td:before {
                content: attr(data-label);
                position: absolute;
                left: 0;
                width: 45%;
                padding-left: 15px;
                font-weight: bold;
                color: #333;
            }

            tr {
                margin-bottom: 12px;
            }
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
        .logo-container1 {
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            /* Changed to relative for better flow with other content */
            margin: 20px auto;
            /* Centers the logo container */
            gap: 20px;
            /* Space between logos and text */
        }

        .logo-container1 img {
            width: 55px;
            /* Adjust logo size */
            height: auto;
            transition: transform 0.3s ease;
            /* Adds a hover effect */
        }

        /* Hover effect for logos */
        .logo-container1 img:hover {
            transform: scale(1.1);
            /* Slightly enlarges logos on hover */
        }


        .logo-text {
            font-size: 18px;
            /* Adjust the font size */
            font-weight: bold;
            text-align: center;
        }

        /****************************** End for logo css part ***********************/
        /* Loading screen */
        .loading-screen {
            display: none;
            /* Hidden by default */
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.9);
            /* Semi-transparent background */
            align-items: center;
            justify-content: center;
            z-index: 1000;
            /* Ensure it appears on top */
            flex-direction: column;
            /* Stack logo, spinner, and text vertically */
            backdrop-filter: blur(8px);
            /* Stronger blur for background */
        }

        .logo-container {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: pulse 2s infinite;
            /* Pulsing animation on the entire logo container */
        }

        .loading-logo {
            width: 120px;
            /* Size of the logo */
            height: auto;
            /* Maintain aspect ratio */
            position: relative;
            z-index: 1;
            /* Ensure the logo is above the animation */
            animation: logoPulse 3s ease-in-out infinite;
            /* Subtle pulsing effect */
        }

        @keyframes pulse {

            0%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
                /* Slight scaling for a pulse effect */
            }
        }

        @keyframes logoPulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.1);
                /* Enlarges slightly at the peak */
            }

            100% {
                transform: scale(1);
            }
        }

        /* Animation Circle - First Layer (Red) */
        .animation-circle {
            position: absolute;
            width: 140px;
            height: 140px;
            border-radius: 50%;
            border: 4px solid rgba(255, 0, 0, 0.3);
            /* Red color */
            border-top: 4px solid rgba(255, 0, 0, 1);
            animation: spin 2s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        /* Second Circle (Yellow) */
        .animation-circle-yellow {
            position: absolute;
            width: 160px;
            height: 160px;
            border-radius: 50%;
            border: 4px solid rgba(255, 255, 0, 0.3);
            /* Yellow color */
            border-top: 4px solid rgba(255, 255, 0, 1);
            animation: spin-reverse 3s linear infinite;
            /* Slower and reverse spin */
        }

        @keyframes spin-reverse {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(-360deg);
            }
        }

        /* Third Circle (Blue) */
        .animation-circle-blue {
            position: absolute;
            width: 180px;
            height: 180px;
            border-radius: 50%;
            border: 4px solid rgba(0, 0, 255, 0.3);
            /* Blue color */
            border-top: 4px solid rgba(0, 0, 255, 1);
            animation: spin 4s linear infinite;
            /* Slowest spin */
        }

        /* Spinner - Small Spinner */
        .spinner {
            width: 50px;
            height: 50px;
            border: 5px solid #ccc;
            border-top: 5px solid #0A414F;
            border-radius: 50%;
            animation: spin 1s linear infinite;
            margin-top: 20px;
        }

        /* Loading Text */
        .loading-text {
            font-size: 18px;
            font-weight: 600;
            color: #0A414F;
            /* Text color matching the theme */
            margin-top: 20px;
        }

        .loading-dots {
            display: inline-block;
            width: 20px;
            text-align: left;
        }

        @keyframes dots {
            0% {
                content: '';
            }

            33% {
                content: '.';
            }

            66% {
                content: '..';
            }

            100% {
                content: '...';
            }
        }

        .loading-dots::after {
            content: '...';
            animation: dots 1.5s steps(3, end) infinite;
        }

        /* Loading screen */
    </style>
</head>
<div class="logo-container1">
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
    <div class="city-section" id="laspinas-section">
        <br>
        <div class="city-header" style="font-weight: bolder; background-color:khaki;">RCSS:H</div>
        <table>
            <thead>
                <tr>
                    <th style="color: white; background-color: #0A414F; text-align:center; font-size:20px;" colspan="7"></th>

                </tr>
                <tr>
                    <th style="color: black; background-color: white; text-align:center;" colspan="1"></th>
                    <th style="color: black; background-color: white; text-align:center;" colspan="2">Time Table</th>
                    <th style="color: black; background-color: white; text-align:center;" colspan="1"></th>
                    <th style="color: black; background-color: white; text-align:center;" colspan="1"></th>
                    <th style="color: black; background-color: white; text-align:center;" colspan="1"></th>
                    <th style="color: black; background-color: white; text-align:center;" colspan="1"></th>
                </tr>
                <tr>
                    <th style="color: black; background-color: white; text-align:center;" colspan="1">RCSS: Household</th>
                    <th style="color: black; background-color: white; text-align:center;">Start Time</th>
                    <th style="color: black; background-color: white; text-align:center;">End Time</th>
                    <th style="color: black; background-color: white; text-align:center;" colspan="1">Date of Accomplishment/<br>Date of Submission</th>
                    <th style="color: black; background-color: white; text-align:center;" colspan="1">Remarks</th>
                    <th style="color: black; background-color: white; text-align:center;" colspan="1">Workload</th>
                    <th style="color: black; background-color: white; text-align:center;" colspan="1">Response Rate</th>
                </tr>

                <tr>
                    <th style="color: white; font-size:15px; text-align:left; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif" colspan="5">January</th>
                    <th style="color: white; font-size:12px; text-align:center;"></th>
                    <th style="color: white; font-size:12px; text-align:center;"></th>

                </tr>
            </thead>

            <!----------------------------------------loading Screen------------------------------------------------------------>
            <tbody>

                <div>
                    <a class="btn btn-primary active loading-button"
                        style="background-color:#0A414F; color:white; border-radius:7px; font-weight: bolder; padding:5px;"
                        href="../table with dashboard/progress.php">
                        SELECT PROJECT
                    </a>
                </div>
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const loadingScreen = document.getElementById('loading-screen');

                        document.querySelectorAll('.loading-button').forEach(button => {
                            button.addEventListener('click', function(event) {
                                event.preventDefault(); // Prevent the default link behavior
                                const href = this.getAttribute('href'); // Get the link's href

                                // Show loading screen
                                loadingScreen.style.display = 'flex';

                                // Navigate after a brief delay
                                setTimeout(() => {
                                    window.location.href = href; // Change to the target page
                                }, 3000); // Adjust the delay as needed
                            });
                        });
                    });
                </script>
                <div id="loading-screen" class="loading-screen">
                    <div class="logo-container">
                        <img src="../images for template/psa logo.png" alt="Logo" class="loading-logo" />
                        <!-- First Circle (Red) -->
                        <div class="animation-circle"></div>
                        <!-- Second Circle (Yellow) -->
                        <div class="animation-circle-yellow"></div>
                        <!-- Third Circle (Blue) -->
                        <div class="animation-circle-blue"></div>
                    </div>
                    <br>
                    <br>
                    <p class="loading-text">Please wait<span class="loading-dots">...</span></p>
                </div>
                <!----------------------------------------loading Screen------------------------------------------------------------>



                <br>
                <!-- Repeat for each category -->
                <tr>
                    <td style="font-weight: bolder; font-size:12px; width:12%;">Training/Briefing of Statistical Researchers (SRs)</td>
                    <td style="text-align: center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="jt_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align: center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="jt_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align: center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="jt_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align: center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="jt_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align: center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="jt_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align: center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="jt_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>

                </tr>

                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Collection of Data and Supervision</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="jc_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="jc_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="jc_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="jc_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="jc_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="jc_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>

                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Data Processing and Generation of Output tables</td>
                    <td style="text-align: center;"><input type="date" style="border: white; text-align:center; font-size:12px" value=" " id="jd_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align: center;"><input type="date" style="border: white; text-align:center;font-size:12px;" value=" " id="jd_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align: center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="jd_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align: center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="jd_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align: center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="jd_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align: center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="jd_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>

                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Provincial data Riview</td>
                    <td style="text-align: center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="jp_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align: center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="jp_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align: center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="jp_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align: center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="jp_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align: center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="jp_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align: center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="jp_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>

                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Submission Of PSO Required Outputs to RSSO and Crops Statistical Division</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="js_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="js_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="js_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="js_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="js_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="js_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>

                </tr>
                <th style="color: white; font-size:15px; font-weight:bolder; text-align:left; background-color:#0A414F;" colspan="7">February</th>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Training/Briefing of Statistical Reserchers (SRs)</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="ft_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="ft_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="ft_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="ft_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="ft_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="ft_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Collection of Data and Supervision</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="fc_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="fc_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="fc_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="fc_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="fc_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="fc_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Data Processing and Generation of Output tables</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="fd_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="fd_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="fd_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="fd_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="fd_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="fd_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Provincial Data Review</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="fp_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="fp_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="fp_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="fp_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="fp_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="fp_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Submission ofPSO Required Outputs to RSSO and Crops Statistical Division</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="fs_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="fs_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="fs_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="fs_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="fs_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="fs_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <th style="color: white; font-size:15px; font-weight:bolder; text-align:left; background-color:#0A414F;" colspan="7">March</th>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Training/Briefing of Statistical Reserchers (SRs)</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="mt_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="mt_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="mt_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="mt_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="mt_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="mt_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Collection of Data and Supervision</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="mcd_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="mcd_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="mcd_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="mcd_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="mcd_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="mcd_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Data Processing and Generation of Output Tables</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="md_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="md_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="md_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="md_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="md_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="md_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Provincial Data Review </td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="mp_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="mp_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="mp_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="mp_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="mp_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="mp_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Submission of PSO Required Outputs to RSSO and Crops Statistics Division</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="msp_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="msp_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="msp_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="msp_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="msp_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="msp_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:15px; font-weight:bolder; color:white; text-align:justify; background-color:lightslategrey;" colspan="7">Submission of Provincial Reports</td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Field Supervision/ Spot Check Form</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="mfs_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="mfs_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="mfs_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="mfs_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="mfs_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="mfs_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Re-interview Form</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="mr_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="mr_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="mr_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="mr_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="mr_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="mr_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Supervisor's Report</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="msr_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="msr_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="msr_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="msr_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="msr_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="msr_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Provincial Narrative Report</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="mpn_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="mpn_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="mpn_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="mpn_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="mpn_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="mpn_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Provincial Data Review</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="mpd_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="mpd_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="mpd_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="mpd_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="mpd_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="numnber" style="border: white; text-align:center; font-size:12px;" value=" " id="mpd_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Second Quarter</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="msq_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="msq_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="msq_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="msq_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="msq_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="msq_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                </tr>
                <tr>
                    <th style="color: white; font-size:15px; font-weight:bolder; text-align:left; background-color:#0A414F;" colspan="7">April</th>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Training/Briefing of Statistical Researchers(SRs)</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="apt_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="apt_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="apt_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="apt_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="apt_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="apt_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Collection of Data and Supervision</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="apc_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="apc_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="apc_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="apc_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="apc_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="apc_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Data Processingand Generation of Output Tables</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="apd_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="apd_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="apd_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="apd_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="apd_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="apd_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Provincial Data Review</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="app_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="app_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="app_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="app_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="app_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="app_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Submission of PSO Required Outputs to RSSO and Crops Statistical Division</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="aps_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="aps_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="aps_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="aps_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="aps_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="aps_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:15px; font-weight:bolder; color:white; text-align:justify; background-color:lightslategrey;" colspan="7">Submission of Provincial Reports</td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Field Supervision/ Spot Check Form</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="apf_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="apf_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="apf_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="apf_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="apf_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="apf_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Re-interview Form</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="aprf_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="aprf_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="aprf_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="aprf_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="aprf_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="aprf_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Supervisor's Report</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="apsr_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="apsr_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="apsr_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="apsr_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="apsr_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="apsr_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Provincial Narrative Report</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="appn_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="appn_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="appn_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="appn_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="appn_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="appn_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Provincial Data Review</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="appd_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="appd_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="appd_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="appd_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="appd_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="appd_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                </tr>
                <tr>
                    <th style="color: white; font-size:15px; font-weight:bolder; text-align:left; background-color:#0A414F;" colspan="7">May</th>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Training/Briefing of Statistical Researchers(SRs)</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="mayt_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="mayt_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="mayt_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="mayt_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="mayt_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="mayt_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Collection of Data and Supervision</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="mayc_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="mayc_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="mayc_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="mayc_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="mayc_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="mayc_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Data Processingand Generation of Output Tables</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="mayd_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="mayd_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="mayd_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="mayd_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="mayd_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="mayd_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Provincial Data Review</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="maypd_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="maypd_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="maypd_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="maypd_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="maypd_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="maypd_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Submission of PSO Required Outputs to RSSO and Crops Statistical Division</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="mayss_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="mayss_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="mayss_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="mayss_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="mayss_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="mayss_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:15px; font-weight:bolder; color:white; text-align:justify; background-color:lightslategrey;" colspan="7">Submission of Provincial Reports</td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Field Supervision/ Spot Check Form</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="mayfs_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="mayfs_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="myfs_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="mayfs_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="mayfs_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="mayfs_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Re-interview Form</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="mayrf_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="mayrf_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="mayrf_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="mayrf_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="mayrf_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="mayrf_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Supervisor's Report</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="maysr_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="maysr_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="maysr_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="maysr_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="maysr_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="maysr_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Provincial Narrative Report</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="maypn_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="maypn_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="maypn_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="maypn_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="maypn_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="maypn_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Provincial Data Review</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="maypdr_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="maypdr_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="maypdr_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="maypdr_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="maypdr_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="maypdr_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                </tr>
                <tr>
                    <th style="color: white; font-size:15px; font-weight:bolder; text-align:left; background-color:#0A414F;" colspan="7">June</th>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Training/Briefing of Statistical Researchers(SRs)</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="junetb_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="junetb_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="junetb_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="junetb_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="junetb_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="junetb_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Collection of Data and Supervision</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="junecd_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="junecd_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="junecd_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="junecd_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="junecd_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="junecd_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Data Processingand Generation of Output Tables</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="junedp_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="junedp_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="junedp_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="junedp_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="junedp_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="junedp_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Provincial Data Review</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="junepdr_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="junepdr_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="junedpr_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="junedpr_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="junedpr_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="junedpr_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Submission of PSO Required Outputs to RSSO and Crops Statistical Division</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="junesp_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="junesp_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="junesp_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="junesp_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="junesp_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="junesp_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:15px; font-weight:bolder; color:white; text-align:justify; background-color:lightslategrey;" colspan="7">Submission of Provincial Reports</td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Field Supervision/ Spot Check Form</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="junef_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="junef_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="junef_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="junef_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="junef_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="junef_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Re-interview Form</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="junerf_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="junerf_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="junerf_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="junerf_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="junerf_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="junerf_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Supervisor's Report</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="junesup_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="junesup_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="junesup_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="junesup_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="junesup_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="junesup_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Provincial Narrative Report</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="junepn_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="junepn_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="junepn_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="junepn_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="junepn_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="junepn_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Provincial Data Review</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="junepdr_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="junepdr_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="junepdr_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="junepdr_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="junepdr_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="junepdr_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                </tr>
                <tr>
                    <th style="color: white; font-size:15px; font-weight:bolder; text-align:left; background-color:#0A414F;" colspan="7">July</th>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Training/Briefing of Statistical Researchers(SRs)</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="jultb_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="jultb_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="jultb_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="jultb_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="jultb_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="jultb_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Collection of Data and Supervision</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="julcd_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="julcd_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="julcd_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="julcd_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="julcd_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="julcd_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Manual Editing</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="julme_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="julme_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="julme_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="julme_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="mumber" style="border: white; text-align:center; font-size:12px;" value=" " id="julme_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="julme_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Data Processingand Generation of Output Tables</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="juldp_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="juldp_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="juldp_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="juldp_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="juldp_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="juldp_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Provincial Data Review</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="julpdr_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="julpdr_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="julpdr_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="julpdr_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="julpdr_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="julpdr_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Submission of PSO Required Outputs to RSSO and Crops Statistical Division</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="julspr_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="julspr_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="julspr_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="julspr_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="julspr_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="julspr_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:15px; font-weight:bolder; color:white; text-align:justify; background-color:lightslategrey;" colspan="7">Submission of Provincial Reports</td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Field Supervision/ Spot Check Form</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="julfs_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="julfs_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="julfs_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="julfs_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="julfs_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="julfs_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Re-interview Form</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="julrf_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="julrf_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="julrf_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="julrf_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="julrf_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="julrf_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Supervisor's Report</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="julsr_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="julsr_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="julsr_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="julsr_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="julsr_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="julsr_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Provincial Narrative Report</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="julpn_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="julpn_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="julpn_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="julpn_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="julpn_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="julpn_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                </tr>

                <tr>
                    <th style="color: white; font-size:15px; font-weight:bolder; text-align:left; background-color:#0A414F;" colspan="7">August</th>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Training/Briefing of Statistical Researchers(SRs)</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="augtb_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="augtb_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="augtb_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="augtb_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="augtb_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="augtb_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Collection of Data and Supervision</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="augcd_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="augcd_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="augcd_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="augcd_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="augcd_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="augcd_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Manual Editing</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="augme_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="augme_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="augme_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="augme_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="mumber" style="border: white; text-align:center; font-size:12px;" value=" " id="augme_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="augme_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Data Processingand Generation of Output Tables</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="augdp_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="augdg_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="augdg_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="augdg_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="augdg_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="augdg_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Provincial Data Review</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="augpd_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="augpd_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="augpd_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="augpd_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="augpd_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="augpd_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Submission of PSO Required Outputs to RSSO and Crops Statistical Division</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="augspr_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="augspr_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="augspr_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="augspr_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="augspr_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="augspr_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:15px; font-weight:bolder; color:white; text-align:justify; background-color:lightslategrey;" colspan="7">Submission of Provincial Reports</td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Field Supervision/ Spot Check Form</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="augfs_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="augfs_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="augfs_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="augfs_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="augfs_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="augfs_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Re-interview Form</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="augrf_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="augrf_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="augrf_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="augrf_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="augrf_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="augrf_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Supervisor's Report</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="augsr_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="augsr_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="augsr_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="augsr_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="augsr_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="augsr_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Provincial Narrative Report</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="augpn_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="augpn_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="augpn_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="augpn_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="augpn_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="augpn_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                </tr>

                <tr>
                    <th style="color: white; font-size:15px; font-weight:bolder; text-align:left; background-color:#0A414F;" colspan="7">September</th>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Training/Briefing of Statistical Researchers(SRs)</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="septb_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="septb_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="septb_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="septb_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="septb_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="septb_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Collection of Data and Supervision</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="sepcd_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="sepcd_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="sepcd_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="sepcd_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="sepcd_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="sepcd_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Manual Editing</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="sepme_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="sepme_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="sepme_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="sepme_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="mumber" style="border: white; text-align:center; font-size:12px;" value=" " id="sepme_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="sepme_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Data Processingand Generation of Output Tables</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="sepdp_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="sepdp_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="sepdp_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="sepdp_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="sepdp_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="sepdp_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Provincial Data Review</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="seppd_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="seppd_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="seppd_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="seppd_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="seppd_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="seppd_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Submission of PSO Required Outputs to RSSO and Crops Statistical Division</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="sepsp_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="sepsp_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="sepsp_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="sepsp_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value="=" id="sepsp_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value="=" id="sepsp_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:15px; font-weight:bolder; color:white; text-align:justify; background-color:lightslategrey;" colspan="7">Submission of Provincial Reports</td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Field Supervision/ Spot Check Form</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="sepfs_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="sepfs_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="sepfs_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="sepfs_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="sepfs_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="sepfs_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Re-interview Form</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="seprf_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="seprf_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="seprf_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="seprf_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="seprf_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="seprf_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Supervisor's Report</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="sepsr_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="sepsr_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="sepsr_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="sepsr_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="sepsr_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="sepsr_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Provincial Narrative Report</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="seppn_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="seppn_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="seppn_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="seppn_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="seppn_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="seppn_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                </tr>
                <tr>
                    <th style="color: white; font-size:15px; font-weight:bolder; text-align:left; background-color:#0A414F;" colspan="7">October</th>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Training/Briefing of Statistical Researchers(SRs)</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="octtb_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="octtb_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="octtb_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="octtb_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="octtb_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="octtb_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Collection of Data and Supervision</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="octcd_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="octcd_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="octcd_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="octcd_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="octcd_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="octcd_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Data Processing and Generation of Output Tables</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="octdp_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="octdp_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="octdp_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="octdp_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="octdp_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="octdp_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Provincial Data Review</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="octpd_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="octpd_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="octpd_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="octpd_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="octpd_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="octpd_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Submission of PSO Required Outputs to RSSO and Crops Statistical Division</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="octsp_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="octsp_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="octsp_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="octsp_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="octsp_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="octsp_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:15px; font-weight:bolder; color:white; text-align:justify; background-color:lightslategrey;" colspan="7">Submission of Provincial Reports</td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Field Supervision/ Spot Check Form</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="octfs_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="octfs_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="octfs_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="octfs_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="octfs_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="oct_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Re-interview Form</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="octrf_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="octrf_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="octrf_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="octrf_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="octrf_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="octrf_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Supervisor's Report</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="octsr_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="octsr_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="octsr_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="octsr_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="octsr_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="octsr_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Provincial Narrative Report</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="octpn_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="octpn_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="octpn_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="octpn_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="octpn_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="octpn_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                </tr>

                <tr>
                    <th style="color: white; font-size:15px; font-weight:bolder; text-align:left; background-color:#0A414F;" colspan="7">November</th>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Training/Briefing of Statistical Researchers(SRs)</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="novtb_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="novtb_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="novtb_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="novtb_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="novtb_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="novtb_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Collection of Data and Supervision</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="novcd_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="novcd_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="novcd_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="novcd_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="novcd_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="novcd_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Data Processingand Generation of Output Tables</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="novdp_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="novdp_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="novdp_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="novdp_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="novdp_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="novdp_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Provincial Data Review</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="novpd_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="novpd_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="novpd_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="novpd_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="novpd_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="novpd_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Submission of PSO Required Outputs to RSSO and Crops Statistical Division</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="novsp_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="novsp_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="novsp_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="novsp_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="novsp_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="novsp_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:15px; font-weight:bolder; color:white; text-align:justify; background-color:lightslategrey;" colspan="7">Submission of Provincial Reports</td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Field Supervision/ Spot Check Form</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="novfs_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="novfs_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="novfs_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="novfs_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="novfs_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="novfs_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Re-interview Form</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="novrf_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="novrf_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="novrf_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="novrf_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="novrf_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="novrf_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Supervisor's Report</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="novsr_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="novsr_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="novsr_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="novsr_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="novsr_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="novsr_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Provincial Narrative Report</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="novpn_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="novpn_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="novpn_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="novpn_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="novpn_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="novpn_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                </tr>

                <tr>
                    <th style="color: white; font-size:15px; font-weight:bolder; text-align:left; background-color:#0A414F;" colspan="7">December</th>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Training/Briefing of Statistical Researchers(SRs)</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="dectb_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="dectb_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="dectb_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="dectb_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="dectb_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="dectb_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Collection of Data and Supervision</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="deccd_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="deccd_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="deccd_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="deccd_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="deccd_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="deccd_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Data Processingand Generation of Output Tables</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="decdp_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="decdp_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="decdp_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="decdp_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="decdp_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="decdp_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Provincial Data Review</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="decpd_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="decpd_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="decpd_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="decpd_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="decpd_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="decpd_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Submission of PSO Required Outputs to RSSO and Crops Statistical Division</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="decsp_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="decsp_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="decsp_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="decsp_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="decsp_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="decsp_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:15px; font-weight:bolder; color:white; text-align:justify; background-color:lightslategrey;" colspan="7">Submission of Provincial Reports</td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Field Supervision/ Spot Check Form</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="decfs_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="decfs_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="decfs_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="decfs_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="decfs_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="decfs_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Re-interview Form</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="rf_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="rf_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="rf_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="rf_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="rf_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="rf_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Supervisor's Report</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="spr_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="spr_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="spr_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="spr_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="spr_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="spr_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-weight:bolder;">Provincial Narrative Report</td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="pnr_1" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="pnr_2" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="date" style="border: white; text-align:center; font-size:12px;" value=" " id="pnr_3" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="text" style="border: white; text-align:center; font-size:12px;" value=" " id="pnr_4" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="pnr_5" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                    <td style="text-align:center;"><input type="number" style="border: white; text-align:center; font-size:12px;" value=" " id="pnr_6" oninput="saveData(this.id, this.value)" onchange="updateChart('laspinas')"></td>
                </tr>
                </tr>
                <br>


                <script>
                    // Function to save data to localStorage
                    function saveData(inputId, value) {
                        localStorage.setItem(inputId, value); // Save the input value in localStorage
                    }

                    // On page load, restore the values from localStorage if they exist
                    window.onload = function() {
                        const inputIds = ['jt_1', 'jt_2', 'jt_3', 'jt_4', 'jt_5', 'jt_6',
                            'jc_1', 'jc_2', 'jc_3', 'jc_4', 'jc_5', 'jc_6',
                            'jd_1', 'jd_2', 'jd_3', 'jd_4', 'jd_5', 'jd_6',
                            'jp_1', 'jp_2', 'jp_3', 'jp_4',
                            'jp_5', 'jp_6',
                            'js_1', 'js_2', 'js_3', 'js_4', 'js_5', 'js_6',
                            'ft_1', 'ft_2', 'ft_3', 'ft_4', 'ft_5',
                            'ft_6',
                            'fc_1', 'fc_2', 'fc_3', 'fc_4', 'fc_5', 'fc_6',
                            'fd_1', 'fd_2', 'fd_3', 'fd_4', 'fd_5', 'fd_6',
                            'fp_1', 'fp_2', 'fp_3', 'fp_4', 'fp_5', 'fp_6',
                            'fs_1', 'fs_2', 'fs_3', 'fs_4', 'fs_5', 'fs_6',
                            'mt_1', 'mt_2',
                            'mt_3', 'mt_4', 'mt_5', 'mt_6',
                            'mcd_1', 'mcd_2', 'mcd_3', 'mcd_4', 'mcd_5', 'mcd_6',
                            'md_1', 'md_2', 'md_3', 'md_4', 'md_5',
                            'md_6',
                            'mp_1', 'mp_2', 'mp_3', 'mp_4', 'mp_5', 'mp_6',
                            'msp_1', 'msp_2', 'msp_3', 'msp_4', 'msp_5', 'msp_6',
                            'mfs_1', 'mfs_2', 'mfs_3', 'mfs_4', 'mfs_5', 'mfs_6',
                            'mr_1', 'mr_2', 'mr_3', 'mr_4', 'mr_5', 'mr_6',
                            'msr_1', 'msr_2', 'msr_3', 'msr_4', 'msr_5', 'msr_6',
                            'mpn_1', 'mpn_2', 'mpn_3', 'mpn_4', 'mpns_5', 'mpn_6',
                            'mpd_1', 'mpd_2', 'mpd_3', , 'mpd_4',
                            'mpd_5', 'mpd_6',
                            'msq_1', 'msq_2', 'msq_3', 'msq_4', 'msq_5', 'msq_6',
                            'apt_1', 'apt_2', 'apt_3', 'apt_4', 'apt_5', 'apt_6',
                            'apc_1', 'apc_2', 'apc_3', 'apc_4', 'apc_5', 'apc_6',
                            'apd_1', 'apd_2', 'apd_3', 'apd_4',
                            'apd_5', 'apd_6',
                            'app_1', 'app_2', 'app_3', 'app_4', 'app_5', 'app_6',
                            'aps_1', 'aps_2', 'aps_3', 'aps_4', 'aps_5', 'aps_6',
                            'apf_1', 'apf_2', 'apf_3', 'apf_4', 'apf_5', 'apf_6',
                            'aprf_1', 'aprf_2', 'aprf_3', 'aprf_4', 'aprf_5', 'aprf_6',
                            'apsr_1', 'apsr_2', 'apsr_3', 'apsr_4', 'apsr_5', 'apsr_6',
                            'appn_1', 'appn_2', 'appn_3', 'appn_4', 'appn_5', 'appn_6',
                            'appd_1', 'appd_2', 'appd_3', 'appd_4', 'appd_5', 'appd_6',
                            'mayt_1', 'mayt_2', 'mayt_3', 'mayt_4', 'mayt_5', 'mayt_6',
                            'mayc_1', 'mayc_2', 'mayc_3', 'mayc_4', 'mayc_5', 'mayc_6',
                            'mayd_1', 'mayd_2', 'mayd_3', 'mayd_4', 'mayd_5', 'mayd_6',
                            'maypd_1', 'maypd_2', 'maypd_3', 'maypd_4', 'maypd_5', 'maypd_6',
                            'mayss_1', 'mayss_2', 'mayss_3', 'mayss_4', 'mayss_5', 'mayss_6',
                            'mayfs_1', 'mayfs_2', 'mayfs_3', 'mayfs_4', 'mayfs_5', 'mayfs_6',
                            'mayrf_1', 'mayrf_2', 'mayrf_3', 'mayrf_4', 'mayrf_5', 'mayrf_6',
                            'maysr_1', 'maysr_2', 'maysr_3', 'maysr_4', 'maysr_5', 'maysr_6',
                            'maypn_1', 'maypn_2', 'maypn_3', 'maypn_4', 'maypn_5', 'maypn_6',
                            'maypdr_1', 'maypdr_2', 'maypdr_3', 'maypdr_4', 'maypdr_5', 'maypdr_6',
                            'junetb_1', 'junetb_2', 'junetb_3', 'junetb_4', 'junetb_5', 'junetb_6',
                            'junecd_1', 'junecd_2', 'junecd_3', 'junecd_4', 'junecd_5', 'junecd_6',
                            'junedp_1', 'junedp_2', 'junedp_3', 'junedp_4', 'junedp_5', 'junedp_6',
                            'junepdr_1', 'junepdr_2', 'junedpr_3', 'junedpr_4', 'junedpr_5', 'junedpr_6',
                            'junesp_1', 'junesp_2', 'junesp_3', 'junesp_4', 'junesp_5', 'junesp_6',
                            'junef_1', 'junef_2', 'junef_3', 'junef_4', 'junef_5', 'junef_6',
                            'junerf_1', 'junerf_2', 'junerf_3', 'junerf_4', 'junerf_5', 'junerf_6',
                            'junesup_1', 'junesup_2', 'junesup_3', 'junesup_4', 'junesup_5', 'junesup_6',
                            'junepn_1', 'junepn_2', 'junepn_3', 'junepn_4', 'junepn_5', 'junepn_6',
                            'junepdr_1', 'junepdr_2', 'junepdr_3', 'junepdr_4', 'junepdr_5', 'junepdr_6',
                            'jultb_1', 'jultb_2', 'jultb_3', 'jultb_4', 'jultb_5', 'jultb_6',
                            'julcd_1', 'julcd_2', 'julcd_3', 'julcd_4', 'julcd_5', 'julcd_6',
                            'julme_1', 'julme_2', 'julme_3', 'julme_4', 'julme_5', 'julme_6',
                            'juldp_1', 'juldp_2', 'juldp_3', 'juldp_4', 'juldp_5', 'juldp_6',
                            'julpdr_1', 'julpdr_2', 'julpdr_3', 'julpdr_4', 'julpdr_5', 'julpdr_6',
                            'julspr_1', 'julspr_2', 'julspr_3', 'julspr_4', 'julspr_5', 'julspr_6',
                            'julfs_1', 'julfs_2', 'julfs_3', 'julfs_4', 'julfs_5', 'julfs_6',
                            'julrf_1', 'julrf_2', 'julrf_3', 'julrf_4', 'julrf_5', 'julrf_6',
                            'julsr_1', 'julsr_2', 'julsr_3', 'julsr_4', 'julsr_5', 'julsr_6',
                            'julpn_1', 'julpn_2', 'julpn_3', 'julpn_4', 'julpn_5', 'julpn_6',
                            'augtb_1', 'augtb_2', 'augtb_3', 'augtb_4', 'augtb_5', 'augtb_6',
                            'augcd_1', 'augcd_2', 'augcd_3', 'augcd_4', 'augcd_5', 'augcd_6',
                            'augme_1', 'augme_2', 'augme_3', 'augme_4', 'augme_5', 'augme_6',
                            'augdp_1', 'augdg_2', 'augdg_3', 'augdg_4', 'augdg_5', 'augdg_6',
                            'augpd_1', 'augpd_2', 'augpd_3', 'augpd_4', 'augpd_5', 'augpd_6',
                            'augspr_1', 'augspr_2', 'augspr_3', 'augspr_4', 'augspr_5', 'augspr_6',
                            'augfs_1', 'augfs_2', 'augfs_3', 'augfs_4', 'augfs_5', 'augfs_6',
                            'augrf_1', 'augrf_2', 'augrf_3', 'augrf_4', 'augrf_5', 'augrf_6',
                            'augsr_1', 'augsr_2', 'augsr_3', 'augsr_4', 'augsr_5', 'augsr_6',
                            'augpn_1', 'augpn_2', 'augpn_3', 'augpn_4', 'augpn_5', 'augpn_6',
                            'septb_1', 'septb_2', 'septb_3', 'septb_4', 'septb_5', 'septb_6',
                            'sepcd_1', 'sepcd_2', 'sepcd_3', 'sepcd_4', 'sepcd_5', 'sepcd_6',
                            'sepme_1', 'sepme_2', 'sepme_3', 'sepme_4', 'sepme_5', 'sepme_6',
                            'sepdp_1', 'sepdp_2', 'sepdp_3', 'sepdp_4', 'sepdp_5', 'sepdp_6',
                            'seppd_1', 'seppd_2', 'seppd_3', 'seppd_4', 'seppd_5', 'seppd_6',
                            'sepsp_1', 'sepsp_2', 'sepsp_3', 'sepsp_4', 'sepsp_5', 'sepsp_6',
                            'sepfs_1', 'sepfs_2', 'sepfs_3', 'sepfs_4', 'sepfs_5', 'sepfs_6',
                            'seprf_1', 'seprf_2', 'seprf_3', 'seprf_4', 'seprf_5', 'seprf_6',
                            'sepsr_1', 'sepsr_2', 'sepsr_3', 'sepsr_4', 'sepsr_5', 'sepsr_6',
                            'seppn_1', 'seppn_2', 'seppn_3', 'seppn_4', 'seppn_5', 'seppn_6',
                            'octtb_1', 'octtb_2', 'octtb_3', 'octtb_4', 'octtb_5', 'octtb_6',
                            'octcd_1', 'octcd_2', 'octcd_3', 'octcd_4', 'octcd_5', 'octcd_6',
                            'octdp_1', 'octdp_2', 'octdp_3', 'octdp_4', 'octdp_5', 'octdp_6',
                            'octpd_1', 'octpd_2', 'octpd_3', 'octpd_4', 'octpd_5', 'octpd_6',
                            'octsp_1', 'octsp_2', 'octsp_3', 'octsp_4', 'octsp_5', 'octsp_6',
                            'octfs_1', 'octfs_2', 'octfs_3', 'octfs_4', 'octfs_5', 'oct_6',
                            'octrf_1', 'octrf_2', 'octrf_3', 'octrf_4', 'octrf_5', 'octrf_6',
                            'octsr_1', 'octsr_2', 'octsr_3', 'octsr_4', 'octsr_5', 'octsr_6',
                            'octpn_1', 'octpn_2', 'octpn_3', 'octpn_4', 'octpn_5', 'octpn_6',
                            'novtb_1', 'novtb_2', 'novtb_3', 'novtb_4', 'novtb_5', 'novtb_6',
                            'novcd_1', 'novcd_2', 'novcd_3', 'novcd_4', 'novcd_5', 'novcd_6',
                            'novdp_1', 'novdp_2', 'novdp_3', 'novdp_4', 'novdp_5', 'novdp_6',
                            'novpd_1', 'novpd_2', 'novpd_3', 'novpd_4', 'novpd_5', 'novpd_6',
                            'novsp_1', 'novsp_2', 'novsp_3', 'novsp_4', 'novsp_5', 'novsp_6',
                            'novfs_1', 'novfs_2', 'novfs_3', 'novfs_4', 'novfs_5', 'novfs_6',
                            'novrf_1', 'novrf_2', 'novrf_3', 'novrf_4', 'novrf_5', 'novrf_6',
                            'novsr_1', 'novsr_2', 'novsr_3', 'novsr_4', 'novsr_5', 'novsr_6',
                            'novpn_1', 'novpn_2', 'novpn_3', 'novpn_4', 'novpn_5', 'novpn_6',
                            'dectb_1', 'dectb_2', 'dectb_3', 'dectb_4', 'dectb_5', 'dectb_6',
                            'deccd_1', 'deccd_2', 'deccd_3', 'deccd_4', 'deccd_5', 'deccd_6',
                            'decdp_1', 'decdp_2', 'decdp_3', 'decdp_4', 'decdp_5', 'decdp_6',
                            'decpd_1', 'decpd_2', 'decpd_3', 'decpd_4', 'decpd_5', 'decpd_6',
                            'decsp_1', 'decsp_2', 'decsp_3', 'decsp_4', 'decsp_5', 'decsp_6',
                            'decfs_1', 'decfs_2', 'decfs_3', 'decfs_4', 'decfs_5', 'decfs_6',
                            'rf_1', 'rf_2', 'rf_3', 'rf_4', 'rf_5', 'rf_6',
                            'spr_1', 'spr_2', 'spr_3', 'spr_4', 'spr_5', 'spr_6',
                            'pnr_1', 'pnr_2', 'pnr_3', 'pnr_4', 'pnr_5', 'pnr_6',
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