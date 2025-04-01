<?php

declare(strict_types=1);

namespace App\Presenters;

use Nette;
use Nette\Application\UI\Presenter;

final class ProductPresenter extends BasePresenter
{ 
    public function __construct(
		
        ) {
        }
        public function actionDefault(): void{ 
            $produkt1 = [ 
                "name"=> "Boty",
                "description"=>"Perfektní pro sport i na obyčejné nošení",
                "velikost"=>"S",
                "barva"=>"Modrá"
            ];
            $produkt2 = [ 
                "name"=> "Pláštěnka",
                "description"=>"Elegatní a durabilní",
                "velikost"=>"S",
                "barva"=>"Modrá"
            ];
            $produkt3 = [ 
                "name"=> "deštník",
                "description"=>"Z pravé plachty",
                "velikost"=>"S",
                "barva"=>"Modrá"
            ]; 
            $produkt4 = [ 
                "name"=> "Kopačky",
                "description"=>"Od mistra Kopačky",
                "velikost"=>"S",
                "barva"=>"Modrá"
            ];
            $produkt5 = [ 
                "name"=> "Gumáky",
                "description"=>"Z velšského materiálu",
                "velikost"=>"S",
                "barva"=>"Modrá"
            ];
            $produkt6 = [ 
                "name"=> "Tričko",
                "description"=>"z pravé bavlny",
                "velikost"=>"S",
                "barva"=>"Modrá"
            ];

            
            $this->template->card = [ $produkt1, $produkt2, $produkt3, $produkt4, $produkt5, $produkt6]; 
           
} 
}
