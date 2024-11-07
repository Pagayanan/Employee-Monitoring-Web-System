<?php
require_once "../../../Config/config.php";

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);


if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
session_start();

// $search= '12345';
$search = $_SESSION['name'] ;
// echo $search;

$sql2 = " 
SELECT * FROM employeeid WHERE EmployeeID = '$search';
";

$result = $conn->query($sql2);

if ($result->num_rows > 0) {
    // Loop through the fetched data
// Loop through the fetched data
while ($rows = $result->fetch_assoc()) {

	// $sex =  $rows['Sex'];
	$surname =  $rows['surname'];
	$firstname =  $rows['firstname'];
	$middle_name = $rows['middle_name'];
    $name_extension = $rows['name_extension'];


}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <link rel="stylesheet" type="text/css" media="print" href="style.css"> -->
	
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Personal Data Sheet</title>
	<!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.4/xlsx.full.min.js"></script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/mammoth/1.4.2/mammoth.browser.min.js"></script>
    <link rel="shortcut icon" type="image/png" href="../psa logo.png">


	


	


	<link rel="stylesheet" href="../style/style.css">
	<link rel="stylesheet" href="../style/PDS_p1.css">
    <link rel="stylesheet" href="../style/PDS_p4.css">
    <style>
        /* ======autocomplete===== */
    
  .autocomplete-items {
  position: absolute;
  border: 1px solid #d4d4d4;
  max-height: 150px;
  overflow-y: auto;
  z-index: 999; /* Set a high z-index value */
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
    </style>
</head>
<body>


<!-- ==========================search for ID=============== -->
<!-- <form action="Main_PDS.php" method="POST" id="searchForm" style="float: right;">
        <input type="text" name="search" placeholder="Enter ID to search">
        <input type="submit" value="Search" name="searchBox">
		
       
    </form> -->

    <!-- =======================search for name=================== -->

    <!-- <form action="../Main_PDS.php" method="POST" id="searchForm" style="float: right;">
<div class="autocomplete" style="display:inline-block;">
        <input type="text" name="search" autocomplete="off" id="searchName" placeholder="Enter Name to search">
</div>
        <input type="submit" value="Search" name="searchBox">
		
       
    </form> -->
    <!-- ==================================== -->
    
	<div class="table-responsive p-3 pdsTable" id="content">
	<button id="saveAsPdfButton" style="float: right;">Save as PDF</button>
    
	<!-- <button id="btn-export" onclick="exportHTML();">Export to word doc</button> -->
	<!-- <button onclick="saveAsWord()">Save as Word</button> -->
  <button onclick="printDiv('content')" style="float: right;">Print Content</button>
		<form action="../PDS_upload.php" method="POST">
			<input type="submit" name="uploadPDS" id="uploadPDS_1" value="UPLOAD DATA" style="float: right;">
          
            <br class="break">
            <br class="break">
			
            <div id="pds-table" style="border: none;">
			
            <?php
				include("blankPagePDS_page_1.php");
			    ?>
			
            <!-- <br class="breakinthebottom"> -->
            <br>
            <br class="">
            <br class="">
          



            <?php
				include("blankPagePDS_page_2.php");
			    ?>
                  <!-- <br class="breakinthebottom"> -->
            <br>
            <br class="">
            <br class="">
            <br class="">
            <br class="">
            <br class="">
            <br class="">
            <br class="">
            <br class="">
            <br class="">
            <br class="">
         
           





            <?php
				include("blankPagePDS_page3.php");
			    ?>

            <br class="">
            <br class="">
            <br class="">
            <br class="">


                <?php
				include("blankPagePDS_page4.php");
			    ?>

                
		</form>
	</div>
</div>
	<script>
				
	// 			document.getElementById('saveAsPdfButton').addEventListener('click', function () {
    //     const element = document.getElementById('pds-table');
    //     html2pdf(element);
    // });	

	
// 	document.getElementById('saveAsPdfButton').addEventListener('click', function () {
//     const element = document.getElementById('pds-table');
//     const originalFontSizes = {}; // Object to store original font sizes

//     // Reduce font size of all elements inside the contentToSave element by 1.5px
//     element.querySelectorAll('*').forEach(el => {
//         // Store original font size
//         originalFontSizes[el.id] = window.getComputedStyle(el).fontSize;

//         // Reduce font size
//         let currentSize = parseFloat(originalFontSizes[el.id]);
//         el.style.fontSize = (currentSize - 1.6) + 'px';
//     });

//     // Adjust width and height of the element to fit on one page
//     element.style.width = '100%'; // Set the width to 100% or any desired value
//     element.style.height = '50%'; // Set the height to auto to fit content
    
//     const opt = {
//         margin:       3,
//         filename:     'experiment_form.pdf',
//         html2canvas:  { scale: 5 }, // Adjust scale as needed
//         jsPDF:        { unit: 'mm', format: 'legal', orientation: 'portrait' }
//     };
    
//     // Save as PDF
//     html2pdf().from(element).set(opt).save();

//     // Delay page refresh to ensure download completion
//     setTimeout(function() {
//         // Refresh the page after saving the PDF
//         location.reload();
//     }, 3000); // Adjust delay time as needed (in milliseconds)
// });



document.getElementById('saveAsPdfButton').addEventListener('click', function () {
    const element = document.getElementById('pds-table');
    const originalFontSizes = {}; // Object to store original font sizes

    // Reduce font size of all elements inside the contentToSave element by 1.5px
    element.querySelectorAll('*').forEach(el => {
        // Store original font size
        originalFontSizes[el.id] = window.getComputedStyle(el).fontSize;

        // Reduce font size
        let currentSize = parseFloat(originalFontSizes[el.id]);
        el.style.fontSize = (currentSize - 0.9) + 'px';
        
        // Remove margin and padding
        el.style.margin = '0';
        el.style.padding = '0.01';
    });

    // Adjust width and height of the element to fit on one page
    element.style.width = '100%'; // Set the width to 100% or any desired value
    element.style.height = '50%'; // Set the height to auto to fit content
    
    const opt = {
        margin:       3,
        filename:     'PDS_page1.pdf',
        html2canvas:  { scale: 5 }, // Adjust scale as needed
        jsPDF:        { unit: 'mm', format: 'legal', orientation: 'portrait' }
    };
    
    // Save as PDF
    html2pdf().from(element).set(opt).save();

    // Delay page refresh to ensure download completion
    setTimeout(function() {
        // Refresh the page after saving the PDF
        location.reload();
    }, 3000); // Adjust delay time as needed (in milliseconds)
});


	// function exportHTML(){
    //    var header = "<html xmlns:o='urn:schemas-microsoft-com:office:office' "+
    //         "xmlns:w='urn:schemas-microsoft-com:office:word' "+
    //         "xmlns='http://www.w3.org/TR/REC-html40'>"+
    //         "<head><meta charset='utf-8'><title>Export HTML to Word Document with JavaScript</title></head><body>";
    //    var footer = "</body></html>";
    //    var sourceHTML = header+document.getElementById("pds-table").innerHTML+footer;
       
    //    var source = 'data:application/vnd.ms-word;charset=utf-8,' + encodeURIComponent(sourceHTML);
    //    var fileDownload = document.createElement("a");
    //    document.body.appendChild(fileDownload);
    //    fileDownload.href = source;
    //    fileDownload.download = 'document.doc';
    //    fileDownload.click();
    //    document.body.removeChild(fileDownload);
    // }

	</script>

    <script src="../onlyCheckBoxIsCheck.js">   </script>

	
	<script src="../printPDSdiv.js">	</script>


    <script>

// function autocomplete(inp, arr) {
//   /*the autocomplete function takes two arguments,
//   the text field element and an array of possible autocompleted values:*/
//   var currentFocus;
//   /*execute a function when someone writes in the text field:*/
//   inp.addEventListener("input", function(e) {
//       var a, b, i, val = this.value;
//       /*close any already open lists of autocompleted values*/
//       closeAllLists();
//       if (!val) { return false;}
//       currentFocus = -1;
//       /*create a DIV element that will contain the items (values):*/
//       a = document.createElement("DIV");
//       a.setAttribute("id", this.id + "autocomplete-list");
//       a.setAttribute("class", "autocomplete-items");
//       /*append the DIV element as a child of the autocomplete container:*/
//       this.parentNode.appendChild(a);
//       /*for each item in the array...*/
//       for (i = 0; i < arr.length; i++) {
//         /*check if the item starts with the same letters as the text field value:*/
//         if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
//           /*create a DIV element for each matching element:*/
//           b = document.createElement("DIV");
//           /*make the matching letters bold:*/
//           b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
//           b.innerHTML += arr[i].substr(val.length);
//           /*insert a input field that will hold the current array item's value:*/
//           b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
//           /*execute a function when someone clicks on the item value (DIV element):*/
//           b.addEventListener("click", function(e) {
//               /*insert the value for the autocomplete text field:*/
//               inp.value = this.getElementsByTagName("input")[0].value;
//               /*close the list of autocompleted values,
//               (or any other open lists of autocompleted values:*/
//               closeAllLists();
//           });
//           a.appendChild(b);
//         }
//       }
//   });
//   /*execute a function presses a key on the keyboard:*/
//   inp.addEventListener("keydown", function(e) {
//       var x = document.getElementById(this.id + "autocomplete-list");
//       if (x) x = x.getElementsByTagName("div");
//       if (e.keyCode == 40) {
//         /*If the arrow DOWN key is pressed,
//         increase the currentFocus variable:*/
//         currentFocus++;
//         /*and and make the current item more visible:*/
//         addActive(x);
//       } else if (e.keyCode == 38) { //up
//         /*If the arrow UP key is pressed,
//         decrease the currentFocus variable:*/
//         currentFocus--;
//         /*and and make the current item more visible:*/
//         addActive(x);
//       } else if (e.keyCode == 13) {
//         /*If the ENTER key is pressed, prevent the form from being submitted,*/
//         e.preventDefault();
//         if (currentFocus > -1) {
//           /*and simulate a click on the "active" item:*/
//           if (x) x[currentFocus].click();
//         }
//       }
//   });
//   function addActive(x) {
//     /*a function to classify an item as "active":*/
//     if (!x) return false;
//     /*start by removing the "active" class on all items:*/
//     removeActive(x);
//     if (currentFocus >= x.length) currentFocus = 0;
//     if (currentFocus < 0) currentFocus = (x.length - 1);
//     /*add class "autocomplete-active":*/
//     x[currentFocus].classList.add("autocomplete-active");
//   }
//   function removeActive(x) {
//     /*a function to remove the "active" class from all autocomplete items:*/
//     for (var i = 0; i < x.length; i++) {
//       x[i].classList.remove("autocomplete-active");
//     }
//   }
//   function closeAllLists(elmnt) {
//     /*close all autocomplete lists in the document,
//     except the one passed as an argument:*/
//     var x = document.getElementsByClassName("autocomplete-items");
//     for (var i = 0; i < x.length; i++) {
//       if (elmnt != x[i] && elmnt != inp) {
//         x[i].parentNode.removeChild(x[i]);
//       }
//     }
//   }
//   /*execute a function when someone clicks in the document:*/
//   document.addEventListener("click", function (e) {
//       closeAllLists(e.target);
//   });
// }


// var countries = <?php
//     $conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//     if ($conn->connect_error) {
//         die("Connection failed: " . $conn->connect_error);
//     }

//     $sql = "SELECT DISTINCT CONCAT(surname, ', ', firstname, ' ', middle_name) AS full_name FROM employeeid"; // Modify your SQL query as needed
//     // $sql = "SELECT CONCAT(surname, ', ', firstname, ' ', COALESCE(middlename, '')) AS full_name 
//     // FROM applicationforleave 
//     // WHERE CONCAT(surname, ', ', firstname, ' ', COALESCE(middlename, '')) LIKE '%$search%';
//     // ";
//     $result = $conn->query($sql);

//     $nameArray = array(); // Initialize an array to store data

//     if ($result->num_rows > 0) {
//         while ($row = $result->fetch_assoc()) {
//             $nameArray[] = $row['full_name']; // Corrected the field name to 'full_name'
//         }
//         echo json_encode($nameArray); // Output as JSON
//     } else {
//         echo '[]'; // Output an empty JSON array if no results found
//     }

//     $conn->close();
// ?>;
// console.log(countries);
// // it is a last minute edit countries should be name should be name Name of student. 

// /*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
// autocomplete(document.getElementById("searchName"), countries);
</script>

	
</body>
</html>


<!-- please keep this code | april 1 2024 this code is pasted here -->