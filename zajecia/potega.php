<?php
    $potega=2**10;
    echo $potega, "<br>";
    //systemy liczbowe
    $int=10;
    $hex=0xA;
    $oct=012;//2*8^0+2*8^1
    $bin=0b1011;
    echo $int,"<br>";
    echo $hex,"<br>";
    echo $oct,"<br>";
    echo $bin,"<br>";

    // echo phpinfo();

    // operatory 

    $x=0b1010;
    echo $x,"<br>"; //10
    $x = $x>>1;
    echo $x,"<br>"; //5
    
    $x=$x<<2;
    echo $x,"<br>"; //20

    //równe oraz identyczne

    $x=1;
    $y=1.0;
    if ($x == $y)
        echo "Równe<br>";
    else
        echo "Różne<br>";

    if ($x === $y)
        echo "Identyczne<br>";
    else
        echo "Nieidentyczne<br>";
    
        echo gettype($x),"<br>";
        echo gettype($y),"<br>";
    
     //Operatory rzutowania danych

     $text = "123ssd";
     $x = (int) $text;
     echo $x,"<br>";
     echo gettype($x),"<br>";

     $text = 10;
     $x = (unset)$text;
     echo "\$text: $text<br>";
     echo "\$x: $x<br>";
    echo gettype($text),"<br>";
    echo gettype($x),"<br>";

    //$_GET, $_POST, $_COOKIE, $_FILES, $_SESSION, $_SERVER

    echo $_SERVER['SERVER_PORT'],"<br>";
    echo $_SERVER['SERVER_NAME'],"<br>"; 
    echo $_SERVER['SCRIPT_NAME'],"<br>";

    $filelocal = $_SERVER['DOCUMENT_ROOT'];
    $filelocal .= $_SERVER['SCRIPT_NAME'];

    echo $filelocal,"<br>";

    define("NAME", "JANUSZ"); // definiowanie imienia
    echo NAME,"<br>";
    define("SURNAME", "KOWALSKI"); // definiowanie nazwisko
    echo SURNAME,"<br>";

    echo PHP_VERSION; //Wersja PHP

    

    
?>