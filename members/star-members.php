<!DOCTYPE html>
<html class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths" lang="en" data-useragent="Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.93 Safari/537.36">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSSA | STAR MEMBERS</title>
    <meta name="description" content="CSSA">
    <meta name="author" content="Jett Wang">
    <meta name="copyright" content="CSSA Copyright (c) 2015">
    <link rel="stylesheet" href="../assets/style.css">
    <link href="../assets/colorbox.css" rel="stylesheet">
    <style type="text/css"></style>
    <meta class="foundation-data-attribute-namespace">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    
    <?php include "./header.php"; ?>
</head>

<body>
    <div class="row">
        <div>
            <img class="head" src="../assets/image/banner/star-members.jpg"></img>
        </div>
    </div>


    <div class="row">
        <div class="contained"><div class="contained">
            <h2 id="CNtext">明日之星</h2>
            <p>明日之星是CSSA内部奖励制度的一部分。为了体现CSSA“给你温暖给你爱”的主题和鼓励嘉奖表现突出的成员，CSSA每个月由最初的部长提名，提名人参与演讲，到最终board投票选举，经过层层选拔，最终确定三名表现最佳成员。让我们一起来了解他们的故事，从他们的视角了解CSSA的精彩。</p>
        </div></div>
    </div>

    <div class="row">
        <div class="contained text">
            <?php   $page_id = $_GET['page']; layout($page_id);
            function layout($page_id) {
                switch($page_id) {
                    default:
                    echo '<p class="red">The page was not found. Showing Home page instead</p>';
                    case '':
                    case '2015':
                    include @ '2015.php';
                    break;
                    case '2014':
                    include @ '2014.php';
                    break;
                }
            }
            ?>
        </div>
    </div>






    <?php include "../assets/footer.php"; ?>

</body>
</html>
