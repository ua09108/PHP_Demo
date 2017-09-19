<?

    $showStr = "('工作室'[自我介紹網址])http://www.e-happy.com.tw?aboutme=true";

    echo $showStr."<hr>";

    echo quotemeta($showStr)."<hr>";

    echo addslashes($showStr)."<hr>";

    echo addcslashes($showStr,"'[]")."<hr>";

?>