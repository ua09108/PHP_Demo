<?

    $thisYear = date("Y");

    $dateStr = "2005-11-24 04:30:25";
    sscanf($dateStr,"%d",$y);

    if(checkdate(2,29,$y)){
        echo "今年 $y 年是閏年";        
    }
    else
    {
        echo "今年 $y 年不是閏年";        
    }

?>