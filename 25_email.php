<?

    if (mail("test@test.com","測試email","測試內文")) {
        # code...
        echo "寄信成功";
    }
    else
    {
        echo "寄信失敗";
    }

?>