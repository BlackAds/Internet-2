<?php
if (isset($_POST['mail'])){
      $to      = urldecode($_POST['mail']);
      $subject = 'I say YES! to...';
      $mail_message = $text;
      $headers = 'From: info@black-ads.com' . "\r\n" .
          'Reply-To: info@black-ads.com' . "\r\n" .
          'X-Mailer: PHP/' . phpversion();

      $mailSuccess = mail($to, $subject, $mail_message, $headers);      
    }
?>