<?

    echo "GetDate日期函數測試<hr/>";

    foreach (getdate() as $key => $value) {
        # code...
        echo "$key => $value <br/>";
    }


    echo "<hr/>";

    echo "Localtime日期函數測試<br/>";

    foreach (localtime(time(),1) as $key => $value) {
        # code...
        echo "$key => $value <br/>";
    }

    echo "<hr/>";

    echo "Gettimeofday日期函數測試<br/>";
    
        foreach (gettimeofday() as $key => $value) {
            # code...
            echo "$key => $value <br/>";
        }

?>