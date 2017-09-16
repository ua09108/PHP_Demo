<?

    $arr1 = array("藍","綠","紅","黑","黃");

    echo '第一個元素 : '.reset($arr1)."<br/>";
    echo '第二個元素 : '.next($arr1)."<br/>";
    echo '第三個元素 : '.next($arr1)."<br/>";
    echo '最後一個元素 : '.end($arr1)."<br/>";
    echo '下一個元素 : '.next($arr1)."<br/>";
    echo '上一個元素 : '.prev($arr1)."<br/>";
    echo '上一個元素 : '.prev($arr1)."<br/>";
    echo '上一個元素 : '.prev($arr1)."<br/>";
    echo '重設元素 : '.reset($arr1)."<br/>";

    echo '<hr>';

    $arr2 = array("藍","綠","紅","黑","黃");

    $arr3 = array_slice($arr2,0,3);

    array_push($arr3,"新顏色一");
    array_unshift($arr3,"新顏色二");

    $newArr = array("新加入的顏色一","新加入的顏色二");

    array_splice($arr3,1,3,$newArr);


    array_shift($arr2);
    array_shift($arr2);
    array_pop($arr2);

    foreach ($arr2 as $key => $value) {
        # code...
        echo $value." , ";
    }

    echo '<hr>';

    foreach ($arr3 as $key => $value) {
        # code...
        echo $value." , ";
    }

?>