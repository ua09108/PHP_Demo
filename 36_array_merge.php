<?

    $arr1 = array(1,2,3);
    $arr2 = array(4,5,6);

     print_r(array_merge($arr1,$arr2));

    echo '<br/>';

    $name_array1 = array('peter','amy','jim');
    $age_array2 = array(30,20,25);

     print_r(array_combine($name_array1,$age_array2));

    $name1 = 'bill'; $age1 = 30;
    // $name2 = 'Bob';  $age2 =25;

    echo '<br/>';

     print_r(compact("name1","age1"));

?>