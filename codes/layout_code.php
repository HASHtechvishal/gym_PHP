<?php

include('../config/function.php');

if(isset($_POST['body_des'])){
    
    $body_desc = validate($_POST['body_desc']);

    if($body_desc != ""){
        
        $data = [
            'Descriptions' => $body_desc,
            'status'=>1,
        ];

        $result = insert('body_buildings',$data);

        if($result){
            redirect('../admins/layouts.php','description added successfully');
        }else{
            redirect('../login.php','admin create successfully');
        }
    }else{
        redirect('../login.php','admin create successfully');
    }
}


if(isset($_POST['muscle_des_add'])){

    $muscle_group = validate($_POST['muscle_des']);

    if($muscle_group != ""){
        $data = [
            'Descriptions' => $muscle_group,
            'status'=>1
        ];
        $result = insert('muscle_buildings',$data);

        if($result){
            redirect('../admins/layouts.php','description added successfully');
        }else{
            redirect('../login.php','admin create successfully');
        }
    }else{
        redirect('../login.php','admin create successfully');
    }
}
?>