<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shubham Website</title>
    <link rel="stylesheet" href="main.css">
    <style>
        table{
            padding: 20px;
            font-size: 30px;
            width: 100%;
        }

        th,
        tr,td {
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

        <!-- ṃain content of ressult  -->
        <div class="container">
            <table>
                <tr>
                    <th>Class</th>
                    <th>2011-12</th>
                    <th>2012-13</th>
                    <th>2013-14</th>
                    <th>2014-15</th>
                    <th>2015-16</th>
                    <th>Success Rate</th>
                </tr>
                <tr>
                    <td>B.A.-III</td>
                    <td>48.50</td>
                    <td>50.00</td>
                    <td>50.00</td>
                    <td>57.71</td>
                    <td>57.71</td>
                    <td>52.78</td>
                </tr>
                <tr>
                    <td>B.Com.-III</td>
                    <td>100.00</td>
                    <td>75.44</td>
                    <td>50.00</td>
                    <td>93.93</td>
                    <td>100.00</td>
                    <td>89.78</td>
                </tr>
                <tr>
                    <td>B.Sc.-III</td>
                    <td>82.05</td>
                    <td>80.00</td>
                    <td>76.11</td>
                    <td>77.60</td>
                    <td>87.30</td>
                    <td>80.61</td>
                </tr>
                <tr>
                    <td>B.Sc.(ECS)-III</td>
                    <td>61.48</td>
                    <td>67.71</td>
                    <td>67.15</td>
                    <td>80.16</td>
                    <td>72.61</td>
                    <td>69.82</td>
                </tr>
                <tr>
                    <td>B.C.A.-III</td>
                    <td>69.23</td>
                    <td>62.31</td>
                    <td>57.95</td>
                    <td>66.67</td>
                    <td>88.57</td>
                    <td>68.94</td>
                </tr>
                <tr>
                    <td>M.A. (Marathi)-II</td>
                    <td>70.00</td>
                    <td>72.00</td>
                    <td>76.00</td>
                    <td>76.92</td>
                    <td>86.00</td>
                    <td>76.18</td>
                </tr>
                <tr>
                    <td>M.A (Hindi)-II</td>
                    <td>100.00</td>
                    <td>100.00</td>
                    <td>90.90</td>
                    <td>83.33</td>
                    <td>75.00</td>
                    <td>89.84</td>
                </tr>
                <tr>
                    <td>M.Sc. (Computer)-II</td>
                    <td>60.00</td>
                    <td>79.54</td>
                    <td>40.74</td>
                    <td>64.68</td>
                    <td>00</td>
                    <td>48.99</td>
                </tr>
                <tr>
                    <td>M.C.A.-III</td>
                    <td>76.19</td>
                    <td>75.00</td>
                    <td>44.00</td>
                    <td>83.78</td>
                    <td>30.90</td>
                    <td>61.97</td>
                </tr>
                <tr>
                    <td>Success Rate</td>
                    <td>74.16</td>
                    <td>73.55</td>
                    <td>64.63</td>
                    <td>76.08</td>
                    <td>66.45</td>
                    <td>70.97</td>
                </tr>

            </table>

        </div>


        <!-- main content of result -->


        <hr>
        <!-- footer page -->
        <?php
        require 'Footer.php';
        ?>

    </div>





</body>

</html>