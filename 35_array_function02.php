<?

    $arr1 = array('peter','jim');
    $arr2 = array(10,20,5,10,30,10,10,20,30);
    // $a = 10;

    if (is_array($arr1)) {
        # code...
        echo 'is_array是陣列,共有 '.count($arr1).' 個元素';
    }
    else
    {
        echo 'is_array不是陣列';
    }


    printBR();

    $value = array_count_values($arr2);

    print_r($value);

    printBR();

    echo array_sum($arr2);

    printBR();



    echo '去除重覆後結果:<br/>';

    $value1 = array_unique($arr2);
    // print_r($value);

    foreach ($value1 as $key => $value) {
        # code...
        echo '數值有 '.$value.'<br/>';
    }

    printBR();


    echo '建立1~10數字,並使用shuffle打亂:</br>';

    $randNumber = range(1,10,1);
    shuffle($randNumber);

    foreach ($randNumber as $key => $value) {
        # code...
        echo $value.',';
    }






    function printBR(){
        echo '<br/>';
        echo '<br/>';
    }
    

?>