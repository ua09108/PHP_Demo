<?

    $pwd = "password";


    echo "crypt加密:".crypt($pwd,substr($pwd,0,2));    
    echo "<hr>";

    echo "md5加密:".md5($pwd);    
    echo "<hr>";

    echo "crypt加密:".sha1($pwd);    
    echo "<hr>";

?>