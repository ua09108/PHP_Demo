<?
    //Call By Value    
    $x = 2;

    function func1($x){
        $x = $x + 2;
        echo "Call By Value : 在func1的x = ".$x."<br/>";
    }

    func1($x);
    echo "Call By Value : 在外面的x = ".$x."<br/>";



      //Call By Address  
      $y = 2;
      
          function func2(&$y){
              $y = $y + 2;
              echo "Call By Address : 在func2的y = ".$y."<br/>";
          }
      
          func2($y);
          echo "Call By Address : 在外面的y = ".$y."<br/>";

?>