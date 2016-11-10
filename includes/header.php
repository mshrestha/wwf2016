<?php include('functions.php');?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link rel="icon" href="img/favicon.ico">
    <title>WWF Nepal - Annual Report</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/reset.css">

    <!-- icon font -->
    <link rel="stylesheet" href="css/icomoon/style.css">


    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="vendor/Swiper-master/dist/css/swiper.min.css">
    <link rel="stylesheet" href="css/swiper-style.css">
    <!-- <link rel="stylesheet" href="../dist/css/swiper.min.css"> -->

    <!-- custom scrollbar stylesheet -->
    <link rel="stylesheet" href="vendor/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.css">

    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/../css/custom-responsive.css">
    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <style>
    body {
        /*background-color: #000;*/
        background-size: cover;
    }
    .loading-wrapper {
        background: rgba(133,193,62,1);
        position: fixed;
        left: 0;
        top: 0; 
        bottom: 0;
        right: 0;
        z-index: 9999;
    }
    .loading-animate {
        /*background-color: #666;*/
        /*background-repeat: no-repeat;*/
        /* height: 200px;
        width: 497px; */
        height: 200px;
        width: 100%;
        position: absolute;
        /* left: 50%; */
        top: 50%;
        /* margin-left: -249px; */
        margin-top: -100px;
        overflow: hidden;
    }
    .loading-move {
        background: url('img/loadinganimate-water-curve.svg');
        background-size: 93px;
        background-position: center;
        background-repeat-y: no-repeat;
        height: 100%;
        width: 100%;
        -webkit-transform: translateX(0px);
        -ms-transform: translateX(0px);
        -o-transform: translateX(0px);
        transform: translateX(0px);
        -webkit-animation: animatedBackground 40s linear infinite;
        -o-animation: animatedBackground 40s linear infinite;
        animation: animatedBackground 40s linear infinite;
    }



@keyframes animatedBackground{
    from { background-position: 0 center; }
    to { background-position: 100% center; }
}

@-moz-keyframes animatedBackground{
    from { background-position: 0 center; }
    to { background-position: 100% center; }
}

@-webkit-keyframes animatedBackground {
    from { background-position: 0 center; }
    to { background-position: 100% center; }
}

@-o-keyframes animatedBackground {
    from { background-position: 0 center; }
    to { background-position: 100% center; }
}

@-ms-keyframes animatedBackground {
    from { background-position: 0 center; }
    to { background-position: 100% center; }
}
    </style>
    <!--<script src='http://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>-->
    <script src="js/vendor/jquery-1.11.2.min.js"></script>
    <script src="js/custom-loading.js"></script>
</head>
<body>
 	<!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->    
    <div class="loading-wrapper">
        <div class="loading-animate">
            <div class="loading-move"></div>
        </div>      
    </div>

    <div class="header">
    	<div class="container-fluid fluid-fixed">
    		<div class="col-sm-12">
    			<a href="#" class="logo"><img src="img/logo-wwf.jpg" alt=""></a>
    		</div>
    	</div>
    </div>	