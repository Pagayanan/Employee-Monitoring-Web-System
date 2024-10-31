<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>Admin</title>
    <link rel="shortcut icon" type="image/png" href="psa logo.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css for dashboard/bootstrap.min.css">
    <!----css3---->
    <link rel="stylesheet" href="css for dashboard/coestyle.css">
    <!--google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.4/xlsx.full.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mammoth/1.4.2/mammoth.browser.min.js"></script>


    <!--google material icon-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">

    <style>

    </style>

</head>

<body>



    <div class="wrapper">


        <div class="body-overlay"></div>

        <!-------sidebar--design------------>

        <div id="sidebar">
            <div class="sidebar-header">
                <h3><img src="images for dashboard/psa logo.png" class="img-fluid" /><span>Philippine Statistic Authority</span></h3>
            </div>
            <ul class="list-unstyled component m-0">
                <li class="">
                    <a href="/NCR-V PROJECT/Admin/Super Admin Main/admin_homepage.php" class="dashboard"><i class="material-icons">home</i>Home</a>
                </li>
                <li class="">
                    <a href="/NCR-V PROJECT/Admin/Super Admin Main/index.php" class="dashboard"><i class="material-icons">article</i>Main Page</a>
                </li>
                <!-- <li class="">
                    <a href="pds.php">


                        <i class="material-icons"><span class="material-symbols-outlined">
                                assignment_ind
                            </span></i>PDS
                    </a>
                </li> -->


                <!-- <li class="">
                    <a href="coe.php">
                        <i class="material-icons"><span class="material-symbols-outlined">
                                card_membership
                            </span></i>COE
                    </a>
                </li> -->

                <!-- <li class="dropdown">
                    <a href="lev.php">
                        <i class="material-icons"><span class="material-symbols-outlined">
                                badge
                            </span></i>Leave
                    </a>
                </li> -->


                <!-- <li class="dropdown">
                    <a href="cot.php">
                        <i class="material-icons"><span class="material-symbols-outlined">
                                article
                            </span></i>COT
                    </a>
                </li> -->





                <li class="">
                    <a href="#homeSubmenu6" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="material-icons"><span class="material-symbols-outlined">
                                folder
                            </span></i>All File
                    </a>
                    <ul class="collapse list-unstyled menu" id="homeSubmenu6">
                        <li>
                            <a href="/NCR-V PROJECT/Admin/COE/coe.php">
                                <i class="material-icons"><span class="material-symbols-outlined">card_membership</span></i>
                                COE
                            </a>
                        </li>
                        <li>
                            <a href="/NCR-V PROJECT/Admin/PDS/pds.php">
                                <i class="material-icons"><span class="material-symbols-outlined">assignment_ind</span></i>
                                PDS
                            </a>
                        </li>
                        <li>
                            <a href="/NCR-V PROJECT/Admin/COT/cot.php">
                                <i class="material-icons"><span class="material-symbols-outlined">article </span></i>
                                COT
                            </a>
                        </li>
                        <li>
                            <a href="/NCR-V PROJECT/Admin/LEV/lev.php">
                                <i class="material-icons"><span class="material-symbols-outlined"> badge</span></i>
                                LEV
                            </a>
                        </li>
                        <li>
                            <a href="../File_Management/FileManagement.php">
                                <i class="material-icons"><span class="material-symbols-outlined"> badge</span></i>
                                File Managment
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="active">
                    <a href="#">
                        <i class="material-icons"><span class="material-symbols-outlined"> bar_chart</span></i>
                        Progress Monitoring Report
                    </a>
                </li>



                <li class="dropdown">
                    <a href="#homeSubmenu5" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="material-icons"><span class="material-symbols-outlined">
                                inventory
                            </span></i>Inventory
                    </a>
                    <ul class="collapse list-unstyled menu" id="homeSubmenu5">
                        <!-- <li><a href="#">Dashboard</a></li>
                        <li><a href="item.php">All Items</a></li> -->
                        <li><a href="../../ITEM INVENTORY/Tablet List/list_of_tablet.php">Items Availability</a></li>
                    </ul>
                </li>

                <!-- list of Admin -->







                <li class="dropdown">
                    <a href="indexpsa.php" id="logout">
                        <i class="material-icons"><span class="material-symbols-outlined">
                                logout
                            </span></i>Logout
                    </a>
                </li>


            </ul>
        </div>
        <!-------sidebar--design- close----------->



        <!-------page-content start----------->

        <div id="content">


            <!------top-navbar-start----------->
            <style>
                body {
                    background-color: cadetblue;
                }

                .top-navbar .for_header {
                    border-radius: 30px;
                    display: block;
                    position: relative;
                    inline-size: 53%;
                    background-color: darkolivegreen;
                }

                .top-navbar .for_header .p {
                    position: relative;
                    display: inline-block;

                }
            </style>

            <div class="top-navbar">
                <section></section>
                <div class="for_header" style="padding-left: 160px; font-size:30px; font-weight:bolder; font-family:Georgia, Serif;" class="head">PSO NCR-V Management System<br>
                    <p style="font-size: large; color:goldenrod;" id="datetime" class="topcorner"></p>
                </div>
                <script style="background-color:black;" src="js for dashboard/realtime.js"></script>
                <div class="xd-topbar">
                    <!-- <div class="input-group">
                        
                    </div> -->
                    <div class="row">
                        <div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center">
                            <div class="xp-menubar">
                                <span class="material-icons text-white">signal_cellular_alt</span>
                            </div>
                        </div>

                        <!----<div class="col-md-5 col-lg-3 order-3 order-md-2">
	<div class="xp-searchbar">
	<form action="index.php" method="GET">
	<div class="input-group">
	<input type="search" name="search_query" class="form-control" placeholder="Search Employee">
	<div class="input-group-append">
	<button class="btn" type="submit" id="button-addon2">Go</button>
	</div>
	</div>
	</form>
	</div>
	</div>--->








                        <div class="col-10 col-md-1 col-lg-8 order-2 order-md-3">
                            <div class="xp-profilebar text-right">
                                <nav class="navbar p-0">
                                    <ul class="nav navbar-nav flex-row ml-auto">
                                        <li class="dropdown nav-item active">
                                            <!---<ul class="dropdown-menu">
	<li><a href="#">You Have 4 New Messages</a></li>
	<li><a href="#">You Have 4 New Messages</a></li>
	<li><a href="#">You Have 4 New Messages</a></li>
	<li><a href="#">You Have 4 New Messages</a></li>
	</ul>
	</li>-->

                                            <!--<li class="nav-item">
	<a class="nav-link" href="#">
	<span class="material-icons">question_answer</span>
	</a>
	</li>-->

                                            <!--<li class="dropdown nav-item">

	<a class="nav-link" href="#" data-toggle="dropdown">

	<img src="img/admin.png" style="width:50px; border-radius:0%;" />
	<span style="font-family: Madimi One; font-size: 16px; font-weight: bold; font-style: math-sans bold; color: rgb(95, 255, 95);">Admin</span>

	</a>
	<ul class="dropdown-menu small-menu">
	<li><a href="#">
	<span class="material-icons">person_outline</span>
	Profile
	</a></li>
	<li><a href="#">
	<span class="material-icons">settings</span>
	Settings
	</a></li>
	<li><a href="#" id="logout">
	<span class="material-icons">logout</span>
	Logout
	</a></li>

	</ul>
	</li>-->


                                    </ul>
                                </nav>
                            </div>
                        </div>

                    </div>

                    <!---------Title of Company------>
                    <!----<div class="xp-breadcrumbbar text-center">
	<img class="logo" src="psa logo.png" alt="Logo" width="85" height="90">
	<img class="logo-left" src="img/logph.png" alt="Second logo" width="130" height="140">

	<p style="color:rgb(255, 255, 255); font-size: small;">Republic of the Phillipines</p>
	<h3 style="color:rgb(255, 255, 255); font-size: small;">PHILIPPINE STATISTIC AUTHORITY</h3>
	<h4 style="color:rgb(255, 255, 255); font-size: small;">Regional Statistical Service
	Office<br>National Capital Region-Provincial
	Statistical Office V<br> Employee Website</br></h4>
	</div>--->




                </div>
            </div>
            <!------top-navbar-end----------->

            <!----------------------------------->
            <!----------------------------------->
            <!------main-content-start----------->
            <!----------------------------------->
            <!----------------------------------->
            <!----------------------------------->
            <style>
                .maintenance {
                    border-radius: 30px;
                    padding-left: 710px;
                    padding-top: 200px;
                    width: 100%;
                    display: relative;
                    align-items: center;
                }
            </style>

            <div class="maintenance">
                <h3><img style="border-radius: 60px;" src="images for dashboard/ongoing.jpg" class="img-fluid" /><span></span></h3>
                <a href="progress.php">
                    <button style="background-color:teal; color:black; font-weight:bold; border-radius:10px; font-size:15px;" class="LFS">Go Back?</button>
                </a>
            </div>








            <!-------complete html----------->

            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="js for dashboard/jquery-3.3.1.slim.min.js"></script>
            <script src="js for dashboard/popper.min.js"></script>
            <script src="js for dashboard/bootstrap.min.js"></script>
            <script src="js for dashboard/jquery-3.3.1.min.js"></script>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



            <script type="text/javascript">
                $(document).ready(function() {
                    $(".xp-menubar").on('click', function() {
                        $("#sidebar").toggleClass('active');
                        $("#content").toggleClass('active');
                    });

                    $('.xp-menubar,.body-overlay').on('click', function() {
                        $("#sidebar,.body-overlay").toggleClass('show-nav');
                    });

                });



                /*----------Confirm Logout-------*/
                function confirmLogout() {
                    // Display confirmation dialog
                    if (confirm("Are you sure you want to logout?")) {
                        // If user clicks "Yes", redirect to logout page
                        window.location.href = "../../indexpsa.php";
                    }
                }

                // Attach event listener to logout button
                document.getElementById("logout").addEventListener("click", function(event) {
                    // Prevent default link behavior
                    event.preventDefault();
                    // Call function to confirm logout
                    confirmLogout();
                });




                /*------------Add button-------------*/
            </script>
            </script>
            </script>
            <!-- <script>
                let slideIndex = 1;

                // Retrieve the index of the last clicked slide from local storage
                let lastClickedSlideIndex = localStorage.getItem('lastClickedSlide');
                console.log('Retrieved slide index:', lastClickedSlideIndex);

                // If there's a last clicked slide, show it
                if (lastClickedSlideIndex) {
                    showSlides(parseInt(lastClickedSlideIndex))
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
            </script> -->




            <!-- 
            <script>
                document.getElementById('saveAsPdfButton').addEventListener('click', function() {
                    const element = document.getElementById('COE_Form');
                    const originalFontSizes = {}; // Object to store original font sizes
                    const checkboxReplacements = [];


                    // Reduce font size of all elements
                    element.querySelectorAll('*').forEach(el => {
                        originalFontSizes[el.id] = window.getComputedStyle(el).fontSize;
                        let currentSize = parseFloat(originalFontSizes[el.id]);
                        el.style.fontSize = (currentSize) + 'px';
                    });


                    const rowToHide = document.getElementById('rowofPindotanNgPage');
                    if (rowToHide) {
                        rowToHide.style.display = 'none';
                    }

                    element.querySelectorAll('.pdfDissappeaer').forEach(el => {
                        el.style.display = 'none';
                    });


                    const opt = {
                        margin: 3,
                        filename: '<?php echo $name; ?> Certificate of Employment Page ' + slideIndex + ' of <?php echo $numLoops; ?>.pdf',
                        html2canvas: {
                            scale: 5
                        },
                        jsPDF: {
                            unit: 'mm',
                            format: 'a4',
                            orientation: 'portrait'
                        }
                    };


                    html2pdf().from(element).set(opt).save();

                    setTimeout(function() {
                        location.reload();
                    }, 3000);
                });
            </script> -->


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


</body>

</html>