<?
    # 引入檔案類型建議為 php
    # include : 當檔案不存在時,只會顯示警告訊息 , 程式會持續進行
    # require : 當檔案不存在時,只會顯示警告訊息 , 程式不會持續進行
    # 如果是重要內容,建議使用 require
    # 可以使用 include_once 及 require_once


    include "inc1.php";
    include "inc2.php";
    // require "inc3.php";        

    echo "5+3 = ".add(5,3)."<br/>";
    echo "5-3 = ".minus(5,3)."<br/>";

?>