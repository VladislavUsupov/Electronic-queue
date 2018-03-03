<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Operator */
/* @var $form ActiveForm */
$this->title = 'Окно оператора';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="operator-controlWindow">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Свободно', [' '], ['class' => 'btn btn-success']) ?>
    </p>
    <p>
        <?= Html::a('Занято', ['вставить страницу с отображением состояния'], ['class' => 'btn btn-success']) ?>
    </p>

</div><!-- operator-contr
