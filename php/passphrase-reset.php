<?php $page_title = "Home" ?>

<!DOCTYPE html>
<html lang="en-us">
<head>
<?php include ('includes/head-meta.php') ?>
<style type="text/css"></style>
<?php include ('includes/styles.php') ?>
<?php include ('includes/scripts.php') ?>
</head>
<body id="top" >
<?php include ('includes/brand-header2.php') ?>
<header >
    <nav class="navbar navbar-inverse" id="brand-header" >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <i class="icon-menu"></i></button>
                <a class="navbar-brand" href="https://one.iu.edu/collection/iu/access-management">Access Management</a> </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Help</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Help Item 1</a> </li>
                            <li><a href="#">Help Item 2</a> </li>
                            <li><a href="#">Help Item 3</a> </li>
                        </ul>
                    </li>
                    <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="icon-user-3 hidden-xs"></i><span class=" visible-inline-xs">User: </span>thrclark </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Sign out</a> </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<div class="main-content container" role="main">
    <div id="main-content">
        <div class="page-title">
            <h2>Reset Passphrase</h2>
        </div>
        <div class="well">
            <div class="col-md-12">
                <div class="form-horizontal" style="padding-bottom:0px">
                    <div class="form-group" style="margin-bottom:0px;">
                        <div class="col-sm-4 control-label lead" style="padding-top:0px; font-weight:normal">Please select</div>
                    
                        <div class="col-sm-8">
                            <div class="customradio">
                                <div class="customradio-primary">
                                    <input type="radio" name="douknow1" id="radio3" value="2" />
                                    <label for="radio3">I know my current passphrase.</label>
                                </div>
                                <div class="customradio-primary">
                                    <input type="radio" name="douknow1" id="radio4" value="3" />
                                    <label for="radio4">I don't know my current passphrase.</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div id="Questions2" class="desc" style="display: none;">
            <div class="col-md-12">
                <form class="form-horizontal">
                    <div class="form-group" style="margin-bottom:0px">
                        <div class="col-sm-4 control-label" style="padding-top:0px; font-weight:bold">Before you begin</div>
                        <div class="col-sm-8">
                            <ul class="list-unstyled">
                                <li> Log out of as many services as possible (Lync, Outlook, etc). Some may ask you for your passphrase when re-launching.  Note any devices (mobile phones, tablets, laptops, etc) that store your passphrase; you'll need to update them afterwards. </li>
                            </ul>
                        </div>
                    </div>
                    <div class="form-group">
                       <div class="col-sm-4 control-label" style="padding-top:0px; font-weight:bold">Creating your Passphrase</div>
                        <div class="col-sm-8"> A passphrase is a sentence or series of words, numbers, or symbols used along with your Network ID to log into your IU account. </div>
                    </div>
                    <div class="form-group">
                        <label for="pr_username" class="col-sm-4 control-label">Username</label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control" id="pr_username" value="thrclark" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pr_currentpass" class="col-sm-4 control-label">Current Passphrase</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" id="pr_currentpass" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="NewPassphrase" class="col-sm-4 control-label">New Passphrase</label>
                        <div class="col-sm-8">
                            <input class="form-control" autocomplete="off" data-val="true" data-val-required="Please input a new passphrase." id="NewPassphrase" name="NewPassphrase" type="password">
                        </div>
                    </div>
                    <div class="form-group passreq" id="passreq" style="display:none">
                        <div class="col-sm-4"></div>
                        <div class="col-sm-8">
                            <div id="firstName" data-value="Tom"></div>
                            <div id="middleName" data-value="Robert"></div>
                            <div id="lastName" data-value="Clark"></div>
                            <div id="username" data-value="thrclark"></div>
                            <div class="row">
                                <div class="col-sm-12"> <span id="pass-length" class="glyphicon glyphicon-ok alert-neutral" aria-hidden="true"></span> Use 15 to 127 characters (at least 4 of which are unique) <br>
                                    <span id="pass-minwords" class="glyphicon glyphicon-ok alert-neutral" aria-hidden="true"></span> Use 4 or more non-repeating words (at least two characters in each)<br>
                                    <span id="pass-symbols" class="sr-only" aria-hidden="true"> <span class="glyphicon glyphicon-remove alert-danger"></span> Don't use any of the following  characters: &gt; &lt; " #  @ <br>
                                    </span> <span id="pass-name" class="sr-only" aria-hidden="true"><span class="glyphicon glyphicon-remove alert-danger"></span> Don't use your name or username <br>
                                    </span> </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pr_confirmnewpass" class="col-sm-4 control-label">Confirm New Passphrase</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" id="pr_confirmnewpass" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-8"> <a href="#" class="btn btn-primary">Reset Passphrase </a> <a href="passphrase-home.php" class="btn btn-default">Start Over </a> </div>
                    </div>
                </form>
            </div>
        </div>
        <div id="Questions3" class="desc" style="display: none;">
            <div class="col-md-12">
                <form class="form-horizontal">
                    <div class="form-group">
                            <div class="col-sm-4 control-label" style="padding-top:0px; font-weight:bold">Identify Yourself</div>
                        <div class="col-sm-8">
                            <p> In order to reset your passphrase, we need to verify your identity. Enter your last name, birth date, and 10 digit <a href="https://kb.iu.edu/d/amuh">University ID number</a>. </p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pr_lastname" class="col-sm-4 control-label">Last Name</label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control" id="pr_lastname" name="pr_lastname"  value="">
                        </div>
                    </div>
                    <div class="form-group lastname" id="lastname" style="display:none">
                        <div class="col-sm-4"></div>
                        <div class="col-sm-8"> Last name must not contain a space or a quote </div>
                    </div>
                    <div class="form-group">
                        <label for="birthdate" class="col-sm-4 control-label">Birthdate</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="birthdate" placeholder="mm/dd/yyyy">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="univID" class="col-sm-4 control-label">University ID</label>
                        <div class="col-sm-8">
                            <input class="form-control" id="univID" name="univID" type="text" placeholder="10 digits">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-8"> <a href="#" class="btn btn-primary">Continue </a> <a href="passphrase-home.php" class="btn btn-default">Start Over </a> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include ('includes/brand-footer.php') ?>
<?php include ('includes/footer-scripts.php') ?>
<script>

$(document).ready(function() {
    $("input[name$='douknow1']").click(function() {
        var test = $(this).val();

        $("div.desc").hide();
        $("#Questions" + test).show();
    });
});


</script> 
<script>

$( document ).ready(function() {
   $("#NewPassphrase").focusin(function() {
    $("#passreq").slideDown();
}).focusout(function () {
    $("#passreq").slideUp();
});
});


$(window).resize(function(){
    if ($(window).width() <= 992){  
       $('.form-control').on('focus', function() {
    document.body.scrollTop = $(this).offset().top;
});
    }   
}); 


</script> 
<script type="text/javascript">
            $(function () {
               $('#birthdate').datetimepicker({
				  viewMode: 'decades',
                 format: 'MM/DD/YYYY'
           });
            });
        </script> 
<script>

$( document ).ready(function() {
   $("#pr_lastname").focusin(function() {
    $(".lastname").slideDown();
}).focusout(function () {
    $(".lastname").slideUp();
});
});


</script>
</body>
</html>