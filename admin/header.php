<?php
include "config.php";
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: {$hostname}/admin/");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>ADMIN Panel</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="../css/font-awesome.css">
    <!-- Custom stlylesheet -->
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <!-- HEADER -->
    <div id="header-admin">
        <!-- container -->
        <div class="container-fluid">
            <!-- row -->
            <div class="row">
                <!-- LOGO -->
                <div class="col-md-12">
                    <a href="post.php"><img class="logo" src="images/sgptagroup.png"></a>
                </div>
                <!-- /LOGO -->
                <!-- LOGO-Out -->
        
                <!-- /LOGO-Out -->
            </div>
        </div>
    </div>
    <!-- /HEADER -->
    <!-- Menu Bar -->
    <div class="sidebar">
    <a href="logout.php" class="admin-logout">Hello <?php echo $_SESSION["username"]; ?>, logout</a>

    <a href="post.php">Post</a>
    <?php
                    if ($_SESSION["user_role"] == '1') {
                    ?>
 <a href="category.php">Category</a>
 <a href="users.php">Users</a>
 <a href="settings.php">Settings</a>

 <?php
                    }
                    ?>
</div>
    <!-- <div class="navbar navbar-inverse navbar-fixed-left">
        <ul class="nav navbar-nav">
                    <li>
                        <a href="post.php">Post</a>
                    </li>
                    <?php
                    if ($_SESSION["user_role"] == '1') {
                    ?>
                        <li>
                            <a href="category.php">Category</a>
                        </li>
                        <li>
                            <a href="users.php">Users</a>
                        </li>
                        <li>
                            <a href="settings.php">Settings</a>
                        </li>
                    <?php
                    }
                    ?>
        </ul>
    </div> -->
    <!-- <div class="container">
 <div class="row">
   <h2>Left side Navigation bar (Fixed)</h2>
   
   <p>Left side Navigation</p>
 </div>
</div>

        <div id="admin-menubar" class="fixed-left">
            <div class="container fixed-left">
                <div class="row">
                    <div class="col-md-12">
                       <ul class="admin-menu fixed-left">
                            <li >
                                <a href="post.php">Post</a>
                            </li>
                            <?php
                            if ($_SESSION["user_role"] == '1') {
                            ?>
                            <li>
                                <a href="category.php">Category</a>
                            </li>
                            <li>
                                <a href="users.php">Users</a>
                            </li>
                            <li>
                                <a href="settings.php">Settings</a>
                            </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div> -->
    <!-- /Menu Bar -->