<?

    $datestr = "2015-11-24 04:30:25";

    sscanf($datestr,"%d-%d-%d %d:%d:%d",$y,$m,$d,$h,$i,$s);

    $timestamp1 = mktime($h,$i,$s,$m,$d,$y);

    echo "時間戳記1:".$timestamp1;

    echo "<hr/>";

    $timestamp2 = strtotime($datestr);

    echo  "時間戳記2:".$timestamp2;

?>