<?

    $arrEmp = array('num1'=> '001','num2' => '002' , 'num3' => '003');

    while (list($a,$b) = each($arrEmp)) {
        # code...
        echo "$a 值 = $b";
        echo  ',';
    }

?>