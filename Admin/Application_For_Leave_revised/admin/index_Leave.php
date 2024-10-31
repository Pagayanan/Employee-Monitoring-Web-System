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
    .button-container {
      text-align: center;
    }

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
    <a href="LeaveForm.php">Leave Form</a>
    <a href="personalPass.php">Personal Pass Form</a>
    <a href="undertime.php">Undertime Form</a>
    <a href="Tardiness.php">Tardiness Form</a>
    <a href="over_all_viewLeave.php">Summarized Data</a>
    <a href="leaveUserProfile.php">UserProfile</a>
    <a href="historlyLeave.php">History</a>
  </div>



  <div class="dropdown">
    <button class="dropbtn">Select Month</button>
    <div class="dropdown-content">
      <?php
      for ($j = 0; $j < 12; $j++) {
        $m_ = $j + 1;
        $monthNumber_ = $m_;

        // Convert the month number to the month name
        $monthName_ = date('F', mktime(0, 0, 0, $monthNumber_, 1));
        echo '<a style="font-size:12px;padding:5px;" href="#table' . $j . "_" . date('F', mktime(0, 0, 0, ($j + 1), 1)) . '">View Table ' . $monthName_ . '</a>';
      }
      ?>
    </div>
  </div>

  <?php

  for ($i = 0; $i < 12; $i++) {


  ?>
    <br>
    <button class="convert-button" data-table-id="table<?php echo $i . "_" . date('F', mktime(0, 0, 0, ($i + 1), 1)); ?>">Convert Table to CSV</button>
    <table id="table<?php echo $i . "_" . date('F', mktime(0, 0, 0, ($i + 1), 1)); ?>" data-table-reference="table<?php echo $i; ?>">
      <tr>
        <th colspan="16" style="text-align: center;">
          <?php
          $m = $i + 1;
          // echo $m;
          $monthNumber = $m; // Example: 12 for December

          // Example: 1 for January

          // Convert the month number to the month name
          $monthName = date('F', mktime(0, 0, 0, $monthNumber, 1));
          // $monthName = date('F', mktime(0, 0, 0, $monthNumber, 1));
          echo $monthName; // Output: December
          ?>
        </th>
      </tr>
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
            <td><?php 
                    $nameEx = ' ';
                    if ($rows['name_extension'] == 'N/A' || $rows['name_extension'] == 'None' || $rows['name_extension'] == 'n/a'|| $rows['name_extension'] == 'none'){
                      $nameEx = '';
                    }else{
                      $nameEx = $rows['name_extension'];
                    }
            echo $rows['surname'] . ", " . $rows['firstname'] . " " . $nameEx . " " . substr($rows['middle_name'], 0, 1) . "."; ?></td>
            <!-- 2nd  -->
            <td>
              <?php
              $sql_inner2 = "SELECT * FROM appli_for_lev_type_of_leave WHERE MONTH(date) = $m AND YEAR(date) = YEAR(CURRENT_DATE()) AND  middlename = '{$rows['middle_name']}' AND surname = '{$rows['surname']}' AND nameextension = '{$rows['name_extension']}' AND firstname = '{$rows['firstname']}' AND typeofleave = 'Vacation';";
              $result_inner2 = $conn->query($sql_inner2);
              // echo $sql_inner2;

              if ($result_inner2->num_rows > 0) {
                while ($inner_rows = $result_inner2->fetch_assoc()) {
                  echo $inner_rows['numDays'];
                }
              }
              ?></td>
            <!-- 3rd -->
            <td>
              <?php
              $sql_inner = "SELECT * FROM appli_for_lev_type_of_leave WHERE MONTH(date) = $m AND YEAR(date) = YEAR(CURRENT_DATE()) AND surname = '{$rows['surname']}' AND  middlename = '{$rows['middle_name']}' AND nameextension = '{$rows['name_extension']}' AND firstname = '{$rows['firstname']}' AND typeofleave = 'Vacation'; ";
              $result_inner = $conn->query($sql_inner);

              if ($result_inner->num_rows > 0) {
                while ($inner_rows = $result_inner->fetch_assoc()) {
                  echo '<div>';
                  echo $inner_rows['specificDates'];
                  echo '</div>';
                }
              }
              ?>
            </td>
            <!-- 4th -->
            <td>
              <?php
              $sql_inner = "SELECT * FROM appli_for_lev_type_of_leave WHERE MONTH(date) = $m AND YEAR(date) = YEAR(CURRENT_DATE()) AND surname = '{$rows['surname']}' AND  middlename = '{$rows['middle_name']}' AND nameextension = '{$rows['name_extension']}' AND firstname = '{$rows['firstname']}' AND typeofleave = 'Forced'; ";
              $result_inner = $conn->query($sql_inner);

              if ($result_inner->num_rows > 0) {
                while ($inner_rows = $result_inner->fetch_assoc()) {
                  echo $inner_rows['numDays'];
                }
              }
              ?>
            </td>
            <!-- 5th -->
            <td>
              <?php
              $sql_inner = "SELECT * FROM appli_for_lev_type_of_leave WHERE MONTH(date) = $m AND surname = '{$rows['surname']}' AND YEAR(date) = YEAR(CURRENT_DATE()) AND  middlename = '{$rows['middle_name']}' AND nameextension = '{$rows['name_extension']}' AND firstname = '{$rows['firstname']}' AND typeofleave = 'Forced'; ";
              $result_inner = $conn->query($sql_inner);

              if ($result_inner->num_rows > 0) {
                while ($inner_rows = $result_inner->fetch_assoc()) {
                  echo '<div>';
                  echo $inner_rows['specificDates'];
                  echo '</div>';
                }
              }
              ?>
            </td>
            <!-- 6th -->
            <td>
              <?php
              $sql_inner = "SELECT * FROM appli_for_lev_type_of_leave WHERE MONTH(date) = $m AND YEAR(date) = YEAR(CURRENT_DATE()) AND surname = '{$rows['surname']}' AND  middlename = '{$rows['middle_name']}' AND nameextension = '{$rows['name_extension']}' AND firstname = '{$rows['firstname']}' AND typeofleave = 'Sick'; ";
              $result_inner = $conn->query($sql_inner);

              if ($result_inner->num_rows > 0) {
                while ($inner_rows = $result_inner->fetch_assoc()) {
                  echo $inner_rows['numDays'];
                }
              }
              ?>
            </td>
            <!-- 7th -->
            <td>
              <?php
              $sql_inner2 = "SELECT * FROM appli_for_lev_type_of_leave WHERE MONTH(date) = $m AND YEAR(date) = YEAR(CURRENT_DATE()) AND surname = '{$rows['surname']}' AND  middlename = '{$rows['middle_name']}' AND nameextension = '{$rows['name_extension']}' AND firstname = '{$rows['firstname']}' AND typeofleave = 'Sick'  ";
              $result_inner2 = $conn->query($sql_inner2);

              if ($result_inner2->num_rows > 0) {
                while ($inner_rows = $result_inner2->fetch_assoc()) {
                  echo '<div>';
                  echo $inner_rows['specificDates'];
                  echo '</div>';
                }
              }
              ?>
            </td>
            <!-- 8th -->
            <td>
              <?php
              $sql_inner2 = "SELECT SUM(numDays) as total FROM appli_for_lev_type_of_leave WHERE MONTH(date) = $m AND YEAR(date) = YEAR(CURRENT_DATE()) AND  middlename = '{$rows['middle_name']}' AND  (typeofleave = 'Vacation' OR typeofleave = 'Forced' OR typeofleave = 'Sick') AND surname = '{$rows['surname']}' AND nameextension = '{$rows['name_extension']}' AND firstname = '{$rows['firstname']}';";
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
              $sql_inner = "SELECT * FROM appli_for_lev_tardiness WHERE `Month` = '$monthName' AND surname = '{$rows['surname']}' AND  middlename = '{$rows['middle_name']}' AND nameextension = '{$rows['name_extension']}' AND firstname = '{$rows['firstname']}' AND `year` = '$currentYear';";
              // echo $sql_inner;
              $result_inner = $conn->query($sql_inner);

              if ($result_inner->num_rows > 0) {
                while ($inner_rows = $result_inner->fetch_assoc()) {
                  echo $inner_rows['numOfTimes'];
                }
              }
              ?>
            </td>
            <!-- 10th -->
            <td>
              <?php
              $sql_inner = "SELECT * FROM appli_for_lev_tardiness WHERE `Month` = '$monthName' AND surname = '{$rows['surname']}' AND  middlename = '{$rows['middle_name']}' AND nameextension = '{$rows['name_extension']}' AND firstname = '{$rows['firstname']}' AND `year` = '$currentYear';";
              // echo $sql_inner;
              $result_inner = $conn->query($sql_inner);

              if ($result_inner->num_rows > 0) {
                while ($inner_rows = $result_inner->fetch_assoc()) {
                  echo $inner_rows['numMinutes'];
                }
              }
              ?>
            </td>
            <!--11th  -->
            <td>
              <?php
              $sql_inner = "SELECT * FROM appli_for_lev_undertime WHERE `Month` = '$monthName' AND surname = '{$rows['surname']}' AND  middlename = '{$rows['middle_name']}' AND nameextension = '{$rows['name_extension']}' AND firstname = '{$rows['firstname']}' AND `year` = '$currentYear';";
              // echo $sql_inner;
              $result_inner = $conn->query($sql_inner);

              if ($result_inner->num_rows > 0) {
                while ($inner_rows = $result_inner->fetch_assoc()) {
                  echo $inner_rows['numberOfTimes'];
                }
              }
              ?>
            </td>
            <!-- 12th -->
            <td>
              <?php
              $sql_inner = "SELECT * FROM appli_for_lev_undertime WHERE `Month` = '$monthName' AND surname = '{$rows['surname']}' AND  middlename = '{$rows['middle_name']}' AND nameextension = '{$rows['name_extension']}' AND firstname = '{$rows['firstname']}' AND `year` = '$currentYear';";
              // echo $sql_inner;
              $result_inner = $conn->query($sql_inner);

              if ($result_inner->num_rows > 0) {
                while ($inner_rows = $result_inner->fetch_assoc()) {
                  echo $inner_rows['numOfMinutes'];
                }
              }
              ?>
            </td>
            <!-- 13th -->
            <td>
              <?php
              $sql_inner2 = "SELECT SUM(numMinutes) as total FROM appli_for_lev_personalpass WHERE MONTH(date) = $m AND YEAR(date) = YEAR(CURRENT_DATE()) AND  middlename = '{$rows['middle_name']}'  AND surname = '{$rows['surname']}' AND nameextension = '{$rows['name_extension']}' AND firstname = '{$rows['firstname']}';";
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
              $sql_inner2 = "SELECT SUM(numDays) as total FROM appli_for_lev_type_of_leave WHERE MONTH(date) = $m AND YEAR(date) = YEAR(CURRENT_DATE())  AND  middlename = '{$rows['middle_name']}'AND surname = '{$rows['surname']}' AND nameextension = '{$rows['name_extension']}' AND firstname = '{$rows['firstname']}' AND (typeofleave = 'Faternity' OR typeofleave = 'Social' OR typeofleave = 'Paternity' OR typeofleave = 'Solo' OR typeofleave = 'RA9262') ";
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
            <td>
              <?php
              $sql_inner2 = "SELECT * FROM appli_for_lev_type_of_leave WHERE MONTH(date) = $m AND YEAR(date) = YEAR(CURRENT_DATE()) AND  middlename = '{$rows['middle_name']}' AND surname = '{$rows['surname']}' AND nameextension = '{$rows['name_extension']}' AND firstname = '{$rows['firstname']}' AND typeofleave = 'Compensatory'  ";
              $result_inner2 = $conn->query($sql_inner2);

              if ($result_inner2->num_rows > 0) {
                while ($inner_rows = $result_inner2->fetch_assoc()) {
                  echo $inner_rows['numDays'];
                }
              }
              ?>
            </td>
            <!-- 16th -->
            <td>
              <?php
              $sql_inner2 = "SELECT * FROM appli_for_lev_type_of_leave WHERE MONTH(date) = $m AND surname = '{$rows['surname']}' AND  middlename = '{$rows['middle_name']}' AND nameextension = '{$rows['name_extension']}' AND firstname = '{$rows['firstname']}'";
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
  }
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