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
            margin-left: 700px;
        }

        #PDF_ICON {
            height: 40px;
            width: 60px;
            /* margin-top: 20px; */
        }
        #R{
            margin-top: 21px;
            font-size: 30px;
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

        <!-- main content of RTI -->
        <div class="container">
            
            <a href="http://sangolacollege.org/pdf/rtiact-marathi.pdf" id="R">
            <img src="PDF_ICON.jpg" alt="" id="PDF_ICON">
            RTI Act</a>
            <a href="http://sangolacollege.org/pdf/rtiact-marathi.pdf" id="R"> 
            <img src="PDF_ICON.jpg" alt="" id="PDF_ICON">
            RTI Application Form</a>
        </div>

        <!-- here main content of RTI is end -->





        <hr>
        <!-- footer page -->
        <?php
        require 'Footer.php';
        ?>

    </div>





</body>

</html>