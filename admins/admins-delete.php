<?php
//include('admin_includes/header.php');
require('../config/function.php');

$paraResult = checkParamId('id');

if(is_numeric($paraResult)){

    $adminId = validate($paraResult);
    $admin = getById('admins',$adminId);
    if($admin['status'] == 200){
        $adminDelete = delete('admins', $adminId);
        if ($adminDelete) {
            redirect('../admins/dashboard.php','admin deleted successfuly');
        }else{
            redirect('../admins/dashboard.php','something went wrong');
        }
    }else{
        redirect('../admins/dashboard.php',$admin['message']);
    }
    //echo $adminId;
}else{
    redirect('../admins/dashboard.php','something went wrong');
}


?>