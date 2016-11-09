<?php
require_once 'DB.php';
$db = new DB('localhost', 'blog_website', 'root', '');
$coneection = $db->getConnection();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="News 24">
    <meta name="author" content="Kh Akash">

    <title>Newedge</title>

    <!-- CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/cs-select.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Start Header Section -->
<header>
    <!-- top-bar -->
    <div id="newedge-top-bar">
        <div class="container">
            <div class="row">
                <div id="logo" class="col-xs-4 col-sm-3 col-md-3 hidden-sm hidden-xs">
                    <a href="index.php">
                        <img class="img-responsive" src="images/logo.png" alt="Newedge">
                    </a>
                </div><!--/ #logo -->
                <div class="col-sm-12 col-md-9">
                    <div class="top-right">
                        <div class="newedge-date">
                                    <span>
                                        <?php echo date('l, d F Y') ?>
                                    </span>
                        </div><!--/ .newedge-date -->
                        <div class="newedge-language">

                            <div class="cs-select cs-skin-border" tabindex="0"><span class="cs-placeholder">en</span>
                                <div class="cs-options">
                                    <ul>
                                        <li data-option="" data-value="English"><span>en</span></li>
                                        <li data-option="" data-value="German"><span>de</span></li>
                                        <li data-option="" data-value="Arabic"><span>ar</span></li>
                                    </ul>
                                </div>
                                <select class="cs-select cs-skin-border">
                                    <!-- <option value="" disabled selected>Language</option> -->
                                    <option value="English" selected="">en</option>
                                    <option value="German">de</option>
                                    <option value="Arabic">ar</option>
                                </select>
                            </div>
                        </div> <!-- //language -->
                        <div class="newedge-login">
                            <a href="#" role="button" data-toggle="modal" data-target="#login">
                                <i class="fa fa-user"></i>
                            </a>
                            <!-- Login modal -->
                            <div id="login" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true"
                                 style="display: none;">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                <i class="fa fa-close"></i></button>
                                            <h1 class="text-left">Log in</h1>
                                        </div>
                                        <div class="modal-body">
                                            <form action="#" method="post" id="login-form">
                                                <fieldset class="userdata">
                                                    <input id="username" placeholder="email" type="text" name="email"
                                                           class="form-control" required="required">
                                                    <input id="password" type="password" placeholder="Password"
                                                           name="password" class="form-control" required="required">
                                                    <div class="remember-wrap">
                                                        <input id="remember" type="checkbox" name="remember"
                                                               class="inputbox" value="yes">
                                                        <label for="remember">Remember Me</label>
                                                    </div>
                                                    <div class="button-wrap pull-left">
                                                        <input type="submit" name="Submit"
                                                               class="btn btn-block btn-success" value="Log in">
                                                    </div>
                                                    <p class="forget-name-link pull-left">
                                                        Forgot <a href="#">
                                                            Username</a> or <a href="#">
                                                            Password</a>
                                                    </p>
                                                </fieldset>
                                            </form>
                                        </div> <!--/Modal body-->
                                        <div class="modal-footer">
                                            New Here? <a href="createAccount.php" target="_blank">
                                                Create an account</a>
                                        </div> <!--/Modal footer-->
                                    </div> <!-- Modal content-->
                                </div> <!-- /.modal-dialog -->
                            </div> <!-- //Login modal -->
                        </div> <!-- //login -->
                        <div class="newedge-search">
                            <div class="search-icon-wrapper">
                                <i class="fa fa-search"></i>
                            </div>
                            <div class="search-wrapper" style="display: none;">
                                <form action="#" method="post">
                                    <input name="searchword" maxlength="200" class="inputboxnewedge-top-search"
                                           type="text" size="20" placeholder="Search ...">
                                    <i id="search-close" class="fa fa-close"></i>
                                </form>
                            </div> <!-- //search-wrapper -->
                        </div> <!-- //search -->
                    </div><!--/ .top-right -->
                </div><!--/ .col-md-9 -->
            </div>
        </div>
    </div><!--/ #newedge-top-bar -->
    <!-- Fixed navbar -->
    <nav id="newedge-navigation" class="navbar navbar-default navbar-fixed">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="visible-sm visible-xs col-sm-12">
                    <a class="mobile-logo navbar-brand" href="#">
                        <img class="img-responsive" src="images/logo.png" alt="logo">
                    </a>
                </div>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="<?php echo  isset($_GET['cat_id'])?"":"active" ?>"><a href="index.php">Home</a></li>
                    <?php
                    $results = $coneection->query("SELECT * FROM category");
                    if($results->num_rows>0){
                        while($row = $results->fetch_object()) {
                            $active = (isset($_GET['cat_id']) && $_GET['cat_id']==$row->name)?"active":"";
                            echo "<li class=$active><a href='category_page.php?cat_id={$row->name}'>{$row->name}</a></li>";
                        }
                    }

                    ?>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
</header>
<!-- End Header Section -->