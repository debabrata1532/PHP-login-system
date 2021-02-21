<?php

session_start();

if($_SESSION['login']){
session_unset();
session_destroy();
}
else{

    echo "You're not loggedin to logout";
}

?>