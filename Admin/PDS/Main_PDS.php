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
    /* ======autocomplete, css styling for the search of lastname===== */

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

    .mySlidesP3 {
      display: none;
    }

    .mySlidesP2 {
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

    .rowP3:after {
      content: "";
      display: table;
      clear: both;

    }

    .rowP2:after {
      content: "";
      display: table;
      clear: both;

    }

    .row {
      display: flex;
      justify-content: center;
    }

    .rowP3 {
      display: flex;
      justify-content: center;
    }

    .rowP2 {
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

    .columnP3 {
      float: left;
      width: 16.66%;
      background-color: gray;
      border: 1px solid black;
      text-align: center;
      color: white;
    }

    .columnP2 {
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

    .demoP3 {
      opacity: 0.6;
    }

    .demoP2 {
      opacity: 0.6;
    }

    .active,
    .demo:hover {
      opacity: 1;
    }

    .activeP3,
    .demoP3:hover {
      opacity: 1;
    }

    .activeP2,
    .demoP2:hover {
      opacity: 1;
    }
  </style>





  <link rel="stylesheet" href="style/style.css">
  <link rel="stylesheet" href="style/PDS_p1.css">
  <link rel="stylesheet" href="style/PDS_p4.css">
</head>

<body>

  <!-- ==========================search for ID=============== -->
  <!-- <form action="Main_PDS.php" method="POST" id="searchForm" style="float: right;">
        <input type="text" name="search" placeholder="Enter ID to search">
        <input type="submit" value="Search" name="searchBox">
		
       
    </form> -->

  <!-- =======================search for name=================== -->

  <form action="Main_PDS.php" method="POST" id="searchForm" style="float: right;">
    <div class="autocomplete" style="display:inline-block;">
      <input type="text" name="search" autocomplete="off" id="searchName" placeholder="Enter Name to search">
    </div>
    <input type="submit" value="Search" name="searchBox">


  </form>
  <!-- ==================================== -->
  <?php
  require_once "../../Config/config.php";

  $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);



  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  $search = '';


  if (isset($_POST["searchBox"])) {
    $search = isset($_POST["search"]) ? $_POST["search"] : "";
  }


  // echo $search;
  // $sql2 = " 
  //     SELECT p.*
  //     FROM pds p
  //     INNER JOIN employeeid e ON 
  //         p.surname = e.surname AND 
  //         p.firstname = e.firstname AND 
  //         p.middlename = e.middle_name AND 
  //         p.nameextension = e.name_extension
  //     WHERE 
  //         (e.EmployeeID = '$search')
  //     LIMIT 1
  // ";
  // $search = '12543';

  $sql2 = "
SELECT p.*
FROM pds p
INNER JOIN (
    -- Query to identify and resolve duplicates in the employeeid table
    -- You can replace this subquery with the appropriate join condition once duplicates are resolved
    SELECT DISTINCT surname, firstname, middle_name, name_extension
    FROM employeeid
) e ON 
    p.surname = e.surname AND 
    p.firstname = e.firstname AND 
    p.middlename = e.middle_name AND 
    p.nameextension = e.name_extension
WHERE 
    CONCAT(p.surname, ', ', p.firstname, ' ', p.middlename) = '$search'
LIMIT 1;
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
        <button onclick="printDiv('content')" id="printButton" style="float: right;">Print Content</button>
        <button id="saveAsPdfButton" style="float: right;">Save as PDF</button>
        <!-- HTML code -->
        <button id="ListLink" style="float: left;" onclick="window.location.href='pdsallrecords.php'">List</button>

        <!-- <button id="btn-export" onclick="exportHTML();">Export to word doc</button> -->
        <!-- <button onclick="saveAsWord()">Save as Word</button> -->


        <form id="myForm" action="updatePDS.php" method="POST">
          <div style="float: right;">
            <!-- <input type="submit" name="uploadPDS" id="uploadPDS_1" value="UPLOAD DATA" style=""> -->
            <input type="submit" name="updatePDS" id="updatePDS_1" value="UPDATE DATA" >
          </div>
          <br class="break">
          <br class="break">

          <div id="pds-table" style="border: none;">





            <div id="myCarousel" class="container">

              <div class="row" id="rowofPindotanNgPage">
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


              <!-- ====================PDS page 1=============================================================================================================================================== -->


              <div class="mySlides">
                <!-- <div class="numbertext">1 / 4</div> -->
                <div>
                  <?php include("PDS_page_1.php"); ?>
                  <div style="float: right;">
                    <p class="theFooterParagraphinbelow"><i> CS FORM 212 (Revised 2017), Page 1 of 4</i></p>
                  </div>
                </div>
              </div>

              <div class="mySlides">
                <!-- <div class="numbertext">2 / 6</div> -->


                <!-- =================================PDS page 2================================================================================================================================== -->


                <!-- ************************************************************************************** -->



                <?php

                $sqlp3Loop2ndloop = "SELECT DISTINCT referenceWrkexprID FROM pdspage2_workexperience WHERE CONCAT(surname, ', ', firstname, ' ', middlename) = ? 
                ORDER BY STR_TO_DATE(inclusiveDatesFrom, '%m/%d/%Y') DESC;
                ";
                // echo $sqlp3Loop2ndloop;
                $workExpArray = [];
                // Prepare the SQL statement
                $stmt = $conn->prepare($sqlp3Loop2ndloop);
                $stmt->bind_param("s", $search); // 's' specifies the variable type => 'string'

                // Execute the statement
                $stmt->execute();
                $result = $stmt->get_result();

                // Initialize row counter
                $countArray = 0;

                if ($result->num_rows > 0) {
                  // Loop through the results
                  while ($row = $result->fetch_assoc()) {
                    $workExpArray[] = $row["referenceWrkexprID"];
                    $countArray++;
                    // Display the data here, or do something with it
                  }
                }

                // echo$countArray;
                $P22 = 0;

                // ========================================================memow end

                $sqlp3Loop = "SELECT DISTINCT * FROM pdspage2_workexperience WHERE CONCAT(surname, ', ', firstname, ' ', middlename) = ?";

                // Prepare the SQL statement
                $stmt = $conn->prepare($sqlp3Loop);
                $stmt->bind_param("s", $search); // 's' specifies the variable type => 'string'

                // Execute the statement
                $stmt->execute();
                $result = $stmt->get_result();

                // Initialize row counter
                $rowCountM = 0;

                if ($result->num_rows > 0) {
                  // Loop through the results
                  while ($row = $result->fetch_assoc()) {
                    $rowCountM++;
                    // Display the data here, or do something with it
                  }
                }

                $start = 1;
                $end = $rowCountM;
                $chunkSize = $numRowsP2 = 10;
                $numRowsP2 = 10;
                $numLoopsP2 = $rowCountM / 10;

                $P22T1 = 0;
                $P22T3 = 0;

                $endP2t1 = 0;
                $rowSizeP2t1 = 5;

                ?>

                <div>
                  <!-- =========================== -->
                  <div id="myCarouselP2" class="containerP2">
                    <div class="rowP2" id="rowofPindotanNgPageP2">
                      <?php
                      for ($k = 0; $k <= $numLoopsP2; $k++) {
                        echo '<div class="columnP2">';
                        echo '  <div class="demoP2 cursor" style="width:100%;height:40px;" onclick="currentSlideP2(' . ($k + 1) . ')">' . ($k + 1) . '</div>';
                        echo '</div>';
                      }
                      ?>
                    </div>
                  </div>

                  <div id="myTable">
                    <?php
                    // if ($rowCountM >= 10) {
                    for ($i = $start; $i <= $end; $i += $chunkSize) {
                    ?>
                      <div class="mySlidesP2">
                        <?php include("PDS_page_2.php"); ?>
                      </div>
                    <?php
                    }
                    //}
                    ?>
                  </div>

                </div>

                <!-- ***************************************************************************************** -->
                <div>
                  <div style="float: right;">
                    <p class="theFooterParagraphinbelow"><i> CS FORM 212 (Revised 2017), Page 2 of 4</i></p>
                  </div>
                </div>

              </div>


              <!-- =======================================PDS page 3============================================================================================================================ -->



              <div class="mySlides">
                <!-- ================================================================ -->
                <?php

                // ================================

                $sqlp3Loop2ndloopP3 = "SELECT DISTINCT rowReference FROM pds_p3_titleoflearnanddevintervsn_2ndtable WHERE CONCAT(surname, ', ', firstname, ' ', middlename) = ? 
                ORDER BY STR_TO_DATE(inclusiveDatesFromT2, '%m/%d/%Y') DESC;
                ";
                // echo $sqlp3Loop2ndloopP3;
                $trainingArray = [];
                // Prepare the SQL statement
                $stmt = $conn->prepare($sqlp3Loop2ndloopP3);
                $stmt->bind_param("s", $search); // 's' specifies the variable type => 'string'

                // Execute the statement
                $stmt->execute();
                $result = $stmt->get_result();

                // Initialize row counter
                $countArray = 0;

                if ($result->num_rows > 0) {
                  // Loop through the results
                  while ($row = $result->fetch_assoc()) {
                    $trainingArray[] = $row["rowReference"];
                    $countArray++;
                    // Display the data here, or do something with it
                  }
                }

                // echo$countArray;
                $p32 = 0;

                // ================================
                $sqlp3Loop = "SELECT DISTINCT * FROM pds_p3_titleoflearnanddevintervsn_2ndtable WHERE CONCAT(surname, ', ', firstname, ' ', middlename) = ?";

                // Prepare the SQL statement
                $stmt = $conn->prepare($sqlp3Loop);
                $stmt->bind_param("s", $search); // 's' specifies the variable type => 'string'

                // Execute the statement
                $stmt->execute();
                $result = $stmt->get_result();

                // Initialize row counter
                $rowCountM = 0;

                if ($result->num_rows > 0) {
                  // Loop through the results
                  while ($row = $result->fetch_assoc()) {
                    $rowCountM++;
                    // Display the data here, or do something with it
                  }
                }

                $start = 1;
                $end = $rowCountM;
                $chunkSize =  $numRowsP3 = 10;
                // Close the statement
                // $stmt->close();
                $numRowsP3 = 10;
                $numLoopsP3 = $rowCountM / 10;

                $p32T1 = 0;
                $p32T3 = 0;

                $endt1 = 0;
                $rowSizet1 = 5;

                $endt3 = 0;
                $rowSizet3 = 5;


                ?>



                <div>
                  <!-- =========================== -->
                  <div id="myCarouselP3" class="containerP3">
                    <div class="rowP3" id="rowofPindotanNgPageP3">
                      <?php
                      for ($k = 0; $k <= $numLoopsP3; $k++) {

                        echo '<div class="columnP3">';
                        echo '  <div class="demoP3 cursor" style="width:100%;height:40px;" onclick="currentSlideP3(' . ($k + 1) . ')">' . ($k + 1) . '</div>';
                        echo '</div>';
                      }

                      ?>

                      <!-- You can add more columns here if needed -->
                    </div>
                  </div>

                  <?php


                  // if ($rowCountM >= 10) {
                  for ($i = $start; $i <= $end; $i += $chunkSize) {
                  ?>




                    <div class="mySlidesP3">
                      <?php include("PDS_page_3.php"); ?>
                    </div>

                  <?php
                  }
                  //}
                  ?>



                </div>
                <!-- ==================================================================================================== -->
                <div style="float: right;">
                  <p class="theFooterParagraphinbelow"><i> CS FORM 212 (Revised 2017), Page 3 of 4</i></p>
                </div>
              </div>
              <br>
            </div>

            <!-- =================PDS page 4================================================================================================================================================== -->

            <div class="mySlides">
              <!-- <div class="numbertext">4 / 6</div> -->
              <div><?php include("PDS_page_4.php"); ?>
                <div style="float: right;">
                  <p class="theFooterParagraphinbelow"><i> CS FORM 212 (Revised 2017), Page 4 of 4</i></p>
                </div>
              </div>
            </div>

            <!-- =================================================================================================================================================================== -->






          </div>





      </div>
      </form>
      </div>





      <script>
        //javascript code for displaying the page 1 - 4 of the pds. (best not touch unless it was necessary)
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
          if (n > slides.length) {
            slideIndex = 1;
          }
          if (n < 1) {
            slideIndex = slides.length;
          }
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


        // ================================================
        let slideIndexP3 = 1;

        // Retrieve the index of the last clicked slide from local storage
        let lastClickedSlideIndexP3 = localStorage.getItem('lastClickedSlideP3');
        console.log('Retrieved slide index P3:', lastClickedSlideIndexP3);

        // If there's a last clicked slide, show it
        if (lastClickedSlideIndexP3) {
          showSlidesP3(parseInt(lastClickedSlideIndexP3));
        }

        function showSlidesP3(n) {
          slideIndexP3 = n; // Update slideIndexP3 globally
          let slides = document.getElementsByClassName("mySlidesP3");
          let dots = document.getElementsByClassName("demoP3");
          if (n > slides.length) {
            slideIndexP3 = 1;
          }
          if (n < 1) {
            slideIndexP3 = slides.length;
          }
          for (let i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
          }
          for (let i = 0; i < dots.length; i++) {
            dots[i].classList.remove("activeP3");
          }
          slides[slideIndexP3 - 1].style.display = "block";
          dots[slideIndexP3 - 1].classList.add("activeP3");
        }

        // Function to show/hide slides based on the clicked dot
        function currentSlideP3(n) {
          showSlidesP3(n);
          // Store the index of the last clicked slide in local storage
          localStorage.setItem('lastClickedSlideP3', n);
          console.log('Stored slide index P3:', n);
        }


        // =============================================

        let slideIndexP2 = 1;

        // Retrieve the index of the last clicked slide from local storage
        let lastClickedSlideIndexP2 = localStorage.getItem('lastClickedSlideP2');
        console.log('Retrieved slide index P2:', lastClickedSlideIndexP2);

        // If there's a last clicked slide, show it
        if (lastClickedSlideIndexP2) {
          showSlidesP2(parseInt(lastClickedSlideIndexP2));
        }

        function showSlidesP2(n) {
          slideIndexP2 = n; // Update slideIndexP2 globally
          let slides = document.getElementsByClassName("mySlidesP2");
          let dots = document.getElementsByClassName("demoP2");
          if (n > slides.length) {
            slideIndexP2 = 1;
          }
          if (n < 1) {
            slideIndexP2 = slides.length;
          }
          for (let i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
          }
          for (let i = 0; i < dots.length; i++) {
            dots[i].classList.remove("activeP2");
          }
          slides[slideIndexP2 - 1].style.display = "block";
          dots[slideIndexP2 - 1].classList.add("activeP2");
        }

        // Function to show/hide slides based on the clicked dot
        function currentSlideP2(n) {
          showSlidesP2(n);
          // Store the index of the last clicked slide in local storage
          localStorage.setItem('lastClickedSlideP2', n);
          console.log('Stored slide index P2:', n);
        }



        // =============================================

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




        // this part is the javascript code for saving the content as pdf when clicking the button



        document.getElementById('saveAsPdfButton').addEventListener('click', function() {
          const element = document.getElementById('pds-table');
          const originalFontSizes = {}; // Object to store original font sizes


          element.querySelectorAll('.p4NeedResize').forEach(el => {
            el.style.fontSize = '9.7px';
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


          element.querySelectorAll('.containerP3').forEach(el => {
            el.style.display = 'none';
          });


          element.querySelectorAll('.containerP2').forEach(el => {
            el.style.display = 'none';
          });

          element.querySelectorAll('.hide-but').forEach(el => {
            el.style.display = 'none';
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
            filename: ' <?php echo $rows['firstname']; ?> <?php echo $rows['surname']; ?> PDS page ' + slideIndex + ' .pdf',
            html2canvas: {
              scale: 5
            },
            jsPDF: {
              unit: 'mm',
              format: 'legal',
              orientation: 'portrait'
            }
          };

          html2pdf().from(element).set(opt).save();

          setTimeout(function() {
            location.reload();
          }, 3000);
        });
      </script>





      <!-- <script src="saveToPDF.js">	</script> -->

      <script src="onlyCheckBoxIsCheck.js"> </script>


      <script src="printPDSdiv.js"> </script>




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
<script>
  // ==================================javascript code for the autocomple to display the data or the lastname when inputed
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

                  $sql = "SELECT DISTINCT CONCAT(surname, ', ', firstname, ' ', middle_name) AS full_name FROM employeeid;
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




<!-- please keep this code | april 1 2024 this code is pasted here -->