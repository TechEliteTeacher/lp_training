<?php
ini_set("error_log", "");
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\OAuth;
use PHPMailer\PHPMailer\Exception;
use League\OAuth2\Client\Provider\Google;

$CLIENT_ID = '107931207919-hdoc3du5gusj2s839dftnjnvn6c044ij.apps.googleusercontent.com';
$CLIENT_SECRET = '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';
$REFRESH_TOKEN = '1//04wIVaDZwNDLjCgYIARAAGAQSNwF-L9IrPGkTsZW5UO9US9jWmsauyAzzTiebQkH8ifmbRpA5idDsXMxQwXZwRjj-bFODryTRNBk';
// ya29.a0AfB_byDqV72EFAviZ8QrGNwOWEK4oxMp3zol_rJU7hooC3FxKFUdM1NyHPCI-afxdEAH4XDs0V9NFyF-OBcRLSapXcvY3YAhqEBqBRw0Pby-P5DscHhVFx-cZuEj9i8MDeNT1gbpO9G8wvmwmc5jr5EmoBOYZ6segJBiaCgYKAX4SARMSFQHGX2MiXgQgWMu5_OSsI6DyWvpz7A0171
$USER_NAME = 'stocksun.techelite@gmail.com';

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
    //差出人
    $from = 'stocksun.techelite@gmail.com';
    $fromname = 'テックエリート';
    //宛先
    $to = "stocksun.techelite@gmail.com";
    $toname = $_POST["name"]."様";
    //件名・本文
    $subject = "{$_POST["name"]}様からご予約を承りました";
    $body = "
    氏名：{$_POST["name"]}様
    メールアドレス：{$_POST["email"]}
    電話番号：{$_POST['tel']}
    郵便番号：{$_POST['address']}
    都道府県：{$_POST['prefecture']}
    市区町村：{$_POST['city']}
    町域・番地、建物名：{$_POST['house_number']}
    大人の人数：{$_POST['adult']}
    子供の人数：{$_POST['kids']}
    特別リクエスト：{$_POST['request']}
    ";
    //メール設定
    $mail->SMTPDebug = 2; //デバッグ用
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Host = $host;
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->AuthType = 'XOAUTH2';
    $provider = new Google(
        [
            'clientId' => $CLIENT_ID,
            'clientSecret' => $CLIENT_SECRET,
        ]
    );
    //Pass the OAuth provider instance to PHPMailer
    $mail->setOAuth(
        new OAuth(
            [
                'provider' => $provider,
                'clientId' => $CLIENT_ID,
                'clientSecret' => $CLIENT_SECRET,
                'refreshToken' => $REFRESH_TOKEN,
                'userName' => $USER_NAME,
            ]
        )
    );
    $mail->CharSet = "utf-8";
    $mail->Encoding = "base64";
    $mail->setFrom($from, $fromname);
    $mail->addAddress($to, $toname);
    $mail->Subject = $subject;
    $mail->Body    = $body;
    // //メール送信
    $mail->send();
    header("Location:thanks.php");
    exit();
    echo '成功' . PHP_EOL;
} catch (Exception $e) {
    echo '失敗: ', $mail->ErrorInfo . PHP_EOL;
}