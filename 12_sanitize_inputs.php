<?php

// Tell me, what is happening here? 
// Explain step by step


// Below we have a conditional, that verifies 
// if varible 'submit' exists inside of $_POST
if (isset($_POST['submit'])) {

    //Below, if the condition is true, it going to show the
    // 'name' and 'age', that are inside of $_POST
    // Right, now gonna sanitize the inputs!!
    // echo $_POST['name'];

    // $name = htmlspecialchars($_POST['name']);
    // $age = htmlspecialchars($_POST['age']);
    // echo $name;


    // $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    // $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS);



    // Below there is an example that allows to sanitize whataver variable we want!
    // Instead filter_input, we just change to filter_var
    $name = filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS);

    echo $name . '<br>';
    // echo $age;
}

?>

<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
    <!-- Above, 
     first - we are setting up the action, 
     Which page this form going to take us to?
     this is the action atribute
     second - we are setting up where form gonna 
     save the variables that are inside of itself
       -->
    <div>
        <label for="name">Name: </label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="age">Age: </label>
        <input type="text" name="age">
    </div>
    <input type="submit" value="Submit" name="submit">
    <!-- 
         Above, when we Click on Submit 
        we are putting the value "Submit" or anything 
        like "abóbora" if we want, 
        inside of submit variable.
    -->
</form>