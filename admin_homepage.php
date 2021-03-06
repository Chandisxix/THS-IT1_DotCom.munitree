<?php
    session_start();
    require("connect.php");

    $_SESSION['uemail'];
    if($_SESSION['uemail']){
        $query = mysqli_query($DBConnect, "SELECT * FROM announcement");
        $fetch = mysqli_fetch_array($query);
        $tempannouncement=$fetch["uannouncement"];
        // $result_uv = $DBConnect->query($query);
        // $tempofname=$fetch["ufname"];
        // $tempolname=$fetch["ulname"];
        // $tempoaddress=$fetch["uaddress"];
        // $tempocontact=$fetch["ucontactnumber"];
        // $tempofname=$fetch["ufname"];
    }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
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
    <link rel="stylesheet" href="assets/css/best-carousel-slide.css">
    <link rel="stylesheet" href="assets/css/Button-Change-Text-on-Hover.css">
    <link rel="stylesheet" href="assets/css/dh-card-image-left-dark.css">
    <link rel="stylesheet" href="assets/css/Drag--Drop-Upload-Form.css">
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
    <section id="header" style="height: 60vh;">
        <nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav">
            <div class="container-fluid"><a class="navbar-brand" href="homepage.html" style="font-family: 'Nature Spirit Rough';font-size: 3.5vh;letter-spacing: 2px;padding-top: 0px;padding-bottom: 0px;"><img src="assets/img/pngaaa.com-1311242.png" style="width: 2.3vw;margin-right: 15px;">DotCom.munitree</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <div class="float-left float-md-right mt-5 mt-md-0 search-area"></div>
                    <ul class="navbar-nav ml-auto" style="width: auto;">
                        <li class="nav-item"></li>
                        <li class="nav-item"><a class="nav-link" href="homepage.html" style="font-family: 'Nature Spirit';letter-spacing: 3px;font-size: 2.5vh;">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="submission.html" style="font-family: 'Nature Spirit';letter-spacing: 3px;font-size: 2.5vh;">Events</a></li>
                        <li class="nav-item"><a class="nav-link" href="discussionspace.html" style="font-family: 'Nature Spirit';letter-spacing: 3px;font-size: 2.5vh;">Discussion Space</a></li>
                        <li class="nav-item"><a class="nav-link" href="submission.html" style="font-family: 'Nature Spirit';letter-spacing: 3px;font-size: 2.5vh;">Marketplace</a></li>
                        <li class="nav-item"><a class="nav-link" href="feedbackreports.html" style="font-family: 'Nature Spirit';letter-spacing: 3px;font-size: 2.5vh;">FeedBack and Reports</a></li>
                        <li class="nav-item"></li>
                        <li class="nav-item" style="margin-left: 1vw;margin-right: 1vw;">
                            <div class="nav-item dropdown"><a aria-expanded="false" data-toggle="dropdown" href="#"><img class="rounded-circle" src="assets/img/Maximum%20Venom%20-%20Venomized%20Spider-Man.jpg" style="width: 3vw;"></a>
                                <div class="dropdown-menu dropdown-menu-right bounce animated"><a class="dropdown-item" href="userprofile.php" style="font-family: 'Nature Spirit';font-weight: bold;letter-spacing: 2px;font-size: 20px;">My Profile</a><a class="dropdown-item" onclick="location.href='logout.php'" style="color: var(--red);font-family: 'Nature Spirit';font-size: 20px;font-weight: bold;letter-spacing: 2px;">LOGOUT</a></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <header class="text-center masthead" id="header" style="height: 60vh;background: url(&quot;assets/img/Banner_Landing.jpg&quot;) center / cover no-repeat;margin-bottom: 2px;">
            <div class="container">
                <div class="overlay" style="height: 100%;background: #212529;"></div>
                <div class="row" style="padding-top: 120px;">
                    <div class="col-lg-8 text-center m-auto" style="height: auto;">
                        <div id="welcome-1" style="width: 100%;"></div>
                        <div class="row" id="userpic-1"><img class="d-none d-xl-flex" data-bss-hover-animate="tada" src="assets/img/Landing.png" style="width: 330px;margin-left: auto;margin-right: auto;"></div>
                        <div class="row text-center d-inline-flex" id="welcome_bar-1" style="margin-right: auto;margin-left: auto;width: auto;">
                            <div id="welcome_msg_div" style="width: auto;">
                                <p id="welcome_msg" style="font-family: ABeeZee, sans-serif;font-weight: 300;font-size: 45px;color: rgb(255,255,255);margin-top: 0px;margin-bottom: 0px;height: 100%;letter-spacing: 0px;"><br><strong>Welcome home,&nbsp;</strong><br><br></p>
                            </div>
                            <div class="float-right" id="username_bar" style="width: auto;">
                                <p class="float-right" data-bss-hover-animate="rubberBand" id="username-1" style="font-family: ABeeZee, sans-serif;font-weight: 300;font-size: 45px;color: rgb(118,255,0);margin-top: 0px;margin-bottom: 0px;height: 100%;letter-spacing: 2px;width: auto;"><br><strong>USERNAME</strong><br><br></p>
                            </div>
                            <div></div>
                        </div>
                        <div id="logged_in_bar-1">
                            <p id="logged_in_msg-1" class="intro-text" style="font-family: ABeeZee, sans-serif;color: var(--warning);font-size: 35px;line-height: 30px;letter-spacing: 0px;">DING DONG<br></p>
                        </div>
                        <div id="logged_in_bar-2">
                            <p id="logged_in_msg-2" class="intro-text" style="font-family: ABeeZee, sans-serif;color: rgb(230,230,230);font-size: 30px;line-height: 30px;letter-spacing: 0px;">Let's catch up!</p>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </section>
    <section id="content" class="scroller" style="height: auto;">
        <div class="overlay" style="height: auto;color: rgb(0,0,0);background: rgba(45,45,45,0.85);">
            <section style="height: auto;">
                <div class="container" style="background: #ffffff;width: 70vw;max-width: none;">
                    <div class="page-titlebox" style="width: 30vw;height: auto;padding-top: 2vh;padding-bottom: 2vh;padding-left: 1vw;padding-right: 1vw;max-width: 30vw;border-radius: 16px;border-top-left-radius: 0px;border-top-right-radius: 0px;background: var(--red);border-width: 0px;border-top-width: 0px;">
                        <section style="height: auto;">
                            <div class="row">
                                <div class="col">
                                    <h1 class="page-title" style="width: 100%;text-align: center;font-family: ABeeZee, sans-serif;color: rgb(255,255,255);font-size: 1.8vh;">TODAY IS</h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h1 id="header_date-and-day" class="page-title" style="width: 100%;text-align: center;margin-top: 1vh;font-weight: bold;font-family: ABeeZee, sans-serif;letter-spacing: 5px;color: rgb(255,255,255);font-size: 1.8vh;">Date and Day<script>
    var days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday']; //array of days
      var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'] //array of months
      var date = new Date(); //creating Date object
      var currentDay = days[date.getDay()]; //determining day using the array and method 
      var currentMonth = months[date.getMonth()]; //determining month using the array and method
      var currentDate = date.getDate(); //current date
      var currentYear = date.getFullYear(); //current year
    
      
    
      var hrs = date.getHours(), min = date.getMinutes(); //current time (hours and minutes)
      var suffix = 'AM';
      if(hrs >= 12){
        hrs -= 12;
        suffix = 'PM';
      }
      if(hrs < 10){
        hrs = "0" + hrs;
      }
      if(min < 10){
        min = "0" + min;
      }
      document.getElementById('header_date-and-day').innerHTML = currentMonth + " " + currentDate + ", " + currentYear;
</script></h1>
                                    <h1 id="header_time" class="page-title" style="width: 100%;text-align: center;margin-top: 1vh;font-weight: bold;font-family: ABeeZee, sans-serif;letter-spacing: 5px;color: rgb(255,255,255);font-size: 1.8vh;">Time<script>
    var days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday']; //array of days
      var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'] //array of months
      var date = new Date(); //creating Date object
      var currentDay = days[date.getDay()]; //determining day using the array and method 
      var currentMonth = months[date.getMonth()]; //determining month using the array and method
      var currentDate = date.getDate(); //current date
      var currentYear = date.getFullYear(); //current year
    
      
    
      var hrs = date.getHours(), min = date.getMinutes(); //current time (hours and minutes)
      var suffix = 'AM';
      if(hrs >= 12){
        hrs -= 12;
        suffix = 'PM';
      }
      if(hrs < 10){
        hrs = "0" + hrs;
      }
      if(min < 10){
        min = "0" + min;
      }
      document.getElementById('header_time').innerHTML = currentDay + ", " + hrs + ":" + min + suffix;
</script></h1>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="container" style="background: #ffffff;padding-top: 3vh;padding-bottom: 1vh;width: 70vw;max-width: none;">
                    <h1 style="text-align: center;font-family: 'Nature Spirit Rough';color: var(--red);font-size: 60px;letter-spacing: 5px;font-weight: bold;">Announcements</h1>
                </div>
                <div class="container" style="background: #ffffff;padding-top: 3vh;padding-bottom: 1vh;width: 70vw;max-width: none;">
                    <div class="row d-xl-flex justify-content-xl-center" style="width: auto;">
                        <div class="col">
                            <div class="row d-xl-flex justify-content-xl-center" style="width: auto;"><a href="#" data-target="#announcement_modal_create" data-toggle="modal">
                                    <div>
                                        <div class="row d-xl-flex justify-content-xl-center align-items-xl-center">
                                            <div class="col-auto d-xl-flex justify-content-xl-center align-items-xl-center" style="width: auto;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" class="bi bi-plus-circle-fill" style="font-size: 30px;font-weight: bold;">
                                                    <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"></path>
                                                </svg></div>
                                            <div class="col-auto d-xl-flex justify-content-xl-center align-items-xl-center" style="width: auto;">
                                                <h1 style="text-align: center;font-family: ABeeZee, sans-serif;color: #000000;font-size: 35px;font-weight: bold;margin-bottom: 0px;">Add an Announcment</h1>
                                            </div>
                                        </div>
                                    </div>
                                </a></div>
                        </div>
                    </div>
                </div>
                <!-- <div class="container" style="background: #ffffff;padding-top: 8vh;padding-bottom: 8vh;width: 70vw;max-width: none;">
                    <div class="photo-card" style="max-width: 50vw;">
                        <div class="photo-background" style="background-image:url(&quot;assets/img/product-aeon-feature.jpg&quot;);"></div>
                        <div class="photo-details" style="padding-bottom: 2vh;">
                            <h1 style="font-family: Cabin, sans-serif;">Welcome to System</h1>
                            <div class="row">
                                <div class="col-auto" style="width: auto;"><img class="rounded-circle" src="assets/img/Maximum%20Venom%20-%20Venomized%20Spider-Man.jpg" style="width: 2vw;"></div>
                                <div class="col d-xl-flex justify-content-xl-start align-items-xl-center">
                                    <h1 style="font-size: 15px;font-family: Cabin, sans-serif;margin-bottom: 0px;">Admin</h1>
                                </div>
                            </div>
                            <h1 style="font-size: 15px;font-family: Cabin, sans-serif;margin-top: 5.25px;color: #8d97ad;">Time</h1>
                            <p id="announcement_previewcontent" style="font-family: ABeeZee, sans-serif;">Lorem ipsum</p>
                            <div class="photo-tags">
                                <ul>
                                    <li><a href="#" style="font-family: ABeeZee, sans-serif;">Tag 1</a></li>
                                    <li><a href="#" style="font-family: ABeeZee, sans-serif;">tag 2</a></li>
                                </ul>
                                <ul class="float-right" style="margin-top: 3vh;">
                                    <li><a class="text-capitalize" href="viewpost.html" style="font-family: ABeeZee, sans-serif;width: 100%;height: 100%;">View more</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> -->
                <?php
                    $query2 = "SELECT * FROM announcement ORDER BY uNum DESC";
                    $result2 = mysqli_query($DBConnect, $query2);
                    while ($row = mysqli_fetch_array($result2, MYSQLI_ASSOC)) {
                        $author = $row['uemail'];
                        $time = $row['utime'];
                        $callannouncement = $row['uannouncement'];
                        $calltitle = $row['utitle'];
                ?>
                <div class="container" style="background: #ffffff;padding-top: 8vh;padding-bottom: 8vh;width: 70vw;max-width: none;">
                    <div class="photo-card" style="max-width: 50vw;">
                        <div class="photo-background" style="background-image:url(&quot;assets/img/product-aeon-feature.jpg&quot;);"></div>
                        <div class="photo-details" style="padding-bottom: 2vh;">
                            <h1 style="font-family: Cabin, sans-serif;"><?php echo $calltitle; ?></h1>
                            <div class="row">
                                <div class="col-auto" style="width: auto;"><img class="rounded-circle" src="assets/img/Maximum%20Venom%20-%20Venomized%20Spider-Man.jpg" style="width: 2vw;"></div>
                                <div class="col d-xl-flex justify-content-xl-start align-items-xl-center">
                                    <h1 style="font-size: 15px;font-family: Cabin, sans-serif;margin-bottom: 0px;"><?php echo $author; ?></h1>
                                </div>
                            </div>
                            <h1 style="font-size: 15px;font-family: Cabin, sans-serif;margin-top: 5.25px;color: #8d97ad;"><?php echo $time; ?></h1>
                            <p id="announcement_previewcontent" style="font-family: ABeeZee, sans-serif;"><?php echo $callannouncement; ?></p>
                            <div class="photo-tags">
                                <!-- <ul>
                                    <li><a href="#" style="font-family: ABeeZee, sans-serif;">Tag 1</a></li>
                                    <li><a href="#" style="font-family: ABeeZee, sans-serif;">tag 2</a></li>
                                </ul> -->
                                <ul class="float-right" style="margin-top: 3vh;">
                                    <li><a class="text-capitalize" href="viewpost.html" style="font-family: ABeeZee, sans-serif;width: 100%;height: 100%;">View more</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <form method="POST">
                <div class="modal fade" role="dialog" tabindex="-1" id="announcement_modal_create" style="border-radius: 20px;">
                    <div class="modal-dialog modal-xl" role="document">
                        <div class="modal-content">
                            <div class="modal-header d-xl-flex" style="background: var(--green);">
                                <h4 class="modal-title" style="font-family: 'Nature Spirit Rough';font-size: 40px;font-weight: bold;letter-spacing: 2px;color: rgb(255,255,255);">Create an Announcement</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">??</span></button>
                            </div>
                            <div class="modal-body" style="padding-right: 30px;padding-left: 30px;">
                                <div class="col-md-4 col-xl-12 relative" style="width: 100%;margin-bottom: 5vh;">
                                    <div class="avatar" style="width: 100%;height: auto;">
                                        <div class="avatar-bg center" style="width: auto;margin-left: 0px;border-radius: 15px;min-height: 40vh;max-height: none;height: auto;"></div>
                                    </div>
                                    <input class="d-xl-flex justify-content-xl-center form-control" type="file" name="avatar-file" style="font-family: ABeeZee, sans-serif;border-style: none;margin-top: 5vh;" multiple="">
                                </div>
                                <!-- <h1 style="font-family: ABeeZee, sans-serif;font-size: 25px;">Announcement Message:</h1><textarea style="width: 100%;height: auto;border-radius: 10px;border-color: var(--gray);font-family: 'Open Sans', sans-serif;padding-right: 10px;padding-left: 10px;padding-top: 10px;padding-bottom: 10px;margin-top: 0vh;"></textarea> -->
                                <input class="d-xl-flex justify-content-xl-center form-control" type="text" name="texttitle" placeholder="Enter Title" style="font-family: ABeeZee, sans-serif;border-style: none;margin-top: 5vh;">
                                <input class="d-xl-flex justify-content-xl-center form-control" type="text" name="textannouncement" placeholder="Enter Message" style="font-family: ABeeZee, sans-serif;border-style: none;margin-top: 5vh;">
                            </div>
                            <div class="modal-footer"><button class="btn btn-light border rounded-pill" type="button" data-dismiss="modal">Close</button>
                            <button class="btn btn-success border rounded-pill" type="submit" name="addannouncement" >Add announcement</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
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

    if(isset ($_POST["addannouncement"])){
        $announcement = $_POST["textannouncement"];
        $title = $_POST["texttitle"];
        $creator = $_SESSION['uemail'];
        $add = "INSERT INTO announcement (uannouncement, uemail, utime, utitle) VALUES 
            ('$announcement', '$creator', now(), '$title')";
            mysqli_query($DBConnect, $add) or die (mysqli_error($DBConnect));
            echo "<script type='text/javascript'> document.location = 'admin_homepage.php'; </script>";
            exit();
        // $lastname = $_POST["lastname"];
        // $email = $_POST["email"];
        // $pass = $_POST["password"];
        // $rpass = $_POST['rpassword'];
        // $pass = md5($pass);
        
        // if($pass != md5($rpass)){
        //     echo "not same";
        // }
        // else{
        //     $add = "INSERT INTO users (ufname, ulname, uemail, upassword) VALUES 
        //     ('$firstname', '$lastname', '$email', '$pass')";
        //     mysqli_query($DBConnect, $add) or die (mysqli_error($DBConnect));
        //     echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
        //     exit();
        // }
    }
?>