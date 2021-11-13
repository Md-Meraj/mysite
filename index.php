<?php 
    define('Dhanush', true);
    include "check_session.php";
    include "credit.php";
?>
<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <link rel="shortcut icon" href="favicon/favicon.ico">
    
    <link rel="stylesheet" href="AboutUs.css">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="footer.css">


    <title>About Us</title>
</head>

<body>
    <div class="container-fluid section1_bg">
         <a href="index.php"><img src="img/logo.webp" class="logo" alt="logo" ></a>
        <nav class="transparent z-depth-0" style="margin-left: -1.6vw !important">
            <div class="nav-wrapper" style="z-index: 99;">
                <div class="container-fluid">
                    <ul class="hide-on-med-and-down left">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="OurWorks.php">Our Works</a></li>
                        <li><a href="GetInvolved.php">Get Involved</a></li>
                        <li><a href="UpcomingEvents.php">Upcoming Events</a></li>
						<li><a href="Contest.html">Contest</a></li>
                        <li><a href="AboutUs.php" style="font-size: 1.1vw !important">About Us</a></li>
                        <li><a href="profile/index.php">Log In</a></li>
                        <button class="donate" onclick="window.location.href='Donate.php'">Donate</button>
                    </ul>
                    <a href="#" class="right sidenav-trigger menubar" data-target="slide_out"><i class="material-icons" style="color: #F0B81D">menu</i></a>
                </div>
            </div>
        </nav>

        <ul class="sidenav" id="slide_out"><br><br>
            <li><a href="index.php">Home</a></li>
            <li><a href="OurWorks.php">Our Works</a></li>
            <li><a href="GetInvolved.php">Get Involved</a></li>
            <li><a href="UpcomingEvents.php">Upcoming Events</a></li>
            <li><a href="AboutUs.php">About Us</a></li>
            <li><a href="profile/index.php">Log In</a></li>
        </ul>

        <div class="section1">

            <h2 class="hide-on-med-and-up ">ABOUT US</h2>
            <h1 class="hide-on-small-only">ABOUT <span>US</span></h1>

            <p class="hide-on-small-only">
                Durgapur Dhanush Welfare Society is an
                NGO based in Durgapur, West Bengal.
                DDWS strives to make a world where
                All people live with dignity and security.
            </p>
        </div>


        <img width="52%" srcset="img/aboutus1.webp 320w,img/aboutus1.webp 640w,img/aboutus1.webp 960w,img/aboutus1.webp 1280w,img/aboutus1.webp 2560w," src="img/aboutus1.webp" class="section1_img img-responsive  big_img" style="display: block;" alt="dhanush">

        <div class="hide-on-med-and-up " style="padding: 4vw;margin-top: 34vw;">
            <img width="100%" srcset="img/aboutus1.webp 320w,img/aboutus1.webp 640w,img/aboutus1.webp 960w,img/aboutus1.webp 1280w,img/aboutus1.webp 2560w," src="img/aboutus1.webp" class="img-responsive  small_img" style="display: none;" alt="dhanush">
        </div>

        <div class="sec1_p">
            <p class="hide-on-med-and-up">Durgapur Dhanush Welfare Society is an
                NGO based in Durgapur, West Bengal.
                DDWS strives to make a world where
                All people live with dignity and security.
            </p>
        </div>
    </div>

    <div class="container-fluid" style="padding:0;">
        <div class="section2">
            <img src="img/whoWeAre.webp" alt="who" class="section2_img img-responsive;">
            <div class="section2_div">
                <img src="img/whoWeAre_h.webp" alt="heading">
                <div>
                    <p>
                        “As one person I cannot change the
                        world, but I can change the world
                        of one person “. This is the very belief
                        that drives each and every volunteer
                        of Durgapur Dhanush Welfare Society.
                        DDWS is a not- for -profit organization
                        established in 2019. We at DDWS have
                        been working selflessly for social welfare
                        since our inception. Being a new
                        organization and build by a handful of
                        college students, there were times when
                        we were short of resources but we have
                        never been short of enthusiasm and
                        dedication. DDWS is dedicated to work
                        for the welfare and upliftment of every
                        human being in the society. We have
                        always stood together with people in
                        need and we will continue to do this in
                        future as well.

                    </p>
                </div>
            </div>
        </div>

        <img class="big_img img-responsive" width="100%" height="100%" srcset="img/aboutus_bg.webp 320w,img/aboutus_bg.webp 640w,img/aboutus_bg.webp 960w,img/aboutus_bg.webp 1280w,img/aboutus_bg.webp 2560w," src="img/aboutus_bg.webp" style="display: block;" alt="dhanush">

        <img class="small_img img-responsive" width="100%" height="100%" srcset="img/aboutus_small.webp 320w,img/aboutus_small.webp 640w,img/aboutus_small.webp 960w,img/aboutus_small.webp 1280w,img/aboutus_small.webp 2560w," src="img/aboutus_small.webp" style="display: none;" alt="dhanush">
    </div>

    <div class="container-fluid" style="padding:0;">
        <div class="section3">
            <img class="section3_img" src="img/OurMission_aboutus.webp" alt="pic" class="img-responsive">
            <div class="section3_div">
                <img src="img/OurMission_h.webp" alt="OurMission" class="img-responsive">
                <p class="center">
                    Our mission is to bring a smile on everyone’s face. We want to ensure that no one goes to sleep with an empty stomach. One of our aim is also to aware people about social happenings and needs of the poor and the marginalised . We aim at developing a belief in every citizen so that they can discover their potential for action and change. Apart from all these, our volunteers are working to encourage people to come forward with a helping hand for the poorest and the deprieved class of the society. </p>
            </div>


        </div>
        <img class="big_img img-responsive" width="100%" height="100%" srcset="img/aboutus_bg.webp 320w,img/aboutus_bg.webp 640w,img/aboutus_bg.webp 960w,img/aboutus_bg.webp 1280w,img/aboutus_bg.webp 2560w," src="img/aboutus_bg.webp" style="display: block;" alt="dhanush">

        <img class="small_img img-responsive" width="100%" height="100%" srcset="img/aboutus_small.webp 320w,img/aboutus_small.webp 640w,img/aboutus_small.webp 960w,img/aboutus_small.webp 1280w,img/aboutus_small.webp 2560w," src="img/aboutus_small.webp" style="display: none;" alt="dhanush">
    </div>

    <div class="container-fluid" style="padding:0;">
        <div class="section4">
            <img src="img/BoardMember_h.webp" class="section4_head " style="margin: 0;" alt="dhanush">

            <div style="margin-top: 5vw;" class="hide-on-small-only">
                <div class="container-fluid member">

                    <div class="col-xs-2">
                        <img src="img/photo1.webp" alt="Member1" style="width:100%" class=" img-responsive member_pic">
                        <p class="center">Akash Chatterjee<br><span>President, Founder</span></p>
                    </div>
                    <div class="col-xs-2">
                        <img src="img/photo2.webp" alt="Member2" style="width:100%" class=" img-responsive member_pic">
                        <p class="center">Barun Satpati<br><span>Vice President, Graphics<br>Team Head, Founder</span></p>
                    </div>
                    <div class="col-xs-2">
                        <img src="img/photo3.webp" alt="Member3" style="width:100%" class=" img-responsive member_pic">
                        <p class="center">Biplab Naskar<br><span>Secretary, Co-Founder</span></p>
                    </div>
                    <div class="col-xs-2">
                        <img src="img/photo4.webp" alt="Member4" style="width:100%" class=" img-responsive member_pic">
                        <p class="center">Anuska Banerjee<br><span>Asst. Secretary, Co-Founder</span></p>
                    </div>
                </div>

                <div class="container-fluid member">

                    <div class="col-xs-2">
                        <img src="img/photo5.webp" alt="Member5" style="width:100%" class=" img-responsive member_pic">
                        <p class="center">Auroshree Sinha Roy<br><span>Treasurer, Co-Founder</span></p>
                    </div>
                    <div class="col-xs-2">
                        <img src="img/photo6.webp" alt="Member6" style="width:100%" class=" img-responsive member_pic">
                        <p class="center">Darshna Das<br><span>Member Head, Co-Founder</span></p>
                    </div>
                    <div class="col-xs-2">
                        <img src="img/photo7.webp" alt="Member7" style="width:100%" class=" img-responsive member_pic">
                        <p class="center">Pinakshmi Ghosh<br><span>Member Head, Co-Founder</span></p>
                    </div>
                    <div class="col-xs-2">
                        <img src="img/photo8.webp" alt="Member8" style="width:100%" class=" img-responsive member_pic">
                        <p class="center">Rituparno Mukherjee<br><span>Member Head, Co-Founder</span></p>
                    </div>
                </div>
                <div class="container-fluid member_last">
                    <div class="col-xs-2">
                        <img src="img/photo9.webp" alt="Member8" style="width:100%" class=" img-responsive member_pic">
                        <p class="center">Somya<br><span>Member Head, Technical Management, Online Platform and Web Development Head</span></p>
                    </div>
                </div>
            </div>

            <div style="margin-top: -20vw;" class="hide-on-med-and-up">
                <div class="container-fluid member">

                    <div class="col-xs-4">
                        <img src="img/photo1.webp" alt="Member1" style="width:100%" class=" img-responsive member_pic">
                        <p class="center">Akash Chatterjee<br><span>President, Founder</span></p>
                    </div>
                    <div class="col-xs-4">
                        <img src="img/photo2.webp" alt="Member2" style="width:100%" class=" img-responsive member_pic">
                        <p class="center">Barun Satpati<br><span>Vice President, Graphics<br>Team Head, Founder</span></p>
                    </div>
                    <div class="col-xs-4">
                        <img src="img/photo3.webp" alt="Member3" style="width:100%" class=" img-responsive member_pic">
                        <p class="center">Biplab Naskar<br><span>Secretary, Co-Founder</span></p>
                    </div>
                    <div class="col-xs-4">
                        <img src="img/photo4.webp" alt="Member4" style="width:100%" class=" img-responsive member_pic">
                        <p class="center">Anuska Banerjee<br><span>Asst. Secretary, Co-Founder</span></p>
                    </div>
                </div>

                <div class="container-fluid member ">

                    <div class="col-xs-4">
                        <img src="img/photo5.webp" alt="Member5" style="width:100%" class=" img-responsive member_pic">
                        <p class="center">Auroshree Sinha Roy<br><span>Treasurer, Co-Founder</span></p>
                    </div>
                    <div class="col-xs-4">
                        <img src="img/photo6.webp" alt="Member6" style="width:100%" class=" img-responsive member_pic">
                        <p class="center">Darshna Das<br><span> Member Head, Co-Founder</span></p>
                    </div>
                    <div class="col-xs-4">
                        <img src="img/photo7.webp" alt="Member7" style="width:100%" class=" img-responsive member_pic">
                        <p class="center">Pinakshmi Ghosh<br><span>Member Head, Co-Founder</span></p>
                    </div>
                    <div class="col-xs-4">
                        <img src="img/photo8.webp" alt="Member8" style="width:100%" class=" img-responsive member_pic">
                        <p class="center">Rituparno Mukherjee<br><span>Member Head, Co-Founder</span></p>
                    </div>
                </div>
                <div class="container-fluid member_last">
                    <div class="col-xs-4">
                        <img src="img/photo9.webp" alt="Member8" style="width:100%" class=" img-responsive member_pic">
                        <p class="center">Somya<br><span>Member Head, Technical Management, Online Platform & Web Development Head</span></p>
                    </div>
                </div>


            </div>



        </div>
        <img class="big_img img-responsive" width="100%" height="100%" srcset="img/aboutus_bg1.webp 320w,img/aboutus_bg1.webp 640w,img/aboutus_bg1.webp 960w,img/aboutus_bg1.webp 1280w,img/aboutus_bg1.webp 2560w," src="img/aboutus_bg1.webp" style="display: block;" alt="dhanush">

        <img class="small_img img-responsive" width="100%" height="100%" srcset="img/aboutus_small.webp 320w,img/aboutus_small.webp 640w,img/aboutus_small.webp 960w,img/aboutus_small.webp 1280w,img/aboutus_small.webp 2560w," src="img/aboutus_small.webp" style="display: none;" alt="dhanush">
    </div>


    <div class="container-fluid section5_moveup" style="padding:0;">
        <div class="section5">
            <img src="img/ContactUs_h.webp" alt="heading">
            <div>
                <p class="center"><span style="font-weight: bolder;">DURGAPUR DHANUSH WELFARE SOCIETY</span><br><br>
                    38, Kabi Jasimuddin Path, City Center<br>Durgapur, West Bengal, India
                    <br>Pin- 713216<br><br>Phone- <span>+91 95316 46341</span><br>Email- <span>dhanushofficial30@gmail.com</span>
                </p>
            </div>

        </div>

        <img class="img-responsive big_img" width="100%" height="100%" srcset="img/ContactUs_bg.webp 320w,img/ContactUs_bg.webp 640w,img/ContactUs_bg.webp 960w,img/ContactUs_bg.webp 1280w,img/ContactUs_bg.webp 2560w," src="img/ContactUs_bg.webp" style="display: block;" alt="dhanush">

        <img class="img-responsive small_img" width="100%" height="100%" srcset="img/ContactUs_bg1.webp 320w,img/ContactUs_bg1.webp 640w,img/ContactUs_bg1.webp 960w,img/ContactUs_bg1.webp 1280w,img/ContactUs_bg1.webp 2560w," src="img/ContactUs_bg1.webp" style="display: none;">
    </div>

    <?php include 'footer.php'?>


    <!--Javascript navbar-->
    <script>
        const slide_menu = document.querySelectorAll(".sidenav");
        M.Sidenav.init(slide_menu, {});

    </script>
    <!--Javascript-->
</body>

</html>