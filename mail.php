<?php

require 'mail/PHPMailerAutoload.php';

echo '<head>
	<link href="/css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/css/grayscale.css" rel="stylesheet">
    <link href="/css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
</head>';

$name = $_POST['name'];
$from = $_POST['from'];
$msg = $name . ' bittet um Kontaktaufnahme: ' . $from;

$mail = new PHPMailer();

//$mail->SMTPDebug = 3;

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'localhost';                // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'system@csr-match.de';         // SMTP username
$mail->Password = 'syst3m$';                          // SMTP password
$mail->Port = 25;                                    // TCP port to connect to

$mail->From = 'system@csr-match.de';
$mail->addAddress('s.roeser@social-angels.de'); //target address       
$mail->addReplyTo($from, $name);

$mail->Subject = 'CSR-Match Kundenanfrage';
$mail->Body    = $msg;

if ($name === '' || $from === '') {
   die('Ungueltige Daten! <a href="" onclick="window.history.back();">Zurueck</a>');
}

if(!$mail->send()) {
    echo 'Fehler beim Senden der Nachricht!';
    echo 'Error: ' . $mail->ErrorInfo;
} else {
    echo '
    <div class="modal fade" tabindex="-1" role="dialog" id="validentry">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Vielen Dank</h4>
          </div>
          <div class="modal-body">
            <p>Wir werden uns so bald wie m&ouml;glich bei Ihnen melden.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal" id="closemodal" style="background-color: #20b2e3; border-color: #20b2e3;">Zur&uuml;ck</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <script src="/js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/modal.js"></script>
    <!-- Plugin JavaScript -->
    <script src="/js/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Custom Theme JavaScript -->';

echo "<script type='text/javascript'>$('#validentry').modal();</script>";
}

echo "<script type='text/javascript'>
$('#closemodal').click(function() {
  window.history.back();  
});

</script>";
