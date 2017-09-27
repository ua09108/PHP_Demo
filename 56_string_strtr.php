<?

    $oriStr = "先生,歡迎來到大飯店";
    $tarStr = array("先生" => "小姐","大飯店"=> "小飯店");

    echo "原始的字串 => ".$oriStr."<br>";
    echo "更新後的字串 => ";
    echo strtr($oriStr,$tarStr);


?>