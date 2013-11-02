<?php
include_once ("./messages.php");
require_once('connectvars.php');

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('Error connecting to MySQL server.');

session_name('tzLogin');
// Starting the session
session_start();

if (isset($_GET['logoff'])) {
    $_SESSION = array();
    session_destroy();

    header("Location: demo.php");
    exit;
}


if (!isset($_SESSION['real_name']) || !isset($_SESSION['usr']) || !isset($_SESSION['id'])) {
    header("Location: demo.php");
    exit;
}
?>
<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>您好， <?php echo $_SESSION['real_name'] ? $_SESSION['real_name'] : '访客'; ?>!</title> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="ico/favicon.png">

        <link href="css/docs.css" rel="stylesheet">

        <link href="css/pygments-manni.css" rel="stylesheet">


        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="jumbotron.css" rel="stylesheet">

        <style type="text/css">


            body {
                padding-top: 60px;
                padding-bottom: 40px;
            }
            .sidebar-nav {
                padding: 9px 0;
            }

            @media (max-width: 980px) {
                /* Enable use of floated navbar text */
                .navbar-text.pull-right {
                    float: none;
                    padding-left: 5px;
                    padding-right: 5px;
                }
            }

        </style>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="../../assets/js/html5shiv.js"></script>
          <script src="../../assets/js/respond.min.js"></script>
        <![endif]-->
    </head>

    <body style="font-family:微软雅黑">

        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Herbnet</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">首页</a></li>
                        <li><a href="qa_main.php">知识问答</a></li>
                        <li><a href="db_list.php">知识资源</a></li>
                        <li><a href="ontology.php">顶层本体</a></li>
                        <li><a href="#contact">联系我们</a></li>
                    </ul>

                    <?php
                    if ($_SESSION['real_name']) {
                        echo "<p class=\"navbar-text pull-right\">您好," . $_SESSION['real_name'] . "&nbsp;|&nbsp;" . "<a href=\"?logoff\" class=\"navbar-link\">退出</a></p>";
                    } else {
                        ?>

                        <form class="navbar-form navbar-right">
                            <div class="form-group">
                                <input type="text" placeholder="用户名" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="password" placeholder="密码" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-success">登录</button>
                        </form>
                        <?php
                    }
                    ?>
                </div><!--/.navbar-collapse -->
            </div>
        </div>


