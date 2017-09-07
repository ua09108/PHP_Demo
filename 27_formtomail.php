<?

    if (isset($_POST["sendmail"]) && $_POST["sendmail"] == "true" ) {
        # code...
        $mailFrom = "=?UTF-8?B?".base64_encode($_POST["frommail"])."?=<".$_POST["frommail"].">";
    
    $mailTo = "service@test.com";

    // $mailSubject = "=?UTF-8?B?".base64_encode("Mail 測試信")."?=";
    $mailSubject = "=?UTF-8?B?".base64_encode($_POST["mailsubject"])."?=";
    $mailHeader = "From:".$mailFrom."\r\n";
    $mailHeader.="Content-type:text/html;charset=UTF-8";

  
    mail($mailTo,$mailSubject,$_POST["mailcontent"],$mailHeader);

    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
    
    <?
         header("Content-type:text/html;charset=utf-8");
    ?>
    
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        
        <?
            if (isset($_POST["sendmail"]) && $_POST["sendmail"] == "true" ) {
        ?>

        寄送成功 , <a href="27_formtomail.php">再寄一次</a>
        <?
            } else {
        ?>

        <form name="form1" method="post" action="">

            <table border="0" cellpadding="4" cellpacing="0">
            
            <tr>
                <td>寄件人姓名</td>
                <td>
                    <input type="text" name="fromname" id="fromname">                
                </td>
            </tr>

            <tr>
                <td>寄件人郵件</td>
                <td>
                    <input type="text" name="frommail" id="frommail">                
                </td>
            </tr>

            <tr>
                <td>主旨</td>
                <td>
                    <input type="text" name="mailsubject" id="mailsubject">                
                </td>
            </tr>

            <tr>
                <td colspan="2"><textarea name="mailcontent" id="mailcontent" rows="5" cols="45"></textarea></td>
            </tr>

            <tr>
                <td colspan="2">
                    <input type="submit" name="button" id="button" value="送出">
                    <input type="hidden" name="sendmail" id="sendmail"  value="true">
                </td>
            </tr>

            </table>
        </form>

        <?
            }
        ?>
    </body>
</html>