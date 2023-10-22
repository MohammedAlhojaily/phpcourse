<?php

function add($x, $y){
    return $x + $y;
}

echo add(15, 10);
echo "<br>";
echo add(15, 20);
echo "<br>";
echo add(25, 30);

function hello($x){
    $user = $x;
    
    if($user === "Nour"){
        
    echo "Hello " . $user;
    }else{
    echo "Bye " . $user;
}
}

//hello("Anas");

//echo "<br>";

//hello("Nour");


?>