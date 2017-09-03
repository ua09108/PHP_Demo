<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
         <form method="GET" action="13_form_get_reveive.php">
            請輸入姓名:<input type="text" name="username" />
                      
            <br/>
            您學會項目:<br/>
            <select name="items[]" size="4" multiple="multiple">
             <option value="Linux">Linux</option>
             <option value="Apache">Apache</option>
             <option value="MySQL">MySQL</option>
            </select> <br />

            <input type="submit" value="送出資料" />
         </form>
    </body>
</html>