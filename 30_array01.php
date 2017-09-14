<?
    $weekArray[] = 'Sunday';
    $weekArray[] = 'Monday';
    $weekArray[] = 'Tuesday';
    $weekArray[] = 'Wednesday';
    $weekArray[] = 'Thursday';
    $weekArray[] = 'Friday';
    $weekArray[] = 'Saturday';

    for ($i=0; $i < 7; $i++) { 
        # code...
        echo $weekArray[$i] . "<br />";
    }

    $emp1['name'] = 'peter';
    $emp1['age'] = 50;

    echo 'My Name is '.$emp1['name'].' , age is '.$emp1['age'];
?>