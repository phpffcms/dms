<?php 


namespace Apps\Controller\Front;

use Extend\Core\Arch\FrontAppController;

/**
 * Class DMS - document management system for VNIRO
 * @package Apps\Controller\Front
 */
class Dms extends FrontAppController
{
    const VERSION = '1.0.0';

    const ITEM_PER_PAGE = 25;

    private $appRoot;
    private $tplRoot;

    public function before()
    {
        $this->appRoot = realpath(__DIR__ . '/../../../');
        $this->tplRoot = realpath($this->appRoot . '/Apps/View/Front/default');

        $this->view->addFallback($this->tplRoot);
    }

    /**
     * Action index - list requests
     */
    public function actionIndex(): ?string 
    {
        return $this->view->render('dms/list', [], $this->tplRoot);
    }

    public function actionCreate(): ?string
    {
        return $this->view->render('dms/create', [], $this->tplRoot);
    }
}