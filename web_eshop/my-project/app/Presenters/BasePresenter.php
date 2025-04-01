<?php 
declare(strict_types=1); 
namespace App\Presenters;
use App\Model\MenuModel;
abstract class BasePresenter extends \Nette\Application\UI\Presenter{
    private MenuModel $menuModel; 
    public function injectDepencies(MenuModel $menuModel)
    { 
            $this->menuModel = $menuModel;
    }

    public function beforeRender(){
        parent::beforeRender(); 
        $this->template->info1 = $this->menuModel->getFooter()[0];
        $this->template->info2 = $this->menuModel->getFooter()[1];
        $this->template->info3 = $this->menuModel->getFooter()[2];
        $this->template->footer = $this->menuModel->getHeader();
    }
    }
