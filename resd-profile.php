<?php
$conn= new mysqli("localhost","root","","workersdb");
$id=$_GET['id'];
$sql="SELECT * FROM residentsdb where id=?";
$stmt=$conn->prepare($sql);
$stmt->bind_param("i",$id);
$stmt->execute();
$stresult=$stmt->get_result();
  $user=$stresult->fetch_assoc();
  $email= $user['email'];
  $pass= $user['password'];
  $name= $user['name'];
  $flatno= $user['flatno'];
  $phno= $user['phno'];
  $msg=$user['msg'];
  $data ="email=".$email."&id=".$id;
//   header("Location:resd-profile.php?emai=$email&id=$id");
//   exit();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="neww.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;1,100&display=swap"
        rel="stylesheet">

</head>

<body>
    <form action="profile.php?id=<?php echo $id;?>" method="post">
        <div class="continer">
            <h1>Manage Profile</h1>
        <p>We ensure your privacy. Feel free to get in touch with us!</p>
        <div class="contact-box">
            <div class="contact-left">
                <h3>Update Your Profile</h3>
                <form>
                    <div class="input-row">
                        <div class="input-group">
                            <label for="">Name</label>
                            <input type="text" value="<?php echo (isset($name))?$name: " john amaz"; ?>" name="name">
                        </div>
                        <div class="input-group">
                            <label for="">Phone No</label>
                            <input type="text" value="<?php echo (isset($phno))?$phno: " +91 812 520 5360"; ?>" name="phno">
                        </div>
                        <div class="input-row">
                            <div class="input-group">
                                <label for="">Email</label>
                                <input type="email"  value="<?php echo $email; ?>" name="email">
                            </div>
                            <div class="input-group">
                                <label for=""> Flat no</label>
                                <input type="text" value="<?php echo (isset($flatno))?$flatno: 'BM249'; ?>" name=flatno>
                            </div>
                        </div>
                        <!---->
                        <div class="input-group">
                            <label for="">Password</label>
                            <input type="password" value="<?php echo $pass; ?>" name="pass">
                        </div>
                    </div>
                    <label>Add Message</label>
                    <textarea rows=" 5" placeholder="Your message" name="msg"><?php echo ((isset($msg))? $msg : 'Your Message'); ?></textarea>
                    <button type="submit"  >Update</button>

                </form>

            </div>
            <div class="contact-right">
                <h3>Reach Us</h3>
                
                <table>
                    <tr>
                        <td>Email</td>
                        <td>gmaheswari@gmail.com</td>
                    </tr>
                    <tr>
                        <td>Phone no</td>
                        <td> +91 845 678 2345</td>
                    </tr>
                    <tr>
                        <td> Address</td>
                        <td>No.122, Saalu Hunase Village, Opp. Anjanya Temple, Udayapura Post, Kanakapura Road, <br>
                        Bengaluru, Karnataka 560082. </td>
                    </tr>
                </table>
            </div>
        </div>


        
    </div>
</form>
</body>

</html>