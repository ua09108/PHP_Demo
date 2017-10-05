<?

    echo "Date函數使用<br/>";

    $currenttime = date("Y-m-d H:i:s");
    echo "伺服器時間: $currenttime";

    echo "<hr/>";

    echo "Gmdate函數使用<br/>";
    
        $currenttime = gmdate("Y-m-d H:i:s");
        echo "格林威治時間: $currenttime";

?>