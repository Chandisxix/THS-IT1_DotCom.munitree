<?php
    session_start();
    require("connect.php");
                              
    $_SESSION['uemail'];
    if($_SESSION['uemail']){
        $query = mysqli_query($DBConnect, "SELECT * FROM users WHERE uemail='".$_SESSION['uemail']."'");
        $fetch = mysqli_fetch_array($query);
        $tempoemail=$fetch["uemail"];
        $tempofname=$fetch["ufname"];
        $tempolname=$fetch["ulname"];
        $tempoaddress=$fetch["uaddress"];
        $tempocontact=$fetch["ucontactnumber"];
        $tempofname=$fetch["ufname"];
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
                        <li class="nav-item"><a class="nav-link" href="submission.html" style="font-family: 'Nature Spirit';letter-spacing: 3px;font-size: 2.5vh;">Discussion Space</a></li>
                        <li class="nav-item"><a class="nav-link" href="submission.html" style="font-family: 'Nature Spirit';letter-spacing: 3px;font-size: 2.5vh;">Marketplace</a></li>
                        <li class="nav-item"><a class="nav-link" href="feedbackreports.html" style="font-family: 'Nature Spirit';letter-spacing: 3px;font-size: 2.5vh;">FeedBack and Reports</a></li>
                        <li class="nav-item"></li>
                        <li class="nav-item" style="margin-left: 1vw;margin-right: 1vw;">
                            <div class="nav-item dropdown"><a aria-expanded="false" data-toggle="dropdown" href="#"><img class="rounded-circle" src="assets/img/Maximum%20Venom%20-%20Venomized%20Spider-Man.jpg" style="width: 3vw;"></a>
                                <div class="dropdown-menu dropdown-menu-right bounce animated"><a class="dropdown-item" href="userprofile.html" style="font-family: 'Nature Spirit';font-weight: bold;letter-spacing: 2px;font-size: 20px;">My Profile</a><a class="dropdown-item" onclick="location.href='logout.php'" style="color: var(--red);font-family: 'Nature Spirit';font-size: 20px;font-weight: bold;letter-spacing: 2px;">LOGOUT</a></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <header class="text-center masthead" id="header" style="height: 60vh;background: url(&quot;assets/img/Banner_Profile.jpg&quot;) center / cover no-repeat;margin-bottom: 2px;">
            <div class="container">
                <div class="overlay" style="height: 100%;"></div>
                <div class="row" style="padding-top: 120px;">
                    <div class="col-lg-8 text-center m-auto">
                        <div id="welcome" style="width: 100%;"></div>
                        <div class="row" id="userpic"><img class="d-none d-xl-flex" data-bss-hover-animate="tada" src="assets/img/Edit%20Profile.png" style="width: 17vw;margin-left: auto;margin-right: auto;height: 25vh;"></div>
                        <div class="row text-center" id="welcome_bar">
                            <p data-bss-hover-animate="rubberBand" id="username" style="font-family: 'Nature Spirit Rough';font-weight: bold;font-size: 60px;color: rgb(0,209,255);margin-top: 0px;margin-bottom: 0px;height: 100%;letter-spacing: 2px;width: 100%;"><br><strong>Edit Profile</strong><br><br></p>
                        </div>
                        <div id="logged_in_bar1">
                            <p id="logged_in_msg1" class="intro-text" style="font-family: ABeeZee, sans-serif;color: rgb(255,255,255);font-size: 20px;line-height: 30px;">Welcome to your profile !<br></p>
                        </div>
                        <div id="logged_in_bar2">
                            <p id="logged_in_msg2" class="intro-text" style="font-family: ABeeZee, sans-serif;color: rgb(230,230,230);font-size: 20px;line-height: 30px;">Here you can edit and change your profile picture, bio, and password!</p>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </section>
    <section id="content" class="scroller" style="height: auto;">
        <div class="overlay" style="height: 100%;color: rgb(0,0,0);background-color: rgba(30,30,30,0.7);">
            <div class="container profile profile-view" id="profile" style="background: #ffffff;">
                <div class="row">
                    <div class="col-md-12 alert-col relative">
                        <div class="alert alert-info alert-dismissible absolue center" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">??</span></button><span>Profile save with success</span></div>
                    </div>
                </div>
                <form method="POST">
                    <div class="form-row profile-row">
                        <div class="col-md-4 relative">
                            <div class="avatar">
                                <div class="avatar-bg center"></div>
                            </div><input class="form-control-file form-control" type="file" name="avatar-file" style="font-family: ABeeZee, sans-serif;border-style: none;margin-top: 5vh;">
                        </div>
                        <div class="col-md-8">
                            <h1 style="font-family: 'Nature Spirit Rough';font-size: 50px;letter-spacing: 2px;font-weight: bold;">Edit Profile </h1>
                            <hr>
                            <div class="form-row">
                                <div class="col-sm-12 col-md-6 col-xl-12">
                                    <div class="form-group"><label style="font-family: ABeeZee, sans-serif;font-weight: bold;">My Address:</label>
                                        <p style="font-family: ABeeZee, sans-serif;font-size: 20px;color: #6c757d;"><?php echo $tempoaddress; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group"><label style="font-family: ABeeZee, sans-serif;font-weight: bold;">First Name </label><input class="form-control" type="text" name="firstname" value="<?php echo $tempofname; ?>" style="font-family: ABeeZee, sans-serif;border-radius: 10px;" readonly></div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group"><label style="font-family: ABeeZee, sans-serif;font-weight: bold;">Last Name </label><input class="form-control" type="text" name="lastname" value="<?php echo $tempolname; ?>"style="font-family: ABeeZee, sans-serif;border-radius: 10px;" readonly></div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group"><label style="font-family: ABeeZee, sans-serif;font-weight: bold;">E-Mail Address</label><input class="form-control" type="email" name="email" value="<?php echo $tempoemail; ?>"style="border-radius: 10px;font-family: ABeeZee, sans-serif;"></div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group"><label style="font-family: ABeeZee, sans-serif;font-weight: bold;">Contact Number</label><input class="form-control" type="tel" name="contact" value="<?php echo $tempocontact; ?>"style="border-radius: 10px;font-family: ABeeZee, sans-serif;"></div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-12 col-md-6 col-xl-12" style="width: 100%;">
                                    <div class="form-group"><label style="font-family: ABeeZee, sans-serif;font-weight: bold;">About Me</label><textarea class="form-control" style="font-family: ABeeZee, sans-serif;height: auto;border-radius: 10px;"></textarea></div>
                                </div>
                            </div>
                            <!-- <div class="form-row">
                                <div class="col-sm-12 col-md-6 col-xl-12">
                                    <div class="form-group"><label style="font-family: ABeeZee, sans-serif;font-weight: bold;">Enter current password to save changes</label><input class="form-control" type="password" style="width: 100%;border-radius: 10px;font-family: ABeeZee, sans-serif;" name="edit_passconfirm"></div>
                                </div>
                            </div> -->
                            <hr>
                            <div class="form-row">
                                <div class="col-md-12 content-right">
                                    <button class="btn btn-success border rounded-pill form-btn" type="submit" name="submitedit" style="font-family: ABeeZee, sans-serif;background: var(--green);">SAVE </button>
                                    <button class="btn btn-danger border rounded-pill form-btn" type="reset" style="font-family: ABeeZee, sans-serif;">CANCEL </button><button class="btn btn-link border rounded-pill border-white form-btn" type="button" style="font-family: ABeeZee, sans-serif;width: auto;max-width: none;" data-target="#editprofile_modal_changepass" data-toggle="modal">Change Password</button></div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="modal fade" role="dialog" tabindex="-1" id="editprofile_modal_changepass">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header" style="background: var(--orange);">
                                <h4 class="modal-title" style="font-family: 'Nature Spirit Rough';font-size: 45px;font-weight: bold;letter-spacing: 2px;">Change Password</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">??</span></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-xl-12" style="padding-top: 1vh;">
                                        <div class="form-group"><label style="font-family: ABeeZee, sans-serif;font-weight: bold;">Enter Old/Current Password</label><input type="password" style="width: 100%;border-radius: 10px;font-family: ABeeZee, sans-serif;height: 4vh;padding: 0.5vw;" name="changepass_old"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-6" style="padding-top: 1vh;">
                                        <div class="form-group"><label style="font-family: ABeeZee, sans-serif;font-weight: bold;">Enter New Password</label><input type="password" style="width: 100%;border-radius: 10px;font-family: ABeeZee, sans-serif;height: 4vh;padding: 0.5vw;" name="changepass_new"></div>
                                    </div>
                                    <div class="col-sm-12 col-md-6" style="padding-top: 1vh;">
                                        <div class="form-group"><label style="font-family: ABeeZee, sans-serif;font-weight: bold;">Confirm New Password</label><input type="password" style="width: 100%;border-radius: 10px;font-family: ABeeZee, sans-serif;height: 4vh;padding: 0.5vw;" name="changepass_confirm"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer"><button class="btn btn-danger border rounded-pill" type="button" data-dismiss="modal">Cancel</button><button class="btn btn-success border rounded-pill" type="submit">Save New Password</button></div>
                        </div>
                    </div>
                </div>
            </div>
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
    if(isset($_POST["submitedit"])){
        $userlogged = $_SESSION['uemail'];
        $userfname = $_POST["firstname"];
        $userlname = $_POST["lastname"];
        $useremail = $_POST["email"];
        $usercontact = $_POST["contact"];
        $query = "UPDATE users SET ufname='$userfname', ulname='$userlname', 
        uemail='$useremail', ucontactnumber='$usercontact' WHERE uemail='$userlogged'";
        $query2 = mysqli_query($DBConnect, $query);

        if($query2){
            echo "<script type='text/javascript'> document.location = 'userprofile.php'; </script>";
        }
    }

?>