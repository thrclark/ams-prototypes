<?php $page_title = "Home" ?>

<!DOCTYPE html>
<html lang="en-us">
<head>
<?php include ('includes/head-meta.php') ?>
<?php include ('includes/styles.php') ?>
<?php include ('includes/scripts.php') ?>
</head>
<body id="top" >
<?php include ('includes/brand-header2.php') ?>
<?php include ('includes/header2.php') ?>
<section style="background:#ffffff; margin-bottom:15px" id="utility_bar">
    <div class="container utilities-bar">
        <nav class="navbar navbar-default" style="margin-bottom:0px">
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <ol class="breadcrumb">
                        <li class=""><a href="https://one.iu.edu/collection/iu/access-management" title="Home Page"><i class="visible-xs-inline-block icon-left-open-1"></i>Access.IU</a></li>
                        <li class="hidden-xs">Acceptable Use Agreement</li>
                    </ol>
                </div>
                <div class="col-md-6 hidden-xs hidden-sm">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="icon-user-3"></i>thrclark</a>
                            <ul class="dropdown-menu">
                                <li><a href="#" tabindex="0" class=""><i class="icon-heart"></i> My Favorites</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</section>
<div class="main-content container" role="main">
    <div id="main-content">
        <div class="tcptdp-header">
            <div class="media-body">
                <h2 class="media-heading">Acceptable Use Agreement</h2>
                
                <!--<div class="ratings hidden-xs hidden-sm"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-empty"></i> (7)</div>--> 
                <!--<div class="controls"><a href="#" class="btn btn-default favorite notice"> <i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i> <span class="sr-only">Favorite</span></a> <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#announcement_task"> <i class="icon-play-circled2"></i> <span class="">Start</span></a></div>--> 
            </div>
        </div>
        <h4> Access to Technology and Information Resources - Employees</h4>
        <p> You currently have an Acceptable Use Agreement already on file. You may either view and print the agreement for your records, or choose to complete the agreement again. Your recorded completion date will be updated accordingly if you complete the agreement again. </p>
        <div class="text-center" style="margin-top:40px"> <a class="btn btn-lg btn-default" href="useragreement-viewprint.php" style="border:solid 2px #44697D; color:#44697D; font-weight: bold; margin:5px">View and Print Agreement</a><a class="btn btn-lg btn-default" href="useragreement-complete.php" style=" border:solid 2px #44697D; color:#44697D; font-weight: bold; margin:5px">Complete Agreement Again</a> </div>
    </div>
</div>
<?php include ('includes/footer-scripts.php') ?>
<?php include ('includes/brand-footer.php') ?>
</body>
</html>
