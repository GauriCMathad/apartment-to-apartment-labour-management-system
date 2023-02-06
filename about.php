<!DOCTYPE html>
<html lang="en">
<!--linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)),-->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="about.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;1,300&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <div class="hero-section">
            <div class="navbar">
            <?php $id= $_GET['id'];?>

                <div class="brand">
                    <h2>The <span style="color:#2fccc2">Help</span></h2>
                </div>
                <ul>
                      <?php if($id>90000) {?>
                    <li><a href="finalplum.php?id=<?php echo $id;?>" >Home</a><li>
                    <?php
                }
                else if($id>60000) { ?>
                    <li><a href="finalmea.php?id=<?php echo $id;?>" >Home</a><li>
                    <?php } 
                    ?>
                        
                    <li><a href="first-login.php">Logout</a></li>
                </ul>

            </div>
            <div class="content">
                <p class="title" style="color:#2fccc2">About Us</p>
                <p>The Help is a common platform to link the services of workers of different Apartments. 
                    This majorly helps the workers in getting right job. The Help makes a small effort in eradicating unemployment
                     and enabling welfare of the society and workers. Also, provides the needful to the residents of the society.<br> The title  <span style="color:#2fccc2; font-weight: 900;">The Help</span> is inspired from the novel the help written by Kathryn Stockett which talks about African American working in white households. </p>
            </div>
        </div>
    </div>

</body>

</html>