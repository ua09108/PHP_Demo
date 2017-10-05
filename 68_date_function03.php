<?

    echo "Strftime函數使用<br/>";

    $currenttime = strftime("%A, %d %b %Y %H:%M:%S");
    echo "格式化的伺服器時間: $currenttime";

    echo "<hr/>";

    echo "gmstrftime函數使用<br/>";
    
    $currenttime = gmstrftime("%A, %d %b %Y %H:%M:%S");
    echo "格式化的格林威治時間: $currenttime";


    setlocale(LC_ALL,'');

    echo "<hr/>";

    $currenttime = strftime("%A, %d %b %Y %H:%M:%S");
    echo "格式化的伺服器時間: $currenttime";

    echo "<hr/>";

    $currenttime = gmstrftime("%A, %d %b %Y %H:%M:%S");
    echo "格式化的格林威治時間: $currenttime";
?>