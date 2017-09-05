<?

    $msg = "全域變數";

    function func1(){

        //方法一
        //global $msg;
        //$msg = "區域變數";


        //方法二
        $GLOBALS['msg'] = "區域變數";      
        echo  $GLOBALS['msg']."<br/>";
        
    }

    echo $msg."<br/>";
    func1();
    echo $msg."<br/>";

?>