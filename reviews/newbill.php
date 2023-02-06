<?php
include_once('connection.php');
$query = "SELECT * from residentsdb where id=?";
$id= $_GET['id'];
$result=$conn->prepare($query);
$result->bind_param("i",$id);
$result->execute();
$rresult=$result->get_result();
  $resd=$rresult->fetch_assoc();
$idw = $_GET['idw'];
if($idw>=15102){
$sql="SELECT * FROM daily where id=?";}
else if($idw>=14000){
    $sql="SELECT * FROM electrician where id=?";
}
else if($idw>=13104){
    $sql="SELECT * FROM plumber where id=?";
}
else if($idw>=12000){
    $sql="SELECT * FROM painter where id=?";
}
else if($idw>=11000){
    $sql="SELECT * FROM maiddb where id=?";
}
$stmt=$conn->prepare($sql);
$stmt->bind_param("i",$idw);
$stmt->execute();
$stresult=$stmt->get_result();
  $user=$stresult->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<!-- background-image: url("  https://elegal.ph/site/wp-content/uploads/2015/07/e-payment.jpg");-->
<!--   background-image: url("   https://thumbor.forbes.com/thumbor/fit-in/x/https://www.forbes.com/advisor/in/wp-content/uploads/2022/05/pexels-towfiqu-barbhuiya-9810169-Cropped-scaled.jpg");-->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="newbill.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;1,300&display=swap"
        rel="stylesheet">
</head>

<body>
    <div id="wrapper">
        <div class="payment">
            <div class="payment_product">
                <div class="content">
                    <!--form here-->
                    <h1>The Help</h1>
                    <form id="register"  method="post">

                        <label for="">NAME :</label>
                        <br>
                        <input type="text"  class="name" value="<?php echo (isset($user['name']))?$user['name']: ''; ?>"  style="width:50%">
                        <br><br>
                        <label for="">YOUR FLATNO :</label>
                        <br>
                        <input type="text" class="name" value="<?php echo (isset($resd['flatno']))?$resd['flatno']: ''; ?>"  style="width:50%">
                        <br><br>
                        <label for="">PHONE :</label>
                        <br>
                        <input type="text" class="name" value="<?php echo (isset($user['phno']))?$user['phno']: ''; ?>"  style="width:50%;">
                        <br><br>
                        <label for="">DATE :</label>
                        <br>
                        <input type="date" class="name"  style="width:50%;">
                        <br><br>
                        <label for="" >Start Timing :</label>
                        <br>
                        <input type="time" class="name"  style="width:50%;" id="start">
                        <br><br>
                        <label for="" >End Timing :</label>
                        <br>
                        <input type="time" class="name"  style="width:50%;" id="end">
                        <br><br>
                        <p class="btn-area">
                            <i class="fa fa-trash"></i>
                            <span class="btn2" id="ind">CONFIRM</span>
                        </p>
                        
                            <script>
                               ind.addEventListener('click', function () {
                                let [sh,sm]=document.getElementById("start").value.split(":");
                                let [eh,em]=document.getElementById("end").value.split(":");
                               var h=parseInt(eh)-parseInt(sh);
                               var m=parseInt(em)-parseInt(sm);
                                // h=parse(h)
    document.getElementById("demo").innerHTML=h+" hr "+m+" min"; 
                                m=m/60;
                                h=h+m;
                                if(h<0)
                                {
                                    h=h+12;
                                }
                                per=<?php echo $user['price'];?> ;
                                document.getElementById("total").innerHTML= "Rs."+(h*per)+".00";
                                })
                            </script>
                           



                    </form>
                </div>
                <!--till here-->
            </div>
            <div class="payment_bill">
                <h3>Billing Details</h3>
                <ul>
                    <li>
                        <span>Housing Service</span>
                        <span>Plumbing</span>
                    </li>
                    <li>
                        <span>Number of Hours</span>
                        <span id="demo"></span>
                    </li>
                    <li>
                        <span>Per Hour price</span>
                        <span id="per" type="input">Rs.<?php echo (isset($user['price']))?$user['price']: ''; ?>.00</span>
                    </li>
                    <li>
                        <span> Total</span>
                      <?php  ?>
                        <span id="total">Rs.<script></script></span>
                    </li>
                </ul>
                <hr>
                <h3>Payment Information</h3>
                <form action="/" class="payment_form">
                    <div class="form_input">
                        <input type="text" placeholder="Card Number" style="width:100%;">
                    </div>
                    <div class="form_input">
                        <select>
                            <option value="">Month</option>
                            <option value="">jan</option>
                            <option value="">feb</option>
                            <option value="">mar</option>
                            <option value="">apr</option>
                            <option value="">may</option>
                            <option value="">jun</option>
                            <option value="">july</option>
                            <option value="">aug</option>
                            <option value="">sep</option>
                            <option value="">oct</option>
                            <option value="">nov</option>
                            <option value="">dec</option>

                        </select>
                        <select name="" id="">
                            <option value="">Year</option>
                            <option value="">2023</option>


                        </select>
                        <input type="text" placeholder="CVC">
                    </div>
                    <?php if($id>90000) {?>
                    <button type="submit"><a href="../finalplum.php?id=<?php echo $id;?>&idw=<?php echo $idw;?> "style="text-decoration:none;color:white;">Pay</a></button>
                    <?php exit;
                }
                else{?>
                    <button type="submit"><a href="../finalmea.php?id=<?php echo $id;?>&idw=<?php echo $idw;?>"style="text-decoration:none;color:white;">Pay</a></button>
                    <?php exit;}?>
                </form>
            </div>

        </div>
    </div>
</body>

</html>