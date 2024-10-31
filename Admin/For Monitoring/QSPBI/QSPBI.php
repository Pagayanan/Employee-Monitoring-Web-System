<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QSPBI PORGRESS MONITORING REPORT</title>
    <link rel="shortcut icon" type="image/png" href="../images for template/psa logo.png">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .city-section {
            overflow: scroll;
            max-width: 100vw;
            margin-top: none;
            /* margin: ; */
            width: 100%;
        }

        table {
            border-color: aliceblue;
            width: 100%;
            margin-bottom: 20px;
            border-collapse: collapse;
            border-radius: 20px;
        }

        table,
        th,
        td {
            border-color: aliceblue;
            border: 2px solid #26211e;
            padding: 8px;
            text-align: center;
        }

        th {
            border-color: aliceblue;
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
<br>
<br>
<br>
<div class="button-container">
    <div>
        <a style="background-color: #0A414f; color:white; font-weight: bolder; padding:5px" href="#" class="btn btn-primary active">NCR-V</a>
    </div>

    <div>
        <a style="background-color: cadetblue; color:white; font-weight: bolder; padding:5px" href="#" class="btn btn-primary active">LAS PIÑAS CITY</a>
    </div>

    <br>

    <div>
        <a style="background-color: #0A414F; color:white; font-weight:bolder; padding:5px" href="#" class="btn btn-primary">MUNTINLUPA CITY</a>
    </div>

    <br>

    <div>
        <a style="background-color: #0a414f; color:white; font-weight:bolder; padding:5px" href="#" class="btn btn-primary">PARAÑAQUE CITY</a>
    </div>

    <br>

    <div>
        <a style="background-color: #0a414f; color:white; font-weight:bolder; padding:5px" href="#" class="btn btn-primary">PASAY CITY</a>
    </div>

</div>

<body>

    <div id="form_table" class="form-container" style="display:none;">
        <h2>Data Entry Form</h2>

        <div class="form-group">
            <label for="city/employee">City/Employee</label>
            <input type="text" id="city/employee" placeholder="Enter City or Employee Name">
        </div>
        <div class="form-group">
            <label for="ecn">ECN</label>
            <input type="number" id="ecn" placeholder="Enter ECN">
        </div>
        <div class="form-group">
            <label for="priority">Priority Indicator (0-PRIO, 1-NONPRIO)</label>
            <input type="number" id="priority" placeholder="Enter Priority Indicator">
        </div>
        <div class="form-group">
            <label for="establishment">Establishment Name</label>
            <input type="text" id="establishment" placeholder="Enter Establishment Name">
        </div>
        <div class="form-group">
            <label for="contact">Contact Person</label>
            <input type="text" id="contact" placeholder="Enter Contact Person's Name">
        </div>
        <div class="form-group">
            <label for="Mobileno">Mobile No.</label>
            <input type="number" id="Mobileno" placeholder="Enter Mobile Number">
        </div>
        <div class="form-group">
            <label for="Telphone">Tel Phone No.</label>
            <input type="number" id="Telphone" placeholder="Enter Telephone Number">
        </div>
        <div class="form-group">
            <label for="Email">Email Address</label>
            <input type="email" id="Email" placeholder="Enter Email Address">
        </div>
        <div class="form-group">
            <label for="othercontact">Other Contacts (Messenger)</label>
            <input type="text" id="othercontact" placeholder="Enter Other Contact Methods">
        </div>
        <div class="form-group">
            <label for="Distribution">Distribution Date</label>
            <input type="date" id="distribution" placeholder="Enter Distribution Date">
        </div>
        <div class="form-group">
            <label for="days10dc">10 Days (Data Collected)</label>
            <input type="number" id="days10dc" placeholder="Data Collected (10 Days)">
        </div>
        <div class="form-group">
            <label for="days10per">10 Days (%)</label>
            <input type="number" id="days10per" placeholder="Percentage (10 Days)">
        </div>
        <div class="form-group">
            <label for="days28dc">28 Days (Data Collected)</label>
            <input type="number" id="days28dc" placeholder="Data Collected (28 Days)">
        </div>
        <div class="form-group">
            <label for="days28per">28 Days (%)</label>
            <input type="number" id="days28per" placeholder="Percentage (28 Days)">
        </div>
        <div class="form-group">
            <label for="days60dc">60 Days (Data Collected)</label>
            <input type="date" id="days60dc" placeholder="Data Collected (60 Days)">
        </div>
        <div class="form-group">
            <label for="days60per">60 Days (%)</label>
            <input type="number" id="days60per" placeholder="Percentage (60 Days)">
        </div>
        <div class="form-group">
            <label for="days75dc">75 Days (Data Collected)</label>
            <input type="number" id="days75dc" placeholder="Data Collected (75 Days)">
        </div>
        <div class="form-group">
            <label for="days75per">75 Days (%)</label>
            <input type="number" id="days75per" placeholder="Percentage (75 Days)">
        </div>
        <div class="form-group">
            <label for="days88dc">Beyond 88 Days (Data Collected)</label>
            <input type="number" id="days88dc" placeholder="Data Collected (Beyond 88 Days)">
        </div>
        <div class="form-group">
            <label for="days88per">Beyond 88 Days (%)</label>
            <input type="number" id="days88per" placeholder="Percentage (Beyond 88 Days)">
        </div>
        <div class="form-group">
            <label for="totaldc">Total (Data Collected)</label>
            <input type="number" id="totaldc" placeholder="Total Data Collected">
        </div>
        <div class="form-group">
            <label for="totalper">Total (%)</label>
            <input type="number" id="totalper" placeholder="Total Percentage">
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <input type="text" id="status" placeholder="STATUS">
        </div>
        <button onclick="addRow()">Add Row</button>
        <button onclick="saveEdit()" style="display:none;">Save Edit</button>
        <button onclick="hideForm()">Cancel</button>
    </div>

    <!-- City Section for Las Piñas -->
    <div>
        <a style="background-color:#0A414F; color:white; border-radius:7px; font-weight: bolder; padding:5px;" href="../table with dashboard/progress.php" class="btn btn-primary active;">SELECT PROJECT</a>
    </div>
    <br>
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
                    <th style="color: black; background-color:lightcyan; font-size:30px; border-color:darkslategrey;" colspan="42">QSPBI</th>
                </tr>
                <tr>
                    <th style="color: white;" colspan="24">2024 2nd Quarter</th>
                    <!-- <th style="color: white;"></th>
                    <th style="color: white; font-size:8px;" scope="col" colspan="2">Total</th>
                    <th style="color: black; background-color:lightgray; font-size:12px;" scope="col" colspan="12">Face To Face (Interview Status)</th>
                    <th style="color: black; background-color:lightgray; font-size:12px;" scope="col" colspan="9">Code 9</th>
                    <th style="color: black; background-color:chocolate; font-size: 12px;" colspan="4">Telephone Interview (Interview Status)</th>
                    <th style="color: white;" colspan="11"></th> -->
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
                    <th></th>
                    <th style="color: white; font-size:8px; border-color:aliceblue" scope="col"></th>
                    <th style="color: white; font-size:8px; border-color:aliceblue" scope="col"></th>
                    <th style="color: white; font-size:8px; border-color:aliceblue" scope="col"></th>
                    <th style="color: white; font-size:8px; border-color:aliceblue" scope="col"></th>
                    <th style="color: white; font-size:8px; border-color:aliceblue" scope="col"></th>
                    <th style="color: white; font-size:8px; border-color:aliceblue" scope="col"></th>
                    <th style="color: white; font-size:8px; border-color:aliceblue" scope="col"></th>
                    <th style="color: white; font-size:8px; border-color:aliceblue" scope="col"></th>
                    <th style="color: white; font-size:8px; border-color:aliceblue" scope="col"></th>
                    <th style="color: white; font-size:12px; border-color:aliceblue; font-weight:bold;" scope="col" colspan="10">COLLECTION DATE</th>
                    <th style="color: white; font-size:8px; border-color:aliceblue; font-size:12px; font-weight:bolder;" scope="col" colspan="2">TOTAL</th>
                    <th></th>
                    <th></th>
                    <!-- <th style="color: black; background-color: yellowgreen; font-size:8px;" scope="col">
                        <p style="color: red; font-size:smaller;">STATUS</p>
                    </th> -->
                    <!-- <th style="color: white; font-size:8px;" scope="col">Address Not a Housing Unit<br>With Replacement<br>
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
                    <th style="color: black; background-color:cornflowerblue; font-size:8px;" scope="col">Remarks</th> -->
                    <!-- Add sub-headers for more months -->
                </tr>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th style="color: white;" colspan="2">10 days<br>(Target Date: July 10)</th>
                    <th style="color: white;" colspan="2">28 days<br>(Target Date: July 28)</th>
                    <th style="color: white;" colspan="2">60 days<br>(Target Date: August 30)</th>
                    <th style="color: white;" colspan="2">75 days<br>(Target Date: September 15)</th>
                    <th style="color: white;" colspan="2">beyond 88 days</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>

                </tr>
                <tr>
                    <th style="color:white; font-size:10px; font-weight:bolder; " scope="col">CITY/EMPLOYEE</th>
                    <th style="color:white; font-size:10px; font-weight:bolder; border-color:aliceblue" scope="col">ECN</th>
                    <th style="color: white; font-size:10px; font-weight:bolder; border-color:aliceblue" scope="col">PRIORITY INDICATOR<br>(0-PRIO, <br> 1-NONPRIO)</th>
                    <th style="color: white; font-size:10px;font-weight:bolder; border-color:aliceblue" scope="col">ESTABLISHMENT NAME</th>
                    <th style="color: white; font-size:10px; border-color:aliceblue; font-weight:bolder;" scope="col">CONTACT PERSON</th>
                    <th style="color: white; font-size:10px; border-color:aliceblue; font-weight:bolder;" scope="col">Mobile NO.</th>
                    <th style="color: white;  font-size:10px; border-color:aliceblue" scope="col">Tel Phone NO.</th>
                    <th style="color: white;  font-size:10px; border-color:aliceblue" scope="col">Email Address</th>
                    <th style="color: white; font-size:10px;" scope="col">OTHER CONTACTS<br>(messenger)</th>
                    <th style="color: white; font-size:10px; border-color:aliceblue" scope="col">DISTRIBUTION DATE</th>
                    <th style="color:white;">Data Collected</th>
                    <th style="color: white;">%</th>
                    <th style="color: white;">Data Collected</th>
                    <th style="color: white;">%</th>
                    <th style="color: white;">Data Collected</th>
                    <th style="color: white;">%</th>
                    <th style="color: white;">Data Collected</th>
                    <th style="color: white;">%</th>
                    <th style="color: white;">Data Collected</th>
                    <th style="color: white;">%</th>
                    <th style="color: white;">Data Collected</th>
                    <th style="color:white;">%</th>
                    <th style="color:white; font-size:medium;">STATUS</th>
                    <th style="color:white; font-size:medium;">ACTION</th>
                </tr>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
    <!----------------------------------------------------------------------------------------------------------------------------------->
    <!------------------------------------------------STYLE FOR FORM -------------------------------------------------------------------->
    <!----------------------------------------------------------------------------------------------------------------------------------->
    <style>
        .form-container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"],
        input[type="email"],
        input[type="date"] {
            width: calc(100% - 10px);
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        button {
            padding: 10px 15px;
            border: none;
            border-radius: 3px;
            background-color: #007BFF;
            color: white;
            cursor: pointer;
            margin-right: 10px;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
    <!----------------------------------------------------------------------------------------------------------------------------------->
    <!------------------------------------------------STYLE FOR FORM -------------------------------------------------------------------->
    <!----------------------------------------------------------------------------------------------------------------------------------->

    <button onclick="showForm()">Add Row</button>
    </table>
    <script>
        let currentRow = null;

        function showForm() {
            document.getElementById('form_table').style.display = 'block';
            clearForm();
        }


        function hideForm() {
            document.getElementById('form_table').style.display = 'none';   
        }

        function clearForm() {
            document.getElementById('city/employee').value = '';
            document.getElementById('ecn').value = '';
            document.getElementById('priority').value = '';
            document.getElementById('establishment').vlaue = '';
            document.getElementById('contact').value = '';
            document.getElementById('Mobileno').value = '';
            document.getElementById('Email').value = '';
            document.getElementById('othercontact').value = '';
            document.getElementById('distribution').value = '';
            document.getElementById('days10dc').value = '';
            document.getElementById('days10per').value = '';
            document.getElementById('days28dc').value = '';
            document.getElementById('days28per').value = '';
            document.getElementById('days60dc').value = '';
            document.getElementById('days60per').value = '';
            document.getElementById('days75dc').value = '';
            document.getElementById('days75per').value = '';
            document.getElementById('days88dc').value ='';
            document.getElementById('days88per').value = '';
            document.getElementById('totaldc').value = '';
            document.getElementById('totalper').vlaue = '';
            document.getElementById('status').value = '';
            currentRow = null;
        }
        
        function addRow() {   
            const cityemployee = document.getElementById('city/employee').value;
            const Ecn = document.getElementById('ecn').value;
            const priority = document.getElementById('priority').value;
            const Establishment = document.getElementById('establishment').value;
            const Contact_person = document.getElementById('contact').value;
            const Mobileno = document.getElementById('Mobileno').value;
            const Telphone =  document.getElementById('Telphone').value;
            const Email = document.getElementById('Email').value;
            const othercontact = document.getElementById('othercontact').value;
            const Distribution = document.getElementById('distribution').value;
            const days10dc = document.getElementById('days10dc').value;
            const days10per = document.getElementById('days10per').value;
            const days28dc = document.getElementById('days28dc').value;
            const days28per = document.getElementById('days28per').value;
            const days60dc = document.getElementById('days60dc').value;
            const days60per = document.getElementById('days60per').value;
            const days75dc = document.getElementById('days75dc').value;
            const days75per = document.getElementById('days75per').value;
            const days88dc = document.getElementById('days88dc').value;
            const days88per = document .getElementById('days88per').value;
            const totaldc = document.getElementById('totaldc').value;
            const totalper = document.getElementById('totalper').value;
            const status = document.getElementById('status').value;

            const table = document.getElementById('report-table').getElementsByTagName('tbody')[0];

            const newRow = table.insertRow();
            newRow.insertCell(0).innerHTML  = cityemployee;
            newRow.insertCell(1).innerHTML = Ecn;
            newRow.insertCell(2).innerHTML = priority;
            newRow.insertCell(3).innerHTML = Establishment;
            newRow.insertCell(4).innerHTML = Contact_person;
            newRow.insertCell(5).innerHTML = Mobileno;
            newRow.insertCell(6).innerHTML = Telphone;
            newRow.insertCell(7).innerHTML = Email;
            newRow.insertCell(8).innerHTML = othercontact;
            newRow.insertCell(9).innerHTML = Distribution;
            newRow.insertCell(10).innerHTML = days10dc;
            newRow.insertCell(11).innerHTML = days10per;
            newRow.insertCell(12).innerHTML = days28dc;
            newRow.insertCell(13).innerHTML = days28per;
            newRow.insertCell(14).innerHTML = days60dc;
            newRow.insertCell(15).innerHTML = days60per;
            newRow.insertCell(16).innerHTML = days75dc;
            newRow.insertCell(17).innerHTML = days75per;
            newRow.insertCell(18).innerHTML = days88dc;
            newRow.insertCell(19).innerHTML = days88per;
            newRow.insertCell(20).innerHTML = totaldc;
            newRow.insertCell(21).innerHTML = totalper;
            newRow.insertCell(22).innerHTML = status;

            hideForm();
            saveToLocalStorage();
        }

    function editRow(button) {
        currentRow = button.parentElement.parentELement;
        const cityEmployee = currentRow.cells[0].querySelector.innerText;
        const Ecn = currentRow.cells[1].innerText;
        const priority = currentRow.cells[2].innerText;
        const Establishment = currentRow.cells[3].innerText;
        const Contact_person = currentRow.cells[4].innerText;
        const Mobileno = currentRow.cells[5].innerText;
        const Telphone = currentRow.cells[6].innerText;
        const Email = currentRow.cells[7].innerText;
        const othercontact = currentRow.cells[8].innerText;
        const Distribution = currentRow.cells[9].innerText;
        const days10dc = currentRow.cells[10].innerText;
        const days10per = currentRow.cells[11].innerText;
        const days28dc = currentRow.cells[12].innerText;
        const days28per = currentRow.cells[13].innerText;
        const days60dc = currentRow.cells[14].innerText;
        const days60per = currentRow.cells[15].innerText;
        const days75dc = currentRow.cells[16].innerText;
        const days75per = currentRow.cells[17].innerText;
        const days88dc = currentRow.cells[18].innerText;
        const days88per = currentRow.cell[19].innerText;
        const totaldc = currentRow.cell[20].innerText;
        const totalper = currentRow.cell[21].innerText;
        const status = currentRow.cell[22].innerText;

        document.getElementById('city/employee').value = cityemployee;
        document.getElementById('ecn').value = Ecn ;
        document.getElementById('priority').value = priority;
        document.getElementById('establishment').value = Establishment;
        document.getElementById('contact').value = Contact_person;
        document.getElementById('Mobileno').value = Mobileno;
        document.getElementById('Telphone').value = Telphone;
        document.getElementById('Email').value = Email;
        document.getElementById('otherrcontact').value = othercontact;
        document.getElementById('distribution').value = Distribution;
        document.getElementById('days10dc').value = days10dc;
        document.getElementById('days10per').value = days10per;
        document.getElementById('days28dc').value = days28dc;
        document.getElementById('days28per').value = days28per;
        document.getElementById('days60dc').value = days60dc;
        document.getElementById('days60per').value = days60per;
        document.getElementById('days75dc').value = days75dc;
        document.getElementById('days75per').value = days75per;
        document.getElementById('days88dc').value = days88dc;
        document.getElementById('days88per').value = days88per;
        document.getElementById('totaldc').value = totaldc;
        document.getElementById('totalper').value = totalper;

        document.getElementById('form_table').style.display = 'block';
        document.querySelector('button[onclick="addRow()"]').style.display = 'none';
        document.querySelector('button[onclick=saveEdit()"]').style.display = 'inline';
    }
    function saveEdit(){
        if (!currentRow) return;
        const cityname =document.getElementById('city/employee').value;
        const Ecn = document.getElementById('ecn').value;
        const priority = document.getELmeentById('priority').value;
        const Establishment =document.getElementById('establishment').value;
        const Contact_person = document.getElementById('contact').value;
        const Mobileno = document.getElementById('Mobileno').value;
        const Telphone = document.getElementById('Telphone').value;
        const Email = document.getElementById('Email').value;
        const othercontact = document.getElementById('othercontact').value;
        const Distribution = document.getElementById('distribution').value;
        const days10dc = document.getElementById('days10dc').value;
        const days10per = document.getElementById('days10per').value;
        const days28dc = document.getElementById('days28dc').value;
        const days28per = document.getElementById('days28per').value;
        const days60dc = document.getElementById('days60dc').value;
        const days60per = document.getElementById('days60per').value;
        const days75dc = document.getElementById('days75dc').value;
        const days75per = document.getElementById('days75per').value;
        const days88dc = document.getElementById('days88dc').value;
        const days88per = document.getElementById('days88per').value;
        const totaldc = document.getElementById('totaldc').value;
        const totalper = document.getElementById('totalper').value;

        currentRow.cells[0].innerHTML = cityname;
        currentRow.cells[1].innerHTML = Ecn;
        currentRow.cells[2].inenrHTML = priority;
        currentRow.cells[3].innerHTML = Establishment;
        currentRow.cells[4].innerHTML = contact;
        currentRow.cells[5].inenrHTML = Mobileno;
        currentRow.cells[6].innerHTML = Telphone;
        currentRow.cells[7].inneHTML = Email;
        currentRow.cells[8].innerHTML = othercontact;
        currentRow.cells[9].innerHTML = Distribution;
        currentRow.cells[10].innerHTML = days10dc;
        currentRow.cells[11].innerHTML = days10per;
        currentRow.cells[12].innerHTML = days28dc;
        currentRow.cells[13].innerHTML = days28per;
        currentRow.cells[14].inenrHTML = days60dc;
        currentRow.cells[15].innerHTML = days60per;
        currentRow.cells[16].innerHTML = days75dc;
        currentRow.cells[17].innerHTML = days75per;
        currentRow.cells[18].innerHTML = days88dc;
        currentRow.cells[19].innerHTML = days88per;
        currentRow.cells[20].innerHTML = totaldc;
        currentRow.cells[21].innerHTML = totalper;
        currentRow.cells[22].innerHTML = status;
        
        hideForm();
        saveToLocalStorage();
        currentRow = null;
    }
    function deleteRow(button){
        const row = button.parentElement.parentElement;
        row.parentElement.removeChild(row);
        saveToLocalStorage();
    }
    function saveToLocalStorage(){
        const table = document.getElementById("report-table").getElementsByTagName('tbody')[0];
        const rows = Array.from(table.rows).map(row => ({
            cityemployee: row.cells[0].querySelector.innerText,
            Ecn: row.cells[1].innerText,
            priority: row.cells[2].innerText,
            Establishment: row.cells[3].innerText,
            Contact_person: row.cells[4].innerText,
            Mobileno: row.cells[5].innerText,
            Telphone: row.cells[6].innerText,
            Email: row.cells[7].innerText,
            othercontact: row.cells[8].innerText,
            Distribution: row.cells[9].innerText,
            days10dc: row.cells[10].innerText,
            days10per: row.cells[11].innerText,
            days28dc: row.cells[12].innerText,
            days28per: row.cells[13].innerText,
            days60dc: row.cells[14].innerText,
            days60per: row.cells[15].innerText,
            days75dc: row.cells[16].innerText,
            days75per: row.cells[17].innerText,
            days88dc: row.cells[18].innerText,
            days88per: row.cells[19].innerText,
            totaldc: row.cells[20].innerText,
            totalper: row.cells[21].innerText,
            status: row.cells[22].innerText
        }));
        localStorage.setItem('tableData',JSON.stringify(rows));
    }
    function loadFromLocalStorage(){
        const storedData = JSON.parse(localStorage.getItem('tabledata')) || [];
        storedData.forEach(data => addRowFromData(data));
    }

    function addRowFromData(data){
        const table = document.getElementById("report-table").getElementByTagName('tbody')[0];
        const newRow = table.insertRow();

        newRow.insertCell(0).innerHTML = data.cityemployee;
        newRow.insertCell(1).innerHTML = data.Ecn;
        newRow.insertCell(2).innerHTML = data.priority;
        newRow.insertCell(3).innerHTML = data.Establishment;
        newRow.insertCell(4).innerHTML = data.Contact_person;
        newRow.insertCell(5).innerHTML = data.Mobileno;
        newRow.insertCell(6).innerHTML = data.Telphone;
        newRow.insertCell(7).innerHTML = data.Email;
        newRow.insertCell(8).innerHTML = data.othercontact;
        newRow.insertCell(9).innerHTML = data.Distribution;
        newRow.insertCell(10).innerHTML = data.days10dc;
        newRow.insertCell(11).innerHTML = data.days10per;
        newRow.insertCell(12).innerHTML = data.days28dc;
        newRow.insertCell(13).innerHTML = data.days28per;
        newRow.insertCell(14).innerHTML = data.days60dc;
        newRow.insertCell(15).innerHTML = data.days60per;
        newRow.insertCell(16).innerHTML = data.days75dc;
        newRow.insertCell(17).innerHTML = data.days75per;
        newRow.insertCell(18).innerHTML = data.days88dc;
        newRow.insertCell(19).innerHTML = data.days88per;
        newRow.insertCell(20).innerHTML = data.totaldc;
        newRow.insertCell(21).innerHTML = data.totalper;
        newRow.insertCell(22).innerHTML = data.status;
        newRow.insertCell(23).innerHTML = `<button onclick="editRow(this)">Edit</button><button onclick="deleteRow(this)">Delete</button>`;
    }
    window.onload = loadFromLocalStorage;
    
    </script>

    <!-- <script>
        function addRow() {
            var table = document.getElementById("report-table").getElementsByTagName('tbody')[0];
            var newRow = table.insertRow();

            var cityCell = newRow.insertCell(0);
            var ecnCell = newRow.insertCell(1);
            var prioCell = newRow.insertCell(2);
            var establishmentCell = newRow.insertCell(3);
            var contactCell = newRow.insertCell(4);
            var mobilenoCell = newRow.insertCell(5);
            var telCell = newRow.insertCell(6);
            var emailCell = newRow.insertCell(7);
            var othercontactCell = newRow.insertCell(8);
            var ddCell = newRow.insertCell(9);
            var tendcCell = newRow.insertCell(10);
            var tenpercentCell = newRow.insertCell(11);
            var twoeightdcCell = newRow.insertCell(12);
            var twoeightpercentCell = newRow.insertCell(13);
            var sixdcCell = newRow.insertCell(14);
            var sixpercentCell = newRow.insertCell(15);
            var sevenfdcCell = newRow.insertCell(16);
            var sevenfCell = newRow.insertCell(17);
            var beyond88dcCell = newRow.insertCell(18);
            var beyond88perCell = newRow.insertCell(19);
            var tdcCell = newRow.insertCell(20);
            var tpercentCell = newRow.insertCell(21);
            var statusCell = newRow.insertCell(22);

            // Insert input fields into each cell
            cityCell.innerHTML = `
    <div style="display: flex; align-items: center; width: 100%;">
        <input type="text" placeholder="" style="flex: 1; min-width: 80px; background-color: lightyellow; border: 1px solid #ccc; padding: 2px; margin-right: 5px;"
               onfocus="this.nextElementSibling.style.display='block';" 
               onblur="setTimeout(() => { if (!this.nextElementSibling.matches(':hover')) this.nextElementSibling.style.display='none'; }, 100);">
        <input type="color" id="colorPicker" value="#ffff99" style="padding: 0; border: none; display: none;"
               onmouseover="this.style.display='block';"
               onmouseout="setTimeout(() => { if (!this.parentElement.querySelector('input[type=text]').matches(':focus')) this.style.display='none'; }, 100);">
    </div>
`;

            cityCell.querySelector('input[type="color"]').addEventListener('input', function() {
                cityCell.querySelector('input[type="text"]').style.backgroundColor = this.value;
            });




            ecnCell.innerHTML = '<input type="number" placeholder="" style="width: 60px; padding: 2px; border: 1px solid #ccc;">';
            prioCell.innerHTML = '<input type="number" placeholder="" style="width: 60px; padding: 2px; border: 1px solid #ccc;">';
            establishmentCell.innerHTML = '<input type="number" placeholder="" style="width: 60px; padding: 2px; border: 1px solid #ccc;">';
            contactCell.innerHTML = '<input type="number" placeholder="" style="width: 60px; padding: 2px; border: 1px solid #ccc;">';
            mobilenoCell.innerHTML = '<input type="number" placeholder="" style="width: 60px; padding: 2px; border: 1px solid #ccc;">';
            telCell.innerHTML = '<input type="number" placeholder="" style="width: 60px; padding: 2px; border: 1px solid #ccc;">';
            emailCell.innerHTML = '<input type="email" placeholder="" style="width: 60px; padding: 2px; border: 1px solid #ccc;">';
            othercontactCell.innerHTML = '<input type="number" placeholder="" style="width: 60px; padding: 2px; border: 1px solid #ccc;">';
            ddCell.innerHTML = '<input type="number" placeholder="" style="width: 60px; padding: 2px; border: 1px solid #ccc;">';
            tendcCell.innerHTML = '<input type="number" placeholder="" style="width: 60px; padding: 2px; border: 1px solid #ccc;">';
            tenpercentCell.innerHTML = '<input type="number" placeholder="" style="width: 60px; padding: 2px; border: 1px solid #ccc;">';
            twoeightdcCell.innerHTML = '<input type="number" placeholder="" style="width: 60px; padding: 2px; border: 1px solid #ccc;">';
            twoeightpercentCell.innerHTML = '<input type="number" placeholder="" style="width: 60px; padding: 2px; border: 1px solid #ccc;">';
            sixdcCell.innerHTML = '<input type="number" placeholder="" style="width: 60px; padding: 2px; border: 1px solid #ccc;">';
            sixpercentCell.innerHTML = '<input type="number" placeholder="" style="width: 60px; padding: 2px; border: 1px solid #ccc;">';
            sevenfdcCell.innerHTML = '<input type="number" placeholder="" style="width: 60px; padding: 2px; border: 1px solid #ccc;">';
            sevenfCell.innerHTML = '<input type="number" placeholder="" style="width: 60px; padding: 2px; border: 1px solid #ccc;">';
            beyond88dcCell.innerHTML = '<input type="number" placeholder="" style="width: 60px; padding: 2px; border: 1px solid #ccc;">';
            beyond88perCell.innerHTML = '<input type="number" placeholder="" style="width: 60px; padding: 2px; border: 1px solid #ccc;">';
            tdcCell.innerHTML = '<input type="number" placeholder="" style="width: 60px; padding: 2px; border: 1px solid #ccc;">';
            tpercentCell.innerHTML = '<input type="number" placeholder="" style="width: 60px; padding: 2px; border: 1px solid #ccc;">';
            statusCell.innerHTML = '<input type="number" placeholder="" style="width: 60px; padding: 2px; border: 1px solid #ccc;">';
        }
    </script> -->


    <!-- <div class="chart-container">
        <canvas id="fiesChart"></canvas>
    </div> -->
    <!------------------------------------------------------------------------------------------------------------------------>
    <!----------------------------------------------------------- LOCAL STORAGE FUNCTIONALITY---------------------------------->
    <!------------------------------------------------------------------------------------------------------------------------>
    <!-- <script>
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
    </script> -->
    <!------------------------------------------------------------------------------------------------------------------------>
    <!----------------------------------------------------------- LOCAL STORAGE FUNCTIONALITY---------------------------------->
    <!------------------------------------------------------------------------------------------------------------------------>


    <!-- <script>
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
    </script> -->