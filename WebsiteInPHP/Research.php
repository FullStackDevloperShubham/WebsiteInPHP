<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shubham Website</title>
    <link rel="stylesheet" href="main.css">
    <style>
        th,td,tr{
            border: 1px solid red;
            font-size: 40px;
        }
        table{
            margin-left: 500px;
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

        <!--reserarch content  -->

        <table>
            <tr>
                <th>Subject</th>
                <th>Ph.D. Completed</th>
                <th>Ph.D. Ongoing</th>
            </tr>
            <tr>
                <td>Marathi</td>
                <td>2</td>
                <td>4</td>
            </tr>
            <tr>
                <td>Economics</td>
                <td>3</td>
                <td>5</td>
            </tr>
            <tr>
                <td>Geography</td>
                <td>1</td>
                <td>4</td>
            </tr>
            <tr>
                <td>Zoology</td>
                <td>1</td>
                <td>-</td>
            </tr>
            <tr>
                <td>Total</td>
                <td>7</td>
                <td>13</td>
            </tr>
        </table>



        <!-- research content end -->

        <hr>
        <!-- footer page -->
        <?php
        require 'Footer.php';
        ?>

    </div>





</body>

</html>