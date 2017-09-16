<?

    $testArr1 = array('bill','amy','jim');

    list($x,$y,$z) = $testArr1;

    echo $x.'<br/>';
    echo $y.'<br/>';
    echo $z.'<br/>';

    echo '<hr>';

    list($x,$y) = $testArr1;
    
    echo $x.'<br/>';
    echo $y.'<br/>';

    echo '<hr>';
    
    list($x,,$y) = $testArr1;
        
    echo $x.'<br/>';
    echo $y.'<br/>';
    

?>