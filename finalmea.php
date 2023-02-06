<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<!-- https://cdn.brigadegroup.com/properties/gallery/15107348835a0bfc23a978e.jpg-->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="finalmea.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
        integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;1,300&display=swap"
        rel="stylesheet">

</head>

<body style="background: rgb(251, 213, 167);">
    <nav class="navbar">
        <?php $id= $_GET['id'];?>
        <div class="logo"> <i class='bx bxs-building-house'></i>The Help </div>
        <ul class="menu">
            <li><a href="" class="active">Home</a> </li>
            <li><a href="about.php?id=<?php echo $id;?>">About </a></li>
            <?php if($id==6) { ?>
            <li><a href="">Add a member</a></li> <?php } ?>
            <?php if($id<90000 ) { ?>
            <li> <a href="finalplum.php?id=<?php echo $id;?>">Plumeria Services</a> </li>
            <li> <a href="resd-profile.php?id=<?php echo $id;?>">Manage Profile</a> </li>
            <li> <a href="logout.php">Logout</a> </li>
            <?php } ?>
            <?php if($id>90000 || $id==9) { ?>
            <li> <a href="finalplum.php?id=<?php echo $id;?>">Back To Plumeria</a> </li>
            <?php } ?>

            </li>
            <li><a href=""> <i class='bx bxs-shopping-bag' id="cart-icon"></i></a></li>
        </ul>
        <div class="menu-btn">
            <i class="fa fa-bars"></i>

        </div>
    </nav>

    <section class="content">

        <div class="slider">
            <figure>


                <div class="slide">

                    <img src="reviews/report/mea1.jpg" alt="">
                </div>
                <div class="slide">

                    <img src=" https://www.propertygeek.in/wp-content/uploads/2021/04/Brigade-Meadows-Plumeria-1.jpeg"
                        alt="">
                </div>
                <div class="slide">

                    <img src=" https://cdn.brigadegroup.com/properties/gallery/1619680440608a5cb841fc0.jpg" alt="">
                </div>
                <div class="slide">

                    <img src=" https://www.85soho.com/wp-content/uploads/2020/03/4-key-factors-people-look-for-in-serviced-apartments-1600x800.jpg"
                        alt="">
                </div>
                <div class="slide">

                    <img src="reviews/report/worker.jpg" alt="">
                </div>
            </figure>
        </div>
    </section>

    <h1 class="pheading">Our Services</h1>
    <section class="sec">
        <div class="products">

            <div class="card" style="background: rgb(251, 213, 167);">

                <div class="img"><img
                        src=" https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR8eeiwayuc16cItEiOA004kDTVOIfre81vdgSVsx3YQgvs9LUnM9IZnimIrqe8B2xzOUM&usqp=CAU"
                        alt="width: 250px height=250px "></div>

                <div class="title">Daily Help</div>
                <div class="box">
                <form action="reviews/daily.php?id=<?php echo $id;?>" method="post">

                    <!-- <div class="price">@Rs100</div> -->
                    <button class="btn">CONFIRM</button>
                    
                </div>
            </form>
            </div>

            <!-- here again-->
            <div class="card" style="background: rgb(251, 213, 167);">

                <div class="img"><img
                        src="   https://img.lovepik.com/free-png/20220126/lovepik-girl-cooking-png-image_401764830_wh300.png">
                </div>

                <div class="title">Cook</div>
                <div class="box">
                    <form action="reviews/index.php?id=<?php echo $id;?>" method="post">

                        <!-- <div class="price">@Rs100</div> -->
                        <button class="btn">CONFIRM</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <section class="secc">
        <div class="productss" >

            <div class="cards" style="background: rgb(251, 213, 167);">

                <div class="imgs"><img
                        src=" https://img.lovepik.com/free-png/20220117/lovepik-painter-png-image_401428077_wh300.png"
                        alt="  "></div>

                <div class="titles">Painter</div>
                <div class="boxs">
                <form action="reviews/painter.php?id=<?php echo $id;?>" method="post">
                    <!-- <div class="price">@Rs100</div> -->
                    <button class="btns">CONFIRM</button>
                </div></form>
            </div>


            <!-- <container class="proc"> -->
            <div class="cards" style="background: rgb(251, 213, 167);">

                <div class="imgs"><img src="https://cdn-icons-png.flaticon.com/512/1983/1983275.png"
                        alt="width: 250px height=250px "></div>

                <div class="titles">Electrician</div>
                <div class="boxs">
                <form action="reviews/electrician.php?id=<?php echo $id;?>" method="post">

                    <!-- <div class="price">@Rs100</div> -->
                    <button class="btns">CONFIRM</button>
                </div></form>
            </div>
            <!-- </container> -->
            <div class="cards" style="background: rgb(251, 213, 167);">

                <div class="imgs"><img
                        src="  https://thumbs.dreamstime.com/b/female-plumber-fixing-bathroom-sink-female-plumber-fixing-bathroom-sink-flat-style-illustration-plumber-woman-workwear-224974827.jpg"
                        alt="width: 250px height=250px "></div>

                <div class="titles">Plumber</div>
                <div class="boxs">
                <form action="reviews/plumber.php?id=<?php echo $id;?>" method="post">
                <!-- <div class="price">@Rs100</div> -->
                    <button class="btns">CONFIRM</button>
                </div></form>
            </div>
        </div>
    </section>

    </div>
    </section>
    <footer>

        <p>Copyrights at <a href="">The Help</a></p>
    </footer>

    <script src="main.js"></script>



</body>

</html>