送信
<?php
ini_set("error_log", "");
// require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\OAuth;
use PHPMailer\PHPMailer\Exception;
use League\OAuth2\Client\Provider\Google;

require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';
require './PHPMailer/src/Exception.php';
require './env.php';

$mail = new PHPMailer(true);

if($_POST["plan"] == "standard") {
    $_POST["plan"] = "スタンダードルーム";
} else if($_POST["plan"] == "deluxe") {
    $_POST["plan"] = "デラックスルーム";
} else if ($_POST["plan"] == "premier") {
    $_POST["plan"] = "プレミアスィート";
}

if(empty($_POST["request"])) {
    $_POST["request"] == "";
}

try {
    //Gmail 認証情報
    $host = 'smtp.gmail.com';
    $username = MAIL; // example@gmail.com
    $password = PASSWORD;

    //差出人
    $from = MAIL;
    $fromname = 'TechElite';

    //宛先
    $to = MAIL;
    $toname = 'TechElite LP';

    //件名・本文
    $subject = "{$_POST["name"]}様からご予約を承りました";
    $body =
    "
氏名：{$_POST["name"]}様
メールアドレス：{$_POST["email"]}
電話番号：{$_POST['tel']}
郵便番号：{$_POST['address']}
都道府県：{$_POST['prefecture']}
市区町村：{$_POST['city']}
町域・番地、建物名：{$_POST['house_number']}
チェックイン日：{$_POST['checkin']}
チェックアウト日：{$_POST['checkout']}
ご希望の宿泊プラン：{$_POST['plan']}
大人の人数：{$_POST['adult']}
子供の人数：{$_POST['kids']}
特別リクエスト：{$_POST['request']}
    ";

    //メール設定
    // $mail->SMTPDebug = 2; //デバッグ用
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Host = $host;
    $mail->Username = $username;
    $mail->Password = $password;
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->CharSet = "utf-8";
    $mail->Encoding = "base64";
    $mail->setFrom($from, $fromname);
    $mail->addAddress($to, $toname);
    $mail->Subject = $subject;
    $mail->Body    = $body;

    //メール送信
    $mail->send();
    header("Location:thanks.php");
    exit();
} catch (Exception $e) {
    echo '失敗: ', $mail->ErrorInfo;
}