<?php if(isset($_POST['email'])):
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $emailTo = "wisconsinbookstoprisoners@gmail.com";
    $emailSubject = "WBTP Form Submission";
 
    $name = $_POST['name'];
    $emailFrom = $_POST['email']; // required
    $contactReason = $_POST['contact_reason']; // not required
    $message = $_POST['message']; // required
 
    $emailMessage = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
    $emailMessage .= "Name: ".clean_string($name)."\n";
    $emailMessage .= "Email: ".clean_string($emailFrom)."\n";
    $emailMessage .= "Reason for contact: ".clean_string($contactReason)."\n";
    $emailMessage .= "Message: ".clean_string($message)."\n";
 
    // create email headers
    $headers = 'From: websitecontactform'."\r\n".
    'Reply-To: '.$emailFrom."\r\n" .
    'X-Mailer: PHP/' . phpversion();
    @mail($emailTo, $emailSubject, $emailMessage, $headers);
 
endif;

function movePage($num,$url) {
    static $http = array (
        200 => "HTTP/1.1 200 OK"
    );
    header($http[$num]);
    header ("Location: $url");
}

movePage(200,"https://www.wisconsinbookstoprisoners.org/thank-you");
