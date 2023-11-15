<?php

    //if  1 condition => true
    // odd => 0 2 4 6 8
    // even => 1 3 5 7 9

    $num1 = 56814;
    if($num1 % 2 == 0){
        echo "เลขคู่";
    }

    echo "<hr color='red'>";

    //if else
    $num2 = 785465;
    if($num2 % 2 == 0){
        echo "เลขคู่";
    }else{
        echo "เลขคี่";
    }

    echo "<hr color='red'>";

    //if elseif else
    $led = "green";
    if($led == "green"){
        echo "ไปได้";
    }elseif($led == "yellow"){
        echo "ชะลอ";
    }else{
        echo "หยุด";
    }

    echo "<hr color='red'>";

    // คำนำหน้านาม (นาย/นาง/นางสาว/ด.ช./ด.ญ.)
    $prefix = "นาง";

    //switch

    switch ($prefix) {
        case 'นาย':
            echo "Male";
            break;
        
        case 'ด.ช.':
            echo "Male";
            break;

        case 'นาง':
            echo "Female";
            break;
        
        case 'นางสาว':
            echo "Female";
            break;
        
        default:
            echo "Female";
            break;
    }

?>