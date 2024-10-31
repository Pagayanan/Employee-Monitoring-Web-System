<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logo Section</title>
    <style>
         html, body {
            height: 20%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .logo-section {
           border: 5px solid orange;
            background-color:darkslategrey;
            position:absolute;
            width: 70%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px;
            /* border-bottom: 2px solid #000; */
        }

        .logo-section img {
            height: 80px;
        }

        .logo-section .center-text {
            font-size: 20px;
            font-weight:500;
            text-align: center;
        }

        .logo-section .logo {
            width: 100px;
        }
    </style>
</head>
<body>
    <section class="logo-section">
        <div class="logo">
            <img src="images for dashboard/psa logo.png">
        </div>
        
        <div style="color: white;" class="center-text">
           Philippine Statistics Authority<br>National Capital Provincial Statistical Office V<br><br>PROGRESS MONITORING REPORT
        </div>
        
        <div class="logo">
            <img src="images for dashboard/logph.png">
        </div>
    </section>
</body>
</html>
