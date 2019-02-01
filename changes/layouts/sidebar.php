<?php 
use yii\helpers\Url;
?>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <link href='http://fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="js/skel.min.js"></script>
        <?php 
        //$this->registerJsFile(Yii::getAlias('@web').'/js/fullcalendar/skel.min.js',['depends' => [yii\web\JqueryAsset::className()]]); ?>
        <script src="js/skel.min.js"></script>
        <script src="js/skel-panels.min.js"></script>
        <script src="js/init.js"></script>
        <noscript>
            <link rel="stylesheet" href="css/skel-noscript.css" />
            <link rel="stylesheet" href="css/style.css" />
            <link rel="stylesheet" href="css/style-desktop.css" />
        </noscript> 
<!-- Header -->
        <div id="header" style="    display: block;">
            <div id="logo-wrapper">
                <div class="container">
                        
                    <!-- Logo -->
                        <div id="logo" style="display: block;">
                            <h1><a href="#">Logo here</a></h1>
                            <span>Design by Salman</span>
                        </div>
                    
                </div>
            </div>          
            <div class="container">
                <!-- Nav -->
                    <nav id="nav" style="display: block;">
                        <ul>
                            <li class="active"><a href="<?php echo Url::to(['/'])?>">Homepage</a></li>
                            <li><a href="<?php echo Url::to(['site/about'])?>">About</a></li>
                            <li><a href="<?php echo Url::to(['site/contact'])?>">Contact</a></li>
                            <li><a href="<?php echo Url::to(['/user'])?>">Add User</a></li>
                            <li>
                            <?php if(Yii::$app->user->isGuest){ ?>
                                <a href="<?php echo Url::to(['site/login'])?>">Login</a>
                            <?php }else{ ?>
                                 <a href="<?php echo Url::to(['site/logout'])?>">Logout</a>
                             <?php } ?>
                            </li>
                        </ul>
                    </nav>
            </div>
        </div>
    <!-- Header -->
        
    <!-- Banner -->
        <div id="banner">
            <div class="container">
            </div>
        </div>
    <!-- /Banner -->