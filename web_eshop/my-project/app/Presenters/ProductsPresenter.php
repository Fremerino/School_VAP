<?php

declare(strict_types=1);

namespace App\Presenters;

use Nette;
use App\Model\ProductModel;

final class ProductsPresenter extends BasePresenter
{  
    private ProductModel $productModel; 
    public function __construct(
            ProductModel $productModel
        ) {
            $this->productModel = $productModel;

        }

        public function actionDefault(): void{ 
            $this->template->card = $this->productModel->getDataD();
           
        }  
        public function actionDetail ($url): void
        { 
        
            $this->template->info = $url;
            $this->template->card = $this->productModel->getDetail($url);
           
        } 
}
