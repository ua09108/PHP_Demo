<?

    function showdata(){
        if (func_num_args() == 0) {
            # code...
            echo "您沒有輸入任何參數! </br>";
        }
        else
        {
            $items = func_get_args();                    //傳回陣列
            foreach ($items as $key => $value) {
                # code...
                echo $value.",";
            }
            echo "最後一個為:".func_get_arg(func_num_args()-1);
            echo "<br/>";
        }
    }

    showdata();
    showdata("Jimmy","Peter","Amy","Bill","sue")

?>