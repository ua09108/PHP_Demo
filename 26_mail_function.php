    <?
    $mailTo = "service@test.com";
    $mailSubject = "=?UTF-8?B?".base64_encode("Mail 測試信")."?=";
    // $mailContent = mb_convert_encoding("測試內文","big5","utf8");
    $mailContent = "測試內文";

    
    // $mailHeader = "To:user@test.com\r\n";
    // $mailHeader = "MIME-Version: 1.0\r\n";
    // $mailHeader .= "Content-type:text/html ; charset=big5\r\n";
    // $mailHeader .= "Content-Transfer-Encoding:8bit\r\n";
    // $mailHeader .= "From:service@test.com\r\n";
    // $mailHeader .= "Reply-to:service@test.com\r\n";
    // $mailHeader .= "Cc:other@test.com";
    // $mailHeader .= "Bcc:other@test.com";

    mail($mailTo,$mailSubject,$mailContent);

?>

