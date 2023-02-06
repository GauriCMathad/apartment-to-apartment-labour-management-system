<?php
//dont forget the name attribute in the profile pg of html,bootstrap to display alerts
if(isset($_POST['email']) &&
isset($_POST['pass'])){
      $conn= new mysqli("localhost","root","","workersdb");
        // echo "logged";

        $email=$_POST['email'];
        $pass=$_POST['pass'];
        // echo "$email";
        $sql="SELECT * FROM residentsdb where email=?";
        $stmt=$conn->prepare($sql);
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $stresult=$stmt->get_result();
       
        if($stresult->num_rows >0 ){
          $user=$stresult->fetch_assoc();
          $useremail= $user['email'];
          $userpass= $user['password'];
          $id=$user['id'];
          $data ="email=".$email."&id=".$id;
            if($pass===$userpass){
                $_SESSION['email']=$useremail;
                $_SESSION['id']=$id;
                // echo "logged";
                if($id>90000 ){
                header("Location:finalplum.php?$data");
              }
              else{
                header("Location:finalmea.php?$data");                
              }
            }
            else{
                $em="incorrect password ";
                header("Location:first-login.php?error=$em&$data");
              exit;
              }
      }
      else{
        $sqll="SELECT * FROM admin where email=?";
        $stmtt=$conn->prepare($sqll);
        $stmtt->bind_param("s",$email);
        $stmtt->execute();
        $stresultt=$stmtt->get_result();
        if( $stresultt->num_rows >0){
          $user=$stresultt->fetch_assoc();
            $useremail= $user['email'];
            $userpass= $user['password'];
            $id=$user['id'];
            $data ="email=".$email."&id=".$id;
              if($pass===$userpass){
                  $_SESSION['email']=$useremail;
                  $_SESSION['id']=$id;
                  // echo "logged";
                  if( $id==9){
                  header("Location:finalplum.php?$data");
                }
                else{
                  header("Location:finalmea.php?$data");                
                }
              }
              else{
                  $em="incorrect password or email";
                  header("Location:first-login.php?error=$em&$data");
                exit;
                }
        }
        else{
          $em="incorrect password or email";
          header("Location:first-login.php?error=$em&$data");
        exit;
        }
      }
    }
    else{
        header("Location:first-login.php?error)");
        exit;
    }
?>