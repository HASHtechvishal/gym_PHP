<?php
require('admin_includes/header.php');
require('../config/function.php');

if($_GET['id'] != ""){
    $descID = $_GET['id'];
}else{
    echo '<h2>No Id found</h2>';
    return false;
}
$body_desc_ID = getById('body_buildings', $descID);

if($body_desc_ID){
    if($body_desc_ID['status'] == 200){
        ?>
        <?php
    }else{
        echo '<h5>'.$body_desc_ID['message'].'</h5>';
    }
   }else{
     
    echo'something went wrong';
    return false;
   }

?>
<div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                           Edit Body Descriptions
                        </div>
                        <div class="panel-body">
                            <form role="form" action="../codes/layout_code.php" method="post">
                                            <div class="form-group">
                                            <label>Description</label> (<?php echo $_GET['id']?>)
                                            <textarea class="form-control" rows="3" name="body_desc"><?= print_r($body_desc_ID['data']['Descriptions']); ?></textarea>
                                        </div>                                 
                                        <button type="submit" class="btn btn-info" name="body_des">Edit</button>

                                    </form>
                            </div>
                        </div>
                            </div>
                              
<?php
include('admin_includes/footer.php');
?>