<?
    //函數可以在任何位置
    //
    
    function callMyName($myName="None")
    {
               
        if ($myName == "None") {
            # code...
                      
            echo  "沒有傳入參數<br/>";       
        }
        else
        {            
            
            echo  myInformation().$myName."<br/>";
        }

        
    }
    
    callMyName();
    callMyName("Peter");
    callMyName("Amy");

    function myInformation(){
        echo "Hello ";
    }
?>