<?

    $arr1 = array('a','b','c');
    $arr2 = array('name' => 'Peter' , 'age' => 30);


    for ($i=0; $i < 3; $i++) { 
        # code...
        echo $arr1[$i].'<br/>';
    }

    
    echo 'My Name is '.$arr2['name'].' , age is '.$arr2['age'];

?>