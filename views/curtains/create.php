<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Curtains */

$this->title = 'Create Curtains';
$this->params['breadcrumbs'][] = ['label' => 'Curtains', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="curtains-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
