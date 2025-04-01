<?php 
declare(strict_types=1);
namespace App\Model; 
use App\Model\DatabaseModel;
use Nette\Database\Table\ActiveRow;
use Nette\Database\Table\Selection;
use Nette\Utils\ArrayHash;
use Nette ;
namespace App\Model; 
final class ProductModel extends DatabaseModel
 {  
    const
    TABLE_NAME = 'data',
    COLUMN_ID = 'ID',
    COLUMN_URL = 'url'; 
    public function getDataD() { 

        return $this->database->table(self::TABLE_NAME)->order(self::COLUMN_ID . ' DESC'); 

    }
    public function getData(): array 
    {  
        return [                       $produkt1 = [ 
            "name"=> "Boty",
            "description"=>"Perfektní pro sport i na obyčejné nošení",
            "velikost"=>"S",
            "barva"=>"Modrá",
            "url"=>"boty"
            ],
            $produkt2 = [ 
            "name"=> "Pláštěnka",
            "description"=>"Elegatní a durabilní",
            "velikost"=>"S",
            "barva"=>"Modrá",
            "url"=>"Pláštěnka"
            ],
                $produkt3 = [ 
            "name"=> "deštník",
            "description"=>"Z pravé plachty",
            "velikost"=>"S",
            "barva"=>"Modrá",
            "url"=>"deštník"
            ],
            $produkt4 = [ 
            "name"=> "Kopačky",
            "description"=>"Od mistra Kopačky",
            "velikost"=>"S",
            "barva"=>"Modrá",
            "url"=>"kopačky"
            ],
                $produkt5 = [ 
            "name"=> "Gumáky",
            "description"=>"Z velšského materiálu",
            "velikost"=>"S",
            "barva"=>"Modrá", 
            "url"=>"gumáky"
            ],
            $produkt6 = [ 
            "name"=> "Tričko",
            "description"=>"z pravé bavlny",
            "velikost"=>"S",
            "barva"=>"Modrá" ,
            "url"=>"tričko"
                ]
            
        ];
        


    } 
    public function getDetail($url): array 
    { 
        foreach($this->getDataD() as $data) 
        { 
                if($data["url"]==$url)
                { 

                    $alfa = [ 
                        "name"=> $data["nazev"],
                        "description"=>$data["popis"],
                        "velikost"=>$data["velikost"],
                        "barva"=>$data["barva"],
                    ];
                }

        }
        return $alfa;
    }

}