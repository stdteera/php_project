<?php

    //ให้ใช้ switch
    // กำหนดคำสั่งพื้นหลัง <body style='background-color: green;'>
    $day = date('l');
    // echo $day;
    //$day = "Wednesday";

    switch ($day) {
        case 'Monday':
            echo "<body style='background-color: yellow;'>";
            break;

        case 'Tuesday':
            echo "<body style='background-color: pink;'>";
            break;

        case 'Wednesday':
            echo "<body style='background-color: green;'>";
            break;

        case 'Thursday':
            echo "<body style='background-color: orange;'>";
            break;
        
        case 'Friday':
            echo "<body style='background-color: bluesky;'>";
            break;

        case 'Saturday':
            echo "<body style='background-color: purple;'>";
            break;

        default:
        echo "<body style='background-color: red;'>";
            break;
    }


?>