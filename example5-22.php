<?php

$submitDate = 'example string';
        
        include_once "/phpMailer/PHPMailerAutoload.php";
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->isHTML(true);
        $mail->SMTPAutoTLS = false;
        $mail->Host = 'mail.ares.com.tw';
        $mail->Encoding = "8bit";
        $mail->CharSet  = "utf-8";
        $mail->setFrom('example@com.tw', 'example');
        $mail->AddEmbeddedImage('圖片路徑', 'banner');
        //or type data-url in $body
        
        //信件樣式
$body = <<<MAILBODY
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"><head><meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title>test</title>
</head><style type="text/css">
body {font-family: "微軟正黑體", sans-serif;font-size: 13px;text-align: center;background-color: #ebebeb;}
table {width: 500px;margin: 30px auto;text-align: left;border-collapse: collapse;background-color: #fff;}
a, a:link, a:hover {color: #ea2126;text-decoration: none;}img {border: 0; outline: 0; }#link {width: 400px;vertical-align: bottom;text-align: right;}
.data {text-align: left;}.data td {border: 1px solid #989898;}.bg {background-color: #ebebeb;width:30%;}
#footer {text-align: right;margin-top: 0;font-size: 11px;color: #ea2126;}td {margin: 0;padding: 8px;}
strong { color: #ea2126; }#content {padding: 0;}#footer td { border-top: 2px solid #ea2126; }
</style>
<body>
<table>
    <tr>
        <td></td>
        <td id="link"></td>
    </tr>
    <tr>
        <td colspan="2" id="content">
            <img src="cid:banner" alt="banner" width="500" height="140" style="display: block; border: 0;" />
        </td>
    </tr>
    <tr id="footer">
        <td colspan="2"> {$submitDate}</td>
    </tr>
</table>
</body>
</html>
MAILBODY;
        
        $mail->AddAddress("2012cjz@gmail.com", "cj");
        $mail->Subject = "mail test";
        $mail->MsgHTML($body);
        $mail->send();

