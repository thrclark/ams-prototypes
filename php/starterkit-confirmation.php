<?php $page_title = "Home" ?>

<!DOCTYPE html>
<html lang="en-us">
<head>
<?php include ('includes/head-meta.php') ?>
<style type="text/css">
}
</style>
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
                    <!--  <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">User: thrclark </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Sign out</a> </li>
                            
                        </ul>
                    </li>-->
                </ul>
            </div>
        </div>
    </nav>
</header>
<div class="main-content container" role="main">
    <div id="main-content">
        <div class="page-title">
            <h2>Create an IU Account</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="well">
                    <p class="lead text-center" > <i class="icon-ok-circled2"></i> Your computing accounts have now been requested.</p>
                    <p> Carefully read and print or write down the account information below. Use the Print button at the bottom of the page to print this page. If you are unable to access any of your accounts after 24 hours, contact your campus <a href="https://kb.iu.edu/d/abxl" target="_blank">Support Center</a> or <a href="mailto:ithelp@iu.edu">Help Desk</a>. </p>
                    <p>Once activated, you can access your Microsoft Exchange email by logging on to <a href="https://www.exchange.iu.edu/" target="_blank">www.exchange.iu.edu</a>.</p>
                    <hr>
                    <p style="font-weight:bold"> Your Account Information:</p>
                    <ul>
                        <li> Your IU username is: thrclark</li>
                        <li> Your IU email is: thrclark@iu.edu</li>
                    </ul>
                    <p style="font-weight:bold"> Your registered passphrase questions are:</p>
                    <ul>
                        <li>Which phone number do you remember most from your childhood?</li>
                        <li> In what city were you born?</li>
                        <li> What is your father's middle name?</li>
                        <li> What is the name of your first grade teacher?</li>
                    </ul>
                    <hr>
                    <div class="col-md-12 text-right"> <a href="" class="btn btn-primary nextBtn" >Print this page</a> </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include ('includes/brand-footer.php') ?>
<?php include ('includes/footer-scripts.php') ?>
<script type="text/javascript">

  function checkForm(form)
  {
  

    // regular expression to match only alphanumeric characters and spaces
    var re = /^[\w ]+$/;

    // validation fails if the input doesn't match our regular expression
    if(!re.test(document.getElementById("lastname").value)) {
      alert("Error: Input contains invalid characters!");
      form.inputfield.focus();
      return false;
    }

    // validation was successful
    return true;
  }

</script> 
<script type='text/javascript'>//<![CDATA[
$(document).ready(function() {
var targetDate = new Date();
targetDate.setDate(targetDate.getDate() + 365);


function addZero(i) {
    if (i < 10) {
        i = "0" + i;
    }
    return i;
}



// So you can see the date we have created
//alert(targetDate);
var minutes = addZero(targetDate.getMinutes());
var hour = targetDate.getHours();
var dd = targetDate.getDate();
var mm = targetDate.getMonth() + 1; // 0 is January, so we must add 1
var yyyy = targetDate.getFullYear();

var dateString = mm + "/" + dd + "/" + yyyy + " at " + hour + ":" + minutes;

// So you can see the output
//alert(dateString);
$("#datetimepicker7").val(dateString);
 //document.getElementById('setstartdate').value = Date();
 
var startdate = new Date();
var minutes = addZero(startdate.getMinutes());
var hour = startdate.getHours();
var d = startdate.getDate();
var m =  startdate.getMonth();
m += 1;  // JavaScript months are 0-11
var y = startdate.getFullYear();

$("#setstartdate").val("1/6/2016 at 10:23");

$("#setnow").click(function() {
        $("#datetimepicker7").val(m + "/" + d + "/" + y + " at " + hour + ":" + minutes);
    })	


});//]]> 

</script> 
<script type='text/javascript'>//<![CDATA[
$(function(){
function checkWidth() {
    if ($(window).width() > 992) {
        $('#tab1-collapse').addClass('');
    } else {
        $('#tab1-collapse').removeClass('in');
    }
}

$(window).resize(checkWidth);

});//]]> 

</script> 
<script type="text/javascript">
    $(function () {
		$('#birthdate').datetimepicker({
			viewMode: 'decades',
			format: 'MM/DD/YYYY',
			defaultDate: "1/1/1990"
			});
        $('#datetimepicker6').datetimepicker({
			format: 'MM/DD/YYYY'
			});
        $('#datetimepicker7').datetimepicker({
			format: 'MM/DD/YYYY',
            useCurrent: false //Important! See issue #1075
        });
        $("#datetimepicker6").on("dp.change", function (e) {
            $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
        });
        $("#datetimepicker7").on("dp.change", function (e) {
            $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
        });
    });
</script>
</body>
</html>
