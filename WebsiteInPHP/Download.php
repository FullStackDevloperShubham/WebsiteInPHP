<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shubham Website</title>
    <link rel="stylesheet" href="main.css">
    <style>
        .conatiner {
            display: flex;
            flex-direction: column;
            margin-left: 500px;
            font-size: 40px;
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

        <!-- here is content -->
        <div class="conatiner">
            <a href="http://sangolacollege.org/pdf/sanad.pdf">
                <img src="PDF_ICON.jpg" alt="" id="PDF_ICON">
                Citizen Charter</a>
            <a href="http://sangolacollege.org/pdf/SU%20Admission%20Form%20Semester.pdf">
                <img src="PDF_ICON.jpg" alt="" id="PDF_ICON">
                Admission Form(Sample).</a>
            <a href="http://sangolacollege.org/pdf/scst%20complaint%20form.pdf">
                <img src="PDF_ICON.jpg" alt="" id="PDF_ICON">
                Application form for Caste Based Discrimination in Higher Educational Institution</a>
            <a href="http://sangolacollege.org/pdf/rtiact-marathi.pdf">
                <img src="PDF_ICON.jpg" alt="" id="PDF_ICON">
                RTI Act</a>
        </div>


        <hr>
        <!-- footer page -->
        <?php
        require 'Footer.php';
        ?>

    </div>





</body>

</html>