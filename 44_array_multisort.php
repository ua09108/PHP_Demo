<?

    $arrProduct = array("產品一","產品二","產品三");
    $arrCost = array(100,40,125);

    array_multisort($arrCost,SORT_DESC,$arrProduct);

    for ($i=0; $i < count($arrProduct); $i++) { 
        # code...
        echo $arrProduct[$i].":".$arrCost[$i].",";
    }

?>