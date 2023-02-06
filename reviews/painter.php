<?php
include_once('connection.php');
$query = "select * from painter";
$result = mysqli_query($conn,$query);
?>
 
 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Reviews</title>
    <link rel='stylesheet'  href='rev.css'>
    <script src="https://kit.fontawesome.com/44f557ccce.js"></script>

</head>

<body style="background-color: rgb(238, 238, 238)">
<div class="rev-section" style="background-color:white;">
    <div style="background-color: #f9cda6; padding:20px; color:  brown;">

<h1>THE HELP</h1>
</div>
<div class="reviews">

    <?php $id= $_GET['id'];?>
    <div class="review">
    <?php
while($row=mysqli_fetch_array($result)) {
    ?>
     <form action="newbill.php?id=<?php echo $id;?>&idw=<?php echo $row['id'];?>" method="post">

        <div class="head-review">      
            <?php
                echo '<img src="data:image;base64,'.base64_encode($row['pic']).'" style=" border-radius: 30%;">';?>
            </div>
            <div class="body-review" style="width:720px; height: 276px;">
                <div class="name-review">
                    <?php echo $row['name'] ; 
                    ?>
                </div><div><?php echo $row['year']; ?> years of Experience</div><br>
                        <div class="place-review">Ph no.:<?php echo $row['phno']; ?> </div><br>
                        <div style="font-size: 25px;">Rs.<?php echo $row['price']; ?> per hour /-</div>
            
            <div class="rating"><?php
            for($x=0;$x<$row['stars'];$x++) { ?>
                            <i class="fas fa-star"></i>
                            <?php
                        }?>
            </div>
            <!-- 
            <div class="desc-review">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati
                eligendi suscipit illum officia ex eos.</div>
                -->
                <button style=" background: rgba(142, 36, 36, 0.8);  
    width: 371px;
    font: initial;
    color: azure;
    height: 32px;
    border-radius: 12px;">CONFIRM</button>
            </div>
        </form>
        <?php
} ?>   
</div> 
    </div>
   
</div>
   
</body>

</html>