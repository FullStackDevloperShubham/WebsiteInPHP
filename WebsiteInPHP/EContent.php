<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shubham Website</title>
    <link rel="stylesheet" href="main.css">
    <style>
        table{
            width: 100%;
            font-size: 20px;
        }
        tr,td,th{
            border: 1px solid black;
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

        <!-- main content of EContent -->
        <table>
            <tr>
                <th>Sr No</th>
                <th>Department</th>
                <th>Name Of the Faculty</th>
                <th>Mobile Number</th>
                <th>Your Platform</th>
                <th>URL/Link to your E-Content Development 1</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Zoology</td>
                <td>Dr. Kamble Vidhin Sundar	</td>
                <td>8806078887</td>
                <td>YouTube;Google Class Room;Any Other	</td>
                <td><a href="http://sangolacollege.org/vidhinkamble.youtube.com">vidhinkamble.youtube.com</a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>English</td>
                <td>Dr. Masal. Arjun Rayappa</td>
                <td>9881823591</td>
                <td>YouTube	</td>
                <td><a href="https://youtu.be/yHmkfG5xx_I">https://youtu.be/yHmkfG5xx_I</a></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Hindi</td>
                <td>Dr.Jagtap Maloji Arjun</td>
                <td>9921473807</td>
                <td>Google Class Room</td>
                <td><a href="https://classroom.google.com/c/Mjk2ODcwNzcyODIz?cjc=ujadrtl">https://classroom.google.com/c/Mjk2ODcwNzcyODIz?cjc=ujadrtl</a></td>
            </tr>
            <tr>
                <td>4</td>
                <td>Computer Science and Applications</td>
                <td>Khandagale Sachin Hanumant</td>
                <td>9923570542</td>
                <td>Google Class Room</td>
                <td>Classroom Code: yq5tbyk</td>
            </tr>
            <tr>
                <td>5</td>
                <td>CHEMISTRY</td>
                <td>Khanapure Renukacharya Ganpati</td>
                <td>9028983107</td>
                <td>YouTube;Google Class Room;Any Other	</td>
                <td>https://classroom.google.com/c/Njc1MTk0MzAyMTFa	</td>
            </tr>
            <tr>
                <td>6</td>
                <td>Physics	</td>
                <td>Dr. Jambhale C. L.</td>
                <td>9860445797</td>
                <td>Google Class Room</td>
                <td><a href="https://classroom.google.com/c/MzEzNDcxNjQ1NzEy/p/MzEzNDgwMzI3MjIz/">https://classroom.google.com/c/MzEzNDcxNjQ1NzEy/p/MzEzNDgwMzI3MjIz/</a></td>
            </tr>
        </table>
        <!-- here main content of EConten -->


        <hr>
        <!-- footer page -->
        <?php
        require 'Footer.php';
        ?>

    </div>





</body>

</html>