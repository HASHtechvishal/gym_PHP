﻿<?php
include('admin_includes/header.php');
?>
    <div class="navbar navbar-inverse set-radius-zero" >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="dashboard.php">

                    <img src="assets/img/logo.png" />
                </a>

            </div>

            <div class="right-div">
                <a href="#" class="btn btn-info pull-right">LOG ME OUT</a>
            </div>
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="dashboard.php" >DASHBOARD</a></li>
                             
                            <li><a href="form.php">FORMS</a></li>
                            <li>
                                <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown">UI ELEMENTS <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="ui.php">UI ELEMENTS</a></li>
                                     <li role="presentation"><a role="menuitem" tabindex="-1" href="#">EXAMPLE LINK</a></li>
                                </ul>
                            </li>
                            <li><a href="tab.php">TABS & PANELS</a></li>
                            <li><a href="table.php">TABLES</a></li>
                            <li><a href="blank.php" class="menu-top-active">BLANK PAGE</a></li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
     <!-- MENU SECTION END-->
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Blank Page</h4>
                
                            </div>

        </div>
             <div class="row">
            <div class="col-md-12">
               <div class="alert alert-info">
This is blank page for your customization. So use this page and start your project now.
                   <br />
                   Happy downloading 
                   <br />
                  Keep Looking <a target="_blank" href="http://www.binarytheme.com/" >binarytheme.com</a> for cool stuff.
               </div>
                            </div>

        </div>
    </div>
    </div>
    <?php
include('admin_includes/footer.php');
?>
