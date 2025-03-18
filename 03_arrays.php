<?php
    // Simple Array

    // There are two differents ways do create an Array

    // 1º - declaring values inside of [];
    $numbers = [1,44,55,22];
    // 2º -  declaring values like parameters inside a function called array
    $fruits = array('apple', 'orange', 'pear');

    var_dump($numbers);
    echo "<br>";
    echo "<br>";
    var_dump($fruits);
    echo "<br>";
    echo "<br>";

    for($i = 0; $i < count($fruits); $i++){
        echo $fruits[$i] . "<br><br>";
    }


    // Whe can create an associative Array with custom indexes

    // LIKE A OBJECT LITERALS
    $colors = [
        1 => 'red',
        4 => 'blue',
        6 => 'green'
    ];

    echo $colors[1];

    // Makes more sense create with strings keys

    $hex = [
        'red' => '#f00',
        'blue' => '#00f',
        'green' => '#0f0'
    ];

    echo "<br><br>";
    
    
    echo $hex['red'];
    
    
    echo "<br><br>";
    
    $person = [
        'first_name' => 'Brad',
        'last_name' => 'Traversy',
        'email' => 'brad@gmail.com'
    ];
    
    echo $person['first_name'];
    
    echo "<br><br>";
    
    // Multidimensional Array
    $people = [
        [
            'first_name' => 'Brad',
            'last_name' => 'Traversy',
            'email' => 'brad@gmail.com'
        ],
        [
            'first_name' => 'Brad',
            'last_name' => 'Traversy',
            'email' => 'brad@gmail.com'
        ],
        [
            'first_name' => 'Brad',
            'last_name' => 'Traversy',
            'email' => 'brad@gmail.com'
        ],[
            'first_name' => 'Brad',
            'last_name' => 'Traversy',
            'email' => 'brad@gmail.com'
        ]
        ];


        // echo $people[1]['email'];

        var_dump(json_encode($people));

        // json_ecode() == Transforms in an Array

    
    ?>