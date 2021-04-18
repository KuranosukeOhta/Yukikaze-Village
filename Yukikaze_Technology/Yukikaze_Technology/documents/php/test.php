<?php

$to = "northjapankeipark4@gmail.com";
$subject = "メール送信のテスト";
$text = "メール本文です。";

// メール送信
mb_send_mail( $to, $subject, $text);
 ?>
