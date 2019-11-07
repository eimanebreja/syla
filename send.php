<?php
if (isset($_POST['send'])) {

    $from = $_POST['email'];
    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $postal = $_POST['postal'];
    $prof = $_POST['prof'];
    $address = $_POST['address'];

    $to = "info_syla@syla.jp";
    $too = $_POST['email'];
    $dev = "nimuel24@gmail.com";

    // $profession = $_POST['profession'];
    $subject = "SYLA";
    $subjects = "資料請求へのお問い合わせありがとうございます。";
    $message = $fullname ." ". "様"."\n\n"
    ."この度はIOTマンション経営資料ご請求お申し込みいただき、誠にありがとうございます。" . "\n"
    ."後ほどIOTマンション経営担当よりご確認を兼ね、お電話にてご連絡させていただきます。"."\n\n"
    ."お電話内容にお答え頂いた方には最大1,000円分の特典が御座いますので、" . "\n"
    ."担当者からご確認お願い致します。"."\n\n"
    ."下記に頂いた情報の控えを記載させて頂いておりますので、" . "\n"
    ."大切に保管して頂けますようお願い致します。"."\n\n\n"
    . "氏名 : " . $fullname . "\n"
    . "電話番号 : " . $phone . "\n"
    . "メールアドレス : " . $from . "\n"
    . "〒 : " . $postal . "\n"
    . "都道府県 : " . $prof . "\n"
    . "住所 : " . $address;

    $headers = "From:" . $from;
    mail($to, $subject, $message, $headers);
    mail($too, $subjects, $message, $headers);
    mail($dev, $subject, $message, $headers);

    echo "<script>alert('Successfull!')</script>";
    echo "<script>window.open('thanks-application-form.html','_self')</script>";

}