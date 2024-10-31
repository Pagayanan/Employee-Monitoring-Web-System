
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

// $search = '12543';

session_start();
$search = $_SESSION['name'];

$surname = ' ';
$firstname = ' ';
$middlename = ' ';
$nameextension = ' ';

// echo $search;
$sql2 = " 
    SELECT * FROM employeeid
    WHERE 
        EmployeeID = '$search'
    LIMIT 1
";

$result = $conn->query($sql2);

if ($result->num_rows > 0) {
    // Loop through the fetched data
    // Loop through the fetched data
    while ($rows = $result->fetch_assoc()) {
        $surname = $rows['surname'];
        $firstname = $rows['firstname'];
        $middlename = $rows['middle_name'];
        if($rows['name_extension']=='N/A'|| $rows['name_extension']=='n/a'|| $rows['name_extension']=='none'){
           $nameextension = '';
        }else{
            $nameextension = $rows['name_extension'];
        }

    }
}

//========================= for vacation

$totalAvailedVacationLev = 0;
$sql_inner2 = "SELECT sum(numDays) as total FROM appli_for_lev_type_of_leave WHERE  YEAR(date) = YEAR(CURRENT_DATE()) AND  middlename = '$middlename' AND surname = '$surname' AND nameextension = '$nameextension' AND firstname = '$firstname' AND typeofleave = 'Vacation';";
$result_inner2 = $conn->query($sql_inner2);
// echo $sql_inner2;

if ($result_inner2->num_rows > 0) {
  while ($inner_rows = $result_inner2->fetch_assoc()) {
    $totalAvailedVacationLev = $inner_rows['total'];
  }
}


//====================== for forced leave

$totalAvailedForcedLev = 0;
$sql_inner2 = "SELECT sum(numDays) as total FROM appli_for_lev_type_of_leave WHERE  YEAR(date) = YEAR(CURRENT_DATE()) AND  middlename = '$middlename' AND surname = '$surname' AND nameextension = '$nameextension' AND firstname = '$firstname' AND typeofleave = 'Forced';";
$result_inner2 = $conn->query($sql_inner2);
// echo $sql_inner2;

if ($result_inner2->num_rows > 0) {
  while ($inner_rows = $result_inner2->fetch_assoc()) {
    $totalAvailedForcedLev = $inner_rows['total'];
  }
}

//================== for sick leave

$totalAvailedSickLev = 0;
$sql_inner2 = "SELECT sum(numDays) as total FROM appli_for_lev_type_of_leave WHERE  YEAR(date) = YEAR(CURRENT_DATE()) AND  middlename = '$middlename' AND surname = '$surname' AND nameextension = '$nameextension' AND firstname = '$firstname' AND typeofleave = 'Sick';";
$result_inner2 = $conn->query($sql_inner2);
// echo $sql_inner2;

if ($result_inner2->num_rows > 0) {
  while ($inner_rows = $result_inner2->fetch_assoc()) {
    $totalAvailedSickLev = $inner_rows['total'];
  }
}


//================== for social leave

$totalAvailedSocialLev = 0;
$sql_inner2 = "SELECT sum(numDays) as total FROM appli_for_lev_type_of_leave WHERE  YEAR(date) = YEAR(CURRENT_DATE()) AND  middlename = '$middlename' AND surname = '$surname' AND nameextension = '$nameextension' AND firstname = '$firstname' AND typeofleave = 'Social';";
$result_inner2 = $conn->query($sql_inner2);
// echo $sql_inner2;

if ($result_inner2->num_rows > 0) {
  while ($inner_rows = $result_inner2->fetch_assoc()) {
    $totalAvailedSocialLev = $inner_rows['total'];
  }
}

//================== for maternity leave

$totalAvailedMaternityLev = 0;
$sql_inner2 = "SELECT sum(numDays) as total FROM appli_for_lev_type_of_leave WHERE  YEAR(date) = YEAR(CURRENT_DATE()) AND  middlename = '$middlename' AND surname = '$surname' AND nameextension = '$nameextension' AND firstname = '$firstname' AND typeofleave = 'Faternity';";
$result_inner2 = $conn->query($sql_inner2);
// echo $sql_inner2;

if ($result_inner2->num_rows > 0) {
  while ($inner_rows = $result_inner2->fetch_assoc()) {
    $totalAvailedMaternityLev = $inner_rows['total'];
  }
}

//================== for paternity leave

$totalAvailedPaternityLev = 0;
$sql_inner2 = "SELECT sum(numDays) as total FROM appli_for_lev_type_of_leave WHERE  YEAR(date) = YEAR(CURRENT_DATE()) AND  middlename = '$middlename' AND surname = '$surname' AND nameextension = '$nameextension' AND firstname = '$firstname' AND typeofleave = 'Paternity';";
$result_inner2 = $conn->query($sql_inner2);
// echo $sql_inner2;

if ($result_inner2->num_rows > 0) {
  while ($inner_rows = $result_inner2->fetch_assoc()) {
    $totalAvailedPaternityLev = $inner_rows['total'];
  }
}

//================== for solo parent leave

$totalAvailedSoloParentLev = 0;
$sql_inner2 = "SELECT sum(numDays) as total FROM appli_for_lev_type_of_leave WHERE  YEAR(date) = YEAR(CURRENT_DATE()) AND  middlename = '$middlename' AND surname = '$surname' AND nameextension = '$nameextension' AND firstname = '$firstname' AND typeofleave = 'Solo';";
$result_inner2 = $conn->query($sql_inner2);
// echo $sql_inner2;

if ($result_inner2->num_rows > 0) {
  while ($inner_rows = $result_inner2->fetch_assoc()) {
    $totalAvailedSoloParentLev = $inner_rows['total'];
  }
}

//================== for RA9262 leave

$totalAvailedRA9262Lev = 0;
$sql_inner2 = "SELECT sum(numDays) as total FROM appli_for_lev_type_of_leave WHERE  YEAR(date) = YEAR(CURRENT_DATE()) AND  middlename = '$middlename' AND surname = '$surname' AND nameextension = '$nameextension' AND firstname = '$firstname' AND typeofleave = 'RA9262';";
$result_inner2 = $conn->query($sql_inner2);
// echo $sql_inner2;

if ($result_inner2->num_rows > 0) {
  while ($inner_rows = $result_inner2->fetch_assoc()) {
    $totalAvailedRA9262Lev = $inner_rows['total'];
  }
}

//================== for compensatory leave

$totalAvailedCompensatoryLev = 0;
$sql_inner2 = "SELECT sum(numDays) as total FROM appli_for_lev_type_of_leave WHERE  YEAR(date) = YEAR(CURRENT_DATE()) AND  middlename = '$middlename' AND surname = '$surname' AND nameextension = '$nameextension' AND firstname = '$firstname' AND typeofleave = 'Compensatory';";
$result_inner2 = $conn->query($sql_inner2);
// echo $sql_inner2;

if ($result_inner2->num_rows > 0) {
  while ($inner_rows = $result_inner2->fetch_assoc()) {
    $totalAvailedCompensatoryLev = $inner_rows['total'];
  }
}

//================== for  tardiness

$tardinessnumOfTimes = 0;
$tardinessnumOfMinutes = 0;
$sql_inner2 = "SELECT sum(numMinutes) as totalMin, sum(numOfTimes) as totalTimes   FROM appli_for_lev_tardiness WHERE `year` = '$currentYear' AND  middlename = '$middlename' AND surname = '$surname' AND nameextension = '$nameextension' AND firstname = '$firstname';";

$result_inner2 = $conn->query($sql_inner2);
// echo $sql_inner2;

if ($result_inner2->num_rows > 0) {
  while ($inner_rows = $result_inner2->fetch_assoc()) {
    $tardinessnumOfTimes = $inner_rows['totalTimes'];
    $tardinessnumOfMinutes = $inner_rows['totalMin'];
  }
}

//================== for  undertimte

$undertimesnumOfTimes = 0;
$undertimenumOfMinutes = 0;
$sql_inner2 = "SELECT sum(numOfMinutes) as totalMin, sum(numberOfTimes) as totalTimes   FROM appli_for_lev_undertime WHERE `year` = '$currentYear' AND  middlename = '$middlename' AND surname = '$surname' AND nameextension = '$nameextension' AND firstname = '$firstname';";

$result_inner2 = $conn->query($sql_inner2);
// echo $sql_inner2;

if ($result_inner2->num_rows > 0) {
  while ($inner_rows = $result_inner2->fetch_assoc()) {
    $undertimesnumOfTimes = $inner_rows['totalTimes'];
    $undertimenumOfMinutes = $inner_rows['totalMin'];
  }
}

//================== for perssonal Pass

$personalPassnumOfTimes = 0;
$personalPassnumOfMinutes = 0;
$sql_inner2 = "SELECT sum(numMinutes) as totalMin, COUNT(date) as totalTimes   FROM appli_for_lev_personalpass WHERE YEAR(date) = YEAR(CURRENT_DATE()) AND  middlename = '$middlename' AND surname = '$surname' AND nameextension = '$nameextension' AND firstname = '$firstname';";

$result_inner2 = $conn->query($sql_inner2);
// echo $sql_inner2;

if ($result_inner2->num_rows > 0) {
  while ($inner_rows = $result_inner2->fetch_assoc()) {
    $personalPassnumOfTimes = $inner_rows['totalTimes'];
    $personalPassnumOfMinutes = $inner_rows['totalMin'];
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>USER LEAVE DASHBOARD</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
    }
    table {
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
        padding: 12px 15px;
        text-align: center;
        border-bottom: 1px solid #ddd;
        border: 1px solid black;
    }
    th {
        background-color: #0056b3;
        color: white;
        font-weight: bold;
    }
    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    tr:hover {
        background-color: #e2e2e2;
    }
     /* =============================== */
     .button-container a {
        display: inline-block;
        width: calc(15% - 10px); /* Adjust the width as needed */
        margin: 5px;
        background-color: #007bff; /* Blue theme */
        border: none;
        color: white;
        text-align: center;
        padding: 5px;
        text-decoration: none;
        font-size: 16px;
         border-radius: 10px;
    }

    .button-container a:hover {
        background-color: #0056b3; /* Darker blue on hover */
    } 
</style>
</head>
<body>
  <!-- <a href="userFileDisplay.php">File Download</a> -->
  <div class="button-container">
<a  style="float:right;" href="userLeaveHistory.php">History</a>
  </div>

<h1><?php echo $surname.", ".$firstname. " ".$nameextension." ".$middlename; ?></h1>
<table>
    <tr>
        <th><h2>Types of Leave</h2></th>
        <th>Total</th>
        <th>Total Availed</th>
        <th>Total Remaining</th>
    </tr>
    <tr>
        <th>Vacation</th>
        <td>Undetermined</td>
        <td><?php echo $totalAvailedVacationLev; ?></td>
        <td>Undetermined</td>
    </tr>
    <tr style="<?php if($totalAvailedForcedLev >= 5){ echo 'background-color: red;color:white;';}  ?>;">
        <th style="background-color: <?php if($totalAvailedForcedLev >= 5){ echo 'red;';}  ?>;">Forced</th>
        <td>5</td>
        <td><?php echo $totalAvailedForcedLev; ?></td>
        <td><?php echo (5-$totalAvailedForcedLev); ?></td>
    </tr>
    <tr>
        <th>Sick</th>
        <td>Undetermined</td>
        <td><?php echo $totalAvailedSickLev; ?></td>
        <td>Undetermined</td>
    </tr>
    <tr style=" <?php if($totalAvailedSocialLev >= 3){ echo 'background-color: red;color:white;';}  ?>;">
        <th style="background-color: <?php if($totalAvailedSocialLev >= 3){ echo 'red';}  ?>;">Social Leave</th>
        <td>3</td>
        <td><?php echo $totalAvailedSocialLev; ?></td>
        <td><?php echo (3-$totalAvailedSocialLev); ?></td>
    </tr>
    <tr>
        <th>Maternity Leave</th>
        <td>Undetermined</td>
        <td><?php echo $totalAvailedMaternityLev; ?></td>
        <td>Undetermined</td>
    </tr>
    <tr  style="<?php if($totalAvailedPaternityLev >= 5){ echo 'background-color: red;color:white;';}  ?>;">
        <th  style="background-color: <?php if($totalAvailedPaternityLev >= 5){ echo 'red';}  ?>;">Paternity Leave</th>
        <td>5</td>
        <td><?php echo $totalAvailedPaternityLev; ?></td>
        <td><?php echo (5-$totalAvailedPaternityLev); ?></td>
    </tr>
    <tr>
        <th>Solo Parent</th>
        <td>Undetermined</td>
        <td><?php echo $totalAvailedSoloParentLev; ?></td>
        <td>Undetermined</td>
    </tr>
    <tr>
        <th>RA9262</th>
        <td>Undetermined</td>
        <td><?php echo $totalAvailedRA9262Lev; ?></td>
        <td>Undetermined</td>
    </tr>
    <tr style="<?php if($totalAvailedCompensatoryLev >= 6){ echo 'background-color: red;color:white;';}  ?>;">
        <th style="background-color: <?php if($totalAvailedCompensatoryLev >= 6){ echo 'red';}  ?>;">Compensatory Day-Off(CNA)</th>
        <td>6</td>
        <td><?php echo $totalAvailedCompensatoryLev; ?></td>
        <td><?php echo (6-$totalAvailedCompensatoryLev); ?></td>
    </tr>
</table>

<br><br>
<table>
<tr>
        <th></th>
        
        <th>No. of Times</th>
        <th>Total Mins</th>
    </tr>
    <tr>
        <th>Tardiness</th>
       
        <td><?php echo $tardinessnumOfTimes; ?></td>
        <td><?php echo $tardinessnumOfMinutes; ?></td>
    </tr>
    <tr>
        <th>Undertime</th>
       
        <td><?php echo $undertimesnumOfTimes; ?></td>
        <td><?php echo $undertimenumOfMinutes; ?></td>
       
    </tr>
</table>
<br><br>
<table>
<tr>
<th></th>
        
        <th>No. of Times</th>
        <th>Total Mins</th>
    </tr>
    <tr>
        <th>Personal Pass</th>        
        <td><?php echo $personalPassnumOfTimes; ?></td>
        <td><?php echo $personalPassnumOfMinutes; ?></td>
       
    </tr>
  
</table>

</body>
</html>
