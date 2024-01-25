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
                redirect('../admin_user.php','Email already used by another user');
            }
        }

        if($password == $ConfirmPassword){
            $bcrypt_password = password_hash($password, PASSWORD_BCRYPT);
        }else{
            redirect('../admin_user.php','Password and Confirm password are not same');
        }
        
        //$bcrypt_password = password_hash($password, PASSWORD_BCRYPT);

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
            redirect('../admin_user.php','please fill required fields');
        }

    }else{
        redirect('../admin_user.php','Please fill required fields');
    }

}

//edit 
if (isset($_POST['update'])) {

    $adminId = validate($_POST['adminId']);

    $adminData = getById('admins', $adminId);
    if($adminData['status'] != 200){
        redirect('admins-edit.php?id='.$adminId,'Please fill required fields');
    }
    $fullname = validate($_POST['fName']);
    $email = validate($_POST['email']);
    $phoneNumber = validate($_POST['number']);

   /* if($password != ''){
        $hashPass = password_hash($password,PASSWORD_BCRYPT);
    }else{
        $hashPass = $adminData['data']['password'];
    }*/

    //upload image code
    if($_FILES['img'] > 0){
        $path = "assets/uploade/admin_img";
        $image_ext = pathinfo($_FILES['img']['name'], PATHINFO_EXTENSION);

        $filename = time().'.'.$image_ext;
        move_uploaded_file($_FILES['img']['tmp_name'], $path."/".$filename);

        $finalImage = $filename;
    }else{
        $finalImage = '';
    }

    if($fullname != '' && $email != '' && $phoneNumber != ''){
        $data = [
            'fullname'=>$fullname,
            'email'=>$email,
            'phone'=>$phoneNumber,
            'image'=>$finalImage
        ];
        $result = update('admins', $adminId, $data);

        if($result){
            redirect('../admins/dashboard.php','admin Update successfully');
        }else{
            redirect('admins-edit.php?id='.$adminId,'please fill required fields');
        }
    }else{
        redirect('../admin_user.php','please fill required fields.');
    }
}

//login function

if(isset($_POST['login'])){
    $username = validate($_POST['username']);
    $password = validate($_POST['password']);

    if($username != '' && $password != ''){

        $query = "SELECT * FROM admins WHERE username = '$username' LIMIT 1"; 
        $result = mysqli_query($conn, $query);

        if($result){
            if(mysqli_num_rows($result) == 1){
                $row = mysqli_fetch_assoc($result);
                $hashPass = $row['password'];

                if(!password_verify($password,$hashPass)){
                    redirect('login.php','invalid password');
                }

                //if(code for role){}

                $_SESSION['loggedId'] = true;
                $_SESSION['loggedInUser'] = [
                    'user_id' => $row['id'],
                    'name' => $row['username'],
                    'email' => $row['email'],
                    'phone' => $row['phone'],
                ];
        //code for different roles
        //if(isset($_SESSION['loggedIn']))  
        //$_SESSION['loggedInUser']['username]      

                redirect('../admins/dashboard.php','logged in successfully');

            }else{
                redirect('../login.php','invalid email address');
            }
        }else{
            redirect('../login.php','something went wrong');
        }
    }else{
        redirect('../login.php','all fields are imp');
    }
}
?>