
<?php
require_once "../../../Config/config.php";
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$search = '';


if (isset($_POST["searchBox"])) {
    $search = isset($_POST["search"]) ? $_POST["search"] : "";
}

$currentMonthName = date('F');
// echo $currentMonthName;


$currentYear = date('Y');
// echo $currentYear;

// $search = '12543';

$surname = ' ';
$firstname = ' ';
$middlename = ' ';
$nameextension = ' ';

// echo $search;
$sql2 = " 
SELECT *
FROM employeeid 
WHERE CONCAT(surname, ', ', firstname,' ',name_extension, ' ', middle_name) = '$search' 
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
        $nameextension = $rows['name_extension'];
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
<title>Styled Table</title>
<style>
       /* ======autocomplete===== */

       .autocomplete-items {
            position: absolute;
            border: 1px solid #d4d4d4;
            max-height: 150px;
            overflow-y: auto;
            z-index: 999;
            /* Set a high z-index value */
        }

        .autocomplete-items div {
            padding: 10px;
            cursor: pointer;
            background-color: #fff;
            border-bottom: 1px solid #d4d4d4;
        }

        /* When hovering an item: */
        .autocomplete-items div:hover {
            background-color: #e9e9e9;
        }

        /* When navigating through the items using the arrow keys: */
        .autocomplete-active {
            background-color: DodgerBlue !important;
            color: #ffffff;
        }

        /* =========end of autocomplet */

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


<form action="leaveUserProfile.php" method="POST" id="searchForm" style="float: right;">
<div class="autocomplete" style="display:inline-block;">
        <input type="text" name="search" autocomplete="off" id="searchName" placeholder="Enter Name to search">
</div>
        <input type="submit" value="Search" name="searchBox">
		
       
    </form>
    <div class="button-container">
<a href="index_Leave.php">Back</a>
    </div>
<h3><?php 
$nameExtention = '';
if($nameextension == 'N/A' || $nameextension == ' ' || $nameextension == '')  { $nameExtention = '';}else{ $nameExtention = $nameextension;}
echo $surname.", ".$firstname. " ".$nameExtention." ".$middlename; ?></h3>
<table>
    <tr>
        <th><h2>Type of Leave</h2></th>
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
        <th style="background-color: <?php if($totalAvailedForcedLev >= 5){ echo 'red';}  ?>;">Forced</th>
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
    <tr style="<?php if($totalAvailedSocialLev >= 3){ echo 'background-color: red;color:white;';}  ?>;">
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
<br><br><br>

<?php

// $sql = " 
// SELECT *
// FROM appli_for_lev_type_of_leave 
// WHERE CONCAT(surname, ', ', firstname,' ',nameextension, ' ', middlename) = '$search' 
// LIMIT 1

// ";

$sql = " 
SELECT DISTINCT p.*
FROM appli_for_lev_type_of_leave p
INNER JOIN employeeid e ON 
    p.surname = e.surname AND 
    p.firstname = e.firstname AND 
    p.middlename = e.middle_name AND 
    p.nameextension = e.name_extension
WHERE CONCAT(p.surname, ', ', p.firstname, ' ', p.nameextension, ' ', p.middlename) = '$search' 
ORDER BY p.date DESC; 
        
";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Start the table
    echo "<table>";
    // Output table header
    echo "<tr>
    <th>Type of Leave</th>
    <th>Date</th>
    <th>Number of Days</th>
    <th>Specific Days</th>
    <th>Remarks</th>
    <th>Action</th>
      </tr>";
    while ($row = $result->fetch_assoc()) {
        // Output table row
        echo "<tr>";
        echo "<td>";
        if ($row['typeofleave'] == 'Faternity') {
            echo 'Maternity';
        }  elseif ($row['typeofleave'] == 'Solo') {
            echo 'Solo Parent';
        }else {
            echo $row['typeofleave'];
        }
        echo " Leave"."</td>";
        echo "<td>" . date("F j, Y", strtotime($row['date'])) . "</td>";
        echo "<td>{$row['numDays']}</td>";
        echo "<td>{$row['specificDates']}</td>";
        echo "<td>{$row['Remarks']}</td>";
        echo '<td>
        <form action="updateFormLeave.php" method="POST">
            <input type="hidden" name="secret_value" value="' . $row["ids"] . '">
            <input type="hidden" name="link_value" value="leaveUserProfile">
            <button type="submit" name="updateLeaveForm" style="background-color: #4cbb17; border-radius: 5px;width:90px;">Edit</button> 
        </form> <br>
        <form action="deleteLeave.php" method="POST">
        <input type="hidden" name="secret_value" value="' . $row["ids"] . '">
        <input type="hidden" name="link_value" value="leaveUserProfile">
        <button type="submit" name="delete" style="background-color: red; border-radius: 5px;width:90px;">DELETE</button> 
    </form>
      </td>';
        echo "</tr>";
        
    }
    // Close the table
    echo "</table>";
} else {
    echo "No Table Found";
}

?>
</body>


<script>
    function autocomplete(inp, arr) {
        /*the autocomplete function takes two arguments,
        the text field element and an array of possible autocompleted values:*/
        var currentFocus;
        /*execute a function when someone writes in the text field:*/
        inp.addEventListener("input", function(e) {
            var a, b, i, val = this.value;
            /*close any already open lists of autocompleted values*/
            closeAllLists();
            if (!val) {
                return false;
            }
            currentFocus = -1;
            /*create a DIV element that will contain the items (values):*/
            a = document.createElement("DIV");
            a.setAttribute("id", this.id + "autocomplete-list");
            a.setAttribute("class", "autocomplete-items");
            /*append the DIV element as a child of the autocomplete container:*/
            this.parentNode.appendChild(a);
            /*for each item in the array...*/
            for (i = 0; i < arr.length; i++) {
                /*check if the item starts with the same letters as the text field value:*/
                if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                    /*create a DIV element for each matching element:*/
                    b = document.createElement("DIV");
                    /*make the matching letters bold:*/
                    b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                    b.innerHTML += arr[i].substr(val.length);
                    /*insert a input field that will hold the current array item's value:*/
                    b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                    /*execute a function when someone clicks on the item value (DIV element):*/
                    b.addEventListener("click", function(e) {
                        /*insert the value for the autocomplete text field:*/
                        inp.value = this.getElementsByTagName("input")[0].value;
                        /*close the list of autocompleted values,
                        (or any other open lists of autocompleted values:*/
                        closeAllLists();
                    });
                    a.appendChild(b);
                }
            }
        });
        /*execute a function presses a key on the keyboard:*/
        inp.addEventListener("keydown", function(e) {
            var x = document.getElementById(this.id + "autocomplete-list");
            if (x) x = x.getElementsByTagName("div");
            if (e.keyCode == 40) {
                /*If the arrow DOWN key is pressed,
                increase the currentFocus variable:*/
                currentFocus++;
                /*and and make the current item more visible:*/
                addActive(x);
            } else if (e.keyCode == 38) { //up
                /*If the arrow UP key is pressed,
                decrease the currentFocus variable:*/
                currentFocus--;
                /*and and make the current item more visible:*/
                addActive(x);
            } else if (e.keyCode == 13) {
                /*If the ENTER key is pressed, prevent the form from being submitted,*/
                e.preventDefault();
                if (currentFocus > -1) {
                    /*and simulate a click on the "active" item:*/
                    if (x) x[currentFocus].click();
                }
            }
        });

        function addActive(x) {
            /*a function to classify an item as "active":*/
            if (!x) return false;
            /*start by removing the "active" class on all items:*/
            removeActive(x);
            if (currentFocus >= x.length) currentFocus = 0;
            if (currentFocus < 0) currentFocus = (x.length - 1);
            /*add class "autocomplete-active":*/
            x[currentFocus].classList.add("autocomplete-active");
        }

        function removeActive(x) {
            /*a function to remove the "active" class from all autocomplete items:*/
            for (var i = 0; i < x.length; i++) {
                x[i].classList.remove("autocomplete-active");
            }
        }

        function closeAllLists(elmnt) {
            /*close all autocomplete lists in the document,
            except the one passed as an argument:*/
            var x = document.getElementsByClassName("autocomplete-items");
            for (var i = 0; i < x.length; i++) {
                if (elmnt != x[i] && elmnt != inp) {
                    x[i].parentNode.removeChild(x[i]);
                }
            }
        }
        /*execute a function when someone clicks in the document:*/
        document.addEventListener("click", function(e) {
            closeAllLists(e.target);
        });
    }


    var countries = <?php
                    $conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    $sql = "SELECT DISTINCT CONCAT(surname, ', ', firstname,' ',name_extension, ' ', middle_name) AS full_name FROM employeeid;
    "; // Modify your SQL query as needed
                    // $sql = "SELECT CONCAT(surname, ', ', firstname, ' ', COALESCE(middlename, '')) AS full_name 
                    // FROM applicationforleave 
                    // WHERE CONCAT(surname, ', ', firstname, ' ', COALESCE(middlename, '')) LIKE '%$search%';
                    // ";
                    $result = $conn->query($sql);

                    $nameArray = array(); // Initialize an array to store data

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $nameArray[] = $row['full_name']; // Corrected the field name to 'full_name'
                        }
                        echo json_encode($nameArray); // Output as JSON
                    } else {
                        echo '[]'; // Output an empty JSON array if no results found
                    }

                    $conn->close();
                    ?>;
    console.log(countries);
    // it is a last minute edit countries should be name should be name Name of student. 

    /*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
    autocomplete(document.getElementById("searchName"), countries);
</script>
</html>
