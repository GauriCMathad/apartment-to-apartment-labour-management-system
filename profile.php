
<?php
//dont forget the name attribute in the profile pg of html,bootstrap to display alerts

$conn= new mysqli("localhost","root","","workersdb");
$id=$_GET['id'];
        $name=$_POST['name'];
        $phno=$_POST['phno'];
        $flatno=$_POST['flatno'];
        $pass=$_POST['pass'];
        $email=$_POST['email'];
        $msg=$_POST['msg'];
        $data ="id=".$id."&email=".$email;
        $sql="UPDATE residentsdb SET name=?,phno=?,flatno=?,msg=? where id=?";
      $stmt=$conn->prepare($sql);
      $stmt->bind_param("sissi",$name,$phno,$flatno,$msg,$id); 
      $stmt->execute();
     if($id>90000){
      header("Location:finalplum.php?$data");
      exit;}
      else{
        header("Location:finalmea.php?$data");
      exit;
      }
    
?>