<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>DotCom.munitree</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin&amp;display=swap">
    <link rel="stylesheet" href="assets/css/FontAwesome.css">
    <link rel="stylesheet" href="assets/css/Minecraft.css">
    <link rel="stylesheet" href="assets/css/Minecrafter.css">
    <link rel="stylesheet" href="assets/css/Minecrafter%20Alt.css">
    <link rel="stylesheet" href="assets/css/Nature%20Spirit.css">
    <link rel="stylesheet" href="assets/css/Nature%20Spirit%20Rough.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600,700">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Button-Change-Text-on-Hover.css">
    <link rel="stylesheet" href="assets/css/dh-card-image-left-dark.css">
    <link rel="stylesheet" href="assets/css/Footer-with-social-media-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/iframe.css">
    <link rel="stylesheet" href="assets/css/Latest-Blog.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/Masonry-gallery-cards-responsive.css">
    <link rel="stylesheet" href="assets/css/Page-Title-Header.css">
    <link rel="stylesheet" href="assets/css/Profile-Edit-Form-1.css">
    <link rel="stylesheet" href="assets/css/Profile-Edit-Form-2.css">
    <link rel="stylesheet" href="assets/css/Profile-Edit-Form-3.css">
    <link rel="stylesheet" href="assets/css/Profile-Edit-Form.css">
    <link rel="stylesheet" href="assets/css/project-card.css">
    <link rel="stylesheet" href="assets/css/Search-Field-With-Icon.css">
    <link rel="stylesheet" href="assets/css/Search-Input-responsive.css">
    <link rel="stylesheet" href="assets/css/Sticky_Background.css">
    <link rel="stylesheet" href="assets/css/Tricky-Grid---2-Column-on-Desktop--Tablet-Flip-Order-of-12-Column-rows-on-Mobile.css">
</head>

<body>
    <section id="content_login" class="scroller_login" style="width: 100%;height: 100%;">
        <form class="border rounded border-dark" id="form_login" method="POST" style="opacity: 0.95;height: 100%;max-width: none;width: 500px;background-color: rgb(30,40,51);margin-right: auto;margin-left: auto;padding-bottom: 0px;padding-top: 0px;padding-right: 40px;padding-left: 40px;">
            <div id="form_image_frame" class="illustration"><img id="form_image" src="assets/img/pngaaa.com-1311242.png" style="width: 225px;margin: 0px;margin-left: 100px;margin-top: 50px;"></div>
            <p class="text-center intro-text" id="form_title" style="font-family: 'Nature Spirit Rough';color: rgb(255,255,255);font-size: 50px;line-height: 30px;width: 100%;height: auto;">Dot Com.munitree<br></p>
            <p class="text-center intro-text" id="form_subtitle" style="font-family: ABeeZee, sans-serif;color: rgb(255,255,255);font-size: 17px;line-height: 30px;width: 100%;">Welcome back home! Come right in!<br></p>
            <div class="form-group" id="form_username_bar"><input class="border-dark form-control" type="email" id="form_username" style="font-family: ABeeZee, sans-serif;color: rgb(255,255,255);background-color: rgba(255,255,255,0);" name="email" placeholder="Email" required></div>
            <div class="form-group" id="form_password_bar"><input class="border-dark form-control" type="password" id="form_password" name="password" placeholder="Password" style="font-family: ABeeZee, sans-serif;background-color: rgba(255,255,255,0);" required></div>
            <!-- <div class="form-group" id="form_button_bar"><a class="btn btn-primary btn-block text-center border-success" name = "submit" type="submit" role="button" id="form_button" style="background-color: rgb(118,255,0);color: rgb(0,0,0);font-family: 'Nature Spirit Rough';font-size: 40px;">Log In<br>(Temporary Link to change later)</a></div> -->
            <button class="form-group" id="form_button_bar" name = "submit" type="submit" id="form_button" role="button" style="background-color: rgb(118,255,0);color: rgb(0,0,0);font-family: 'Nature Spirit Rough';font-size: 40px;">Log In</button>
            <div class="form-group text-center" id="form_button_bar-1" style="margin-bottom: 0px;">
                <p class="text-center intro-text" id="form_msg" style="font-family: ABeeZee, sans-serif;color: rgb(255,255,255);font-size: 15px;width: 100%;line-height: 10px;margin-bottom: 15px;margin-top: 20px;">Don't have an account yet ?<br></p><a class="text-center" href="#" style="width: 100%;height: 100%;font-size: 15px;padding-bottom: 0px;padding-top: 0px;color: rgb(0,224,255);font-family: ABeeZee, sans-serif;line-height: 20px;">Create an account</a>
            </div>
        </form>
    </section>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/clean-blog.js"></script>
    <script src="assets/js/current-day.js"></script>
    <script src="assets/js/Profile-Edit-Form.js"></script>
</body>

</html>
<?php
    require("connect.php");

    if(isset($_POST["submit"])){
        $temail = $_POST["email"];
        $tpword = $_POST["password"];
        // $tpword = md5($tpword);
        // $sql = mysqli_query($DBConnect, "SELECT upassword FROM users WHERE uemail='$temail'");
        $sql = mysqli_query($DBConnect, "SELECT * FROM users WHERE uemail='$temail' AND upassword='$tpword' AND uRole!='unregistered'");
        $fetch = mysqli_fetch_array($sql);
        $dID = $fetch['uemail'];
        $dPassword = $fetch['upassword'];
        if($temail == $dID && $tpword == $dPassword){
            $_SESSION['uemail'] = $temail;
            $_SESSION['upassword'] = $tpword;
            echo "<script type='text/javascript'> document.location = 'homepage.html'; </script>";
        }
        else{
            echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
        }
        

    }
?>