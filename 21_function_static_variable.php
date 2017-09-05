<?
    echo "沒有使用靜態變數<br/>";

    function func1(){
        $i = 0;
        $i += 2;

        echo $i."<br/>";
    }

    func1();
    func1();

    echo "使用靜態變數<br/>";

    function func2(){
        static $j;
        $j += 2;

        echo $j."<br/>";
    }

    func2();
    func2();

?>