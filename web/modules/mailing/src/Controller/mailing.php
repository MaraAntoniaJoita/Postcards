<?php
$send_mail = new \Drupal\Core\Mail\Plugin\Mail\PhpMail(); //
$from = ‘from@gmail.com’;
$to = ‘to@gmail.com’;
$message['headers'] = array(
  'content-type' => 'text/html',
  'MIME-Version' => '1.0',
  'reply-to' => $from,
  'from' => 'sender name <'.$from.'>'
);
$message['to'] = $to;
$message['subject'] = "Subject Goes here !!!!!";

$message['body'] = 'Hello,
Thank you for reading this blog.';

$send_mail->mail($message);

//
