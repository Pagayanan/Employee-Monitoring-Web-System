<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CES City Monthly Target vs Actual Data</title>
    <link rel="shortcut icon" type="image/png" href="../images for template/psa logo.png">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .city-section {
            /* overflow: scroll; */
            max-width: 100vw;
            margin: 20px auto;
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

        .image-size {
            width: 45px;
            height: 45px;
            vertical-align: middle;
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
    <img src="../table with dashboard/images for dashboard/psa logo.png" alt="Logo 1">
    <div style="font-size:medium; font-weight:bolder" class="logo-text">Republic of the Philippines<br>
        PHILIPPINE STATISTICS AUTHORITY<br>
        Regional Statistical Service Office<br>
        National Capital Region-Provincial Statistical Office V</div>
    <img src="../table with dashboard/images for dashboard/logph.png" alt="Logo 2">
</div>
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
        <a style="background-color: cadetblue; color:white; font-weight: bolder; padding:5px" href="ces_ncr_v.php" class="btn btn-primary active">NCR-V</a>
    </div>

    <div>
        <a style="background-color: #0A414F; color:white; font-weight: bolder; padding:5px" href="ces_laspiñas.php" class="btn btn-primary active">LAS PIÑAS CITY</a>
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
    <h2 style="text-align:center">NCR-V</h2>
    <div>
        <a style="background-color:#0A414F; color:white; border-radius:7px; font-weight: bolder; padding:5px" href="../table with dashboard/progress.php " class="btn btn-primary active">SELECT PROJECT</a>
    </div>
    <!-- City Section for Las Piñas -->
    <div class="city-header" style="font-weight: bolder;background-color:teal; width:100%">Consumer Expectations Survey</div>
    <div class="chart-container">
        <canvas id="overallcesChart"></canvas>
    </div>
    <script>
        Chart.register(ChartDataLabels);

        function updateChart(city) {
            const months = ['jan', 'apr', 'jul', 'oct'];
            const categories = ['overall'];

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
                    labels: ['January', 'April', 'July', 'October'],
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
            const months = ['jan', 'apr', 'jul', 'oct'];
            const categories = ['overall', ];

            categories.forEach((category, index) => {
                const targetData = months.map(month => loadFromLocalStorage(city, month, category, 'target'));
                const actualData = months.map(month => loadFromLocalStorage(city, month, category, 'actual'));


                cityCharts[city].data.datasets[index * 2].data = targetData;
                cityCharts[city].data.datasets[index * 2 + 1].data = actualData;
            });

            cityCharts[city].update();
        }


        createChart('overallces', 'overallcesChart');
    </script>
    <div class="city-section" id="laspinas-section">
        <table>
            <thead>
                <tr>
                    <th style="color: white;"></th>
                    <th style="color: white; font-size: 12px;" colspan="3">JANUARY</th>
                    <th style="color: white; font-size: 12px;" colspan="3">APRIL</th>
                    <th style="color: white; font-size: 12px;" colspan="3">JULY</th>
                    <th style="color: white; font-size: 12px;" colspan="3">OCTOBER</th>

                </tr>
                <tr>
                    <th style="color: white; font-size:12px;">Deliverables</th>
                    <th style="color: white; font-size:12px;">Target</th>
                    <th style="color: white; font-size:12px;">Actual</th>
                    <th style="color: white; font-size:12px;">Remarks</th>
                    <th style="color: white; font-size:12px;">Target</th>
                    <th style="color: white; font-size:12px;">Actual</th>
                    <th style="color: white; font-size:12px;">Remarks</th>
                    <th style="color: white; font-size:12px;">Target</th>
                    <th style="color: white; font-size:12px;">Actual</th>
                    <th style="color: white; font-size:12px;">Remarks</th>
                    <th style="color: white; font-size:12px;">Target</th>
                    <th style="color: white; font-size:12px;">Actual</th>
                    <th style="color: white; font-size:12px;">Remarks</th>

                </tr>
            </thead>
            <tbody>
                <br>
                <!-- Repeat for each category -->
                <tr>
                    <td style="font-weight: bolder; font-size:15px;">OVERALL</td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="overallces-jan-overall-target" oninput="checkValues('overallces-jan-overall-target', 'overallces-jan-overall-actual', 'overallces-jan-overall-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <input type="mumber" style="border: white; text-align:center;" id="overallces-jan-overall-actual" oninput="checkValues('overallces-jan-overall-target', 'overallces-jan-overall-actual', 'overallces-jan-overall-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <div id="overallces-jan-overall-remarks"></div>
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="overallces-apr-overall-target" oninput="checkValues('overallces-apr-overall-target', 'overallces-apr-overall-actual', 'overallces-apr-overall-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <input type="mumber" style="border: white; text-align:center;" id="overallces-apr-overall-actual" oninput="checkValues('overallces-apr-overall-target', 'overallces-apr-overall-actual', 'overallces-apr-overall-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <div id="overallces-apr-overall-remarks"></div>
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="overallces-jul-overall-target" oninput="checkValues('overallces-jul-overall-target', 'overallces-jul-overall-actual', 'overallces-jul-overall-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="overallces-jul-overall-actual" oninput="checkValues('overallces-jul-overall-target', 'overallces-jul-overall-actual', 'overallces-jul-overall-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <div id="overallces-jul-overall-remarks"></div>
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="overallces-oct-overall-target" oninput="checkValues('overallces-oct-overall-target', 'overallces-oct-overall-actual', 'overallces-oct-overall-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="overallces-oct-overall-actual" oninput="checkValues('overallces-oct-overall-target', 'overallces-oct-overall-actual', 'overallces-oct-overall-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <div id="overallces-oct-overall-remarks"></div>
                    </td>

                </tr>

                <tr>
                    <td style="font-size:15px; font-weight:bolder;">LAS PIÑAS</td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="overallces-jan-lp-target" oninput="checkValues('overallces-jan-lp-target', 'overallces-jan-lp-actual', 'overallces-jan-lp-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <input type="mumber" style="border: white; text-align:center;" id="overallces-jan-lp-actual" oninput="checkValues('overallces-jan-lp-target', 'overallces-jan-lp-actual', 'overallces-jan-lp-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <div id="overallces-jan-lp-remarks"></div>
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="overallces-apr-lp-target" oninput="checkValues('overallces-apr-lp-target', 'overallces-apr-lp-actual', 'overallces-apr-lp-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <input type="mumber" style="border: white; text-align:center;" id="overallces-apr-lp-actual" oninput="checkValues('overallces-apr-lp-target', 'overallces-apr-lp-actual', 'overallces-apr-lp-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <div id="overallces-apr-lp-remarks"></div>
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="overallces-jul-lp-target" oninput="checkValues('overallces-jul-lp-target', 'overallces-jul-lp-actual', 'overallces-jul-lp-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="overallces-jul-lp-actual" oninput="checkValues('overallces-jul-lp-target', 'overallces-jul-lp-actual', 'overallces-jul-lp-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <div id="overallces-jul-lp-remarks"></div>
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="overallces-oct-lp-target" oninput="checkValues('overallces-oct-lp-target', 'overallces-oct-lp-actual', 'overallces-oct-lp-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="overallces-oct-lp-actual" oninput="checkValues('overallces-oct-lp-target', 'overallces-oct-lp-actual', 'overallces-oct-lp-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <div id="overallces-oct-lp-remarks"></div>
                    </td>

                </tr>
                <tr>
                    <td style="font-size:15px; font-weight:bolder;">MUNTINLUPA</td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="overallces-jan-mc-target" oninput="checkValues('overallces-jan-mc-target', 'overallces-jan-mc-actual', 'overallces-jan-mc-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <input type="mumber" style="border: white; text-align:center;" id="overallces-jan-mc-actual" oninput="checkValues('overallces-jan-mc-target', 'overallces-jan-mc-actual', 'overallces-jan-mc-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <div id="overallces-jan-mc-remarks"></div>
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="overallces-apr-mc-target" oninput="checkValues('overallces-apr-mc-target', 'overallces-apr-mc-actual', 'overallces-apr-mc-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <input type="mumber" style="border: white; text-align:center;" id="overallces-apr-mc-actual" oninput="checkValues('overallces-apr-mc-target', 'overallces-apr-mc-actual', 'overallces-apr-mc-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <div id="overallces-apr-mc-remarks"></div>
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="overallces-jul-mc-target" oninput="checkValues('overallces-jul-mc-target', 'overallces-jul-mc-actual', 'overallces-jul-mc-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="overallces-jul-mc-actual" oninput="checkValues('overallces-jul-mc-target', 'overallces-jul-mc-actual', 'overallces-jul-mc-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <div id="overallces-jul-mc-remarks"></div>
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="overallces-oct-mc-target" oninput="checkValues('overallces-oct-mc-target', 'overallces-oct-mc-actual', 'overallces-oct-mc-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="overallces-oct-mc-actual" oninput="checkValues('overallces-oct-mc-target', 'overallces-oct-mc-actual', 'overallces-oct-mc-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <div id="overallces-oct-mc-remarks"></div>
                    </td>

                </tr>
                <tr>
                    <td style="font-size:15px; font-weight:bolder;">PARAÑAQUE</td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="overallces-jan-pq-target" oninput="checkValues('overallces-jan-pq-target', 'overallces-jan-pq-actual', 'overallces-jan-pq-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <input type="mumber" style="border: white; text-align:center;" id="overallces-jan-pq-actual" oninput="checkValues('overallces-jan-pq-target', 'overallces-jan-pq-actual', 'overallces-jan-pq-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <div id="overallces-jan-pq-remarks"></div>
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="overallces-apr-pq-target" oninput="checkValues('overallces-apr-pq-target', 'overallces-apr-pq-actual', 'overallces-apr-pq-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <input type="mumber" style="border: white; text-align:center;" id="overallces-apr-pq-actual" oninput="checkValues('overallces-apr-pq-target', 'overallces-apr-pq-actual', 'overallces-apr-pq-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <div id="overallces-apr-pq-remarks"></div>
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="overallces-jul-pq-target" oninput="checkValues('overallces-jul-pq-target', 'overallces-ju-pq-actual', 'overallces-jul-pq-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="overallces-jul-pq-actual" oninput="checkValues('overallces-jul-pq-target', 'overallces-jul-pq-actual', 'overallces-jul-pq-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <div id="overallces-jul-pq-remarks"></div>
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="overallces-oct-pq-target" oninput="checkValues('overallces-oct-pq-target', 'overallces-oct-pq-actual', 'overallces-oct-pq-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="overallces-oct-pq-actual" oninput="checkValues('overallces-oct-pq-target', 'overallces-oct-pq-actual', 'overallces-oct-pq-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <div id="overallces-oct-pq-remarks"></div>
                    </td>
                </tr>
                <tr>
                    <td style="font-size:15px; font-weight:bolder;">PASAY</td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="overallces-jan-pc-target" oninput="checkValues('overallces-jan-pc-target', 'overallces-jan-pc-actual', 'overallces-jan-pc-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <input type="mumber" style="border: white; text-align:center;" id="overallces-jan-pc-actual" oninput="checkValues('overallces-jan-pc-target', 'overallces-jan-pc-actual', 'overallces-jan-pc-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <div id="overallces-jan-pc-remarks"></div>
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="overallces-apr-pc-target" oninput="checkValues('overallces-apr-pc-target', 'overallces-apr-pc-actual', 'overallces-apr-pc-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <input type="mumber" style="border: white; text-align:center;" id="overallces-apr-pc-actual" oninput="checkValues('overallces-apr-pc-target', 'overallces-apr-pc-actual', 'overallces-apr-pc-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <div id="overallces-apr-pc-remarks"></div>
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="overallces-jul-pc-target" oninput="checkValues('overallces-jul-pc-target', 'overallces-jul-pc-actual', 'overallces-jul-pc-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="overallces-jul-pc-actual" oninput="checkValues('overallces-jul-pc-target', 'overallces-jul-pc-actual', 'overallces-jul-pc-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <div id="overallces-jul-pc-remarks"></div>
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="overallces-oct-pc-target" oninput="checkValues('overallces-oct-pc-target', 'overallces-oct-pc-actual', 'overallces-oct-pc-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="overallces-oct-pc-actual" oninput="checkValues('overallces-oct-pc-target', 'overallces-oct-pc-actual', 'overallces-oct-pc-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <div id="overallces-oct-pc-remarks"></div>
                    </td>
                </tr>
            </tbody>
    </div>
    <!-- ANOTHER TABLE FOR THE DELIVERABLE (RAW DATA, CLEAN DATA, NARRATIVE REPORT, FINANCIAL REPORT, UPDATED SSU List, OBSERVATION REPORT AND RE-INTERVIEW) -->


    <div class="city-section2" id="laspinas-section">
        <table>
            <thead>
                <tr>
                    <th style="color: white;"></th>
                    <th style="color: white; font-size: 12px;" colspan="3">JANUARY</th>
                    <th style="color: white; font-size: 12px;" colspan="3">APRIL</th>
                    <th style="color: white; font-size: 12px;" colspan="3">JULY</th>
                    <th style="color: white; font-size: 12px;" colspan="3">OCTOBER</th>

                </tr>
                <tr>
                    <th style="color: white; font-size:12px;">Deliverables</th>
                    <th style="color: white; font-size:12px;">Target</th>
                    <th style="color: white; font-size:12px;">Actual</th>
                    <th style="color: white; font-size:12px;">Remarks</th>
                    <th style="color: white; font-size:12px;">Target</th>
                    <th style="color: white; font-size:12px;">Actual</th>
                    <th style="color: white; font-size:12px;">Remarks</th>
                    <th style="color: white; font-size:12px;">Target</th>
                    <th style="color: white; font-size:12px;">Actual</th>
                    <th style="color: white; font-size:12px;">Remarks</th>
                    <th style="color: white; font-size:12px;">Target</th>
                    <th style="color: white; font-size:12px;">Actual</th>
                    <th style="color: white; font-size:12px;">Remarks</th>

                </tr>
            </thead>
            <tbody>
                <br>
                <!-- Repeat for each category -->
                <tr>
                    <td style="font-weight: bolder; font-size:15px;">Clean Data Files</td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="overallces-jan-cleandatafiles-target" oninput="checkValues('overallces-jan-cleandatafiles-target', 'overallces-jan-cleandatafiles-actual', 'overallces-jan-cleandatafiles-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <input type="mumber" style="border: white; text-align:center;" id="overallces-jan-cleandatafiles-actual" oninput="checkValues('overallces-jan-cleandatafiles-target', 'overallces-jan-cleandatafiles-actual', 'overallces-jan-cleandatafiles-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <div id="overallces-jan-cleandatafiles-remarks"></div>
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="overallces-apr-cleandatafiles-target" oninput="checkValues('overallces-apr-cleandatafiles-target', 'overallces-apr-cleandatafiles-actual', 'overallces-apr-cleandatafiles-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <input type="mumber" style="border: white; text-align:center;" id="overallces-apr-cleandatafiles-actual" oninput="checkValues('overallces-apr-cleandatafiles-target', 'overallces-apr-cleandatafiles-actual', 'overallces-apr-cleandatafiles-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <div id="overallces-apr-cleandatafiles-remarks"></div>
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="overallces-jul-cleandatafiles-target" oninput="checkValues('overallces-jul-cleandatafiles-target', 'overallces-jul-cleandatafiles-actual', 'overallces-jul-cleandatafiles-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="overallces-jul-cleandatafiles-actual" oninput="checkValues('overallces-jul-cleandatafiles-target', 'overallces-jul-cleandatafiles-actual', 'overallces-jul-cleandatafiles-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <div id="overallces-jul-cleandatafiles-remarks"></div>
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="overallces-oct-cleandatafiles-target" oninput="checkValues('overallces-oct-cleandatafiles-target', 'overallces-oct-cleandatafiles-actual', 'overallces-oct-cleandatafiles-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="overallces-oct-cleandatafiles-actual" oninput="checkValues('overallces-oct-cleandatafiles-target', 'overallces-oct-cleandatafiles-actual', 'overallces-oct-cleandatafiles-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <div id="overallces-oct-cleandatafiles-remarks"></div>
                    </td>
                </tr>
                <tr>
                    <td style="font-size:15px; font-weight:bolder;">Narrative Report</td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="overallces-jan-narrative-target" oninput="checkValues('overallces-jan-narrative-target', 'overallces-jan-narrative-actual', 'overallces-jan-narrative-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <input type="mumber" style="border: white; text-align:center;" id="overallces-jan-narrative-actual" oninput="checkValues('overallces-jan-narrative-target', 'overallces-jan-narrative-actual', 'overallces-jan-narrative-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <div id="overallces-jan-narrative-remarks"></div>
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="overallces-apr-narrative-target" oninput="checkValues('overallces-apr-narrative-target', 'overallces-apr-narrative-actual', 'overallces-apr-narrative-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <input type="mumber" style="border: white; text-align:center;" id="overallces-apr-narrative-actual" oninput="checkValues('overallces-apr-narrative-target', 'overallces-apr-narrative-actual', 'overallces-apr-narrative-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <div id="overallces-apr-narrative-remarks"></div>
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="overallces-jul-narrative-target" oninput="checkValues('overallces-jul-narrative-target', 'overallces-jul-narrative-actual', 'overallces-jul-narrative-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="overallces-jul-narrative-actual" oninput="checkValues('overallces-jul-narrative-target', 'overallces-jul-narrative-actual', 'overallces-jul-narrative-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <div id="overallces-jul-narrative-remarks"></div>
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="overallces-oct-narrative-target" oninput="checkValues('overallces-oct-narrative-target', 'overallces-oct-narrative-actual', 'overallces-oct-narrative-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="overallces-oct-narrative-actual" oninput="checkValues('overallces-oct-narrative-target', 'overallces-oct-narrative-actual', 'overallces-oct-narrative-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <div id="overallces-oct-narrative-remarks"></div>
                    </td>

                </tr>
                <tr>
                    <td style="font-size:15px; font-weight:bolder;">Financial Report</td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="overallces-jan-financial-target" oninput="checkValues('overallces-jan-financial-target', 'overallces-jan-financial-actual', 'overallces-jan-financial-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="overallces-jan-financial-actual" oninput="checkValues('overallces-jan-financial-target', 'overallces-jan-financial-actual', 'overallces-jan-financial-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <div id="overallces-jan-financial-remarks"></div>
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="overallces-apr-financial-target" oninput="checkValues('overallces-apr-financial-target', 'overallces-apr-financial-actual', 'overallces-apr-financial-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="overallces-apr-financial-actual" oninput="checkValues('overallces-apr-financial-target', 'overallces-apr-financial-actual', 'overallces-apr-financial-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <div id="overallces-apr-financial-remarks"></div>
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="overallces-jul-financial-target" oninput="checkValues('overallces-jul-financial-target', 'overallces-jul-financial-actual', 'overallces-jul-financial-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="overallces-jul-financial-actual" oninput="checkValues('overallces-jul-financial-target', 'overallces-jul-financial-actual', 'overallces-jul-financial-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <div id="overallces-jul-financial-remarks"></div>
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="overallces-oct-financial-target" oninput="checkValues('overallces-oct-financial-target', 'overallces-oct-financial-actual', 'overallces-oct-financial-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="overallces-oct-financial-actual" oninput="checkValues('overallces-oct-financial-target', 'overallces-oct-financial-actual', 'overallces-oct-financial-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <div id="overallces-oct-financial-remarks"></div>
                    </td>
                </tr>
                <tr>
                    <td style="font-size:15px; font-weight:bolder;">Updated SSU List</td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="overallces-jan-updated-target" oninput="checkValues('overallces-jan-updated-target', 'overallces-jan-updated-actual', 'overallces-jan-updated-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <input type="mumber" style="border: white; text-align:center;" id="overallces-jan-updated-actual" oninput="checkValues('overallces-jan-updated-target', 'overallces-jan-updated-actual', 'overallces-jan-updated-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <div id="overallces-jan-updated-remarks"></div>
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="overallces-apr-updated-target" oninput="checkValues('overallces-apr-updated-target', 'overallces-apr-updated-actual', 'overallces-apr-updated-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <input type="mumber" style="border: white; text-align:center;" id="overallces-apr-updated-actual" oninput="checkValues('overallces-apr-updated-target', 'overallces-apr-updated-actual', 'overallces-apr-updated-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <div id="overallces-apr-updated-remarks"></div>
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="overallces-jul-updated-target" oninput="checkValues('overallces-jul-updated-target', 'overallces-jul-updated-actual', 'overallces-jul-updated-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="overallces-jul-updated-actual" oninput="checkValues('overallces-jul-updated-target', 'overallces-jul-updated-actual', 'overallces-jul-updated-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <div id="overallces-jul-updated-remarks"></div>
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="overallces-oct-updated-target" oninput="checkValues('overallces-oct-updated-target', 'overallces-oct-updated-actual', 'overallces-oct-updated-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="overallces-oct-updated-actual" oninput="checkValues('overallces-oct-updated-target', 'overallces-oct-updated-actual', 'overallces-oct-updated-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <div id="overallces-oct-updated-remarks"></div>
                    </td>

                    <!-- FOR TESTING SIDE -->
                </tr>
                <tr>
                    <td style="font-size:15px; font-weight:bolder; text-wrap:nowrap;">Observation Report and Re-Interview List</td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="overallces-jan-observation-target" oninput="checkValues('overallces-jan-observation-target', 'overallces-jan-observation-actual', 'overallces-jan-observation-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <input type="mumber" style="border: white; text-align:center;" id="overallces-jan-observation-actual" oninput="checkValues('overallces-jan-observation-target', 'overallces-jan-observation-actual', 'overallces-jan-observation-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <div id="overallces-jan-observation-remarks"></div>
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="overallces-apr-observation-target" oninput="checkValues('overallces-apr-observation-target', 'overallces-apr-observation-actual', 'overallces-apr-observation-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <input type="mumber" style="border: white; text-align:center;" id="overallces-apr-observation-actual" oninput="checkValues('overallces-apr-observation-target', 'overallces-apr-observation-actual', 'overallces-apr-observation-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <div id="overallces-apr-observation-remarks"></div>
                    </td>

                    <td>
                        <input type="number" style="border: white; text-align:center;" id="overallces-jul-observation-target" oninput="checkValues('overallces-jul-observation-target', 'overallces-jul-observation-actual', 'overallces-jul-observation-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="overallces-jul-observation-actual" oninput="checkValues('overallces-jul-observation-target', 'overallces-jul-observation-actual', 'overallces-jul-observation-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <div id="overallces-jul-observation-remarks"></div>
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="overallces-oct-observation-target" oninput="checkValues('overallces-oct-observation-target', 'overallces-oct-observation-actual', 'overallces-oct-observation-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <input type="number" style="border: white; text-align:center;" id="overallces-oct-observation-actual" oninput="checkValues('overallces-oct-observation-target', 'overallces-oct-observation-actual', 'overallces-oct-observation-remarks')" onchange="updateChart('overallces')">
                    </td>
                    <td>
                        <div id="overallces-oct-observation-remarks"></div>
                    </td>
                </tr>
            </tbody>
            <script>
                window.onload = function() {
                    loadData('overallces-jan-overall-target', 'overallces-jan-overall-actual', 'overallces-jan-overall-remarks');
                    loadData('overallces-apr-overall-target', 'overallces-apr-overall-actual', 'overallces-apr-overall-remarks');
                    loadData('overallces-jul-overall-target', 'overallces-jul-overall-actual', 'overallces-jul-overall-remarks');
                    loadData('overallces-oct-overall-target', 'overallces-oct-overall-actual', 'overallces-oct-overall-remarks');


                    loadData('overallces-jan-lp-target', 'overallces-jan-lp-actual', 'overallces-jan-lp-remarks');
                    loadData('overallces-apr-lp-target', 'overallces-apr-lp-actual', 'overallces-apr-lp-remarks');
                    loadData('overallces-jul-lp-target', 'overallces-jul-lp-actual', 'overallces-jul-lp-remarks');
                    loadData('overallces-oct-lp-target', 'overallces-oct-lp-actual', 'overallces-oct-lp-remarks');


                    loadData('overallces-jan-mc-target', 'overallces-jan-mc-actual', 'overallces-jan-mc-remarks');
                    loadData('overallces-apr-mc-target', 'overallces-apr-mc-actual', 'overallces-apr-mc-remarks');
                    loadData('overallces-jul-mc-target', 'overallces-jul-mc-actual', 'overallces-jul-mc-remarks');
                    loadData('overallces-oct-mc-target', 'overallces-oct-mc-actual', 'overallces-oct-mc-remarks');


                    loadData('overallces-jan-pq-target', 'overallces-jan-pq-actual', 'overallces-jan-pq-remarks');
                    loadData('overallces-apr-pq-target', 'overallces-apr-pq-actual', 'overallces-apr-pq-remarks');
                    loadData('overallces-jul-pq-target', 'overallces-jul-pq-actual', 'overallces-jul-pq-remarks');
                    loadData('overallces-oct-pq-target', 'overallces-oct-pq-actual', 'overallces-oct-pq-remarks');


                    loadData('overallces-jan-pc-target', 'overallces-jan-pc-actual', 'overallces-jan-pc-remarks');
                    loadData('overallces-apr-pc-target', 'overallces-apr-pc-actual', 'overallces-apr-pc-remarks');
                    loadData('overallces-jul-pc-target', 'overallces-jul-pc-actual', 'overallces-jul-pc-remarks');
                    loadData('overallces-oct-pc-target', 'overallces-oct-pc-actual', 'overallces-oct-pc-remarks');

                    ///////////////////////////////////////SECOND TABLE//////////////////////////////////////////

                    loadData('overallces-jan-cleandatafiles-target', 'overallces-jan-cleandatafiles-actual', 'overallces-jan-cleandatafiles-remarks');
                    loadData('overallces-apr-cleandatafiles-target', 'overallces-apr-cleandatafiles-actual', 'overallces-apr-cleandatafiles-remarks');
                    loadData('overallces-jul-cleandatafiles-target', 'overallces-jul-cleandatafiles-actual', 'overallces-jul-cleandatafiles-remarks');
                    loadData('overallces-oct-cleandatafiles-target', 'overallces-oct-cleandatafiles-actual', 'overallces-oct-cleandatafiles-remarks');

                    loadData('overallces-jan-narrative-target', 'overallces-jan-narrative-actual', 'overallces-jan-narrative-remarks');
                    loadData('overallces-apr-narrative-target', 'overallces-apr-narrative-actual', 'overallces-apr-narrative-remarks');
                    loadData('overallces-jul-narrative-target', 'overallces-jul-narrative-actual', 'overallces-jul-narrative-remarks');
                    loadData('overallces-oct-narrative-target', 'overallces-oct-narrative-actual', 'overallces-oct-narrative-remarks');

                    loadData('overallces-jan-financial-target', 'overallces-jan-financial-actual', 'overallces-jan-financial-remarks');
                    loadData('overallces-apr-financial-target', 'overallces-apr-financial-actual', 'overallces-apr-financial-remarks');
                    loadData('overallces-jul-financial-target', 'overallces-jul-financial-actual', 'overallces-jul-financial-remarks');
                    loadData('overallces-oct-financial-target', 'overallces-oct-financial-actual', 'overallces-oct-financial-remarks');

                    loadData('overallces-jan-updated-target', 'overallces-jan-updated-actual', 'overallces-jan-updated-remarks');
                    loadData('overallces-apr-updated-target', 'overallces-apr-updated-actual', 'overallces-apr-updated-remarks');
                    loadData('overallces-jul-updated-target', 'overallces-jul-updated-actual', 'overallces-jul-updated-remarks');
                    loadData('overallces-oct-updated-target', 'overallces-oct-updated-actual', 'overallces-oct-updated-remarks');

                    loadData('overallces-jan-observation-target', 'overallces-jan-observation-actual', 'overallces-jan-observation-remarks');
                    loadData('overallces-apr-observation-target', 'overallces-apr-observation-actual', 'overallces-apr-observation-remarks');
                    loadData('overallces-jul-observation-target', 'overallces-jul-observation-actual', 'overallces-jul-observation-remarks');
                    loadData('overallces-oct-observation-target', 'overallces-oct-observation-actual', 'overallces-oct-observation-remarks');



                };

                function checkValues(targetId, actualId, remarksId) {
                    const targetValue = parseFloat(document.getElementById(targetId).value);
                    const actualValue = parseFloat(document.getElementById(actualId).value);
                    const remarksField = document.getElementById(remarksId);
                    if (!isNaN(targetValue) && !isNaN(actualValue) && targetValue !== 0) {
                        const gap = ((targetValue - actualValue) / targetValue) * 100;
                        if (actualValue > targetValue) {
                            remarksField.innerHTML = '<img src="../table with dashboard/images for dashboard/images/above target percentage.gif" alt="Star Face" class="image-size"/>';
                            saveData(remarksId, remarksField.innerHTML);
                        } else if (actualValue === targetValue) {
                            remarksField.innerHTML = '<img src="../table with dashboard/images for dashboard/images/same percentage to the target column.gif" alt="Happy Face" class="image-size"/>';
                            saveData(remarksId, remarksField.innerHTML);
                        } else if (gap >= 1 && gap < 2) {

                            remarksField.innerHTML = '<img src="../table with dashboard/images for dashboard/images/2%gap below in target percentage.gif" alt="Sad Face" class="image-size"/>';
                            saveData(remarksId, remarksField.innerHTML);
                        } else if (gap >= 2 && gap < 3) {
                            remarksField.innerHTML = '<img src="../table with dashboard/images for dashboard/images/2%gap below in target percentage.gif" alt="Sad Face" class="image-size"/>';
                            saveData(remarksId, remarksField.innerHTML);
                        } else if (gap >= 3) {
                            remarksField.innerHTML = '<img src="../table with dashboard/images for dashboard/images/crying.gif" alt="Crying Face" class="image-size"/>';
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


</body>

</html>