<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>Progress Monitoring Report</title>
    <link rel="shortcut icon" type="image/png" href="../table with dashboard/images for dashboard/psa logo.png">
    <link rel="stylesheet" href="css for dashboard/bootstrap.min.css">
    <link rel="stylesheet" href="css for dashboard/coestyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.4/xlsx.full.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mammoth/1.4.2/mammoth.browser.min.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">

    <style>
        body {
            background-color: white;
        }

        footer {
            background-color: #353b48;
            color: #fff;
            text-align: center;
            padding: 10px 30px;
            position: relative;
            width: 100%;
        }
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
                <li class="" id="home">
                    <a href="/NCR-V PROJECT/Admin/Super Admin Main/admin_homepage.php" class="dashboard"><i class="material-icons">home</i>Home</a>
                </li>
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const redirectLink = document.getElementById('home');
                        const loadingScreen = document.getElementById('loading-screen');
                        redirectLink.addEventListener('click', function(event) {
                            event.preventDefault();
                            loadingScreen.style.display = 'flex';
                            setTimeout(function() {
                                window.location.href = '/NCR-V PROJECT/Admin/Super Admin Main/admin_homepage.php';
                            }, 2000);
                        });
                    });
                </script>

                <li class="" id="main">
                    <a href="/NCR-V PROJECT/Admin/Super Admin Main/index.php" class="dashboard"><i class="material-icons">article</i>Main Page</a>
                </li>
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const redirectLink = document.getElementById('main');
                        const loadingScreen = document.getElementById('loading-screen');
                        redirectLink.addEventListener('click', function(event) {
                            event.preventDefault();
                            loadingScreen.style.display = 'flex';

                            setTimeout(function() {
                                window.location.href = '/NCR-V PROJECT/Admin/Super Admin Main/index.php';
                            }, 2000);
                        });
                    });
                </script>
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
                            <a href="/NCR-V PROJECT/Admin/COE/coe.php" id="coe_load">
                                <i class="material-icons"><span class="material-symbols-outlined">card_membership</span></i>
                                COE
                            </a>
                        </li>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const redirectLink = document.getElementById('coe_load');
                                const loadingScreen = document.getElementById('loading-screen');

                                redirectLink.addEventListener('click', function(event) {
                                    event.preventDefault();
                                    loadingScreen.style.display = 'flex';


                                    setTimeout(function() {
                                        window.location.href = '/NCR-V PROJECT/Admin/COE/coe.php';
                                    }, 2000);
                                });
                            });
                        </script>

                        <li>
                            <a href="/NCR-V PROJECT/Admin/PDS/pds.php" id="pds">
                                <i class="material-icons"><span class="material-symbols-outlined">assignment_ind</span></i>
                                PDS
                            </a>
                        </li>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const redirectLink = document.getElementById('pds');
                                const loadingScreen = document.getElementById('loading-screen');
                                redirectLink.addEventListener('click', function(event) {
                                    event.preventDefault();
                                    loadingScreen.style.display = 'flex';

                                    setTimeout(function() {
                                        window.location.href = '/NCR-V PROJECT/Admin/PDS/pds.php';
                                    }, 2000);
                                });
                            });
                        </script>
                        <li>
                            <a href="/NCR-V PROJECT/Admin/COT/cot.php" id="cot">
                                <i class="material-icons"><span class="material-symbols-outlined">article </span></i>
                                COT
                            </a>
                        </li>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const redirectLink = document.getElementById('cot');
                                const loadingScreen = document.getElementById('loading-screen');
                                redirectLink.addEventListener('click', function(event) {
                                    event.preventDefault();
                                    loadingScreen.style.display = 'flex';

                                    setTimeout(function() {
                                        window.location.href = '/NCR-V PROJECT/Admin/COT/cot.php';
                                    }, 2000);
                                });
                            });
                        </script>
                        <li>
                            <a href="/NCR-V PROJECT/Admin/LEV/lev.php" id="lev">
                                <i class="material-icons"><span class="material-symbols-outlined"> badge</span></i>
                                LEV
                            </a>
                        </li>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const redirectLink = document.getElementById('lev');
                                const loadingScreen = document.getElementById('loading-screen');
                                redirectLink.addEventListener('click', function(event) {
                                    event.preventDefault();
                                    loadingScreen.style.display = 'flex';

                                    setTimeout(function() {
                                        window.location.href = '/NCR-V PROJECT/Admin/LEV/lev.php';
                                    }, 2000);
                                });
                            });
                        </script>
                        <li>
                            <a href="../../../NCR-V PROJECT/Admin/File_Management/FileManagement.php" id="file">
                                <i class="material-icons"><span class="material-symbols-outlined"> badge</span></i>
                                File Managment
                            </a>
                        </li>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const redirectLink = document.getElementById('file');
                                const loadingScreen = document.getElementById('loading-screen');
                                redirectLink.addEventListener('click', function(event) {
                                    event.preventDefault();
                                    loadingScreen.style.display = 'flex';
                                    setTimeout(function() {
                                        window.location.href = '../../../NCR-V PROJECT/Admin/File_Management/FileManagement.php';
                                    }, 2000);
                                });
                            });
                        </script>
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
                        <li><a href="../../../NCR-V%20PROJECT/ITEM%20INVENTORY/Tablet%20List/list_of_tablet.php" id="items">Items Availability</a></li>
                    </ul>
                </li>
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const redirectLink = document.getElementById('items');
                        const loadingScreen = document.getElementById('loading-screen');
                        redirectLink.addEventListener('click', function(event) {
                            event.preventDefault();
                            loadingScreen.style.display = 'flex';

                            setTimeout(function() {
                                window.location.href = '../../../NCR-V%20PROJECT/ITEM%20INVENTORY/Tablet%20List/list_of_tablet.php';
                            }, 2000);
                        });
                    });
                </script>

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
                .top-navbar .for_header {
                    justify-content: center;
                    align-items: center;
                    display: flex;
                    position: absolute;
                    top: 50%;
                    left: 18%;
                    transform: translate(-50%, -50%);
                    gap: 10px;
                }

                .top-navbar .for_time {
                    justify-content: center;
                    align-items: center;
                    display: flex;
                    position: absolute;
                    top: 50%;
                    left: 80%;
                    transform: translate(-50%, -50%);
                    gap: 10px;
                }

                .top-navbar .for_header .p {
                    position: relative;
                    display: flex;

                }
            </style>

            <div class="top-navbar">
                <section></section>
                <div class="for_header" style="padding-left: 160px; font-size:30px; font-weight:bolder; font-family:Georgia, Serif; color:azure;" class="head">PSO NCR-V MANAGEMENT SYSTEM<br>
                </div>
                <div class="for_time">
                    <p style="font-size:larger; color:white; font-weight:bolder;" id="datetime" class="topcorner"></p>
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
            <div>

                <style>
                    /*****************************************************************/
                    /**********************LOGO SECTION DESIGN START******************/
                    /*****************************************************************/
                    .logo-section {
                        border: 5px solid orange;
                        background-color: rgb(12, 52, 61);
                        position: relative;
                        left: 250px;
                        width: 70%;
                        display: flex;
                        align-items: center;
                        justify-content: space-between;
                        padding: 20px;
                        font-family: Arial, Helvetica, sans-serif;
                        /* border-bottom: 2px solid #000; */
                    }

                    .logo-section img {
                        height: 90px;
                    }

                    .logo-section .center-text {
                        /* width: 100px; */
                        font-size: 30px;
                        font-weight: 500;
                        text-align: center;
                    }

                    .logo-section .logo {
                        width: 100px;
                    }

                    /******************************************************************/
                    /**********************LOGO SECTION DESIGN END*********************/
                    /*****************************************************************/
                    .project_section {
                        border: 4px solid orange;
                        background-color: rgb(12, 52, 61);
                        box-shadow: 0px 4px 50px rgba(0, 0, 0, 1);
                        border-radius: 7px;
                        position: relative;
                        left: 250px;
                        width: 70%;
                        display: flex;
                        align-items: center;
                        justify-content: space-between;
                        padding: 30px;
                        font-family: 'Roboto', Arial, Helvetica, sans-serif;
                        color: blanchedalmond;
                    }

                    .project_section img {
                        height: 95px;

                    }

                    .project_section .logo2 img {
                        height: 100px;
                        width: 100px;

                    }

                    .button-container {
                        padding-top: 25px;
                        padding-bottom: 40px;
                        padding-left: 10px;
                        padding-right: 10px;
                        border: 2px solid orange;
                        border-width: 6px;
                        display: flex;
                        flex-direction: column;
                        gap: 20px;
                    }

                    .button-container2 {
                        padding-right: 30px;
                        padding-bottom: 7px;
                        padding-top: none;
                        padding-left: 30px;
                        border-width: 10px;
                        display: flex;
                        flex-direction: column;
                        gap: 20px;
                        border: 6px solid orange;
                    }

                    .button-container3 {
                        padding-right: 30px;
                        padding-top: 3px;
                        padding-left: 13px;
                        border-width: 10px;
                        display: flex;
                        flex-direction: column;
                        gap: 20px;
                        border: 6px solid orange;
                    }

                    .button-container4 {
                        padding-right: 30px;
                        padding-top: 5px;
                        padding-left: 13px;
                        border-width: 10px;
                        display: flex;
                        flex-direction: column;
                        gap: 20px;
                        border: 6px solid orange;
                    }

                    .loading-screen {
                        display: none;
                        position: fixed;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        background-color: rgba(255, 255, 255, 0.9);
                        align-items: center;
                        justify-content: center;
                        z-index: 1000;
                        flex-direction: column;
                        backdrop-filter: blur(8px);
                    }

                    .logo-container {
                        position: relative;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        animation: pulse 2s infinite;
                    }

                    .loading-logo {
                        width: 120px;
                        height: auto;
                        position: relative;
                        z-index: 1;
                        animation: logoPulse 3s ease-in-out infinite;
                    }

                    @keyframes pulse {

                        0%,
                        100% {
                            transform: scale(1);
                        }

                        50% {
                            transform: scale(1.05);
                        }
                    }

                    @keyframes logoPulse {
                        0% {
                            transform: scale(1);
                        }

                        50% {
                            transform: scale(1.1);
                        }

                        100% {
                            transform: scale(1);
                        }
                    }

                    /* -----------------First Circle (RED)----------------------*/
                    .animation-circle {
                        position: absolute;
                        width: 140px;
                        height: 140px;
                        border-radius: 50%;
                        border: 4px solid rgba(255, 0, 0, 0.3);
                        border-top: 4px solid rgba(255, 0, 0, 1);
                        animation: spin 2s linear infinite;
                    }

                    @keyframes spin {
                        0% {
                            transform: rotate(0deg);
                        }

                        100% {
                            transform: rotate(360deg);
                        }
                    }

                    /* ------------------------Second Circle (Yellow)---------------*/
                    .animation-circle-yellow {
                        position: absolute;
                        width: 160px;
                        height: 160px;
                        border-radius: 50%;
                        border: 4px solid rgba(255, 255, 0, 0.3);
                        border-top: 4px solid rgba(255, 255, 0, 1);
                        animation: spin-reverse 3s linear infinite;
                    }

                    @keyframes spin-reverse {
                        0% {
                            transform: rotate(0deg);
                        }

                        100% {
                            transform: rotate(-360deg);
                        }
                    }

                    /*-----------------------------Third Circle (Blue)------------------------*/
                    .animation-circle-blue {
                        position: absolute;
                        width: 180px;
                        height: 180px;
                        border-radius: 50%;
                        border: 4px solid rgba(0, 0, 255, 0.3);
                        border-top: 4px solid rgba(0, 0, 255, 1);
                        animation: spin 4s linear infinite;
                    }

                    /*------------------------Spinner - Small Spinner-----------------------*/
                    .spinner {
                        width: 50px;
                        height: 50px;
                        border: 5px solid #ccc;
                        border-top: 5px solid #0A414F;
                        border-radius: 50%;
                        animation: spin 1s linear infinite;
                        margin-top: 20px;
                    }

                    /*-------------------Loading Text-------------------------------------*/
                    .loading-text {
                        font-size: 18px;
                        font-weight: 600;
                        color: #0A414F;
                        margin-top: 20px;
                    }

                    .loading-dots {
                        display: inline-block;
                        width: 20px;
                        text-align: left;
                    }

                    @keyframes dots {
                        0% {
                            content: '';
                        }

                        33% {
                            content: '.';
                        }

                        66% {
                            content: '..';
                        }

                        100% {
                            content: '...';
                        }
                    }

                    .loading-dots::after {
                        content: '...';
                        animation: dots 1.5s steps(3, end) infinite;
                    }

                    /*-----------------------Loading Section END---------------------------------*/
                </style>




                <!---------------------------------------------------------------------------->
                <!-------------------------------- LOGO SECTION START -------------------------->
                <!---------------------------------------------------------------------------->
                <section class="logo-section">
                    <div class="logo">
                        <img src="images for dashboard/psa logo.png">
                    </div>
                    <div style="color: white; font-family:Arial, Helvetica, sans-serif" class="center-text">
                        <h5 style="font-family:'Times New Roman', Times, serif">Philippine Statistics Authority</h5>
                        <h2 style="font-family: 'Times New Roman', Times, serif; font-size:20px;">National Capital Region Provincial Statistical Office V</h2>
                        <h1 style="font-family:'Times New Roman', Times, serif">PROGRESS MONITORING REPORT<h1>
                    </div>
                    <div class="logo2">
                        <img src="images for dashboard/logph.png">
                    </div>
                </section>
                <!---------------------------------------------------------------------------->
                <!-------------------------------- LOGO SECTION END -------------------------->
                <!---------------------------------------------------------------------------->

                <!---------------------------------------------------------------------------->
                <!-------------------------------- PROJECT SECTION START---------------------->
                <!---------------------------------------------------------------------------->
                <section class="project_section">
                    <div class="button-container">

                        <a href="NCR-V.php" id="redirectLink">
                            <button style="background-color:white; color:black; font-weight:bold; border-radius:10px; font-size:15px;" class="LFS">LFS</button>
                        </a>

                        <a href="../CES/ces_ncr_v.php" id="redirectLink2">
                            <button style="background-color:white; color:black; font-weight:bold; border-radius:10px; font-size:13px;" class="CES">CES</button>
                        </a>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const redirectLink = document.getElementById('redirectLink2');
                                const loadingScreen = document.getElementById('loading-screen');
                                redirectLink.addEventListener('click', function(event) {
                                    event.preventDefault();
                                    loadingScreen.style.display = 'flex';
                                    setTimeout(function() {
                                        window.location.href = '../CES/ces_ncr_v.php';
                                    }, 2000);
                                });
                            });
                        </script>

                        <a href="../FIES/fies.php" id="redirectLink3">
                            <button style="background-color:white; color:black; font-weight:bold; border-radius:10px; font-size:13px;" class="FIES">FIES</button>
                        </a>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const redirectLink = document.getElementById('redirectLink3');
                                const loadingScreen = document.getElementById('loading-screen');
                                redirectLink.addEventListener('click', function(event) {
                                    event.preventDefault();
                                    loadingScreen.style.display = 'flex';

                                    setTimeout(function() {
                                        window.location.href = '../FIES/fies.php';
                                    }, 2000);
                                });
                            });
                        </script>
                        <a href="../BLPS/blps_main.php" id="redirectLink4">
                            <button style="background-color:white; color:black; font-weight:bold; border-radius:10px; font-size:13px;" class="BLPS">BLPS</button>
                        </a>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const redirectLink = document.getElementById('redirectLink4');
                                const loadingScreen = document.getElementById('loading-screen');
                                redirectLink.addEventListener('click', function(event) {
                                    event.preventDefault();
                                    loadingScreen.style.display = 'flex';
                                    setTimeout(function() {
                                        window.location.href = '../BLPS/blps_main.php';
                                    }, 2000);
                                });
                            });
                        </script>
                        <a href="../HECS/hecs_main.php" id="redirectLink5">
                            <button style="background-color:white; color:black; font-weight:bold; border-radius:10px; font-size:13px;" class="HECS">HECS</button>
                        </a>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const redirectLink = document.getElementById('redirectLink5');
                                const loadingScreen = document.getElementById('loading-screen');
                                redirectLink.addEventListener('click', function(event) {
                                    event.preventDefault();
                                    loadingScreen.style.display = 'flex';
                                    setTimeout(function() {
                                        window.location.href = '../HECS/hecs_main.php';
                                    }, 2000);
                                });
                            });
                        </script>
                        <a href="../RCSSH/rcss_h.php" id="redirectLink6">
                            <button style="background-color:white; color:black; font-weight:bold; border-radius:10px; font-size:13px;" class="RCSS:H">RCSS:H</button>
                        </a>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const redirectLink = document.getElementById('redirectLink6');
                                const loadingScreen = document.getElementById('loading-screen');
                                redirectLink.addEventListener('click', function(event) {
                                    event.preventDefault();
                                    loadingScreen.style.display = 'flex';
                                    setTimeout(function() {
                                        window.location.href = '../RCSSH/rcss_h.php';
                                    }, 2000);
                                });
                            });
                        </script>
                        <a href="../NICTHS/nicths.php" id="redirectLink7">
                            <button style="background-color:white; color:black; font-weight:bold; border-radius:10px; font-size:13px;" class="NICTHS">NICTHS</button>
                        </a>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const redirectLink = document.getElementById('redirectLink7');
                                const loadingScreen = document.getElementById('loading-screen');
                                redirectLink.addEventListener('click', function(event) {
                                    event.preventDefault();
                                    loadingScreen.style.display = 'flex';

                                    setTimeout(function() {
                                        window.location.href = '../NICTHS/nicths.php';
                                    }, 2000);
                                });
                            });
                        </script>
                        <a href="../FLEMMS/flemms_main.php" id="redirectLink8">
                            <button style="background-color:white; color:black; font-weight:bold; border-radius:10px; font-size:13px;" class="FLEMMS">FLEMMS</button>
                        </a>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const redirectLink = document.getElementById('redirectLink8');
                                const loadingScreen = document.getElementById('loading-screen');
                                redirectLink.addEventListener('click', function(event) {
                                    event.preventDefault();
                                    loadingScreen.style.display = 'flex';
                                    setTimeout(function() {
                                        window.location.href = '../FLEMMS/flemms_main.php';
                                    }, 2000);
                                });
                            });
                        </script>
                    </div>



                    <div class="button-container2">

                        <a href="maintenance.php" id="redirectLink9">
                            <button style=" background-color:white; color:black; font-weight:bold; border-radius:10px; font-size:14px;" class="SKL">SKL</button>
                        </a>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const redirectLink = document.getElementById('redirectLink9');
                                const loadingScreen = document.getElementById('loading-screen');
                                redirectLink.addEventListener('click', function(event) {
                                    event.preventDefault();
                                    loadingScreen.style.display = 'flex';
                                    setTimeout(function() {
                                        window.location.href = 'maintenance.php';
                                    }, 2000);
                                });
                            });
                        </script>
                        <a href="maintenance.php" id="redirectLink10">
                            <button style="background-color:white; color:black; font-weight:bold; border-radius:10px; font-size:13px;" class="CFS">CFS</button>
                        </a>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const redirectLink = document.getElementById('redirectLink10');
                                const loadingScreen = document.getElementById('loading-screen');
                                redirectLink.addEventListener('click', function(event) {
                                    event.preventDefault();
                                    loadingScreen.style.display = 'flex';

                                    setTimeout(function() {
                                        window.location.href = 'maintenance.php';
                                    }, 2000);
                                });
                            });
                        </script>
                        <a href="../QSPBI/QSPBI.php" id="redirectLink11">
                            <button style="background-color:white; color:black; font-weight:bold; border-radius:10px; font-size:13px;" class="QSPBI">QSPBI</button>
                        </a>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const redirectLink = document.getElementById('redirectLink11');
                                const loadingScreen = document.getElementById('loading-screen');
                                redirectLink.addEventListener('click', function(event) {
                                    event.preventDefasult();
                                    loadingScreen.style.display = 'flex';
                                    setTimeout(function() {
                                        window.location.href = '../QSPBI/QSPBI.php';
                                    }, 2000);
                                });
                            });
                        </script>
                        <a href="maintenance.php" id="redirectLink12">
                            <button style="background-color:white; color:black; font-weight:bold; border-radius:10px; font-size:13px;" class="IOSPBI">IOSPBI</button>
                        </a>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const redirectLink = document.getElementById('redirectLink12');
                                const loadingScreen = document.getElementById('loading-screen');
                                redirectLink.addEventListener('click', function(event) {
                                    event.preventDefault();
                                    loadingScreen.style.display = 'flex';
                                    setTimeout(function() {
                                        window.location.href = 'maintenance.php';
                                    }, 2000);
                                });
                            });
                        </script>

                        <a href="maintenance.php" id="redirectLink13">
                            <button style="background-color:white; color:black; font-weight:bold; border-radius:10px; font-size:13px;" class="ASPBI">ASPBI</button>
                        </a>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const redirectLink = document.getElementById('redirectLink13');
                                const loadingScreen = document.getElementById('loading-screen');
                                redirectLink.addEventListener('click', function(event) {
                                    event.preventDefault();
                                    loadingScreen.style.display = 'flex';
                                    setTimeout(function() {
                                        window.location.href = 'maintenance.php';
                                    }, 2000);
                                });
                            });
                        </script>

                        <a href="maintenance.php" id="redirectLink14">
                            <button style="background-color:white; color:black; font-weight:bold; border-radius:10px; font-size:13px;" class="PRICES">PRICES</button>
                        </a>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const redirectLink = document.getElementById('redirectLink14');
                                const loadingScreen = document.getElementById('loading-screen');
                                redirectLink.addEventListener('click', function(event) {
                                    event.preventDefault();
                                    loadingScreen.style.display = 'flex';
                                    setTimeout(function() {
                                        window.location.href = 'maintenance.php';
                                    }, 2000);
                                });
                            });
                        </script>

                        <a href="maintenance.php" id="redirectLink15">
                            <button style="background-color:white; color:black; font-weight:bold; border-radius:10px; font-size:13px;" class="RCCS:C">RCCS:C</button>
                        </a>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const redirectLink = document.getElementById('redirectLink15');
                                const loadingScreen = document.getElementById('loading-screen');
                                redirectLink.addEventListener('click', function(event) {
                                    event.preventDefault();
                                    loadingScreen.style.display = 'flex';
                                    setTimeout(function() {
                                        window.location.href = 'maintenance.php';
                                    }, 2000);
                                });
                            });
                        </script>
                        <a href="maintenance.php" id="redirectLink16">
                            <button style="background-color:white; color:black; font-weight:bold; border-radius:10px; font-size:13px;" class="OWS/ISLE">OWS/ISLE</button>
                        </a>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const redirectLink = document.getElementById('redirectLink16');
                                const loadingScreen = document.getElementById('loading-screen');
                                redirectLink.addEventListener('click', function(event) {
                                    event.preventDefault();
                                    loadingScreen.style.display = 'flex';
                                    setTimeout(function() {
                                        window.location.href = 'maintenance.php';
                                    }, 2000);
                                });
                            });
                        </script>
                        <a href="maintenance.php" id="redirectLink17">
                            <button style="background-color:white; color:black; font-weight:bold; border-radius:10px; font-size:13px;" class="MISSI/PPS">MISSI/PPS</button>
                        </a>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const redirectLink = document.getElementById('redirectLink17');
                                const loadingScreen = document.getElementById('loading-screen');
                                redirectLink.addEventListener('click', function(event) {
                                    event.preventDefault();
                                    loadingScreen.style.display = 'flex';
                                    setTimeout(function() {
                                        window.location.href = 'maintenance.php';
                                    }, 2000);
                                });
                            });
                        </script>
                    </div>
                    <div class="button-container3">
                        <a href="maintenance.php" id="redirectLink18">
                            <button style="background-color:white; color:black; font-weight:bold; border-radius:10px; font-size:17px; width:100px" class="CSS">CSS</button>
                        </a>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const redirectLink = document.getElementById('redirectLink18');
                                const loadingScreen = document.getElementById('loading-screen');
                                redirectLink.addEventListener('click', function(event) {
                                    event.preventDefault();
                                    loadingScreen.style.display = 'flex';
                                    setTimeout(function() {
                                        window.location.href = 'maintenance.php';
                                    }, 2000);
                                });
                            });
                        </script>
                        <a href="maintenance.php" id="redirectLink19">
                            <button style="background-color:white; color:black; font-weight:bold; border-radius:10px; font-size:13px; width:150px" class="FISHERIES">FISHERIES</button>
                        </a>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const redirectLink = document.getElementById('redirectLink19');
                                const loadingScreen = document.getElementById('loading-screen');
                                redirectLink.addEventListener('click', function(event) {
                                    event.preventDefault();
                                    loadingScreen.style.display = 'flex';
                                    setTimeout(function() {
                                        window.location.href = 'maintenance.php';
                                    }, 2000);
                                });
                            });
                        </script>
                        <a href="maintenance.php" id="redirectLink20">
                            <button style="background-color:white; color:black; font-weight:bold; border-radius:10px; font-size:13px;" class="2022 CAFF MONITORING">2022 CAFF MONITORING</button>
                        </a>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const redirectLink = document.getElementById('redirectLink20');
                                const loadingScreen = document.getElementById('loading-screen');
                                redirectLink.addEventListener('click', function(event) {
                                    event.preventDefault();
                                    loadingScreen.style.display = 'flex';
                                    setTimeout(function() {
                                        window.location.href = 'maintenance.php';
                                    }, 2000);
                                });
                            });
                        </script>
                        <a href="maintenance.php" id="redirectLink21">
                            <button style="background-color:white; color:black; font-weight:bold; border-radius:10px; font-size:13px; width:100px" class="ULE">ULE</button>
                        </a>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const redirectLink = document.getElementById('redirectLink21');
                                const loadingScreen = document.getElementById('loading-screen');
                                redirectLink.addEventListener('click', function(event) {
                                    event.preventDefault();
                                    loadingScreen.style.display = 'flex';
                                    setTimeout(function() {
                                        window.location.href = 'maintenance.php';
                                    }, 2000);
                                });
                            });
                        </script>
                        <a href="maintenance.php" id="redirectLink22">
                            <button style="background-color:white; color:black; font-weight:bold; border-radius:10px; font-size:13px; width:100px" class="CPBI">CPBI</button>
                        </a>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const redirectLink = document.getElementById('redirectLink22');
                                const loadingScreen = document.getElementById('loading-screen');

                                redirectLink.addEventListener('click', function(event) {
                                    event.preventDefault();
                                    loadingScreen.style.display = 'flex';

                                    setTimeout(function() {
                                        window.location.href = 'maintenance.php';
                                    }, 2000);
                                });
                            });
                        </script>
                        <a href="maintenance.php" id="redirectLink23">
                            <button style="background-color:white; color:black; font-weight:bold; border-radius:10px; font-size:13px; width:140px" class="MAPPING">MAPPING</button>
                        </a>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const redirectLink = document.getElementById('redirectLink23');
                                const loadingScreen = document.getElementById('loading-screen');
                                redirectLink.addEventListener('click', function(event) {
                                    event.preventDefault();
                                    loadingScreen.style.display = 'flex';
                                    setTimeout(function() {
                                        window.location.href = 'maintenance.php';
                                    }, 2000);
                                });
                            });
                        </script>
                        <a href="maintenance.php" id="redirectLink24">
                            <button style="background-color:white; color:black; font-weight:bold; border-radius:10px; font-size:13px; width:180px" class="ASTIG TECH">ASTIG TECH</button>
                        </a>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const redirectLink = document.getElementById('redirectLink24');
                                const loadingScreen = document.getElementById('loading-screen');
                                redirectLink.addEventListener('click', function(event) {
                                    event.preventDefault();
                                    loadingScreen.style.display = 'flex';

                                    setTimeout(function() {
                                        window.location.href = 'maintenance.php';
                                    }, 2000);
                                });
                            });
                        </script>
                        <a href="maintenance.php" id="redirectLink25">
                            <button style="background-color:white; color:black; font-weight:bold; border-radius:10px; font-size:13px; width:180px" class="CPH/POPCEN">CPH/POPCEN</button>
                        </a>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const redirectLink = document.getElementById('redirectLink25');
                                const loadingScreen = document.getElementById('loading-screen');
                                redirectLink.addEventListener('click', function(event) {
                                    event.preventDefault();
                                    loadingScreen.style.display = 'flex';
                                    setTimeout(function() {
                                        window.location.href = 'maintenance.php';
                                    }, 2000);
                                });
                            });
                        </script>
                        <a href="maintenance.php" id="redirectLink26">
                            <button style="background-color:white; color:black; font-weight:bold; border-radius:10px; font-size:13px; width:200px" class="BLDG PERMIT">BLDG PERMIT</button>
                        </a>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const redirectLink = document.getElementById('redirectLink26');
                                const loadingScreen = document.getElementById('loading-screen');
                                redirectLink.addEventListener('click', function(event) {
                                    event.preventDefault();
                                    loadingScreen.style.display = 'flex';
                                    setTimeout(function() {
                                        window.location.href = 'maintenance.php';
                                    }, 2000);
                                });
                            });
                        </script>
                    </div>
                    <div class="button-container2">
                        <a href="maintenance.php" id="redirectLink27">
                            <button style=" background-color:white; color:black; font-weight:bold; border-radius:10px; font-size:14px;" class="SKL">CBMS</button>
                        </a>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const redirectLink = document.getElementById('redirectLink27');
                                const loadingScreen = document.getElementById('loading-screen');
                                redirectLink.addEventListener('click', function(event) {
                                    event.preventDefault();
                                    loadingScreen.style.display = 'flex';
                                    setTimeout(function() {
                                        window.location.href = 'maintenance.php';
                                    }, 2000);
                                });
                            });
                        </script>

                        <a href="maintenance.php" id="redirectlink28">
                            <button style="background-color:white; color:black; font-weight:bold; border-radius:10px; font-size:13px;" class="CFS">PHILSYS</button>
                        </a>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const redirectLink = document.getElementById('redirectLink28');
                                const loadingScreen = document.getElementById('loading-screen');
                                redirectLink.addEventListener('click', function(event) {
                                    event.preventDefault();
                                    loadingScreen.style.display = 'flex';
                                    setTimeout(function() {
                                        window.location.href = 'maintenance.php';
                                    }, 2000);
                                });
                            });
                        </script>
                        <a href="maintenance.php" id="redirectLink29">
                            <button style="background-color:white; color:black; font-weight:bold; border-radius:10px; font-size:13px;" class="QSPBI">CIVIL REGISTRATION</button>
                        </a>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const redirectLink = document.getElementById('redirectLink29');
                                const loadingScreen = document.getElementById('loading-screen');
                                redirectLink.addEventListener('click', function(event) {
                                    event.preventDefault();
                                    loadingScreen.style.display = 'flex';

                                    setTimeout(function() {
                                        window.location.href = 'maintenance.php';
                                    }, 2000);
                                });
                            });
                        </script>
                        <a href="maintenance.php" id="redirectlink30">
                            <button style="background-color:white; color:black; font-weight:bold; border-radius:10px; font-size:13px;" class="IOSPBI">FINANCIAL & ADMINISTRATIVE</button>
                        </a>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const redirectLink = document.getElementById('redirectLink30');
                                const loadingScreen = document.getElementById('loading-screen');
                                redirectLink.addEventListener('click', function(event) {
                                    event.preventDefault();
                                    loadingScreen.style.display = 'flex';
                                    setTimeout(function() {
                                        window.location.href = 'maintenance.php';
                                    }, 2000);
                                });
                            });
                        </script>
                        <a href="maintenance.php" id="redirectLink31">
                            <button style="background-color:white; color:black; font-weight:bold; border-radius:10px; font-size:13px;" class="ASPBI">INFORMATION DISSEMINATION</button>
                        </a>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const redirectLink = document.getElementById('redirectLink31');
                                const loadingScreen = document.getElementById('loading-screen');
                                redirectLink.addEventListener('click', function(event) {
                                    event.preventDefault();
                                    loadingScreen.style.display = 'flex';
                                    setTimeout(function() {
                                        window.location.href = 'maintenance.php';
                                    }, 2000);
                                });
                            });
                        </script>
                        <a href="maintenance.php" id="redirectLink32">
                            <button style="background-color:white; color:black; font-weight:bold; border-radius:10px; font-size:13px;" class="PRICES">PARTNERTSHIP & LINKAGES</button>
                        </a>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const redirectLink = document.getElementById('redirectLink33');
                                const loadingScreen = document.getElementById('loading-screen');
                                redirectLink.addEventListener('click', function(event) {
                                    event.preventDefault();
                                    loadingScreen.style.display = 'flex';
                                    setTimeout(function() {
                                        window.location.href = 'maintenance.php';
                                    }, 2000);
                                });
                            });
                        </script>
                        <a href="maintenance.php" id="redirectlink34">
                            <button style="background-color:white; color:black; font-weight:bold; border-radius:10px; font-size:13px;" class="RCCS:C">PROVINCIAL PRODUCTS ACCOUNT</button>
                        </a>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const redirectLink = document.getElementById('redirectLink34');
                                const loadingScreen = document.getElementById('loading-screen');
                                redirectLink.addEventListener('click', function(event) {
                                    event.preventDefault();
                                    loadingScreen.style.display = 'flex';
                                    setTimeout(function() {
                                        window.location.href = 'maintenance.php';
                                    }, 2000);
                                });
                            });
                        </script>
                        <a href="maintenance.php" id="redirectLink35">
                            <button style="background-color:white; color:black; font-weight:bold; border-radius:10px; font-size:13px;" class="OWS/ISLE">NATIONAL STATISTICS MONTH</button>
                        </a>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const redirectLink = document.getElementById('redirectLink35');
                                const loadingScreen = document.getElementById('loading-screen');
                                redirectLink.addEventListener('click', function(event) {
                                    event.preventDefault();
                                    loadingScreen.style.display = 'flex';
                                    setTimeout(function() {
                                        window.location.href = 'maintenance.php';
                                    }, 2000);
                                });
                            });
                        </script>

                        <a href="maintenance.php" id="redirectLink36">
                            <button style="background-color:white; color:black; font-weight:bold; border-radius:10px; font-size:13px;" class="MISSI/PPS">CITY STATISTICS COMMITTEE</button>
                        </a>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const redirectLink = document.getElementById('redirectLink36');
                                const loadingScreen = document.getElementById('loading-screen');
                                redirectLink.addEventListener('click', function(event) {
                                    event.preventDefault();
                                    loadingScreen.style.display = 'flex';
                                    setTimeout(function() {
                                        window.location.href = 'maintenance.php';
                                    }, 2000);
                                });
                            });
                        </script>
                    </div>
                    <div class="button-container2" id="redirectLink37">
                        <a href="maintenance.php">
                            <button style=" background-color:white; color:black; font-weight:bold; border-radius:10px; font-size:14px;" class="SKL">Workload Assignment 2024 NCR V</button>
                        </a>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const redirectLink = document.getElementById('redirectLink37');
                                const loadingScreen = document.getElementById('loading-screen');
                                redirectLink.addEventListener('click', function(event) {
                                    event.preventDefault();
                                    loadingScreen.style.display = 'flex';
                                    setTimeout(function() {
                                        window.location.href = 'maintenance.php';
                                    }, 2000);
                                });
                            });
                        </script>
                        <a href="maintenance.php" rid="redirectLink38">
                            <button style="background-color:white; color:black; font-weight:bold; border-radius:10px; font-size:13px;" class="CFS">LIST OF BARANGAY CAPTAINS</button>
                        </a>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const redirectLink = document.getElementById('redirectLink38');
                                const loadingScreen = document.getElementById('loading-screen');
                                redirectLink.addEventListener('click', function(event) {
                                    event.preventDefault();
                                    loadingScreen.style.display = 'flex';
                                    setTimeout(function() {
                                        window.location.href = 'maintenance.php';
                                    }, 2000);
                                });
                            });
                        </script>
                        <a href="maintenance.php" id="redirectLink39">
                            <button style="background-color:white; color:black; font-weight:bold; border-radius:10px; font-size:13px;" class="QSPBI">LIST OF HOA & CONDO</button>
                        </a>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const redirectLink = document.getElementById('redirectLink39');
                                const loadingScreen = document.getElementById('loading-screen');
                                redirectLink.addEventListener('click', function(event) {
                                    event.preventDefault();
                                    loadingScreen.style.display = 'flex';
                                    setTimeout(function() {
                                        window.location.href = 'maintenance.php';
                                    }, 2000);
                                });
                            });
                        </script>
                        <a href="maintenance.php" id="redirectLink40">
                            <button style="background-color:white; color:black; font-weight:bold; border-radius:10px; font-size:13px;" class="IOSPBI">COMPLAINT LOGSHEET</button>
                        </a>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const redirectLink = document.getElementById('redirectLink40');
                                const loadingScreen = document.getElementById('loading-screen');
                                redirectLink.addEventListener('click', function(event) {
                                    event.preventDefault();
                                    loadingScreen.style.display = 'flex';
                                    setTimeout(function() {
                                        window.location.href = 'maintenance.php';
                                    }, 2000);
                                });
                            });
                        </script>

                        <a href="maintenance.php" id="redirectLink41">
                            <button style="background-color:white; color:black; font-weight:bold; border-radius:10px; font-size:13px;" class="ASPBI">PDW FORMS</button>
                        </a>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const redirectLink = document.getElementById('redirectLink41');
                                const loadingScreen = document.getElementById('loading-screen');
                                redirectLink.addEventListener('click', function(event) {
                                    event.preventDefault();
                                    loadingScreen.style.display = 'flex';
                                    setTimeout(function() {
                                        window.location.href = 'maintenance.php';
                                    }, 2000);
                                });
                            });
                        </script>
                        <a href="maintenance.php" id="redirectLink42">
                            <button style="background-color:white; color:black; font-weight:bold; border-radius:10px; font-size:13px;" class="PRICES">2024 REFERENCE NUMBER</button>
                        </a>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const redirectLink = document.getElementById('redirectLink42');
                                const loadingScreen = document.getElementById('loading-screen');
                                redirectLink.addEventListener('click', function(event) {
                                    event.preventDefault();
                                    loadingScreen.style.display = 'flex';

                                    setTimeout(function() {
                                        window.location.href = 'maintenance.php';
                                    }, 2000);
                                });
                            });
                        </script>
                        <a href="maintenance.php" id="redirectLink43">
                            <button style="background-color:white; color:black; font-weight:bold; border-radius:10px; font-size:13px;" class="RCCS:C">PCNR</button>
                        </a>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const redirectLink = document.getElementById('redirectLink43');
                                const loadingScreen = document.getElementById('loading-screen');
                                redirectLink.addEventListener('click', function(event) {
                                    event.preventDefault();
                                    loadingScreen.style.display = 'flex';
                                    setTimeout(function() {
                                        window.location.href = 'maintenance.php';
                                    }, 2000);
                                });
                            });
                        </script>
                        <a href="maintenance.php" id="redirectLink44">
                            <button style="background-color:white; color:black; font-weight:bold; border-radius:10px; font-size:13px;" class="OWS/ISLE">STAFF INFORMATION</button>
                        </a>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const redirectLink = document.getElementById('redirectLink44');
                                const loadingScreen = document.getElementById('loading-screen');
                                redirectLink.addEventListener('click', function(event) {
                                    event.preventDefault();
                                    loadingScreen.style.display = 'flex';
                                    setTimeout(function() {
                                        window.location.href = 'maintenance.php';
                                    }, 2000);
                                });
                            });
                        </script>
                        <a href="maintenance.php" id="redirectLink45">
                            <button style="background-color:white; color:black; font-weight:bold; border-radius:10px; font-size:13px;" class="MISSI/PPS">ACTIVITY PICTURE</button>
                        </a>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const redirectLink = document.getElementById('redirectLink45');
                                const loadingScreen = document.getElementById('loading-screen');
                                redirectLink.addEventListener('click', function(event) {
                                    event.preventDefault();
                                    loadingScreen.style.display = 'flex';
                                    setTimeout(function() {
                                        window.location.href = 'maintenance.php';
                                    }, 2000);
                                });
                            });
                        </script>
                    </div>
                    <!-- <div class="button-container4">
                        <button style="background-color:white; color:black; font-weight:bold; border-radius:10px; font-size:15px; width:300px" class="CBMS">CBMS</button>
                        <button style="background-color:white; color:black; font-weight:bold; border-radius:10px; font-size:15px; width:150px" class="PHILSYS">PHILSYS</button>
                        <button style="background-color:white; color:black; font-weight:bold; border-radius:10px; font-size:15px;" class="CIVIL REGISTRATION">CIVIL REGISTRATION</button>
                        <button style="background-color:white; color:black; font-weight:bold; border-radius:10px; font-size:15px; width:300px" class="FINANCIAL & ADMINISTRSTIVE">FINANCIAL & ADMINISTRSTIVE</button>
                        <button style="background-color:white; color:black; font-weight:bold; border-radius:10px; font-size:15px; width:300px" class="INFORMATION DISSEMINATION">INFORMATION DISSEMINATION</button>
                        <button style="background-color:white; color:black; font-weight:bold; border-radius:10px; font-size:15px; width:300px" class="PARTNERSHIP & LINKAGES">PARTNERSHIP & LINKAGES</button>
                        <button style="background-color:white; color:black; font-weight:bold; border-radius:10px; font-size:15px; width:300px" class="PROVINCIAL PRODUCTS ACCOUNTS">PROVINCIAL PRODUCTS ACCOUNTS</button>
                        <button style="background-color:white; color:black; font-weight:bold; border-radius:10px; font-size:15px; width:300px" class="NATIONAL STATISTICS MONTH">NATIONAL STATISTICS MONTH</button>
                        <button style="background-color:white; color:black; font-weight:bold; border-radius:10px; font-size:15px; width:300px" class="CITY STATISTICS MONTH">CITY STATISTICS MONTH</button>
                    </div> -->
                </section>

                <!------------------------------------------- LOADING SCREEN ------------------------------------------>
                <!-- <script>
                    // Get the button by ID
                    const redirectLink = document.getElementById('redirectLink');
                    const loadingScreen = document.getElementById('loading-screen');

                    // Add event listener to the button
                    redirectLink.addEventListener('click', function(event) {
                        event.preventDefault(); // Prevent immediate navigation
                        loadingScreen.style.display = 'flex'; // Show the loading screen

                        // Delay the redirection by 2 seconds (or any desired time)
                        setTimeout(function() {
                            window.location.href = 'NCR-V.php'; // Redirect after delay
                        }, 2000); // 2000 milliseconds = 2 seconds
                    });
                </script> -->
                <scrip>
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            const redirectLink = document.getElementById('redirectLink');
                            const loadingScreen = document.getElementById('loading-screen');
                            redirectLink.addEventListener('click', function(event) {
                                event.preventDefault();
                                loadingScreen.style.display = 'flex';
                                setTimeout(function() {
                                    window.location.href = 'NCR-V.php';
                                }, 2000);
                            });
                        });
                    </script>


                </scrip>

                </scrip>
                <div id="loading-screen" class="loading-screen">
                    <div class="logo-container">
                        <img src="../images for template/psa logo.png" alt="Logo" class="loading-logo" />
                        <div class="animation-circle"></div>
                        <div class="animation-circle-yellow"></div>
                        <div class="animation-circle-blue"></div>
                    </div>
                    <br>
                    <br>
                    <p class="loading-text">Please wait<span class="loading-dots">...</span></p>
                </div>
            </div>
            <!------------------------------------------- LOADING SCREEN ------------------------------------------>




            <!---------------------------------------------------------------------------->
            <!-------------------------------- PROJECT SECTION END---------------------->
            <!---------------------------------------------------------------------------->

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
                    if (confirm("Are you sure you want to logout?")) {
                        window.location.href = "../../../NCR-V PROJECT/indexpsa.php";
                    }
                }

                document.getElementById("logout").addEventListener("click", function(event) {
                    event.preventDefault();
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




            a

            <!-------------------------------------------------------------FOOTER SECTION--------------------------->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="footer-in">
                        <p class="mb-0">&copy 2024 Philippine Statistics Authority. All Rights Reserved.</p>
                    </div>
                </div>
            </footer>


</body>

</html>