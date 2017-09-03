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
                $userName = "Peter";

                echo "Hello $userName";           //變數的值可以正確被認出
                echo '<br>Hello $userName';       //變數的值不可以正確被認出
                echo "<br/>";
                
                //heredoc語法
                $Message = <<< MSG
                    執行者: $userName <br/>
                    執行時間: 2017/09/03
MSG;

                echo $Message;
            ?>
    </body>
</html>
