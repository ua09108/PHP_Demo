<?

    srand((double)microtime()*1000000);

    $randval = rand(0,5);

    switch ($randval) {
        case '1':
            # code...
            echo "亂數一";
            break;
        case '2':
            # code...
            echo "亂數二";
            break;
        case '3':
            # code...
            echo "亂數三";
            break;
        case '4':
            # code...
            echo "亂數四";
            break;
        case '5':
            # code...
            echo "亂數五";
            break;
    }

?>