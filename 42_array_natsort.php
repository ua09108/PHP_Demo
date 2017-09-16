<?

    $arr1 = array('img1','img11','img22','img2');
    
    // sort($arr1);
    natsort($arr1);

    foreach ($arr1 as $key => $value) {
        # code...
        echo $value.',';
    }

?>