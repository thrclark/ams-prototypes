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
                    <div class="stepwizard">
                        <div class="stepwizard-row setup-panel">
                            <div class="stepwizard-step"> <a href="#" onclick="location.href='starterkit-home.php';"  class="btn btn-default btn-circle"><i class="icon-user-3"></i></a>
                                <p class="hidden-xs label-sub">Your ID</p>
                            </div>
                            <div class="stepwizard-step"> <a href="#step-2" class="btn btn-default btn-circle btn-primary"><i class="icon-check-1"></i></a>
                                <p class="hidden-xs label-sub">Agreement</p>
                            </div>
                            <div class="stepwizard-step"> <a href="#step-3" class="btn btn-default btn-circle disabled" ><i class="icon-pencil-3"></i></a>
                                <p class="hidden-xs label-sub">Username</p>
                            </div>
                            <div class="stepwizard-step"> <a href="#step-4" class="btn btn-default btn-circle disabled" ><i class="icon-mail-3"></i></a>
                                <p class="hidden-xs label-sub">Email</p>
                            </div>
                            <div class="stepwizard-step"> <a href="#step-5" class="btn btn-default btn-circle disabled" ><i class="icon-shield"></i></a>
                                <p class="hidden-xs label-sub">Passphrase</p>
                            </div>
                            <div class="stepwizard-step"> <a href="#step-6" class="btn btn-default btn-circle disabled" ><i class="icon-question"></i></a>
                                <p class="hidden-xs label-sub">Recovery</p>
                            </div>
                            <div class="stepwizard-step"> <a href="#step-7" class="btn btn-default btn-circle disabled" ><i class="icon-eye"></i></a>
                                <p class="hidden-xs label-sub">Review &amp; Submit</p>
                            </div>
                        </div>
                    </div>
                    <form class="form-horizontal" data-toggle="validator">
                        <div class="row setup-content" id="step-1">
                            <div class="col-md-12">
                                <h4 class="stepwizard-title"> Identify Yourself</h4>
                                <div class="form-group">
                                    <label for="lastname" class="col-sm-2 control-label">Last Name</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="lastname" value="">
                                    </div>
                                </div>
                                <div class="form-group" id="lastname-message" style="display:none">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-8"> Last name must not contain a space or a quote </div>
                                </div>
                                <div class="form-group">
                                    <label for="birthdate" class="col-sm-2 control-label">Birthdate</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="birthdate" placeholder="mm/dd/yyyy">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="univID" class="col-sm-2 control-label">University ID</label>
                                    <div class="col-sm-8">
                                        <input class="form-control"  id="univID" name="univID" type="text" placeholder="10 digits" >
                                    </div>
                                </div>
                                <div class="col-md-12 text-right"> <a href="#" class="btn btn-default goback disabled">Back</a>
                                    <button class="btn btn-primary nextBtn" type="button" >Next</button>
                                </div>
                            </div>
                        </div>
                        <div class="row setup-content" id="step-2">
                            <input class=""   type="hidden"  >
                            <div class="col-md-12">
                                <h4 class="stepwizard-title">Appropriate Usage Agreement</h4>
                                <p>To be entrusted with computer accounts, users of the Indiana University computing networks must accept certain responsibilities and standards for computer use. These responsibilities apply to all IU computing resources. The Privileges and Responsibilities may change with time; by accepting the terms now, you agree to abide by these rules in all of your IU computing activities. Read the statement below. If you agree to the Guidelines for Appropriate Usage type 'Yes' and click Continue. Otherwise, you may exit now.</p>
                                <div id="content" class="user-agreement">
                                    <h4> Usage Responsibilities</h4>
                                    <p> The following points detail your responsibilities as you access, use, or handle
                                        information or information technology (IT) at IU.</p>
                                    <h5> Secure Usage</h5>
                                    <p> You agree to:</p>
                                    <ul>
                                        <li><strong>Never share your account password(s) or passphrase(s), or SafeWord card
                                            PIN, with anyone, including friends, roommates, family, or IU staff. </strong> </li>
                                        <li>Select strong password(s) and passphrase(s) and change them regularly. </li>
                                        <li>Be mindful that different computer systems and applications provide different levels
                                            of protection for information, and seek advice on supplemental security measures,
                                            if necessary. For example, a mobile laptop, tablet, or smartphone provides inherently less protection than
                                            a desktop computer in a locked office. Therefore, the level of protection provided
                                            to information accessed or stored using a laptop is to be supplemented by using
                                            additional safeguards such as encryption technology, enhancing physical security,
                                            restricting file permissions, etc. </li>
                                        <li>Respect the university's information and system security procedures (i.e., never
                                            attempt to circumvent or "go around" security processes). </li>
                                        <li>Make appropriate use of the tools provided (e.g., strong passphrase, virus detection,
                                            encryption software, encrypted transmission, training, etc.) to uphold the security
                                            of the university's IT systems and applications, and the confidentiality of information
                                            stored on them. </li>
                                        <li>Take steps to understand "phishing attacks," computer viruses, and other destructive
                                            software, and take steps to protect your accounts from such threats (e.g., never
                                            reply to emails asking for account passwords or passphrases, never open unsolicited
                                            email attachments, never click unknown links, use virus scanning software, apply
                                            system patches in a timely manner, etc.). </li>
                                        <li>Immediately notify your campus <a href="http://kb.iu.edu/data/abxl.html">Support
                                            Center</a> if you believe your account credentials (e.g., user ID, password, passphrase,
                                            SafeWord card PIN, etc.) have been compromised. </li>
                                        <li>Maintain information in a secure manner to prevent access, viewing, or printing
                                            by unauthorized individuals.</li>
                                        <li>Secure unattended computers (e.g., log off, lock, or otherwise make inaccessible),
                                            even if you will only be away from the computer for a moment. </li>
                                        <li>Store Restricted and Critical data securely (e.g., on secure servers, in locked
                                            file cabinets, etc.).</li>
                                        <li>Securely dispose of Restricted and Critical information (e.g., by shredding, disk
                                            wiping, physical destruction, etc.).</li>
                                        <li>Never copy and/or store Restricted or Critical data outside of institutional systems
                                            (e.g., on desktop workstations, laptops, USB drives, personally owned computers,
                                            etc.) without proper approval from the senior executive officer of the department
                                            and only in cases where it is absolutely necessary for the operation of the department.</li>
                                        <li>Take appropriate steps to secure information (e.g., password protection, encryption,
                                            etc.) on mobile devices (e.g., laptops, tablets, USB drives, smartphones, etc.). </li>
                                        <li>Ensure, in the rare cases where Critical data has been approved for use and storage
                                            outside of institutional systems, that the data are appropriately encrypted, especially
                                            on mobile devices (e.g., laptops, tablets, smartphones, USB drives, CD-ROMs). </li>
                                        <li>Ensure, in the rare cases where it is necessary to email Critical data, that the
                                            data are sent to the correct recipient and only via encrypted email methods.</li>
                                    </ul>
                                    <h5>Legal Usage</h5>
                                    <p> You agree to:</p>
                                    <ul>
                                        <li>Use information and IT for legal purposes only. </li>
                                        <li>Respect and comply with all copyrights and license agreements. </li>
                                        <li>Never use your access to information or IT to harass, libel, or defame others. </li>
                                        <li>Never damage equipment, software, or data belonging to others.</li>
                                        <li>Never make unauthorized use of computer accounts, access codes, or devices. </li>
                                        <li>Never monitor or disrupt the communications of others, except in the legitimate
                                            scope of your assigned university duties.</li>
                                        <li>Never use IT to view or distribute child pornography. </li>
                                        <li>Abide by applicable laws and policies with respect to access to, use, disclosure,
                                            and/or disposal of information. </li>
                                        <li>Report unauthorized access to, inadequate protection of, and inappropriate use,
                                            disclosure, and/or disposal of information, immediately to your campus <a href="http://kb.iu.edu/data/abxl.html"> Support Center</a>. </li>
                                    </ul>
                                    <p> <strong>WARNING:</strong> Unauthorized distribution of copyrighted material using
                                        Indiana University's information technology resources -- including sharing copyrighted
                                        music, movies, and software through peer-to-peer applications like Limewire, BitTorrent,
                                        MP3Rocket, Frostwire, etc. using Internet access provided by IU -- is against the
                                        law and university policy. In addition to sanctions the university may impose, unlawful
                                        file sharing may subject you to legal penalties. This includes both civil penalties
                                        (having to pay money to the copyright holder in a lawsuit) and criminal penalties
                                        (fines and jail time). See filesharing.iu.edu for further information.</p>
                                    <h5> Ethical Usage</h5>
                                    <p> You agree to:</p>
                                    <ul>
                                        <li>Access institutional information only in the conduct of university business and
                                            in ways consistent with furthering the university's mission of education, research,
                                            and public service.</li>
                                        <li>Use only the information needed to perform assigned or authorized university duties. </li>
                                        <li>Never access any institutional information to satisfy your personal curiosity. </li>
                                        <li>Use information and IT in ways that foster the high ethical standards of the university.</li>
                                        <li>Never use information or IT to engage in academic, personal, or research misconduct.</li>
                                        <li>Never access or use institutional information (including public directory information)
                                            for your own personal gain or profit, or the personal gain or profit of others,
                                            without appropriate authorization.</li>
                                        <li>Respect the confidentiality and privacy of individuals whose records you may access. </li>
                                        <li>Preserve and protect the confidentiality of all University-internal, Restricted,
                                            or Critical information as a matter of ongoing responsibility. </li>
                                        <li>Never disclose University-internal, Restricted, or Critical data (as defined by
                                            policy; see above) or distribute such data to a third party in any medium (including
                                            oral, paper, or electronic) without proper approval, and in the case of Restricted
                                            or Critical data, without a contract processed through or waived by the IU Purchasing
                                            Department.</li>
                                    </ul>
                                    <h5>Facilitative Usage</h5>
                                    <p> You agree to:</p>
                                    <ul>
                                        <li>Never cause community or shared resources to be inaccessible or unusable.</li>
                                        <li>Use shared information technology resources efficiently.</li>
                                        <li>Regularly delete unneeded files and information from your accounts (if not required
                                            to retain them as outlined in university policy or records management schedules).</li>
                                        <li>Avoid overuse of network bandwidth, information storage space, printing facilities,
                                            paper, processing capacity, or other shared information technology resources.</li>
                                        <li>Never send mass email (i.e. unsolicited bulk email or spam) without appropriate
                                            approval.</li>
                                        <li>Never send or respond to chain email.</li>
                                    </ul>
                                    <div class="clear"> </div>
                                    <h4> Policies and Laws</h4>
                                    <p> You should be aware that institutional policies, federal and state laws, and contractual
                                        obligations exist that provide further protections to certain types of information,
                                        or that may influence how you handle information. Data Managers of certain applications
                                        and information types may require you to complete additional training to familiarize
                                        you with these. Examples include:</p>
                                    <ul>
                                        <li><a href="http://policies.iu.edu/policies/categories/information-it/it/IT-01.shtml">IT-01: Appropriate Use of
                                            IT Resources</a>: Establishes appropriate usage requirements. </li>
                                        <li><a href="http://policies.iu.edu/policies/categories/information-it/it/IT-07.shtml">IT-07: Privacy of Electronic
                                            Information and IT Resources</a>: Establishes the procedures and circumstances under
                                            which an individual's electronic accounts and files may be accessed by others.</li>
                                        <li><a href="http://policies.iu.edu/policies/categories/information-it/it/IT-12.shtml">IT-12: Security of IT Resources</a>:
                                            Establishes appropriate security requirements.</li>
                                        <li><a href="http://policies.iu.edu/policies/categories/information-it/data-management/DM-01.shtml">DM-01: Management of Institutional Data</a> </li>
                                        <li><strong>Family Educational Rights and Privacy Act (FERPA)</strong> Provides students
                                            rights of access to their education records and generally prohibits the disclosure
                                            of student education records without the prior written consent of the student. </li>
                                        <li><strong>Health Insurance Portability and Accountability Act (HIPAA)</strong> Imposes
                                            various privacy and security requirements on personal health information collected
                                            or maintained by certain units of the university. </li>
                                        <li><strong>Financial Services Modernization Act of 1999 ("Gramm Leach Bliley") and
                                            accompanying FTC Standards for Safeguarding Customer Information </strong>Requires
                                            universities to develop and implement an information security program designed to
                                            protect nonpublic personal information gathered and maintained with respect to certain
                                            financial activities, most commonly student financial aid activities, other lending
                                            activities, and check-cashing activities. </li>
                                        <li><strong>The Fourth Amendment to the US Constitution, and various federal and state
                                            laws concerning access by law enforcement to information</strong> Establishes the
                                            procedures and circumstances under which law enforcement authorities may gain access
                                            to institutional data. <span class="xStrong">All warrants, subpoenas, and other legal
                                            requests, demands, or orders seeking access to institutional data or systems must
                                            be forwarded immediately to the IU Office of the Vice President and General Counsel.</span></li>
                                        <li><strong>State of Indiana Access to Public Records Act</strong> With some exceptions,
                                            provides for public access to government records, including records of public universities
                                            like IU.&nbsp; <span class="xStrong">All requests for records under the Indiana Access
                                            to Public Records Act must be forwarded immediately to the IU Office of the Vice
                                            President and General Counsel.</span></li>
                                        <li><strong>Indiana Code 4-1-10</strong> With some exceptions, makes it a crime to disclose
                                            more than the last four digits of someone's Social Security number to someone outside
                                            of the university. </li>
                                        <li><strong>Indiana Code 4-1-11</strong> With some exceptions, requires that the university
                                            promptly notify individuals when a breach of electronic systems security reasonably
                                            appears to have resulted in unauthorized access to individuals' unencrypted personal
                                            information, including Social Security numbers, credit and debit card numbers, driver's
                                            license numbers, and financial account numbers or access codes. </li>
                                        <li><strong>Indiana Code 24-4-14</strong> With some exceptions, requires that the university
                                            securely dispose of records with unencrypted personal information in them including
                                            Social Security numbers, credit card numbers, driver's license numbers, and financial
                                            account numbers or debit card numbers in combination with security or access codes
                                            or passwords.</li>
                                        <li><strong>State invasion of privacy laws</strong> Generally prohibit the disclosure
                                            of personal information about an individual when doing so would be highly offensive
                                            to a reasonable person.</li>
                                        <li><strong>State libel/defamation laws</strong> Generally prohibit false statements
                                            that harm another's reputation.</li>
                                        <li><strong>Payment Card Industry Data Security Standards (PCI-DSS)</strong> A contractual
                                            obligation when accepting credit cards for payment (or contracting for others to
                                            do so on IU's behalf), it requires strict security safeguards be applied to protect
                                            credit card numbers and associated data from unauthorized access. At IU, the Treasury
                                            Department oversees all credit card processing activities.</li>
                                    </ul>
                                    <div class="clear"> </div>
                                    <h4> Sanctions</h4>
                                    <p> Failure to comply with these standards will be dealt with seriously, and may result
                                        in sanctions relating to your use of information or IT resources (such as suspension
                                        or termination of access, or removal of online material); to your employment (up
                                        to and including immediate termination of employment, in accordance with applicable
                                        university policy); to your studies within the university (such as student discipline
                                        in accordance with applicable university policy). Illegal acts involving IU information
                                        or IT may also be subject to prosecution by state or federal authorities and may
                                        result in civil or criminal liability.</p>
                                    <div class="clear"> </div>
                                </div>
                                <label for="agreetoterms" class="col-sm-12" style="font-weight:normal">Type "yes" if you agree to the terms of the Guidelines for Appropriate Usage statements.</label>
                                <div class="row">
                                    <div class="col-xs-4 col-md-2">
                                        <input class="form-control"  id="agreetoterms" name="agreetoterms" type="text"  >
                                    </div>
                                    <div class="col-xs-8 col-md-10"> </div>
                                </div>
                                <div class="col-md-12 text-right"><a onclick="location.href = 'starterkit-home.php';" href="starterkit-home.php" class="btn btn-default goback">Back</a>
                                    <button class="btn btn-primary nextBtn" type="button" >Next</button>
                                </div>
                            </div>
                        </div>
                        <div class="row setup-content" id="step-3">
                            <input class=""   type="hidden"  >
                            <div class="col-md-12">
                                <h4 class="stepwizard-title">Select a Username</h4>
                                <p>Please choose one of the following options for your IU username. This username will be used as your identification on most IU systems. It will also be used as the basis of your email address.</p>
                            </div>
                            <div class="col-md-2"></div>
                            <div class="col-md-10">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                        thrclark </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                        tclark </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
                                        trclark </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios4" value="option4">
                                        tomclark </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios5" value="option5">
                                        thoclark </label>
                                </div>
                            </div>
                            <div class="col-md-12 text-right"><a href="#step-2" class="btn btn-default goback">Back</a>
                                <button class="btn btn-primary nextBtn" type="button" >Next</button>
                            </div>
                        </div>
                        <div class="row setup-content" id="step-4">
                            <input class=""   type="hidden"  >
                            <div class="col-md-12">
                                <h4 class="stepwizard-title">Select Email Domain</h4>
                                <p>As an IU student, you are provided an email address by your campus. This address is used by most academic and administrative offices to send you messages.</p>
                            </div>
                            <div class="col-md-2"></div>
                            <div class="col-md-10">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="domainoptions" id="domainoptions1" value="domainoptions1">
                                        thrclark@indiana.edu </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="domainoptions" id="domainoptions2" value="domainoptions2">
                                        thrclark@iu.edu </label>
                                </div>
                            </div>
                            <div class="col-md-12 text-right"><a href="#step-3" class="btn btn-default goback">Back</a>
                                <button class="btn btn-primary nextBtn" type="button" >Next</button>
                            </div>
                        </div>
                        <div class="row setup-content" id="step-5">
                            <input class=""   type="hidden"  >
                            <div class="col-md-12">
                                <h4 class="stepwizard-title">Create Passphrase</h4>
                                <p>A passphrase is a sentence or series of words, numbers, or symbols used along with your Network ID to log into your IU account. </p>
                            </div>
                            <div class="form-group">
                                <label for="NewPassphrase" class="col-sm-2 control-label">Passphrase</label>
                                <div class="col-sm-8">
                                    <input type="password" data-minlength="6" class="form-control" id="NewPassphrase" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group passreq" id="passreq" style="display:none">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-8">
                                    <div class="row">
                                        <div class="col-sm-12"> <span id="pass-length" class="glyphicon glyphicon-ok alert-neutral" aria-hidden="true"></span> Use 15 to 127 characters (at least 4 of which are unique) <br>
                                            <span id="pass-minwords" class="glyphicon glyphicon-ok alert-neutral" aria-hidden="true"></span> Use 4 or more non-repeating words (at least two characters in each) <br>
                                            <span id="pass-symbols" class="sr-only"  aria-hidden="true"> <span class="glyphicon glyphicon-remove alert-danger"></span> Don't use any of the following  characters: &gt; &lt; " #  @ </span> <span id="pass-name"  class="sr-only" aria-hidden="true"> <span class="glyphicon glyphicon-remove alert-danger"></span> Don't use your name or username </span> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPasswordConfirm" class="col-sm-2 control-label">Confirm</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#NewPassphrase" data-match-error="Whoops, these don't match" placeholder="Confirm" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12 text-right"><a href="#step-4" class="btn btn-default goback">Back</a>
                                <button class="btn btn-primary nextBtn" type="button" >Next</button>
                            </div>
                        </div>
                        <div class="row setup-content" id="step-6">
                            <input class=""   type="hidden"  >
                            <div class="col-md-12">
                                <h4 class="stepwizard-title">Passphrase Recovery Questions</h4>
                                <p> If you forget your passphrase and attempt to reset it, you will be asked to answer three registered questions chosen at random. Please consider:</p>
                                <ul>
                                    <li>You must register at least three questions.</li>
                                    <li>You may register as many as 10 questions by selecting "Add Another Question" below.</li>
                                    <li>Answers are not case sensitive.</li>
                                </ul>
                            </div>
                            <div class="col-md-12">
                                <hr>
                                <div class="form-group">
                                    <label for="question1" class="col-sm-2 control-label">Question</label>
                                    <div class="col-sm-8">
                                        <select id="question1"  class="form-control">
                                            <option value="" selected>select</option>
                                            <option value="">Which phone number do you remember most from your childhood?</option>
                                            <option value="">What was your favorite place to visit as a child?</option>
                                            <option value="">Who is your favorite actor, musician, or artist?</option>
                                            <option value="">What is the name of your favorite pet?</option>
                                            <option value="">In what city were you born?</option>
                                            <option value="">What high school did you attend?</option>
                                            <option value="">What is the name of your first school?</option>
                                            <option value="">What is your favorite movie?</option>
                                            <option value="">What is your mother's maiden name?</option>
                                            <option value="">What street did you grow up on?</option>
                                            <option value="">What was the make of your first car?</option>
                                            <option value="">When is your anniversary?</option>
                                            <option value="">What is your favorite color?</option>
                                            <option value="">What is your father's middle name?</option>
                                            <option value="">What is the name of your first grade teacher?</option>
                                            <option value="">What was your high school mascot?</option>
                                            <option value="">Which is your favorite web browser?</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="answer1" class="col-sm-2 control-label">Answer</label>
                                    <div class="col-sm-8">
                                        <input id="answer1" type="text" class="form-control" value="">
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label for="question2" class="col-sm-2 control-label">Question</label>
                                    <div class="col-sm-8">
                                        <select id="question2"  class="form-control">
                                            <option value="" selected>select</option>
                                            <option value="">Which phone number do you remember most from your childhood?</option>
                                            <option value="">What was your favorite place to visit as a child?</option>
                                            <option value="">Who is your favorite actor, musician, or artist?</option>
                                            <option value="">What is the name of your favorite pet?</option>
                                            <option value="">In what city were you born?</option>
                                            <option value="">What high school did you attend?</option>
                                            <option value="">What is the name of your first school?</option>
                                            <option value="">What is your favorite movie?</option>
                                            <option value="">What is your mother's maiden name?</option>
                                            <option value="">What street did you grow up on?</option>
                                            <option value="">What was the make of your first car?</option>
                                            <option value="">When is your anniversary?</option>
                                            <option value="">What is your favorite color?</option>
                                            <option value="">What is your father's middle name?</option>
                                            <option value="">What is the name of your first grade teacher?</option>
                                            <option value="">What was your high school mascot?</option>
                                            <option value="">Which is your favorite web browser?</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="answer2" class="col-sm-2 control-label">Answer</label>
                                    <div class="col-sm-8">
                                        <input id="answer2" type="text" class="form-control" value="">
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label for="question3" class="col-sm-2 control-label">Question</label>
                                    <div class="col-sm-8">
                                        <select id="question3"  class="form-control">
                                            <option value="" selected>select</option>
                                            <option value="">Which phone number do you remember most from your childhood?</option>
                                            <option value="">What was your favorite place to visit as a child?</option>
                                            <option value="">Who is your favorite actor, musician, or artist?</option>
                                            <option value="">What is the name of your favorite pet?</option>
                                            <option value="">In what city were you born?</option>
                                            <option value="">What high school did you attend?</option>
                                            <option value="">What is the name of your first school?</option>
                                            <option value="">What is your favorite movie?</option>
                                            <option value="">What is your mother's maiden name?</option>
                                            <option value="">What street did you grow up on?</option>
                                            <option value="">What was the make of your first car?</option>
                                            <option value="">When is your anniversary?</option>
                                            <option value="">What is your favorite color?</option>
                                            <option value="">What is your father's middle name?</option>
                                            <option value="">What is the name of your first grade teacher?</option>
                                            <option value="">What was your high school mascot?</option>
                                            <option value="">Which is your favorite web browser?</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="answer3" class="col-sm-2 control-label">Answer</label>
                                    <div class="col-sm-8">
                                        <input id="answer3" type="text" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="input_fields_wrap"> </div>
                                <div class="form-group">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-8">
                                        <button class="btn btn-xs btn-default add_field_button">Add Another Question</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 text-right"> <a href="#step-5" class="btn btn-default goback">Back</a>
                                <button class="btn btn-primary nextBtn" type="button" >Next</button>
                            </div>
                        </div>
                        <div class="row setup-content" id="step-7">
                            <div class="col-md-12">
                                <h4 class="stepwizard-title">Review &amp; Submit</h4>
                                <p> You have entered the following information. Please review these items before submitting your account request.</p>
                                <p style="font-weight:bold"> Your Account Information:</p>
                                <ul>
                                    <li> Your IU username is: thrclark<a href=""> <em><small>(edit)</small></em></a> </li>
                                    <li> Your IU email is: thrclark@iu.edu <a href=""> <em><small>(edit)</small></em></a></li>
                                </ul>
                                <p style="font-weight:bold"> Your registered passphrase questions are:</p>
                                <ul>
                                    <li>Which phone number do you remember most from your childhood?</li>
                                    <li> In what city were you born?</li>
                                    <li> What is your father's middle name?</li>
                                    <li> What is the name of your first grade teacher?</li>
                                    <li style="list-style:none"><a href=""> <em><small>(edit questions)</small></em></a> </li>
                                </ul>
                            </div>
                            <div class="col-md-12 text-right"><a href="#step-6" class="btn btn-default goback">Back</a> <a href="starterkit-confirmation.php" class="btn btn-primary nextBtn" >Submit</a> </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include ('includes/brand-footer.php') ?>
<?php include ('includes/footer-scripts.php') ?>
<script>
$(document).ready(function() {
    var max_fields      = 8; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div class="added_field"> <hr> <div class="form-group"> <label for="" class="col-sm-2 col-xs-6 control-label">Question <span class="label-sub">(optional)</span></label><div class="col-xs-6 text-right visible-xs"> <a href="" class="btn btn-xs btn-link remove_field">Delete</a></div><div class="col-sm-8"> <select  class="form-control"> <option value="" selected>select</option> <option value="">Which phone number do you remember most from your childhood?</option> <option value="">What was your favorite place to visit as a child?</option> <option value="">Who is your favorite actor, musician, or artist?</option> <option value="">What is the name of your favorite pet?</option> <option value="">In what city were you born?</option> <option value="">What high school did you attend?</option> <option value="">What is the name of your first school?</option> <option value="">What is your favorite movie?</option> <option value="">What is your mothers maiden name?</option> <option value="">What street did you grow up on?</option> <option value="">What was the make of your first car?</option> <option value="">When is your anniversary?</option> <option value="">What is your favorite color?</option> <option value="">What is your fathers middle name?</option> <option value="">What is the name of your first grade teacher?</option> <option value="">What was your high school mascot?</option> <option value="">Which is your favorite web browser?</option> </select> </div> <div class="col-sm-2 hidden-xs"> <a href="" class="btn btn-sm btn-link remove_field">Delete</a></div> </div> <div class="form-group"> <label for="" class="col-sm-2 control-label">Answer</label> <div class="col-sm-8"> <input type="text" class="form-control" value=""> </div> </div></div>'); //add input box
        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).closest('.added_field').remove(); x--;
    })
});
</script> 
<script>
    $(document).ready(function() {
        $("#NewPassphrase").focusin(function() {
            $("#passreq").slideDown();
        }).focusout(function() {
            $("#passreq").slideUp();
        });
    });


    
</script> 
<script>
    $(document).ready(function() {
        $("#lastname").focusin(function() {
            $("#lastname-message").slideDown();
        }).focusout(function() {
            $("#lastname-message").slideUp();
        });
    });


    
</script> 

<!--Wizard--> 

<script>
$(document).ready(function () {

    var navListItems = $('div.setup-panel div a, .goback'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
                $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-primary').addClass('btn-default');
            $item.addClass('btn-primary');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allNextBtn.click(function(){
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for(var i=0; i<curInputs.length; i++){
            if (!curInputs[i].validity.valid){
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid)
            nextStepWizard.removeClass('disabled').trigger('click');
    });

    $('div.setup-panel div a.btn-primary').trigger('click');
});</script> 
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
