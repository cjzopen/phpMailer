# phpMailer ver.5.2.2
phpMailer example
<pre>
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
$body = &lt;&lt;&lt;MAILBODY
&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd"&gt;
&lt;html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"&gt;&lt;head&gt;&lt;meta http-equiv="Content-Type" content="text/html;charset=utf-8" /&gt;
&lt;title&gt;test&lt;/title&gt;
&lt;/head&gt;&lt;style type="text/css"&gt;
body {font-family: "微軟正黑體", sans-serif;font-size: 13px;text-align: center;background-color: #ebebeb;}
table {width: 500px;margin: 30px auto;text-align: left;border-collapse: collapse;background-color: #fff;}
a, a:link, a:hover {color: #ea2126;text-decoration: none;}img {border: 0; outline: 0; }#link {width: 400px;vertical-align: bottom;text-align: right;}
.data {text-align: left;}.data td {border: 1px solid #989898;}.bg {background-color: #ebebeb;width:30%;}
#footer {text-align: right;margin-top: 0;font-size: 11px;color: #ea2126;}td {margin: 0;padding: 8px;}
strong { color: #ea2126; }#content {padding: 0;}#footer td { border-top: 2px solid #ea2126; }
&lt;/style&gt;
&lt;body&gt;
&lt;table&gt;
    &lt;tr&gt;
        &lt;td&gt;&lt;/td&gt;
        &lt;td id="link"&gt;&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;td colspan="2" id="content"&gt;
            &lt;img src="cid:banner" alt="banner" width="500" height="140" style="display: block; border: 0;" /&gt;
        &lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr id="footer"&gt;
        &lt;td colspan="2"&gt; {$submitDate}&lt;/td&gt;
    &lt;/tr&gt;
&lt;/table&gt;
&lt;/body&gt;
&lt;/html&gt;
MAILBODY;
        
        $mail-&gt;AddAddress("2012cjz@gmail.com", "cj");  //收件者
        $mail-&gt;AddCC("xxx@com.tw", "xxx");             //副本
        $mail-&gt;AddBCC("xxx@com.tw", "xxx");            //密件
        $mail-&gt;Subject = "mail test";
        $mail-&gt;MsgHTML($body);
        $mail-&gt;send();

</pre>
