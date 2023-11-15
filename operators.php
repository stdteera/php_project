<?php

    $a = 15;
    $b = 20;

    //Arithmetic
    echo $a + $b;
    echo "<br>";
    echo $a - $b;
    echo "<br>";
    echo $a * $b;
    echo "<br>";
    echo $b / $a;
    echo "<br>";
    echo $b % $a;
    echo "<br>";
    echo $b ** 2;
    echo "<br>";

    //Assignment
    $x = 5;
    echo $x;
    echo "<br>";

    // $x = $x + 5;
    $x += 5;
    echo $x;
    echo "<br>";

    $x -= 2;
    echo $x;
    echo "<br>";

    $x *= 2;
    echo $x;
    echo "<br>";

    $x /= 4;
    echo $x;
    echo "<br>";

    $x %= 3;
    echo $x;
    echo "<br>";

    //Comparison
    $d = 10;
    $h = 20;
    $k = "10";

    echo var_dump($d == $h);
    echo "<br>";
    echo var_dump($d === $k);
    echo "<br>";
    echo var_dump($d != $h);
    echo "<br>";
    echo var_dump($d <> $h);
    echo "<br>";
    echo var_dump($d < $h);
    echo "<br>";
    echo var_dump($d > $h);
    echo "<br>";
    echo var_dump($d <= $h);
    echo "<br>";
    echo var_dump($d >= $h);
    echo "<br>";
    echo var_dump($d <=> $k);
    echo "<br>";


    //Increment / Decrement
    $p = 5;
    $p++;
    echo $p; //6
    echo "<br>";
    ++$p;
    echo ++$p;
    echo "<br>";
    echo $p;
    echo "<br>";

    $m = 5;
    $m--;
    echo $m;
    echo "<br>";
    --$m;
    echo $m--;
    echo "<br>";
    echo $m;

    $r = 5;
    $e = 10;
    echo "<br>";
    echo var_dump(($r <= $e) AND ($r == $e));
    echo "<br>";
    echo var_dump(($r <= $e) OR ($r == $e));
    echo "<br>";
    echo var_dump(($r <= $e) && ($r == $e));
    echo "<br>";
    echo var_dump(($r <= $e) || ($r == $e));
    echo "<br>";

    //String
    $nn = "Teera";
    $mm = "Binkasem";

    echo $nn.$mm;
    echo "<br>";
    $nn .= $mm;
    echo $mm;
    echo "<br>";
    echo $nn;

?>