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

$surname = ' ';
$firstname = ' ';
$middlename = ' ';
$nameextension = ' ';

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
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tardiness</title>
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
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="number"],
        input[type="email"],
        textarea,
        select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"], .returnTable {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .numinputs {
            width: 20px;
        }

           /* ======================== */
    

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
<div class="button-container">
<a href="index_Leave.php">Back to Table</a>
</div>

    <form action="Tardiness.php" method="POST" id="searchForm" style="float: right;">
        <div class="autocomplete" style="display:inline-block;">
            <input type="text" name="search" autocomplete="off" id="searchName" placeholder="Enter Name to search">
        </div>
        <input type="submit" value="Search" name="searchBox">


    </form>

    <div class="container">
        <h2>Tardiness Form</h2>
        <form action="TardinessUpload.php" method="post">
            <div class="form-group">
                <label for="surname">Surname:</label>
                <input type="text" id="surname" value="<?php echo $surname; ?>" name="surname" required>
            </div>
            <div class="form-group">
                <label for="firstname">Firstname:</label>
                <input type="text" id="lastname" name="firstname" value="<?php echo $firstname; ?>" required>
            </div>
            <div class="form-group">
                <label for="name_extension">Name Extension:</label>
                <input type="text" id="name_extension" value="<?php echo $nameextension; ?>" name="name_extension">
            </div>
            <div class="form-group">
                <label for="middlename">Middle Name:</label>
                <input type="text" id="middlename" value="<?php echo $middlename; ?>" name="middlename">
            </div>

            <div class="form-group">
                <label for="Month">Month:</label>
                <select id="Month" name="Month" required>
                    <option value="">Select a Month</option>
                    <option value="January">January</option>
                    <option value="February">February</option>
                    <option value="March">March</option>
                    <option value="April">April</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="August">August</option>
                    <option value="September">September</option>
                    <option value="October">October</option>
                    <option value="November">November</option>
                    <option value="December">December</option>
                </select>
            </div>

            <div class="form-group">
                <label for="year">Year:</label>
                <input type="number" id="year" value="<?php $currentYear = date('Y');echo $currentYear;?>" name="year">
            </div>


            
            <div class="form-group">
                <label for="numOfTimes">Number of Times:</label>
                <input type="number" id="numOfTimes" name="numOfTimes">
            </div>

            <div class="form-group">
                <label for="numMinutes">Number of Minutes:</label>
                <input type="number" id="numMinutes" name="numMinutes">
            </div>


            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" id="date" name="date" required>
            </div>

            <div class="form-group">
                <label for="Remarks">Remarks:</label>
                <textarea name="Remarks" id="" cols="30" rows="10"></textarea>
            </div>
            <input type="submit" name="uploadLeave" value="Submit">
            <a class="returnTable" href="index_Leave.php" style="background-color: red;padding:7px;">Cancel</a>
        </form>
    </div>

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