<?php

declare(strict_types=1);

namespace App\Presenters;

use Nette;


final class HomePresenter extends BasePresenter
{ 
    public function __construct(
		
	) {
	}
    public function actionDefault(): void{ 
    
        $this->template->pageTitle = "super E-shop";
    } 
    public function mainAction($url)
    {
        $this->template->id = $id;
    }
    
}
