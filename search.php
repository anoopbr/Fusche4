<?php  
ob_start();  

include_once("check_session.php") ;
if($user_is_logged != true){
    $redirect_page = "index.php";
    //echo "<script>alert('session exist');</script>";
    header('Location: '.$redirect_page);
    exit();
}
ob_end_flush();
?>
<html>

<head>

    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Comfortaa:400,700|Crimson+Text:400,700,600' rel='stylesheet' type='text/css'>
    <link href="styleSheets/style.css" rel="stylesheet" type="text/css">
    <link href="styleSheets/search.css" rel="stylesheet" type="text/css">
    <script src="rest1.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="scripts/history.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
    <script src="scripts/touchSwipe.js"></script>
    <script src="scripts/fitText.js"></script>
    <script src="scripts/search.js"></script>

    <title>FUSCHE: Fun Shit</title>
</head>


<body>
    <div id="fb-root"></div>
    <script>
        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=270162006502647&version=v2.0";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <div id="cameraUpload">
        <a href="#loginBox">
            <img src="images/cameraUpload.svg">
        </a>
    </div>
    <div id="topNav">
        <div id="logo">
            <div id="logoimg">
                <img src="images/logo.svg">
            </div>
            <span>Fusche</span>

        </div>
        <div id="nav" class="deepPurp">
            <div class="navIcons redPurp selected">
                <img src="images/images_foodIcon.svg">
                <p class="navTitles yellow">Food</p>
            </div>
            <div class="navIcons red">
                <img src="images/images_drinkIcon.svg">
                <p class="navTitles yellow">Drink</p>
            </div>
            <div class="navIcons orange">
                <img src="images/images_entertainmentIcon.svg">
                <p class="navTitles yellow text100">Entertainment</p>
            </div>
            <div class="navIcons yellow">
                <img src="images/images_shoppingIcon.svg">
                <p class="navTitles yellow">Shopping</p>
            </div>
        </div>

        <div id="mobileMenu">
            <img id="menuButton" src="images/mobileMenu-01.svg">
        </div>
    </div>

    <div id="container">




        <div id="mainArea">
            <div id="sidebar">
                <div id="topTitle" class="yellow">
                    Top Restaurants
                </div>
                <div id="topBuffer"></div>
                <div class="topCell" number="0">
                    <img class="topRestImg" src="http://www.envision-creative.com/wp-content/uploads/Tiagos01.jpg">
                    <div class="sideHealth redPurpT">
                        <span class="text">Health Rating</span>
                        <span class="rating">A</span>
                    </div>
                    <div class="sideName redPurpT">
                        <span class="sideBarName">
                    La Villa Cafe</span>
                        <span class="Address">
                    505 Dekalb Ave
                </span>
                        <img src="images/star.svg">
                        <img src="images/star.svg">
                        <img src="images/star.svg">
                        <img src="images/star.svg">
                        <img src="images/noStar.svg">
                        <div class="arrowRight">
                            <img class="arrowImg" src="images/arrowRight.svg">

                        </div>
                    </div>
                </div>

                <div class="topCell" number="1">
                    <img class="topRestImg" src="http://www.envision-creative.com/wp-content/uploads/Tiagos01.jpg">
                    <div class="sideHealth redPurpT">
                        <span class="text">Health Rating</span>
                        <span class="rating">A</span>
                    </div>
                    <div class="sideName redPurpT">
                        <span class="sideBarName">
                    Luigi's Pizza
                        </span>
                        <span class="Address">
                    1045 Dekalb Ave
                </span>
                        <img src="images/star.svg">
                        <img src="images/star.svg">
                        <img src="images/star.svg">
                        <img src="images/noStar.svg">
                        <img src="images/noStar.svg">
                        <div class="arrowRight">
                            <img class="arrowImg" src="images/arrowRight.svg">

                        </div>
                    </div>
                </div>

                <div class="topCell" number="2">
                    <img class="topRestImg" src="http://www.cityofdarienga.com/visitorguide/ShrimpDish494.jpg">
                    <div class="sideHealth redPurpT">
                        <span class="text">Health Rating</span>
                        <span class="rating">D</span>
                    </div>
                    <div class="sideName redPurpT">
                        <span class="sideBarName">
                    Crown Fried Chicken</span>
                        <span class="Address">
                    703 Dekalb Ave
                </span>
                        <img src="images/star.svg">
                        <img src="images/star.svg">
                        <img src="images/star.svg">
                        <img src="images/star.svg">
                        <img src="images/star.svg">

                        <div class="arrowRight">
                            <img class="arrowImg" src="images/arrowRight.svg">

                        </div>
                    </div>
                </div>

                <div class="topCell" number="3">
                    <img class="topRestImg" src="http://www.envision-creative.com/wp-content/uploads/Tiagos01.jpg">
                    <div class="sideHealth redPurpT">
                        <span class="text">Health Rating</span>
                        <span class="rating">B</span>
                    </div>
                    <div class="sideName redPurpT">
                        <span class="sideBarName">
                    Punta Cana</span>
                        <span class="Address">
                    507 Dekalb Ave
                </span>
                        <img src="images/star.svg">
                        <img src="images/star.svg">
                        <img src="images/noStar.svg">
                        <img src="images/noStar.svg">
                        <img src="images/noStar.svg">
                        <div class="arrowRight">
                            <img class="arrowImg" src="images/arrowRight.svg">

                        </div>
                    </div>
                </div>

                <div class="topCell" number="4">
                    <img class="topRestImg" src="http://www.envision-creative.com/wp-content/uploads/Tiagos01.jpg">
                    <div class="sideHealth redPurpT">
                        <span class="text">Health Rating</span>
                        <span class="rating">A</span>
                    </div>
                    <div class="sideName redPurpT">
                        <span class="sideBarName">
                    La Villa Cafe</span>
                        <span class="Address">
                    505 Dekalb Ave
                </span>
                        <img src="images/star.svg">
                        <img src="images/star.svg">
                        <img src="images/star.svg">
                        <img src="images/star.svg">
                        <img src="images/noStar.svg">
                        <div class="arrowRight">
                            <img class="arrowImg" src="images/arrowRight.svg">

                        </div>
                    </div>
                </div>

                <div class="topCell" number="5">
                    <img class="topRestImg" src="http://www.kremslehnerhotels.at/files/cms/sized/files/restaurants-vienna/roth/menu-food/food-restaurant-roth-vienna-03-1500x755.jpg">
                    <div class="sideHealth redPurpT">
                        <span class="text">Health Rating</span>
                        <span class="rating">A</span>
                    </div>
                    <div class="sideName redPurpT">
                        <span class="sideBarName">
                    Luigi's Pizza
                        </span>
                        <span class="Address">
                    1045 Dekalb Ave
                </span>
                        <img src="images/star.svg">
                        <img src="images/star.svg">
                        <img src="images/star.svg">
                        <img src="images/noStar.svg">
                        <img src="images/noStar.svg">
                        <div class="arrowRight">
                            <img class="arrowImg" src="images/arrowRight.svg">

                        </div>
                    </div>
                </div>

                <div class="topCell" number="6">
                    <img class="topRestImg" src="http://www.cityofdarienga.com/visitorguide/ShrimpDish494.jpg">
                    <div class="sideHealth redPurpT">
                        <span class="text">Health Rating</span>
                        <span class="rating">D</span>
                    </div>
                    <div class="sideName redPurpT">
                        <span class="sideBarName">
                    Crown Fried Chicken</span>
                        <span class="Address">
                    703 Dekalb Ave
                </span>
                        <img src="images/star.svg">
                        <img src="images/star.svg">
                        <img src="images/star.svg">
                        <img src="images/star.svg">
                        <img src="images/star.svg">

                        <div class="arrowRight">
                            <img class="arrowImg" src="images/arrowRight.svg">

                        </div>
                    </div>
                </div>








            </div>
            <div class="content">

                <div id="secondaryNav">
                    <span>Search</span>
                    <span>Newest Dishes</span>
                    <span>Popular Dishes</span>
                    <span class="yellow">Following</span>

                </div>


                <!-- <div id="search"> -->

                <form id="search" method="post" action="response.php" accept-charset="utf-8">

                    <input type="text" id="searchBox" name="searchBox" placeholder="Search for a restaurant or dish..."></input>
                    <input id="searchSubmit" type="image" src="images/purpArrow.svg" alt="Search" />

                </form>

                <!-- </div> -->









                <div id="resultContainer">

                    <div class="result darkYellow">
                        <div class="resultsOverflow ">
                            <div class="swipeIndicator">
                                <img src="images/arrowRight.svg">

                            </div>
                            <div class="leftResult yellow">
                                <div class="resultTitle">La Villa Cafe</div>
                                <div class="resultAddress">501 Dekalb Ave</div>

                                <div class="resultRating">
                                    <img src="images/star.svg">
                                    <img src="images/star.svg">
                                    <img src="images/star.svg">
                                    <img src="images/noStar.svg">
                                    <img src="images/noStar.svg">
                                </div>
                                <div class="resultImage">
                                    <img src="http://www.envision-creative.com/wp-content/uploads/Tiagos01.jpg">
                                </div>

                                <div class="rating" rating="sucks">It Sucks</div>
                                <div class="addToList">
                                    <img src="images/saveToList.svg">
                                    <div class="addText">add to list</div>
                                </div>
                                <div class="rating right" rating="good">Gotta Have It!</div>



                            </div>

                            <div class="rightResult darkYellow">
                                <p class="clusterOne">
                                    917-555-5151
                                    <br/>lavillacafe.com
                                    <br/>.2 miles away
                                    <br/>$$
                                </p>
                                <h3>Hours of Operation</h3>
                                <p>S - 6am - 10pm
                                    <br/>M - 6am - 10pm
                                    <br/>T - 6am - 10pm
                                    <br/>W - 6am - 10pm
                                    <br/>Th - 6am - 10pm
                                    <br/>F - 6am - 10pm
                                    <br/>Sa - 6am - 10pm</p>
                                <div class="menuButton yellow">See the Menu</div>

                            </div>
                            <div class="ratingBar">
                                <div class="ratingBad"></div>
                                <div class="ratingGood"></div>
                            </div>

                        </div>
                    </div>



                    <div class="result deepPurp">
                        <div class="resultsOverflow">
                            <div class="leftResult redPurp">
                                <div class="resultTitle">Shrimp</div>

                                <div class="resultImage">
                                    <img src="http://www.envision-creative.com/wp-content/uploads/Tiagos01.jpg">
                                </div>
                                <div class="userCaption">
                                    "Tasty as Fuck"
                                </div>
                                <div class="profPic">
                                    <img src="images/profilePic-01.png">
                                </div>
                                <div class="imageInfo">
                                    <div class="userRating">
                                        <img src="images/star.svg">
                                        <img src="images/star.svg">
                                        <img src="images/star.svg">
                                        <img src="images/noStar.svg">
                                        <img src="images/noStar.svg">
                                    </div>
                                    <span class="userName">Jamison Ernest</span>
                                    <span class="timePosted">3 Hours Ago</span>

                                </div>

                                <div class="rating" rating="sucks">It Sucks</div>
                                <div class="addToList">
                                    <img src="images/saveToList.svg">
                                    <div class="addText">add to list</div>
                                </div>
                                <div class="rating right" rating="good">Gotta Have It!</div>



                            </div>

                            <div class="rightResult deepPurp">
                                <div class="clusterTwo">
                                    <h2>La Villa Cafe</h2>
                                    <div class="userRating">
                                        <img src="images/star.svg">
                                        <img src="images/star.svg">
                                        <img src="images/star.svg">
                                        <img src="images/noStar.svg">
                                        <img src="images/noStar.svg">
                                    </div>
                                    <span>read all reviews</span>
                                </div>
                                <p class="clusterOne">
                                    917-555-5151
                                    <br/>lavillacafe.com
                                    <br/>.2 miles away
                                    <br/>$$
                                </p>
                                <h3>Hours of Operation</h3>
                                <p>S - 6am - 10pm
                                    <br/>M - 6am - 10pm
                                    <br/>T - 6am - 10pm
                                    <br/>W - 6am - 10pm
                                    <br/>Th - 6am - 10pm
                                    <br/>F - 6am - 10pm
                                    <br/>Sa - 6am - 10pm</p>
                                <div class="menuButton redPurp">See the Menu</div>

                            </div>
                            <div class="ratingBar">
                                <div class="ratingBad"></div>
                                <div class="ratingGood"></div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </div>

        <div id="footer" class="darkText">
            <span>Help</span>
            <span>Contact</span>
            <span>About</span>
            <span>Learn More</span>
        </div>

    </div>


    <!-- Place this asynchronous JavaScript just before your </body> tag -->
    <script type="text/javascript">
        jQuery(".addText").fitText(.45);

        (function () {
            var po = document.createElement('script');
            po.type = 'text/javascript';
            po.async = true;
            po.src = 'https://apis.google.com/js/client:plusone.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(po, s);
        })();
    </script>


</body>


</html>

