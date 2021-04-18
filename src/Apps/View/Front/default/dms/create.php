<?php

/** @var Ffcms\Templex\Template\Template $this */

use Ffcms\Templex\Url\Url;

$this->layout('_layouts/default', [
    'title' => __('Редактирование входящего запроса'),
    'breadcrumbs' => [
        Url::to('/') => __('Главная'),
        Url::to('dms/index') => __('Все запросы'),
        __('Создание (редактирование) входящего запроса')
    ]
]);
?>

<?php $this->start("body") ?>

<h1>Редактирование запроса</h1>


<?php $this->stop("body") ?>
