<?php


/*
###         Subject: Personal function library for php projects
###         Developed by: Yousef Emadi
###         Date: july-2021
###			https://github.com/Yousef-Emadi
###         note: require "functions.php";
*/


$errors = [];

  //set session to remember user
  session_start();

function loader(){
    
    // composer auto loader
    require ("vendor/autoload.php");

    // MEEKRO vars
    DB::$user = 'newUser';
    DB::$password = '123456789';
    DB::$dbName = 'ipd25_class';
    DB::$port = '3307';

}


function validateData($data){

    //vlidate form data

    if (isset($data) && $data != "") {
        $result = trim(strtolower($data));
    }else {
        $result = null;
    }
    return $result;
}



// display array list of errors
function displayErrors($errors){

    if (count($errors) > 0) {
        echo "<div class='alert alert-danger'>";
        foreach ($errors as $err){
            echo $err."<br/>";
        }
        echo "</div>";
    }

/*
Stephanie version 4 dispay errors:
function displayErrors( $list ){ 
    if ( count( $list ) > 0 ){
    echo "<div class='alert alert-danger'>";
    foreach ($list as $err ){ echo $err ."<br />"; }
    echo "</div>";
    } // end of count error if
    }
*/


}
   
//display errors on the screen
function doWhenNoError($errors){

    if (count($errors) == 0) {
       echo ("<div class=\"alert alert-success\">Bingo</div>");
    //    header("Location: books.php");
    }
}


// to check if the user has been logged in 
function isLoggedIn(){
    $loggedIn = false;
    
    //deos cookie access code exist and has content as a sign of successful login
    if (
        !empty ($_COOKIE['cookie_accesscode'])
        && validateData($_COOKIE['cookie_accesscode']) 
        // && validateData( $_SESSION['cookie_accesscode'])
    ) {
        $loggedIn = true;
    } 
    
    return $loggedIn;
}
    
    
    


?>