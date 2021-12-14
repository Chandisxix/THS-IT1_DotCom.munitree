<html>
    <body>
        <form method="POST">
            <input type = "email" name = "email" placeholder="Enter Email" required/>
            <input type = "password" name = "password" placeholder="Enter Password" required/>
            <input type = "submit" name = "login" value="Login"/>
        </form>
    </body>
</html>

<?php
    require("connect.php");

    if(isset($_POST["login"])){
        $temail = $_POST["email"];
        $tpword = $_POST["password"];
        $sql = mysqli_query($DBConnect, "SELECT * FROM users WHERE uemail='$temail' AND upassword='$tpword'");
        $fetch = mysqli_fetch_array($sql);
        $dID = $fetch['uemail'];
        $dPassword = $fetch['upassword'];
        if($temail == $dID && $tpword == $dPassword){
            $_SESSION['uemail'] = $temail;
            $_SESSION['upassword'] = $tpword;
            header("Location:homepage.html");
        }
        else{
            header("Location:index.php");
        }
    }
?>