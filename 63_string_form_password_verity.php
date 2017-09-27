<?

    if(isset($_POST["passwd"]) && $_POST["passwd"] != ""  )
    {
        
        $input_password = crypt($_POST["passwd"],substr($_POST["passwd"],0,2));
        $right_password = crypt("abc123",substr($_POST["passwd"],0,2));

        if($input_password == $right_password){
            echo "密碼正確<br>";
            echo "<a href='#' onclick='window.history.back();';>回上一頁</a>";
        }
        else{
            echo "密碼驗証失敗<br>";
            echo "<a href='#' onclick='window.history.back();';>回上一頁</a>";
        }

    }

?>
<font color='blue'>密碼: abc123</font>
<form action="" name="form1" method="post">
    <input name="passwd" type="password" id="passwd">
    <input type="submit" name="submit" value="驗証">
</form>