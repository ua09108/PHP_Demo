<?

    $arr1 = array("a" => 10,"b" => 30, "c" => 20, "d" => 50 , "e" => 100);


    if (in_array(20,$arr1)) {
        # code...
        echo '找到20數值<br/>';
    }


    if (array_search(20,$arr1)) {
        # code...
        echo '找到20數值<br/>';
    }


?>