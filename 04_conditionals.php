<?php

    // NOTE: The PHP Operators works like of JavaScript Operators

    /*
    if(CONDITION){
        // code to be executed if condition is true;
    }
    
    */

    $age = 19;



    if($age > 18){
        echo "You've passed";
    } else {
        echo "You haven't passed!";
    };



    $t = date("H");

    // $sum = 26;

    // echo $sum + $t;

    echo "<br> <br>";
    
    // var_dump($t);
    
    if($t < 12){
        echo "Good morning!";
    } else if($t < 18){
        echo "Good afternoon!";
    }else{
        echo "Good evening!";
    };
    
    echo "<br> <br>";
    // Ternary Operator, equals JavaScript
    
    $post = ['There is something here'];    
    
    echo !empty($post) ? $post[0] : "empty, bro";
    
    echo "<br> <br>";
    
    
    $firstPost = $post[0] ?? null;
    
    
    echo $firstPost;
    
    echo "<br> <br>";

    // Switch Case

    $favcolor = 'roxo';

    switch($favcolor) {
        case 'red':
            echo 'Your favorite color is red';
            break;
        case 'blue':
            echo 'Your favorite color is blue';
            break;
        case 'green':
            echo 'Your favorite color is green';
            break;
        case 'yellow':
            echo 'Your favorite color is yellow';
            break;
        default:
            echo "Your favorite color there isn't in out list";
            break;
    }



?>