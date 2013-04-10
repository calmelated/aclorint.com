<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" >
<head>
    <base href="<?php echo base_url();?>">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="ACLOR, GWC Servicio, Notebook, Laredo TX, Mexico" />
    <meta name="title" content="Welcome to ACLOR INC." />
    <meta name="author" content="Administrator" />
    <meta name="description" content="The the purpose of ACLOR INC is providing high quality and innovative school and office supplies to students, businesses, and all other consumers." />
    <meta name="google-translate-customization" content="f055f05f5b5401d5-c1d91990eb9d51bc-g99991b54267e942f-d"></meta>

    <title>Welcome to the ACLOR INC.</title>
    <link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <script type="text/javascript" src="script/mootools.js"></script>
    <script type="text/javascript" src="script/caption.js"></script>
    <script type="text/javascript" src="script/script.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <!--  script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script --!>

    <link rel="stylesheet" href="css/system.css" type="text/css" />
    <link rel="stylesheet" href="css/general.css" type="text/css" />
    <link rel="stylesheet" href="css/template.css" type="text/css" />
    <link rel="stylesheet" href="css/stylesheet.css" type="text/css" />
    <link rel="stylesheet" href="css/img.css" type="text/css" />
</head>

<body>
    <div id="container">
    <a name="up" id="up"></a>
        <div id="container_subnav">
            <div id="subnav_buttons">
                <div id="container_gallery">
                    <a href="#"><img src="images/gallery_icon.png" width="90" height="117" border="0" alt=""/></a>
                </div>
                <div id="container_toolbox">
                    <a href="#"><img src="images/toolbox.png" width="104" height="121" border="0" alt=""/></a>
                </div>
                <div id="subnav">
                    <a href="contact_us"><img src="images/nav/contact_nav.gif" width="100" height="29" border="0" alt=""/></a>
                    <a href="search-aclor"><img src="images/nav/search_nav.gif" width="100" height="29" border="0" alt=""/></a>

                    <?php if(!isset($this->session->userdata['logged_in'])) { ?>
                        <a href="user/login"><img src="images/nav/empty_nav.png" width="103" height="29" border="0" alt=""/></a>
                    <?php } else { ?>
                        <a href="user/logout"><img src="images/nav/empty_nav.png" width="103" height="29" border="0" alt=""/></a>
                    <?php } ?>
                </div>
            </div>
        </div>

        <div id="container_nav">
            <div id="nav">
                <a href="index"><img src="images/home.gif" width="20" height="21" border="0" alt="Home"/></a>
                <span id="nav_about"><a href="about_us"><img src="images/nav/nav_about.gif" alt="About Us" border=""/></a></span>
                <span id="nav_products"><a href="products"><img src="images/nav/nav_products.gif" alt="Products" border=""/></a></span>
                <span id="nav_workflow"><a href="working-flow"><img src="images/nav/nav_workflow.gif" alt="Work flow" border=""/></a></span>
                <span id="nav_news"><a href="news"><img src="images/nav/nav_news.gif" alt="News" border="News"/></a></span>
                <span id="nav_investors"><a href="investors"><img src="images/nav/nav_investors.gif" alt="Investors" border=""/></a></span>
                <span id="nav_contact_us"><a href="contact_us"><img src="images/nav/nav_contact.gif" alt="Contact Us" border=""/></a></span>
            </div>
        </div>
<!--
        <div id="container_subnav">
            <div id="subnav_buttons">
                <div id="container_gallery">
                    <a href="#"><img src="images/gallery_icon.png" width="90" height="117" border="0" alt=""/></a>
                </div>
                <div id="container_toolbox">
                    <a href="#"><img src="images/toolbox.png" width="104" height="121" border="0" alt=""/></a>
                </div>
                <div id="subnav">
                   <a href="#"><img src="images/nav/empty_nav.png" width="100" height="29" border="0" alt=""/></a>
                   <a href="#"><img src="images/nav/contact_nav.gif" width="100" height="29" border="0" alt=""/></a>
                   <a href="#-aclor"><img src="images/nav/search_nav.gif" width="100" height="29" border="0" alt=""/></a>
                </div>
            </div>
        </div>

        <div id="container_nav">
            <div id="nav">
                <a href="index"><img src="images/home.gif" width="20" height="21" border="0" alt="Home"/></a>
                <span id="nav_about"><a href="#"><img src="images/nav/nav_about.gif" alt="About Us" border=""/></a></span>
                <span id="nav_products"><a href="products"><img src="images/nav/nav_products.gif" alt="Products" border=""/></a></span>
                <span id="nav_workflow"><a href="working-flow"><img src="images/nav/nav_workflow.gif" alt="Work flow" border=""/></a></span>
                <span id="nav_news"><a href="#"><img src="images/nav/nav_news.gif" alt="News" border="News"/></a></span>
                <span id="nav_investors"><a href="#"><img src="images/nav/nav_investors.gif" alt="Investors" border=""/></a></span>
                <span id="nav_contact_us"><a href="#"><img src="images/nav/nav_contact.gif" alt="Contact Us" border=""/></a></span>
            </div>
        </div>

-->
        <div id="container_header">
            <div id="header">
                <a href="index">
                    <img src="images/logo_main.png" alt="" id="logo" border="0" width="290" height="180"/>
                </a>
            </div>
        </div>
