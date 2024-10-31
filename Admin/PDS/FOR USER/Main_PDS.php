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
    <link rel="shortcut icon" type="image/png" href="psa logo.png">


    <style>


* {
  box-sizing: border-box;
}

img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */


/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  /* padding: 2px 16px; */
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
  
}
.row{
    display: flex;
    justify-content: center;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
  background-color: gray;
  border: 1px solid black;
  text-align: center;
  color: white;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
</style>
	




	<link rel="stylesheet" href="style/style.css">
	<link rel="stylesheet" href="style/PDS_p1.css">
    <link rel="stylesheet" href="style/PDS_p4.css">
</head>
<body>


<form action="Main_PDS.php" method="POST" id="searchForm" style="float: right;">
        <input type="text" name="search" placeholder="Enter ID to search">
        <input type="submit" value="Search" name="searchBox">
		
       
    </form>
<?php
require_once "../../Config/config.php";

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);



if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$search= '';


if (isset($_POST["searchBox"])){
    $search = isset($_POST["search"]) ? $_POST["search"] : "";
}


// echo $search;
$sql2 = "
    SELECT p.*
    FROM pds p
    INNER JOIN employeeid e ON 
        p.surname = e.surname AND 
        p.firstname = e.firstname AND 
        p.middlename = e.middle_name AND 
        p.nameextension = e.name_extension
    WHERE 
        (e.EmployeeID = '$search')
    LIMIT 1
";


// $sql2 = "SELECT * FROM pds WHERE employeeID= 'EMP001'";

$result = $conn->query($sql2);

if ($result->num_rows > 0) {
    // Loop through the fetched data
// Loop through the fetched data
while ($rows = $result->fetch_assoc()) {

	$sex =  $rows['Sex'];
	$citizenship =  $rows['Citizenship'];
	$civilStatus =  $rows['civilstatus'];
	$dualCitizenship = $rows['ifDualCitizenship'];
    $datePage2 = $rows['page2Date'];


?>

	<div class="table-responsive p-3 pdsTable" id="content">
    <button onclick="printDiv('content')" id="printButton">Print Content</button>
    <button id="saveAsPdfButton" style="float: right;">Save as PDF</button>
    <!-- <button id="btn-export" onclick="exportHTML();">Export to word doc</button> -->
    <!-- <button onclick="saveAsWord()">Save as Word</button> -->

    <form id="myForm" action="updatePDS.php" method="POST">
        <div style="float: right;">
            <!-- <input type="submit" name="uploadPDS" id="uploadPDS_1" value="UPLOAD DATA" style=""> -->
            <input type="submit" name="updatePDS" id="updatePDS_1" value="UPDATE DATA" style="">
        </div>
        <br class="break">
        <br class="break">

        <div id="pds-table" style="border: none;">

                                                
                                        
    
                                
        <div id="myCarousel" class="container">

        <div class="row" id="rowofPindotanNgPage" >
                    <div class="column">
                        <div class="demo cursor" style="width:100%;height:40px;" onclick="currentSlide(1)">1</div>
                    </div>
                    <div class="column">
                        <div class="demo cursor" style="width:100%;height:40px;" onclick="currentSlide(2)">2</div>
                    </div>
                    <div class="column">
                        <div class="demo cursor" style="width:100%;height:40px;" onclick="currentSlide(3)">3</div>
                    </div>
                    <div class="column">
                        <div class="demo cursor" style="width:100%;height:40px;" onclick="currentSlide(4)">4</div>
                    </div>
                   
                </div>


<!--                 
                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a> -->

              


                <div class="mySlides">
                    <!-- <div class="numbertext">1 / 4</div> -->
                    <div><?php include("PDS_page_1.php"); ?><div style="float: right;"><p class="theFooterParagraphinbelow"><i> CS FORM 212 (Revised 2017), Page 1 of 4</i></p></div></div>
                </div>

                <div class="mySlides">
                    <!-- <div class="numbertext">2 / 6</div> -->
                    <div><?php include("PDS_page_2.php"); ?><div style="float: right;"><p class="theFooterParagraphinbelow"><i> CS FORM 212 (Revised 2017), Page 2 of 4</i></p></div></div>
                </div>

                <div class="mySlides">
                    <!-- <div class="numbertext">3 / 6</div> -->
                    <div><?php include("PDS_page_3.php"); ?><div style="float: right;"><p class="theFooterParagraphinbelow"><i> CS FORM 212 (Revised 2017), Page 3 of 4</i></p></div></div>
                </div>

                <div class="mySlides">
                    <!-- <div class="numbertext">4 / 6</div> -->
                    <div><?php include("PDS_page_4.php"); ?> <div style="float: right;"><p class="theFooterParagraphinbelow"><i> CS FORM 212 (Revised 2017), Page 4 of 4</i></p></div>   </div>
                </div>

              


                

             
</div>

          
        
  

        </div>
    </form>
</div>





<script>
let slideIndex = 1;

// Retrieve the index of the last clicked slide from local storage
let lastClickedSlideIndex = localStorage.getItem('lastClickedSlide');
console.log('Retrieved slide index:', lastClickedSlideIndex);

// If there's a last clicked slide, show it
if (lastClickedSlideIndex) {
    showSlides(parseInt(lastClickedSlideIndex));
}

function showSlides(n) {
    slideIndex = n; // Update slideIndex globally
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("demo");
    if (n > slides.length) { slideIndex = 1; }
    if (n < 1) { slideIndex = slides.length; }
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (let i = 0; i < dots.length; i++) {
        dots[i].classList.remove("active");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].classList.add("active");
}

// Function to show/hide slides based on the clicked dot
function currentSlide(n) {
    showSlides(n);
    // Store the index of the last clicked slide in local storage
    localStorage.setItem('lastClickedSlide', n);
    console.log('Stored slide index:', n);
}


// let slideIndex = 1;
// showSlides(slideIndex);

// function plusSlides(n) {
//     showSlides(slideIndex += n);
// }

// function currentSlide(n) {
//     showSlides(slideIndex = n);
// }

// function showSlides(n) {
//     let i;
//     let slides = document.getElementsByClassName("mySlides");
//     let dots = document.getElementsByClassName("demo");
//     if (n > slides.length) { slideIndex = 1; }
//     if (n < 1) { slideIndex = slides.length; }
//     for (i = 0; i < slides.length; i++) {
//         slides[i].style.display = "none";
//     }
//     for (i = 0; i < dots.length; i++) {
//         dots[i].classList.remove("active");
//     }
//     slides[slideIndex - 1].style.display = "block";
//     dots[slideIndex - 1].classList.add("active");
// }





    
document.getElementById('saveAsPdfButton').addEventListener('click', function () {
    const element = document.getElementById('pds-table');
    const originalFontSizes = {}; // Object to store original font sizes

    
    element.querySelectorAll('.p4NeedResize').forEach(el => {
        el.style.fontSize= '9.7px';
    });
    // Reduce font size of all elements
    element.querySelectorAll('*').forEach(el => {
        originalFontSizes[el.id] = window.getComputedStyle(el).fontSize;
        let currentSize = parseFloat(originalFontSizes[el.id]);
        el.style.fontSize = (currentSize - 0.9) + 'px';
        el.style.margin = '0';
        el.style.padding = '0.01';
    });

    // Specifically target elements with the class 'address_LowPart'
    element.querySelectorAll('.address_LowPart').forEach(el => {
        el.style.borderTop = '3px solid gray';
    });

    // Hide specific row
    const rowToHide = document.getElementById('rowofPindotanNgPage');
    if (rowToHide) {
        rowToHide.style.display = 'none';
    }

    const pdsp4idtable = document.getElementById('pdsp4idtable');
    if (pdsp4idtable) {
        pdsp4idtable.style.margin = '0 auto';
    }

    

  
   

    const opt = {
        margin: 3,
        filename:  ' <?php echo $rows['firstname']; ?> <?php echo $rows['surname']; ?> PDS page '+slideIndex +' .pdf',
        html2canvas: { scale: 5 },
        jsPDF: { unit: 'mm', format: 'legal', orientation: 'portrait' }
    };
    
    html2pdf().from(element).set(opt).save();

    setTimeout(function() {
        location.reload();
    }, 3000);
});



</script>





	<!-- <script src="saveToPDF.js">	</script> -->

    <script src="onlyCheckBoxIsCheck.js">   </script>

	
	<script src="printPDSdiv.js">	</script>

	
</body>
</html>

<?php
}
} else {
    // If no rows are found, echo "no results found"
    echo "Acount is currently not created PDS record";
    echo "<script>
    alert('Acount is currently not created a PDS record or does not have a record');
    window.location.href = 'BlankPagePDS/Main_blankPage.php'; // Redirect to a relevant page
  </script>";
?>
<!-- 
<div>
	<a href="Main_PDS.php">Return</a>
</div> -->

<?php

}
?>

<?php
// Close the connection
mysqli_close($conn);
?>





<!-- please keep this code | april 1 2024 this code is pasted here -->