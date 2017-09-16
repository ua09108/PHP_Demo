<?

    $arr1 = array(1,2,3,4,5);
    $arr2 = array(4,2,5,6,7);

    $newArr = array_diff($arr1,$arr2);

    foreach ($newArr as $key => $value) {
        # code...
        echo $value."<br/>";
    }

?>