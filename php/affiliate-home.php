<?php $page_title = "Home" ?>

<!DOCTYPE html>
<html lang="en-us">
<head>
<?php include ('includes/head-meta.php') ?>
<?php include ('includes/styles.php') ?>
<style type="text/css">
.form-control.disabled[type="text"] {
	background-color: transparent;
	border-color: transparent;
	box-shadow: none;
	cursor: default;
}
legend {
	font-size: 16px;
}
</style>
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
                        <li class="hidden-xs">Affiliate Accounts</li>
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
                <h2 class="media-heading">Manage Affiliate Accounts</h2>
                
                <!--<div class="ratings hidden-xs hidden-sm"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-empty"></i> (7)</div>--> 
                <!--<div class="controls"><a href="#" class="btn btn-default favorite notice"> <i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i> <span class="sr-only">Favorite</span></a> <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#announcement_task"> <i class="icon-play-circled2"></i> <span class="">Start</span></a></div>--> 
            </div>
        </div>
        <p> Faculty and staff at IU can submit a request to add an IU affiliate. An affiliate is someone who is not an IU student or employee but is affiliated with the univeristy and needs access to university resources and computing systems. Some examples are: temporary employees, independent contractors, pharmocology students, Fort Wayne users and the IU Foundation.</p>
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-tabs nav-tabs-headers nav-tabs-responsive">
                    <li class="active"><a href="#tab1" data-toggle=tab>Request Affiliate Account</a></li>
                    <li><a href="#tab2" data-toggle=tab> View Affiliate Requests</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="tab1">
                        <div class="col-xs-12 col-sm-12 col-md-12 panel-main">
                            <h5>Request Affiliate Account</h5>
                            <div class="col-md-12">
                                <form class="form-horizontal">
                                    <fieldset>
                                        <legend>Your Information</legend>
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label"> Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control disabled" id="" value="Clark, Tom Robert" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label"> Email</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control disabled" id="" value="thrclark@iu.edu" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label"> Campus</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control disabled" id="" value="BL" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label"> Department</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control disabled" id="" value="UA-VPIT" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Phone</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="" value="">
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend>Affiliate Information</legend>
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">First Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="" value="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Middle Name <span class="label-sub">(optional)</span></label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="" value="" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Last Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="" value="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">University ID <span class="label-sub">(optional)</span></label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="" value="" placeholder="10 digits">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Gender</label>
                                            <div class="col-sm-9">
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">
                                                    Male </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">
                                                    Female </label>
                                                <span class="dropdown"> <a  href="#" class="btn btn-link dropdown-toggle" style="padding-bottom: 0px;" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="icon-info-circled-2"></i> </a>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                    <li><a href="https://kb.iu.edu/d/akll" target="_blank">Why is this required?</a></li>
                                                </ul>
                                                </span> </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Birthdate</label>
                                            <div class="col-sm-3">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="birthdate" value="" placeholder="mm/dd/yyyy">
                                                    <span class="input-group-btn"> <span class="dropdown"> <a  href="#" class="btn btn-link dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="icon-info-circled-2"></i> </a>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                        <li><a href="https://kb.iu.edu/d/akll" target="_blank">Why is this required?</a></li>
                                                    </ul>
                                                    </span> </span> </div>
                                                
                                                <!--
                                                <input type="text" class="form-control" id="birthdate" value="" placeholder="mm/dd/yyyy"/>
                                                
                                                 <a href="#"> <i class="icon-info-circled-2"></i></a>--> 
                                                
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Email</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="" value="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Phone</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="" value="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Campus</label>
                                            <div class="col-sm-9">
                                                <select name="" id="" class="form-control">
                                                    <option value=""> - Select Campus -</option>
                                                    <option value="BL">Bloomington</option>
                                                    <option value="EA">East</option>
                                                    <option value="IN">Indianapolis</option>
                                                    <option value="CO">IUPUC Columbus</option>
                                                    <option value="FW">Fortwayne</option>
                                                    <option value="KO">Kokomo</option>
                                                    <option value="NW">Northwest</option>
                                                    <option value="SB">South Bend</option>
                                                    <option value="SE">Southeast</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Department</label>
                                            <div class="col-sm-9">
                                                <select name="" id="" class="form-control">
                                                    <option value=""> - Select Department - </option>
                                                    <option value="AF-IUF">AF-IUF-IU Foundation</option>
                                                    <option value="AF-IURTC">AF-IURTC-IURTC</option>
                                                    <option value="BA-ADDR">BA-ADDR-ADDRESSING SERVICES</option>
                                                    <option value="BA-ATHL">BA-ATHL-ATHLETICS</option>
                                                    <option value="BA-AUTM">BA-AUTM-AUDITORIUM</option>
                                                    <option value="BA-AXOP">BA-AXOP-AUXILIARY OPERATIONS</option>
                                                    <option value="BA-BKST">BA-BKST-DOCUMENT SERVICE CENTERS</option>
                                                    <option value="BA-BRAD">BA-BRAD-BRADFORD WOODS</option>
                                                    <option value="BA-BUSS">BA-BUSS-CAMPUS BUS</option>
                                                    <option value="BA-CHPK">BA-CHPK-PARKING SERVICES</option>
                                                    <option value="BA-CONF">BA-CONF-CONFERENCE CENTER</option>
                                                    <option value="BA-HALL">BA-HALL-RPAS HALLS OF RESIDENCE</option>
                                                    <option value="BA-IDS">BA-IDS-INDIANA DAILY STUDENT</option>
                                                    <option value="BA-IMAU">BA-IMAU-INDIANA MEMORIAL UNION</option>
                                                    <option value="BA-IMUC">BA-IMUC-IMU CONSOLIDATED</option>
                                                    <option value="BA-IUHC">BA-IUHC-IU HEALTH CENTER</option>
                                                    <option value="BA-IUPR">BA-IUPR-INDIANA UNIVERSITY PRESS</option>
                                                    <option value="BA-MOTR">BA-MOTR-MOTOR POOL</option>
                                                    <option value="BA-PARK">BA-PARK-PARKING SERVICES</option>
                                                    <option value="BA-PUBL">BA-PUBL-PUBLICATIONS</option>
                                                    <option value="BA-RECV">BA-RECV-WAREHOUSE AND RECEIVING</option>
                                                    <option value="BA-RPAS">BA-RPAS-RESIDENTIAL PROGRAMS &amp; SERV</option>
                                                    <option value="BA-SURP">BA-SURP-SURPLUS</option>
                                                    <option value="BA-TENN">BA-TENN-TENNIS CENTER</option>
                                                    <option value="BA-TRAN">BA-TRAN-TRANSPORTATION</option>
                                                    <option value="BL-A&amp;H">BL-A&amp;H-ARTS AND HUMANITIES DIVISION</option>
                                                    <option value="BL-AAAI">BL-AAAI-AFRICAN-AMERICAN ARTS INST</option>
                                                    <option value="BL-AAAM">BL-AAAM-ARCHIVES OF AFRICAN AMER MUSIC</option>
                                                    <option value="BL-AACC">BL-AACC-AFRICAN AMERICAN CULTURE CTR</option>
                                                    <option value="BL-AADM">BL-AADM-ARTS ADMINISTRATION UNDERGRAD</option>
                                                    <option value="BL-AASP">BL-AASP-ATHLETICS ACADEMIC SUPPORT PRG</option>
                                                    <option value="BL-ACC">BL-ACC-ACADEMIC COMPUTING</option>
                                                    <option value="BL-ACQU">BL-ACQU-ACQUISITIONS</option>
                                                    <option value="BL-ACSP">BL-ACSP-ACADEMIC SUPPORT-ASDV</option>
                                                    <option value="BL-ACTG">BL-ACTG-SCHOOL OF BUSINESS ACCOUNTING </option>
                                                    <option value="BL-ACTR">BL-ACTR-ANTH CTR TRNG GLOB/ENVIRO CHG</option>
                                                    <option value="BL-ADBS">BL-ADBS-ADMIN &amp; BEHAVIORAL STUDIES</option>
                                                    <option value="BL-ADMS">BL-ADMS-ADMISSIONS ORG</option>
                                                    <option value="BL-ADST">BL-ADST-INSTITUTE FOR ADVANCED STUDIES</option>
                                                    <option value="BL-AERO">BL-AERO-AEROSPACE STUDIES</option>
                                                    <option value="BL-AFFA">BL-AFFA-AFFIRMATIVE ACTION</option>
                                                    <option value="BL-AFRI">BL-AFRI-AFRICAN STUDIES</option>
                                                    <option value="BL-AFRO">BL-AFRO-AFRO-AMERICAN STUDIES</option>
                                                    <option value="BL-AFS">BL-AFS-AMERICAN FOLKLORE SOCIETY</option>
                                                    <option value="BL-AGP">BL-AGP-ACCOUNTING GRADUATE PROGRAM</option>
                                                    <option value="BL-AHRV">BL-AHRV-AMERICAN HISTORICAL REVIEW</option>
                                                    <option value="BL-AIND">BL-AIND-AMER INDIAN STUDIES RES INST</option>
                                                    <option value="BL-ALPG">BL-ALPG-ALUMNI PROGRAMS</option>
                                                    <option value="BL-ALRC">BL-ALRC-AFRICAN LANGUAGE RESOURCE CTR</option>
                                                    <option value="BL-AMID">BL-AMID-APPAREL MERCHANDISE-INTER DESG</option>
                                                    <option value="BL-AMST">BL-AMST-AMERICAN STUDIES</option>
                                                    <option value="BL-AMUS">BL-AMUS-ART MUSEUM</option>
                                                    <option value="BL-ANAT">BL-ANAT-ANATOMY</option>
                                                    <option value="BL-ANPH">BL-ANPH-ANATOMY &amp; PHYSIOLOGY</option>
                                                    <option value="BL-ANTH">BL-ANTH-ANTHROPOLOGY</option>
                                                    <option value="BL-APHS">BL-APHS-APPLIED HEALTH SCIENCE</option>
                                                    <option value="BL-ARAC">BL-ARAC-AEROSPACE RESEARCH APPLICATION</option>
                                                    <option value="BL-ARCH">BL-ARCH-ARCHAEOLOGY</option>
                                                    <option value="BL-AREA">BL-AREA-AREA STUDIES</option>
                                                    <option value="BL-ARIS">BL-ARIS-AREA AND INTERNATIONAL STUDIES</option>
                                                    <option value="BL-ARS">BL-ARS-ENROLLMENT PLANNING &amp; RESEARCH</option>
                                                    <option value="BL-ARSC">BL-ARSC-ARTS &amp; SCIENCES</option>
                                                    <option value="BL-ARSD">BL-ARSD-ARTS &amp; SCIENCES; DEAN</option>
                                                    <option value="BL-ARTS">BL-ARTS-ARTS ADMINISTRATION PROGRAM</option>
                                                    <option value="BL-ARVM">BL-ARVM-ARCHIVES OF TRADITIONAL MUSIC</option>
                                                    <option value="BL-ASAM">BL-ASAM-ASIAN AMERICAN STUDIES CENTER</option>
                                                    <option value="BL-ASBE">BL-ASBE-ADMIN SYS &amp; BUSINESS</option>
                                                    <option value="BL-ASDV">BL-ASDV-OFC ACAD SUPPORT &amp; DIVERSITY</option>
                                                    <option value="BL-ASIA">BL-ASIA-ASIAN AMERICAN ASSOCIATION</option>
                                                    <option value="BL-ASR">BL-ASR-ADULT STUDENT RESOURCES</option>
                                                    <option value="BL-AST">BL-AST-ASTRONOMY</option>
                                                    <option value="BL-AUDO">BL-AUDO-AUDIO</option>
                                                    <option value="BL-AUVS">BL-AUVS-AUDIO VISUAL</option>
                                                    <option value="BL-AXSV">BL-AXSV-ADMINISTRATIVE SERVICES &amp; PRGS</option>
                                                    <option value="BL-BAI">BL-BAI-BUSINESS ANALYTICS INSTITUTE</option>
                                                    <option value="BL-BAP">BL-BAP-BUDGETARY ADMINISTRATION-PLNG</option>
                                                    <option value="BL-BCEI">BL-BCEI-JOHNSON CTR ENTREPRE &amp; INNOV</option>
                                                    <option value="BL-BCLB">BL-BCLB-BLACK CULTURE CTR LIBRARY</option>
                                                    <option value="BL-BCMI">BL-BCMI-BIOCOMPLEXITY INSTITUTE</option>
                                                    <option value="BL-BCOM">BL-BCOM-BUSINESS COMMUNICATION</option>
                                                    <option value="BL-BCOR">BL-BCOR-BORISH CTR FOR OPHTHALMIC RES</option>
                                                    <option value="BL-BEPP">BL-BEPP-SCHOOL OF BUSINESS ECONOMICS &amp;</option>
                                                    <option value="BL-BEST">BL-BEST-BLGTN EVALUATION SERV &amp; TESTIN</option>
                                                    <option value="BL-BFC">BL-BFC-BLACK FILM CENTER</option>
                                                    <option value="BL-BFIN">BL-BFIN-SCHOOL OF BUSINESS FINANCE DEP</option>
                                                    <option value="BL-BI">BL-BI-BIOLOGY</option>
                                                    <option value="BL-BILI">BL-BILI-INST FOR BIBLICAL &amp; LITERARY</option>
                                                    <option value="BL-BIOC">BL-BIOC-BIOCHEMISTRY</option>
                                                    <option value="BL-BIOT">BL-BIOT-BIOTECHNOLOGY PROGRAM</option>
                                                    <option value="BL-BL">BL-BL-BLOOMINGTON CAMPUS</option>
                                                    <option value="BL-BLAN">BL-BLAN-DEPT OF BUSINESS LAW &amp; ETHICS</option>
                                                    <option value="BL-BLIB">BL-BLIB-LIFE SCIENCES LIBRARY</option>
                                                    <option value="BL-BLKC">BL-BLKC-BLACK CULTURE CENTER</option>
                                                    <option value="BL-BLLT">BL-BLLT-BALLET</option>
                                                    <option value="BL-BOT">BL-BOT-BOTANY</option>
                                                    <option value="BL-BRSS">BL-BRSS-BRASS</option>
                                                    <option value="BL-BSCI">BL-BSCI-BIOLOGICAL SCIENCES</option>
                                                    <option value="BL-BSSP">BL-BSSP-BUDGET/STUDENT SUPPORT</option>
                                                    <option value="BL-BSSR">BL-BSSR-BUREAU FOR SOCIAL SCIENCE RES</option>
                                                    <option value="BL-BUDG">BL-BUDG-BUDGET &amp; FISCAL AFFAIRS</option>
                                                    <option value="BL-BUEE">BL-BUEE-BUSINESS EXECUTIVE EDUCATION</option>
                                                    <option value="BL-BURE">BL-BURE-SCHOOL OF BUSINESS REAL ESTATE</option>
                                                    <option value="BL-BURS">BL-BURS-BURSAR OFFICE</option>
                                                    <option value="BL-BUS">BL-BUS-BUSINESS</option>
                                                    <option value="BL-BUS">BL-BUS-KELLEY SCHOOL OF BUSINESS</option>
                                                    <option value="BL-BUSA">BL-BUSA-BUSINESS ADMINISTRATION</option>
                                                    <option value="BL-BUSP">BL-BUSP-BUSINESS/SPEA LIBRARY</option>
                                                    <option value="BL-CAAA">BL-CAAA-CENTER ON AGING AND AGED</option>
                                                    <option value="BL-CACE">BL-CACE-CAREER CENTER</option>
                                                    <option value="BL-CACL">BL-CACL-LAW CHILD ADVOCACY CLINIC</option>
                                                    <option value="BL-CAFS">BL-CAFS-CUSTOMER SERVICES</option>
                                                    <option value="BL-CAGS">BL-CAGS-CTR FOR AMER &amp; GLOBAL SECURITY</option>
                                                    <option value="BL-CAGU">BL-CAGU-CAREER GUIDANCE CENTER</option>
                                                    <option value="BL-CAHI">BL-CAHI-COLLEGE ARTS &amp; HUMANITIES INST</option>
                                                    <option value="BL-CARL">BL-CARL-CARRILLON</option>
                                                    <option value="BL-CBGS">BL-CBGS-COLLEGE LIBERAL STUDIES</option>
                                                    <option value="BL-CBLS">BL-CBLS-CENTER BUSINESS LIFE SCIENCES</option>
                                                    <option value="BL-CBRC">BL-CBRC-CTR FOR BIOLOGICAL RESEARCH CO</option>
                                                    <option value="BL-CCCS">BL-CCCS-CAMPUS CHILD CARE SUPPORT</option>
                                                    <option value="BL-CCCT">BL-CCCT-CAMPUS CHILDREN'S CENTER</option>
                                                    <option value="BL-CCM">BL-CCM-COLLEGE COMMUNICATIONS &amp; MARKE</option>
                                                    <option value="BL-CCOG">BL-CCOG-COG SCI NEW FRONTIER-COSC</option>
                                                    <option value="BL-CCSI">BL-CCSI-COMP SCI-COGNITIVE SCI FRONTIE</option>
                                                    <option value="BL-CDCT">BL-CDCT-CAREER DEVELOPMENT CENTER</option>
                                                    <option value="BL-CEDP">BL-CEDP-COUNSELING &amp; EDUCATIONAL PSY</option>
                                                    <option value="BL-CEEM">BL-CEEM-CNTR FOR EXPLOR OF EN &amp; MATTER</option>
                                                    <option value="BL-CEEP">BL-CEEP-EVALUATION &amp; EDUCATION POLICY</option>
                                                    <option value="BL-CELA">BL-CELA-COORDINATOR ENGLISH LANG ARTS</option>
                                                    <option value="BL-CEPC">BL-CEPC-COMM EMERGENCY PREPAREDNESS</option>
                                                    <option value="BL-CEUS">BL-CEUS-CENTRAL EURASIAN STUDIES</option>
                                                    <option value="BL-CFAS">BL-CFAS-CTR ADOLESCENT &amp; FAMILY STUDIE</option>
                                                    <option value="BL-CFEE">BL-CFEE-CENTER FOR EXCELLENCE IN EDUC</option>
                                                    <option value="BL-CFLT">BL-CFLT-CTR FOR LEARNING &amp; TECHNOLOGY</option>
                                                    <option value="BL-CGBI">BL-CGBI-GENOMICS AND BIOINFORMATICS</option>
                                                    <option value="BL-CGC">BL-CGC-CTR FOR STUDY OF GLOBAL CHANGE</option>
                                                    <option value="BL-CGEB">BL-CGEB-GENOMICS &amp; BIOINFORMATICS</option>
                                                    <option value="BL-CHEM">BL-CHEM-CHEMISTRY</option>
                                                    <option value="BL-CHER">BL-CHER-INT'L CENTER FOR HOME EDUCATIO</option>
                                                    <option value="BL-CHIC">BL-CHIC-CHICANO-RIQUENO STUDIES</option>
                                                    <option value="BL-CHMA">BL-CHMA-CTR ON HISTORY MAKING IN AMER</option>
                                                    <option value="BL-CHML">BL-CHML-CHEMISTRY LIBRARY</option>
                                                    <option value="BL-CIA">BL-CIA-CTR-INNOVATION IN ASSESSMENT</option>
                                                    <option value="BL-CIMS">BL-CIMS-CINEMA &amp; MEDIA STUDIES</option>
                                                    <option value="BL-CIND">BL-CIND-AMER INDIAN STUDIES RES INST</option>
                                                    <option value="BL-CINE">BL-CINE-CINEMA</option>
                                                    <option value="BL-CINF">BL-CINF-INFORMATICS-COGNITIVE SCI</option>
                                                    <option value="BL-CISA">BL-CISA-CISAB-COGNITIVE SCI FRONTIER</option>
                                                    <option value="BL-CISO">BL-CISO-COMMUNICATION &amp; INSTRUCTIONAL</option>
                                                    <option value="BL-CITL">BL-CITL-CTR FOR INNOVATIVE TCH &amp; LRNG</option>
                                                    <option value="BL-CLAC">BL-CLAC-CTR-LATIN AMERICAN &amp; CARIBBEAN</option>
                                                    <option value="BL-CLAR">BL-CLAR-CLASSICAL ARCHAEOLOGY</option>
                                                    <option value="BL-CLAS">BL-CLAS-CLASSICAL STUDIES</option>
                                                    <option value="BL-CLE">BL-CLE-CENTER FOR LANGUAGE EXCELLENCE</option>
                                                    <option value="BL-CLST">BL-CLST-CULTURAL STUDIES</option>
                                                    <option value="BL-CLTI">BL-CLTI-LANGUAGE TECH-INSTRUCTIONAL</option>
                                                    <option value="BL-CMB">BL-CMB-CENTER FOR MATTER AND BEAMS</option>
                                                    <option value="BL-CMCL">BL-CMCL-COMMUNICATION &amp; CULTURE</option>
                                                    <option value="BL-CME">BL-CME-CTR FOR MATHEMATICS EDUCATION</option>
                                                    <option value="BL-CMLT">BL-CMLT-COMPARATIVE LITERATURE</option>
                                                    <option value="BL-CMPS">BL-CMPS-COMPOSITION</option>
                                                    <option value="BL-COGS">BL-COGS-COGNITIVE SCIENCES</option>
                                                    <option value="BL-COHI">BL-COHI-STUDY OF HISTORY &amp; MEMORY</option>
                                                    <option value="BL-COLP">BL-COLP-COLLEGE PROFESSORS-COLLEGE</option>
                                                    <option value="BL-COMM">BL-COMM-IN INSTITUTE ON DISABILITY &amp; C</option>
                                                    <option value="BL-COMS">BL-COMS-COMMUNICATION SCIENCE</option>
                                                    <option value="BL-CONF">BL-CONF-CONFERENCE CENTER</option>
                                                    <option value="BL-CONG">BL-CONG-CENTER ON REPRESENTATIVE GOVER</option>
                                                    <option value="BL-CORG">BL-CORG-CENTER ON REPRESENTATIVE GOVER</option>
                                                    <option value="BL-CPCS">BL-CPCS-COMM, PROF, AND COMPUTER SKILL</option>
                                                    <option value="BL-CPEC">BL-CPEC-CTR STDY-INST POPL&amp;ENV CHANGE</option>
                                                    <option value="BL-CPR">BL-CPR-CENTER FOR POSTSECONDARY RESEA</option>
                                                    <option value="BL-CPSC">BL-CPSC-COUNSELING &amp; PSYCHOLOGICAL SER</option>
                                                    <option value="BL-CPY">BL-CPY-PSYCH COGNITIVE SCI FRONTIER</option>
                                                    <option value="BL-CRCC">BL-CRCC-CTR RES CONCEPTS &amp; COGNITION</option>
                                                    <option value="BL-CRED">BL-CRED-COMMITTEE R&amp;D LANGUAGE EDUC</option>
                                                    <option value="BL-CRFT">BL-CRFT-CTR FOR RES-ANTH FNDTNS TECH</option>
                                                    <option value="BL-CRIM">BL-CRIM-CRIMINAL JUSTICE</option>
                                                    <option value="BL-CRIN">BL-CRIN-CURRICULUM &amp; INSTRUCTION</option>
                                                    <option value="BL-CRRI">BL-CRRI-COLLEGE READINESS &amp; REGIONAL I</option>
                                                    <option value="BL-CSC">BL-CSC-CTR FOR THE STUDY OF CONGRESS</option>
                                                    <option value="BL-CSCI">BL-CSCI-COMPUTER SCIENCE</option>
                                                    <option value="BL-CSLI">BL-CSLI-SLIS-COGNITIVE SCIENCE</option>
                                                    <option value="BL-CSMA">BL-CSMA-COORDINATOR FOR SCHOOL-MATH</option>
                                                    <option value="BL-CSPH">BL-CSPH-SPEECH HEARING-COGNITIVE SCI</option>
                                                    <option value="BL-CSSC">BL-CSSC-COORDINATOR FOR SCHOOL-SCIENCE</option>
                                                    <option value="BL-CSST">BL-CSST-COORDINATOR-SOCIAL STUDIES</option>
                                                    <option value="BL-CTED">BL-CTED-LIFELONG LEARNING</option>
                                                    <option value="BL-CTSD">BL-CTSD-CONTINUING STUDIES, DIV OF</option>
                                                    <option value="BL-CVCC">BL-CVCC-CAMPUS VIEW CHILD CARE CTR</option>
                                                    <option value="BL-CYBS">BL-CYBS-CYBERSECURITY</option>
                                                    <option value="BL-DABL">BL-DABL-DISABILITY SERVICES FOR STUDEN</option>
                                                    <option value="BL-DCIS">BL-DCIS-DECISION &amp; INFORMATION SYSTEMS</option>
                                                    <option value="BL-DECO">BL-DECO-ECONOMICS-STATISTICS</option>
                                                    <option value="BL-DEHP">BL-DEHP-DEAN'S OFC., HPER</option>
                                                    <option value="BL-DEVS">BL-DEVS-INSTITUTE FOR DEVELOPMENT STRA</option>
                                                    <option value="BL-DFAC">BL-DFAC-UNDERGRADUATE EDUCATION</option>
                                                    <option value="BL-DIVA">BL-DIVA-SOIC DIVISION A</option>
                                                    <option value="BL-DIVB">BL-DIVB-SOIC DIVISION B</option>
                                                    <option value="BL-DIVC">BL-DIVC-SOIC DIVISION C</option>
                                                    <option value="BL-DIVU">BL-DIVU-SOIC DIVISION U</option>
                                                    <option value="BL-DMAT">BL-DMAT-MATH-STATISTICS</option>
                                                    <option value="BL-DMOT">BL-DMOT-INFORMATION SERV &amp; TECHN/MED</option>
                                                    <option value="BL-DOPR">BL-DOPR-DOCTORAL PROGRAMS - BUSINESS</option>
                                                    <option value="BL-DPOL">BL-DPOL-POLITICAL SCIENCE-STATISTICS</option>
                                                    <option value="BL-DPSY">BL-DPSY-PSYCHOLOGY-STATISTICS</option>
                                                    <option value="BL-DSOC">BL-DSOC-SOCIOLOGY-STATISTICS</option>
                                                    <option value="BL-DSTA">BL-DSTA-DEPARTMENT OF STATISTICS</option>
                                                    <option value="BL-DVTC">BL-DVTC-DEVELOP TRAINING CTR</option>
                                                    <option value="BL-EADM">BL-EADM-EDUCATION ADMINISTRATION</option>
                                                    <option value="BL-EALC">BL-EALC-EAST ASIAN LANGS &amp; CULTURES</option>
                                                    <option value="BL-EASC">BL-EASC-EAST ASIAN STUDIES CENTER</option>
                                                    <option value="BL-EASL">BL-EASL-EAST ASIAN SUMMER LANG INST</option>
                                                    <option value="BL-EBIO">BL-EBIO-EPIDEMIOLOGY AND BIOSTATISTICS</option>
                                                    <option value="BL-ECMR">BL-ECMR-INDIANA CENTER FOR ECONOMETRIC</option>
                                                    <option value="BL-ECON">BL-ECON-ECONOMICS</option>
                                                    <option value="BL-ECSC">BL-ECSC-ENGLISH CURRICULUM STUDY CTR</option>
                                                    <option value="BL-EDL">BL-EDL-EDUCATION LIBRARY</option>
                                                    <option value="BL-EDUC">BL-EDUC-EDUCATION</option>
                                                    <option value="BL-EDUD">BL-EDUD-EDUCATION, DIVISION OF</option>
                                                    <option value="BL-ELPS">BL-ELPS-LEADERSHIP &amp; POLICY STUDIES</option>
                                                    <option value="BL-EMAS">BL-EMAS-EXECUTIVE MANAGEMENT/ACADEMIC </option>
                                                    <option value="BL-EMER">BL-EMER-EMERGENCY MEDICINE</option>
                                                    <option value="BL-EMI">BL-EMI-EARLY MUSIC INSTITUTE</option>
                                                    <option value="BL-ENG">BL-ENG-ENGLISH</option>
                                                    <option value="BL-ENSE">BL-ENSE-OFFICE ENROLLMENT MANAGEMENT</option>
                                                    <option value="BL-ENVR">BL-ENVR-ENVIRONMENTAL HEALTH</option>
                                                    <option value="BL-ERIC">BL-ERIC-ERIC CLEARINGHOUSE IN SOCIAL S</option>
                                                    <option value="BL-ETEC">BL-ETEC-EDUCATIONAL TECHNICAL SUPPORT</option>
                                                    <option value="BL-EUCE">BL-EUCE-EUROPEAN CENTER FOR EXCELLENCE</option>
                                                    <option value="BL-EVAL">BL-EVAL-EVALUATION SERVICES &amp; TESTING</option>
                                                    <option value="BL-EXEC">BL-EXEC-EXECUTIVE MANAGEMENT</option>
                                                    <option value="BL-EXP">BL-EXP-PRE-COLLEGE PROGRAMS</option>
                                                    <option value="BL-FADB">BL-FADB-FINANCIAL AID-DEAN STUDENT</option>
                                                    <option value="BL-FAL">BL-FAL-FINE ARTS LIBRARY</option>
                                                    <option value="BL-FAMM">BL-FAMM-FAMILY MEDICINE</option>
                                                    <option value="BL-FILL">BL-FILL-FOSTER INTL LIVING/LRNING CTR</option>
                                                    <option value="BL-FILM">BL-FILM-FILM STUDIES</option>
                                                    <option value="BL-FINA">BL-FINA-HOPE SCHOOL OF FINE ARTS</option>
                                                    <option value="BL-FINH">BL-FINH-FINE ARTS - HISTORY</option>
                                                    <option value="BL-FINS">BL-FINS-FINE ARTS STUDIO</option>
                                                    <option value="BL-FOA">BL-FOA-FRIENDS OF ART BOOKSHOP</option>
                                                    <option value="BL-FOED">BL-FOED-FORUM ON EDUCATION</option>
                                                    <option value="BL-FOLK">BL-FOLK-DEPT FOLKLORE/ETHNOMUSICOLOGY</option>
                                                    <option value="BL-FORN">BL-FORN-FOREIGN LANGUAGES</option>
                                                    <option value="BL-FRIT">BL-FRIT-FRENCH AND ITALIAN</option>
                                                    <option value="BL-GANT">BL-GANT-ANTHROPOLOGY-GRADUATE RECRUITM</option>
                                                    <option value="BL-GBI">BL-GBI-BIOLOGY-GRADUATE RECRUITMENT</option>
                                                    <option value="BL-GBLK">BL-GBLK-GLENN BLACK LAB OF ARCHAEOLOGY</option>
                                                    <option value="BL-GELB">BL-GELB-GEOLOGY LIBRARY</option>
                                                    <option value="BL-GENG">BL-GENG-ENGLISH-GRADUATE RECRUITMENT</option>
                                                    <option value="BL-GENS">BL-GENS-GENERAL STUDIES</option>
                                                    <option value="BL-GEOG">BL-GEOG-GEOGRAPHY</option>
                                                    <option value="BL-GEOL">BL-GEOL-GEOLOGICAL SCIENCES</option>
                                                    <option value="BL-GEOY">BL-GEOY-GEOLOGICAL SURVEY</option>
                                                    <option value="BL-GERM">BL-GERM-GERMANIC STUDIES</option>
                                                    <option value="BL-GFIS">BL-GFIS-FINE ARTS STUDIO-GRAD RECRUITM</option>
                                                    <option value="BL-GHIS">BL-GHIS-HISTORY-GRADUATE RECRUITMENT</option>
                                                    <option value="BL-GILL">BL-GILL-GILL CENTER</option>
                                                    <option value="BL-GLBT">BL-GLBT-GLBT STUDENT SUPPORT SERVICES</option>
                                                    <option value="BL-GLIB">BL-GLIB-GRADUATE LIBRARY SCHOOL</option>
                                                    <option value="BL-GLLC">BL-GLLC-GLOBAL VILLAGE LIVING LRNG CTR</option>
                                                    <option value="BL-GLPR">BL-GLPR-GLOBAL PROGRAMS</option>
                                                    <option value="BL-GMAP">BL-GMAP-GEOGRAPHY &amp; MAP LIBRARY</option>
                                                    <option value="BL-GNDR">BL-GNDR-GENDER STUDIES</option>
                                                    <option value="BL-GOVP">BL-GOVP-LIBRARY, GOVRNMNT PUBLICATIONS</option>
                                                    <option value="BL-GPL">BL-GPL-PHILOSOPHY-GRADUATE RECRUITMEN</option>
                                                    <option value="BL-GPOL">BL-GPOL-POLITICAL SCIENCE-GRAD RECRUIT</option>
                                                    <option value="BL-GPSY">BL-GPSY-PSYCHOLOGY-GRAD RECRUITMENT</option>
                                                    <option value="BL-GPUB">BL-GPUB-GOVERNMENT PUBLICATIONS</option>
                                                    <option value="BL-GRAD">BL-GRAD-GRADUATE SCHOOL</option>
                                                    <option value="BL-GRPS">BL-GRPS-GROUPS STUDENT SUPPORT SERVICE</option>
                                                    <option value="BL-GRST">BL-GRST-GERMAN STUDIES</option>
                                                    <option value="BL-GSUP">BL-GSUP-COMPETITIVE GRADUATE RECRUITME</option>
                                                    <option value="BL-HANT">BL-HANT-ANTHROPOLOGY-HUMAN BIOLOGY</option>
                                                    <option value="BL-HARP">BL-HARP-HARP</option>
                                                    <option value="BL-HART">BL-HART-HISTORY OF ART PROGRAM</option>
                                                    <option value="BL-HAZD">BL-HAZD-HAZARD CONTROL PROGRAM</option>
                                                    <option value="BL-HBI">BL-HBI-BIOLOGY-HUMAN BIOLOGY</option>
                                                    <option value="BL-HBIC">BL-HBIC-BIO-CHEMISTRY -- HUMAN BIOLOGY</option>
                                                    <option value="BL-HBIO">BL-HBIO-HUMAN BIOLOGY PROGRAM</option>
                                                    <option value="BL-HBUS">BL-HBUS-SCHOOL OF BUS--HUMAN BIOLOGY</option>
                                                    <option value="BL-HCHE">BL-HCHE-CHEMISTRY - HUMAN BIOLOGY</option>
                                                    <option value="BL-HCNS">BL-HCNS-HOOSIER COURT NURSERY SCHOOL</option>
                                                    <option value="BL-HFLG">BL-HFLG-HONORS PROGRAM IN FOREIGN LANG</option>
                                                    <option value="BL-HGRO">BL-HGRO-CENTER FOR HUMAN GROWTH</option>
                                                    <option value="BL-HHON">BL-HHON-HUTTON HONORS COLLEGE</option>
                                                    <option value="BL-HIST">BL-HIST-HISTORY</option>
                                                    <option value="BL-HLAW">BL-HLAW-LAW SCHOOL -- HUMAN BIOLOGY</option>
                                                    <option value="BL-HMED">BL-HMED-INST FOR STUDY OF HIST OF MED</option>
                                                    <option value="BL-HONR">BL-HONR-HUTTON HONORS COLLEGE</option>
                                                    <option value="BL-HOPT">BL-HOPT-OPTOMETRY -- HUMAN BIOLOGY</option>
                                                    <option value="BL-HOWE">BL-HOWE-HOWELL'S EDITION</option>
                                                    <option value="BL-HPER">BL-HPER-SCHOOL OF PUBLIC HEALTH-IUB</option>
                                                    <option value="BL-HPPL">BL-HPPL-HEALTH PROFESSIONS &amp; PRELAW CE</option>
                                                    <option value="BL-HPSC">BL-HPSC-HISTORY &amp; PHILOSOPHY OF SCI</option>
                                                    <option value="BL-HPSY">BL-HPSY-PSYCHOLOGY-HUMAN BIOLOGY</option>
                                                    <option value="BL-HREL">BL-HREL-RELIGIOUS STUDIES-HUMAN BIOLOG</option>
                                                    <option value="BL-HRLS">BL-HRLS-LIBRARY-HALLS OF RESIDENCE</option>
                                                    <option value="BL-HSED">BL-HSED-HEALTH AND SAFETY EDUCATION</option>
                                                    <option value="BL-HSJI">BL-HSJI-HIGH SCHOOL JOURNALISM INST</option>
                                                    <option value="BL-HSPH">BL-HSPH-SPEECH HEARING-HUMAN BIOLOGY</option>
                                                    <option value="BL-HSS">BL-HSS-HEALTH AND SAFETY SERVICES</option>
                                                    <option value="BL-HSSL">BL-HSSL-HUMANITIES &amp; SOC SCIENCE LIB</option>
                                                    <option value="BL-HUSO">BL-HUSO-HUMANITIES AND SOCIAL SCIENCES</option>
                                                    <option value="BL-IAAU">BL-IAAU-INNER ASIAN URALIC NATL RES CT</option>
                                                    <option value="BL-IBRC">BL-IBRC-INDIANA BUSINESS RESEARCH CENT</option>
                                                    <option value="BL-ICE">BL-ICE-INDIANA CENTER FOR EVALUATION</option>
                                                    <option value="BL-ICMH">BL-ICMH-IND CONSORTMENTAL HLTH SVC RES</option>
                                                    <option value="BL-ICS">BL-ICS-INSTITUTE FOR CHILD STUDY</option>
                                                    <option value="BL-IDAP">BL-IDAP-INST FOR DRUG ABUSE PREVENTION</option>
                                                    <option value="BL-IDI">BL-IDI-INTERNATIONAL DEVELOPMENT INST</option>
                                                    <option value="BL-IDRC">BL-IDRC-INTERNATIONAL DEVELOPMENT RESE</option>
                                                    <option value="BL-IEPC">BL-IEPC-INDIANA EDUCATION POLICY CTR</option>
                                                    <option value="BL-IES">BL-IES-INTERDISCIPL ENVIRONMENTA SCI</option>
                                                    <option value="BL-IGOE">BL-IGOE-INST GLOBAL ORG EFFECTIVENESS</option>
                                                    <option value="BL-IIB">BL-IIB-INSTITUTE FOR INT'L BUSINESS</option>
                                                    <option value="BL-IIDC">BL-IIDC-IND INST ON DISABILITY/COMMNTY</option>
                                                    <option value="BL-IIT">BL-IIT-INSTRUCTIONAL &amp; INFOTECH</option>
                                                    <option value="BL-IMAG">BL-IMAG-INDIANA MAGAZINE OF HISTORY</option>
                                                    <option value="BL-IMBI">BL-IMBI-INDIANA MOLECULAR BI INST</option>
                                                    <option value="BL-IMUS">BL-IMUS-UNDIANA UNIVERSITY MUSEUM</option>
                                                    <option value="BL-INAD">BL-INAD-SOIC ADMINISTRATION</option>
                                                    <option value="BL-INCD">BL-INCD-INSTRUMENTAL CONDUCTING</option>
                                                    <option value="BL-INDI">BL-INDI-INDIA STUDIES</option>
                                                    <option value="BL-INFI">BL-INFI-DEPARTMENT OF INFORMATICS</option>
                                                    <option value="BL-INFO">BL-INFO-SCHOOL OF INFORMATICS AND COMP</option>
                                                    <option value="BL-INMP">BL-INMP-INDIVIDUALIZED MAJOR PROGRAM</option>
                                                    <option value="BL-INOR">BL-INOR-LIBRARY - INSTRUCTION AND ORIE</option>
                                                    <option value="BL-INRE">BL-INRE-INSURANCE &amp; REAL ESTATE</option>
                                                    <option value="BL-INSR">BL-INSR-INSURANCE-BUSINESS</option>
                                                    <option value="BL-INTB">BL-INTB-INTERNATIONAL BUSINESS, BUSINE</option>
                                                    <option value="BL-INTP">BL-INTP-INTERNATIONAL ADMISSIONS</option>
                                                    <option value="BL-IOCM">BL-IOCM-LIBRARY, IO CATALOG MANAGEMENT</option>
                                                    <option value="BL-IPBU">BL-IPBU-INTERNATIONAL PROGRAMS, BUSINE</option>
                                                    <option value="BL-IRLP">BL-IRLP-INDUSTRIAL RES LIAISON PROGRAM</option>
                                                    <option value="BL-IS">BL-IS-BUSINESS INFORMATION SYSTEMS</option>
                                                    <option value="BL-ISAB">BL-ISAB-CTR FOR INTEGR STDY OF ANIM BE</option>
                                                    <option value="BL-ISE">BL-ISE-INTELLIGENT SYSTEMS ENGINEERIN</option>
                                                    <option value="BL-ISHC">BL-ISHC-INST-STUDY/HUMAN CAPABILTIES</option>
                                                    <option value="BL-ISI">BL-ISI-INSTITUTE FOR SOCIAL IMPACT</option>
                                                    <option value="BL-ISLM">BL-ISLM-ISLAMIC STUDIES PROGRAM</option>
                                                    <option value="BL-ISM">BL-ISM-INTERNATIONAL STUDIES MAJOR</option>
                                                    <option value="BL-ISNL">BL-ISNL-INST STDY NIGERIAN LANGS &amp; CUL</option>
                                                    <option value="BL-ISRH">BL-ISRH-INST OF SOCIAL RESEARCH</option>
                                                    <option value="BL-ISS">BL-ISS-INSTRUCTIONAL SUPPORT SERVICES</option>
                                                    <option value="BL-ISTE">BL-ISTE-INSTRUCTIONAL SYSTEMS TECHNOLO</option>
                                                    <option value="BL-ISTM">BL-ISTM-INST FOR SCI TECH ENG MATH ED</option>
                                                    <option value="BL-IT">BL-IT-INFORMATION TECHNOLOGY</option>
                                                    <option value="BL-IUCF">BL-IUCF-IU CYCLOTRON FACILITY</option>
                                                    <option value="BL-IUF">BL-IUF-IU FOUNDATION</option>
                                                    <option value="BL-IUFI">BL-IUFI-IU FOOD INSTITUTE</option>
                                                    <option value="BL-IUHC">BL-IUHC-IU HEALTH CENTER</option>
                                                    <option value="BL-IUWH">BL-IUWH-IU WAREHOUSE</option>
                                                    <option value="BL-JAMH">BL-JAMH-JOURNAL OF AMERICAN HISTORY</option>
                                                    <option value="BL-JAZZ">BL-JAZZ-JAZZ</option>
                                                    <option value="BL-JCEB">BL-JCEB-JOHNSON CENTER FOR INNOVATION </option>
                                                    <option value="BL-JOUR">BL-JOUR-JOURNALISM</option>
                                                    <option value="BL-JRNL">BL-JRNL-JOURNALISM LIBRARY</option>
                                                    <option value="BL-JSP">BL-JSP-JEWISH STUDIES</option>
                                                    <option value="BL-KINE">BL-KINE-KINESIOLOGY</option>
                                                    <option value="BL-KINS">BL-KINS-KINSEY INSTITUTE</option>
                                                    <option value="BL-KLIB">BL-KLIB-LIBRARY - KINSEY INSTITUTE</option>
                                                    <option value="BL-KOFX">BL-KOFX-KELLEY OUTFITTERS</option>
                                                    <option value="BL-LAAF">BL-LAAF-LATINO AFFAIRS</option>
                                                    <option value="BL-LABR">BL-LABR-LABOR EDUCATION &amp; RESEARCH CTR</option>
                                                    <option value="BL-LACC">BL-LACC-INDIANA CONSORT FOR LATIN AM &amp;</option>
                                                    <option value="BL-LACQ">BL-LACQ-LIBRARY ACQUISITIONS</option>
                                                    <option value="BL-LADM">BL-LADM-LIBRARY ADMINISTRATION</option>
                                                    <option value="BL-LAMP">BL-LAMP-LIBERAL ARTS &amp; MANAGEMENT</option>
                                                    <option value="BL-LANG">BL-LANG-CTR FOR RESEARCH &amp; DEV IN LANG</option>
                                                    <option value="BL-LARS">BL-LARS-LABORATORY ANIMAL RESOURCES</option>
                                                    <option value="BL-LATC">BL-LATC-LATINO CENTER</option>
                                                    <option value="BL-LATS">BL-LATS-LATINO STUDIES</option>
                                                    <option value="BL-LAUT">BL-LAUT-LIBRARY AUTOMATION</option>
                                                    <option value="BL-LAWL">BL-LAWL-LAW LIBRARY</option>
                                                    <option value="BL-LAWS">BL-LAWS-MAURER SCHOOL OF LAW</option>
                                                    <option value="BL-LBST">BL-LBST-LABOR STUDIES</option>
                                                    <option value="BL-LBUD">BL-LBUD-LIBRARIES BUDGET &amp; SUPPLY</option>
                                                    <option value="BL-LCAR">BL-LCAR-CTR FOR LANG CENTRL ASIAN REG</option>
                                                    <option value="BL-LCAS">BL-LCAS-CATALOGING AREA STUDIES</option>
                                                    <option value="BL-LCAT">BL-LCAT-LIBRARIES CATALOGUING</option>
                                                    <option value="BL-LCER">BL-LCER-LIBRARY COMMON ELECTRONIC RES</option>
                                                    <option value="BL-LCL">BL-LCL-LIBRARIES - CAMPUS LIBRARIES</option>
                                                    <option value="BL-LDEV">BL-LDEV-LIBRARIES DEVELOPMENT OFFICE</option>
                                                    <option value="BL-LDI">BL-LDI-LEADERSHIP DEVELOPMENT INSTITU</option>
                                                    <option value="BL-LDLP">BL-LDLP-LIBRARIES DIGITAL</option>
                                                    <option value="BL-LDLS">BL-LDLS-DIGITAL LIBRARY SERVICES</option>
                                                    <option value="BL-LDUX">BL-LDUX-DIGITAL USER EXPERIENCE</option>
                                                    <option value="BL-LEAD">BL-LEAD-LEADERSHIP IN ARTS &amp; HUMANITIE</option>
                                                    <option value="BL-LENG">BL-LENG-ENGLISH-LEADERSHIP</option>
                                                    <option value="BL-LEO">BL-LEO-LIBRARY ENTERPRISE OFFICE4</option>
                                                    <option value="BL-LESA">BL-LESA-POLITICAL AND CIVIC ENGAGEMENT</option>
                                                    <option value="BL-LFIS">BL-LFIS-FINE ARTS STUDIO-LEADERSHIP</option>
                                                    <option value="BL-LGED">BL-LGED-LANGUAGE EDUCATION</option>
                                                    <option value="BL-LHIS">BL-LHIS-HISTORY-LEADERSHIP</option>
                                                    <option value="BL-LHPR">BL-LHPR-HEALTH PHYSICAL ED &amp;</option>
                                                    <option value="BL-LHR">BL-LHR-LIBRARIES HUMAN RESOURCES</option>
                                                    <option value="BL-LIAH">BL-LIAH-LIBRARY ARTS &amp; HUMANITIES</option>
                                                    <option value="BL-LIAS">BL-LIAS-ACADEMIC SERVICES</option>
                                                    <option value="BL-LIBR">BL-LIBR-LIBRARIES</option>
                                                    <option value="BL-LICD">BL-LICD-LIBRARY COLLECTION DEVELOPMENT</option>
                                                    <option value="BL-LIIT">BL-LIIT-INFORMATION TECH&amp;DIGITAL PROGR</option>
                                                    <option value="BL-LING">BL-LING-LINGUISTICS</option>
                                                    <option value="BL-LISP">BL-LISP-LIBRARY SPECIAL COLLECTIONS</option>
                                                    <option value="BL-LISS">BL-LISS-LIBRARY SCIENCES,SOCIAL SCIENC</option>
                                                    <option value="BL-LIT">BL-LIT-LIBRARIES INFORMATION TECHNOL</option>
                                                    <option value="BL-LIWE">BL-LIWE-CAT WEST EUROPEAN</option>
                                                    <option value="BL-LLAB">BL-LLAB-LANGUAGE &amp; COMPUTER LAB</option>
                                                    <option value="BL-LLC">BL-LLC-COLLINS LIVING LEARNING CENTER</option>
                                                    <option value="BL-LLIB">BL-LLIB-LILLY LIBRARY</option>
                                                    <option value="BL-LLIS">BL-LLIS-LINGUIST LIST</option>
                                                    <option value="BL-LLPS">BL-LLPS-LILLY LIB PUB SERV</option>
                                                    <option value="BL-LLTS">BL-LLTS-LILLY LIB TECH SERV</option>
                                                    <option value="BL-LMED">BL-LMED-LABORATORY ANIMAL MEDICINE</option>
                                                    <option value="BL-LMRS">BL-LMRS-MEDIA &amp; RESERVES SERVICES</option>
                                                    <option value="BL-LPL">BL-LPL-PHILOSOPHY-LEADERSHIP</option>
                                                    <option value="BL-LPRV">BL-LPRV-PRESERVATION</option>
                                                    <option value="BL-LREF">BL-LREF-REFERENCE - LIBRARIES</option>
                                                    <option value="BL-LRES">BL-LRES-LEARNING RESOURCES</option>
                                                    <option value="BL-LRI">BL-LRI-LEADERSHIP RESEARCH INSTITUTE/</option>
                                                    <option value="BL-LRNS">BL-LRNS-STUDENT FOR ACADEMIC CENTER</option>
                                                    <option value="BL-LSCI">BL-LSCI-SCIENCE LIBRARIES</option>
                                                    <option value="BL-LSOC">BL-LSOC-SOCIAL SCI LIBRARIES</option>
                                                    <option value="BL-LSRT">BL-LSRT-LEARNING SUPPORT SERVICES</option>
                                                    <option value="BL-LT&amp;L">BL-LT&amp;L-LIB TEACHING &amp; LEARNING</option>
                                                    <option value="BL-LTAM">BL-LTAM-LATIN AMERICAN STUDIES</option>
                                                    <option value="BL-LWHM">BL-LWHM-WYLIE HOUSE MUSEUM/LIBRARIES</option>
                                                    <option value="BL-MAIL">BL-MAIL-MAIL SERVICES</option>
                                                    <option value="BL-MALY">BL-MALY-COOPERATIVE PROGRAM IN MALAYSI</option>
                                                    <option value="BL-MAP">BL-MAP-MEDIA ARTS &amp; PRODUCTION</option>
                                                    <option value="BL-MATH">BL-MATH-MATHEMATICS</option>
                                                    <option value="BL-MBA">BL-MBA-SCHOOL OF BUSINESS MBA PROGRAM</option>
                                                    <option value="BL-MBAL">BL-MBAL-MUSIC SCHOOL-BALLET</option>
                                                    <option value="BL-MCIM">BL-MCIM-MICROBIOLOGY &amp; IMMUNOLOGY</option>
                                                    <option value="BL-MCOM">BL-MCOM-MUSIC SCHOOL-COMPOSITION</option>
                                                    <option value="BL-MCSI">BL-MCSI-MATHEMATICS &amp; COMPUTER SCIENCE</option>
                                                    <option value="BL-MED">BL-MED-HEALTH SCIENCES</option>
                                                    <option value="BL-MEMI">BL-MEMI-MUSIC-EARLY MUSIC INSTITUTE</option>
                                                    <option value="BL-MESP">BL-MESP-MIDDLE EASTERN STUDIES</option>
                                                    <option value="BL-MEST">BL-MEST-MEDIEVAL STUDIES</option>
                                                    <option value="BL-MFPN">BL-MFPN-MINORITY FELLOWSHIP PROG</option>
                                                    <option value="BL-MGMT">BL-MGMT-DEPT MANGEMENT &amp; ENTREP</option>
                                                    <option value="BL-MIAP">BL-MIAP-MINORITY ACHIEVER'S PRGM</option>
                                                    <option value="BL-MICR">BL-MICR-MICROBIOLOGY</option>
                                                    <option value="BL-MILS">BL-MILS-MILITARY SCIENCE</option>
                                                    <option value="BL-MJAZ">BL-MJAZ-MUSIC SCHOOL-JAZZ</option>
                                                    <option value="BL-MKSV">BL-MKSV-MARKETING SERVICES</option>
                                                    <option value="BL-MKTG">BL-MKTG-SCHOOL OF BUSINESS MARKETING D</option>
                                                    <option value="BL-MMBL">BL-MMBL-MATHERS MUSEUM/GLENN A. BLACK</option>
                                                    <option value="BL-MMUS">BL-MMUS-MATHERS MUSEUM WM HAMMOND</option>
                                                    <option value="BL-MPS">BL-MPS-LIBRARY, MONOGRAPHIC PROCESSIO</option>
                                                    <option value="BL-MRI">BL-MRI-MATERIALS RESEARCH INSTITUTE</option>
                                                    <option value="BL-MSCH">BL-MSCH-MSCHOOL</option>
                                                    <option value="BL-MSCI">BL-MSCI-MEDICAL SCIENCES PROGRAM</option>
                                                    <option value="BL-MSCY">BL-MSCY-MUSICOLOGY</option>
                                                    <option value="BL-MSED">BL-MSED-MUSIC EDUCATION</option>
                                                    <option value="BL-MSVC">BL-MSVC-MAIL SERVICES</option>
                                                    <option value="BL-MUAT">BL-MUAT-MUSIC SCHOOL-AUDIO TECHNOLOGY</option>
                                                    <option value="BL-MUBA">BL-MUBA-SCHOOL OF MUSIC BANDS</option>
                                                    <option value="BL-MUCA">BL-MUCA-MUSIC CHORAL ENSEMBLE</option>
                                                    <option value="BL-MUGS">BL-MUGS-MUSIC-GENERAL STUDIES</option>
                                                    <option value="BL-MUHI">BL-MUHI-MUSIC SCHOOL-MUSICOLOGY</option>
                                                    <option value="BL-MUIC">BL-MUIC-INSTRUMENTAL CONDUCTING</option>
                                                    <option value="BL-MULT">BL-MULT-MULTICULTURAL AFFAIRS</option>
                                                    <option value="BL-MUOR">BL-MUOR-MUSIC SCHOOL - ORGAN</option>
                                                    <option value="BL-MUS">BL-MUS-JACOBS SCHOOL OF MUSIC</option>
                                                    <option value="BL-MUSL">BL-MUSL-MUSIC LIBRARY</option>
                                                    <option value="BL-MUTH">BL-MUTH-MUSIC THEORY</option>
                                                    <option value="BL-MUVO">BL-MUVO-MUSIC-VOICE DEPARTMENT</option>
                                                    <option value="BL-MWAC">BL-MWAC-ARCHEOLOGY &amp; WORLD CULTURES</option>
                                                    <option value="BL-NAMS">BL-NAMS-AMERICAN STUDIES-NFAS</option>
                                                    <option value="BL-NCMC">BL-NCMC-COMMUNICATION &amp; CULT-AMER STDS</option>
                                                    <option value="BL-NELC">BL-NELC-NEAR EASTERN LANGS &amp; CULTURES</option>
                                                    <option value="BL-NEUR">BL-NEUR-NEUROLOGY</option>
                                                    <option value="BL-NEUS">BL-NEUS-PROGRAM IN NEUROSCIENCE</option>
                                                    <option value="BL-NFAS">BL-NFAS-NEW FOCUS IN AMERICAN STUDIES</option>
                                                    <option value="BL-NHIS">BL-NHIS-HISTORY-NEW FOCUS IN AM STDS</option>
                                                    <option value="BL-NIFS">BL-NIFS-NATIONAL INSTITUTE FOR FITNESS</option>
                                                    <option value="BL-NMS">BL-NMS-NATURAL &amp; MATHEMATICAL SCIENCE</option>
                                                    <option value="BL-NPHC">BL-NPHC-NATIONAL PAN-HELLENIC COUNCIL</option>
                                                    <option value="BL-NPOL">BL-NPOL-POLITICAL SCI-AMERICAN STUDIES</option>
                                                    <option value="BL-NTC">BL-NTC-NUCLEAR THEORY CENTER</option>
                                                    <option value="BL-NURS">BL-NURS-NURSING</option>
                                                    <option value="BL-OACA">BL-OACA-OTHER ACADEMIC PROGRAMS</option>
                                                    <option value="BL-OADT">BL-OADT-BUSINESS OPERATIONS &amp; DECISION</option>
                                                    <option value="BL-OAMH">BL-OAMH-ORGN OF AMERICAN HISTORIANS</option>
                                                    <option value="BL-OASD">BL-OASD-OFC ACADEMIC SUPP &amp; DIVERSITY</option>
                                                    <option value="BL-OBGY">BL-OBGY-OBSTETICS/GYNECOLOGY</option>
                                                    <option value="BL-OES">BL-OES-ENROLLMENT MANAGEMENT</option>
                                                    <option value="BL-OHIS">BL-OHIS-CTR FOR STUDY HISTORY &amp; MEMORY</option>
                                                    <option value="BL-OIA">BL-OIA-OFFICE OF INTERNATIONAL AFFAIR</option>
                                                    <option value="BL-OPER">BL-OPER-ADMISSIONS OPERATIONS</option>
                                                    <option value="BL-OPRT">BL-OPRT-OPERA THEATRE</option>
                                                    <option value="BL-OPT">BL-OPT-OPTOMETRY</option>
                                                    <option value="BL-OPTH">BL-OPTH-OPHTHALMOLOGY</option>
                                                    <option value="BL-OPTL">BL-OPTL-OPTOMETRY LIBRARY</option>
                                                    <option value="BL-ORGN">BL-ORGN-ORGAN</option>
                                                    <option value="BL-ORIE">BL-ORIE-ORIENTATION</option>
                                                    <option value="BL-OSCS">BL-OSCS-OFFICE OF STUDENT AND CAREER S</option>
                                                    <option value="BL-OSFA">BL-OSFA-OFC OF STUDENT FIN ASSISTANCE</option>
                                                    <option value="BL-OVER">BL-OVER-OVERSEAS STUDY</option>
                                                    <option value="BL-P16">BL-P16-P16 CENTER</option>
                                                    <option value="BL-PACE">BL-PACE-POLITICAL AND CIVIC ENGAGEMENT</option>
                                                    <option value="BL-PADM">BL-PADM-INSTITUTE FOR PUBLIC ADMINISTR</option>
                                                    <option value="BL-PANA">BL-PANA-PAN ASIA INSTITUTE</option>
                                                    <option value="BL-PBIO">BL-PBIO-PHYSIOLOGY AND BIOPHYSICS</option>
                                                    <option value="BL-PERC">BL-PERC-PERCUSSION</option>
                                                    <option value="BL-PGP">BL-PGP-PROFESSIONAL GRADUATE PROGRAM</option>
                                                    <option value="BL-PHAR">BL-PHAR-PHARMACOLOGY</option>
                                                    <option value="BL-PHER">BL-PHER-INSTITUTE FOR PHEROMONE RESCH</option>
                                                    <option value="BL-PHMR">BL-PHMR-PHARMACOLOGY</option>
                                                    <option value="BL-PHSL">BL-PHSL-PHYSIOLOGY</option>
                                                    <option value="BL-PHYE">BL-PHYE-PHYSICAL EDUCATION</option>
                                                    <option value="BL-PHYP">BL-PHYP-FACILITY OPERATIONS-IUB</option>
                                                    <option value="BL-PHYS">BL-PHYS-PHYSICS</option>
                                                    <option value="BL-PIAN">BL-PIAN-PIANO</option>
                                                    <option value="BL-PIRT">BL-PIRT-POPULATION INST FOR RES &amp; TRNG</option>
                                                    <option value="BL-PL">BL-PL-PHILOSOPHY</option>
                                                    <option value="BL-PLAC">BL-PLAC-PLACEMENT OFC-ARTS &amp; SCIENCES</option>
                                                    <option value="BL-PLST">BL-PLST-CENTER ON POLICY STUDY</option>
                                                    <option value="BL-POLS">BL-POLS-POLITICAL SCIENCE</option>
                                                    <option value="BL-POOL">BL-POOL-OUTDOOR POOL</option>
                                                    <option value="BL-POSC">BL-POSC-POLISH STUDIES CENTER</option>
                                                    <option value="BL-POYC">BL-POYC-POYNTER CENTER</option>
                                                    <option value="BL-PROF">BL-PROF-PROFESSIONAL PRACTICE PROGRAM</option>
                                                    <option value="BL-PSAF">BL-PSAF-PROGRAM SERVICES &amp; FACILITIES</option>
                                                    <option value="BL-PSY">BL-PSY-PSYCHOLOGICAL &amp; BRAIN SCIENCES</option>
                                                    <option value="BL-PSYC">BL-PSYC-PSYCHIATRY</option>
                                                    <option value="BL-PUBS">BL-PUBS-ORPHAN</option>
                                                    <option value="BL-QBA">BL-QBA-QUANTITATIVE BUSINESS ANALYSIS</option>
                                                    <option value="BL-RAON">BL-RAON-RADIATION ONCOLOGY</option>
                                                    <option value="BL-RAST">BL-RAST-RESEARCH &amp; ADVANCED STUDY</option>
                                                    <option value="BL-RCAD">BL-RCAD-RECORDS AND ADMISSIONA</option>
                                                    <option value="BL-RCC">BL-RCC-RESEARCH COMPUTING CENTER</option>
                                                    <option value="BL-RDEV">BL-RDEV-RESEARCH &amp; GRADUATE DEVEL</option>
                                                    <option value="BL-READ">BL-READ-READING AND STUDY SKILLS CENTE</option>
                                                    <option value="BL-RECP">BL-RECP-REAL ESTATE CERTIFICATION PROG</option>
                                                    <option value="BL-RECS">BL-RECS-RECREATIONAL SPORTS</option>
                                                    <option value="BL-REEI">BL-REEI-RUSSIAN &amp; EAST EUROPEAN INST</option>
                                                    <option value="BL-REGR">BL-REGR-REGISTRAR</option>
                                                    <option value="BL-REL">BL-REL-RELIGIOUS STUDIES</option>
                                                    <option value="BL-RENA">BL-RENA-RENAISSANCE STUDIES</option>
                                                    <option value="BL-RESL">BL-RESL-RESIDENCE LIFE</option>
                                                    <option value="BL-RIFI">BL-RIFI-RES INST INNER ASIAN STUDIES</option>
                                                    <option value="BL-RLAN">BL-RLAN-CENTER FOR READING &amp; LANGUAGE</option>
                                                    <option value="BL-RLS">BL-RLS-RESEARCH CENTER FOR THE LANGUA</option>
                                                    <option value="BL-RLSS">BL-RLSS-RESRCH CTR FOR LANGUAGES &amp; SEM</option>
                                                    <option value="BL-RMIS">BL-RMIS-INST FOR RSRCH ON THE MGMT OF</option>
                                                    <option value="BL-RPAD">BL-RPAD-RECREATION,PARK&amp;TOURISM STUDIE</option>
                                                    <option value="BL-RPAS">BL-RPAS-RESIDENIAL PROGRAMS AND SERVIC</option>
                                                    <option value="BL-RRES">BL-RRES-CTR - RSCH ON RACE &amp; ETHNICITY</option>
                                                    <option value="BL-RRPS">BL-RRPS-RECREATION RESOURCE POLICY STU</option>
                                                    <option value="BL-RTVS">BL-RTVS-RADIO-TELEVISION SERVICES</option>
                                                    <option value="BL-RUAD">BL-RUAD-OVPR ADMINISTRATION</option>
                                                    <option value="BL-RUGS">BL-RUGS-VICE PROVOST FOR RESEARCH</option>
                                                    <option value="BL-SACR">BL-SACR-STUDENT ACADEMIC CENTER</option>
                                                    <option value="BL-SACT">BL-SACT-STUDENT ACTIVITIES</option>
                                                    <option value="BL-SADV">BL-SADV-STUDENT ADVOCATES OFFICE</option>
                                                    <option value="BL-SAIL">BL-SAIL-COMMUNITY SAILING &amp; PADDLING P</option>
                                                    <option value="BL-SCAM">BL-SCAM-INST SCI COMPTG &amp; APPL MATH</option>
                                                    <option value="BL-SCAN">BL-SCAN-BEST SCANNING AND PROCTORING</option>
                                                    <option value="BL-SCL">BL-SCL-SCIENCE LIBRARY</option>
                                                    <option value="BL-SCS">BL-SCS-CONTINUING STUDIES</option>
                                                    <option value="BL-SCTR">BL-SCTR-STUDENT CENTRAL</option>
                                                    <option value="BL-SDTP">BL-SDTP-STAGE DESIGN &amp; TECHNICAL PRODU</option>
                                                    <option value="BL-SEAS">BL-SEAS-SOUTHEAST ASIAN STUDIES</option>
                                                    <option value="BL-SEM">BL-SEM-SOCIETY FOR ETHNOMUSICOLOGY</option>
                                                    <option value="BL-SERD">BL-SERD-LIBRARY, SERIALS</option>
                                                    <option value="BL-SETH">BL-SETH-STUDENT ETHICS</option>
                                                    <option value="BL-SEX">BL-SEX-INSTITUTE FOR SEX RESEARCH</option>
                                                    <option value="BL-SGIS">BL-SGIS-GLOBAL &amp; INT'L STUDIES</option>
                                                    <option value="BL-SHS">BL-SHS-SOCIAL &amp; HISTORICAL SCIENCES D</option>
                                                    <option value="BL-SLAV">BL-SLAV-SLAVIC LANGUAGES &amp; LITERATURES</option>
                                                    <option value="BL-SLEG">BL-SLEG-STUDENT LEGAL SERVICES</option>
                                                    <option value="BL-SLIS">BL-SLIS-INFORMATION AND LIBRARY SCIENC</option>
                                                    <option value="BL-SLS">BL-SLS-SECOND LANGUAGE STUDIES</option>
                                                    <option value="BL-SLSL">BL-SLSL-LIBRARY - LIBRARY &amp; INFORMATIO</option>
                                                    <option value="BL-SOAD">BL-SOAD-SCHOOL OF ART AND DESIGN</option>
                                                    <option value="BL-SOC">BL-SOC-SOCIOLOGY</option>
                                                    <option value="BL-SOCA">BL-SOCA-SOCIOLOGY &amp; ANTHROPOLOGY</option>
                                                    <option value="BL-SOCS">BL-SOCS-SOCIAL SCIENCES, DIVISION OF</option>
                                                    <option value="BL-SOVE">BL-SOVE-INST FOR THE STUDY OF SOVIET</option>
                                                    <option value="BL-SPAC">BL-SPAC-SPACE MANAGEMENT</option>
                                                    <option value="BL-SPAN">BL-SPAN-SPANISH &amp; PORTUGUESE</option>
                                                    <option value="BL-SPAR">BL-SPAR-SPANISH RESOURCE CENTER</option>
                                                    <option value="BL-SPCH">BL-SPCH-SPEECH</option>
                                                    <option value="BL-SPCM">BL-SPCM-SPEECH COMMUNICATION</option>
                                                    <option value="BL-SPEA">BL-SPEA-PUBLIC &amp; ENVIRONMENTAL AFFAIRS</option>
                                                    <option value="BL-SPER">BL-SPER-STUDENT PERSONNEL</option>
                                                    <option value="BL-SPHR">BL-SPHR-SPEECH &amp; HEARING CLINIC</option>
                                                    <option value="BL-SPHS">BL-SPHS-SPEECH &amp; HEARING SCIENCES</option>
                                                    <option value="BL-SPMG">BL-SPMG-SPACE MANAGEMENT</option>
                                                    <option value="BL-SPTH">BL-SPTH-SPEECH &amp; THEATRE</option>
                                                    <option value="BL-SSDC">BL-SSDC-SOCIAL STUDIES DEVLOP CENTER</option>
                                                    <option value="BL-SSER">BL-SSER-DIVISION OF STUDENT AFFAIRS</option>
                                                    <option value="BL-SSRW">BL-SSRW-SOCIAL WORK, SCHOOL OF</option>
                                                    <option value="BL-STAT">BL-STAT-STATISTICS</option>
                                                    <option value="BL-STEM">BL-STEM-COLLEGE SCIENCE OUTREACH OFFIC</option>
                                                    <option value="BL-STGD">BL-STGD-DGTS STAGECRAFT</option>
                                                    <option value="BL-STNG">BL-STNG-STRINGS</option>
                                                    <option value="BL-STRA">BL-STRA-STRATEGIC HIRING &amp; SUPPORT</option>
                                                    <option value="BL-SUMS">BL-SUMS-SUMMER SESSIONS</option>
                                                    <option value="BL-SURG">BL-SURG-SURGERY</option>
                                                    <option value="BL-SURV">BL-SURV-CENTER FOR SURVEY RESEARCH</option>
                                                    <option value="BL-SUST">BL-SUST-SUSTAINABILITY</option>
                                                    <option value="BL-SWKS">BL-SWKS-SUMMER WORKSHOP (SWSEEL)</option>
                                                    <option value="BL-SWNL">BL-SWNL-SWAIN HALL LIBRARY</option>
                                                    <option value="BL-TAAL">BL-TAAL-SECOND LANGUAGE STUDIES (TESOL</option>
                                                    <option value="BL-TAPP">BL-TAPP-TECHNOLOGY APPLICATIONS DIVISI</option>
                                                    <option value="BL-TBI">BL-TBI-BIOLOGY - 21ST CENTURY INTERDI</option>
                                                    <option value="BL-TCHE">BL-TCHE-CHEMISTRY-21ST CENTURY INTERDI</option>
                                                    <option value="BL-TCSC">BL-TCSC-COMPUTER SCI-21ST CENTURY INTE</option>
                                                    <option value="BL-TECS">BL-TECS-TECHNICAL STUDIES</option>
                                                    <option value="BL-TEDU">BL-TEDU-EDUCATION - 21ST CENTURY INTER</option>
                                                    <option value="BL-TEED">BL-TEED-TEACHER EDUCATION</option>
                                                    <option value="BL-TELC">BL-TELC-TELECOMMUNICATIONS</option>
                                                    <option value="BL-TERC">BL-TERC-TEACHING RESOURCES</option>
                                                    <option value="BL-TGEL">BL-TGEL-GEOLOGY- 21ST CENTURY INTERDIS</option>
                                                    <option value="BL-THRY">BL-THRY-THEORY</option>
                                                    <option value="BL-THTR">BL-THTR-THEATRE, DRAMA AND CONTEMPORAR</option>
                                                    <option value="BL-TIUF">BL-TIUF-IUCF - 21ST CENTURY INTERDISC</option>
                                                    <option value="BL-TPHY">BL-TPHY-PHYSICS--21ST CENTURY INTERDIS</option>
                                                    <option value="BL-UAFI">BL-UAFI-AFRICAN STUDIES - TWO THIRDS W</option>
                                                    <option value="BL-UAFO">BL-UAFO-AFRO AMER STDS - TWO THIRDS WO</option>
                                                    <option value="BL-UARC">BL-UARC-UNIVERSITY ARCHIVES</option>
                                                    <option value="BL-UCLA">BL-UCLA-CTR LATIN AM -- TWO THIRDS WOR</option>
                                                    <option value="BL-UCLT">BL-UCLT-TWO-THIRDS WORLD: CLTI</option>
                                                    <option value="BL-UCMP">BL-UCMP-UNIVERISTY COMPUTING</option>
                                                    <option value="BL-UDIV">BL-UDIV-UNIVERSITY DIVISION</option>
                                                    <option value="BL-UECO">BL-UECO-ECONOMICS-TWO THIRDS WORLD</option>
                                                    <option value="BL-UGLF">BL-UGLF-UNDERGRADUATE LIFE</option>
                                                    <option value="BL-UGLL">BL-UGLL-GLOBAL VILLAGE-TWO THIRDS WORL</option>
                                                    <option value="BL-UGLS">BL-UGLS-UNDERGRADUATE LIBRARY SERVICES</option>
                                                    <option value="BL-UHIS">BL-UHIS-HISTORY - TWO THIRDS WORLD</option>
                                                    <option value="BL-UIND">BL-UIND-INDIA STUDIES - TWO THIRDS WOR</option>
                                                    <option value="BL-UISM">BL-UISM-INTNL MAJOR STDS-TWO THIRDS</option>
                                                    <option value="BL-UNDG">BL-UNDG-UNDERGRADUATE PROGRAM</option>
                                                    <option value="BL-UNPR">BL-UNPR-SCHOOL OF BUSINESS UNDERGRADUA</option>
                                                    <option value="BL-UPOL">BL-UPOL-POLITICAL SCIENCE - TWO THIRDS</option>
                                                    <option value="BL-URE">BL-URE-RELIGIOUS STUDIES - TWO THIRD</option>
                                                    <option value="BL-UROL">BL-UROL-UROLOGY</option>
                                                    <option value="BL-USOC">BL-USOC-SOCIOLOGY - TWO THIRDS WORLD</option>
                                                    <option value="BL-USPA">BL-USPA-TWO-THIRDS WORLD: SPAN</option>
                                                    <option value="BL-VET">BL-VET-VETERANS SUPPORT SERVICES</option>
                                                    <option value="BL-VICT">BL-VICT-VICTORIAN STUDIES</option>
                                                    <option value="BL-VOIC">BL-VOIC-VOICE</option>
                                                    <option value="BL-VPAA">BL-VPAA-VICE PRES FOR ACADEMIC AFFS</option>
                                                    <option value="BL-VPAS">BL-VPAS-VICE PRES/ACADEMIC SUPPORT</option>
                                                    <option value="BL-VPBC">BL-VPBC-VICE PRES FOR ACAD AFFS &amp; BL C</option>
                                                    <option value="BL-VPBL">BL-VPBL-VICE PRES CHANCELLOR BL</option>
                                                    <option value="BL-VPFA">BL-VPFA-VICE PROVOST FOR FACULTY AFFAI</option>
                                                    <option value="BL-VPGA">BL-VPGA-OFC PROVOST &amp; EXEC VICE PRES</option>
                                                    <option value="BL-VPUE">BL-VPUE-UNDERGRADUATE EDUCATION</option>
                                                    <option value="BL-WCEN">BL-WCEN-CAMPUS WRITING PROGRAM</option>
                                                    <option value="BL-WDWN">BL-WDWN-WOODWINDS</option>
                                                    <option value="BL-WEC">BL-WEC-WEEKEND COLLEGE</option>
                                                    <option value="BL-WEUR">BL-WEUR-INSTITUTE FOR EUROPEAN STUDIES</option>
                                                    <option value="BL-WKST">BL-WKST-OFF CAMPUS</option>
                                                    <option value="BL-WOAF">BL-WOAF-WOMEN'S AFFAIRS</option>
                                                    <option value="BL-WPTP">BL-WPTP-WRKSHP-POL THEORY/POL ANALYSIS</option>
                                                    <option value="BL-WRRC">BL-WRRC-WATER RESOURCE RESEARCH CENTER</option>
                                                    <option value="BL-WSCH">BL-WSCH-WELLS SCHOLARS PROGRAM</option>
                                                    <option value="BL-ZOOL">BL-ZOOL-ZOOLOGY</option>
                                                    <option value="CS-REGR">CS-REGR-REGISTRAR</option>
                                                    <option value="EA-AADV">EA-AADV-ACADEMIC ADVISING</option>
                                                    <option value="EA-AAOA">EA-AAOA-AREA IX IN HOME AN</option>
                                                    <option value="EA-ACAD">EA-ACAD-ACADEMIC AFFAIRS</option>
                                                    <option value="EA-ACDS">EA-ACDS-ACADEMIC ASSISTANCE</option>
                                                    <option value="EA-ACSP">EA-ACSP-ACADEMIC SUPPORT</option>
                                                    <option value="EA-ACTG">EA-ACTG-ACCOUNTING,BUSINESS</option>
                                                    <option value="EA-ADAF">EA-ADAF-ADMINISTRATIVE AFFAIRS</option>
                                                    <option value="EA-ADMS">EA-ADMS-ADMISSIONS</option>
                                                    <option value="EA-AFFA">EA-AFFA-AFFIRMATIVE ACTION</option>
                                                    <option value="EA-ALNI">EA-ALNI-ALUMNI AFFAIRS</option>
                                                    <option value="EA-ANAT">EA-ANAT-ANATOMY</option>
                                                    <option value="EA-ANPH">EA-ANPH-ANATOMY AND PHYSIOLOGY</option>
                                                    <option value="EA-ANTH">EA-ANTH-ANTHROPOLOGY</option>
                                                    <option value="EA-ARSC">EA-ARSC-ARTS AND SCIENCES, DIVISION OF</option>
                                                    <option value="EA-AST">EA-AST-ASTRONOMY</option>
                                                    <option value="EA-ATH">EA-ATH-ATHLETICS</option>
                                                    <option value="EA-ATHL">EA-ATHL-ATHLETICS</option>
                                                    <option value="EA-BI">EA-BI-BIOLOGY</option>
                                                    <option value="EA-BOOK">EA-BOOK-BOOKSTORE</option>
                                                    <option value="EA-BPTD">EA-BPTD-BUSINESS/PURDUE TECH</option>
                                                    <option value="EA-BSSD">EA-BSSD-BEHAVIORAL &amp; SOCIAL SCIENCES</option>
                                                    <option value="EA-BST">EA-BST-BUSINESS &amp; TECHNOLOGY</option>
                                                    <option value="EA-BURS">EA-BURS-BURSAR OFFICE</option>
                                                    <option value="EA-BUS">EA-BUS-BUSINESS</option>
                                                    <option value="EA-BUSD">EA-BUSD-BUSINESS ?</option>
                                                    <option value="EA-BUSE">EA-BUSE-BUSINESS &amp; ECONOMICS, DIV OF</option>
                                                    <option value="EA-BUSM">EA-BUSM-BUSINESS MANAGER</option>
                                                    <option value="EA-CARD">EA-CARD-CARD SERVICES</option>
                                                    <option value="EA-CENT">EA-CENT-21ST CENTURY SCHOLAR</option>
                                                    <option value="EA-CHAN">EA-CHAN-CHANCELLOR</option>
                                                    <option value="EA-CHCR">EA-CHCR-CHILD CARE CENTER</option>
                                                    <option value="EA-CHEM">EA-CHEM-CHEMISTRY</option>
                                                    <option value="EA-CHP">EA-CHP-CENTER FOR HEALTH PROMOTION</option>
                                                    <option value="EA-COCO">EA-COCO-CONTINUING STUDIES &amp; OUTREACH</option>
                                                    <option value="EA-CONN">EA-CONN-CONNERSVILLE/NEWCA</option>
                                                    <option value="EA-CPPS">EA-CPPS-CAREER PLANNING/PLACEMENT</option>
                                                    <option value="EA-CRIM">EA-CRIM-CRIMINAL JUSTICE</option>
                                                    <option value="EA-CSER">EA-CSER-INFORMATION TECHNOLOGY</option>
                                                    <option value="EA-CTED">EA-CTED-CONTINUING EDUCATION</option>
                                                    <option value="EA-CTSD">EA-CTSD-CONTINUING STUDIES</option>
                                                    <option value="EA-EA">EA-EA-EAST CAMPUS</option>
                                                    <option value="EA-ECON">EA-ECON-ECONOMICS</option>
                                                    <option value="EA-ECTR">EA-ECTR-CENTER FOR ECONOMIC EDUCATION</option>
                                                    <option value="EA-EDUC">EA-EDUC-EDUCATION</option>
                                                    <option value="EA-EDUD">EA-EDUD-EDUCATION, DEPARTMENT OF</option>
                                                    <option value="EA-ENG">EA-ENG-ENGLISH</option>
                                                    <option value="EA-ENSV">EA-ENSV-ENROLLMENT SERVICES</option>
                                                    <option value="EA-EXAF">EA-EXAF-EXTERNAL RELATIONS</option>
                                                    <option value="EA-EXEC">EA-EXEC-EXECUTIVE MANAGEMENT</option>
                                                    <option value="EA-EXTL">EA-EXTL-EXTENDED LEARNING</option>
                                                    <option value="EA-FOOD">EA-FOOD-FOOD SERVICES</option>
                                                    <option value="EA-FRCH">EA-FRCH-FRENCH</option>
                                                    <option value="EA-GENA">EA-GENA-GENERAL ADMINISTRATION</option>
                                                    <option value="EA-GENS">EA-GENS-GENERAL STUDIES</option>
                                                    <option value="EA-GEOG">EA-GEOG-GEOGRAPHY</option>
                                                    <option value="EA-GRAD">EA-GRAD-GRADUATE SCHOOL</option>
                                                    <option value="EA-GRAF">EA-GRAF-GRAF RECREATION CENTER</option>
                                                    <option value="EA-HFAD">EA-HFAD-HUMANITIES/FINE ARTS, DIVISION</option>
                                                    <option value="EA-HMAN">EA-HMAN-HUMANITIES</option>
                                                    <option value="EA-HPER">EA-HPER-HEALTH, PHYSICAL EDUCATION &amp; R</option>
                                                    <option value="EA-HSS">EA-HSS-HUMANITIES &amp; SOCIAL SCIENCE</option>
                                                    <option value="EA-HUFA">EA-HUFA-HUMANITIES &amp; FINE ARTS</option>
                                                    <option value="EA-HUMD">EA-HUMD-HUMANITIES, DIVISION OF</option>
                                                    <option value="EA-HUMR">EA-HUMR-HUMAN RESOURCES</option>
                                                    <option value="EA-HUSE">EA-HUSE-HUMAN SERVICES</option>
                                                    <option value="EA-HUSO">EA-HUSO-?</option>
                                                    <option value="EA-INPR">EA-INPR-INSTRUCTIONAL PROGRAMS</option>
                                                    <option value="EA-IUPD">EA-IUPD-IU POLICE DEPARTMENT-EAST</option>
                                                    <option value="EA-LART">EA-LART-LIBERAL ARTS</option>
                                                    <option value="EA-LAW">EA-LAW-LAW, SCHOOL OF</option>
                                                    <option value="EA-LIBR">EA-LIBR-LIBRARY</option>
                                                    <option value="EA-MULT">EA-MULT-MULTI CULTURAL AFFAIRS</option>
                                                    <option value="EA-NURD">EA-NURD-NURSING, DIVISION OF</option>
                                                    <option value="EA-NURS">EA-NURS-NURSING</option>
                                                    <option value="EA-OFSR">EA-OFSR-OFFICE SERVICES</option>
                                                    <option value="EA-PEA">EA-PEA-PUBLIC AND ENVIRONMENTAL AFFAI</option>
                                                    <option value="EA-PERP">EA-PERP-PURDUE PROGRAMS-REGIONAL CAMPU</option>
                                                    <option value="EA-PHSL">EA-PHSL-PHYSIOLOGY</option>
                                                    <option value="EA-PHYP">EA-PHYP-PHYSICAL PLANT</option>
                                                    <option value="EA-PSY">EA-PSY-PSYCHOLOGY</option>
                                                    <option value="EA-RECP">EA-RECP-REAL ESTATE CERTIFICATION PROG</option>
                                                    <option value="EA-REGR">EA-REGR-REGISTRAR</option>
                                                    <option value="EA-SACT">EA-SACT-CAMPUS LIFE</option>
                                                    <option value="EA-SAID">EA-SAID-FINANCIAL AID</option>
                                                    <option value="EA-SCI">EA-SCI-SCIENCE</option>
                                                    <option value="EA-SCS">EA-SCS-CONTINUING STUDIES, SCHOOL OF</option>
                                                    <option value="EA-SMD">EA-SMD-SCIENCE &amp; MATH</option>
                                                    <option value="EA-SOC">EA-SOC-SOCIOLOGY</option>
                                                    <option value="EA-SOCW">EA-SOCW-SOCIAL WORK</option>
                                                    <option value="EA-SPAN">EA-SPAN-SPANISH AND PROTUGESE</option>
                                                    <option value="EA-SSER">EA-SSER-STUDENT SERVICES</option>
                                                    <option value="EA-SSRD">EA-SSRD-SOCIAL SERVICE</option>
                                                    <option value="EA-STSC">EA-STSC-STUDENT SUCCESS</option>
                                                    <option value="EA-SWTE">EA-SWTE-STATEWIDE TECHNOLOGY</option>
                                                    <option value="EA-TRAN">EA-TRAN-TRANSPORTATION SERVICES</option>
                                                    <option value="EA-TUSP">EA-TUSP-TUTORIAL SUPPORT SERVICES</option>
                                                    <option value="EA-UCOL">EA-UCOL-UNIVERSITY COLLEGE</option>
                                                    <option value="EA-ULIB">EA-ULIB-UNIVERSITY LIBRARIES</option>
                                                    <option value="EA-VCAF">EA-VCAF-VICE CHANCELLOR FOR ACADEMIC A</option>
                                                    <option value="EA-WCTV">EA-WCTV-WHITEWATER COMMUNITY TELEVISIO</option>
                                                    <option value="EA-WEC">EA-WEC-WEEKEND COLLEGE</option>
                                                    <option value="EA-ZOOL">EA-ZOOL-ZOOLOGY</option>
                                                    <option value="FW-ACAD">FW-ACAD-ACADEMIC AFFAIRS</option>
                                                    <option value="FW-ACTF">FW-ACTF-ACCOUNTING</option>
                                                    <option value="FW-AFFA">FW-AFFA-AFFIRMATIVE ACTION OFFICE</option>
                                                    <option value="FW-AMST">FW-AMST-AMERICAN STUDIES PROGRAM</option>
                                                    <option value="FW-ANTH">FW-ANTH-ANTHROPOLOGY</option>
                                                    <option value="FW-ARSS">FW-ARSS-ARTS AND SCIENCES, SCHOOL OF</option>
                                                    <option value="FW-CAFS">FW-CAFS-CONSUMER AND FAMILY SCIENCES</option>
                                                    <option value="FW-CHAN">FW-CHAN-CHANCELLOR</option>
                                                    <option value="FW-CSER">FW-CSER-COMPUTER SERVICES</option>
                                                    <option value="FW-CTSD">FW-CTSD-CONTINUING STUDIES, DIV OF</option>
                                                    <option value="FW-DAED">FW-DAED-DENTAL AUXILIARY EDUCATION</option>
                                                    <option value="FW-DGTS">FW-DGTS-DIV GENERAL &amp; TECHNICAL STDYS</option>
                                                    <option value="FW-ECON">FW-ECON-ECONOMICS</option>
                                                    <option value="FW-EDUC">FW-EDUC-EDUCATION</option>
                                                    <option value="FW-ENGL">FW-ENGL-ENGLISH &amp; LINGUISTICS</option>
                                                    <option value="FW-FINA">FW-FINA-FINE ARTS</option>
                                                    <option value="FW-FW">FW-FW-FORT WAYNE CAMPUS</option>
                                                    <option value="FW-GEOS">FW-GEOS-GEOSCIENCES</option>
                                                    <option value="FW-GRAD">FW-GRAD-GRADUATE SCHOOL</option>
                                                    <option value="FW-HIAD">FW-HIAD-HEALTH INFORMATION ADMIN</option>
                                                    <option value="FW-HIST">FW-HIST-HISTORY</option>
                                                    <option value="FW-HONP">FW-HONP-HONORS PROGRAM</option>
                                                    <option value="FW-INTP">FW-INTP-INTERNATIONAL PROGRAMS</option>
                                                    <option value="FW-JOUR">FW-JOUR-JOURNALISM</option>
                                                    <option value="FW-LABS">FW-LABS-LABOR STUDIES, DIVISION OF</option>
                                                    <option value="FW-LIBC">FW-LIBC-LIBRARY-REGIONAL CAMPUS</option>
                                                    <option value="FW-LIBS">FW-LIBS-LIBRARY SCIENCES</option>
                                                    <option value="FW-LRES">FW-LRES-LEARNING RESOURCE CENTER</option>
                                                    <option value="FW-MATH">FW-MATH-MATHEMATICS</option>
                                                    <option value="FW-MEDF">FW-MEDF-FT WAYNE CTR FOR MEDICAL EDUC</option>
                                                    <option value="FW-MFLG">FW-MFLG-MODERN FOREIGN LANGUAGES</option>
                                                    <option value="FW-MGMK">FW-MGMK-MANAGEMENT/MARKETING</option>
                                                    <option value="FW-MUSC">FW-MUSC-MUSIC</option>
                                                    <option value="FW-NURD">FW-NURD-NURSING, DIVISION OF</option>
                                                    <option value="FW-OLAS">FW-OLAS-ORGANIZATIONAL LEADERSHIP/SPRV</option>
                                                    <option value="FW-OPER">FW-OPER-OPERATIVE DENTISTRY</option>
                                                    <option value="FW-ORMA">FW-ORMA-ORAL &amp; MAXILLOFACIAL SURGERY</option>
                                                    <option value="FW-OVER">FW-OVER-OVERSEAS STUDY-GENERAL</option>
                                                    <option value="FW-PEA">FW-PEA-DIV OF PUBLIC AND ENVIRONMENTA</option>
                                                    <option value="FW-PL">FW-PL-PHILOSOPHY</option>
                                                    <option value="FW-POLS">FW-POLS-POLITICAL SCIENCE</option>
                                                    <option value="FW-POR">FW-POR-PROJECT OUTREACH</option>
                                                    <option value="FW-PRES">FW-PRES-PRESIDENT'S OFFICE</option>
                                                    <option value="FW-PROD">FW-PROD-PROSTHODONTICS</option>
                                                    <option value="FW-RAST">FW-RAST-RESEARCH &amp; ADVANCED STUDY</option>
                                                    <option value="FW-RECP">FW-RECP-REAL ESTATE CERTIFICATION PROG</option>
                                                    <option value="FW-SBMS">FW-SBMS-BUSINESS &amp; MANAGEMENT SCIENCES</option>
                                                    <option value="FW-SFPA">FW-SFPA-FINE &amp; PERFORMING ARTS, SCHOOL</option>
                                                    <option value="FW-SHS">FW-SHS-HEALTH SCIENCES, SCHOOL OF</option>
                                                    <option value="FW-SOCA">FW-SOCA-SOCIOLOGY &amp; ANTHROPOLOGY</option>
                                                    <option value="FW-SSER">FW-SSER-STUDENT SERVICES</option>
                                                    <option value="IA-ADAF">IA-ADAF-ADMINISTRATIVE AFFAIRS</option>
                                                    <option value="IA-ADFI">IA-ADFI-ADMINISTRATION AND FINANCE</option>
                                                    <option value="IA-BALL">IA-BALL-BALL RESIDENCE</option>
                                                    <option value="IA-BOOK">IA-BOOK-BOOKSTORE</option>
                                                    <option value="IA-CDPM">IA-CDPM-CAMPUS DESIGN, PRINT &amp; MAIL</option>
                                                    <option value="IA-CONF">IA-CONF-CONFERENCE CENTER</option>
                                                    <option value="IA-CSFA">IA-CSFA-AUXILIARY SERVICES</option>
                                                    <option value="IA-CSHO">IA-CSHO-CONFERENCE SVCS HOTEL</option>
                                                    <option value="IA-DSDS">IA-DSDS-DENTISTRY-SUPPORT SERVICES</option>
                                                    <option value="IA-DSFP">IA-DSFP-DENTISTRY-FACULTY PRACTICE</option>
                                                    <option value="IA-ENHS">IA-ENHS-ENVIRONMENTAL HEALTH &amp; SAFETY</option>
                                                    <option value="IA-EVNT">IA-EVNT-EVENT SERVICES</option>
                                                    <option value="IA-FOOD">IA-FOOD-FOOD SERVICES</option>
                                                    <option value="IA-HDEP">IA-HDEP-HOUSING</option>
                                                    <option value="IA-MAIL">IA-MAIL-MAIL SERVICES</option>
                                                    <option value="IA-NAT">IA-NAT-NATATORIUM &amp; TRACK/FIELD</option>
                                                    <option value="IA-NATA">IA-NATA-NATATORIUM</option>
                                                    <option value="IA-NHAL">IA-NHAL-NORTH HALL HOUSING</option>
                                                    <option value="IA-ONEC">IA-ONEC-IUPUI ID CARD SYSTEM</option>
                                                    <option value="IA-PARK">IA-PARK-PARKING SERVICES</option>
                                                    <option value="IA-PD">IA-PD-POLICE SERVICES</option>
                                                    <option value="IA-PDUP">IA-PDUP-GRAPHIC REPRODUCTIONS</option>
                                                    <option value="IA-PRKE">IA-PRKE-PARKING ENTERPRISE</option>
                                                    <option value="IA-SAFE">IA-SAFE-PUBLIC SAFETY</option>
                                                    <option value="IA-SPTC">IA-SPTC-SPORTS SERVICES</option>
                                                    <option value="IA-SPTS">IA-SPTS-SPORTS SERVICES</option>
                                                    <option value="IA-TOWN">IA-TOWN-TOWNHOUSE APARTMENTS</option>
                                                    <option value="IA-TRAN">IA-TRAN-TRANSPORTATION</option>
                                                    <option value="IA-WART">IA-WART-WARTHIN APARTMENTS</option>
                                                    <option value="IN-AAIS">IN-AAIS-UNKNOWN</option>
                                                    <option value="IN-ACAD">IN-ACAD-ACADEMIC AFFAIRS</option>
                                                    <option value="IN-ACCT">IN-ACCT-ACCOUNTING OFFICE</option>
                                                    <option value="IN-ACSP">IN-ACSP-ACADEMIC SUPPORT</option>
                                                    <option value="IN-ACTG">IN-ACTG-ACCOUNTING-BUSINESS</option>
                                                    <option value="IN-ADAF">IN-ADAF-FINANCE AND ADMINISTRATION</option>
                                                    <option value="IN-ADBS">IN-ADBS-ADMIN AND BEHAVIORAL STUDIES</option>
                                                    <option value="IN-ADES">IN-ADES-ADAPTIVE EDUCATIONAL SERVICES</option>
                                                    <option value="IN-ADFI">IN-ADFI-ADMINISTRATION AND FINANCE</option>
                                                    <option value="IN-ADMN">IN-ADMN-CTSI ADMINISTRATION</option>
                                                    <option value="IN-ADMS">IN-ADMS-ADMISSIONS</option>
                                                    <option value="IN-ADSV">IN-ADSV-ADFI ADMINISTRATIVE SERVICES</option>
                                                    <option value="IN-ADTC">IN-ADTC-ADFI TECH</option>
                                                    <option value="IN-AFFA">IN-AFFA-AFFIRMATIVE ACTION</option>
                                                    <option value="IN-AGRC">IN-AGRC-AGING RESEARCH CENTER</option>
                                                    <option value="IN-AHEC">IN-AHEC-AREA HEALTH EDUCATION CENTERS</option>
                                                    <option value="IN-AHLT">IN-AHLT-HEALTH &amp; REHABILITATION SCIENC</option>
                                                    <option value="IN-AHMT">IN-AHMT-ALLIED HEALTH SCIENCES-MED TE</option>
                                                    <option value="IN-ALUM">IN-ALUM-ALUMNI RELATIONS</option>
                                                    <option value="IN-ANAT">IN-ANAT-ANATOMY &amp; CELL BIOLOGY</option>
                                                    <option value="IN-ANES">IN-ANES-ANESTHESIA</option>
                                                    <option value="IN-ANET">IN-ANET-ANESTHESIA</option>
                                                    <option value="IN-ANTH">IN-ANTH-ANTHROPOLOGY</option>
                                                    <option value="IN-ARCH">IN-ARCH-AC RESEARCH COMMERCIALIZATION </option>
                                                    <option value="IN-ATHA">IN-ATHA-IUPUI ATHLETIC ADVISING</option>
                                                    <option value="IN-ATHL">IN-ATHL-ATHLETICS</option>
                                                    <option value="IN-BCHE">IN-BCHE-CHEMICAL GENOMICS</option>
                                                    <option value="IN-BEAN">IN-BEAN-BIOMEDICAL ENGINEERING</option>
                                                    <option value="IN-BHI">IN-BHI-BIOHEALTH INFORMATICS</option>
                                                    <option value="IN-BICO">IN-BICO-BIOINFORMATICS</option>
                                                    <option value="IN-BIOB">IN-BIOB-INDIANA BIOBANK</option>
                                                    <option value="IN-BIOI">IN-BIOI-THE CENTER FOR BIOINFORMATICS</option>
                                                    <option value="IN-BIOL">IN-BIOL-BIOLOGY</option>
                                                    <option value="IN-BIOM">IN-BIOM-BIOCHEMISTRY/MOLECULAR BIOLOGY</option>
                                                    <option value="IN-BIOP">IN-BIOP-BIOSTATISTICS - PUBLIC HEALTH</option>
                                                    <option value="IN-BIOS">IN-BIOS-BIOSTATISTICS</option>
                                                    <option value="IN-BIOT">IN-BIOT-BIOSTATISTICS - PUBLIC HEALTH</option>
                                                    <option value="IN-BME">IN-BME-BIOMEDICAL ENGINEERING</option>
                                                    <option value="IN-BOWN">IN-BOWN-BOWEN RESEARCH CENTER</option>
                                                    <option value="IN-BROS">IN-BROS-CAMP BROSIUS</option>
                                                    <option value="IN-BSAP">IN-BSAP-BIOETHICS AND SUBJECT ADVOCACY</option>
                                                    <option value="IN-BSAT">IN-BSAT-DEPT OF BIOSTATISTICS</option>
                                                    <option value="IN-BUDG">IN-BUDG-BUDGET OFFICE</option>
                                                    <option value="IN-BURS">IN-BURS-BURSAR OFFICE</option>
                                                    <option value="IN-BUS">IN-BUS-BUSINESS</option>
                                                    <option value="IN-CAAF">IN-CAAF-IUPUC ACADEMIC AFFAIRS</option>
                                                    <option value="IN-CADF">IN-CADF-IUPUC ADMINISTRATION &amp; FINANCE</option>
                                                    <option value="IN-CAIN">IN-CAIN-CAMPUS AND COMMUNITY LIFE</option>
                                                    <option value="IN-CANC">IN-CANC-CANCER CENTER</option>
                                                    <option value="IN-CAPS">IN-CAPS-COUNSELING AND PSYCH SERVICES</option>
                                                    <option value="IN-CARD">IN-CARD-CARDIOLOGY</option>
                                                    <option value="IN-CASE">IN-CASE-CENTER FOR ANATOMICAL SCIENCES</option>
                                                    <option value="IN-CBED">IN-CBED-IUPUC BUSINESS &amp; ECONOMIC DEV</option>
                                                    <option value="IN-CBUS">IN-CBUS-IUPUC BUSINESS</option>
                                                    <option value="IN-CCBB">IN-CCBB-THE CENTER FOR BIOINFORMATICS</option>
                                                    <option value="IN-CCFP">IN-CCFP-CTSI COLLABORATIVE FUNDING PRO</option>
                                                    <option value="IN-CCJR">IN-CCJR-CENTER CRIMINAL JUSTICE RESCH</option>
                                                    <option value="IN-CCOR">IN-CCOR-BIOINFORMATICS CENTER CORE</option>
                                                    <option value="IN-CDCM">IN-CDCM-CAD/CAM CENTER</option>
                                                    <option value="IN-CEDU">IN-CEDU-IUPUC EDUCATION</option>
                                                    <option value="IN-CEHL">IN-CEHL-CNTR FOR ENVIRONMENTAL HEALTH</option>
                                                    <option value="IN-CENR">IN-CENR-IUPUC ENROLLMENT MANAGEMENT</option>
                                                    <option value="IN-CEPD">IN-CEPD-CE PROF DEVELOP &amp; CORP EDUCATI</option>
                                                    <option value="IN-CETH">IN-CETH-CENTER FOR ETHICS</option>
                                                    <option value="IN-CEWH">IN-CEWH-CTR-EXCELLENCE IN WOMEN'S HLTH</option>
                                                    <option value="IN-CEXT">IN-CEXT-IUPUC UNIVERSITY RELATIONS</option>
                                                    <option value="IN-CFSF">IN-CFSF-CAMPUS FACILITY SERVICES FACIL</option>
                                                    <option value="IN-CFSG">IN-CFSG-CAMPUS FACILITY SERVICE GENERA</option>
                                                    <option value="IN-CFSM">IN-CFSM-CAMPUS FACILITY SERVICE MISC.</option>
                                                    <option value="IN-CFSU">IN-CFSU-CAMPUS FACILITY SERVICE UTILIT</option>
                                                    <option value="IN-CGT">IN-CGT-COMPUTER GRAPHICS TECHNOLOGY</option>
                                                    <option value="IN-CHCR">IN-CHCR-CHILD CARE CENTER</option>
                                                    <option value="IN-CHEM">IN-CHEM-CHEMISTRY</option>
                                                    <option value="IN-CHEP">IN-CHEP-COMMUNITY, HEALTH, ENGAGEMENT </option>
                                                    <option value="IN-CHIS">IN-CHIS-CNTR FOR HLTH IMPLEMENT AND IN</option>
                                                    <option value="IN-CHP">IN-CHP-CENTER FOR HEALTH POLICY</option>
                                                    <option value="IN-CHSX">IN-CHSX-AUX-CHIIS IMPLEMENTATION SCI W</option>
                                                    <option value="IN-CHTP">IN-CHTP-CHEMICAL TEST PROGRAM</option>
                                                    <option value="IN-CILT">IN-CILT-COMPUTER INFO LEADERSHIP TECH</option>
                                                    <option value="IN-CIMB">IN-CIMB-CENTER FOR IMMUNO-BIOLOGY</option>
                                                    <option value="IN-CLAR">IN-CLAR-IUPUC LIBERAL ARTS</option>
                                                    <option value="IN-CLIB">IN-CLIB-IUPUC LIBRARY</option>
                                                    <option value="IN-CLN">IN-CLN-COMMUNITY LEARNING NETWORK</option>
                                                    <option value="IN-CLPA">IN-CLPA-CLINICAL PATHOLOGY</option>
                                                    <option value="IN-CLTO">IN-CLTO-CLINICAL TRIALS OFFICE</option>
                                                    <option value="IN-CMCT">IN-CMCT-IUPUI CAMPUS CENTER</option>
                                                    <option value="IN-CMEG">IN-CMEG-IUPUC MECHANICAL ENGINEERING</option>
                                                    <option value="IN-CNUR">IN-CNUR-IUPUC NURSING</option>
                                                    <option value="IN-COLU">IN-COLU-IUPU COLUMBUS</option>
                                                    <option value="IN-COM">IN-COM-CONTINUING MEDICAL EDUCATION</option>
                                                    <option value="IN-COMD">IN-COMD-COMMUNITY DENTISTRY</option>
                                                    <option value="IN-COME">IN-COME-CONTINUING MEDICAL EDUCATION</option>
                                                    <option value="IN-COMH">IN-COMH-COMMUNITY HEALTH SCIENCES</option>
                                                    <option value="IN-COMM">IN-COMM-COMMUNICATION STUDIES</option>
                                                    <option value="IN-COMP">IN-COMP-COMPLETE DENTURE</option>
                                                    <option value="IN-COMR">IN-COMR-COMMUNITY RELATIONS</option>
                                                    <option value="IN-CONS">IN-CONS-CONSTRUCTION TECHNOLOGY</option>
                                                    <option value="IN-COOP">IN-COOP-CE COMMUNICATION AND OPERATION</option>
                                                    <option value="IN-CORE">IN-CORE-CTSI-DATA CORE AND ANALYTICS</option>
                                                    <option value="IN-COST">IN-COST-COMMUNICATION STUDIES</option>
                                                    <option value="IN-COUN">IN-COUN-GENERAL COUNSEL</option>
                                                    <option value="IN-CPHL">IN-CPHL-LILLY FAMILY SCHOOL OF PHILANT</option>
                                                    <option value="IN-CPHR">IN-CPHR-CLINICAL PHARMACOLOGY</option>
                                                    <option value="IN-CPLX">IN-CPLX-AUX-CTSI PROCESSING LAB</option>
                                                    <option value="IN-CRC">IN-CRC-AUX-CLINICAL RESEARCH CENTER</option>
                                                    <option value="IN-CRFA">IN-CRFA-CLINICAL RESEARCH FIN ADMIN</option>
                                                    <option value="IN-CRL">IN-CRL-CENTER FOR RESEARCH &amp; LEARNING</option>
                                                    <option value="IN-CSCI">IN-CSCI-COMPUTER SCIENCE</option>
                                                    <option value="IN-CSCN">IN-CSCN-IUPUC SCIENCE</option>
                                                    <option value="IN-CSP">IN-CSP-CAREER CENTER</option>
                                                    <option value="IN-CTEC">IN-CTEC-COMPUTER TECHNOLOGY</option>
                                                    <option value="IN-CTL">IN-CTL-CENTER FOR TEACHING &amp; LEARNING</option>
                                                    <option value="IN-CTMR">IN-CTMR-CNTR TRANSLATIONAL MUSCULOSKEL</option>
                                                    <option value="IN-CTSI">IN-CTSI-CLINICAL AND TRANSLATIONAL SCI</option>
                                                    <option value="IN-CTSL">IN-CTSL-CENTER FOR SERVICE &amp; LEARNING</option>
                                                    <option value="IN-CUME">IN-CUME-CENTER FOR URBAN AND MULTICULT</option>
                                                    <option value="IN-CUNC">IN-CUNC-IUPUC UNIVERSITY COLLEGE</option>
                                                    <option value="IN-CUPE">IN-CUPE-CENTER FOR URBAN POLICY &amp; ENV</option>
                                                    <option value="IN-CVBM">IN-CVBM-CTR FOR VASCULAR BIOLOGY &amp; MED</option>
                                                    <option value="IN-CXAD">IN-CXAD-IUPUC SHARED PRINTING</option>
                                                    <option value="IN-CXCS">IN-CXCS-CUSTODIAL &amp; MAINTENANCE SERVIC</option>
                                                    <option value="IN-CXFS">IN-CXFS-IUPUC AUX FOOD SERVICES</option>
                                                    <option value="IN-CXPS">IN-CXPS-IUPUC AUX PARKING SERVICES</option>
                                                    <option value="IN-CXSP">IN-CXSP-SECURITY AND POLICE SERVICES</option>
                                                    <option value="IN-DAED">IN-DAED-DENTAL AUXILARY ED</option>
                                                    <option value="IN-DAOF">IN-DAOF-EAD- ADMINISTRATIVE SERVICES</option>
                                                    <option value="IN-DAS">IN-DAS-DELINQUENT ACCOUNT SERVICES</option>
                                                    <option value="IN-DBIO">IN-DBIO-BUSINESS INTELLIGENCE &amp; OPER</option>
                                                    <option value="IN-DBP">IN-DBP-DESIGN AND BIOSTATISTICS PROGR</option>
                                                    <option value="IN-DCMM">IN-DCMM-IUSM OFFICE OF COMMUNICATIONS</option>
                                                    <option value="IN-DCQI">IN-DCQI-DEAN MED-CONTINUOUS QUALITY IM</option>
                                                    <option value="IN-DCT">IN-DCT-DESIGN AND COMMUNICATION TECH</option>
                                                    <option value="IN-DENT">IN-DENT-DENTISTRY</option>
                                                    <option value="IN-DEOS">IN-DEOS-EDUCATION OPERATIONAL SERVICES</option>
                                                    <option value="IN-DEPR">IN-DEPR-DENTAL PRACTICE ADMINISTRATION</option>
                                                    <option value="IN-DERM">IN-DERM-DERMATOLOGY</option>
                                                    <option value="IN-DESP">IN-DESP-EAD - EDUCATION</option>
                                                    <option value="IN-DESP">IN-DESP-EAD-EDUCATION</option>
                                                    <option value="IN-DFAC">IN-DFAC-DEAN OF FACULTY</option>
                                                    <option value="IN-DHPP">IN-DHPP-DEAN MED-HEALTH PROF &amp; PRE DOC</option>
                                                    <option value="IN-DISC">IN-DISC-DIAGNOSTIC SCIENCES</option>
                                                    <option value="IN-DIV">IN-DIV-DIVERSITY</option>
                                                    <option value="IN-DLS">IN-DLS-DIVISION OF LABOR STUDIES</option>
                                                    <option value="IN-DMAN">IN-DMAN-ACAD ADMINISTRATION</option>
                                                    <option value="IN-DMAS">IN-DMAS-DEAN MED-ADMISSION</option>
                                                    <option value="IN-DMCA">IN-DMCA-IU HEALTH AFFAIRS</option>
                                                    <option value="IN-DMCH">IN-DMCH-DEAN MED-CONSUMER HLTH COMM</option>
                                                    <option value="IN-DMCM">IN-DMCM-DEAN MED-COMMUNITY RELATIONS</option>
                                                    <option value="IN-DMCO">IN-DMCO-IUSM-OFFICE OF COMPLIANCE</option>
                                                    <option value="IN-DMCR">IN-DMCR-DEAN- OFFICE OF CLINICAL RESEA</option>
                                                    <option value="IN-DMCT">IN-DMCT-CLINICAL TRANSLAT SCI  (CTSI)</option>
                                                    <option value="IN-DMDA">IN-DMDA-MEDICINE DIVERSITY AFFAIRS</option>
                                                    <option value="IN-DMDV">IN-DMDV-DEAN MED-DEVELOPMENT</option>
                                                    <option value="IN-DMEC">IN-DMEC-UNDERGRADUATE MEDICAL ED</option>
                                                    <option value="IN-DMED">IN-DMED-IUSM DEAN'S OFFICES</option>
                                                    <option value="IN-DMFA">IN-DMFA-DEAN MED-FINANCIAL AFFAIRS</option>
                                                    <option value="IN-DMFC">IN-DMFC-FACILITY PLANNING &amp; OPERATIONS</option>
                                                    <option value="IN-DMFD">IN-DMFD-DEAN'S OFFICE-MED FACULTY DEV</option>
                                                    <option value="IN-DMGA">IN-DMGA-DEAN MED-GRADUATE AFFAIRS</option>
                                                    <option value="IN-DMGT">IN-DMGT-CTSI-DATA MANAGEMENT</option>
                                                    <option value="IN-DMHP">IN-DMHP-DEAN MED-HEALTH PROF PROGRAMS</option>
                                                    <option value="IN-DMHR">IN-DMHR-IUSM DEAN'S HUMAN RESOURCES SE</option>
                                                    <option value="IN-DMIA">IN-DMIA-DEAN MED-INTERNATIONAL AFFAIRS</option>
                                                    <option value="IN-DMMR">IN-DMMR-PUBLIC AND MEDIA RELATIONS</option>
                                                    <option value="IN-DMOO">IN-DMOO-DEAN MED-OPERATIONS</option>
                                                    <option value="IN-DMOS">IN-DMOS-DECISION SUPPORT</option>
                                                    <option value="IN-DMOT">IN-DMOT-INFORMATION SERV &amp; TECHNOLOGY</option>
                                                    <option value="IN-DMP">IN-DMP-DISEASE MODELING PROGRAM</option>
                                                    <option value="IN-DMPD">IN-DMPD-DEAN MED PROFESSIONAL DEV</option>
                                                    <option value="IN-DMPS">IN-DMPS-DEAN'S OFFICE-CLINICAL AFFAIRS</option>
                                                    <option value="IN-DMSC">IN-DMSC-DEAN MED-STU CURRICULAR AFF</option>
                                                    <option value="IN-DMSE">IN-DMSE-DEAN MED-MEDICAL STUDENT EDUCA</option>
                                                    <option value="IN-DMSP">IN-DMSP-DEAN MED-GENERAL PROGRAM SUPP</option>
                                                    <option value="IN-DMWA">IN-DMWA-WISHARD AFFAIRS</option>
                                                    <option value="IN-DORA">IN-DORA-IUSM RESEARCH ADMINISTRATION</option>
                                                    <option value="IN-DOSM">IN-DOSM-OFFIC OF THE DEAN- MEDICINE</option>
                                                    <option value="IN-DPHA">IN-DPHA-PUBLIC HEALTH DEAN'S OFFICE</option>
                                                    <option value="IN-DRSP">IN-DRSP-EAD - RESEARCH</option>
                                                    <option value="IN-DSAD">IN-DSAD-DENTISTRY-ADMINISTRATION</option>
                                                    <option value="IN-DSAF">IN-DSAF-BIORESEARCH FACILITY</option>
                                                    <option value="IN-DSAS">IN-DSAS-DENTISTRY-ADMIN SERVICES</option>
                                                    <option value="IN-DSBL">IN-DSBL-DENTISTRY-BUILDING SUPPORT SER</option>
                                                    <option value="IN-DSBT">IN-DSBT-BIOMATERIALS TESTING</option>
                                                    <option value="IN-DSCA">IN-DSCA-DENTISTRY-CLINICAL AFFAIRS</option>
                                                    <option value="IN-DSCC">IN-DSCC-COMPREHENSIVE CARE AND GENERAL</option>
                                                    <option value="IN-DSDS">IN-DSDS-DENTISTRY-SUPPORT SERVICES</option>
                                                    <option value="IN-DSEM">IN-DSEM-ELECTRON MICROSCOPE</option>
                                                    <option value="IN-DSEN">IN-DSEN-DENTISTRY-ENDODONTICS</option>
                                                    <option value="IN-DSFA">IN-DSFA-DENTISTRY-FINANCIAL AFFAIRS</option>
                                                    <option value="IN-DSFP">IN-DSFP-DENTISTRY-FACULTY PRACTICE</option>
                                                    <option value="IN-DSOB">IN-DSOB-DENTISTRY-BIOMEDICAL &amp; APPLIED</option>
                                                    <option value="IN-DSOF">IN-DSOF-DENTISTRY-ORTHO &amp; ORAL FACIAL</option>
                                                    <option value="IN-DSOH">IN-DSOH-DENTISTRY-ORAL HEALTH</option>
                                                    <option value="IN-DSOS">IN-DSOS-DENTISTRY-ORAL SURGERY/HOSP</option>
                                                    <option value="IN-DSOT">IN-DSOT-ORAL HEALTH TESTING</option>
                                                    <option value="IN-DSPA">IN-DSPA-DENTISTRY-PERIOD/ALLIED DENT</option>
                                                    <option value="IN-DSPD">IN-DSPD-CARIOLOGY/OPERATIVE&amp;DENTAL PUB</option>
                                                    <option value="IN-DSPE">IN-DSPE-DENTISTRY-PEDIATRIC DENTISTRY</option>
                                                    <option value="IN-DSPM">IN-DSPM-DENTISTRY-ORAL PATH</option>
                                                    <option value="IN-DSPR">IN-DSPR-DENTISTRY- PROSTHODONTICS DENT</option>
                                                    <option value="IN-DSRD">IN-DSRD-DENTISTRY-RESTORATIVE DENT</option>
                                                    <option value="IN-DSRS">IN-DSRS-DENTISTRY-RESEARCH</option>
                                                    <option value="IN-DSSI">IN-DSSI-DS SEAL PROGRAM</option>
                                                    <option value="IN-DSTU">IN-DSTU-DEAN OF STUDENTS</option>
                                                    <option value="IN-ECON">IN-ECON-ECONOMICS</option>
                                                    <option value="IN-EDUC">IN-EDUC-EDUCATION</option>
                                                    <option value="IN-ELEN">IN-ELEN-ELECTRICAL &amp; COMPUTER ENGR</option>
                                                    <option value="IN-ELET">IN-ELET-ELECTRICAL TECHNOLOGY</option>
                                                    <option value="IN-EMER">IN-EMER-EMERGENCY MEDICINE</option>
                                                    <option value="IN-EMRD">IN-EMRD-EMERGENCY RESEARCH DIVISION</option>
                                                    <option value="IN-ENDC">IN-ENDC-ENDOCRINOLOGY</option>
                                                    <option value="IN-ENG">IN-ENG-ENGLISH</option>
                                                    <option value="IN-ENGD">IN-ENGD-ENGINEERING, DIVISION OF</option>
                                                    <option value="IN-ENGR">IN-ENGR-ENGINEERING TECHNOLOGIES</option>
                                                    <option value="IN-ENGT">IN-ENGT-ENGINEERING &amp; TECHNOLOGY</option>
                                                    <option value="IN-ENHS">IN-ENHS-ENVIRONMENTAL HEALTH &amp; SAFETY</option>
                                                    <option value="IN-ENRL">IN-ENRL-ENROLLMENT SERVICES</option>
                                                    <option value="IN-ENT">IN-ENT-ENGINEERING TECHNOLOGY</option>
                                                    <option value="IN-ENVR">IN-ENVR-ENVIRONMENTAL HEALTH SCIENCES</option>
                                                    <option value="IN-EPI">IN-EPI-EPIDEMIOLOGY</option>
                                                    <option value="IN-EPSA">IN-EPSA-EDUCATIONAL PARTNERSHIPS</option>
                                                    <option value="IN-ESI">IN-ESI-ENROLLMENT SHAPING INITIATIVE</option>
                                                    <option value="IN-ETCD">IN-ETCD-CTSI: EDUC/TRAINING/CAREER DEV</option>
                                                    <option value="IN-ETEC">IN-ETEC-OFFICE OF EDUCATION TECHNOLOGY</option>
                                                    <option value="IN-ETHC">IN-ETHC-ETHICS CENTER</option>
                                                    <option value="IN-EVP">IN-EVP-EXEC VICE PRESIDENT</option>
                                                    <option value="IN-EXAF">IN-EXAF-COMMUNITY ENGAGEMENT</option>
                                                    <option value="IN-EXEC">IN-EXEC-EXECUTIVE MANAGEMENT</option>
                                                    <option value="IN-EXST">IN-EXST-DIVISION OF EXTENDED STUDIES</option>
                                                    <option value="IN-EXTA">IN-EXTA-EXTERNAL AFFAIRS ADMINISTRATIO</option>
                                                    <option value="IN-FACR">IN-FACR-FACULTY RECORDS</option>
                                                    <option value="IN-FAMM">IN-FAMM-FAMILY MEDICINE</option>
                                                    <option value="IN-FDEV">IN-FDEV-FACULTY DEVELOPMENT</option>
                                                    <option value="IN-FIHC">IN-FIHC-FAIRBANKS INSTITUTE FOR HEALTH</option>
                                                    <option value="IN-FRPP">IN-FRPP-FIXED AND REMOVABLE PARTIAL PR</option>
                                                    <option value="IN-FSNE">IN-FSNE-FAMILIES, SCHOOLS &amp; NEIGHBORHO</option>
                                                    <option value="IN-GAST">IN-GAST-GASTROENTEROLOGY</option>
                                                    <option value="IN-GEOG">IN-GEOG-GEOGRAPHY</option>
                                                    <option value="IN-GEOL">IN-GEOL-GEOLOGY</option>
                                                    <option value="IN-GHTH">IN-GHTH-GLOBAL HEALTH</option>
                                                    <option value="IN-GMED">IN-GMED-GERIATRIC MEDICINE</option>
                                                    <option value="IN-GRAD">IN-GRAD-GRADUATE SCHOOL</option>
                                                    <option value="IN-HAD">IN-HAD-HEALTH ADMINISTRATION</option>
                                                    <option value="IN-HALL">IN-HALL-UNKNOWN</option>
                                                    <option value="IN-HCC">IN-HCC-HUMAN-CENTERED COMPUTING</option>
                                                    <option value="IN-HEMO">IN-HEMO-HEMATOLOGY/ONCOLOGY</option>
                                                    <option value="IN-HERR">IN-HERR-HERRON SCHOOL OF ART &amp; DESIGN</option>
                                                    <option value="IN-HIST">IN-HIST-HISTORY</option>
                                                    <option value="IN-HNET">IN-HNET-IN SPEA HELP NET</option>
                                                    <option value="IN-HONR">IN-HONR-HONORS</option>
                                                    <option value="IN-HOPE">IN-HOPE-HEALTH OUTCOMES, POLICY AND HE</option>
                                                    <option value="IN-HOS">IN-HOS-HOSPITALS</option>
                                                    <option value="IN-HPHY">IN-HPHY-RADIATION SAFETY RECHARGE CTR</option>
                                                    <option value="IN-HPM">IN-HPM-HEALTH POLICY &amp; MANAGEMENT</option>
                                                    <option value="IN-HR">IN-HR-HUMAN RESOURCES ADMINISTRATION</option>
                                                    <option value="IN-HS">IN-HS-HEALTH SCIENCES</option>
                                                    <option value="IN-IACC">IN-IACC-IACUC-ANIMAL CARE USE COMMITTE</option>
                                                    <option value="IN-IACT">IN-IACT-INTERNATIONAL AFFAIRS CENTER</option>
                                                    <option value="IN-ICBI">IN-ICBI-INDIANA CENTER FOR BIOMEDICAL </option>
                                                    <option value="IN-ICC">IN-ICC-INDIANA CAMPUS COMPACT</option>
                                                    <option value="IN-ICFA">IN-ICFA-INDIANAPOLIS CTR FOR ADVANCED </option>
                                                    <option value="IN-ICIC">IN-ICIC-INDIANA CENTER FOR INTERCULTUR</option>
                                                    <option value="IN-ICJI">IN-ICJI-INDIANA CRIMINAL JUSTICE INST</option>
                                                    <option value="IN-ICP">IN-ICP-INDUSTRY COLLABORATION PORTAL</option>
                                                    <option value="IN-IED">IN-IED-INDUSTRIAL EDUCATION</option>
                                                    <option value="IN-IFIN">IN-IFIN-IUPUI FINANCIAL SERVICES</option>
                                                    <option value="IN-IGD">IN-IGD-INTERGROUP DIALOGUE</option>
                                                    <option value="IN-IMAG">IN-IMAG-IMAGIS</option>
                                                    <option value="IN-IMIR">IN-IMIR-INSTITUTIONAL RESEARCH OFFICE</option>
                                                    <option value="IN-IMMU">IN-IMMU-IMMUNOLOGY</option>
                                                    <option value="IN-IN">IN-IN-IND UNIV-PURDUE UNIV INDPLS</option>
                                                    <option value="IN-IN">IN-IN-IND UNIV-PURDUE UNIV-INDPLS</option>
                                                    <option value="IN-INDS">IN-INDS-INDUSTRIAL SUPERVISION</option>
                                                    <option value="IN-INFD">IN-INFD-INFECTIOUS DISEASES</option>
                                                    <option value="IN-INFO">IN-INFO-INFORMATICS</option>
                                                    <option value="IN-INSD">IN-INSD-INSTRUCTIONAL DEVLP. DENT.</option>
                                                    <option value="IN-INTD">IN-INTD-INTERIOR DESIGN PROGRAMS</option>
                                                    <option value="IN-INTE">IN-INTE-UNKNOWN</option>
                                                    <option value="IN-INTM">IN-INTM-GENERAL INTERNAL MEDICINE</option>
                                                    <option value="IN-INTP">IN-INTP-INTERNATIONAL AFFAIRS</option>
                                                    <option value="IN-INTS">IN-INTS-INTERNATIONAL SERVICES</option>
                                                    <option value="IN-INTT">IN-INTT-INTEGRATED TECHNOLOGIES</option>
                                                    <option value="IN-IRDS">IN-IRDS-INSTITUTIONAL RESEARCH &amp; DEC S</option>
                                                    <option value="IN-IRET">IN-IRET-KIT-KNOWLEDGE INFORMATICS &amp; TR</option>
                                                    <option value="IN-IRSI">IN-IRSI-INST FOR RESEARCH ON SOC ISSUE</option>
                                                    <option value="IN-ISTR">IN-ISTR-ISTM RECHARGE CENTER</option>
                                                    <option value="IN-IUF">IN-IUF-IU FOUNDATION</option>
                                                    <option value="IN-IUMG">IN-IUMG-IU MEDICAL GROUP</option>
                                                    <option value="IN-IUSC">IN-IUSC-IU MEDICAL GRP-SPECIALTY CARE</option>
                                                    <option value="IN-JOUR">IN-JOUR-JOURNALISM</option>
                                                    <option value="IN-KATS">IN-KATS-KRANNERT ASSOC TRIALS SITES</option>
                                                    <option value="IN-KENO">IN-KENO-IU-KENYA ONCOLOGY PARTNERSHIP</option>
                                                    <option value="IN-KENY">IN-KENY-IU-KENYA PARTNERSHIP</option>
                                                    <option value="IN-KYNG">IN-KYNG-YOUNG INVESTIGATORS (K-AWARD)</option>
                                                    <option value="IN-LANG">IN-LANG-WORLD LANGUAGES AND CULTURES</option>
                                                    <option value="IN-LARS">IN-LARS-LABORATORY ANIMAL RESOURCES</option>
                                                    <option value="IN-LART">IN-LART-LIBERAL ARTS</option>
                                                    <option value="IN-LAW">IN-LAW-LAW</option>
                                                    <option value="IN-LAWL">IN-LAWL-LAW LIBRARY</option>
                                                    <option value="IN-LBST">IN-LBST-LABOR STUDIES</option>
                                                    <option value="IN-LETR">IN-LETR-LETTERS, SCHOOL OF</option>
                                                    <option value="IN-LIBD">IN-LIBD-DENTAL LIBRARY</option>
                                                    <option value="IN-LIBH">IN-LIBH-LIBRARY - HERRON</option>
                                                    <option value="IN-LIBM">IN-LIBM-RUTH LILLY MEDICAL LIBRARY</option>
                                                    <option value="IN-LIBR">IN-LIBR-UNIVERSITY LIBRARY</option>
                                                    <option value="IN-LILL">IN-LILL-LILLY PROPERTY</option>
                                                    <option value="IN-LRNT">IN-LRNT-LEARNING TECHNOLOGIES</option>
                                                    <option value="IN-MAIL">IN-MAIL-MAIL SERVICES</option>
                                                    <option value="IN-MALY">IN-MALY-COOPERATIVE PROG IN MALAYSIA</option>
                                                    <option value="IN-MANU">IN-MANU-MECHANICAL ENGINEERING TECH</option>
                                                    <option value="IN-MAS">IN-MAS-MATHEMATICAL SCIENCES</option>
                                                    <option value="IN-MATH">IN-MATH-MATHEMATICS</option>
                                                    <option value="IN-MCIM">IN-MCIM-MICROBIOLOGY &amp; IMMUNOLOGY</option>
                                                    <option value="IN-MDCO">IN-MDCO-MEDICINE-CHAIRMAN'S OFFICE</option>
                                                    <option value="IN-MDEP">IN-MDEP-MEDICINE DEPT</option>
                                                    <option value="IN-MECH">IN-MECH-MECHANICAL ENGINEERING</option>
                                                    <option value="IN-MED">IN-MED-SCHOOL OF MEDICINE</option>
                                                    <option value="IN-MEDA">IN-MEDA-SCHOOL OF MEDICINE-SCHOOL OF</option>
                                                    <option value="IN-MEDD">IN-MEDD-EVANSVILLE CTR FOR MEDICAL EDU</option>
                                                    <option value="IN-MEDE">IN-MEDE-IUSM-EVANSVILLE</option>
                                                    <option value="IN-MEDF">IN-MEDF-IUSM-FORT WAYNE</option>
                                                    <option value="IN-MEDL">IN-MEDL-IUSM-WEST LAFAYETTE</option>
                                                    <option value="IN-MEDM">IN-MEDM-IUSM-MUNCIE</option>
                                                    <option value="IN-MEDN">IN-MEDN-IUSM-NORTHWEST-GARY</option>
                                                    <option value="IN-MEDR">IN-MEDR-MEDICAL EDUCATIONAL RESOURCES</option>
                                                    <option value="IN-MEDS">IN-MEDS-IUSM-SOUTH BEND</option>
                                                    <option value="IN-MEDT">IN-MEDT-IUSM-TERRE HAUTE</option>
                                                    <option value="IN-MEDU">IN-MEDU-MEDICAL EDUCATION</option>
                                                    <option value="IN-MEDW">IN-MEDW-IUSM SCHOOL WIDE PROGRAM</option>
                                                    <option value="IN-MELB">IN-MELB-MEDICAL LABORATORY TECHNOLOGY</option>
                                                    <option value="IN-MGMT">IN-MGMT-MANAGEMENT, BUSINESS</option>
                                                    <option value="IN-MILS">IN-MILS-MILITARY SCIENCE</option>
                                                    <option value="IN-MISC">IN-MISC-MISCELLANEOUS--MEDICINE</option>
                                                    <option value="IN-MKTG">IN-MKTG-MARKETING, BUSINESS</option>
                                                    <option value="IN-MMGE">IN-MMGE-MEDICAL &amp; MOLECULAR GENETICS</option>
                                                    <option value="IN-MREL">IN-MREL-MEDIA RELATIONS</option>
                                                    <option value="IN-MRES">IN-MRES-RESEARCH ADMINISTRATION</option>
                                                    <option value="IN-MSCI">IN-MSCI-IUSM - BLOOMINGTON</option>
                                                    <option value="IN-MSDS">IN-MSDS-MED SPECIALTY DELIVERY SYSTEM</option>
                                                    <option value="IN-MSMS">IN-MSMS-MS IN MEDICAL SCIENCE PROGRAM</option>
                                                    <option value="IN-MSTD">IN-MSTD-MUSEM STUDIES</option>
                                                    <option value="IN-MSVS">IN-MSVS-MICROBIOLOGY SERVICES&nbsp;</option>
                                                    <option value="IN-MTEC">IN-MTEC-ALLIED HEALTH SCIENCES-MEDIC</option>
                                                    <option value="IN-MTP">IN-MTP-MOLECULAR THERAPEUTICS</option>
                                                    <option value="IN-MULT">IN-MULT-MULTICULTURAL CENTER</option>
                                                    <option value="IN-MUS">IN-MUS-MUSIC &amp; ARTS TECHNOLOGY</option>
                                                    <option value="IN-MVOL">IN-MVOL-MEDICINE FACULTY VOLUNTEERS</option>
                                                    <option value="IN-NATA">IN-NATA-NATATORIUM</option>
                                                    <option value="IN-NCPG">IN-NCPG-NATL COMM ON PLANNED GIVING</option>
                                                    <option value="IN-ND">IN-ND-NUTRITION &amp; DIETETICS</option>
                                                    <option value="IN-NEPH">IN-NEPH-NEPHROLOGY</option>
                                                    <option value="IN-NEUR">IN-NEUR-NEUROLOGY</option>
                                                    <option value="IN-NSCC">IN-NSCC-NEUROSCIENCE ADMINISTRATION</option>
                                                    <option value="IN-NURS">IN-NURS-NURSING</option>
                                                    <option value="IN-NUTR">IN-NUTR-NUTRITION &amp; DIETETICS</option>
                                                    <option value="IN-NWLB">IN-NWLB-NORTHWEST CTR LAB SERVICES</option>
                                                    <option value="IN-OACA">IN-OACA-OTHER ACADEMIC PROGRAMS</option>
                                                    <option value="IN-OADT">IN-OADT-UNKNOWN</option>
                                                    <option value="IN-OBGY">IN-OBGY-OBSTETRICS AND GYNECOLOGY</option>
                                                    <option value="IN-OCEA">IN-OCEA-OFFICE OF COMMUNITY ENGAGEMENT</option>
                                                    <option value="IN-OCRF">IN-OCRF-AUX-CTSI OUTPATIENT CLINICAL R</option>
                                                    <option value="IN-ODIA">IN-ODIA-ORAL DIAGNOSIS-ORAL MED</option>
                                                    <option value="IN-OLAS">IN-OLAS-ORG LEADERSHIP &amp; SUPERVISION</option>
                                                    <option value="IN-OMER">IN-OMER-MEDICAL EDUCATION RESEARCH</option>
                                                    <option value="IN-ONCO">IN-ONCO-LAB-EXPERIMENTAL ONCOLOGY</option>
                                                    <option value="IN-OPTH">IN-OPTH-OPHTHALMOLOGY</option>
                                                    <option value="IN-ORFD">IN-ORFD-ORAL FACIAL DEVLPMT</option>
                                                    <option value="IN-ORTS">IN-ORTS-ORTHOPAEDIC SURGERY</option>
                                                    <option value="IN-OSMP">IN-OSMP-DEPT. ORAL SURGERY MED. &amp; PATH</option>
                                                    <option value="IN-OT">IN-OT-OCCUPATIONAL THERAPY</option>
                                                    <option value="IN-OTHN">IN-OTHN-OTOLARYNGOLOGY &amp; H/N SURGERY</option>
                                                    <option value="IN-OVCR">IN-OVCR-VICE CHANCELLOR FOR RESEARCH</option>
                                                    <option value="IN-OVM">IN-OVM-OFFICE OF VISUAL MEDIA</option>
                                                    <option value="IN-PA">IN-PA-PHYSICIAN ASSISTANT PROGRAM</option>
                                                    <option value="IN-PADO">IN-PADO-PED-ADOLESCENT MEDICINE</option>
                                                    <option value="IN-PAII">IN-PAII-PLANNING &amp; INSTITUTIONAL IMPRO</option>
                                                    <option value="IN-PALM">IN-PALM-PATHOLOGY AND LABORATORY MEDIC</option>
                                                    <option value="IN-PATH">IN-PATH-PATHOLOGY AND LABORATORY MED</option>
                                                    <option value="IN-PAY">IN-PAY-PAYROLL OFFICE</option>
                                                    <option value="IN-PBEH">IN-PBEH-PED-BEHAVIORAL PEDIATRICS</option>
                                                    <option value="IN-PBHL">IN-PBHL-PUBLIC HEALTH</option>
                                                    <option value="IN-PBIO">IN-PBIO-CELLULAR &amp; INTEGRATIVE PHYSIO</option>
                                                    <option value="IN-PCDB">IN-PCDB-PED-CARDIAC DEV BIOLOGY WELLS</option>
                                                    <option value="IN-PCDC">IN-PCDC-PED-CHILD DEVELOPMENT CENTER</option>
                                                    <option value="IN-PCER">IN-PCER-PED-COMPARATIVE EFFECTIVENESS </option>
                                                    <option value="IN-PCIR">IN-PCIR-CTSI CLINICAL RESEARCH SERVICE</option>
                                                    <option value="IN-PCPS">IN-PCPS-PED-CHILD PROTECTION PROGRAM</option>
                                                    <option value="IN-PCRD">IN-PCRD-PED-CARDIOLOGY</option>
                                                    <option value="IN-PCTR">IN-PCTR-PED-CLINICAL TRANSLAT RESEARCH</option>
                                                    <option value="IN-PD">IN-PD-POLICE SERVICES</option>
                                                    <option value="IN-PDCE">IN-PDCE-PED-SAFETY EDUCATION OUTREACH</option>
                                                    <option value="IN-PDIT">IN-PDIT-PED-DEPT INFORMATION TECHNOL</option>
                                                    <option value="IN-PDT">IN-PDT-PROJECT DEVELOPMENT TEAMS</option>
                                                    <option value="IN-PDTS">IN-PDTS-PED-TRAFFIC SAFETY</option>
                                                    <option value="IN-PDVL">IN-PDVL-PED-DEVELOPMENTAL PEDIATRICS</option>
                                                    <option value="IN-PE">IN-PE-PHYSICAL EDUCATION DEPARTMENT</option>
                                                    <option value="IN-PEC">IN-PEC-PATIENT ENGAGEMENT CORE</option>
                                                    <option value="IN-PED">IN-PED-PEDIATRICS</option>
                                                    <option value="IN-PEDB">IN-PEDB-PED BASIC RESEARCH</option>
                                                    <option value="IN-PEDC">IN-PEDC-PED-CHAIRMAN'S OFFICE</option>
                                                    <option value="IN-PEDG">IN-PEDG-PED-CHAIRMAN'S OFFICE GENERAL</option>
                                                    <option value="IN-PEDU">IN-PEDU-PED-EDUCATION OFFICE</option>
                                                    <option value="IN-PENB">IN-PENB-PED-ENDOCRINOLOGY BASIC RES</option>
                                                    <option value="IN-PEND">IN-PEND-PED-ENDOCRINOLOGY/DIABETOLOGY</option>
                                                    <option value="IN-PERS">IN-PERS-PED-EMERGENCY ROOM SERVICES</option>
                                                    <option value="IN-PFVI">IN-PFVI-PED-FAMILY VIOLENCE INSTITUTE</option>
                                                    <option value="IN-PGAS">IN-PGAS-PED-GASTROINTESTINAL DISEASES</option>
                                                    <option value="IN-PGEN">IN-PGEN-PED-GENERAL/COMMUNITY PEDS</option>
                                                    <option value="IN-PGNB">IN-PGNB-PED-GENETICS RESEARCH</option>
                                                    <option value="IN-PHAR">IN-PHAR-PHARMACOLOGY</option>
                                                    <option value="IN-PHED">IN-PHED-PHYSICAL EDUCATION &amp; TOURISM M</option>
                                                    <option value="IN-PHEM">IN-PHEM-PED-HEMATOLOGY/ONCOLOGY</option>
                                                    <option value="IN-PHIL">IN-PHIL-PHILOSOPHY</option>
                                                    <option value="IN-PHMB">IN-PHMB-PED-HEME/ONC BASIC RESEARCH</option>
                                                    <option value="IN-PHMR">IN-PHMR-PHYSICAL MEDICINE &amp; REHAB</option>
                                                    <option value="IN-PHOS">IN-PHOS-PED-HOSPITAL MEDICINE</option>
                                                    <option value="IN-PHSR">IN-PHSR-PED-HEALTH SERVICES RESEARCH</option>
                                                    <option value="IN-PHST">IN-PHST-PHILANTHROPIC STUDIES</option>
                                                    <option value="IN-PHTX">IN-PHTX-PHARMACOLOGY &amp; TOXICOLOGY</option>
                                                    <option value="IN-PHYP">IN-PHYP-PHYSICAL PLANT</option>
                                                    <option value="IN-PHYS">IN-PHYS-PHYSICS</option>
                                                    <option value="IN-PICB">IN-PICB-PED-INTENSIVE CARE BASIC RES</option>
                                                    <option value="IN-PICU">IN-PICU-PED-INTENSIVE AND CRITICAL CAR</option>
                                                    <option value="IN-PIFB">IN-PIFB-PED-INFECTIOUS DISEASE RESEARC</option>
                                                    <option value="IN-PIHP">IN-PIHP-PED-IU HEALTH PHYSICIANS</option>
                                                    <option value="IN-PINF">IN-PINF-PED-INFECTIOUS DISEASES</option>
                                                    <option value="IN-PL">IN-PL-PHILOSOPHY</option>
                                                    <option value="IN-PLAN">IN-PLAN-PLANNING &amp; INSTITUTIONAL IMPRO</option>
                                                    <option value="IN-PMED">IN-PMED-PREVENTIVE MEDICINE</option>
                                                    <option value="IN-PMET">IN-PMET-PED-METABOLIC DISEASE BIOCHEM</option>
                                                    <option value="IN-PMSL">IN-PMSL-PED-MEDICAL SERVICE LEARNING</option>
                                                    <option value="IN-PNDB">IN-PNDB-PED-NEURODEVEL BEHAV CNTR</option>
                                                    <option value="IN-PNEB">IN-PNEB-PED-NEONATAL BASIC RESEARCH</option>
                                                    <option value="IN-PNEF">IN-PNEF-PED-NEPHROLOGY</option>
                                                    <option value="IN-PNEO">IN-PNEO-PED-NEONATAL MEDICINE</option>
                                                    <option value="IN-PNFR">IN-PNFR-PED-NEPHROLOGY RESEARCH</option>
                                                    <option value="IN-POLI">IN-POLI-POLIS</option>
                                                    <option value="IN-POLS">IN-POLS-POLITICAL SCIENCE</option>
                                                    <option value="IN-PON">IN-PON-PEDODONTICS</option>
                                                    <option value="IN-PORT">IN-PORT-CTSI-WEB PORTAL</option>
                                                    <option value="IN-PPAC">IN-PPAC-PED-PALLIATIVE CARE PROGRAM</option>
                                                    <option value="IN-PPLB">IN-PPLB-PED-PULMONARY BASIC RESEARCH</option>
                                                    <option value="IN-PPMR">IN-PPMR-PED-PHYSICAL MEDICINE REHAB</option>
                                                    <option value="IN-PPUL">IN-PPUL-PED-PULMONOLOGY</option>
                                                    <option value="IN-PRES">IN-PRES-PRESIDENT'S OFFICE</option>
                                                    <option value="IN-PRGM">IN-PRGM-OTHER EDUCATIONAL PROGRAMS</option>
                                                    <option value="IN-PRHR">IN-PRHR-PED-RHEUMATOLOGY RESEARCH</option>
                                                    <option value="IN-PRHU">IN-PRHU-PED-RHEUMATOLOGY</option>
                                                    <option value="IN-PSCT">IN-PSCT-PED-STEM CELL TRANSPLANT</option>
                                                    <option value="IN-PSY">IN-PSY-PSYCHOLOGY</option>
                                                    <option value="IN-PSYC">IN-PSYC-PSYCHIATRY</option>
                                                    <option value="IN-PT">IN-PT-PHYSICAL THERAPY</option>
                                                    <option value="IN-PTRB">IN-PTRB-PED-TRANSLATIONAL INTEGRATED B</option>
                                                    <option value="IN-PTRT">IN-PTRT-PED-TRANSPORT SERVCES PROGRAM</option>
                                                    <option value="IN-PUBH">IN-PUBH-PUBLIC HEALTH</option>
                                                    <option value="IN-PULM">IN-PULM-PULMONARY</option>
                                                    <option value="IN-PUPA">IN-PUPA-PED-UNIVERSITY PEDIATRIC ASSOC</option>
                                                    <option value="IN-PUR">IN-PUR-PURCHASING</option>
                                                    <option value="IN-PYAC">IN-PYAC-PED-YOUTH &amp; ADOL CONDITIONS</option>
                                                    <option value="IN-RADD">IN-RADD-RADIOLOGY, DENTAL</option>
                                                    <option value="IN-RADI">IN-RADI-RADIOLOGY, SCHOOL OF MEDICINE</option>
                                                    <option value="IN-RADY">IN-RADY-RADIOLOGY &amp; IMAGING SCIENCES</option>
                                                    <option value="IN-RAON">IN-RAON-RADIATION ONCOLOGY</option>
                                                    <option value="IN-RECP">IN-RECP-REAL ESTATE CERTIFICATION PROG</option>
                                                    <option value="IN-RECS">IN-RECS-CAMPUS RECREATION</option>
                                                    <option value="IN-REDS">IN-REDS-RESTORATIVE DENTISTRY</option>
                                                    <option value="IN-REGI">IN-REGI-REGENSTRIEF INSTITUTE</option>
                                                    <option value="IN-REGR">IN-REGR-REGISTRAR</option>
                                                    <option value="IN-REL">IN-REL-RELIGIOUS STUDIES</option>
                                                    <option value="IN-RESG">IN-RESG-RESEARCH &amp; GRADUATE STUDIES</option>
                                                    <option value="IN-RESL">IN-RESL-RESIDENCE LIFE</option>
                                                    <option value="IN-RHEU">IN-RHEU-RHEUMATOLOGY</option>
                                                    <option value="IN-RIME">IN-RIME-RESEARCH IN MEDICAL EDUCATION</option>
                                                    <option value="IN-RKS">IN-RKS-REGULATORY, KNOWLEDGE SERVICES</option>
                                                    <option value="IN-RMHO">IN-RMHO-RONALD MCDONALD HOUSE</option>
                                                    <option value="IN-RSDT">IN-RSDT-GRADUATE MEDICAL EDUCATION</option>
                                                    <option value="IN-RSYS">IN-RSYS-CTSI-RESEARCH SYSTEMS</option>
                                                    <option value="IN-SAFE">IN-SAFE-PUBLIC SAFETY</option>
                                                    <option value="IN-SAID">IN-SAID-SCHOLARSHIP &amp; FINANCIAL AIDS</option>
                                                    <option value="IN-SBS">IN-SBS-SOCIAL &amp; BEHAVIORAL SCIENCES</option>
                                                    <option value="IN-SCI">IN-SCI-SCIENCE</option>
                                                    <option value="IN-SCRD">IN-SCRD-CARDIOSURGERY</option>
                                                    <option value="IN-SCS">IN-SCS-CONTINUING STUDIES, SCHOOL OF</option>
                                                    <option value="IN-SDOT">IN-SDOT-IND STATE DEPT OF TOXICOLOGY</option>
                                                    <option value="IN-SEX">IN-SEX-INSTITUTE FOR SEX RESEARCH</option>
                                                    <option value="IN-SGEN">IN-SGEN-GENERAL SURGERY</option>
                                                    <option value="IN-SHLE">IN-SHLE-LEARN AND SHOP</option>
                                                    <option value="IN-SHSR">IN-SHSR-IUPUI HEALTH SERVICES</option>
                                                    <option value="IN-SLIS">IN-SLIS-LIBRARY &amp; INFORMATION SCIENCE</option>
                                                    <option value="IN-SMMC">IN-SMMC-SPRING MILL MEDICAL CLINICS</option>
                                                    <option value="IN-SMSC">IN-SMSC-SPRING MILL SURGERY CENTER</option>
                                                    <option value="IN-SNEU">IN-SNEU-NEUROLOGICAL SURGERY</option>
                                                    <option value="IN-SNRI">IN-SNRI-STARK NEUROSCIENCES RES INST</option>
                                                    <option value="IN-SNTS">IN-SNTS-ADSV SYSTEMS ANALYSIS &amp; INTEGR</option>
                                                    <option value="IN-SOC">IN-SOC-SOCIOLOGY</option>
                                                    <option value="IN-SOCW">IN-SOCW-SOCIAL WORK</option>
                                                    <option value="IN-SOLU">IN-SOLU-SOLUTION CENTER</option>
                                                    <option value="IN-SPEA">IN-SPEA-PUBLIC &amp; ENVIRONMENTAL AFFAIRS</option>
                                                    <option value="IN-SPED">IN-SPED-PEDIATRIC SURGERY</option>
                                                    <option value="IN-SPHS">IN-SPHS-SPEECH AND HEARING SCIENCES</option>
                                                    <option value="IN-SPLA">IN-SPLA-PLASTIC SURGERY</option>
                                                    <option value="IN-SPON">IN-SPON-SPONSORED PROGRAMS</option>
                                                    <option value="IN-SPTC">IN-SPTC-SPORTS SERVICES</option>
                                                    <option value="IN-SRO">IN-SRO-SURVEY RESEARCH OFFICE</option>
                                                    <option value="IN-SRRN">IN-SRRN-AUX-CTSI RESEARCH NETWORK RECH</option>
                                                    <option value="IN-SSER">IN-SSER-SUPPORT SERVICES-STUDENT LIFE</option>
                                                    <option value="IN-SSF">IN-SSF-SPECIMEN STORAGE FACILITY</option>
                                                    <option value="IN-SSRW">IN-SSRW-SCHOOL OF SOCIAL WORK</option>
                                                    <option value="IN-STAF">IN-STAF-STUDENT ACTIVITY FEE</option>
                                                    <option value="IN-STLI">IN-STLI-STUDENT LIFE</option>
                                                    <option value="IN-STRM">IN-STRM-TRAUMA SURGERY</option>
                                                    <option value="IN-STRN">IN-STRN-TRANSPLANT SURGERY</option>
                                                    <option value="IN-SUBJ">IN-SUBJ-CTSI SUBJECT RECRUITMENT</option>
                                                    <option value="IN-SUPV">IN-SUPV-SUPERVISION; ENG &amp; TECH</option>
                                                    <option value="IN-SURB">IN-SURB-SURGERY BUSINESS FINANCE</option>
                                                    <option value="IN-SURC">IN-SURC-SURGERY-CHAIRMAN'S OFFICE</option>
                                                    <option value="IN-SURG">IN-SURG-SURGERY</option>
                                                    <option value="IN-SURP">IN-SURP-IUPUI SURPLUS</option>
                                                    <option value="IN-SUST">IN-SUST-OFFICE OF SUSTAINABILITY</option>
                                                    <option value="IN-SVAS">IN-SVAS-VASCULAR SURGERY</option>
                                                    <option value="IN-SWKD">IN-SWKD-SOCIAL WORK - DIRECT</option>
                                                    <option value="IN-TCEM">IN-TCEM-TOURISM,CONVT AND EVENT MGMT</option>
                                                    <option value="IN-TCOM">IN-TCOM-TECHNICAL COMMUNICATIONS</option>
                                                    <option value="IN-TELC">IN-TELC-TELECOMMUNICATIONS</option>
                                                    <option value="IN-TEST">IN-TEST-TESTING CENTER</option>
                                                    <option value="IN-TIP">IN-TIP-TRANSLATIONAL INFORMATICS PROG</option>
                                                    <option value="IN-TLC">IN-TLC-TECHNOLOGY LEADERSHIP &amp; COMM</option>
                                                    <option value="IN-TMAN">IN-TMAN-TECHNOLOGY MANAGEMENT</option>
                                                    <option value="IN-TPRE">IN-TPRE-PREDOCTORAL PROGRAM</option>
                                                    <option value="IN-TPST">IN-TPST-POSTDOCTORAL PROGRAM</option>
                                                    <option value="IN-TTR">IN-TTR-CTSI TRANSLATIONAL TECH &amp; RES</option>
                                                    <option value="IN-UCE">IN-UCE-UNIVERSITY CONTINUING EDUCATIO</option>
                                                    <option value="IN-UCOL">IN-UCOL-UNIVERSITY COLLEGE</option>
                                                    <option value="IN-UCOU">IN-UCOU-UNIVERSITY COUNSEL</option>
                                                    <option value="IN-UDIV">IN-UDIV-UNIVERSITY DIVISION</option>
                                                    <option value="IN-UGE">IN-UGE-DIVISION OF UNDERGRADUATE EDUC</option>
                                                    <option value="IN-UGED">IN-UGED-UNDERGRADUATE EDUCATION</option>
                                                    <option value="IN-ULIB">IN-ULIB-UNIVERSITY LIBRARIES</option>
                                                    <option value="IN-UMDA">IN-UMDA-UMDA</option>
                                                    <option value="IN-UROL">IN-UROL-UROLOGY</option>
                                                    <option value="IN-VET">IN-VET-VETERANS AFFAIRS OFFICE</option>
                                                    <option value="IN-VPIN">IN-VPIN-VICE-PRESIDENT, INDIANAPOLIS</option>
                                                    <option value="IN-VPPL">IN-VPPL-EXEC VP UNIVERSITY ACADEMIC AF</option>
                                                    <option value="IN-WCPR">IN-WCPR-PED-WELLS CTR FOR PED RES</option>
                                                    <option value="IN-WEC">IN-WEC-WEEKEND COLLEGE</option>
                                                    <option value="IN-WKST">IN-WKST-OFF CAMPUS</option>
                                                    <option value="IN-WONC">IN-WONC-WALTHER ONCOLOGY CENTER</option>
                                                    <option value="IU-IU2">IU-IU2-IU2 DEPARTMENT</option>
                                                    <option value="IU-UNIV">IU-UNIV-UNIVERSITY LEVEL</option>
                                                    <option value="KO-ACAD">KO-ACAD-ACADEMIC AFFAIRS</option>
                                                    <option value="KO-ACSP">KO-ACSP-ACADEMIC SUPPORT</option>
                                                    <option value="KO-ADMS">KO-ADMS-ADMISSIONS</option>
                                                    <option value="KO-ADV">KO-ADV-ADVANCEMENT</option>
                                                    <option value="KO-AHLT">KO-AHLT-ALLIED HEALTH SCIENCES</option>
                                                    <option value="KO-ARSC">KO-ARSC-SCHOOL OF ARTS &amp; SCIENCES</option>
                                                    <option value="KO-ASTH">KO-ASTH-NURSING ASTHMA PROGRAM</option>
                                                    <option value="KO-ATHL">KO-ATHL-KOKOMO ATHLETICS</option>
                                                    <option value="KO-AUTM">KO-AUTM-AUDITORIUM</option>
                                                    <option value="KO-BOOK">KO-BOOK-BOOKSTORE</option>
                                                    <option value="KO-BSPS">KO-BSPS-BIOLOGY &amp; PHYSICAL SCIENCES</option>
                                                    <option value="KO-BUS">KO-BUS-SCHOOL OF BUSINESS</option>
                                                    <option value="KO-CACA">KO-CACA-CAMPUS ACADEMIC AFFAIRS</option>
                                                    <option value="KO-CARD">KO-CARD-KOKOMO ID CARD</option>
                                                    <option value="KO-CASS">KO-CASS-CAMPUS STUDENT SERVICES</option>
                                                    <option value="KO-CHAN">KO-CHAN-CHANCELLOR</option>
                                                    <option value="KO-CHOF">KO-CHOF-CHANCELLOR'S OFFICE</option>
                                                    <option value="KO-CJHS">KO-CJHS-CRIMINAL JUS &amp; HMELND SECURITY</option>
                                                    <option value="KO-COAS">KO-COAS-ARTS &amp; SCIENCES, COLLEGE OF</option>
                                                    <option value="KO-COLE">KO-COLE-COLE WELLNESS &amp; FITNESS</option>
                                                    <option value="KO-COMM">KO-COMM-COMMUNICATION &amp; THEATER</option>
                                                    <option value="KO-CSER">KO-CSER-COMPUTER SERVICES</option>
                                                    <option value="KO-CSP">KO-CSP-CAREER &amp; ACCESSIBILITY CENTER</option>
                                                    <option value="KO-CTSD">KO-CTSD-CONTINUING STUDIES</option>
                                                    <option value="KO-DFAC">KO-DFAC-DEAN OF FACULTY</option>
                                                    <option value="KO-DGBU">KO-DGBU-DGTS BUSINESS</option>
                                                    <option value="KO-DGEN">KO-DGEN-DGTS ENGLISH</option>
                                                    <option value="KO-DGMA">KO-DGMA-DGTS MATHEMATICS</option>
                                                    <option value="KO-DGTS">KO-DGTS-DGTS (DIVISION OF GENERAL AND</option>
                                                    <option value="KO-EDUC">KO-EDUC-SCHOOL OF EDUCATION</option>
                                                    <option value="KO-EET">KO-EET-ELECTRICAL ENGINEERING TECHNOL</option>
                                                    <option value="KO-ELET">KO-ELET-ELECTRICAL TECHNOLOGY</option>
                                                    <option value="KO-EXAF">KO-EXAF-EXTERNAL AFFAIRS</option>
                                                    <option value="KO-EXEC">KO-EXEC-EXECUTIVE MANAGEMENT</option>
                                                    <option value="KO-FAFF">KO-FAFF-ADMINISTRATION &amp; FINANCE</option>
                                                    <option value="KO-FIRE">KO-FIRE-FIRE SCIENCE TECHNOLOGY</option>
                                                    <option value="KO-FOOD">KO-FOOD-FOOD SERVICES</option>
                                                    <option value="KO-GENA">KO-GENA-GENERAL ADMINISTRATION</option>
                                                    <option value="KO-GNST">KO-GNST-GENERAL STUDIES</option>
                                                    <option value="KO-GRAD">KO-GRAD-GRADUATE SCHOOL</option>
                                                    <option value="KO-HMAN">KO-HMAN-HUMANITIES</option>
                                                    <option value="KO-HMEC">KO-HMEC-HOME ECONOMICS</option>
                                                    <option value="KO-HSDP">KO-HSDP-HOSPITAL DATA PROCESSING</option>
                                                    <option value="KO-HSPT">KO-HSPT-HOSPITALITY &amp; TOURISM</option>
                                                    <option value="KO-HSS">KO-HSS-HUMANITIES &amp; SOCIAL SCIENCES</option>
                                                    <option value="KO-KO">KO-KO-KOKOMO CAMPUS</option>
                                                    <option value="KO-LABR">KO-LABR-LABOR EDUCATION AND RESEARCH C</option>
                                                    <option value="KO-LABS">KO-LABS-LABOR STUDIES, DIVISION OF</option>
                                                    <option value="KO-LART">KO-LART-LIBERAL ARTS, SCHOOL OF</option>
                                                    <option value="KO-LAW">KO-LAW-LAW, SCHOOL OF</option>
                                                    <option value="KO-LBRL">KO-LBRL-LIBERAL STUDIES, DIVISION OF</option>
                                                    <option value="KO-LBST">KO-LBST-LABOR STUDIES</option>
                                                    <option value="KO-LEC">KO-LEC-LEARNING ENHANCEMENT CENTER</option>
                                                    <option value="KO-LIBG">KO-LIBG-LIBRARY GENERAL</option>
                                                    <option value="KO-LIBR">KO-LIBR-LIBRARY</option>
                                                    <option value="KO-MAIS">KO-MAIS-MATHEMATICAL &amp; INFO SCIENCES</option>
                                                    <option value="KO-MECH">KO-MECH-MECHANICAL ENGINEERING</option>
                                                    <option value="KO-MFLG">KO-MFLG-MODERN FOREIGN LANGUAGES</option>
                                                    <option value="KO-MREL">KO-MREL-MEDIA &amp; MARKETING</option>
                                                    <option value="KO-MUSD">KO-MUSD-MUSIC, DIVISION OF</option>
                                                    <option value="KO-NIMS">KO-NIMS-SCIENCE, MATH &amp; INFORMATICS</option>
                                                    <option value="KO-NMAT">KO-NMAT-NEW MEDIA, ART, AND TECHNOLOGY</option>
                                                    <option value="KO-NSCI">KO-NSCI-NATURAL SCIENCES, DIVISION OF</option>
                                                    <option value="KO-NURS">KO-NURS-NURSING</option>
                                                    <option value="KO-NUTR">KO-NUTR-NUTRITION AND DIETETICS</option>
                                                    <option value="KO-OACA">KO-OACA-OTHER ACADEMIC PROGRAMS</option>
                                                    <option value="KO-OTAC">KO-OTAC-OTHER ACADEMIC</option>
                                                    <option value="KO-OVER">KO-OVER-OVERSEAS STUDY - GENERAL</option>
                                                    <option value="KO-PAHM">KO-PAHM-PUBLIC ADM &amp; HEALTH MANAGEMENT</option>
                                                    <option value="KO-PAII">KO-PAII-PLANNING &amp; INSTITUTIONAL RES</option>
                                                    <option value="KO-PDUP">KO-PDUP-PRINTING &amp; DUPLICATING</option>
                                                    <option value="KO-PERP">KO-PERP-PURDUE PROGRAMS REGIONAL CAMP</option>
                                                    <option value="KO-PHAR">KO-PHAR-PHARMACOLOGY</option>
                                                    <option value="KO-PHYP">KO-PHYP-PHYSICAL PLANT</option>
                                                    <option value="KO-PMED">KO-PMED-PREVENTIVE MEDICINE</option>
                                                    <option value="KO-POR">KO-POR-PROJECT OUTREACH</option>
                                                    <option value="KO-PROF">KO-PROF-PROFESSIONAL PRACTICE PROGRAM</option>
                                                    <option value="KO-PSY">KO-PSY-PSYCHOLOGY</option>
                                                    <option value="KO-RCLN">KO-RCLN-READING CLINIC</option>
                                                    <option value="KO-READ">KO-READ-READING AND STUDY SKILLS CENTE</option>
                                                    <option value="KO-RECP">KO-RECP-REAL ESTATE CERTIFICATION PROG</option>
                                                    <option value="KO-REGR">KO-REGR-REGISTRAR</option>
                                                    <option value="KO-SACT">KO-SACT-STUDENT ACTIVITIES</option>
                                                    <option value="KO-SAID">KO-SAID-SCHOLARSHIP &amp; FINANCIAL AIDS</option>
                                                    <option value="KO-SBSC">KO-SBSC-SOCIOLOGY,HIST &amp; POLITICAL SCI</option>
                                                    <option value="KO-SCI">KO-SCI-SCIENCE</option>
                                                    <option value="KO-SHLE">KO-SHLE-LEARN AND SHOP</option>
                                                    <option value="KO-SHPS">KO-SHPS-SOC, HIST &amp; POLITICAL SCIENCE</option>
                                                    <option value="KO-SMI">KO-SMI-SCIENCE, MATH &amp; INFORMATICS</option>
                                                    <option value="KO-SOC">KO-SOC-SOCIAL SCIENCES, DIVISION OF</option>
                                                    <option value="KO-SOCS">KO-SOCS-SOCIAL SCIENCES, DIVISION OFVI</option>
                                                    <option value="KO-SPEA">KO-SPEA-PUBLIC &amp; ENVIRONMENTAL AFFAIRS</option>
                                                    <option value="KO-SPPG">KO-SPPG-SPECIAL PROGRAMS</option>
                                                    <option value="KO-SSCI">KO-SSCI-SCHOOL OF SCIENCES</option>
                                                    <option value="KO-SSER">KO-SSER-STUDENT SERVICES</option>
                                                    <option value="KO-SUMS">KO-SUMS-SUMMER SESSIONS</option>
                                                    <option value="KO-TELC">KO-TELC-TELECOMMUNICATIONS</option>
                                                    <option value="KO-TELE">KO-TELE-TELEPHONE SERVICE</option>
                                                    <option value="KO-UDIV">KO-UDIV-UNIVERSITY DIVISION</option>
                                                    <option value="KO-ULIB">KO-ULIB-UNIVERSITY LIBRARIES</option>
                                                    <option value="KO-VCAF">KO-VCAF-VICE CHANCELLOR FOR ACADEMIC A</option>
                                                    <option value="KO-WEC">KO-WEC-WEEKEND COLLEGE</option>
                                                    <option value="KO-WFIT">KO-WFIT-WELLNESS &amp; FITNESS</option>
                                                    <option value="KO-WKST">KO-WKST-OFF CAMPUS</option>
                                                    <option value="NW-ACSP">NW-ACSP-ACADEMIC SUPPORT</option>
                                                    <option value="NW-ADMS">NW-ADMS-ADMISSIONS</option>
                                                    <option value="NW-AFAC">NW-AFAC-AFFIRMATIVE ACTION</option>
                                                    <option value="NW-AHLT">NW-AHLT-ALLIED HEALTH SCIENCES</option>
                                                    <option value="NW-ARSC">NW-ARSC-COLLEGE OF ARTS &amp; SCIENCES</option>
                                                    <option value="NW-BI">NW-BI-BIOLOGY</option>
                                                    <option value="NW-BOOK">NW-BOOK-BOOKSTORE</option>
                                                    <option value="NW-BUDG">NW-BUDG-BUDGET &amp; FISCAL AFFAIRS</option>
                                                    <option value="NW-BURS">NW-BURS-BURSAR</option>
                                                    <option value="NW-BUS">NW-BUS-SCHOOL OF BUSINESS &amp; ECONOMICS</option>
                                                    <option value="NW-CARD">NW-CARD-CARD SERVICES</option>
                                                    <option value="NW-CART">NW-CART-COMMUNICATION ARTS</option>
                                                    <option value="NW-CHEM">NW-CHEM-CHEMISTRY</option>
                                                    <option value="NW-CHHS">NW-CHHS-COLLEGE OF HEALTH &amp; HUMAN SERV</option>
                                                    <option value="NW-CIS">NW-CIS-COMPUTER INFORMATION SYSTEMS</option>
                                                    <option value="NW-CLT">NW-CLT-CLINICAL LABORATORY TECHNOLOGY</option>
                                                    <option value="NW-CONF">NW-CONF-CONFERENCE CENTER</option>
                                                    <option value="NW-COPY">NW-COPY-COPY MACHINES</option>
                                                    <option value="NW-CSER">NW-CSER-TECHNOLOGY SUPPORT</option>
                                                    <option value="NW-CSP">NW-CSP-CAREER &amp; PLACEMENT SERVICES</option>
                                                    <option value="NW-CTSD">NW-CTSD-CONTINUING STUDIES</option>
                                                    <option value="NW-CURE">NW-CURE-CTR FOR URBAN &amp; REG EXCELLENCE</option>
                                                    <option value="NW-DEDU">NW-DEDU-DENTAL EDUCATION</option>
                                                    <option value="NW-DENT">NW-DENT-DENTAL INSTRUMENT PURCHASES</option>
                                                    <option value="NW-DIVE">NW-DIVE-DIVERSITY</option>
                                                    <option value="NW-EDUC">NW-EDUC-SCHOOL OF EDUCATION</option>
                                                    <option value="NW-EHS">NW-EHS-ENVIRONMENTAL HEALTH &amp; SAFETY</option>
                                                    <option value="NW-ENG">NW-ENG-ENGLISH</option>
                                                    <option value="NW-ENSC">NW-ENSC-ENROLLMENT SERVICES</option>
                                                    <option value="NW-EVNT">NW-EVNT-SPECIAL EVENTS</option>
                                                    <option value="NW-EXAF">NW-EXAF-EXTERNAL AFFAIRS</option>
                                                    <option value="NW-EXEC">NW-EXEC-EXECUTIVE MANAGEMENT</option>
                                                    <option value="NW-FAFF">NW-FAFF-FISCAL AFFAIRS</option>
                                                    <option value="NW-FINA">NW-FINA-FINE ARTS</option>
                                                    <option value="NW-FORN">NW-FORN-MODERN FOREIGN LANGUAGES</option>
                                                    <option value="NW-GENA">NW-GENA-GENERAL ADMINISTRATION</option>
                                                    <option value="NW-GEOS">NW-GEOS-GEOSCIENCES</option>
                                                    <option value="NW-GRAD">NW-GRAD-GRADUATE STUDIES</option>
                                                    <option value="NW-HIM">NW-HIM-HEALTH INFORMATION MANAGEMENT</option>
                                                    <option value="NW-HIST">NW-HIST-HISTORY</option>
                                                    <option value="NW-HOUS">NW-HOUS-HOUSES &amp; RENTALS</option>
                                                    <option value="NW-LIBR">NW-LIBR-LIBRARY</option>
                                                    <option value="NW-MATH">NW-MATH-MATHEMATICS</option>
                                                    <option value="NW-MCC">NW-MCC-MASTERS CLINICAL COUNSELING</option>
                                                    <option value="NW-MILS">NW-MILS-MILITARY SCIENCE</option>
                                                    <option value="NW-MINR">NW-MINR-MINORITY STUDIES</option>
                                                    <option value="NW-MLS">NW-MLS-MASTERS OF LIBERAL STUDIES</option>
                                                    <option value="NW-NURS">NW-NURS-NURSING</option>
                                                    <option value="NW-NW">NW-NW-NORTHWEST CAMPUS</option>
                                                    <option value="NW-NWHC">NW-NWHC-NW CAMPUS HEALTH CLINIC</option>
                                                    <option value="NW-OACA">NW-OACA-OTHER ACADEMIC PROGRAMS</option>
                                                    <option value="NW-PARK">NW-PARK-PARKING SERVICES</option>
                                                    <option value="NW-PART">NW-PART-PERFORMING ARTS</option>
                                                    <option value="NW-PD">NW-PD-IU POLICE DEPARTMENT</option>
                                                    <option value="NW-PDUP">NW-PDUP-PRINTING &amp; DUPLICATING</option>
                                                    <option value="NW-PHYP">NW-PHYP-PHYSICAL PLANT</option>
                                                    <option value="NW-POLS">NW-POLS-POLITICAL SCIENCE</option>
                                                    <option value="NW-PSY">NW-PSY-PSYCHOLOGY</option>
                                                    <option value="NW-RADS">NW-RADS-RADIOLOGIC SCIENCES</option>
                                                    <option value="NW-REG">NW-REG-REGISTRAR</option>
                                                    <option value="NW-RESP">NW-RESP-RESPIRATORY</option>
                                                    <option value="NW-SAID">NW-SAID-SCHOLARSHIP &amp; FINANCIAL AIDS</option>
                                                    <option value="NW-SOC">NW-SOC-SOCIOLOGY</option>
                                                    <option value="NW-SOCW">NW-SOCW-MASTER OF SOCIAL WORK</option>
                                                    <option value="NW-SPEA">NW-SPEA-PUBLIC &amp; ENVIRONMENTAL AFFAIRS</option>
                                                    <option value="NW-SRP">NW-SRP-STUDENT RETENTION PROGRAM</option>
                                                    <option value="NW-SSER">NW-SSER-STUDENT SERVICES</option>
                                                    <option value="NW-TRAN">NW-TRAN-TRANSPORTATION SERVICES</option>
                                                    <option value="NW-UDIV">NW-UDIV-UNIVERSITY DIVISION</option>
                                                    <option value="NW-UNAD">NW-UNAD-UNIVERSITY ADVANCEMENT</option>
                                                    <option value="NW-VACC">NW-VACC-CAMPUS VACCINATIONS</option>
                                                    <option value="NW-WKST">NW-WKST-OFF CAMPUS</option>
                                                    <option value="NW-WMNS">NW-WMNS-WOMEN'S STUDIES</option>
                                                    <option value="SB-ACAD">SB-ACAD-ACADEMIC AFFAIRS OFFICE</option>
                                                    <option value="SB-ACCT">SB-ACCT-ACCOUNTING</option>
                                                    <option value="SB-ACP">SB-ACP-ADVANCED COLLEGE PROJECT</option>
                                                    <option value="SB-ACSP">SB-ACSP-ACADEMIC SUPPORT</option>
                                                    <option value="SB-ACTG">SB-ACTG-ACCOUNTING, BUSINESS</option>
                                                    <option value="SB-ADAF">SB-ADAF-ADMIN AND FISCAL AFFAIRS</option>
                                                    <option value="SB-ADMS">SB-ADMS-ADMISSIONS</option>
                                                    <option value="SB-ADV">SB-ADV-ADVISING</option>
                                                    <option value="SB-AFFA">SB-AFFA-AFFIRMATIVE ACTION</option>
                                                    <option value="SB-ALUM">SB-ALUM-ALUMNI RELATIONS</option>
                                                    <option value="SB-ARC">SB-ARC-ACADEMIC RESOURCE CENTER</option>
                                                    <option value="SB-ARSC">SB-ARSC-COLLEGE OF LIBERAL ARTS &amp; SCIE</option>
                                                    <option value="SB-ARTD">SB-ARTD-ARTS</option>
                                                    <option value="SB-ASOC">SB-ASOC-ASSOCIATES BUILDING</option>
                                                    <option value="SB-ASSE">SB-ASSE-ASSESSMENT</option>
                                                    <option value="SB-ASST">SB-ASST-ASST VC ACADEMIC AFFAIRS OFC</option>
                                                    <option value="SB-ASU">SB-ASU-ACADEMIC SUPPORT SERVICES</option>
                                                    <option value="SB-ATHL">SB-ATHL-ATHLETICS</option>
                                                    <option value="SB-AUX">SB-AUX-AUXILIARY SUPPORT SERVICES</option>
                                                    <option value="SB-BOOK">SB-BOOK-BOOKSTORE</option>
                                                    <option value="SB-BSCI">SB-BSCI-BIOLOGICAL SCIENCES</option>
                                                    <option value="SB-BURS">SB-BURS-SB BURSAR</option>
                                                    <option value="SB-BUS">SB-BUS-BUSINESS AND ECONOMICS</option>
                                                    <option value="SB-BUSE">SB-BUSE-DIVISION OF BUSINESS AND ECONO</option>
                                                    <option value="SB-CAIR">SB-CAIR-CTR FOR INSTITUTIONAL/COMM RES</option>
                                                    <option value="SB-CAMD">SB-CAMD-OFFICE OF DIVERSITY</option>
                                                    <option value="SB-CART">SB-CART-COMMUNICATION ARTS</option>
                                                    <option value="SB-CHAN">SB-CHAN-CHANCELLOR</option>
                                                    <option value="SB-CHCR">SB-CHCR-CHILD DEVELOPMENT CENTER</option>
                                                    <option value="SB-CHEM">SB-CHEM-CHEMISTRY</option>
                                                    <option value="SB-CHS">SB-CHS-VERA Z. DYWER COLLEGE OF HEALT</option>
                                                    <option value="SB-COCE">SB-COCE-COUNSELING CENTER - IUSB</option>
                                                    <option value="SB-COHS">SB-COHS-COUNSELING &amp; HUMAN SERVICES</option>
                                                    <option value="SB-COIS">SB-COIS-COMPUTER &amp; INFORMATION SCIENCE</option>
                                                    <option value="SB-COLK">SB-COLK-COMMUNITY LINKS</option>
                                                    <option value="SB-COLS">SB-COLS-COLLEGE-LIBERAL ARTS/SCIENCES</option>
                                                    <option value="SB-COMK">SB-COMK-COMMUNICATIONS &amp; MARKETING</option>
                                                    <option value="SB-COMR">SB-COMR-COMMUNITY RELATIONS</option>
                                                    <option value="SB-COMU">SB-COMU-COMMUNICATION STUDIES</option>
                                                    <option value="SB-CPH">SB-CPH-CENTER FOR POPULATION HEALTH</option>
                                                    <option value="SB-CRIM">SB-CRIM-CRIMINAL JUSTICE</option>
                                                    <option value="SB-CSER">SB-CSER-INFORMATION TECHNOLOGIES</option>
                                                    <option value="SB-CTED">SB-CTED-CONTINUING EDUCATION</option>
                                                    <option value="SB-CTSD">SB-CTSD-CONTINUING STUDIES</option>
                                                    <option value="SB-DAED">SB-DAED-DENTAL EDUCATION</option>
                                                    <option value="SB-DCID">SB-DCID-DECISION SCIENCES</option>
                                                    <option value="SB-DEV">SB-DEV-DEVELOPMENT OFFICE</option>
                                                    <option value="SB-DIST">SB-DIST-DISTANCE LEARNING</option>
                                                    <option value="SB-DPES">SB-DPES-PROFESSIONAL EDUCATIONAL SERVI</option>
                                                    <option value="SB-ECON">SB-ECON-ECONOMICS- BUSINESS</option>
                                                    <option value="SB-EDSC">SB-EDSC-SECONDARY EDUCATION</option>
                                                    <option value="SB-EDUA">SB-EDUA-SCHOOL OF EDUCATION</option>
                                                    <option value="SB-EDUC">SB-EDUC-EDUCATION</option>
                                                    <option value="SB-EDUD">SB-EDUD-DIVISION OF EDUCATION</option>
                                                    <option value="SB-ELED">SB-ELED-ELEMENTARY EDUCATION</option>
                                                    <option value="SB-ELS">SB-ELS-EXTENDED LEARNING SERVICES</option>
                                                    <option value="SB-ENG">SB-ENG-ENGLISH</option>
                                                    <option value="SB-EXAF">SB-EXAF-UNIVERSITY ADVANCEMENT</option>
                                                    <option value="SB-FAFF">SB-FAFF-ADMIN &amp; FISCAL AFFAIRS</option>
                                                    <option value="SB-FAID">SB-FAID-FINANCIAL AID</option>
                                                    <option value="SB-FDEV">SB-FDEV-FACULTY DEVELOPMENT</option>
                                                    <option value="SB-FINA">SB-FINA-FINE ARTS</option>
                                                    <option value="SB-FINB">SB-FINB-FINANCE, BUSINESS</option>
                                                    <option value="SB-FM">SB-FM-FACILITIES MANAGEMENT</option>
                                                    <option value="SB-FOOD">SB-FOOD-FOOD SERVICES</option>
                                                    <option value="SB-FORN">SB-FORN-WORLD LANGUAGES</option>
                                                    <option value="SB-GENA">SB-GENA-GENERAL ADMINISTRATION</option>
                                                    <option value="SB-GRAD">SB-GRAD-GRADUATE STUDENT SERVICE</option>
                                                    <option value="SB-HDEP">SB-HDEP-HOUSING</option>
                                                    <option value="SB-HIST">SB-HIST-HISTORY</option>
                                                    <option value="SB-HONP">SB-HONP-HONORS PROGRAM</option>
                                                    <option value="SB-HOUS">SB-HOUS-HOUSING</option>
                                                    <option value="SB-HSCI">SB-HSCI-APPLIED HEALTH SCIENCES</option>
                                                    <option value="SB-HSE">SB-HSE-HEALTH SCIENCES EDUCATION</option>
                                                    <option value="SB-HUMR">SB-HUMR-HUMAN RESOURCES ADMINISTRATION</option>
                                                    <option value="SB-IACR">SB-IACR-INST-APPLIED COMMUNITY RES</option>
                                                    <option value="SB-IMS">SB-IMS-INSTRUCTIONAL MEDIA SERVICES</option>
                                                    <option value="SB-INFO">SB-INFO-INFORMATICS</option>
                                                    <option value="SB-INFT">SB-INFT-INFORMATION TECHNOLOGY</option>
                                                    <option value="SB-INTP">SB-INTP-INTERNATIONAL PROGRAMS</option>
                                                    <option value="SB-INTS">SB-INTS-INTERNATIONAL STUDENT SERVICES</option>
                                                    <option value="SB-ISGR">SB-ISGR-IN*SOURCE</option>
                                                    <option value="SB-LBST">SB-LBST-LABOR STUDIES</option>
                                                    <option value="SB-LIBR">SB-LIBR-LIBRARY</option>
                                                    <option value="SB-MAS">SB-MAS-MATHEMATICAL SCIENCES</option>
                                                    <option value="SB-MGMT">SB-MGMT-MANAGEMENT, BUSINESS</option>
                                                    <option value="SB-MKTG">SB-MKTG-MARKETING, BUSINESS</option>
                                                    <option value="SB-MLS">SB-MLS-MASTERS-LIBERAL STUDIES PRGM</option>
                                                    <option value="SB-MSWK">SB-MSWK-MASTERS OF SOCIAL WORK</option>
                                                    <option value="SB-MUSC">SB-MUSC-MUSIC</option>
                                                    <option value="SB-NMED">SB-NMED-NEW MEDIA</option>
                                                    <option value="SB-NUHP">SB-NUHP-DIV-NURSING&amp;HLTH PROFESSIONS</option>
                                                    <option value="SB-NURF">SB-NURF-NURSING</option>
                                                    <option value="SB-NURS">SB-NURS-NURSING</option>
                                                    <option value="SB-OACA">SB-OACA-OTHER ACADEMIC PROGRAMS</option>
                                                    <option value="SB-OCP">SB-OCP-OFF CAMPUS PROGRAMS</option>
                                                    <option value="SB-PARK">SB-PARK-PARKING SERVICES</option>
                                                    <option value="SB-PAUA">SB-PAUA-OFC OF VC UNIVERSITY ADVANCEME</option>
                                                    <option value="SB-PD">SB-PD-SAFETY &amp; SECURITY &amp; POLICE</option>
                                                    <option value="SB-PDUP">SB-PDUP-PRINTING &amp; DUPLICATING</option>
                                                    <option value="SB-PEA">SB-PEA-PUBLIC &amp; ENVIRONMENTAL AFFAIRS</option>
                                                    <option value="SB-PHIL">SB-PHIL-PHILOSOPHY</option>
                                                    <option value="SB-PHLM">SB-PHLM-FACIL MGMT, LANDSCAPING MAINT</option>
                                                    <option value="SB-PHPA">SB-PHPA-FACIL MGMT, BUILDINGS &amp; MAINT</option>
                                                    <option value="SB-PHPC">SB-PHPC-CUSTODIAL SERVICES</option>
                                                    <option value="SB-PHYP">SB-PHYP-PHYSICAL PLANT</option>
                                                    <option value="SB-PHYS">SB-PHYS-PHYSICS &amp; ASTRONOMY</option>
                                                    <option value="SB-PL">SB-PL-PHILOSOPHY</option>
                                                    <option value="SB-PLAC">SB-PLAC-PLACEMENT</option>
                                                    <option value="SB-PLPL">SB-PLPL-PLANNING AND PLACEMENT</option>
                                                    <option value="SB-PMG">SB-PMG-PEER MENTOR PROGRAM</option>
                                                    <option value="SB-POLS">SB-POLS-POLITICAL SCIENCE</option>
                                                    <option value="SB-PRDN">SB-PRDN-PRODUCTION</option>
                                                    <option value="SB-PROJ">SB-PROJ-CONTRACT/PROJ DEVELOPMENT SERV</option>
                                                    <option value="SB-PSY">SB-PSY-PSYCHOLOGY</option>
                                                    <option value="SB-PUR">SB-PUR-PURCHASING</option>
                                                    <option value="SB-REGR">SB-REGR-REGISTRAR</option>
                                                    <option value="SB-RES">SB-RES-RESEARCH</option>
                                                    <option value="SB-RTEC">SB-RTEC-RADIOLOGIC TECHNOLOGY PROGRAM</option>
                                                    <option value="SB-SART">SB-SART-RACLIN SCHOOL OF THE ARTS</option>
                                                    <option value="SB-SASS">SB-SASS-STUDENT ACADEMIC SUPPORT SERV</option>
                                                    <option value="SB-SB">SB-SB-SOUTH BEND CAMPUS</option>
                                                    <option value="SB-SBDN">SB-SBDN-DEAN, BUSINESS &amp; ECONOMICS</option>
                                                    <option value="SB-SBUE">SB-SBUE-LEIGHTON SCHOOL OF BUS &amp; ECON</option>
                                                    <option value="SB-SEMS">SB-SEMS-STUDENT ENROLLMENT MGMT SERV</option>
                                                    <option value="SB-SFP">SB-SFP-STUDENT FINANCIAL PLANNING</option>
                                                    <option value="SB-SOC">SB-SOC-SOCIOLOGY</option>
                                                    <option value="SB-SOCA">SB-SOCA-SOCIOLOGY AND ANTHROPOLOGY</option>
                                                    <option value="SB-SOCW">SB-SOCW-SOCIAL WORK</option>
                                                    <option value="SB-SPEA">SB-SPEA-PUBLIC &amp; ENVIRONMENTAL AFFAIRS</option>
                                                    <option value="SB-SSER">SB-SSER-STUDENT SERVICES</option>
                                                    <option value="SB-STAF">SB-STAF-STUDENT AFFAIRS</option>
                                                    <option value="SB-STLP">SB-STLP-STUDENT ACTIVITIES</option>
                                                    <option value="SB-SUMS">SB-SUMS-SUMMER SESSIONS</option>
                                                    <option value="SB-SUPT">SB-SUPT-SUPPORT SERVICES</option>
                                                    <option value="SB-SUST">SB-SUST-SUSTAINABILITY STUDIES</option>
                                                    <option value="SB-TECH">SB-TECH-STUDENT TECHNOLOGY FEE</option>
                                                    <option value="SB-TELC">SB-TELC-TELECOMMUNICATIONS</option>
                                                    <option value="SB-THED">SB-THED-THEATRE &amp; DANCE</option>
                                                    <option value="SB-UCET">SB-UCET-UNIV CTR-EXCELLENCE IN TCHNG</option>
                                                    <option value="SB-ULIB">SB-ULIB-UNIVERSITY LIBRARY</option>
                                                    <option value="SB-WELL">SB-WELL-HEALTH AND WELLNESS CENTER</option>
                                                    <option value="SB-WKST">SB-WKST-OFF CAMPUS</option>
                                                    <option value="SB-WMNS">SB-WMNS-WOMEN'S STUDIES</option>
                                                    <option value="SE-ACAD">SE-ACAD-ACADEMIC AFFAIRS OFFICE</option>
                                                    <option value="SE-ACCT">SE-ACCT-ACCOUNTING SERVICES</option>
                                                    <option value="SE-ACES">SE-ACES-ADVISING CENTER FOR EXPLOR STU</option>
                                                    <option value="SE-ACSP">SE-ACSP-ACADEMIC SUPPORT</option>
                                                    <option value="SE-ACT">SE-ACT-CAMPUS LIFE</option>
                                                    <option value="SE-ADAF">SE-ADAF-ADMINISTRATIVE AFFAIRS</option>
                                                    <option value="SE-ADMS">SE-ADMS-ADMISSIONS</option>
                                                    <option value="SE-AFFA">SE-AFFA-OFFICE OF EQUITY AND DIVERSITY</option>
                                                    <option value="SE-ALUM">SE-ALUM-ALUMNI &amp; COMMUNITY RELATIONS</option>
                                                    <option value="SE-AREC">SE-AREC-APPLIED RESEARCH</option>
                                                    <option value="SE-ARTS">SE-ARTS-ARTS INSTITUTE</option>
                                                    <option value="SE-ASC">SE-ASC-ADULT STUDENT CENTER</option>
                                                    <option value="SE-ATHL">SE-ATHL-ATHLETICS</option>
                                                    <option value="SE-BOOK">SE-BOOK-BOOKSTORE</option>
                                                    <option value="SE-BUS">SE-BUS-SCHOOL OF BUSINESS</option>
                                                    <option value="SE-CACC">SE-CACC-CULTURAL AND COMMUNITY CENTER</option>
                                                    <option value="SE-CAMP">SE-CAMP-CAMPUS SERVICES</option>
                                                    <option value="SE-CENT">SE-CENT-21ST CENTURY SCHOLAR PROGRAM</option>
                                                    <option value="SE-CHAN">SE-CHAN-CHANCELLOR</option>
                                                    <option value="SE-COAS">SE-COAS-ARTS &amp; SCIENCES, COLLEGE OF</option>
                                                    <option value="SE-COMM">SE-COMM-UNIVERSITY COMMUNICATIONS</option>
                                                    <option value="SE-CONF">SE-CONF-CONFERENCE &amp; CATERING</option>
                                                    <option value="SE-COOF">SE-COOF-COUNSELING OFFICE</option>
                                                    <option value="SE-COUN">SE-COUN-COUNSELING</option>
                                                    <option value="SE-CSER">SE-CSER-COMPUTER SERVICES</option>
                                                    <option value="SE-CSP">SE-CSP-CAREER DEVELOPMENT CENTER</option>
                                                    <option value="SE-CTSD">SE-CTSD-CONTINUING STUDIES</option>
                                                    <option value="SE-DFAC">SE-DFAC-DEAN OF FACULTY</option>
                                                    <option value="SE-DGEN">SE-DGEN-DGTS ENGLISH</option>
                                                    <option value="SE-DGMA">SE-DGMA-DGTS MATHEMATICS</option>
                                                    <option value="SE-DGTS">SE-DGTS-DGTS (DIV OF GENERAL &amp; TECHNIC</option>
                                                    <option value="SE-DISA">SE-DISA-DISABILITY SERVICES</option>
                                                    <option value="SE-EDUC">SE-EDUC-SCHOOL OF EDUCATION</option>
                                                    <option value="SE-EXAF">SE-EXAF-UNIVERSITY ADVANCEMENT</option>
                                                    <option value="SE-EXEC">SE-EXEC-EXECUTIVE MANAGEMENT</option>
                                                    <option value="SE-GENA">SE-GENA-ADMINISTRATIVE AFFAIRS</option>
                                                    <option value="SE-GRAD">SE-GRAD-GRADUATE SCHOOL</option>
                                                    <option value="SE-HMAN">SE-HMAN-SCHOOL OF ARTS &amp; LETTERS</option>
                                                    <option value="SE-HOUS">SE-HOUS-HOUSING</option>
                                                    <option value="SE-HUMM">SE-HUMM-HUMAN RESOURCES</option>
                                                    <option value="SE-ILTE">SE-ILTE-INST-LEARNING/TCHNG EXCELLENCE</option>
                                                    <option value="SE-INTG">SE-INTG-IT ADMIN</option>
                                                    <option value="SE-INTL">SE-INTL-INTERNATIONAL PROGRAMS</option>
                                                    <option value="SE-INTP">SE-INTP-INTERNATIONAL PROGRAMS</option>
                                                    <option value="SE-IRES">SE-IRES-INSTITUTIONAL EFFECTIVENESS</option>
                                                    <option value="SE-JAPA">SE-JAPA-JAPANESE SATURDAY SCHOOL</option>
                                                    <option value="SE-LABS">SE-LABS-LABOR STUDIES, DIVISION OF</option>
                                                    <option value="SE-LIBG">SE-LIBG-LIBRARY GENERAL</option>
                                                    <option value="SE-LIBR">SE-LIBR-LIBRARY</option>
                                                    <option value="SE-MALY">SE-MALY-COOPERATIVE PROGRAM IN MALAYSI</option>
                                                    <option value="SE-MDSV">SE-MDSV-MEDIA SERVICES</option>
                                                    <option value="SE-MILS">SE-MILS-MILITARY SCIENCE, DIVISION OF</option>
                                                    <option value="SE-MUSC">SE-MUSC-MUSIC</option>
                                                    <option value="SE-NATS">SE-NATS-SCHOOL OF NATURAL SCIENCES</option>
                                                    <option value="SE-NURS">SE-NURS-SCHOOL OF NURSING</option>
                                                    <option value="SE-OACA">SE-OACA-OTHER ACADEMIC PROGRAMS</option>
                                                    <option value="SE-OGLE">SE-OGLE-CULTURAL AND COMMUNITY CENTER</option>
                                                    <option value="SE-OVER">SE-OVER-OVERSEAS STUDY - GENERAL</option>
                                                    <option value="SE-PD">SE-PD-IU POLICE DEPARTMENT</option>
                                                    <option value="SE-PERP">SE-PERP-PURDUE PROGRAMS - REGIONAL CAM</option>
                                                    <option value="SE-PHYP">SE-PHYP-PHYSICAL PLANT</option>
                                                    <option value="SE-PPSE">SE-PPSE-PURDUE PROGRAM SOUTHEAST</option>
                                                    <option value="SE-PROF">SE-PROF-PROFESSIONAL PRACTICE PROGRAM</option>
                                                    <option value="SE-RCA">SE-RCA-REGIONAL CAMPUS ADMINISTRATION</option>
                                                    <option value="SE-RCAD">SE-RCAD-RECORDS AND ADMISSIONS</option>
                                                    <option value="SE-RECP">SE-RECP-REAL ESTATE CERTIFICATION PROG</option>
                                                    <option value="SE-REGR">SE-REGR-REGISTRAR</option>
                                                    <option value="SE-SAID">SE-SAID-FINANCIAL AID</option>
                                                    <option value="SE-SCTE">SE-SCTE-SCIENCE AND TECHNOLOGY, DIVISI</option>
                                                    <option value="SE-SDC">SE-SDC-STUDENT DEVELOPMENT CENTER</option>
                                                    <option value="SE-SE">SE-SE-SOUTHEAST CAMPUS</option>
                                                    <option value="SE-SOCS">SE-SOCS-SCHOOL OF SOCIAL SCIENCES</option>
                                                    <option value="SE-SPEC">SE-SPEC-SPECIAL EVENTS</option>
                                                    <option value="SE-SSER">SE-SSER-STUDENT AFFAIRS</option>
                                                    <option value="SE-STAF">SE-STAF-STUDENT AFFAIRS</option>
                                                    <option value="SE-SUMS">SE-SUMS-SUMMER SESSIONS</option>
                                                    <option value="SE-SWTE">SE-SWTE-STATEWIDE TECHNOLOGY</option>
                                                    <option value="SE-TELC">SE-TELC-TELECOMMUNICATIONS</option>
                                                    <option value="SE-THEA">SE-THEA-THEATER</option>
                                                    <option value="SE-UDIV">SE-UDIV-ADVISING CENTER FOR EXPLOR STU</option>
                                                    <option value="SE-ULIB">SE-ULIB-UNIVERSITY LIBRARIES</option>
                                                    <option value="SE-WEC">SE-WEC-WEEKEND COLLEGE</option>
                                                    <option value="SE-WKST">SE-WKST-OFF CAMPUS</option>
                                                    <option value="SE-WMNS">SE-WMNS-WOMEN'S STUDIES</option>
                                                    <option value="STUDENT">STUDENT-Student Refunds</option>
                                                    <option value="UA-AAC">UA-AAC-AR,AUX &amp; CAP ASSETS</option>
                                                    <option value="UA-ACA">UA-ACA-AFFORDABLE CARE ACT COMPLIANCE</option>
                                                    <option value="UA-ACAV">UA-ACAV-FACET</option>
                                                    <option value="UA-ALUM">UA-ALUM-ALUMNI RELATIONS</option>
                                                    <option value="UA-ATHL">UA-ATHL-ATHLETICS</option>
                                                    <option value="UA-ATMG">UA-ATMG-ATHLETICS MANAGEMENT GROUP</option>
                                                    <option value="UA-BDOT">UA-BDOT-BOARD OF TRUSTEES</option>
                                                    <option value="UA-BECK">UA-BECK-BECK CHAPEL</option>
                                                    <option value="UA-BFPU">UA-BFPU-SPACE INFORMATION</option>
                                                    <option value="UA-BUDU">UA-BUDU-UNIVERSITY BUDGET OFFICE</option>
                                                    <option value="UA-CDIV">UA-CDIV-CENTER FOR DIVERSITY</option>
                                                    <option value="UA-CLSC">UA-CLSC-VP CLINICAL AFFAIRS</option>
                                                    <option value="UA-CLTO">UA-CLTO-CLINICAL TRIALS OFFICE</option>
                                                    <option value="UA-CTSD">UA-CTSD-CONTINUING STUDIES</option>
                                                    <option value="UA-CYOP">UA-CYOP-CYCLOTRON OPERATIONS</option>
                                                    <option value="UA-ENGA">UA-ENGA-VP FOR ENGAGEMENT</option>
                                                    <option value="UA-ENHS">UA-ENHS-Environmental Health &amp; Safety</option>
                                                    <option value="UA-EXVP">UA-EXVP-EXECUTIVE VICE PRESIDENT</option>
                                                    <option value="UA-FMOP">UA-FMOP-FMS ADMINISTRATION</option>
                                                    <option value="UA-FMS">UA-FMS-FINANCIAL MANAGEMENT SERVICES</option>
                                                    <option value="UA-FREL">UA-FREL-FEDERAL RELATIONS</option>
                                                    <option value="UA-GOVT">UA-GOVT-GOVERNMENT RELATIONS</option>
                                                    <option value="UA-GRAD">UA-GRAD-UNIVERSITY GRADUATE SCHOOL</option>
                                                    <option value="UA-HIPA">UA-HIPA-HIPAA PRIVACY &amp; SECURITY</option>
                                                    <option value="UA-HUMM">UA-HUMM-UNIVERSITY HUMAN RESOURCE SERV</option>
                                                    <option value="UA-IAUD">UA-IAUD-INTERNAL AUDIT</option>
                                                    <option value="UA-ICGC">UA-ICGC-INDIANA CENTER ON GLOBAL CHANG</option>
                                                    <option value="UA-IHET">UA-IHET-IHETS</option>
                                                    <option value="UA-INTP">UA-INTP-INTERNATIONAL AFFAIRS</option>
                                                    <option value="UA-IPCR">UA-IPCR-INDIANA PERVASIVE COMPUTING RE</option>
                                                    <option value="UA-IRES">UA-IRES-INSTITUTIONAL RESEARCH</option>
                                                    <option value="UA-LCTM">UA-LCTM-LICENSING &amp; TRADEMARKS</option>
                                                    <option value="UA-MASV">UA-MASV-MANAGEMENT ADVISORY SERVICES</option>
                                                    <option value="UA-NEWS">UA-NEWS-COMMUNICATIONS &amp; MARKETING</option>
                                                    <option value="UA-OUAA">UA-OUAA-OTHER UNIVERSITY ADMIN ACCOUNT</option>
                                                    <option value="UA-PD">UA-PD-IU POLICE DEPARTMENT</option>
                                                    <option value="UA-PIRA">UA-PIRA-UNIV INSTITUTNL RSRCH&amp;REPORTNG</option>
                                                    <option value="UA-PRES">UA-PRES-PRESIDENT'S OFFICE</option>
                                                    <option value="UA-PRIN">UA-PRIN-UNIVERSITY PRINTING SERVICES</option>
                                                    <option value="UA-PRSE">UA-PRSE-PRESIDENT EMERITUS</option>
                                                    <option value="UA-PSIA">UA-PSIA-PUBLIC SAFETY</option>
                                                    <option value="UA-PUR">UA-PUR-PURCHASING</option>
                                                    <option value="UA-RCBL">UA-RCBL-RESEARCH COMPLIANCE BL</option>
                                                    <option value="UA-RCIN">UA-RCIN-RESEARCH COMPLIANCE IN</option>
                                                    <option value="UA-RCIN">UA-RCIN-Research Compliance IN</option>
                                                    <option value="UA-REAL">UA-REAL-REAL ESTATE</option>
                                                    <option value="UA-RISK">UA-RISK-INSURANCE-LOSS CONTROL-CLAIMS</option>
                                                    <option value="UA-RSBL">UA-RSBL-GRANT ADMINISTRATION</option>
                                                    <option value="UA-RSCH">UA-RSCH-RESEARCH ADMINISTRATION</option>
                                                    <option value="UA-RSED">UA-RSED-RESEARCH EDUCATION</option>
                                                    <option value="UA-RSIN">UA-RSIN-CLINICAL TRIALS</option>
                                                    <option value="UA-RSTC">UA-RSTC-RESEARCH TECHNOLOGY</option>
                                                    <option value="UA-SCS">UA-SCS-SCHOOL OF CONTINUING STUDIES</option>
                                                    <option value="UA-SEAS">UA-SEAS-SES ADMINISTRATION</option>
                                                    <option value="UA-SES">UA-SES-UNIVERSITY STUDENT SERVICES &amp;</option>
                                                    <option value="UA-SES">UA-SES-UNIVERSITY STUDENT SERVICES &amp; </option>
                                                    <option value="UA-SISF">UA-SISF-SIS FUNCTIONAL PROJECT TEAM</option>
                                                    <option value="UA-SLA">UA-SLA-STUD LOAN ADMIN</option>
                                                    <option value="UA-SREL">UA-SREL-VP-GOVERNMENT RELATIONS</option>
                                                    <option value="UA-TREA">UA-TREA-TREASURER'S OFFICE</option>
                                                    <option value="UA-TRMS">UA-TRMS-TRAVEL MANAGEMENT SERVICES</option>
                                                    <option value="UA-UA">UA-UA-UNIVERSITY ADMINISTRATION</option>
                                                    <option value="UA-UART">UA-UART-UNIVERSITY ARCHITECTS OFFICE</option>
                                                    <option value="UA-UAVP">UA-UAVP-EXEC VP UNIVERSITY ACADEMIC AF</option>
                                                    <option value="UA-UAVP">UA-UAVP-VP REGIONAL, PLN, POLICY</option>
                                                    <option value="UA-UBUR">UA-UBUR-UNIVERSITY BURSAR</option>
                                                    <option value="UA-UCER">UA-UCER-UNIVERSITY CEREMONIES</option>
                                                    <option value="UA-UCHA">UA-UCHA-UNIVERSITY CHANCELLOR</option>
                                                    <option value="UA-UCOU">UA-UCOU-GENERAL COUNSEL</option>
                                                    <option value="UA-UECO">UA-UECO-UNIVERSITY EVENTS AND CONFEREN</option>
                                                    <option value="UA-UFAC">UA-UFAC-UNIVERSITY FACULTY COUNCIL</option>
                                                    <option value="UA-UFAS">UA-UFAS-STUDENT FISCAL SERVICES</option>
                                                    <option value="UA-UNBI">UA-UNBI-UNIVERSITY BICENTENNIAL CELEBR</option>
                                                    <option value="UA-URE">UA-URE-UNIVERSITY REAL ESTATE</option>
                                                    <option value="UA-VPAA">UA-VPAA-VICE PRES ACAD AFFRS</option>
                                                    <option value="UA-VPAD">UA-VPAD-CAPITAL PLANNING &amp; FACILITIES</option>
                                                    <option value="UA-VPAT">UA-VPAT-VPAD TECHNOLOGY SERVICES</option>
                                                    <option value="UA-VPDV">UA-VPDV-DIVERSITY,EQUITY,MULTICULTURAL</option>
                                                    <option value="UA-VPIT">UA-VPIT-VICE PRES INFORMATION TECHNLGY</option>
                                                    <option value="UA-VPIT">UA-VPIT-VICE PRESIDENT INFORMATION TEC</option>
                                                    <option value="UA-VPPF">UA-VPPF-VP &amp; CHIEF FINANCIAL OFFICER</option>
                                                    <option value="UA-VPPL">UA-VPPL-EXEC VP UNIVERSITY ACADEMIC AF</option>
                                                    <option value="UA-VPR">UA-VPR-VICE PRESIDENT RESEARCH</option>
                                                    <option value="UA-VPRO">UA-VPRO-OFC OF VP RESEARCH</option>
                                                    <option value="UA-VPUR">UA-VPUR-VP GOVERNMENT RELATIONS</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Campus Address</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="" value="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Affiliation with IU</label>
                                            <div class="col-sm-9">
                                                <select name="" id="" class="form-control">
                                                    <option value="">- Select Affiliation- </option>
                                                    <option value="ARTI Employee">ARTI Employee</option>
                                                    <option value="IU Health Employee">IU Health Employee</option>
                                                    <option value="English as a Second Lang. (ESL)">English as a Second Lang. (ESL)</option>
                                                    <option value="External Agency">External Agency</option>
                                                    <option value="External Auditor">External Auditor</option>
                                                    <option value="FIS Account Manager">FIS Account Manager</option>
                                                    <option value="Fort Wayne">Fort Wayne</option>
                                                    <option value="Hourly Contractor">Hourly Contractor</option>
                                                    <option value="Independent Consultant">Independent Consultant</option>
                                                    <option value="Independent Studies">Independent Studies</option>
                                                    <option value="Intensive English Program (IEP)">Intensive English Program (IEP)</option>
                                                    <option value="International Exchange">International Exchange</option>
                                                    <option value="IU Foundation">IU Foundation</option>
                                                    <option value="Ivy Tech">Ivy Tech</option>
                                                    <option value="Manpower/Temp Employee">Manpower/Temp Employee</option>
                                                    <option value="Non-paid Research Associate">Non-paid Research Associate</option>
                                                    <option value="RT Purdue">RT Purdue</option>
                                                    <option value="School of Medicine">School of Medicine</option>
                                                    <option value="Veterans Affairs">Veterans Affairs</option>
                                                    <option value="Visiting Faculty">Visiting Faculty</option>
                                                    <option value="Other - please explain">Other - please explain</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Affiliation Begin/End</label>
                                            <div class="col-sm-3">
                                                <input type='text' class="form-control" id='datetimepicker6' placeholder="mm/dd/yyyy"/>
                                                <span class="label-sub"> begin</span> </div>
                                            <div class="col-sm-3">
                                                <input type='text' class="form-control" id='datetimepicker7' placeholder="mm/dd/yyyy" />
                                                <span class="label-sub">end</span> </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Reason for Affiliation</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-9"> <a href="#" class="btn btn-primary">Request Affiliate </a> <a href="#" class="btn btn-default">Clear Fields </a> </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="tab-pane fade in " id="tab2">
                        <div class="col-xs-12 col-sm-12 col-md-12 panel-main">
                            <h5>View Affiliate Requests</h5>
                            <!-- <p class="lead text-muted" style="padding-bottom:20px; padding-top:20px; border-bottom:solid 1px #CCCCCC;border-top:solid 1px #CCCCCC;"> You have no current requests</p>-->
                            
                            <div class="col-md-12">
                                <form class="form-horizontal well">
                                    <fieldset>
                                        <legend>Search</legend>
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Affiliate Last Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="" value="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Affiliate Univ ID</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="" value="">
                                            </div>
                                        </div>
                                    </fieldset>
                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-9"> <a href="#" class="btn btn-primary btn-xs">Search </a> <a href="#" class="btn btn-default btn-xs">Clear Fields </a> </div>
                                    </div>
                                </form>
                            </div>
                            <h5>Search Results</h5>
                            <div class="col-md-12">
                                <table class="table table-condensed table-responsive">
                                    <thead>
                                        <tr>
                                            <th>Last Name</th>
                                            <th>University ID</th>
                                            <th>End Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Clark</td>
                                            <td>0003645275</td>
                                            <td>10/21/2016</td>
                                            <td>Requested</td>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>Smith</td>
                                            <td>0009486723</td>
                                            <td>10/21/2016</td>
                                            <td>Requested</td>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>Jones</td>
                                            <td>0008847364</td>
                                            <td>10/21/2016</td>
                                            <td>Requested</td>
                                            <td>&nbsp;</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include ('includes/brand-footer.php') ?>
<?php include ('includes/footer-scripts.php') ?>
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
<script>
    $(document).ready(function() {

        $('.nav-tabs-responsive').tabCollapse();
		$('.nav-tabs-responsive').on('shown-tabs.bs.tabcollapse', function(){
    		$('.nav-tabs-responsive a:first').tab('show')
});

    });
	
</script> 
<script type="text/javascript">
    $(function () {
		$('#birthdate').datetimepicker({
			viewMode: 'decades',
			format: 'MM/DD/YYYY'
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
