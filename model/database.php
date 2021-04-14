<?php
    //local development server connection
    /*
    $dsn = 'mysql:host=localhost;dbname=zippyusedautos';
    $username = 'root';*/
    //$password = 'pa55word';

    // Heroku connection
    
    
    $dsn = 'mysql:host=j21q532mu148i8ms.cbetxkdyhwsb.us-east-1.rds.amazonaws.com; dbname=h2tgg8y02132yh4v';
    $username = 'jl1u2j2d4i5xckk5';
    $password = 'cfqbiovmzqc92pu7';
    
    try {
        //local development server connection
        //if using a $password, add it as 3rd parameter
        //$db = new PDO($dsn, $username);

        // Heroku connection
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error = "Database Error: ";
        $error .= $e->getMessage();
        //include('../view/error.php');
        include('C:\xampp\htdocs\justine_stroup_inf653vc_authentication\view\error.php');
        exit();
    }
?>