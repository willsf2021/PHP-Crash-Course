<?php

    // Loops - For / do while / while do / foreach


    for($i = 0; $i <= 10; $i++){
        echo "Number " . $i . "<br>";
    };

    echo "<br><br>";
    
    $x = 0;
    
    while($x <= 15){
        print $x++ . "<br>";
    }
    
    
    // foreach => Loop for Arrays
    
    
    $posts = ['First post','Second Post','Third Poost'];
    
    echo "<br><br>";
    echo "<br><br>";
    
    
    echo "Listing an Array with a FOR Loop" . "<br><br>";
    for($i = 0; $i < 3; $i++){
        echo $posts[$i] . "<br><br>";
    };
    
    echo "Listing an Array with a WHILE DO Loop" . "<br><br>";
    $x = 0;
    while($x < 3){
        echo $posts[$x] . "<br><br>";
        $x++;
    }

    echo "Listing an Array with a DO WHILE Loop" . "<br><br>";
    $y = 0;
    do{
        echo $posts[$y] . "<br><br>";
        $y++;
    }while($y < 3);
    
    
    echo "Listing an Array with a FOREACH Loop" . "<br><br>";
    foreach($posts as $value){ 
        echo $value . "<br><br>";
    }

?>