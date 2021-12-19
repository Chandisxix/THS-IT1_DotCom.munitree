<html>
    <body>
        <form action="" method="POST">
            <input type = "email" name = "email" placeholder="Enter email" required/>
            <input type = "password" name = "password" placeholder="Enter Password" required/>
            <input type = "submit" name = "login" value="Login"/>
        </form>
    </body>
</html>

<?php
    // session_start();
    // require("connect.php");
    
    // if(isset($_POST["login"])){
    //     $eemail = $_POST["uemail"];
    //     $_SESSION['uemail'] = $eemail;
    //     header("Location:test.php");
    //     echo $eemail;
    //     $ePassword = $_POST["upassword"];
    //     echo $ePassword;
        // $ePassword = md5($ePassword);
        // $sql = mysqli_query($DBConnect, "SELECT * FROM users WHERE uemail='$eemail' AND upassword='$ePassword'");
        // $fetch = mysqli_fetch_array($sql);
        // $dID = $fetch['uemail'];
        // $dPassword = $fetch['upassword'];
        // $_SESSION['uemail'] = $eemail;
        // if($eemail == $dID && $ePassword == $dPassword){
        //     // $_SESSION['uemail'] = $eemail;
        //     $_SESSION['upassword'] = $ePassword;
        //     $_SESSION['favcolor'] = "green";
        //     echo $_SESSION['upassword'];
        //     header("Location:test.php");
        // }
        // else{
        //     header("Location:login.php");
        // }
    //}
?>

