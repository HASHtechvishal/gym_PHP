<?php

if(isset($_SESSION['loggedId'])){

    $email = validate($_SESSION['loggedInUser']['email']);

    $query = "SELECT * FROM admins WHERE email='$email' LIMIT 1";
    $result = mysqli_query($conn, $query);

    if(musqli_num_rows($result) == 0){

        logoutSession();
        redirect('../login.php','access denied');
    }else{
        $row = mysqli_fetch_assoc($result);
        
    }
}else{
    redirect('../login.php','login to continue..'); 
}
?>