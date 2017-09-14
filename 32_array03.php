<?

    $seasonArray = array('春','夏','秋','冬');

    for ($i=0; $i < count($seasonArray); $i++) { 
        # code...
        echo $seasonArray[$i].'<br/>';
    }

    echo '<hr>';

    foreach ($seasonArray as $key => $value) {
        # code...
        echo $value.'<br/>';
    }


?>