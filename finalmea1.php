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

<body>
    <nav class="navbar">
        <div class="logo"> <i class='bx bxs-building-house'></i>The Help </div>
        <ul class="menu">
            <li><a href="" class="active">Home</a> </li>
            <li><a href="">About </a></li>
            <li><a href="">Contact Us</a></li>
            <?php $id= $_GET['id'];?>
            <li> <a href="finalplum.php?id=<?php echo $id;?>">Plumeria Services</a> </li>
            <?php if($id<90000) { ?>
            <li> <a href="resd-profile.php?id=<?php echo $id;?>">Manage Profile</a> </li>
            <?php } ?> 
            <li> <a href="logout.php">Logout<?php echo (isset($_GET['email']))?$_GET['email']:""; ?></a> </li>
            <!-- 
                <div class="sub-menu-1"></div>
                <ul>

                    <li> <a href="">Manage Profile</a> </li>
                    <li> <a href="">Notification Settings</a> </li>
                    <li> <a href="">Support & More</a> </li>
                    <li> <a href="">Plumeria Services</a> </li>
                    <li> <a href="">Logout</a> </li>


                </ul>
                -->


            </li>
            <li><a href=""><i class='bx bxs-shopping-bag' id="cart-icon"></i></a></li>
        </ul>
        <!--from here-->





        <!--till here-->
        <div class="menu-btn">
            <i class="fa fa-bars"></i>

        </div>
    </nav>

    <section class="content">


        <div class="slider">
            <figure>


                <div class="slide">

                    <img src="  https://cdn.brigadegroup.com/properties/gallery/15107348835a0bfc23a978e.jpg " alt="">
                </div>
                <div class="slide">

                    <img src=" https://www.propertygeek.in/wp-content/uploads/2021/04/Brigade-Meadows-Plumeria-1.jpeg"
                        alt="">
                </div>
                <div class="slide">

                    <img src=" https://cdn.brigadegroup.com/properties/gallery/15711399175da5b14d3ac5f.jpg" alt="">
                </div>
                <div class="slide">

                    <img src=" https://www.85soho.com/wp-content/uploads/2020/03/4-key-factors-people-look-for-in-serviced-apartments-1600x800.jpg"
                        alt="">
                </div>
                <div class="slide">

                    <img src="https://poloandtweed.com/wp-content/uploads/2020/02/housekeeper-cook.png" alt="">
                </div>
            </figure>
        </div>



    </section>
    <h1 class="pheading">Our Services</h1>
    <section class="sec">
        <div class="products">

            <div class="card">

                <div class="img"><img
                        src=" https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR8eeiwayuc16cItEiOA004kDTVOIfre81vdgSVsx3YQgvs9LUnM9IZnimIrqe8B2xzOUM&usqp=CAU"
                        alt="width: 250px height=250px "></div>

                <div class="title">Daily Help</div>
                <div class="box">
                    <!-- <div class="price">@Rs100</div> -->
                    <button class="btn">CONFIRM</button>
                </div>
            </div>


            <!-- here again-->
            <div class="card">

                <div class="img"><img
                        src="   https://img.lovepik.com/free-png/20220126/lovepik-girl-cooking-png-image_401764830_wh300.png">
                </div>

                <div class="title">Cook</div>
                <div class="box">
                    <!-- <div class="price">@Rs100</div> -->
                    <button class="btn">CONFIRM</button>
                </div>
            </div>
        </div>
    </section>
    <!-- <div class="ppheading">
                <h1 class="here"> Other Services</h1>
            </div> -->
    <!-- 
            <div class="card1">

                <div class="img"><img
                        src=" https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR8eeiwayuc16cItEiOA004kDTVOIfre81vdgSVsx3YQgvs9LUnM9IZnimIrqe8B2xzOUM&usqp=CAU"
                        alt="width: 250px height=250px "></div>

                <div class="title">Daily Help</div>
                <div class="box">
                      <div class="price">@Rs100</div> -->
    <!--
                    <button class="btn">CONFRIM</button>
                </div>
            </div>
        -->
    <section class="secc">
        <div class="productss">

            <div class="cards">

                <div class="imgs"><img
                        src=" https://img.lovepik.com/free-png/20220117/lovepik-painter-png-image_401428077_wh300.png"
                        alt="  "></div>

                <div class="titles">Painter</div>
                <div class="boxs">
                    <!-- <div class="price">@Rs100</div> -->
                    <button class="btns">CONFIRM</button>
                </div>
            </div>


            <!-- <container class="proc"> -->
            <div class="cards">

                <div class="imgs"><img src="https://cdn-icons-png.flaticon.com/512/1983/1983275.png"
                        alt="width: 250px height=250px "></div>

                <div class="titles">Electrician</div>
                <div class="boxs">
                    <!-- <div class="price">@Rs100</div> -->
                    <button class="btns">CONFIRM</button>
                </div>
            </div>
            <!-- </container> -->









            <div class="cards">

                <div class="imgs"><img
                        src="  https://thumbs.dreamstime.com/b/female-plumber-fixing-bathroom-sink-female-plumber-fixing-bathroom-sink-flat-style-illustration-plumber-woman-workwear-224974827.jpg"
                        alt="width: 250px height=250px "></div>

                <div class="titles">Plumber</div>
                <div class="boxs">
                    <!-- <div class="price">@Rs100</div> -->
                    <button class="btns">CONFIRM</button>
                </div>
            </div>
        </div>
    </section>

    <!-- 
            <div class="card1">

                <div class="img"><img
                        src=" https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR8eeiwayuc16cItEiOA004kDTVOIfre81vdgSVsx3YQgvs9LUnM9IZnimIrqe8B2xzOUM&usqp=CAU"
                        alt="width: 250px height=250px "></div>

                <div class="title">Daily Help</div>
                <div class="box">
                     <div class="price">@Rs100</div> -->
    <!-- 
            <button class="btn">CONFRIM</button>
        </div>
        </div>



        <div class="card">

            <div class="img"><img
                    src=" https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR8eeiwayuc16cItEiOA004kDTVOIfre81vdgSVsx3YQgvs9LUnM9IZnimIrqe8B2xzOUM&usqp=CAU"
                    alt="width: 250px height=250px "></div>

            <div class="title">Daily Help</div>
            <div class="box">
                -->
    <!-- <div class="price">@Rs100</div> -->
    <!-- 
                <button class="btn">CONFRIM</button>
            </div>
        </div>
        -->


    </div>



    </section>
    <footer>

        <p>Copyrights at <a href="">The Help</a></p>
    </footer>

    <script src="main.js"></script>



</body>

</html>
