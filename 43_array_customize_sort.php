<?

    function cmp($a,$b){

        if ($a == $b) {
            # code...
            return 0;
        }

        if($a < $b){
            return 1;
        }
        else{
            return -1;
        }

    };

    $arr1 = array(10,20,5,6,30);


    usort($arr1,"cmp");

    foreach ($arr1 as $key => $value) {
        # code...
        echo $value.",";
    }

?>