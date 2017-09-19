<?

    $str = "Genius is one percent inspiration";

    echo chunk_split($str,8,"<hr>");

    echo wordwrap($str,8,"<hr>");

    echo '<br><br><br><br><br>';


    $token = strtok($str," ");

    // echo $token;
    while($token){
        echo "$token<br>";
        $token = strtok(" ");
    }

    echo '<br><br><br><br><br>';

    $str2 = "台中市 台北市 高雄市";

    $arr1 = explode(" ",$str2);

    foreach ($arr1 as $key => $value) {
        # code...
        echo $value."<br>";
    }

    echo '<br><br><br><br><br>';


    $str3 = "忠孝仁愛信義和平";

    $showword = str_split($str3,3);

    foreach ($showword as $key => $value) {
        # code...
        echo $value."<br>";
    }


    echo '<br><br><br><br><br>';

    $arrword = array("Bill","John","Amy");

    echo implode(" ",$arrword);

?>