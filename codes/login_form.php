<?php
include('../config/function.php');

if(isset($_POST['save'])){
    $fullname = validate($_POST['fName']);
    $username = validate($_POST['uName']);
    $email = validate($_POST['email']);
    $phoneNumber = validate($_POST['number']);
    $password = validate($_POST['password']);
    $ConfirmPassword = validate($_POST['cPass']);
    $Role = validate($_POST['role']);

    if($username != '' && $email != '' && $password != ''){

        $emailCheck = mysqli_query($conn,"SELECT * From admins WHERE email = '$email'");

        if($emailCheck){ 
            if(mysqli_num_rows($emailCheck) >0){
                redirect('admins-create.php','Email already used by another user');
            }
        }
        
        $bcrypt_password = password_hash($password, PASSWORD_BCRYPT);

        $data = [
            'fullname'=>$fullname,
            'username'=>$username,
            'email'=>$email,
            'phone'=>$phoneNumber,
            'password'=>$bcrypt_password,
            'role'=>$Role,
            'status'=>1,
            'created_at'=>date('d-m-Y H:i')
        ];
        $result = insert('admins',$data);

        if($result){
            redirect('../login.php','admin create successfully');
        }else{
            redirect('admins-create.php','please fill required fields');
        }

    }else{
        redirect('admins-create.php','Please fill required fields');
    }

}
?>