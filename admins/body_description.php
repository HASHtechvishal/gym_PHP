<?php
require('admin_includes/header.php');
require('../config/function.php');

?>
<div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                           Add Body Descriptions
                        </div>
                        <div class="panel-body">
                            <form role="form" action="../codes/layout_code.php" method="post">
                                            <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" rows="3" name="body_desc"></textarea>
                                        </div>                                 
                                        <button type="submit" class="btn btn-info" name="body_des">Add</button>

                                    </form>
                            </div>
                        </div>
                            </div>
                              
<?php
include('admin_includes/footer.php');
?>