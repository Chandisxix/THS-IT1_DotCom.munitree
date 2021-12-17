<html>
    <body>
    <?php
        session_start();
        // $tempemail = $_SESSION['uemail'];
        // echo $_SESSION['favcolor'];
        // echo $_SESSION['uemail'];
        print_r($_SESSION);
        // require("connect.php");
        echo "This is from my session: "." ". $_SESSION['uemail'];
        session_destroy();
        //logged user
        // $sqllogged = "SELECT uemail FROM users WHERE uemail = '" . $_SESSION['uemail'] . "' ";
        // $resultlogged = $con->query($sqllogged);

        // while($row = $resultlogged->fetch_assoc()) {
        // $uid = $row['uemail'];
        // echo $uid;
        // }
        // if($_SESSION['uemail']){
        //     $query = mysqli_query($DBConnect, "SELECT * FROM users WHERE uemail='$tempemail'");
        //     $fetch = mysqli_fetch_array($query);
        //     $tempoemail = $fetch["uemail"];
        //     echo "<li>Welcome, $tempoemail<br>Employee ID: </li>";
        // }
    ?>
    </body>
</html>