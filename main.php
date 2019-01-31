<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>

    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    
</head>
<body class="homepage">
<?php $this->beginBody() ?>

    
<?php echo $this->render('/layouts/sidebar.php')?>
       <div id="main">
            <?= $content;?>
        </div>
<!-- Footer -->
        <div id="footer">
            <div class="container">
                <div class="row">
                    <div class="6u">
                        <section>
                            <header>
                                <h2>Unsere Vision</h2>
                            </header>
                            <a href="#" class="image full"><img src="images/pics05.jpg" alt=""></a>
                            <p>Jeder Soll die Möglichkeit haben, eine Angemessene Arbeit zu erhalten. Wir sind da um Sie und einen Unternehmer zusammen zu führen</p>
                        </section>
                    </div>
                    <div id="fbox1" class="3u">
                        <section>
                            <header>
                                <h2>Praesent mattis</h2>
                            </header>
                            <ul class="default">
                                <li class="fa fa-angle-right"><a href="#">Vestibulum luctus venenatis dui</a></li>
                                <li class="fa fa-angle-right"><a href="#">Integer rutrum nisl in mi</a></li>
                                <li class="fa fa-angle-right"><a href="#">Etiam malesuada rutrum enim</a></li>
                                <li class="fa fa-angle-right"><a href="#">Aenean elementum facilisis ligula</a></li>
                                <li class="fa fa-angle-right"><a href="#">Ut tincidunt elit vitae augue</a></li>
                                <li class="fa fa-angle-right"><a href="#">Sed quis odio sagittis leo vehicula</a></li>
                            </ul>
                        </section>
                    </div>
                    <div id="fbox2" class="3u">
                        <section>
                            <header>
                                <h2>Maecenas luctus</h2>
                            </header>
                            <ul class="default">
                                <li class="fa fa-angle-right"><a href="#">Vestibulum luctus venenatis dui</a></li>
                                <li class="fa fa-angle-right"><a href="#">Integer rutrum nisl in mi</a></li>
                                <li class="fa fa-angle-right"><a href="#">Etiam malesuada rutrum enim</a></li>
                                <li class="fa fa-angle-right"><a href="#">Aenean elementum facilisis ligula</a></li>
                                <li class="fa fa-angle-right"><a href="#">Ut tincidunt elit vitae augue</a></li>
                                <li class="fa fa-angle-right"><a href="#">Sed quis odio sagittis leo vehicula</a></li>
                            </ul>
                        </section>
                    </div>
                </div>
                
                
            </div>
        </div>
    <!-- /Footer -->
<!-- Copyright -->
        <div id="copyright">
            <div class="container">
                <section>
                    Design: <a href="http://templated.co">TEMPLATED</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)
                </section>
            </div>
        </div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
