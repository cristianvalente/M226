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
                            <h1><a href="#"></a></h1>
                            <span>Design by Cristian Valente</span>
                        </div>
                    
                </div>
            </div>          
            <div class="container">
                <!-- Nav -->

                <?php 
                  $controller =  Yii::$app->controller->id;
                  $action     = Yii::$app->controller->action->id;  ?>
                    <nav id="nav" style="display: block;">
                        <ul>
                            <li <?php if($controller == 'site' && $action =='index'){echo 'class=active';} ?>><a href="<?php echo Url::to(['/'])?>">Home</a></li>
                            <li <?php if($action =='about'){echo 'class=active';} ?>><a href="<?php echo Url::to(['site/about'])?>">Über uns</a></li>
                            <li <?php if($action =='contact'){echo 'class=active';} ?>><a href="<?php echo Url::to(['site/contact'])?>">Kontakt</a></li>
                            <li <?php if($controller == 'user' && $action =='index'){echo 'class=active';} ?>><a href="<?php echo Url::to(['/user'])?>">Registrieren</a></li>
                             <li <?php if($action =='profile'){echo 'class=active';} ?>><a href="<?php echo Url::to(['user/profile'])?>">Arbeitsuchende</a></li>
                            <li <?php if($action =='login'){echo 'class=active';} ?>>

                                
                            <?php if(Yii::$app->user->isGuest){ ?>
                                <a  href="<?php echo Url::to(['site/login'])?>">Login</a>
                            <?php }else{ ?>
                                 <a href="<?php echo Url::to(['site/logout'])?>">Abmelden</a>
                             <?php } ?>
                            </li>
                        </ul>
                    </nav>
            </div>
        </div>
    <!-- Header -->
        
    <!-- Banner -->
        <div id="banners">
		<?php 
		if($action == 'about'){?>
			<img src="<?= Yii::$app->request->baseUrl?>/images/about_us.jpg" style="width:100%" />
		<?php }else if($controller == 'site' && $action == 'index'){?>
		<img src="<?= Yii::$app->request->baseUrl?>/images/banner.jpg" style="width:100%" />
		<?php } else if($action == 'contact'){?>
		<img src="<?= Yii::$app->request->baseUrl?>/images/contact.jpg" style="width:100%" />
		<?php }else{?>
		this
		<img src="<?= Yii::$app->request->baseUrl?>/images/register.png" style="width:100%" />
		<?php }?>
            <div class="container">
            </div>
        </div>
    <!-- /Banner -->