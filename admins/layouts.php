<?php
require('admin_includes/header.php');
require('../config/function.php');

?>
  <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="panel panel-success">
                        <div class="panel-heading">
                        Body Building <a href="body_description.php" class="btn btn-success pull-right">Add Descriptions</a>
                           <?php //alertMessage(); ?>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Descriptions</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $layouts = getAll('body_buildings'); 
                                        $num = mysqli_num_rows($layouts);
                                        if(!$layouts){
                                            echo '<h4>Something Went</h4>';
                                        }
                                        if($num > 0){
                                            $Random_layouts = getDataRandom('body_buildings',$num);
                                        ?>    
                                        <?php 
                                        foreach($Random_layouts as $layout){ 
                                        ?>

                                            <tr>
                                            <td><?= $layout['id']?></td>
                                            <td><?= $layout['Descriptions']?></td>
                                            <td><?= $layout['status']?></td>
                                            <td> 
                                                <a href="body-description-edit.php?id=<?= $layout['id']?>">Edit</a>||
                                                <a href="body-description-delete.php?id=<?= $layout['id']?>">Delete</a>
                                            </td>
                                            </tr>
                                        <?php }?>
                                        <?php    
                                        }else{
                                        ?>    
                                            <tr>
                                            <td>No Record Found</td>
                                            </tr>

                                        <?php    
                                        }
                                        ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
             </div>




             <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="panel panel-success">
                        <div class="panel-heading">
                        Muscle Building <a href="muscl_description.php" class="btn btn-success pull-right">Add Descriptions</a>
                           <?php //alertMessage(); ?>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Descriptions</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $layouts = getAll('muscle_buildings');
                                        $num = mysqli_num_rows($layouts);
                                        if(!$layouts){
                                            echo '<h4>Something Went</h4>';
                                        }
                                        if($num > 0){
                                            $Random_layouts = getDataRandom('muscle_buildings',$num);
                                        ?>    
                                        <?php foreach($Random_layouts as $layout){ ?>

                                            <tr>
                                            <td><?= $layout['id']?></td>
                                            <td><?= $layout['Descriptions']?></td>

                                            <td><?= $layout['status']?></td>
                                            <td> 
                                                <a href="admins-edit.php?id=<?= $layout['id']?>">Edit</a>||
                                                <a href="admins-delete.php?id=<?= $layout['id']?>">Delete</a>
                                            </td>
                                            </tr>
                                        <?php }?>
                                        <?php    
                                        }else{
                                        ?>    
                                            <tr>
                                            <td>No Record Found</td>
                                            </tr>

                                        <?php    
                                        }
                                        ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
             </div>