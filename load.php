<?php 

// include_once 'includes/Database.class.php';
// include_once 'includes/Session.class.php';
// include_once 'includes/Post.class.php';
// include_once 'includes/User.class.php';
// include_once 'includes/UserSession.class.php';


// This is a functio that loads all the components( templates ) in needer place
function load($name){
    // print("load head");
    
    include "Components/$name.php";

}
