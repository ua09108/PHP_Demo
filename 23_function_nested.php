<?

    function funCal($N){
        if ($N == 0) {
            # code...
            return 1;
        }
        else
        {
            return $N * funCal($N-1);
        }
    }

    echo funCal(5);

?>