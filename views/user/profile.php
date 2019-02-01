<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Benutzer erstellen';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">


  
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'label'=>'Profile Picture',
                'format' => 'raw',
                'value'=>function($data){
                    return Html::img(Yii::getAlias('@web').'/uploads/'. $data->profile,
                ['width' => '108px']);
                }
            ],
            'first_name',
            //'middle_name',
            'last_name',
            [
                'label'=>'Document',
                'format' => 'raw',
                'value'=>function($data){
return '<a href="'.Yii::getAlias('web').'/uploads/'.$data->file.'">Download image</a>';
                }
            ],
            // 'email:email',
            // 'auth_key',
            // 'password_hash',
            // 'password_reset_token',
            // 'status',
            // 'fk_role_id',
            // 'created_at',
            // 'updated_at',

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
