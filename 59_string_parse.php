<?

    $url_quqery = "name=peter&age=35&city=taichung";

    parse_str($url_quqery);

    printf("I am %s , age is %d and city live in %s",$name,$age,$city);

?>