<?php

    require_once('animal.php');
    require_once('frog.php');
    require_once('ape.php');
    $sheep =new Animal("shaun");
    echo "Nama : ". $sheep->name ."<br>";
    echo "legs : ". $sheep->legs ."<br>";
    echo "cold blooded : ". $sheep->cold_blooded ."<br><br>";

    $frog =new Frog("buduk");
    echo "Nama : ". $frog->name ."<br>";
    echo "legs : ". $frog->legs ."<br>";
    echo "cold blooded : ". $frog->cold_blooded ."<br>";
    echo $frog->Jump();
    echo "<br><br>";
    
    $ape =new Ape("kera sakti");
    echo "Nama : ". $ape->name ."<br>";
    echo "legs : ". $ape->legs ."<br>";
    echo "cold blooded : ". $ape->cold_blooded ."<br>";
    echo $ape->Yell();
?>