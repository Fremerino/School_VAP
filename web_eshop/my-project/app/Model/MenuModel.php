<?php 
declare(strict_types=1);
namespace App\Model; 

use Nette ;
final class MenuModel {  
    public function getHeader(): array 
    { 
        return    [      $pole1 = [ 
            "title"=>"Titulek sekce",
            "name"=>["Tabulka velikosti","FAQs","O nás","Kontakty"]

        ],
        $pole2 = [ 
            "title"=>"Titulek sekce",
            "name"=>["Tabulka velikosti","FAQs","O nás","Kontakty"]

        ],
        $pole3 = [ 
            "title"=>"Titulek sekce",
            "name"=>["Tabulka velikosti","FAQs","O nás","Kontakty"]

        ]
    ];
 
}
public function getFooter(): array
{ 

    return ["Tabulka velikostí","FAQS","Kontakty"];

}
    }





?>