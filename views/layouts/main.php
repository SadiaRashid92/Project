<?php

/* @var $this \yii\web\View */
/* @var $content string */

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
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'Soaren LMS',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
   
   $navItems=[
    ['label' => 'Dashboard', 'url' => ['/site/contact']],  
    [
            'label' => 'Customers',
            'items' => [
                 ['label' => 'Complaints', 'url' => '#'],
                 '<li class="divider"></li>',
                
                 ['label' => 'Complaints Category', 'url' => '#'],
            ],
        ],
       [
            'label' => 'Reports',
            'items' => [
                 ['label' => 'Funded Loans', 'url' => '#'],
                 '<li class="divider"></li>',
                 
                 ['label' => 'Installment Project & Collection', 'url' => '#'],
                 '<li class="divider"></li>',
                 ['label' => 'Loan Transfers', 'url' => '#'],
            ],
        ],
       
    ['label' => 'Loans', 'url' => ['/site/contact']], 
    ['label' => 'Leads', 'url' => ['/site/contact']],   
    ['label' => 'Collections', 'url' => ['/site/contact']], 
    ['label' => 'Contact', 'url' => ['/site/contact']],
         [
            'label' => 'System Settings',
            'items' => [
                 ['label' => 'Profile', 'url' => '#'],
                 '<li class="divider"></li>',
                 
                 ['label' => 'Users & Roles', 'url' => '#'],
                '<li class="divider"></li>',
                ['label' => 'Portfolios', 'url' => '#'],
                 '<li class="divider"></li>',
                ['label' => 'Stores', 'url' => '#'],
                 '<li class="divider"></li>',
                ['label' => 'ACH Settings', 'url' => '#'],
                   '<li class="divider"></li>',
                ['label' => 'Lead Providers', 'url' => '#'],
                   '<li class="divider"></li>',
                ['label' => 'Corporations', 'url' => '#'],
                   '<li class="divider"></li>',
                ['label' => 'Companies', 'url' => '#'],
                
            ],
        ],
  
//  ['label' => 'Home', 'url' => ['/site/index']],
//    ['label' => 'Status', 'url' => ['/status/index']],
//    ['label' => 'About', 'url' => ['/site/about']],
       ];
   
    

 
  if (Yii::$app->user->isGuest) {
    array_push($navItems,['label' => 'Sign In', 'url' => ['/user/login']],['label' => 'Sign Up', 'url' => ['/user/register']]);
 } else {
    array_push($navItems,['label' => 'Logout (' . Yii::$app->user->identity->username . ')',
       'url' => ['/site/logout'],
        'linkOptions' => ['data-method' => 'post']]
    );
  }
  
echo Nav::widget([
    'options' => ['class' => 'navbar-nav navbar-right'],
    'items' => $navItems,
]);


   
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
