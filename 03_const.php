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
          
            define('logo1',"公司Logo");
            define('logoname1',"Tektro");
            const builtTime = "30";

            echo "我們的".logo1."是".logoname1."<br>";
            echo "成立時間是".builtTime."<br>";
            echo "目前PHP版本:".PHP_VERSION." ; 作業系統:".PHP_OS;
        ?>
    
    </body>
</html>