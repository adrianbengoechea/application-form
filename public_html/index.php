<?php
    require('../config.php');

    $_db = new DB();
    $_url = new URL();

    if( !$_url->current_path() ){
        // echo 'home';
        include('views/home.php');
    }else{
        try{
            if(
                !@include("views/" . $_url->current_path_array()[0] . ".php")
            ){
                throw new Exception("Failed to include 'script.php'");
            }                    
            // include("views/" . $_url->current_path_array()[0] . ".php");
            // include("views/" . $_url->current_path_array()[0] . ".php");
        }catch(Exception $e){
            // print_r('error');
            include("views/404.php");

        }
    }
    // echo "response: ";


    // $create_table = $_db->query('CREATE TABLE `users` (`id` int NOT NULL AUTO_INCREMENT, `email` varchar(255), PRIMARY KEY (`id`))');
    // print_r($create_table);

    // $alter_table = $_db->query('ALTER TABLE `users` ADD `first_name` varchar(255)');
    // print_r($alter_table);

    // $insert_in_table = $_db->query('INSERT INTO `users` (`email`, `first_name`) VALUES (?, ?)', array('ebel.bengoechea@gmail.com', 'Ebel'));
    // print_r($insert_in_table);

    // $insert_in_table = $_db->query('INSERT INTO `users` (`id`, `email`, `first_name`) VALUES (?, ?, ?)', array('2', 'gabygamer@gmail.com', 'Gabriela'));
    // print_r($insert_in_table);
    

    // // print_r();
    // // print_r($_db->query('ALTER TABLE `users` ADD `first_name` varchar(255)', array()));
    // // print_r($_db->query('INSERT INTO `users` (`first_name`) VALUES (?)', array('Michael')));
    // // $_db->query();
    // print_r( $_db->query('SELECT * FROM `users`') );

?>


    