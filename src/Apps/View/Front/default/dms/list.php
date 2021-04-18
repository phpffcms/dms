<?php

/** @var Ffcms\Templex\Template\Template $this */

use Ffcms\Templex\Url\Url;

$this->layout('_layouts/default', [
    'title' => __('Список входящих')
]);
?>

<?php $this->start("body") ?>

<h1>Входящие запросы</h1>
<?= $this->bootstrap()->button('a', 'Создать запрос', ['href' => Url::to('dms/create'), 'class' => 'btn-primary']) ?>


<?php $this->stop("body") ?>

