<?

    $email = "test@yahoo.com.tw";
    $erroremail = "test";

    if(preg_match("/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/",$email,$matchData))
    {
        echo "郵件驗証成功 : {$matchData[0]}";
    }
    else
    {
        echo "郵件驗証失敗";
    }

?>