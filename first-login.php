<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="log-in.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
</head>

<body onload="slider()">
    <div class="banner">
        <div class="slider" >
            <img src="reviews/report/plum1.jpg" id="slideimg">
        </div>
        <!-- <div class="h11">
            <h1>THE HELP</h1>
        </div> -->
        <div class="bigbox" style="background:linear-gradient(rgb(24 24 24 / 80%),rgb(49 47 47 / 80%));">
            <div class="navbar">
                <h1 style="flex-basis: 100%; text-align:center; font-size:70px;  font-family: 'Poppins', cursive; font-weight:800; color:white;">THE <span style="color:#2fccc2">HELP</span></h1>
                <div class="menu">
                    <a href="about.php?id=0"><img src="images/icons8-menu-64.png"></a>
                </div>
        </div>
            <div class="box" style=" margin-top: 4.5%;
    margin-left: 35.6%;">
                <div class="form">
                    <form class="connecting"
                         action="log-in.php"
                         method="post">
                         <h2>Sign in</h2>
            <?php 
            if(isset($_GET['error'])){?>
                <div>
                    <h3 style="display: flex;
    height: 25px;
    color: #842029;
    background-color: #f8d7da;
    border-color: #f5c2c7;
    align-items: center;
    position: relative;
    padding: 1rem 1rem;
    margin-top: 0.4rem;
    justify-content:center;
    font-size:16px;
    border: 1px solid transparent;
    border-radius: 0.25rem;">Invalid Password or email</h3>
          </div>
          <?php    }
            ?>
                        <div class="inputbox">
                            <input type="email" required="required" name="email" value="<?php echo (isset($_GET['email']))?$_GET['email']:""; ?>">
                            <span>Email</span>
                            <i></i>
                        </div>
                        <div class="inputbox">
                            <input type="password" required="required" name="pass" />
                            <span>Password</span>
                            <i></i>
                        </div>
                        <div class="links">
                            <a href="#">Forgot password</a>
                        </div>
                        <input type="submit" value="Login">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    var slideimg = document.getElementById("slideimg");
    var images = new Array(
        "reviews/report/plum2.jpg",
        "reviews/report/mea1.jpg",
        "reviews/report/plum1.jpg"
    );
    var len = images.length;
    var i = 0;
    function slider() {
        if (i > len - 1) {
            i = 0;
        }
        slideimg.src = images[i];
        i++;
        setTimeout('slider()', 3000);
    }
</script>

</html>