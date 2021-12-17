<?php
    session_start();
    require("connect.php");
    
    if(isset($_POST["submit"])){
        $eemail = $_POST["email"];
        $epassword = $_POST["password"];
        // $_SESSION['uemail'] = $eemail;
        // $_SESSION['upassword'] = $epassword;
        // header("Location:test.php");
        // $ePassword = md5($ePassword);
        $sql = mysqli_query($DBConnect, "SELECT * FROM users WHERE uemail='$eemail' AND upassword='$epassword' AND uRole!='unregistered'");
        $fetch = mysqli_fetch_array($sql);
        $demail = $fetch['uemail'];
        $dpassword = $fetch['upassword'];
        if($eemail == $demail && $epassword == $dpassword){
            $_SESSION['uemail'] = $eemail;
            $_SESSION['upassword'] = $epassword;
            header("Location:admin_homepage.php");
        }
        else{
            //echo "<script type='text/javascript'>alert('wrong username/ password') </script>";
            header("Location:login.php");
        }
    }
?>
