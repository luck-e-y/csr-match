<!DOCTYPE html>
<html lang="en">

<head>
    <script>
    function validation()
 {
    
	var contactname=document.enq.name.value;
	var name_exp=/^[A-Za-z\s]+$/;
	if(contactname=='')
	{
		alert("Name Field Should Not Be Empty!");
		document.enq.name.focus();
		return false;
	}
	else if(!contactname.match(name_exp))
	{
		alert("Invalid Name field!");
		document.enq.name.focus();
		return false;
	}
	
	var email=document.enq.email.value;
	//var email_exp=/^[A-Za-z0-9\.-_\$]+@[A-Za-z]+\.[a-z]{2,4}$/;
	var email_exp=/^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
	if(email=='')
	{
		alert("Please Enter Email-Id!");
		document.enq.email.focus();
		return false;
	}
	else if(!email.match(email_exp))
	{
		alert("Invalid Email ID !");
		document.enq.email.focus();
		return false;
	}
	
	
	var message=document.enq.message.value;
	if(message=='')
	{
		alert("Query Field Should Not Be Empty!");
		document.enq.message.focus();
		return false;
	}
    return true;
 }
 </script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CSR-Match - Kontakt</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/grayscale.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    
   
    <style type="text/css">
        .bs-example{
            margin: 0px;
        }
    </style>
    
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="index.html">
                    <img src="img/logo-csr-match.svg" height="30">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">&uuml;ber uns<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="history.html">Unsere Geschichte</a></li>
                          <li><a href="stiftung.html">Social Angels Stiftung</a></li>
                          <li><a href="csrmatch.html">CSR MATCH</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="page-scroll" href="howitworks.html">Unsere Leistungen</a>
                    </li>
                    <li>
                        <a  href="benefit.html">Ihr Nutzen</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Unser Team<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="founders.html">Gr&uuml;nder</a></li>
                          <li><a href="members.html">Social Angels</a></li>
                          <li><a href="coaches.html">Coaches & Referenten</a></li>
                        </ul>
                    </li>
                    <li class="dropdown" id="wegblenden" >
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Mehr<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="impressions.html">Presse Impressionen</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- About Section -->
    <div class="content-dark-section" style="background-image: url('img/background-2.png');">
    <section id="about" class="container content-section text-left">
        <div class="row">
            <div class="col-lg-6">
                <h2 style="color: #fff !important;">Corporate Social Responsibility der Zukunft.</h2>               
                <span style="color: #fff;">CSR MATCH verfügt über die erste cloud-basierte Plattform, die es Unternehmen möglich macht, das Know-How ihrer Mitarbeitenden mit einem passenden CSR-Projekt zu verknüpfen.</span>
                </div>
        </div>
    </section>
    </div>
    <!-- Download Section -->
    <section id="download" class="content-section text-left" style="padding-top: 0px !important;">
        <div class="content-light-section">
                    <div class="container">
                        <div class="col-lg-8">
                            <h4>Kontakt</h4>
                            Bitte zögern Sie nicht uns zu kontaktieren. Wir freuen uns auf Ihre Kontaktaufnahme! <br><br>
                            
                            <b>Sarna R&ouml;ser</b><br>
                            Founder & Managing Partner<br>
                            Email: s.roeser@csr-match.de<br><br>
                            
                            <b>Brigida R&ouml;ser</b><br>
                            Founder & Managing Partner<br>
                            Email: b.roeser@csr-match.de<br><br>
                            
                            <b>CSR<span lang="de"> </span>MATCH</b><br>
                            Eine Marke von Social Angels<br>
                            Tel.: +49 7143 259 595-2<br>
                            Fax: +49 7143 259 595-3<br><br>

                            <span lang="de">

                            <b>Röser Beratungs GmbH &amp; Co. KG</b></span><br>
                            <span lang="de">Johann-Wolff-Str. 1 </span><br>
                            D-74395 Mundelsheim<br><br>
                            <form name="enq" method="post" action="email/index.php" onsubmit="return validation();">
                            <fieldset>

                            <input type="text" name="name" id="name" value=""  class="input-block-level" placeholder="Name" />
                            <input type="text" name="email" id="email" value="" class="input-block-level" placeholder="Email" />
                            <textarea rows="11" name="message" id="message" class="input-block-level" placeholder="Comments"></textarea>

                            <div class="actions">
                            <input type="submit" value="Send Your Message" name="submit" id="submitButton" class="btn btn-info pull-right" title="Click here to submit your message!" />
                            </div>

                            </fieldset>
                            </form> 

                        </div>
                        <div class="col-lg-4" id="ausblenden2">
                            <img class="img-responsive pull-right imgbw" src="img/sidebutton.svg" style="opacity: 0.3; margin-right: -100px;">
                        </div> 
                    </div>
        </div>
    </section>
    

    <div id="ausblenden"
    <section id="download" class="content-section text-left" style="padding: 0px; !important;">
        <div class="content-light-section" style="background-image: url('img/csrmatch-net.svg'); background-color: #20b2e3; min-height: 400px;">
            <div class="container">
                <div class="col-lg-12">
                    
                   </div>
            </div>
        </div>
    </section>
    </div>
    <footer style="margin-top: 0px !important;">
        <div class="content-dark-section" style="">
        <div class="container" style="background-color: #ececec;">
            <div class="row">
  <div class="col-sm-8">
     <img src="img/logo-csr-match.png" height="25" style="margin-left: -6px; margin-bottom: 20px;"><br>
     <span class="lead-small" style="color: #666;">CSR MATCH verfügt über die erste cloud-basierte Plattform, die es Unternehmen möglich macht, das Know-How ihrer Mitarbeitenden mit einem passenden CSR-Projekt zu verknüpfen.</span><br/><br />
    <div class="row">
      <div class="col-lg-1 col-xs-2 col-sm-2 col-sl-1 col-lx-4">
        <ul class="list-inline" style="margin-left: 0px !important;">
          <li>
            <a href="https://www.facebook.com/csrmatch"><img src="img/facebook.svg" height="25px"></a>
        </li>
        </ul>
      </div>
      <div class="col-lg-10 col-xs-8 col-sx-1 col-sl-4">
       <ul class="list-inline" style="margin-left: 0px !important;">
                        
                        <li>
                            <a href="impressum.html" style="color: #20b2e3;">Impressum</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="contact.html" style="color: #20b2e3;">Kontakt</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="faq.html" style="color: #20b2e3;">H&auml;fig gestellte Fragen</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="index.html" style="color: #20b2e3;">Social Angels Stiftung</a>
                        </li>
                        
                    </ul>
            <p class="copyright text-muted small" style="margin-left: 5px;">Copyright &copy; Social Angels 2015. Alle Rechte vorbehalten</p>
      </div>
    </div>
  </div>
</div>
            
        </div>
        </div>
    </footer>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>

</body>

</html>
