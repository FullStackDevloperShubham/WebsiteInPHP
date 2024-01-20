<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shubham Website</title>
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <div class="main" id="MAIN">
        <!-- navbar -->
        <?php
             require 'Nav.php';
        ?>
        <!-- navbar end -->
        <?php
        require 'MainContent.php';
        ?>
         
         <!-- news and annocement -->
         <?php
            require 'NewsAndAnnocement.php';
            ?>
        <?php
          require  'Events.php';
          ?><hr>
          <!-- footer page -->
          <?php
            require 'Footer.php';
            ?>
       
    </div>





</body>

</html>