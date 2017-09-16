<?

    function filter1($val){

       return ($val%2==0);

    }

    $arr1 = array(10,1,-2,30,5,6);

    $filterArr = array_filter($arr1,"filter1");

    foreach ($filterArr as $key => $value) {
        # code...
        echo $value.",";
    }

?>