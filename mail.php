<?php
if (isset($_POST['mail'])) {
   
    $from = $_POST['sem_email'];
    $sem_schedule = $_POST['sem_schedule'];
    $sem_fullname = $_POST['sem_fullname'];
    $sem_phone = $_POST['sem_phone'];
    $sem_email = $_POST['sem_email'];
    $sem_age = $_POST['sem_age'];
    $sem_occupation = $_POST['sem_occupation'];
    $sem_income = $_POST['sem_income'];
    $sem_message = $_POST['message'];

    $to = "info_syla@syla.jp";
    $too =  $_POST['sem_email'];
    $dev = "nimuel24@gmail.com";

    // $profession = $_POST['profession'];
    $subject = "SYLA";
    $subjects = "無料セミナーへのお申込みありがとうございます。";
    $message =  $sem_fullname ." ". "様"."\n\n"
    ."この度はシーラ無料セミナーへお申し込みいただき、誠にありがとうございます。" . "\n"
    ."セミナー開催前日に事務局より、お電話にて確認のご連絡致します。"."\n\n"
    ."また、お電話内容にお答え頂いた方には最大1,000円分の特典が御座いますので、" . "\n"
    ."担当者からご確認お願い致します。"."\n\n"
    ."下記に頂いた情報の控えを記載させて頂いておりますので、" . "\n"
    ."大切に保管して頂けますようお願い致します。"."\n\n\n"
    . "日程 : " . $sem_schedule . "\n"
    . "氏名 : " . $sem_fullname . "\n"
    . "電話番号 : " . $sem_phone . "\n"
    . "メールアドレス : " . $sem_email . "\n"
    . "年齢 : " . $sem_age . "\n"
    . "職業職種 : " . $sem_phone . "\n"
    . "電話番号 : " . $sem_occupation . "\n"
    . "年収 : " . $sem_income . "\n"
    . "備考 : " . $sem_message;
    $headers = "From:" . $from;
    mail($to, $subject, $message, $headers);
    mail($too, $subjects, $message, $headers);
    mail($dev, $subjects, $message, $headers);

    echo "<script>alert('Successfull!')</script>";
    echo "<script>window.open('thanks-seminar-application.html','_self')</script>";

}