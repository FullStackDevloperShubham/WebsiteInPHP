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

        <!-- main content of NCC -->
        <table>
            <tr>
                <th>Sr No</th>
                <th>Events</th>
                <th>Description</th>
                <th>Date</th>
                <th>View</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Annual Training Camp</td>
                <td>Annual Training Camp</td>
                <td>11 May 2022</td>
                <td>Annual Training Camp organized at Sangola College, Sangola</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Covid-19 Vaccination Camp</td>
                <td>Covid-19 Vaccination Camp organized at college campus</td>
                <td>09 January 2022</td>
                <td>Covid-19 Vaccination Camp organized at college campus</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Tree Plantation</td>
                <td>Tree Plantation and Cleanliness campaign organized at college campus</td>
                <td>02 October 2021</td>
                <td>Tree Plantation and Cleanliness campaign organized at college campus</td>
            </tr>
            <tr>
                <td>4</td>
                <td>N.C.C. Officer Visit</td>
                <td>Col. Rajesh Gajraj, CO, 38 MAH Bn. N.C.C. Solapur visited college campus.</td>
                <td>19 March 2021</td>
                <td>Col. Rajesh Gajraj, CO, 38 MAH Bn. N.C.C. Solapur visited college campus.</td>
            </tr>
            <tr>
                <td>5</td>
                <td>AIDS Awareness Rally</td>
                <td>AIDS Awareness Rally</td>
                <td>27 December 2019</td>
                <td>AIDS Awareness Rally</td>
            </tr>
            <tr>
                <td>6</td>
                <td>Tree Plantation</td>
                <td>Tree Plantation and Cleanliness campaign organized at college campus</td>
                <td>27 July 2019</td>
                <td>Tree Plantation and Cleanliness campaign organized at college campus
                </td>
            </tr>
            <tr>
                <td>7</td>
                <td>Surgical Strike Day</td>
                <td>The occasion of Surgical Strike Day organize the gust lecture</td>
                <td>29 September 2018</td>
                <td>The occasion of Surgical Strike Day organize the gust lecture
                </td>
            </tr>
            <tr>
                <td>8</td>
                <td>Blood Donation</td>
                <td>Blood Donation With collaboration Sri Siddhivinayk Ganapati Cancer Hospital Sangli	</td>
                <td>24 August 2018</td>
                <td>Blood Donation With collaboration Sri Siddhivinayk Ganapati Cancer Hospital Sangli
                </td>
            </tr>
            <tr>
                <td>9</td>
                <td>Swachha Bharat Abhiyan	</td>
                <td>The Mahatma Gandhi Jayanti cleanliness campaign at college campus</td>
                <td>02 October 2017	</td>
                <td>The Mahatma Gandhi Jayanti cleanliness campaign at college campus
                </td>
            </tr>
            <tr>
                <td>10</td>
                <td>Blood Donation</td>
                <td>Blood Donation With collaboration Revnil blood bank Sangola</td>
                <td>13 September 2017</td>
                <td>Blood Donation With collaboration Revnil blood bank Sangola
                </td>
            </tr>

        </table>

        <!-- her main content is end -->

        <hr>
        <!-- footer page -->
        <?php
        require 'Footer.php';
        ?>

    </div>





</body>

</html>