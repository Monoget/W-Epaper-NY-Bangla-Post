<script>
    $("body").iealert({
        support: "ie7",
        title: "Did you know that your Internet Explorer is out of date?",
        text: "To get the best possible experience using our site we recommend that you upgrade to a modern web browser. To download a newer web browser click on the Upgrade button.",
        upgradeTitle: "Upgrade"
    });
</script>


<section class="container outer">
    <header id="header">
        <div class="row">
            <div class="col-xs-4">

                <a href="index.html">
                    <img src="uploads/black.png" alt="নিউইয়র্ক বাংলা পোস্ট"/>
                </a>
            </div>
            <div class="col-xs-8">
                <div class="ad-468">
                    <center><!--<img src="img/bashundhora_b2min_purbanchal_728x90_white.png" alt="ads"
                                 style="width:100%; height:auto;">--></center>
                </div>
            </div>
        </div>
    </header>
    <nav id="mainmenu">
        <div class="navbar navbar-default navbar-inverse">
            <div class="navbar-inner">
                <ul class="nav navbar-nav">
                    <li><a rel="nofollow" href="index.html"><span class='glyphicon glyphicon-home'></span></a></li>
                    <li><a target="_blank" href="#">নিউজ সংস্করণ</a></li>
                </ul>


                <form method="post" class="navbar-form pull-right searchWidget" role="search"><!--action="https://epaper.purbanchal.com/epaper/default/dosearch"-->

                    <div class="input-group">
                        <input name="search" type="text" class="form-control" placeholder="Search..." value=""/>
                        <span class="input-group-btn">
       <input type="hidden" name="ed_id" value="0"/>
      <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
      </span>
                    </div>
                </form>
                <div class="pull-right" style="margin-right:10px;">
                    <style>
                        .scrollable-menu-btn {
                            font-family: sans-serif;
                        }

                        .scrollable-menu {
                            height: auto;
                            max-height: 200px;
                            overflow-x: hidden;

                        }
                    </style>
                    <div class="btn-group">
                        <button type="button" class="btn btn-danger dropdown-toggle scrollable-menu-btn navbar-btn2"
                                data-toggle="dropdown">14 Jan 2022 <span class="caret"></span></button>
                        <ul class="dropdown-menu scrollable-menu" role="menu">
                            <li>
                                <a href="index.html">14
                                    Jan 2022</a></li>
                        </ul>
                    </div>


                    <script>
                        $("select[name=calender_dropdown]").on("change", function (e) {
                            e.preventDefault();
                            if ($(this).val() !== "0") {
                                window.location = $(this).val();
                            }
                        });
                    </script>
                </div>
            </div>
        </div>
    </nav>


    <div class="breadcrumb topbread">
        <a href="index.html">Home</a>
        <div style="padding-top:10px; padding-bottom:10px; min-height:800px;">

            <article class="edition-block">
                <header class="page-title">
                    <h1 class="page-heading">আজকের পত্রিকা
                        <div class="archive_calender">
                            <style>
                                .ui-datepicker {
                                    z-index: 3 !important;
                                }
                            </style>
                            <div class="input-group cal_outer">
                                <input style="" class="form-control" type="text" id="datetext_cal" name="datetext_cal"
                                       value="14-Jan-2022"/>
                                <span class="input-group-btn">
		<button id="datebtn_cal" style="" class="btn btn-primary btnCalender" href="#"><span
                class="glyphicon glyphicon-calendar"></span></button>
	</span>
                            </div>


                            <script>
                                var array = ["2021-01-01", "2021-01-02", "2021-01-03", "2021-01-04", "2021-01-05", "2021-01-06", "2021-01-07", "2021-01-08", "2021-01-09", "2021-01-10", "2021-01-11", "2021-01-12", "2021-01-13", "2021-01-14", "2021-01-15", "2021-01-16", "2021-01-17", "2021-01-18", "2021-01-19", "2021-01-20", "2021-01-21", "2021-01-22", "2021-01-23", "2021-01-24", "2021-01-25", "2021-01-26", "2021-01-27", "2021-01-28", "2021-01-29", "2021-01-30", "2021-01-31", "2021-02-01", "2021-02-02", "2021-02-03", "2021-02-04", "2021-02-05", "2021-02-06", "2021-02-07", "2021-02-08", "2021-02-09", "2021-02-10", "2021-02-11", "2021-02-12", "2021-02-13", "2021-02-14", "2021-02-15", "2021-02-16", "2021-02-17", "2021-02-18", "2021-02-19", "2021-02-20", "2021-02-21", "2021-02-23", "2021-02-24", "2021-02-25", "2021-02-26", "2021-02-27", "2021-02-28", "2021-03-01", "2021-03-02", "2021-03-03", "2021-03-04", "2021-03-05", "2021-03-06", "2021-03-07", "2021-03-08", "2021-03-09", "2021-03-10", "2021-03-11", "2021-03-12", "2021-03-13", "2021-03-14", "2021-03-15", "2021-03-16", "2021-03-17", "2021-03-18", "2021-03-19", "2021-03-20", "2021-03-21", "2021-03-22", "2021-03-23", "2021-03-24", "2021-03-25", "2021-03-26", "2021-03-28", "2021-03-29", "2021-03-31", "2021-04-01", "2021-04-02", "2021-04-03", "2021-04-04", "2021-04-05", "2021-04-06", "2021-04-07", "2021-04-08", "2021-04-09", "2021-04-10", "2021-04-11", "2021-04-12", "2021-04-13", "2021-04-14", "2021-04-16", "2021-04-17", "2021-04-18", "2021-04-19", "2021-04-20", "2021-04-21", "2021-04-22", "2021-04-23", "2021-04-24", "2021-04-25", "2021-04-26", "2021-04-27", "2021-04-28", "2021-04-29", "2021-04-30", "2021-05-01", "2021-05-03", "2021-05-04", "2021-05-05", "2021-05-06", "2021-05-07", "2021-05-08", "2021-05-09", "2021-05-10", "2021-05-11", "2021-05-12", "2021-05-17", "2021-05-18", "2021-05-19", "2021-05-20", "2021-05-21", "2021-05-22", "2021-05-23", "2021-05-24", "2021-05-25", "2021-05-26", "2021-05-27", "2021-05-28", "2021-05-29", "2021-05-30", "2021-05-31", "2021-06-01", "2021-06-02", "2021-06-03", "2021-06-04", "2021-06-05", "2021-06-06", "2021-06-07", "2021-06-08", "2021-06-09", "2021-06-10", "2021-06-11", "2021-06-12", "2021-06-13", "2021-06-14", "2021-06-15", "2021-06-16", "2021-06-17", "2021-06-18", "2021-06-19", "2021-06-20", "2021-06-21", "2021-06-22", "2021-06-23", "2021-06-24", "2021-06-25", "2021-06-26", "2021-06-27", "2021-06-28", "2021-06-29", "2021-06-30", "2021-07-01", "2021-07-02", "2021-07-03", "2021-07-04", "2021-07-05", "2021-07-06", "2021-07-07", "2021-07-08", "2021-07-09", "2021-07-10", "2021-07-11", "2021-07-12", "2021-07-13", "2021-07-14", "2021-07-15", "2021-07-16", "2021-07-17", "2021-07-18", "2021-07-19", "2021-07-20", "2021-07-24", "2021-07-25", "2021-07-26", "2021-07-27", "2021-07-28", "2021-07-29", "2021-07-30", "2021-07-31", "2021-08-01", "2021-08-02", "2021-08-03", "2021-08-04", "2021-08-05", "2021-08-06", "2021-08-07", "2021-08-08", "2021-08-09", "2021-08-10", "2021-08-11", "2021-08-12", "2021-08-13", "2021-08-14", "2021-08-15", "2021-08-16", "2021-08-17", "2021-08-18", "2021-08-19", "2021-08-20", "2021-08-22", "2021-08-23", "2021-08-24", "2021-08-25", "2021-08-26", "2021-08-27", "2021-08-28", "2021-08-29", "2021-08-30", "2021-08-31", "2021-09-01", "2021-09-02", "2021-09-03", "2021-09-04", "2021-09-05", "2021-09-06", "2021-09-07", "2021-09-08", "2021-09-09", "2021-09-10", "2021-09-11", "2021-09-12", "2021-09-13", "2021-09-14", "2021-09-15", "2021-09-16", "2021-09-17", "2021-09-18", "2021-09-19", "2021-09-20", "2021-09-21", "2021-09-22", "2021-09-23", "2021-09-24", "2021-09-25", "2021-09-26", "2021-09-27", "2021-09-28", "2021-09-29", "2021-09-30", "2021-10-01", "2021-10-02", "2021-10-03", "2021-10-04", "2021-10-05", "2021-10-06", "2021-10-07", "2021-10-08", "2021-10-09", "2021-10-10", "2021-10-11", "2021-10-12", "2021-10-13", "2021-10-14", "2021-10-15", "2021-10-16", "2021-10-17", "2021-10-18", "2021-10-19", "2021-10-20", "2021-10-22", "2021-10-23", "2021-10-24", "2021-10-25", "2021-10-26", "2021-10-27", "2021-10-28", "2021-10-29", "2021-10-30", "2021-10-31", "2021-11-01", "2021-11-02", "2021-11-03", "2021-11-04", "2021-11-05", "2021-11-06", "2021-11-07", "2021-11-08", "2021-11-09", "2021-11-10", "2021-11-11", "2021-11-12", "2021-11-13", "2021-11-14", "2021-11-15", "2021-11-16", "2021-11-17", "2021-11-18", "2021-11-19", "2021-11-20", "2021-11-21", "2021-11-22", "2021-11-23", "2021-11-24", "2021-11-25", "2021-11-26", "2021-11-27", "2021-11-28", "2021-11-29", "2021-11-30", "2021-12-01", "2021-12-02", "2021-12-03", "2021-12-04", "2021-12-05", "2021-12-06", "2021-12-07", "2021-12-08", "2021-12-09", "2021-12-10", "2021-12-11", "2021-12-12", "2021-12-13", "2021-12-14", "2021-12-15", "2021-12-16", "2021-12-18", "2021-12-19", "2021-12-20", "2021-12-21", "2021-12-22", "2021-12-23", "2021-12-24", "2021-12-25", "2021-12-26", "2021-12-27", "2021-12-28", "2021-12-29", "2021-12-30", "2021-12-31", "2022-01-01", "2022-01-02", "2022-01-03", "2022-01-04", "2022-01-05", "2022-01-06"];

                                $(document).on("click", "#datebtn_cal", function (e) {
                                    e.preventDefault();

                                    $("#datetext_cal").datepicker({
                                        dateFormat: "dd M yy",
                                        currentText: "06-Jan-2022",
                                        changeMonth: true,
                                        changeYear: true,
                                        minDate: "-20Y",
                                        maxDate: "Y",
                                        beforeShowDay: function (date) {
                                            var string = jQuery.datepicker.formatDate('yy-mm-dd', date);
                                            var oldDate = new Date();
                                            oldDate.setFullYear(oldDate.getFullYear() - 5);
                                            var thisDate = new Date(string);

                                            if (thisDate.getTime() <= oldDate.getTime()) {
                                                return [true];
                                            } else {
                                                return [array.indexOf(string) > -1];
                                            }
                                        },
                                        onSelect: function (dateText) {
                                            var url = "/epaper/go/T_ARC/T_CAT";
                                            url = url.replace("T_ARC", dateText);
                                            url = url.replace("T_CAT", "2");
                                            window.location = url;
                                        }
                                    });


                                    $("#datetext_cal").datepicker("show");
                                });

                            </script>

                        </div>
                    </h1>
                </header>
                <!-- Page Lists Display -->
                <script>
                    $(function () {
                        // initialize scrollable
                        var currentpage = 1;
                        var seekto = Math.ceil(currentpage / 4) - 1;
                        $(".scrollable").scrollable();
                        var api = $(".scrollable").data("scrollable");
                        api.seekTo(seekto);
                    });
                </script>

                <div class=" pager-block">
                    <div class="row">
                        <!-- "previous page" action -->
                        <div class="col-xs-1">
                            <a class="prev browse left btn btn-default btn-sm"><span
                                    class="glyphicon glyphicon-backward"></span></a>
                        </div>
                        <div class="col-xs-10">
                            <!-- root element for scrollable -->
                            <div class="scrollable" id="scrollable">
                                <!-- root element for the items -->
                                <div class="items">
                                    <div>
                                        <a class="current" data-id="1394" data-alias="আজকের-পত্রিকা" data-page="1"
                                           href="index.html"><img
                                                src="paper_image/thumbnail_image/1.png"
                                                alt="প্রথম পাতা"/></a>
                                    </div>
                                    <div>
                                        <a class="" data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="2"
                                           href="index.html"><img
                                                src="paper_image/thumbnail_image/2.png"
                                                alt="খবর"/></a>
                                    </div>
                                    <div>
                                        <a class="" data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="3"
                                           href="index.html"><img
                                                src="paper_image/thumbnail_image/3.png"
                                                alt="ইমিগ্রেশনের আদ্যপান্ত"/></a>
                                    </div>
                                    <div>
                                        <a class="" data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="2"
                                           href="index.html"><img
                                                src="paper_image/thumbnail_image/4.png"
                                                alt="নিউ ইয়র্ক ট্যাক্সেশন"/></a>
                                    </div>
                                    <div>
                                        <a class="" data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="3"
                                           href="index.html"><img
                                                src="paper_image/thumbnail_image/5.png"
                                                alt="ইসলামিক বার্তা"/></a>
                                    </div>
                                    <div>
                                        <a class="" data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="2"
                                           href="index.html"><img
                                                src="paper_image/thumbnail_image/6.png"
                                                alt="নিউ ইয়র্ক বাংলা পোস্ট - ৬"/></a>
                                    </div>
                                    <div>
                                        <a class="" data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="3"
                                           href="index.html"><img
                                                src="paper_image/thumbnail_image/7.png"
                                                alt="নিউ ইয়র্ক বাংলা পোস্ট - ৭"/></a>
                                    </div>
                                    <div>
                                        <a class="" data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="4"
                                           href="index.html"><img
                                                src="paper_image/thumbnail_image/8.png"
                                                alt="খেলার পাতা"/></a>
                                    </div>
                                    <div>
                                        <a class="" data-id="1394" data-alias="আজকের-পত্রিকা" data-page="1"
                                           href="index.html"><img
                                                src="paper_image/thumbnail_image/9.png"
                                                alt="সাস্থ্য সুরক্ষা"/></a>
                                    </div>
                                    <div>
                                        <a class="" data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="2"
                                           href="index.html"><img
                                                src="paper_image/thumbnail_image/10.png"
                                                alt="ব্যাবসায়-বানিজ্য"/></a>
                                    </div>
                                    <div>
                                        <a class="" data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="3"
                                           href="index.html"><img
                                                src="paper_image/thumbnail_image/11.png"
                                                alt="চাকরির খবর - ১"/></a>
                                    </div>
                                    <div>
                                        <a class="" data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="2"
                                           href="index.html"><img
                                                src="paper_image/thumbnail_image/12.png"
                                                alt="চাকরির খবর - ২"/></a>
                                    </div>
                                    <div>
                                        <a class="" data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="3"
                                           href="index.html"><img
                                                src="paper_image/thumbnail_image/13.png"
                                                alt="ভ্রমন বিলাস"/></a>
                                    </div>
                                    <div>
                                        <a class="" data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="2"
                                           href="index.html"><img
                                                src="paper_image/thumbnail_image/14.png"
                                                alt="আপস্টেট"/></a>
                                    </div>
                                    <div>
                                        <a class="" data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="3"
                                           href="index.html"><img
                                                src="paper_image/thumbnail_image/15.png"
                                                alt="বাফেলো"/></a>
                                    </div>
                                    <div>
                                        <a class="" data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="4"
                                           href="index.html"><img
                                                src="paper_image/thumbnail_image/16.png"
                                                alt="শেষের পাতা"/></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-1">
                            <a class="next browse right btn  btn-default  btn-sm"><span
                                    class="glyphicon glyphicon-forward"></span></a>
                        </div>
                    </div>

                </div>

                <div class='row'>
                    <div class='col-xs-6'>
                        <a href="#" id="linkbtnThumb" class="btn btn-default"><span
                                class='glyphicon glyphicon-th-large'></span></a>
                        <script>
                            $(document).ready(function (e) {
                                $(document).on("click", "#linkbtnThumb", function (e) {
                                    e.preventDefault();
                                    $('#thumbnail_browser').modal("show");
                                });
                            });
                        </script>
                        <div id="thumbnail_browser" class="modal fade">
                            <div class="modal-dialog">

                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title">আজকের পত্রিকা </h4>
                                    </div>
                                    <div class="modal-body">
                                        <div style="height: 600px; overflow: auto;">
                                            <div style="width:95%;">
                                                <div class='row'>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                            class="current pagethumb thumbnail" data-id="1394"
                                                            data-alias="আজকের-পত্রিকা" data-page="1"
                                                            href="index.html"><img
                                                                src="paper_image/box_image/1.png"
                                                                alt="প্রথম পাতা"/></a>
                                                        <div>প্রথম পাতা</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                            class="pagethumb thumbnail" data-id="1394"
                                                            data-alias="আজকের-পত্রিকা" data-page="2"
                                                            href="index.html"><img
                                                                src="paper_image/box_image/2.png"
                                                                alt="খবর"/></a>
                                                        <div>খবর</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                            class="pagethumb thumbnail" data-id="1394"
                                                            data-alias="আজকের-পত্রিকা" data-page="3"
                                                            href="index.html"><img
                                                                src="paper_image/box_image/3.png"
                                                                alt="ইমিগ্রেশনের আদ্যপান্ত"/></a>
                                                        <div>ইমিগ্রেশনের আদ্যপান্ত</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                            class="pagethumb thumbnail" data-id="1394"
                                                            data-alias="আজকের-পত্রিকা" data-page="3"
                                                            href="index.html"><img
                                                                src="paper_image/box_image/4.png"
                                                                alt="নিউ ইয়র্ক ট্যাক্সেশন"/></a>
                                                        <div>নিউ ইয়র্ক ট্যাক্সেশন</div>
                                                    </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                            class="pagethumb thumbnail" data-id="1394"
                                                            data-alias="আজকের-পত্রিকা" data-page="2"
                                                            href="index.html"><img
                                                                src="paper_image/box_image/5.png"
                                                                alt="ইসলামিক বার্তা"/></a>
                                                        <div>ইসলামিক বার্তা</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                            class="pagethumb thumbnail" data-id="1394"
                                                            data-alias="আজকের-পত্রিকা" data-page="2"
                                                            href="index.html"><img
                                                                src="paper_image/box_image/6.png"
                                                                alt="নিউ ইয়র্ক বাংলা পোস্ট - ৬"/></a>
                                                        <div>নিউ ইয়র্ক বাংলা পোস্ট - ৬</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                            class="pagethumb thumbnail" data-id="1394"
                                                            data-alias="আজকের-পত্রিকা" data-page="3"
                                                            href="index.html"><img
                                                                src="paper_image/box_image/7.png"
                                                                alt="নিউ ইয়র্ক বাংলা পোস্ট - ৭"/></a>
                                                        <div>নিউ ইয়র্ক বাংলা পোস্ট - ৭</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                            class="pagethumb thumbnail" data-id="1394"
                                                            data-alias="আজকের-পত্রিকা" data-page="4"
                                                            href="index.html"><img
                                                                src="paper_image/box_image/8.png"
                                                                alt="খেলার পাতা"/></a>
                                                        <div>খেলার পাতা</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                            class="current pagethumb thumbnail" data-id="1394"
                                                            data-alias="আজকের-পত্রিকা" data-page="1"
                                                            href="index.html"><img
                                                                src="paper_image/box_image/9.png"
                                                                alt="সাস্থ্য সুরক্ষা"/></a>
                                                        <div>সাস্থ্য সুরক্ষা</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                            class="pagethumb thumbnail" data-id="1394"
                                                            data-alias="আজকের-পত্রিকা" data-page="2"
                                                            href="index.html"><img
                                                                src="paper_image/box_image/10.png"
                                                                alt="ব্যাবসায়-বানিজ্য"/></a>
                                                        <div>ব্যাবসায়-বানিজ্য</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                            class="pagethumb thumbnail" data-id="1394"
                                                            data-alias="আজকের-পত্রিকা" data-page="3"
                                                            href="index.html"><img
                                                                src="paper_image/box_image/11.png"
                                                                alt="চাকরির খবর - ১"/></a>
                                                        <div>চাকরির খবর - ১</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                            class="pagethumb thumbnail" data-id="1394"
                                                            data-alias="আজকের-পত্রিকা" data-page="3"
                                                            href="index.html"><img
                                                                src="paper_image/box_image/12.png"
                                                                alt="চাকরির খবর - ২"/></a>
                                                        <div>চাকরির খবর - ২</div>
                                                    </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                            class="pagethumb thumbnail" data-id="1394"
                                                            data-alias="আজকের-পত্রিকা" data-page="2"
                                                            href="index.html"><img
                                                                src="paper_image/box_image/13.png"
                                                                alt="ভ্রমন বিলাস"/></a>
                                                        <div>ভ্রমন বিলাস</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                            class="pagethumb thumbnail" data-id="1394"
                                                            data-alias="আজকের-পত্রিকা" data-page="2"
                                                            href="index.html"><img
                                                                src="paper_image/box_image/14.png"
                                                                alt="আপস্টেট"/></a>
                                                        <div>আপস্টেট</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                            class="pagethumb thumbnail" data-id="1394"
                                                            data-alias="আজকের-পত্রিকা" data-page="3"
                                                            href="index.html"><img
                                                                src="paper_image/box_image/15.png"
                                                                alt="বাফেলো"/></a>
                                                        <div>বাফেলো</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                            class="pagethumb thumbnail" data-id="1394"
                                                            data-alias="আজকের-পত্রিকা" data-page="4"
                                                            href="index.html"><img
                                                                src="paper_image/box_image/16.png"
                                                                alt="শেষের পাতা"/></a>
                                                        <div>শেষের পাতা</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div>


                    </div>
                    <div class='col-xs-6 text-right'>

                    </div>
                </div>