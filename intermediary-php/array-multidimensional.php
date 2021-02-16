<?php
    //Array single

    $arr = ['Gabriela', 'Izabela'];
    $arr = array('Gabriela', 'Izabela');
    $arr[0] = 'Gabriela';
    $arr[] = 'Izabela';

    //Arrays Multidimensionais

    $arr2 = array(array('Gabriela', 'Izabela'), array(20,16));
    echo $arr2[0][0];

    $arr2[0] = array('key1' => 'Gabriela', 'Izabela');
    
    $arr2[0]['key1'] = 'Gabriela';
?>