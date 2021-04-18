<?php

namespace Apps\Controller\Admin;

use Extend\Core\Arch\AdminController;
use Ffcms\Core\Managers\MigrationsManager;

/**
 * Class Dms
 * @package Apps\Controller\Admin
 */
class Dms extends AdminController 
{
    const VERSION = '1.0.0';

    const ITEM_PER_PAGE = 25;

    private $appRoot;
    private $tplRoot;

    /**
     * Initialize & perform default features
     */
    public function before()
    {
        $this->appRoot = realpath(__DIR__ . '/../../../');
        $this->tplRoot = realpath($this->appRoot . '/Apps/View/Admin/default');

        $this->view->addFallback($this->tplRoot);
    }

    public function actionIndex(): ?string 
    {
        return 'test';
    }

    /**
     * Perform app installation
     */
    public static function install()
    {
        $root = realpath(__DIR__ . '/../../../');
        // make migrations up
        $manager = new MigrationsManager($root . '/Private/Migrations');
        $manager->makeUp([
            'install_dms_list-2021-04-18-18-02-11.php'
        ]);
    }

}