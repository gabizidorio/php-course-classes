<?php
    //for
    for($counter=10;$counter>=0;$counter--) {
        echo 'Hello world';
        echo '<br />';
        echo $counter;
        echo '<hr>';
    }

    //while
    $counter = 0;
    while($counter < 10){
        echo 'Hello world';
        echo 'hr';
        $counter+=1;
    }

    //do
    $counter = 0;
    do{
        echo 'Hello World';
        echo '<br />';
        $counter++;
    }while($counter < 10);
    
?>