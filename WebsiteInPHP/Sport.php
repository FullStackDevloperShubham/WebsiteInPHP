<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shubham Website</title>
    <link rel="stylesheet" href="main.css">
    <style>
        .conatiner{
            display: flex;
            flex-direction: column;
        }
        th,tr{
            border: 1px solid red;
        }
        td{
           border: 1px solid green;
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
            <table>
                <tr>
                    <th>Srno</th>
                    <th>Events</th>
                    <th>Description</th>
                    <th>Year</th>
                    <th>View</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>West Zone Inter University Competition.</td>
                    <td>The above Four Boys participated in the West Zone Inter University Competition Mallikarjun
                        Pujari
                        represented Solapur University in Chess, Bhagat Pradeep & Sourabh Rupnar represented Solapur
                        University in Kabaddi, Jaydeep Shinde represented Solapur University in Kho-Kho</td>
                    <td>2021-22</td>
                    <td><a href="http://sangolacollege.org/event/sports2020_21a.pdf">The above Four Boys participated in the West Zone Inter University Competition Mallikarjun
                        Pujari
                        represented Solapur University in Chess, Bhagat Pradeep & Sourabh Rupnar represented Solapur
                        University in Kabaddi, Jaydeep Shinde represented Solapur University in Kho-Kho.</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>All India Inter University Competition</td>
                    <td>The above Two Boys participated in the All India Inter University Competition Akash Bankar
                        represented Solapur University in Best Phys and Raj Mali represented Solapur University in
                        Taekwondo.</td>
                    <td>2021-22</td>
                    <td><a href="http://sangolacollege.org/event/sports2020_21.pdf">The above Two Boys participated in the All India Inter University Competition Akash Bankar
                        represented Solapur University in Best Phys and Raj Mali represented Solapur University in
                        Taekwondo.</a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>P.A.H. Solapur University, Intercollegiate Sports Competition.</td>
                    <td>The Girls Team Won the Third Position (Bronze Medal) In the Inter College Chess Tournament.</td>
                    <td>2019-20</td>
                    <td><a href="http://sangolacollege.org/event/sports2019_20b.pdf">The Girls Team Won the Third Position (Bronze Medal) In the Inter College Chess Tournament.</a></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>P.A.H. Solapur University, Intercollegiate Sports Competition.</td>
                    <td>The Girls Team Won the Second Position (Silver Medal) In the Inter College Kabaddi Tournament.
                    </td>
                    <td>2019-20</td>
                    <td><a href="http://sangolacollege.org/event/sports2019_20a.pdf">The Girls Team Won the Second Position (Silver Medal) In the Inter College Kabaddi Tournament.</a>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>P.A.H. Solapur University, Intercollegiate Sports Competition.</td>
                    <td>The Boys Team Won the First Position (Gold Medal) In the Inter College Kabaddi Tournament.</td>
                    <td>2019-20</td>
                    <td><a href="http://sangolacollege.org/event/sports2019_20.pdf">The Boys Team Won the First Position (Gold Medal) In the Inter College Kabaddi Tournament.</a></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>P.A.H. Solapur University, Intercollegiate Sports Competition.</td>
                    <td>All India Inter University Competition.</td>
                    <td>2018-19</td>
                    <td><a href="http://sangolacollege.org/event/sports2018_19a.pdf">All India Inter University Competition.</a></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>P.A.H. Solapur University, Intercollegiate Sports Competition.</td>
                    <td>The Boys Team Won the Second Position (Silver Medal) In the Inter College Cross Country
                        Tournament.</td>
                    <td>2018-19</td>
                    <td><a href="http://sangolacollege.org/event/sports2018_19.pdf">The Boys Team Won the Second Position (Silver Medal) In the Inter College Cross Country</a>
                        Tournament.</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>P.A.H. Solapur University, Intercollegiate Sports Competition.</td>
                    <td>The Boys Team Won the Second Position (Silver Medal) In the Inter College Cross Country
                        Tournament.</td>
                    <td>2017-18</td>
                    <td><a href="http://sangolacollege.org/event/sports2017_18a.pdf">The Boys Team Won the Second Position (Silver Medal) In the Inter College Cross Country
                        Tournament.</a></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>P.A.H. Solapur University, Intercollegiate Sports Competition.</td>
                    <td>The Girls Team Won the First Position (Gold Medal) In the Inter College Kabaddi Tournament</td>
                    <td>2017-18</td>
                    <td><a href="http://sangolacollege.org/event/sports2017_18.pdf">The Girls Team Won the First Position (Gold Medal) In the Inter College Kabaddi Tournament</a></td>
                </tr>

            </table>

        </div>




        <hr>
        <!-- footer page -->
        <?php
        require 'Footer.php';
        ?>

    </div>





</body>

</html>