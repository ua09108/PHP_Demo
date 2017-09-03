<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <?
            $MyLanguage = "PHP";

            //顯示原始碼
            $Message = <<<'Msg'
            This is $MyLanguage,
            <br/>
            Source Code Display.
Msg;
            echo $Message;
        ?>
    </body>
</html>