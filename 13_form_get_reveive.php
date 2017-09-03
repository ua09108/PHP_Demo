<?
    echo "輸入姓名:";
    echo $_GET["username"];
    echo "<br/>";
    echo "選擇項目:<br/>";
    
    foreach ($_GET["items"] as $key => $value) {
        echo $value."<br/>";
    }
    
?>