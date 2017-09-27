<?

    $curr_date = "2017-09-25";

    $tran_date = sscanf($curr_date,"%d-%d-%d");

    vprintf("今天日期: %d 年 %02d 月 %d 日",$tran_date);

?>