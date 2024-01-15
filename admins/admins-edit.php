<?php
include('admin_includes/header.php');
include('../config/function.php');
?>
<?php
                               if(isset($_GET['id'])){
                                 
                                if($_GET['id'] != ''){
                                    $adminId = $_GET['id'];
                                }else{
                                    echo '<h5>No Id Found</h5>';
                                    return false;
                                }
                               }else{
                                    echo '<h5>No Id Given In Params</h5>';
                                    return false;
                               }

                               $adminData = getById('admins', $adminId);

                               if($adminData){
                                if($adminData['status'] == 200){
                                    ?>
                                    <?php
                                }else{
                                    echo '<h5>'.$adminData['message'].'</h5>';
                                }
                               }else{
                                 
                                echo'something went wrong';
                                return false;
                               }
                            ?>
   
     <!-- MENU SECTION END-->
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">EDIT ADMIN - <?=$adminData['data']['fullname']?></h4>
                            </div>

        </div>
                       
<div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-danger">
                        <div class="panel-heading">
                           Update Your Detalis
                        </div>
                        <div class="panel-body">
                            <form action="../codes/login_form.php" method="post">    
                            <input class="form-control" type="hidden" required name="adminId" value="<?=$adminData['data']['id']?>"/>                                    
                                 <div class="form-group">
                                            <label>Fullname</label>
                                            <input class="form-control" name="fName" type="text" required value="<?=$adminData['data']['fullname']?>"/>
                                     <p class="help-block">Help text here.</p>
                                        </div>
                                            <div class="form-group">
                                            <label>Username</label>
                                            <input class="form-control" type="text" readonly value="<?=$adminData['data']['username']?>"/>
                                     <p class="help-block">Help text here.</p>
                                        </div>
                                <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" name="email" type="text" value="<?=$adminData['data']['email']?>"/>
                                     <p class="help-block">Help text here.</p>
                                </div>

                                <div class="form-group">
                                            <label>Phone NO.</label>
                                            <input class="form-control" name="number" type="number" value="<?=$adminData['data']['phone']?>"/>
                                     <p class="help-block">Help text here.</p>
                                </div>

                                <div class="form-group">
                                            <label>UPDATE ROLE</label>
                                            <div class="radio">
                                                <label>
                                                <?php if($adminData['data']['role']=='admin'):?>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" checked>Admin
                                                <?php endif;?>                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                <?php if($adminData['data']['role']=='user'):?>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" checked>User
                                                <?php endif;?>
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                <?php if($adminData['data']['role']=='guest'):?>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" checked>Guest
                                                <?php endif;?>                                                </label>
                                            </div>
                                        </div>
                            </div>
                                 
                                        <button type="submit" name="update" class="btn btn-danger">UPDATE </button>

                                    </form>
                            </div>
                        </div>
                            </div>
        </div>
             <!--/.ROW-->
           
    
                                         </form>
 
                            </div>
                        </div>
                            </div>

        </div>
    </div>
    </div>
    <?php
include('admin_includes/footer.php');
?>
