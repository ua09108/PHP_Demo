<?

    $dateStr = "2015-11-24 04:30:25";

    $timestamp = strtotime($dateStr);

    echo "出生時間:".$dateStr;

    echo "<hr/>";

    echo "十月前日期:".date("Y-m-d",strtotime("- 10 months",$timestamp));


    echo "<hr/>";

    echo "下一個月日期:".date("Y-m-d",strtotime("+ 1 months",$timestamp));
    
    echo "<hr/>";
    
     echo "明年日期:".date("Y-m-d",strtotime("+ 1 years",$timestamp));
?>