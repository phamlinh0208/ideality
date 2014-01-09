<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="language" content="en"/>

    <!-- blueprint CSS framework -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css"
          media="screen, projection"/>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css"
          media="print"/>
    <!--[if lt IE 8]>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css"
          media="screen, projection"/>
    <![endif]-->

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css"/>
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet"/>
    <style>
        .span12 h1 {
            color: #FE6E4C;
            font-weight: bold;
            padding: 5px;
        }

        h3 {
            margin: 10px 0 10px 0;
        }

        .login_bar {
            height: 40px;
            padding-top: 20px;
            margin-right: 30px;
        }

        .search_bar {
            height: 40px;
            padding-top: 10px;
            margin-left: 20px;
        }

        .main-content {
            margin-top: 10px;

        }

        .line {
            border-bottom: 1px solid #000;
            margin-top: 10px;
            margin-bottom: 10px;
        }

        body {
            background-color: #243f4e;
        }

        .nav-header {
            background-color: #3498db;
            padding: 0px;
            line-height: 30px;
            color: #FFFFFF;
        }

        .well {
            padding: 0px;
        }

        .container {
            background-color: #f3f3f3;
        }

    </style>

    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.js"></script>
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
<div class="container">
    <div class="row">
        <div class="span2">
            <a href="#">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.png" alt="..." width="140px"
                     height="140px"/>
            </a>
        </div>
        <div class="span10">
            <div class="row">

                <div class="search_bar pull-right">
                    <form class="navbar-search">
                        <input type="text" class="search-query" placeholder="Search">
                    </form>
                </div>
                <div class="login_bar pull-right">
                    <a href="#"> Register</a>
                    <a href="#"> Login</a>

                </div>
            </div>
            <div class="row">
                <div class="navbar  pull-right">
                    <div class="navbar-inner">
                        <ul class="nav">
                            <li class="active"><a href="#">Discover great projects</a></li>
                            <li><a href="#">Advertise your project</a></li>
                            <li><a href="#">Transaction</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    $category = Category::model()->findAll();
    ?>
    <div class="row main-content">
        <div class="span2 ">
            <div class="well slidebar-nav">
                <ul class="nav nav-list">
                    <li class="nav-header">OTC Ideality</li>
                    <?php
                    foreach ($category as $row) {
                        echo '<li>' . CHtml::link($row["title"], array("/site/listideality", "cate_id" => $row["id"])) . '</li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
        <div class="span8">
            <div id="content">
                <?php echo $content; ?>
            </div>
        </div>
        <?php if (!Yii::app()->user->isGuest) { ?>
            <div class="span2">
                <div class="well slidebar-nav">
                    <ul class="nav nav-list">
                        <li class="nav-header">MEMBER: <?php echo Yii::app()->user->name; ?></li>
                        <li><?php echo CHtml::link('My Profile', array('/user/profile', 'id' => Yii::app()->user->getId())); ?></li>
                        <li><?php echo CHtml::link('Post Project', array('/ideality/create')); ?></li>
                        <li><?php echo CHtml::link('Past Projects', array('/site/pastideality')); ?></li>
                        <li><?php echo CHtml::link('logout', array('/user/logout')); ?></li>

                    </ul>
                </div>
            </div>
        <?php } ?>
    </div>
    <div class="line"></div>
    <div class="row">
        <div class="span3">
            <a href="#">Home</a> <br/>
            <a href="#">About Us</a>
        </div>
        <div class="span3">
            <a href="#">FAQ</a><br/>
            <a href="#">Sitemap</a>
        </div>
        <div class="span3">
            <a href="#">Contact us</a>
        </div>
    </div>
</div>

</body>
</html>
