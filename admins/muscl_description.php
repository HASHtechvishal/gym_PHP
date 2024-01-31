<?php
require('admin_includes/header.php');
require('../config/function.php');

?>
<div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                           Add Muscle Descriptions
                        </div>
                        <div class="panel-body">
                            <form role="form" action="../codes/layout_code.php" method="post">
                                            <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" rows="3" name="muscle_des"></textarea>
                                        </div>                                 
                                        <button type="submit" class="btn btn-info" name="muscle_des_add">Add</button>

                                    </form>
                            </div>
                        </div>
                            </div>
                              
<?php
include('admin_includes/footer.php');
?>