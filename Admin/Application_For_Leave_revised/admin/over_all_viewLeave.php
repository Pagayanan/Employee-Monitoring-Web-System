<?php
require_once "../../../Config/config.php";
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$currentMonthName = date('F');
// echo $currentMonthName;


$currentYear = date('Y');
// echo $currentYear;


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application for Leave</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 14px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
            background-color: #f2f2f2;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            font-size: 11px;
        }

        th {
            background-color: #0056b3;
            color: white;
            border: 1px solid white;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        td,
        tr {
            border: 1px solid gray;
        }

        /* ===============convert csv button */
        .convert-button {
            background-color: #ffc107;
            /* Yellow color */
            color: black;
            border: none;
            padding: 8px 16px;
            font-size: 14px;
            cursor: pointer;
            border-radius: 4px;
        }

        .convert-button:hover {
            background-color: #ffca28;
            /* Lighter shade of yellow */
        }

        /* =============================== */
      

        .button-container a {
            display: inline-block;
            width: calc(20% - 10px);
            /* Adjust the width as needed */
            margin: 5px;
            background-color: #007bff;
            /* Blue theme */
            border: none;
            color: white;
            text-align: center;
            padding: 10px;
            text-decoration: none;
            font-size: 16px;
            border-radius: 5px;
        }

        .button-container a:hover {
            background-color: #0056b3;
            /* Darker blue on hover */
        }

        /* ====================== for the selection for months */

        /* Style for the dropdown container */
        .dropdown {
            position: sticky;
            top: 0;
            z-index: 1000;
            /* Ensure it appears above other content */
            background-color: transparent;
            /* Make the background transparent */
        }

        /* Style for the button */
        .dropdown .dropbtn {
            background-color: #00bfff;
            /* Vibrant blue color */
            color: white;
            padding: 8px 10px;
            /* Reduced padding */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            /* Reduced font size */
        }


        /* Style for the dropdown content */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        /* Style for the links inside the dropdown */
        .dropdown-content a {
            color: #333;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        /* Style for when the link is hovered */
        .dropdown-content a:hover {
            background-color: #f0f0f0;
        }

        /* Show the dropdown content when hovering over the button */
        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>

<body>

    <div class="button-container">
        <a href="index_Leave.php">Back</a>
        <!-- <a href="personalPass.php">Personal Pass Form</a> -->

    </div>




    <?php




    ?>
    <br>
    <button class="convert-button" data-table-id="SumTable">Convert Table to CSV</button>
    <table id="SumTable" data-table-reference="SumTable">
       
        <tr>
            <th rowspan="2">Name of Employee</th>
            <th colspan="7">Type of Leave</th>
            <!-- <th>Vacation</th>
        <th>NO.</th>
        <th>Forced</th>
        <th>NO.</th>
        <th>SICK</th>
        <th>TOTAL</th> -->
            <th colspan="2">Tardiness</th>
            <!-- <th>Total Mins.</th> -->
            <th colspan="2">Undertime</th>
            <!-- <th>Total Mins.</th> -->
            <th rowspan="2">Personal Pass(Total Mins.)</th>
            <th rowspan="2">Social leave, Maternity leave, Paternity leave, Solo parent, RA9262</th>
            <th rowspan="2">Compensatory Day-Off(CNA)</th>
            <th rowspan="2">Remarks (Indicate dates of VL,SL,FL and no. of days, hours and minutes w/o pay- if any)</th>
        </tr>
        <tr>
            <!-- <th>Name of Employee</th> -->
            <th>NO.</th>
            <th>Vacation</th>
            <th>NO.</th>
            <th>Forced</th>
            <th>NO.</th>
            <th>SICK</th>
            <th>TOTAL</th>
            <th>No. of Times</th>
            <th>Total Mins.</th>
            <th>No. of Times</th>
            <th>Total Mins.</th>
            <!-- <th>Personal Pass(Total Mins.)</th> -->
            <!-- <th>Social leave, Maternity leave, Paternity leave, Solo parent, RA9262</th> -->
            <!-- <th>Compensatory Day-Off(CNA)</th> -->
            <!-- <th>Remarks (Indicate dates of VL,SL,FL and no. of days, hours and minutes w/o pay- if any)</th> -->
        </tr>
        <?php
        // $sql = "SELECT DISTINCT surname, firstname, nameextension, middlename FROM appli_for_lev_type_of_leave WHERE MONTH(date) = $m AND YEAR(date) = YEAR(CURRENT_DATE())";
        $sql = "SELECT DISTINCT surname, firstname, name_extension, middle_name FROM employeeid";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($rows = $result->fetch_assoc()) {
        ?>
                <tr>
                    <!-- name 1st -->
                    <td><?php echo $rows['surname'] . ", " . $rows['firstname'] . " " . $rows['name_extension'] . " " . substr($rows['middle_name'], 0, 1) . "."; ?></td>
                    <!-- 2nd  -->
                    <td>
                        <?php
                        $sql_inner2 = "SELECT sum(numDays) as total FROM appli_for_lev_type_of_leave WHERE  YEAR(date) = YEAR(CURRENT_DATE()) AND  middlename = '{$rows['middle_name']}' AND surname = '{$rows['surname']}' AND nameextension = '{$rows['name_extension']}' AND firstname = '{$rows['firstname']}' AND typeofleave = 'Vacation';";
                        $result_inner2 = $conn->query($sql_inner2);
                        // echo $sql_inner2;

                        if ($result_inner2->num_rows > 0) {
                            while ($inner_rows = $result_inner2->fetch_assoc()) {
                                $totl = $inner_rows['total'];
                                if ($totl == 0) {
                                    $total = 0;
                                }
                                echo '<div style="">';
                                echo $totl;
                                echo '</div>';
                            }
                        }
                        ?></td>
                    <!-- 3rd -->
                    <td>
                        <?php
                        $sql_inner = "SELECT * FROM appli_for_lev_type_of_leave WHERE  YEAR(date) = YEAR(CURRENT_DATE()) AND surname = '{$rows['surname']}' AND  middlename = '{$rows['middle_name']}' AND nameextension = '{$rows['name_extension']}' AND firstname = '{$rows['firstname']}' AND typeofleave = 'Vacation'; ";
                        $result_inner = $conn->query($sql_inner);

                        if ($result_inner->num_rows > 0) {
                            while ($inner_rows = $result_inner->fetch_assoc()) {
                                echo '<div>';
                                echo date('F',strtotime($inner_rows['date'])).'&nbsp;(';
                                echo $inner_rows['specificDates'];
                                echo ') ';
                                echo '</div>';
                            }
                        }
                        ?>
                    </td>
                    <!-- 4th -->
                    
                        <?php
                        $sql_inner = "SELECT sum(numDays) as total FROM appli_for_lev_type_of_leave WHERE  YEAR(date) = YEAR(CURRENT_DATE()) AND surname = '{$rows['surname']}' AND  middlename = '{$rows['middle_name']}' AND nameextension = '{$rows['name_extension']}' AND firstname = '{$rows['firstname']}' AND typeofleave = 'Forced'; ";
                        $result_inner = $conn->query($sql_inner);

                        if ($result_inner->num_rows > 0) {
                            while ($inner_rows = $result_inner->fetch_assoc()) {
                                $totl = $inner_rows['total'];
                                $Color = '';
                                if ($totl == 0) {
                                    $total = 0;
                                }elseif($totl >= 5){
                                    $Color = 'background-color:red;color:white;';
                                }
                                echo '<td style="'.$Color.';">';
                                echo $totl;
                                echo '</td>';
                            }
                        }
                        ?>
                   
                    <!-- 5th -->
                    <td>
                        <?php
                        $sql_inner = "SELECT * FROM appli_for_lev_type_of_leave WHERE  surname = '{$rows['surname']}' AND YEAR(date) = YEAR(CURRENT_DATE()) AND  middlename = '{$rows['middle_name']}' AND nameextension = '{$rows['name_extension']}' AND firstname = '{$rows['firstname']}' AND typeofleave = 'Forced'; ";
                        $result_inner = $conn->query($sql_inner);

                        if ($result_inner->num_rows > 0) {
                            while ($inner_rows = $result_inner->fetch_assoc()) {
                                echo '<div>';
                                echo date('F',strtotime($inner_rows['date'])).'&nbsp;(';
                                echo $inner_rows['specificDates'];
                                echo ') ';
                                echo '</div>';
                            }
                        }
                        ?>
                    </td>
                    <!-- 6th -->
                   
                        <?php
                        $sql_inner = "SELECT sum(numDays) as total FROM appli_for_lev_type_of_leave WHERE  YEAR(date) = YEAR(CURRENT_DATE()) AND surname = '{$rows['surname']}' AND  middlename = '{$rows['middle_name']}' AND nameextension = '{$rows['name_extension']}' AND firstname = '{$rows['firstname']}' AND typeofleave = 'Sick'; ";
                        $result_inner = $conn->query($sql_inner);

                        if ($result_inner->num_rows > 0) {
                            while ($inner_rows = $result_inner->fetch_assoc()) {
                                $totl = $inner_rows['total'];
                                $Color = '';
                                if ($totl == 0) {
                                    $total = 0;
                                }
                                // elseif($totl >= 5){
                                //     $Color = 'background-color:red;color:white;';
                                // }
                                echo '<td style="'.$Color.';">';
                                echo $totl;
                                echo '</td>';
                            }
                        }
                        ?>
                     
                    <!-- 7th -->
                    <td>
                        <?php
                        $sql_inner2 = "SELECT * FROM appli_for_lev_type_of_leave WHERE  YEAR(date) = YEAR(CURRENT_DATE()) AND surname = '{$rows['surname']}' AND  middlename = '{$rows['middle_name']}' AND nameextension = '{$rows['name_extension']}' AND firstname = '{$rows['firstname']}' AND typeofleave = 'Sick'  ";
                        $result_inner = $conn->query($sql_inner2);

                        if ($result_inner->num_rows > 0) {
                            while ($inner_rows = $result_inner->fetch_assoc()) {
                                echo '<div>';
                                echo date('F',strtotime($inner_rows['date'])).'&nbsp;(';
                                echo $inner_rows['specificDates'];
                                echo ') ';
                                echo '</div>';
                            }
                        }
                        ?>
                    </td>
                    <!-- 8th -->
                    <td>
                        <?php
                        $sql_inner2 = "SELECT SUM(numDays) as total FROM appli_for_lev_type_of_leave WHERE  YEAR(date) = YEAR(CURRENT_DATE()) AND  middlename = '{$rows['middle_name']}' AND  (typeofleave = 'Vacation' OR typeofleave = 'Forced' OR typeofleave = 'Sick') AND surname = '{$rows['surname']}' AND nameextension = '{$rows['name_extension']}' AND firstname = '{$rows['firstname']}';";
                        $result_inner2 = $conn->query($sql_inner2);

                        if ($result_inner2->num_rows > 0) {
                            while ($inner_rows = $result_inner2->fetch_assoc()) {
                                echo $inner_rows['total'];
                            }
                        }
                        ?>


                    </td>
                    <!-- 9th -->
                    <td>
                        <?php
                        $sql_inner = "SELECT SUM(numOfTimes) AS Num_Times FROM appli_for_lev_tardiness WHERE  surname = '{$rows['surname']}' AND  middlename = '{$rows['middle_name']}' AND nameextension = '{$rows['name_extension']}' AND firstname = '{$rows['firstname']}' AND `year` = '$currentYear';";
                        // echo $sql_inner;
                        $result_inner = $conn->query($sql_inner);

                        if ($result_inner->num_rows > 0) {
                            while ($inner_rows = $result_inner->fetch_assoc()) {
                                echo $inner_rows['Num_Times'];
                            }
                        }
                        ?>
                    </td>
                    <!-- 10th -->
                    <td>
                        <?php
                        $sql_inner = "SELECT SUM(numMinutes) AS Num_Minutes FROM appli_for_lev_tardiness WHERE  surname = '{$rows['surname']}' AND  middlename = '{$rows['middle_name']}' AND nameextension = '{$rows['name_extension']}' AND firstname = '{$rows['firstname']}' AND `year` = '$currentYear';";
                        // echo $sql_inner;
                        $result_inner = $conn->query($sql_inner);

                        if ($result_inner->num_rows > 0) {
                            while ($inner_rows = $result_inner->fetch_assoc()) {
                                echo $inner_rows['Num_Minutes'];
                            }
                        }
                        ?>
                    </td>
                    <!--11th  -->
                    <td>
                        <?php
                        $sql_inner = "SELECT SUM(numberOfTimes) AS Num_TimesUndertime FROM appli_for_lev_undertime WHERE  surname = '{$rows['surname']}' AND  middlename = '{$rows['middle_name']}' AND nameextension = '{$rows['name_extension']}' AND firstname = '{$rows['firstname']}' AND `year` = '$currentYear';";
                        // echo $sql_inner;
                        $result_inner = $conn->query($sql_inner);

                        if ($result_inner->num_rows > 0) {
                            while ($inner_rows = $result_inner->fetch_assoc()) {
                                echo $inner_rows['Num_TimesUndertime'];
                            }
                        }
                        ?>
                    </td>
                    <!-- 12th -->
                    <td>
                        <?php
                        $sql_inner = "SELECT SUM(numOfMinutes) AS Num_MinutesUndertime FROM appli_for_lev_undertime WHERE  surname = '{$rows['surname']}' AND  middlename = '{$rows['middle_name']}' AND nameextension = '{$rows['name_extension']}' AND firstname = '{$rows['firstname']}' AND `year` = '$currentYear';";
                        // echo $sql_inner;
                        $result_inner = $conn->query($sql_inner);

                        if ($result_inner->num_rows > 0) {
                            while ($inner_rows = $result_inner->fetch_assoc()) {
                                echo $inner_rows['Num_MinutesUndertime'];
                            }
                        }
                        ?>
                    </td>
                    <!-- 13th -->
                    <td>
                        <?php
                        $sql_inner2 = "SELECT SUM(numMinutes) as total FROM appli_for_lev_personalpass WHERE  YEAR(date) = YEAR(CURRENT_DATE()) AND  middlename = '{$rows['middle_name']}'  AND surname = '{$rows['surname']}' AND nameextension = '{$rows['name_extension']}' AND firstname = '{$rows['firstname']}';";
                        $result_inner2 = $conn->query($sql_inner2);

                        if ($result_inner2->num_rows > 0) {
                            while ($inner_rows = $result_inner2->fetch_assoc()) {
                                echo $inner_rows['total'];
                            }
                        }
                        ?>
                    </td>
                    <!-- 14th -->
                    <td>
                        <?php
                        $sql_inner2 = "SELECT SUM(numDays) as total FROM appli_for_lev_type_of_leave WHERE  YEAR(date) = YEAR(CURRENT_DATE())  AND  middlename = '{$rows['middle_name']}'AND surname = '{$rows['surname']}' AND nameextension = '{$rows['name_extension']}' AND firstname = '{$rows['firstname']}' AND (typeofleave = 'Faternity' OR typeofleave = 'Social' OR typeofleave = 'Paternity' OR typeofleave = 'Solo' OR typeofleave = 'RA9262') ";
                        //  echo $sql_inner2;
                        $result_inner2 = $conn->query($sql_inner2);

                        if ($result_inner2->num_rows > 0) {
                            while ($inner_rows = $result_inner2->fetch_assoc()) {
                                echo $inner_rows['total'];
                            }
                        }
                        ?>
                    </td>
                    <!-- 15th -->
                    
                        <?php
                        $sql_inner2 = "SELECT SUM(numDays) as total FROM appli_for_lev_type_of_leave WHERE  YEAR(date) = YEAR(CURRENT_DATE()) AND  middlename = '{$rows['middle_name']}' AND surname = '{$rows['surname']}' AND nameextension = '{$rows['name_extension']}' AND firstname = '{$rows['firstname']}' AND typeofleave = 'Compensatory'  ";
                        $result_inner = $conn->query($sql_inner2);

                        if ($result_inner->num_rows > 0) {
                            while ($inner_rows = $result_inner->fetch_assoc()) {
                                $totl = $inner_rows['total'];
                                $Color = '';
                                if ($totl == 0) {
                                    $total = 0;
                                }elseif($totl >= 6){
                                    $Color = 'background-color:red;color:white;';
                                }
                                echo '<td style="'.$Color.';">';
                                echo $totl;
                                echo '</td>';
                            }
                        }
                        ?>
                    
                    <!-- 16th -->
                    <td>
                        <?php
                        $sql_inner2 = "SELECT * FROM appli_for_lev_type_of_leave WHERE  surname = '{$rows['surname']}' AND  middlename = '{$rows['middle_name']}' AND nameextension = '{$rows['name_extension']}' AND firstname = '{$rows['firstname']}'";
                        $result_inner2 = $conn->query($sql_inner2);

                        if ($result_inner2->num_rows > 0) {
                            while ($inner_rows = $result_inner2->fetch_assoc()) {
                                echo '<div>';
                                echo $inner_rows['Remarks'];
                                echo '</div>';
                            }
                        }
                        ?>
                    </td>
                </tr>
        <?php
            }
        }
        ?>

    </table>

    <?php

    ?>
</body>

<script>
    function scrollToTable(tableRef) {
        var tables = document.querySelectorAll('table[data-table-reference="' + tableRef + '"]');
        if (tables.length > 0) {
            tables[0].scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
        // console.log(tables);
    }
</script>

<script>
    document.querySelectorAll(".convert-button").forEach(function(button) {
        button.addEventListener("click", function() {
            const tableId = button.getAttribute("data-table-id");
            const table = document.getElementById(tableId);

            let csv = "";

            for (let i = 0; i < table.rows.length; i++) {
                const row = table.rows[i];
                const rowData = [];

                for (let j = 0; j < row.cells.length; j++) {
                    const cell = row.cells[j];
                    const cellData = cell.textContent;
                    rowData.push(`"${cellData}"`);
                }

                csv += rowData.join(",") + "\n";
            }

            const blob = new Blob([csv], {
                type: "text/csv"
            });
            const link = document.createElement("a");
            link.href = URL.createObjectURL(blob);
            link.download = `${tableId}_Leave.csv`;
            link.click();
        });
    });
</script>
</script>

</html>