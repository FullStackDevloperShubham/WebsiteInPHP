<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shubham Website</title>
    <link rel="stylesheet" href="main.css">
    <style>
        .container {
            display: flex;
            flex-direction: column;
            margin-left: 600px;
            font-size: 40px;
            padding: 10px;
        }

        #PDF_ICON {
            height: 40px;
            width: 60px;
        }
    </style>
</head>

<body>
    <div class="main" id="MAIN">
        <!-- navbar -->
        <?php
        require 'Nav.php';
        ?>
        <!-- navbar end -->

        <!-- main content of NIRF -->
        <div class="container">
            <a href="http://sangolacollege.org/pdf/SANG-NIRF-2023.pdf">
                <img src="PDF_ICON.jpg" alt="" id="PDF_ICON">
                NIRF March 2023.</a>
            <a href="http://sangolacollege.org/pdf/NIRF2022.pdf">
                <img src="PDF_ICON.jpg" alt="" id="PDF_ICON">
                NIRF March 2022.</a>
            <a href="http://sangolacollege.org/pdf/SANGOLA%20COLLEGE%20%20SANGOLA%20DIST-SOLAPUR20210225-2021.pdf">
                <img src="PDF_ICON.jpg" alt="" id="PDF_ICON">
                NIRF March 2021.</a>
            <a href="http://sangolacollege.org/pdf/SANGOLA%20COLLEGE%20%20SANGOLA%20DIST-SOLAPUR20200106.pdf">
                <img src="PDF_ICON.jpg" alt="" id="PDF_ICON">
                NIRF March
                2020.</a>

        </div>


        <!-- here content of NIRF -->

        <hr>
        <!-- footer page -->
        <?php
        require 'Footer.php';
        ?>

    </div>





</body>

</html>