<?php

    $file = './extras/users.txt';


    if(file_exists(($file))){
        // echo readfile($file); // With readfile() we can show 
                              //the file content on browser

          $handle = fopen($file, 'r');  // this function opens file or URL and put cursor on
          // THIS FUNCTION IS MORE LIKE A POINTER OF THE FILE, REMEMBER THAT!!!!!!!     
          $contents = fread($handle, filesize($file));     
          fclose($handle);
          echo $contents;   
    } else {
        $handle = fopen($file, 'w');
        $content = 'Wilson' . PHP_EOL . 'Sara' . PHP_EOL . 'Mike';

        fwrite($handle, $content);
        fclose($handle);

        echo readfile($handle);
    }




?>