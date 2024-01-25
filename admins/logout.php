<?php

require('../config/function.php');

if(isset($_SESSION['loggedId'])){

    logoutSession();

    redirect('../index.php','logged out successfully.');
}else{
    redirect('../index.php','logged out successfully.');

}

?>