<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shubham Website</title>
    <link rel="stylesheet" href="main.css">
    <style>
        h2 {
            display: flex;
            /* border: 1px solid black; */
            justify-content: center;
            color:grey;
        }

        #DETAILS {
            display: flex;
            flex-wrap: nowrap;
            width: 100%;
            height: 300px;
            /* border: 1px solid black; */
            align-items: center;
            justify-items: center;
            justify-content: space-evenly;
            align-content: center;
            font-size: large;
            /* margin-left:520px; */
        }

        #HISTORY-IMG {
            display: flex;
            height: 300px;
            width: 800px;
            margin-left: 300px;
        }

        #HISTORY-IMG:hover {
            box-shadow: 2px 2px 52px rebeccapurple;
            border-radius: 30px;

        }
        p{
            color: darkgray;
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

        <!-- here is main content of About us page -->
        <h2>History</h2>
        <!-- <div class="Details" id="DETAILS"> -->

         <p>
         Solapur is one of the drought-prone districts of Maharashtra State. Agriculture is the main source of its
        income and livelyhood. Out of the eleven talukas of the district, Sangola taluka suffers from high intensity
        of drought, which has resulted into its economic, political, industrial and educational backwardness.
        Sangola town is the headquarters of the taluka. With a strong conviction that education, and especially
        higher education, works as an engine of all round development of any region, local vanguards like Late
        Dadasaheb Shende, Late Bapusaheb Zapke, Late Bajrangaba Lokhande and others established a society named as
        Sangola Taluka Uchha Shikshan Mandal, Sangola in 1970 in order to facilitate imparting of higher education.
        Previously students of this taluka had to go to Pune, Solapur, Sangli and Kolhapur for their higher
        education, which was a very costly affaire for them. Pioneers of the College brought higher education at
        doorstep of common man<br>
        <img src="History_page_name_tag.jpg" alt="" id="HISTORY-IMG">
        (Let us lit the light of knowledge) is the motto of the institution. Keeping this in mind society established a
        College by name Sangola College, Sangola in 1978.

        The College was started with two figure number of students and at present the number has reached to four
        figures. Initially only Arts faculty was opened in 1978, followed by Commerce faculty in 1981. Science faculty
        was introduced in 1991. Considering the need of time new courses like B.C.S, B.C.A. were started in 2000 and
        2003 respectively. It is a matter of proud that our College is pioneer in introducing B.C.S. course in Shivaji
        University, Kolhapur. The College marched one step ahead with post-graduate teaching in Marathi and Hindi in
        1995. Considering the need of post-graduate in computer science we started M.Sc(Computer Science) in 2003. The
        students are drawn from Sangola and peripheral rural area. Hence, the College has to make to pull them up to the
        common level. Effort of the faculty are rewarding. Some of our students have emerged as rank-holders in the
        University examinations. As well as number of students are working in software Industries in various
        multi-national organizations. Up till now twelve students of N.C.C. unit were selected to take part in R. D.
        parade in New Delhi. Also in sports we get number of awards as well as our some student's are members of state
        and national teams in various events.

         </p>
       


        <!-- </div> -->















        <!-- here main content of about us page is end -->




        <!-- news and annocement -->

        <!-- new and annocement end -->

        <!-- here Event section is started -->

        <!-- here event section is end -->
        <hr>
        <!-- footer page -->
        <?php
        require 'Footer.php';
        ?>

    </div>





</body>

</html>