<!DOCTYPE html>
<html>
<head>
    <title>নিউ ইয়র্ক বাংলা পোস্ট - ৭ - নিউইয়র্ক বাংলা পোস্ট ইপেপার</title>
    <?php require_once 'includes/libary.php'; ?>
</head>
<body>
<?php require_once 'includes/header.php'; ?>
<!-- Page Display -->
<div class="row">


    <div class="col-xs-9">
        <div class="title-header clearfix">

            <h2 class="title-heading f-light">নিউ ইয়র্ক বাংলা পোস্ট - ৭</h2>

        </div>
        <div class="seperator_15"></div>
        <a class="thumbnail imagethumb" target="_blank"
           href="paper_image/page_image/CTB-03-04%20(11-04-2022_1_page.jpg"><img
                    src="paper_image/page_image/CTB-03-04%20(11-04-2022_1_page.jpg"
                    alt=""/></a>
        <style media="print">
            body * {
                display: none;
            }

            body #print_img {
                display: block !important;
            }
        </style>
        <img class="visible-print" id="print_img"
             src="paper_image/page_image/imageprocessor8623.gif"
             alt=""/>
        <script>
            if ($(window).width() > 768) {
                $('.imagethumb').colorbox();
            }
            $("body > #print_img").remove();
            $("body").prepend($("#print_img"));
        </script>
    </div>
    <div class="col-xs-3">
        <div class="seperator_15"></div>

        <section class='widget'>
            <header class='widget_title'><h1>Advertise here</h1></header>
            <div class='widget_body'><a href="#"><!--<img style="width: 100%; height: auto;"
                                                                      src="img/pnp_ads_300x600.jpg"
                                                                      alt="Side Ads"/>--></a>
                <br><br></div>
        </section>

        <section class='widget'>
            <div class='widget_body'><a href="index.html" target="blank"><!--<img
                                    style="width: 100%; height: 100%;" src="img/pnp-epaper-logo.jpg"
                                    alt="epaper"/>--></a>

                <br><br></div>
        </section>

        <section class='widget'>
            <header class='widget_title'><h1>Subscribe Here</h1></header>
            <div class='widget_body'>
                <form style="border:1px solid #ccc;padding:3px;text-align:center;"
                      action="https://feedburner.google.com/fb/a/mailverify" method="post"
                      target="popupwindow"
                      onsubmit="window.open('https://feedburner.google.com/fb/a/mailverify?uri=purbanchal/rss', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
                    <p>Enter your email address:</p>
                    <p><input type="text" style="width:140px" name="email"/></p><input type="hidden"
                                                                                       value="purbanchal/rss"
                                                                                       name="uri"/><input
                            type="hidden" name="loc" value="en_US"/><input type="submit" value="Subscribe"/>
                    <p>Delivered by <a href="https://feedburner.google.com/" target="_blank">FeedBurner</a>
                    </p></form>
            </div>
        </section>
    </div>


</div>
<?php require_once 'includes/footer.php'; ?>
</body>
</html>


