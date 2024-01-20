<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shubham Website</title>
    <link rel="stylesheet" href="main.css">
    <style>
        .TABEL-STAFF {
            display: flex;
            margin-left: 400px;
            padding: 20px;
            font-size: 20px;
            column-rule: 2px double #ff00ff;
            /* border: 1px solid red; */
        }

        table,
        th,
        td {
            border: 1px solid red;
            /* border-collapse: collapse; */

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

        <!-- main content of staff page start -->
        <div class="TABEL-STAFF">
            <table>
                <tr>
                    <th>NAME OF THE STAFF</th>
                    <th>DESIGNATION</th>
                </tr>
                <tr>
                    <td>Shri. Shinde P. S.</td>
                    <td>Office Superintendent</td>
                </tr>
                <tr>
                    <td>Shri. Sakhare A.U.</td>
                    <td>Head Clerk</td>
                </tr>
                <tr>
                    <td>Shri. Mane V. V.</td>
                    <td>Senior Clerk</td>
                </tr>
                <tr>
                    <td>Shri. Pailwan P. B.</td>
                    <td>Lab. Assistant</td>
                </tr>
                <tr>
                    <td>Kum. Yeldare R. R.</td>
                    <td>Lab. Assistant</td>
                </tr>
                <tr>
                    <td>Shri. Bunjakar R. B.</td>
                    <td>Lab. Attendant</td>
                </tr>
                <tr>
                    <td>Shri. Kulkarni D. P.</td>
                    <td>Lab. Attendant</td>
                </tr>
                <tr>
                    <td>Shri. Gaikwad B.G. </td>
                    <td>Lab. Attendant</td>
                </tr>
                <tr>
                    <td>Shri. Shinde S.S.</td>
                    <td>Lab. Attendant</td>
                </tr>
                <tr>
                    <td>Shri. Swami S. B.</td>
                    <td>Lab. Attendant</td>
                </tr>
                <tr>
                    <td>Shri. Bhosale S.B.</td>
                    <td>Lab. Attendant</td>
                </tr>
                <tr>
                    <td>Shri. Dhole R. R.</td>
                    <td>Lab. Attendant</td>
                </tr>
                <tr>
                    <td>Shri. Dhole R. R.</td>
                    <td>Lab. Attendant</td>
                </tr>
                <tr>
                    <td>Shri. Ingole B. S.</td>
                    <td>Peon</td>
                </tr>
                <tr>
                    <td>Shri. Kashid M.N.</td>
                    <td>Peon</td>
                </tr>
                <tr>
                    <td>Shri. Mane S. B.</td>
                    <td>Peon</td>
                </tr>
                <tr>
                    <td>Shri. Kulkarni A. R.</td>
                    <td>Lib. Assistant</td>
                </tr>

                <tr>
                    <th>Sr no</th>
                    <th>NAME</th>
                    <th>QUALIFICATION</th>
                    <th>DESIGNATION</th>
                    <th>EXPERIENCE(In Years)</th>
                </tr>
                <tr>
                    <th>1</th>
                    <th>Shri. B.A. Ingole</th>
                    <th>M.A</th>
                    <th>Junior Clerk</th>
                    <th>17</th>
                </tr>
                <tr>
                    <th>2</th>
                    <th>Shri. T.N. Dighe</th>
                    <th>B.A & DCP</th>
                    <th>Junior Clerk</th>
                    <th>17</th>
                </tr>
                <tr>
                    <th>3</th>
                    <th>Shri. S.S.Mane</th>
                    <th>M.C.A.& CCNA</th>
                    <th>Lab. Assistant</th>
                    <th>8</th>
                </tr>
            </table>

        </div>











        <!-- main content of staff page end -->







        <!-- news and annocement -->

        <!-- new and annocement end -->
        <!-- here event start -->

        <!-- here event end -->
        <hr>
        <!-- footer page -->
        <?php
        require 'Footer.php';
        ?>

    </div>





</body>

</html>