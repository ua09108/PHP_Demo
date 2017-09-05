<?

    function func1(){
        echo "這是func1函式<br/>";
    }

    function func2(){
        echo "這是func2函式<br/>";
    }

    $callfunc = "func1";
    $callfunc = "func2";


    //使用function_exists檢查函式是否存在
    if (function_exists($callfunc)) {
        # code...
        $callfunc();
    }
    else{
        echo "沒有此函式";
    }


?>