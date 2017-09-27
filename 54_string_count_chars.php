<?
    $str = "My name is David.";

    $arrStr = count_chars($str,1);

    echo "原始字串".$str;
    echo "<hr>";

    foreach ($arrStr as $key => $value) {
        # code...
        echo chr($key)."出現: ".$value." 次<br>";
    }


?>